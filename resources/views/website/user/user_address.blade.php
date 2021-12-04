@extends('website.layouts.master')
@section('page_content')
<div class="holder">
	<div class="container">
		<div class="row">
			<div class="col-md-4 aside aside--left">
            @include('website.user.sidebar');
			</div>
			<div class="col-md-14 aside">
				<h1 class="mb-3">My Addresses</h1>
				<div class="row">
					@if(count($address) > 0)
                    @foreach($address as $key=>$row)
					<div class="col-sm-9">
						<div class="card">
							<div class="card-body">
								<h3>Address {{$key+1}} @if($row->default==1)(Default)@endif</h3>
								<p>{{$row->country}}
									<br>  {{$row->state}} {{$row->city}}
									<br> {{$row->pincode}}</p>
								<div class="mt-2 clearfix">
									<a href="javascript:void(0);" onclick="return updateUserAccount({{$row->id}})" class="link-icn js-show-form" data-form="#updateAddress"><i class="icon-pencil"></i>Edit</a>
                                    @csrf
									<a href="{{url('delete-user-address/'.$row->id)}}" onclick="return confirm('Are you sure you want delete?')"class="link-icn ml-1 float-right"><i class="icon-cross"></i>Delete</a>
								</div>
							</div>
						</div>
					</div>
                    @endforeach
                    @endif
				</div>
                    
				<div class="card mt-3 d-none" id="updateAddress">
                <form  method="post" action="{{route('update-user-address')}}">
                    @csrf
					<div class="card-body">
						<h3>Edit Address</h3>
						<input type="hidden" name="editAddID" id="editAddID">
						<label class="text-uppercase">Country:</label>
						<div class="form-group select-wrapper">
							<select class="form-control" id="editCountry" name="country">
								<option value="United States">United States</option>
								<option value="Canada">Canada</option>
								<option value="China">China</option>
								<option value="India">India</option>
								<option value="Italy">Italy</option>
								<option value="Mexico">Mexico</option>
							</select>
						</div>
						<label class="text-uppercase">State:</label>
						<div class="form-group select-wrapper">
							<select class="form-control" id="editState" name="state">
								<option value="Alabama">Alabama</option>
								<option value="Alaska">Alaska</option>
								<option value="Arizona">Arizona</option>
								<option value="Arkansas">Arkansas</option>
								<option value="California">California</option>
								<option value="Colorado">Colorado</option>
								<option value="Connecticut">Connecticut</option>
								<option value="Delaware">Delaware</option>
								<option value="District Of Columbia">District Of Columbia</option>
								<option value="Florida">Florida</option>
								<option value="Georgia">Georgia</option>
								<option value="Hawaii">Hawaii</option>
								<option value="Idaho">Idaho</option>
								<option value="Illinois">Illinois</option>
								<option value="Indiana">Indiana</option>
								<option value="Iowa">Iowa</option>
								<option value="Kansas">Kansas</option>
								<option value="Kentucky">Kentucky</option>
								<option value="Louisiana">Louisiana</option>
							</select>
						</div>
						<div class="row">
							<div class="col-sm-6">
								<label class="text-uppercase">City:</label>
								<div class="form-group">
									<input type="text" class="form-control" id="editCity" name="city">
								</div>
							</div>
							<div class="col-sm-6">
								<label class="text-uppercase">zip/postal code:</label>
								<div class="form-group">

									<input type="text" class="form-control" id="editZip" name="pincode">

								
								</div>
							</div>
						</div>
						<div class="clearfix">
							<input name="checkbox1" type="checkbox" id="formCheckbox1">
							<label for="formCheckbox1">Set address as default</label>
						</div>
						<div class="mt-2">
							<button type="reset" class="btn btn--alt js-close-form" data-form="#updateAddress">Cancel</button>
							<button type="submit" class="btn ml-1">Add Address</button>
						</div>
					</div>
                </form>
				</div>
            
			</div>
		</div>
	</div>
</div>
@endsection
<script>
function updateUserAccount(id){
	var _token = $('input[name="_token"]').val();
	$.ajax({
			url:"{{ route('update-user-address-form') }}",
			method:"POST",
			data:{id:id,_token:_token},
			dataType: "json",
			success:function(data)
			{
				 console.log(data.data);
				 $('#editZip').val(data.data.pincode);
				 $('#editAddID').val(data.data.id);
				 $('#editCountry').val(data.data.country).selected();
				 $('#editCity').val(data.data.city).selected();
				 if(data.data.default){
					$('#formCheckbox1').prop('checked', true);
				 }else{
					$('#formCheckbox1').prop('checked', false);
				 }
				// $('#loadMorePendigPayment').html(data.html);
				//toastr.success('Retail Price Setting Updated', 'Success');
			}
		
		});
}

</script>