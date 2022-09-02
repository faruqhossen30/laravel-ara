<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PaymentController extends Controller
{
    public function pay()
    {
        $payLink = Auth::user()->charge(12.5, 'paddle test');

        // return $payLink;
        // return view('frontend.billing', ['paylink'=>$payLink]);
        return view('frontend.billing', compact('payLink'));
    }
}
