<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Map;
use App\Models\District;

class DistrictController extends Controller
{
public function index(District $district, Request $request){
    return view('districts.index')->with(['districts'=> $district->get()]);
    return view ('districts.index')->with(['latslngs'=> $latslngs->get()]);
}
}
