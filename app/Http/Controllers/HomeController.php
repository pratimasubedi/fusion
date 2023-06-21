<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;
use App\Models\Category;
use App\Models\Contact;
use App\Models\Important;
use App\Models\Linkedcompany;
use App\UserCategory;
use DB;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $footerlink = Important::orderBy('id','desc')->take(5)->get();
        $footercompany = Linkedcompany::orderBy('id','desc')->take(4)->get();
        return view('user.dashboard',compact('footerlink','footercompany'));
    }
    public function userHome()
    {
        $datacategory = Category::orderBy('id','asc')->take(8)->get();
        $recentcategory = Category::orderBy('id','desc')->where('status','=','1')->take(10)->get();
        $countcategory = Category::count();

        $footerlink = Important::orderBy('id','desc')->take(5)->get();
        $footercompany = Linkedcompany::orderBy('id','desc')->take(4)->get();
        return view('user.home',compact('datacategory','countcategory','recentcategory','footerlink','footercompany'));
    }
     public function usermainCategory()
    {
        // dd('her');
        $getallcategory = Category::all();

        $getAcategory = DB::table('categories')->where('title_abbreviation', 'A')->get();
        $getBcategory = DB::table('categories')->where('title_abbreviation', 'B')->get();
        $getCcategory = DB::table('categories')->where('title_abbreviation', 'C')->get();
        $getDcategory = DB::table('categories')->where('title_abbreviation', 'D')->get();
        $getEcategory = DB::table('categories')->where('title_abbreviation', 'E')->get();
        $getFcategory = DB::table('categories')->where('title_abbreviation', 'F')->get();
        $getGcategory = DB::table('categories')->where('title_abbreviation', 'G')->get();
        $getHcategory = DB::table('categories')->where('title_abbreviation', 'H')->get();
        $getIcategory = DB::table('categories')->where('title_abbreviation', 'I')->get();
        $getJcategory = DB::table('categories')->where('title_abbreviation', 'J')->get();
        $getKcategory = DB::table('categories')->where('title_abbreviation', 'K')->get();
        $getLcategory = DB::table('categories')->where('title_abbreviation', 'L')->get();
        $getMcategory = DB::table('categories')->where('title_abbreviation', 'M')->get();
        $getNcategory = DB::table('categories')->where('title_abbreviation', 'N')->get();
        $getOcategory = DB::table('categories')->where('title_abbreviation', 'O')->get();
        $getPcategory = DB::table('categories')->where('title_abbreviation', 'P')->get();
        $getQcategory = DB::table('categories')->where('title_abbreviation', 'Q')->get();
        $getRcategory = DB::table('categories')->where('title_abbreviation', 'R')->get();
        $getScategory = DB::table('categories')->where('title_abbreviation', 'S')->get();
        $getTcategory = DB::table('categories')->where('title_abbreviation', 'T')->get();
        $getUcategory = DB::table('categories')->where('title_abbreviation', 'U')->get();
        $getVcategory = DB::table('categories')->where('title_abbreviation', 'V')->get();
        $getWcategory = DB::table('categories')->where('title_abbreviation', 'W')->get();
        $getXcategory = DB::table('categories')->where('title_abbreviation', 'X')->get();
        $getYcategory = DB::table('categories')->where('title_abbreviation', 'Y')->get();
        $getZcategory = DB::table('categories')->where('title_abbreviation', 'Z')->get();

        $footerlink = Important::orderBy('id','desc')->take(5)->get();
        $footercompany = Linkedcompany::orderBy('id','desc')->take(4)->get();

        return view('category1',compact('getallcategory','getAcategory','getBcategory','getCcategory','getDcategory','getEcategory','getFcategory','getGcategory','getHcategory','getIcategory','getJcategory','getKcategory','getLcategory','getMcategory','getNcategory','getOcategory','getPcategory','getQcategory','getRcategory','getScategory','getTcategory','getUcategory','getVcategory','getWcategory','getXcategory','getYcategory','getZcategory','footerlink','footercompany'));
    }

    public function usercategoryDetail($slug)
    {
        // dd('here');
        $getusercategorydetail= Category::where('slug', '=',$slug)->get();
        // dd($getcategoryfourth);
        $footerlink = Important::orderBy('id','desc')->take(5)->get();
        $footercompany = Linkedcompany::orderBy('id','desc')->take(4)->get();
        return view('Beauty Center1',compact('getusercategorydetail','footerlink','footercompany'));
    }

    public function storeUsercategory(Request $request)
    {

        $datausercategory = new UserCategory;
        // dd($datausercategory);
        $this->validate($request,[
            'user_id' => 'required',
            'category_id' => 'required',
        ]);
        $datausercategory->user_id = $request->user_id;
        $datausercategory->category_id = $request->category_id;

        // dd($datausercategory);
        $datausercategory->save();
        session()->flash('success','Congratulation!! Your job has been successfully submitted');
        return redirect()->back();


    }
    public function newJob()
    {
        $footerlink = Important::orderBy('id','desc')->take(5)->get();
        $footercompany = Linkedcompany::orderBy('id','desc')->take(4)->get();
        return view('post-job',compact('footerlink','footercompany'));
    }
    //store job that are are preferred by job giver
    public function storenewJob(Request $request)
    {

        $datanewjob = new Category;
        $this->validate($request,[
            'slug' => 'required|unique:categories|min:5',
            'title' => 'required',
            'location' => 'required',
            'opendate' => 'required',
            'closedate' => 'required',
            'desc' => 'required',
            'ability' => 'required',
            'vacancy' => 'required',
            'opening' => 'required',
            'salary' => 'required',
            'gender' => 'required',
            'career' => 'required',
            'industry' => 'required',
            'experience' => 'required',
            'qualification' => 'required',
            'age' => 'required',
            'image' => 'required',
            'abbreviation' => 'required',
            'status' => 'required',
            
        ]);

        $datanewjob->slug = $request->slug;
        $datanewjob->title = $request->title;
        $datanewjob->location = $request->location;
        $datanewjob->opendate = $request->opendate;
        $datanewjob->expiredate = $request->closedate;
        $datanewjob->description = $request->desc;
        $datanewjob->ability = $request->ability;
        $datanewjob->job_vacancy = $request->vacancy;
        $datanewjob->job_opening = $request->opening;
        $datanewjob->salary = $request->salary;
        $datanewjob->gender = $request->gender;
        $datanewjob->career_level = $request->career;
        $datanewjob->industry = $request->industry;
        $datanewjob->experience = $request->experience;
        $datanewjob->qualification = $request->qualification;
        $datanewjob->age_range = $request->age;
        $datanewjob->title_abbreviation = $request->abbreviation;
        $datanewjob->status = $request->status;
        //save our image
         if(Input::hasFile('image')){
        $file=Input::file('image');
        $destinationPath = 'uploads';
        $file->move($destinationPath,$file->getClientOriginalName());
        $datanewjob->image=$file->getClientOriginalName();
      }

        // dd($datanewjob);

        $datanewjob->save();

        session()->flash('success', 'Your job has been submitted successfully for uploading!!');
        return redirect()->back();

    }
    public function loginSearch()
    {
       
        $footerlink = Important::orderBy('id','desc')->take(5)->get();
        $footercompany = Linkedcompany::orderBy('id','desc')->take(4)->get();
        $q = Input::get('search');
        // dd($q);
        if($q != ""){
            $searchjob = Category::where('title','LIKE','%'.$q.'%')->get();
            if(count($searchjob) > 0)
                // dd($searchjob);
                return view('user.search')->withDetails($searchjob)->withQuery ($q)->withfooterlink($footerlink)->withfootercompany($footercompany);
        }
        else
        { 
            return view ('user.search')->withMessage('No Jobs found. Try to search again !')->withfooterlink($footerlink)->withfootercompany($footercompany);

        }
        return view('user.search')->withWord('No Jobs found. Try to search again !')->withfooterlink($footerlink)->withfootercompany($footercompany);
        }

        public function userContact()
        {
            $footerlink = Important::orderBy('id','desc')->take(5)->get();
            $footercompany = Linkedcompany::orderBy('id','desc')->take(4)->get();
            return view('user.usercontact',compact('footercompany','footerlink'));
        }
        public function storeuserContact(Request $request)
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
}
