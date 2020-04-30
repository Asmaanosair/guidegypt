@extends('layouts.site_lay')

@section('content')

    <div class="intro-section site-blocks-cover innerpage" style="background-image: url({{asset('img/'.$mag->image)}});">
        <div class="container">
            <div class="row align-items-center justify-content-center text-center">
                <div class="col-lg-8 mt-5" data-aos="fade-up">
                    <h1>{{$mag->Title}}</h1>
                </div>
            </div>
        </div>
    </div>



    <section class="site-section">
        <div class="container">
           {!! $mag->des !!}
        </div>
    </section>



@stop