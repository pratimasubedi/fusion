<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;
use App\Models\Blog;

class BlogController extends Controller
{
    public function viewBlog()
	{
		$getblogpage = Blog::all();
		return view('admin.blog.home',compact('getblogpage'));

	}
	public function createBlog()
	{
		return view('admin.blog.create');

	}
	public function storeBlog(Request $request)
    {
    	$blog = new Blog;
    	$this->validate($request,[
    		'slug' => 'required|unique:blogs|min:5',
    		'title' => 'required',
    		'desc' => 'required',
			'image' => 'required',
			'type' => 'required',
			'date' => 'required',
    	]);

    	$blog->slug = $request->slug;
    	$blog->title = $request->title;
    	$blog->description = $request->desc;
    	$blog->blogtype = $request->type;
    	$blog->date = $request->date;
    	//save our image
         if(Input::hasFile('image')){
        $file=Input::file('image');
        $destinationPath = 'uploads';
      	$file->move($destinationPath,$file->getClientOriginalName());
        $blog->image=$file->getClientOriginalName();
      }
      // dd($blog);
    	$blog->save();

    	session()->flash('success', 'Inserted Successfully!!');
    	return redirect()->route('admin.viewblog');
    }
    public function editBlog($id)
    {
    	$blog = Blog::find($id);
    	return view('admin.blog.edit',compact('blog'));
    }
    public function updateBlog(Request $request, $id)
    {
    	$blog = Blog::find($id);
    	
    	if($request->input('slug') == $blog->slug)
        {
            $this->validate($request,[
    		'title' => 'required',
    		'desc' => 'required',
			'type' => 'required',
			'date' => 'required',
            
        ]);

        }else{

            $this->validate($request,[
            	'slug' => 'required|unique:blogs|min:5',
	    		'title' => 'required',
	    		'desc' => 'required',
				'type' => 'required',
				'date' => 'required',
            ]);
        }

    	$blog->slug = $request->slug;
    	$blog->title = $request->title;
    	$blog->description = $request->desc;
    	$blog->blogtype = $request->type;
    	$blog->date = $request->date;
    	//save our image
         if(Input::hasFile('image')){
        $file=Input::file('image');
        $destinationPath = 'uploads';
      	$file->move($destinationPath,$file->getClientOriginalName());
        $blog->image=$file->getClientOriginalName();
      }

    	$blog->save();

    	session()->flash('success', 'Updated Successfully!!');
    	return redirect()->route('admin.viewblog');
    }

    public function deleteBlog($id)
    {
    	$blog = Blog::destroy($id);
    	session()->flash('success', 'Deleted Successfully!!');
    	return redirect()->route('admin.viewblog');

    }
}
