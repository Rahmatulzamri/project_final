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
          <label></label>
          <input name="nama" type="text" value="{{$pembeli->nama}}" class="form-control">
        </div>
        <div class="form-group">
          <label></label>
          <input name="alamat" type="text" value="{{$pembeli->alamat}}" class="form-control">
        </div>
        <div class="form-group">
          <label></label>
          <input name="no_telpon" type="text" value="{{$pembeli->no_telpon}}" class="form-control">
        </div>
        <div class="form-group">
          <label></label>
          <input name="email" type="text" value="{{$pembeli->email}}" class="form-control">
        </div>
        <div class="form-group">
          <label></label>
          <input name="no_sim" type="text" value="{{$pembeli->no_sim}}" class="form-control">
        </div>
        @error('nama')
        <div class="text-danger">{{ $message }}</div>
        @enderror
        <button href="{{ route('pelanggan.index') }}"  type="submit" class="btn btn-primary mr-2">Submit</button>
        <button class="btn btn-dark">Cancel</button>
      </form>
    </div>
  </div>
@endsection