@extends('layouts.admin.app')
@section('content')
<div class="mt-3">
    <div class="row">
        <div class="col-md-12 text-center mb-3">
            <!-- <h5>Business Categories</h5> -->
            <div class="row">
                <div class="col-md-10">
                    <h5>Manqabat Singles Videos</h5>
                </div>
                <div class="col-md-2">
                    <a href="{{ route('admin.manqabat-singles.create') }}" class = "btn btn-sm btn-outline-primary">Add New <i class = "fa fa-plus"></i></a>
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
                    <h6 class="m-0 font-weight-bold text-primary">Manqabat Singles Videos</h6>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Category</th>
                                    <th>Album</th> 
                                    <th>Title</th>
                                    <th>Description</th>
                                    <th>Preview</th>                                    
                                    <th>Lyrics</th>
                                    <th>Poet</th>  
                                    <th>Added at</th>                                              
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tfoot>
                                <tr>
                                    <th>ID</th>
                                    <th>Category</th>
                                    <th>Album</th> 
                                    <th>Title</th>
                                    <th>Description</th>
                                    <th>Preview</th>                                    
                                    <th>Lyrics</th>
                                    <th>Poet</th>  
                                    <th>Added at</th>                                              
                                    <th>Action</th>
                                </tr>
                            </tfoot>
                            <tbody>
                                @foreach($videos as $video)                            
                                    <tr>
                                        <td>{{ $video->id }}</td>
                                        <td>@if(!empty($video->video->category_id)){{ $video->video->category->category_name }}@endif</td>
                                        <td>@if(!empty($video->video->album_id)){{ $video->video->album->album_name }}@endif</td>
                                        <td>{{ $video->video->video_title }}</td>
                                        <td>{{ $video->video->video_description }}</td>
                                        <td>
                                            <img src="{{ asset($video->video->preview_url) }}" alt="Thumbnail Image" style = "width: 60px; height: 60px;">
                                        </td>                                       
                                        <td>
                                            <!-- Button trigger modal -->
                                            <button type="button" class="btn btn-sm btn-primary" data-toggle="modal" data-target="#exampleModalLong">
                                                <i class = "fa fa-eye"></i>
                                            </button>
                                    
                                            <div class="modal fade" id="exampleModalLong" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
                                                <div class="modal-dialog" role="document">
                                                    <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="exampleModalLongTitle">Lyrics</h5>
                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                        </button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <pre>
                                                            {{ $video->video->lyrics }}
                                                        </pre>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>                                                  
                                                    </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </td>
                                        <td>{{ $video->video->poet_name }}</td>
                                        <td>{{ $video->video->created_at }}</td>                                                                
                                        <td>                                            
                                            <form action="{{ route('admin.manqabat-singles.destroy', $video->id) }}" method = "POST">
                                                {{ csrf_field() }}
                                                {{ method_field('DELETE') }}
                                                <button type = "submit" name = "submit" onclick = "return confirm('Are you Sure to Delete?')" class = "btn btn-sm btn-primary">Remove</button>
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