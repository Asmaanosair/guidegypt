@extends('layouts.site_lay')

@section('content')

    <div class="intro-section" style="background-image: url({{asset('img/'.$s_image->g_img2)}});">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-7 mx-auto text-center" data-aos="fade-up">
                    <h1>{{$s_image->g_title}}</h1>
                    <p>{{$s_image->g_des}}</p>
                </div>
            </div>
        </div>
    </div>


    <div class="site-section">
        <div class="container">
            <h2 class="text-center py-4">ALBUM PHOTO</h2>
            <div class="row">
                @foreach($gallery as $row)
                <div class="col-md-4">
                    <div class="album-content">
                        <img src="{{asset('img/'.$row->image)}}" class="img-album">
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