<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\LoginRequest;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function authenticate(LoginRequest $request)
    {
        $request->authenticate();

        $user = auth()->user();

        return response()->json([
            'message' => 'Login successful',
            'data' => $user->append('token')
        ]);
    }
}
