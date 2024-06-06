@extends('layout.master')

@section('isi')
    
        <h1>Reservasi</h1>
        <table class="table">
            <thead>
                <tr>
                    <th>Nama</th>
                    <th>Email</th>
                    <th>Nomor Telepon</th>
                    <th>Mobil</th>
                    <th>Tanggal Penjemputan</th>
                    <th>Tanggal Pengembalian</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($reservasi as $rv)
                <tr>
                    <td>{{ $rv->nama }}</td>
                    <td>{{ $rv->email }}</td>
                    <td>{{ $rv->telepon }}</td>
                    <td>{{ $rv->mobil }}</td>
                    <td>{{ $rv->tanggal_penjemputan }}</td>
                    <td>{{ $rv->tanggal_pengembalian }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
