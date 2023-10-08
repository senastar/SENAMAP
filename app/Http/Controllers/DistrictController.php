<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Map;
use App\Models\District;
use App\Models\City;
use App\Models\Review;



class DistrictController extends Controller
{
    public function index(Request $request){
       
        $district = $request->input('district');
            if(!empty($district)) {
                return redirect('/view/'.$district );
            }
        return redirect('/'); 
       
        
    } 
    
    public function show(District $district, Review $review){
        
       
       return view ('view')->with(['district'=> $district, 'reviews'=> $review->getPaginateByLimit()]);
        
       
        
    } 
    
    public function make(District $district){
        
        return view ('make')->with(['district'=> $district]);
    }
}
