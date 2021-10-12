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
							<div class="dashboard-wraper">
							
								<!-- Basic Information -->
								<div class="form-submit">	
									<h4>Change Your Password</h4>
									<div class="submit-section">
										<div class="form-row">
										
											<div class="form-group col-lg-12 col-md-6">
												<label>Old Password</label>
												<input type="password" class="form-control">
											</div>
											
											<div class="form-group col-md-6">
												<label>New Password</label>
												<input type="password" class="form-control">
											</div>
											
											<div class="form-group col-md-6">
												<label>Confirm password</label>
												<input type="password" class="form-control">
											</div>
											
											<div class="form-group col-lg-12 col-md-12">
												<button class="btn btn-theme" type="submit">Save Changes</button>
											</div>
											
										</div>
									</div>
								</div>
								
							</div>
						</div>
						
					</div>
				</div>
			</section>
			
			<a id="back2Top" class="top-scroll" title="Back to top" href="#"><i class="ti-arrow-up"></i></a>
			

		</div>
@endsection