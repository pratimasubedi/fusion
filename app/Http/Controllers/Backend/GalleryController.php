<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;
use App\Models\Gallery;

class GalleryController extends Controller
{
    public function viewGallery()
	{
		$getgallery = Gallery::all();
		return view('admin.gallery.home',compact('getgallery'));
	}
	public function createGallery()
	{
		return view('admin.gallery.create');
	}
	public function storeGallery(Request $request)
    {
    	$gallery = new Gallery;
    	$this->validate($request,[
    		'name' => 'required',
            'designation' => 'required',
    		'faculty' => 'required',
    		'collegename' => 'required',
    		'companyname' => 'required',
			'image' => 'required',
    	]);

    	$gallery->name = $request->name;
        $gallery->designation = $request->designation;
    	$gallery->faculty = $request->faculty;
    	$gallery->college = $request->collegename;
    	$gallery->company = $request->companyname;
    	//save our image
         if(Input::hasFile('image')){
        $file=Input::file('image');
        $destinationPath = 'uploads';
      	$file->move($destinationPath,$file->getClientOriginalName());
        $gallery->image=$file->getClientOriginalName();
      }
    	$gallery->save();

    	session()->flash('success', 'Inserted Successfully!!');
    	return redirect()->route('admin.viewgallery');
    }
    public function editGallery($id)
    {
    	$gallery = Gallery::find($id);
    	return view('admin.gallery.edit',compact('gallery'));
    }
    public function updateGallery(Request $request, $id)
    {
    	$gallery = Gallery::find($id);
    	$this->validate($request,[
    		'name' => 'required',
            'designation' => 'required',
    		'faculty' => 'required',
    		'collegename' => 'required',
    		'companyname' => 'required',
    	]);

    	$gallery->name = $request->name;
    	$gallery->designation = $request->designation;
        $gallery->faculty = $request->faculty;
    	$gallery->college = $request->collegename;
    	$gallery->company = $request->companyname;
    	//save our image
         if(Input::hasFile('image')){
        $file=Input::file('image');
        $destinationPath = 'uploads';
      	$file->move($destinationPath,$file->getClientOriginalName());
        $gallery->image=$file->getClientOriginalName();
      }

    	$gallery->save();

    	session()->flash('success', 'Updated Successfully!!');
    	return redirect()->route('admin.viewgallery');
    }
    public function deleteGallery($id)
    {
    	$gallery = Gallery::destroy($id);
    	session()->flash('success', 'Deleted Successfully!!');
    	return redirect()->route('admin.viewgallery');

    }
}
