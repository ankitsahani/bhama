<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="base_url" content="{{ url('/') }}">
    <title>Bhama Ecommerce</title>
    <link rel="stylesheet" href="{{asset('assets/vendors/mdi/css/materialdesignicons.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/toastr.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/vendors/css/vendor.bundle.base.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/style.css')}}">
    
    
   
    <link rel="shortcut icon" href="" />
    @toastr_css
  </head>
  <body>
<div class="container-scroller">
@yield('content')



</div>
<script src="{{asset('assets/vendors/js/vendor.bundle.base.js')}}"></script>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
<script src="{{asset('assets/js/validate.min.js')}}"></script>
<script src="{{asset('assets/js/toastr.min.js')}}"></script>
<script src="{{asset('assets/js/custom.js')}}"></script>
<script>

$.validator.addMethod("nowhitespace", function(value, element) {
      	return this.optional(element) || /^S+$/i.test(value);
      }, "No white space please"); 
      $("#loginForm").validate({
    rules: {
        email: "required",
        nowhitespace: true
			
     
    },
    messages: {
        email: "Please enter email",
       
    }
  });
    

 
</script>

</body>
@jquery
    @toastr_js
    @toastr_render
</html>