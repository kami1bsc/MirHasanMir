@extends('layouts.admin.app')
@section('content')

<div class="mt-3">
    <div class="row">
        <div class="col-md-12 text-center">
            <h5>Edit Month Name</h5>
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
        <div class="col-md-3"></div>
        <div class="col-md-6">
            <form action="{{ route('admin.update_month') }}" method = "POST" enctype="multipart/form-data">
                {{ csrf_field() }}  
                <div class="form-group">
                    <label for="">Month Name</label>
                    <input type="hidden" name = "month_id" value = "{{ $month->id }}" class = "form-control" >
                    <input type="text" name = "month_name" value = "{{ $month->month_name }}" class = "form-control" >
                </div>
                <div class="form-group">
                    <label for="">Active</label>
                    <select name="is_active" id="" class = 'form-control'>
                        @if($month->is_active == 'Active')
                            <option value="Active">Active</option>
                            <option value="Inactive">Inactive</option>
                        @else
                            <option value="Inactive">Inactive</option>
                            <option value="Active">Active</option>
                        @endif                            
                    </select>
                </div>                
                
                <div class="form-group text-center mt-3">
                    <input type="submit" name = "submit" class = "btn btn-md form-control btn-primary" value = "Update Month Name">
                </div>
            </form>
        </div>
        <div class="col-md-3"></div>
    </div> 
</div> 
   
@endsection