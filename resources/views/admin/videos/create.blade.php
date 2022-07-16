@extends('layouts.admin.app')
@section('content')

<div class="mt-3">
    <div class="row">
        <div class="col-md-12 text-center">
            <h5>Add Video</h5>
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
            <form action="{{ route('admin.videos.store') }}" method = "POST" enctype="multipart/form-data">
                {{ csrf_field() }}            
                <div class="form-group">
                    <label for="">Category</label>
                    <select name="category_id" id="" class = 'form-control'>
                        <option value="">Choose Category</option>
                        @foreach($categories as $category)
                            <option value="{{ $category->id }}">{{ $category->category_name }}</option>
                        @endforeach
                    </select>
                </div> 
                <div class="form-group">
                    <label for="">Albums</label>
                    <select name="album_id" id="" class = 'form-control'>
                        <option value="">Choose Album</option>
                        @foreach($albums as $album)
                            <option value="{{ $album->id }}">{{ $album->album_name }}</option>
                        @endforeach
                    </select>
                </div> 
                <div class="form-group">
                    <label for="">Video Title</label>
                    <input type="text" name = "video_title" placeholder = "Video Title" class = "form-control" >
                </div>
                <div class="form-group">
                    <label for="">Video Description</label>
                    <textarea cols = "10" rows = "10" name = "video_description" class = "form-control" >Video Description</textarea>
                </div>   
                <div class="form-group">
                    <label for="">Preview Image</label>
                    <input type="file" name = "preview_url" placeholder = "Preview Image" class = "form-control" >
                </div>  
                <div class="form-group">
                    <label for="">Youtube URL</label>
                    <input type="text" name = "youtube_url" placeholder = "Youtube URL" class = "form-control" >
                </div>
                <div class="form-group">
                    <label for="">Spotify URL</label>
                    <input type="text" name = "spotify_url" placeholder = "Spotify URL" class = "form-control" >
                </div>
                <div class="form-group">
                    <label for="">Apple Music URL</label>
                    <input type="text" name = "apple_music_url" placeholder = "Apple Music URL" class = "form-control" >
                </div>
                <div class="form-group">
                    <label for="">Amazon Music URL</label>
                    <input type="text" name = "amazon_music_url" placeholder = "Amazon Music URL" class = "form-control" >
                </div> 
                <div class="form-group">
                    <label for="">Lyrics</label>
                    <textarea cols = "10" rows = "20" name = "lyrics" class = "form-control" >Lyrics</textarea>
                </div>   
                <div class="form-group">
                    <label for="">Poet Name</label>
                    <input type="text" name = "poet_name" placeholder = "Poet Name" class = "form-control" >
                </div>             
                <div class="form-group text-center mt-3">
                    <input type="submit" name = "submit" class = "btn btn-md form-control btn-primary" value = "Add Video">
                </div>
            </form>
        </div>
        <div class="col-md-3"></div>
    </div> 
</div> 
   
@endsection