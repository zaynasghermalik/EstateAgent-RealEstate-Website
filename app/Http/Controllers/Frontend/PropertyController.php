<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PropertyController extends Controller
{
    public function index() {
        return view('frontend.property-grid');
        return view('frontend.property-single');
        
        
    }
    
}
