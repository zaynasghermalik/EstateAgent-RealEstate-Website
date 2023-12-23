<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Seller;

class SellerController extends Controller
{
    //
    public function create() {
        return view ("seller/add");
    }

    public function store(Request $request) {

        $seller = new Seller;
        $seller->name = $request->get('name');
        $seller->cnic = $request->get('cnic');
        $seller->contact_no = $request->get('contact_no');
        $seller->is_owner = $request->get('is_owner');

        $seller->save();

        return redirect ('seller/add');
    }

    public function read(){
        $sellers = Seller::all();


        return view('seller/read')
        ->with(['sellers' => $sellers]);

    }

    public function delete($id){
        Seller::destroy($id);

        return redirect('seller/read');
    }

    public function update($id) {
        $sellers = Seller::find($id);   
    
        return view('seller/update')
            ->with(['sellers' => $sellers]);
    }

    public function saveUpdatedData(request $updateForm, $id) {
        $sellers = Seller::find($id);  
        
        $sellers->name = $updateForm->get('name');
        $sellers->cnic = $updateForm->get('cnic');
        $sellers->contact_no = $updateForm->get('contact_no');
        $sellers->is_owner = $updateForm->get('is_owner');
    
        $sellers->save();
    
        // Reload the read page
        return redirect('seller/read');
    }

    public function userread(){
        $sellers = Seller::all();


        return view('seller/userread')
        ->with(['sellers' => $sellers]);

    }


}
