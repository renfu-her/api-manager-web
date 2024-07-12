<?php

namespace App\Http\Controllers\API;

use App\Models\ApiResponse;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ApiResponseController extends Controller
{
    public function index()
    {
        return ApiResponse::all();
    }

    public function store(Request $request)
    {
        $apiResponse = ApiResponse::create($request->all());
        return response()->json($apiResponse, 201);
    }

    public function show(ApiResponse $apiResponse)
    {
        return $apiResponse;
    }

    public function update(Request $request, ApiResponse $apiResponse)
    {
        $apiResponse->update($request->all());
        return response()->json($apiResponse, 200);
    }

    public function destroy(ApiResponse $apiResponse)
    {
        $apiResponse->delete();
        return response()->json(null, 204);
    }
}
