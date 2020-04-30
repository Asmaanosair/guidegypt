<?php

namespace App\Http\Controllers\admin;

use App\testimonial;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class testimonialcontroller extends Controller
{
    public function index(){
        $department=testimonial::all();
        return view('admin.testimonial.showall',['department'=>$department]);
    }
    public function create(){

        return view('admin.testimonial.create');
    }
    public function Edit($id){
        $department=testimonial::find($id);
        return view('admin.testimonial.edit',['department'=>$department]);
    }
    public function Store(Request $request){

        $this->validate($request,
            [
                'des'=>'required',
                'job'=>'required',

                'title'=>'required',
                'image'=>'required',



            ]);
        $test= new testimonial();

        $test->title=$request->title;
        $test->job=$request->job;
        $test->des=$request->des;
        if($request->file('image') !=null)
        {
            $filname3=time().".".$request->file('image')->getClientOriginalExtension();
            $request->file('image')->move('img',$filname3);
            $test->image=$filname3;
        }

        if($test->save()){
            session()->flash("success","Success");
            return redirect('KT_Admin/testimonial');
        }

    }

    public function Update(Request $request ,$id){

        $this->validate($request,
            [
                'des'=>'required',
                'job'=>'required',

                'title'=>'required',



            ]);
        $test= testimonial::find($id);

        $test->title=$request->title;
        $test->job=$request->job;
        $test->des=$request->des;
        if($request->file('image') !=null)
        {
            $filname3=time().".".$request->file('image')->getClientOriginalExtension();
            $request->file('image')->move('img',$filname3);
            $test->image=$filname3;
        }

        if($test->save()){
            session()->flash("success","Success");
            return back();
        }

    }


    public function Delete($id){
        $department=testimonial::find($id);
        $department->delete();
        return back();
    }
}
