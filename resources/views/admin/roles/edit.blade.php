@extends('layouts.app')
@section('title', 'roles')
@section('content')
@include('admin.includes.errors')
<div class="col col-lg-2"></div>
<div class="col col-lg-8">
        <div class="box box-info">
                <div class="box-header with-border">
                <h3 class="box-title">updating role : {{$role->name}}</h3>
                </div>
                <!-- /.box-header -->
                <!-- form start -->
                <form class="form-horizontal" method="POST" action="{{ route('role.update',['id'=>$role->id]) }}">
                    
                        @csrf
                  <div class="box-body">
                    <div class="form-group">
                        <label for="inputEmail3" class="col-sm-2 control-label">Name</label>
            
                        <div class="col-sm-8">
                            <input type="text" name="name" value="{{$role->name}}" class="form-control" id="inputEmail3" placeholder=" Roles Name">
                        </div>
                    </div>
                    <div class="form-group">
                      <label for="inputEmail3" class="col-sm-2 control-label">Display name</label>
        
                      <div class="col-sm-8">
                        <input type="text" name="display_name" value="{{$role->display_name}}" class="form-control" id="inputEmail3" placeholder="Display name">
                      </div>
                    </div>
                    <div class="form-group">
                      <label for="inputEmail3" class="col-sm-2 control-label">Description</label>
          
                      <div class="col-sm-8">
                          <input type="text" name="description" value="{{$role->description}}" class="form-control" id="inputEmail3" placeholder="Description">
                      </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-2 control-label">permission</label>
                    <div class="col-sm-8">
                      @foreach ($permissions as $permission )
                       <label><input type="checkbox" {{in_array($permission->id,$role_permission)?"checked":""}}  name="permission[ ]" value="{{$permission->id}}"> {{$permission->name}}<span></span></label>
                      @endforeach
                    </div>
                  </div>
                <!-- /.box-body -->
                <div class="box-footer">
                  <div class="text-center">
                  <button type="submit" class="btn btn-info text-center">update</button>
                  </div>
                </div>
                <!-- /.box-footer -->
              </form>
            </div>
</div>
@endsection
