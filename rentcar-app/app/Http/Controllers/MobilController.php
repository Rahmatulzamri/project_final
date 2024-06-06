<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Mobil;

class MobilController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $mobils = Mobil::all();
        return view('mobil.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('mobils.create');
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
            'merek' => 'required',
            'model' => 'required',
            'tahun' => 'required',
            'plat_nomor' => 'required',
            'status' => 'required',
            'harga_sewa' => 'required',
            'id_merek' => 'required',
        ]);

        Mobil::create($request->all());
        
        return redirect()->route('mobils.index')
            ->with('success', 'Mobil created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Mobil  $mobil
     * @return \Illuminate\Http\Response
     */
    public function show(Mobil $mobil)
    {
        return view('mobils.show', compact('mobil'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Mobil  $mobil
     * @return \Illuminate\Http\Response
     */
    public function edit(Mobil $mobil)
    {
        return view('mobils.edit', compact('mobil'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Mobil  $mobil
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Mobil $mobil)
    {
        $request->validate([
            'merek' => 'required',
            'model' => 'required',
            'tahun' => 'required',
            'plat_nomor' => 'required',
            'status' => 'required',
            'harga_sewa' => 'required',
            'id_merek' => 'required',
        ]);

        $mobil->update($request->all());

        return redirect()->route('mobils.index')
            ->with('success', 'Mobil updated successfully');
    }
}
