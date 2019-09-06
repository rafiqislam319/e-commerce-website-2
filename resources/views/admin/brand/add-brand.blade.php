@extends('admin.master')
@section('title')
    Add Brand
@endsection

@section('body')

    <br/>
    <br/>
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h4 class="text-center text-success">Add Brand Form</h4>

                </div>
                <h3 class="text-center text-success">{{ Session::get('message') }}</h3>
                <div class="panel-body">
                    {!! Form::open(['route'=>'save-brand', 'method'=>'POST', 'class'=>'form-horizontal']) !!}
                        <div class="form-group row">
                            <label for="inputEmail3" class="col-sm-3 col-form-label">Brand Name</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" name="brand_name">
                                <span class="text-danger">{{ $errors->has('brand_name') ? $errors->first('brand_name') : ' ' }}</span>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="inputPassword3" class="col-sm-3 col-form-label">Brand Description</label>
                            <div class="col-sm-9">
                                <textarea class="form-control" name="brand_description"></textarea>
                                <span class="text-danger">{{ $errors->has('brand_description') ? $errors->first('brand_description') : ' ' }}</span>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="inputEmail3" class="col-sm-3 col-form-label">Publication Status</label>
                            <div class="col-sm-9">
                                <input type="radio"  name="publication_status" value="1"> Published
                                <input type="radio"  name="publication_status" value="0"> Unpublished
                            </div>
                            <span class="text-danger">{{ $errors->has('publication_status') ? $errors->first('publication_status') : ' ' }}</span>
                        </div>


                        <div class="form-group row">
                            <div class="col-sm-3"></div>
                            <div class="col-sm-9">
                                <button type="submit" name="btn" class="btn btn-success btn-block">Save Brand Info</button>
                            </div>
                        </div>

                        {!! Form::close() !!}

                </div>

            </div>

        </div>
    </div>
@endsection
