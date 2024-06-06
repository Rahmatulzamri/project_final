<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reservasi extends Model
{
    use HasFactory;
    protected $table = 'reservasi';

    protected $fillable = ['nama', 'email', 'telepon', 'mobil', 'tanggal_penjemputan', 'tanggal_pengembalian'];
    protected $guarded = ['id', 'created_at', 'updated_at'];
}
