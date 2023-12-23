<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use App\Models\House;
use App\Models\Seller;
use App\Http\Controllers\Controller;

class HouseController extends Controller
{
    //
    public function showAdd() {
        $sellers = Seller::all();
        return view ("house/add")->with(['sellers' => $sellers]);
    }

    public function store(Request $request) {

        $house = new House;
        $house->house_no = $request->get('house_no');
        $house->type = $request->get('type');
        $house->marla = $request->get('marla');
        $house->floors = $request->get('floors');
        $house->bedrooms = $request->get('bedrooms');
        $house->price = $request->get('price');

        $house->seller_id = $request->get('seller');


        $house->save();

        return redirect ('house/add')->with('status', 'HOUSE Number: '.$house->house_no.' added Successfully!');
    }

    public function read(){
        $houses = House::all();


        return view('house/read')
        ->with(['houses' => $houses]);

    }
    public function userread(){
        $houses = House::all();


        return view('house/userread')
        ->with(['houses' => $houses]);

    }
    
    public function delete($id){
        House::destroy($id);

        return redirect('house/read');
    }

    public function update($id) {
        $houses = House::find($id);
        $sellers = Seller::all();   
    
        return view('house/update')
            ->with(['houses' => $houses])->with(['sellers' => $sellers]);
    }


    public function saveUpdatedData(request $updateForm, $id) {
        $houses = House::find($id);  
        
        $houses->house_no = $updateForm->get('house_no');
        $houses->type = $updateForm->get('type');
        $houses->marla = $updateForm->get('marla');
        $houses->floors = $updateForm->get('floors');
        $houses->bedrooms = $updateForm->get('bedrooms');
        $houses->price = $updateForm->get('price');
        $houses->seller_id = $updateForm->get('seller');

    
        $houses->save();
    
        // Reload the read page
        return redirect('house/read');
    }
}
