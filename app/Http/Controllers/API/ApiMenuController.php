<?php

namespace App\Http\Controllers\API;

use App\Models\ApiMenu;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ApiMenuController extends Controller
{
    public function index()
    {
        return ApiMenu::all();
    }

    public function store(Request $request)
    {
        $apiMenu = ApiMenu::create($request->all());
        return response()->json($apiMenu, 201);
    }

    public function show(ApiMenu $apiMenu)
    {
        return $apiMenu;
    }

    public function update(Request $request, ApiMenu $apiMenu)
    {
        $apiMenu->update($request->all());
        return response()->json($apiMenu, 200);
    }

    public function destroy(ApiMenu $apiMenu)
    {
        $apiMenu->delete();
        return response()->json(null, 204);
    }
}
