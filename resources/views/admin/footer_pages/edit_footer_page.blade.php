@extends('layouts.adminLayout.admin_design')
@section('content')

<div id="content">
<div id="content-header">
<div id="breadcrumb"> <a href="index.html" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a>
  <a href="#">Pages</a> <a href="#" class="current">Edit Page</a> </div>
<h1>Pages</h1>
</div>
<div class="container-fluid"><hr>
<div class="row-fluid">
  <div class="span12">
    <div class="widget-box">
      <div class="widget-title"> <span class="icon"> <i class="icon-info-sign"></i> </span>
        <h5>Edit Page</h5>
      </div>
      <div class="widget-content nopadding">
      <form class="form-horizontal" method="post" action="{{url('/admin/edit-page/'.$PageDetails->id)}}"
        name="edit_Page" id="edit_page" novalidate="novalidate" enctype="multipart/form-data"> {{csrf_field()}}
          <div class="control-group">
            <label class="control-label">Page Name</label>
            <div class="controls">
            <input type="text" name="Page_name" id="Page_name" value="{{$PageDetails->name}}">
            </div>
          </div>
          <div class="control-group">
              <label class="control-label">Page Level</label>
              <div class="controls">
                  <select name="Parent_id" style="width:220px;">
                      <option value="0">Main Page</option>
                      @foreach($levels as $val)
                      <option value="{{ $val->id}}" @if( $val->id ==$PageDetails->parent_id) selected @endif>{{ $val->name}}</option>
                      @endforeach
                      </select>
              </div>
            </div>
          <div class="control-group">
              <label class="control-label">Description</label>
              <div class="controls">
                <textarea name="description" id="description">{{$PageDetails->Description}} </textarea>
              </div>
            </div>
         
          <div class="form-actions">
            <input type="submit" value="Edit Page" class="btn btn-success">
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