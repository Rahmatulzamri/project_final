@extends('layout.master')

@section('isi')
<div class="card">
    <div class="card-body">
        <h4 class="card-title">Table Pelanggan</h4>
        <p class="card-description">
            <a href="/pelanggan/create"><button class="btn btn-primary">Tambah data</button></a>
        </p>
        <div class="table-responsive">
            <table class="table table-striped table-bordered">
                <thead class="thead-dark">
                    <tr>
                        <th>No</th>
                        <th>Nama</th>
                        <th>No Telepon</th>
                        <th>Email</th>
                        <th>Alamat</th>
                        <th>No Sim</th>
                        <th>No KTP/NIK</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($pembeli as $key => $item)
                    <tr>
                        <td>{{ $key + 1 }}</td>
                        <td>{{ $item->nama }}</td>
                        <td>{{ $item->no_telpon }}</td>
                        <td>{{ $item->email }}</td>
                        <td>{{ $item->alamat }}</td>
                        <td>{{ $item->no_sim }}</td>
                        <td>{{ $item->nik }}</td>
                        <td>
                            <form action="/pelanggan/{{ $item->id }}" method="POST" class="d-inline">
                                <a href="{{ route('pelanggan.show', $item->id) }}" class="btn btn-info btn-sm">Detail</a>
                                <a href="{{ route('pelanggan.edit', $item->id) }}" class="btn btn-warning btn-sm">Perbaiki</a>
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure?')">Delete</button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>

<style>
    .card-title {
        font-weight: bold;
        color: #4b6584;
    }

    .card-description .btn-primary {
        background-color: #1e3799;
        border-color: #1e3799;
    }

    .table thead.thead-dark th {
        background-color: #34495e;
        color: #fff;
    }

    .table-striped tbody tr:nth-of-type(odd) {
        background-color: rgba(0,0,0,.05);
    }

    .btn-sm {
        margin: 0 2px;
    }
</style>
@endsection
