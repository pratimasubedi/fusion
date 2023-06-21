<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;
use DB;
use App\Models\About;
use App\Models\Blog;
use App\Models\Category;
use App\Models\Contact;
use App\Models\Event;
use App\Models\Gallery;
use App\Models\Important;
use App\Models\Linkedcompany;
use App\Models\Service;
use App\Models\Training;
use App\Models\Album;
use App\Models\Photo;

class FusionController extends Controller
{
    public function index()
    {
        $datacategory = Category::orderBy('id','asc')->take(8)->get();
        $recentcategory = Category::orderBy('id','desc')->where('status','=','1')->take(10)->get();
        $countcategory = Category::count();
        $footerlink = Important::orderBy('id','desc')->take(5)->get();
        $footercompany = Linkedcompany::orderBy('id','desc')->take(4)->get();
        // dd($countcategory);
    	return view('home.home',compact('datacategory','countcategory','recentcategory','footerlink','footercompany'));
    }
    public function header()
    {
    	return view('header.header');
    }
    public function footer()
    {
        $footerlink = Important::orderBy('id','desc')->take(5)->get();
        $footercompany = Linkedcompany::orderBy('id','desc')->take(4)->get();
    	return view('footer.footer',compact('footerlink','footercompany'));
    }

    public function fairHiring()
    {
    	$getfairhiring = DB::table('blogs')->where('blogtype', 'Fair Hiring')->get();
    	// dd($getfairhiring);
        $footerlink = Important::orderBy('id','desc')->take(5)->get();
        $footercompany = Linkedcompany::orderBy('id','desc')->take(4)->get();
    	return view('Fair hiring',compact('getfairhiring','footerlink','footercompany'));
    }
    public function hiringDetail($slug)
    {
    	$gethiringdetail = Blog::where('slug', '=',$slug)->get();
    	// dd($gethiringdetail);
        $footerlink = Important::orderBy('id','desc')->take(5)->get();
        $footercompany = Linkedcompany::orderBy('id','desc')->take(4)->get();
    	return view('Ethical Recruitment',compact('gethiringdetail','footerlink','footercompany'));
    }
    public function Tip()
    {
    	$get_tip = DB::table('blogs')->where('blogtype', 'Tips')->get();
        $footerlink = Important::orderBy('id','desc')->take(5)->get();
        $footercompany = Linkedcompany::orderBy('id','desc')->take(4)->get();
    	return view('Tips',compact('get_tip','footerlink','footercompany'));
    }
    public function jobInterview($slug)
    {
        $tipdetail = Blog::where('slug', '=',$slug)->get();
        // dd($tipdetail);
        $footerlink = Important::orderBy('id','desc')->take(5)->get();
        $footercompany = Linkedcompany::orderBy('id','desc')->take(4)->get();
    	return view('Jobs Interview',compact('footerlink','footercompany','tipdetail'));
    }

    public function About()
    {
    	$getabout = About::all();
    	$getservice = Service::orderBy('id','desc')->take(6)->get();
        $footerlink = Important::orderBy('id','desc')->take(5)->get();
        $footercompany = Linkedcompany::orderBy('id','desc')->take(4)->get();
    	return view('about',compact('getabout','getservice','footerlink','footercompany'));
    }
    public function Event()
    {
    	$getevent = Event::orderBy('id','desc')->get();
    	// dd($getevent);
        $footerlink = Important::orderBy('id','desc')->take(5)->get();
        $footercompany = Linkedcompany::orderBy('id','desc')->take(4)->get();
    	return view('Events',compact('getevent','footerlink','footercompany'));
    }
    public function eventDynamic($id)
    {
        $footerlink = Important::orderBy('id','desc')->take(5)->get();
        $footercompany = Linkedcompany::orderBy('id','desc')->take(4)->get();

        $eventdynamic= Event::where('id', '=',$id)->get();
    	return view('Events dynamic',compact('footerlink','footercompany','eventdynamic'));
    }
    public function Gallery()
    {
    	$getgallery = Gallery::orderBy('id','desc')->get();
        $footerlink = Important::orderBy('id','desc')->take(5)->get();
        $footercompany = Linkedcompany::orderBy('id','desc')->take(4)->get();
    	return view('Galleries',compact('getgallery','footerlink','footercompany'));
    }
    
