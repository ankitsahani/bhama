@extends('layouts.adminLayout.admin_design')
@section('content')

<div id="content">
<div id="content-header">
<div id="breadcrumb"> <a href="index.html" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a>
<a href="#">Banners</a> <a href="#" class="current">View Banner</a> </div>
<h1>Banners</h1>
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
<h5>View Banners</h5>
</div>
<div class="widget-content nopadding">
<table class="table table-bordered data-table">
  <thead>
    <tr>
      <th>Sr No.</th>
      <th>Image</th>
      <th>Name</th>
      <th>Text Style</th>
      <th>Text Order</th>
      <th>Content</th>
      <th>Link</th>
      <th>Status</th>
      <th>Actions</th>
    </tr>
  </thead>
  <tbody>
  @foreach($banner as $key=>$newbanner)
      <tr class="gradeX">
      <td>{{ $key+1 }}</td>
      <td>
         
      <img src="{{asset('/images/backend_img/banner/'.$newbanner->image)}}"
      style="width:60px;">
      </td>
      <td>{{ $newbanner->name }}</td>
      <td>{{ $newbanner->text_style }}</td>
      <td>{{ $newbanner->sort_order }}</td>
      <td>{{ $newbanner->content_type }}</td>
      <td>{{ $newbanner->link }}</td>
      <td>{{ $newbanner->status }}</td>
      
          
    <td class="center"><div class="fr"><a href="#myModal{{ $newbanner->id }}" data-toggle="modal" 
      class="btn btn-success btn-mini" title="View Banner">View</a>
      <a href="{{url('/admin/edit-banners/'.$newbanner->id)}}" class="btn btn-primary btn-mini" title="Edit Banner">Edit</a>
      
    <a  rel="delete-banner/{{$newbanner->id}}" rel1="delete-banner"
      href="javascript:" class="btn btn-danger btn-mini deleteRecord" title="Delete Banner">Delete</a></div></td>              
  </tr> 
          <div id="myModal{{ $newbanner->id }}" class="modal hide">
            <div class="modal-header">
              <button data-dismiss="modal" class="close" type="button">×</button>
              <h3>{{ $newbanner->id }} Full Details</h3>
            </div>
            <div class="modal-body">
              <p>Image : {{ $newbanner->image }}</p>
              <p>Name : {{ $newbanner->name}}</p>
              <p>Text Style : {{ $newbanner->text_style }}</p>
              <p>Sort Order : {{ $newbanner->sort_order }}</p>
              <p>Content : {{ $newbanner->content_type }}</p>
              <p>Link : ${{ $newbanner->link }}</p>
              <p>Status : {{ $newbanner->status }}</p>
              
            </div>
          </div>
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
