<?php

namespace App\Http\Controllers\Api\Users;

use App\Http\Controllers\Controller;
use App\Services\UsersService;
use App\Traits\ParamsHelper;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Response;

class UsersController extends Controller
{
	use ParamsHelper;

	public function __construct(
		private readonly UsersService $usersService
	)
	{}

    /**
     * Display a listing of the resource.
     */
    public function index(Request $request) : JsonResponse
    {
        $queryParams = $this->createPaginationParams($request->query());
        $result = $this->usersService->getPaginated($queryParams);

		return response()->json($result, Response::HTTP_OK);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }

	/**
	 * Approve conductor account
	 */
	public function approveConductorAccount(string $id) : JsonResponse
	{
		$result = $this->usersService->approveConductorAccount($id);

		return response()->json($result, Response::HTTP_OK);
	}
}
