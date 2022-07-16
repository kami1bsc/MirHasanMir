@extends('layouts.admin.app')
@section('content')

<div class="mt-3">
    <div class="row">
        <div class="col-md-12 text-center mb-3">
            <!-- <h5>Business Categories</h5> -->
            <div class="row">
                <div class="col-md-12 col-12">
                    <h5>Video Categories</h5>
                </div>
                <!-- <div class="col-md-2">
                    <a href="{{ route('admin.categories.create') }}" class = "btn btn-sm btn-outline-primary">Add New <i class = "fa fa-plus"></i></a>
                </div> -->
            </div>
            @if(session()->has('message'))
                <div class="alert alert-success text-center">
                    {{ session()->get('message') }}
                </div>
            @endif
            @if(session()->has('error'))
                <div class="alert alert-danger text-center">
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
                    <h6 class="m-0 font-weight-bold text-primary">Categories Data</h6>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Category Name</th>                                                                                                
                                </tr>
                            </thead>
                            <tfoot>
                                <tr>
                                    <th>ID</th>
                                    <th>Category Name</th>                                                                                                    
                                </tr>
                            </tfoot>
                            <tbody>
                                @foreach($categories as $category)                            
                                    <tr>
                                        <td>{{ $category->id }}</td>                                        
                                        <td>{{ $category->category_name }}</td>                                
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