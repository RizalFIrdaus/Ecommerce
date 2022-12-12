<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Flavor;
use Illuminate\Http\Request;

class FlavorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $flavors = Flavor::paginate(10);
        return view('dashboard.variant.flavor.index', compact('flavors'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.variant.flavor.flavor_add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $flavor = new Flavor;
        $flavor->name = $request->name;
        $flavor->save();
        return redirect('admin/flavor');
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
        $flavor = Flavor::find($id);
        return view('dashboard.variant.flavor.flavor_update', compact('flavor'));
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
        $flavor = Flavor::find($id);
        $flavor->name = $request->name;
        $flavor->update();
        return redirect('admin/flavor');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $flavor = Flavor::find($id);
        $flavor->delete();
        return redirect('admin/flavor');
    }
}
