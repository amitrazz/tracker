@extends('layouts.app')
@section('title', 'Add New users')
@section('content')
@include('admin.includes.errors')
<div class="col col-lg-2"></div>
<div class="col col-lg-8">
        <div class="box box-info">
                <div class="box-header with-border">
                  <h3 class="box-title">Default login passwor and Email password "password"</h3>
                </div>
                <!-- /.box-header -->
                <!-- form start -->
                <form class="form-horizontal" method="POST" action="{{ route('user.store') }}">
                        @csrf
                  <div class="box-body">
                    <div class="form-group">
                        <label for="inputEmail3" class="col-sm-2 control-label">Name</label>
            
                        <div class="col-sm-8">
                            <input type="text" name="user_name" class="form-control" id="inputEmail3" placeholder="Name">
                        </div>
                    </div>
                    <div class="form-group">
                      <label for="inputEmail3" class="col-sm-2 control-label">Email</label>
        
                      <div class="col-sm-8">
                        <input type="email" name="email" class="form-control" id="inputEmail3" placeholder="Email">
                      </div>
                    </div>
                    <div class="form-group">
                      <label for="inputEmail3" class="col-sm-2 control-label">Designation</label>
          
                      <div class="col-sm-8">
                          <input type="text" name="degination" class="form-control" id="inputEmail3" placeholder="Degination">
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
                  <a href="{{route('register')}}" class="btn btn-default">Cancel</a>
                  <button type="submit" class="btn btn-info pull-right">Register</button>
                </div>
                <!-- /.box-footer -->
              </form>
            </div>
</div>
@endsection
