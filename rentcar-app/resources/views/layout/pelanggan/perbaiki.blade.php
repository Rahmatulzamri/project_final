@extends('layout.master')
@section('isi')
<div class="card">
    <div class="card-body">
      <h4 class="card-title">Tabel edit</h4>
      <form action="/pelanggan/{{$pembeli->id}}" method="POST" class="forms-sample">
        @csrf
        @method('put')
      <form class="forms-sample">
        <div class="form-group">
          <label>Nama</label>
          <input name="nama" type="text" value="{{$pembeli->nama}}" class="form-control">
        </div>
        <div class="form-group">
          <label>No. Telepon</label>
          <input name="no_telpon" type="text" value="{{$pembeli->no_telpon}}" class="form-control">
        </div>
        <div class="form-group">
          <label>Email</label>
          <input name="email" type="text" value="{{$pembeli->email}}" class="form-control">
        </div>
        <div class="form-group">
          <label>Alamat</label>
          <input name="alamat" type="text" value="{{$pembeli->alamat}}" class="form-control">
        </div>
        <div class="form-group">
          <label>No. SIM</label>
          <input name="no_sim" type="text" value="{{$pembeli->no_sim}}" class="form-control">
        </div>
        <div class="form-group">
          <label>NIK</label>
          <input name="nik" type="text" value="{{$pembeli->nik}}" class="form-control">
        </div>
        @error('nama')
        <div class="text-danger">{{ $message }}</div>
        @enderror
        <button href="{{ route('pelanggan.index') }}"  type="submit" class="btn btn-primary mr-2">Submit</button>
        <button class="btn btn-secondary mr-2">Cancel</button>
      </form>
    </div>
  </div>
@endsection