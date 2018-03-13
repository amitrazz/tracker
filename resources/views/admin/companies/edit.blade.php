@extends('layouts.app')
@section('title', 'Edit Company Info')
@section('content')
@include('admin.includes.errors')
<div class="col-md-12">
    <!-- general form elements -->
    <div class="box box-primary">
      <div class="box-header with-border">
      <h3 class="box-title">updating : {{$company->name}} info</h3>
      </div>
      <!-- /.box-header -->
      <!-- form start -->
      <form method="POST" action="{{ route('company.update',['id' => $company->id]) }}">
        @csrf
          <div class="form-row">
            <div class="form-group col-md-6">
              <label for="inputEmail4">Name</label>
            <input type="text" name="name" value="{{$company->name}}" class="form-control" id="inputEmail4" placeholder="Company Name">
            </div>
            <div class="form-group col-md-6">
              <label for="inputAddress">Industry Segment</label>
              <input type="text" name="industry_sigment" value="{{$company->industry_sigment}}" class="form-control" id="inputAddress" placeholder="Industry Segment">
            </div>
          </div>
          <div class="form-group col-md-6">
            <label for="inputAddress">Address</label>
            <input type="text" name="address1" value="{{$company->address1}}" class="form-control" id="inputAddress" placeholder="1234 Main St">
          </div>
          <div class="form-group col-md-6">
            <label for="inputAddress2">Address 2</label>
            <input type="text" name="address2" value="{{$company->address2}}" class="form-control" id="inputAddress2" placeholder="Apartment, studio, or floor">
          </div>
          <div class="form-row">
            <div class="form-group col-md-3">
              <label for="inputCity">City</label>
              <input type="text" name="city" value="{{$company->city}}" class="form-control" id="inputCity">
            </div>
            <div class="form-group col-md-3">
              <label for="inputCity">State</label>
              <input type="text" name="state" value="{{$company->state}}" class="form-control" id="inputCity">
            </div>
            <div class="form-group col-md-3">
              <label for="inputCity">Country</label>
              <input type="text" name="country" value="{{$company->country}}" class="form-control" id="inputCity">
            </div>
            <div class="form-group col-md-3">
              <label for="inputZip">Zip</label>
              <input name="zipcode" value="{{$company->zipcode}}" type="text" class="form-control" id="inputZip">
            </div>
          </div>
          <div class="form-row">
            <div class="form-group col-md-3">
              <label for="inputState">Lead Source</label>
              <select name="lead_source" id="inputState" class="form-control">
                <option selected>{{$company->lead_source}}</option>
                <option>Email</option>
                <option>Zopim</option>
              </select>
            </div>
            <div class="form-group col-md-3">
              <label for="inputState">Connection</label>
              <select name="connection"  id="inputState" class="form-control">
                <option selected>{{$company->connection}}</option>
                <option>New</option>
                <option>Existing</option>
              </select>
            </div>
            <div class="form-group col-md-3">
              <label for="inputState">Order Frequnacy</label>
              <select name="order_frequancy" id="inputState" class="form-control">
                <option selected>{{$company->order_frequancy}}</option>
                <option>New</option>
                <option>Regular</option>
                <option>Weekly</option>
                <option>Monthly</option>
              </select>
            </div>
            <div class="form-group col-md-3">
              <label for="inputState">Average Order Value</label>
              <select name="avg_order_value" id="inputState" class="form-control">
                <option selected>{{$company->avg_order_value}}</option>
                <option>Less than Rs. 50k </option>
                <option>Rs. 1 Lac and above</option>
                <option>Rs. 3 Lac and above</option>
                <option>Rs. 5 Lac and above</option>
                <option>Rs. 10 Lac and above</option>
              </select>
            </div>
          </div>
          <div class="text-center">
            <button type="submit" class="btn btn-primary">Add Company</button>
          </div>
        </form>
        </div>
      </div>
@stop