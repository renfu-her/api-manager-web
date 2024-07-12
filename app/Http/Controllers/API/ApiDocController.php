<?php

namespace App\Http\Controllers\API;

use App\Models\ApiDoc;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ApiDocController extends Controller
{
    public function index()
    {
        return ApiDoc::all();
    }

    public function store(Request $request)
    {
        $apiDoc = ApiDoc::create($request->all());
        return response()->json($apiDoc, 201);
    }

    public function show(ApiDoc $apiDoc)
    {
        return $apiDoc;
    }

    public function update(Request $request, ApiDoc $apiDoc)
    {
        $apiDoc->update($request->all());
        return response()->json($apiDoc, 200);
    }

    public function destroy(ApiDoc $apiDoc)
    {
        $apiDoc->delete();
        return response()->json(null, 204);
    }
}
