<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Validator;

class AuthController extends Controller
{
    public function login()
    {
        if(Auth::attempt(['username' => request('username'), 'password' => request('password')])){
            $user = Auth::user(); 
            $result['token'] =  $user->createToken('authToken')-> accessToken; 
            $result['nama'] =  $user->name;

            $response = [
                'success' => true,
                'data'    => $result,
                'message' => "login successfully",
            ];
    
            return response()->json($response, 200);
        } 
        else{ 

            $response = [
                'success' => false,
                'message' => "Unauthorised",
            ];
    
            return response()->json($response, 404);
        } 
    }

    public function logout(Request $request)
    {
        $request->user()->token()->revoke();
        return response()->json([
            'message' => 'Successfully logged out'
        ]);
    }
}
