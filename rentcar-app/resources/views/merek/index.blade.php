@extends('layout.master')

@section('isi')
<div class="card">
    <div class="card-body">
        <h4 class="card-title">Tabel Merek</h4>
        <p class="card-description">
            <a href="/merek/create" class="btn btn-primary">
                <i class="fas fa-plus"></i> Tambah Data
            </a>
        </p>
        <div class="table-responsive">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($merk as $key => $item)
                    <tr>
                        <td>{{ $key + 1 }}</td>
                        <td>{{ $item->nama }}</td>
                        <td>
                          <td>
                            <form action="/mobil/{{ $item->id }}" method="POST" class="d-inline">
                              <a href="/mobil/{{ $item->id }}/edit" class="btn btn-warning btn-sm"><i class="bi bi-pencil"></i> Edit</a>
                              @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Apakah Anda yakin ingin menghapus item ini?')">
                                    <i class="bi bi-trash"></i> Hapus
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
