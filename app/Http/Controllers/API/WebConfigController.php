<?php

namespace App\Http\Controllers\API;

use App\Models\WebConfig;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class WebConfigController extends Controller
{
    public function index()
    {
        return WebConfig::all();
    }

    public function store(Request $request)
    {
        $webConfig = WebConfig::create($request->all());
        return response()->json($webConfig, 201);
    }

    public function show(WebConfig $webConfig)
    {
        return $webConfig;
    }

    public function update(Request $request, WebConfig $webConfig)
    {
        $webConfig->update($request->all());
        return response()->json($webConfig, 200);
    }

    public function destroy(WebConfig $webConfig)
    {
        $webConfig->delete();
        return response()->json(null, 204);
    }
}
