<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Map;
use App\Models\District;
use App\Models\City;




class DistrictController extends Controller
{
    protected $fillable = [
        'id',
        'district_name',
        'city_id'
        ];
    
public function index(District $district, Request $request ){
    $input = $request['district'];
    $district->fill($input)->save();
    return redirect('/view/'.$district->id);
    
} 
}
