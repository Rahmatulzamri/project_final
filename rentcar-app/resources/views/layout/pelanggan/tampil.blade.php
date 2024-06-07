@extends('layout.master')

@section('title')
Halaman Detail 
@endsection

@section('isi')
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-body">
                        <h1 class="card-title">{{$pelanggan->nama}}</h1>
                        <p class="card-text"><strong>Alamat:</strong> {{$pelanggan->alamat}}</p>
                        <p class="card-text"><strong>No WhatsApp:</strong> <a href="https://wa.me/{{$pelanggan->no_telpon}}">{{$pelanggan->no_telpon}}</a></p>
                        <p class="card-text"><strong>Email:</strong> {{$pelanggan->email}}</p>
                        <p class="card-text"><strong>No SIM:</strong> {{$pelanggan->no_sim}}</p>
                        <a href="{{ route('pelanggan.edit', $pelanggan->id) }}" class="btn btn-primary btn-sm">Edit</a>
                        <a href="{{ route('pelanggan.index') }}" class="btn btn-secondary btn-sm">Back</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
