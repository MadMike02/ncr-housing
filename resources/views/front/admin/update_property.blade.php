@extends('front.layout.admin.main')
        
@section('custom_css')
<style>
#register_loader,#login_loader
{
    display: none;
}
.lds-ellipsis {
    display: inline-block;
    position: relative;
    width: 80px;
    height: 80px;
    
  }
  .lds-ellipsis div {
    position: absolute;
    top: 33px;
    width: 13px;
    height: 13px;
    border-radius: 50%;
    background: #000;
    animation-timing-function: cubic-bezier(0, 1, 1, 0);
  }
  .lds-ellipsis div:nth-child(1) {
    left: 8px;
    animation: lds-ellipsis1 0.6s infinite;
  }
  .lds-ellipsis div:nth-child(2) {
    left: 8px;
    animation: lds-ellipsis2 0.6s infinite;
  }
  .lds-ellipsis div:nth-child(3) {
    left: 32px;
    animation: lds-ellipsis2 0.6s infinite;
  }
  .lds-ellipsis div:nth-child(4) {
    left: 56px;
    animation: lds-ellipsis3 0.6s infinite;
  }
  @keyframes lds-ellipsis1 {
    0% {
      transform: scale(0);
    }
    100% {
      transform: scale(1);
    }
  }
  @keyframes lds-ellipsis3 {
    0% {
      transform: scale(1);
    }
    100% {
      transform: scale(0);
    }
  }
  @keyframes lds-ellipsis2 {
    0% {
      transform: translate(0, 0);
    }
    100% {
      transform: translate(24px, 0);
    }
  }
  </style>
@endsection

