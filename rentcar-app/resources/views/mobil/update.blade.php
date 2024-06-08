@extends('layout.master')
@section('isi')
<div class="card">
    <div class="card-body">
        <h4 class="card-title">Tabel Update</h4>
        <form action="{{ route('mobil.update', $mobil->id) }}" method="POST" class="forms-sample">
            @csrf
            @method('put')
            <div class="form-group">
                <label>Merek</label>
                <select name="merek_id" class="form-control">
                    @foreach($merek as $m)
                        <option value="{{ $m->id }}" {{ $m->id == $mobil->merek_id ? 'selected' : '' }}>
                            {{ $m->nama }}
                        </option>
                    @endforeach
                </select>
            </div>            
            <div class="form-group">
                <label>Model</label>
                <input name="model" type="text" value="{{ $mobil->model }}" class="form-control">
            </div>
            <div class="form-group">
                <label>Tahun</label>
                <input name="tahun" type="text" value="{{ $mobil->tahun }}" class="form-control">
            </div>
            <div class="form-group">
                <label>Warna</label>
                <input name="warna" type="text" value="{{ $mobil->warna }}" class="form-control">
            </div>
            <div class="form-group">
              <label>No Pol</label>
              <input name="no_pol" type="text" value="{{ $mobil->no_pol }}" class="form-control">
          </div>
            <div class="form-group">
                <label>Status</label>
                <input name="status" type="text" value="{{ $mobil->status }}" class="form-control">
            </div>
            <div class="form-group">
              <label>Harga Sewa</label>
              <input name="harga_sewa" type="text" value="{{ $mobil->harga_sewa }}" class="form-control">
          </div>
            @error('nama')
            <div class="text-danger">{{ $message }}</div>
            @enderror
            <button type="submit" class="btn btn-primary mr-2">Submit</button>
            <a  href="{{route('mobil.index')}}" class="btn btn-dark">Cancel</a>
        </form>
    </div>
</div>
@endsection
