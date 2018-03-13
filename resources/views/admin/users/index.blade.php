@extends('layouts.app')
@section('title', 'User List')
@section('content')
<div class="row">
  <div class="col-xs-12">
    <div class="box">
      <div class="box-header">
        <h3 class="box-title">Find All user Here!</h3>

        <div class="box-tools">
          <div class="input-group input-group-sm" style="width: 150px;">
            <input type="text" name="table_search" class="form-control pull-right" placeholder="Search">

            <div class="input-group-btn">
              <button type="submit" class="btn btn-default"><i class="fa fa-search"></i></button>
            </div>
          </div>
        </div>
      </div>
<div class="box-body table-responsive no-padding">
  <table class="table table-hover">
    <tr>
      <th>User Name</th>
      <th>Image</th>
      <th>Degination</th>
      <th>Active</th>
      <th>Action</th>
    </tr>
    @foreach ($users as $user )
    <tr>
    <td>{{$user->user_name}}</td>
      <td><img src="{{asset($user->profile->profile_pic)}}" width="80px" height="80px" class="img-circle"></td>
      <td>{{$user->degination}}</td> 
      <td>{{$user->is_active}}</td>
    <td><a href="{{route('user.edit',['id'=> $user->id ])}}" class="btn btn-info">Edit</a>
          <a href="{{route('user.delete',['id'=> $user->id])}}" class="btn btn-danger">Delete</a>
      </td>
    </tr>
    @endforeach
    
  </table>
</div>
<!-- /.box-body -->
 <!-- /.box-body -->
</div>
<!-- /.box -->
</div>
</div>
@endsection