    public function mainCategory()
    {
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

    	return view('Main Categories',compact('getallcategory','getAcategory','getBcategory','getCcategory','getDcategory','getEcategory','getFcategory','getGcategory','getHcategory','getIcategory','getJcategory','getKcategory','getLcategory','getMcategory','getNcategory','getOcategory','getPcategory','getQcategory','getRcategory','getScategory','getTcategory','getUcategory','getVcategory','getWcategory','getXcategory','getYcategory','getZcategory','footerlink','footercompany'));
    }

    public function categoryDetail($slug)
    {
    	// dd('here');
    	$categorydetail= Category::where('slug', '=',$slug)->get();
        $footerlink = Important::orderBy('id','desc')->take(5)->get();
        $footercompany = Linkedcompany::orderBy('id','desc')->take(4)->get();
    	return view('Beauty Center',compact('categorydetail','footerlink','footercompany'));
    }

    public function subCategory()
    {
        // $footerlink = Important::orderBy('id','desc')->take(5)->get();
    	return view('Sub Categories');
    }
    
    
    public function employmentRetention()
    {
        // $footerlink = Important::orderBy('id','desc')->take(5)->get();
    	return view('Employee Retention');
    }
    public function Contact()
    {
        $footerlink = Important::orderBy('id','desc')->take(5)->get();
        $footercompany = Linkedcompany::orderBy('id','desc')->take(4)->get();
    	return view('Contact Us',compact('footerlink','footercompany'));
    }
    
    
    public function Term()
    {
        $footerlink = Important::orderBy('id','desc')->take(5)->get();
        $footercompany = Linkedcompany::orderBy('id','desc')->take(4)->get();
    	return view('Terms',compact('footerlink','footercompany'));
    }
    public function Search()
    {
        $footerlink = Important::orderBy('id','desc')->take(5)->get();
        $footercompany = Linkedcompany::orderBy('id','desc')->take(4)->get();

        $q = Input::get('search');
        // dd($q);
        if($q != ""){
            $searchjob = Category::where('title','LIKE','%'.$q.'%')->get();
            if(count($searchjob) > 0)
                // dd($searchjob);
                return view('search')->withDetails($searchjob)->withQuery($q)->withfooterlink($footerlink)->withfootercompany($footercompany);
        }
        else {
            return view ('search')->withMessage('No Jobs found. Try to search again !')->withfooterlink($footerlink)->withfootercompany($footercompany);
        }


        return view('search')->withWord('No Jobs found. Try to search again !')->withfooterlink($footerlink)->withfootercompany($footercompany);
        }

    public function Training()
    {
        $get_training = Training::orderBy('id','desc')->get();
        $footerlink = Important::orderBy('id','desc')->take(5)->get();
        $footercompany = Linkedcompany::orderBy('id','desc')->take(4)->get();

        return view('training',compact('footercompany','footerlink','get_training'));
    }
    public function trainingDynamic($id)
    {
        $footerlink = Important::orderBy('id','desc')->take(5)->get();
        $footercompany = Linkedcompany::orderBy('id','desc')->take(4)->get();
        $trainingdynamic= Training::where('id', '=',$id)->get();
        return view('training-dynamic',compact('footerlink','footercompany','trainingdynamic'));

    }
    public function Album()
    {
        $get_album = Album::orderBy('id','desc')->get();
       $footerlink = Important::orderBy('id','desc')->take(5)->get();
       $footercompany = Linkedcompany::orderBy('id','desc')->take(4)->get(); 
       return view('album',compact('footerlink','footercompany','get_album'));
    }
    public function albumDynamic($id)
    {
       $footerlink = Important::orderBy('id','desc')->take(5)->get();
       $footercompany = Linkedcompany::orderBy('id','desc')->take(4)->get();

       $getphoto = Photo::where('album_id', $id)->get();
       // dd($getphoto);
       return view('album-dynamic',compact('footerlink','footercompany','albumdynamic','getphoto'));
    }



}
