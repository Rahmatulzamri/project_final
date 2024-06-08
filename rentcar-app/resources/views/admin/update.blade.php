@extends('layout.master')
@section('isi')
<div class="card">
    <div class="card-body">
      <h4 class="card-title">Tabel Create</h4>
      <form action="/administrator/{{$admin->id}}" method="POST" class="forms-sample">
        @csrf
        @method('put')
      <form class="forms-sample">
        <div class="form-group">
          <label>Nama</label>
          <input name="nama" type="text" value="{{$admin->nama}}" class="form-control">
        </div>
        <div class="form-group">
          <label>Email</label>
          <input name="email" type="text" value="{{$admin->email}}" class="form-control">
        </div>
        <div class="form-group">
          <label>Password</label>
          <input name="password" type="text" value="{{$admin->password}}" class="form-control">
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