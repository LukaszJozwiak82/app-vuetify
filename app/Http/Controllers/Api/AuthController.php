<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function login(Request $request)
    {
        $accessToken = auth()->user()->createToken('authToken')->accessToken;
        return response(['user' => auth()->user(),'access_token' => $accessToken]); 
    }
}
