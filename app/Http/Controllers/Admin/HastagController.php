<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Hastag;
use Illuminate\Http\Request;
use Illuminate\Support\Str;


class HastagController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $count = Hastag::all();
        if ($request->has('search')) {

            $hastags = Hastag::orderBy('id', 'desc')->where('hastag', 'LIKE', '%' . $request->search . '%')->orWhere('name', 'LIKE', '%' . $request->search . '%')->paginate(5);
        } else {
            $hastags = Hastag::orderBy('id', 'desc')->paginate(5);
        }
        return view('dashboard.hastag.index', compact('hastags', 'count'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.hastag.hastag_add');
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
            'hastag' => 'required',

        ]);
        $hastag = new Hastag();
        $hastag->name = $request->name;
        $hastag->slug = str::Slug($request->name);
        $hastag->hastag = $request->hastag;
        $hastag->status = $request->status ? '1' : '0';
        $hastag->save();
        return redirect('admin/hastags')->with('success', "Data successfuly Created");
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
        $hastag = Hastag::find($id);
        return view('dashboard.hastag.hastag_update', compact('hastag'));
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
            'hastag' => 'required',

        ]);
        $hastag = Hastag::find($id);
        $hastag->name = $request->name;
        $hastag->slug = str::Slug($request->name);
        $hastag->hastag = $request->hastag;
        $hastag->status = $request->status ? '1' : '0';

        $hastag->update();
        return redirect('admin/hastags')->with('success', "Data successfuly updated");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $hastag = Hastag::find($id);
        $hastag->delete();
        return redirect('admin/hastags')->with('success', "Data successfuly Deleted");
    }
}
