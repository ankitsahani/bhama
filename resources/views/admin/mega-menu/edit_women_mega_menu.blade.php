@extends('layouts.adminLayout.admin_design')
@section('content')

<div id="content">
<div id="content-header">
<div id="breadcrumb"> <a href="index.html" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a>
  <a href="#">Mega Menu</a> <a href="#" class="current">Edit Mega Menu</a> </div>
<h1>Mega Menu</h1>
</div>
<div class="container-fluid"><hr>
<div class="row-fluid">
  <div class="span12">
    <div class="widget-box">
      <div class="widget-title"> <span class="icon"> <i class="icon-info-sign"></i> </span>
        <h5>Edit Mega Menu</h5>
      </div>
      <div class="widget-content nopadding">
      <form class="form-horizontal" method="post" action="{{url('/admin/edit-women-mega-menu/'.$megamenuDetails->id)}}"
        name="edit_category" id="edit_category" novalidate="novalidate" enctype="multipart/form-data"> {{csrf_field()}}
          <div class="control-group">
            <label class="control-label">Mega Menu Name</label>
            <div class="controls">
            <input type="text" name="menu_name" id="menu_name" value="{{$megamenuDetails->name}}">
            </div>
          </div>
          <div class="control-group">
              <label class="control-label">Mega Menu Level</label>
              <div class="controls">
                  <select name="Parent_id" style="width:220px;">
                       <?php echo $levels;?>
                    </select>
              </div>
            </div>
          <div class="control-group">
              <label class="control-label">Description</label>
              <div class="controls">
                <textarea name="description" id="description">{{$megamenuDetails->description}} </textarea>
              </div>
            </div>
         
          <div class="form-actions">
            <input type="submit" value="Edit Category" class="btn btn-success">
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
</div>
</div>

@endsection