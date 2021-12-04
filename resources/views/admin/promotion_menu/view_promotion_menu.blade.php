@extends('layouts.adminLayout.admin_design')
@section('content')

<div id="content">
<div id="content-header">
<div id="breadcrumb"> <a href="#" title="Go to Promotion" class="tip-bottom"><i class="icon-promotion"></i> Promotion</a>
<a href="#">Promotion Menu</a> <a href="#" class="current">View Promotion Menu</a> </div>
<h1>Promotion Menu</h1>
@if(Session::has('flash_message_error'))
<div class="alert alert-error alert-block">
<button type="button" class="close" data-dismiss="alert" aria-label="Close">
      <span aria-hidden="true">&times;</span>
</button>
<strong>{{ session('flash_message_error') }}</strong>
</div>
@endif
@if(Session::has('flash_message_success'))
<div class="alert alert-success alert-block">
<button type="button" class="close" data-dismiss="alert" aria-label="Close">
      <span aria-hidden="true">&times;</span>
</button>
<strong>{{ session('flash_message_success') }}</strong>
</div>
@endif
</div>
<div class="container-fluid">
<hr>
<div class="row-fluid">
<div class="span12">
<div class="widget-box">
<div class="widget-title"> <span class="icon"><i class="icon-th"></i></span>
<h5>View Promotion Menu</h5>
</div>
<div class="widget-content nopadding">
<table class="table table-bordered data-table">
  <thead>
    <tr>
      <th>Sr No.</th>
      <th>Name</th>
      <th>Descriptions</th>
      <th>Actions</th>
    </tr>
  </thead>
  <tbody>
  @foreach($promotionmenu as $key=>$newbanner)
      <tr class="gradeX">
      <td>{{ $key+1 }}</td>
      <td>{{ $newbanner->name }}</td>
      <td>{{ strip_tags($newbanner->description) }}</td>
      
    <td>
      <a href="{{url('/admin/edit-promotion-menu/'.$newbanner->id)}}" class="btn btn-primary btn-mini" title="Edit Banner">Edit</a>
      
    <a href="delete-promotion-menu/{{$newbanner->id}}" onclick="return confirm('Are you sure you want to delete?');" class="btn btn-danger btn-mini " title="Delete Promotion Menu">Delete</a></div></td>              
  </tr> 
  @endforeach
  </tbody>
</table>
</div>
</div>
</div>
</div>
</div>
</div>
@endsection
