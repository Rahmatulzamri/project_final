@extends('layout.master')

@section('title')
halaman dashboard
@endsection

@section('isi')
<div class="row">
    <div class="col-xl-3 col-sm-6 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <div class="row">
                    <div class="col-9">
                        <div class="d-flex align-items-center align-self-start">
                            <h3 class="mb-0">10</h3>
                            <p class="text-success ml-2 mb-0 font-weight-medium">+3.5%</p>
                        </div>
                    </div>
                    <div class="col-3">
                        <div class="icon icon-box-success ">
                            <span class="mdi mdi-car icon-item"></span>
                        </div>
                    </div>
                </div>
                <h6 class="text-muted font-weight-normal">Total Pesanan</h6>
            </div>
        </div>
    </div>
    <div class="col-xl-3 col-sm-6 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <div class="row">
                    <div class="col-9">
                        <div class="d-flex align-items-center align-self-start">
                            <h3 class="mb-0">5</h3>
                            <p class="text-success ml-2 mb-0 font-weight-medium">+11%</p>
                        </div>
                    </div>
                    <div class="col-3">
                        <div class="icon icon-box-success">
                            <span class="mdi mdi-car-connected icon-item"></span>
                        </div>
                    </div>
                </div>
                <h6 class="text-muted font-weight-normal">Pesanan Hari Ini</h6>
            </div>
        </div>
    </div>
    <div class="col-xl-3 col-sm-6 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <div class="row">
                    <div class="col-9">
                        <div class="d-flex align-items-center align-self-start">
                            <h3 class="mb-0">2</h3>
                            <p class="text-danger ml-2 mb-0 font-weight-medium">-2.4%</p>
                        </div>
                    </div>
                    <div class="col-3">
                        <div class="icon icon-box-danger">
                            <span class="mdi mdi-car-estate icon-item"></span>
                        </div>
                    </div>
                </div>
                <h6 class="text-muted font-weight-normal">Pesanan Dibatalkan</h6>
            </div>
        </div>
    </div>
    <div class="col-xl-3 col-sm-6 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <div class="row">
                    <div class="col-9">
                        <div class="d-flex align-items-center align-self-start">
                            <h3 class="mb-0">8</h3>
                            <p class="text-success ml-2 mb-0 font-weight-medium">+3.5%</p>
                        </div>
                    </div>
                    <div class="col-3">
                        <div class="icon icon-box-success ">
                            <span class="mdi mdi-car-convertible icon-item"></span>
                        </div>
                    </div>
                </div>
                <h6 class="text-muted font-weight-normal">Pesanan Aktif</h6>
            </div>
        </div>
    </div>
</div>

  <div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">RENTAL ZONE</h4>
                <div class="row">
                  <body>
                    <div class="container mt-5">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>NO</th>
                                    <th>Nama Kota</th>
                                    <th>Jarak Tempuh</th>
                                    <th>Jam ke Tujuan</th>
                                    <th>Lokasi</th>  
                                </tr>
                            </thead>
                            <tbody id="table-body">
                                <tr data-lat="1.4803" data-lng="102.1317">
                                    <td></td>
                                    <td>Bengkalis</td>
                                    <td class="text-right">189,1 km</td>
                                    <td class="text-right font-weight-medium">5 jam 16 mnt</td>
                                    <td><a href="#" target="_blank" class="btn btn-primary">Lokasi</a></td> 
                                </tr>
                                <tr data-lat="0.3538" data-lng="100.2257">
                                    <td></td>
                                    <td>Kampar</td>
                                    <td class="text-right">82,2 km</td>
                                    <td class="text-right font-weight-medium">2 jam 17 mnt</td>
                                    <td><a href="#" target="_blank" class="btn btn-primary">Lokasi</a></td> 
                                </tr>
                                <tr data-lat="2.1089" data-lng="100.8136">
                                    <td></td>
                                    <td>Rokan Hilir</td>
                                    <td class="text-right">199,4 km</td>
                                    <td class="text-right font-weight-medium">3 jam 31 mnt</td>
                                    <td><a href="#" target="_blank" class="btn btn-primary">Lokasi</a></td> 
                                </tr>
                                <tr data-lat="0.7198" data-lng="101.5207">
                                    <td></td>
                                    <td>Perawang</td>
                                    <td class="text-right">43,8 km</td>
                                    <td class="text-right font-weight-medium">1 jam 1 mnt</td>
                                    <td><a href="#" target="_blank" class="btn btn-primary">Lokasi</a></td> 
                                </tr>
                            </tbody>
                        </table>
                    </div>
                
                    <script>
                        document.addEventListener('DOMContentLoaded', function() {
                            var tableBody = document.getElementById('table-body');
                            var rows = tableBody.getElementsByTagName('tr');
                            for (var i = 0; i < rows.length; i++) {
                                rows[i].getElementsByTagName('td')[0].innerText = i + 1;
                                var lat = rows[i].getAttribute('data-lat');
                                var lng = rows[i].getAttribute('data-lng');
                                var link = rows[i].getElementsByTagName('a')[0];
                                link.href = `https://www.google.com/maps/search/?api=1&query=${lat},${lng}`;
                            }
                        });
                    </script>
                </body>
            </div>
         </div>
       </div>
    </div>
  </div>
@endsection
