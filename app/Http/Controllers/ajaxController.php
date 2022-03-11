<?php

namespace App\Http\Controllers;

use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class ajaxController extends Controller
{
    /**
     * Create a new controller instance.
     *
     */
    public function ajaxRequest()
    {
        return view('ajaxRequest');
    }

    /**
     * Get post request data.
     *
     * @param Request $request
     * @return JsonResponse
     */
    public function ajaxRequestPost(Request $request): JsonResponse
    {
        $input = $request->all();

        Log::info('test', ['data' => $input]);

        return response()->json(['success'=>'Got Simple Ajax Request.']);
    }
}
