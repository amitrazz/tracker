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
                <form class="form-horizontal" method="POST" action="{{ route('contact.update', ['id'  =>  $contact->id]) }}">
                        @csrf
                  <div class="box-body">
                    <div class="form-group">
                        <label for="inputEmail3" class="col-sm-2 control-label">Name</label>
            
                        <div class="col-sm-8">
                        <input type="text" name="name" value="{{$contact->name}}" class="form-control" id="inputEmail3" placeholder="Name">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="inputEmail3" class="col-sm-2 control-label">Designition</label>
          
                        <div class="col-sm-8">
                          <input type="text" name="designation" value="{{$contact->designation}}" class="form-control" id="inputEmail3" placeholder="Designition">
                        </div>
                    </div>
                    <div class="form-group">
                      <label for="inputEmail3" class="col-sm-2 control-label">Email</label>
        
                      <div class="col-sm-8">
                        <input type="email" name="email1" value="{{$contact->email1}}" class="form-control" id="inputEmail3" placeholder="Email">
                      </div>
                    </div>
                    <div class="form-group">
                        <label for="inputEmail3" class="col-sm-2 control-label">Email 2</label>
          
                        <div class="col-sm-8">
                          <input type="email" name="email2" value="{{$contact->email2}}" class="form-control" id="inputEmail3" placeholder="Email">
                        </div>
                    </div> 
                    <div class="form-group">
                        <label for="inputEmail3" class="col-sm-2 control-label">Phone</label>
          
                        <div class="col-sm-8">
                          <input type="text" name="phone1" value="{{$contact->phone1}}" class="form-control" id="inputEmail3" placeholder="Contact No">
                        </div>
                    </div> 
                    <div class="form-group">
                        <label for="inputEmail3" class="col-sm-2 control-label">Phone 2</label>
          
                        <div class="col-sm-8">
                          <input type="text" name="phone2" value="{{$contact->phone2}}" class="form-control" id="inputEmail3" placeholder="Contact No">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="inputEmail3" class="col-sm-2 control-label">Company Name</label>
          
                        <div class="col-sm-8">
                          <select name="company_id" class="form-control" id="inputEmail3">
                            @foreach ($companies as $company )
                  
                              <option value="{{ $company->id }}"
                                @if ($company->id == $contact->company_id)
                                                 Selected
                                @endif 
                                >{{$company->name}}</option>

                            
                            @endforeach
                            
                          </select>
                        </div>
                    </div> 
                      
                </div>
                <!-- /.box-body -->
                <div class="box-footer">
                  <button type="submit" class="btn btn-info text-center">Add Contact</button>
                </div>
                <!-- /.box-footer -->
              </form>
            </div>
</div>
@endsection
