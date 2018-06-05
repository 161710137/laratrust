<?php

namespace App\Http\Controllers;

use App\berita;
use Illuminate\Http\Request;

class BeritaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $beritas = Berita::all();
        return view('berita.index',compact('beritas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $mobils = Mobil::all();
        return view('berita.create',compact('mobils'));
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
            'judul'=>'required',
            'gambar'=>'required',
            'isi'=>'required',
            'email'=>'required',
            'alamat'=>'required',
            'mobil_id'=>'required'
        ]);
        $beritas= new Berita;
        $beritas->judul = $request->judul;
        $beritas->gambar = $request->gambar;
        $beritas->isi = $request->isi;
        $beritas->save();
        return redirect()->route('berita.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\berita  $berita
     * @return \Illuminate\Http\Response
     */
    public function show(berita $berita)
    {
        $beritas = Berita::findOrFail($id);
        return view('berita.show',compact('beritas'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\berita  $berita
     * @return \Illuminate\Http\Response
     */
    public function edit(berita $berita)
    {
        $beritas = Berita::findOrFail($id);
        $mobils = Mobil::all();
        $selectedMobil = Berita::findOrfail($id)->mobil_id;
        return view('berita.edit',compact('beritas','mobils','selectedMobil'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\berita  $berita
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, berita $berita)
    {
        $this->validate($request,[
            'judul'=>'required',
            'gambar'=>'required',
            'isi'=>'required',
            'email'=>'required',
            'alamat'=>'required',
            'mobil_id'=>'required'
        ]);
        $beritas= new Berita;
        $beritas->judul = $request->judul;
        $beritas->gambar = $request->gambar;
        $beritas->isi = $request->isi;
        $beritas->save();
        return redirect()->route('berita.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\berita  $berita
     * @return \Illuminate\Http\Response
     */
    public function destroy(berita $berita)
    {
        $beritas = Berita::findOrFail($id);
        $beritas->delete();
        return redirect()->route('berita.index');
    }
}
