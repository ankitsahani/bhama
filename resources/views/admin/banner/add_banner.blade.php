@extends('layouts.adminLayout.admin_design')
@section('content')

<div id="content">
<div id="content-header">
<div id="breadcrumb"> <a href="index.html" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a>
<a href="#">Banners</a> <a href="#" class="current">Add Banners</a> </div>
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
<div class="container-fluid"><hr>
<div class="row-fluid">
<div class="span12">
<div class="widget-box">
  <div class="widget-title"> <span class="icon"> <i class="icon-info-sign"></i> </span>
    <h5>Add Banner</h5>
  </div>
  <div class="widget-content nopadding">
  <form class="form-horizontal" method="get" action="{{ url('/admin/create-banners')}}" enctype="multipart/form-data"
    name="add_coupon" id="add_coupon"> {{csrf_field()}}
      <div class="control-group">
        <label class="control-label">Name</label>
        <div class="controls">
          <input type="text" name="name" id="name"  required>
        </div>
      </div>
      <div class="control-group">
          <label class="control-label">Text Style</label>
          <div class="controls">
            <input type="text" name="text_style" id="text_style" required>
          </div>
        </div>


        <div class="control-group">
          <label class="control-label">Sort Order</label>
          <div class="controls">
            <input type="text" name="sort_order" id="sort_order"  required>
          </div>
        </div>
        
<div class="control-group">
          <label class="control-label">Content Type</label>
          <div class="controls">
            <input type="text" name="content_type" id="content_type"  required>
          </div>
        </div>
        
        



        <div class="control-group">
          <label class="control-label">Link</label>
          <div class="controls">
            <input type="text" name="link" id="link"  required>
          </div>
        </div>
        <div class="control-group">
                    <label class="control-label"> Image</label>
                    <div class="controls">
                        <input type="file" name="image" id="image" multiple="multiple">
                    </div>
                </div>
       
          <div class="form-actions">
        <input type="submit" value="Add Baanner" class="btn btn-success">
      </div>
    </form>
  </div>
</div>
</div>
</div>
</div>
</div>
@endsection
