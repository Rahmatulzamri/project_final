<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\pelanggan;

class pelangganController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {   
        $pembeli=pelanggan::all();
        return view('layout.pelanggan.index', compact('pembeli'));
    }


    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('layout.pelanggan.buat');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'alamat' => 'required',
            'no_telpon' => 'required',
            'email' => 'required',
            'no_sim' => 'required',

        ]);

        $pembeli = new pelanggan;
        $pembeli->nama = $request->input('nama');
        $pembeli->alamat = $request->input('alamat');
        $pembeli->no_telpon = $request->input('no_telpon');
        $pembeli->email = $request->input('email');
        $pembeli->no_sim = $request->input('no_sim');
        $pembeli->save();

        
        return redirect()->route('pelanggan.index')->with('success', 'jenis pelanggan berhasil disimpan.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $pembeli = pelanggan::find($id);
    
        return view('layout.pelanggan.tampil', ['pelanggan' => $pembeli]);
    }
    
    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $pembeli = pelanggan::find($id);

        return view('layout.pelanggan.perbaiki', ['pembeli' => $pembeli]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
    
        $request->validate([
            'nama' => 'required',
            'alamat' => 'required',
            'no_telpon' => 'required',
            'email' => 'required',
            'no_sim' => 'required',
        ]);    

        pelanggan::where('id',$id)
        ->update(
            [
                'nama' => $request->input('nama'),
                'alamat' => $request->input('alamat'),
                'no_telpon' => $request->input('no_telpon'),
                'email' => $request->input('email'),
                'no_sim' => $request->input('no_sim'),
            ]
            );
        return redirect('/pelanggan');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        pelanggan::where('id',$id)->delete();

        return redirect('/pelanggan');
    }
}