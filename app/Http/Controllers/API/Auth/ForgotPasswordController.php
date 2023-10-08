<?php

namespace App\Http\Controllers\Api\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Password;

class ForgotPasswordController extends Controller
{
    public function sendResetLinkEmail(Request $request)
    {
        $request->validate(['email' => 'required|email']);
        $response = Password::sendResetLink(
            $request->only('email')
        );
        if ($response == Password::RESET_LINK_SENT) {
            return response()->json(['message' => 'Password reset link sent']);
        } else {
            return response()->json(['error' => 'Unable to send reset link'], 400);
        }
    }
    public function resetPassword(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'token' => 'required',
            'password' => 'required|confirmed|min:8',
        ]);

        $response = Password::reset(
            $request->only('email', 'password', 'password_confirmation', 'token'),
            function ($user, $password) {
                $user->forceFill([
                    'password' => bcrypt($password),
                ])->save();
            }
        );

        if ($response == Password::PASSWORD_RESET) {
            return response()->json(['message' => 'Password reset successfully']);
        } else {
            return response()->json(['error' => 'Unable to reset password'], 400);
        }
    }
}
