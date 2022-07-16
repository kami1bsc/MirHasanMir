@extends('layouts.admin.app')
@section('content')
<br>
    <div class="">
        <div class="row">
            <div class="col-md-12 text-center">
                <h5>Edit Profile</h5>
            </div>
        </div>        
    </div>
    <div class="mt-2">
        <div class="row">
            <div class="col-md-12 text-left">
                <!-- <h5>Recent Registered Users</h5> -->
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
            <div class="col-md-4"></div>
            <div class="col-md-4">
                <form action="{{ route('admin.update_profile') }}" method = "POST">
                    {{ csrf_field() }}
                    <div class="form-group">
                        <label for="">Email</label>
                        <input type="email" name = "email" class = "form-control" placeholder = "Enter Email to Edit">
                    </div> 
                    <div class="form-group">
                        <label for="">Current Password</label>
                        <input type="password" name = "current_password" class = "form-control" placeholder = "Enter Current Password">
                    </div>        
                    <div class="form-group">
                        <label for="">New Password</label>
                        <input type="password" name = "new_password" class = "form-control" placeholder = "Enter New Password">
                    </div>
                    <div class="form-group">
                        <label for="">Confirm New Password</label>
                        <input type="password" name = "confirm_new_password" class = "form-control" placeholder = "Confirm New Password">
                    </div>
                    <div class="form-group">
                        <input type="submit" name = "submit" class = "btn btn-sm btn-primary form-control" value = "Update">
                    </div>
                </form>
            </div>
            <div class="col-md-4"></div>
        </div> 
    </div> 
@endsection