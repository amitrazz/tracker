@extends('layouts.app')
@section('title', 'Profile')
@section('content')
        <div class="col-md-6">
            <!-- Profile Image -->
              <div class="box box-primary">
                <div class="box-body box-profile">
                  <img class="profile-user-img img-responsive img-circle" src="{{$user->profile->profile_pic}}" alt="User profile picture">
            
                  <h3 class="profile-username text-center">{{$user->user_name}}</h3>
            
                  <p class="text-muted text-center">{{$user->degination}}</p>
                  <p class="text-muted text-center">{{$user->role_id}}</p>
                  <p class="text-muted text-center"><a href="{{route('profile.edit')}}" class="btn btn-primary">Edit</a></p>
                  <ul class="list-group list-group-unbordered">
                    <li class="list-group-item">
                      <b>Facebook</b> <a class="pull-right" href="{{$user->profile->facebook_url}}">{{$user->profile->facebook_url}}</a>
                    </li>
                    <li class="list-group-item">
                      <b>Twitter</b> <a class="pull-right" href="{{$user->profile->twitter_url}}">{{$user->profile->twitter_url}}</a>
                    </li>
                    <li class="list-group-item">
                      <b>LinkedIn</b> <a class="pull-right" href="{{$user->profile->linkedin_url}}">{{$user->profile->linkedin_url}}</a>
                    </li>
                  </ul>
                </div>
                <!-- /.box-body -->
              </div>
              <!-- /.box -->
            </div>
            <div class="col-md-6">
              <!-- About Me Box -->
              <div class="box box-primary">
                <div class="box-header with-border">
                  <h3 class="box-title">More Info</h3>
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                  <strong><i class="fa fa-book margin-r-5"></i> Education</strong>
            
                  <p class="text-muted">
                      {{$user->profile->eduction}}
                  </p>
            
                  <hr>
            
                  <strong><i class="fa fa-map-marker margin-r-5"></i> Location</strong>
            
                  <p class="text-muted">{{$user->profile->location}}</p>
            
                  <hr>
            
                  <strong><i class="fa fa-pencil margin-r-5"></i> Skills</strong>
            
                  <p>
                    <span class="label label-info">{{$user->profile->skills}}</span>
                  </p>
            
                  <hr>
            
                  <strong><i class="fa fa-file-text-o margin-r-5"></i> About Me</strong>
            
                  <p>{{$user->profile->about}}</p>
                </div>
                <!-- /.box-body -->
              </div>
              <!-- /.box -->
            </div>
            </div>

  
@stop