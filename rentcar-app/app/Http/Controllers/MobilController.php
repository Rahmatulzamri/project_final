<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\booking;
use App\Models\mobil;
use App\Models\admin;
use App\Models\pelanggan;
use App\Models\merek;

class MobilController extends Controller
{
    public function index()
    {   
        $merek = mobil::all();
        $mobil = mobil::all();
        return view('mobil.index', compact('mobil','merek'));
    }

    public function create()
    {
        $booking = booking::all();
        $merek = merek::all();
        return view('mobil.create', compact('booking', 'merek'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'model' => 'required',
            'tahun' => 'required',
            'warna' => 'required',
            'no_pol' => 'required',
            'status' => 'required',
            'harga_sewa' => 'required',
            'merek_id' => 'required',
        ]);
        

        mobil::create($request->all());

        return redirect()->route('mobil.index')
                         ->with('success', 'mobil created successfully.');
    }

    public function show(string $id)
    {
        //
    }

    public function edit(string $id)
    {
        $mobil = mobil::find($id);
        $booking = booking::all();
        $merek = merek::all();

        return view('mobil.update', ['mobil' => $mobil], compact('booking','merek'));
    }

    public function update(Request $request, string $id)
    {
        $request->validate([
            'model' => 'required',
            'tahun' => 'required',
            'warna' => 'required',
            'no_pol' => 'required',
            'status' => 'required',
            'harga_sewa' => 'required',
            'merek_id' => 'required|exists:merek,id',
        ]);
    
        mobil::where('id', $id)
            ->update(
                [
                    'model' => $request->input('model'),
                    'tahun' => $request->input('tahun'),
                    'warna' => $request->input('warna'),
                    'no_pol' => $request->input('no_pol'),
                    'status' => $request->input('status'),
                    'harga_sewa' => $request->input('harga_sewa'),
                    'merek_id' => $request->input('merek_id'),
                ]
            );
    
        return redirect('/mobil');
    }

    public function destroy(string $id)
    {
        booking::where('id',$id)->delete();

        return redirect('/mobil');
    }
}
