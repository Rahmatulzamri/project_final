@extends('layout.master')
@section('isi')
<div class="card">
    <div class="card-body">
      <h4 class="card-title">Tambah Data Administrator</h4>
      <form action="{{ route('administrator.store') }}" method="POST" class="forms-sample">
        @csrf
      <form class="forms-sample">
        <div class="form-group">
          <label>Nama</label>
          <input name="nama" type="text" class="form-control" placeholder="masukkan nama">
        </div>
        <div class="form-group">
          <label>Email</label>
          <input name="email" type="email" class="form-control" placeholder="masukkan email">
        </div>
        <div class="form-group">
          <label>Passowrd</label>
          <input name="password" type="password" class="form-control" placeholder="masukkan password">
        </div>
        @error('nama')
        <div class="text-danger">{{ $message }}</div>
        @enderror
        @error('email')
        <div class="text-danger">{{ $message }}</div>
        @enderror
        @error('password')
        <div class="text-danger">{{ $message }}</div>
        @enderror
        <button type="submit" class="btn btn-primary mr-2"><i class="bi bi-check"></i> Submit</button>
        <a href="{{route('administrator.index')}}" class="btn btn-dark"><i class="bi bi-x"></i> Cancel</a>
      </form>
    </div>
  </div>
@endsection