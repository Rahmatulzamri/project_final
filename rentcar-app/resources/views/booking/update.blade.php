@extends('layout.master')
@section('isi')
<div class="card">
    <div class="card-body">
        <h4 class="card-title">Formulir Pembaruan Booking</h4>
        <form action="{{ route('booking.update', $booking->id) }}" method="POST" class="forms-sample">
            @csrf
            @method('put')
            <div class="form-group">
                <label for="tanggal_mulai">Tanggal Mulai</label>
                <input name="tanggal_mulai" type="date" value="{{ $booking->tanggal_mulai }}" class="form-control @error('tanggal_mulai') is-invalid @enderror" id="tanggal_mulai">
                @error('tanggal_mulai')
                <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group">
                <label for="tanggal_selesai">Tanggal Selesai</label>
                <input name="tanggal_selesai" type="date" value="{{ $booking->tanggal_selesai }}" class="form-control @error('tanggal_selesai') is-invalid @enderror" id="tanggal_selesai">
                @error('tanggal_selesai')
                <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group">
                <label for="total_harga">Total Harga</label>
                <input name="total_harga" type="text" value="{{ $booking->total_harga }}" class="form-control @error('total_harga') is-invalid @enderror" id="total_harga" placeholder="Masukkan total harga">
                @error('total_harga')
                <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group">
                <label for="total_denda">Total Denda</label>
                <input name="total_denda" type="text" value="{{ $booking->total_denda }}" class="form-control @error('total_denda') is-invalid @enderror" id="total_denda" placeholder="Masukkan total denda">
                @error('total_denda')
                <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group">
                <label for="status">Status</label>
                <input name="status" type="text" value="{{ $booking->status }}" class="form-control @error('status') is-invalid @enderror" id="status" placeholder="Masukkan status">
                @error('status')
                <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group">
                <label for="pelanggan_id">Pelanggan</label>
                <select name="pelanggan_id" class="form-control @error('pelanggan_id') is-invalid @enderror" id="pelanggan_id">
                    @foreach($pelanggan as $p)
                        <option value="{{ $p->id }}" {{ $booking->pelanggan_id == $p->id ? 'selected' : '' }}>
                            {{ $p->nama }}
                        </option>
                    @endforeach
                </select>
                @error('pelanggan_id')
                <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group">
                <label for="mobil_id">Mobil</label>
                <select name="mobil_id" class="form-control @error('mobil_id') is-invalid @enderror" id="mobil_id">
                    @foreach($mobil as $m)
                        <option value="{{ $m->id }}" {{ $booking->mobil_id == $m->id ? 'selected' : '' }}>
                            {{ $m->merek->nama }}
                        </option>
                    @endforeach
                </select>
                @error('mobil_id')
                <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group">
                <label for="admin_id">Admin</label>
                <select name="admin_id" class="form-control @error('admin_id') is-invalid @enderror" id="admin_id">
                    @foreach($admin as $a)
                        <option value="{{ $a->id }}" {{ $booking->admin_id == $a->id ? 'selected' : '' }}>
                            {{ $a->nama }}
                        </option>
                    @endforeach
                </select>
                @error('admin_id')
                <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            <button type="submit" class="btn btn-primary mr-2">
                <i class="fas fa-check"></i> Submit
            </button>
            <a href="{{ route('booking.index') }}" class="btn btn-secondary">
                <i class="fas fa-times"></i> Cancel
            </a>
            
        </form>
    </div>
</div>

<style>
    .card {
        background-color: #2a2a2a;
        border: none;
        border-radius: 8px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
    }
    .card-body {
        color: #ffffff;
    }
    .form-group label {
        color: #ffffff;
    }
    .form-control {
        background-color: #1e1e1e;
        color: #ffffff;
        border: 1px solid #444444;
    }
    .form-control::placeholder {
        color: #b1b1b1;
    }
    .form-control:focus {
        background-color: #2a2a2a;
        border-color: #007bff;
        box-shadow: none;
    }
    .btn-primary {
        background-color: #007bff;
        border-color: #007bff;
    }
    .btn-primary:hover {
        background-color: #0056b3;
        border-color: #0056b3;
    }
    .btn-secondary {
        background-color: #6c757d;
        border-color: #6c757d;
    }
    .btn-secondary:hover {
        background-color: #5a6268;
        border-color: #545b62;
    }
    .invalid-feedback {
        display: block;
    }
</style>
@endsection
