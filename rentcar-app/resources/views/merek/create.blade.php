@extends('layout.master')
@section('isi')
<div class="card">
    <div class="card-body">
      <h4 class="card-title">Tabel Create</h4>
      <form action="{{ route('merek.store') }}" method="POST" class="forms-sample">
        @csrf
      <form class="forms-sample">
        <div class="form-group">
          <label>nama merk</label>
          <input name="nama" type="text" class="form-control" placeholder="masukkan nama merk">
        </div>
        @error('nama')
        <div class="text-danger">{{ $message }}</div>
        @enderror
        <button href="{{ route('merek.index') }}"  type="submit" class="btn btn-primary mr-2">Submit</button>
        <button class="btn btn-dark">Cancel</button>
      </form>
    </div>
  </div>
@endsection