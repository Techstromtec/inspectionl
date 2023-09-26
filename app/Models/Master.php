<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Master extends Model
{
    use HasFactory;
    /* Get All State list */
    public function stateAll(){
        $response = DB::table('master_state')
            ->select('state_id', 'state_name','status','display_name')
            ->get();
        return $response;
    }
    /* Get All City List */
    public function cityAll($state){
        $response = DB::table('master_city')
             ->join('master_state', 'master_state.state_id', '=', 'master_city.state_id')
            ->select('master_city.city_id', 'master_state.state_name','master_city.city_id','master_city.city_name')
            ->where('master_city.state_id', $state)
            ->get();
        return $response;
    }
    /* Get All Locality List */
    public function localityAll($state,$city){
        $response = DB::table('master_locality')
        ->join('master_city', 'master_city.city_id', '=', 'master_locality.city_id')
        ->join('master_state', 'master_state.state_id', '=', 'master_locality.state_id')
        ->where('master_locality.state_id', $state)
        ->where('master_locality.city_id', $city)
            ->select('master_locality.locality_id', 'master_locality.locality_name','master_city.city_name','master_state.state_name')
            ->get();
        return $response;
    }
}

