@extends('layouts.admin.app')
@section('content')
<div class="mt-3">
    <div class="row">
        <div class="col-md-12 text-center mb-3">
            <!-- <h5>Business Categories</h5> -->
            <div class="row">
                <div class="col-md-10">
                    <h5>Albums</h5>
                </div>
                <div class="col-md-2">
                    <a href="{{ route('admin.albums.create') }}" class = "btn btn-sm btn-outline-primary">Add New <i class = "fa fa-plus"></i></a>
                </div>
            </div>
            <br>
            @if(session()->has('message'))
                <div class="alert alert-success">
                    {{ session()->get('message') }}
                </div>
            @endif
            @if(session()->has('error'))
                <div class="alert alert-danger">
                    {{ session()->get('error') }}
                </div>
            @endif
        </div>
    </div> 
    <div class="row">
        <div class="col-md-12">
            <!-- -->
            
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Albums Data</h6>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Name</th>
                                    <th>Image</th> 
                                    <th>Album Type</th>
                                    <th>Released Year</th>  
                                    <th>Added at</th>                                              
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tfoot>
                                <tr>
                                    <th>ID</th>
                                    <th>Name</th>
                                    <th>Image</th> 
                                    <th>Album Type</th>
                                    <th>Released Year</th>  
                                    <th>Added at</th>                                              
                                    <th>Action</th>
                                </tr>
                            </tfoot>
                            <tbody>
                                @foreach($albums as $album)                            
                                    <tr>
                                        <td>{{ $album->id }}</td>
                                        <td>{{ $album->album_name }}</td>
                                        <td>
                                            <img src="{{ asset($album->album_image) }}" alt="Album Image" style = "width: 60px; height: 60px;">
                                        </td>
                                        <td>{{ $album->album_type }}</td>
                                        <td>{{ $album->released_year }}</td>
                                        <td>{{ $album->created_at }}</td>                                                                 
                                        <td>
                                            <a href="{{ route('admin.albums.edit', $album->id) }}" class = "btn btn-sm btn-outline-primary"><i class = "fa fa-edit"></i></a>
                                            <a href="{{ route('admin.delete_album', $album->id) }}" onclick = "return confirm('Are you Sure to Delete?')" class = "btn btn-sm btn-outline-primary"><i class = "fa fa-trash"></i></a>
                                        </td>
                                    </tr>
                                @endforeach 
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div> 
</div> 
    
@endsection