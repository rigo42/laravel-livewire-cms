
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
	<!--begin::Head-->
	<head><base href="">
		<title>Laravel CMS</title>

		<!--  Meta tags -->
		<meta name="description" content="The most advanced Bootstrap Admin Theme on Themeforest trusted by 94,000 beginners and professionals. Multi-demo, Dark Mode, RTL support and complete React, Angular, Vue &amp; Laravel versions. Grab your copy now and get life-time updates for free." />
		<meta name="keywords" content="Metronic, bootstrap, bootstrap 5, Angular, VueJs, React, Laravel, admin themes, web design, figma, web development, free templates, free admin themes, bootstrap theme, bootstrap template, bootstrap dashboard, bootstrap dak mode, bootstrap button, bootstrap datepicker, bootstrap timepicker, fullcalendar, datatables, flaticon" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<meta charset="utf-8" />
		<meta property="og:locale" content="en_US" />
		<meta property="og:type" content="article" />
		<meta property="og:title" content="Metronic - Bootstrap 5 HTML, VueJS, React, Angular &amp; Laravel Admin Dashboard Theme" />
		<meta property="og:url" content="https://keenthemes.com/metronic" />
		<meta property="og:site_name" content="Keenthemes | Metronic" />

		<!-- CSS -->
		<link rel="canonical" href="Https://preview.keenthemes.com/metronic8" />
		<link rel="shortcut icon" href="{{ asset('assets/admin') }}/media/logos/favicon.ico" />
		
		<!--begin::Global Stylesheets Bundle(used by all pages)-->
		<link href="{{ asset('assets/admin') }}/plugins/global/plugins.bundle.css" rel="stylesheet" type="text/css" />
		<link href="{{ asset('assets/admin') }}/css/style.bundle.css" rel="stylesheet" type="text/css" />
		<link href="{{ asset('assets/admin') }}/css/custom.css" rel="stylesheet" type="text/css" />
		
	</head>
	<!--end::Head-->
	<!--begin::Body-->
	<body id="kt_body" style="background-image: url()" class="header-fixed header-tablet-and-mobile-fixed aside-fixed aside-secondary-enabled">
		<!--begin::Main-->
		<!--begin::Root-->
		<div class="d-flex flex-column flex-root">
			<!--begin::Page-->
			<div class="page d-flex flex-row flex-column-fluid">
				<!--begin::Aside-->
				<div id="kt_aside" class="aside aside-extended bg-white" data-kt-drawer="true" data-kt-drawer-name="aside" data-kt-drawer-activate="{default: true, lg: false}" data-kt-drawer-overlay="true" data-kt-drawer-width="auto" data-kt-drawer-direction="start" data-kt-drawer-toggle="#kt_aside_toggle">
					<!--begin::Primary-->
					<div class="aside-primary d-flex flex-column align-items-lg-center flex-row-auto">
						<!--begin::Logo-->
						<div class="aside-logo d-none d-lg-flex flex-column align-items-center flex-column-auto py-10" id="kt_aside_logo">
							<a href="../../demo7/dist/index.html">
								<img alt="Logo" src="https://rigo42.github.io/company/images/logo2.png" class="h-35px" />
							</a>
						</div>
						<!--end::Logo-->
						<!--begin::Nav-->
						<div class="aside-nav d-flex flex-column align-items-center flex-column-fluid w-100 pt-5 pt-lg-0" id="kt_aside_nav">
							
							<!--begin::Wrapper-->
							<div class="hover-scroll-y mb-10" data-kt-scroll="true" data-kt-scroll-activate="{default: false, lg: true}" data-kt-scroll-height="auto" data-kt-scroll-wrappers="#kt_aside_nav" data-kt-scroll-dependencies="#kt_aside_logo, #kt_aside_footer" data-kt-scroll-offset="0px">
								<!--begin::Nav-->
								<ul class="nav flex-column">

									<!--begin::Dashboard-->
									<li class="nav-item mb-2" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-placement="right" data-bs-dismiss="click" title="Dashboard">
										<!--begin::Nav link-->
										<a class="nav-link btn btn-icon btn-active-color-primary btn-color-gray-400 btn-active-light active" data-bs-toggle="tab" href="#kt_aside_nav_tab_dashboard">
											<!--begin::Svg Icon | path: assets/media/icons/duotone/Shopping/Chart.svg-->
											<span class="svg-icon svg-icon-2"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
												<path d="M15.7632 15.2206C15.4599 14.9148 14.9749 14.8913 14.6449 15.166C13.1591 16.3965 10.8415 16.3965 9.35567 15.166C9.02566 14.8913 8.54066 14.9148 8.23733 15.2206L5.29062 18.1907C5.12812 18.3537 5.04062 18.5763 5.04644 18.8073C5.05226 19.0374 5.15226 19.255 5.32226 19.4095C7.16478 21.0802 9.53649 22 11.9998 22C14.4632 22 16.8357 21.0802 18.6782 19.4095C18.8482 19.255 18.9474 19.0374 18.9541 18.8073C18.9599 18.5763 18.8716 18.3537 18.7099 18.1907L15.7632 15.2206Z" fill="#E4E6EF"/>
												<path d="M7.90424 12.672C7.85592 12.4048 7.83342 12.1587 7.83342 11.9202C7.83342 10.1479 8.95012 8.55864 10.6118 7.96563C10.9443 7.84637 11.1668 7.52969 11.1668 7.17355V2.84096C11.1668 2.59149 11.0568 2.35461 10.8668 2.19503C10.6768 2.03545 10.4226 1.96907 10.1826 2.01443C5.44172 2.89388 2 7.06012 2 11.9202C2 13.5136 2.36582 15.0474 3.08919 16.4795C3.21001 16.7189 3.43838 16.8861 3.7017 16.9281C3.74502 16.9348 3.7892 16.9382 3.8317 16.9382C4.05088 16.9382 4.2642 16.8508 4.42089 16.692L7.67342 13.4145C7.86589 13.2196 7.95257 12.9424 7.90424 12.672Z" fill="#E4E6EF"/>
												<path d="M13.8174 2.01438C13.5774 1.96819 13.3232 2.03454 13.1341 2.19499C12.9432 2.35457 12.8332 2.59144 12.8332 2.84008V7.17351C12.8332 7.52882 13.0557 7.84632 13.3882 7.96476C15.0499 8.55863 16.1666 10.1478 16.1666 11.9202C16.1666 12.1588 16.1441 12.4048 16.0958 12.672C16.0483 12.9424 16.1341 13.2196 16.3275 13.4136L19.5792 16.692C19.7367 16.8508 19.9492 16.9382 20.1683 16.9382C20.2117 16.9382 20.2558 16.9348 20.2983 16.9273C20.5625 16.8853 20.79 16.7181 20.9117 16.4787C21.6342 15.0474 22 13.5136 22 11.9202C22 7.05925 18.5583 2.89383 13.8174 2.01438Z" fill="#E4E6EF"/>
												</svg></span>
												<!--end::Svg Icon-->
										</a>
										<!--end::Nav link-->
									</li>


									<!--begin::Site web-->
									<li class="nav-item mb-2" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-placement="right" data-bs-dismiss="click" title="Página web">
										<!--begin::Nav link-->
										<a class="nav-link btn btn-icon btn-active-color-primary btn-color-gray-400 btn-active-light" data-bs-toggle="tab" href="#kt_aside_nav_tab_website">
											<!--begin::Svg Icon | path: icons/duotone/Layout/Layout-4-blocks.svg-->
											<span class="svg-icon svg-icon-2x">
												<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
													<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
														<rect x="0" y="0" width="24" height="24"></rect>
														<rect fill="#000000" x="4" y="4" width="7" height="7" rx="1.5"></rect>
														<path d="M5.5,13 L9.5,13 C10.3284271,13 11,13.6715729 11,14.5 L11,18.5 C11,19.3284271 10.3284271,20 9.5,20 L5.5,20 C4.67157288,20 4,19.3284271 4,18.5 L4,14.5 C4,13.6715729 4.67157288,13 5.5,13 Z M14.5,4 L18.5,4 C19.3284271,4 20,4.67157288 20,5.5 L20,9.5 C20,10.3284271 19.3284271,11 18.5,11 L14.5,11 C13.6715729,11 13,10.3284271 13,9.5 L13,5.5 C13,4.67157288 13.6715729,4 14.5,4 Z M14.5,13 L18.5,13 C19.3284271,13 20,13.6715729 20,14.5 L20,18.5 C20,19.3284271 19.3284271,20 18.5,20 L14.5,20 C13.6715729,20 13,19.3284271 13,18.5 L13,14.5 C13,13.6715729 13.6715729,13 14.5,13 Z" fill="#000000" opacity="0.3"></path>
													</g>
												</svg>
											</span>
											<!--end::Svg Icon-->
										</a>
										<!--end::Nav link-->
									</li>
									
                                    @if (Route::has('admin.blog.*'))
									<!--begin::Blogs-->
									<li class="nav-item mb-2" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-placement="right" data-bs-dismiss="click" title="Blogs">
										<!--begin::Nav link-->
										<a class="nav-link btn btn-icon btn-active-color-primary btn-color-gray-400 btn-active-light" data-bs-toggle="tab" href="#kt_aside_nav_tab_blog">
											<!--begin::Svg Icon | path: assets/media/icons/duotone/Home/Book-open.svg-->
											<span class="svg-icon svg-icon-2"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
												<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
													<rect x="0" y="0" width="24" height="24"/>
													<path d="M13.6855025,18.7082217 C15.9113859,17.8189707 18.682885,17.2495635 22,17 C22,16.9325178 22,13.1012863 22,5.50630526 L21.9999762,5.50630526 C21.9999762,5.23017604 21.7761292,5.00632908 21.5,5.00632908 C21.4957817,5.00632908 21.4915635,5.00638247 21.4873465,5.00648922 C18.658231,5.07811173 15.8291155,5.74261533 13,7 C13,7.04449645 13,10.79246 13,18.2438906 L12.9999854,18.2438906 C12.9999854,18.520041 13.2238496,18.7439052 13.5,18.7439052 C13.5635398,18.7439052 13.6264972,18.7317946 13.6855025,18.7082217 Z" fill="#000000"/>
													<path d="M10.3144829,18.7082217 C8.08859955,17.8189707 5.31710038,17.2495635 1.99998542,17 C1.99998542,16.9325178 1.99998542,13.1012863 1.99998542,5.50630526 L2.00000925,5.50630526 C2.00000925,5.23017604 2.22385621,5.00632908 2.49998542,5.00632908 C2.50420375,5.00632908 2.5084219,5.00638247 2.51263888,5.00648922 C5.34175439,5.07811173 8.17086991,5.74261533 10.9999854,7 C10.9999854,7.04449645 10.9999854,10.79246 10.9999854,18.2438906 L11,18.2438906 C11,18.520041 10.7761358,18.7439052 10.4999854,18.7439052 C10.4364457,18.7439052 10.3734882,18.7317946 10.3144829,18.7082217 Z" fill="#000000" opacity="0.3"/>
												</g>
											</svg></span>
											<!--end::Svg Icon-->
										</a>
										<!--end::Nav link-->
									</li>
                                    @endif
									
									<!--begin::E-commerce-->
									<li class="nav-item mb-2" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-placement="right" data-bs-dismiss="click" title="E-commerce">
										<!--begin::Nav link-->
										<a class="nav-link btn btn-icon btn-active-color-primary btn-color-gray-400 btn-active-light" data-bs-toggle="tab" href="#kt_aside_nav_tab_ecommerce">
											<!--begin::Svg Icon | path: assets/media/icons/duotone/Shopping/Cart1.svg-->
											<span class="svg-icon svg-icon-2"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
												<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
													<rect x="0" y="0" width="24" height="24"/>
													<path d="M18.1446364,11.84388 L17.4471627,16.0287218 C17.4463569,16.0335568 17.4455155,16.0383857 17.4446387,16.0432083 C17.345843,16.5865846 16.8252597,16.9469884 16.2818833,16.8481927 L4.91303792,14.7811299 C4.53842737,14.7130189 4.23500006,14.4380834 4.13039941,14.0719812 L2.30560137,7.68518803 C2.28007524,7.59584656 2.26712532,7.50338343 2.26712532,7.4104669 C2.26712532,6.85818215 2.71484057,6.4104669 3.26712532,6.4104669 L16.9929851,6.4104669 L17.606173,3.78251876 C17.7307772,3.24850086 18.2068633,2.87071314 18.7552257,2.87071314 L20.8200821,2.87071314 C21.4717328,2.87071314 22,3.39898039 22,4.05063106 C22,4.70228173 21.4717328,5.23054898 20.8200821,5.23054898 L19.6915238,5.23054898 L18.1446364,11.84388 Z" fill="#000000" opacity="0.3"/>
													<path d="M6.5,21 C5.67157288,21 5,20.3284271 5,19.5 C5,18.6715729 5.67157288,18 6.5,18 C7.32842712,18 8,18.6715729 8,19.5 C8,20.3284271 7.32842712,21 6.5,21 Z M15.5,21 C14.6715729,21 14,20.3284271 14,19.5 C14,18.6715729 14.6715729,18 15.5,18 C16.3284271,18 17,18.6715729 17,19.5 C17,20.3284271 16.3284271,21 15.5,21 Z" fill="#000000"/>
												</g>
											</svg></span>
											<!--end::Svg Icon-->
										</a>
										<!--end::Nav link-->
									</li>
									
									<!--begin::Notifications-->
									<li class="nav-item mb-2" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-placement="right" data-bs-dismiss="click" title="Notifications">
										<!--begin::Nav link-->
										<a class="nav-link btn btn-icon btn-active-color-primary btn-color-gray-400 btn-active-light" data-bs-toggle="tab" href="#kt_aside_nav_tab_notifications">
											<!--begin::Svg Icon | path: assets/media/icons/duotone/General/Notifications1.svg-->
											<span class="svg-icon svg-icon-2"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
												<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
													<path d="M17,12 L18.5,12 C19.3284271,12 20,12.6715729 20,13.5 C20,14.3284271 19.3284271,15 18.5,15 L5.5,15 C4.67157288,15 4,14.3284271 4,13.5 C4,12.6715729 4.67157288,12 5.5,12 L7,12 L7.5582739,6.97553494 C7.80974924,4.71225688 9.72279394,3 12,3 C14.2772061,3 16.1902508,4.71225688 16.4417261,6.97553494 L17,12 Z" fill="#000000"/>
													<rect fill="#000000" opacity="0.3" x="10" y="16" width="4" height="4" rx="2"/>
												</g>
											</svg></span>
											<!--end::Svg Icon-->
										</a>
										<!--end::Nav link-->
									</li>
									
									
								</ul>
								<!--end::Tabs-->
							</div>
							<!--end::Nav-->
						</div>
						
						<!--begin::Footer-->
						<div class="aside-footer d-flex flex-column align-items-center flex-column-auto" id="kt_aside_footer">
							
							<!--begin::User-->
							<div class="d-flex align-items-center mb-10" id="kt_header_user_menu_toggle">
								<!--begin::Menu wrapper-->
								<div class="cursor-pointer symbol symbol-40px" data-kt-menu-trigger="click" data-kt-menu-overflow="true" data-kt-menu-placement="top-start" data-kt-menu-flip="top-end" data-bs-toggle="tooltip" data-bs-placement="right" data-bs-dismiss="click" title="User profile">
									<img src="assets/media/avatars/150-26.jpg" alt="metronic" />
								</div>
								<!--begin::Menu-->
								<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg menu-state-primary fw-bold py-4 fs-6 w-275px" data-kt-menu="true">
									<!--begin::Menu item-->
									<div class="menu-item px-3">
										<div class="menu-content d-flex align-items-center px-3">
											<!--begin::Avatar-->
											<div class="symbol symbol-50px me-5">
												<img alt="Logo" src="assets/media/avatars/150-26.jpg" />
											</div>
											<!--end::Avatar-->
											<!--begin::Username-->
											<div class="d-flex flex-column">
												<div class="fw-bolder d-flex align-items-center fs-5">Max Smith
												<span class="badge badge-light-success fw-bolder fs-8 px-2 py-1 ms-2">Pro</span></div>
												<a href="#" class="fw-bold text-muted text-hover-primary fs-7">max@kt.com</a>
											</div>
											<!--end::Username-->
										</div>
									</div>
									<!--end::Menu item-->
									<!--begin::Menu separator-->
									<div class="separator my-2"></div>
									<!--end::Menu separator-->
									<!--begin::Menu item-->
									<div class="menu-item px-5">
										<a href="../../demo7/dist/account/overview.html" class="menu-link px-5">My Profile</a>
									</div>
									<!--end::Menu item-->
									<!--begin::Menu item-->
									<div class="menu-item px-5">
										<a href="../../demo7/dist/pages/projects/list.html" class="menu-link px-5">
											<span class="menu-text">My Projects</span>
											<span class="menu-badge">
												<span class="badge badge-light-danger badge-circle fw-bolder fs-7">3</span>
											</span>
										</a>
									</div>
									<!--end::Menu item-->
									<!--begin::Menu item-->
									<div class="menu-item px-5" data-kt-menu-trigger="hover" data-kt-menu-placement="right-end" data-kt-menu-flip="{default: 'bottom', lg: ''}">
										<a href="#" class="menu-link px-5">
											<span class="menu-title">My Subscription</span>
											<span class="menu-arrow"></span>
										</a>
										<!--begin::Menu sub-->
										<div class="menu-sub menu-sub-dropdown w-175px py-4">
											<!--begin::Menu item-->
											<div class="menu-item px-3">
												<a href="../../demo7/dist/account/referrals.html" class="menu-link px-5">Referrals</a>
											</div>
											<!--end::Menu item-->
											<!--begin::Menu item-->
											<div class="menu-item px-3">
												<a href="../../demo7/dist/account/billing.html" class="menu-link px-5">Billing</a>
											</div>
											<!--end::Menu item-->
											<!--begin::Menu item-->
											<div class="menu-item px-3">
												<a href="../../demo7/dist/account/statements.html" class="menu-link px-5">Payments</a>
											</div>
											<!--end::Menu item-->
											<!--begin::Menu item-->
											<div class="menu-item px-3">
												<a href="../../demo7/dist/account/statements.html" class="menu-link d-flex flex-stack px-5">Statements
												<i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip" title="View your statements"></i></a>
											</div>
											<!--end::Menu item-->
											<!--begin::Menu separator-->
											<div class="separator my-2"></div>
											<!--end::Menu separator-->
											<!--begin::Menu item-->
											<div class="menu-item px-3">
												<div class="menu-content px-3">
													<label class="form-check form-switch form-check-custom form-check-solid">
														<input class="form-check-input w-30px h-20px" type="checkbox" value="1" checked="checked" name="notifications" />
														<span class="form-check-label text-muted fs-7">Notifications</span>
													</label>
												</div>
											</div>
											<!--end::Menu item-->
										</div>
										<!--end::Menu sub-->
									</div>
									<!--end::Menu item-->
									<!--begin::Menu item-->
									<div class="menu-item px-5">
										<a href="../../demo7/dist/account/statements.html" class="menu-link px-5">My Statements</a>
									</div>
									<!--end::Menu item-->
									<!--begin::Menu separator-->
									<div class="separator my-2"></div>
									<!--end::Menu separator-->
									<!--begin::Menu item-->
									<div class="menu-item px-5" data-kt-menu-trigger="hover" data-kt-menu-placement="right-end" data-kt-menu-flip="{default: 'top', lg: ''}">
										<a href="#" class="menu-link px-5">
											<span class="menu-title position-relative">Language
											<span class="fs-8 rounded bg-light px-3 py-2 position-absolute translate-middle-y top-50 end-0">English
											<img class="w-15px h-15px rounded-1 ms-2" src="assets/media/flags/united-states.svg" alt="metronic" /></span></span>
										</a>
										<!--begin::Menu sub-->
										<div class="menu-sub menu-sub-dropdown w-175px py-4">
											<!--begin::Menu item-->
											<div class="menu-item px-3">
												<a href="../../demo7/dist/account/settings.html" class="menu-link d-flex px-5 active">
												<span class="symbol symbol-20px me-4">
													<img class="rounded-1" src="assets/media/flags/united-states.svg" alt="metronic" />
												</span>English</a>
											</div>
											<!--end::Menu item-->
											<!--begin::Menu item-->
											<div class="menu-item px-3">
												<a href="../../demo7/dist/account/settings.html" class="menu-link d-flex px-5">
												<span class="symbol symbol-20px me-4">
													<img class="rounded-1" src="assets/media/flags/spain.svg" alt="metronic" />
												</span>Spanish</a>
											</div>
											<!--end::Menu item-->
											<!--begin::Menu item-->
											<div class="menu-item px-3">
												<a href="../../demo7/dist/account/settings.html" class="menu-link d-flex px-5">
												<span class="symbol symbol-20px me-4">
													<img class="rounded-1" src="assets/media/flags/germany.svg" alt="metronic" />
												</span>German</a>
											</div>
											<!--end::Menu item-->
											<!--begin::Menu item-->
											<div class="menu-item px-3">
												<a href="../../demo7/dist/account/settings.html" class="menu-link d-flex px-5">
												<span class="symbol symbol-20px me-4">
													<img class="rounded-1" src="assets/media/flags/japan.svg" alt="metronic" />
												</span>Japanese</a>
											</div>
											<!--end::Menu item-->
											<!--begin::Menu item-->
											<div class="menu-item px-3">
												<a href="../../demo7/dist/account/settings.html" class="menu-link d-flex px-5">
												<span class="symbol symbol-20px me-4">
													<img class="rounded-1" src="assets/media/flags/france.svg" alt="metronic" />
												</span>French</a>
											</div>
											<!--end::Menu item-->
										</div>
										<!--end::Menu sub-->
									</div>
									<!--end::Menu item-->
									<!--begin::Menu item-->
									<div class="menu-item px-5 my-1">
										<a href="../../demo7/dist/account/settings.html" class="menu-link px-5">Account Settings</a>
									</div>
									<!--end::Menu item-->
									<!--begin::Menu item-->
									<div class="menu-item px-5">
										<a href="../../demo7/dist/authentication/flows/basic/sign-in.html" class="menu-link px-5">Sign Out</a>
									</div>
									<!--end::Menu item-->
								</div>
								<!--end::Menu-->
								<!--end::Menu wrapper-->
							</div>
							<!--end::User-->
						</div>
						
					</div>
					<!--end::Primary-->

					<!--begin::Secondary-->
					<div class="aside-secondary d-flex flex-row-fluid">
						<!--begin::Workspace-->
						<div class="aside-workspace my-5 p-5" id="kt_aside_wordspace">
							<div class="d-flex h-100 flex-column">
								<!--begin::Wrapper-->
								<div class="flex-column-fluid hover-scroll-y" data-kt-scroll="true" data-kt-scroll-activate="true" data-kt-scroll-height="auto" data-kt-scroll-wrappers="#kt_aside_wordspace" data-kt-scroll-dependencies="#kt_aside_secondary_footer" data-kt-scroll-offset="0px">
									<!--begin::Tab content-->
									<div class="tab-content">

										<!--begin::Dashboard-->
										<div class="tab-pane fade active show" id="kt_aside_nav_tab_dashboard" role="tabpanel">
											<div class="m-0">
												<!--begin::Heading-->
												<h3 class="text-gray-800 fw-bold mb-6 mx-5">Dashboard</h3>
												<!--end::Heading-->
												<!--begin::Items-->
												<div class="mb-10">
													<!--begin::General-->
													<a href="#" class="custom-list d-flex align-items-center px-5 py-4 bg-active bg-hove-primary">
														<!--begin::Symbol-->
														<div class="symbol symbol-40px me-5 menu-active-bg">
															<span class="symbol-label symbol-primary">
																<!--begin::Svg Icon | path: assets/media/icons/duotone/Shopping/Chart.svg-->
																<span class="svg-icon svg-icon-2 svg-icon-primary"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
																	<path d="M15.7632 15.2206C15.4599 14.9148 14.9749 14.8913 14.6449 15.166C13.1591 16.3965 10.8415 16.3965 9.35567 15.166C9.02566 14.8913 8.54066 14.9148 8.23733 15.2206L5.29062 18.1907C5.12812 18.3537 5.04062 18.5763 5.04644 18.8073C5.05226 19.0374 5.15226 19.255 5.32226 19.4095C7.16478 21.0802 9.53649 22 11.9998 22C14.4632 22 16.8357 21.0802 18.6782 19.4095C18.8482 19.255 18.9474 19.0374 18.9541 18.8073C18.9599 18.5763 18.8716 18.3537 18.7099 18.1907L15.7632 15.2206Z" fill="#E4E6EF"/>
																	<path d="M7.90424 12.672C7.85592 12.4048 7.83342 12.1587 7.83342 11.9202C7.83342 10.1479 8.95012 8.55864 10.6118 7.96563C10.9443 7.84637 11.1668 7.52969 11.1668 7.17355V2.84096C11.1668 2.59149 11.0568 2.35461 10.8668 2.19503C10.6768 2.03545 10.4226 1.96907 10.1826 2.01443C5.44172 2.89388 2 7.06012 2 11.9202C2 13.5136 2.36582 15.0474 3.08919 16.4795C3.21001 16.7189 3.43838 16.8861 3.7017 16.9281C3.74502 16.9348 3.7892 16.9382 3.8317 16.9382C4.05088 16.9382 4.2642 16.8508 4.42089 16.692L7.67342 13.4145C7.86589 13.2196 7.95257 12.9424 7.90424 12.672Z" fill="#E4E6EF"/>
																	<path d="M13.8174 2.01438C13.5774 1.96819 13.3232 2.03454 13.1341 2.19499C12.9432 2.35457 12.8332 2.59144 12.8332 2.84008V7.17351C12.8332 7.52882 13.0557 7.84632 13.3882 7.96476C15.0499 8.55863 16.1666 10.1478 16.1666 11.9202C16.1666 12.1588 16.1441 12.4048 16.0958 12.672C16.0483 12.9424 16.1341 13.2196 16.3275 13.4136L19.5792 16.692C19.7367 16.8508 19.9492 16.9382 20.1683 16.9382C20.2117 16.9382 20.2558 16.9348 20.2983 16.9273C20.5625 16.8853 20.79 16.7181 20.9117 16.4787C21.6342 15.0474 22 13.5136 22 11.9202C22 7.05925 18.5583 2.89383 13.8174 2.01438Z" fill="#E4E6EF"/>
																	</svg></span>
																	<!--end::Svg Icon-->
															</span>
														</div>
														<!--end::Symbol-->
														<!--begin::Description-->
														<div class="d-flex flex-column flex-grow-1">
															<!--begin::Title-->
															<h5 class="custom-list-title fw-bold text-gray-800 mb-1">General</h5>
															<!--end::Title-->
														</div>
														<!--begin::Description-->
													</a>

													<!--begin::Blog-->
													<a href="#" class="custom-list d-flex align-items-center px-5 py-4 bg-hove-primary">
														<!--begin::Symbol-->
														<div class="symbol symbol-40px me-5 menu-active-bg">
															<span class="symbol-label ">
																<!--begin::Svg Icon | path: assets/media/icons/duotone/Home/Book-open.svg-->
																<span class="svg-icon svg-icon-2 "><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
																	<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
																		<rect x="0" y="0" width="24" height="24"/>
																		<path d="M13.6855025,18.7082217 C15.9113859,17.8189707 18.682885,17.2495635 22,17 C22,16.9325178 22,13.1012863 22,5.50630526 L21.9999762,5.50630526 C21.9999762,5.23017604 21.7761292,5.00632908 21.5,5.00632908 C21.4957817,5.00632908 21.4915635,5.00638247 21.4873465,5.00648922 C18.658231,5.07811173 15.8291155,5.74261533 13,7 C13,7.04449645 13,10.79246 13,18.2438906 L12.9999854,18.2438906 C12.9999854,18.520041 13.2238496,18.7439052 13.5,18.7439052 C13.5635398,18.7439052 13.6264972,18.7317946 13.6855025,18.7082217 Z" fill="#000000"/>
																		<path d="M10.3144829,18.7082217 C8.08859955,17.8189707 5.31710038,17.2495635 1.99998542,17 C1.99998542,16.9325178 1.99998542,13.1012863 1.99998542,5.50630526 L2.00000925,5.50630526 C2.00000925,5.23017604 2.22385621,5.00632908 2.49998542,5.00632908 C2.50420375,5.00632908 2.5084219,5.00638247 2.51263888,5.00648922 C5.34175439,5.07811173 8.17086991,5.74261533 10.9999854,7 C10.9999854,7.04449645 10.9999854,10.79246 10.9999854,18.2438906 L11,18.2438906 C11,18.520041 10.7761358,18.7439052 10.4999854,18.7439052 C10.4364457,18.7439052 10.3734882,18.7317946 10.3144829,18.7082217 Z" fill="#000000" opacity="0.3"/>
																	</g>
																</svg></span>
																<!--end::Svg Icon-->
															</span>
														</div>
														<!--end::Symbol-->
														<!--begin::Description-->
														<div class="d-flex flex-column flex-grow-1">
															<!--begin::Title-->
															<h5 class="custom-list-title fw-bold text-gray-800 mb-1">Blogs</h5>
															<!--end::Title-->
														</div>
														<!--begin::Description-->
													</a>
													
													<!--begin::E-commerce-->
													<a href="#" class="custom-list d-flex align-items-center px-5 py-4 bg-hove-primary">
														<!--begin::Symbol-->
														<div class="symbol symbol-40px me-5">
															<span class="symbol-label">
																<span class="svg-icon svg-icon-2"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
																	<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
																		<rect x="0" y="0" width="24" height="24"></rect>
																		<path d="M18.1446364,11.84388 L17.4471627,16.0287218 C17.4463569,16.0335568 17.4455155,16.0383857 17.4446387,16.0432083 C17.345843,16.5865846 16.8252597,16.9469884 16.2818833,16.8481927 L4.91303792,14.7811299 C4.53842737,14.7130189 4.23500006,14.4380834 4.13039941,14.0719812 L2.30560137,7.68518803 C2.28007524,7.59584656 2.26712532,7.50338343 2.26712532,7.4104669 C2.26712532,6.85818215 2.71484057,6.4104669 3.26712532,6.4104669 L16.9929851,6.4104669 L17.606173,3.78251876 C17.7307772,3.24850086 18.2068633,2.87071314 18.7552257,2.87071314 L20.8200821,2.87071314 C21.4717328,2.87071314 22,3.39898039 22,4.05063106 C22,4.70228173 21.4717328,5.23054898 20.8200821,5.23054898 L19.6915238,5.23054898 L18.1446364,11.84388 Z" fill="#000000" opacity="0.3"></path>
																		<path d="M6.5,21 C5.67157288,21 5,20.3284271 5,19.5 C5,18.6715729 5.67157288,18 6.5,18 C7.32842712,18 8,18.6715729 8,19.5 C8,20.3284271 7.32842712,21 6.5,21 Z M15.5,21 C14.6715729,21 14,20.3284271 14,19.5 C14,18.6715729 14.6715729,18 15.5,18 C16.3284271,18 17,18.6715729 17,19.5 C17,20.3284271 16.3284271,21 15.5,21 Z" fill="#000000"></path>
																	</g>
																</svg></span>
															</span>
														</div>
														<!--end::Symbol-->
														<!--begin::Description-->
														<div class="d-flex flex-column flex-grow-1">
															<!--begin::Title-->
															<h5 class="custom-list-title fw-bold text-gray-800 mb-1">E-commerce</h5>
														</div>
														<!--begin::Description-->
													</a>
													
													
												</div>
												<!--end::Items-->
											</div>

										</div>

										<!--begin::Website-->
										<div class="tab-pane fade" id="kt_aside_nav_tab_website" role="tabpanel">
											<div class="m-0">
												<!--begin::Header-->
												<h3 class="text-gray-800 fw-bold mb-6 mx-5">Sitio web</h3>
											</div>

											<!--begin::Menu site web-->
											<div class="menu menu-column menu-fit menu-rounded menu-title-gray-600 menu-icon-gray-400 menu-state-primary menu-state-icon-primary menu-state-bullet-primary menu-arrow-gray-500 fw-bold fs-5 px-6 my-5 my-lg-0" id="kt_aside_menu" data-kt-menu="true">
												<div id="" class="menu-fit">
													
													<!-- About -->
													<div class="menu-item">
														<div class="menu-content pb-2">
															<span class="menu-section text-muted text-uppercase fs-8 ls-1">Nosotros</span>
														</div>
													</div>
													<div class="menu-item">
														<a class="menu-link active" href="#">
															<span class="menu-icon">
																<!--begin::Svg Icon | path: assets/media/icons/duotone/Interface/Image.svg-->
																<span class="svg-icon svg-icon-2"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
																<path opacity="0.25" d="M2.45153 5.94826C2.71842 4.12109 4.12109 2.71842 5.94826 2.45153C7.54228 2.21869 9.6618 2 12 2C14.3382 2 16.4577 2.21869 18.0517 2.45153C19.8789 2.71842 21.2816 4.12109 21.5485 5.94826C21.7813 7.54228 22 9.6618 22 12C22 14.3382 21.7813 16.4577 21.5485 18.0517C21.2816 19.8789 19.8789 21.2816 18.0517 21.5485C16.4577 21.7813 14.3382 22 12 22C9.6618 22 7.54228 21.7813 5.94826 21.5485C4.12109 21.2816 2.71842 19.8789 2.45153 18.0517C2.21869 16.4577 2 14.3382 2 12C2 9.6618 2.21869 7.54228 2.45153 5.94826Z" fill="#12131A"/>
																<path d="M8 10C9.10457 10 10 9.10457 10 8C10 6.89543 9.10457 6 8 6C6.89543 6 6 6.89543 6 8C6 9.10457 6.89543 10 8 10Z" fill="#12131A"/>
																<path d="M21.6642 17.2016C21.7024 16.8989 21.5962 16.5963 21.3805 16.3806L17.4143 12.4144C16.6332 11.6334 15.3669 11.6334 14.5858 12.4144L11.7072 15.2931C11.3166 15.6836 10.6835 15.6836 10.293 15.2931L9.41427 14.4144C8.63322 13.6334 7.36689 13.6334 6.58584 14.4144L2.93337 18.0669C2.68517 18.3151 2.57669 18.679 2.70674 19.005C3.24439 20.3529 4.45448 21.3303 5.94832 21.5485C7.54234 21.7813 9.66186 22 12.0001 22C14.3383 22 16.4578 21.7813 18.0518 21.5485C19.879 21.2816 21.2816 19.8789 21.5485 18.0517C21.5878 17.7828 21.6267 17.499 21.6642 17.2016Z" fill="#12131A"/>
																</svg></span>
																<!--end::Svg Icon-->
															</span>
															<span class="menu-title">Portada</span>
														</a>
													</div>
													<div class="menu-item">
														<a class="menu-link " href="#">
															<span class="menu-icon">
																<!--begin::Svg Icon | path: assets/media/icons/duotone/Layout/Layout-top-panel-6.svg-->
																<span class="svg-icon svg-icon-2"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
																	<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
																		<rect x="0" y="0" width="24" height="24"/>
																		<rect fill="#000000" x="2" y="5" width="19" height="4" rx="1"/>
																		<rect fill="#000000" opacity="0.3" x="2" y="11" width="19" height="10" rx="1"/>
																	</g>
																</svg></span>
																<!--end::Svg Icon-->
															</span>
															<span class="menu-title">General</span>
														</a>
													</div>
													<div class="menu-item">
														<a class="menu-link" href="#">
															<span class="menu-icon">
																<i class="fa fa-users"></i>
															</span>
															<span class="menu-title">Equipo</span>
														</a>
													</div>
													<div class="menu-item">
														<a class="menu-link" href="#">
															<span class="menu-icon">
																<i class="fa fa-users"></i>
															</span>
															<span class="menu-title">Clientes</span>
														</a>
													</div>

													<!-- Services -->
													<div class="menu-item">
														<div class="menu-content pt-8 pb-2">
															<span class="menu-section text-muted text-uppercase fs-8 ls-1">Servicios</span>
														</div>
													</div>
													<div class="menu-item">
														<a class="menu-link" href="#">
															<span class="menu-icon">
																<!--begin::Svg Icon | path: assets/media/icons/duotone/Interface/Image.svg-->
																<span class="svg-icon svg-icon-2"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
																<path opacity="0.25" d="M2.45153 5.94826C2.71842 4.12109 4.12109 2.71842 5.94826 2.45153C7.54228 2.21869 9.6618 2 12 2C14.3382 2 16.4577 2.21869 18.0517 2.45153C19.8789 2.71842 21.2816 4.12109 21.5485 5.94826C21.7813 7.54228 22 9.6618 22 12C22 14.3382 21.7813 16.4577 21.5485 18.0517C21.2816 19.8789 19.8789 21.2816 18.0517 21.5485C16.4577 21.7813 14.3382 22 12 22C9.6618 22 7.54228 21.7813 5.94826 21.5485C4.12109 21.2816 2.71842 19.8789 2.45153 18.0517C2.21869 16.4577 2 14.3382 2 12C2 9.6618 2.21869 7.54228 2.45153 5.94826Z" fill="#12131A"/>
																<path d="M8 10C9.10457 10 10 9.10457 10 8C10 6.89543 9.10457 6 8 6C6.89543 6 6 6.89543 6 8C6 9.10457 6.89543 10 8 10Z" fill="#12131A"/>
																<path d="M21.6642 17.2016C21.7024 16.8989 21.5962 16.5963 21.3805 16.3806L17.4143 12.4144C16.6332 11.6334 15.3669 11.6334 14.5858 12.4144L11.7072 15.2931C11.3166 15.6836 10.6835 15.6836 10.293 15.2931L9.41427 14.4144C8.63322 13.6334 7.36689 13.6334 6.58584 14.4144L2.93337 18.0669C2.68517 18.3151 2.57669 18.679 2.70674 19.005C3.24439 20.3529 4.45448 21.3303 5.94832 21.5485C7.54234 21.7813 9.66186 22 12.0001 22C14.3383 22 16.4578 21.7813 18.0518 21.5485C19.879 21.2816 21.2816 19.8789 21.5485 18.0517C21.5878 17.7828 21.6267 17.499 21.6642 17.2016Z" fill="#12131A"/>
																</svg></span>
																<!--end::Svg Icon-->
															</span>
															<span class="menu-title">Portada</span>
														</a>
													</div>
													<div class="menu-item">
														<a class="menu-link " href="#">
															<span class="menu-icon">
																<!--begin::Svg Icon | path: assets/media/icons/duotone/Layout/Layout-top-panel-6.svg-->
																<span class="svg-icon svg-icon-2"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
																	<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
																		<rect x="0" y="0" width="24" height="24"/>
																		<rect fill="#000000" x="2" y="5" width="19" height="4" rx="1"/>
																		<rect fill="#000000" opacity="0.3" x="2" y="11" width="19" height="10" rx="1"/>
																	</g>
																</svg></span>
																<!--end::Svg Icon-->
															</span>
															<span class="menu-title">General</span>
														</a>
													</div>
													<div class="menu-item">
														<a class="menu-link" href="#">
															<span class="menu-icon">
																<!--begin::Svg Icon | path: assets/media/icons/duotone/Code/Thunder-circle.svg-->
																<span class="svg-icon svg-icon-2"><svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
																	<circle fill="#000000" opacity="0.3" cx="12" cy="12" r="10"/>
																	<path d="M12.4208204,17.1583592 L15.4572949,11.0854102 C15.6425368,10.7149263 15.4923686,10.2644215 15.1218847,10.0791796 C15.0177431,10.0271088 14.9029083,10 14.7864745,10 L12,10 L12,7.17705098 C12,6.76283742 11.6642136,6.42705098 11.25,6.42705098 C10.965921,6.42705098 10.7062236,6.58755277 10.5791796,6.84164079 L7.5427051,12.9145898 C7.35746316,13.2850737 7.50763142,13.7355785 7.87811529,13.9208204 C7.98225687,13.9728912 8.09709167,14 8.21352549,14 L11,14 L11,16.822949 C11,17.2371626 11.3357864,17.572949 11.75,17.572949 C12.034079,17.572949 12.2937764,17.4124472 12.4208204,17.1583592 Z" fill="#000000"/>
																</svg></span>
																<!--end::Svg Icon-->
															</span>
															<span class="menu-title">Servicios</span>
														</a>
													</div>

													<!-- Portfolio -->
													<div class="menu-item">
														<div class="menu-content pt-8 pb-2">
															<span class="menu-section text-muted text-uppercase fs-8 ls-1">Portafolio</span>
														</div>
													</div>
													<div class="menu-item">
														<a class="menu-link" href="#">
															<span class="menu-icon">
																<!--begin::Svg Icon | path: assets/media/icons/duotone/Interface/Image.svg-->
																<span class="svg-icon svg-icon-2"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
																<path opacity="0.25" d="M2.45153 5.94826C2.71842 4.12109 4.12109 2.71842 5.94826 2.45153C7.54228 2.21869 9.6618 2 12 2C14.3382 2 16.4577 2.21869 18.0517 2.45153C19.8789 2.71842 21.2816 4.12109 21.5485 5.94826C21.7813 7.54228 22 9.6618 22 12C22 14.3382 21.7813 16.4577 21.5485 18.0517C21.2816 19.8789 19.8789 21.2816 18.0517 21.5485C16.4577 21.7813 14.3382 22 12 22C9.6618 22 7.54228 21.7813 5.94826 21.5485C4.12109 21.2816 2.71842 19.8789 2.45153 18.0517C2.21869 16.4577 2 14.3382 2 12C2 9.6618 2.21869 7.54228 2.45153 5.94826Z" fill="#12131A"/>
																<path d="M8 10C9.10457 10 10 9.10457 10 8C10 6.89543 9.10457 6 8 6C6.89543 6 6 6.89543 6 8C6 9.10457 6.89543 10 8 10Z" fill="#12131A"/>
																<path d="M21.6642 17.2016C21.7024 16.8989 21.5962 16.5963 21.3805 16.3806L17.4143 12.4144C16.6332 11.6334 15.3669 11.6334 14.5858 12.4144L11.7072 15.2931C11.3166 15.6836 10.6835 15.6836 10.293 15.2931L9.41427 14.4144C8.63322 13.6334 7.36689 13.6334 6.58584 14.4144L2.93337 18.0669C2.68517 18.3151 2.57669 18.679 2.70674 19.005C3.24439 20.3529 4.45448 21.3303 5.94832 21.5485C7.54234 21.7813 9.66186 22 12.0001 22C14.3383 22 16.4578 21.7813 18.0518 21.5485C19.879 21.2816 21.2816 19.8789 21.5485 18.0517C21.5878 17.7828 21.6267 17.499 21.6642 17.2016Z" fill="#12131A"/>
																</svg></span>
																<!--end::Svg Icon-->
															</span>
															<span class="menu-title">Portada</span>
														</a>
													</div>
													<div class="menu-item">
														<a class="menu-link " href="#">
															<span class="menu-icon">
																<!--begin::Svg Icon | path: assets/media/icons/duotone/Layout/Layout-top-panel-6.svg-->
																<span class="svg-icon svg-icon-2"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
																	<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
																		<rect x="0" y="0" width="24" height="24"/>
																		<rect fill="#000000" x="2" y="5" width="19" height="4" rx="1"/>
																		<rect fill="#000000" opacity="0.3" x="2" y="11" width="19" height="10" rx="1"/>
																	</g>
																</svg></span>
																<!--end::Svg Icon-->
															</span>
															<span class="menu-title">General</span>
														</a>
													</div>
													<div class="menu-item">
														<a class="menu-link" href="#">
															<span class="menu-icon">
																<!--begin::Svg Icon | path: assets/media/icons/duotone/Clothes/Briefcase.svg-->
																<span class="svg-icon svg-icon-2"><svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
																	<path d="M5.84026576,8 L18.1597342,8 C19.1999115,8 20.0664437,8.79732479 20.1528258,9.83390904 L20.8194924,17.833909 C20.9112219,18.9346631 20.0932459,19.901362 18.9924919,19.9930915 C18.9372479,19.9976952 18.8818364,20 18.8264009,20 L5.1735991,20 C4.0690296,20 3.1735991,19.1045695 3.1735991,18 C3.1735991,17.9445645 3.17590391,17.889153 3.18050758,17.833909 L3.84717425,9.83390904 C3.93355627,8.79732479 4.80008849,8 5.84026576,8 Z M10.5,10 C10.2238576,10 10,10.2238576 10,10.5 L10,11.5 C10,11.7761424 10.2238576,12 10.5,12 L13.5,12 C13.7761424,12 14,11.7761424 14,11.5 L14,10.5 C14,10.2238576 13.7761424,10 13.5,10 L10.5,10 Z" fill="#000000"/>
																	<path d="M10,8 L8,8 L8,7 C8,5.34314575 9.34314575,4 11,4 L13,4 C14.6568542,4 16,5.34314575 16,7 L16,8 L14,8 L14,7 C14,6.44771525 13.5522847,6 13,6 L11,6 C10.4477153,6 10,6.44771525 10,7 L10,8 Z" fill="#000000" fill-rule="nonzero" opacity="0.3"/>
																</svg></span>
																<!--end::Svg Icon-->
															</span>
															<span class="menu-title">Portafolio</span>
														</a>
													</div>

													<!-- Contact -->
													<div class="menu-item">
														<div class="menu-content pt-8 pb-2">
															<span class="menu-section text-muted text-uppercase fs-8 ls-1">Contacto</span>
														</div>
													</div>
													<div class="menu-item">
														<a class="menu-link" href="#">
															<span class="menu-icon">
																<!--begin::Svg Icon | path: assets/media/icons/duotone/Interface/Image.svg-->
																<span class="svg-icon svg-icon-2"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
																<path opacity="0.25" d="M2.45153 5.94826C2.71842 4.12109 4.12109 2.71842 5.94826 2.45153C7.54228 2.21869 9.6618 2 12 2C14.3382 2 16.4577 2.21869 18.0517 2.45153C19.8789 2.71842 21.2816 4.12109 21.5485 5.94826C21.7813 7.54228 22 9.6618 22 12C22 14.3382 21.7813 16.4577 21.5485 18.0517C21.2816 19.8789 19.8789 21.2816 18.0517 21.5485C16.4577 21.7813 14.3382 22 12 22C9.6618 22 7.54228 21.7813 5.94826 21.5485C4.12109 21.2816 2.71842 19.8789 2.45153 18.0517C2.21869 16.4577 2 14.3382 2 12C2 9.6618 2.21869 7.54228 2.45153 5.94826Z" fill="#12131A"/>
																<path d="M8 10C9.10457 10 10 9.10457 10 8C10 6.89543 9.10457 6 8 6C6.89543 6 6 6.89543 6 8C6 9.10457 6.89543 10 8 10Z" fill="#12131A"/>
																<path d="M21.6642 17.2016C21.7024 16.8989 21.5962 16.5963 21.3805 16.3806L17.4143 12.4144C16.6332 11.6334 15.3669 11.6334 14.5858 12.4144L11.7072 15.2931C11.3166 15.6836 10.6835 15.6836 10.293 15.2931L9.41427 14.4144C8.63322 13.6334 7.36689 13.6334 6.58584 14.4144L2.93337 18.0669C2.68517 18.3151 2.57669 18.679 2.70674 19.005C3.24439 20.3529 4.45448 21.3303 5.94832 21.5485C7.54234 21.7813 9.66186 22 12.0001 22C14.3383 22 16.4578 21.7813 18.0518 21.5485C19.879 21.2816 21.2816 19.8789 21.5485 18.0517C21.5878 17.7828 21.6267 17.499 21.6642 17.2016Z" fill="#12131A"/>
																</svg></span>
																<!--end::Svg Icon-->
															</span>
															<span class="menu-title">Portada</span>
														</a>
													</div>
													<div class="menu-item">
														<a class="menu-link " href="#">
															<span class="menu-icon">
																<!--begin::Svg Icon | path: assets/media/icons/duotone/Layout/Layout-top-panel-6.svg-->
																<span class="svg-icon svg-icon-2"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
																	<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
																		<rect x="0" y="0" width="24" height="24"/>
																		<rect fill="#000000" x="2" y="5" width="19" height="4" rx="1"/>
																		<rect fill="#000000" opacity="0.3" x="2" y="11" width="19" height="10" rx="1"/>
																	</g>
																</svg></span>
																<!--end::Svg Icon-->
															</span>
															<span class="menu-title">General</span>
														</a>
													</div>

												</div>
											</div>
										</div>
										
										<!--begin::Blog-->
										<div class="tab-pane fade" id="kt_aside_nav_tab_blog" role="tabpanel">
											<div class="m-0">
												<!--begin::Header-->
												<h3 class="text-gray-800 fw-bold mb-6 mx-5">Blogs</h3>
											</div>

											<!--begin::Menu blog-->
											<div class="menu menu-column menu-fit menu-rounded menu-title-gray-600 menu-icon-gray-400 menu-state-primary menu-state-icon-primary menu-state-bullet-primary menu-arrow-gray-500 fw-bold fs-5 px-6 my-5 my-lg-0" id="kt_aside_menu" data-kt-menu="true">
												<div id="" class="menu-fit">
													
													<!-- Blog -->
													<div class="menu-item">
														<div class="menu-content pb-2">
															<span class="menu-section text-muted text-uppercase fs-8 ls-1">Blog</span>
														</div>
													</div>
													<div class="menu-item">
														<a class="menu-link active" href="#">
															<span class="menu-icon">
																<!--begin::Svg Icon | path: assets/media/icons/duotone/Interface/Image.svg-->
																<span class="svg-icon svg-icon-2"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
																<path opacity="0.25" d="M2.45153 5.94826C2.71842 4.12109 4.12109 2.71842 5.94826 2.45153C7.54228 2.21869 9.6618 2 12 2C14.3382 2 16.4577 2.21869 18.0517 2.45153C19.8789 2.71842 21.2816 4.12109 21.5485 5.94826C21.7813 7.54228 22 9.6618 22 12C22 14.3382 21.7813 16.4577 21.5485 18.0517C21.2816 19.8789 19.8789 21.2816 18.0517 21.5485C16.4577 21.7813 14.3382 22 12 22C9.6618 22 7.54228 21.7813 5.94826 21.5485C4.12109 21.2816 2.71842 19.8789 2.45153 18.0517C2.21869 16.4577 2 14.3382 2 12C2 9.6618 2.21869 7.54228 2.45153 5.94826Z" fill="#12131A"/>
																<path d="M8 10C9.10457 10 10 9.10457 10 8C10 6.89543 9.10457 6 8 6C6.89543 6 6 6.89543 6 8C6 9.10457 6.89543 10 8 10Z" fill="#12131A"/>
																<path d="M21.6642 17.2016C21.7024 16.8989 21.5962 16.5963 21.3805 16.3806L17.4143 12.4144C16.6332 11.6334 15.3669 11.6334 14.5858 12.4144L11.7072 15.2931C11.3166 15.6836 10.6835 15.6836 10.293 15.2931L9.41427 14.4144C8.63322 13.6334 7.36689 13.6334 6.58584 14.4144L2.93337 18.0669C2.68517 18.3151 2.57669 18.679 2.70674 19.005C3.24439 20.3529 4.45448 21.3303 5.94832 21.5485C7.54234 21.7813 9.66186 22 12.0001 22C14.3383 22 16.4578 21.7813 18.0518 21.5485C19.879 21.2816 21.2816 19.8789 21.5485 18.0517C21.5878 17.7828 21.6267 17.499 21.6642 17.2016Z" fill="#12131A"/>
																</svg></span>
																<!--end::Svg Icon-->
															</span>
															<span class="menu-title">Portada</span>
														</a>
													</div>
													<div class="menu-item">
														<a class="menu-link " href="#">
															<span class="menu-icon">
																<!--begin::Svg Icon | path: assets/media/icons/duotone/Layout/Layout-top-panel-6.svg-->
																<span class="svg-icon svg-icon-2"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
																	<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
																		<rect x="0" y="0" width="24" height="24"/>
																		<rect fill="#000000" x="2" y="5" width="19" height="4" rx="1"/>
																		<rect fill="#000000" opacity="0.3" x="2" y="11" width="19" height="10" rx="1"/>
																	</g>
																</svg></span>
																<!--end::Svg Icon-->
															</span>
															<span class="menu-title">General</span>
														</a>
													</div>
													<div class="menu-item">
														<a class="menu-link" href="#">
															<span class="menu-icon">
																<!--begin::Svg Icon | path: assets/media/icons/duotone/Home/Book-open.svg-->
																<span class="svg-icon svg-icon-2"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
																	<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
																		<rect x="0" y="0" width="24" height="24"/>
																		<path d="M13.6855025,18.7082217 C15.9113859,17.8189707 18.682885,17.2495635 22,17 C22,16.9325178 22,13.1012863 22,5.50630526 L21.9999762,5.50630526 C21.9999762,5.23017604 21.7761292,5.00632908 21.5,5.00632908 C21.4957817,5.00632908 21.4915635,5.00638247 21.4873465,5.00648922 C18.658231,5.07811173 15.8291155,5.74261533 13,7 C13,7.04449645 13,10.79246 13,18.2438906 L12.9999854,18.2438906 C12.9999854,18.520041 13.2238496,18.7439052 13.5,18.7439052 C13.5635398,18.7439052 13.6264972,18.7317946 13.6855025,18.7082217 Z" fill="#000000"/>
																		<path d="M10.3144829,18.7082217 C8.08859955,17.8189707 5.31710038,17.2495635 1.99998542,17 C1.99998542,16.9325178 1.99998542,13.1012863 1.99998542,5.50630526 L2.00000925,5.50630526 C2.00000925,5.23017604 2.22385621,5.00632908 2.49998542,5.00632908 C2.50420375,5.00632908 2.5084219,5.00638247 2.51263888,5.00648922 C5.34175439,5.07811173 8.17086991,5.74261533 10.9999854,7 C10.9999854,7.04449645 10.9999854,10.79246 10.9999854,18.2438906 L11,18.2438906 C11,18.520041 10.7761358,18.7439052 10.4999854,18.7439052 C10.4364457,18.7439052 10.3734882,18.7317946 10.3144829,18.7082217 Z" fill="#000000" opacity="0.3"/>
																	</g>
																</svg></span>
																<!--end::Svg Icon-->
															</span>
															<span class="menu-title">Blogs</span>
														</a>
													</div>

													<!-- Category -->
													<div class="menu-item">
														<div class="menu-content pt-8 pb-2">
															<span class="menu-section text-muted text-uppercase fs-8 ls-1">Categorias</span>
														</div>
													</div>
													<div class="menu-item">
														<a class="menu-link" href="#">
															<span class="menu-icon">
																<!--begin::Svg Icon | path: assets/media/icons/duotone/General/Bookmark.svg-->
																<span class="svg-icon svg-icon-2"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
																	<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
																		<rect x="0" y="0" width="24" height="24"/>
																		<path d="M8,4 L16,4 C17.1045695,4 18,4.8954305 18,6 L18,17.726765 C18,18.2790497 17.5522847,18.726765 17,18.726765 C16.7498083,18.726765 16.5087052,18.6329798 16.3242754,18.4639191 L12.6757246,15.1194142 C12.2934034,14.7689531 11.7065966,14.7689531 11.3242754,15.1194142 L7.67572463,18.4639191 C7.26860564,18.8371115 6.63603827,18.8096086 6.26284586,18.4024896 C6.09378519,18.2180598 6,17.9769566 6,17.726765 L6,6 C6,4.8954305 6.8954305,4 8,4 Z" fill="#000000"/>
																	</g>
																</svg></span>
																<!--end::Svg Icon-->
															</span>
															<span class="menu-title">Categorias</span>
														</a>
													</div>
													

													<!-- Tags -->
													<div class="menu-item">
														<div class="menu-content pt-8 pb-2">
															<span class="menu-section text-muted text-uppercase fs-8 ls-1">Etiquetas</span>
														</div>
													</div>
													<div class="menu-item">
														<a class="menu-link" href="#">
															<span class="menu-icon">
																<!--begin::Svg Icon | path: assets/media/icons/duotone/General/Bookmark.svg-->
																<span class="svg-icon svg-icon-2"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
																	<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
																		<rect x="0" y="0" width="24" height="24"/>
																		<path d="M8,4 L16,4 C17.1045695,4 18,4.8954305 18,6 L18,17.726765 C18,18.2790497 17.5522847,18.726765 17,18.726765 C16.7498083,18.726765 16.5087052,18.6329798 16.3242754,18.4639191 L12.6757246,15.1194142 C12.2934034,14.7689531 11.7065966,14.7689531 11.3242754,15.1194142 L7.67572463,18.4639191 C7.26860564,18.8371115 6.63603827,18.8096086 6.26284586,18.4024896 C6.09378519,18.2180598 6,17.9769566 6,17.726765 L6,6 C6,4.8954305 6.8954305,4 8,4 Z" fill="#000000"/>
																	</g>
																</svg></span>
																<!--end::Svg Icon-->
															</span>
															<span class="menu-title">Etiquetas</span>
														</a>
													</div>

												</div>
											</div>
										</div>
										
										<!--begin::Tab Ecommerce-->
										<div class="tab-pane fade" id="kt_aside_nav_tab_ecommerce" role="tabpanel">
											<div class="m-0">
												<!--begin::Header-->
												<h3 class="text-gray-800 fw-bold mb-6 mx-5">E-Commerce</h3>
											</div>

											<!--begin::Menu e-commerce-->
											<div class="menu menu-column menu-fit menu-rounded menu-title-gray-600 menu-icon-gray-400 menu-state-primary menu-state-icon-primary menu-state-bullet-primary menu-arrow-gray-500 fw-bold fs-5 px-6 my-5 my-lg-0" id="kt_aside_menu" data-kt-menu="true">
												<div id="" class="menu-fit">

													<div class="menu-item">
														<div class="menu-content pb-2">
															<span class="menu-section text-muted text-uppercase fs-8 ls-1">Pedidos</span>
														</div>
													</div>
													<div class="menu-item">
														<a class="menu-link" href="#">
															<span class="menu-icon">
																<!--begin::Svg Icon | path: assets/media/icons/duotone/Shopping/Box3.svg-->
																<span class="svg-icon svg-icon-2"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
																	<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
																		<rect x="0" y="0" width="24" height="24"/>
																		<path d="M20.4061385,6.73606154 C20.7672665,6.89656288 21,7.25468437 21,7.64987309 L21,16.4115967 C21,16.7747638 20.8031081,17.1093844 20.4856429,17.2857539 L12.4856429,21.7301984 C12.1836204,21.8979887 11.8163796,21.8979887 11.5143571,21.7301984 L3.51435707,17.2857539 C3.19689188,17.1093844 3,16.7747638 3,16.4115967 L3,7.64987309 C3,7.25468437 3.23273352,6.89656288 3.59386153,6.73606154 L11.5938615,3.18050598 C11.8524269,3.06558805 12.1475731,3.06558805 12.4061385,3.18050598 L20.4061385,6.73606154 Z" fill="#000000" opacity="0.3"/>
																		<polygon fill="#000000" points="14.9671522 4.22441676 7.5999999 8.31727912 7.5999999 12.9056825 9.5999999 13.9056825 9.5999999 9.49408582 17.25507 5.24126912"/>
																	</g>
																</svg></span>
																<!--end::Svg Icon-->
															</span>
															<span class="menu-title">Pedidos</span>
														</a>
													</div>
													
													<!-- Home -->
													<div class="menu-item">
														<div class="menu-content pb-2">
															<span class="menu-section text-muted text-uppercase fs-8 ls-1">Inicio</span>
														</div>
													</div>
													<div class="menu-item">
														<a class="menu-link" href="#">
															<span class="menu-icon">
																<!--begin::Svg Icon | path: assets/media/icons/duotone/Interface/Image.svg-->
																<span class="svg-icon svg-icon-2"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
																<path opacity="0.25" d="M2.45153 5.94826C2.71842 4.12109 4.12109 2.71842 5.94826 2.45153C7.54228 2.21869 9.6618 2 12 2C14.3382 2 16.4577 2.21869 18.0517 2.45153C19.8789 2.71842 21.2816 4.12109 21.5485 5.94826C21.7813 7.54228 22 9.6618 22 12C22 14.3382 21.7813 16.4577 21.5485 18.0517C21.2816 19.8789 19.8789 21.2816 18.0517 21.5485C16.4577 21.7813 14.3382 22 12 22C9.6618 22 7.54228 21.7813 5.94826 21.5485C4.12109 21.2816 2.71842 19.8789 2.45153 18.0517C2.21869 16.4577 2 14.3382 2 12C2 9.6618 2.21869 7.54228 2.45153 5.94826Z" fill="#12131A"/>
																<path d="M8 10C9.10457 10 10 9.10457 10 8C10 6.89543 9.10457 6 8 6C6.89543 6 6 6.89543 6 8C6 9.10457 6.89543 10 8 10Z" fill="#12131A"/>
																<path d="M21.6642 17.2016C21.7024 16.8989 21.5962 16.5963 21.3805 16.3806L17.4143 12.4144C16.6332 11.6334 15.3669 11.6334 14.5858 12.4144L11.7072 15.2931C11.3166 15.6836 10.6835 15.6836 10.293 15.2931L9.41427 14.4144C8.63322 13.6334 7.36689 13.6334 6.58584 14.4144L2.93337 18.0669C2.68517 18.3151 2.57669 18.679 2.70674 19.005C3.24439 20.3529 4.45448 21.3303 5.94832 21.5485C7.54234 21.7813 9.66186 22 12.0001 22C14.3383 22 16.4578 21.7813 18.0518 21.5485C19.879 21.2816 21.2816 19.8789 21.5485 18.0517C21.5878 17.7828 21.6267 17.499 21.6642 17.2016Z" fill="#12131A"/>
																</svg></span>
																<!--end::Svg Icon-->
															</span>
															<span class="menu-title">Portada</span>
														</a>
													</div>

													<!-- Category -->
													<div class="menu-item">
														<div class="menu-content pt-8 pb-2">
															<span class="menu-section text-muted text-uppercase fs-8 ls-1">Categorias</span>
														</div>
													</div>
													<div class="menu-item">
														<a class="menu-link" href="#">
															<span class="menu-icon">
																<!--begin::Svg Icon | path: assets/media/icons/duotone/General/Bookmark.svg-->
																<span class="svg-icon svg-icon-2"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
																	<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
																		<rect x="0" y="0" width="24" height="24"/>
																		<path d="M8,4 L16,4 C17.1045695,4 18,4.8954305 18,6 L18,17.726765 C18,18.2790497 17.5522847,18.726765 17,18.726765 C16.7498083,18.726765 16.5087052,18.6329798 16.3242754,18.4639191 L12.6757246,15.1194142 C12.2934034,14.7689531 11.7065966,14.7689531 11.3242754,15.1194142 L7.67572463,18.4639191 C7.26860564,18.8371115 6.63603827,18.8096086 6.26284586,18.4024896 C6.09378519,18.2180598 6,17.9769566 6,17.726765 L6,6 C6,4.8954305 6.8954305,4 8,4 Z" fill="#000000"/>
																	</g>
																</svg></span>
																<!--end::Svg Icon-->
															</span>
															<span class="menu-title">Categorias</span>
														</a>
													</div>
													

													<!-- Products -->
													<div class="menu-item">
														<div class="menu-content pt-8 pb-2">
															<span class="menu-section text-muted text-uppercase fs-8 ls-1">Productos</span>
														</div>
													</div>
													<div class="menu-item">
														<a class="menu-link" href="#">
															<span class="menu-icon">
																<!--begin::Svg Icon | path: assets/media/icons/duotone/Shopping/Cart3.svg-->
																<span class="svg-icon svg-icon-2"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
																	<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
																		<rect x="0" y="0" width="24" height="24"/>
																		<path d="M12,4.56204994 L7.76822128,9.6401844 C7.4146572,10.0644613 6.7840925,10.1217854 6.3598156,9.76822128 C5.9355387,9.4146572 5.87821464,8.7840925 6.23177872,8.3598156 L11.2317787,2.3598156 C11.6315738,1.88006147 12.3684262,1.88006147 12.7682213,2.3598156 L17.7682213,8.3598156 C18.1217854,8.7840925 18.0644613,9.4146572 17.6401844,9.76822128 C17.2159075,10.1217854 16.5853428,10.0644613 16.2317787,9.6401844 L12,4.56204994 Z" fill="#000000" fill-rule="nonzero" opacity="0.3"/>
																		<path d="M3.5,9 L20.5,9 C21.0522847,9 21.5,9.44771525 21.5,10 C21.5,10.132026 21.4738562,10.2627452 21.4230769,10.3846154 L17.7692308,19.1538462 C17.3034221,20.271787 16.2111026,21 15,21 L9,21 C7.78889745,21 6.6965779,20.271787 6.23076923,19.1538462 L2.57692308,10.3846154 C2.36450587,9.87481408 2.60558331,9.28934029 3.11538462,9.07692308 C3.23725479,9.02614384 3.36797398,9 3.5,9 Z M12,17 C13.1045695,17 14,16.1045695 14,15 C14,13.8954305 13.1045695,13 12,13 C10.8954305,13 10,13.8954305 10,15 C10,16.1045695 10.8954305,17 12,17 Z" fill="#000000"/>
																	</g>
																</svg></span>
																<!--end::Svg Icon-->
															</span>
															<span class="menu-title">Productos</span>
														</a>
													</div>

												</div>
											</div>
											
										</div>
										
										<!--begin::Tab Notifications-->
										<div class="tab-pane fade" id="kt_aside_nav_tab_notifications" role="tabpanel">
											<!--begin::Notifications-->
											<div class="m-0">
												<!--begin::Header-->
												<h3 class="text-gray-800 fw-bold mb-6 mx-5">Notificaciones</h3>
												<!--end::Header-->
												<!--begin::Body-->
												<div class="mb-12">
													<!--begin::Item-->
													<div class="d-flex align-items-center bg-light-warning rounded p-5 mb-7">
														<!--begin::Icon-->
														<span class="svg-icon svg-icon-warning me-5">
															<!--begin::Svg Icon | path: icons/duotone/Home/Library.svg-->
															<span class="svg-icon svg-icon-1 svg-icon-warning">
																<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
																	<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
																		<rect x="0" y="0" width="24" height="24" />
																		<path d="M5,3 L6,3 C6.55228475,3 7,3.44771525 7,4 L7,20 C7,20.5522847 6.55228475,21 6,21 L5,21 C4.44771525,21 4,20.5522847 4,20 L4,4 C4,3.44771525 4.44771525,3 5,3 Z M10,3 L11,3 C11.5522847,3 12,3.44771525 12,4 L12,20 C12,20.5522847 11.5522847,21 11,21 L10,21 C9.44771525,21 9,20.5522847 9,20 L9,4 C9,3.44771525 9.44771525,3 10,3 Z" fill="#000000" />
																		<rect fill="#000000" opacity="0.3" transform="translate(17.825568, 11.945519) rotate(-19.000000) translate(-17.825568, -11.945519)" x="16.3255682" y="2.94551858" width="3" height="18" rx="1" />
																	</g>
																</svg>
															</span>
															<!--end::Svg Icon-->
														</span>
														<!--end::Icon-->
														<!--begin::Title-->
														<div class="flex-grow-1 me-2">
															<a href="../../demo7/dist/widgets/lists.html" class="fw-bolder text-gray-800 text-hover-primary fs-6">Notificaciones en construcción</a>
															<span class="text-muted fw-bold d-block">14 jun 2021</span>
														</div>
														<!--begin::Lable-->
														<!-- <span class="fw-bolder text-warning py-1">+28%</span> -->
													</div>
												</div>
												<!--end::Body-->
											</div>
											<!--end::Notifications-->
										</div>
										
									</div>
									<!--end::Tab content-->
								</div>
								<!--end::Wrapper-->
							</div>
						</div>
						<!--end::Workspace-->
					</div>
					<!--begin::Aside Toggle-->
					<button class="btn btn-sm btn-icon btn-white btn-active-primary position-absolute translate-middle start-100 end-0 bottom-0 shadow-sm d-none d-lg-flex" data-kt-toggle="true" data-kt-toggle-state="active" data-kt-toggle-target="body" data-kt-toggle-name="aside-minimize" style="margin-bottom: 1.35rem">
						<!--begin::Svg Icon | path: icons/duotone/Navigation/Left-2.svg-->
						<span class="svg-icon svg-icon-2 rotate-180">
							<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
								<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
									<polygon points="0 0 24 0 24 24 0 24" />
									<rect fill="#000000" opacity="0.3" transform="translate(15.000000, 12.000000) scale(-1, 1) rotate(-90.000000) translate(-15.000000, -12.000000)" x="14" y="7" width="2" height="10" rx="1" />
									<path d="M3.7071045,15.7071045 C3.3165802,16.0976288 2.68341522,16.0976288 2.29289093,15.7071045 C1.90236664,15.3165802 1.90236664,14.6834152 2.29289093,14.2928909 L8.29289093,8.29289093 C8.67146987,7.914312 9.28105631,7.90106637 9.67572234,8.26284357 L15.6757223,13.7628436 C16.0828413,14.136036 16.1103443,14.7686034 15.7371519,15.1757223 C15.3639594,15.5828413 14.7313921,15.6103443 14.3242731,15.2371519 L9.03007346,10.3841355 L3.7071045,15.7071045 Z" fill="#000000" fill-rule="nonzero" transform="translate(9.000001, 11.999997) scale(-1, -1) rotate(90.000000) translate(-9.000001, -11.999997)" />
								</g>
							</svg>
						</span>
						<!--end::Svg Icon-->
					</button>
					
				</div>
				<!--end::Aside-->
				<!--begin::Wrapper-->
				<div class="wrapper d-flex flex-column flex-row-fluid" id="kt_wrapper">
					
					<!--begin::Header-->
					<div id="kt_header" class="header" data-kt-sticky="true" data-kt-sticky-name="header" data-kt-sticky-offset="{default: '200px', lg: '300px'}">
						<!--begin::Container-->
						<div class="container d-flex align-items-center justify-content-between" id="kt_header_container">
							<!--begin::Page title-->
							<div class="page-title d-flex flex-column align-items-start justify-content-center flex-wrap me-lg-2 pb-2 pb-lg-0" data-kt-swapper="true" data-kt-swapper-mode="prepend" data-kt-swapper-parent="{default: '#kt_content_container', lg: '#kt_header_container'}">
								<!--begin::Heading-->
								<h1 class="text-dark fw-bolder my-0 fs-2">Dashboard</h1>
								<!--end::Heading-->
								<!--begin::Breadcrumb-->
								<ul class="breadcrumb fw-bold fs-base my-1">
									<li class="breadcrumb-item text-muted">
										<a href="../../demo7/dist/index.html" class="text-muted">Home</a>
									</li>
									<li class="breadcrumb-item text-dark">Default</li>
								</ul>
								<!--end::Breadcrumb-->
							</div>
							<!--end::Page title=-->
							<!--begin::Wrapper-->
							<div class="d-flex d-lg-none align-items-center ms-n2 me-2">
								<!--begin::Aside mobile toggle-->
								<div class="btn btn-icon btn-active-icon-primary" id="kt_aside_toggle">
									<!--begin::Svg Icon | path: icons/duotone/Text/Menu.svg-->
									<span class="svg-icon svg-icon-2x">
										<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
											<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
												<rect x="0" y="0" width="24" height="24" />
												<rect fill="#000000" x="4" y="5" width="16" height="3" rx="1.5" />
												<path d="M5.5,15 L18.5,15 C19.3284271,15 20,15.6715729 20,16.5 C20,17.3284271 19.3284271,18 18.5,18 L5.5,18 C4.67157288,18 4,17.3284271 4,16.5 C4,15.6715729 4.67157288,15 5.5,15 Z M5.5,10 L18.5,10 C19.3284271,10 20,10.6715729 20,11.5 C20,12.3284271 19.3284271,13 18.5,13 L5.5,13 C4.67157288,13 4,12.3284271 4,11.5 C4,10.6715729 4.67157288,10 5.5,10 Z" fill="#000000" opacity="0.3" />
											</g>
										</svg>
									</span>
									<!--end::Svg Icon-->
								</div>
								<!--end::Aside mobile toggle-->
								<!--begin::Logo-->
								<a href="../../demo7/dist/index.html" class="d-flex align-items-center">
									<img alt="Logo" src="https://rigo42.github.io/company/images/logo2.png" class="h-30px" />
								</a>
								<!--end::Logo-->
							</div>
							<!--end::Wrapper-->
							
						</div>
						<!--end::Container-->
					</div>
					<!--end::Header-->

					<!--begin::Content-->
					<div class="content d-flex flex-column flex-column-fluid" id="kt_content">
						<!--begin::Container-->
						<div class="container" id="kt_content_container">
							<!--begin::Row-->
							<div class="row gy-5 g-xl-8">
								<!--begin::Col-->
								<div class="col-xxl-4">
									<!--begin::Mixed Widget 12-->
									<div class="card card-xl-stretch mb-xl-8">
										<!--begin::Header-->
										<div class="card-header border-0 bg-primary py-5">
											<h3 class="card-title fw-bolder text-white">Sales Progress</h3>
											<div class="card-toolbar">
												<!--begin::Menu-->
												<button type="button" class="btn btn-sm btn-icon btn-color-white btn-active-white btn-active-color- border-0 me-n3" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end" data-kt-menu-flip="top-end">
													<!--begin::Svg Icon | path: icons/duotone/Layout/Layout-4-blocks-2.svg-->
													<span class="svg-icon svg-icon-2">
														<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
															<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
																<rect x="5" y="5" width="5" height="5" rx="1" fill="#000000" />
																<rect x="14" y="5" width="5" height="5" rx="1" fill="#000000" opacity="0.3" />
																<rect x="5" y="14" width="5" height="5" rx="1" fill="#000000" opacity="0.3" />
																<rect x="14" y="14" width="5" height="5" rx="1" fill="#000000" opacity="0.3" />
															</g>
														</svg>
													</span>
													<!--end::Svg Icon-->
												</button>
												<!--begin::Menu 3-->
												<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg-light-primary fw-bold w-200px py-3" data-kt-menu="true">
													<!--begin::Heading-->
													<div class="menu-item px-3">
														<div class="menu-content text-muted pb-2 px-3 fs-7 text-uppercase">Payments</div>
													</div>
													<!--end::Heading-->
													<!--begin::Menu item-->
													<div class="menu-item px-3">
														<a href="#" class="menu-link px-3">Create Invoice</a>
													</div>
													<!--end::Menu item-->
													<!--begin::Menu item-->
													<div class="menu-item px-3">
														<a href="#" class="menu-link flex-stack px-3">Create Payment
														<i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip" title="Specify a target name for future usage and reference"></i></a>
													</div>
													<!--end::Menu item-->
													<!--begin::Menu item-->
													<div class="menu-item px-3">
														<a href="#" class="menu-link px-3">Generate Bill</a>
													</div>
													<!--end::Menu item-->
													<!--begin::Menu item-->
													<div class="menu-item px-3" data-kt-menu-trigger="hover" data-kt-menu-placement="right-end" data-kt-menu-flip="bottom, top">
														<a href="#" class="menu-link px-3">
															<span class="menu-title">Subscription</span>
															<span class="menu-arrow"></span>
														</a>
														<!--begin::Menu sub-->
														<div class="menu-sub menu-sub-dropdown w-175px py-4">
															<!--begin::Menu item-->
															<div class="menu-item px-3">
																<a href="#" class="menu-link px-3">Plans</a>
															</div>
															<!--end::Menu item-->
															<!--begin::Menu item-->
															<div class="menu-item px-3">
																<a href="#" class="menu-link px-3">Billing</a>
															</div>
															<!--end::Menu item-->
															<!--begin::Menu item-->
															<div class="menu-item px-3">
																<a href="#" class="menu-link px-3">Statements</a>
															</div>
															<!--end::Menu item-->
															<!--begin::Menu separator-->
															<div class="separator my-2"></div>
															<!--end::Menu separator-->
															<!--begin::Menu item-->
															<div class="menu-item px-3">
																<div class="menu-content px-3">
																	<!--begin::Switch-->
																	<label class="form-check form-switch form-check-custom form-check-solid">
																		<!--begin::Input-->
																		<input class="form-check-input w-30px h-20px" type="checkbox" value="1" checked="checked" name="notifications" />
																		<!--end::Input-->
																		<!--end::Label-->
																		<span class="form-check-label text-muted fs-6">Recuring</span>
																		<!--end::Label-->
																	</label>
																	<!--end::Switch-->
																</div>
															</div>
															<!--end::Menu item-->
														</div>
														<!--end::Menu sub-->
													</div>
													<!--end::Menu item-->
													<!--begin::Menu item-->
													<div class="menu-item px-3 my-1">
														<a href="#" class="menu-link px-3">Settings</a>
													</div>
													<!--end::Menu item-->
												</div>
												<!--end::Menu 3-->
												<!--end::Menu-->
											</div>
										</div>
										<!--end::Header-->
										<!--begin::Body-->
										<div class="card-body p-0">
											<!--begin::Chart-->
											<div class="mixed-widget-12-chart card-rounded-bottom bg-primary" data-kt-color="primary" style="height: 250px"></div>
											<!--end::Chart-->
											<!--begin::Stats-->
											<div class="card-rounded bg-body mt-n10 position-relative card-px py-15">
												<!--begin::Row-->
												<div class="row g-0 mb-7">
													<!--begin::Col-->
													<div class="col mx-5">
														<div class="fs-6 text-gray-400">Avarage Sale</div>
														<div class="fs-2 fw-bolder text-gray-800">$650</div>
													</div>
													<!--end::Col-->
													<!--begin::Col-->
													<div class="col mx-5">
														<div class="fs-6 text-gray-400">Comissions</div>
														<div class="fs-2 fw-bolder text-gray-800">$29,500</div>
													</div>
													<!--end::Col-->
												</div>
												<!--end::Row-->
												<!--begin::Row-->
												<div class="row g-0">
													<!--begin::Col-->
													<div class="col mx-5">
														<div class="fs-6 text-gray-400">Revenue</div>
														<div class="fs-2 fw-bolder text-gray-800">$55,000</div>
													</div>
													<!--end::Col-->
													<!--begin::Col-->
													<div class="col mx-5">
														<div class="fs-6 text-gray-400">Expenses</div>
														<div class="fs-2 fw-bolder text-gray-800">$1,130,600</div>
													</div>
													<!--end::Col-->
												</div>
												<!--end::Row-->
											</div>
											<!--end::Stats-->
										</div>
										<!--end::Body-->
									</div>
									<!--end::Mixed Widget 12-->
								</div>
								<!--end::Col-->
								<!--begin::Col-->
								<div class="col-xxl-8">
									<!--begin::Tables Widget 9-->
									<div class="card card-xxl-stretch mb-5 mb-xl-8">
										<!--begin::Header-->
										<div class="card-header border-0 pt-5">
											<h3 class="card-title align-items-start flex-column">
												<span class="card-label fw-bolder fs-3 mb-1">Members Statistics</span>
												<span class="text-muted mt-1 fw-bold fs-7">Over 500 members</span>
											</h3>
											<div class="card-toolbar" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-trigger="hover" title="Click to add a user">
												<a href="#" class="btn btn-sm btn-light btn-active-primary" data-bs-toggle="modal" data-bs-target="#kt_modal_invite_friends">
												<!--begin::Svg Icon | path: icons/duotone/Communication/Add-user.svg-->
												<span class="svg-icon svg-icon-3">
													<svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
														<path d="M18,8 L16,8 C15.4477153,8 15,7.55228475 15,7 C15,6.44771525 15.4477153,6 16,6 L18,6 L18,4 C18,3.44771525 18.4477153,3 19,3 C19.5522847,3 20,3.44771525 20,4 L20,6 L22,6 C22.5522847,6 23,6.44771525 23,7 C23,7.55228475 22.5522847,8 22,8 L20,8 L20,10 C20,10.5522847 19.5522847,11 19,11 C18.4477153,11 18,10.5522847 18,10 L18,8 Z M9,11 C6.790861,11 5,9.209139 5,7 C5,4.790861 6.790861,3 9,3 C11.209139,3 13,4.790861 13,7 C13,9.209139 11.209139,11 9,11 Z" fill="#000000" fill-rule="nonzero" opacity="0.3" />
														<path d="M0.00065168429,20.1992055 C0.388258525,15.4265159 4.26191235,13 8.98334134,13 C13.7712164,13 17.7048837,15.2931929 17.9979143,20.2 C18.0095879,20.3954741 17.9979143,21 17.2466999,21 C13.541124,21 8.03472472,21 0.727502227,21 C0.476712155,21 -0.0204617505,20.45918 0.00065168429,20.1992055 Z" fill="#000000" fill-rule="nonzero" />
													</svg>
												</span>
												<!--end::Svg Icon-->New Member</a>
											</div>
										</div>
										<!--end::Header-->
										<!--begin::Body-->
										<div class="card-body py-3">
											<!--begin::Table container-->
											<div class="table-responsive">
												<!--begin::Table-->
												<table class="table table-row-dashed table-row-gray-300 align-middle gs-0 gy-4">
													<!--begin::Table head-->
													<thead>
														<tr class="fw-bolder text-muted">
															<th class="w-25px">
																<div class="form-check form-check-sm form-check-custom form-check-solid">
																	<input class="form-check-input" type="checkbox" value="1" data-kt-check="true" data-kt-check-target=".widget-9-check" />
																</div>
															</th>
															<th class="min-w-150px">Authors</th>
															<th class="min-w-140px">Company</th>
															<th class="min-w-120px">Progress</th>
															<th class="min-w-100px text-end">Actions</th>
														</tr>
													</thead>
													<!--end::Table head-->
													<!--begin::Table body-->
													<tbody>
														<tr>
															<td>
																<div class="form-check form-check-sm form-check-custom form-check-solid">
																	<input class="form-check-input widget-9-check" type="checkbox" value="1" />
																</div>
															</td>
															<td>
																<div class="d-flex align-items-center">
																	<div class="symbol symbol-45px me-5">
																		<img src="assets/media/avatars/150-11.jpg" alt="" />
																	</div>
																	<div class="d-flex justify-content-start flex-column">
																		<a href="#" class="text-dark fw-bolder text-hover-primary fs-6">Ana Simmons</a>
																		<span class="text-muted fw-bold text-muted d-block fs-7">HTML, JS, ReactJS</span>
																	</div>
																</div>
															</td>
															<td>
																<a href="#" class="text-dark fw-bolder text-hover-primary d-block fs-6">Intertico</a>
																<span class="text-muted fw-bold text-muted d-block fs-7">Web, UI/UX Design</span>
															</td>
															<td class="text-end">
																<div class="d-flex flex-column w-100 me-2">
																	<div class="d-flex flex-stack mb-2">
																		<span class="text-muted me-2 fs-7 fw-bold">50%</span>
																	</div>
																	<div class="progress h-6px w-100">
																		<div class="progress-bar bg-primary" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
																	</div>
																</div>
															</td>
															<td>
																<div class="d-flex justify-content-end flex-shrink-0">
																	<a href="#" class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm me-1">
																		<!--begin::Svg Icon | path: icons/duotone/General/Settings-1.svg-->
																		<span class="svg-icon svg-icon-3">
																			<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
																				<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
																					<rect x="0" y="0" width="24" height="24" />
																					<path d="M7,3 L17,3 C19.209139,3 21,4.790861 21,7 C21,9.209139 19.209139,11 17,11 L7,11 C4.790861,11 3,9.209139 3,7 C3,4.790861 4.790861,3 7,3 Z M7,9 C8.1045695,9 9,8.1045695 9,7 C9,5.8954305 8.1045695,5 7,5 C5.8954305,5 5,5.8954305 5,7 C5,8.1045695 5.8954305,9 7,9 Z" fill="#000000" />
																					<path d="M7,13 L17,13 C19.209139,13 21,14.790861 21,17 C21,19.209139 19.209139,21 17,21 L7,21 C4.790861,21 3,19.209139 3,17 C3,14.790861 4.790861,13 7,13 Z M17,19 C18.1045695,19 19,18.1045695 19,17 C19,15.8954305 18.1045695,15 17,15 C15.8954305,15 15,15.8954305 15,17 C15,18.1045695 15.8954305,19 17,19 Z" fill="#000000" opacity="0.3" />
																				</g>
																			</svg>
																		</span>
																		<!--end::Svg Icon-->
																	</a>
																	<a href="#" class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm me-1">
																		<!--begin::Svg Icon | path: icons/duotone/Communication/Write.svg-->
																		<span class="svg-icon svg-icon-3">
																			<svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
																				<path d="M12.2674799,18.2323597 L12.0084872,5.45852451 C12.0004303,5.06114792 12.1504154,4.6768183 12.4255037,4.38993949 L15.0030167,1.70195304 L17.5910752,4.40093695 C17.8599071,4.6812911 18.0095067,5.05499603 18.0083938,5.44341307 L17.9718262,18.2062508 C17.9694575,19.0329966 17.2985816,19.701953 16.4718324,19.701953 L13.7671717,19.701953 C12.9505952,19.701953 12.2840328,19.0487684 12.2674799,18.2323597 Z" fill="#000000" fill-rule="nonzero" transform="translate(14.701953, 10.701953) rotate(-135.000000) translate(-14.701953, -10.701953)" />
																				<path d="M12.9,2 C13.4522847,2 13.9,2.44771525 13.9,3 C13.9,3.55228475 13.4522847,4 12.9,4 L6,4 C4.8954305,4 4,4.8954305 4,6 L4,18 C4,19.1045695 4.8954305,20 6,20 L18,20 C19.1045695,20 20,19.1045695 20,18 L20,13 C20,12.4477153 20.4477153,12 21,12 C21.5522847,12 22,12.4477153 22,13 L22,18 C22,20.209139 20.209139,22 18,22 L6,22 C3.790861,22 2,20.209139 2,18 L2,6 C2,3.790861 3.790861,2 6,2 L12.9,2 Z" fill="#000000" fill-rule="nonzero" opacity="0.3" />
																			</svg>
																		</span>
																		<!--end::Svg Icon-->
																	</a>
																	<a href="#" class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm">
																		<!--begin::Svg Icon | path: icons/duotone/General/Trash.svg-->
																		<span class="svg-icon svg-icon-3">
																			<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
																				<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
																					<rect x="0" y="0" width="24" height="24" />
																					<path d="M6,8 L6,20.5 C6,21.3284271 6.67157288,22 7.5,22 L16.5,22 C17.3284271,22 18,21.3284271 18,20.5 L18,8 L6,8 Z" fill="#000000" fill-rule="nonzero" />
																					<path d="M14,4.5 L14,4 C14,3.44771525 13.5522847,3 13,3 L11,3 C10.4477153,3 10,3.44771525 10,4 L10,4.5 L5.5,4.5 C5.22385763,4.5 5,4.72385763 5,5 L5,5.5 C5,5.77614237 5.22385763,6 5.5,6 L18.5,6 C18.7761424,6 19,5.77614237 19,5.5 L19,5 C19,4.72385763 18.7761424,4.5 18.5,4.5 L14,4.5 Z" fill="#000000" opacity="0.3" />
																				</g>
																			</svg>
																		</span>
																		<!--end::Svg Icon-->
																	</a>
																</div>
															</td>
														</tr>
														<tr>
															<td>
																<div class="form-check form-check-sm form-check-custom form-check-solid">
																	<input class="form-check-input widget-9-check" type="checkbox" value="1" />
																</div>
															</td>
															<td>
																<div class="d-flex align-items-center">
																	<div class="symbol symbol-45px me-5">
																		<img src="assets/media/avatars/150-3.jpg" alt="" />
																	</div>
																	<div class="d-flex justify-content-start flex-column">
																		<a href="#" class="text-dark fw-bolder text-hover-primary fs-6">Jessie Clarcson</a>
																		<span class="text-muted fw-bold text-muted d-block fs-7">C#, ASP.NET, MS SQL</span>
																	</div>
																</div>
															</td>
															<td>
																<a href="#" class="text-dark fw-bolder text-hover-primary d-block fs-6">Agoda</a>
																<span class="text-muted fw-bold text-muted d-block fs-7">Houses &amp; Hotels</span>
															</td>
															<td class="text-end">
																<div class="d-flex flex-column w-100 me-2">
																	<div class="d-flex flex-stack mb-2">
																		<span class="text-muted me-2 fs-7 fw-bold">70%</span>
																	</div>
																	<div class="progress h-6px w-100">
																		<div class="progress-bar bg-danger" role="progressbar" style="width: 70%" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100"></div>
																	</div>
																</div>
															</td>
															<td>
																<div class="d-flex justify-content-end flex-shrink-0">
																	<a href="#" class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm me-1">
																		<!--begin::Svg Icon | path: icons/duotone/General/Settings-1.svg-->
																		<span class="svg-icon svg-icon-3">
																			<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
																				<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
																					<rect x="0" y="0" width="24" height="24" />
																					<path d="M7,3 L17,3 C19.209139,3 21,4.790861 21,7 C21,9.209139 19.209139,11 17,11 L7,11 C4.790861,11 3,9.209139 3,7 C3,4.790861 4.790861,3 7,3 Z M7,9 C8.1045695,9 9,8.1045695 9,7 C9,5.8954305 8.1045695,5 7,5 C5.8954305,5 5,5.8954305 5,7 C5,8.1045695 5.8954305,9 7,9 Z" fill="#000000" />
																					<path d="M7,13 L17,13 C19.209139,13 21,14.790861 21,17 C21,19.209139 19.209139,21 17,21 L7,21 C4.790861,21 3,19.209139 3,17 C3,14.790861 4.790861,13 7,13 Z M17,19 C18.1045695,19 19,18.1045695 19,17 C19,15.8954305 18.1045695,15 17,15 C15.8954305,15 15,15.8954305 15,17 C15,18.1045695 15.8954305,19 17,19 Z" fill="#000000" opacity="0.3" />
																				</g>
																			</svg>
																		</span>
																		<!--end::Svg Icon-->
																	</a>
																	<a href="#" class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm me-1">
																		<!--begin::Svg Icon | path: icons/duotone/Communication/Write.svg-->
																		<span class="svg-icon svg-icon-3">
																			<svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
																				<path d="M12.2674799,18.2323597 L12.0084872,5.45852451 C12.0004303,5.06114792 12.1504154,4.6768183 12.4255037,4.38993949 L15.0030167,1.70195304 L17.5910752,4.40093695 C17.8599071,4.6812911 18.0095067,5.05499603 18.0083938,5.44341307 L17.9718262,18.2062508 C17.9694575,19.0329966 17.2985816,19.701953 16.4718324,19.701953 L13.7671717,19.701953 C12.9505952,19.701953 12.2840328,19.0487684 12.2674799,18.2323597 Z" fill="#000000" fill-rule="nonzero" transform="translate(14.701953, 10.701953) rotate(-135.000000) translate(-14.701953, -10.701953)" />
																				<path d="M12.9,2 C13.4522847,2 13.9,2.44771525 13.9,3 C13.9,3.55228475 13.4522847,4 12.9,4 L6,4 C4.8954305,4 4,4.8954305 4,6 L4,18 C4,19.1045695 4.8954305,20 6,20 L18,20 C19.1045695,20 20,19.1045695 20,18 L20,13 C20,12.4477153 20.4477153,12 21,12 C21.5522847,12 22,12.4477153 22,13 L22,18 C22,20.209139 20.209139,22 18,22 L6,22 C3.790861,22 2,20.209139 2,18 L2,6 C2,3.790861 3.790861,2 6,2 L12.9,2 Z" fill="#000000" fill-rule="nonzero" opacity="0.3" />
																			</svg>
																		</span>
																		<!--end::Svg Icon-->
																	</a>
																	<a href="#" class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm">
																		<!--begin::Svg Icon | path: icons/duotone/General/Trash.svg-->
																		<span class="svg-icon svg-icon-3">
																			<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
																				<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
																					<rect x="0" y="0" width="24" height="24" />
																					<path d="M6,8 L6,20.5 C6,21.3284271 6.67157288,22 7.5,22 L16.5,22 C17.3284271,22 18,21.3284271 18,20.5 L18,8 L6,8 Z" fill="#000000" fill-rule="nonzero" />
																					<path d="M14,4.5 L14,4 C14,3.44771525 13.5522847,3 13,3 L11,3 C10.4477153,3 10,3.44771525 10,4 L10,4.5 L5.5,4.5 C5.22385763,4.5 5,4.72385763 5,5 L5,5.5 C5,5.77614237 5.22385763,6 5.5,6 L18.5,6 C18.7761424,6 19,5.77614237 19,5.5 L19,5 C19,4.72385763 18.7761424,4.5 18.5,4.5 L14,4.5 Z" fill="#000000" opacity="0.3" />
																				</g>
																			</svg>
																		</span>
																		<!--end::Svg Icon-->
																	</a>
																</div>
															</td>
														</tr>
														<tr>
															<td>
																<div class="form-check form-check-sm form-check-custom form-check-solid">
																	<input class="form-check-input widget-9-check" type="checkbox" value="1" />
																</div>
															</td>
															<td>
																<div class="d-flex align-items-center">
																	<div class="symbol symbol-45px me-5">
																		<img src="assets/media/avatars/150-4.jpg" alt="" />
																	</div>
																	<div class="d-flex justify-content-start flex-column">
																		<a href="#" class="text-dark fw-bolder text-hover-primary fs-6">Lebron Wayde</a>
																		<span class="text-muted fw-bold text-muted d-block fs-7">PHP, Laravel, VueJS</span>
																	</div>
																</div>
															</td>
															<td>
																<a href="#" class="text-dark fw-bolder text-hover-primary d-block fs-6">RoadGee</a>
																<span class="text-muted fw-bold text-muted d-block fs-7">Transportation</span>
															</td>
															<td class="text-end">
																<div class="d-flex flex-column w-100 me-2">
																	<div class="d-flex flex-stack mb-2">
																		<span class="text-muted me-2 fs-7 fw-bold">60%</span>
																	</div>
																	<div class="progress h-6px w-100">
																		<div class="progress-bar bg-success" role="progressbar" style="width: 60%" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"></div>
																	</div>
																</div>
															</td>
															<td>
																<div class="d-flex justify-content-end flex-shrink-0">
																	<a href="#" class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm me-1">
																		<!--begin::Svg Icon | path: icons/duotone/General/Settings-1.svg-->
																		<span class="svg-icon svg-icon-3">
																			<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
																				<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
																					<rect x="0" y="0" width="24" height="24" />
																					<path d="M7,3 L17,3 C19.209139,3 21,4.790861 21,7 C21,9.209139 19.209139,11 17,11 L7,11 C4.790861,11 3,9.209139 3,7 C3,4.790861 4.790861,3 7,3 Z M7,9 C8.1045695,9 9,8.1045695 9,7 C9,5.8954305 8.1045695,5 7,5 C5.8954305,5 5,5.8954305 5,7 C5,8.1045695 5.8954305,9 7,9 Z" fill="#000000" />
																					<path d="M7,13 L17,13 C19.209139,13 21,14.790861 21,17 C21,19.209139 19.209139,21 17,21 L7,21 C4.790861,21 3,19.209139 3,17 C3,14.790861 4.790861,13 7,13 Z M17,19 C18.1045695,19 19,18.1045695 19,17 C19,15.8954305 18.1045695,15 17,15 C15.8954305,15 15,15.8954305 15,17 C15,18.1045695 15.8954305,19 17,19 Z" fill="#000000" opacity="0.3" />
																				</g>
																			</svg>
																		</span>
																		<!--end::Svg Icon-->
																	</a>
																	<a href="#" class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm me-1">
																		<!--begin::Svg Icon | path: icons/duotone/Communication/Write.svg-->
																		<span class="svg-icon svg-icon-3">
																			<svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
																				<path d="M12.2674799,18.2323597 L12.0084872,5.45852451 C12.0004303,5.06114792 12.1504154,4.6768183 12.4255037,4.38993949 L15.0030167,1.70195304 L17.5910752,4.40093695 C17.8599071,4.6812911 18.0095067,5.05499603 18.0083938,5.44341307 L17.9718262,18.2062508 C17.9694575,19.0329966 17.2985816,19.701953 16.4718324,19.701953 L13.7671717,19.701953 C12.9505952,19.701953 12.2840328,19.0487684 12.2674799,18.2323597 Z" fill="#000000" fill-rule="nonzero" transform="translate(14.701953, 10.701953) rotate(-135.000000) translate(-14.701953, -10.701953)" />
																				<path d="M12.9,2 C13.4522847,2 13.9,2.44771525 13.9,3 C13.9,3.55228475 13.4522847,4 12.9,4 L6,4 C4.8954305,4 4,4.8954305 4,6 L4,18 C4,19.1045695 4.8954305,20 6,20 L18,20 C19.1045695,20 20,19.1045695 20,18 L20,13 C20,12.4477153 20.4477153,12 21,12 C21.5522847,12 22,12.4477153 22,13 L22,18 C22,20.209139 20.209139,22 18,22 L6,22 C3.790861,22 2,20.209139 2,18 L2,6 C2,3.790861 3.790861,2 6,2 L12.9,2 Z" fill="#000000" fill-rule="nonzero" opacity="0.3" />
																			</svg>
																		</span>
																		<!--end::Svg Icon-->
																	</a>
																	<a href="#" class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm">
																		<!--begin::Svg Icon | path: icons/duotone/General/Trash.svg-->
																		<span class="svg-icon svg-icon-3">
																			<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
																				<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
																					<rect x="0" y="0" width="24" height="24" />
																					<path d="M6,8 L6,20.5 C6,21.3284271 6.67157288,22 7.5,22 L16.5,22 C17.3284271,22 18,21.3284271 18,20.5 L18,8 L6,8 Z" fill="#000000" fill-rule="nonzero" />
																					<path d="M14,4.5 L14,4 C14,3.44771525 13.5522847,3 13,3 L11,3 C10.4477153,3 10,3.44771525 10,4 L10,4.5 L5.5,4.5 C5.22385763,4.5 5,4.72385763 5,5 L5,5.5 C5,5.77614237 5.22385763,6 5.5,6 L18.5,6 C18.7761424,6 19,5.77614237 19,5.5 L19,5 C19,4.72385763 18.7761424,4.5 18.5,4.5 L14,4.5 Z" fill="#000000" opacity="0.3" />
																				</g>
																			</svg>
																		</span>
																		<!--end::Svg Icon-->
																	</a>
																</div>
															</td>
														</tr>
														<tr>
															<td>
																<div class="form-check form-check-sm form-check-custom form-check-solid">
																	<input class="form-check-input widget-9-check" type="checkbox" value="1" />
																</div>
															</td>
															<td>
																<div class="d-flex align-items-center">
																	<div class="symbol symbol-45px me-5">
																		<img src="assets/media/avatars/150-5.jpg" alt="" />
																	</div>
																	<div class="d-flex justify-content-start flex-column">
																		<a href="#" class="text-dark fw-bolder text-hover-primary fs-6">Natali Goodwin</a>
																		<span class="text-muted fw-bold text-muted d-block fs-7">Python, PostgreSQL, ReactJS</span>
																	</div>
																</div>
															</td>
															<td>
																<a href="#" class="text-dark fw-bolder text-hover-primary d-block fs-6">The Hill</a>
																<span class="text-muted fw-bold text-muted d-block fs-7">Insurance</span>
															</td>
															<td class="text-end">
																<div class="d-flex flex-column w-100 me-2">
																	<div class="d-flex flex-stack mb-2">
																		<span class="text-muted me-2 fs-7 fw-bold">50%</span>
																	</div>
																	<div class="progress h-6px w-100">
																		<div class="progress-bar bg-warning" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
																	</div>
																</div>
															</td>
															<td>
																<div class="d-flex justify-content-end flex-shrink-0">
																	<a href="#" class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm me-1">
																		<!--begin::Svg Icon | path: icons/duotone/General/Settings-1.svg-->
																		<span class="svg-icon svg-icon-3">
																			<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
																				<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
																					<rect x="0" y="0" width="24" height="24" />
																					<path d="M7,3 L17,3 C19.209139,3 21,4.790861 21,7 C21,9.209139 19.209139,11 17,11 L7,11 C4.790861,11 3,9.209139 3,7 C3,4.790861 4.790861,3 7,3 Z M7,9 C8.1045695,9 9,8.1045695 9,7 C9,5.8954305 8.1045695,5 7,5 C5.8954305,5 5,5.8954305 5,7 C5,8.1045695 5.8954305,9 7,9 Z" fill="#000000" />
																					<path d="M7,13 L17,13 C19.209139,13 21,14.790861 21,17 C21,19.209139 19.209139,21 17,21 L7,21 C4.790861,21 3,19.209139 3,17 C3,14.790861 4.790861,13 7,13 Z M17,19 C18.1045695,19 19,18.1045695 19,17 C19,15.8954305 18.1045695,15 17,15 C15.8954305,15 15,15.8954305 15,17 C15,18.1045695 15.8954305,19 17,19 Z" fill="#000000" opacity="0.3" />
																				</g>
																			</svg>
																		</span>
																		<!--end::Svg Icon-->
																	</a>
																	<a href="#" class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm me-1">
																		<!--begin::Svg Icon | path: icons/duotone/Communication/Write.svg-->
																		<span class="svg-icon svg-icon-3">
																			<svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
																				<path d="M12.2674799,18.2323597 L12.0084872,5.45852451 C12.0004303,5.06114792 12.1504154,4.6768183 12.4255037,4.38993949 L15.0030167,1.70195304 L17.5910752,4.40093695 C17.8599071,4.6812911 18.0095067,5.05499603 18.0083938,5.44341307 L17.9718262,18.2062508 C17.9694575,19.0329966 17.2985816,19.701953 16.4718324,19.701953 L13.7671717,19.701953 C12.9505952,19.701953 12.2840328,19.0487684 12.2674799,18.2323597 Z" fill="#000000" fill-rule="nonzero" transform="translate(14.701953, 10.701953) rotate(-135.000000) translate(-14.701953, -10.701953)" />
																				<path d="M12.9,2 C13.4522847,2 13.9,2.44771525 13.9,3 C13.9,3.55228475 13.4522847,4 12.9,4 L6,4 C4.8954305,4 4,4.8954305 4,6 L4,18 C4,19.1045695 4.8954305,20 6,20 L18,20 C19.1045695,20 20,19.1045695 20,18 L20,13 C20,12.4477153 20.4477153,12 21,12 C21.5522847,12 22,12.4477153 22,13 L22,18 C22,20.209139 20.209139,22 18,22 L6,22 C3.790861,22 2,20.209139 2,18 L2,6 C2,3.790861 3.790861,2 6,2 L12.9,2 Z" fill="#000000" fill-rule="nonzero" opacity="0.3" />
																			</svg>
																		</span>
																		<!--end::Svg Icon-->
																	</a>
																	<a href="#" class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm">
																		<!--begin::Svg Icon | path: icons/duotone/General/Trash.svg-->
																		<span class="svg-icon svg-icon-3">
																			<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
																				<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
																					<rect x="0" y="0" width="24" height="24" />
																					<path d="M6,8 L6,20.5 C6,21.3284271 6.67157288,22 7.5,22 L16.5,22 C17.3284271,22 18,21.3284271 18,20.5 L18,8 L6,8 Z" fill="#000000" fill-rule="nonzero" />
																					<path d="M14,4.5 L14,4 C14,3.44771525 13.5522847,3 13,3 L11,3 C10.4477153,3 10,3.44771525 10,4 L10,4.5 L5.5,4.5 C5.22385763,4.5 5,4.72385763 5,5 L5,5.5 C5,5.77614237 5.22385763,6 5.5,6 L18.5,6 C18.7761424,6 19,5.77614237 19,5.5 L19,5 C19,4.72385763 18.7761424,4.5 18.5,4.5 L14,4.5 Z" fill="#000000" opacity="0.3" />
																				</g>
																			</svg>
																		</span>
																		<!--end::Svg Icon-->
																	</a>
																</div>
															</td>
														</tr>
														<tr>
															<td>
																<div class="form-check form-check-sm form-check-custom form-check-solid">
																	<input class="form-check-input widget-9-check" type="checkbox" value="1" />
																</div>
															</td>
															<td>
																<div class="d-flex align-items-center">
																	<div class="symbol symbol-45px me-5">
																		<img src="assets/media/avatars/150-6.jpg" alt="" />
																	</div>
																	<div class="d-flex justify-content-start flex-column">
																		<a href="#" class="text-dark fw-bolder text-hover-primary fs-6">Kevin Leonard</a>
																		<span class="text-muted fw-bold text-muted d-block fs-7">HTML, JS, ReactJS</span>
																	</div>
																</div>
															</td>
															<td>
																<a href="#" class="text-dark fw-bolder text-hover-primary d-block fs-6">RoadGee</a>
																<span class="text-muted fw-bold text-muted d-block fs-7">Art Director</span>
															</td>
															<td class="text-end">
																<div class="d-flex flex-column w-100 me-2">
																	<div class="d-flex flex-stack mb-2">
																		<span class="text-muted me-2 fs-7 fw-bold">90%</span>
																	</div>
																	<div class="progress h-6px w-100">
																		<div class="progress-bar bg-info" role="progressbar" style="width: 90%" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
																	</div>
																</div>
															</td>
															<td>
																<div class="d-flex justify-content-end flex-shrink-0">
																	<a href="#" class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm me-1">
																		<!--begin::Svg Icon | path: icons/duotone/General/Settings-1.svg-->
																		<span class="svg-icon svg-icon-3">
																			<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
																				<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
																					<rect x="0" y="0" width="24" height="24" />
																					<path d="M7,3 L17,3 C19.209139,3 21,4.790861 21,7 C21,9.209139 19.209139,11 17,11 L7,11 C4.790861,11 3,9.209139 3,7 C3,4.790861 4.790861,3 7,3 Z M7,9 C8.1045695,9 9,8.1045695 9,7 C9,5.8954305 8.1045695,5 7,5 C5.8954305,5 5,5.8954305 5,7 C5,8.1045695 5.8954305,9 7,9 Z" fill="#000000" />
																					<path d="M7,13 L17,13 C19.209139,13 21,14.790861 21,17 C21,19.209139 19.209139,21 17,21 L7,21 C4.790861,21 3,19.209139 3,17 C3,14.790861 4.790861,13 7,13 Z M17,19 C18.1045695,19 19,18.1045695 19,17 C19,15.8954305 18.1045695,15 17,15 C15.8954305,15 15,15.8954305 15,17 C15,18.1045695 15.8954305,19 17,19 Z" fill="#000000" opacity="0.3" />
																				</g>
																			</svg>
																		</span>
																		<!--end::Svg Icon-->
																	</a>
																	<a href="#" class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm me-1">
																		<!--begin::Svg Icon | path: icons/duotone/Communication/Write.svg-->
																		<span class="svg-icon svg-icon-3">
																			<svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
																				<path d="M12.2674799,18.2323597 L12.0084872,5.45852451 C12.0004303,5.06114792 12.1504154,4.6768183 12.4255037,4.38993949 L15.0030167,1.70195304 L17.5910752,4.40093695 C17.8599071,4.6812911 18.0095067,5.05499603 18.0083938,5.44341307 L17.9718262,18.2062508 C17.9694575,19.0329966 17.2985816,19.701953 16.4718324,19.701953 L13.7671717,19.701953 C12.9505952,19.701953 12.2840328,19.0487684 12.2674799,18.2323597 Z" fill="#000000" fill-rule="nonzero" transform="translate(14.701953, 10.701953) rotate(-135.000000) translate(-14.701953, -10.701953)" />
																				<path d="M12.9,2 C13.4522847,2 13.9,2.44771525 13.9,3 C13.9,3.55228475 13.4522847,4 12.9,4 L6,4 C4.8954305,4 4,4.8954305 4,6 L4,18 C4,19.1045695 4.8954305,20 6,20 L18,20 C19.1045695,20 20,19.1045695 20,18 L20,13 C20,12.4477153 20.4477153,12 21,12 C21.5522847,12 22,12.4477153 22,13 L22,18 C22,20.209139 20.209139,22 18,22 L6,22 C3.790861,22 2,20.209139 2,18 L2,6 C2,3.790861 3.790861,2 6,2 L12.9,2 Z" fill="#000000" fill-rule="nonzero" opacity="0.3" />
																			</svg>
																		</span>
																		<!--end::Svg Icon-->
																	</a>
																	<a href="#" class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm">
																		<!--begin::Svg Icon | path: icons/duotone/General/Trash.svg-->
																		<span class="svg-icon svg-icon-3">
																			<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
																				<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
																					<rect x="0" y="0" width="24" height="24" />
																					<path d="M6,8 L6,20.5 C6,21.3284271 6.67157288,22 7.5,22 L16.5,22 C17.3284271,22 18,21.3284271 18,20.5 L18,8 L6,8 Z" fill="#000000" fill-rule="nonzero" />
																					<path d="M14,4.5 L14,4 C14,3.44771525 13.5522847,3 13,3 L11,3 C10.4477153,3 10,3.44771525 10,4 L10,4.5 L5.5,4.5 C5.22385763,4.5 5,4.72385763 5,5 L5,5.5 C5,5.77614237 5.22385763,6 5.5,6 L18.5,6 C18.7761424,6 19,5.77614237 19,5.5 L19,5 C19,4.72385763 18.7761424,4.5 18.5,4.5 L14,4.5 Z" fill="#000000" opacity="0.3" />
																				</g>
																			</svg>
																		</span>
																		<!--end::Svg Icon-->
																	</a>
																</div>
															</td>
														</tr>
													</tbody>
													<!--end::Table body-->
												</table>
												<!--end::Table-->
											</div>
											<!--end::Table container-->
										</div>
										<!--begin::Body-->
									</div>
									<!--end::Tables Widget 9-->
								</div>
								<!--end::Col-->
							</div>
							<!--end::Row-->
							<!--begin::Row-->
							<div class="row gy-5 g-xl-8">
								<!--begin::Col-->
								<div class="col-xxl-4">
									<!--begin::Statistics Widget 4-->
									<div class="card card-xxl-stretch-50 mb-5 mb-xl-8">
										<!--begin::Body-->
										<div class="card-body p-0">
											<div class="d-flex flex-stack card-p flex-grow-1">
												<span class="symbol symbol-circle symbol-50px me-2">
													<span class="symbol-label bg-light-danger">
														<!--begin::Svg Icon | path: icons/duotone/Interface/Grid.svg-->
														<span class="svg-icon svg-icon-2x svg-icon-danger">
															<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
																<path opacity="0.25" d="M13.1721 15.4724C13.3364 14.2725 14.2725 13.3364 15.4724 13.1721C16.1606 13.0778 16.9082 13 17.5 13C18.0918 13 18.8394 13.0778 19.5276 13.1721C20.7275 13.3364 21.6636 14.2725 21.8279 15.4724C21.9222 16.1606 22 16.9082 22 17.5C22 18.0918 21.9222 18.8394 21.8279 19.5276C21.6636 20.7275 20.7275 21.6636 19.5276 21.8279C18.8394 21.9222 18.0918 22 17.5 22C16.9082 22 16.1606 21.9222 15.4724 21.8279C14.2725 21.6636 13.3364 20.7275 13.1721 19.5276C13.0778 18.8394 13 18.0918 13 17.5C13 16.9082 13.0778 16.1606 13.1721 15.4724Z" fill="#12131A" />
																<path opacity="0.25" d="M2.17209 15.4724C2.33642 14.2725 3.27253 13.3364 4.47244 13.1721C5.16065 13.0778 5.90816 13 6.5 13C7.09184 13 7.83935 13.0778 8.52756 13.1721C9.72747 13.3364 10.6636 14.2725 10.8279 15.4724C10.9222 16.1606 11 16.9082 11 17.5C11 18.0918 10.9222 18.8394 10.8279 19.5276C10.6636 20.7275 9.72747 21.6636 8.52756 21.8279C7.83935 21.9222 7.09184 22 6.5 22C5.90816 22 5.16065 21.9222 4.47244 21.8279C3.27253 21.6636 2.33642 20.7275 2.17209 19.5276C2.07784 18.8394 2 18.0918 2 17.5C2 16.9082 2.07784 16.1606 2.17209 15.4724Z" fill="#12131A" />
																<path opacity="0.25" d="M13.1721 4.47244C13.3364 3.27253 14.2725 2.33642 15.4724 2.17209C16.1606 2.07784 16.9082 2 17.5 2C18.0918 2 18.8394 2.07784 19.5276 2.17209C20.7275 2.33642 21.6636 3.27253 21.8279 4.47244C21.9222 5.16065 22 5.90816 22 6.5C22 7.09184 21.9222 7.83935 21.8279 8.52756C21.6636 9.72747 20.7275 10.6636 19.5276 10.8279C18.8394 10.9222 18.0918 11 17.5 11C16.9082 11 16.1606 10.9222 15.4724 10.8279C14.2725 10.6636 13.3364 9.72747 13.1721 8.52756C13.0778 7.83935 13 7.09184 13 6.5C13 5.90816 13.0778 5.16065 13.1721 4.47244Z" fill="#12131A" />
																<path d="M2.17209 4.47244C2.33642 3.27253 3.27253 2.33642 4.47244 2.17209C5.16065 2.07784 5.90816 2 6.5 2C7.09184 2 7.83935 2.07784 8.52756 2.17209C9.72747 2.33642 10.6636 3.27253 10.8279 4.47244C10.9222 5.16065 11 5.90816 11 6.5C11 7.09184 10.9222 7.83935 10.8279 8.52756C10.6636 9.72747 9.72747 10.6636 8.52756 10.8279C7.83935 10.9222 7.09184 11 6.5 11C5.90816 11 5.16065 10.9222 4.47244 10.8279C3.27253 10.6636 2.33642 9.72747 2.17209 8.52756C2.07784 7.83935 2 7.09184 2 6.5C2 5.90816 2.07784 5.16065 2.17209 4.47244Z" fill="#12131A" />
															</svg>
														</span>
														<!--end::Svg Icon-->
													</span>
												</span>
												<div class="d-flex flex-column text-end">
													<span class="text-dark fw-bolder fs-2">750$</span>
													<span class="text-muted fw-bold mt-1">Weekly Income</span>
												</div>
											</div>
											<div class="statistics-widget-4-chart card-rounded-bottom" data-kt-chart-color="danger" style="height: 150px"></div>
										</div>
										<!--end::Body-->
									</div>
									<!--end::Statistics Widget 4-->
									<!--begin::Statistics Widget 4-->
									<div class="card card-xxl-stretch-50 mb-xl-8">
										<!--begin::Body-->
										<div class="card-body p-0">
											<div class="d-flex flex-stack card-p flex-grow-1">
												<span class="symbol symbol-circle symbol-50px me-2">
													<span class="symbol-label bg-light-success">
														<!--begin::Svg Icon | path: icons/duotone/Shopping/Cart3.svg-->
														<span class="svg-icon svg-icon-2x svg-icon-success">
															<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
																<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
																	<rect x="0" y="0" width="24" height="24" />
																	<path d="M12,4.56204994 L7.76822128,9.6401844 C7.4146572,10.0644613 6.7840925,10.1217854 6.3598156,9.76822128 C5.9355387,9.4146572 5.87821464,8.7840925 6.23177872,8.3598156 L11.2317787,2.3598156 C11.6315738,1.88006147 12.3684262,1.88006147 12.7682213,2.3598156 L17.7682213,8.3598156 C18.1217854,8.7840925 18.0644613,9.4146572 17.6401844,9.76822128 C17.2159075,10.1217854 16.5853428,10.0644613 16.2317787,9.6401844 L12,4.56204994 Z" fill="#000000" fill-rule="nonzero" opacity="0.3" />
																	<path d="M3.5,9 L20.5,9 C21.0522847,9 21.5,9.44771525 21.5,10 C21.5,10.132026 21.4738562,10.2627452 21.4230769,10.3846154 L17.7692308,19.1538462 C17.3034221,20.271787 16.2111026,21 15,21 L9,21 C7.78889745,21 6.6965779,20.271787 6.23076923,19.1538462 L2.57692308,10.3846154 C2.36450587,9.87481408 2.60558331,9.28934029 3.11538462,9.07692308 C3.23725479,9.02614384 3.36797398,9 3.5,9 Z M12,17 C13.1045695,17 14,16.1045695 14,15 C14,13.8954305 13.1045695,13 12,13 C10.8954305,13 10,13.8954305 10,15 C10,16.1045695 10.8954305,17 12,17 Z" fill="#000000" />
																</g>
															</svg>
														</span>
														<!--end::Svg Icon-->
													</span>
												</span>
												<div class="d-flex flex-column text-end">
													<span class="text-dark fw-bolder fs-2">+259</span>
													<span class="text-muted fw-bold mt-1">Sales Change</span>
												</div>
											</div>
											<div class="statistics-widget-4-chart card-rounded-bottom" data-kt-chart-color="success" style="height: 150px"></div>
										</div>
										<!--end::Body-->
									</div>
									<!--end::Statistics Widget 4-->
								</div>
								<!--end::Col-->
								<!--begin::Col-->
								<div class="col-xxl-4">
									<!--begin::List Widget 9-->
									<div class="card card-xxl-stretch mb-xl-8">
										<!--begin::Header-->
										<div class="card-header align-items-center border-0 mt-3">
											<h3 class="card-title align-items-start flex-column">
												<span class="fw-bolder text-dark fs-3">My Competitors</span>
												<span class="text-gray-400 mt-2 fw-bold fs-6">More than 400+ new members</span>
											</h3>
											<div class="card-toolbar">
												<!--begin::Menu-->
												<button type="button" class="btn btn-clean btn-sm btn-icon btn-icon-primary btn-active-light-primary me-n3" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end" data-kt-menu-flip="top-end">
													<!--begin::Svg Icon | path: icons/duotone/Layout/Layout-4-blocks-2.svg-->
													<span class="svg-icon svg-icon-3 svg-icon-primary">
														<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
															<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
																<rect x="5" y="5" width="5" height="5" rx="1" fill="#000000" />
																<rect x="14" y="5" width="5" height="5" rx="1" fill="#000000" opacity="0.3" />
																<rect x="5" y="14" width="5" height="5" rx="1" fill="#000000" opacity="0.3" />
																<rect x="14" y="14" width="5" height="5" rx="1" fill="#000000" opacity="0.3" />
															</g>
														</svg>
													</span>
													<!--end::Svg Icon-->
												</button>
												<!--begin::Menu 2-->
												<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg-light-primary fw-bold w-200px" data-kt-menu="true">
													<!--begin::Menu item-->
													<div class="menu-item px-3">
														<div class="menu-content fs-6 text-dark fw-bolder px-3 py-4">Quick Actions</div>
													</div>
													<!--end::Menu item-->
													<!--begin::Menu separator-->
													<div class="separator mb-3 opacity-75"></div>
													<!--end::Menu separator-->
													<!--begin::Menu item-->
													<div class="menu-item px-3">
														<a href="#" class="menu-link px-3">New Ticket</a>
													</div>
													<!--end::Menu item-->
													<!--begin::Menu item-->
													<div class="menu-item px-3">
														<a href="#" class="menu-link px-3">New Customer</a>
													</div>
													<!--end::Menu item-->
													<!--begin::Menu item-->
													<div class="menu-item px-3" data-kt-menu-trigger="hover" data-kt-menu-placement="right-start" data-kt-menu-flip="bottom, top">
														<!--begin::Menu item-->
														<a href="#" class="menu-link px-3">
															<span class="menu-title">New Group</span>
															<span class="menu-arrow"></span>
														</a>
														<!--end::Menu item-->
														<!--begin::Menu sub-->
														<div class="menu-sub menu-sub-dropdown w-175px py-4">
															<!--begin::Menu item-->
															<div class="menu-item px-3">
																<a href="#" class="menu-link px-3">Admin Group</a>
															</div>
															<!--end::Menu item-->
															<!--begin::Menu item-->
															<div class="menu-item px-3">
																<a href="#" class="menu-link px-3">Staff Group</a>
															</div>
															<!--end::Menu item-->
															<!--begin::Menu item-->
															<div class="menu-item px-3">
																<a href="#" class="menu-link px-3">Member Group</a>
															</div>
															<!--end::Menu item-->
														</div>
														<!--end::Menu sub-->
													</div>
													<!--end::Menu item-->
													<!--begin::Menu item-->
													<div class="menu-item px-3">
														<a href="#" class="menu-link px-3">New Contact</a>
													</div>
													<!--end::Menu item-->
													<!--begin::Menu separator-->
													<div class="separator mt-3 opacity-75"></div>
													<!--end::Menu separator-->
													<!--begin::Menu item-->
													<div class="menu-item px-3">
														<div class="menu-content px-3 py-3">
															<a class="btn btn-primary btn-sm px-4" href="#">Generate Reports</a>
														</div>
													</div>
													<!--end::Menu item-->
												</div>
												<!--end::Menu 2-->
												<!--end::Menu-->
											</div>
										</div>
										<!--end::Header-->
										<!--begin::Body-->
										<div class="card-body pt-5">
											<!--begin::Item-->
											<div class="d-flex mb-7">
												<!--begin::Symbol-->
												<div class="symbol symbol-60px symbol-2by3 flex-shrink-0 me-4">
													<img src="assets/media/stock/600x400/img-3.jpg" class="mw-100" alt="" />
												</div>
												<!--end::Symbol-->
												<!--begin::Section-->
												<div class="d-flex align-items-center flex-wrap flex-grow-1 mt-n2 mt-lg-n1">
													<!--begin::Title-->
													<div class="d-flex flex-column flex-grow-1 my-lg-0 my-2 pe-3">
														<a href="#" class="fs-5 text-gray-800 text-hover-primary fw-bolder">Cup &amp; Green</a>
														<span class="text-gray-400 fw-bold fs-7 my-1">Study highway types</span>
														<span class="text-gray-400 fw-bold fs-7">By:
														<a href="#" class="text-primary fw-bold">CoreAd</a></span>
													</div>
													<!--end::Title-->
													<!--begin::Info-->
													<div class="text-end py-lg-0 py-2">
														<span class="text-gray-800 fw-boldest fs-3">24,900</span>
														<span class="text-gray-400 fs-7 fw-bold d-block">Sales</span>
													</div>
													<!--end::Info-->
												</div>
												<!--end::Section-->
											</div>
											<!--end::Item-->
											<!--begin::Item-->
											<div class="d-flex mb-7">
												<!--begin::Symbol-->
												<div class="symbol symbol-60px symbol-2by3 flex-shrink-0 me-4">
													<img src="assets/media/stock/600x400/img-4.jpg" class="mw-100" alt="" />
												</div>
												<!--end::Symbol-->
												<!--begin::Section-->
												<div class="d-flex align-items-center flex-wrap flex-grow-1 mt-n2 mt-lg-n1">
													<!--begin::Title-->
													<div class="d-flex flex-column flex-grow-1 my-lg-0 my-2 pe-3">
														<a href="#" class="fs-5 text-gray-800 text-hover-primary fw-bolder">Yellow Hearts</a>
														<span class="text-gray-400 fw-bold fs-7 my-1">Study highway types</span>
														<span class="text-gray-400 fw-bold fs-7">By:
														<a href="#" class="text-primary fw-bold">KeenThemes</a></span>
													</div>
													<!--end::Title-->
													<!--begin::Info-->
													<div class="text-end py-lg-0 py-2">
														<span class="text-gray-800 fw-boldest fs-3">70,380</span>
														<span class="text-gray-400 fs-7 fw-bold d-block">Sales</span>
													</div>
													<!--end::Info-->
												</div>
												<!--end::Section-->
											</div>
											<!--end::Item-->
											<!--begin::Item-->
											<div class="d-flex mb-7">
												<!--begin::Symbol-->
												<div class="symbol symbol-60px symbol-2by3 flex-shrink-0 me-4">
													<img src="assets/media/stock/600x400/img-5.jpg" class="mw-100" alt="" />
												</div>
												<!--end::Symbol-->
												<!--begin::Section-->
												<div class="d-flex align-items-center flex-wrap flex-grow-1 mt-n2 mt-lg-n1">
													<!--begin::Title-->
													<div class="d-flex flex-column flex-grow-1 my-lg-0 my-2 pe-3">
														<a href="#" class="fs-5 text-gray-800 text-hover-primary fw-bolder">Nike &amp; Blue</a>
														<span class="text-gray-400 fw-bold fs-7 my-1">Study highway types</span>
														<span class="text-gray-400 fw-bold fs-7">By:
														<a href="#" class="text-primary fw-bold">Invision Inc.</a></span>
													</div>
													<!--end::Title-->
													<!--begin::Info-->
													<div class="text-end py-lg-0 py-2">
														<span class="text-gray-800 fw-boldest fs-3">7,200</span>
														<span class="text-gray-400 fs-7 fw-bold d-block">Sales</span>
													</div>
													<!--end::Info-->
												</div>
												<!--end::Section-->
											</div>
											<!--end::Item-->
											<!--begin::Item-->
											<div class="d-flex mb-7">
												<!--begin::Symbol-->
												<div class="symbol symbol-60px symbol-2by3 flex-shrink-0 me-4">
													<img src="assets/media/stock/600x400/img-6.jpg" class="mw-100" alt="" />
												</div>
												<!--end::Symbol-->
												<!--begin::Section-->
												<div class="d-flex align-items-center flex-wrap flex-grow-1 mt-n2 mt-lg-n1">
													<!--begin::Title-->
													<div class="d-flex flex-column flex-grow-1 my-lg-0 my-2 pe-3">
														<a href="#" class="fs-5 text-gray-800 text-hover-primary fw-bolder">Red Boots</a>
														<span class="text-gray-400 fw-bold fs-7 my-1">Study highway types</span>
														<span class="text-gray-400 fw-bold fs-7">By:
														<a href="#" class="text-primary fw-bold">Figma Studio</a></span>
													</div>
													<!--end::Title-->
													<!--begin::Info-->
													<div class="text-end py-lg-0 py-2">
														<span class="text-gray-800 fw-boldest fs-3">36,450</span>
														<span class="text-gray-400 fs-7 fw-bold d-block">Sales</span>
													</div>
													<!--end::Info-->
												</div>
												<!--end::Section-->
											</div>
											<!--end::Item-->
											<!--begin::Item-->
											<div class="d-flex">
												<!--begin::Symbol-->
												<div class="symbol symbol-60px symbol-2by3 flex-shrink-0 me-4">
													<img src="assets/media/stock/600x400/img-7.jpg" class="mw-100" alt="" />
												</div>
												<!--end::Symbol-->
												<!--begin::Section-->
												<div class="d-flex align-items-center flex-wrap flex-grow-1 mt-n2 mt-lg-n1">
													<!--begin::Title-->
													<div class="d-flex flex-column flex-grow-1 my-lg-0 my-2 pe-3">
														<a href="#" class="fs-5 text-gray-800 text-hover-primary fw-bolder">Desserts platter</a>
														<span class="text-gray-400 fw-bold fs-7 my-1">Food trends &amp; reviews</span>
														<span class="text-gray-400 fw-bold fs-7">By:
														<a href="#" class="text-primary fw-bold">Figma Studio</a></span>
													</div>
													<!--end::Title-->
													<!--begin::Info-->
													<div class="text-end py-lg-0 py-2">
														<span class="text-gray-800 fw-boldest fs-3">64,753</span>
														<span class="text-gray-400 fs-7 fw-bold d-block">Sales</span>
													</div>
													<!--end::Info-->
												</div>
												<!--end::Section-->
											</div>
											<!--end::Item-->
										</div>
										<!--end::Body-->
									</div>
									<!--end::List Widget 9-->
								</div>
								<!--end::Col-->
								<!--begin::Col-->
								<div class="col-xxl-4">
									<!--begin::List Widget 4-->
									<div class="card card-xxl-stretch mb-5 mb-xl-8">
										<!--begin::Header-->
										<div class="card-header border-0 pt-5">
											<h3 class="card-title align-items-start flex-column">
												<span class="card-label fw-bolder text-dark">Trends</span>
												<span class="text-muted mt-1 fw-bold fs-7">Latest tech trends</span>
											</h3>
											<div class="card-toolbar">
												<!--begin::Menu-->
												<button type="button" class="btn btn-sm btn-icon btn-color-primary btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end" data-kt-menu-flip="top-end">
													<!--begin::Svg Icon | path: icons/duotone/Layout/Layout-4-blocks-2.svg-->
													<span class="svg-icon svg-icon-2">
														<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
															<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
																<rect x="5" y="5" width="5" height="5" rx="1" fill="#000000" />
																<rect x="14" y="5" width="5" height="5" rx="1" fill="#000000" opacity="0.3" />
																<rect x="5" y="14" width="5" height="5" rx="1" fill="#000000" opacity="0.3" />
																<rect x="14" y="14" width="5" height="5" rx="1" fill="#000000" opacity="0.3" />
															</g>
														</svg>
													</span>
													<!--end::Svg Icon-->
												</button>
												<!--begin::Menu 3-->
												<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg-light-primary fw-bold w-200px py-3" data-kt-menu="true">
													<!--begin::Heading-->
													<div class="menu-item px-3">
														<div class="menu-content text-muted pb-2 px-3 fs-7 text-uppercase">Payments</div>
													</div>
													<!--end::Heading-->
													<!--begin::Menu item-->
													<div class="menu-item px-3">
														<a href="#" class="menu-link px-3">Create Invoice</a>
													</div>
													<!--end::Menu item-->
													<!--begin::Menu item-->
													<div class="menu-item px-3">
														<a href="#" class="menu-link flex-stack px-3">Create Payment
														<i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip" title="Specify a target name for future usage and reference"></i></a>
													</div>
													<!--end::Menu item-->
													<!--begin::Menu item-->
													<div class="menu-item px-3">
														<a href="#" class="menu-link px-3">Generate Bill</a>
													</div>
													<!--end::Menu item-->
													<!--begin::Menu item-->
													<div class="menu-item px-3" data-kt-menu-trigger="hover" data-kt-menu-placement="right-end" data-kt-menu-flip="bottom, top">
														<a href="#" class="menu-link px-3">
															<span class="menu-title">Subscription</span>
															<span class="menu-arrow"></span>
														</a>
														<!--begin::Menu sub-->
														<div class="menu-sub menu-sub-dropdown w-175px py-4">
															<!--begin::Menu item-->
															<div class="menu-item px-3">
																<a href="#" class="menu-link px-3">Plans</a>
															</div>
															<!--end::Menu item-->
															<!--begin::Menu item-->
															<div class="menu-item px-3">
																<a href="#" class="menu-link px-3">Billing</a>
															</div>
															<!--end::Menu item-->
															<!--begin::Menu item-->
															<div class="menu-item px-3">
																<a href="#" class="menu-link px-3">Statements</a>
															</div>
															<!--end::Menu item-->
															<!--begin::Menu separator-->
															<div class="separator my-2"></div>
															<!--end::Menu separator-->
															<!--begin::Menu item-->
															<div class="menu-item px-3">
																<div class="menu-content px-3">
																	<!--begin::Switch-->
																	<label class="form-check form-switch form-check-custom form-check-solid">
																		<!--begin::Input-->
																		<input class="form-check-input w-30px h-20px" type="checkbox" value="1" checked="checked" name="notifications" />
																		<!--end::Input-->
																		<!--end::Label-->
																		<span class="form-check-label text-muted fs-6">Recuring</span>
																		<!--end::Label-->
																	</label>
																	<!--end::Switch-->
																</div>
															</div>
															<!--end::Menu item-->
														</div>
														<!--end::Menu sub-->
													</div>
													<!--end::Menu item-->
													<!--begin::Menu item-->
													<div class="menu-item px-3 my-1">
														<a href="#" class="menu-link px-3">Settings</a>
													</div>
													<!--end::Menu item-->
												</div>
												<!--end::Menu 3-->
												<!--end::Menu-->
											</div>
										</div>
										<!--end::Header-->
										<!--begin::Body-->
										<div class="card-body pt-5">
											<!--begin::Item-->
											<div class="d-flex align-items-sm-center mb-7">
												<!--begin::Symbol-->
												<div class="symbol symbol-50px me-5">
													<span class="symbol-label">
														<img src="assets/media/svg/brand-logos/plurk.svg" class="h-50 align-self-center" alt="" />
													</span>
												</div>
												<!--end::Symbol-->
												<!--begin::Section-->
												<div class="d-flex align-items-center flex-row-fluid flex-wrap">
													<div class="flex-grow-1 me-2">
														<a href="#" class="text-gray-800 text-hover-primary fs-6 fw-bolder">Top Authors</a>
														<span class="text-muted fw-bold d-block fs-7">Mark, Rowling, Esther</span>
													</div>
													<span class="badge badge-light fw-bolder my-2">+82$</span>
												</div>
												<!--end::Section-->
											</div>
											<!--end::Item-->
											<!--begin::Item-->
											<div class="d-flex align-items-sm-center mb-7">
												<!--begin::Symbol-->
												<div class="symbol symbol-50px me-5">
													<span class="symbol-label">
														<img src="assets/media/svg/brand-logos/telegram.svg" class="h-50 align-self-center" alt="" />
													</span>
												</div>
												<!--end::Symbol-->
												<!--begin::Section-->
												<div class="d-flex align-items-center flex-row-fluid flex-wrap">
													<div class="flex-grow-1 me-2">
														<a href="#" class="text-gray-800 text-hover-primary fs-6 fw-bolder">Popular Authors</a>
														<span class="text-muted fw-bold d-block fs-7">Randy, Steve, Mike</span>
													</div>
													<span class="badge badge-light fw-bolder my-2">+280$</span>
												</div>
												<!--end::Section-->
											</div>
											<!--end::Item-->
											<!--begin::Item-->
											<div class="d-flex align-items-sm-center mb-7">
												<!--begin::Symbol-->
												<div class="symbol symbol-50px me-5">
													<span class="symbol-label">
														<img src="assets/media/svg/brand-logos/vimeo.svg" class="h-50 align-self-center" alt="" />
													</span>
												</div>
												<!--end::Symbol-->
												<!--begin::Section-->
												<div class="d-flex align-items-center flex-row-fluid flex-wrap">
													<div class="flex-grow-1 me-2">
														<a href="#" class="text-gray-800 text-hover-primary fs-6 fw-bolder">New Users</a>
														<span class="text-muted fw-bold d-block fs-7">John, Pat, Jimmy</span>
													</div>
													<span class="badge badge-light fw-bolder my-2">+4500$</span>
												</div>
												<!--end::Section-->
											</div>
											<!--end::Item-->
											<!--begin::Item-->
											<div class="d-flex align-items-sm-center mb-7">
												<!--begin::Symbol-->
												<div class="symbol symbol-50px me-5">
													<span class="symbol-label">
														<img src="assets/media/svg/brand-logos/bebo.svg" class="h-50 align-self-center" alt="" />
													</span>
												</div>
												<!--end::Symbol-->
												<!--begin::Section-->
												<div class="d-flex align-items-center flex-row-fluid flex-wrap">
													<div class="flex-grow-1 me-2">
														<a href="#" class="text-gray-800 text-hover-primary fs-6 fw-bolder">Active Customers</a>
														<span class="text-muted fw-bold d-block fs-7">Mark, Rowling, Esther</span>
													</div>
													<span class="badge badge-light fw-bolder my-2">+686$</span>
												</div>
												<!--end::Section-->
											</div>
											<!--end::Item-->
											<!--begin::Item-->
											<div class="d-flex align-items-sm-center mb-7">
												<!--begin::Symbol-->
												<div class="symbol symbol-50px me-5">
													<span class="symbol-label">
														<img src="assets/media/svg/brand-logos/kickstarter.svg" class="h-50 align-self-center" alt="" />
													</span>
												</div>
												<!--end::Symbol-->
												<!--begin::Section-->
												<div class="d-flex align-items-center flex-row-fluid flex-wrap">
													<div class="flex-grow-1 me-2">
														<a href="#" class="text-gray-800 text-hover-primary fs-6 fw-bolder">Bestseller Theme</a>
														<span class="text-muted fw-bold d-block fs-7">Disco, Retro, Sports</span>
													</div>
													<span class="badge badge-light fw-bolder my-2">+726$</span>
												</div>
												<!--end::Section-->
											</div>
											<!--end::Item-->
											<!--begin::Item-->
											<div class="d-flex align-items-sm-center">
												<!--begin::Symbol-->
												<div class="symbol symbol-50px me-5">
													<span class="symbol-label">
														<img src="assets/media/svg/brand-logos/fox-hub.svg" class="h-50 align-self-center" alt="" />
													</span>
												</div>
												<!--end::Symbol-->
												<!--begin::Section-->
												<div class="d-flex align-items-center flex-row-fluid flex-wrap">
													<div class="flex-grow-1 me-2">
														<a href="#" class="text-gray-800 text-hover-primary fs-6 fw-bolder">Fox Broker App</a>
														<span class="text-muted fw-bold d-block fs-7">Finance, Corporate, Apps</span>
													</div>
													<span class="badge badge-light fw-bolder my-2">+145$</span>
												</div>
												<!--end::Section-->
											</div>
											<!--end::Item-->
										</div>
										<!--end::Body-->
									</div>
									<!--end::List Widget 4-->
								</div>
								<!--end::Col-->
							</div>
							<!--end::Row-->
							<!--begin::Row-->
							<div class="row gy-5 g-xl-8">
								<!--begin::Col-->
								<div class="col-xxl-4">
									<!--begin::List Widget 3-->
									<div class="card card-xxl-stretch mb-xl-3">
										<!--begin::Header-->
										<div class="card-header border-0">
											<h3 class="card-title fw-bolder text-dark">Todo</h3>
											<div class="card-toolbar">
												<!--begin::Menu-->
												<button type="button" class="btn btn-sm btn-icon btn-color-primary btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end" data-kt-menu-flip="top-end">
													<!--begin::Svg Icon | path: icons/duotone/Layout/Layout-4-blocks-2.svg-->
													<span class="svg-icon svg-icon-2">
														<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
															<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
																<rect x="5" y="5" width="5" height="5" rx="1" fill="#000000" />
																<rect x="14" y="5" width="5" height="5" rx="1" fill="#000000" opacity="0.3" />
																<rect x="5" y="14" width="5" height="5" rx="1" fill="#000000" opacity="0.3" />
																<rect x="14" y="14" width="5" height="5" rx="1" fill="#000000" opacity="0.3" />
															</g>
														</svg>
													</span>
													<!--end::Svg Icon-->
												</button>
												<!--begin::Menu 3-->
												<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg-light-primary fw-bold w-200px py-3" data-kt-menu="true">
													<!--begin::Heading-->
													<div class="menu-item px-3">
														<div class="menu-content text-muted pb-2 px-3 fs-7 text-uppercase">Payments</div>
													</div>
													<!--end::Heading-->
													<!--begin::Menu item-->
													<div class="menu-item px-3">
														<a href="#" class="menu-link px-3">Create Invoice</a>
													</div>
													<!--end::Menu item-->
													<!--begin::Menu item-->
													<div class="menu-item px-3">
														<a href="#" class="menu-link flex-stack px-3">Create Payment
														<i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip" title="Specify a target name for future usage and reference"></i></a>
													</div>
													<!--end::Menu item-->
													<!--begin::Menu item-->
													<div class="menu-item px-3">
														<a href="#" class="menu-link px-3">Generate Bill</a>
													</div>
													<!--end::Menu item-->
													<!--begin::Menu item-->
													<div class="menu-item px-3" data-kt-menu-trigger="hover" data-kt-menu-placement="right-end" data-kt-menu-flip="bottom, top">
														<a href="#" class="menu-link px-3">
															<span class="menu-title">Subscription</span>
															<span class="menu-arrow"></span>
														</a>
														<!--begin::Menu sub-->
														<div class="menu-sub menu-sub-dropdown w-175px py-4">
															<!--begin::Menu item-->
															<div class="menu-item px-3">
																<a href="#" class="menu-link px-3">Plans</a>
															</div>
															<!--end::Menu item-->
															<!--begin::Menu item-->
															<div class="menu-item px-3">
																<a href="#" class="menu-link px-3">Billing</a>
															</div>
															<!--end::Menu item-->
															<!--begin::Menu item-->
															<div class="menu-item px-3">
																<a href="#" class="menu-link px-3">Statements</a>
															</div>
															<!--end::Menu item-->
															<!--begin::Menu separator-->
															<div class="separator my-2"></div>
															<!--end::Menu separator-->
															<!--begin::Menu item-->
															<div class="menu-item px-3">
																<div class="menu-content px-3">
																	<!--begin::Switch-->
																	<label class="form-check form-switch form-check-custom form-check-solid">
																		<!--begin::Input-->
																		<input class="form-check-input w-30px h-20px" type="checkbox" value="1" checked="checked" name="notifications" />
																		<!--end::Input-->
																		<!--end::Label-->
																		<span class="form-check-label text-muted fs-6">Recuring</span>
																		<!--end::Label-->
																	</label>
																	<!--end::Switch-->
																</div>
															</div>
															<!--end::Menu item-->
														</div>
														<!--end::Menu sub-->
													</div>
													<!--end::Menu item-->
													<!--begin::Menu item-->
													<div class="menu-item px-3 my-1">
														<a href="#" class="menu-link px-3">Settings</a>
													</div>
													<!--end::Menu item-->
												</div>
												<!--end::Menu 3-->
												<!--end::Menu-->
											</div>
										</div>
										<!--end::Header-->
										<!--begin::Body-->
										<div class="card-body pt-2">
											<!--begin::Item-->
											<div class="d-flex align-items-center mb-8">
												<!--begin::Bullet-->
												<span class="bullet bullet-vertical h-40px bg-success"></span>
												<!--end::Bullet-->
												<!--begin::Checkbox-->
												<div class="form-check form-check-custom form-check-solid mx-5">
													<input class="form-check-input" type="checkbox" value="" />
												</div>
												<!--end::Checkbox-->
												<!--begin::Description-->
												<div class="flex-grow-1">
													<a href="#" class="text-gray-800 text-hover-primary fw-bolder fs-6">Create FireStone Logo</a>
													<span class="text-muted fw-bold d-block">Due in 2 Days</span>
												</div>
												<!--end::Description-->
												<span class="badge badge-light-success fs-8 fw-bolder">New</span>
											</div>
											<!--end:Item-->
											<!--begin::Item-->
											<div class="d-flex align-items-center mb-8">
												<!--begin::Bullet-->
												<span class="bullet bullet-vertical h-40px bg-primary"></span>
												<!--end::Bullet-->
												<!--begin::Checkbox-->
												<div class="form-check form-check-custom form-check-solid mx-5">
													<input class="form-check-input" type="checkbox" value="" />
												</div>
												<!--end::Checkbox-->
												<!--begin::Description-->
												<div class="flex-grow-1">
													<a href="#" class="text-gray-800 text-hover-primary fw-bolder fs-6">Stakeholder Meeting</a>
													<span class="text-muted fw-bold d-block">Due in 3 Days</span>
												</div>
												<!--end::Description-->
												<span class="badge badge-light-primary fs-8 fw-bolder">New</span>
											</div>
											<!--end:Item-->
											<!--begin::Item-->
											<div class="d-flex align-items-center mb-8">
												<!--begin::Bullet-->
												<span class="bullet bullet-vertical h-40px bg-warning"></span>
												<!--end::Bullet-->
												<!--begin::Checkbox-->
												<div class="form-check form-check-custom form-check-solid mx-5">
													<input class="form-check-input" type="checkbox" value="" />
												</div>
												<!--end::Checkbox-->
												<!--begin::Description-->
												<div class="flex-grow-1">
													<a href="#" class="text-gray-800 text-hover-primary fw-bolder fs-6">Scoping &amp; Estimations</a>
													<span class="text-muted fw-bold d-block">Due in 5 Days</span>
												</div>
												<!--end::Description-->
												<span class="badge badge-light-warning fs-8 fw-bolder">New</span>
											</div>
											<!--end:Item-->
											<!--begin::Item-->
											<div class="d-flex align-items-center mb-8">
												<!--begin::Bullet-->
												<span class="bullet bullet-vertical h-40px bg-primary"></span>
												<!--end::Bullet-->
												<!--begin::Checkbox-->
												<div class="form-check form-check-custom form-check-solid mx-5">
													<input class="form-check-input" type="checkbox" value="" />
												</div>
												<!--end::Checkbox-->
												<!--begin::Description-->
												<div class="flex-grow-1">
													<a href="#" class="text-gray-800 text-hover-primary fw-bolder fs-6">KPI App Showcase</a>
													<span class="text-muted fw-bold d-block">Due in 2 Days</span>
												</div>
												<!--end::Description-->
												<span class="badge badge-light-primary fs-8 fw-bolder">New</span>
											</div>
											<!--end:Item-->
											<!--begin::Item-->
											<div class="d-flex align-items-center mb-8">
												<!--begin::Bullet-->
												<span class="bullet bullet-vertical h-40px bg-danger"></span>
												<!--end::Bullet-->
												<!--begin::Checkbox-->
												<div class="form-check form-check-custom form-check-solid mx-5">
													<input class="form-check-input" type="checkbox" value="" />
												</div>
												<!--end::Checkbox-->
												<!--begin::Description-->
												<div class="flex-grow-1">
													<a href="#" class="text-gray-800 text-hover-primary fw-bolder fs-6">Project Meeting</a>
													<span class="text-muted fw-bold d-block">Due in 12 Days</span>
												</div>
												<!--end::Description-->
												<span class="badge badge-light-danger fs-8 fw-bolder">New</span>
											</div>
											<!--end:Item-->
											<!--begin::Item-->
											<div class="d-flex align-items-center">
												<!--begin::Bullet-->
												<span class="bullet bullet-vertical h-40px bg-success"></span>
												<!--end::Bullet-->
												<!--begin::Checkbox-->
												<div class="form-check form-check-custom form-check-solid mx-5">
													<input class="form-check-input" type="checkbox" value="" />
												</div>
												<!--end::Checkbox-->
												<!--begin::Description-->
												<div class="flex-grow-1">
													<a href="#" class="text-gray-800 text-hover-primary fw-bolder fs-6">Customers Update</a>
													<span class="text-muted fw-bold d-block">Due in 1 week</span>
												</div>
												<!--end::Description-->
												<span class="badge badge-light-success fs-8 fw-bolder">New</span>
											</div>
											<!--end:Item-->
										</div>
										<!--end::Body-->
									</div>
									<!--end:List Widget 3-->
								</div>
								<!--end::Col-->
								<!--begin::Col-->
								<div class="col-xxl-8">
									<!--begin::Tables Widget 9-->
									<div class="card card-xxl-stretch mb-5 mb-xl-8">
										<!--begin::Header-->
										<div class="card-header border-0 pt-5">
											<h3 class="card-title align-items-start flex-column">
												<span class="card-label fw-bolder fs-3 mb-1">Members Statistics</span>
												<span class="text-muted mt-1 fw-bold fs-7">Over 500 members</span>
											</h3>
											<div class="card-toolbar" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-trigger="hover" title="Click to add a user">
												<a href="#" class="btn btn-sm btn-light btn-active-primary" data-bs-toggle="modal" data-bs-target="#kt_modal_invite_friends">
												<!--begin::Svg Icon | path: icons/duotone/Communication/Add-user.svg-->
												<span class="svg-icon svg-icon-3">
													<svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
														<path d="M18,8 L16,8 C15.4477153,8 15,7.55228475 15,7 C15,6.44771525 15.4477153,6 16,6 L18,6 L18,4 C18,3.44771525 18.4477153,3 19,3 C19.5522847,3 20,3.44771525 20,4 L20,6 L22,6 C22.5522847,6 23,6.44771525 23,7 C23,7.55228475 22.5522847,8 22,8 L20,8 L20,10 C20,10.5522847 19.5522847,11 19,11 C18.4477153,11 18,10.5522847 18,10 L18,8 Z M9,11 C6.790861,11 5,9.209139 5,7 C5,4.790861 6.790861,3 9,3 C11.209139,3 13,4.790861 13,7 C13,9.209139 11.209139,11 9,11 Z" fill="#000000" fill-rule="nonzero" opacity="0.3" />
														<path d="M0.00065168429,20.1992055 C0.388258525,15.4265159 4.26191235,13 8.98334134,13 C13.7712164,13 17.7048837,15.2931929 17.9979143,20.2 C18.0095879,20.3954741 17.9979143,21 17.2466999,21 C13.541124,21 8.03472472,21 0.727502227,21 C0.476712155,21 -0.0204617505,20.45918 0.00065168429,20.1992055 Z" fill="#000000" fill-rule="nonzero" />
													</svg>
												</span>
												<!--end::Svg Icon-->New Member</a>
											</div>
										</div>
										<!--end::Header-->
										<!--begin::Body-->
										<div class="card-body py-3">
											<!--begin::Table container-->
											<div class="table-responsive">
												<!--begin::Table-->
												<table class="table table-row-dashed table-row-gray-300 align-middle gs-0 gy-4">
													<!--begin::Table head-->
													<thead>
														<tr class="fw-bolder text-muted">
															<th class="w-25px">
																<div class="form-check form-check-sm form-check-custom form-check-solid">
																	<input class="form-check-input" type="checkbox" value="1" data-kt-check="true" data-kt-check-target=".widget-9-check" />
																</div>
															</th>
															<th class="min-w-150px">Authors</th>
															<th class="min-w-140px">Company</th>
															<th class="min-w-120px">Progress</th>
															<th class="min-w-100px text-end">Actions</th>
														</tr>
													</thead>
													<!--end::Table head-->
													<!--begin::Table body-->
													<tbody>
														<tr>
															<td>
																<div class="form-check form-check-sm form-check-custom form-check-solid">
																	<input class="form-check-input widget-9-check" type="checkbox" value="1" />
																</div>
															</td>
															<td>
																<div class="d-flex align-items-center">
																	<div class="symbol symbol-45px me-5">
																		<img src="assets/media/avatars/150-11.jpg" alt="" />
																	</div>
																	<div class="d-flex justify-content-start flex-column">
																		<a href="#" class="text-dark fw-bolder text-hover-primary fs-6">Ana Simmons</a>
																		<span class="text-muted fw-bold text-muted d-block fs-7">HTML, JS, ReactJS</span>
																	</div>
																</div>
															</td>
															<td>
																<a href="#" class="text-dark fw-bolder text-hover-primary d-block fs-6">Intertico</a>
																<span class="text-muted fw-bold text-muted d-block fs-7">Web, UI/UX Design</span>
															</td>
															<td class="text-end">
																<div class="d-flex flex-column w-100 me-2">
																	<div class="d-flex flex-stack mb-2">
																		<span class="text-muted me-2 fs-7 fw-bold">50%</span>
																	</div>
																	<div class="progress h-6px w-100">
																		<div class="progress-bar bg-primary" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
																	</div>
																</div>
															</td>
															<td>
																<div class="d-flex justify-content-end flex-shrink-0">
																	<a href="#" class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm me-1">
																		<!--begin::Svg Icon | path: icons/duotone/General/Settings-1.svg-->
																		<span class="svg-icon svg-icon-3">
																			<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
																				<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
																					<rect x="0" y="0" width="24" height="24" />
																					<path d="M7,3 L17,3 C19.209139,3 21,4.790861 21,7 C21,9.209139 19.209139,11 17,11 L7,11 C4.790861,11 3,9.209139 3,7 C3,4.790861 4.790861,3 7,3 Z M7,9 C8.1045695,9 9,8.1045695 9,7 C9,5.8954305 8.1045695,5 7,5 C5.8954305,5 5,5.8954305 5,7 C5,8.1045695 5.8954305,9 7,9 Z" fill="#000000" />
																					<path d="M7,13 L17,13 C19.209139,13 21,14.790861 21,17 C21,19.209139 19.209139,21 17,21 L7,21 C4.790861,21 3,19.209139 3,17 C3,14.790861 4.790861,13 7,13 Z M17,19 C18.1045695,19 19,18.1045695 19,17 C19,15.8954305 18.1045695,15 17,15 C15.8954305,15 15,15.8954305 15,17 C15,18.1045695 15.8954305,19 17,19 Z" fill="#000000" opacity="0.3" />
																				</g>
																			</svg>
																		</span>
																		<!--end::Svg Icon-->
																	</a>
																	<a href="#" class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm me-1">
																		<!--begin::Svg Icon | path: icons/duotone/Communication/Write.svg-->
																		<span class="svg-icon svg-icon-3">
																			<svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
																				<path d="M12.2674799,18.2323597 L12.0084872,5.45852451 C12.0004303,5.06114792 12.1504154,4.6768183 12.4255037,4.38993949 L15.0030167,1.70195304 L17.5910752,4.40093695 C17.8599071,4.6812911 18.0095067,5.05499603 18.0083938,5.44341307 L17.9718262,18.2062508 C17.9694575,19.0329966 17.2985816,19.701953 16.4718324,19.701953 L13.7671717,19.701953 C12.9505952,19.701953 12.2840328,19.0487684 12.2674799,18.2323597 Z" fill="#000000" fill-rule="nonzero" transform="translate(14.701953, 10.701953) rotate(-135.000000) translate(-14.701953, -10.701953)" />
																				<path d="M12.9,2 C13.4522847,2 13.9,2.44771525 13.9,3 C13.9,3.55228475 13.4522847,4 12.9,4 L6,4 C4.8954305,4 4,4.8954305 4,6 L4,18 C4,19.1045695 4.8954305,20 6,20 L18,20 C19.1045695,20 20,19.1045695 20,18 L20,13 C20,12.4477153 20.4477153,12 21,12 C21.5522847,12 22,12.4477153 22,13 L22,18 C22,20.209139 20.209139,22 18,22 L6,22 C3.790861,22 2,20.209139 2,18 L2,6 C2,3.790861 3.790861,2 6,2 L12.9,2 Z" fill="#000000" fill-rule="nonzero" opacity="0.3" />
																			</svg>
																		</span>
																		<!--end::Svg Icon-->
																	</a>
																	<a href="#" class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm">
																		<!--begin::Svg Icon | path: icons/duotone/General/Trash.svg-->
																		<span class="svg-icon svg-icon-3">
																			<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
																				<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
																					<rect x="0" y="0" width="24" height="24" />
																					<path d="M6,8 L6,20.5 C6,21.3284271 6.67157288,22 7.5,22 L16.5,22 C17.3284271,22 18,21.3284271 18,20.5 L18,8 L6,8 Z" fill="#000000" fill-rule="nonzero" />
																					<path d="M14,4.5 L14,4 C14,3.44771525 13.5522847,3 13,3 L11,3 C10.4477153,3 10,3.44771525 10,4 L10,4.5 L5.5,4.5 C5.22385763,4.5 5,4.72385763 5,5 L5,5.5 C5,5.77614237 5.22385763,6 5.5,6 L18.5,6 C18.7761424,6 19,5.77614237 19,5.5 L19,5 C19,4.72385763 18.7761424,4.5 18.5,4.5 L14,4.5 Z" fill="#000000" opacity="0.3" />
																				</g>
																			</svg>
																		</span>
																		<!--end::Svg Icon-->
																	</a>
																</div>
															</td>
														</tr>
														<tr>
															<td>
																<div class="form-check form-check-sm form-check-custom form-check-solid">
																	<input class="form-check-input widget-9-check" type="checkbox" value="1" />
																</div>
															</td>
															<td>
																<div class="d-flex align-items-center">
																	<div class="symbol symbol-45px me-5">
																		<img src="assets/media/avatars/150-3.jpg" alt="" />
																	</div>
																	<div class="d-flex justify-content-start flex-column">
																		<a href="#" class="text-dark fw-bolder text-hover-primary fs-6">Jessie Clarcson</a>
																		<span class="text-muted fw-bold text-muted d-block fs-7">C#, ASP.NET, MS SQL</span>
																	</div>
																</div>
															</td>
															<td>
																<a href="#" class="text-dark fw-bolder text-hover-primary d-block fs-6">Agoda</a>
																<span class="text-muted fw-bold text-muted d-block fs-7">Houses &amp; Hotels</span>
															</td>
															<td class="text-end">
																<div class="d-flex flex-column w-100 me-2">
																	<div class="d-flex flex-stack mb-2">
																		<span class="text-muted me-2 fs-7 fw-bold">70%</span>
																	</div>
																	<div class="progress h-6px w-100">
																		<div class="progress-bar bg-danger" role="progressbar" style="width: 70%" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100"></div>
																	</div>
																</div>
															</td>
															<td>
																<div class="d-flex justify-content-end flex-shrink-0">
																	<a href="#" class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm me-1">
																		<!--begin::Svg Icon | path: icons/duotone/General/Settings-1.svg-->
																		<span class="svg-icon svg-icon-3">
																			<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
																				<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
																					<rect x="0" y="0" width="24" height="24" />
																					<path d="M7,3 L17,3 C19.209139,3 21,4.790861 21,7 C21,9.209139 19.209139,11 17,11 L7,11 C4.790861,11 3,9.209139 3,7 C3,4.790861 4.790861,3 7,3 Z M7,9 C8.1045695,9 9,8.1045695 9,7 C9,5.8954305 8.1045695,5 7,5 C5.8954305,5 5,5.8954305 5,7 C5,8.1045695 5.8954305,9 7,9 Z" fill="#000000" />
																					<path d="M7,13 L17,13 C19.209139,13 21,14.790861 21,17 C21,19.209139 19.209139,21 17,21 L7,21 C4.790861,21 3,19.209139 3,17 C3,14.790861 4.790861,13 7,13 Z M17,19 C18.1045695,19 19,18.1045695 19,17 C19,15.8954305 18.1045695,15 17,15 C15.8954305,15 15,15.8954305 15,17 C15,18.1045695 15.8954305,19 17,19 Z" fill="#000000" opacity="0.3" />
																				</g>
																			</svg>
																		</span>
																		<!--end::Svg Icon-->
																	</a>
																	<a href="#" class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm me-1">
																		<!--begin::Svg Icon | path: icons/duotone/Communication/Write.svg-->
																		<span class="svg-icon svg-icon-3">
																			<svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
																				<path d="M12.2674799,18.2323597 L12.0084872,5.45852451 C12.0004303,5.06114792 12.1504154,4.6768183 12.4255037,4.38993949 L15.0030167,1.70195304 L17.5910752,4.40093695 C17.8599071,4.6812911 18.0095067,5.05499603 18.0083938,5.44341307 L17.9718262,18.2062508 C17.9694575,19.0329966 17.2985816,19.701953 16.4718324,19.701953 L13.7671717,19.701953 C12.9505952,19.701953 12.2840328,19.0487684 12.2674799,18.2323597 Z" fill="#000000" fill-rule="nonzero" transform="translate(14.701953, 10.701953) rotate(-135.000000) translate(-14.701953, -10.701953)" />
																				<path d="M12.9,2 C13.4522847,2 13.9,2.44771525 13.9,3 C13.9,3.55228475 13.4522847,4 12.9,4 L6,4 C4.8954305,4 4,4.8954305 4,6 L4,18 C4,19.1045695 4.8954305,20 6,20 L18,20 C19.1045695,20 20,19.1045695 20,18 L20,13 C20,12.4477153 20.4477153,12 21,12 C21.5522847,12 22,12.4477153 22,13 L22,18 C22,20.209139 20.209139,22 18,22 L6,22 C3.790861,22 2,20.209139 2,18 L2,6 C2,3.790861 3.790861,2 6,2 L12.9,2 Z" fill="#000000" fill-rule="nonzero" opacity="0.3" />
																			</svg>
																		</span>
																		<!--end::Svg Icon-->
																	</a>
																	<a href="#" class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm">
																		<!--begin::Svg Icon | path: icons/duotone/General/Trash.svg-->
																		<span class="svg-icon svg-icon-3">
																			<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
																				<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
																					<rect x="0" y="0" width="24" height="24" />
																					<path d="M6,8 L6,20.5 C6,21.3284271 6.67157288,22 7.5,22 L16.5,22 C17.3284271,22 18,21.3284271 18,20.5 L18,8 L6,8 Z" fill="#000000" fill-rule="nonzero" />
																					<path d="M14,4.5 L14,4 C14,3.44771525 13.5522847,3 13,3 L11,3 C10.4477153,3 10,3.44771525 10,4 L10,4.5 L5.5,4.5 C5.22385763,4.5 5,4.72385763 5,5 L5,5.5 C5,5.77614237 5.22385763,6 5.5,6 L18.5,6 C18.7761424,6 19,5.77614237 19,5.5 L19,5 C19,4.72385763 18.7761424,4.5 18.5,4.5 L14,4.5 Z" fill="#000000" opacity="0.3" />
																				</g>
																			</svg>
																		</span>
																		<!--end::Svg Icon-->
																	</a>
																</div>
															</td>
														</tr>
														<tr>
															<td>
																<div class="form-check form-check-sm form-check-custom form-check-solid">
																	<input class="form-check-input widget-9-check" type="checkbox" value="1" />
																</div>
															</td>
															<td>
																<div class="d-flex align-items-center">
																	<div class="symbol symbol-45px me-5">
																		<img src="assets/media/avatars/150-4.jpg" alt="" />
																	</div>
																	<div class="d-flex justify-content-start flex-column">
																		<a href="#" class="text-dark fw-bolder text-hover-primary fs-6">Lebron Wayde</a>
																		<span class="text-muted fw-bold text-muted d-block fs-7">PHP, Laravel, VueJS</span>
																	</div>
																</div>
															</td>
															<td>
																<a href="#" class="text-dark fw-bolder text-hover-primary d-block fs-6">RoadGee</a>
																<span class="text-muted fw-bold text-muted d-block fs-7">Transportation</span>
															</td>
															<td class="text-end">
																<div class="d-flex flex-column w-100 me-2">
																	<div class="d-flex flex-stack mb-2">
																		<span class="text-muted me-2 fs-7 fw-bold">60%</span>
																	</div>
																	<div class="progress h-6px w-100">
																		<div class="progress-bar bg-success" role="progressbar" style="width: 60%" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"></div>
																	</div>
																</div>
															</td>
															<td>
																<div class="d-flex justify-content-end flex-shrink-0">
																	<a href="#" class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm me-1">
																		<!--begin::Svg Icon | path: icons/duotone/General/Settings-1.svg-->
																		<span class="svg-icon svg-icon-3">
																			<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
																				<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
																					<rect x="0" y="0" width="24" height="24" />
																					<path d="M7,3 L17,3 C19.209139,3 21,4.790861 21,7 C21,9.209139 19.209139,11 17,11 L7,11 C4.790861,11 3,9.209139 3,7 C3,4.790861 4.790861,3 7,3 Z M7,9 C8.1045695,9 9,8.1045695 9,7 C9,5.8954305 8.1045695,5 7,5 C5.8954305,5 5,5.8954305 5,7 C5,8.1045695 5.8954305,9 7,9 Z" fill="#000000" />
																					<path d="M7,13 L17,13 C19.209139,13 21,14.790861 21,17 C21,19.209139 19.209139,21 17,21 L7,21 C4.790861,21 3,19.209139 3,17 C3,14.790861 4.790861,13 7,13 Z M17,19 C18.1045695,19 19,18.1045695 19,17 C19,15.8954305 18.1045695,15 17,15 C15.8954305,15 15,15.8954305 15,17 C15,18.1045695 15.8954305,19 17,19 Z" fill="#000000" opacity="0.3" />
																				</g>
																			</svg>
																		</span>
																		<!--end::Svg Icon-->
																	</a>
																	<a href="#" class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm me-1">
																		<!--begin::Svg Icon | path: icons/duotone/Communication/Write.svg-->
																		<span class="svg-icon svg-icon-3">
																			<svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
																				<path d="M12.2674799,18.2323597 L12.0084872,5.45852451 C12.0004303,5.06114792 12.1504154,4.6768183 12.4255037,4.38993949 L15.0030167,1.70195304 L17.5910752,4.40093695 C17.8599071,4.6812911 18.0095067,5.05499603 18.0083938,5.44341307 L17.9718262,18.2062508 C17.9694575,19.0329966 17.2985816,19.701953 16.4718324,19.701953 L13.7671717,19.701953 C12.9505952,19.701953 12.2840328,19.0487684 12.2674799,18.2323597 Z" fill="#000000" fill-rule="nonzero" transform="translate(14.701953, 10.701953) rotate(-135.000000) translate(-14.701953, -10.701953)" />
																				<path d="M12.9,2 C13.4522847,2 13.9,2.44771525 13.9,3 C13.9,3.55228475 13.4522847,4 12.9,4 L6,4 C4.8954305,4 4,4.8954305 4,6 L4,18 C4,19.1045695 4.8954305,20 6,20 L18,20 C19.1045695,20 20,19.1045695 20,18 L20,13 C20,12.4477153 20.4477153,12 21,12 C21.5522847,12 22,12.4477153 22,13 L22,18 C22,20.209139 20.209139,22 18,22 L6,22 C3.790861,22 2,20.209139 2,18 L2,6 C2,3.790861 3.790861,2 6,2 L12.9,2 Z" fill="#000000" fill-rule="nonzero" opacity="0.3" />
																			</svg>
																		</span>
																		<!--end::Svg Icon-->
																	</a>
																	<a href="#" class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm">
																		<!--begin::Svg Icon | path: icons/duotone/General/Trash.svg-->
																		<span class="svg-icon svg-icon-3">
																			<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
																				<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
																					<rect x="0" y="0" width="24" height="24" />
																					<path d="M6,8 L6,20.5 C6,21.3284271 6.67157288,22 7.5,22 L16.5,22 C17.3284271,22 18,21.3284271 18,20.5 L18,8 L6,8 Z" fill="#000000" fill-rule="nonzero" />
																					<path d="M14,4.5 L14,4 C14,3.44771525 13.5522847,3 13,3 L11,3 C10.4477153,3 10,3.44771525 10,4 L10,4.5 L5.5,4.5 C5.22385763,4.5 5,4.72385763 5,5 L5,5.5 C5,5.77614237 5.22385763,6 5.5,6 L18.5,6 C18.7761424,6 19,5.77614237 19,5.5 L19,5 C19,4.72385763 18.7761424,4.5 18.5,4.5 L14,4.5 Z" fill="#000000" opacity="0.3" />
																				</g>
																			</svg>
																		</span>
																		<!--end::Svg Icon-->
																	</a>
																</div>
															</td>
														</tr>
														<tr>
															<td>
																<div class="form-check form-check-sm form-check-custom form-check-solid">
																	<input class="form-check-input widget-9-check" type="checkbox" value="1" />
																</div>
															</td>
															<td>
																<div class="d-flex align-items-center">
																	<div class="symbol symbol-45px me-5">
																		<img src="assets/media/avatars/150-5.jpg" alt="" />
																	</div>
																	<div class="d-flex justify-content-start flex-column">
																		<a href="#" class="text-dark fw-bolder text-hover-primary fs-6">Natali Goodwin</a>
																		<span class="text-muted fw-bold text-muted d-block fs-7">Python, PostgreSQL, ReactJS</span>
																	</div>
																</div>
															</td>
															<td>
																<a href="#" class="text-dark fw-bolder text-hover-primary d-block fs-6">The Hill</a>
																<span class="text-muted fw-bold text-muted d-block fs-7">Insurance</span>
															</td>
															<td class="text-end">
																<div class="d-flex flex-column w-100 me-2">
																	<div class="d-flex flex-stack mb-2">
																		<span class="text-muted me-2 fs-7 fw-bold">50%</span>
																	</div>
																	<div class="progress h-6px w-100">
																		<div class="progress-bar bg-warning" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
																	</div>
																</div>
															</td>
															<td>
																<div class="d-flex justify-content-end flex-shrink-0">
																	<a href="#" class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm me-1">
																		<!--begin::Svg Icon | path: icons/duotone/General/Settings-1.svg-->
																		<span class="svg-icon svg-icon-3">
																			<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
																				<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
																					<rect x="0" y="0" width="24" height="24" />
																					<path d="M7,3 L17,3 C19.209139,3 21,4.790861 21,7 C21,9.209139 19.209139,11 17,11 L7,11 C4.790861,11 3,9.209139 3,7 C3,4.790861 4.790861,3 7,3 Z M7,9 C8.1045695,9 9,8.1045695 9,7 C9,5.8954305 8.1045695,5 7,5 C5.8954305,5 5,5.8954305 5,7 C5,8.1045695 5.8954305,9 7,9 Z" fill="#000000" />
																					<path d="M7,13 L17,13 C19.209139,13 21,14.790861 21,17 C21,19.209139 19.209139,21 17,21 L7,21 C4.790861,21 3,19.209139 3,17 C3,14.790861 4.790861,13 7,13 Z M17,19 C18.1045695,19 19,18.1045695 19,17 C19,15.8954305 18.1045695,15 17,15 C15.8954305,15 15,15.8954305 15,17 C15,18.1045695 15.8954305,19 17,19 Z" fill="#000000" opacity="0.3" />
																				</g>
																			</svg>
																		</span>
																		<!--end::Svg Icon-->
																	</a>
																	<a href="#" class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm me-1">
																		<!--begin::Svg Icon | path: icons/duotone/Communication/Write.svg-->
																		<span class="svg-icon svg-icon-3">
																			<svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
																				<path d="M12.2674799,18.2323597 L12.0084872,5.45852451 C12.0004303,5.06114792 12.1504154,4.6768183 12.4255037,4.38993949 L15.0030167,1.70195304 L17.5910752,4.40093695 C17.8599071,4.6812911 18.0095067,5.05499603 18.0083938,5.44341307 L17.9718262,18.2062508 C17.9694575,19.0329966 17.2985816,19.701953 16.4718324,19.701953 L13.7671717,19.701953 C12.9505952,19.701953 12.2840328,19.0487684 12.2674799,18.2323597 Z" fill="#000000" fill-rule="nonzero" transform="translate(14.701953, 10.701953) rotate(-135.000000) translate(-14.701953, -10.701953)" />
																				<path d="M12.9,2 C13.4522847,2 13.9,2.44771525 13.9,3 C13.9,3.55228475 13.4522847,4 12.9,4 L6,4 C4.8954305,4 4,4.8954305 4,6 L4,18 C4,19.1045695 4.8954305,20 6,20 L18,20 C19.1045695,20 20,19.1045695 20,18 L20,13 C20,12.4477153 20.4477153,12 21,12 C21.5522847,12 22,12.4477153 22,13 L22,18 C22,20.209139 20.209139,22 18,22 L6,22 C3.790861,22 2,20.209139 2,18 L2,6 C2,3.790861 3.790861,2 6,2 L12.9,2 Z" fill="#000000" fill-rule="nonzero" opacity="0.3" />
																			</svg>
																		</span>
																		<!--end::Svg Icon-->
																	</a>
																	<a href="#" class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm">
																		<!--begin::Svg Icon | path: icons/duotone/General/Trash.svg-->
																		<span class="svg-icon svg-icon-3">
																			<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
																				<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
																					<rect x="0" y="0" width="24" height="24" />
																					<path d="M6,8 L6,20.5 C6,21.3284271 6.67157288,22 7.5,22 L16.5,22 C17.3284271,22 18,21.3284271 18,20.5 L18,8 L6,8 Z" fill="#000000" fill-rule="nonzero" />
																					<path d="M14,4.5 L14,4 C14,3.44771525 13.5522847,3 13,3 L11,3 C10.4477153,3 10,3.44771525 10,4 L10,4.5 L5.5,4.5 C5.22385763,4.5 5,4.72385763 5,5 L5,5.5 C5,5.77614237 5.22385763,6 5.5,6 L18.5,6 C18.7761424,6 19,5.77614237 19,5.5 L19,5 C19,4.72385763 18.7761424,4.5 18.5,4.5 L14,4.5 Z" fill="#000000" opacity="0.3" />
																				</g>
																			</svg>
																		</span>
																		<!--end::Svg Icon-->
																	</a>
																</div>
															</td>
														</tr>
														<tr>
															<td>
																<div class="form-check form-check-sm form-check-custom form-check-solid">
																	<input class="form-check-input widget-9-check" type="checkbox" value="1" />
																</div>
															</td>
															<td>
																<div class="d-flex align-items-center">
																	<div class="symbol symbol-45px me-5">
																		<img src="assets/media/avatars/150-6.jpg" alt="" />
																	</div>
																	<div class="d-flex justify-content-start flex-column">
																		<a href="#" class="text-dark fw-bolder text-hover-primary fs-6">Kevin Leonard</a>
																		<span class="text-muted fw-bold text-muted d-block fs-7">HTML, JS, ReactJS</span>
																	</div>
																</div>
															</td>
															<td>
																<a href="#" class="text-dark fw-bolder text-hover-primary d-block fs-6">RoadGee</a>
																<span class="text-muted fw-bold text-muted d-block fs-7">Art Director</span>
															</td>
															<td class="text-end">
																<div class="d-flex flex-column w-100 me-2">
																	<div class="d-flex flex-stack mb-2">
																		<span class="text-muted me-2 fs-7 fw-bold">90%</span>
																	</div>
																	<div class="progress h-6px w-100">
																		<div class="progress-bar bg-info" role="progressbar" style="width: 90%" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
																	</div>
																</div>
															</td>
															<td>
																<div class="d-flex justify-content-end flex-shrink-0">
																	<a href="#" class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm me-1">
																		<!--begin::Svg Icon | path: icons/duotone/General/Settings-1.svg-->
																		<span class="svg-icon svg-icon-3">
																			<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
																				<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
																					<rect x="0" y="0" width="24" height="24" />
																					<path d="M7,3 L17,3 C19.209139,3 21,4.790861 21,7 C21,9.209139 19.209139,11 17,11 L7,11 C4.790861,11 3,9.209139 3,7 C3,4.790861 4.790861,3 7,3 Z M7,9 C8.1045695,9 9,8.1045695 9,7 C9,5.8954305 8.1045695,5 7,5 C5.8954305,5 5,5.8954305 5,7 C5,8.1045695 5.8954305,9 7,9 Z" fill="#000000" />
																					<path d="M7,13 L17,13 C19.209139,13 21,14.790861 21,17 C21,19.209139 19.209139,21 17,21 L7,21 C4.790861,21 3,19.209139 3,17 C3,14.790861 4.790861,13 7,13 Z M17,19 C18.1045695,19 19,18.1045695 19,17 C19,15.8954305 18.1045695,15 17,15 C15.8954305,15 15,15.8954305 15,17 C15,18.1045695 15.8954305,19 17,19 Z" fill="#000000" opacity="0.3" />
																				</g>
																			</svg>
																		</span>
																		<!--end::Svg Icon-->
																	</a>
																	<a href="#" class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm me-1">
																		<!--begin::Svg Icon | path: icons/duotone/Communication/Write.svg-->
																		<span class="svg-icon svg-icon-3">
																			<svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
																				<path d="M12.2674799,18.2323597 L12.0084872,5.45852451 C12.0004303,5.06114792 12.1504154,4.6768183 12.4255037,4.38993949 L15.0030167,1.70195304 L17.5910752,4.40093695 C17.8599071,4.6812911 18.0095067,5.05499603 18.0083938,5.44341307 L17.9718262,18.2062508 C17.9694575,19.0329966 17.2985816,19.701953 16.4718324,19.701953 L13.7671717,19.701953 C12.9505952,19.701953 12.2840328,19.0487684 12.2674799,18.2323597 Z" fill="#000000" fill-rule="nonzero" transform="translate(14.701953, 10.701953) rotate(-135.000000) translate(-14.701953, -10.701953)" />
																				<path d="M12.9,2 C13.4522847,2 13.9,2.44771525 13.9,3 C13.9,3.55228475 13.4522847,4 12.9,4 L6,4 C4.8954305,4 4,4.8954305 4,6 L4,18 C4,19.1045695 4.8954305,20 6,20 L18,20 C19.1045695,20 20,19.1045695 20,18 L20,13 C20,12.4477153 20.4477153,12 21,12 C21.5522847,12 22,12.4477153 22,13 L22,18 C22,20.209139 20.209139,22 18,22 L6,22 C3.790861,22 2,20.209139 2,18 L2,6 C2,3.790861 3.790861,2 6,2 L12.9,2 Z" fill="#000000" fill-rule="nonzero" opacity="0.3" />
																			</svg>
																		</span>
																		<!--end::Svg Icon-->
																	</a>
																	<a href="#" class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm">
																		<!--begin::Svg Icon | path: icons/duotone/General/Trash.svg-->
																		<span class="svg-icon svg-icon-3">
																			<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
																				<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
																					<rect x="0" y="0" width="24" height="24" />
																					<path d="M6,8 L6,20.5 C6,21.3284271 6.67157288,22 7.5,22 L16.5,22 C17.3284271,22 18,21.3284271 18,20.5 L18,8 L6,8 Z" fill="#000000" fill-rule="nonzero" />
																					<path d="M14,4.5 L14,4 C14,3.44771525 13.5522847,3 13,3 L11,3 C10.4477153,3 10,3.44771525 10,4 L10,4.5 L5.5,4.5 C5.22385763,4.5 5,4.72385763 5,5 L5,5.5 C5,5.77614237 5.22385763,6 5.5,6 L18.5,6 C18.7761424,6 19,5.77614237 19,5.5 L19,5 C19,4.72385763 18.7761424,4.5 18.5,4.5 L14,4.5 Z" fill="#000000" opacity="0.3" />
																				</g>
																			</svg>
																		</span>
																		<!--end::Svg Icon-->
																	</a>
																</div>
															</td>
														</tr>
													</tbody>
													<!--end::Table body-->
												</table>
												<!--end::Table-->
											</div>
											<!--end::Table container-->
										</div>
										<!--begin::Body-->
									</div>
									<!--end::Tables Widget 9-->
								</div>
								<!--end::Col-->
							</div>
							<!--end::Row-->
							<!--begin::Row-->
							<div class="row gy-5 g-xl-8">
								<!--begin::Col-->
								<div class="col-xl-4">
									<!--begin::List Widget 2-->
									<div class="card card-xl-stretch mb-xl-8">
										<!--begin::Header-->
										<div class="card-header border-0">
											<h3 class="card-title fw-bolder text-dark">Authors</h3>
											<div class="card-toolbar">
												<!--begin::Menu-->
												<button type="button" class="btn btn-sm btn-icon btn-color-primary btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end" data-kt-menu-flip="top-end">
													<!--begin::Svg Icon | path: icons/duotone/Layout/Layout-4-blocks-2.svg-->
													<span class="svg-icon svg-icon-2">
														<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
															<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
																<rect x="5" y="5" width="5" height="5" rx="1" fill="#000000" />
																<rect x="14" y="5" width="5" height="5" rx="1" fill="#000000" opacity="0.3" />
																<rect x="5" y="14" width="5" height="5" rx="1" fill="#000000" opacity="0.3" />
																<rect x="14" y="14" width="5" height="5" rx="1" fill="#000000" opacity="0.3" />
															</g>
														</svg>
													</span>
													<!--end::Svg Icon-->
												</button>
												<!--begin::Menu 2-->
												<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg-light-primary fw-bold w-200px" data-kt-menu="true">
													<!--begin::Menu item-->
													<div class="menu-item px-3">
														<div class="menu-content fs-6 text-dark fw-bolder px-3 py-4">Quick Actions</div>
													</div>
													<!--end::Menu item-->
													<!--begin::Menu separator-->
													<div class="separator mb-3 opacity-75"></div>
													<!--end::Menu separator-->
													<!--begin::Menu item-->
													<div class="menu-item px-3">
														<a href="#" class="menu-link px-3">New Ticket</a>
													</div>
													<!--end::Menu item-->
													<!--begin::Menu item-->
													<div class="menu-item px-3">
														<a href="#" class="menu-link px-3">New Customer</a>
													</div>
													<!--end::Menu item-->
													<!--begin::Menu item-->
													<div class="menu-item px-3" data-kt-menu-trigger="hover" data-kt-menu-placement="right-start" data-kt-menu-flip="bottom, top">
														<!--begin::Menu item-->
														<a href="#" class="menu-link px-3">
															<span class="menu-title">New Group</span>
															<span class="menu-arrow"></span>
														</a>
														<!--end::Menu item-->
														<!--begin::Menu sub-->
														<div class="menu-sub menu-sub-dropdown w-175px py-4">
															<!--begin::Menu item-->
															<div class="menu-item px-3">
																<a href="#" class="menu-link px-3">Admin Group</a>
															</div>
															<!--end::Menu item-->
															<!--begin::Menu item-->
															<div class="menu-item px-3">
																<a href="#" class="menu-link px-3">Staff Group</a>
															</div>
															<!--end::Menu item-->
															<!--begin::Menu item-->
															<div class="menu-item px-3">
																<a href="#" class="menu-link px-3">Member Group</a>
															</div>
															<!--end::Menu item-->
														</div>
														<!--end::Menu sub-->
													</div>
													<!--end::Menu item-->
													<!--begin::Menu item-->
													<div class="menu-item px-3">
														<a href="#" class="menu-link px-3">New Contact</a>
													</div>
													<!--end::Menu item-->
													<!--begin::Menu separator-->
													<div class="separator mt-3 opacity-75"></div>
													<!--end::Menu separator-->
													<!--begin::Menu item-->
													<div class="menu-item px-3">
														<div class="menu-content px-3 py-3">
															<a class="btn btn-primary btn-sm px-4" href="#">Generate Reports</a>
														</div>
													</div>
													<!--end::Menu item-->
												</div>
												<!--end::Menu 2-->
												<!--end::Menu-->
											</div>
										</div>
										<!--end::Header-->
										<!--begin::Body-->
										<div class="card-body pt-2">
											<!--begin::Item-->
											<div class="d-flex align-items-center mb-7">
												<!--begin::Avatar-->
												<div class="symbol symbol-50px me-5">
													<img src="assets/media/avatars/150-1.jpg" class="" alt="" />
												</div>
												<!--end::Avatar-->
												<!--begin::Text-->
												<div class="flex-grow-1">
													<a href="#" class="text-dark fw-bolder text-hover-primary fs-6">Emma Smith</a>
													<span class="text-muted d-block fw-bold">Project Manager</span>
												</div>
												<!--end::Text-->
											</div>
											<!--end::Item-->
											<!--begin::Item-->
											<div class="d-flex align-items-center mb-7">
												<!--begin::Avatar-->
												<div class="symbol symbol-50px me-5">
													<img src="assets/media/avatars/150-4.jpg" class="" alt="" />
												</div>
												<!--end::Avatar-->
												<!--begin::Text-->
												<div class="flex-grow-1">
													<a href="#" class="text-dark fw-bolder text-hover-primary fs-6">Sean Bean</a>
													<span class="text-muted d-block fw-bold">PHP, SQLite, Artisan CLI</span>
												</div>
												<!--end::Text-->
											</div>
											<!--end::Item-->
											<!--begin::Item-->
											<div class="d-flex align-items-center mb-7">
												<!--begin::Avatar-->
												<div class="symbol symbol-50px me-5">
													<img src="assets/media/avatars/150-12.jpg" class="" alt="" />
												</div>
												<!--end::Avatar-->
												<!--begin::Text-->
												<div class="flex-grow-1">
													<a href="#" class="text-dark fw-bolder text-hover-primary fs-6">Brian Cox</a>
													<span class="text-muted d-block fw-bold">PHP, SQLite, Artisan CLI</span>
												</div>
												<!--end::Text-->
											</div>
											<!--end::Item-->
											<!--begin::Item-->
											<div class="d-flex align-items-center mb-7">
												<!--begin::Avatar-->
												<div class="symbol symbol-50px me-5">
													<img src="assets/media/avatars/150-8.jpg" class="" alt="" />
												</div>
												<!--end::Avatar-->
												<!--begin::Text-->
												<div class="flex-grow-1">
													<a href="#" class="text-dark fw-bolder text-hover-primary fs-6">Francis Mitcham</a>
													<span class="text-muted d-block fw-bold">PHP, SQLite, Artisan CLI</span>
												</div>
												<!--end::Text-->
											</div>
											<!--end::Item-->
											<!--begin::Item-->
											<div class="d-flex align-items-center">
												<!--begin::Avatar-->
												<div class="symbol symbol-50px me-5">
													<img src="assets/media/avatars/150-6.jpg" class="" alt="" />
												</div>
												<!--end::Avatar-->
												<!--begin::Text-->
												<div class="flex-grow-1">
													<a href="#" class="text-dark fw-bolder text-hover-primary fs-6">Dan Wilson</a>
													<span class="text-muted d-block fw-bold">PHP, SQLite, Artisan CLI</span>
												</div>
												<!--end::Text-->
											</div>
											<!--end::Item-->
										</div>
										<!--end::Body-->
									</div>
									<!--end::List Widget 2-->
								</div>
								<!--end::Col-->
								<!--begin::Col-->
								<div class="col-xl-4">
									<!--begin::List Widget 6-->
									<div class="card card-xl-stretch mb-xl-8">
										<!--begin::Header-->
										<div class="card-header border-0">
											<h3 class="card-title fw-bolder text-dark">Notifications</h3>
											<div class="card-toolbar">
												<!--begin::Menu-->
												<button type="button" class="btn btn-sm btn-icon btn-color-primary btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end" data-kt-menu-flip="top-end">
													<!--begin::Svg Icon | path: icons/duotone/Layout/Layout-4-blocks-2.svg-->
													<span class="svg-icon svg-icon-2">
														<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
															<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
																<rect x="5" y="5" width="5" height="5" rx="1" fill="#000000" />
																<rect x="14" y="5" width="5" height="5" rx="1" fill="#000000" opacity="0.3" />
																<rect x="5" y="14" width="5" height="5" rx="1" fill="#000000" opacity="0.3" />
																<rect x="14" y="14" width="5" height="5" rx="1" fill="#000000" opacity="0.3" />
															</g>
														</svg>
													</span>
													<!--end::Svg Icon-->
												</button>
												<!--begin::Menu 3-->
												<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg-light-primary fw-bold w-200px py-3" data-kt-menu="true">
													<!--begin::Heading-->
													<div class="menu-item px-3">
														<div class="menu-content text-muted pb-2 px-3 fs-7 text-uppercase">Payments</div>
													</div>
													<!--end::Heading-->
													<!--begin::Menu item-->
													<div class="menu-item px-3">
														<a href="#" class="menu-link px-3">Create Invoice</a>
													</div>
													<!--end::Menu item-->
													<!--begin::Menu item-->
													<div class="menu-item px-3">
														<a href="#" class="menu-link flex-stack px-3">Create Payment
														<i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip" title="Specify a target name for future usage and reference"></i></a>
													</div>
													<!--end::Menu item-->
													<!--begin::Menu item-->
													<div class="menu-item px-3">
														<a href="#" class="menu-link px-3">Generate Bill</a>
													</div>
													<!--end::Menu item-->
													<!--begin::Menu item-->
													<div class="menu-item px-3" data-kt-menu-trigger="hover" data-kt-menu-placement="right-end" data-kt-menu-flip="bottom, top">
														<a href="#" class="menu-link px-3">
															<span class="menu-title">Subscription</span>
															<span class="menu-arrow"></span>
														</a>
														<!--begin::Menu sub-->
														<div class="menu-sub menu-sub-dropdown w-175px py-4">
															<!--begin::Menu item-->
															<div class="menu-item px-3">
																<a href="#" class="menu-link px-3">Plans</a>
															</div>
															<!--end::Menu item-->
															<!--begin::Menu item-->
															<div class="menu-item px-3">
																<a href="#" class="menu-link px-3">Billing</a>
															</div>
															<!--end::Menu item-->
															<!--begin::Menu item-->
															<div class="menu-item px-3">
																<a href="#" class="menu-link px-3">Statements</a>
															</div>
															<!--end::Menu item-->
															<!--begin::Menu separator-->
															<div class="separator my-2"></div>
															<!--end::Menu separator-->
															<!--begin::Menu item-->
															<div class="menu-item px-3">
																<div class="menu-content px-3">
																	<!--begin::Switch-->
																	<label class="form-check form-switch form-check-custom form-check-solid">
																		<!--begin::Input-->
																		<input class="form-check-input w-30px h-20px" type="checkbox" value="1" checked="checked" name="notifications" />
																		<!--end::Input-->
																		<!--end::Label-->
																		<span class="form-check-label text-muted fs-6">Recuring</span>
																		<!--end::Label-->
																	</label>
																	<!--end::Switch-->
																</div>
															</div>
															<!--end::Menu item-->
														</div>
														<!--end::Menu sub-->
													</div>
													<!--end::Menu item-->
													<!--begin::Menu item-->
													<div class="menu-item px-3 my-1">
														<a href="#" class="menu-link px-3">Settings</a>
													</div>
													<!--end::Menu item-->
												</div>
												<!--end::Menu 3-->
												<!--end::Menu-->
											</div>
										</div>
										<!--end::Header-->
										<!--begin::Body-->
										<div class="card-body pt-0">
											<!--begin::Item-->
											<div class="d-flex align-items-center bg-light-warning rounded p-5 mb-7">
												<!--begin::Icon-->
												<span class="svg-icon svg-icon-warning me-5">
													<!--begin::Svg Icon | path: icons/duotone/Home/Library.svg-->
													<span class="svg-icon svg-icon-1">
														<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
															<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
																<rect x="0" y="0" width="24" height="24" />
																<path d="M5,3 L6,3 C6.55228475,3 7,3.44771525 7,4 L7,20 C7,20.5522847 6.55228475,21 6,21 L5,21 C4.44771525,21 4,20.5522847 4,20 L4,4 C4,3.44771525 4.44771525,3 5,3 Z M10,3 L11,3 C11.5522847,3 12,3.44771525 12,4 L12,20 C12,20.5522847 11.5522847,21 11,21 L10,21 C9.44771525,21 9,20.5522847 9,20 L9,4 C9,3.44771525 9.44771525,3 10,3 Z" fill="#000000" />
																<rect fill="#000000" opacity="0.3" transform="translate(17.825568, 11.945519) rotate(-19.000000) translate(-17.825568, -11.945519)" x="16.3255682" y="2.94551858" width="3" height="18" rx="1" />
															</g>
														</svg>
													</span>
													<!--end::Svg Icon-->
												</span>
												<!--end::Icon-->
												<!--begin::Title-->
												<div class="flex-grow-1 me-2">
													<a href="#" class="fw-bolder text-gray-800 text-hover-primary fs-6">Group lunch celebration</a>
													<span class="text-muted fw-bold d-block">Due in 2 Days</span>
												</div>
												<!--end::Title-->
												<!--begin::Lable-->
												<span class="fw-bolder text-warning py-1">+28%</span>
												<!--end::Lable-->
											</div>
											<!--end::Item-->
											<!--begin::Item-->
											<div class="d-flex align-items-center bg-light-success rounded p-5 mb-7">
												<!--begin::Icon-->
												<span class="svg-icon svg-icon-success me-5">
													<!--begin::Svg Icon | path: icons/duotone/Home/Library.svg-->
													<span class="svg-icon svg-icon-1">
														<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
															<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
																<rect x="0" y="0" width="24" height="24" />
																<path d="M5,3 L6,3 C6.55228475,3 7,3.44771525 7,4 L7,20 C7,20.5522847 6.55228475,21 6,21 L5,21 C4.44771525,21 4,20.5522847 4,20 L4,4 C4,3.44771525 4.44771525,3 5,3 Z M10,3 L11,3 C11.5522847,3 12,3.44771525 12,4 L12,20 C12,20.5522847 11.5522847,21 11,21 L10,21 C9.44771525,21 9,20.5522847 9,20 L9,4 C9,3.44771525 9.44771525,3 10,3 Z" fill="#000000" />
																<rect fill="#000000" opacity="0.3" transform="translate(17.825568, 11.945519) rotate(-19.000000) translate(-17.825568, -11.945519)" x="16.3255682" y="2.94551858" width="3" height="18" rx="1" />
															</g>
														</svg>
													</span>
													<!--end::Svg Icon-->
												</span>
												<!--end::Icon-->
												<!--begin::Title-->
												<div class="flex-grow-1 me-2">
													<a href="#" class="fw-bolder text-gray-800 text-hover-primary fs-6">Navigation optimization</a>
													<span class="text-muted fw-bold d-block">Due in 2 Days</span>
												</div>
												<!--end::Title-->
												<!--begin::Lable-->
												<span class="fw-bolder text-success py-1">+50%</span>
												<!--end::Lable-->
											</div>
											<!--end::Item-->
											<!--begin::Item-->
											<div class="d-flex align-items-center bg-light-danger rounded p-5 mb-7">
												<!--begin::Icon-->
												<span class="svg-icon svg-icon-danger me-5">
													<!--begin::Svg Icon | path: icons/duotone/Home/Library.svg-->
													<span class="svg-icon svg-icon-1">
														<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
															<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
																<rect x="0" y="0" width="24" height="24" />
																<path d="M5,3 L6,3 C6.55228475,3 7,3.44771525 7,4 L7,20 C7,20.5522847 6.55228475,21 6,21 L5,21 C4.44771525,21 4,20.5522847 4,20 L4,4 C4,3.44771525 4.44771525,3 5,3 Z M10,3 L11,3 C11.5522847,3 12,3.44771525 12,4 L12,20 C12,20.5522847 11.5522847,21 11,21 L10,21 C9.44771525,21 9,20.5522847 9,20 L9,4 C9,3.44771525 9.44771525,3 10,3 Z" fill="#000000" />
																<rect fill="#000000" opacity="0.3" transform="translate(17.825568, 11.945519) rotate(-19.000000) translate(-17.825568, -11.945519)" x="16.3255682" y="2.94551858" width="3" height="18" rx="1" />
															</g>
														</svg>
													</span>
													<!--end::Svg Icon-->
												</span>
												<!--end::Icon-->
												<!--begin::Title-->
												<div class="flex-grow-1 me-2">
													<a href="#" class="fw-bolder text-gray-800 text-hover-primary fs-6">Rebrand strategy planning</a>
													<span class="text-muted fw-bold d-block">Due in 5 Days</span>
												</div>
												<!--end::Title-->
												<!--begin::Lable-->
												<span class="fw-bolder text-danger py-1">-27%</span>
												<!--end::Lable-->
											</div>
											<!--end::Item-->
											<!--begin::Item-->
											<div class="d-flex align-items-center bg-light-info rounded p-5">
												<!--begin::Icon-->
												<span class="svg-icon svg-icon-info me-5">
													<!--begin::Svg Icon | path: icons/duotone/Home/Library.svg-->
													<span class="svg-icon svg-icon-1">
														<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
															<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
																<rect x="0" y="0" width="24" height="24" />
																<path d="M5,3 L6,3 C6.55228475,3 7,3.44771525 7,4 L7,20 C7,20.5522847 6.55228475,21 6,21 L5,21 C4.44771525,21 4,20.5522847 4,20 L4,4 C4,3.44771525 4.44771525,3 5,3 Z M10,3 L11,3 C11.5522847,3 12,3.44771525 12,4 L12,20 C12,20.5522847 11.5522847,21 11,21 L10,21 C9.44771525,21 9,20.5522847 9,20 L9,4 C9,3.44771525 9.44771525,3 10,3 Z" fill="#000000" />
																<rect fill="#000000" opacity="0.3" transform="translate(17.825568, 11.945519) rotate(-19.000000) translate(-17.825568, -11.945519)" x="16.3255682" y="2.94551858" width="3" height="18" rx="1" />
															</g>
														</svg>
													</span>
													<!--end::Svg Icon-->
												</span>
												<!--end::Icon-->
												<!--begin::Title-->
												<div class="flex-grow-1 me-2">
													<a href="#" class="fw-bolder text-gray-800 text-hover-primary fs-6">Product goals strategy</a>
													<span class="text-muted fw-bold d-block">Due in 7 Days</span>
												</div>
												<!--end::Title-->
												<!--begin::Lable-->
												<span class="fw-bolder text-info py-1">+8%</span>
												<!--end::Lable-->
											</div>
											<!--end::Item-->
										</div>
										<!--end::Body-->
									</div>
									<!--end::List Widget 6-->
								</div>
								<!--end::Col-->
								<!--begin::Col-->
								<div class="col-xl-4">
									<!--begin::List Widget 4-->
									<div class="card card-xl-stretch mb-5 mb-xl-8">
										<!--begin::Header-->
										<div class="card-header border-0 pt-5">
											<h3 class="card-title align-items-start flex-column">
												<span class="card-label fw-bolder text-dark">Trends</span>
												<span class="text-muted mt-1 fw-bold fs-7">Latest tech trends</span>
											</h3>
											<div class="card-toolbar">
												<!--begin::Menu-->
												<button type="button" class="btn btn-sm btn-icon btn-color-primary btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end" data-kt-menu-flip="top-end">
													<!--begin::Svg Icon | path: icons/duotone/Layout/Layout-4-blocks-2.svg-->
													<span class="svg-icon svg-icon-2">
														<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
															<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
																<rect x="5" y="5" width="5" height="5" rx="1" fill="#000000" />
																<rect x="14" y="5" width="5" height="5" rx="1" fill="#000000" opacity="0.3" />
																<rect x="5" y="14" width="5" height="5" rx="1" fill="#000000" opacity="0.3" />
																<rect x="14" y="14" width="5" height="5" rx="1" fill="#000000" opacity="0.3" />
															</g>
														</svg>
													</span>
													<!--end::Svg Icon-->
												</button>
												<!--begin::Menu 3-->
												<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg-light-primary fw-bold w-200px py-3" data-kt-menu="true">
													<!--begin::Heading-->
													<div class="menu-item px-3">
														<div class="menu-content text-muted pb-2 px-3 fs-7 text-uppercase">Payments</div>
													</div>
													<!--end::Heading-->
													<!--begin::Menu item-->
													<div class="menu-item px-3">
														<a href="#" class="menu-link px-3">Create Invoice</a>
													</div>
													<!--end::Menu item-->
													<!--begin::Menu item-->
													<div class="menu-item px-3">
														<a href="#" class="menu-link flex-stack px-3">Create Payment
														<i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip" title="Specify a target name for future usage and reference"></i></a>
													</div>
													<!--end::Menu item-->
													<!--begin::Menu item-->
													<div class="menu-item px-3">
														<a href="#" class="menu-link px-3">Generate Bill</a>
													</div>
													<!--end::Menu item-->
													<!--begin::Menu item-->
													<div class="menu-item px-3" data-kt-menu-trigger="hover" data-kt-menu-placement="right-end" data-kt-menu-flip="bottom, top">
														<a href="#" class="menu-link px-3">
															<span class="menu-title">Subscription</span>
															<span class="menu-arrow"></span>
														</a>
														<!--begin::Menu sub-->
														<div class="menu-sub menu-sub-dropdown w-175px py-4">
															<!--begin::Menu item-->
															<div class="menu-item px-3">
																<a href="#" class="menu-link px-3">Plans</a>
															</div>
															<!--end::Menu item-->
															<!--begin::Menu item-->
															<div class="menu-item px-3">
																<a href="#" class="menu-link px-3">Billing</a>
															</div>
															<!--end::Menu item-->
															<!--begin::Menu item-->
															<div class="menu-item px-3">
																<a href="#" class="menu-link px-3">Statements</a>
															</div>
															<!--end::Menu item-->
															<!--begin::Menu separator-->
															<div class="separator my-2"></div>
															<!--end::Menu separator-->
															<!--begin::Menu item-->
															<div class="menu-item px-3">
																<div class="menu-content px-3">
																	<!--begin::Switch-->
																	<label class="form-check form-switch form-check-custom form-check-solid">
																		<!--begin::Input-->
																		<input class="form-check-input w-30px h-20px" type="checkbox" value="1" checked="checked" name="notifications" />
																		<!--end::Input-->
																		<!--end::Label-->
																		<span class="form-check-label text-muted fs-6">Recuring</span>
																		<!--end::Label-->
																	</label>
																	<!--end::Switch-->
																</div>
															</div>
															<!--end::Menu item-->
														</div>
														<!--end::Menu sub-->
													</div>
													<!--end::Menu item-->
													<!--begin::Menu item-->
													<div class="menu-item px-3 my-1">
														<a href="#" class="menu-link px-3">Settings</a>
													</div>
													<!--end::Menu item-->
												</div>
												<!--end::Menu 3-->
												<!--end::Menu-->
											</div>
										</div>
										<!--end::Header-->
										<!--begin::Body-->
										<div class="card-body pt-5">
											<!--begin::Item-->
											<div class="d-flex align-items-sm-center mb-7">
												<!--begin::Symbol-->
												<div class="symbol symbol-50px me-5">
													<span class="symbol-label">
														<img src="assets/media/svg/brand-logos/plurk.svg" class="h-50 align-self-center" alt="" />
													</span>
												</div>
												<!--end::Symbol-->
												<!--begin::Section-->
												<div class="d-flex align-items-center flex-row-fluid flex-wrap">
													<div class="flex-grow-1 me-2">
														<a href="#" class="text-gray-800 text-hover-primary fs-6 fw-bolder">Top Authors</a>
														<span class="text-muted fw-bold d-block fs-7">Mark, Rowling, Esther</span>
													</div>
													<span class="badge badge-light fw-bolder my-2">+82$</span>
												</div>
												<!--end::Section-->
											</div>
											<!--end::Item-->
											<!--begin::Item-->
											<div class="d-flex align-items-sm-center mb-7">
												<!--begin::Symbol-->
												<div class="symbol symbol-50px me-5">
													<span class="symbol-label">
														<img src="assets/media/svg/brand-logos/telegram.svg" class="h-50 align-self-center" alt="" />
													</span>
												</div>
												<!--end::Symbol-->
												<!--begin::Section-->
												<div class="d-flex align-items-center flex-row-fluid flex-wrap">
													<div class="flex-grow-1 me-2">
														<a href="#" class="text-gray-800 text-hover-primary fs-6 fw-bolder">Popular Authors</a>
														<span class="text-muted fw-bold d-block fs-7">Randy, Steve, Mike</span>
													</div>
													<span class="badge badge-light fw-bolder my-2">+280$</span>
												</div>
												<!--end::Section-->
											</div>
											<!--end::Item-->
											<!--begin::Item-->
											<div class="d-flex align-items-sm-center mb-7">
												<!--begin::Symbol-->
												<div class="symbol symbol-50px me-5">
													<span class="symbol-label">
														<img src="assets/media/svg/brand-logos/vimeo.svg" class="h-50 align-self-center" alt="" />
													</span>
												</div>
												<!--end::Symbol-->
												<!--begin::Section-->
												<div class="d-flex align-items-center flex-row-fluid flex-wrap">
													<div class="flex-grow-1 me-2">
														<a href="#" class="text-gray-800 text-hover-primary fs-6 fw-bolder">New Users</a>
														<span class="text-muted fw-bold d-block fs-7">John, Pat, Jimmy</span>
													</div>
													<span class="badge badge-light fw-bolder my-2">+4500$</span>
												</div>
												<!--end::Section-->
											</div>
											<!--end::Item-->
											<!--begin::Item-->
											<div class="d-flex align-items-sm-center mb-7">
												<!--begin::Symbol-->
												<div class="symbol symbol-50px me-5">
													<span class="symbol-label">
														<img src="assets/media/svg/brand-logos/bebo.svg" class="h-50 align-self-center" alt="" />
													</span>
												</div>
												<!--end::Symbol-->
												<!--begin::Section-->
												<div class="d-flex align-items-center flex-row-fluid flex-wrap">
													<div class="flex-grow-1 me-2">
														<a href="#" class="text-gray-800 text-hover-primary fs-6 fw-bolder">Active Customers</a>
														<span class="text-muted fw-bold d-block fs-7">Mark, Rowling, Esther</span>
													</div>
													<span class="badge badge-light fw-bolder my-2">+686$</span>
												</div>
												<!--end::Section-->
											</div>
											<!--end::Item-->
											<!--begin::Item-->
											<div class="d-flex align-items-sm-center mb-7">
												<!--begin::Symbol-->
												<div class="symbol symbol-50px me-5">
													<span class="symbol-label">
														<img src="assets/media/svg/brand-logos/kickstarter.svg" class="h-50 align-self-center" alt="" />
													</span>
												</div>
												<!--end::Symbol-->
												<!--begin::Section-->
												<div class="d-flex align-items-center flex-row-fluid flex-wrap">
													<div class="flex-grow-1 me-2">
														<a href="#" class="text-gray-800 text-hover-primary fs-6 fw-bolder">Bestseller Theme</a>
														<span class="text-muted fw-bold d-block fs-7">Disco, Retro, Sports</span>
													</div>
													<span class="badge badge-light fw-bolder my-2">+726$</span>
												</div>
												<!--end::Section-->
											</div>
											<!--end::Item-->
										</div>
										<!--end::Body-->
									</div>
									<!--end::List Widget 4-->
								</div>
								<!--end::Col-->
							</div>
							<!--end::Row-->
							<!--begin::Row-->
							<div class="row g-5 gx-xxl-8">
								<!--begin::Col-->
								<div class="col-xxl-4">
									<!--begin::Mixed Widget 5-->
									<div class="card card-xxl-stretch mb-xl-3">
										<!--begin::Beader-->
										<div class="card-header border-0 py-5">
											<h3 class="card-title align-items-start flex-column">
												<span class="card-label fw-bolder fs-3 mb-1">Trends</span>
												<span class="text-muted fw-bold fs-7">Latest trends</span>
											</h3>
											<div class="card-toolbar">
												<!--begin::Menu-->
												<button type="button" class="btn btn-sm btn-icon btn-color-primary btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end" data-kt-menu-flip="top-end">
													<!--begin::Svg Icon | path: icons/duotone/Layout/Layout-4-blocks-2.svg-->
													<span class="svg-icon svg-icon-2">
														<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
															<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
																<rect x="5" y="5" width="5" height="5" rx="1" fill="#000000" />
																<rect x="14" y="5" width="5" height="5" rx="1" fill="#000000" opacity="0.3" />
																<rect x="5" y="14" width="5" height="5" rx="1" fill="#000000" opacity="0.3" />
																<rect x="14" y="14" width="5" height="5" rx="1" fill="#000000" opacity="0.3" />
															</g>
														</svg>
													</span>
													<!--end::Svg Icon-->
												</button>
												<!--begin::Menu 3-->
												<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg-light-primary fw-bold w-200px py-3" data-kt-menu="true">
													<!--begin::Heading-->
													<div class="menu-item px-3">
														<div class="menu-content text-muted pb-2 px-3 fs-7 text-uppercase">Payments</div>
													</div>
													<!--end::Heading-->
													<!--begin::Menu item-->
													<div class="menu-item px-3">
														<a href="#" class="menu-link px-3">Create Invoice</a>
													</div>
													<!--end::Menu item-->
													<!--begin::Menu item-->
													<div class="menu-item px-3">
														<a href="#" class="menu-link flex-stack px-3">Create Payment
														<i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip" title="Specify a target name for future usage and reference"></i></a>
													</div>
													<!--end::Menu item-->
													<!--begin::Menu item-->
													<div class="menu-item px-3">
														<a href="#" class="menu-link px-3">Generate Bill</a>
													</div>
													<!--end::Menu item-->
													<!--begin::Menu item-->
													<div class="menu-item px-3" data-kt-menu-trigger="hover" data-kt-menu-placement="right-end" data-kt-menu-flip="bottom, top">
														<a href="#" class="menu-link px-3">
															<span class="menu-title">Subscription</span>
															<span class="menu-arrow"></span>
														</a>
														<!--begin::Menu sub-->
														<div class="menu-sub menu-sub-dropdown w-175px py-4">
															<!--begin::Menu item-->
															<div class="menu-item px-3">
																<a href="#" class="menu-link px-3">Plans</a>
															</div>
															<!--end::Menu item-->
															<!--begin::Menu item-->
															<div class="menu-item px-3">
																<a href="#" class="menu-link px-3">Billing</a>
															</div>
															<!--end::Menu item-->
															<!--begin::Menu item-->
															<div class="menu-item px-3">
																<a href="#" class="menu-link px-3">Statements</a>
															</div>
															<!--end::Menu item-->
															<!--begin::Menu separator-->
															<div class="separator my-2"></div>
															<!--end::Menu separator-->
															<!--begin::Menu item-->
															<div class="menu-item px-3">
																<div class="menu-content px-3">
																	<!--begin::Switch-->
																	<label class="form-check form-switch form-check-custom form-check-solid">
																		<!--begin::Input-->
																		<input class="form-check-input w-30px h-20px" type="checkbox" value="1" checked="checked" name="notifications" />
																		<!--end::Input-->
																		<!--end::Label-->
																		<span class="form-check-label text-muted fs-6">Recuring</span>
																		<!--end::Label-->
																	</label>
																	<!--end::Switch-->
																</div>
															</div>
															<!--end::Menu item-->
														</div>
														<!--end::Menu sub-->
													</div>
													<!--end::Menu item-->
													<!--begin::Menu item-->
													<div class="menu-item px-3 my-1">
														<a href="#" class="menu-link px-3">Settings</a>
													</div>
													<!--end::Menu item-->
												</div>
												<!--end::Menu 3-->
												<!--end::Menu-->
											</div>
										</div>
										<!--end::Header-->
										<!--begin::Body-->
										<div class="card-body d-flex flex-column">
											<!--begin::Chart-->
											<div class="mixed-widget-5-chart card-rounded-top" data-kt-chart-color="success" style="height: 150px"></div>
											<!--end::Chart-->
											<!--begin::Items-->
											<div class="mt-5">
												<!--begin::Item-->
												<div class="d-flex flex-stack mb-5">
													<!--begin::Section-->
													<div class="d-flex align-items-center me-2">
														<!--begin::Symbol-->
														<div class="symbol symbol-50px me-3">
															<div class="symbol-label bg-light">
																<img src="assets/media/svg/brand-logos/plurk.svg" class="h-50" alt="" />
															</div>
														</div>
														<!--end::Symbol-->
														<!--begin::Title-->
														<div>
															<a href="#" class="fs-6 text-gray-800 text-hover-primary fw-bolder">Top Authors</a>
															<div class="fs-7 text-muted fw-bold mt-1">Ricky Hunt, Sandra Trepp</div>
														</div>
														<!--end::Title-->
													</div>
													<!--end::Section-->
													<!--begin::Label-->
													<div class="badge badge-light fw-bold py-4 px-3">+82$</div>
													<!--end::Label-->
												</div>
												<!--end::Item-->
												<!--begin::Item-->
												<div class="d-flex flex-stack mb-5">
													<!--begin::Section-->
													<div class="d-flex align-items-center me-2">
														<!--begin::Symbol-->
														<div class="symbol symbol-50px me-3">
															<div class="symbol-label bg-light">
																<img src="assets/media/svg/brand-logos/figma-1.svg" class="h-50" alt="" />
															</div>
														</div>
														<!--end::Symbol-->
														<!--begin::Title-->
														<div>
															<a href="#" class="fs-6 text-gray-800 text-hover-primary fw-bolder">Top Sales</a>
															<div class="fs-7 text-muted fw-bold mt-1">PitStop Emails</div>
														</div>
														<!--end::Title-->
													</div>
													<!--end::Section-->
													<!--begin::Label-->
													<div class="badge badge-light fw-bold py-4 px-3">+82$</div>
													<!--end::Label-->
												</div>
												<!--end::Item-->
												<!--begin::Item-->
												<div class="d-flex flex-stack">
													<!--begin::Section-->
													<div class="d-flex align-items-center me-2">
														<!--begin::Symbol-->
														<div class="symbol symbol-50px me-3">
															<div class="symbol-label bg-light">
																<img src="assets/media/svg/brand-logos/vimeo.svg" class="h-50" alt="" />
															</div>
														</div>
														<!--end::Symbol-->
														<!--begin::Title-->
														<div class="py-1">
															<a href="#" class="fs-6 text-gray-800 text-hover-primary fw-bolder">Top Engagement</a>
															<div class="fs-7 text-muted fw-bold mt-1">KT.com</div>
														</div>
														<!--end::Title-->
													</div>
													<!--end::Section-->
													<!--begin::Label-->
													<div class="badge badge-light fw-bold py-4 px-3">+82$</div>
													<!--end::Label-->
												</div>
												<!--end::Item-->
											</div>
											<!--end::Items-->
										</div>
										<!--end::Body-->
									</div>
									<!--end::Mixed Widget 5-->
								</div>
								<!--end::Col-->
								<!--begin::Col-->
								<div class="col-xxl-8">
									<!--begin::Tables Widget 5-->
									<div class="card card-xxl-stretch mb-5 mb-xxl-8">
										<!--begin::Header-->
										<div class="card-header border-0 pt-5">
											<h3 class="card-title align-items-start flex-column">
												<span class="card-label fw-bolder fs-3 mb-1">Latest Products</span>
												<span class="text-muted mt-1 fw-bold fs-7">More than 400 new products</span>
											</h3>
											<div class="card-toolbar">
												<ul class="nav">
													<li class="nav-item">
														<a class="nav-link btn btn-sm btn-color-muted btn-active btn-active-light-primary active fw-bolder px-4 me-1" data-bs-toggle="tab" href="#kt_table_widget_5_tab_1">Month</a>
													</li>
													<li class="nav-item">
														<a class="nav-link btn btn-sm btn-color-muted btn-active btn-active-light-primary fw-bolder px-4 me-1" data-bs-toggle="tab" href="#kt_table_widget_5_tab_2">Week</a>
													</li>
													<li class="nav-item">
														<a class="nav-link btn btn-sm btn-color-muted btn-active btn-active-light-primary fw-bolder px-4" data-bs-toggle="tab" href="#kt_table_widget_5_tab_3">Day</a>
													</li>
												</ul>
											</div>
										</div>
										<!--end::Header-->
										<!--begin::Body-->
										<div class="card-body py-3">
											<div class="tab-content">
												<!--begin::Tap pane-->
												<div class="tab-pane fade show active" id="kt_table_widget_5_tab_1">
													<!--begin::Table container-->
													<div class="table-responsive">
														<!--begin::Table-->
														<table class="table table-row-dashed table-row-gray-200 align-middle gs-0 gy-4">
															<!--begin::Table head-->
															<thead>
																<tr class="border-0">
																	<th class="p-0 w-50px"></th>
																	<th class="p-0 min-w-150px"></th>
																	<th class="p-0 min-w-140px"></th>
																	<th class="p-0 min-w-110px"></th>
																	<th class="p-0 min-w-50px"></th>
																</tr>
															</thead>
															<!--end::Table head-->
															<!--begin::Table body-->
															<tbody>
																<tr>
																	<td>
																		<div class="symbol symbol-45px me-2">
																			<span class="symbol-label">
																				<img src="assets/media/svg/brand-logos/plurk.svg" class="h-50 align-self-center" alt="" />
																			</span>
																		</div>
																	</td>
																	<td>
																		<a href="#" class="text-dark fw-bolder text-hover-primary mb-1 fs-6">Brad Simmons</a>
																		<span class="text-muted fw-bold d-block">Movie Creator</span>
																	</td>
																	<td class="text-end text-muted fw-bold">React, HTML</td>
																	<td class="text-end">
																		<span class="badge badge-light-success">Approved</span>
																	</td>
																	<td class="text-end">
																		<a href="#" class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary">
																			<!--begin::Svg Icon | path: icons/duotone/Navigation/Arrow-right.svg-->
																			<span class="svg-icon svg-icon-2">
																				<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
																					<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
																						<polygon points="0 0 24 0 24 24 0 24" />
																						<rect fill="#000000" opacity="0.5" transform="translate(12.000000, 12.000000) rotate(-90.000000) translate(-12.000000, -12.000000)" x="11" y="5" width="2" height="14" rx="1" />
																						<path d="M9.70710318,15.7071045 C9.31657888,16.0976288 8.68341391,16.0976288 8.29288961,15.7071045 C7.90236532,15.3165802 7.90236532,14.6834152 8.29288961,14.2928909 L14.2928896,8.29289093 C14.6714686,7.914312 15.281055,7.90106637 15.675721,8.26284357 L21.675721,13.7628436 C22.08284,14.136036 22.1103429,14.7686034 21.7371505,15.1757223 C21.3639581,15.5828413 20.7313908,15.6103443 20.3242718,15.2371519 L15.0300721,10.3841355 L9.70710318,15.7071045 Z" fill="#000000" fill-rule="nonzero" transform="translate(14.999999, 11.999997) scale(1, -1) rotate(90.000000) translate(-14.999999, -11.999997)" />
																					</g>
																				</svg>
																			</span>
																			<!--end::Svg Icon-->
																		</a>
																	</td>
																</tr>
																<tr>
																	<td>
																		<div class="symbol symbol-45px me-2">
																			<span class="symbol-label">
																				<img src="assets/media/svg/brand-logos/telegram.svg" class="h-50 align-self-center" alt="" />
																			</span>
																		</div>
																	</td>
																	<td>
																		<a href="#" class="text-dark fw-bolder text-hover-primary mb-1 fs-6">Popular Authors</a>
																		<span class="text-muted fw-bold d-block">Most Successful</span>
																	</td>
																	<td class="text-end text-muted fw-bold">Python, MySQL</td>
																	<td class="text-end">
																		<span class="badge badge-light-warning">In Progress</span>
																	</td>
																	<td class="text-end">
																		<a href="#" class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary">
																			<!--begin::Svg Icon | path: icons/duotone/Navigation/Arrow-right.svg-->
																			<span class="svg-icon svg-icon-2">
																				<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
																					<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
																						<polygon points="0 0 24 0 24 24 0 24" />
																						<rect fill="#000000" opacity="0.5" transform="translate(12.000000, 12.000000) rotate(-90.000000) translate(-12.000000, -12.000000)" x="11" y="5" width="2" height="14" rx="1" />
																						<path d="M9.70710318,15.7071045 C9.31657888,16.0976288 8.68341391,16.0976288 8.29288961,15.7071045 C7.90236532,15.3165802 7.90236532,14.6834152 8.29288961,14.2928909 L14.2928896,8.29289093 C14.6714686,7.914312 15.281055,7.90106637 15.675721,8.26284357 L21.675721,13.7628436 C22.08284,14.136036 22.1103429,14.7686034 21.7371505,15.1757223 C21.3639581,15.5828413 20.7313908,15.6103443 20.3242718,15.2371519 L15.0300721,10.3841355 L9.70710318,15.7071045 Z" fill="#000000" fill-rule="nonzero" transform="translate(14.999999, 11.999997) scale(1, -1) rotate(90.000000) translate(-14.999999, -11.999997)" />
																					</g>
																				</svg>
																			</span>
																			<!--end::Svg Icon-->
																		</a>
																	</td>
																</tr>
																<tr>
																	<td>
																		<div class="symbol symbol-45px me-2">
																			<span class="symbol-label">
																				<img src="assets/media/svg/brand-logos/vimeo.svg" class="h-50 align-self-center" alt="" />
																			</span>
																		</div>
																	</td>
																	<td>
																		<a href="#" class="text-dark fw-bolder text-hover-primary mb-1 fs-6">New Users</a>
																		<span class="text-muted fw-bold d-block">Awesome Users</span>
																	</td>
																	<td class="text-end text-muted fw-bold">Laravel,Metronic</td>
																	<td class="text-end">
																		<span class="badge badge-light-primary">Success</span>
																	</td>
																	<td class="text-end">
																		<a href="#" class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary">
																			<!--begin::Svg Icon | path: icons/duotone/Navigation/Arrow-right.svg-->
																			<span class="svg-icon svg-icon-2">
																				<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
																					<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
																						<polygon points="0 0 24 0 24 24 0 24" />
																						<rect fill="#000000" opacity="0.5" transform="translate(12.000000, 12.000000) rotate(-90.000000) translate(-12.000000, -12.000000)" x="11" y="5" width="2" height="14" rx="1" />
																						<path d="M9.70710318,15.7071045 C9.31657888,16.0976288 8.68341391,16.0976288 8.29288961,15.7071045 C7.90236532,15.3165802 7.90236532,14.6834152 8.29288961,14.2928909 L14.2928896,8.29289093 C14.6714686,7.914312 15.281055,7.90106637 15.675721,8.26284357 L21.675721,13.7628436 C22.08284,14.136036 22.1103429,14.7686034 21.7371505,15.1757223 C21.3639581,15.5828413 20.7313908,15.6103443 20.3242718,15.2371519 L15.0300721,10.3841355 L9.70710318,15.7071045 Z" fill="#000000" fill-rule="nonzero" transform="translate(14.999999, 11.999997) scale(1, -1) rotate(90.000000) translate(-14.999999, -11.999997)" />
																					</g>
																				</svg>
																			</span>
																			<!--end::Svg Icon-->
																		</a>
																	</td>
																</tr>
																<tr>
																	<td>
																		<div class="symbol symbol-45px me-2">
																			<span class="symbol-label">
																				<img src="assets/media/svg/brand-logos/bebo.svg" class="h-50 align-self-center" alt="" />
																			</span>
																		</div>
																	</td>
																	<td>
																		<a href="#" class="text-dark fw-bolder text-hover-primary mb-1 fs-6">Active Customers</a>
																		<span class="text-muted fw-bold d-block">Movie Creator</span>
																	</td>
																	<td class="text-end text-muted fw-bold">AngularJS, C#</td>
																	<td class="text-end">
																		<span class="badge badge-light-danger">Rejected</span>
																	</td>
																	<td class="text-end">
																		<a href="#" class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary">
																			<!--begin::Svg Icon | path: icons/duotone/Navigation/Arrow-right.svg-->
																			<span class="svg-icon svg-icon-2">
																				<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
																					<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
																						<polygon points="0 0 24 0 24 24 0 24" />
																						<rect fill="#000000" opacity="0.5" transform="translate(12.000000, 12.000000) rotate(-90.000000) translate(-12.000000, -12.000000)" x="11" y="5" width="2" height="14" rx="1" />
																						<path d="M9.70710318,15.7071045 C9.31657888,16.0976288 8.68341391,16.0976288 8.29288961,15.7071045 C7.90236532,15.3165802 7.90236532,14.6834152 8.29288961,14.2928909 L14.2928896,8.29289093 C14.6714686,7.914312 15.281055,7.90106637 15.675721,8.26284357 L21.675721,13.7628436 C22.08284,14.136036 22.1103429,14.7686034 21.7371505,15.1757223 C21.3639581,15.5828413 20.7313908,15.6103443 20.3242718,15.2371519 L15.0300721,10.3841355 L9.70710318,15.7071045 Z" fill="#000000" fill-rule="nonzero" transform="translate(14.999999, 11.999997) scale(1, -1) rotate(90.000000) translate(-14.999999, -11.999997)" />
																					</g>
																				</svg>
																			</span>
																			<!--end::Svg Icon-->
																		</a>
																	</td>
																</tr>
																<tr>
																	<td>
																		<div class="symbol symbol-45px me-2">
																			<span class="symbol-label">
																				<img src="assets/media/svg/brand-logos/kickstarter.svg" class="h-50 align-self-center" alt="" />
																			</span>
																		</div>
																	</td>
																	<td>
																		<a href="#" class="text-dark fw-bolder text-hover-primary mb-1 fs-6">Bestseller Theme</a>
																		<span class="text-muted fw-bold d-block">Best Customers</span>
																	</td>
																	<td class="text-end text-muted fw-bold">ReactJS, Ruby</td>
																	<td class="text-end">
																		<span class="badge badge-light-warning">In Progress</span>
																	</td>
																	<td class="text-end">
																		<a href="#" class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary">
																			<!--begin::Svg Icon | path: icons/duotone/Navigation/Arrow-right.svg-->
																			<span class="svg-icon svg-icon-2">
																				<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
																					<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
																						<polygon points="0 0 24 0 24 24 0 24" />
																						<rect fill="#000000" opacity="0.5" transform="translate(12.000000, 12.000000) rotate(-90.000000) translate(-12.000000, -12.000000)" x="11" y="5" width="2" height="14" rx="1" />
																						<path d="M9.70710318,15.7071045 C9.31657888,16.0976288 8.68341391,16.0976288 8.29288961,15.7071045 C7.90236532,15.3165802 7.90236532,14.6834152 8.29288961,14.2928909 L14.2928896,8.29289093 C14.6714686,7.914312 15.281055,7.90106637 15.675721,8.26284357 L21.675721,13.7628436 C22.08284,14.136036 22.1103429,14.7686034 21.7371505,15.1757223 C21.3639581,15.5828413 20.7313908,15.6103443 20.3242718,15.2371519 L15.0300721,10.3841355 L9.70710318,15.7071045 Z" fill="#000000" fill-rule="nonzero" transform="translate(14.999999, 11.999997) scale(1, -1) rotate(90.000000) translate(-14.999999, -11.999997)" />
																					</g>
																				</svg>
																			</span>
																			<!--end::Svg Icon-->
																		</a>
																	</td>
																</tr>
															</tbody>
															<!--end::Table body-->
														</table>
													</div>
													<!--end::Table-->
												</div>
												<!--end::Tap pane-->
												<!--begin::Tap pane-->
												<div class="tab-pane fade" id="kt_table_widget_5_tab_2">
													<!--begin::Table container-->
													<div class="table-responsive">
														<!--begin::Table-->
														<table class="table table-row-dashed table-row-gray-200 align-middle gs-0 gy-4">
															<!--begin::Table head-->
															<thead>
																<tr class="border-0">
																	<th class="p-0 w-50px"></th>
																	<th class="p-0 min-w-150px"></th>
																	<th class="p-0 min-w-140px"></th>
																	<th class="p-0 min-w-110px"></th>
																	<th class="p-0 min-w-50px"></th>
																</tr>
															</thead>
															<!--end::Table head-->
															<!--begin::Table body-->
															<tbody>
																<tr>
																	<td>
																		<div class="symbol symbol-45px me-2">
																			<span class="symbol-label">
																				<img src="assets/media/svg/brand-logos/plurk.svg" class="h-50 align-self-center" alt="" />
																			</span>
																		</div>
																	</td>
																	<td>
																		<a href="#" class="text-dark fw-bolder text-hover-primary mb-1 fs-6">Brad Simmons</a>
																		<span class="text-muted fw-bold d-block">Movie Creator</span>
																	</td>
																	<td class="text-end text-muted fw-bold">React, HTML</td>
																	<td class="text-end">
																		<span class="badge badge-light-success">Approved</span>
																	</td>
																	<td class="text-end">
																		<a href="#" class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary">
																			<!--begin::Svg Icon | path: icons/duotone/Navigation/Arrow-right.svg-->
																			<span class="svg-icon svg-icon-2">
																				<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
																					<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
																						<polygon points="0 0 24 0 24 24 0 24" />
																						<rect fill="#000000" opacity="0.5" transform="translate(12.000000, 12.000000) rotate(-90.000000) translate(-12.000000, -12.000000)" x="11" y="5" width="2" height="14" rx="1" />
																						<path d="M9.70710318,15.7071045 C9.31657888,16.0976288 8.68341391,16.0976288 8.29288961,15.7071045 C7.90236532,15.3165802 7.90236532,14.6834152 8.29288961,14.2928909 L14.2928896,8.29289093 C14.6714686,7.914312 15.281055,7.90106637 15.675721,8.26284357 L21.675721,13.7628436 C22.08284,14.136036 22.1103429,14.7686034 21.7371505,15.1757223 C21.3639581,15.5828413 20.7313908,15.6103443 20.3242718,15.2371519 L15.0300721,10.3841355 L9.70710318,15.7071045 Z" fill="#000000" fill-rule="nonzero" transform="translate(14.999999, 11.999997) scale(1, -1) rotate(90.000000) translate(-14.999999, -11.999997)" />
																					</g>
																				</svg>
																			</span>
																			<!--end::Svg Icon-->
																		</a>
																	</td>
																</tr>
																<tr>
																	<td>
																		<div class="symbol symbol-45px me-2">
																			<span class="symbol-label">
																				<img src="assets/media/svg/brand-logos/telegram.svg" class="h-50 align-self-center" alt="" />
																			</span>
																		</div>
																	</td>
																	<td>
																		<a href="#" class="text-dark fw-bolder text-hover-primary mb-1 fs-6">Popular Authors</a>
																		<span class="text-muted fw-bold d-block">Most Successful</span>
																	</td>
																	<td class="text-end text-muted fw-bold">Python, MySQL</td>
																	<td class="text-end">
																		<span class="badge badge-light-warning">In Progress</span>
																	</td>
																	<td class="text-end">
																		<a href="#" class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary">
																			<!--begin::Svg Icon | path: icons/duotone/Navigation/Arrow-right.svg-->
																			<span class="svg-icon svg-icon-2">
																				<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
																					<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
																						<polygon points="0 0 24 0 24 24 0 24" />
																						<rect fill="#000000" opacity="0.5" transform="translate(12.000000, 12.000000) rotate(-90.000000) translate(-12.000000, -12.000000)" x="11" y="5" width="2" height="14" rx="1" />
																						<path d="M9.70710318,15.7071045 C9.31657888,16.0976288 8.68341391,16.0976288 8.29288961,15.7071045 C7.90236532,15.3165802 7.90236532,14.6834152 8.29288961,14.2928909 L14.2928896,8.29289093 C14.6714686,7.914312 15.281055,7.90106637 15.675721,8.26284357 L21.675721,13.7628436 C22.08284,14.136036 22.1103429,14.7686034 21.7371505,15.1757223 C21.3639581,15.5828413 20.7313908,15.6103443 20.3242718,15.2371519 L15.0300721,10.3841355 L9.70710318,15.7071045 Z" fill="#000000" fill-rule="nonzero" transform="translate(14.999999, 11.999997) scale(1, -1) rotate(90.000000) translate(-14.999999, -11.999997)" />
																					</g>
																				</svg>
																			</span>
																			<!--end::Svg Icon-->
																		</a>
																	</td>
																</tr>
																<tr>
																	<td>
																		<div class="symbol symbol-45px me-2">
																			<span class="symbol-label">
																				<img src="assets/media/svg/brand-logos/bebo.svg" class="h-50 align-self-center" alt="" />
																			</span>
																		</div>
																	</td>
																	<td>
																		<a href="#" class="text-dark fw-bolder text-hover-primary mb-1 fs-6">Active Customers</a>
																		<span class="text-muted fw-bold d-block">Movie Creator</span>
																	</td>
																	<td class="text-end text-muted fw-bold">AngularJS, C#</td>
																	<td class="text-end">
																		<span class="badge badge-light-danger">Rejected</span>
																	</td>
																	<td class="text-end">
																		<a href="#" class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary">
																			<!--begin::Svg Icon | path: icons/duotone/Navigation/Arrow-right.svg-->
																			<span class="svg-icon svg-icon-2">
																				<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
																					<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
																						<polygon points="0 0 24 0 24 24 0 24" />
																						<rect fill="#000000" opacity="0.5" transform="translate(12.000000, 12.000000) rotate(-90.000000) translate(-12.000000, -12.000000)" x="11" y="5" width="2" height="14" rx="1" />
																						<path d="M9.70710318,15.7071045 C9.31657888,16.0976288 8.68341391,16.0976288 8.29288961,15.7071045 C7.90236532,15.3165802 7.90236532,14.6834152 8.29288961,14.2928909 L14.2928896,8.29289093 C14.6714686,7.914312 15.281055,7.90106637 15.675721,8.26284357 L21.675721,13.7628436 C22.08284,14.136036 22.1103429,14.7686034 21.7371505,15.1757223 C21.3639581,15.5828413 20.7313908,15.6103443 20.3242718,15.2371519 L15.0300721,10.3841355 L9.70710318,15.7071045 Z" fill="#000000" fill-rule="nonzero" transform="translate(14.999999, 11.999997) scale(1, -1) rotate(90.000000) translate(-14.999999, -11.999997)" />
																					</g>
																				</svg>
																			</span>
																			<!--end::Svg Icon-->
																		</a>
																	</td>
																</tr>
															</tbody>
															<!--end::Table body-->
														</table>
													</div>
													<!--end::Table-->
												</div>
												<!--end::Tap pane-->
												<!--begin::Tap pane-->
												<div class="tab-pane fade" id="kt_table_widget_5_tab_3">
													<!--begin::Table container-->
													<div class="table-responsive">
														<!--begin::Table-->
														<table class="table table-row-dashed table-row-gray-200 align-middle gs-0 gy-4">
															<!--begin::Table head-->
															<thead>
																<tr class="border-0">
																	<th class="p-0 w-50px"></th>
																	<th class="p-0 min-w-150px"></th>
																	<th class="p-0 min-w-140px"></th>
																	<th class="p-0 min-w-110px"></th>
																	<th class="p-0 min-w-50px"></th>
																</tr>
															</thead>
															<!--end::Table head-->
															<!--begin::Table body-->
															<tbody>
																<tr>
																	<td>
																		<div class="symbol symbol-45px me-2">
																			<span class="symbol-label">
																				<img src="assets/media/svg/brand-logos/kickstarter.svg" class="h-50 align-self-center" alt="" />
																			</span>
																		</div>
																	</td>
																	<td>
																		<a href="#" class="text-dark fw-bolder text-hover-primary mb-1 fs-6">Bestseller Theme</a>
																		<span class="text-muted fw-bold d-block">Best Customers</span>
																	</td>
																	<td class="text-end text-muted fw-bold">ReactJS, Ruby</td>
																	<td class="text-end">
																		<span class="badge badge-light-warning">In Progress</span>
																	</td>
																	<td class="text-end">
																		<a href="#" class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary">
																			<!--begin::Svg Icon | path: icons/duotone/Navigation/Arrow-right.svg-->
																			<span class="svg-icon svg-icon-2">
																				<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
																					<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
																						<polygon points="0 0 24 0 24 24 0 24" />
																						<rect fill="#000000" opacity="0.5" transform="translate(12.000000, 12.000000) rotate(-90.000000) translate(-12.000000, -12.000000)" x="11" y="5" width="2" height="14" rx="1" />
																						<path d="M9.70710318,15.7071045 C9.31657888,16.0976288 8.68341391,16.0976288 8.29288961,15.7071045 C7.90236532,15.3165802 7.90236532,14.6834152 8.29288961,14.2928909 L14.2928896,8.29289093 C14.6714686,7.914312 15.281055,7.90106637 15.675721,8.26284357 L21.675721,13.7628436 C22.08284,14.136036 22.1103429,14.7686034 21.7371505,15.1757223 C21.3639581,15.5828413 20.7313908,15.6103443 20.3242718,15.2371519 L15.0300721,10.3841355 L9.70710318,15.7071045 Z" fill="#000000" fill-rule="nonzero" transform="translate(14.999999, 11.999997) scale(1, -1) rotate(90.000000) translate(-14.999999, -11.999997)" />
																					</g>
																				</svg>
																			</span>
																			<!--end::Svg Icon-->
																		</a>
																	</td>
																</tr>
																<tr>
																	<td>
																		<div class="symbol symbol-45px me-2">
																			<span class="symbol-label">
																				<img src="assets/media/svg/brand-logos/bebo.svg" class="h-50 align-self-center" alt="" />
																			</span>
																		</div>
																	</td>
																	<td>
																		<a href="#" class="text-dark fw-bolder text-hover-primary mb-1 fs-6">Active Customers</a>
																		<span class="text-muted fw-bold d-block">Movie Creator</span>
																	</td>
																	<td class="text-end text-muted fw-bold">AngularJS, C#</td>
																	<td class="text-end">
																		<span class="badge badge-light-danger">Rejected</span>
																	</td>
																	<td class="text-end">
																		<a href="#" class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary">
																			<!--begin::Svg Icon | path: icons/duotone/Navigation/Arrow-right.svg-->
																			<span class="svg-icon svg-icon-2">
																				<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
																					<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
																						<polygon points="0 0 24 0 24 24 0 24" />
																						<rect fill="#000000" opacity="0.5" transform="translate(12.000000, 12.000000) rotate(-90.000000) translate(-12.000000, -12.000000)" x="11" y="5" width="2" height="14" rx="1" />
																						<path d="M9.70710318,15.7071045 C9.31657888,16.0976288 8.68341391,16.0976288 8.29288961,15.7071045 C7.90236532,15.3165802 7.90236532,14.6834152 8.29288961,14.2928909 L14.2928896,8.29289093 C14.6714686,7.914312 15.281055,7.90106637 15.675721,8.26284357 L21.675721,13.7628436 C22.08284,14.136036 22.1103429,14.7686034 21.7371505,15.1757223 C21.3639581,15.5828413 20.7313908,15.6103443 20.3242718,15.2371519 L15.0300721,10.3841355 L9.70710318,15.7071045 Z" fill="#000000" fill-rule="nonzero" transform="translate(14.999999, 11.999997) scale(1, -1) rotate(90.000000) translate(-14.999999, -11.999997)" />
																					</g>
																				</svg>
																			</span>
																			<!--end::Svg Icon-->
																		</a>
																	</td>
																</tr>
																<tr>
																	<td>
																		<div class="symbol symbol-45px me-2">
																			<span class="symbol-label">
																				<img src="assets/media/svg/brand-logos/vimeo.svg" class="h-50 align-self-center" alt="" />
																			</span>
																		</div>
																	</td>
																	<td>
																		<a href="#" class="text-dark fw-bolder text-hover-primary mb-1 fs-6">New Users</a>
																		<span class="text-muted fw-bold d-block">Awesome Users</span>
																	</td>
																	<td class="text-end text-muted fw-bold">Laravel,Metronic</td>
																	<td class="text-end">
																		<span class="badge badge-light-primary">Success</span>
																	</td>
																	<td class="text-end">
																		<a href="#" class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary">
																			<!--begin::Svg Icon | path: icons/duotone/Navigation/Arrow-right.svg-->
																			<span class="svg-icon svg-icon-2">
																				<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
																					<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
																						<polygon points="0 0 24 0 24 24 0 24" />
																						<rect fill="#000000" opacity="0.5" transform="translate(12.000000, 12.000000) rotate(-90.000000) translate(-12.000000, -12.000000)" x="11" y="5" width="2" height="14" rx="1" />
																						<path d="M9.70710318,15.7071045 C9.31657888,16.0976288 8.68341391,16.0976288 8.29288961,15.7071045 C7.90236532,15.3165802 7.90236532,14.6834152 8.29288961,14.2928909 L14.2928896,8.29289093 C14.6714686,7.914312 15.281055,7.90106637 15.675721,8.26284357 L21.675721,13.7628436 C22.08284,14.136036 22.1103429,14.7686034 21.7371505,15.1757223 C21.3639581,15.5828413 20.7313908,15.6103443 20.3242718,15.2371519 L15.0300721,10.3841355 L9.70710318,15.7071045 Z" fill="#000000" fill-rule="nonzero" transform="translate(14.999999, 11.999997) scale(1, -1) rotate(90.000000) translate(-14.999999, -11.999997)" />
																					</g>
																				</svg>
																			</span>
																			<!--end::Svg Icon-->
																		</a>
																	</td>
																</tr>
																<tr>
																	<td>
																		<div class="symbol symbol-45px me-2">
																			<span class="symbol-label">
																				<img src="assets/media/svg/brand-logos/telegram.svg" class="h-50 align-self-center" alt="" />
																			</span>
																		</div>
																	</td>
																	<td>
																		<a href="#" class="text-dark fw-bolder text-hover-primary mb-1 fs-6">Popular Authors</a>
																		<span class="text-muted fw-bold d-block">Most Successful</span>
																	</td>
																	<td class="text-end text-muted fw-bold">Python, MySQL</td>
																	<td class="text-end">
																		<span class="badge badge-light-warning">In Progress</span>
																	</td>
																	<td class="text-end">
																		<a href="#" class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary">
																			<!--begin::Svg Icon | path: icons/duotone/Navigation/Arrow-right.svg-->
																			<span class="svg-icon svg-icon-2">
																				<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
																					<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
																						<polygon points="0 0 24 0 24 24 0 24" />
																						<rect fill="#000000" opacity="0.5" transform="translate(12.000000, 12.000000) rotate(-90.000000) translate(-12.000000, -12.000000)" x="11" y="5" width="2" height="14" rx="1" />
																						<path d="M9.70710318,15.7071045 C9.31657888,16.0976288 8.68341391,16.0976288 8.29288961,15.7071045 C7.90236532,15.3165802 7.90236532,14.6834152 8.29288961,14.2928909 L14.2928896,8.29289093 C14.6714686,7.914312 15.281055,7.90106637 15.675721,8.26284357 L21.675721,13.7628436 C22.08284,14.136036 22.1103429,14.7686034 21.7371505,15.1757223 C21.3639581,15.5828413 20.7313908,15.6103443 20.3242718,15.2371519 L15.0300721,10.3841355 L9.70710318,15.7071045 Z" fill="#000000" fill-rule="nonzero" transform="translate(14.999999, 11.999997) scale(1, -1) rotate(90.000000) translate(-14.999999, -11.999997)" />
																					</g>
																				</svg>
																			</span>
																			<!--end::Svg Icon-->
																		</a>
																	</td>
																</tr>
															</tbody>
															<!--end::Table body-->
														</table>
													</div>
													<!--end::Table-->
												</div>
												<!--end::Tap pane-->
											</div>
										</div>
										<!--end::Body-->
									</div>
									<!--end::Tables Widget 5-->
								</div>
								<!--end::Col-->
							</div>
							<!--end::Row-->
						</div>
						<!--end::Container-->
					</div>
					<!--end::Content-->
					<!--begin::Footer-->
					<div class="footer py-4 d-flex flex-lg-column" id="kt_footer">
						<!--begin::Container-->
						<div class="container d-flex flex-column flex-md-row flex-stack">
							<!--begin::Copyright-->
							<div class="text-dark order-2 order-md-1">
								<span class="text-gray-400 fw-bold me-1">Created by</span>
								<a href="https://keenthemes.com" target="_blank" class="text-muted text-hover-primary fw-bold me-2 fs-6">Keenthemes</a>
							</div>
							<!--end::Copyright-->
							<!--begin::Menu-->
							<ul class="menu menu-gray-600 menu-hover-primary fw-bold order-1">
								<li class="menu-item">
									<a href="https://keenthemes.com" target="_blank" class="menu-link px-2">About</a>
								</li>
								<li class="menu-item">
									<a href="https://keenthemes.com/support" target="_blank" class="menu-link px-2">Support</a>
								</li>
								<li class="menu-item">
									<a href="https://1.envato.market/EA4JP" target="_blank" class="menu-link px-2">Purchase</a>
								</li>
							</ul>
							<!--end::Menu-->
						</div>
						<!--end::Container-->
					</div>
					<!--end::Footer-->
				</div>
				<!--end::Wrapper-->
			</div>
			<!--end::Page-->
		</div>
		<!--end::Root-->
		
		<!--begin::Scrolltop-->
		<div id="kt_scrolltop" class="scrolltop" data-kt-scrolltop="true">
			<!--begin::Svg Icon | path: icons/duotone/Navigation/Up-2.svg-->
			<span class="svg-icon">
				<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
					<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
						<polygon points="0 0 24 0 24 24 0 24" />
						<rect fill="#000000" opacity="0.5" x="11" y="10" width="2" height="10" rx="1" />
						<path d="M6.70710678,12.7071068 C6.31658249,13.0976311 5.68341751,13.0976311 5.29289322,12.7071068 C4.90236893,12.3165825 4.90236893,11.6834175 5.29289322,11.2928932 L11.2928932,5.29289322 C11.6714722,4.91431428 12.2810586,4.90106866 12.6757246,5.26284586 L18.6757246,10.7628459 C19.0828436,11.1360383 19.1103465,11.7686056 18.7371541,12.1757246 C18.3639617,12.5828436 17.7313944,12.6103465 17.3242754,12.2371541 L12.0300757,7.38413782 L6.70710678,12.7071068 Z" fill="#000000" fill-rule="nonzero" />
					</g>
				</svg>
			</span>
			<!--end::Svg Icon-->
		</div>
		<!--end::Scrolltop-->
		<!--end::Main-->
		
		<!--begin::Global Javascript Bundle(used by all pages)-->
		<script src="{{ asset('assets/admin') }}/plugins/global/plugins.bundle.js"></script>
		<script src="{{ asset('assets/admin') }}/js/scripts.bundle.js"></script>
		
		<!--begin::Page Custom Javascript(used by this page)-->
		<script src="{{ asset('assets/admin') }}/js/custom/widgets.js"></script>
	
	</body>
	<!--end::Body-->
</html>