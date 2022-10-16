<?php

namespace App\Http\Controllers;

use App\Models\Package;
use App\Models\Slider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomepageController extends Controller
{
    public function index()
    {
        // $payLink = Auth::user()->charge(12, 'paddle test');
        $sliders = Slider::latest()->get();
        $packages = Package::with('services')->latest()->take(3)->get();
        // return $packages;
        return view('frontend.homepage', compact('sliders', 'packages'));
    }
}
