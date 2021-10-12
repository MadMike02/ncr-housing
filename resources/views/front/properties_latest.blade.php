@extends('front.layout.main.main')

@section('content')	
    <div id="main-wrapper">
			<!-- ============================ Hero Banner  Start================================== -->
			<div class="home-map fl-wrap">
				<div class="map-container fw-map">
					<div id="map-main"></div>
				</div>				
			</div>
			<!-- ============================ Hero Banner End ================================== -->
			
			<!-- ============================ All Property ================================== -->
			<section class="bg-light">
			
				<div class="container">
					
					<div class="row">
						<div class="col-lg-12 col-md-12">
							<div class="filter_search_opt">
								<a href="javascript:void(0);" onclick="openFilterSearch()">Search Property<i class="ml-2 ti-menu"></i></a>
							</div>
						</div>
					</div>
					
					<div class="row">
						
						<div class="col-lg-8 col-md-8 col-sm-12 list-layout">
							<div class="row">
							
								<div class="col-lg-12 col-md-12">
									<div class="filter-fl">
										<h4>Total Property Find is: <span class="theme-cl">{{count($response["data"])}}</span></h4>
										<div class="btn-group custom-drop">
											<button type="button" class="btn btn-order-by-filt light" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
												Short By<i class="ti-angle-down"></i>
											</button>
											<div class="dropdown-menu pull-right animated flipInX">
												<a href="#">Price</a>
												<a href="#">BHKs</a>
												<a href="#">Area (sqft)</a>
											</div>
										</div>
									</div>
								</div>
								
								@for ($i = 0; $i < count($response["data"]); $i++)
								<!-- Single Property Start -->
								<div class="col-lg-12 col-md-12">
									<div class="property-listing property-1">
											
										<div class="listing-img-wrapper">
											<a href='/property/detailed/{{$response["data"][$i]["_id"]}}'>
												<img src='{{$response["data"][$i]["gallery"]["bannerImg"]["imgUrl"]}}' class="img-fluid mx-auto" alt="" />
											</a>
											<span class="property-type">For {{$response["data"][$i]["availability"]}}</span>
										</div>
										
										<div class="listing-content">
										
											<div class="listing-detail-wrapper">
												<div class="listing-short-detail">
													<h4 class="listing-name"><a href='/property/detailed/{{$response["data"][$i]["_id"]}}'>{{$response["data"][$i]["title"]}}</a></h4>
													<span class="listing-location"><i class="ti-location-pin"></i>{{$response["data"][$i]["location"]["address"]}} , {{$response["data"][$i]["location"]["city"]}}</span>
												</div>
												<div class="list-author">
													<a href='/property/detailed/{{$response["data"][$i]["_id"]}}'><i class="fas fa-user-tie"></i></a>
												</div>
											</div>
										
											<div class="listing-features-info">
												<ul>
													<li><strong><i class="fas fa-building"></i></strong>{{$response["data"][$i]["propertyType"]}}</li>
                                                    <li></li>
													<li><strong><i class="fas fa-street-view"></i></strong>{{$response["data"][$i]["dimensions"]}} Sqft</li>
												</ul>
											</div>
										
											<div class="listing-footer-wrapper">
												<div class="listing-price">
													<h4 class="list-pr"><i class="fas fa-rupee-sign"></i> {{$response["data"][$i]["price"]}}</h4>
												</div>
												<div class="listing-detail-btn">

													<a href='/property/detailed/{{$response["data"][$i]["_id"]}}' class="more-btn">More Info</a>
													<!-- <a href="#" class="btn btn-sm btn-danger pt-2 pb-2 mb-1">Add to Compare</a> -->
												</div>
											</div>
											
										</div>
										
									</div>
								</div>
								<!-- Single Property End -->
								@endfor
							</div>
							
							<!-- Pagination -->
							<!-- <div class="row">
								<div class="col-lg-12 col-md-12 col-sm-12">
									<ul class="pagination p-center">
										<li class="page-item">
										  <a class="page-link" href="#" aria-label="Previous">
											<span class="ti-arrow-left"></span>
											<span class="sr-only">Previous</span>
										  </a>
										</li>
										<li class="page-item active"><a class="page-link" href="#">1</a></li>
										<li class="page-item"><a class="page-link" href="#">2</a></li>
										<li class="page-item"><a class="page-link" href="#">3</a></li>
										<li class="page-item"><a class="page-link" href="#">...</a></li>
										<li class="page-item"><a class="page-link" href="#">18</a></li>
										<li class="page-item">
										  <a class="page-link" href="#" aria-label="Next">
											<span class="ti-arrow-right"></span>
											<span class="sr-only">Next</span>
										  </a>
										</li>
									</ul>
								</div>
							</div> -->
					
						</div>
						
						<!-- property Sidebar -->
						<div class="col-lg-4 col-md-4 col-sm-12">
							<div class="simple-sidebar sm-sidebar" id="filter_search"  style="left:0;">							
							
								<div class="search-sidebar_header">
									<h4 class="ssh_heading">Close Filter</h4>
									<button onclick="closeFilterSearch()" class="w3-bar-item w3-button w3-large"><i class="ti-close"></i></button>
								</div>
								
								<!-- Find New Property -->
								<div class="sidebar-widgets">
									
									<h5 class="mb-3">Filter Search</h5>
									
									<div class="form-group">
										<div class="input-with-icon">
											<input type="text" class="form-control" placeholder="Location">
											<i class="ti-location-pin"></i>
										</div>
									</div>
									
									
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
									
									<div class="form-group">
										<div class="input-with-icon">
											<select id="ptypes" class="form-control">
												<option value="">&nbsp;</option>
												<option value="1">Any Type</option>
												<option value="2">For Rental</option>
												<option value="3">For Sale</option>
											</select>
											<i class="ti-briefcase"></i>
										</div>
									</div>
									
									<div class="form-group">
										<div class="input-with-icon">
											<select id="cities" class="form-control">
												<option value="">&nbsp;</option>
												<option value="1">Los Angeles, CA</option>
												<option value="2">New York City, NY</option>
												<option value="3">Chicago, IL</option>
												<option value="4">Houston, TX</option>
												<option value="5">Philadelphia, PA</option>
												<option value="6">San Antonio, TX</option>
												<option value="7">San Jose, CA</option>
											</select>
											<i class="ti-briefcase"></i>
										</div>
									</div>
									
									<div class="range-slider">
										<label>Custom Price</label>
										<div data-min="0" data-max="50000" data-min-name="min_price" data-max-name="min_price" data-unit="USD" class="range-slider-ui ui-slider" aria-disabled="false"></div>
										<div class="clearfix"></div>
									</div>
									
									<div class="range-slider">
										<label>Area</label>
										<div data-min="0" data-max="10000" data-min-name="min_area" data-max-name="max_area" data-unit="Sq ft" class="range-slider-ui ui-slider" aria-disabled="false"></div>
										<div class="clearfix"></div>
									</div>

									<div class="ameneties-features">
										<div class="form-group" id="module">
											<a role="button" class="" data-toggle="collapse" href="#advance-search" aria-expanded="true" aria-controls="advance-search"></a>
										</div>
										<div class="collapse" id="advance-search" aria-expanded="false" role="banner">
											<ul class="no-ul-list">
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
											</ul>
										</div>
									
										<button class="btn btn-theme full-width">Search Properties</button>
									
									</div>
							
								</div>
							</div>
							<!-- Sidebar End -->
						
						
						</div>
						
					</div>
				</div>	
			</section>
			<!-- ============================ All Property ================================== -->
			
			
			<a id="back2Top" class="top-scroll" title="Back to top" href="#"><i class="ti-arrow-up"></i></a>
			

		</div>
		<!-- ============================================================== -->
		<!-- End Wrapper -->
		<!-- ============================================================== -->
		
		
@endsection

@section('custom_js')

		<!-- ============================================================== -->
		<!-- All Jquery -->
		<!-- ============================================================== -->
		<script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js"
  integrity="sha512-XQoYMqMTK8LvdxXYG3nZ448hOEQiglfqkJs1NOQV44cWnUrBc8PkAOcXy20w0vlaXaVUearIOBhiXZ5V3ynxwA=="
  crossorigin=""></script>

		
		
		<script>
			function openFilterSearch() {
				document.getElementById("filter_search").style.display = "block";
			}
			function closeFilterSearch() {
				document.getElementById("filter_search").style.display = "none";
			}
		</script>

		<script type="text/javascript">
			var map = L.map('map-main').setView([28.53, 77.39], 10);

			L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
			    attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
			}).addTo(map);

            for ($i = 0; $i < $response["data"].length; $i++)
            {
                L.marker([28.53, 77.39]).addTo(map)
			    .bindPopup('<b>PROPERTY 1</b></br>PRICE: <i class="fas fa-rupee-sign"></i> '+20+'<br><a href="">READ MORE</a>');
            }
			

			//   L.marker([28.53, 77.39],{draggable:true}).addTo(map).on("moveend",function(){console.log(this.getLatLng())});

		</script>
@endsection
