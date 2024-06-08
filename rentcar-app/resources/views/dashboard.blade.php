@extends('layout.master')

@section('title')
halaman dashboard
@endsection

@section('isi')
  <div class="row">
    <div class="col-12">
        <div class="card" style="box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);">
            <div class="card-body" style="padding: 20px;">
                <h4 class="card-title" style="color: #337ab7;">RENTAL ZONE</h4>
                <div class="row">
                  <body>
                    <div class="container mt-5" style="background-color: #f9f9f9; padding: 20px;">
                        <table class="table table-bordered table-striped" style="border-collapse: collapse;">
                            <thead>
                                <tr>
                                    <th style="background-color: #337ab7; color: #fff;">NO</th>
                                    <th style="background-color: #337ab7; color: #fff;">Nama Kota</th>
                                    <th style="background-color: #337ab7; color: #fff;">Jarak Tempuh</th>
                                    <th style="background-color: #337ab7; color: #fff;">Jam ke Tujuan</th>
                                    <th style="background-color: #337ab7; color: #fff;">Lokasi</th>  
                                </tr>
                            </thead>
                            <tbody id="table-body">
                                <tr data-lat="1.4803" data-lng="102.1317">
                                    <td></td>
                                    <td>Bengkalis</td>
                                    <td class="text-right">189,1 km</td>
                                    <td class="text-right font-weight-medium">5 jam 16 mnt</td>
                                    <td><a href="#" target="_blank" class="btn btn-primary btn-sm">Lokasi</a></td> 
                                </tr>
                                <tr data-lat="0.3538" data-lng="100.2257">
                                    <td></td>
                                    <td>Kampar</td>
                                    <td class="text-right">82,2 km</td>
                                    <td class="text-right font-weight-medium">2 jam 17 mnt</td>
                                    <td><a href="#" target="_blank" class="btn btn-primary btn-sm">Lokasi</a></td> 
                                </tr>
                                <tr data-lat="2.1089" data-lng="100.8136">
                                    <td></td>
                                    <td>Rokan Hilir</td>
                                    <td class="text-right">199,4 km</td>
                                    <td class="text-right font-weight-medium">3 jam 31 mnt</td>
                                    <td><a href="#" target="_blank" class="btn btn-primary btn-sm">Lokasi</a></td> 
                                </tr>
                                <tr data-lat="0.7198" data-lng="101.5207">
                                    <td></td>
                                    <td>Perawang</td>
                                    <td class="text-right">43,8 km</td>
                                    <td class="text-right font-weight-medium">1 jam 1 mnt</td>
                                    <td><a href="#" target="_blank" class="btn btn-primary btn-sm">Lokasi</a></td> 
                                </tr>
                            </tbody>
                        </table>
                    </div>
                
                    <script>
                        document.addEventListener('DOMContentLoaded', function() {
                            var tableBody = document.getElementById('table-body');
                            var rows = tableBody.getElementsByTagName('tr');
                            var originLat = 0.533333; // Universitas Lancang Kuning latitude
                            var originLng = 101.433333; // Universitas Lancang Kuning longitude
                            for (var i = 0; i < rows.length; i++) {
                                rows[i].getElementsByTagName('td')[0].innerText = i + 1;
                                var lat = rows[i].getAttribute('data-lat');
                                var lng = rows[i].getAttribute('data-lng');
                                var link = rows[i].getElementsByTagName('a')[0];
                                link.href = `https://www.google.com/maps/dir/?api=1&origin=${originLat},${originLng}&destination=${lat},${lng}`;
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