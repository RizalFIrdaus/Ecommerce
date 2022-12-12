<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

use App\Models\Banner;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Str;


class BannerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $banner = Banner::paginate(10);
        return view('dashboard.banner.index', compact('banner'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        return view('dashboard.banner.banner_add');
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
            'image' => 'required|mimes:jpeg,jpg,png',

        ]);

        $banner = new banner();
        $banner->name = $request->name;
        $banner->slug = Str::slug($request->name);
        if ($request->file('image')) {
            $file = $request->file('image');
            $filename = date('YmdHi') . $file->getClientOriginalName();
            $file->move(public_path('image/uploads/banner/'), $filename);
            $banner->image = $filename;
        }
        $banner->save();
        return redirect('/admin/banner')->with('success', 'Data successfully Added');
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
        $banner = Banner::find($id);
        return view('dashboard.banner.banner_update', compact('banner'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\SHttp\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'image' => 'mimes:jpeg,jpg,png',

        ]);

        $banner = Banner::find($id);
        $banner->name = $request->name;
        $banner->slug = Str::slug($request->name);
        if ($request->file('image')) {
            $path = 'image/uploads/banner/' . $banner->image;
            if (file::exists($path)) {
                file::delete($path);
            }
            $file = $request->file('image');
            $filename = date('YmdHi') . $file->getClientOriginalName();
            $file->move('image/uploads/banner/', $filename);
            $banner->image = $filename;
        } else {
            $banner->image = $banner->image;
        }
        $banner->save();
        return redirect('admin/banner')->with('success', "Data successfuly updated");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $banner = Banner::find($id);
        $path = 'image/uploads/banner/' . $banner->image;
        if (File::exists($path)) {
            File::delete($path);
        }
        $banner->delete();
        return redirect('admin/banner')->with('success', 'Data successfully deleted');
    }
}
