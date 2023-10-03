<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Map;
use App\Models\District;
use App\Models\City;

class DistrictController extends Controller
{
public function index(District $district, City $cities, Request $request ){
    $input = $request['district'];
    $input += ['city_id' => $request->city_id];
    $district->fill($input)->save();
    return redirect('/view/'.$district->id);
    
}
}
