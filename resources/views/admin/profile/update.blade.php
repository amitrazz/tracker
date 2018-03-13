@extends('layouts.app')
@section('title', 'Profile update')
@section('content')
@include('admin.includes.errors')
<div class="col col-lg-1"></div>
<div class="col col-lg-10">
        <div class="box box-info">
                <div class="box-header with-border">
                  <h3 class="box-title">Profile Update</h3>
                </div>
                <!-- /.box-header -->
                <!-- form start -->
                <form class="form-horizontal" method="POST" action="{{ route('profile.update') }}">
                        @csrf
                  <div class="box-body">
                      
                    <div class="form-group">
                        <label for="inputEmail3" class="col-sm-2 control-label">Name</label>
            
                        <div class="col-sm-8">
                            <input type="text" name="user_name" value="{{$user->user_name}}" class="form-control" id="inputEmail3" >
                        </div>
                    </div>
                    <div class="form-group">
                      <label for="inputEmail3" class="col-sm-2 control-label">Email</label>
        
                      <div class="col-sm-8">
                        <input type="email" name="email" value="{{$user->email}}" class="form-control" id="inputEmail3" >
                      </div>
                    </div>
                    <div class="form-group">
                      <label for="inputPassword3" class="col-sm-2 control-label">Password</label>
        
                      <div class="col-sm-8">
                        <input type="password" name="password" value="{{$user->password}}" class="form-control" id="inputPassword3">
                      </div>
                    </div>
                    
                  <div class="form-group">
                    <label for="inputEmail3" class="col-sm-2 control-label">Email password</label>
        
                    <div class="col-sm-8">
                        <input type="password" name="email_password" value="{{$user->email_password}}" class="form-control" id="inputEmail3">
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputEmail3" class="col-sm-2 control-label">Designation</label>
        
                    <div class="col-sm-8">
                        <input type="text" name="degination" value="{{$user->degination}}" class="form-control" id="inputEmail3" >
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputEmail3" class="col-sm-2 control-label">Eduction</label>
        
                    <div class="col-sm-8">
                        <input type="text" name="eduction" value="{{$user->profile->eduction}}" class="form-control" id="inputEmail3" >
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputEmail3" class="col-sm-2 control-label">Location</label>
        
                    <div class="col-sm-8">
                        <input type="text" name="location" value="{{$user->profile->location}}" class="form-control" id="inputEmail3">
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputEmail3" class="col-sm-2 control-label">Skills</label>
        
                    <div class="col-sm-8">
                        <input type="text" name="skills" value="{{$user->profile->skills}}" class="form-control" id="inputEmail3" >
                    </div>
                </div>
                
                <div class="form-group">
                    <label for="inputEmail3" class="col-sm-2 control-label">Facebok Url</label>
        
                    <div class="col-sm-8">
                        <input type="text" name="facebook_url" value="{{$user->profile->facebook_url}}" class="form-control" id="inputEmail3" >
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputEmail3" class="col-sm-2 control-label">likedin Url</label>
        
                    <div class="col-sm-8">
                        <input type="text" name="linkedin_url" value="{{$user->profile->linkedin_url}}" class="form-control" id="inputEmail3" >
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputEmail3" class="col-sm-2 control-label">Twitter Url</label>
        
                    <div class="col-sm-8">
                        <input type="text" name="twitter_url" value="{{$user->profile->twitter_url}}" class="form-control" id="inputEmail3" >
                    </div>
                </div>
                <div class="form-group">
                        <label for="inputEmail3" class="col-sm-2 control-label">About Me</label>
            
                        <div class="col-sm-8">
                            <textarea name="about" rows="6" cols="70" class="form-control" id="inputEmail3">{{$user->profile->about}}   </textarea>  
                        </div>
                    </div>
                <div class="form-group"> 
                <div class="col-sm-4">
                    </div><div class="col-sm-4">
                            <img class="profile-user-img img-responsive img-circle" src="{{asset($user->profile->profile_pic)}}" alt="User profile picture">
                            <input type="file" name="profile_pic" class="form-control" id="usr">
                        </div>
                 </div>
                </div>
                <!-- /.box-body -->
                <div class="box-footer">
                  <a href="{{route('profile.update')}}" class="btn btn-default">Cancel</a>
                  <button type="submit" class="btn btn-info pull-right">Register</button>
                </div>
                <!-- /.box-footer -->
              </form>
            </div>
</div>
@endsection
