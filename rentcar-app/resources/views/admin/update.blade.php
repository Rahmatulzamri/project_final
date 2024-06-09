@extends('layout.master')
@section('isi')
<div class="card">
    <div class="card-body">
      <h4 class="card-title">Edit Data Administrator</h4>
      <form action="/administrator/{{$admin->id}}" method="POST" class="forms-sample">
        @csrf
        @method('put')
        <div class="form-group">
          <label for="nama">Nama</label> 
          <input name="nama" type="text" value="{{$admin->nama}}" class="form-control">
        </div>
        <div class="form-group">
          <label for="email">Email</label> 
          <input name="email" type="text" value="{{$admin->email}}" class="form-control">
        </div>
        <div class="form-group">
          <label for="password">Password</label>
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
        <button type="submit" class="btn btn-primary mr-2">
          <i class="fas fa-check"></i> Submit
      </button>
      <a href="{{ route('mobil.index') }}" class="btn btn-secondary">
          <i class="fas fa-times"></i> Cancel
      </a>      
      </form>
    </div>
  </div>
@endsection