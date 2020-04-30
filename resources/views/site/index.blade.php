@extends('layouts.site_lay')

@section('content')

    <section class="home-slider owl-carousel">
        @foreach($slider as $row)
        <div class="slider-item" style="background-image: url({{asset('img/'.$row->image)}});">
            <div class="overlay"></div>
            <div class="container">
                <div class="row slider-text justify-content-start align-items-center" data-scrollax-parent="true">
                    <div class="col-md-8 col-lg-7 col-sm-12 ftco-animate text mb-4" data-scrollax=" properties: { translateY: '70%' }">
                        <span class="position">{{$row->title}}</span>
                        <h1 class="mb-3" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">{{$row->des}}</h1>
                        <div class="d-md-flex models-info mt-5 mb-5">
{{--                            <div>--}}
{{--                                <p>Height</p>--}}
{{--                                <span>185</span>--}}
{{--                            </div>--}}
{{--                            <div>--}}
{{--                                <p>Bust</p>--}}
{{--                                <span>79</span>--}}
{{--                            </div>--}}
{{--                            <div>--}}
{{--                                <p>Waist</p>--}}
{{--                                <span>40</span>--}}
{{--                            </div>--}}
{{--                            <div>--}}
{{--                                <p>Hips</p>--}}
{{--                                <span>87</span>--}}
{{--                            </div>--}}
{{--                            <div>--}}
{{--                                <p>Shoe</p>--}}
{{--                                <span>40</span>--}}
{{--                            </div>--}}
{{--                            <div>--}}
{{--                                <p>Eyes</p>--}}
{{--                                <span>Blue</span>--}}
{{--                            </div>--}}
{{--                            <div>--}}
{{--                                <p>Hair</p>--}}
{{--                                <span>Brunet</span>--}}
{{--                            </div>--}}
                        </div>
                        <p><a href="#" class="btn btn-primary px-4 py-3">Read more</a> <a href="#" class="btn btn-primary btn-outline-primary px-4 py-3">View Gallery</a></p>
                    </div>
                </div>
            </div>
        </div>
        @endforeach

