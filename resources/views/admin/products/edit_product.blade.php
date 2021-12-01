@extends('layouts.adminLayout.admin_design')
@section('content')

<div id="content">
    <div id="content-header">
      <div id="breadcrumb"> <a href="index.html" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a>
        <a href="#">Products</a> <a href="#" class="current">Edit Products</a> </div>
      <h1>Edit Product</h1>
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
              <h5>Add Products</h5>
            </div>
            <div class="widget-content nopadding">
            <form enctype="multipart/form-data" class="form-horizontal" method="post" action="{{ url('/admin/edit-product/'.$productDetails->id) }}"
             name="edit_product" id="edit_product" novalidate="novalidate"> {{csrf_field()}}
             <div class="control-group">
                <label class="control-label">Under Category</label>
                <div class="controls">
                    <select name="category_id" id="category_id" style="width:220px;">
                    <?php echo $categories_dropdown; ?>
                      </select>
                </div>
              </div>
                <div class="control-group">
                  <label class="control-label">Product Name</label>
                  <div class="controls">
                  <input type="text" name="product_name" id="product_name" value="{{$productDetails->product_name}}">
                  </div>
                </div>
                <div class="control-group">
                    <label class="control-label">Product Code</label>
                    <div class="controls">
                      <input type="text" name="product_code" id="product_code" value="{{$productDetails->product_code}}">
                    </div>
                  </div>
                  <div class="control-group">
                      <label class="control-label">Product Color</label>
                      <div class="controls">
                        <input type="text" name="product_color" id="product_color" value="{{$productDetails->product_color}}">
                      </div>
                    </div>
                  <div class="control-group">
                    <label class="control-label">Short Description</label>
                    <div class="controls">
                      <textarea name="short_description" id="short_description" class="short_description">{{$productDetails->short_description}} </textarea>
                    </div>
                  </div>
                <div class="control-group">
                    <label class="control-label">Description</label>
                    <div class="controls">
                      <textarea name="description" id="description">{{$productDetails->description}}</textarea>
                    </div>
                  </div>
                  <div class="control-group">
                    <label class="control-label">Shipping Info</label>
                    <div class="controls">
                      <textarea name="shipping_info" id="shipping_info" class="shipping_info">{{$productDetails->shipping_info}} </textarea>
                    </div>
                  </div>
                  <div class="control-group">
                    <label class="control-label">Return Info</label>
                    <div class="controls">
                      <textarea name="return_info" id="return_info" class="return_info">{{$productDetails->return_info}} </textarea>
                    </div>
                  </div>
                  <div class="control-group">
                      <label class="control-label">Material & Care</label>
                      <div class="controls">
                        <textarea name="care" id="care">{{$productDetails->care}}</textarea>
                      </div>
                    </div>
                  <div class="control-group">
                      <label class="control-label">Price</label>
                      <div class="controls">
                        <input type="text" name="price" id="price" value="{{$productDetails->price}}">
                      </div>
                    </div>
                    <div class="control-group">
                      <label class="control-label">Stock</label>
                      <div class="controls">
                        <input type="text" name="stock" id="stock" value="{{$productDetails->stock}}">
                      </div>
                    </div>
                    <div class="control-group">
                      <label class="control-label">SKU</label>
                      <div class="controls">
                        <input type="text" name="sku" id="sku" value="{{$productDetails->sku}}">
                      </div>
                    </div>
                    <div class="control-group">
                      <label class="control-label">Selling Price</label>
                      <div class="controls">
                        <input type="text" name="selling_price" id="selling_price" value="{{$productDetails->selling_price}}">
                      </div>
                    </div>
                    <div class="control-group">
                    <label class="control-label">Size Guide</label>
                    <div class="controls">
                      <textarea name="size_guide" id="size_guide" class="size_guide">{{$productDetails->size_guide}} </textarea>
                    </div>
                  </div>
                    <div class="control-group">
                        <label class="control-label">Image</label>
                        <div class="controls">
                          <input type="file" name="image" id="image">
                        <input type="hidden" name="current_image" value="{{$productDetails->image}}">
                        @if(!empty($productDetails->image))
                        <img style="width:50px;" src="{{asset('/images/backend_img/products/small/'.$productDetails->image)}}"> 
                        | <a href="{{url('/admin/delete-product-image/'.$productDetails->id)}}">Delete</a>
                        @endif    
                    </div>
                      </div>
                <div class="form-actions">
                  <input type="submit" value="Edit Product" class="btn btn-success">
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
CKEDITOR.replace( 'short_description' );
CKEDITOR.replace( 'description' );
CKEDITOR.replace( 'shipping_info' );
CKEDITOR.replace( 'return_info' );
CKEDITOR.replace( 'size_guide' );
</script>
@endsection