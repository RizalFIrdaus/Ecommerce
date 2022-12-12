<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Province;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Str;


class MapController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $count = Province::all();
        if ($request->has('search')) {
            $maps = Province::where('title', 'LIKE', '%' . $request->search . '%')->paginate(10);
        } else {
            $maps = Province::paginate(10);
        }
        return view('dashboard.map.index', compact('maps', 'count'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.map.map_add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $map = new Province();
        $map->title = $request->title;
        $map->slug = Str::slug($request->title);
        $map->vector = $request->vector;
        $map->description = '';
        $map->kebudayaan = '';
        $map->makanan = '';
        if ($request->file('image')) {
            $file = $request->file('image');
            $filename = date('YmdHi') . $file->getClientOriginalName();
            $file->move(public_path('image/uploads/provinces/'), $filename);
            $map->image = $filename;
        }
        $map->save();
        return redirect('admin/map');
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
        $province = Province::find($id);
        return view('dashboard.map.map_update', compact('province'));
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
        $map = Province::find($id);
        $map->title = $request->title;
        $map->slug = Str::slug($request->title);
        $map->vector = $request->vector;
        $map->description = '';
        $map->kebudayaan = '';
        $map->makanan = '';
        if ($request->file('image')) {
            $path = 'image/uploads/provinces/' . $map->image;
            if (file::exists($path)) {
                file::delete($path);
            }
            $file = $request->file('image');
            $filename = date('YmdHi') . $file->getClientOriginalName();
            $file->move(public_path('image/uploads/provinces/'), $filename);
            $map->image = $filename;
        }
        $map->update();
        return redirect('admin/map');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $map = Province::find($id);
        $map->delete();
        return redirect('admin/map');
    }
}
