<div id="preloader"><div class="preloader"><span></span><span></span></div></div>
<div class="header header-transparent change-logo" style="z-index:1001">
				<div class="container-fluid">
					<nav id="navigation" class="navigation navigation-landscape">
						<div class="nav-header">
							<a class="nav-brand static-logo" href="{{route('view_home')}}"><img style="max-width: 232px;height:49px;" src="{{asset('assets/site/img/logo-red.png')}}" class="logo" alt="" /></a>
							<a class="nav-brand fixed-logo" href="{{route('view_home')}}"><img style="max-width: 232px;height:49px;" src="{{asset('assets/site/img/logo-red.png') }}" class="logo" alt="" /></a>
							<div class="nav-toggle"></div>
						</div>
						<div class="nav-menus-wrapper" style="transition-property: none;">
							<ul class="nav-menu">
							
								<li class="active"><a href="{{route('view_home')}}" style="color: white;">HOME</a></a>
									<!-- <ul class="nav-dropdown nav-submenu">
										<li><a class="active" href="{{route('view_property')}}">LOCATION 1</a></li>
										<li><a href="{{route('view_property')}}">LOCATION 2</a></li>
										<li><a href="{{route('view_property')}}">LOCATION 3</a></li>
										<li><a href="{{route('view_property')}}">LOCATION 4</a></li>
										<li><a href="{{route('view_property')}}">LOCATION 5</a></li>
										<li><a href="{{route('view_property')}}">LOCATION 6</a></li>
										<li><a href="{{route('view_property')}}">LOCATION 7</a></li>
									</ul> -->
								</li>
								
								<li>
									<a href="{{route('view_property')}}" style="color: white;">PRICE</a>
								</li>

								<li>
									<a href="{{route('view_property')}}" style="color: white;">PROJECT</a>
								</li>

								<li>
									<a href="{{route('view_property')}}" style="color: white;">RENT</a>
								</li>
								
								<li><a href="JavaScript:Void(0);" style="color: white;">RESALE<span class="submenu-indicator"></span></a>
									<ul class="nav-dropdown nav-submenu">
										<li><a href="{{route('view_property')}}">RESALE SUB 1</a>
											
										</li>
										<li><a href="{{route('view_property')}}">RESALE SUB 2</a>
											
										</li>
										<li><a href="{{route('view_property')}}">RESALE SUB 3</a>
											
										</li>
									</ul>
								</li>
								
								<li><a href="JavaScript:Void(0);" style="color: white;">AGENTS<span class="submenu-indicator"></span></a>
									<ul class="nav-dropdown nav-submenu">
										<li><a href="javascript:void(0)">AGENT 1</a></li>
										<li><a href="javascript:void(0)">AGENT 2</a></li>
										<li><a href="javascript:void(0)">AGENT 3</a></li>
										<li><a href="javascript:void(0)">AGENT 4</a></li>
										<li><a href="javascript:void(0)">AGENT 5</a></li>
										<li><a href="javascript:void(0)">AGENT 6</a></li> 
									</ul>
								</li>

								<li><a href="JavaScript:Void(0);" style="color: white;">BUILDERS<span class="submenu-indicator"></span></a>
									<ul class="nav-dropdown nav-submenu">
										<li><a href="javascript:void(0)">BUILDERS 1</a></li>
										<li><a href="javascript:void(0)">BUILDERS 2</a></li>
										<li><a href="javascript:void(0)">BUILDERS 3</a></li>
										<li><a href="javascript:void(0)">BUILDERS 4</a></li>
										<li><a href="javascript:void(0)">BUILDERS 5</a></li>
										<li><a href="javascript:void(0)">BUILDERS 6</a></li>
									</ul>
								</li>

								<li>
									<a class="btn btn-danger mt-2" href="JavaScript:Void(0);" style="color: white;padding:1.2rem 0.6rem">BANK MORGAGE PROPERTIES</a>
								</li>
								
								
							</ul>
							
							<ul class="nav-menu nav-menu-social align-to-right">
								
									<li>
											<div class="btn-group account-drop">
												<button type="button" class="btn btn-order-by-filt" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
													<img src="assets/img/user-5.jpg" class="avater-img" alt=""><span style='color:white;font-size:20px'>Hi, <?php echo $_COOKIE["name"]?> <i class="fas fa-sort-down"></i></span>
												</button>
												<div class="dropdown-menu pull-right animated flipInX">
													<a href="{{route('admin_dash')}}"><i class="ti-user"></i>My Profile</a>                                  
													<a href="{{route('admin_prop_list')}}"><i class="ti-layers"></i>Property List</a>                                   
													<a class="active" href="{{route('admin_change_pass')}}"><i class="ti-unlock"></i>Change Password</a>
													<a href="{{route('logout_user')}}"><i class="ti-power-off"></i>Log Out</a>
												</div>
											</div>
										</li>
							</ul>
						</div>
					</nav>
				</div>
			</div>
			<!-- End Navigation -->
			<div class="clearfix"></div>