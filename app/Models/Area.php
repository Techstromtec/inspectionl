<?php


namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Area extends Model
{
    protected $table = 'master_locality'; // Table name in the database

    protected $fillable = ['locality_name', 'locality_id']; // Fillable fields
}