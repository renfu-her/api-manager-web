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
        $validatedData = $request->validate([
            'menu_id' => 'required',
            'name' => 'required',
            'prefix_url' => 'required',
            'status' => 'required|boolean',
        ]);

        $apiCategory = ApiCategory::create($validatedData);
        return response()->json($apiCategory, 201);
    }

    public function show($id)
    {
        $apiCategory = ApiCategory::findOrFail($id);
        return response()->json($apiCategory);
    }

    public function update(Request $request, $id)
    {
        $apiCategory = ApiCategory::findOrFail($id);
        $apiCategory->update($request->all());
        return response()->json($apiCategory);
    }

    public function destroy($id)
    {
        ApiCategory::destroy($id);
        return response()->json(null, 204);
    }
}
