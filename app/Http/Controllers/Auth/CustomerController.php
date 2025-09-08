<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\UserDocument;


class CustomerController extends Controller
{
    public function showCustomerDocuments()
    {
        $customers = User::where('role', 'customer')->get();
        return view('userdocuments', compact('customers'));
    }
}
