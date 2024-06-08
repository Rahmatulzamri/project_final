<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class booking extends Model
{
    use HasFactory;

    protected $table = 'booking';

    protected $fillable = ['id', 'tanggal_mulai','tanggal_selesai', 'total_harga', 'total_denda', 'status', 'pelanggan_id','admin_id'];
}
