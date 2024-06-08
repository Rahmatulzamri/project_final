@extends('layout.master')
@section('isi')
<div class="card">
    <div class="card-body">
      <h4 class="card-title">Tabel Booking</h4>
      <p class="card-description">
        <a href="{{ route('booking.create')}}"><button class="btn btn-primary">Tambah data</button></a>
      </p>
      <div class="table-responsive">
        <table class="table table-striped">
          <thead>
            <tr>
              <th> no </th>
              <th> tanggal mulai </th>
              <th> tanggal selesai</th>
              <th> total harga</th>
              <th> total denda</th>
              <th> status</th>
              <th> pelanggan id </th>
              <th> admin id</th>
              <th> aksi </th>
            </tr>
          </thead>
          <tbody>
            @foreach ($booking as $key=>$item)
            <tr>
              <td> {{$key+1}} </td>
              <td> {{$item->tanggal_mulai}} </td>
              <td> {{$item->tanggal_selesai}} </td>
              <td> {{$item->total_harga}} </td>
              <td> {{$item->total_denda}} </td>
              <td> {{$item->status}} </td>
              <td> {{$item->pelanggan_id}} </td>
              <td> {{$item->admin_id}} </td>
              <td>
                  <form action="/booking/{{$item->id}}" method="POST">
                    <a href="/booking/{{$item->id}}/edit" class="btn btn-warning btn-sm">Edit</a>
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