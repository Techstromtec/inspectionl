<?php


namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class City extends Model
{
    protected $table = 'master_city'; // Table name in the database

    protected $fillable = ['city_name', 'city_id']; // Fillable fields
}