@extends('layouts.adminLayout.admin_design')
@section('content')

<div id="content">
<div id="content-header">
<div id="breadcrumb"> <a href="index.html" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a>
<a href="#">Banners</a> <a href="#" class="current">Edit Banner</a> </div>
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
    <h5>Edit Banner</h5>
  </div>
  <div class="widget-content nopadding">
  <form class="form-horizontal" method="post" action="{{url('/admin/edit-banners/'.$bannerDetails->id)}}"
     enctype="multipart/form-data"> {{csrf_field()}}
      <div class="control-group">
        <label class="control-label">Banner name</label>
        <div class="controls">
          <input type="text" name="name" id="name" value="{{$bannerDetails->name}}"required>
        </div>
      </div>
      <div class="control-group">
          <label class="control-label">text_style</label>
          <div class="controls">
            <input type="text" name="text_style" id="text_style"  value="{{$bannerDetails->text_style}}" required>
          </div>
        </div>
        
        <div class="control-group">
            <label class="control-label">sort_order</label>
            <div class="controls">
              <input type="text" name="sort_order" id="sort_order" autocomplete="off" value="{{$bannerDetails->sort_order}}" required>
            </div>
          </div>

          <div class="control-group">
            <label class="control-label">content_type</label>
            <div class="controls">
              <input type="text" name="content_type" id="content_type" value="{{$bannerDetails->content_type}}"autocomplete="off" required>
            </div>
          </div>
           <div class="control-group">
            <label class="control-label">link</label>
            <div class="controls">
              <input type="text" name="link" id="link" autocomplete="off" value="{{$bannerDetails->link}}"required>
            </div>
          </div>

         <!--  <div class="control-group">
            <label class="control-label">Image</label>
            <div class="controls">
              <input type="file" name="image" id="image" value="{{$bannerDetails->image}}">
            </div>
          </div> -->
          <div class="control-group">
                        <label class="control-label">Image</label>
                        <div class="controls">
                          <input type="file" name="image" id="image">
                        <input type="hidden" name="current_image" value="{{$bannerDetails->image}}">
                        @if(!empty($bannerDetails->image))
                        <img style="width:50px;" src="{{asset('/images/backend_img/banner/'.$bannerDetails->image)}}"> 
                        | <a href="{{url('/admin/delete-banner-image/'.$bannerDetails->id)}}">Delete</a>
                        @endif    
                    </div>
                      </div>
            
      <div class="form-actions">
        <input type="submit" value="update Bnaner" class="btn btn-success">
      </div>
    </form>
  </div>
</div>
</div>
</div>
</div>
</div>
@endsection
