@extends('layout.master')
@section('isi')
<div class="card">
    <div class="card-body">
      <h4 class="card-title">Tabel Create</h4>
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
        <button href="{{ route('administrator.index') }}"  type="submit" class="btn btn-primary mr-2">Submit</button>
        <a  href="{{route('administrator.index')}}" class="btn btn-dark">Cancel</a>
      </form>
    </div>
  </div>
@endsection