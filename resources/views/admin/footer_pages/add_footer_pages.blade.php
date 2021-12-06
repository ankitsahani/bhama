@extends('layouts.adminLayout.admin_design')
@section('content')

<div id="content">
    <div id="content-header">
      <div id="breadcrumb"> <a href="index.html" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a>
        <a href="#">Pages</a> <a href="#" class="current">Add Page</a> </div>
      <h1>Pages</h1>
    </div>
    <div class="container-fluid"><hr>
      <div class="row-fluid">
        <div class="span12">
          <div class="widget-box">
            <div class="widget-title"> <span class="icon"> <i class="icon-info-sign"></i> </span>
              <h5>Add Page</h5>
            </div>
            <div class="widget-content nopadding">
            <form class="form-horizontal" method="post" action="{{ url('/admin/add-pages') }}"
             name="add_Page" id="add_Page" novalidate="novalidate" enctype="multipart/form-data"> {{csrf_field()}}
                <div class="control-group">
                  <label class="control-label">Page Name</label>
                  <div class="controls">
                    <input type="text" name="page_name" id="page_name">
                  </div>
                </div>
                <div class="control-group">
                    <label class="control-label">Page Level</label>
                    <div class="controls">
                      <select name="parent_id" style="width:220px;">
                      <?php echo $levels;?>
                      </select>
                    </div>
                  </div>
                 <div class="control-group">
                    <label class="control-label">Description</label>
                    <div class="controls">
                      <textarea name="description" id="description"> </textarea>
                    </div>
                  </div>
                
                <div class="form-actions">
                  <input type="submit" value="Add Page" class="btn btn-success">
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