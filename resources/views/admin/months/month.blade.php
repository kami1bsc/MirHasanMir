@extends('layouts.admin.app')
@section('content')
<div class="mt-3">
    <div class="row">
        <div class="col-md-12 text-center mb-3">            
            <div class="row">
                <div class="col-md-12 col-12">
                    <h5>Month Name</h5>
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
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Month Name</h6>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Month Name</th>
                                    <th>Active</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tfoot>
                                <tr>
                                    <th>ID</th>
                                    <th>Month Name</th>
                                    <th>Active</th>
                                    <th>Action</th>
                                </tr>
                            </tfoot>
                            <tbody>
                                @foreach($month as $m)                            
                                    <tr>
                                        <td>{{ $m->id }}</td>                                        
                                        <td>{{ $m->month_name }}</td>
                                        <td>{{ $m->is_active }}</td>                                                                       
                                        <td>                                            
                                            <a href="{{ route('admin.edit_month', $m->id) }}" class = "btn btn-sm btn-primary"><i class = "fa fa-edit"></i></a>
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