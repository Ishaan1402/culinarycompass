<?php

namespace App\Http\Controllers\api;

use App\Models\Customer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Routing\Controller as Controller;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class CustomerController extends Controller
{

    public function signup(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'email' => 'required|email|unique:customer',
            'password' => ['required', 'min:6', 'regex:/[0-9]/'],
        ], [
            'password.min' => 'The password must be at least :min characters long.',
            'password.regex' => 'The password must contain at least one number.',
        ]);

        if ($validator->fails()) {
            return response()->json(['error' => $validator->errors()], 422);
        }

        $user = Customer::create([
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        return response()->json(['user' => "created"], 201);
    }

    public function login(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'email' => 'required|email',
            'password' => 'required|min:6',
        ]);

        if ($validator->fails()) {
            return response()->json(['error' => $validator->errors()], 422);
        }


        $email = $request->input('email');
        $user = Customer::where('email', $email)
                ->where('status', 1)
                ->first();

        if ($user === null) {
            return response()->json([
                'error' => [
                    'login' => [
                        "Invalid Credentials"
                    ]
                ],
            ], 422);
        }
        if (!Hash::check($request->input('password'), $user->password)) {
            return response()->json([
                'error' => [
                    'login' => [
                        "Invalid Credentials"
                    ]
                ],
            ], 422);
        }

        Auth::guard('web')->login($user);

        return response()->json(['user' => "success"], 201);
    }
}
