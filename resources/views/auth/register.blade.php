@extends('layouts.app')
@section('title', 'Add New users')
@section('content')
<div class="col col-lg-2"></div>
<div class="col col-lg-8">
        <div class="box box-info">
                <div class="box-header with-border">
                  <h3 class="box-title">Please Fill form to Add New User</h3>
                </div>
                <!-- /.box-header -->
                <!-- form start -->
                <form class="form-horizontal" method="POST" action="{{ route('register') }}">
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
                      <label for="inputPassword3" class="col-sm-2 control-label">Password</label>
        
                      <div class="col-sm-8">
                        <input type="password" name="password" class="form-control" id="inputPassword3" placeholder="Password">
                      </div>
                    </div>
                    <div class="form-group">
                        <label for="inputPassword3" class="col-sm-2 control-label"> Confirm Password</label>
            
                        <div class="col-sm-8">
                            <input type="password" name="password_confirmation" class="form-control" id="inputPassword3" placeholder=" Confirm Password">
                        </div>
                    </div>
                    <div class="form-group">
                      <label for="inputEmail3" class="col-sm-2 control-label">Designation</label>
          
                      <div class="col-sm-8">
                          <input type="text" name="degination" class="form-control" id="inputEmail3" placeholder="Degination">
                      </div>
                  </div>
                  <div class="form-group">
                    <label for="inputEmail3" class="col-sm-2 control-label">Email password</label>
        
                    <div class="col-sm-8">
                        <input type="text" name="email_password" class="form-control" id="inputEmail3" placeholder="Email Password">
                    </div>
                </div>
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Role</label>
      
                  <div class="col-sm-8">
                      <input type="text" name="role_id" class="form-control" id="inputEmail3" placeholder="Role">
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Active</label>
      
                  <div class="col-sm-8">
                      <input type="text" name="is_active" class="form-control" id="inputEmail3" placeholder="Status">
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
