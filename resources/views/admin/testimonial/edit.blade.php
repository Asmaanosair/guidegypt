@extends('layouts.admin_lay')
@section('testimonial')
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
                        <h1 class="m-0 text-dark">Testimonial Page</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{url('KT_Admin/testimonial')}}">Testimonial</a></li>
                            <li class="breadcrumb-item active">Testimonial Page</li>
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
                            <h3 class="card-title">Testimonial Page Form</h3>
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->

                        <form method="post"  class="form-horizontal" action="{{url('KT_Admin/testimonial/update/'.$department->id)}}" enctype="multipart/form-data">
                            {{csrf_field()}}





                            <div class="card-body">


                                <div class="form-group row">
                                    <label for="inputEmail3" class="col-sm-2 col-form-label">Name</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control"  name="title"  value="{{$department->title}}" >
                                    </div>
                                    @if ($errors->has('title'))
                                        <span class="help-block text-red">
                                            <strong>{{ $errors->first('title') }}</strong>
                                         </span>
                                    @endif
                                </div>
                                <div class="form-group row">
                                    <label for="inputEmail3" class="col-sm-2 col-form-label">Job</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control"  name="job"  value="{{$department->job}}" >
                                    </div>
                                    @if ($errors->has('job'))
                                        <span class="help-block text-red">
                                            <strong>{{ $errors->first('job') }}</strong>
                                         </span>
                                    @endif
                                </div>











                                <div class="form-group row">
                                    <label for="inputEmail3" class="col-sm-2 col-form-label">Description</label>
                                    <div class="col-sm-10">
                                        <textarea type="text" class="form-control" id="inputEmail3" name="des" >{{$department->des}} </textarea>
                                    </div>
                                    @if ($errors->has('des'))
                                        <span class="help-block text-red">
                                            <strong>{{ $errors->first('des') }}</strong>
                                         </span>
                                    @endif
                                </div>

                                <div class="form-group row">
                                    <label for="inputEmail3" class="col-sm-2 col-form-label">  Image  </label>
                                    <div class="col-sm-10">
                                        @if($department->image==null)
                                            <span class="help-block text-red">
                                            <strong>Please Uploade Image</strong>
                                         </span>
                                        @else
                                            <img src="{{asset('img/'.$department->image)}}" width="100px"height="100px">
                                        @endif

                                        <input type="file" class="form-control" name="image"   id="inputEmail3" >
                                    </div>
                                    @if ($errors->has('image'))
                                        <span class="help-block text-red">
                                            <strong>{{ $errors->first('image') }}</strong>
                                         </span>
                                    @endif
                                </div>


                            </div>
                            <!-- /.card-body-->
                            <div class="card-footer">
                                <button type="submit" class="btn btn-info form-control"> Submit</button>
                            </div>
                            <!-- /.card-footer-->
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