<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Service;

class ServiceController extends Controller
{
    public function viewService()
    {
    	$getservice = Service::all();
    	return view('admin.service.home',compact('getservice'));
    }
    public function createService()
    {
    	return view('admin.service.create');
    }
    public function storeService(Request $request)
    {
    	$service = new Service;
    	$this->validate($request,[
    		'title' => 'required',
    		'desc' => 'required',
			'icon' => 'required',
    	]);

    	$service->title = $request->title;
    	$service->description = $request->desc;
    	$service->image = $request->icon;
    	// dd($service);
    	
    	$service->save();

    	session()->flash('success', 'Inserted Successfully!!');
    	return redirect()->route('admin.viewservice');
    }
    public function editService($id)
    {
    	$serv = Service::find($id);
    	return view('admin.service.edit',compact('serv'));
    }
    public function updateService(Request $request, $id)
    {
    	$service = Service::find($id);
    	$this->validate($request,[
    		'title' => 'required',
    		'desc' => 'required',
    		'icon' => 'required',
    	]);

    	$service->title = $request->title;
    	$service->description = $request->desc;
    	$service->image = $request->icon;

    	$service->save();

    	session()->flash('success', 'Updated Successfully!!');
    	return redirect()->route('admin.viewservice');
    }
    public function deleteService($id)
    {
    	$service = Service::destroy($id);
    	session()->flash('success', 'Deleted Successfully!!');
    	return redirect()->route('admin.viewservice');

    }
}
