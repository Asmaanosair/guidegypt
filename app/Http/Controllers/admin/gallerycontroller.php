<?php

namespace App\Http\Controllers\admin;

use App\gallery;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class gallerycontroller extends Controller
{
    public function index(){
        $department=gallery::all();
        return view('admin.gallery.showall',['department'=>$department]);
    }
    public function create(){

        return view('admin.gallery.create');
    }

    public function Store(Request $request){

        $this->validate($request,
            [

                'image'=>'required',



            ]);
        $test= new gallery();


        if($request->file('image') !=null)
        {
            $filname3=time().".".$request->file('image')->getClientOriginalExtension();
            $request->file('image')->move('img',$filname3);
            $test->image=$filname3;
        }

        if($test->save()){
            session()->flash("success","Success");
            return redirect('KT_Admin/gallery');
        }

    }




    public function Delete($id){
        $department=gallery::find($id);
        $department->delete();
        return back();
    }
}
