<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Plot;
use App\Models\Seller;
use App\Http\Controllers\PlotController;


class PlotController extends Controller
{

    public function showAdd() {
        $sellers = Seller::all();
        return view ("plot/add")->with(['sellers' => $sellers]);
    }

    public function store(Request $request) {

        $tmpPlotInfo = new Plot;
        $tmpPlotInfo->plot_no = $request->get('plot_no');
        $tmpPlotInfo->type = $request->get('type');
        $tmpPlotInfo->dimensions = $request->get('dimensions');
        $tmpPlotInfo->price = $request->get('price');

        $tmpPlotInfo->seller_id = $request->get('seller');


        $tmpPlotInfo->save();

        return redirect ('plot/add')->with('status', 'PLOT Number: '.$tmpPlotInfo->plot_no.' added Successfully!');
    }

    public function read(){
        $plots = Plot::all();


        return view('plot/read')
        ->with(['plots' => $plots]);

    }
    public function userread(){
        $plots = Plot::all();


        return view('plot/userread')
        ->with(['plots' => $plots]);

    }
    
    public function delete($id){
        Plot::destroy($id);

        return redirect('plot/read');
    }

    public function update($id) {
        $plots = Plot::find($id);
        $sellers = Seller::all();   
    
        return view('plot/update')
            ->with(['plots' => $plots])->with(['sellers' => $sellers]);
    }

    public function saveUpdatedData(request $updateForm, $id) {
        $plots = Plot::find($id);  
    
        $plots->plot_no = $updateForm->get('plot_no');
        $plots->type = $updateForm->get('type');
        $plots->dimensions = $updateForm->get('dimensions');
        $plots->price = $updateForm->get('price');

        $plots->seller_id = $updateForm->get('seller');
    
        $plots->save();
    
        // Reload the read page
        return redirect('plot/read');
    }

}

