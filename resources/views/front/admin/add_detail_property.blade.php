@extends('front.layout.admin.main')
        
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
							
							<div class="row">
								<div class="col-lg-12 col-md-12 col-sm-12">
									<h4>Your Current Package: <span class="pc-title theme-cl">Gold Package</span></h4>
								</div>
							</div>
							
							<div class="row">
					
								<div class="col-lg-4 col-md-6 col-sm-12">
									<div class="dashboard-stat widget-1">
										<div class="dashboard-stat-content"><h4>607</h4> <span>Listings Included</span></div>
										<div class="dashboard-stat-icon"><i class="ti-location-pin"></i></div>
									</div>	
								</div>
								
								<div class="col-lg-4 col-md-6 col-sm-12">
									<div class="dashboard-stat widget-2">
										<div class="dashboard-stat-content"><h4>102</h4> <span>Listings Remaining</span></div>
										<div class="dashboard-stat-icon"><i class="ti-pie-chart"></i></div>
									</div>	
								</div>
								
								<div class="col-lg-4 col-md-6 col-sm-12">
									<div class="dashboard-stat widget-3">
										<div class="dashboard-stat-content"><h4>70</h4> <span>Featured Included</span></div>
										<div class="dashboard-stat-icon"><i class="ti-user"></i></div>
									</div>	
								</div>
								
								<div class="col-lg-4 col-md-6 col-sm-12">
									<div class="dashboard-stat widget-4">
										<div class="dashboard-stat-content"><h4>30</h4> <span>Featured Remaining</span></div>
										<div class="dashboard-stat-icon"><i class="ti-location-pin"></i></div>
									</div>	
								</div>
								
								<div class="col-lg-4 col-md-6 col-sm-12">
									<div class="dashboard-stat widget-5">
										<div class="dashboard-stat-content"><h4>Unlimited</h4> <span>Images / per listing</span></div>
										<div class="dashboard-stat-icon"><i class="ti-pie-chart"></i></div>
									</div>	
								</div>
								
								<div class="col-lg-4 col-md-6 col-sm-12">
									<div class="dashboard-stat widget-6">
										<div class="dashboard-stat-content"><h4>2021-02-26</h4> <span>Ends On</span></div>
										<div class="dashboard-stat-icon"><i class="ti-user"></i></div>
									</div>	
								</div>

							</div>
							
							<div class="row">
								<div class="col-lg-12 col-md-12 col-sm-12">
									<div class="card-header" id="Packages">
									  <h2 class="mb-0">
										<button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#extraPackages" aria-expanded="false" aria-controls="extraSer">
										  See Available Packages and Payment Methods
										</button>
									  </h2>
									</div>
									<div id="extraPackages" class="collapse" aria-labelledby="Packages" data-parent="#accordionExample">
										<div class="row">
											
											<!-- Single Package -->
											<div class="col-lg-4 col-md-4 c-l-sm-12">
												<div class="package-box">
													<span class="theme-cl">Gold Package</span>
													<h4 class="packages-features-title">USD 49 / 1 year</h4>
													<ul class="packages-lists-list">
														<li>Unlimited listings</li>
														<li>100 Featured</li>
														<li>Unlimited Images</li>
														<li>Help & Support</li>
													</ul>
													<div class="buypackage">
														<div class="switchbtn paying">
															<input id="gold" class="switchbtn-checkbox" type="radio" value="2" checked name="package7">
															<label class="switchbtn-label" for="gold"></label>
														</div>
														<span>Switch to this package</span>
													</div>
												</div>
											</div>
											
											<!-- Single Package -->
											<div class="col-lg-4 col-md-4 c-l-sm-12">
												<div class="package-box">
													<span class="theme-cl">Premium Package</span>
													<h4 class="packages-features-title">USD 39 / 1 year</h4>
													<ul class="packages-lists-list">
														<li>20 listings</li>
														<li>5 Featured</li>
														<li>5 Images/ per list</li>
														<li>Help & Support</li>
													</ul>
													<div class="buypackage">
														<div class="switchbtn paying">
															<input id="premium" class="switchbtn-checkbox" type="radio" value="2" name="package7">
															<label class="switchbtn-label" for="premium"></label>
														</div>
														<span>Switch to this package</span>
													</div>
												</div>
											</div>
											
											<!-- Single Package -->
											<div class="col-lg-4 col-md-4 c-l-sm-12">
												<div class="package-box">
													<span class="theme-cl">Standard Package</span>
													<h4 class="packages-features-title">USD 10 / 1 year</h4>
													<ul class="packages-lists-list">
														<li>10 listings</li>
														<li>2 Featured</li>
														<li>2 Images</li>
														<li>Help & Support</li>
													</ul>
													<div class="buypackage">
														<div class="switchbtn paying">
															<input id="standard" class="switchbtn-checkbox" type="radio" value="2" name="package7">
															<label class="switchbtn-label" for="standard"></label>
														</div>
														<span>Switch to this package</span>
													</div>
												</div>
											</div>
										
										</div>
										
										<div class="row mt-5">
											<div class="col-lg-12 col-md-12">
												<h4>Payment Method</h4>
											</div>
											<div class="col-lg-12 col-md-12">
												<a href="#" class="pay-btn paypal">Pay with PayPal</a>
												<a href="#" class="pay-btn stripe">Pay with Stripe</a>
												<a href="#" class="pay-btn wire-trans">Wire Transfer</a>
											</div>
										</div>
										
									</div>
								</div>
							</div>
					
							<div class="dashboard-wraper">
								
								<div class="row">
									
									<!-- Submit Form -->
									<div class="col-lg-12 col-md-12">
									
										<div class="submit-page">
											
											<!-- Basic Information -->
											<div class="form-submit">	
												<h3>Detailed Information</h3>
												<div class="submit-section">
													<div class="form-row">
													
														<div class="form-group col-md-12">
															<label>Property Title</label>
															<input type="text" class="form-control" name="p_title" value="SELECTED PROPERTY">
														</div>
														
														<div class="form-group col-md-6">
															<label>Status</label>
															<select id="status" class="form-control" name="p_status">
																<option value="">&nbsp;</option>
																<option value="1">For Rent</option>
																<option value="2">For Sale</option>
															</select>
														</div>
														
														<div class="form-group col-md-6">
															<label>Property Type</label>
															<select id="ptypes" class="form-control" name="p_type">
																<option value="">&nbsp;</option>
																<option value="Houses">Houses</option>
																<option value="Apartment">Apartment</option>
																<option value="Villas">Villas</option>
																<option value="Commercial">Commercial</option>
																<option value="Offices">Offices</option>
																<option value="Garage">Garage</option>
															</select>
														</div>
														
														<div class="form-group col-md-6">
															<label>Price</label>
															<input type="text" class="form-control" placeholder="INR" name="price">
														</div>
														
														<div class="form-group col-md-6">
															<label>Area</label>
															<input type="text" class="form-control" placeholder="Sq.Ft" name="area">
														</div>
														
														<div class="form-group col-md-6">
															<label>BHK</label>
															<select id="bedrooms" class="form-control" name="bhk">
																<option value="">&nbsp;</option>
																<option value="1">1</option>
																<option value="2">2</option>
																<option value="3">3</option>
																<option value="4">4</option>
															</select>
														</div>
														
													</div>
												</div>
											</div>
											
											<!-- Gallery -->
											<div class="form-submit">	
												<h3>Property gallery</h3>
												<div class="submit-section">
													<div class="form-row">
													
														<div class="form-group col-md-12">
															<label><span style='font-size:15px;color:red'>Please choose max 10 images for gallery</span></label><br>
															<input type="file" name="p_front" multiple max=10>
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
															<label>Address</label>
															<input id="address" type="text" class="form-control">
														</div>
														
														<div class="form-group col-md-6">
															<label>City</label>
															<input id="city" type="text" class="form-control">
														</div>
														
														<div class="form-group col-md-6">
															<label>State</label>
															<input id="state" type="text" class="form-control">
														</div>
														
														<div class="form-group col-md-6">
															<label>Zip Code</label>
															<input id="pincode" type="text" class="form-control">
														</div>
														
														<button id="search_add" class="btn btn-info">SEARCH ADDRESS</button>
														<span id="lc_error" style="color:red"></span>
													</div>
												</div>
											</div>

											<div id="map_box"></div>
											
											<input id="add_cordinate" type="hidden" name="p_cordinate" value="23,21">

											<div class="form-group col-lg-12 col-md-12">
												<label>GDPR Agreement *</label>
												<ul class="no-ul-list">
													<li>
														<input id="aj-1" class="checkbox-custom" name="aj-1" type="checkbox">
														<label for="aj-1" class="checkbox-custom-label">I consent to having this website store my submitted information so they can respond to my inquiry.</label>
													</li>
												</ul>
											</div>
											
											<div class="form-group col-lg-12 col-md-12">
												<button class="btn btn-theme" type="submit">Submit & Preview</button>
											</div>
														
										</div>
									</div>
									
								</div>
								
							</div>
						</div>
						
					</div>
				</div>
			</section>
			<!-- ============================ User Dashboard End ================================== -->
			
			
			<a id="back2Top" class="top-scroll" title="Back to top" href="#"><i class="ti-arrow-up"></i></a>
			

		</div>
@endsection
@section('custom_js')
<script type="text/javascript">
			

			
</script>
@endsection