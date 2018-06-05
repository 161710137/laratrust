<?php

namespace App\Http\Controllers;

use App\merk;
use Illuminate\Http\Request;

class MerkController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $merks = Merk::all();
        return view('merk.index',compact('merks'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $mobils = Mobil::all();
        return view('merk.create',compact('mobils'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'nama'=>'required',
            'logo'=>'required'
        ]);
        $merks= new Merk;
        $merks->nama = $request->nama;
        $merks->logo = $request->logo;
        $merks->save();
        return redirect()->route('merk.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\merk  $merk
     * @return \Illuminate\Http\Response
     */
    public function show(merk $merk)
    {
        $merk = Merk::findOrFail($id);
        return view('merk.show',compact('merk'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\merk  $merk
     * @return \Illuminate\Http\Response
     */
    public function edit(merk $merk)
    {
        $merks = Merk::findOrFail($id);
        $mobils = Mobil::all();
        $selectedMobil = Merk::findOrfail($id)->mobil_id;
        return view('merk.edit',compact('merks','mobils','selectedMobil'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\merk  $merk
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, merk $merk)
    {
        $this->validate($request,[
            'nama'=>'required',
            'logo'=>'required'
        ]);
        $merks= new Merk;
        $merks->nama = $request->nama;
        $merks->logo = $request->logo;
        $merks->save();
        return redirect()->route('merk.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\merk  $merk
     * @return \Illuminate\Http\Response
     */
    public function destroy(merk $merk)
    {
        $merks = Merk::findOrFail($id);
        $merks->delete();
        return redirect()->route('merk.index');
    }
}
