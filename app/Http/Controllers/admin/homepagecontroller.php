<?php

namespace App\Http\Controllers\admin;

use App\homepage;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class homepagecontroller extends Controller
{
public function index(){
    $row=homepage::find(1);
    return view('admin.home.about',['row'=>$row]);
}
    function update(Request $request){

        $this->validate($request,
            [
                'des'=>'required',
                'about'=>'required',
                'our_history'=>'required',
                'our_mission'=>'required',
                'keywords'=>'required',
                'footer'=>'required',
                'about_iamge1'=>'mimes:jpeg,bmp,png',
                'history_image1'=>'mimes:jpeg,bmp,png',
                'history_image2'=>'mimes:jpeg,bmp,png',
                'mission_image2'=>'mimes:jpeg,bmp,png',
                'mission_image1'=>'mimes:jpeg,bmp,png',
                'foot_img'=>'mimes:jpeg,bmp,png',
                'foot_img2'=>'mimes:jpeg,bmp,png',
                'foot_img3'=>'mimes:jpeg,bmp,png',

            ]);
        $test=homepage::find(1);

        $test->about=$request->about;
        $test->history=$request->our_history;
        $test->mission=$request->our_mission;
        $test->keywords=$request->keywords;
        $test->description=$request->des;
        $test->footer_des=$request->footer;
        $test->site=$request->site_name;


        if($request->file('about_iamge1') !=null)
        {
            $filname1=time().".".$request->file('about_iamge1')->getClientOriginalExtension();
            $request->file('about_iamge1')->move('img',$filname1);
            $test->about_img=$filname1;
        }

        if($request->file('history_image1') !=null)
        {
            $filname2=time().".".$request->file('history_image1')->getClientOriginalExtension();
            $request->file('history_image1')->move('img',$filname2);
            $test->history_img1=$filname2;
        }
        if($request->file('history_image2') !=null)
        {
            $filname3=time().".".$request->file('history_image2')->getClientOriginalExtension();
            $request->file('history_image2')->move('img',$filname3);
            $test->history_img2=$filname3;
        }
        if($request->file('mission_image2') !=null)
        {
            $filname5=time().".".$request->file('mission_image2')->getClientOriginalExtension();
            $request->file('mission_image2')->move('img',$filname5);
            $test->mission_img2=$filname5;
        }
        if($request->file('mission_image1') !=null)
        {
            $filname4=time().".".$request->file('mission_image1')->getClientOriginalExtension();
            $request->file('mission_image1')->move('img',$filname4);
            $test->mission_img1=$filname4;
        }
        if($request->file('logo') !=null)
        {
            $filname6=time().".".$request->file('logo')->getClientOriginalExtension();
            $request->file('logo')->move('img',$filname6);
            $test->logo=$filname6;
        }
        if($request->file('foot_img') !=null)
        {
            $filname7=time().".".$request->file('foot_img')->getClientOriginalExtension();
            $request->file('foot_img')->move('img',$filname7);
            $test->foot_img=$filname7;
        }
        if($request->file('foot_img2') !=null)
        {
            $filname8=time().".".$request->file('foot_img2')->getClientOriginalExtension();
            $request->file('foot_img2')->move('img',$filname8);
            $test->foot_img2=$filname8;
        }
        if($request->file('foot_img3') !=null)
        {
            $filname9=time().".".$request->file('foot_img3')->getClientOriginalExtension();
            $request->file('foot_img3')->move('img',$filname9);
            $test->foot_img3=$filname9;
        }

        if($test->save()){
            session()->flash("success","Success");
            return back();
        }

    }
}
