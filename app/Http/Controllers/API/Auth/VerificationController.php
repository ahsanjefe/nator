<?php

namespace App\Http\Controllers\Api\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Carbon\Carbon;

class VerificationController extends Controller
{
    public function verifyEmail(Request $request)
    {
        $verificationToken = $request->query('token');
        $user = User::where('verification_token', $verificationToken)->first();
        if ($user) {
            $user->email_verified_at = Carbon::now();
            $user->verification_token = null;
            $user->save();
            return ['message', 'Email verified successfully. You can now log in.'];
        } else {
            return ['message', 'Invalid token'];
        }
    }
}
