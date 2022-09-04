<?php

namespace App\Http\Controllers;

use App\Models\Package;
use Illuminate\Http\Request;

use function PHPUnit\Framework\returnSelf;

class PackagepageController extends Controller
{
    public function index()
    {
        $day = null;
        if(isset($_GET['day'])){
            $day = $_GET['day'];
        }

        $type = null;
        if(isset($_GET['type'])){
            $type = $_GET['type'];
        }


        $packages = Package::with('services')
            ->when($day, function($query, $day){
                return $query->where('day', $day);
            })
            ->when($type, function($query, $type){
                return $query->where('type', $type);
            })
            ->paginate(15);
        // return $packages;
        return view('frontend.package-page', compact('packages'));
    }

    public function singlePackage(Request $request, $id)
    {
        $package = Package::with('services')->firstWhere('id', $id);
        return view('frontend.single-package', compact('package'));
    }
}
