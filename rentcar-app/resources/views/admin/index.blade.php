@extends('layout.master')
@section('isi')
<div class="card">
    <div class="card-body">
      <h4 class="card-title">Tabel Administrator</h4>
      <p class="card-description">
        <a href="/administrator/create" class="btn btn-success">Tambah Data</a>
      </p>
      <div class="table-responsive">
        <table class="table table-striped">
          <thead>
            <tr>
              <th>No</th>
              <th>Nama</th>
              <th>Email</th>
              <th>Password</th>
              <th>Aksi</th>
            </tr>
          </thead>
          <tbody>
            @foreach ($admin as $key => $item)
            <tr>
              <td>{{ $key + 1 }}</td>
              <td>{{ $item->nama }}</td>
              <td>{{ $item->email }}</td>
              <td>{{ $item->password }}</td>
              <td>
                <form action="/administrator/{{ $item->id }}" method="POST" class="d-inline">
                  <a href="/administrator/{{ $item->id }}/edit" class="btn btn-warning btn-sm">
                      <i class="bi bi-pencil"></i> Edit
                  </a>
                  @csrf
                  @method('DELETE')
                  <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure you want to delete this item?')">
                      <i class="bi bi-trash"></i> Delete
                  </button>
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
