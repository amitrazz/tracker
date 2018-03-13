@extends('layouts.app')
@section('title', 'Responses')
@section('content')
<div class="row">
  <div class="col-xs-12">
    <div class="box">
      <div class="box-header">
        <a href="{{route('response.create')}}" class="btn btn-primary pull-right">Add Response</a>
    </div>
<div class="box-body table-responsive no-padding">
  <table class="table table-hover">
    <tr>
      <th>Response Name</th>
      <th>Response Code</th>
      <th>Priority</th>
      <th>Action</th>
    </tr>
    @if($responses->count() > 0)
        @foreach ($responses as $response )
        <tr>
        <td>{{$response->name}}</td>
        <td>{{$response->code}}</td>
        <td>{{$response->priority}}</td>
        <td>
        <a href="{{route('response.edit',['id' => $response->id])}}" class="btn btn-info">Edit</a> <span> </span> 
          <a href="{{route('response.delete',['id' => $response->id])}}" class="btn btn-danger">Delete</a>
        </td>
        </tr>
        @endforeach
    @else
    <tr>
      <th class="text-center"> There is no Response.</th>
    </tr>
    @endif
    
  </table>
</div>
<!-- /.box-body -->
 <!-- /.box-body -->
</div>
<!-- /.box -->
</div>
</div>
@endsection