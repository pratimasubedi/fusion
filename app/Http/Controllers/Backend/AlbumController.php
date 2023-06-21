<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;
use App\Models\Album;

class AlbumController extends Controller
{
    public function viewAlbum()
    {
    	$album = Album::all();
    	return view('admin.album.home',compact('album'));
    }
    public function createalbum()
    {
    	return view('admin.album.create');
    }
    public function storeAlbum(Request $request)
    {
    	$album = new Album;
    	$this->validate($request,[
    		'name' => 'required',
			'image' => 'required',
    	]);

    	$album->albumname = $request->name;
    	//save our image
         if(Input::hasFile('image')){
        $file=Input::file('image');
        $destinationPath = 'uploads';
      	$file->move($destinationPath,$file->getClientOriginalName());
        $album->image=$file->getClientOriginalName();
      }
    	$album->save();

    	session()->flash('success', 'Inserted Successfully!!');
    	return redirect()->route('admin.viewalbum');
    }
    public function editAlbum($id)
    {
    	$album = Album::find($id);
    	return view('admin.album.edit',compact('album'));
    }
    public function updateAlbum(Request $request, $id)
    {
    	$album = Album::find($id);
    	$this->validate($request,[
    		'name' => 'required',
    	]);

    	$album->albumname = $request->name;
    	//save our image
         if(Input::hasFile('image')){
        $file=Input::file('image');
        $destinationPath = 'uploads';
      	$file->move($destinationPath,$file->getClientOriginalName());
        $album->image=$file->getClientOriginalName();
      }

    	$album->save();

    	session()->flash('success', 'Updated Successfully!!');
    	return redirect()->route('admin.viewalbum');
    }
    public function deleteAlbum($id)
    {
    	$album = Album::destroy($id);
    	session()->flash('success', 'Deleted Successfully!!');
    	return redirect()->route('admin.viewalbum');

    }
}
