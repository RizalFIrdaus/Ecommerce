<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Cargo;
use App\Models\Country;
use App\Models\Zona;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;

class CargoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $count = Cargo::all();
        $cargos = Cargo::paginate(9);
        Session::put('current_page', request()->fullUrl());
        return view('dashboard.cargo.index', compact('count', 'cargos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $countries = Country::all();
        $zonas = Zona::all();
        return view('dashboard.cargo.cargo_add', compact('countries', 'zonas'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $cargo = new Cargo();
        $cargo->zona_id = $request->zona_id;
        $cargo->name = $request->name;
        $cargo->min_weight = $request->min_weight;
        $cargo->max_weight = $request->max_weight;
        $cargo->price = $request->price;
        $cargo->price_bersama = $request->price_bersama;
        $cargo->save();
        if (session('current_page')) {
            return redirect(session('current_page'));
        }
        return redirect('admin/cargo');
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
        $cargo = Cargo::find($id);
        $zonas = Zona::all();
        return view('dashboard.cargo.cargo_update', compact('cargo', 'zonas'));
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
        $cargo = Cargo::find($id);
        $cargo->zona_id = $request->zona_id;
        $cargo->name = $request->name;
        $cargo->min_weight = $request->min_weight;
        $cargo->max_weight = $request->max_weight;
        $cargo->price = $request->price;
        $cargo->price_bersama = $request->price_bersama;
        $cargo->save();
        if (session('current_page')) {
            return redirect(session('current_page'));
        }
        return redirect('admin/cargo');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $cargo = Cargo::find($id);
        $cargo->delete();
        return redirect('admin/cargo');
    }
}
