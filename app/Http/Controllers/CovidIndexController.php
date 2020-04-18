<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CovidIndexController extends Controller
{
    public function index()
    {
        $api_url = 'https://corona.lmao.ninja/v2/all';
        $data = file_get_contents($api_url);
        $obj = json_decode($data);
        $total_cases = $obj->cases;
        $total_deaths = $obj->deaths;
        $total_recovered = $obj->recovered;
        $total_active = $obj->active;
        return view('index',compact('total_cases','total_deaths','total_recovered','total_active','countries_data'));
    }

}
