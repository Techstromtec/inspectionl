<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Valuations3 extends Model
{
    use HasFactory;
    protected $table = 'valuations3'; // Set the table name

    protected $fillable = [
        'keys',
        'battery',
        'mech_cond',
        'body_frame',
        'starts',
        'no_of_tyres',
        'engine_condition',
        'mech_operational',
        'current_vehi_condition',
        'rc_status',
        'insurance',
        'insurance_validity',
        'hpa',
        'hpa_bank',
        'tax_validity',
        'tyre1_per',
        'tyre2_per',
        'tyre3_per',
        'tyre4_per',
        'tyre5_per',
        'tyre6_per',
        'tyre7_per',
        'tyre8_per',
    ];
}
