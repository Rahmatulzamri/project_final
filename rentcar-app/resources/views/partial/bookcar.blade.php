@extends('layout.master')

@section('isi')
<div class="row">
    <div class="col-md-4 mb-4">
        <div class="card">
            <!-- Gambar mobil -->
            <img src="https://www.supercars.net/blog/wp-content/uploads/2016/08/maxresdefault-13.jpg" class="card-img-top" alt="Car Image">
            <div class="card-body">
                <!-- Informasi harga sewa mobil -->
                <h5 class="card-title">Sedan</h5>
                <p class="card-text">Harga Sewa: $100/hari</p>
                <!-- Tombol-tombol aksi -->
                <div class="btn-group" role="group" aria-label="Basic example">
                    <a href="#" class="btn btn-primary">Detail</a>
                    <a href="#" class="btn btn-danger">Edit</a>
                    <a href="#" class="btn btn-danger">Delete</a>
                    <a href="#" class="btn btn-danger">Upload</a>
                </div>
            </div>
        </div>
    </div>

    <div class="col-md-4 mb-4">
        <div class="card">
            <!-- Gambar mobil -->
            <img src="https://img-ik.cars.co.za/news-site-za/images/2015/11/DSC_1413.jpg" class="card-img-top" alt="Car Image">
            <div class="card-body">
                <!-- Informasi harga sewa mobil -->
                <h5 class="card-title">Pajero</h5>
                <p class="card-text">Harga Sewa: $100/hari</p>
                <!-- Tombol-tombol aksi -->
                <div class="btn-group" role="group" aria-label="Basic example">
                    <a href="#" class="btn btn-primary">Detail</a>
                    <a href="#" class="btn btn-danger">Edit</a>
                    <a href="#" class="btn btn-danger">Delete</a>
                    <a href="#" class="btn btn-danger">Upload</a>
                </div>
            </div>
        </div>
    </div>

    <div class="col-md-4 mb-4">
        <div class="card">
            <!-- Gambar mobil -->
            <img src="https://th.bing.com/th/id/OIP.AIqbUtg_YbRMaCGrBLZ3tgHaE7?w=288&h=191&c=7&r=0&o=5&dpr=1.3&pid=1.7" class="card-img-top" alt="Car Image">
            <div class="card-body">
                <!-- Informasi harga sewa mobil -->
                <h5 class="card-title">Honda Brio</h5>
                <p class="card-text">Harga Sewa: $100/hari</p>
                <!-- Tombol-tombol aksi -->
                <div class="btn-group" role="group" aria-label="Basic example">
                    <a href="#" class="btn btn-primary">Detail</a>
                    <a href="#" class="btn btn-danger">Edit</a>
                    <a href="#" class="btn btn-danger">Delete</a>
                    <a href="#" class="btn btn-danger">Upload</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
