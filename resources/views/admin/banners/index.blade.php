@extends('layouts.admin.app')
@section('content')
<div class="mt-3">
    <div class="row">
        <div class="col-md-12 text-center mb-3">
            <!-- <h5>Business Categories</h5> -->
            <div class="row">
                <div class="col-md-10">
                    <h5>Banners</h5>
                </div>
                <div class="col-md-2">
                    <a href="{{ route('admin.banners.create') }}" class = "btn btn-sm btn-outline-primary">Add New <i class = "fa fa-plus"></i></a>
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
                    <h6 class="m-0 font-weight-bold text-primary">Banner Images</h6>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Banner Image</th>                                      
                                    <th>Added at</th>                                              
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tfoot>
                                <tr>
                                    <th>ID</th>
                                    <th>Banner Image</th>                                      
                                    <th>Added at</th>                                              
                                    <th>Action</th>
                                </tr>
                            </tfoot>
                            <tbody>
                                @foreach($banners as $banner)                            
                                    <tr>
                                        <td>{{ $banner->id }}</td>
                                      
                                        <td>
                                            <img src="{{ asset($banner->banner_image) }}" alt="Album Image" style = "width: 60px; height: 60px;">
                                        </td>                                        
                                        <td>{{ $banner->created_at }}</td>                                                                 
                                        <td>
                                            <form action="{{ route('admin.banners.destroy', $banner->id) }}" method = "POST">
                                                {{ csrf_field() }}
                                                {{ method_field('DELETE') }}
                                                <button type = "submit" name = "submit" class = "btn btn-sm btn-primary"><i class = "fa fa-trash"></i></button>
                                            </form>                                            
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