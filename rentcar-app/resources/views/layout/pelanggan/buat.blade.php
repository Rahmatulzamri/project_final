@extends('layout.master')
@section('isi')
<div class="card">
    <div class="card-body">
      <h4 class="card-title">Tabel Create</h4>
      <form action="{{ route('pelanggan.store') }}" method="POST" class="forms-sample">
        @csrf
      <form class="forms-sample">
        <div class="form-group">
          <label>Nama</label>
          <input name="nama" type="text" class="form-control" placeholder="masukkan nama pelanggan">
        </div>
        <div class="form-group">
            <label>Alamat</label>
            <input name="alamat" type="text" class="form-control" placeholder="masukkan alamat pelanggan">
          </div>
          <div class="form-group">
            <label>No Telepon</label>
            <input name="no_telpon" type="text" class="form-control" placeholder="masukkan no Telepon pelanggan">
          </div>
          <div class="form-group">
            <label>Email</label>
            <input name="email" type="text" class="form-control" placeholder="masukkan email pelanggan">
          </div>
          <div class="form-group">
            <label>No Sim</label>
            <input name="no_sim" type="text" class="form-control" placeholder="masukkan No Sim pelanggan">
          </div>
          <div class="form-group">
            <label>No KTP</label>
            <input name="nik" type="text" class="form-control" placeholder="masukkan No KTP (NIK) pelanggan">
          </div>

        
        <button href="{{ route('pelanggan.index') }}"  type="submit" class="btn btn-primary mr-2">Submit</button>
        <button class="btn btn-dark">Cancel</button>
      </form>
    </div>
  </div>
@endsection