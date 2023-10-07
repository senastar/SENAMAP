<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Map;
use App\Models\District;
use App\Models\City;




class DistrictController extends Controller
{
    public function index(Request $request){
       
        $district = $request->input('district');
            if(!empty($district)) {
                return redirect('/view/'.$district );
            }
        return redirect('/'); 
       
        
    } 
    
    public function show(District $district){
        
       
       return view ('view')->with(['district'=> $district]);
        
       
        
    } 
    
    public function make(Request $request){
       
        $district = $request->input('district');
            if(!empty($district)) {
                return redirect('/create/'.$district );
            }
        return redirect('/'); 
       
        
    } 
    
    public function create(District $district){
        
       
       return view ('create')->with(['district'=> $district]);
        
       
        
    } 
}
