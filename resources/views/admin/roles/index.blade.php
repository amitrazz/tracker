@extends('layouts.app')
@section('title', 'Role')
@section('content')
<div class="row">
  <div class="col-xs-12">
    <div class="box">
      <div class="box-header">
        <h3 class="box-title">Mange User roles!</h3>
      <a href="{{route('role.create')}}"  class="btn btn-primary pull-right">Add role</a>
      </div>
<div class="box-body table-responsive no-padding">
  <table class="table table-hover">
    <tr>
      <th>Name</th>
      <th>Display name</th>
      <th>Description</th>
    </tr>
@foreach ($roles as $role )
    <tr>
    <td>{{$role->name}}</td>
    <td>{{$role->display_name}}</td>
    <td>{{$role->description}}</td>
    <td>
    <!--  <a href="{{route('role.edit',['id'=>$role->id])}}" class="btn btn-primary">Edit</a>
          <a href="{{route('role.delete',['id'=>$role->id])}}" class="btn btn-danger">Delete</a>  -->
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