<?php

namespace App\Services;

use App\Services\UsersService;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Symfony\Component\HttpKernel\Exception\UnauthorizedHttpException;

class AuthService
{
	public function __construct(
		private readonly UsersService $usersService
	)
	{}

	public function authenticate($credentials)
    {
        if (Auth::attempt($credentials)) {
            $user = Auth::user();

            /**
             * @var \App\Models\User::class $user
             */
            $token = $user->createToken(
                time(), ['*'], now()->addHours(24)
            )->plainTextToken;

            return [
                'user' 	=> $user,
                'token' => $token
            ];
        }

        throw new UnauthorizedHttpException('Bearer', 'INVALID_CREDENTIALS');
    }

	public function createPassengerAccount($accountData)
	{
		$accountData['password'] = Hash::make($accountData['password']);

		$account = $this->usersService->model->query()->create($accountData);

		return $account;
	}
}
