<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Map;
use App\Models\District;
use App\Models\latslngs;


class MapController extends Controller
{
public function index(District $district, Request $request){
    return view ('index')->with(['districts'=> $district->get()]);
    
}
    
public function howuse(){
    return view ('use');
}
public function rules(){
    return view ('terms');
}

}


