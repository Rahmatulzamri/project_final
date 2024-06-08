<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mobil extends Model
{
    use HasFactory;

    /**
     * Get the merek that owns the mobil.
     */
    public function merek()
    {
        return $this->belongsTo(MerekMobil::class, 'id_merek');
    }

    public function isAvailable()
    {
        return $this->status === 'available';
    }
}
