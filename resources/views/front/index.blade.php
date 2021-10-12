@extends('front.layout.main.main')
		
@section('custom_css')
		<style type="text/css">
			.hover_ancor:hover
			{
				color: #FFC107 !important;
			}
			.active-new
			{
				background-color: #FFC107 !important;
				color: white !important;
			}
			.property-search-type label:hover
			{
				background-color: #FFC107 !important;
				color: white !important;
			}
		</style>
@endsection


@section('content')
        <!-- ============================ Hero Banner  Start================================== -->
			<div class="image-cover hero-banner" style="background:url({{asset('assets/site/img/frontBack4.jpg')}}) no-repeat;object-fit:cover" data-overlay="4">
				<div class="container">
					
					<h1 class="big-header-capt mb-0">Find Your <span style="color: #FFC107">Dream</span> Property</h1>
					<p class="text-center mb-5">We have to bestest properties available in NCR</p>
					<!-- Type -->
					<form action="{{route('home_filter')}}" method="post">
						@csrf
					<div class="property-search-type">
						<label class="active-new"><input class="first-tab" name="tab" checked="checked" type="radio" value="all">Any Status</label>
						<label><input name="tab" type="radio" value="sale">For Sale</label>
						<label><input name="tab" type="radio" value="rent">For Rent</label>
						<div class="property-search-type-arrow"></div>
					</div>
					<div class="full-search-2 eclip-search italian-search hero-search-radius">
						<div class="hero-search-content">
							
							<div class="row">
							
							<div class="col-lg-3 col-md-3 col-sm-12 small-padd">
									<div class="form-group">
										<div class="range-slider">
											<!-- <label>Custom Price</label> -->
											<!-- <i class="fas fa-rupee-sign"></i> -->
											<div data-min="0" data-max="50000" data-min-name="min_price" data-max-name="max_price" data-unit="INR" class="range-slider-ui-home ui-slider" aria-disabled="false"></div>
											<div class="clearfix"></div>
											<!-- <input id="price_range_min" type="hidden" name="price_min" type="number" min=0>
											<input id="price_range_max" type="hidden" name="price_max" type="number" min=0> -->
										</div>
									</div>
								</div>
	
								
								<div class="col-lg-3 col-md-3 col-sm-12 small-padd">
									<div class="form-group">
										<div class="input-with-icon b-l b-r">
											<select id="ptypes2" class="form-control" name="pType">
												<option value="">--Select PropertyType--</option>
												<option value="Plot">Plot</option>
												<option value="Shop">Shop</option>
												<option value="Flat">Flat</option>
												<option value="Villa">Villa</option>
												<option value="Bank Morgage">Bank Morgage</option>
												<option value="Independent House">Independent House</option>
											</select>
											<i class="ti-briefcase"></i>
										</div>
									</div>
								</div>

								
								<div class="col-lg-3 col-md-3 col-sm-12 small-padd">
									<div class="form-group">
										<div class="input-with-icon b-l b-r">
											<select id="location" class="form-control" name="city">
												<option value="">--Select city--</option>
												<option value="Ghaziabad">Ghaziabad</option>
												<option value="Noida">Noida</option>
												<option value="Gurugram">Gurugram</option>
												<option value="Meerut">Meerut</option>
												
											</select>
											<i class="ti-location-pin"></i>
										</div>
									</div>
								</div>
								
								<!-- <div class="col-lg-1 col-md-1 col-sm-12 small-padd">
									<div class="form-group">
										<a role="button" class="collapsed ad-search" data-toggle="collapse" href="#advance-search" aria-expanded="false" aria-controls="advance-search"><i class="ti-align-center"></i></a>
									</div>
								</div> -->
								
								<div class="col-lg-3 col-md-3 col-sm-12 small-padd text-center">
									<div class="form-group">
										<button type="submit" class="btn search-btn" style="background-color: #FFC107">Search</button>
									</div>
								</div>
								
							</div>
							<!-- <div class="collapse" id="advance-search" aria-expanded="false" role="banner"> -->
							
								<!-- row -->
								<!-- <div class="row"> -->
								
									<!-- <div class="col-lg-4 col-md-4 col-sm-12">
										<div class="form-group">
											<div class="input-with-icon">
												<select id="town" class="form-control">
													<option value="">&nbsp;</option>
													<option value="1">Any Town</option>
													<option value="2">Toronto</option>
													<option value="3">Montreal</option>
													<option value="4">Alberta</option>
													<option value="5">Ontario</option>
													<option value="6">Ottawa</option>
												</select>
												<i class="ti-location-pin"></i>
											</div>
										</div>
									</div> -->
									
									<!-- <div class="col-lg-4 col-md-4 col-sm-12">
										<div class="form-group">
											<div class="input-with-icon">
												<select id="bedrooms" class="form-control">
													<option value="">&nbsp;</option>
													<option value="1">1</option>
													<option value="2">2</option>
													<option value="3">3</option>
													<option value="4">4</option>
													<option value="5">5</option>
												</select>
												<i class="fas fa-bed"></i>
											</div>
										</div>
									</div> -->
									
									<!-- <div class="col-lg-4 col-md-4 col-sm-12">
										<div class="form-group">
											<div class="input-with-icon">
												<select id="bathrooms" class="form-control">
													<option value="">&nbsp;</option>
													<option value="1">1</option>
													<option value="2">2</option>
													<option value="3">3</option>
													<option value="4">4</option>
													<option value="5">5</option>
												</select>
												<i class="fas fa-bath"></i>
											</div>
										</div>
									</div> -->
									
								<!-- </div> -->
								<!-- /row -->
								
								<!-- row -->
								<!-- <div class="row">
								
									<div class="col-lg-12 col-md-12 col-sm-12 mt-5">
										<h4 class="text-dark">Amenities & Features</h4>
										<ul class="no-ul-list third-row">
											<li>
												<input id="a-1" class="checkbox-custom" name="a-1" type="checkbox">
												<label for="a-1" class="checkbox-custom-label">Air Condition</label>
											</li>
											<li>
												<input id="a-2" class="checkbox-custom" name="a-2" type="checkbox">
												<label for="a-2" class="checkbox-custom-label">Bedding</label>
											</li>
											<li>
												<input id="a-3" class="checkbox-custom" name="a-3" type="checkbox">
												<label for="a-3" class="checkbox-custom-label">Heating</label>
											</li>
											<li>
												<input id="a-4" class="checkbox-custom" name="a-4" type="checkbox">
												<label for="a-4" class="checkbox-custom-label">Internet</label>
											</li>
											<li>
												<input id="a-5" class="checkbox-custom" name="a-5" type="checkbox">
												<label for="a-5" class="checkbox-custom-label">Microwave</label>
											</li>
											<li>
												<input id="a-6" class="checkbox-custom" name="a-6" type="checkbox">
												<label for="a-6" class="checkbox-custom-label">Smoking Allow</label>
											</li>
											<li>
												<input id="a-7" class="checkbox-custom" name="a-7" type="checkbox">
												<label for="a-7" class="checkbox-custom-label">Terrace</label>
											</li>
											<li>
												<input id="a-8" class="checkbox-custom" name="a-8" type="checkbox">
												<label for="a-8" class="checkbox-custom-label">Balcony</label>
											</li>
											<li>
												<input id="a-9" class="checkbox-custom" name="a-9" type="checkbox">
												<label for="a-9" class="checkbox-custom-label">Icon</label>
											</li>
											<li>
												<input id="a-10" class="checkbox-custom" name="a-10" type="checkbox">
												<label for="a-10" class="checkbox-custom-label">Wi-Fi</label>
											</li>
											<li>
												<input id="a-11" class="checkbox-custom" name="a-11" type="checkbox">
												<label for="a-11" class="checkbox-custom-label">Beach</label>
											</li>
											<li>
												<input id="a-12" class="checkbox-custom" name="a-12" type="checkbox">
												<label for="a-12" class="checkbox-custom-label">Parking</label>
											</li>
										</ul>
									</div>
									
								</div> -->
								<!-- /row -->
								
							<!-- </div> -->
							
						</div>
					</div>
					</form>
				</div>
			</div>
			<!-- ============================ Hero Banner End ================================== -->
			
			<!-- ============================ Latest Property For Sale Start ================================== -->
			<section class="gray" style="background-color:#FFF8EA">
				<div class="container">
				
					<div class="row">
						<div class="col-lg-12 col-md-12">
							<div class="sec-heading center mb-3">
								<h2><span style="color: #FFC107">Featured</span> Properties</h2>
								<p>Find new & featured property located in your local city.</p>
							</div>
						</div>
					</div>
					
					<div class="row">
						<div class="col-lg-12 col-md-12">
							<div class="property-slide">
							@if($response2["status"] != "error")
							@for ($i = 0; $i < count($response2["data"]); $i++)
                                    <!-- Single Property -->
								<div class="single-items">
									<div class="property_item classical-list">
										<div class="image">
											<a href='/property/detailed/{{$response2["data"][$i]["_id"]}}'>
												<img src='{{$response2["data"][$i]["gallery"]["bannerImg"]["imgUrl"]}}' alt="latest property" class="img-fluid" style='width:100%;height:270px;object-fit:cover'>
											</a>
											<span class="tag_t" style="background-color: grey;">{{$response2["data"][$i]["availability"]}}</span> 
										</div>
										<div class="proerty_content">
											<div class="proerty_text">
											  <h3 class="captlize"><a href='/property/detail/{{$response2["data"][$i]["_id"]}}' class="hover_ancor">{{$response2["data"][$i]["title"]}}</a></h3>
											  <p class="proerty_price"><i class="fas fa-rupee-sign"></i> {{$response2["data"][$i]["price"]}}</p>
											</div>
											<p class="property_add">{{$response2["data"][$i]["location"]["address"]}} , {{$response2["data"][$i]["location"]["city"]}}</p>
											<div class="property_meta"> 
											  <div class="list-fx-features">
													
													<div class="listing-card-info-icon" style="min-width:100%">
														<span class="inc-fleat inc-type">{{$response["data"][$i]["propertyType"]}}</span>
													</div><br>
													<div class="listing-card-info-icon" style="min-width:100%">
														<span class="inc-fleat inc-area">{{$response2["data"][$i]["dimensions"]}} sqft</span>
													</div>
													
												</div>  
											</div>
											<div class="property_links">
												<a href='/property/detail/{{$response2["data"][$i]["_id"]}}' class="btn btn-theme" style="background-color:#FFC107;border: none;">Request Info</a>
												<a href='/property/detail/{{$response2["data"][$i]["_id"]}}' class="btn btn-theme-light" style="background-color:rgba(255, 193, 7, 0.4);color: grey;border: none;">Property Detail</a>
											</div>
										</div>
									</div>
								</div>
								@endfor	
								@endif
                            </div>
						</div>
					</div>
					
				</div>
			</section>
			<!-- ============================ Latest Property For Sale End ================================== -->
			
			<!-- about us Section-->
			<div class="container-fluid pb-4">
				<div class="row">
					<div class="col-md-6 p-5">
						<img class="img-fluid" src="{{asset('assets/site/img/about.jpg')}}" alt="About-Us" style="box-shadow: 5px 5px 10px rgba(0,0,0,0.3);">
					</div>
					<div class="col-md-6 d-flex align-items-center">
						<div class="col-md-12">
							<div class="col-12 h1">
									<b><span style="color: #FFC107">ABOUT </span>US</b>
							</div>
							<div class="col-12 text-justify">
									Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
									tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
									quis nostr
									Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
									tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
									quis nostr
									Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
									tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
									quis nostr
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- about us section end-->
			
			<!-- ============================ Smart Testimonials ================================== -->
			<section class="image-cover pb-0" style="background:#122947 url(assets/img/gardening.jpg) no-repeat;background-attachment: fixed;">
				<div class="container">
				
					<div class="row">
						<div class="col text-center">
							<div class="sec-heading center" style="color:white">
								<h2><b><span style="color: #FFC107">LATEST </span><span style="color:white">PROPERTIES</span></b></h2>
								<p>Check out the popular latest properties.</p>
								
							</div>
						</div>
					</div>
					
					<div class="container-fluid mt-3">
						<div class="property-slide">
						@if($response["status"] != "error")
						@for ($i = 0; $i < count($response["data"]); $i++)
                                    <!-- Single Property -->
								<div class="single-items">
									<div class="property_item classical-list">
										<div class="image">
											<a href='/property/detailed/{{$response["data"][$i]["_id"]}}'>
												<img src='{{$response["data"][$i]["gallery"]["bannerImg"]["imgUrl"]}}' alt="latest property" class="img-fluid" style='width:100%;height:270px;object-fit:cover'>
											</a>
											<span class="tag_t" style="background-color: grey;">{{$response["data"][$i]["availability"]}}</span> 
										</div>
										<div class="proerty_content">
											<div class="proerty_text">
											  <h3 class="captlize"><a href='/property/detail/{{$response["data"][$i]["_id"]}}' class="hover_ancor">{{$response["data"][$i]["title"]}}</a></h3>
											  <p class="proerty_price"><i class="fas fa-rupee-sign"></i> {{$response["data"][$i]["price"]}}</p>
											</div>
											<p class="property_add">{{$response["data"][$i]["location"]["address"]}} , {{$response["data"][$i]["location"]["city"]}}</p>
											<div class="property_meta"> 
											  <div class="list-fx-features">
													
													<div class="listing-card-info-icon" style="min-width:100%">
														<span class="inc-fleat inc-type">{{$response["data"][$i]["propertyType"]}}</span>
													</div><br><br>
													<div class="listing-card-info-icon" style="min-width:100%">
														<span class="inc-fleat inc-area">{{$response["data"][$i]["dimensions"]}} sqft</span>
													</div>
													
												</div>  
											</div>
											<div class="property_links">
												<a href='/property/detail/{{$response["data"][$i]["_id"]}}' class="btn btn-theme" style="background-color:#FFC107;border: none;">Request Info</a>
												<a href='/property/detail/{{$response["data"][$i]["_id"]}}' class="btn btn-theme-light" style="background-color:rgba(255, 193, 7, 0.4);color: grey;border: none;">Property Detail</a>
											</div>
										</div>
									</div>
								</div>
								@endfor
								@endif
						</div>
					</div>
					
				</div>
			</section>
			<!-- ============================ Smart Testimonials End ================================== -->

			<!-- ============================ Property Location Start ================================== -->
			<section>
				<div class="container">
					<div class="row">
						<div class="col-lg-12 col-md-12">
							<div class="sec-heading center">
								<h2>Check out our <span style="color: #FFC107">Experts</span></h2>
								<p>Feel free to reach them to help you for your dream home.</p>
							</div>
						</div>
					</div>
					
					<div class="row">
						
						<!-- Single Location Listing -->
						<div class="col-12">
							<div class="property-slide">
							@if($response3["status"] != "error")
							@for ($i = 0; $i < count($response3["data"]); $i++)
								<div class="location-listing" style='width:80%;border:none'>
									<div class="location-listing-thumb text-center">
										<a href="javascript:void(0)">
											<img src='{{$response3["data"][$i]["profileImg"]["imgUrl"]}}' class="img-fluid" alt="" style="width:243px;height:205px;object-fit:cover">
										</a>
									</div>
									<div class="location-listing-caption">
										<h3>
											<i class="fas fa-user-tie"></i>
											{{$response3["data"][$i]["fullname"]}}
										</h3>
										<a class="theme-cl" href="javascript:void(0)">
											<i class="fas fa-phone-alt"></i> {{$response3["data"][$i]["contact"]}}
										</a>
										<br>
										<a class="theme-cl" href="javascript:void(0)"><i class="fas fa-envelope"></i> {{$response3["data"][$i]["email"]}}</a>
									</div>
								</div>
								
							@endfor
							@endif
							</div>
						</div>
					</div>
				</div>
			</section>
			<!-- ============================ Property Location End ================================== -->
			
			
			<!-- ongoing projects start-->
			<section class="gray">
				<div class="container">
				
					<div class="row">
						<div class="col-lg-12 col-md-12">
							<div class="sec-heading center mb-3">
								<h2><span style="color: #FFC107"> ONGOING</span> PROJECTS</h2>
								<p>Find new & featured property located in your local city.</p>
							</div>
						</div>
					</div>
					
					<div class="row">
						<div class="col-lg-12 col-md-12">
							<div class="property-slide">
                            @for ($i = 0; $i < 6; $i++)
                                    <!-- Single Property -->
								<div class="single-items">
									<div class="property_item classical-list">
										<div class="image">
											<a href="single-property-3.html">
												<img src="{{asset('assets/site/img/p-1.jpg')}}" alt="latest property" class="img-fluid">
											</a>
											<div class="sb-date"> 
												<span class="tag"><i class="ti-calendar"></i>4 days ago</span>
											</div>
											<span class="tag_t" style="background-color: grey;">For Rent</span> 
										</div>
										<div class="proerty_content">
											<div class="proerty_text">
											  <h3 class="captlize"><a href="single-property-3.html" class="hover_ancor">Avenue apartment</a></h3>
											  <p class="proerty_price">$7540</p>
											</div>
											<p class="property_add">302, Seek Velly Canada</p>
											<div class="property_meta"> 
											  <div class="list-fx-features">
													<div class="listing-card-info-icon" style="min-width:100%">
														<span class="inc-fleat inc-bed">12 Beds</span>
													</div>
													<div class="listing-card-info-icon" style="min-width:100%">
														<span class="inc-fleat inc-type">Corporate</span>
													</div>
													
												</div>  
											</div>
											<div class="property_links">
												<a href="{{route('view_property')}}" class="btn btn-theme" style="background-color:#FFC107;border: none;">Request Info</a>
												<a href="{{route('view_property')}}" class="btn btn-theme-light" style="background-color:rgba(255, 193, 7, 0.4);color: grey;border: none;">Property Detail</a>
											</div>
										</div>
									</div>
								</div>
                                @endfor
								
							</div>
						</div>
					</div>
					
				</div>
			</section>

			<!-- ongoing projects end-->
						
			
			
			<a id="back2Top" class="top-scroll" title="Back to top" href="#"><i class="ti-arrow-up"></i></a>
			

		</div>
		<!-- ============================================================== -->
		<!-- End Wrapper -->
		<!-- ============================================================== -->
@endsection