@section('content')
<div id="main-wrapper">
		
			<div class="page-title pt-5" style="background-color:#008888">
				<div class="container">
					<div class="row">
						<div class="col-lg-12 col-md-12">
							
							<h2 class="ipt-title">Welcome!</h2>
							<span class="ipn-subtitle text-light">Welcome To Your Account</span>
							
						</div>
					</div>
				</div>
			</div>
			<!-- ============================ Page Title End ================================== -->
			
			<!-- ============================ User Dashboard ================================== -->
			<section>
				<div class="container-fluid">
								
					<div class="row">
                    @include('front.layout.admin.sidemenu')
						
						<div class="col-lg-9 col-md-8">
							
							<div class="dashboard-wraper">
								
								<div class="row">
									
									<!-- Submit Form -->
									<div class="col-lg-12 col-md-12">
									
										<div class="submit-page">
											<form id="add_prop_form" action="{{route('update_prop')}}" method="post" enctype="multipart/form-data">
											@csrf
											<input type="hidden" value="{{request()->route('id')}}" name="p_id">
											<!-- Basic Information -->
											<div class="form-submit">	
												<h3>Update Property</h3>
												<!-- @php(htmlspecialchars_decode('<ul>\n\t<li>hh</li>\n\t<li>hg</li>\n\t<li>hg</li>\n</ul>\n'))
											 -->
											 
												<h6 class="ml-2" style='color:red'><b>NOTE: </b>Fields marked with * are mandatory</h6>
												<div class="submit-section">
													<div class="form-row">
													
														<div class="form-group col-md-12">
															<label>Property Title*</label>
															<input type="text" class="form-control" name="title" required value='{{$detailes["data"]["title"]}}'>
														</div>
														
														<div class="form-group col-md-6">
															<label>Availability*</label>
															<select class="form-control" name="availability" required>
																<option value="">--Select One--</option>
																<option value="Rent" @if($detailes["data"]["availability"] == "Rent"){{"selected"}} @endif>For Rent</option>
																<option value="Sale" @if($detailes["data"]["availability"] == "Sale"){{"selected"}} @endif>For Sale</option>
															</select>
														</div>

														<div class="form-group col-md-6">
															<label>Property Overview*</label>
															<select id="overview" class="form-control" name="propertyOverview" required>
															<option value="">--Select One--</option>
																<option value="Under Construction" <?php if($detailes["data"]["propertyOverview"] == "Under Construction")echo "selected" ?>>Under Construction</option>
																<option value="Ready To Move" <?php if($detailes["data"]["propertyOverview"] == "Ready To Move")echo "selected" ?> >Ready To Move</option>
															</select>
														</div>
														
														<div class="form-group col-md-6">
															<label>Property Type*</label>
															<select class="form-control" name="propertyType" required>
																<option value="">--Select One--</option>
																<option value="Plot" <?php if($detailes["data"]["propertyType"] == "Plot")echo "selected" ?>>Plot</option>
																<option value="Shop" <?php if($detailes["data"]["propertyType"] == "Shop")echo "selected" ?>>Shop</option>
																<option value="Flat" <?php if($detailes["data"]["propertyType"] == "Flat")echo "selected" ?>>Flat</option>
																<option value="Villa" <?php if($detailes["data"]["propertyType"] == "Villa")echo "selected" ?>>Villa</option>
																<option value="Bank Morgage" <?php if($detailes["data"]["propertyType"] == "Bank Morgage")echo "selected" ?>>Bank Morgage</option>
																<option value="Independent House" <?php if($detailes["data"]["propertyType"] == "Independent House")echo "selected"?>>Independent House</option>
															</select>
														</div>
														
														<div class="form-group col-md-6">
															<label>Price(INR)*</label>
															<input type="text" class="form-control" placeholder="INR" name="price" required value='{{$detailes["data"]["price"]}}'>
														</div>

														<div class="form-group col-md-6">
															<label>buildYear*</label>
															<input type="number" class="form-control" min="1900" max="2099" step="1" value="<?php echo date('Y');?>" name="buildYear" required value='{{$detailes["data"]["buildYear"]}}'>
														</div>
														
														<div class="form-group col-md-6">
															<label>Dimensions/ Area*</label>
															<input type="text" class="form-control" placeholder="Sq.Ft" name="dimensions" required value='{{$detailes["data"]["dimensions"]}}'>
														</div>
														
														<div class="form-group col-md-12">
															<label>Summary</label>
															<textarea class="form-control" row="5" name="summary">{{$detailes["data"]["summary"]}}</textarea>
															
														</div>
														
													</div>
												</div>
											</div>
											
											<!-- Gallery -->
											<!-- <div class="form-submit">	
												<h3>Front Property picture*</h3>
												<div class="submit-section">
													<div class="form-row">
													
														<div class="form-group col-md-12">
															<label><span style='font-size:15px;color:red'>This image will be shown as front view in lists</span></label><br>
															<input id="bannerImg" type="file" accept=".jpeg, .jpg" name="bannerImg" required>
														</div>
														
													</div>
												</div>
											</div> -->
											
											<!-- Location -->
											<div class="form-submit">	
												<h3>Location</h3>
												<div class="submit-section">
													<div class="form-row">
													
														<div class="form-group col-md-6">
															<label>Address*</label>
															<input id="address" type="text" class="form-control" name="address" required value='{{$detailes["data"]["location"]["address"]}}'>
														</div>
														
														<div class="form-group col-md-6">
															<label>City*</label>
															<input id="city" type="text" class="form-control" name="city" value="Ghaziabad" required value='{{$detailes["data"]["location"]["city"]}}'>
														</div>
														
														<div class="form-group col-md-6">
															<label>State*</label>
															<input id="state" type="text" class="form-control" name="state" value="Uttar Pradesh" required>
														</div>
														
														<div class="form-group col-md-6">
															<label>pincode*</label>
															<input id="pincode" type="text" class="form-control" name="pincode" required value='{{$detailes["data"]["location"]["pincode"]}}'>
														</div>
														
														<button id="search_add" class="btn btn-info ml-3">SEARCH ADDRESS</button>
														<br>
														<span id="lc_error" style="color:red"></span>
														<div class="col-12">
														<span id="location_loader">
															<div class="lds-ellipsis"><div></div><div></div><div></div><div></div></div>
														</span>
														</div>
													</div>
												</div>
											</div>

											<div id="map_box"></div>
											
											<input id="latitude" type="hidden" name="latitude" value='{{$detailes["data"]["location"]["mapCoordinates"]["latitude"]}}'>
											<input id="longitude" type="hidden" name="longitude" value='{{$detailes["data"]["location"]["mapCoordinates"]["longitude"]}}'>
											
											<div class="form-group col-md-12 mt-3">
															<label>Nearby Locations</label>
															<div class="o-features">
																
																@php($near_array = $detailes["data"]["nearby"])
																<ul class="no-ul-list third-row">
																	<li>
																		<input id="a-1" class="checkbox-custom nearby" type="checkbox" value="Hospital" name="nearby[]" <?php if(in_array("Hospital", $near_array))echo "checked" ?>>
																		<label for="a-1" class="checkbox-custom-label">Hospital</label>
																	</li>
																	<li>
																		<input id="a-2" class="checkbox-custom nearby" type="checkbox" value="Mall" name="nearby[]" <?php if(in_array("Hospital", $near_array))echo "checked" ?>>
																		<label for="a-2" class="checkbox-custom-label">Mall</label>
																	</li>
																	<li>
																		<input id="a-3" class="checkbox-custom nearby" type="checkbox" value="Coffee Lounge & Restaurants" name="nearby[]" <?php if(in_array("Hospital", $near_array))echo "checked" ?>>
																		<label for="a-3" class="checkbox-custom-label">Coffee Lounge & Restaurants</label>
																	</li>
																	<li>
																		<input id="a-4" class="checkbox-custom nearby" type="checkbox" value="Bank & ATM" name="nearby[]" <?php if(in_array("Bank & ATM", $near_array))echo "checked" ?>>
																		<label for="a-4" class="checkbox-custom-label">Bank & ATM</label>
																	</li>
																	<li>
																		<input id="a-5" class="checkbox-custom nearby" type="checkbox" value="Shopping Mart" name="nearby[]" <?php if(in_array("Shopping Mart", $near_array))echo "checked" ?>>
																		<label for="a-5" class="checkbox-custom-label">Shopping Mart</label>
																	</li>
																	<li>
																		<input id="a-6" class="checkbox-custom nearby" type="checkbox" value="Fire Station" name="nearby[]" <?php if(in_array("Fire Station", $near_array))echo "checked" ?>>
																		<label for="a-6" class="checkbox-custom-label">Fire Station</label>
																	</li>
																	<li>
																		<input id="a-7" class="checkbox-custom nearby" type="checkbox" value="Police Station" name="nearby[]" <?php if(in_array("Police Station", $near_array))echo "checked" ?>>
																		<label for="a-7" class="checkbox-custom-label">Police Station</label>
																	</li>
																	<li>
																		<input id="a-8" class="checkbox-custom nearby" type="checkbox" value="Railway" name="nearby[]" <?php if(in_array("Railway", $near_array))echo "checked" ?>>
																		<label for="a-8" class="checkbox-custom-label">Railway</label>
																	</li>
																	<li>
																		<input id="a-9" class="checkbox-custom nearby" type="checkbox" value="Metro" name="nearby[]" <?php if(in_array("Metro", $near_array))echo "checked" ?>>
																		<label for="a-9" class="checkbox-custom-label">Metro</label>
																	</li>
																	<li>
																		<input id="a-10" class="checkbox-custom nearby" type="checkbox" value="Bus Station" name="nearby[]" <?php if(in_array("Bus Station", $near_array))echo "checked" ?>>
																		<label for="a-10" class="checkbox-custom-label">Bus Station</label>
																	</li>
																	<li>
																		<input id="a-11" class="checkbox-custom nearby" type="checkbox" value="Banquet Hall" name="nearby[]" <?php if(in_array("Banquet Hall", $near_array))echo "checked" ?>>
																		<label for="a-11" class="checkbox-custom-label">Banquet Hall</label>
																	</li>
																	<li>
																		<input id="a-12" class="checkbox-custom nearby" type="checkbox" value="Community Park/Garden" name="nearby[]" <?php if(in_array("Community Park/Garden", $near_array))echo "checked" ?>>
																		<label for="a-12" class="checkbox-custom-label">Community Park/Garden</label>
																	</li>
																	<li>
																		<input id="a-13" class="checkbox-custom nearby" type="checkbox" value="Salon" name="nearby[]" <?php if(in_array("Salon", $near_array))echo "checked" ?>>
																		<label for="a-13" class="checkbox-custom-label">Salon</label>
																	</li>
																	<li>
																		<input id="a-14" class="checkbox-custom nearby" type="checkbox" value="Shops" name="nearby[]" <?php if(in_array("Shops", $near_array))echo "checked" ?>>
																		<label for="a-14" class="checkbox-custom-label">Shops</label>
																	</li>
																	<li>
																		<input id="a-15" class="checkbox-custom nearby" type="checkbox" value="Airport" name="nearby[]" <?php if(in_array("Airport", $near_array))echo "checked" ?>>
																		<label for="a-15" class="checkbox-custom-label">Airport</label>
																	</li>
																</ul>
																
															</div>
													</div>

										
													<div class="form-group col-md-12 mt-3">
															<label>Amenities</label>
															@php($ame_array = $detailes["data"]["amenities"])
															<div class="o-features">
																<ul class="no-ul-list third-row">
																	<li>
																		<input id="am-1" class="checkbox-custom amenities" type="checkbox" value="Air Condition" name="amenities[]" <?php if(in_array("Air Condition", $ame_array))echo "checked" ?>>
																		<label for="am-1" class="checkbox-custom-label">Air Condition</label>
																	</li>
																	<li>
																		<input id="am-2" class="checkbox-custom amenities" type="checkbox" value="Heating" name="amenities[]" <?php if(in_array("Heating", $ame_array))echo "checked" ?>>
																		<label for="am-2" class="checkbox-custom-label">Heating</label>
																	</li>
																	<li>
																		<input id="am-3" class="checkbox-custom amenities" type="checkbox" value="Wi-Fi" name="amenities[]" <?php if(in_array("Wi-Fi", $ame_array))echo "checked" ?>>
																		<label for="am-3" class="checkbox-custom-label">Wi-Fi</label>
																	</li>
																	<li>
																		<input id="am-4" class="checkbox-custom amenities" type="checkbox" value="Microwave" name="amenities[]" <?php if(in_array("Microwave", $ame_array))echo "checked" ?>>
																		<label for="am-4" class="checkbox-custom-label">Microwave</label>
																	</li>
																	<li>
																		<input id="am-5" class="checkbox-custom amenities" type="checkbox" value="Refrigerator" name="amenities[]" <?php if(in_array("Refrigerator", $ame_array))echo "checked" ?>>
																		<label for="am-5" class="checkbox-custom-label">Refrigerator</label>
																	</li>
																	<li>
																		<input id="am-6" class="checkbox-custom amenities" type="checkbox" value="Smoking Allow" name="amenities[]" <?php if(in_array("Smoking Allow", $ame_array))echo "checked" ?>>
																		<label for="am-6" class="checkbox-custom-label">Smoking Allow</label>
																	</li>
																	<li>
																		<input id="am-7" class="checkbox-custom amenities" type="checkbox" value="Terrace" name="amenities[]" <?php if(in_array("Terrace", $ame_array))echo "checked" ?>>
																		<label for="am-7" class="checkbox-custom-label">Terrace</label>
																	</li>
																	<li>
																		<input id="am-8" class="checkbox-custom amenities" type="checkbox" value="Balcony" name="amenities[]" <?php if(in_array("Balcony", $ame_array))echo "checked" ?>>
																		<label for="am-8" class="checkbox-custom-label">Balcony</label>
																	</li>
																	<li>
																		<input id="am-9" class="checkbox-custom amenities" type="checkbox" value="Parking" name="amenities[]" <?php if(in_array("Parking", $ame_array))echo "checked" ?>>
																		<label for="am-9" class="checkbox-custom-label">Parking</label>
																	</li>
																	<li>
																		<input id="am-10" class="checkbox-custom amenities" type="checkbox" value="Garage" name="amenities[]" <?php if(in_array("Garage", $ame_array))echo "checked" ?>>
																		<label for="am-10" class="checkbox-custom-label">Garage</label>
																	</li>
																	<li>
																		<input id="am-11" class="checkbox-custom amenities" type="checkbox" value="Power Back Up" name="amenities[]" <?php if(in_array("Power Back Up", $ame_array))echo "checked" ?>>
																		<label for="am-11" class="checkbox-custom-label">Power Back Up</label>
																	</li>
																	<li>
																		<input id="am-12" class="checkbox-custom amenities" type="checkbox" value="Security" name="amenities[]" <?php if(in_array("Security", $ame_array))echo "checked" ?>>
																		<label for="am-12" class="checkbox-custom-label">Security</label>
																	</li>
																	<li>
																		<input id="am-13" class="checkbox-custom amenities" type="checkbox" value="Lift" name="amenities[]" <?php if(in_array("Lift", $ame_array))echo "checked" ?>>
																		<label for="am-13" class="checkbox-custom-label">Lift</label>
																	</li>
																	<li>
																		<input id="am-14" class="checkbox-custom amenities" type="checkbox" value="Swimming Pool" name="amenities[]" <?php if(in_array("Swimming Pool", $ame_array))echo "checked" ?>>
																		<label for="am-14" class="checkbox-custom-label">Swimming Pool</label>
																	</li>
																	<li>
																		<input id="am-15" class="checkbox-custom amenities" type="checkbox" value="Gym" name="amenities[]" <?php if(in_array("Gym", $ame_array))echo "checked" ?>>
																		<label for="am-15" class="checkbox-custom-label">Gym</label>
																	</li>
																	<li>
																		<input id="am-16" class="checkbox-custom amenities" type="checkbox" value="Laundry Service" name="amenities[]" <?php if(in_array("Laundry Service", $ame_array))echo "checked" ?>>
																		<label for="am-16" class="checkbox-custom-label">Laundry Service</label>
																	</li>
																	<li>
																		<input id="am-17" class="checkbox-custom amenities" type="checkbox" value="Kids Play Area" name="amenities[]" <?php if(in_array("Kids Play Area", $ame_array))echo "checked" ?>>
																		<label for="am-17" class="checkbox-custom-label">Kids Play Area</label>
																	</li>
																	<li>
																		<input id="am-18" class="checkbox-custom amenities" type="checkbox" value="Maintenance Staff" name="amenities[]" <?php if(in_array("Maintenance Staff", $ame_array))echo "checked" ?>>
																		<label for="am-18" class="checkbox-custom-label">Maintenance Staff</label>
																	</li>
																	<li>
																		<input id="am-19" class="checkbox-custom amenities" type="checkbox" value="Waste Disposal" name="amenities[]" <?php if(in_array("Waste Disposal", $ame_array))echo "checked" ?>>
																		<label for="am-19" class="checkbox-custom-label">Waste Disposal</label>
																	</li>
																</ul>
															</div>
															
													</div>

												
										</div>
									</div>
									
								</div>
								
							</div>
