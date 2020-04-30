
@extends('layouts.site_lay')

@section('content')




<div class="intro-section site-blocks-cover innerpage" style="background-image: url({{asset('img/'.$department->image)}});">
    <div class="container">
        <div class="row align-items-center justify-content-center text-center">
            <div class="col-lg-8 mt-5" data-aos="fade-up">
                <h1>{{$department->Title}}</h1>
            </div>
        </div>
    </div>
</div>



<section class="site-section">
    <div class="container">
        <h1 class="text-center my-4">{{$department->Title}}</h1>
      {!!  $department->des!!}

        @foreach($programe as $row)
        <div class="row my-5">
            <div class="col-md-3 col-sm-12">
                <img src="{{asset('img/'.$row->image)}}" class="img-single-blog">
            </div>
            <div class="col-md-9 col-sm-12">
                <h2>{{$row->name}}</h2>
         {!! $row->des !!}
            </div>
        </div>
@endforeach
      

        <h1 class="text-center my-4 py-3">EXCURSION UNE JOURNÉE</h1>
        <div class="row">

            <div class="col-md-6 col-sm-12">
              {!! $department->service !!}
            </div>
            <div class="col-md-6 col-sm-12">
                <img src="{{asset('img/'.$department->service_image)}}" class="img-single-blog">
            </div>

        </div>

    </div>
</section>

@stop