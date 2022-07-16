@extends('layouts.admin.app')
@section('content')

<div class="mt-3">
    <div class="row">
        <div class="col-md-12 text-center">
            <h5>Create Album</h5>
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
            <form action="{{ route('admin.albums.store') }}" method = "POST" enctype="multipart/form-data">
                {{ csrf_field() }}            
                
                <div class="form-group">
                    <label for="">Album Name</label>
                    <input type="text" name = "album_name" placeholder = "Album Name" class = "form-control" >
                </div>   
                <div class="form-group">
                    <label for="">Album Image</label>
                    <input type="file" name = "album_image" placeholder = "Album Image" class = "form-control" >
                </div>  
                <div class="form-group">
                    <label for="">Released Year</label>
                    <input type="text" name = "released_year" placeholder = "Released Year" class = "form-control" >
                </div>
                <div class="form-group">
                    <label for="">Album Type</label>
                    <select name="album_type" id="" class = 'form-control'>
                        <option value="Hamd-o-Naat">Hamd-o-Naat</option>
                        <option value="Nohay">Nohay</option>
                        <option value="Manqabat">Manqabat</option>
                    </select>
                </div>                
                <div class="form-group text-center mt-3">
                    <input type="submit" name = "submit" class = "btn btn-md form-control btn-primary" value = "Add Album">
                </div>
            </form>
        </div>
        <div class="col-md-3"></div>
    </div> 
</div> 
   
@endsection