<!-- 
							<div class="dashboard-wraper mt-5">
								<div class="form-submit">	
									<h3>Property pictures*</h3>
									<div class="submit-section">
										<div class="form-row">
												<div class="form-group col-md-12">
													<label><span style='font-size:15px;color:red'>Please select max 10 images for above property.</span></label><br>
													<input type="file" name="showcaseImg[]" accept=".jpeg, .jpg" required multiple>
												</div>
												
												
										</div>
									</div>
								</div>
							</div> -->
								<div class="form-group col-lg-12 col-md-12 mt-4">
									<button class="btn btn-theme" type="submit">Update property</button>
								</div>
								<!-- <div id="add_property_loader">
									<span id="load_text"></span>
									<div class="lds-ellipsis"><div></div><div></div><div></div><div></div></div>
								</div> -->
							</form>

							<!-- <button id="save_prop" class="btn btn-primary mt-3">Save Property</button> -->
							
						</div>
						
					</div>
				</div>
			</section>
			<!-- ============================ User Dashboard End ================================== -->
			
			
			<a id="back2Top" class="top-scroll" title="Back to top" href="#"><i class="ti-arrow-up"></i></a>
			

		</div>
@endsection
@section('custom_js')
<script src="https://cdn.ckeditor.com/4.16.2/standard/ckeditor.js"></script>

