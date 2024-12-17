<?php

namespace App\Http\Controllers\Api\Trips;

use App\Http\Controllers\Controller;
use App\Services\TripsService;
use App\Traits\ParamsHelper;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Response;

class TripsController extends Controller
{
	use ParamsHelper;

	public function __construct(
		private readonly TripsService $tripsService
	)
	{}

    /**
     * Display a listing of the resource.
     */
    public function index(Request $request) : JsonResponse
    {
		$queryParams = $this->createPaginationParams($request->query());
        $result = $this->tripsService->getPaginated($queryParams);

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
        $result = $this->tripsService->getById($id);

		return response()->json($result, Response::HTTP_OK);

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
}
