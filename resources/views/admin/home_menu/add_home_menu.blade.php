@extends('layouts.adminLayout.admin_design')
@section('content')

<div id="content">
<div id="content-header">
<div id="breadcrumb"> <a href="{{route('index')}}" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a>
<a href="">Home Menu</a> <a href="" class="current">Add Home Menu</a> </div>
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
<div class="container-fluid"><hr>
<div class="row-fluid">
<div class="span12">
<div class="widget-box">
  <div class="widget-title"> <span class="icon"> <i class="icon-info-sign"></i> </span>
    <h5>Add Home Menu</h5>
  </div>
  <div class="widget-content nopadding">
  <form class="form-horizontal" method="post" action="{{ url('/admin/add-home-menu')}}" enctype="multipart/form-data"
    name="add_coupon" id="add_coupon"> {{csrf_field()}}
      <div class="control-group">
        <label class="control-label">Menu Postion</label>
        <div class="controls">
          <select name="menu_position" style="width:220px;">
              <option value="" disabled selected>Select Positon</option>
              <option value="1">Top</option>
              <option value="2">Left</option>
              <option value="3">Right</option>
              <option value="4">Bottom Left</option>
              <option value="5">Bottom Right</option>
          </select>
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
                <input type="file" name="image" id="image" >
            </div>
        </div>
       
          <div class="form-actions">
        <input type="submit" value="Add Home Menu" class="btn btn-success">
      </div>
    </form>
  </div>
</div>
</div>
</div>
</div>
</div>
@endsection
