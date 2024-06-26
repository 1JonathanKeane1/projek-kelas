<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Benefit;
use App\Models\DetailBenefit;

class DetailBenefitController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view("admin.pages.dbenefit.index", [
            'benefit'   => Benefit::latest()->get(),
            'dbenefit'  => DetailBenefit::latest()->get()
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
            'judul'     => 'required|max:255',
            'isi'       => 'required|max:255',
            'idBenefit' => 'required|'
        ]);

        DetailBenefit::create($data);

        return redirect()->route('detailbenefit.index')->with('success','Berhasil menambah data');
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
            'judul'     => 'required|max:255',
            'isi'       => 'required|max:255',
            'idBenefit' => 'required|'
        ]);

        DetailBenefit::where('id', $id)->update($data);

        return redirect()->route('detailbenefit.index')->with('success','Berhasil merubah data');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        DetailBenefit::where('id', $id)->delete();

        return redirect()->route('detailbenefit.index')
            ->with('success', 'berhasil dihapus.');
    }
}
