@extends('layout.master')
@section('isi')
<div class="card">
    <div class="card-body">
        <h4 class="card-title">Tabel Create</h4>
        <form action="{{ route('mobil.store') }}" method="POST" class="forms-sample">
            @csrf
            <div class="form-group">
                <label>Merek</label>
                <select name="merek_id" class="form-control">
                    <option value="">Pilih merek</option>
                    @foreach($merek as $a)
                        <option value="{{ $a->id }}">{{ $a->nama }}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label>Model</label>
                <input name="model" type="text" class="form-control">
            </div>
            <div class="form-group">
                <label>Tahun</label>
                <input name="tahun" type="date" class="form-control">
            </div>
            <div class="form-group">
                <label>Warna</label>
                <input name="warna" type="text" class="form-control">
            </div>
            <div class="form-group">
              <label>No pol</label>
              <input name="no_pol" type="text" class="form-control">
          </div>
            <div class="form-group">
                <label>Status</label>
                <input name="status" type="text" class="form-control">
            </div>
            <div class="form-group">
              <label>Harga Sewa</label>
              <input name="harga_sewa" type="text" class="form-control">
          </div>
            @error('tanggal_mulai')
            <div class="text-danger">{{ $message }}</div>
            @enderror
            <button type="submit" class="btn btn-primary mr-2">Submit</button>
            <a  href="{{route('mobil.index')}}" class="btn btn-dark">Cancel</a>
        </form>
    </div>
</div>
@endsection