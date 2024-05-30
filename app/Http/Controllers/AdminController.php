<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use App\Models\admin_registration;
use Illuminate\Support\Facades\Hash;

class AdminController extends Controller
{
    public function register(Request $request){
        $request->validate([
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:8',
        ]);

        $user = admin_registration::create([
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'phone' => $request->phone,
            'otp' => 123456
        ]);

        return response()->json([
            'status' => true,
            'message' => 'registration successful',
            'token' => $user->createToken('api-token')->plainTextToken
        ],200);
    }


    public function login(Request $request){
        $email= $request->email;
        $validator = Validator::make($request->all(), [
            'email' => 'required|email|exists:admin_login, email',
            'password' => 'required|min:6',
        ]);
        $count= admin_login::where('email', $email)->count();
        //return $comment;
        if($count > 0)
        {
            return view('admin.index');
        }
        else{
            return response()->json([
                'status' => false,
                'message' => 'invalid details',
            ], 401);
        }
        /*if (!Auth::attempt($request->only('email', 'password'))) {
            return response()->json(['message' => 'Invalid login details'], 401);
        }*/
    }
}
