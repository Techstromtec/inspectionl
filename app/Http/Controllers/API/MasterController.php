<?php

namespace App\Http\Controllers\API;
use App\Models\Master;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
class MasterController extends Controller
{
   
    public function __construct()
    {
        $this->middleware('guest')->except([
            'logout', 'dashboard'
        ]);
    }

    /**
     * Display a registration form.
     *
     * @return \Illuminate\Http\Response
     */
    public function state()
    {
        $master = new Master;
        return $data = $master->stateAll();
    }
    public function getuser(Request $request)
    {
        $master = new Master;
        $response = DB::table('users')
            ->where('id', $request->id)
            ->get();
        return $response;
    }
    public function city(Request $request)
    {
        $master = new Master;
        $state_id = $request->id ;
        return $data = $master->cityAll($state_id);
    }
    public function locality(Request $request)
    {
        $master = new Master;
        $state_id = $request->state_id ;
        $city_id = $request->city_id ;
        return $data = $master->localityAll($state_id,$city_id);
    }
}