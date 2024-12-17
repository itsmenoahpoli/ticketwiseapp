<?php

namespace App\Http\Controllers\Api\Trips;

use App\Http\Controllers\Controller;
use App\Services\TripsService;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Response;

class TripsController extends Controller
{
	public function __construct(
		private readonly TripsService $tripsService
	)
	{}

    /**
     * Display a listing of the resource.
     */
    public function index() : JsonResponse
    {
        $result = $this->tripsService->getUnpaginated();

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
}
