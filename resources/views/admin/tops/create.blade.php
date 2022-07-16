@extends('layouts.admin.app')
@section('content')

<div class="mt-3">
    <div class="row">
        <div class="col-md-12 text-center">
            <h5>Add Top Section Video</h5>
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
            <form action="{{ route('admin.top-section.store') }}" method = "POST" enctype="multipart/form-data">
                {{ csrf_field() }}            
                <div class="form-group">
                    <label for="">Choose Video</label>
                    <select name="video_id" id="" class = 'form-control'>                        
                        @if($videos->count() > 0)                      
                            @foreach($videos as $video)
                                <option value="{{ $video->id }}">{{ $video->video_title }}</option>
                            @endforeach
                        @else
                            <option value="">No Video Title Found, Add More Videos</option>
                        @endif
                    </select>
                </div> 
                <br>        
                <div class="form-group text-center mt-3">
                    <input type="submit" name = "submit" class = "btn btn-md form-control btn-primary" value = "Add Video">
                </div>
            </form>
        </div>
        <div class="col-md-3"></div>
    </div> 
</div> 
   
@endsection