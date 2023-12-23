<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Buyer;

class BuyerController extends Controller
{
    //
    public function create() {
        return view ("buyer/add");
    }
}
