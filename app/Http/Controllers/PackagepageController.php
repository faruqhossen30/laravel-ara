<?php

namespace App\Http\Controllers;

use App\Models\Package;
use Illuminate\Http\Request;

use function PHPUnit\Framework\returnSelf;

class PackagepageController extends Controller
{
    public function index()
    {
        $packages = Package::with('services')->paginate(15);
        // return $packages;
        return view('frontend.package-page', compact('packages'));
    }

    public function singlePackage(Request $request, $id)
    {
        $package = Package::with('services')->firstWhere('id', $id);
        return view('frontend.single-package', compact('package'));
    }
}
