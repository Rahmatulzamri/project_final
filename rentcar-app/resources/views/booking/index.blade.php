@extends('layout.master')
@section('isi')
<div class="card">
    <div class="card-body">
      <h4 class="card-title">Tabel Booking</h4>
      <p class="card-description">
        <a href="/booking/create"><button class="btn btn-primary">Tambah data</button></a>
      </p>
      <div class="table-responsive">
        <table class="table table-striped">
          <thead>
            <tr>
              <th> no </th>
              <th> tanggal mulai </th>
              <th> tanggal selesai</th>
              <th> status booking</th>
              <th> bookingcol </th>
              <th> aksi </th>
            </tr>
          </thead>
          <tbody>
            @foreach ($merk  as $key=>$item)
            <tr>
              <td> {{$key+1}} </td>
              <td> {{$item->tanggal_mulai}} </td>
              <td> {{$item->tanggal_selesai}} </td>
              <td> {{$item->tanggal_booking}} </td>
              <td> {{$item->tanggal_bookingcol}} </td>
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