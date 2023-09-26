<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lead extends Model
{
    use HasFactory;
    protected $fillable = [
        'client_company', 
        'client_city',
        'vehicle_type',
        'vehicle_category',
        'registration_no',
        'mmv',
        'customer_name', 
        'customer_mobile', 
        'state', 
        'city',
        'area',
        'street', 
        'pincode', 
        'rc_status', 
        'manufacturing_year',
        'registration_year',
        'engine_no',
        'chassis_no',
        'no_of_owners',
        'executive_name',
        'executive_mobile',
        
    ];
    public function vehicleCategory()
    {
        return $this->belongsTo(VehicleCategory::class,'vehicle_category');
    }

    public function vehicleType()
    {
        return $this->belongsTo(VehicleType::class,'vehicle_type');
    }

    public function clientCompany()
    {
        return $this->belongsTo(ClientCompany::class, 'client_company'); // Adjust the foreign key column name if needed
    }
    public function documents()
    {
        return $this->hasMany(Document::class);
    }
}
