<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;
use App\Models\Training;

class TrainingController extends Controller
{
    public function viewTraining()
    {
    	$get_training = Training::all();
    	return view('admin.training.home',compact('get_training'));
    }
    public function createTraining()
    {
    	return view('admin.training.create');
    }
    public function storeTraining(Request $request)
    {
    	$training = new Training;
    	$this->validate($request,[
    		'title' => 'required',
    		'desc' => 'required',
			'image' => 'required',
			'elligible' => 'required',
			'address' => 'required',
			'date' => 'required',
			'time' => 'required',
			'charge' => 'required',
			'amount' => 'required',
    	]);

    	$training->title = $request->title;
    	$training->description = $request->desc;
    	$training->elligible = $request->elligible;
    	$training->address = $request->address;
    	$training->date = $request->date;
    	$training->time = $request->time;
    	$training->charge = $request->charge;
    	$training->amount = $request->amount;
    	//save our image
         if(Input::hasFile('image')){
        $file=Input::file('image');
        $destinationPath = 'uploads';
      	$file->move($destinationPath,$file->getClientOriginalName());
        $training->image=$file->getClientOriginalName();
      }
    	$training->save();

    	session()->flash('success', 'Inserted Successfully!!');
    	return redirect()->route('admin.viewtraining');
    }
    public function editTraining($id)
    {
    	$train = Training::find($id);
    	return view('admin.training.edit',compact('train'));
    }
    public function updateTraining(Request $request, $id)
    {
    	$training = Training::find($id);
    	$this->validate($request,[
    		'title' => 'required',
    		'desc' => 'required',
			'elligible' => 'required',
			'address' => 'required',
			'date' => 'required',
			'time' => 'required',
			'charge' => 'required',
			'amount' => 'required',
    	]);

    	$training->title = $request->title;
    	$training->description = $request->desc;
    	$training->elligible = $request->elligible;
    	$training->address = $request->address;
    	$training->date = $request->date;
    	$training->time = $request->time;
    	$training->charge = $request->charge;
    	$training->amount = $request->amount;
    	//save our image
         if(Input::hasFile('image')){
        $file=Input::file('image');
        $destinationPath = 'uploads';
      	$file->move($destinationPath,$file->getClientOriginalName());
        $training->image=$file->getClientOriginalName();
      }

    	$training->save();

    	session()->flash('success', 'Updated Successfully!!');
    	return redirect()->route('admin.viewtraining');
    }
    public function deleteTraining($id)
    {
    	$training = Training::destroy($id);
    	session()->flash('success', 'Deleted Successfully!!');
    	return redirect()->route('admin.viewtraining');

    }}
