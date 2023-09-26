<?php

namespace App\Http\Controllers\Master;
use App\Models\Master;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class MasterController extends Controller
{
   
    public function __construct()
    {
        
    }

    /**
     * Display a registration form.
     *
     * @return \Illuminate\Http\Response
     */
    public function state()
    {
        $master = new Master;
        $data = $master->stateAll();
        return view('content.master.state')->with('data', $data);
    }
    public function city()
    {
        $master = new Master;
        $state = $master->stateAll();
        $data = $master->cityAll(31);
        $default_st =31;
        return view('content.master.city')->with('data', $data)->with('state', $state)->with('default_st',$default_st);
    }
    public function locality()
    {
        $master = new Master;
        $state = $master->stateAll();
        $city = $master->cityAll(31);
        $data = $master->localityAll(31,490);
        $default_st =31;
        $default_ct =490;
        return view('content.master.locality')->with('data', $data)->with('state', $state)->with('city', $city)->with('default_st',$default_st)->with('default_ct',$default_ct);
    }
    public function stock(){
        return view('content.master.stock');
    }
    public function stocklist(){
        return view('content.master.stocklist');
    }

}