<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Http;
use Illuminate\Http\Request;

class CovidIndexController extends Controller
{
    public function index()
    {

        //BD api
        $host = 'https://fastaar.com/api';
        $list_data = $this->getApi($host)['total'];
        $newlist=$this->getApi($host)['new'];
        $bdtable=$this->getApi($host)['districts'];

        $api_url = 'https://corona.lmao.ninja/v2/all';
        $data = file_get_contents($api_url);
        $obj = json_decode($data);
        $total_cases = $obj->cases;
        $total_deaths = $obj->deaths;
        $total_recovered = $obj->recovered;
        $total_active = $obj->active;
        return view('index', compact('total_cases', 'total_deaths', 'total_recovered', 'total_active','list_data','newlist', 'bdtable','country', 'countries_data'));
    }

    //Bd api fetch
    private function getApi($host){
        return Http::withHeaders([
            'x-rapidapi-host' => $host
        ])->get('https://fastaar.com/api',[

        ]);
    }



}
