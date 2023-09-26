<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Agreement extends Model
{

    use HasFactory;
    protected $fillable = [
        '_token'
    ];

    /* Get All Agreement list */
    public function AgreementAll(){
        $response = DB::table('agreements')
        
            ->get();
        return $response;
    }
    /* Get All State list */
    public function AgreementTypeAll(){
        $response = DB::table('agreement_types')
            ->select('id', 'name','description')
            ->get();
        return $response;
    }
    /* Get All State list */
    public function UsersAll(){
        $response = DB::table('users')
            ->select('id', 'name','mobile')
            ->get();
        return $response;
    }
}
