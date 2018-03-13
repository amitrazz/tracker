@extends('layouts.app')
@section('title', 'Companies Directory Listings')
@section('content')
<div class="row">
  <div class="col-xs-12">
    <div class="box">
      <div class="box-header">
        <h3 class="box-title">Find All Companies Here!</h3>

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
      <th>Company Name</th>
      <th>Avg Order</th>
      <th>address</th>
      <th>city</th>
      <th>industry Sigment</th>
      <th>Contact Person</th>
      <th>Action</th>
    </tr>
    @if($companies->count() > 0)
        @foreach ($companies as $company )
        <tr>
        <td>{{$company->name}}</td>
        <td>{{$company->avg_order_value}}</td>
        <td>{{$company->address1}}</td>
        <td>{{$company->city}}</td>
        <td>{{$company->industry_sigment}}</td>
        <td>Contact Person</td>
        <td>
          <a href="{{route('company.edit',['id'  =>  $company->id])}}" class="btn btn-info">Edit</a> <span> </span> 
          <a href="{{route('company.delete',['id'  =>  $company->id])}}" class="btn btn-danger">Delete</a>
        </td>
        </tr>
        @endforeach
    @else
    <tr>
      <th class="text-center"> There is no Company for view!</th>
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