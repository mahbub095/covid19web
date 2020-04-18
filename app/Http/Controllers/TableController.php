<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TableController extends Controller
{
    public function worldtable(){

        $api_url_countries = 'https://corona.lmao.ninja/v2/countries';
        $countries_data = json_decode(file_get_contents($api_url_countries));

        return view('worldtabel',compact('countries_data'));
    }
}
