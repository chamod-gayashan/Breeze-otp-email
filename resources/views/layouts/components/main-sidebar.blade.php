<style>
    #fixed-bottom {
        position: fixed;
        bottom: 5px;
		text-align: center;
    }
</style>
				<aside class="app-sidebar sticky" id="sidebar">

					<!-- Start::main-sidebar-header -->
					<div class="main-sidebar-header">
						<a href="{{url('home')}}" class="header-logo">
							<img src="{{asset('build/assets/images/brand/ff_logo.png')}}" alt="logo" class="desktop-logo">
							<img src="{{asset('build/assets/images/brand/ff_logo.png')}}" alt="logo" class="toggle-logo">
							<img src="{{asset('build/assets/images/brand/ff_logo.png')}}" alt="logo" class="desktop-dark" style="height: 50px;">
							<img src="{{asset('build/assets/images/brand/ff_logo.png')}}" alt="logo" class="toggle-dark">
						</a>
					</div>
					<!-- End::main-sidebar-header -->

					<!-- Start::main-sidebar -->
					<div class="main-sidebar" id="sidebar-scroll">

						<!-- Start::nav -->
						<nav class="main-menu-container nav nav-pills flex-column sub-open">
							<div class="slide-left" id="slide-left">
								<svg xmlns="http://www.w3.org/2000/svg" fill="#7b8191" width="24" height="24"
									viewBox="0 0 24 24">
									<path d="M13.293 6.293 7.586 12l5.707 5.707 1.414-1.414L10.414 12l4.293-4.293z"></path>
								</svg>
							</div>
							<ul class="main-menu">
								<!-- Start::slide__category -->
								<li class="slide__category"><span class="category-name">Main</span></li>
								<!-- End::slide__category -->

								<!-- Start::slide -->
								<li class="slide">
									<a href="{{url('home')}}" class="side-menu__item">
										<i class="fa fa-home side-menu__icon"></i>
										<span class="side-menu__label">Dashboard</span>
									</a>
								</li>
						</nav>
						<!-- End::nav -->

					</div>
					<!-- End::main-sidebar -->

				</aside>
