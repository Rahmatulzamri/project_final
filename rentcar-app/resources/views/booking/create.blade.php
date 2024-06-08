@extends('layout.master')

@section('isi')
<div class="card">
    <div class="card-body">
        <h4 class="card-title">Tabel Create</h4>
        <form action="{{ route('booking.store') }}" method="POST" class="forms-sample">
            @csrf
            <div class="form-group">
                <label>Tanggal Mulai</label>
                <input name="tanggal_mulai" type="date" class="form-control">
            </div>
            <div class="form-group">
                <label>Tanggal Selesai</label>
                <input name="tanggal_selesai" type="date" class="form-control">
            </div>
            <div class="form-group">
                <label>Total Harga</label>
                <input name="total_harga" type="text" class="form-control">
            </div>
            <div class="form-group">
                <label>Total Denda</label>
                <input name="total_denda" type="text" class="form-control">
            </div>
            <div class="form-group">
                <label>Status</label>
                <input name="status" type="text" class="form-control">
            </div>
            <div class="form-group">
                <label>Pelanggan</label>
                <select name="pelanggan_id" class="form-control">
                    <option value="">Pilih Pelanggan</option>
                    @foreach($pelanggan as $p)
                        <option value="{{ $p->id }}">{{ $p->nama }}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label>Mobil</label>
                <select name="mobil_id" class="form-control">
                    <option value="">Pilih Mobil</option>
                    @foreach($mobil as $car)
                        <option value="{{ $car->id }}">{{ $car->merek->nama }}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label>Admin</label>
                <select name="admin_id" class="form-control">
                    <option value="">Pilih Admin</option>
                    @foreach($admin as $a)
                        <option value="{{ $a->id }}">{{ $a->nama }}</option>
                    @endforeach
                </select>
            </div>
            @error('tanggal_mulai')
            <div class="text-danger">{{ $message }}</div>
            @enderror
            <button type="submit" class="btn btn-primary mr-2">Submit</button>
            <a  href="{{route('booking.index')}}" class="btn btn-dark">Cancel</a>
        </form>
    </div>
</div>
@endsection
