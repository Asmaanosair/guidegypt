@extends('layouts.admin_lay')
@section('home')
    active
    @stop
@section('content')

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">Starter Page</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{url('KT_admin/home/1')}}">Home</a></li>
                        <li class="breadcrumb-item active">Home Page</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
    <!-- Main content -->
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <!-- /.card -->
                <!-- Horizontal Form -->
                <div class="card card-info col-12">
                    <div class="card-header">
                        <h3 class="card-title">Home Page Form</h3>
                    </div>
                    <!-- /.card-header -->
                    <!-- form start -->

                        <form method="post"  class="form-horizontal" action="{{url('/KT_Admin/home')}}" enctype="multipart/form-data">
                            {{csrf_field()}}
                        <div class="card-body">
                            <div class="form-group row">
                                <label for="inputEmail3" class="col-sm-2 col-form-label">About Us</label>
                                <div class="col-sm-10">
                                    <textarea type="text" class="form-control " id="editor1" name="about" >{{$row->about}} </textarea>
                                </div>

                                @if ($errors->has('about'))
                                    <span class="help-block text-red">
                                            <strong>{{ $errors->first('about') }}</strong>
                                         </span>
                                @endif
                            </div>
                            <div class="form-group row">
                                <label for="inputEmail3" class="col-sm-2 col-form-label"> About Image  </label>

                                <div class="col-sm-10">
                                    @if($row->about_img==null)
                                        <span class="help-block text-red">
                                            <strong>Please Uploade Image</strong>
                                         </span>
                                    @else
                                        <img src="{{asset('img/'.$row->about_img)}}" width="100px"height="100px">
                                    @endif
                                    <input type="file" name="about_iamge1" class="form-control" id="inputEmail3" >

                                </div>
                                @if ($errors->has('about_iamge1'))
                                    <span class="help-block text-red">
                                            <strong>{{ $errors->first('about_iamge1') }}</strong>
                                         </span>
                                @endif
                            </div>

                            <div class="form-group row">
                                <label for="inputEmail3" class="col-sm-2 col-form-label">Our History</label>
                                <div class="col-sm-10">
                                    <textarea type="text" class="form-control" id="editor2" name="our_history" >{{$row->history}} </textarea>
                                </div>
                                @if ($errors->has('our_history'))
                                    <span class="help-block text-red">
                                            <strong>{{ $errors->first('our_history') }}</strong>
                                         </span>
                                @endif
                            </div>

                            <div class="form-group row">
                                <label for="inputEmail3" class="col-sm-2 col-form-label"> History Image 1 </label>
                                <div class="col-sm-10">
                                    @if($row->history_img1==null)
                                        <span class="help-block text-red">
                                            <strong>Please Uploade Image</strong>
                                         </span>
                                    @else
                                        <img src="{{asset('img/'.$row->history_img1)}}" width="100px"height="100px">
                                    @endif
                                    <input type="file" class="form-control" name="history_image1"   id="inputEmail3" >
                                </div>
                                @if ($errors->has('history_image1'))
                                    <span class="help-block text-red">
                                            <strong>{{ $errors->first('history_image1') }}</strong>
                                         </span>
                                @endif
                            </div>
                            <div class="form-group row">
                                <label for="inputEmail3" class="col-sm-2 col-form-label"> History Image 2 </label>
                                <div class="col-sm-10">
                                    @if($row->history_img2==null)
                                        <span class="help-block text-red">
                                            <strong>Please Uploade Image</strong>
                                         </span>
                                    @else
                                        <img src="{{asset('img/'.$row->history_img2)}}" width="100px"height="100px">
                                    @endif
                                    <input type="file" class="form-control" id="inputEmail3" name="history_image2" >
                                </div>
                                @if ($errors->has('history_image2'))
                                    <span class="help-block text-red">
                                            <strong>{{ $errors->first('history_image2') }}</strong>
                                         </span>
                                @endif
                            </div>

                            <div class="form-group row">
                                <label for="inputEmail3" class="col-sm-2 col-form-label">Our Mission</label>
                                <div class="col-sm-10">
                                    <textarea type="text" class="form-control" id="editor3" name="our_mission" > {{$row->mission}}  </textarea>
                                </div>
                                @if ($errors->has('our_mission'))
                                    <span class="help-block text-red">
                                            <strong>{{ $errors->first('our_mission') }}</strong>
                                         </span>
                                @endif
                            </div>
                            <div class="form-group row">
                                <label for="inputEmail3" class="col-sm-2 col-form-label"> Mission Image 1 </label>
                                <div class="col-sm-10">
                                    @if($row->mission_img1==null)
                                        <span class="help-block text-red">
                                            <strong>Please Uploade Image</strong>
                                         </span>
                                    @else
                                        <img src="{{asset('img/'.$row->mission_img1)}}" width="100px"height="100px">
                                    @endif
                                    <input type="file" class="form-control" id="inputEmail3" name="mission_image1" >
                                </div>
                                @if ($errors->has('mission_image1'))
                                    <span class="help-block text-red">
                                            <strong>{{ $errors->first('mission_image1') }}</strong>
                                         </span>
                                @endif
                            </div>

                            <div class="form-group row">
                                <label for="inputEmail3" class="col-sm-2 col-form-label"> Mission Image 2 </label>
                                <div class="col-sm-10">
                                    @if($row->mission_img2==null)
                                        <span class="help-block text-red">
                                            <strong>Please Uploade Image</strong>
                                         </span>
                                    @else
                                        <img src="{{asset('img/'.$row->mission_img2)}}" width="100px"height="100px">
                                    @endif
                                    <input type="file" class="form-control" id="inputEmail3" name="mission_image2"  >
                                </div>
                                @if ($errors->has('mission_image2'))
                                    <span class="help-block text-red">
                                            <strong>{{ $errors->first('mission_image2') }}</strong>
                                         </span>
                                @endif
                            </div>

                            <div class="form-group row">
                                <label for="inputEmail3" class="col-sm-2 col-form-label"> Logo </label>
                                <div class="col-sm-10">
                                    @if($row->logo==null)
                                        <span class="help-block text-red">
                                            <strong>Please Uploade Image</strong>
                                         </span>
                                    @else
                                        <img src="{{asset('img/'.$row->logo)}}" width="100px"height="100px">
                                    @endif
                                    <input type="file" class="form-control" id="inputEmail3" name="logo"  >
                                </div>
                                @if ($errors->has('logo'))
                                    <span class="help-block text-red">
                                            <strong>{{ $errors->first('logo') }}</strong>
                                         </span>
                                @endif
                            </div>

                            <div class="form-group row">
                                <label for="inputEmail3" class="col-sm-2 col-form-label"> Footer Description</label>
                                <div class="col-sm-10">
                                    <textarea type="text" class="form-control" id="inputEmail3" name="footer" >{{$row->footer_des}}  </textarea>
                                </div>
                                @if ($errors->has('footer'))
                                    <span class="help-block text-red">
                                            <strong>{{ $errors->first('footer') }}</strong>
                                         </span>
                                @endif
                            </div>

                            <div class="form-group row">
                                <label for="inputEmail3" class="col-sm-2 col-form-label"> Footer image1 </label>
                                <div class="col-sm-10">
                                    @if($row->foot_img==null)
                                        <span class="help-block text-red">
                                            <strong>Please Uploade Image</strong>
                                         </span>
                                    @else
                                        <img src="{{asset('img/'.$row->foot_img)}}" width="100px"height="100px">
                                    @endif
                                    <input type="file" class="form-control" id="inputEmail3" name="foot_img"  >
                                </div>
                                @if ($errors->has('foot_img'))
                                    <span class="help-block text-red">
                                            <strong>{{ $errors->first('foot_img') }}</strong>
                                         </span>
                                @endif
                            </div>
                            <div class="form-group row">
                                <label for="inputEmail3" class="col-sm-2 col-form-label"> Footer image2 </label>
                                <div class="col-sm-10">
                                    @if($row->foot_img2==null)
                                        <span class="help-block text-red">
                                            <strong>Please Uploade Image</strong>
                                         </span>
                                    @else
                                        <img src="{{asset('img/'.$row->foot_img2)}}" width="100px"height="100px">
                                    @endif
                                    <input type="file" class="form-control" id="inputEmail3" name="foot_img2"  >
                                </div>
                                @if ($errors->has('foot_img2'))
                                    <span class="help-block text-red">
                                            <strong>{{ $errors->first('foot_img2') }}</strong>
                                         </span>
                                @endif
                            </div>
                            <div class="form-group row">
                                <label for="inputEmail3" class="col-sm-2 col-form-label"> Footer image3 </label>
                                <div class="col-sm-10">
                                    @if($row->foot_img3==null)
                                        <span class="help-block text-red">
                                            <strong>Please Uploade Image</strong>
                                         </span>
                                    @else
                                        <img src="{{asset('img/'.$row->foot_img3)}}" width="100px"height="100px">
                                    @endif
                                    <input type="file" class="form-control" id="inputEmail3" name="foot_img3"  >
                                </div>
                                @if ($errors->has('foot_img3'))
                                    <span class="help-block text-red">
                                            <strong>{{ $errors->first('foot_img3') }}</strong>
                                         </span>
                                @endif
                            </div>

                            <div class="form-group row">
                                <label for="inputEmail3" class="col-sm-2 col-form-label"> Site Name </label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="inputEmail3" name="site_name" value="{{$row->site}}" >
                                </div>
                                @if ($errors->has('site_name'))
                                    <span class="help-block text-red">
                                            <strong>{{ $errors->first('site_name') }}</strong>
                                         </span>
                                @endif
                            </div>

                            <div class="form-group row">
                                <label for="inputEmail3" class="col-sm-2 col-form-label"> KeyWords </label>
                                <div class="col-sm-10">
                                    <textarea type="text" class="form-control" id="inputEmail3" name="keywords" > {{$row->keywords}}</textarea>
                                </div>
                                @if ($errors->has('keywords'))
                                    <span class="help-block text-red">
                                            <strong>{{ $errors->first('keywords') }}</strong>
                                         </span>
                                @endif
                            </div>

                            <div class="form-group row">
                                <label for="inputEmail3" class="col-sm-2 col-form-label">  Description</label>
                                <div class="col-sm-10">
                                    <textarea type="text" class="form-control" id="inputEmail3" name="des" > {{$row->description}}</textarea>
                                </div>
                                @if ($errors->has('des'))
                                    <span class="help-block text-red">
                                            <strong>{{ $errors->first('des') }}</strong>
                                         </span>
                                @endif
                            </div>


                        </div>
                        <!-- /.card-body -->
                        <div class="card-footer">
                            <button type="submit" class="btn btn-info form-control"> Submit</button>
                        </div>
                        <!-- /.card-footer -->
                    </form>
                </div>
                <!-- /.card -->
            </div>
            <!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->

@stop