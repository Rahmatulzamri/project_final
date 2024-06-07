<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\booking;

class bookingController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {   
        $merk=booking::all();
        return view('booking.index', compact('merk'));
    }


    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('booking.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required',
        ]);

        $merk = new booking;
        $merk->nama = $request->input('nama');
        $merk->save();

        
        return redirect()->route('booking.index')->with('success', 'booking mobil berhasil disimpan.');
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
        $merk = booking::find($id);

        return view('booking.update', ['merk' => $merk]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
    
        $request->validate([
            'nama' => 'required',
        ]);    

        booking::where('id',$id)
        ->update(
            [
                'nama' => $request->input('nama'),
            ]
            );
        return redirect('/booking');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        booking::where('id',$id)->delete();

        return redirect('/booking');
    }
}
