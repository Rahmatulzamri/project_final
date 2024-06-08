@extends('layout.master')

@section('isi')
<div class="card">
    <div class="card-body">
        <h4 class="card-title">Create Pelanggan</h4>
        <form action="{{ route('pelanggan.store') }}" method="POST" class="forms-sample">
            @csrf
            <div class="form-group">
                <label for="nama">Nama</label>
                <input name="nama" type="text" class="form-control" id="nama" placeholder="Masukkan nama pelanggan">
            </div>
            <div class="form-group">
                <label for="no_telpon">No Telepon</label>
                <input name="no_telpon" type="text" class="form-control" id="no_telpon" placeholder="Masukkan no Telepon pelanggan">
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input name="email" type="email" class="form-control" id="email" placeholder="Masukkan email pelanggan">
            </div>
            <div class="form-group">
                <label for="alamat">Alamat</label>
                <input name="alamat" type="text" class="form-control" id="alamat" placeholder="Masukkan alamat pelanggan">
            </div>
            <div class="form-group">
                <label for="no_sim">No Sim</label>
                <input name="no_sim" type="text" class="form-control" id="no_sim" placeholder="Masukkan No Sim pelanggan">
            </div>
            <div class="form-group">
                <label for="nik">No KTP (NIK)</label>
                <input name="nik" type="text" class="form-control" id="nik" placeholder="Masukkan No KTP (NIK) pelanggan">
            </div>
            <button type="submit" class="btn btn-primary mr-2">Submit</button>
            <a href="{{ route('pelanggan.index') }}" class="btn btn-secondary">Cancel</a>
        </form>
    </div>
</div>

<style>
    .card-title {
        font-weight: bold;
        color: #4b6584;
    }
    .form-group label {
        font-weight: bold;
    }
    .btn-primary {
        background-color: #1e3799;
        border-color: #1e3799;
    }
    .btn-secondary {
        background-color: #7f8c8d;
        border-color: #7f8c8d;
    }
</style>
@endsection
