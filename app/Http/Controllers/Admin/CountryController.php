<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Country;
use App\Models\Zona;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class CountryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if ($request->has('search')) {
            $countries = Country::orderBy("name", "asc")->where('name', 'LIKE', '%' . $request->search . '%')->paginate(10);
        } else {
            $countries = Country::orderBy("name", "asc")->paginate(10);
        }

        Session::put('current_page', request()->fullUrl());
        $count = Country::all();
        return view('dashboard.country.index', compact('count', 'countries'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $zonas = Zona::all();
        return view('dashboard.country.country_add', compact('zonas'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $country = new Country;
        $country->zona_id = $request->zona_id;
        $country->name = $request->name;
        $country->code = $request->code;
        $country->save();

        if (session('current_page')) {
            return redirect(session('current_page'));
        }
        return redirect('admin/country');
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
        $zonas = Zona::all();
        $country = Country::find($id);
        return view('dashboard.country.country_update', compact('zonas', 'country'));
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
        $country = Country::find($id);
        $country->zona_id = $request->zona_id;
        $country->name = $request->name;
        $country->code = $request->code;
        $country->update();

        if (session('current_page')) {
            return redirect(session('current_page'));
        }
        return redirect('admin/country');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $country = Country::find($id);
        $country->delete();
        return redirect()->back();
    }
}
