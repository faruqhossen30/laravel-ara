<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Package;
use App\Models\PackageService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
class PackageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $packages = Package::get();
        return view('admin.package.index', compact('packages'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.package.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name'=> 'required'
        ]);

        $package = Package::create([
            'user_id'=> Auth::user()->id,
            'name'   => $request->name,
            'day_id' => $request->day_id,
            'type'   => $request->type,
            'price'   => $request->price
        ]);

        if(!empty($request->service)){
            foreach($request->service as $service){
                PackageService::create([
                    'package_id' => $package->id,
                    'service' => $service
                ]);
            }
        }

        return redirect()->route('package.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $package = Package::firstWhere('id', $id);
        $services = PackageService::where('package_id', $package->id)->get();

        // return $services;


        return view('admin.package.edit', compact('package', 'services'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'name'=> 'required'
        ]);

        $package = Package::firstWhere('id', $id)->update([
            'name'   => $request->name,
            'day_id' => $request->day_id,
            'type'   => $request->type,
            'price'   => $request->price,
        ]);

        if(!empty($request->service)){
            PackageService::where('package_id', $id)->delete();
            foreach($request->service as $service){
                PackageService::create([
                    'package_id' => $package->id,
                    'service' => $service
                ]);
            }
        }

        return redirect()->route('package.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Package::where('id', $id)->delete();
        return redirect()->route('package.index');
    }
}
