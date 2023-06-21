<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;
use App\Models\About;

class AboutController extends Controller
{
    public function viewAbout()
    {
    	$getabout = About::all();
    	return view('admin.about.home',compact('getabout'));
    }
    public function createAbout()
    {
    	return view('admin.about.create');
    }
    public function storeAbout(Request $request)
    {
    	$about = new About;
    	$this->validate($request,[
    		'title' => 'required',
    		'desc' => 'required',
			'image' => 'required',
    	]);

    	$about->title = $request->title;
    	$about->description = $request->desc;
    	//save our image
         if(Input::hasFile('image')){
        $file=Input::file('image');
        $destinationPath = 'uploads';
      	$file->move($destinationPath,$file->getClientOriginalName());
        $about->image=$file->getClientOriginalName();
      }
    	$about->save();

    	session()->flash('success', 'Inserted Successfully!!');
    	return redirect()->route('admin.viewabout');
    }
    public function editAbout($id)
    {
    	$abt = About::find($id);
    	return view('admin.about.edit',compact('abt'));
    }
    public function updateAbout(Request $request, $id)
    {
    	$about = About::find($id);
    	$this->validate($request,[
    		'title' => 'required',
    		'desc' => 'required',
    	]);

    	$about->title = $request->title;
    	$about->description = $request->desc;
    	//save our image
         if(Input::hasFile('image')){
        $file=Input::file('image');
        $destinationPath = 'uploads';
      	$file->move($destinationPath,$file->getClientOriginalName());
        $about->image=$file->getClientOriginalName();
      }

    	$about->save();

    	session()->flash('success', 'Updated Successfully!!');
    	return redirect()->route('admin.viewabout');
    }
    public function deleteAbout($id)
    {
    	$about = About::destroy($id);
    	session()->flash('success', 'Deleted Successfully!!');
    	return redirect()->route('admin.viewabout');

    }
}
