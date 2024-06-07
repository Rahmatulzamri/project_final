@extends('layout.master')
@section('isi')
<div class="card">
    <div class="card-body">
      <h4 class="card-title">Tabel Create</h4>
      <form action="/mobil/{{$merk->id}}" method="POST" class="forms-sample">
        @csrf
        @method('put')
      <form class="forms-sample">
        <div class="form-group">
          <label></label>
          <input name="nama" type="text" value="{{$merk->nama}}" class="form-control">
        </div>
        @error('nama')
        <div class="text-danger">{{ $message }}</div>
        @enderror
        <button href="{{ route('mobil.index') }}"  type="submit" class="btn btn-primary mr-2">Submit</button>
        <button class="btn btn-dark">Cancel</button>
      </form>
    </div>
  </div>
@endsection