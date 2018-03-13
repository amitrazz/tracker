@extends('layouts.app')
@section('title', 'Add New Contact Person')
@section('content')
@include('admin.includes.errors')
<div class="col col-lg-2"></div>
<div class="col col-lg-8">
        <div class="box box-info">
                <div class="box-header with-border">
                  <h3 class="box-title">Please Fill form to Add New Contact</h3>
                </div>
                <!-- /.box-header -->
                <!-- form start -->
                <form class="form-horizontal" method="POST" action="{{ route('contact.store') }}">
                        @csrf
                  <div class="box-body">
                      <div class="form-group">
                          <label for="inputEmail3" class="col-sm-2 control-label">Company Name</label>
            
                          <div class="col-sm-8">
                            <select name="company_id" class="form-control" id="inputEmail3">
                              @foreach ($companies as $company )
                                <option value="{{ $company->id }}">{{$company->name}}</option>
                              @endforeach
                              
                            </select>
                          </div>
                      </div> 
                    <div class="form-group">
                        <label for="inputEmail3" class="col-sm-2 control-label">Name</label>
            
                        <div class="col-sm-8">
                            <input type="text" name="name" class="form-control" id="inputEmail3" placeholder="Name">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="inputEmail3" class="col-sm-2 control-label">Designition</label>
          
                        <div class="col-sm-8">
                          <input type="text" name="designation" class="form-control" id="inputEmail3" placeholder="Designition">
                        </div>
                    </div>
                    <div class="form-group">
                      <label for="inputEmail3" class="col-sm-2 control-label">Email</label>
        
                      <div class="col-sm-8">
                        <input type="email" name="email1" class="form-control" id="inputEmail3" placeholder="Email">
                      </div>
                    </div>
                    <div class="form-group">
                        <label for="inputEmail3" class="col-sm-2 control-label">Email 2</label>
          
                        <div class="col-sm-8">
                          <input type="email" name="email2" class="form-control" id="inputEmail3" placeholder="Email">
                        </div>
                    </div> 
                    <div class="form-group">
                        <label for="inputEmail3" class="col-sm-2 control-label">Phone</label>
          
                        <div class="col-sm-8">
                          <input type="text" name="phone1" class="form-control" id="inputEmail3" placeholder="Contact No">
                        </div>
                    </div> 
                    <div class="form-group">
                        <label for="inputEmail3" class="col-sm-2 control-label">Phone 2</label>
          
                        <div class="col-sm-8">
                          <input type="text" name="phone2" class="form-control" id="inputEmail3" placeholder="Contact No">
                        </div>
                    </div>
                    
                      
                </div>
                <!-- /.box-body -->
                <div class="box-footer">
                  <a href="{{route('contact.create')}}" class="btn btn-default">Cancel</a>
                  <button type="submit" class="btn btn-info pull-right">Register</button>
                </div>
                <!-- /.box-footer -->
              </form>
            </div>
</div>
@endsection
