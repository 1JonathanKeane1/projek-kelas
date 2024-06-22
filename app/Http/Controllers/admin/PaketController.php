<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Paket;
use App\Models\Kelas;

class PaketController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view("admin.pages.paket.index", [
            'paket'   => Paket::latest()->get(),
            'kelas'   => Kelas::latest()->get()
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
            'paket'     => 'required|max:255',
            'harga'     => 'required',
        ]);

        Paket::create($data);

        return redirect()->route('paket.index')->with('success','Berhasil menambah data');
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
    public function update(Request $request, Paket $paket)
    {
        // dd($paket);

        $data = $request->validate([
            'paket'=> 'required',
            'harga'=> 'required',
        ]);

        Paket::where('id', $paket->id)->update($data);

        return redirect()->route('paket.index')->with('success','Berhasil merubah data');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Paket $paket)
    {
        $kelas = Kelas::where('idPaket', $id)->first();
        
        if ($kelas) {
            Kelas::where('idPaket', $id)->delete();
        }

        Paket::destroy($paket->id);

        return redirect()->route('paket.index')
            ->with('success', 'berhasil dihapus.');
    }
}
