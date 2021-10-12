@extends('front.layout.main.main')
        
@section('content')
        <div id="main-wrapper">
		
			<div class="page-title pt-5" style="background-color:#324B4B">
				<div class="container">
					<div class="row">
						<div class="col-lg-12 col-md-12">
							
							<h2 class="ipt-title text-white"><b>Property Details</b></h2>
						</div>
					</div>
				</div>
			</div>

			<!-- ============================ Hero Banner  Start================================== -->
			<div class="single-advance-property gray">
				<div class="container-fluid p-0">
					<div class="row align-items-center">
					
						<div class="col-lg-7 col-md-7 col-sm-12">
							<div class="slider-for">
							@for ($i = 0; $i < count($detailes["data"]["gallery"]["showcaseImg"]); $i++)
								<a href='{{$detailes["data"]["gallery"]["showcaseImg"][$i]["imgUrl"]}}' class="item-slick"><img src='{{$detailes["data"]["gallery"]["showcaseImg"][$i]["imgUrl"]}}' alt="PropertyImages"></a>
								
							@endfor
							</div>
							
						</div>
						
						<div class="col-lg-5 col-md-5 col-sm-12">
							<div class="single-advance-caption">
							
								<div class="property-name-info">
									<h4 class="property-name">{{$detailes["data"]["title"]}}</h4>
									
								</div>
								
								<div class="property-price-info">
									<h4 class="property-price"><i class="fas fa-rupee-sign"></i> {{$detailes["data"]["price"]}}</h4>
									<p class="property-sqa">{{$detailes["data"]["dimensions"]}} Sq.ft.</p>
								</div>
								
								<div class="property-statement">
									<ul>
										<li>
											<i class="lni-apartment"></i>
											<div class="ps-trep">
												<span>Type</span>
												<h5 class="ps-type">{{$detailes["data"]["propertyType"]}}</h5>
											</div>
										</li>
										<li>
											<i class="lni-restaurant"></i>
											<div class="ps-trep">
												<span>Build On</span>
												<h5 class="ps-type">{{$detailes["data"]["buildYear"]}}</h5>
											</div>
										</li>
										<li>
											<i class="lni-leaf"></i>
											<div class="ps-trep">
												<span>Let</span>
												<h5 class="ps-type">{{$detailes["data"]["availability"]}}</h5>
											</div>
										</li>
									</ul>
								</div>
								
							</div>
						</div>
					
					</div>
					
					<div class="row">
						<div class="col-lg-12 col-md-12">
							<div class="slider-nav">
							@for ($i = 0; $i < count($detailes["data"]["gallery"]["showcaseImg"]); $i++)
								<div class="item-slick"><img src='{{$detailes["data"]["gallery"]["showcaseImg"][$i]["imgUrl"]}}' alt="Alt"></div>
							@endfor
							</div>
						</div>
					</div>
				</div>
			</div>
			
			<section class="spd-wrap">
				<div class="container">
					<div class="row">
						
						<div class="col-lg-12 col-md-12">
						
							<div class="slide-property-detail">
								
								<div class="slide-property-first">
									<div class="pr-price-into">
										<h2><i><i class="fas fa-rupee-sign"></i> {{$detailes["data"]["price"]}}</i> <span class="prt-type rent">For {{$detailes["data"]["availability"]}}</span></h2>
										<span><i class="lni-map-marker"></i> {{$detailes["data"]["location"]["address"]}}, {{$detailes["data"]["location"]["city"]}}, {{$detailes["data"]["location"]["pincode"]}}</span>
									</div>
								</div>
								
								<div class="slide-property-sec">
									<div class="pr-all-info">
										
										<!-- <div class="pr-single-info">
											<div class="share-opt-wrap">
												<button type="button" class="btn-share" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" data-original-title="Share this">
													<i class="lni-share"></i>
												</button>
												<div class="dropdown-menu animated flipInX">
													<a href="#" class="cl-facebook"><i class="lni-facebook"></i></a>
													<a href="#" class="cl-twitter"><i class="lni-twitter"></i></a>
													<a href="#" class="cl-gplus"><i class="lni-google-plus"></i></a>
													<a href="#" class="cl-instagram"><i class="lni-instagram"></i></a>
												</div>
											</div>

										</div> -->
										
										<!-- <div class="pr-single-info">
											<a href="JavaScript:Void(0);" data-toggle="tooltip" data-original-title="Get Print" onclick="window.print()"><i class="ti-printer"></i></a>
										</div> -->
										
										
									</div>
								</div>
								
							</div>
							
						</div>
					</div>
				</div>
			</section>
			<!-- ============================ Hero Banner End ================================== -->
			
			<!-- ============================ Property Detail Start ================================== -->
			<section class="gray">
				<div class="container">
					<div class="row">
						
						<!-- property main detail -->
						<div class="col-lg-8 col-md-12 col-sm-12">
							
							<!-- Single Block Wrap -->
							<div class="block-wrap">
								
								<div class="block-header">
									<h4 class="block-title">Property Info</h4>
								</div>
								
								<div class="block-body">
									<ul class="dw-proprty-info">
										<li><strong>property Overview</strong>{{$detailes["data"]["propertyOverview"]}}</li>
										<li><strong>Area</strong>{{$detailes["data"]["dimensions"]}} sq ft</li>
										<li><strong>Type</strong>{{$detailes["data"]["propertyType"]}}</li>
										<li><strong>Price</strong><i class="fas fa-rupee-sign"></i> {{$detailes["data"]["price"]}}</li>
										<li><strong>City</strong>{{$detailes["data"]["location"]["city"]}}</li>
										<li><strong>Build On</strong>{{$detailes["data"]["buildYear"]}}</li>
									</ul>
								</div>
								
							</div>
							
							<!-- Single Block Wrap -->
							<div class="block-wrap">
								
								<div class="block-header">
									<h4 class="block-title">Description</h4>
								</div>
								
								<div class="block-body">
								
									<span id="summ" style='display:none'></span>
									<span id="summ2"></span>
								</div>
								
							</div>
							
							<!-- Single Block Wrap -->
							<div class="block-wrap">
								
								<div class="block-header">
									<h4 class="block-title">Ameneties</h4>
								</div>
								
								<div class="block-body">
									<ul class="avl-features third">
									@foreach($detailes["data"]["amenities"] as $amen) 
										<li>{{$amen}}</li>
									@endforeach
									</ul>
								</div>
								
							</div>
							
							<!-- Single Block Wrap -->
							<!-- <div class="block-wrap"> -->
								
								<!-- <div class="block-header">
									<h4 class="block-title">Floor Plan</h4>
								</div> -->
								
								<!-- <div class="block-body"> -->
									<!-- <div class="accordion" id="floor-option"> -->
										<!-- <div class="card">
											<div class="card-header" id="firstFloor">
												<h2 class="mb-0">
													<button type="button" class="btn btn-link" data-toggle="collapse" data-target="#firstfloor">First Floor<span>740 sq ft</span></button>									
												</h2>
											</div>
											<div id="firstfloor" class="collapse" aria-labelledby="firstFloor" data-parent="#floor-option">
												<div class="card-body">
													<img src="{{asset('assets/site/img/floor.jpg')}}" class="img-fluid" alt="" />
												</div>
											</div>
										</div> -->
										<!-- <div class="card">
											<div class="card-header" id="seconfFloor">
												<h2 class="mb-0">
													<button type="button" class="btn btn-link collapsed" data-toggle="collapse" data-target="#secondfloor">Second Floor<span>710 sq ft</span></button>
												</h2>
											</div>
											<div id="secondfloor" class="collapse show" aria-labelledby="seconfFloor" data-parent="#floor-option">
												<div class="card-body">
													<img src="{{asset('assets/site/img/floor.jpg')}}" class="img-fluid" alt="" />
												</div>
											</div>
										</div> -->
										<!-- <div class="card">
											<div class="card-header" id="third-garage">
												<h2 class="mb-0">
													<button type="button" class="btn btn-link collapsed" data-toggle="collapse" data-target="#garages">Garage<span>520 sq ft</span></button>                     
												</h2>
											</div>
											<div id="garages" class="collapse" aria-labelledby="third-garage" data-parent="#floor-option">
												<div class="card-body">
													<img src="{{asset('assets/site/img/floor.jpg')}}" class="img-fluid" alt="" />
												</div>
											</div>
										</div> -->
									<!-- </div>
								</div>
								
							</div> -->
							
							<!-- Single Block Wrap -->
							<div class="block-wrap">
								
								<div class="block-header">
									<h4 class="block-title">Location</h4>
									
								</div>
								
								<div class="block-body">
									<div class="map-container">
										<div id="singleMap"></div>
									</div>

								</div>
								
							</div>
							
							
							
						
							<div class="block-wrap">
								
								<div class="block-header">
									<h4 class="block-title">Nearby Places</h4>
								</div>
								
								<div class="block-body">
									<ul class="avl-features third">
									@foreach($detailes["data"]["nearby"] as $near)  
										<li>{{$near}}</li>
									@endforeach
									</ul>
								</div>
								
							</div>
							
							<!-- Single Block Wrap -->
							<div class="block-wrap">
								
								<div class="block-header">
									<h4 class="block-title">Write A Review</h4>
								</div>
								
								<div class="block-body">
									<div class="row">
										
										<div class="col-lg-12 col-md-12 col-sm-12">
											<div class="form-group">
												<input type="text" class="form-control" placeholder="Subject Title">
											</div>
										</div>
										
										<div class="col-lg-6 col-md-6 col-sm-12">
											<div class="form-group">
												<input type="text" class="form-control" placeholder="Your Name">
											</div>
										</div>
										
										<div class="col-lg-6 col-md-6 col-sm-12">
											<div class="form-group">
												<input type="email" class="form-control" placeholder="Your Email">
											</div>
										</div>
										
										<div class="col-lg-12 col-md-12 col-sm-12">
											<div class="form-group">
												<textarea class="form-control ht-80" placeholder="Messages"></textarea>
											</div>
										</div>
										
										<div class="col-lg-12 col-md-12 col-sm-12">
											<div class="form-group">
												<button class="btn btn-theme" type="submit">Submit Review</button>
											</div>
										</div>
										
									</div>
								</div>
								
							</div>
							
						</div>
						
						<!-- property Sidebar -->
						<div class="col-lg-4 col-md-12 col-sm-12">
							<div class="page-sidebar">
								
								<!-- Agent Detail -->
								<div class="agent-widget">
									<div class="agent-title">
										<div class="agent-photo"><img src="{{asset('assets/site/img/default_user.svg')}}" alt=""></div>
										<div class="agent-details">
											<h4><a href="javascript:void(0)">{{$detailes["data"]["postedBy"]["fullname"]}}</a></h4>
											<span><i class="lni-phone-handset"></i>{{$detailes["data"]["postedBy"]["contact"]}}</span>
										</div>
										<div class="clearfix"></div>
									</div>

									<div class="form-group">
										<input type="text" class="form-control" placeholder="Your Email">
									</div>
									<div class="form-group">
										<input type="text" class="form-control" placeholder="Your Phone">
									</div>
									<div class="form-group">
										<textarea class="form-control">I'm interested in this property.</textarea>
									</div>
									<button class="btn btn-theme full-width">Send Message</button>
								</div>
								
								<!-- Mortgage Calculator -->
								<div class="sidebar-widgets">
									
									<h4>Mortgage Calculator</h4>
									
									<div class="form-group">
										<div class="input-with-icon">
											<input type="text" class="form-control" placeholder="Sale Price">
											<i class="ti-money"></i>
										</div>
									</div>
									
									<div class="form-group">
										<div class="input-with-icon">
											<input type="text" class="form-control" placeholder="Down Payment">
											<i class="ti-money"></i>
										</div>
									</div>
									
									<div class="form-group">
										<div class="input-with-icon">
											<input type="text" class="form-control" placeholder="Loan Term (Years)">
											<i class="ti-calendar"></i>
										</div>
									</div>
									
									<div class="form-group">
										<div class="input-with-icon">
											<input type="text" class="form-control" placeholder="Interest Rate">
											<i class="fa fa-percent"></i>
										</div>
									</div>
									
									<button class="btn btn-theme full-width">Calculate</button>
									
								</div>
								
								<!-- Featured Property -->
								<div class="sidebar-widgets">
									
									<h4>Featured Property</h4>
									
									<div class="sidebar_featured_property">
									@if($feat_property["status"] != "error")
									@for ($i = 0; $i < count($feat_property["data"]); $i++)
										<!-- List Sibar Property -->
										<div class="sides_list_property">
											<div class="sides_list_property_thumb">
												<img src='{{$feat_property["data"][$i]["gallery"]["bannerImg"]["imgUrl"]}}' class="img-fluid" alt="">
											</div>
											<div class="sides_list_property_detail">
												<h4><a href='/property/detailed/{{$feat_property["data"][$i]["_id"]}}'>{{$feat_property["data"][$i]["title"]}}</a></h4>
												<span><i class="ti-location-pin"></i>{{$feat_property["data"][$i]["location"]["address"]}}, {{$feat_property["data"][$i]["location"]["city"]}}, {{$feat_property["data"][$i]["location"]["pincode"]}}</span>
												<div class="lists_property_price">
													<div class="lists_property_types">
														<div class="property_types_vlix sale">{{$feat_property["data"][$i]["availability"]}}</div>
													</div>
													<div class="lists_property_price_value">
														<h4><i class="fas fa-rupee-sign"></i> {{$feat_property["data"][$i]["price"]}}</h4>
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
						
					</div>
				</div>
			</section>
			<!-- ============================ Property Detail End ================================== -->
			
			
			
			<a id="back2Top" class="top-scroll" title="Back to top" href="#"><i class="ti-arrow-up"></i></a>

		</div>
		<!-- ============================================================== -->
		<!-- End Wrapper -->
		<!-- ============================================================== -->
		

		<!-- ============================================================== -->
		<!-- All Jquery -->
		<!-- ============================================================== -->
		
@endsection

@section('custom_js')
<script type="text/javascript">
$(document).ready(function(){
	// var out_data = JSON.parse(JSON.stringify({{$detailes["data"]["summary"]}}));
	// $('#desc').append(out_data);
	var encodedString = "{{$detailes["data"]["summary"]}}";
	var decodedText = $("#summ").html(encodedString).text();
	// console.log();
	$('#summ2').append(stringToHTML(decodedText));

	function stringToHTML (str) {
		var parser = new DOMParser();
		var doc = parser.parseFromString(str, 'text/html');
		return doc.body.innerHTML;
	};

	var lati = {{$detailes["data"]["location"]["mapCoordinates"]["latitude"]}};
			var longi = {{$detailes["data"]["location"]["mapCoordinates"]["longitude"]}};
			var price = {{$detailes["data"]["price"]}};
			

			var map = L.map('singleMap').setView([lati,longi], 13);

			L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
			    attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
			}).addTo(map);

			L.marker([lati, longi]).addTo(map)
			    .bindPopup('PRICE: '+price+'<br><a href="http://maps.google.com/?q='+lati+','+longi+'" target="_blank">VIEW ON GOOGLE MAPs</a>');
});
			
			
</script>

@endsection
	