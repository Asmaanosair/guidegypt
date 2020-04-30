<?php

namespace App\Http\Controllers;

use App\department;
use App\gallery;
use App\mag;
use App\program;
use App\section;
use App\slider;
use App\testimonial;
use Illuminate\Http\Request;

class sitecontroller extends Controller
{
    function index(){
        $slider=slider::all();
        $mag=mag::all();
        $prog=program::all();
        return view('site.index',['slider'=>$slider,'mag'=>$mag,'prog'=>$prog]);
    }
    function Gallery(){
        $gallery=gallery::all();
        return view('site.gallery',['gallery'=>$gallery]);
    }
    function Department($name ,$id){
        $department=department::find($id);
        $programe=program::all()->where('department_id',$id)->where('active',1);

        return view('site.department',['department'=>$department,'programe'=>$programe]);
    }
    function Program($name ,$id){
        $department=program::find($id);
        $programe=section::all()->where('program_id',$id)->where('active',1);

        return view('site.programe',['department'=>$department,'programe'=>$programe]);
    }
    function Magazine($name ,$id){
        $mag=mag::find($id);


        return view('site.magazine',['mag'=>$mag]);
    }
    function Testimonial(){
        $test=testimonial::all();


        return view('site.testimonial',['test'=>$test]);
    }
    function Contact(){
//        $test=testimonial::all();


        return view('site.contact');
    }
}
