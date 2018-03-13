@extends('layouts.app')
@section('title', 'Contact Perosn directory')
@section('content')
<div class="row">
  <div class="col-xs-12">
    <div class="box">
      <div class="box-header">
        <h3 class="box-title">Find All Contacts Here!</h3>

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
      <th>Name</th>
      <th>Company Name</th>
      <th>Destination</th>
      <th>Email</th>
      <th>Contact No</th>
      <th>Action</th>
    </tr>
    @if($contacts->count() > 0)
        @foreach ($contacts as $contact )
        <tr>
        <td>{{$contact->name}}</td>
        <td>{{$contact->company->name}}</td>
        <td>{{$contact->designation}}</td>
        <td>{{$contact->email1}}
          <br>
           {{$contact->email2}}</td>
        <td>
          {{$contact->phone1}}<br>
          {{$contact->phone1}}
        </td>
        <td>
          <a href="{{route('contact.edit',['id'  =>  $contact->id])}}" class="btn btn-info">Edit</a> <span> </span> 
        <a href="{{route('contact.delete',['id'  =>  $contact->id])}}" class="btn btn-danger">Delete</a>
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