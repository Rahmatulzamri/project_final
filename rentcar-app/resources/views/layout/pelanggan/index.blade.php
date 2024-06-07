@extends('layout.master')
@section('isi')
<div class="card">
    <div class="card-body">
      <h4 class="card-title">Table Pelanggan</h4>
      <p class="card-description">
        <a href="/pelanggan/create"><button class="btn btn-primary">Tambah data</button></a>
      </p>
      <div class="table-responsive">
        <table class="table table-striped">
          <thead>
            <tr>
              <th> No </th>
              <th> Nama </th>
              <th> Alamat </th>
              <th> No Telepon </th>
              <th> Email </th>
              <th> No Sim </th>
              <th> No KTP </th>
              <th> Aksi </th>
            </tr>
          </thead>
          <tbody>
            @foreach ($pembeli  as $key=>$item)
            <tr>
              <td> {{$key+1}} </td>
              <td> {{$item->nama}} </td>
              <td> {{$item->no_telpon}} </td>
              <td> {{$item->email}} </td>
              <td> {{$item->alamat}} </td>
              <td> {{$item->no_sim}} </td>
              <td> {{$item->nik}} </td>
              <td>
                  <form action="/pelanggan/{{$item->id}}" method="POST">
                    <a href="{{route('pelanggan.show', $item->id)}}" class="btn btn-info btn-sm">Detail</a>
                    <a href="{{route('pelanggan.edit',$item->id)}}" class="btn btn-warning btn-sm">perbaiki</a>
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