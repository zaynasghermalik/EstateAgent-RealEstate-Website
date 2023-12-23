<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use App\Models\Plot;
use App\Models\Seller;
use App\Http\Controllers\Controller; 


class PlotController extends Controller
{

    public function showAdd() {
        $sellers = Seller::all();
        return view ("frontend/plots/add")->with(['sellers' => $sellers]);
    }

    public function store(Request $request) {

        $tmpPlotInfo = new Plot;
        $tmpPlotInfo->plot_no = $request->get('plot_no');
        $tmpPlotInfo->type = $request->get('type');
        $tmpPlotInfo->dimensions = $request->get('dimensions');
        $tmpPlotInfo->price = $request->get('price');

        $tmpPlotInfo->seller_id = $request->get('seller');


        $tmpPlotInfo->save();

        return redirect ('frontend/plot/add')->with('status', 'PLOT Number: '.$tmpPlotInfo->plot_no.' added Successfully!');
    }

    public function read(){
        $plots = Plot::all();


        return view('frontend.plots.read')
        ->with(['plots' => $plots]);

    }
    public function userread(){
        $plots = Plot::all();


        return view('frontend/plot/userread')
        ->with(['plots' => $plots]);

    }
    
    public function delete($id){
        Plot::destroy($id);

        return redirect('frontend/plot/read');
    }

    public function update($id) {
        $plots = Plot::find($id);
        $sellers = Seller::all();   
    
        return view('frontend/plot/update')
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
        return redirect('frontend/plot/read');
    }

}

