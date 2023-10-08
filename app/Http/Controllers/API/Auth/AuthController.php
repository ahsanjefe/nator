<?php

namespace App\Http\Controllers\Api\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Str;
use App\Mail\VerificationEmail;
use Illuminate\Support\Facades\Mail;

class AuthController extends Controller
{
    public function register(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|unique:users|max:255',
            'password' => 'required|string|min:6|max:255|confirmed',
        ]);

        if ($validator->fails()) {
            return response(['errors' => $validator->errors()], 400);
        }

        try {
            $user = new User();
            $user->name = $request->name;
            $user->email = $request->email;
            $user->password = Hash::make($request->password);
            $verificationToken = Str::random(60); 
            $user->verification_token = $verificationToken;
            $user->save();
            // Send verification email
            // $verificationLink = route('verification.verify', ['token' => $user->verification_token]);
            // Mail::to($user->email)->send(new VerificationEmail($user, $verificationLink));

            // $token = $user->createToken('MyApp')->plainTextToken;
            $token = $user->createToken('MyApp', [], now()->addDays(1))->plainTextToken;

            return response(['message' => 'User created successfully', 'data' => ['token' => $token, 'user' => $user]], 201);
        } catch (\Throwable $th) {
            return response(['message' => $th->getMessage()], 500);
        }
    }

    public function login(Request $request)
    {
        $response = array('response' => '', 'success' => true);
        $validator = Validator::make($request->all(), [
            'email' => 'required',
            'password' => 'required',
        ]);

        if ($validator->fails()) {
            $response['response'] = $validator->errors();
            $response['success'] = false;
        } else {
            $credentials = $request->only('email', 'password');
            if (Auth::attempt($credentials)) {
                $user = Auth::user(); // Retrieve the authenticated user
                // $token = $request->user()->createToken('MyApp')->plainTextToken;
                $token = $request->user()->createToken('MyApp', [], now()->addDays(1))->plainTextToken;
                $response['data'] = ['token' => $token, 'user' => $user];
            } else {
                $response['response'] = 'Invalid email or Password';
                $response['success'] = false;
            }
        }
        return $response;
    }

    public function logout(Request $request)
    {
        try {
            $request->user()->currentAccessToken()->delete();
            return response(['message' => 'Logged out'], 200);
        } catch (\Exception $e) {
            Log::error($e->getMessage());
            return response(['message' => 'Logout failed'], 500);
        }
    }
    public function getProfile(Request $request)
    {
        return response(['user' => $request->user()], 200);
    }

    public function updateProfile(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'string|max:255',
        ]);

        if ($validator->fails()) {
            return response(['errors' => $validator->errors()], 400);
        }

        $user = $request->user();
        $user->name = $request->name;
        $user->save();

        return response(['user' => $user], 200);
    }
}
