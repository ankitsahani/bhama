@extends('layouts.adminLayout.admin_design')
@section('content')

<div id="content">
<div id="content-header">
<div id="breadcrumb"> <a href="index.html" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a>
<a href="#">Home Menu</a> <a href="#" class="current">View Home Menu</a> </div>
<h1>Home Menu</h1>
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
<h5>View Home Menu</h5>
</div>
<div class="widget-content nopadding">
<table class="table table-bordered data-table">
  <thead>
    <tr>
      <th>Sr No.</th>
      <th>Image</th>
      <th>Postion</th>
      <th>Link</th>
      <th>Actions</th>
    </tr>
  </thead>
  <tbody>
  @foreach($homemenu as $key=>$newbanner)
      <tr class="gradeX">
      <td>{{ $key+1 }}</td>
      <td>
         
      <img src="{{asset('/images/backend_img/homemenu/large/'.$newbanner->image)}}"
      style="width:60px;">
      </td>
      <td>{{ $newbanner->menu_position }}</td>
      <td>{{ $newbanner->link }}</td>
      
    <td>
      <a href="{{url('/admin/edit-home-menu/'.$newbanner->id)}}" class="btn btn-primary btn-mini" title="Edit Banner">Edit</a>
      
    <a  rel="delete-home-menu/{{$newbanner->id}}" rel1="delete-home-menu"
      href="javascript:" class="btn btn-danger btn-mini deleteRecord" title="Delete Home Menu">Delete</a></div></td>              
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
