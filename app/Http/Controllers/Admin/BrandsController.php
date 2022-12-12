<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Brands;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Str;
use Maatwebsite\Excel\Facades\Excel;
use App\Imports\BrandImport;
use App\Imports\FirstSheet;

class BrandsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function import(Request $request)
    {
        Excel::import(new FirstSheet, $request->file('excel_brand'));
        return redirect()->back();
    }

    public function index(Request $request)
    {
        if ($request->has('search')) {
            $brands = Brands::orderBy('id', 'desc')->where('name', 'LIKE', '%' . $request->search . '%')->paginate(5);
        } else {
            $brands = Brands::orderBy('id', 'desc')->paginate(5);
        }
        return view('dashboard.brands.index', compact('brands'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::all();
        return view('dashboard.brands.brands_add', compact('categories'));
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
            'name' => 'required',
            'image' => 'mimes:jpeg,jpg,png',

        ]);
        $brands = new Brands();
        $brands->category_id = $request->category_id;
        $brands->name = $request->name;
        $brands->slug = Str::slug($request->name);
        if ($request->file('image')) {
            $file = $request->file('image');
            $filename = date('YmdHi') . $file->getClientOriginalName();
            $file->move(public_path('image/uploads/brands/'), $filename);
            $brands->image = $filename;
        }
        $brands->save();
        return redirect('/admin/brands')->with('success', 'Data successfully Added');
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
        $brands = Brands::find($id);
        $categories = Category::all();
        return view('dashboard.brands.brands_update', compact('brands', 'categories'));
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
            'name' => 'required',
            'image' => 'mimes:jpeg,jpg,png',

        ]);

        $brands = Brands::find($id);
        $brands->name = $request->name;
        $brands->category_id = $request->category_id;
        $brands->slug = Str::slug($request->name);
        if ($request->file('image')) {
            $path = 'image/uploads/brands/' . $brands->image;
            if (file::exists($path)) {
                file::delete($path);
            }
            $file = $request->file('image');
            $filename = date('YmdHi') . $file->getClientOriginalName();
            $file->move('image/uploads/brands/', $filename);
            $brands->image = $filename;
        } else {
            $brands->image = $brands->image;
        }
        $brands->save();
        return redirect('admin/brands')->with('success', "Data successfuly updated");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $brands = Brands::find($id);
        $path = 'image/uploads/brands/' . $brands->image;
        if (File::exists($path)) {
            File::delete($path);
        }
        $brands->delete();
        return redirect('admin/brands')->with('success', 'Data successfully deleted');
    }
}
