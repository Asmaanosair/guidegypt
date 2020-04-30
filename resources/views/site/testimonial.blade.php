
@extends('layouts.site_lay')

@section('content')



    <div class="intro-section" style="background-image: url({{asset('img/'.$s_image->t_img2)}});">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-7 mx-auto text-center" data-aos="fade-up">
                    <h1>{{$s_image->t_title}}</h1>
                    <p>{{$s_image->t_des}}</p>
                </div>
            </div>
        </div>
    </div>


    <div class="site-section">
        <div class="container">
            <div class="site-section1 text-center">
                <span class="text-serif text-primary">lorem ipusm</span>
                <h3 class="text-black py-4">SITES ARCHÉOLOGIQUE</h3>
                <div class="container">
                    <div class="owl-carousel owl-theme owl3">
                        @foreach($test as $row)
                        <div class="item">
                            <div class="testimony-39291">
                                <blockquote>
                                    <p> {{$row->des}}</p>
                                </blockquote>
                                <div class="d-flex vcard align-items-center">
                                    <div class="pic mr-3">
                                        <img src="{{asset('img/'.$row->image)}}" alt="Image" class="img-fluid">
                                    </div>
                                    <div class="text">
                                        <strong class="d-block">{{$row->name}}</strong>
                                        <span>{{$row->job}}</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach



                    </div>
                </div>
            </div>

        </div>
    </div>






@stop