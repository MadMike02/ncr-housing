
			<!-- ============================ Call To Action ================================== -->
			<section class="theme-bg call-to-act-wrap" style="background-color:#006877">
				<div class="container">
					<div class="row">
						<div class="col-lg-12">
							
							<div class="call-to-act">
								<div class="call-to-act-head">
									<h3>Have a property you want to sell?</h3>
									<span>We'll help you to sell it quickly.</span>
								</div>
								<a href="JavaScript:void(0)" data-toggle="modal" data-target="#signup" class="btn btn-call-to-act">SignUp Today</a>
							</div>
							
						</div>
					</div>
				</div>
			</section>
			<!-- ============================ Call To Action End ================================== -->
			
			
			<!-- Log In Modal -->
			<div class="modal fade" id="login" tabindex="-1" role="dialog" aria-labelledby="registermodal" aria-hidden="true">
				<div class="modal-dialog modal-dialog-centered login-pop-form" role="document">
					<div class="modal-content" id="registermodal">
						<span class="mod-close" data-dismiss="modal" aria-hidden="true"><i class="ti-close"></i></span>
						<div class="modal-body">
							<h4 class="modal-header-title">Log In</h4>
							<div class="login-form">
								<form id="login_form" action="{{route('login-user')}}" method="post">
									
									<div class="form-group">
										<label>Email Id</label>
										<div class="input-with-icon">
											<input type="text" class="form-control" placeholder="Enter Email" name="email">
											<i class="ti-user"></i>
										</div>
									</div>
									
									<div class="form-group">
										<label>Password</label>
										<div class="input-with-icon">
											<input type="password" class="form-control" placeholder="*******" name="password">
											<i class="ti-unlock"></i>
										</div>
									</div>
									
									<div class="form-group">
										<button id="login_btn" type="submit" class="btn btn-md full-width pop-login">Login</button>
									</div>
								
								</form>
								<center id="login_loader">
									<div class="lds-ellipsis"><div></div><div></div><div></div><div></div></div>
								</center>
							</div>
							<!-- <div class="modal-divider"><span>Or login via</span></div>
							<div class="social-login mb-3">
								<ul>
									<li><a href="#" class="btn connect-fb"><i class="ti-facebook"></i>Facebook</a></li>
								</ul>
							</div> -->
						</div>
					</div>
				</div>
			</div>
			<!-- End Modal -->
			
			<!-- Sign Up Modal -->
			<div class="modal fade signup" id="signup" tabindex="-1" role="dialog" aria-labelledby="sign-up" aria-hidden="true">
				<div class="modal-dialog modal-dialog-centered login-pop-form" role="document">
					<div class="modal-content" id="sign-up">
						<span class="mod-close" data-dismiss="modal" aria-hidden="true"><i class="ti-close"></i></span>
						<div class="modal-body">
							<h4 class="modal-header-title" style="font-size: 25px;">Sign Up</h4>
							<div class="login-form">
								<form id="register_form" method="post">
								
									<div class="row">
										
										<div class="col-lg-6 col-md-6">
											<div class="form-group">
												<div class="input-with-icon">
													<input type="text" class="form-control" placeholder="Full Name" name="fullname" required>
													<i class="ti-user"></i>
												</div>
											</div>
										</div>
										
										<div class="col-lg-6 col-md-6">
											<div class="form-group">
												<div class="input-with-icon">
													<input type="email" class="form-control" placeholder="Email" name="email" required>
													<i class="ti-email"></i>
												</div>
											</div>
										</div>

										<div class="col-lg-6 col-md-6">
											<div class="form-group">
												<div class="input-with-icon">
													<input type="text" class="form-control" placeholder="Contact Number" name="contact" required>
													<i class="fas fa-mobile-alt"></i>
												</div>
											</div>
										</div>
										
										<div class="col-lg-6 col-md-6">
											<div class="form-group">
												<div class="input-with-icon">
													<input type="password" class="form-control" placeholder="*******" name="password" required>
													<i class="ti-unlock"></i>
												</div>
											</div>
										</div>
										
										
										<div class="col-lg-12 col-md-12">
											<div class="form-group">
												<div class="input-with-icon">
													<select class="form-control" name="role">
														<option value="customer">As a customer</option>
														<option value="agent">As a Agent</option>
														<option value="broker">As a Broker</option>
														<option value="dealer">As a Dealer</option>
													</select>
													<i class="ti-briefcase"></i>
												</div>
											</div>
										</div>
										
									</div>
									
									<div class="form-group">
										<button id="register_form_btn" type="submit" class="btn btn-md full-width pop-login">Sign Up</button>
									</div>
								
								</form>
								<center id="register_loader">
									<span id="load_text"></span>
									<div class="lds-ellipsis"><div></div><div></div><div></div><div></div></div>
								</center>
							</div>
							<!-- <div class="modal-divider"><span>Or login via</span></div>
							<div class="social-login mb-3">
								<ul>
									<li style="margin: 0 auto;"><a href="#" class="btn connect-fb"><i class="ti-facebook"></i>Facebook</a></li>
								</ul>
							</div> -->
							<div class="text-center">
								<p class="mt-5"><i class="ti-user mr-1"></i>Already Have An Account? <a onClick="modal_js()" href="javascript:void(0)" class="link">Go For LogIn</a></p>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- End Modal -->

