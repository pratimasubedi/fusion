<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;
use App\Models\Event;

class EventController extends Controller
{
    public function viewEvent()
    {
    	$getevent = Event::all();
    	return view('admin.event.home',compact('getevent'));
    }
    public function createEvent()
    {
    	return view('admin.event.create');
    }
    public function storeEvent(Request $request)
    {
    	$event = new Event;
    	$this->validate($request,[
    		'slug' => 'required|unique:events|min:5',
    		'title' => 'required',
    		'desc' => 'required',
			'image' => 'required',
			'date' => 'required',
    	]);

    	$event->slug = $request->slug;
    	$event->title = $request->title;
    	$event->description = $request->desc;
    	$event->date = $request->date;
    	//save our image
         if(Input::hasFile('image')){
        $file=Input::file('image');
        $destinationPath = 'uploads';
      	$file->move($destinationPath,$file->getClientOriginalName());
        $event->image=$file->getClientOriginalName();
      }
      // dd($event);
    	$event->save();

    	session()->flash('success', 'Inserted Successfully!!');
    	return redirect()->route('admin.viewevent');
    }
    public function editEvent($id)
    {
    	$event = Event::find($id);
    	return view('admin.event.edit',compact('event'));
    }
    public function updateEvent(Request $request, $id)
    {
    	$event = Event::find($id);
    	
    	if($request->input('slug') == $event->slug)
        {
            $this->validate($request,[
    		'title' => 'required',
    		'desc' => 'required',
			'date' => 'required',
            
        ]);

        }else{

            $this->validate($request,[
            	'slug' => 'required|unique:events|min:5',
	    		'title' => 'required',
	    		'desc' => 'required',
				'date' => 'required',
            ]);
        }

    	$event->slug = $request->slug;
    	$event->title = $request->title;
    	$event->description = $request->desc;
    	$event->date = $request->date;
    	//save our image
         if(Input::hasFile('image')){
        $file=Input::file('image');
        $destinationPath = 'uploads';
      	$file->move($destinationPath,$file->getClientOriginalName());
        $event->image=$file->getClientOriginalName();
      }

    	$event->save();

    	session()->flash('success', 'Updated Successfully!!');
    	return redirect()->route('admin.viewevent');
    }

    public function deleteEvent($id)
    {
    	$event = Event::destroy($id);
    	session()->flash('success', 'Deleted Successfully!!');
    	return redirect()->route('admin.viewevent');

    }
}
