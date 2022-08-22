<?php

namespace App\Http\Controllers;

use App\Models\Slider;
use Illuminate\Http\Request;

class HomepageController extends Controller
{
    public function index()
    {
        $sliders = Slider::latest()->get();
        return view('frontend.homepage', compact('sliders'));
    }
}
