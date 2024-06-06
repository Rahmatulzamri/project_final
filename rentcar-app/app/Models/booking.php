<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class booking extends Model
{
    protected $fillable = ['name', 'email', 'phone', 'car', 'pickup', 'dropoff'];
}
