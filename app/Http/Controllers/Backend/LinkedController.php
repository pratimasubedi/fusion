<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;
use App\Models\Linkedcompany;

class LinkedController extends Controller
{
    public function viewCompany()
	{
		$getcompany = Linkedcompany::all();
		return view('admin.company.home',compact('getcompany'));
	}
	public function createCompany()
	{
		return view('admin.company.create');
	}
	public function storeCompany(Request $request)
    {
    	$company = new Linkedcompany;
    	$this->validate($request,[
			'image' => 'required',
    	]);
    	//save our image
         if(Input::hasFile('image')){
        $file=Input::file('image');
        $destinationPath = 'uploads';
      	$file->move($destinationPath,$file->getClientOriginalName());
        $company->image=$file->getClientOriginalName();
      }
    	$company->save();

    	session()->flash('success', 'Inserted Successfully!!');
    	return redirect()->route('admin.viewassociatecompany');
    }
    public function editCompany($id)
    {
    	$company = Linkedcompany::find($id);
    	return view('admin.company.edit',compact('company'));
    }
    public function updateCompany(Request $request, $id)
    {
    	$company = Linkedcompany::find($id);
    	//save our image
         if(Input::hasFile('image')){
        $file=Input::file('image');
        $destinationPath = 'uploads';
      	$file->move($destinationPath,$file->getClientOriginalName());
        $company->image=$file->getClientOriginalName();
      }

    	$company->save();

    	session()->flash('success', 'Updated Successfully!!');
    	return redirect()->route('admin.viewassociatecompany');
    }
    public function deleteCompany($id)
    {
    	$company = Linkedcompany::destroy($id);
    	session()->flash('success', 'Deleted Successfully!!');
    	return redirect()->route('admin.viewassociatecompany');

    }
}
