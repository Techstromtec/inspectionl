<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ClientCompany extends Model
{
    use HasFactory;
    protected $fillable = ['name']; // Add any other fillable fields

    public function leads()
    {
        return $this->hasMany(Lead::class, 'client_company'); // Adjust the foreign key column name if needed
    }
}
