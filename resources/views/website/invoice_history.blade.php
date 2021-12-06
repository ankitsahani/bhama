@extends('website.layouts.master')
@section('page_content')
<div class="page-content">
        <div class="row justify-content-center">
            <div class="sixteen columns"> <!-- custom code for shiprocket tracking button --> <!-- Ends here --> 
                <h4><strong>Order 96835</strong></h4> 
                <p>November 17, 2021 02:23PM</p> 
                <div class="errors"> 
                    <p class="h5">Order Cancelled on November 17, 2021 02:27PM</p> 
                    <p>Reason: customer</p></div>
                     <table id="order_details" width="100%"> 
                        <thead> 
                            <tr> 
                                <th class="product" style="width: 300px;">Product</th> 
                                <th>SKU</th> 
                                <th>Price</th> 
                                <th class="text-right">Quantity</th> 
                                <th class="text-right">Total</th>
                            </tr></thead>
                             <tbody> 
                                <tr id="10428674703425"> 
                                    <td> <strong><a href="#" title="">Olive Green Solid Capri Jumpsuit - S</a></strong></td> 
                                    <td>JP243VE-S</td> 
                                    <td> 
                                        <div class="order_price"> 
                                            <span class="money">
                                                <span class="money">Rs. 797</span></span></div></td> 
                                    <td class="text-right">1</td> 
                                    <td class="text-right"> 
                                    <span class="money "> 
                                    <span class="money">Rs. 797</span></span></td>
                                </tr>
                                <tr id="10428674736193"> 
                                <td> <strong><a href="#" title="">Maroon Solid Maxi Dress - S</a></strong></td> 
                                <td>DR395MR-S</td> 
                                <td> 
                                    <div class="order_price"> 
                                        <span class="money"><span class="money">Rs. 999</span></span></div></td> 
                                        <td class="text-right">1</td> 
                                        <td class="text-right"> <span class="money "> <span class="money">Rs. 999</span></span></td></tr></tbody> 
                                        <tfoot> 
                                            <tr> 
                                                <td colspan="4" class="text-align--right">Subtotal</td> 
                                                <td class="text-right"><span class="money"><span class="money">Rs. 1,546</span></span></td>
                                            </tr> 
                                            <tr class="order_summary discount"> 
                                                <td colspan="4" class="text-align--right">Discount: Bhama250</td> 
                                                <td class="text-right">
                                                    <span class="money">-<span class="money">Rs. 250</span></span>
                                                </td>
                                            </tr> 
                                            <tr> 
                                                <td colspan="4" class="text-align--right">Shipping (Free Shipping)</td> 
                                                <td class="text-right"> <span class="money">
                                                    <span class="money">Rs. 0</span></span></td></tr>
                                            <tr> <td colspan="4" class="text-align--right"><strong>Total</strong></td> 
                                                <td class="text-right"> <strong> 
                                                <span class="money"><span class="money">Rs. 1,561</span></span> 
                                                <span class="selected-currency">INR</span></strong></td>
                                            </tr>
                                        </tfoot>
                                    </table>
                        <div class="eight columns alpha"> <h4>Billing Address</h4> 
                        <p><strong>Payment Status:</strong> Pending</p> <strong>sonty lx</strong> 
                        <p>Rajendra Nagar, 332456<br>kota<br>Rajasthan<br>324005<br>India<br>78787 94561</p></div> 
                        <div class="eight columns omega"> <h4>Shipping Address</h4> 
                            <p><strong>Fulfillment Status:</strong> Unfulfilled</p> <strong>sonty lx</strong> <p>Rajendra Nagar, 332456<br>kota<br>Rajasthan<br>324005<br>India<br>78787 94561</p></div> <!--BeginOrderifyTd-->
                            </div>
        </div>
    </div>

@endsection