<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;
use App\Models\Album;
use App\Models\Photo;
use DB;

class PhotoController extends Controller
{
    public function viewPhoto()
    {
    	$getphoto = Photo::all();
    	return view('admin.photo.home',compact('getphoto'));
    }
    public function createPhoto()
    {
    	$album = Album::all();
    	return view('admin.photo.create',compact('album'));
    }
    public function storePhoto(Request $request)
    {
    	$photo = new Photo;
    	$this->validate($request,[
    		'album_name' => 'required',
			'image' => 'required',
    	]);

    	$photo->album_id = $request->album_name;
    	//save our image
         if(Input::hasFile('image')){
        $file=Input::file('image');
        $destinationPath = 'uploads';
      	$file->move($destinationPath,$file->getClientOriginalName());
        $photo->image=$file->getClientOriginalName();
      }
    	$photo->save();

    	session()->flash('success', 'Inserted Successfully!!');
    	return redirect()->route('admin.viewphoto');
    }
    public function editPhoto($id)
    {
    	$photo = Photo::find($id);
    	$album = Album::all();
    	return view('admin.photo.edit',compact('photo','album'));
    }
    public function updatePhoto(Request $request, $id)
    {
    	$photo = Photo::find($id);
    	$this->validate($request,[
    		'album_name' => 'required',
    	]);

    	$photo->album_id = $request->album_name;
    	//save our image
         if(Input::hasFile('image')){
        $file=Input::file('image');
        $destinationPath = 'uploads';
      	$file->move($destinationPath,$file->getClientOriginalName());
        $photo->image=$file->getClientOriginalName();
      }

    	$photo->save();

    	session()->flash('success', 'Updated Successfully!!');
    	return redirect()->route('admin.viewphoto');
    }
    public function deletePhoto($id)
    {
    	$photo = Photo::destroy($id);
    	session()->flash('success', 'Deleted Successfully!!');
    	return redirect()->route('admin.viewphoto');

    }
}