<footer class="dark-footer skin-dark-footer" style="background: linear-gradient(45deg ,#48525c,rgba(47,72,88,0.98));">
				<div>
					<!-- contact form-->
					<div class="container">
						<div class="row">
							<div class="col-12 mt-4 mb-3 text-center h2"><b><span style="color: #FFC107">CONTACT</span> US</b></div>
							<div class="col-md-6 mt-2">
								<input class="form-control" type="text" name="" placeholder="ENTER FULL NAME">
							</div>
							<div class="col-md-6 mt-2">
								<input class="form-control" type="text" inputmode="numeric" name="" placeholder="ENTER CONTACT NUMBER">
							</div>
							<div class="col-12 mt-3">
								<textarea class="form-control" rows="3" placeholder="ENTER YOUR MESSAGE HERE"></textarea>
							</div>
							<div class="col-12 mt-3 text-center">
								<input class="btn btn-warning" type="submit" name="" value="SEND MESSAGE">
							</div>
						</div>
					</div>

					<div class="container">
						<div class="row">
							
							<div class="col-lg-3 col-md-4">
								<div class="footer-widget">
									<img src="assets/img/logo-red-light.png" class="img-footer" alt="" />
									<div class="footer-add">
										<p>Collins Street West, Victoria 8007, Australia.</p>
										<p>+1 246-345-0695</p>
										<p>info@example.com</p>
									</div>
									
								</div>
							</div>		
							<div class="col-lg-3 col-md-4">
								<div class="footer-widget">
									<h4 class="widget-title">Navigations</h4>
									<ul class="footer-menu">
										<li><a href="about-us.html">About Us</a></li>
										<li><a href="faq.html">Contact Us</a></li>
										<li><a href="checkout.html">Featured Properties</a></li>
										<li><a href="contact.html">Upcoming Properties</a></li>
										<li><a href="blog.html"></a>Search Property</li>
									</ul>
								</div>
							</div>
									
							<div class="col-lg-3 col-md-4">
								<div class="footer-widget">
									<h4 class="widget-title">Builders</h4>
									<ul class="footer-menu">
										<li><a href="#">Builder 1</a></li>
										<li><a href="#">Builder 2</a></li>
										<li><a href="#">Builder 3</a></li>
										<li><a href="#">Builder 4</a></li>
										<li><a href="#">Builder 5</a></li>
									</ul>
								</div>
							</div>
							
							<div class="col-lg-3 col-md-6">
								<div class="footer-widget">
									<h4 class="widget-title">My Account</h4>
									<ul class="footer-menu">
										<li><a href="#">My Profile</a></li>
										<li><a href="#">My account</a></li>
										<li><a href="#">My Property</a></li>
										<li><a href="#">Favorites</a></li>
									</ul>
								</div>
							</div>
							
							
							
						</div>
					</div>
				</div>
				
				<div class="footer-bottom" style="background-color:#006877;color: white;">
					<div class="container">
						<div class="row">
							
							<div class="col-6">
								<p>©2021 NCS HOUSINGS.</p>
							</div>
							
							<div class="col-6 text-right">
								<ul class="footer-bottom-social">
									<li><a href="#"><i class="ti-facebook"></i></a></li>
									<li><a href="#"><i class="ti-twitter"></i></a></li>
									<li><a href="#"><i class="ti-instagram"></i></a></li>
									<li><a href="#"><i class="ti-linkedin"></i></a></li>
								</ul>
							</div>
							
						</div>
					</div>
				</div>
			</footer>