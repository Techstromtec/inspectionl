<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Valuations2 extends Model
{
    use HasFactory;
    protected $table = 'valuations2'; // Table name in the database
    protected $fillable = [
        'lead_id',
        'manufacture_ym',
        'make',
        'model',
        'variant',
        'location',
        'fuel_type',
        'vehicle_regi_number',
        'vehi_regi_year',
        'chassis_number',
        'engine_number',
        'vehicle_summary',
        'color',
        'transmission',
        'odo_mtr',
        'reg_number',
        'reg_year_mon',
    ];

    
}
