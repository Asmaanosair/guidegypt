@extends('layouts.admin_lay')
@section('program')
    active
@stop
@section('add_program')
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
                        <h1 class="m-0 text-dark">Program Page</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{url('KT_Admin/Program')}}">Program</a></li>

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
                            <h3 class="card-title">Program Page Form</h3>
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->

                        <form method="post"  class="form-horizontal" action="{{url('KT_Admin/Program/store')}}" enctype="multipart/form-data">
                            {{csrf_field()}}
                            <div class="card-body">
                                <div class="form-group row">
                                    <label for="inputEmail3" class="col-sm-2 col-form-label">Name </label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control "  name="name">
                                    </div>

                                    @if ($errors->has('name'))
                                        <span class="help-block text-red">
                                            <strong>{{ $errors->first('name') }}</strong>
                                         </span>
                                    @endif
                                </div>
                                <div class="form-group row">
                                    <label for="inputEmail3" class="col-sm-2 col-form-label"> Department </label>
                                    <div class="col-sm-10">
                                        <select type="text" class="form-control" id="inputEmail3" name="department"  >
                                            @foreach($department as $row)
                                            <option value="{{$row->id}}">{{$row->name}}</option>

                                                @endforeach
                                        </select>
                                    </div>
                                    @if ($errors->has('department'))
                                        <span class="help-block text-red">
                                            <strong>{{ $errors->first('department') }}</strong>
                                         </span>
                                    @endif
                                </div>







                                <div class="form-group row">
                                    <label for="inputEmail3" class="col-sm-2 col-form-label">Title</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control"  name="title" >
                                    </div>
                                    @if ($errors->has('title'))
                                        <span class="help-block text-red">
                                            <strong>{{ $errors->first('title') }}</strong>
                                         </span>
                                    @endif
                                </div>
                                <div class="form-group row">
                                    <label for="inputEmail3" class="col-sm-2 col-form-label"> Url_Name </label>
                                    <div class="col-sm-10">

                                        <input type="text" class="form-control" id="inputEmail3" name="url" >
                                    </div>
                                    @if ($errors->has('url'))
                                        <span class="help-block text-red">
                                            <strong>{{ $errors->first('url') }}</strong>
                                         </span>
                                    @endif
                                </div>

                                <div class="form-group row">
                                    <label for="inputEmail3" class="col-sm-2 col-form-label"> Price </label>
                                    <div class="col-sm-10">

                                        <input type="text" class="form-control" id="inputEmail3" name="price" >
                                    </div>
                                    @if ($errors->has('price'))
                                        <span class="help-block text-red">
                                            <strong>{{ $errors->first('price') }}</strong>
                                         </span>
                                    @endif
                                </div>
                                <div class="form-group row">
                                    <label for="inputEmail3" class="col-sm-2 col-form-label"> Offer </label>
                                    <div class="col-sm-10">

                                        <input type="text" class="form-control" id="inputEmail3" name="offer" >
                                    </div>
                                    @if ($errors->has('offer'))
                                        <span class="help-block text-red">
                                            <strong>{{ $errors->first('offer') }}</strong>
                                         </span>
                                    @endif
                                </div>
                                <div class="form-group row">
                                    <label for="inputEmail3" class="col-sm-2 col-form-label"> Duration </label>
                                    <div class="col-sm-10">

                                        <input type="text" class="form-control" id="inputEmail3" name="duration" >
                                    </div>
                                    @if ($errors->has('duration'))
                                        <span class="help-block text-red">
                                            <strong>{{ $errors->first('duration') }}</strong>
                                         </span>
                                    @endif
                                </div>


                                <div class="form-group row">
                                    <label for="inputEmail3" class="col-sm-2 col-form-label"> Simple Description </label>
                                    <div class="col-sm-10">
                                        <textarea type="text" class="form-control" id="inputEmail3" name="s_des" > </textarea>
                                    </div>
                                    @if ($errors->has('s_des'))
                                        <span class="help-block text-red">
                                            <strong>{{ $errors->first('s_des') }}</strong>
                                         </span>
                                    @endif
                                </div>

                                <div class="form-group row">
                                    <label for="inputEmail3" class="col-sm-2 col-form-label"> Inner Description </label>
                                    <div class="col-sm-10">
                                        <textarea type="text" class="form-control"  id="editor3" name="des" > </textarea>
                                    </div>
                                    @if ($errors->has('des'))
                                        <span class="help-block text-red">
                                            <strong>{{ $errors->first('des') }}</strong>
                                         </span>
                                    @endif
                                </div>

                                <div class="form-group row">
                                    <label for="inputEmail3" class="col-sm-2 col-form-label"> Services </label>
                                    <div class="col-sm-10">
                                        <textarea type="text" class="form-control"  id="editor2"  name="service" > </textarea>
                                    </div>
                                    @if ($errors->has('service'))
                                        <span class="help-block text-red">
                                            <strong>{{ $errors->first('service') }}</strong>
                                         </span>
                                    @endif
                                </div>





                                <div class="form-group row">
                                    <label for="inputEmail3" class="col-sm-2 col-form-label"> Main Image  </label>

                                    <div class="col-sm-10">

                                        <input type="file" name="main_image" class="form-control" id="inputEmail3" >

                                    </div>
                                    @if ($errors->has('main_image'))
                                        <span class="help-block text-red">
                                            <strong>{{ $errors->first('main_image') }}</strong>
                                         </span>
                                    @endif
                                </div>



                                <div class="form-group row">
                                    <label for="inputEmail3" class="col-sm-2 col-form-label"> Inner Image  </label>
                                    <div class="col-sm-10">

                                        <input type="file" class="form-control" name="inner_image"   id="inputEmail3" >
                                    </div>
                                    @if ($errors->has('inner_image'))
                                        <span class="help-block text-red">
                                            <strong>{{ $errors->first('inner_image') }}</strong>
                                         </span>
                                    @endif
                                </div>

                                <div class="form-group row">
                                    <label for="inputEmail3" class="col-sm-2 col-form-label"> Service Image  </label>
                                    <div class="col-sm-10">

                                        <input type="file" class="form-control" name="service_image"   id="inputEmail3" >
                                    </div>
                                    @if ($errors->has('service_image'))
                                        <span class="help-block text-red">
                                            <strong>{{ $errors->first('service_image') }}</strong>
                                         </span>
                                    @endif
                                </div>



                                <div class="form-group row">
                                    <label for="inputEmail3" class="col-sm-2 col-form-label"> Active </label>
                                    <div class="col-sm-10">
                                        <select type="text" class="form-control" id="inputEmail3" name="active"  >
                                            <option value="0">No</option>
                                            <option value="1">Yes</option>
                                        </select>
                                    </div>
                                    @if ($errors->has('active'))
                                        <span class="help-block text-red">
                                            <strong>{{ $errors->first('active') }}</strong>
                                         </span>
                                    @endif
                                </div>

                                <div class="form-group row">
                                    <label for="inputEmail3" class="col-sm-2 col-form-label"> KeyWords </label>
                                    <div class="col-sm-10">
                                        <textarea type="text" class="form-control" id="inputEmail3" name="keywords" > </textarea>
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
                                        <textarea type="text" class="form-control" id="inputEmail3" name="description" > </textarea>
                                    </div>
                                    @if ($errors->has('description'))
                                        <span class="help-block text-red">
                                            <strong>{{ $errors->first('description') }}</strong>
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