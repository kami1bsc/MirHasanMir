@extends('layouts.admin.app')
@section('content')
<div class="mt-3">
    <div class="row">
        <div class="col-md-12 text-center mb-3">
            <!-- <h5>Business Categories</h5> -->
            <div class="row">
                <div class="col-md-10">
                    <h5>Majlis Updates</h5>
                </div>
                <div class="col-md-2">
                    <a href="{{ route('admin.majlis.create') }}" class = "btn btn-sm btn-outline-primary">Add New <i class = "fa fa-plus"></i></a>
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
                    <h6 class="m-0 font-weight-bold text-primary">Majlis Updates Data</h6>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Banner</th>
                                    <th>Majlis Title</th> 
                                    <th>Majlis Description</th>
                                    <th>Address</th>  
                                    <th>Date Time</th>                                              
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tfoot>
                                <tr>
                                    <th>ID</th>
                                    <th>Banner</th>
                                    <th>Majlis Title</th> 
                                    <th>Majlis Description</th>
                                    <th>Address</th>  
                                    <th>Date Time</th>                                              
                                    <th>Action</th>
                                </tr>
                            </tfoot>
                            <tbody>
                                @foreach($majlises as $majlis)                            
                                    <tr>
                                        <td>{{ $majlis->id }}</td>                                        
                                        <td>
                                            <img src="{{ asset($majlis->banner_image) }}" alt="Album Image" style = "width: 60px; height: 60px;">
                                        </td>
                                        <td>{{ $majlis->title }}</td>
                                        <td>{{ $majlis->description }}</td>
                                        <td>{{ $majlis->address }}</td>  
                                        <td>{{ $majlis->date_time }}</td>                                                                 
                                        <td>
                                            <a href="{{ route('admin.majlis.edit', $majlis->id) }}" class = "btn btn-sm btn-outline-primary"><i class = "fa fa-edit"></i></a>
                                            <a href="{{ route('admin.delete_majlis', $majlis->id) }}" onclick = "return confirm('Are you Sure to Delete?')" class = "btn btn-sm btn-outline-primary"><i class = "fa fa-trash"></i></a>
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