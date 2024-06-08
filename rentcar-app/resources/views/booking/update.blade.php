@extends('layout.master')
@section('isi')
<div class="card">
    <div class="card-body">
      <h4 class="card-title">Tabel Create</h4>
      <form action="/booking/{{$merk->id}}" method="POST" class="forms-sample">
        @csrf
        @method('put')
      <form class="forms-sample">
        <div class="form-group">
          <label></label>
          <input name="nama_merek" type="text" value="{{$merk->nama_merek}}" class="form-control">
        </div>
        @error('nama_merek')
        <div class="text-danger">{{ $message }}</div>
        @enderror
        <button href="{{ route('merek.index') }}"  type="submit" class="btn btn-primary mr-2">Submit</button>
        <button class="btn btn-dark">Cancel</button>
      </form>
    </div>
  </div>
@endsection