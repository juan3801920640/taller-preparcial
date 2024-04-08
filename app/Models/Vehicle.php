<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vehicle extends Model
{
    use HasFactory;

    protected $table = 'vehicle';

    protected $primaryKey = 'id_vehicle';

    protected $fillable = [
        'vehicle_brand',
        'doors_number',
        'model',
        'color',
        'cylinder_capacity_cc',
        'horse_power'
    ];
}
