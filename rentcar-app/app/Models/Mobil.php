<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mobil extends Model
{
    use HasFactory;

    protected $table='mobil';

    protected $fillable=['id','merek','tahun','warna','no_pol','status'];

    /**
     * Get the merek that owns the mobil.
     */
    public function mobil()
    {
        return $this->belongsTo(MerekMobil::class, 'id_merek');
    }

    public function isAvailable()
    {
        return $this->status === 'available';
    }
}
