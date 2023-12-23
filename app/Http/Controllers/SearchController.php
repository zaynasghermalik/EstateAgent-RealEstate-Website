<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Plot;

class SearchController extends Controller
{
    //


    public function show(){
        return view ("search");
       }




       public function search(Request $request)
       {
           $type = $request->get('type');
           $dimensions = $request->get('dimensions');
           $price = $request->get('price');
   
           $plots = Plot::where('type',$type)->
                                   orWhere('price',$price)->
                                   orWhere('dimensions',$dimensions)->
                                   
                                   get();
                            
                                   if(count($plots) > 0){
   
                                       return view('search',compact('plots'));
                                   
                                   }
                                   else return view ('search',compact('plots'))->withMessage('No Details found. Try to search again !');
   
                               
                             
           
               }
}
