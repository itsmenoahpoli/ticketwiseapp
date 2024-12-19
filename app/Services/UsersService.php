<?php

namespace App\Services;

use App\Models\User;
use App\Repositories\UsersRepository;

class UsersService extends UsersRepository
{
	public function __construct(User $model)
    {
        parent::__construct($model, []);
    }

	public function approveConductorAccount(int $id)
	{
		$this->model->findOrFail($id)->update(['is_conductor_account_approved' => true]);

		return $this->getById($id);
	}
}
