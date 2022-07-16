@extends('layouts.admin.app')
@section('content')

<div class="mt-3">
    <div class="row">
        <div class="col-md-12 text-center">
            <h5>Add Majlis</h5>
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
            <form action="{{ route('admin.majlis.store') }}" method = "POST" enctype="multipart/form-data">
                {{ csrf_field() }}            
                <div class="form-group">
                    <label for="">Banner Image</label>
                    <input type="file" name = "banner_image" placeholder = "Banner Image" class = "form-control" >
                </div> 
                <div class="form-group">
                    <label for="">Majlis Title</label>
                    <input type="text" name = "title" placeholder = "Majlis Title" class = "form-control" >
                </div>   
                <div class="form-group">
                    <label for="">Majlis Description</label>
                    <textarea name = "description" cols = "10" rows = "10" class = "form-control" >Majlis Description</textarea>
                </div>  
                <div class="form-group">
                    <label for="">Address</label>
                    <input type="text" name = "address" placeholder = "Address" class = "form-control" >
                </div>
                <div class="form-group">
                    <label for="">Date Time</label>
                    <input type="text" name = "date_time" placeholder = "Date Time" class = "form-control" >
                </div>                              
                <div class="form-group text-center mt-3">
                    <input type="submit" name = "submit" class = "btn btn-md form-control btn-primary" value = "Add Majlis Data">
                </div>
            </form>
        </div>
        <div class="col-md-3"></div>
    </div> 
</div> 
   
@endsection