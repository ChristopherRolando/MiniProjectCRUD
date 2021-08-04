<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PenjualanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $penjualan = Penjualan::all();
        return view('penjualan.index', compact('penjualans'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('penjualan.create');
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
            'tgl' => 'required',
            'kode_pelanggan' => 'required',
            'subtotal' => 'required',
        ]);

        Penjualan::create($request->all());

        return redirect()->route('penjualan.index')->with('success','Post created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Penjualan $id)
    {
        return view('penjualan.show',compact('penjualans'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Penjualan $id)
    {
        return view('penjualan.show',compact('penjualans'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Penjualan $id)
    {
        $request->validate([
            'tgl' => 'required',
            'kode_pelanggan' => 'required',
            'subtotal' => 'required',
        ]);

        $penjualan->update($request->all());

        return redirect()->route('penjualan.index')->with('success','Post updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Penjualan $id)
    {
        $penjualan->delete();

       return redirect()->route('penjualan.index')->with('success','post deleted successfully');
    }
}
