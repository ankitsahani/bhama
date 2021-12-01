@extends('layouts.adminLayout.admin_design')
@section('content')

<div id="content">
<div id="content-header">
<div id="breadcrumb"> <a href="index.html" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a>
<a href="#">Users</a> <a href="#" class="current">View Users</a> </div>
<h1>Users</h1>
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
<div class="container-fluid">
<hr>
<div class="row-fluid">
<div class="span12">
<div class="widget-box">
<div class="widget-title"> <span class="icon"><i class="icon-th"></i></span>
<h5>View Users</h5>
</div>
<div class="widget-content nopadding">
<table class="table table-bordered data-table">
  <thead>
    <tr>
      <th>Sr No.</th>
      <th>Name</th>
      <th>Email</th>
      <th>Mobile</th>
      <th>Address</th>
      <th>State</th>
      <th>City</th>
      <th>Pincode</th>
      <th>status</th>
      <th>Actions</th>
    </tr>
</thead>
  <tbody>
@foreach($users as $key=>$user)
      <tr class="gradeX">
      <td>{{ $key+1 }}</td>
      <td>{{ $user->name }}</td>
      <td>{{ $user->email }}</td>
      <td>{{ $user->mobile }}</td>
      <td>{{ $user->address }}</td>
      <td>{{ $user->state }}</td>
      <td>{{ $user->city}}</td>
      <td>{{ $user->pincode}}</td>
      <td> @if($user->admin == '1')
              {{'Active'}}
              @else
              {{'Blocked'}}
              @endif 
          </td>
      <td class="center"><div class="fr"><a href="#myModal{{$user->id }}" data-toggle="modal" 
      class="btn btn-success btn-mini" title="View Users">View</a>

      <a  href="delete-users/{{$user->id}}" rel1="delete-users"
      href="javascript:" class="btn btn-danger btn-mini deleteRecord" title="Delete Users">Delete</a>    
    @if($user->admin == '1')
              <a  onclick="statefunction('{{$user->id}}')" class="btn btn-danger btn-mini" title="Block" style="color:white;"><i class="text-white fa fa-lock" aria-hidden="true" >Block</i></a>
              @else
              <a  onclick="statefunction('{{$user->id}}')" class="btn btn-success btn-mini" title="Unlock" style="color:white;"><i class="text-white fa fa-unlock" aria-hidden="true" >Unblock</i></a>
                @endif
 </div>

  </td>              
  </tr> 


  <div id="myModal{{ $user->id }}" class="modal hide">
            <div class="modal-header">
              <button data-dismiss="modal" class="close" type="button">×</button>
              <h3>Full Details</h3>
            </div>
            <div class="modal-body">
              <p>Id:{{ $user->id }} </p>
              <p>Name : {{ $user->name }}</p>
              <p>Email : {{ $user->email }}</p>
              <p>Mobile : {{ $user->mobile }}</p>
              <p>Address : {{ $user->address }}</p>
              <p>State : {{ $user->state }}</p>
              <p>City : {{ $user->city }}</p>
              <p>Pincode : {{ $user->pincode }}</p>
              
            </div>
          </div>
@endforeach
  </tbody>
</table>
</div>
</div>
</div>
</div>
</div>
</div>
<script>
  function statefunction(id){
        swal({
          title: "Are you sure?",
          text: "You want to perform this action!",
          type: "warning",
          showCancelButton: true,
          cancelButtonClass: 'btn-danger',
          confirmButtonText: 'Yes,perform it',
          cancelButtonText: "Cancel",
          closeOnConfirm: false,
          closeOnCancel: true
        },function(isConfirm) {
          if(isConfirm){
           jQuery.ajaxSetup({
            headers: {
              'X-CSRF-TOKEN': jQuery('meta[name="csrf-token"]').attr('content')
            }
          });
          jQuery.ajax({
            type: 'get',
            url:  "{{url('/status/')}}/"+id,
            success: function(data) {
                if(data == 1){
                  var status_user = 'unblocked';
                }
                else{
                  var status_user = 'blocked';
                }
                swal({
                    title: "Done!",
                    text: "User "+status_user+" successfully!",
                    type: "success",
                    confirmButtonColor: "#069edb",
                  },
                   function() {
                  location.reload();
                });
              }
          });
        }
        else
        {
           window.location.replace("{{url('/users')}}");
        }
        });
      }

  </script> 
@endsection
