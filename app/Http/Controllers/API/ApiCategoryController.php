<?php

namespace App\Http\Controllers\API;

use App\Models\ApiCategory;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ApiCategoryController extends Controller
{
    public function index()
    {
        return ApiCategory::all();
    }

    public function store(Request $request)
    {
        $apiCategory = ApiCategory::create($request->all());
        return response()->json($apiCategory, 201);
    }

    public function show(ApiCategory $apiCategory)
    {
        return $apiCategory;
    }

    public function update(Request $request, ApiCategory $apiCategory)
    {
        $apiCategory->update($request->all());
        return response()->json($apiCategory, 200);
    }

    public function destroy(ApiCategory $apiCategory)
    {
        $apiCategory->delete();
        return response()->json(null, 204);
    }
}
