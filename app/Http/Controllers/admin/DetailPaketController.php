<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Paket;
use App\Models\DetailPaket;

class DetailPaketController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view("admin.pages.dpaket.index", [
            'paket'   => Paket::latest()->get(),
            'dpaket'  => DetailPaket::latest()->get()
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
            'idPaket'     => 'required|max:255|unique:detail_pakets',
            'isi'       => 'required|max:255',
        ]);

        DetailPaket::create($data);

        return redirect()->route('detailpaket.index')->with('success','Berhasil menambah data');
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
            'isi'       => 'required|max:255',
            'idPaket'   => 'required|unquie:detail_pakets'
        ]);
        
        DetailPaket::where('id', $id)->update($data);

        return redirect()->route('detailpaket.index')->with('success','Berhasil merubah data');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        DetailPaket::where('id', $id)->delete();

        return redirect()->route('detailpaket.index')
            ->with('success', 'berhasil dihapus.');
    }
}
