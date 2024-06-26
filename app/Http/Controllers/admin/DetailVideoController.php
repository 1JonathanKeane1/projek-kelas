<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

Use App\Models\Video;
use App\Models\DetailVideo;

class DetailVideoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view("admin.pages.dvideo.index", [
            'video'   => Video::latest()->get(),
            'dvideo'   => DetailVideo::latest()->get()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'link'      => 'required',
            'idVideo'   => 'required',
            'judul'     => 'required',
            'deskripsi'  => 'required',
        ]);

        DetailVideo::create($data);

        return redirect()->route('detailvideo.index')->with('success','Berhasil menambah data');
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
        //
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

        $data = $request->validate([
            'link'      => 'required',
            'idVideo'   => 'required',
            'judul'     => 'required',
            'deskripsi'  => 'required',
        ]);

        DetailVideo::where('id', $id)->update($data);

        return redirect()->route('detailvideo.index')->with('success','Berhasil merubah data');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        DetailVideo::destroy($id);

        return redirect()->route('detailvideo.index')
            ->with('success', 'berhasil dihapus.');
    }
}
