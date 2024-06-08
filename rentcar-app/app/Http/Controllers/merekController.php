<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\merek;

class merekController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {   
        $merk=merek::all();
        return view('merek.index', compact('merk'));
    }


    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('merek.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama_merek' => 'required',
        ]);

        $merk = new merek;
        $merk->nama_merek = $request->input('nama_merek');
        $merk->save();

        
        return redirect()->route('merek.index')->with('success', 'Merek mobil berhasil disimpan.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $merk = merek::find($id);

        return view('merek.update', ['merk' => $merk]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
    
        $request->validate([
            'nama_merek' => 'required',
        ]);    

        merek::where('id',$id)
        ->update(
            [
                'nama_merek' => $request->input('nama_merek'),
            ]
            );
        return redirect('/merek');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        merek::where('id',$id)->delete();

        return redirect('/merek');
    }
}
