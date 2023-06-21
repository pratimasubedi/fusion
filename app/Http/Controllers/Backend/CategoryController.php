<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;
use App\Models\Category;

class CategoryController extends Controller
{
    public function viewCategory()
    {
    	$getcategory = Category::where('status','!=','2')->get();
    	return view('admin.category.home',compact('getcategory'));
    }
    public function createCategory()
    {
    	return view('admin.category.create');
    }
    public function storeCategory(Request $request)
    {
    	$category = new Category;
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

    	$category->slug = $request->slug;
    	$category->title = $request->title;
    	$category->location = $request->location;
    	$category->opendate = $request->opendate;
    	$category->expiredate = $request->closedate;
    	$category->description = $request->desc;
    	$category->ability = $request->ability;
    	$category->job_vacancy = $request->vacancy;
    	$category->job_opening = $request->opening;
    	$category->salary = $request->salary;
    	$category->gender = $request->gender;
    	$category->career_level = $request->career;
    	$category->industry = $request->industry;
    	$category->experience = $request->experience;
    	$category->qualification = $request->qualification;
    	$category->age_range = $request->age;
        $category->title_abbreviation = $request->abbreviation;
    	$category->status = $request->status;
    	//save our image
         if(Input::hasFile('image')){
        $file=Input::file('image');
        $destinationPath = 'uploads';
      	$file->move($destinationPath,$file->getClientOriginalName());
        $category->image=$file->getClientOriginalName();
      }
      // dd($category);
    	$category->save();

    	session()->flash('success', 'Inserted Successfully!!');
    	return redirect()->route('admin.viewjobcategory');
    }
    public function editCategory($id)
    {
    	$category = Category::find($id);
    	return view('admin.category.edit',compact('category'));
    }
    public function updateCategory(Request $request, $id)
    {
    	$category = Category::find($id);
    	
    	if($request->input('slug') == $category->slug)
        {
            $this->validate($request,[
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
    		'abbreviation' => 'required',
            'status' => 'required',
            
        ]);

        }else{

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
            'abbreviation' => 'required',
    		'status' => 'required',
            ]);
        }

    	$category->slug = $request->slug;
    	$category->title = $request->title;
    	$category->location = $request->location;
    	$category->opendate = $request->opendate;
    	$category->expiredate = $request->closedate;
    	$category->description = $request->desc;
    	$category->ability = $request->ability;
    	$category->job_vacancy = $request->vacancy;
    	$category->job_opening = $request->opening;
    	$category->salary = $request->salary;
    	$category->gender = $request->gender;
    	$category->career_level = $request->career;
    	$category->industry = $request->industry;
    	$category->experience = $request->experience;
    	$category->qualification = $request->qualification;
    	$category->age_range = $request->age;
    	$category->title_abbreviation = $request->abbreviation;
        $category->status = $request->status;
    	//save our image
         if(Input::hasFile('image')){
        $file=Input::file('image');
        $destinationPath = 'uploads';
      	$file->move($destinationPath,$file->getClientOriginalName());
        $category->image=$file->getClientOriginalName();
      }

    	$category->save();

    	session()->flash('success', 'Updated Successfully!!');
    	return redirect()->route('admin.viewjobcategory');
    }

    public function deleteCategory($id)
    {
    	$category = Category::destroy($id);
    	session()->flash('success', 'Deleted Successfully!!');
    	return redirect()->route('admin.viewjobcategory');

    }
}
