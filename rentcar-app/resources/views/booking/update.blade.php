@extends('layout.master')
@section('isi')
<div class="card">
    <div class="card-body">
        <h4 class="card-title">Tabel Update</h4>
        <form action="{{ route('booking.update', $booking->id) }}" method="POST" class="forms-sample">
            @csrf
            @method('put')
            <div class="form-group">
                <label>Tanggal Mulai</label>
                <input name="tanggal_mulai" type="date" value="{{ $booking->tanggal_mulai }}" class="form-control">
            </div>
            <div class="form-group">
                <label>Tanggal Selesai</label>
                <input name="tanggal_selesai" type="date" value="{{ $booking->tanggal_selesai }}" class="form-control">
            </div>
            <div class="form-group">
                <label>Total Harga</label>
                <input name="total_harga" type="text" value="{{ $booking->total_harga }}" class="form-control">
            </div>
            <div class="form-group">
                <label>Total Denda</label>
                <input name="total_denda" type="text" value="{{ $booking->total_denda }}" class="form-control">
            </div>
            <div class="form-group">
                <label>Status</label>
                <input name="status" type="text" value="{{ $booking->status }}" class="form-control">
            </div>
            <div class="form-group">
                <label>Pelanggan</label>
                <select name="pelanggan_id" class="form-control">
                    @foreach($pelanggan as $p)
                        <option value="{{ $p->id }}" {{ $booking->pelanggan_id == $p->id ? 'selected' : '' }}>
                            {{ $p->nama }}
                        </option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label>Admin</label>
                <select name="admin_id" class="form-control">
                    @foreach($admin as $a)
                        <option value="{{ $a->id }}" {{ $booking->admin_id == $a->id ? 'selected' : '' }}>
                            {{ $a->nama }}
                        </option>
                    @endforeach
                </select>
            </div>
            @error('nama')
            <div class="text-danger">{{ $message }}</div>
            @enderror
            <button type="submit" class="btn btn-primary mr-2">Submit</button>
            <button type="button" class="btn btn-dark">Cancel</button>
        </form>
    </div>
</div>
@endsection