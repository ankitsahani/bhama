@extends('layouts.adminLayout.admin_design')
@section('content')

<div id="content">
    <div id="content-header">
      <div id="breadcrumb"> <a href="index.html" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a>
        <a href="#">Mega Menues</a> <a href="#" class="current">Add Mega Menu</a> </div>
      <h1>Mega Menues</h1>
    </div>
    <div class="container-fluid"><hr>
      <div class="row-fluid">
        <div class="span12">
          <div class="widget-box">
            <div class="widget-title"> <span class="icon"> <i class="icon-info-sign"></i> </span>
              <h5>Add Mega Menu</h5>
            </div>
            <div class="widget-content nopadding">
            <form class="form-horizontal" method="post" action="{{ url('/admin/add-mega-menu') }}"
             name="add_mega_menu" id="add_mega_menu" novalidate="novalidate" enctype="multipart/form-data"> {{csrf_field()}}
                <div class="control-group">
                  <label class="control-label">Mega Menu Name</label>
                  <div class="controls">
                    <input type="text" name="name" id="name">
                  </div>
                </div>
                <div class="control-group">
                    <label class="control-label">Mega Menu Level</label>
                    <div class="controls">
                      <select name="parent_id" style="width:220px;">
                         <?php echo $levels; ?>
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
                  <input type="submit" value="Add Mega Menu" class="btn btn-success">
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

@endsection