<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Map;


class MapController extends Controller
{
public function index(){
    return view ('index');}
    
public function howuse(){
    return view ('use');
}
public function rules(){
    return view ('terms');
}
}


