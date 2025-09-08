<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\FirmProfile;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class FirmController extends Controller
{
      public function show($user_id)
    {
        $firm = FirmProfile::where('user_id', $user_id)->first();

        if (!$firm) {
            return redirect()->back()->with('error', 'Firm profile not found.');
        }

        return view('firmprofile', compact('firm'));
    }
}