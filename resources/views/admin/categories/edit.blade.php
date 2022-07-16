@extends('layouts.admin.app')
@section('content')

<div class="mt-3">
    <div class="row">
        <div class="col-md-12 text-center">
            <h5>Edit Category</h5>
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
            <form action="{{ route('admin.categories.update', $category->id) }}" method = "POST" enctype="multipart/form-data">
                {{ csrf_field() }}
                {{ method_field('PUT') }}
                <div class="form-group">
                    <label for="">Category Name</label>
                    <input type="text" name = "category_name" class = "form-control" value = "{{ $category->category_name }}">
                </div>
                <div class="form-group">
                    <label for="">Category Image</label>
                    <input type="file" name = "category_image" id = "category_image" class = "form-control" value = "{{ $category->category_name }}">
                </div>
                <div id = "display_image" class = "text-center" style = "display: none;">
                    <img src = "{{ asset($category->category_image) }}" style = "width: 142px; height: 110px;">
                </div>
                <div class="form-group text-center mt-3">
                    <input type="submit" name = "submit" class = "btn btn-md form-control btn-primary" value = "Update Category">
                </div>
            </form>
        </div>
        <div class="col-md-3"></div>
    </div> 
</div> 

<script>
    $('#category_image').change(function(){
        alert('Image selected');
    });
</script>
    
@endsection