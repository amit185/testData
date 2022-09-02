<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Admin\Landmark;

class LandmarkController extends Controller
{
    public function index()
    {
        return view('admin.add-landmark');
    }
    public function addLandmark(Request $request)

    {

            
            
            $model = new Landmark();
            
            $model -> landmark_name = $request->landmark_name;
            $model -> landmark_tag = $request->landmark_tag;
            $model -> landmark_content = $request->landmark_content;
            $model -> landmark_location = $request->landmark_location;
            $model -> landmark_ticket_available = $request->landmark_ticket_available;
            $model -> landmark_ticket_discount = $request->landmark_ticket_discount;
            $model -> landmark_ticket_price = $request->landmark_ticket_price;
            $model -> landmark_events = $request->landmark_events;
        //  dd($model);
        
            $model ->save();
            
            return back()->with('add-landmark','Landmark add successfully');



        
    }
    public function listLandmark()
    {
        $landmark['landmark'] = Landmark::all();

        return view('admin.list-landmark',$landmark);
    }
}
