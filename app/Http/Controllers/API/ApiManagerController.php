<?php

namespace App\Http\Controllers\API;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Http;

class ApiManagerController extends Controller
{
    public function sendRequest(Request $request)
    {
        $method = $request->input('method');
        $url = $request->input('url');
        $headers = $request->input('headers', []);
        $body = $request->input('body', []);

        $response = Http::withHeaders($headers)->send($method, $url, [
            'body' => $body,
        ]);

        return response()->json([
            'status' => $response->status(),
            'data' => $response->json(),
        ]);
    }
}
