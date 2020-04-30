
@extends('layouts.site_lay')

@section('content')

<div class="intro-section" style="background-image: url({{asset('img/'.$department->image)}});">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-7 mx-auto text-center" data-aos="fade-up">
                <h1>{{$department->Title}}</h1>
                <p>{{$department->s_des}}</p>
            </div>
        </div>
    </div>
</div>


<div class="site-section">
    <div class="container">
        <div class="row">
            @foreach($programe as $row)
            <div class="col-md-6 mb-5 mb-lg-5 col-lg-4">
                <div class="blog-entry">
                    <h6>{{$row->duration}}</h6>
                    <a href="{{url('Program/'.str_replace(' ','_',$row->url_name).'('.$row->id.')')}}" class="img-link">
                        <img src="{{asset('img/'.$row->main_image)}}" alt="Image" class="img-fluid">
                    </a>
                    <div class="blog-entry-contents">
                        <h3><a href="{{url('Program/'.str_replace(' ','_',$row->url_name).'('.$row->id.')')}}">{{$row->name}}</a></h3>
                        <p>{{$row->s_des}}</p>
                        <div class="meta"><a href="{{url('Program/'.str_replace(' ','_',$row->url_name).'('.$row->id.')')}}">Detalis</a></div>
                    </div>
                </div>
            </div>
            @endforeach


        </div>

        <nav aria-label="Page navigation example">
            <ul class="pagination justify-content-center">
                <li class="page-item">
                    <a class="page-link" href="#" aria-label="Previous">
                        <span aria-hidden="true">&laquo;</span>
                        <span class="sr-only">Previous</span>
                    </a>
                </li>
                <li class="page-item"><a class="page-link" href="#">1</a></li>
                <li class="page-item"><a class="page-link" href="#">2</a></li>
                <li class="page-item"><a class="page-link" href="#">3</a></li>
                <li class="page-item">
                    <a class="page-link" href="#" aria-label="Next">
                        <span aria-hidden="true">&raquo;</span>
                        <span class="sr-only">Next</span>
                    </a>
                </li>
            </ul>
        </nav>

    </div>
</div>

@stop