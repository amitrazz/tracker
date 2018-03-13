@extends('layouts.app')
@section('title', 'Update user')
@section('content')
@include('admin.includes.errors')
<div class="col col-lg-2"></div>
<div class="col col-lg-8">
        <div class="box box-info">
                <div class="box-header with-border">
                <h3 class="box-title">Updating : {{$user->user_name}}</h3>
                </div>
                <!-- /.box-header -->
                <!-- form start -->
                <form class="form-horizontal" method="POST" action="{{ route('user.update',['id'=>$user->id]) }}">
                        @csrf
                  <div class="box-body">
                    <div class="form-group">
                        <label for="inputEmail3" class="col-sm-2 control-label">Name</label>
            
                        <div class="col-sm-8">
                        <input type="text" name="user_name" value="{{$user->user_name}}" class="form-control" id="inputEmail3" placeholder="Name" >
                        </div>
                    </div>
                    <div class="form-group">
                      <label for="inputEmail3" class="col-sm-2 control-label">Email</label>
        
                      <div class="col-sm-8">
                      <input type="email"  value="{{$user->email}}" class="form-control" id="inputEmail3" placeholder="Email" disabled>
                      </div>
                    </div>
                    <div class="form-group">
                      <label for="inputEmail3" class="col-sm-2 control-label">Designation</label>
          
                      <div class="col-sm-8">
                      <input type="text" name="degination" value="{{$user->degination}}" class="form-control" id="inputEmail3" placeholder="Degination">
                      </div>
                  </div>
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Active</label>
      
                  <div class="col-sm-8">
                    <select name="is_active" id="inputState" class="form-control">
                      <option selected>Yes</option>
                      <option>No</option>
                    </select>
                  </div>
                </div>
                </div>
                <!-- /.box-body -->
                <div class="box-footer">
                  <button type="submit" class="btn btn-info pull-right">update</button>
                </div>
                <!-- /.box-footer -->
              </form>
            </div>
</div>
@endsection
