@extends('layout.master')
@section('isi')
<div class="card">
    <div class="card-body">
      <h4 class="card-title">Tabel Administrator</h4>
      <p class="card-description">
        <a href="/administrator/create"><button class="btn btn-primary">Tambah data</button></a>
      </p>
      <div class="table-responsive">
        <table class="table table-striped">
          <thead>
            <tr>
              <th> no </th>
              <th> nama </th>
              <th> email </th>
              <th> password </th>
              <th> aksi </th>
            </tr>
          </thead>
          <tbody>
            @foreach ($admin  as $key=>$item)
            <tr>
              <td> {{$key+1}} </td>
              <td> {{$item->nama}} </td>
              <td> {{$item->email}} </td>
              <td> {{$item->password}} </td>
              <td>
                  <form action="/administrator/{{$item->id}}" method="POST">
                    <a href="/administrator/{{$item->id}}/edit" class="btn btn-warning btn-sm">Edit</a>
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