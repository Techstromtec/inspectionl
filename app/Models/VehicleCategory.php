<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class VehicleCategory extends Model
{
    use HasFactory;

    protected $fillable = ['category_name']; // Add any other fillable fields

    public function leads()
    {
        return $this->hasMany(Lead::class, 'vehicle_category');
    }
}
