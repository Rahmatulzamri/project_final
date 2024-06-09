<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\booking;
use App\Models\admin;
use App\Models\pelanggan;
use App\Models\mobil;
use App\Models\merek;

class BookingController extends Controller
{
    public function index()
    {   
        $booking = booking::all();
        return view('booking.index', compact('booking'));
    }

    public function create()
    {
        $admin = Admin::all();
        $mobil = Mobil::all();
        $pelanggan = Pelanggan::all();
        return view('booking.create', compact('admin', 'pelanggan', 'mobil'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'tanggal_mulai' => 'required|date',
            'tanggal_selesai' => 'required|date|after_or_equal:tanggal_mulai',
            'total_harga' => 'required',
            'total_denda' => 'required',
            'status' => 'required',
            'pelanggan_id' => 'required|exists:pelanggan,id',
            'mobil_id' => 'required|exists:mobil,id',
            'admin_id' => 'required|exists:admin,id',
        ]);

        Booking::create($request->all());

        return redirect()->route('booking.index')->with('success', 'Booking created successfully.');
    }

    public function show(string $id)
    {
        //
    }


    public function edit(string $id)
    {
        $booking = booking::find($id);
        $admin = admin::all();
        $mobil = mobil::all();
        $pelanggan = pelanggan::all();

        return view('booking.update', ['booking' => $booking], compact('admin','pelanggan','mobil'));
    }

    public function update(Request $request, string $id)
    {
        $request->validate([
            'tanggal_mulai' => 'required',
            'tanggal_selesai' => 'required',
            'total_harga' => 'required',
            'total_denda' => 'required',
            'status' => 'required',
            'pelanggan_id' => 'required|exists:pelanggan,id',
            'mobil_id' => 'required|exists:mobil,id',
            'admin_id' => 'required|exists:admin,id',
        ]);
    
        booking::where('id', $id)
            ->update(
                [
                    'tanggal_mulai' => $request->input('tanggal_mulai'),
                    'tanggal_selesai' => $request->input('tanggal_selesai'),
                    'total_harga' => $request->input('total_harga'),
                    'total_denda' => $request->input('total_denda'),
                    'status' => $request->input('status'),
                    'pelanggan_id' => $request->input('pelanggan_id'),
                    'mobil_id' => $request->input('mobil_id'),
                    'admin_id' => $request->input('admin_id'),
                ]
            );
    
        return redirect('/booking');
    }

    public function destroy(string $id)
    {
        booking::where('id',$id)->delete();

        return redirect('/booking');
    }
}
