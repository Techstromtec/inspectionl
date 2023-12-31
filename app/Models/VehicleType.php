<?php 


namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class VehicleType extends Model
{
    protected $fillable = ['name'];

    public function leads()
    {
        return $this->hasMany(Lead::class, 'vehicle_type');
    }
}
