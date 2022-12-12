<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

use App\Models\Hastag;
use App\Models\HomeVideo;
use Illuminate\Support\Facades\File;
use Illuminate\Http\Request;

class HomeVideoController extends Controller
{
    public function index(Request $request)
    {
        $count = HomeVideo::all();
        if ($request->has('search')) {

            $homevideo = HomeVideo::orderBy('id', 'desc')->where('hastag', 'LIKE', '%' . $request->search . '%')->orWhere('name', 'LIKE', '%' . $request->search . '%')->paginate(5);
        } else {
            $homevideo = HomeVideo::orderBy('id', 'desc')->paginate(5);
        }
        return view('dashboard.homevideo.index', compact('homevideo', 'count'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.homevideo.homevideo_add');
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
            'video' => 'mimes:mp4|required',

        ]);
        $homevideo = new HomeVideo();
        if ($request->file('video')) {
            $file = $request->file('video');
            $filename = date('YmdHi') . $file->getClientOriginalName();
            $file->move(public_path('video/uploads/home/'), $filename);
            $homevideo->video = $filename;
        }
        $homevideo->save();
        return redirect('admin/videos')->with('success', "Data successfuly Created");
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
        $homevideo = HomeVideo::find($id);
        return view('dashboard.homevideo.homevideo_update', compact('homevideo'));
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
            'video' => 'mimes:mp4|required',

        ]);
        $homevideo = HomeVideo::find($id);
        if ($request->file('video')) {
            $path = 'video/uploads/home/' . $homevideo->video;
            if (file::exists($path)) {
                file::delete($path);
            }
            $file = $request->file('video');
            $filename = date('YmdHi') . $file->getClientOriginalName();
            $file->move('video/uploads/home/', $filename);
            $homevideo->video = $filename;
        }
        $homevideo->update();
        return redirect('admin/videos')->with('success', "Data successfuly updated");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $homevideo = HomeVideo::find($id);
        $homevideo->delete();
        return redirect('admin/videos')->with('success', "Data successfuly Deleted");
    }
}
