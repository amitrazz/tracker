@extends('layouts.app')
@section('title', 'Assign Company')
@section('content')
@include('admin.includes.errors')
<div class="col col-lg-2"></div>
<div class="col col-lg-8">
        <div class="box box-info">
                <div class="box-header with-border">
                  <h3 class="box-title">Assign company to caller</h3>
                </div>
                <!-- /.box-header -->
                <!-- form start -->
                <form class="form-horizontal" method="POST" action="{{ route('process.store') }}" enctype="multipart/form-data">
                        @csrf
                  <div class="form-group">
                      <label for="inputEmail3" class="col-sm-2 control-label">Caller Name</label>
        
                      <div class="col-sm-8">
                        <select name="user_id" class="form-control" id="inputEmail3">
                          @foreach ($users as $user )
                              <option value="{{ $user->id }}">{{$user->user_name}}</option>
                          
                          @endforeach
                  
                        </select>
                      </div>
                  </div>  
                  <div class="form-group">
                      <label for="inputEmail3" class="col-sm-2 control-label">Priority</label>
                      <div class="col-sm-8">
                        <input type="text" name="priority" id="inputState" class="form-control" placeholder="Please insert between 0 to 100">
                      </div> 
                  </div>
                  <div class="form-group">
                      <label for="inputEmail3" class="col-sm-2 control-label">Status</label>
                      <div class="col-sm-8">
                        <select name="status" id="inputState" class="form-control">
                          <option selected>Open</option>
                          <option>Close</option>
                          <option>Edit</option>
                        </select>
                      </div> 
                  </div>
                  <div class="form-group">
                      <label for="inputEmail3" class="col-sm-2 control-label">File</label>
                      <div class="col-sm-8">
                          <input type="file" name="upload-file" class="form-control-file" id="exampleInputFile" aria-describedby="fileHelp">
                      </div> 
                  </div>

                <!-- /.box-body -->
                <div class="box-footer">
                  <button type="submit" class="btn btn-info text-center">Assign</button>
                </div>
                <!-- /.box-footer -->
              </form>
            </div>
</div>
@endsection
