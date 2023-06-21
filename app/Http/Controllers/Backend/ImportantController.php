<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;
use App\Models\Important;

class ImportantController extends Controller
{
    public function viewLink()
    {
    	$link = Important::all();
    	return view('admin.link.home',compact('link'));
    }
    public function createLink()
    {
    	return view('admin.link.create');
    }
    public function storeLink(Request $request)
    {
    	$link = new Important;
    	$this->validate($request,[
    		'title' => 'required', 
    		'url' => 'required', 
    	]);

    	$link->title = $request->title;
    	$link->url = $request->url;
    	$link->save();
    	session()->flash('success','Link Added Successfully!!!');
    	return redirect()->route('admin.viewlink');
    }
    public function editLink($id)
    {
    	$link = Important::find($id);
    	return view('admin.link.edit',compact('link'));
    }
    public function updateLink(Request $request,$id)
    {
    	$link = Important::find($id);
    	$this->validate($request,[
    		'title' => 'required', 
    		'url' => 'required', 
    	]);

    	$link->title = $request->title;
    	$link->url = $request->url;
    	$link->save();
    	session()->flash('success','Link Updated Successfully!!!');
    	return redirect()->route('admin.viewlink');
    }
    public function deleteLink($id)
    {
    	$link = Important::destroy($id);
    	session()->flash('success','Link Deleted Successfully');
    	return redirect()->route('admin.viewlink');
    }
}
