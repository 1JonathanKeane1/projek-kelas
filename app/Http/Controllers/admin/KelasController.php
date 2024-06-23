<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Kelas;
use App\Models\Paket;
use App\Models\Mentor;

class KelasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $kelas = Kelas::with('paket', 'mentor')->latest()->get();

        return view("admin.pages.kelas.index", [
            'kelas'   => $kelas,
            'paket'   => Paket::latest()->get(),
            'mentor'  => Mentor::latest()->get(),
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
            'kelas' => 'required|max:255|unique:kelas',
            'idPaket' => 'required',
            'idMentor' => 'required'
        ]);

        Kelas::create($data);

        return redirect()->route('kelas.index')->with('success','Berhasil menambah data');
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
            'kelas'=> 'required',
            'idPaket'=> 'required',
            'idMentor' => 'required'
        ]);

        Kelas::where('id', $id)->update($data);

        return redirect()->route('kelas.index')->with('success','Berhasil merubah data');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

        Kelas::where('id', $id)->delete();

        return redirect()->route('kelas.index')
            ->with('success', 'berhasil dihapus.');
    }
}