{{--        <div class="slider-item" style="background-image: url('images/bg_2.jpg');">--}}
{{--            <div class="overlay"></div>--}}
{{--            <div class="container">--}}
{{--                <div class="row slider-text justify-content-start align-items-center" data-scrollax-parent="true">--}}
{{--                    <div class="col-md-8 col-lg-7 col-sm-12 ftco-animate text mb-4" data-scrollax=" properties: { translateY: '70%' }">--}}
{{--                        <span class="position">Super Model's</span>--}}
{{--                        <h1 class="mb-3" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">Samantha Lewis</h1>--}}
{{--                        <div class="d-md-flex models-info mt-5 mb-5">--}}
{{--                            <div>--}}
{{--                                <p>Height</p>--}}
{{--                                <span>185</span>--}}
{{--                            </div>--}}
{{--                            <div>--}}
{{--                                <p>Bust</p>--}}
{{--                                <span>79</span>--}}
{{--                            </div>--}}
{{--                            <div>--}}
{{--                                <p>Waist</p>--}}
{{--                                <span>40</span>--}}
{{--                            </div>--}}
{{--                            <div>--}}
{{--                                <p>Hips</p>--}}
{{--                                <span>87</span>--}}
{{--                            </div>--}}
{{--                            <div>--}}
{{--                                <p>Shoe</p>--}}
{{--                                <span>40</span>--}}
{{--                            </div>--}}
{{--                            <div>--}}
{{--                                <p>Eyes</p>--}}
{{--                                <span>Blue</span>--}}
{{--                            </div>--}}
{{--                            <div>--}}
{{--                                <p>Hair</p>--}}
{{--                                <span>Brunet</span>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <p><a href="#" class="btn btn-primary px-4 py-3">Read more</a> <a href="#" class="btn btn-primary btn-outline-primary px-4 py-3">View Gallery</a></p>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}

{{--        <div class="slider-item" style="background-image: url('images/bg_3.jpg');">--}}
{{--            <div class="overlay"></div>--}}
{{--            <div class="container">--}}
{{--                <div class="row slider-text justify-content-start align-items-center" data-scrollax-parent="true">--}}
{{--                    <div class="col-md-8 col-lg-7 col-sm-12 ftco-animate text mb-4" data-scrollax=" properties: { translateY: '70%' }">--}}
{{--                        <span class="position">Photo Model's</span>--}}
{{--                        <h1 class="mb-3" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">Jessica Alba</h1>--}}
{{--                        <div class="d-md-flex models-info mt-5 mb-5">--}}
{{--                            <div>--}}
{{--                                <p>Height</p>--}}
{{--                                <span>185</span>--}}
{{--                            </div>--}}
{{--                            <div>--}}
{{--                                <p>Bust</p>--}}
{{--                                <span>79</span>--}}
{{--                            </div>--}}
{{--                            <div>--}}
{{--                                <p>Waist</p>--}}
{{--                                <span>40</span>--}}
{{--                            </div>--}}
{{--                            <div>--}}
{{--                                <p>Hips</p>--}}
{{--                                <span>87</span>--}}
{{--                            </div>--}}
{{--                            <div>--}}
{{--                                <p>Shoe</p>--}}
{{--                                <span>40</span>--}}
{{--                            </div>--}}
{{--                            <div>--}}
{{--                                <p>Eyes</p>--}}
{{--                                <span>Blue</span>--}}
{{--                            </div>--}}
{{--                            <div>--}}
{{--                                <p>Hair</p>--}}
{{--                                <span>Brunet</span>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <p><a href="#" class="btn btn-primary px-4 py-3">Read more</a> <a href="#" class="btn btn-primary btn-outline-primary px-4 py-3">View Gallery</a></p>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}

{{--        <div class="slider-item" style="background-image: url('images/bg_4.jpg');">--}}
{{--            <div class="overlay"></div>--}}
{{--            <div class="container">--}}
{{--                <div class="row slider-text justify-content-start align-items-center" data-scrollax-parent="true">--}}
{{--                    <div class="col-md-8 col-lg-7 col-sm-12 ftco-animate text mb-4" data-scrollax=" properties: { translateY: '70%' }">--}}
{{--                        <span class="position">Photo Model's</span>--}}
{{--                        <h1 class="mb-3" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">Michael Buff</h1>--}}
{{--                        <div class="d-md-flex models-info mt-5 mb-5">--}}
{{--                            <div>--}}
{{--                                <p>Height</p>--}}
{{--                                <span>185</span>--}}
{{--                            </div>--}}
{{--                            <div>--}}
{{--                                <p>Bust</p>--}}
{{--                                <span>79</span>--}}
{{--                            </div>--}}
{{--                            <div>--}}
{{--                                <p>Waist</p>--}}
{{--                                <span>40</span>--}}
{{--                            </div>--}}
{{--                            <div>--}}
{{--                                <p>Hips</p>--}}
{{--                                <span>87</span>--}}
{{--                            </div>--}}
{{--                            <div>--}}
{{--                                <p>Shoe</p>--}}
{{--                                <span>40</span>--}}
{{--                            </div>--}}
{{--                            <div>--}}
{{--                                <p>Eyes</p>--}}
{{--                                <span>Blue</span>--}}
{{--                            </div>--}}
{{--                            <div>--}}
{{--                                <p>Hair</p>--}}
{{--                                <span>Brunet</span>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <p><a href="#" class="btn btn-primary px-4 py-3">Read more</a> <a href="#" class="btn btn-primary btn-outline-primary px-4 py-3">View Gallery</a></p>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
    </section>


    <section class="ftco-section-2">
        <div class="container-fluid">
            <div class="section-2-blocks-wrapper d-flex row no-gutters">
                <div class="img col-md-6 ftco-animate" style="background-image: url({{asset('img/'.$home->about_img)}});">
                </div>
                <div class="text col-md-6 ftco-animate">
                    <div class="text-inner align-self-start">

                        <h3 class="heading">Look A Model Agency</h3>
                        <p>{!! $home->about !!}}</p>
{{--                        <ul class="my-4">--}}
{{--                            <li><span class="ion-ios-checkmark-circle mr-2"></span> Even the all-powerful Pointing</li>--}}
{{--                            <li><span class="ion-ios-checkmark-circle mr-2"></span> Behind the word mountains</li>--}}
{{--                            <li><span class="ion-ios-checkmark-circle mr-2"></span> Separated they live in Bookmarksgrove</li>--}}
{{--                        </ul>--}}

                        <div class="row">
                            <div class="col-md-7 ftco-animate">
                                <div class="img-2 d-flex justify-content-center align-items-center" style="background-image: url({{asset('img/'.$home->history_img1)}});">
                                    <a href="https://vimeo.com/45830194" class="button popup-vimeo"><span class="ion-ios-play"></span></a>
                                </div>
                            </div>
                            <div class="col-md-4 d-md-flex align-items-center">
                                <h3 class="watchvideo-heading"><a href="#"><span class="ion-ios-play"></span> Watch our video promo</a></h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="ftco-section-2">
        <div class="container-fluid">
            <div class="row d-flex no-gutters">
                <div class="col-md-6 d-flex align-items-center heading-section ftco-animate bg-light">
                    <div class="col-md-9">
                        <div class="p-5">
                            <h2 class="mb-4">Our Tops Model's</h2>
                            <p> {!! $home->mission !!} </p>
                        </div>
                    </div>
                </div>
                @foreach($prog as $row)
                <div class="col-md-3 model-entry ftco-animate">
                    <div class="model-img" style="background-image: url({{asset('img/'.$row->main_image)}});">
                        <div class="name">
                            <h3><a href="model-single.html">{{$row->name}}</a></h3>
                        </div>
                        <div class="text">
                            <h3><a href="model-single.html">{{$row->name}}</a></h3>
                            <div class="d-flex models-info">
                                <div class="pr-md-3">
                                    <p>Height</p>
                                    <span>185</span>
                                </div>
                                <div class="pr-md-3">
                                    <p>Bust</p>
                                    <span>79</span>
                                </div>
                                <div class="pr-md-3">
                                    <p>Waist</p>
                                    <span>40</span>
                                </div>
                                <div class="pr-md-3">
                                    <p>Hips</p>
                                    <span>87</span>
                                </div>
                                <div class="pr-md-3">
                                    <p>Shoe</p>
                                    <span>40</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach


                <div class="col-md-3 d-flex justify-content-center align-items-center bg-light ftco-animate">
                    <div class="btn-view">
                        <p><a href="model.html">View more</a></p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="ftco-section testimony-section img" style="background-image: url({{asset('img/'.$home->foot_img2)}});">
        <div class="overlay"></div>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-7 mb-5 text-center heading-section ftco-animate">
                    <h2 class="mb-4">Clients Says</h2>
                    <p>Far far away, behind the word mountains, far from the countries Vokalia </p>
                </div>
            </div>
            <div class="row d-md-flex justify-content-center">
                <div class="col-md-7 ftco-animate">
                    <div class="carousel-testimony owl-carousel">
                        <div class="item">
                            <div class="testimony-wrap text-center">
                                <div class="user-img mb-5" style="background-image: url(images/person_1.jpg)">
	                    <span class="quote d-flex align-items-center justify-content-center">
	                      <i class="icon-quote-left"></i>
	                    </span>
                                </div>
                                <div class="text">
                                    <p class="mb-5">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>
                                    <p class="name">Mike Lewis</p>
                                    <span class="position">Architect</span>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="testimony-wrap text-center">
                                <div class="user-img mb-5" style="background-image: url(images/person_2.jpg)">
	                    <span class="quote d-flex align-items-center justify-content-center">
	                      <i class="icon-quote-left"></i>
	                    </span>
                                </div>
                                <div class="text">
                                    <p class="mb-5">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>
                                    <p class="name">Dennis Green</p>
                                    <span class="position">Architect</span>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="testimony-wrap text-center">
                                <div class="user-img mb-5" style="background-image: url(images/person_3.jpg)">
	                    <span class="quote d-flex align-items-center justify-content-center">
	                      <i class="icon-quote-left"></i>
	                    </span>
                                </div>
                                <div class="text">
                                    <p class="mb-5">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>
                                    <p class="name">Dennis Green</p>
                                    <span class="position">Architect</span>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="testimony-wrap text-center">
                                <div class="user-img mb-5" style="background-image: url(images/person_3.jpg)">
	                    <span class="quote d-flex align-items-center justify-content-center">
	                      <i class="icon-quote-left"></i>
	                    </span>
                                </div>
                                <div class="text">
                                    <p class="mb-5">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>
                                    <p class="name">Dennis Green</p>
                                    <span class="position">Customer</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="ftco-section-2">
        <div class="container-fluid">
            <div class="section-2-blocks-wrapper d-flex row no-gutters">
                <div class="img col-md-6 ftco-animate" style="background-image: url({{asset('img/'.$home->history_img2)}});">
                </div>
                <div class="text col-md-6 ftco-animate">
                    <div class="text-inner align-self-start">

                        <h3 class="heading">Our services</h3>
                        <div class="services d-flex ftco-animate">
                            <div class="icon d-flex justify-content-center align-items-center"><span class="flaticon-quality"></span></div>
                            <div class="info ml-4">
                                <h3>Fashion Shows</h3>
                                <p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life</p>
                            </div>
                        </div>
                        <div class="services d-flex ftco-animate">
                            <div class="icon d-flex justify-content-center align-items-center"><span class="flaticon-megaphone"></span></div>
                            <div class="info ml-4">
                                <h3>Corporate Events</h3>
                                <p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life</p>
                            </div>
                        </div>
                        <div class="services d-flex ftco-animate">
                            <div class="icon d-flex justify-content-center align-items-center"><span class="flaticon-shopping-bag"></span></div>
                            <div class="info ml-4">
                                <h3>Commercial Photo Shots</h3>
                                <p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life</p>
                            </div>
                        </div>
                        <div class="services d-flex ftco-animate">
                            <div class="icon d-flex justify-content-center align-items-center"><span class="flaticon-photo-camera"></span></div>
                            <div class="info ml-4">
                                <h3>Exhibitions/Trade Shows Shows</h3>
                                <p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="ftco-section">
        <div class="container">
            <div class="row d-flex">
                <div class="col-md-3 mb-5 heading-section ftco-animate">
                    <h2 class="mb-4">Recent Blog</h2>
                    <p class="mb-5">Far far away, behind the word mountains, far from the countries Vokalia </p>
                    <p class="btn-view"><a href="#">View more</a></p>
                </div>
                @foreach($mag_url as $row)
                <div class="col-md-3 d-flex ftco-animate">
                    <div class="blog-entry align-self-stretch">
                        <a href="blog-single.html" class="block-20" style="background-image: url({{asset('img/'.$row->image)}});">
                        </a>
                        <div class="text pt-4 d-block">
                            <div class="meta mb-3">
                                <div><a href="#">August 12, 2018</a></div>
                                <div><a href="#">Admin</a></div>
                                <div><a href="#" class="meta-chat"><span class="icon-chat"></span> 3</a></div>
                            </div>
                            <h3 class="heading mt-3"><a href="#">Asia's Next Top Model</a></h3>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>

    <section class="ftco-quote ftco-animate">
        <div class="container">
            <div class="row d-flex">
                <div class="col-md-9 req-quote py-5 align-items-center img" style="background-image: url({{asset('img/'.$home->foot_img)}});">
                    <h3 class="ml-md-3">Wanna be a Model?</h3>
                    <span class="ml-md-3"><a href="#">Call us now to know how!</a></span>
                </div>
            </div>
        </div>
    </section>

    <footer class="ftco-footer ftco-section img">
        <div class="overlay"></div>
        <div class="container">
            <div class="row mb-5">
                <div class="col-md-3">
                    <div class="ftco-footer-widget mb-4">
                        <h2 class="ftco-heading-2">Look</h2>
                        <p> {!! $home->history !!}.</p>
                        <ul class="ftco-footer-social list-unstyled float-md-left float-lft mt-5">
                            <li class="ftco-animate"><a href="#"><span class="icon-twitter"></span></a></li>
                            <li class="ftco-animate"><a href="#"><span class="icon-facebook"></span></a></li>
                            <li class="ftco-animate"><a href="#"><span class="icon-instagram"></span></a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="ftco-footer-widget mb-4">
                        <h2 class="ftco-heading-2">Recent Blog</h2>
                        @foreach($mag_url as $row)
                        <div class="block-21 mb-4 d-flex">
                            <a class="blog-img mr-4" style="background-image: url({{asset('img/'.$row->image)}});"></a>
                            <div class="text">
                                <h3 class="heading"><a href="{{url('/Magazine/'.str_replace(' ','',$row->url_name).'('.$row->id.')')}}">{{$row->Title}}</a></h3>
                                <div class="meta">
                                    <div><a href="#"><span class="icon-calendar"></span> July 12, 2018</a></div>
                                    <div><a href="#"><span class="icon-person"></span> Adminrrr</a></div>
                                    <div><a href="#"><span class="icon-chat"></span> 19</a></div>
                                </div>
                            </div>
                        </div>
                            @endforeach
                        <div class="block-21 mb-4 d-flex">
                            <a class="blog-img mr-4" style="background-image: url(images/image_2.jpg);"></a>
                            <div class="text">
                                <h3 class="heading"><a href="#">Even the all-powerful Pointing has no control about</a></h3>
                                <div class="meta">
                                    <div><a href="#"><span class="icon-calendar"></span> July 12, 2018</a></div>
                                    <div><a href="#"><span class="icon-person"></span> Admin</a></div>
                                    <div><a href="#"><span class="icon-chat"></span> 19</a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="ftco-footer-widget mb-4 ml-md-4">
                        <h2 class="ftco-heading-2">Site Links</h2>
                        <ul class="list-unstyled">
                            <li><a href="#" class="py-2 d-block">Home</a></li>
                            <li><a href="#" class="py-2 d-block">About</a></li>
                            <li><a href="#" class="py-2 d-block">Model</a></li>
                            <li><a href="#" class="py-2 d-block">Services</a></li>
                            <li><a href="#" class="py-2 d-block">Blog</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="ftco-footer-widget mb-4">
                        <h2 class="ftco-heading-2">Have a Questions?</h2>
                        <div class="block-23 mb-3">
                            <ul>
                                <li><span class="icon icon-map-marker"></span><span class="text">203 Fake St. Mountain View, San Francisco, California, USA</span></li>
                                <li><a href="#"><span class="icon icon-phone"></span><span class="text">+2 392 3929 210</span></a></li>
                                <li><a href="#"><span class="icon icon-envelope"></span><span class="text">info@yourdomain.com</span></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 text-center">

                    <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                        Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="icon-heart" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
                        <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
                </div>
            </div>
        </div>
    </footer>

    @stop