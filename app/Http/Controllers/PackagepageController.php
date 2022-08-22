<?php

namespace App\Http\Controllers;

use App\Models\Package;
use Illuminate\Http\Request;

use function PHPUnit\Framework\returnSelf;

class PackagepageController extends Controller
{
    public function index()
    {
        $packages = Package::with('services')->get();
        // return $packages;
        return view('frontend.package-page', compact('packages'));
    }

    public function singlePackage(Request $request)
    {
        return "single package";
    }
}
