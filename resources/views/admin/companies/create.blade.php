@extends('layouts.app')
@section('title', 'Company Listing')
@section('content')
@include('admin.includes.errors')
<div class="col-md-12">
    <!-- general form elements -->
    <div class="box box-primary">
      <div class="box-header with-border">
        <h3 class="box-title">Add A new Company</h3>
      </div>
      <!-- /.box-header -->
      <!-- form start -->
      <form method="POST" action="{{ route('company.store') }}">
        @csrf
          <div class="form-row">
            <div class="form-group col-md-6">
              <label for="inputEmail4">Name</label>
              <input type="text" name="name" class="form-control" id="inputEmail4" placeholder="Company Name">
            </div>
            <div class="form-group col-md-6">
              <label for="inputAddress">Industry Segment</label>
              <input type="text" name="industry_sigment" class="form-control" id="inputAddress" placeholder="Industry Segment">
            </div>
          </div>
          <div class="form-group col-md-6">
            <label for="inputAddress">Address</label>
            <input type="text" name="address1" class="form-control" id="inputAddress" placeholder="1234 Main St">
          </div>
          <div class="form-group col-md-6">
            <label for="inputAddress2">Address 2</label>
            <input type="text" name="address2" class="form-control" id="inputAddress2" placeholder="Apartment, studio, or floor">
          </div>
          <div class="form-row">
            <div class="form-group col-md-3">
              <label for="inputCity">City</label>
              <input type="text" name="city" class="form-control" id="inputCity">
            </div>
            <div class="form-group col-md-3">
              <label for="inputCity">State</label>
              <input type="text" name="state" class="form-control" id="inputCity">
            </div>
            <div class="form-group col-md-3">
              <label for="inputCity">Country</label>
              <input type="text" name="country" class="form-control" id="inputCity">
            </div>
            <div class="form-group col-md-3">
              <label for="inputZip">Zip</label>
              <input name="zipcode" type="text" class="form-control" id="inputZip">
            </div>
          </div>
          <div class="form-row">
            <div class="form-group col-md-3">
              <label for="inputState">Lead Source</label>
              <select name="lead_source" id="inputState" class="form-control">
                <option selected>Choose</option>
                <option>Email</option>
                <option>Zopim</option>
              </select>
            </div>
            <div class="form-group col-md-3">
              <label for="inputState">Connection</label>
              <select name="connection" id="inputState" class="form-control">
                <option selected>Choose...</option>
                <option>New</option>
                <option>Existing</option>
              </select>
            </div>
            <div class="form-group col-md-3">
              <label for="inputState">Order Frequnacy</label>
              <select name="order_frequancy" id="inputState" class="form-control">
                <option selected>Choose...</option>
                <option>New</option>
                <option>Regular</option>
                <option>Weekly</option>
                <option>Monthly</option>
              </select>
            </div>
            <div class="form-group col-md-3">
              <label for="inputState">Average Order Value</label>
              <select name="avg_order_value" id="inputState" class="form-control">
                <option selected>Choose...</option>
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