<script type="text/javascript">
			$(document).ready(function(){
				// CKEDITOR.replace( 'editor1' );
                
                // var editordata = {{$detailes["data"]["summary"]}};
                // CKEDITOR.instances['editor1'].setData(<?php echo '"' .$detailes["data"]["summary"]. '"' ?>);

				$('#location_loader').css("display","none");
				

				$('#search_add').on("click",function(event){

					$('#location_loader').css("display","block");

					var add = $('#address').val().trim();
					var city = $('#city').val().trim();
					var state = $('#state').val().trim();
					var code = $('#pincode').val().trim();

					event.preventDefault();

					if(add !== "" && city !== ""  && state !== ""  && code !== "")
						{
							$('#lc_error').empty();

							var address = add+','+city+','+state+','+code;
							var enc_add = encodeURIComponent(address);
							// console.log(enc_add.toString());
							$.ajax({
								url: "https://maps.googleapis.com/maps/api/geocode/json?",
								method: "GET",
								data: {
									address : enc_add.toString(),
									region : "in",
									key : "AIzaSyCdIt3TCB_dX-zwakFCEjblXNxx3_ChCaw"
									},
								dataType:"json",
							}).done(function(data){
								// console.log(data.result);
								if(data.status == "OK")
								{	
									$("#map_box").empty();
									$('#map_box').append("<h5>Move the marker to set desired location of property on map.</h5><div class='map-container'><div id='singleMap'></div></div>");

									var lat = data.results[0].geometry.location.lat;
									var long = data.results[0].geometry.location.lng;

									// var lat_lan = lat+","+long;
									
									$('#latitude').val(lat);
									$('#longitude').val(long);
									// console.log(lat,long);

									var map = L.map('singleMap',{dragging:true}).setView([lat, long], 15);

									L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
										attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
									}).addTo(map);

									L.marker([lat, long],{draggable:true}).addTo(map).on("moveend",function(){
											var lat_lan = Object.values(this.getLatLng());
											// console.log(Object.values(this.getLatLng()));
											// console.log(lat_lan);
											
											$('#latitude').val(lat_lan[0]);
											$('#longitude').val(lat_lan[1]);
										});

										$('#location_loader').css("display","none");
										
								}
								else
								{
									$('#lc_error').html("unable to find address");
									$('#location_loader').css("display","none");
								}
							}).fail(function(err) {
								console.log(err);
								$('#location_loader').css("display","none");
							});
						}
						else
						{
							$('#lc_error').html("<br><p>Please enter all fields of address!</p>");
							$('#location_loader').css("display","none");
						}
				});

				
				
			});
			
</script>
@endsection