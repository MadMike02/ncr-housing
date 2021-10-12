<div class="col-lg-3 col-md-4">
							<div class="dashboard-navbar">
								
								<div class="d-user-avater">
									<img src="{{asset('assets/site/img/user-3.jpg')}}" class="img-fluid avater" alt="">
									<h4><?php echo $_COOKIE["name"]?></h4>
									<span><?php echo $_COOKIE["role"]?></span>
								</div>
								
								<div class="d-navigation">
									<ul>
										<li class="active"><a href="{{route('admin_dash')}}"><i class="ti-user"></i>My Profile</a></li>
										<li><a href="{{route('admin_prop_list')}}"><i class="ti-layers"></i>My Properties</a></li>
										<li><a href="{{route('admin_add_prop')}}"><i class="ti-pencil-alt"></i>Submit New Property</a></li>
										<li><a href="{{route('admin_change_pass')}}"><i class="ti-unlock"></i>Change Password</a></li>
										<li><a href="{{route('logout_user')}}"><i class="ti-power-off"></i>Log Out</a></li>
									</ul>
								</div>
								
							</div>
						</div>