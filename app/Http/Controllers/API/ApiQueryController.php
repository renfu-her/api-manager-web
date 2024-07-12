<?php

namespace App\Http\Controllers\API;

use App\Models\ApiQuery;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ApiQueryController extends Controller
{
    public function index()
    {
        return ApiQuery::all();
    }

    public function store(Request $request)
    {
        $apiQuery = ApiQuery::create($request->all());
        return response()->json($apiQuery, 201);
    }

    public function show(ApiQuery $apiQuery)
    {
        return $apiQuery;
    }

    public function update(Request $request, ApiQuery $apiQuery)
    {
        $apiQuery->update($request->all());
        return response()->json($apiQuery, 200);
    }

    public function destroy(ApiQuery $apiQuery)
    {
        $apiQuery->delete();
        return response()->json(null, 204);
    }
}
