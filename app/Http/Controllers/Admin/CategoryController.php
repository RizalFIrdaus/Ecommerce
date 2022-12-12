<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Str;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $count = Category::all();
        if ($request->has('search')) {

            $category = Category::orderBy('id', 'desc')->where('name', 'LIKE', '%' . $request->search . '%')->paginate(5);
        } else {
            $category = Category::orderBy('id', 'desc')->paginate(5);
        }
        return view('dashboard.category.index', compact('category', 'count'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        return view('dashboard.category.category_add');
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
            'slug' => 'nullable',
            'image' => 'required|mimes:jpeg,jpg,png',

        ]);

        $category = new Category();
        $category->name = $request->name;
        $category->slug = str::Slug($request->name);
        if ($request->file('image')) {
            $file = $request->file('image');
            $filename = date('YmdHi') . $file->getClientOriginalName();
            $file->move(public_path('image/uploads/category/'), $filename);
            $category->image = $filename;
        }
        $category->save();
        return redirect('/admin/category')->with('success', 'Data successfully Added');
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
        $category = Category::find($id);
        return view('dashboard.category.category_update', compact('category'));
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
            'slug' => 'nullable',
            'image' => 'mimes:jpeg,jpg,png',

        ]);

        $category = Category::find($id);
        $category->name = $request->name;
        $category->slug = str::Slug($request->name);
        if ($request->file('image')) {
            $path = 'image/uploads/category/' . $category->image;
            if (file::exists($path)) {
                file::delete($path);
            }
            $file = $request->file('image');
            $filename = date('YmdHi') . $file->getClientOriginalName();
            $file->move('image/uploads/category/', $filename);
            $category->image = $filename;
        } else {
            $category->image = $category->image;
        }
        $category->save();
        return redirect('admin/category')->with('success', "Data successfuly updated");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $category = Category::find($id);
        $path = 'image/uploads/category/' . $category->image;
        if (File::exists($path)) {
            File::delete($path);
        }
        $category->delete();
        return redirect('admin/category')->with('success', 'Data successfully deleted');
    }
}
