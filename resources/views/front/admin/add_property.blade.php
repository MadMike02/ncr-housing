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
											<form id="add_prop_form" action="{{route('save_sort_prop')}}" method="post" enctype="multipart/form-data">
											@csrf
											<!-- Basic Information -->
											<div class="form-submit">
												<h3>Basic Information</h3>
												<!-- @php(htmlspecialchars_decode('<ul>\n\t<li>hh</li>\n\t<li>hg</li>\n\t<li>hg</li>\n</ul>\n'))
											 -->

												<h6 class="ml-2" style='color:red'><b>NOTE: </b>Fields marked with * are mandatory</h6>
												<div class="submit-section">
													<div class="form-row">

														<div class="form-group col-md-12">
															<label>Property Title*</label>
															<input type="text" class="form-control" name="title" placeholder="Some Nice title" required>
														</div>

														<div class="form-group col-md-6">
															<label>Availability*</label>
															<select class="form-control" name="availability" required>
																<option value="">--Select Availability--</option>
																<option value="Rent">For Rent</option>
																<option value="Sale">For Sale</option>
															</select>
														</div>

														<div class="form-group col-md-6">
															<label>Property Overview*</label>
															<select id="overview" class="form-control" name="propertyOverview" required>
															<option value="">--Select Property Overview--</option>
																<option value="Under Construction">Under Construction</option>
																<option value="Ready To Move">Ready To Move</option>
															</select>
														</div>

														<div class="form-group col-md-6">
															<label>Property Type*</label>
															<select class="form-control" name="propertyType" required>
																<option value="">--Select Property Type--</option>
																<option value="Plot">Plot</option>
																<option value="Shop">Shop</option>
																<option value="Flat">Flat</option>
																<option value="Villa">Villa</option>
																<option value="Bank Morgage">Bank Morgage</option>
																<option value="Independent House">Independent House</option>
															</select>
														</div>

														<div class="form-group col-md-6">
															<label>Price per Sq.Ft/ Sq.Yards (INR)*</label>
															<input type="text" class="form-control" placeholder="Price in INR" name="price" required>
														</div>

														<div class="form-group col-md-6">
															<label>buildYear*</label>
															<input type="number" class="form-control" min="1900" max="2099" step="1" value="<?php echo date('Y');?>" name="buildYear" required>
														</div>

														<div class="form-group col-md-12">
															<label>Dimensions/ Area*</label>
															<div class="row">

																<div class="col-4">
																	<lable class="ml-1 mb-3"><b>Configuration* (BHKs)</b></label>
																	<input type="text" class="form-control" placeholder="BHKs" name="Config[]" required>
																</div>
																<div class="col-4">
																	<lable class="ml-1 mb-3"><b>Builtup Area (Sq.Ft/ Sq.Yards)*</b></label>
																	<input type="text" class="form-control" placeholder="Sq.Ft" name="dimensions[]" required>
																</div>

																<div clas="col-4">
																	<label class="ml-1 mb-3"><b>Floor Plans pic</b></label><br>
																	<input type="file" name="floor_file[]" <?php if($_COOKIE["role"] != "customer"){echo "required";} ?>>
																</div>
																<?php if($_COOKIE["role"] != "customer"){
																?>

																<div class="col-12 w-100 mt-2 mb-2"></div>
																@for ($i = 1; $i < 5; $i++)
																<div class="col-4 mt-2">
																	<input id=<?php echo "'config".$i."'" ?> type="text" class="form-control" placeholder="BHKs" name="area[]">
																</div>
																<div class="col-4 mt-2">
																	<input id=<?php echo "'dimen_".$i."'" ?> type="text" class="form-control" placeholder="Sq.Ft" name="area[]">
																</div>
																<div clas="col-4 mt-2">
																	<input id=<?php echo "'dimen_pic_".$i."'" ?> type="file" name="area_pics[]">
																</div>
																<div class="col-12 w-100 mt-2 mb-2"></div>
																@endfor
																<?php
																	}

																?>
															</div>


														</div>

														<div class="form-group col-md-12">
															<label>Summary</label>
															<textarea class="form-control" row="5" name="summary"></textarea>

														</div>

													</div>
												</div>
											</div>

											<!-- Gallery -->
											<div class="form-submit">
												<h3>Front Property picture*</h3>
												<div class="submit-section">
													<div class="form-row">

														<div class="form-group col-md-12">
															<label><span style='font-size:15px;color:red'>This image will be shown as front view in lists</span></label><br>
															<input id="bannerImg" type="file" accept=".jpeg, .jpg" name="bannerImg" required>
														</div>

													</div>
												</div>
											</div>

											<!-- Location -->
											<div class="form-submit">
												<h3>Location</h3>
												<div class="submit-section">
													<div class="form-row">

														<div class="form-group col-md-6">
															<label>Address*</label>
															<input id="address" type="text" class="form-control" name="address" required>
														</div>

														<div class="form-group col-md-6">
															<label>City*</label>
															<input id="city" type="text" class="form-control" name="city" value="Ghaziabad" required>
														</div>

														<div class="form-group col-md-6">
															<label>State*</label>
															<input id="state" type="text" class="form-control" name="state" value="Uttar Pradesh" required>
														</div>

														<div class="form-group col-md-6">
															<label>pincode*</label>
															<input id="pincode" type="text" class="form-control" name="pincode" required>
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

											<input id="latitude" type="hidden" name="latitude">
											<input id="longitude" type="hidden" name="longitude">

											<div class="form-group col-md-12 mt-3">
															<label>nearby Locations</label>
															<div class="o-features">
																<ul class="no-ul-list third-row">
																	<li>
																		<input id="a-1" class="checkbox-custom nearby" type="checkbox" value="Hospital" name="nearby[]">
																		<label for="a-1" class="checkbox-custom-label">Hospital</label>
																	</li>
																	<li>
																		<input id="a-2" class="checkbox-custom nearby" type="checkbox" value="Mall" name="nearby[]">
																		<label for="a-2" class="checkbox-custom-label">Mall</label>
																	</li>
																	<li>
																		<input id="a-3" class="checkbox-custom nearby" type="checkbox" value="Coffee Lounge & Restaurants" name="nearby[]">
																		<label for="a-3" class="checkbox-custom-label">Coffee Lounge & Restaurants</label>
																	</li>
																	<li>
																		<input id="a-4" class="checkbox-custom nearby" type="checkbox" value="Bank & ATM" name="nearby[]">
																		<label for="a-4" class="checkbox-custom-label">Bank & ATM</label>
																	</li>
																	<li>
																		<input id="a-5" class="checkbox-custom nearby" type="checkbox" value="Shopping Mart" name="nearby[]">
																		<label for="a-5" class="checkbox-custom-label">Shopping Mart</label>
																	</li>
																	<li>
																		<input id="a-6" class="checkbox-custom nearby" type="checkbox" value="Fire Station" name="nearby[]">
																		<label for="a-6" class="checkbox-custom-label">Fire Station</label>
																	</li>
																	<li>
																		<input id="a-7" class="checkbox-custom nearby" type="checkbox" value="Police Station" name="nearby[]">
																		<label for="a-7" class="checkbox-custom-label">Police Station</label>
																	</li>
																	<li>
																		<input id="a-8" class="checkbox-custom nearby" type="checkbox" value="Railway" name="nearby[]">
																		<label for="a-8" class="checkbox-custom-label">Railway</label>
																	</li>
																	<li>
																		<input id="a-9" class="checkbox-custom nearby" type="checkbox" value="Metro" name="nearby[]">
																		<label for="a-9" class="checkbox-custom-label">Metro</label>
																	</li>
																	<li>
																		<input id="a-10" class="checkbox-custom nearby" type="checkbox" value="Bus Station" name="nearby[]">
																		<label for="a-10" class="checkbox-custom-label">Bus Station</label>
																	</li>
																	<li>
																		<input id="a-11" class="checkbox-custom nearby" type="checkbox" value="Banquet Hall" name="nearby[]">
																		<label for="a-11" class="checkbox-custom-label">Banquet Hall</label>
																	</li>
																	<li>
																		<input id="a-12" class="checkbox-custom nearby" type="checkbox" value="Community Park/Garden" name="nearby[]">
																		<label for="a-12" class="checkbox-custom-label">Community Park/Garden</label>
																	</li>
																	<li>
																		<input id="a-13" class="checkbox-custom nearby" type="checkbox" value="Salon" name="nearby[]">
																		<label for="a-13" class="checkbox-custom-label">Salon</label>
																	</li>
																	<li>
																		<input id="a-14" class="checkbox-custom nearby" type="checkbox" value="Shops" name="nearby[]">
																		<label for="a-14" class="checkbox-custom-label">Shops</label>
																	</li>
																	<li>
																		<input id="a-15" class="checkbox-custom nearby" type="checkbox" value="Airport" name="nearby[]">
																		<label for="a-15" class="checkbox-custom-label">Airport</label>
																	</li>
																</ul>
																<!-- OTHERS :
																<div id="other_features">
																	<input class="form-control mt-3" type="text" placeholder="Other than above features" name="nearby[]">
																	<button class="btn btn-danger" type="button">Remove<button>
																</div>
																<button id="add_other_features" type="button" class="btn btn-info mt-3">ADD MORE</button> -->
															</div>
													</div>

  												<?php if($_COOKIE["role"] != "customer")
												  {
												?>
													<div class="form-group col-md-12 mt-3">
															<label>Amenities</label>
															<div class="o-features">
																<ul class="no-ul-list third-row">
																	<li>
																		<input id="am-1" class="checkbox-custom amenities" type="checkbox" value="Air Condition" name="amenities[]">
																		<label for="am-1" class="checkbox-custom-label">Air Condition</label>
																	</li>
																	<li>
																		<input id="am-2" class="checkbox-custom amenities" type="checkbox" value="Heating" name="amenities[]">
																		<label for="am-2" class="checkbox-custom-label">Heating</label>
																	</li>
																	<li>
																		<input id="am-3" class="checkbox-custom amenities" type="checkbox" value="Wi-Fi" name="amenities[]">
																		<label for="am-3" class="checkbox-custom-label">Wi-Fi</label>
																	</li>
																	<li>
																		<input id="am-4" class="checkbox-custom amenities" type="checkbox" value="Microwave" name="amenities[]">
																		<label for="am-4" class="checkbox-custom-label">Microwave</label>
																	</li>
																	<li>
																		<input id="am-5" class="checkbox-custom amenities" type="checkbox" value="Refrigerator" name="amenities[]">
																		<label for="am-5" class="checkbox-custom-label">Refrigerator</label>
																	</li>
																	<li>
																		<input id="am-6" class="checkbox-custom amenities" type="checkbox" value="Smoking Allow" name="amenities[]">
																		<label for="am-6" class="checkbox-custom-label">Smoking Allow</label>
																	</li>
																	<li>
																		<input id="am-7" class="checkbox-custom amenities" type="checkbox" value="Terrace" name="amenities[]">
																		<label for="am-7" class="checkbox-custom-label">Terrace</label>
																	</li>
																	<li>
																		<input id="am-8" class="checkbox-custom amenities" type="checkbox" value="Balcony" name="amenities[]">
																		<label for="am-8" class="checkbox-custom-label">Balcony</label>
																	</li>
																	<li>
																		<input id="am-9" class="checkbox-custom amenities" type="checkbox" value="Parking" name="amenities[]">
																		<label for="am-9" class="checkbox-custom-label">Parking</label>
																	</li>
																	<li>
																		<input id="am-10" class="checkbox-custom amenities" type="checkbox" value="Garage" name="amenities[]">
																		<label for="am-10" class="checkbox-custom-label">Garage</label>
																	</li>
																	<li>
																		<input id="am-11" class="checkbox-custom amenities" type="checkbox" value="Power Back Up" name="amenities[]">
																		<label for="am-11" class="checkbox-custom-label">Power Back Up</label>
																	</li>
																	<li>
																		<input id="am-12" class="checkbox-custom amenities" type="checkbox" value="Security" name="amenities[]">
																		<label for="am-12" class="checkbox-custom-label">Security</label>
																	</li>
																	<li>
																		<input id="am-13" class="checkbox-custom amenities" type="checkbox" value="Lift" name="amenities[]">
																		<label for="am-13" class="checkbox-custom-label">Lift</label>
																	</li>
																	<li>
																		<input id="am-14" class="checkbox-custom amenities" type="checkbox" value="Swimming Pool" name="amenities[]">
																		<label for="am-14" class="checkbox-custom-label">Swimming Pool</label>
																	</li>
																	<li>
																		<input id="am-15" class="checkbox-custom amenities" type="checkbox" value="Gym" name="amenities[]">
																		<label for="am-15" class="checkbox-custom-label">Gym</label>
																	</li>
																	<li>
																		<input id="am-16" class="checkbox-custom amenities" type="checkbox" value="Laundry Service" name="amenities[]">
																		<label for="am-16" class="checkbox-custom-label">Laundry Service</label>
																	</li>
																	<li>
																		<input id="am-17" class="checkbox-custom amenities" type="checkbox" value="Kids Play Area" name="amenities[]">
																		<label for="am-17" class="checkbox-custom-label">Kids Play Area</label>
																	</li>
																	<li>
																		<input id="am-18" class="checkbox-custom amenities" type="checkbox" value="Maintenance Staff" name="amenities[]">
																		<label for="am-18" class="checkbox-custom-label">Maintenance Staff</label>
																	</li>
																	<li>
																		<input id="am-19" class="checkbox-custom amenities" type="checkbox" value="Waste Disposal" name="amenities[]">
																		<label for="am-19" class="checkbox-custom-label">Waste Disposal</label>
																	</li>
																</ul>
															</div>
													</div>
  												<?php
												  }
												  ?>

											<!-- <div class="form-group col-lg-12 col-md-12 mt-3">
												<label>GDPR Agreement *</label>
												<ul class="no-ul-list">
													<li>
														<input id="check" class="checkbox-custom" type="checkbox">
														<label for="check" class="checkbox-custom-label">I consent to having this website store my submitted information so they can respond to my inquiry.</label>
													</li>
												</ul>
											</div> -->


											<!-- <button id="cordi" class="btn btn-info">CORDINATE</button> -->

										</div>
									</div>

								</div>

							</div>

							<div class="dashboard-wraper mt-5">
								<div class="form-submit">
									<h3>Property pictures*</h3>
									<div class="submit-section">
										<div class="form-row">
												<div class="form-group col-md-12">
													<label><span style='font-size:15px;color:red'>Please select max 10 images for above property.</span></label><br>
													<input id="multi_file" type="file" name="showcaseImg[]" accept=".jpeg, .jpg" required multiple>
                          <br>
                          <span id="multi_file_mess mt-4"></span>
												</div>
												<!-- <input type="submit" value="Save Images" class="btn btn-warning"> -->

										</div>
									</div>
								</div>
							</div>

              <div class="dashboard-wraper mt-5">
								<div class="form-submit">
									<h3>Others Documents*</h3>
									<div class="submit-section">
										<div class="form-row">
												<div class="form-group col-md-12">
													<label><span style='font-size:15px;color:red'>Property Brochure*</span></label><br>
													<input type="file" name="propBrochure" accept=".pdf" required multiple>
												</div>

                        <div class="form-group col-md-12">
													<label><span style='font-size:15px;color:red'>Price list*</span></label><br>
													<input type="file" name="priceList" accept=".jpeg, .jpg, .pdf" required multiple>
												</div>
												<!-- <input type="submit" value="Save Images" class="btn btn-warning"> -->

										</div>
									</div>
								</div>
							</div>

								<div class="form-group col-lg-12 col-md-12 mt-4">
									<button id="save_prop" class="btn btn-theme" type="submit">Save property</button>
								</div>
								<div id="add_property_loader">
									<span id="load_text"></span>
									<div class="lds-ellipsis"><div></div><div></div><div></div><div></div></div>
								</div>
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
	$(function(){
    $('#save_prop').on("click",function(event){

        var numFiles = $('#multi_file')[0].files.length;
        if(numFiles > 10)
        {
          // $('#multi_file_mess').append('<p style="color:red">Please add max 10 files only.</p>');

          swal({
            title: "IMAGE ERROR!",
            text: "Please select Max 10 files only!!",
            icon: "error",
          });

          event.preventDefault();
          // console.log(numFiles);
        }
        else {
          $('form').submit();
        }

    });

		$('#dimen_1').on("blur",function(){
				var value = $(this).val().trim();
				image_required(1,value);
			});

		$('#dimen_2').on("blur",function(){
			var value = $(this).val().trim();
			image_required(2,value);
		});

		$('#dimen_3').on("blur",function(){
			var value = $(this).val().trim();
			image_required(3,value);
		});

		$('#dimen_4').on("blur",function(){
			var value = $(this).val().trim();
			image_required(4,value);
		});

		$('#dimen_5').on("blur",function(){
			var value = $(this).val().trim();
			image_required(5,value);
		});

		function image_required(i,value)
		{
			console.log(value);
			if(value != "")
				{
					$('#dimen_pic_'+i).attr("required","required");
					console.log($('#dimen_pic_'+i));
				}
				else{
					$('#dimen_pic_'+i).removeAttr("required");
					console.log($('#dimen_pic_'+i));
				}
		}



	});

			$(document).ready(function(){
				// CKEDITOR.replace( 'editor1' );
				$('#location_loader,#add_property_loader').css("display","none");

				$('#add_prop_form').on("submit",function(){
					$('#add_property_loader').css("display","block");
				});

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
