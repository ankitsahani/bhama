@extends('layouts.adminLayout.admin_design')
@section('content')

<!--main-container-part-->
<div id="content">
<div id="content-header">
<div id="breadcrumb"> <a href="#" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a> <a href="#" class="current">Orders</a> </div>
<h1>Order #{{$orderDetails->id}}</h1>
</div>
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
<div class="container-fluid">
<hr>
<div class="row-fluid">
        <div class="span6">
                <div class="widget-box">
                <div class="widget-title">
                    <h5>Order Details</h5>
                </div>
                <div class="widget-content nopadding">
                    <table class="table table-striped table-bordered">
                    
            <tbody>
                <tr>
                <td class="taskDesc"> Order Date</td>
                <td class="taskStatus">{{$orderDetails->created_at}}</td>
                </tr>
                <tr>
                <td class="taskDesc"> Order Status</td>
                <td class="taskStatus">{{$orderDetails->order_status}}</td>
                </tr>
            </tbody>
                    </table>
                </div>
                </div>
                <div class="widget-box">
                <div class="widget-title">
                    <h5>Billing Address</h5>
                </div>
                <div class="widget-content">{{$orderDetails->address}}</div>
                <div class="widget-content">{{$orderDetails->city}}</div>
                <div class="widget-content">{{$orderDetails->state}}</div>
                <div class="widget-content">{{$orderDetails->country}}</div>
                <div class="widget-content">{{$orderDetails->pincode}}</div>

                </div>
                <div class="widget-box">
        <div class="widget-title">
            <h5>Update Order Status</h5>
        </div>
        <div class="widget-content">
            <form action="{{url('/admin/update-order-status')}}" method="post">
                {{ csrf_field() }}
                <input type="text" name="order_id" value="{{$orderDetails->id}}">
                <table width="100%">
                    <tr>
                        <td>
                       
                            <select name="order_status" id="order_status" class="control-label">
                                
                               <!--  <option value="Select" @if($orderDetails->order_status=="select") selected @endif>Select</option> -->
                                <option value="Pending"@if($orderDetails->order_status=="Pending") selected @endif>Pending</option>
                                <option value="Cancelled"@if($orderDetails->order_status=="Cancelled") selected @endif>Cancelled</option>
                                <option value="In Process"@if($orderDetails->order_status=="In Process") selected @endif>In Process</option>
                                <option value="Shipped"@if($orderDetails->order_status=="Shipped") selected @endif>Shipped</option>
                                <option value="Delivered"@if($orderDetails->order_status=="Delivered") selected @endif>Delivered</option>
                            </select>
                        </td>   
                        
                  <td> 
                <input type="submit" name="Update Status" value="Update Status" >
                </td>
            </tr>
        </table>
            </form>

        </div>
        </div>
        
            </div>

<div class="span6">
        <div class="widget-box">
                <div class="widget-title">
                    <h5>Customer Details</h5>
                </div>
                <div class="widget-content nopadding">
                    <table class="table table-striped table-bordered">
                    
            <tbody>
                <tr>
                <td class="taskDesc">Customer Name</td>
                <td class="taskStatus">{{$orderDetails->name}}</td>
                </tr>
                <tr>
                <td class="taskDesc">Customer Email</td>
                <td class="taskStatus">{{$orderDetails->email}}</td>
                </tr>
            </tbody>
                    </table>
                </div>
                </div>
        <div class="widget-box">
        <div class="widget-title">
            <h5>Shipping Address</h5>
        </div>
        <div class="widget-content">{{$orderDetails->address}}</div>
        <div class="widget-content">{{$orderDetails->city}}</div>
<div class="widget-content">{{$orderDetails->state}}</div>
<div class="widget-content">{{$orderDetails->country}}</div>
<div class="widget-content">{{$orderDetails->pincode}}</div>

        </div>


</div>
</div>
</div>
</div>
<!--main-container-part-->

@endsection