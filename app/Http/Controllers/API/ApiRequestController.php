<?php

namespace App\Http\Controllers\API;

use App\Models\ApiRequest;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ApiRequestController extends Controller
{
    public function index()
    {
        return ApiRequest::all();
    }

    public function store(Request $request)
    {
        $apiRequest = ApiRequest::create($request->all());
        return response()->json($apiRequest, 201);
    }

    public function show(ApiRequest $apiRequest)
    {
        return $apiRequest;
    }

    public function update(Request $request, ApiRequest $apiRequest)
    {
        $apiRequest->update($request->all());
        return response()->json($apiRequest, 200);
    }

    public function destroy(ApiRequest $apiRequest)
    {
        $apiRequest->delete();
        return response()->json(null, 204);
    }
}
