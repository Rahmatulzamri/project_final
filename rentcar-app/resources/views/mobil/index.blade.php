@extends('layout.master')
@section('isi')
<div class="card">
    <div class="card-body">
      <h4 class="card-title">Tabel Mobil</h4>
      <p class="card-description">
        <a href="{{ route('mobil.create')}}"><button class="btn btn-primary">Tambah data</button></a>
      </p>
      <div class="table-responsive">
        <table class="table table-striped">
          <thead>
            <tr>
              <th> no </th>
              <th> Merek </th>
              <th> Model</th>
              <th> Tahun</th>
              <th> Warna</th>
              <th> No Pol</th>
              <th> status</th>
              <th> Harga Sewa </th>
              <th> Merek</th>
              <th> aksi </th>
            </tr>
          </thead>
          <tbody>
            @foreach ($mobil as $key=>$item)
            <tr>
              <td> {{$key+1}} </td>
              <td> {{$item->merek->nama}} </td> <!-- Ubah baris ini -->
              <td> {{$item->model}} </td>
              <td> {{$item->tahun}} </td>
              <td> {{$item->warna}} </td>
              <td> {{$item->status}} </td>
              <td> {{$item->harga_sewa}} </td>
              <td> {{$item->merek_id}} </td>
              <td>
                  <form action="/mobil/{{$item->id}}" method="POST">
                    <a href="/mobil/{{$item->id}}/edit" class="btn btn-warning btn-sm">Edit</a>
                    @csrf
                    @method("Delete")
                    <input type="submit" class="btn btn-danger btn-sm" value="Delete">
                
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