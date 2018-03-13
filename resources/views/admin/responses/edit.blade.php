@extends('layouts.app')
@section('title', 'Add response Code')
@section('content')
@include('admin.includes.errors')
<div class="col col-lg-2"></div>
<div class="col col-lg-8">
        <div class="box box-info">
                <div class="box-header with-border">
                </div>
                <!-- /.box-header -->
                <!-- form start -->
                <form class="form-horizontal" method="POST" action="{{ route('response.update',['id'  =>  $response->id]) }}">
                        @csrf 
                  <div class="form-group">
                      <label for="inputEmail3" class="col-sm-2 control-label">Response name</label>
                      <div class="col-sm-8">
                      <input type="text" name="name" value="{{$response->name}}" id="inputState" class="form-control" placeholder="Response Name">
                      </div> 
                  </div>
                  <div class="form-group">
                    <label for="inputEmail3" class="col-sm-2 control-label">Response Code</label>
                    <div class="col-sm-8">
                      <input type="text" name="code" value="{{$response->code}}" id="inputState" class="form-control" placeholder="Response Code">
                    </div> 
                </div>
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Priority</label>
                  <div class="col-sm-8">
                    <input type="text" name="priority" value="{{$response->priority}}" id="inputState" class="form-control" placeholder="Please insert between 0 to 100">
                  </div> 
              </div>
                <!-- /.box-body -->
                <div class="box-footer text-center">
                  <button type="submit" class="btn btn-info">Add</button>
                </div>
                <!-- /.box-footer -->
              </form>
            </div>
</div>
@endsection
