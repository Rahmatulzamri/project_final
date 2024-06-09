@extends('layout.master')
@section('isi')
<div class="card">
    <div class="card-body">
      <h4 class="card-title">Tabel Mobil</h4>
      <p class="card-description">
        <a href="{{ route('mobil.create')}}" class="btn btn-primary">
          <i class="fas fa-plus-circle"></i> Tambah data
      </a>
      </p>
      <div class="table-responsive">
        <table class="table table-striped">
          <thead>
            <tr>
              <th>No</th>
              <th>Merek</th>
              <th>Model</th>
              <th>Tahun</th>
              <th>Warna</th>
              <th>No Pol</th>
              <th>Status</th>
              <th>Harga Sewa</th>
              <th>Aksi</th>
            </tr>
          </thead>
          <tbody>
            @foreach ($mobil as $key=>$item)
            <tr>
              <td> {{$key+1}} </td>
              <td>{{ $item->merek->nama }}</td>
              <td> {{$item->model}} </td>
              <td> {{$item->tahun}} </td>
              <td> {{$item->warna}} </td>
              <td> {{$item->status}} </td>
              <td> {{$item->harga_sewa}} </td>
              <td> {{$item->merek_id}} </td>
              <td>
                <form action="/mobil/{{ $item->id }}" method="POST" class="d-inline">
                  <a href="/mobil/{{ $item->id }}/edit" class="btn btn-warning btn-sm"><i class="bi bi-pencil"></i> Edit</a>
                  @csrf
                  @method('DELETE')
                  <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure you want to delete this item?')"><i class="bi bi-trash"></i> Delete</button>
                </form>
               </td>
              </tr>
            @endforeach
          </tbody>
        </table>
      </div>
    </div>
  </div>
@endsection