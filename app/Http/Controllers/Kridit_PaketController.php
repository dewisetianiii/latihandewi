<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Kridit_paket;

class Kridit_PaketController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        $kridit_paket = Kridit_Paket::all();
        return view('kridit_paket.index', compact('kridit_paket'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $kridit_paket = Kridit_Paket::all();
        return view('kridit_paket.create', compact('kridit_paket'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $kridit_paket = new Kridit_Paket();
        $kridit_paket->paket_kode = $request->paket_kode;
        $kridit_paket->paket_harga_cash = $request->paket_harga_cash;
        $kridit_paket->paket_uang_muka = $request->paket_uang_muka;
        $kridit_paket->paket_jumlah_cicilan = $request->paket_jumlah_cicilan;
        $kridit_paket->paket_bunga = $request->paket_bunga;
        $kridit_paket->paket_nilai_cicilan = $request->paket_nilai_cicilan;
        $kridit_paket->save();
        return redirect()->route('kridit_paket.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $kridit_paket = Kridit_Paket::findOrFail($id);
        return view('kridit_paket.show', compact('kridit_paket'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $kridit_paket = Kridit_Paket::findOrFail($id);
        return view('kridit_paket.edit', compact('kridit_paket'));
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
        $kridit_paket = Kridit_Paket::findOrFail($id);
        $kridit_paket->paket_kode = $request->paket_kode;
        $kridit_paket->paket_harga_cash = $request->paket_harga_cash;
        $kridit_paket->paket_uang_muka = $request->paket_uang_muka;
        $kridit_paket->paket_jumlah_cicilan = $request->paket_jumlah_cicilan;
        $kridit_paket->paket_bunga = $request->paket_bunga;
        $kridit_paket->paket_nilai_cicilan = $request->paket_nilai_cicilan;
        $kridit_paket->save();
        return redirect()->route('kridit_paket.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $kridit_paket = Kridit_Paket::findOrFail($id);
        $kridit_paket->delete();
        return redirect()->route('kridit_paket.index');
    }
}
