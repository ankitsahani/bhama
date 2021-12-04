@extends('layouts.adminLayout.admin_design')
@section('content')

<div id="content">
<div id="content-header">
<div id="breadcrumb"> <a href="index.html" title="Go to Promotion" class="tip-bottom"><i class="icon-promotion"></i> Promotion</a>
<a href="#">Promotion Menu</a> <a href="#" class="current">Edit Promotion Menu</a> </div>
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
<div class="container-fluid"><hr>
<div class="row-fluid">
<div class="span12">
<div class="widget-box">
  <div class="widget-title"> <span class="icon"> <i class="icon-info-sign"></i> </span>
    <h5>Edit Promotion Menu</h5>
  </div>
  <div class="widget-content nopadding">
  <form class="form-horizontal" method="post" action="{{ url('/admin/edit-promotion-menu/'.$menu->id)}}" enctype="multipart/form-data"
    name="add_coupon" id="add_coupon"> {{csrf_field()}}
      <div class="control-group">
          <label class="control-label">Name</label>
          <div class="controls">
            <input type="text" name="name" id="name" value="{{$menu->name}}" required>
          </div>
        </div>
     
        <div class="control-group">
          <label class="control-label">Description</label>
          <div class="controls">
            <textarea name="description" id="description" class="description"> {{$menu->description}}</textarea>
          </div>
        </div>
          <div class="form-actions">
        <input type="submit" value="Edit Promotion Menu" class="btn btn-success">
      </div>
    </form>
  </div>
</div>
</div>
</div>
</div>
</div>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js" type="text/javascript"></script>
<script src="//cdn.ckeditor.com/4.16.2/standard/ckeditor.js"></script>
<script>
CKEDITOR.replace( 'description' );
</script>
@endsection
