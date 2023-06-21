<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Contact;
use App\UserCategory;
use App\Models\Category;

class ContactController extends Controller
{
    public function viewContact()
    {
    	$getcontact = Contact::all();
    	return view('admin.contact.home',compact('getcontact'));
    }
    public function storeContact(Request $request)
    {
        $contact = new Contact;
        
        $contact->name = $request->name;
        $contact->email = $request->email;
        $contact->phone = $request->phone;
        $contact->subject = $request->subject;
        $contact->message = $request->message;
        // dd($contact);
        $contact->save();
        session()->flash('success','Many Thanks For Enquiry!!!');
        return redirect()->back();
    }

    public function deleteContact($id)
    {
    	$contact = Contact::destroy($id);
    	session()->flash('success','Deleted Successfully!!!');
    	return redirect()->route('admin.viewcontact');
    }

    public function postedJob()
    {
        $datajob = UserCategory::orderBy('id','desc')->get();
        return view('admin.jobpost',compact('datajob'));
    }
    public function deleteJob($id)
    {
        $datajob = UserCategory::destroy($id);
        session()->flash('success','Deleted Successfully!!!');
        return redirect()->route('admin.viewpostedjob');
    }
    public function jobApproval()
    {
        $getapproval = Category::where('status','=','2')->get();
        return view('admin.approval',compact('getapproval'));
    }
}
