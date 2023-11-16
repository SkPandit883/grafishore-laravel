<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Repositories\Implementations\CarRepository;
use App\Services\Response;

class CarController extends Controller
{

    public function __construct(protected CarRepository $carRepository)
    {

    }

    /**
     * @OA\Get(
     *     path="/api/car",
     *     tags={"Car"},
     *     summary="Get All cars",
     *     operationId="all",
     *
     *     @OA\Response(
     *         response=200,
     *         description="Operation Successful",
     *
     *     ),
     *     @OA\Response(
     *         response=400,
     *         description="Invalid status value"
     *     ),
     *
     * )
     */

    public function all()
    {

        try {
            return Response::success($this->carRepository->all());
        } catch (\Throwable $th) {
            return Response::error($th->getMessage());
        }

    }

    /**
     * @OA\Get(
     *     path="/api/car/{id}",
     *     tags={"Car"},
     *     summary="Get a car by ID",
     *     operationId="findCarById",
     *     @OA\Parameter(
     *         name="id",
     *         in="path",
     *         required=true,
     *         description="ID of the car to retrieve",
     *         @OA\Schema(
     *             type="integer",
     *             format="int64"
     *         )
     *     ),
     *     @OA\Response(
     *         response=200,
     *         description="Operation Successful"
     *     ),
     *     @OA\Response(
     *         response=404,
     *         description="Car not found"
     *     ),
     * )
     * @OA\Tag(name="Car")
     */

    public function find(int $id)
    {
        try {
            return Response::success($this->carRepository->findById($id));
        } catch (\Throwable $th) {
            return Response::error($th->getMessage());
        }

    }
}
