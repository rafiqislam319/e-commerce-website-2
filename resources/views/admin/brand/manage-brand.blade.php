@extends('admin.master')
@section('title')
    Manage Brand
@endsection

@section('body')

    <br/>
    <br/>
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h4 class="text-center text-success">Manage Brand Form</h4>

                </div>
                <h3 class="text-center text-success">{{ Session::get('message') }}</h3>
                <div class="panel-body">
                    <table class="table table-bordered">
                        <tr class="bg-primary">
                            <th>SI. NO</th>
                            <th>Brand Name</th>
                            <th>Brand Description</th>
                            <th>Publication Status</th>
                            <th>Action</th>
                        </tr>

                        @php($i=1)
                        @foreach($brands as $brand)
                            <tr>
                                <td>{{ $i++ }}</td>
                                <td>{{ $brand->brand_name }}</td>
                                <td>{{ $brand->brand_description }}</td>
                                <td>{{ $brand->publication_status == 1 ? 'Published' : 'Unpublished' }}</td>

                                <td>
                                    @if( $brand->publication_status == 1)
                                        <a href="{{ route('unpublished-brand', ['id'=>$brand->id]) }}" class="btn btn-info btn-xs">
                                            <span class="glyphicon glyphicon-arrow-up"></span>
                                        </a>
                                    @else
                                        <a href="{{ route('published-brand', ['id'=>$brand->id]) }}" class="btn btn-warning btn-xs">
                                            <span class="glyphicon glyphicon-arrow-down"></span>
                                        </a>
                                    @endif
                                    <a href="{{ route('edit-brand', ['id'=>$brand->id]) }}" class="btn btn-success btn-xs">
                                        <span class="glyphicon glyphicon-edit"></span>
                                    </a>
                                    <a href="{{ route('delete-brand', ['id'=>$brand->id]) }}" onclick="return confirm('Are you sure to delete this');" class="btn btn-danger btn-xs">
                                        <span class="glyphicon glyphicon-trash"></span>
                                    </a>
                                </td>
                            </tr>
                            @endforeach

                    </table>

                </div>

            </div>

        </div>
    </div>
@endsection

