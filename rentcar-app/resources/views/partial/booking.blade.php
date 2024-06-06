@extends('layout.master')

@section('isi')
    <div class="container">
        <h1>Booking Mobil</h1>
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
                @foreach($bookings as $booking)
                <tr>
                    <td>{{ $booking->name }}</td>
                    <td>{{ $booking->email }}</td>
                    <td>{{ $booking->phone }}</td>
                    <td>{{ $booking->car }}</td>
                    <td>{{ $booking->pickup }}</td>
                    <td>{{ $booking->dropoff }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
