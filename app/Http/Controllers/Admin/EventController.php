<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Admin\Event;


class EventController extends Controller
{
    public function index()
    {
        return view('admin.add-event');
    }
    public function addEvent(Request $request)

    {
        $request->validate([
                'event_name' => "required",
                'event_tag' => "required",
                'event_content' => "required",
            
            ]);
            
        
            $model = new Event();
            
            $model -> event_name = $request->event_name;
            $model -> event_tag = $request->event_tag;
            $model -> event_content = $request->event_content;
            $model -> event_location = $request->event_location;
            $model -> event_date = $request->event_date;
            $model -> event_ticket_available = $request->event_ticket_available;
            $model -> event_ticket_discount = $request->event_ticket_discount;
            $model -> event_ticket_price = $request->event_ticket_price;
        //  dd($model);
        
            $model ->save();
            
            return back()->with('add-event','Event add successfully');



        
    }
    public function listEvent()
    {
        $event['event'] = Event::all();

        return view('admin.list-event',$event);
    }
}
