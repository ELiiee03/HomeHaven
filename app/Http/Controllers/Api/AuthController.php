<?php

namespace App\Http\Controllers\Api;

use App\Models\User;
use App\Http\Requests\UserRequest;
use App\Http\Controllers\Controller;
use Illuminate\Support\facades\Hash;
use Illuminate\Validation\ValidationException;




class AuthController extends Controller
{
    /**
     * login using  the specified resource.
     */
    public function login(UserRequest $request)
    {
        
        $user = User::where('email', $request->email)->first();

        if (!$user || !Hash::check($request->password, $user->password)) {
            throw ValidationException::withMessages([
                'email' => ['The provided credentials are incorrect.'],
            ]);
        }

        $response =[
            'user' => $user,
            'token' => $user->createToken($request->email)->plainTextToken
        ];


        return $response;
    }


    public function logout()
    {
        return false;
    }
}
