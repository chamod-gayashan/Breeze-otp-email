
				<header class="app-header header sticky">

					<!-- Start::main-header-container -->
					<div class="main-header-container container-fluid" style="border-bottom: 1px solid #0079cc;">

						<!-- Start::header-content-left -->
						<div class="header-content-left align-items-center">

							<div class="header-element">
								<div class="horizontal-logo">
									<a href="{{url('home')}}" class="header-logo">
										<img src="{{asset('build/assets/images/brand/desktop-logo.png')}}" alt="logo" class="desktop-logo">
										<img src="{{asset('build/assets/images/brand/ff_logo.png')}}" alt="logo" class="toggle-logo">
										<img src="{{asset('build/assets/images/brand/desktop-dark.png')}}" alt="logo" class="desktop-dark">
										<img src="{{asset('build/assets/images/brand/toggle-dark.png')}}" alt="logo" class="toggle-dark">
									</a>
								</div>
							</div>
							<!-- Start::header-element -->
							<div class="header-element">
								<!-- Start::header-link -->
								<a href="javascript:void(0);" class="sidemenu-toggle header-link" data-bs-toggle="sidebar">
									<span class="open-toggle">
										<svg xmlns="http://www.w3.org/2000/svg" class="header-link-icon"
											viewBox="0 0 24 24">
											<path d="M24 0v24H0V0h24z" fill="none" opacity=".87" />
											<path
												d="M18.41 16.59L13.82 12l4.59-4.59L17 6l-6 6 6 6 1.41-1.41zM6 6h2v12H6V6z" />
										</svg>
									</span>
									<span class="close-toggle">
										<svg xmlns="http://www.w3.org/2000/svg" class="header-link-icon" viewBox="0 0 24 24"
											fill="#000000">
											<path d="M0 0h24v24H0V0z" fill="none" />
											<path
												d="M19 6.41L17.59 5 12 10.59 6.41 5 5 6.41 10.59 12 5 17.59 6.41 19 12 13.41 17.59 19 19 17.59 13.41 12 19 6.41z" />
										</svg>
									</span>
								</a>
								<!-- End::header-link -->
							</div>
							<!-- End::header-element -->


							<!-- <div class="main-header-center  d-none d-lg-block  header-link">
								<input type="text" class="form-control" id="typehead" placeholder="Search for results..."
									autocomplete="off">
								<button class="btn pe-1"><i class="fe fe-search" aria-hidden="true"></i></button>
								<div id="headersearch" class="header-search">
									<div class="p-3">
										<div class="">
											<p class="fw-semibold text-muted mb-2 fs-13">Recent Searches</p>
											<div class="ps-2">
												<a href="javascript:void(0);" class="search-tags"><i
														class="fe fe-search me-2"></i>People<span></span></a>
												<a href="javascript:void(0);" class="search-tags"><i
														class="fe fe-search me-2"></i>Pages<span></span></a>
												<a href="javascript:void(0);" class="search-tags"><i
														class="fe fe-search me-2"></i>Articles<span></span></a>
											</div>
										</div>
										
									</div>
									
								</div>
							</div> -->
							<!-- header search -->



						</div>
						<!-- End::header-content-left -->

						<!-- Start::header-content-right -->
						<div class="header-content-right">
							<button class="navbar-toggler navresponsive-toggler d-lg-none ms-auto" type="button"
								data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent-4"
								aria-controls="navbarSupportedContent-4" aria-expanded="false"
								aria-label="Toggle navigation">
								<span class="navbar-toggler-icon fe fe-more-vertical"></span>
							</button>
							<div class="navbar navbar-collapse responsive-navbar p-0">
								<div class="collapse navbar-collapse" id="navbarSupportedContent-4">
									<div class="d-flex align-items-center">
										<!-- Start::header-element -->

										<!-- Start::header-element -->
										<div class="header-element header-theme-mode">
											<!-- Start::header-link|layout-setting -->
											<a href="javascript:void(0);" class="header-link layout-setting">
												<span class="light-layout">
													<!-- Start::header-link-icon -->
													<svg xmlns="http://www.w3.org/2000/svg" enable-background="new 0 0 24 24" class="header-link-icon" viewBox="0 0 24 24">
														<g>
															<rect fill="none" height="24" width="24" />
														</g>
														<g>
															<g>
																<path
																	d="M19.78,17.51c-2.47,0-6.57-1.33-8.68-5.43C8.77,7.57,10.6,3.6,11.63,2.01C6.27,2.2,1.98,6.59,1.98,12 c0,0.14,0.02,0.28,0.02,0.42C2.61,12.16,3.28,12,3.98,12c0,0,0,0,0,0c0-3.09,1.73-5.77,4.3-7.1C7.78,7.09,7.74,9.94,9.32,13 c1.57,3.04,4.18,4.95,6.8,5.86c-1.23,0.74-2.65,1.15-4.13,1.15c-0.5,0-1-0.05-1.48-0.14c-0.37,0.7-0.94,1.27-1.64,1.64 c0.98,0.32,2.03,0.5,3.11,0.5c3.5,0,6.58-1.8,8.37-4.52C20.18,17.5,19.98,17.51,19.78,17.51z" />
																<path
																	d="M7,16l-0.18,0C6.4,14.84,5.3,14,4,14c-1.66,0-3,1.34-3,3s1.34,3,3,3c0.62,0,2.49,0,3,0c1.1,0,2-0.9,2-2 C9,16.9,8.1,16,7,16z" />
															</g>
														</g>
													</svg>
													<!-- End::header-link-icon -->
												</span>
												<span class="dark-layout">
													<!-- Start::header-link-icon -->
													<svg xmlns="http://www.w3.org/2000/svg"
														enable-background="new 0 0 24 24" class="header-link-icon"
														viewBox="0 0 24 24">
														<rect fill="none" height="24" width="24" />
														<path
															d="M12,9c1.65,0,3,1.35,3,3s-1.35,3-3,3s-3-1.35-3-3S10.35,9,12,9 M12,7c-2.76,0-5,2.24-5,5s2.24,5,5,5s5-2.24,5-5 S14.76,7,12,7L12,7z M2,13l2,0c0.55,0,1-0.45,1-1s-0.45-1-1-1l-2,0c-0.55,0-1,0.45-1,1S1.45,13,2,13z M20,13l2,0c0.55,0,1-0.45,1-1 s-0.45-1-1-1l-2,0c-0.55,0-1,0.45-1,1S19.45,13,20,13z M11,2v2c0,0.55,0.45,1,1,1s1-0.45,1-1V2c0-0.55-0.45-1-1-1S11,1.45,11,2z M11,20v2c0,0.55,0.45,1,1,1s1-0.45,1-1v-2c0-0.55-0.45-1-1-1C11.45,19,11,19.45,11,20z M5.99,4.58c-0.39-0.39-1.03-0.39-1.41,0 c-0.39,0.39-0.39,1.03,0,1.41l1.06,1.06c0.39,0.39,1.03,0.39,1.41,0s0.39-1.03,0-1.41L5.99,4.58z M18.36,16.95 c-0.39-0.39-1.03-0.39-1.41,0c-0.39,0.39-0.39,1.03,0,1.41l1.06,1.06c0.39,0.39,1.03,0.39,1.41,0c0.39-0.39,0.39-1.03,0-1.41 L18.36,16.95z M19.42,5.99c0.39-0.39,0.39-1.03,0-1.41c-0.39-0.39-1.03-0.39-1.41,0l-1.06,1.06c-0.39,0.39-0.39,1.03,0,1.41 s1.03,0.39,1.41,0L19.42,5.99z M7.05,18.36c0.39-0.39,0.39-1.03,0-1.41c-0.39-0.39-1.03-0.39-1.41,0l-1.06,1.06 c-0.39,0.39-0.39,1.03,0,1.41s1.03,0.39,1.41,0L7.05,18.36z" />
													</svg>
													<!-- End::header-link-icon -->
												</span>
											</a>
											<!-- End::header-link|layout-setting -->
										</div>
										<!-- End::header-element -->

										<!-- Start::header-element -->
										<div class="header-element header-search ">
											<!-- Start::header-link -->
											<a href="javascript:void(0);" class="header-link d-lg-none d-block"
												data-bs-toggle="modal" data-bs-target="#searchModal">
												<!-- <i class="bi bi-search-alt-2   ps-0"></i> -->
												<svg xmlns="http://www.w3.org/2000/svg" class="header-link-icon"
													viewBox="0 0 24 24" width="24px">
													<path d="M0 0h24v24H0V0z" fill="none" />
													<path
														d="M15.5 14h-.79l-.28-.27C15.41 12.59 16 11.11 16 9.5 16 5.91 13.09 3 9.5 3S3 5.91 3 9.5 5.91 16 9.5 16c1.61 0 3.09-.59 4.23-1.57l.27.28v.79l5 4.99L20.49 19l-4.99-5zm-6 0C7.01 14 5 11.99 5 9.5S7.01 5 9.5 5 14 7.01 14 9.5 11.99 14 9.5 14z" />
												</svg>
											</a>
											<!-- End::header-link -->
										</div>
										<!-- End::header-element -->

										

										<!-- Start::header-element -->
										<div class="header-element dropdown-center notifications-dropdown">
											<!-- Start::header-link|dropdown-toggle -->
											<a href="javascript:void(0);" class="header-link dropdown-toggle"
												data-bs-toggle="dropdown" aria-expanded="false">
												<svg xmlns="http://www.w3.org/2000/svg" class="header-link-icon"
													viewBox="0 0 24 24">
													<path d="M0 0h24v24H0V0z" fill="none" />
													<path
														d="M12 22c1.1 0 2-.9 2-2h-4c0 1.1.9 2 2 2zm6-6v-5c0-3.07-1.63-5.64-4.5-6.32V4c0-.83-.67-1.5-1.5-1.5s-1.5.67-1.5 1.5v.68C7.64 5.36 6 7.92 6 11v5l-2 2v1h16v-1l-2-2zm-2 1H8v-6c0-2.48 1.51-4.5 4-4.5s4 2.02 4 4.5v6z" />
												</svg>
												<span
													class="badge bg-secondary rounded-pill header-icon-badge pulse pulse-secondary"
													id="notification-icon-badge">0</span>
											</a>
											
											<!-- End::header-link|dropdown-toggle -->
											<!-- Start::main-header-dropdown -->
											<div class="main-header-dropdown dropdown-menu dropdown-menu-end"
												data-popper-placement="none">
												<div class="p-3">
													<div class="d-flex align-items-center justify-content-between">
														<p class="mb-0 fs-15 fw-semibold">Notifications</p>
														<a href="javascript:void(0);" class="badge bg-secondary-transparent"
															id="notifiation-data">0 Items</a>
													</div>
												</div>
												<div class="dropdown-divider my-0"></div>
												<ul class="list-unstyled mb-0">
													<!-- <li class="dropdown-item mb-1">
														<div class="d-flex align-items-start">
															<div class="pe-2">
																<span class="avatar avatar-md bg-primary rounded-circle"><i
																		class="ti ti-gift fs-18"></i></span>
															</div>
															<div class="flex-grow-1">
																<div
																	class="d-flex align-items-start justify-content-between">
																	<div>
																		<a href="javascript:void(0);"
																			class="mb-0 fs-13 font-weight-semibold text-dark">Nile
																			Robetz send to a HTML file for Upload</a>
																		<div class="p-1 text-warning">
																			<span class="fs-12 me-2"><i
																					class="bi bi-folder2-open me-1 fs-14"></i>HTML
																				File</span>
																			<span class="fs-13"><i
																					class="bi bi-download"></i></span>
																		</div>
																	</div>
																	<a href="javascript:void(0);"
																		class="min-w-fit-content text-muted text-opacity-75 ms-1 dropdown-item-close1"><i
																			class="ti ti-x fs-16"></i></a>
																</div>
															</div>
														</div>
													</li> -->
													
												</ul>
												<!-- <div class="dropdown-divider"></div> -->
												<div class="p-3 empty-header-item1">
													<div class="d-grid">
														<a href="javascript:void(0);" class="btn btn-primary">View All</a>
													</div>
												</div>
												<div class="p-5 empty-item1 d-none">
													<div class="text-center">
														<span class="avatar avatar-xl rounded-2 bg-secondary-transparent">
															<i class="ri-notification-off-line fs-2"></i>
														</span>
														<h6 class="fw-semibold mt-3">No New Notifications</h6>
													</div>
												</div>
											</div>
											<!-- End::main-header-dropdown -->
										</div>
										<!-- End::header-element -->

								

										<!-- Start::header-element -->
										<div class="header-element header-fullscreen">
											<!-- Start::header-link -->
											<a onclick="openFullscreen();" href="javascript:void(0);" class="header-link">
												<svg xmlns="http://www.w3.org/2000/svg"
													class="header-link-icon full-screen-open" viewBox="0 0 24 24">
													<path d="M0 0h24v24H0V0z" fill="none" />
													<path
														d="M7 14H5v5h5v-2H7v-3zm-2-4h2V7h3V5H5v5zm12 7h-3v2h5v-5h-2v3zM14 5v2h3v3h2V5h-5z" />
												</svg>
												<svg xmlns="http://www.w3.org/2000/svg" height="24px"
													class="header-link-icon full-screen-close d-none" viewBox="0 0 24 24"
													width="24px" fill="none">
													<path d="M0 0h24v24H0V0z" fill="none" />
													<path
														d="M5 16h3v3h2v-5H5v2zm3-8H5v2h5V5H8v3zm6 11h2v-3h3v-2h-5v5zm2-11V5h-2v5h5V8h-3z" />
												</svg>
											</a>
											<!-- End::header-link -->
										</div>
										<!-- End::header-element -->

										<!-- Start::header-element|main-profile-user -->
										<div class="header-element main-profile-user">
											<!-- Start::header-link|dropdown-toggle -->
											<a href="javascript:void(0);" class="header-link dropdown-toggle d-flex align-items-center"
												id="mainHeaderProfile" data-bs-toggle="dropdown" aria-expanded="false">
												<span class="me-2">
													<img src="{{asset('build/assets/images/users/user.png')}}" alt="img" width="30"
														height="30" class="rounded-circle">
												</span>
												<div class="d-xl-block d-none lh-1">
													<h6 class="fs-13 font-weight-semibold mb-0">{{ Auth::user()->name }}</h6>
													<span class="op-8 fs-10">{{ Auth::user()->position }}</span>
												</div>
											</a>
											<!-- End::header-link|dropdown-toggle -->
											<ul class="dropdown-menu pt-0 overflow-hidden dropdown-menu-end mt-1"
												aria-labelledby="mainHeaderProfile">
												<li><a class="dropdown-item" href="javascript:void(0);"><i
															class="ti ti-user-circle fs-18 me-2 op-7"></i>Profile</a></li>
												<li><a class="dropdown-item" href="javascript:void(0);"><i
															class="ti ti-inbox fs-18 me-2 op-7"></i>Dashboard</a></li>
												<li>
													<form action="{{ route('logout') }}" method="POST">
														@csrf
														<button type="submit" class="dropdown-item"><i
															class="ti ti-power fs-18 me-2 op-7"></i>Sign Out</button>
													</form>
												</li>
												<li>
													<hr class="dropdown-divider my-0">
												</li>
											</ul>
										</div>
										<!-- End::header-element|main-profile-user -->


									</div>
								</div>
							</div>
							<!-- Start::header-element -->
							

						</div>
						<!-- End::header-content-right -->
					</div>
					<!-- End::main-header-container -->

				</header>
					