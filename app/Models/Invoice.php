<?php

namespace App\Models;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Invoice extends Model
{
    use HasFactory;
    protected $fillable = ['invoice_number', 'amount', 'issue_date','due_date','customer_name','invoice_status'];
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
