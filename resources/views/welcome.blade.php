
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
											<!--begin::Svg Icon | path: https://preview.keenthemes.com/metronic8/demo7/assets/media/icons/duotone/Shopping/Chart.svg-->
											<span class="svg-icon svg-icon-2"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
												<path d="M15.7632 15.2206C15.4599 14.9148 14.9749 14.8913 14.6449 15.166C13.1591 16.3965 10.8415 16.3965 9.35567 15.166C9.02566 14.8913 8.54066 14.9148 8.23733 15.2206L5.29062 18.1907C5.12812 18.3537 5.04062 18.5763 5.04644 18.8073C5.05226 19.0374 5.15226 19.255 5.32226 19.4095C7.16478 21.0802 9.53649 22 11.9998 22C14.4632 22 16.8357 21.0802 18.6782 19.4095C18.8482 19.255 18.9474 19.0374 18.9541 18.8073C18.9599 18.5763 18.8716 18.3537 18.7099 18.1907L15.7632 15.2206Z" fill="#E4E6EF"/>
												<path d="M7.90424 12.672C7.85592 12.4048 7.83342 12.1587 7.83342 11.9202C7.83342 10.1479 8.95012 8.55864 10.6118 7.96563C10.9443 7.84637 11.1668 7.52969 11.1668 7.17355V2.84096C11.1668 2.59149 11.0568 2.35461 10.8668 2.19503C10.6768 2.03545 10.4226 1.96907 10.1826 2.01443C5.44172 2.89388 2 7.06012 2 11.9202C2 13.5136 2.36582 15.0474 3.08919 16.4795C3.21001 16.7189 3.43838 16.8861 3.7017 16.9281C3.74502 16.9348 3.7892 16.9382 3.8317 16.9382C4.05088 16.9382 4.2642 16.8508 4.42089 16.692L7.67342 13.4145C7.86589 13.2196 7.95257 12.9424 7.90424 12.672Z" fill="#E4E6EF"/>
												<path d="M13.8174 2.01438C13.5774 1.96819 13.3232 2.03454 13.1341 2.19499C12.9432 2.35457 12.8332 2.59144 12.8332 2.84008V7.17351C12.8332 7.52882 13.0557 7.84632 13.3882 7.96476C15.0499 8.55863 16.1666 10.1478 16.1666 11.9202C16.1666 12.1588 16.1441 12.4048 16.0958 12.672C16.0483 12.9424 16.1341 13.2196 16.3275 13.4136L19.5792 16.692C19.7367 16.8508 19.9492 16.9382 20.1683 16.9382C20.2117 16.9382 20.2558 16.9348 20.2983 16.9273C20.5625 16.8853 20.79 16.7181 20.9117 16.4787C21.6342 15.0474 22 13.5136 22 11.9202C22 7.05925 18.5583 2.89383 13.8174 2.01438Z" fill="#E4E6EF"/>
												</svg></span>
												
										</a>
										<!--end::Nav link-->
									</li>

									@if (Route::has('admin.web.*'))
									<!--begin::Site web-->
									<li class="nav-item mb-2" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-placement="right" data-bs-dismiss="click" title="Sitio web">
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
											
										</a>
										<!--end::Nav link-->
									</li>
									@endif

                                    @if (Route::has('admin.blog.*'))
									<!--begin::Blogs-->
									<li class="nav-item mb-2" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-placement="right" data-bs-dismiss="click" title="Blogs">
										<!--begin::Nav link-->
										<a class="nav-link btn btn-icon btn-active-color-primary btn-color-gray-400 btn-active-light" data-bs-toggle="tab" href="#kt_aside_nav_tab_blog">
											<!--begin::Svg Icon | path: https://preview.keenthemes.com/metronic8/demo7/assets/media/icons/duotone/Home/Book-open.svg-->
											<span class="svg-icon svg-icon-2"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
												<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
													<rect x="0" y="0" width="24" height="24"/>
													<path d="M13.6855025,18.7082217 C15.9113859,17.8189707 18.682885,17.2495635 22,17 C22,16.9325178 22,13.1012863 22,5.50630526 L21.9999762,5.50630526 C21.9999762,5.23017604 21.7761292,5.00632908 21.5,5.00632908 C21.4957817,5.00632908 21.4915635,5.00638247 21.4873465,5.00648922 C18.658231,5.07811173 15.8291155,5.74261533 13,7 C13,7.04449645 13,10.79246 13,18.2438906 L12.9999854,18.2438906 C12.9999854,18.520041 13.2238496,18.7439052 13.5,18.7439052 C13.5635398,18.7439052 13.6264972,18.7317946 13.6855025,18.7082217 Z" fill="#000000"/>
													<path d="M10.3144829,18.7082217 C8.08859955,17.8189707 5.31710038,17.2495635 1.99998542,17 C1.99998542,16.9325178 1.99998542,13.1012863 1.99998542,5.50630526 L2.00000925,5.50630526 C2.00000925,5.23017604 2.22385621,5.00632908 2.49998542,5.00632908 C2.50420375,5.00632908 2.5084219,5.00638247 2.51263888,5.00648922 C5.34175439,5.07811173 8.17086991,5.74261533 10.9999854,7 C10.9999854,7.04449645 10.9999854,10.79246 10.9999854,18.2438906 L11,18.2438906 C11,18.520041 10.7761358,18.7439052 10.4999854,18.7439052 C10.4364457,18.7439052 10.3734882,18.7317946 10.3144829,18.7082217 Z" fill="#000000" opacity="0.3"/>
												</g>
											</svg></span>
											
										</a>
										<!--end::Nav link-->
									</li>
                                    @endif
									
									@if (Route::has('admin.shop.*'))
									<!--begin::E-commerce-->
									<li class="nav-item mb-2" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-placement="right" data-bs-dismiss="click" title="E-commerce">
										<!--begin::Nav link-->
										<a class="nav-link btn btn-icon btn-active-color-primary btn-color-gray-400 btn-active-light" data-bs-toggle="tab" href="#kt_aside_nav_tab_ecommerce">
											<!--begin::Svg Icon | path: https://preview.keenthemes.com/metronic8/demo7/assets/media/icons/duotone/Shopping/Cart1.svg-->
											<span class="svg-icon svg-icon-2"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
												<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
													<rect x="0" y="0" width="24" height="24"/>
													<path d="M18.1446364,11.84388 L17.4471627,16.0287218 C17.4463569,16.0335568 17.4455155,16.0383857 17.4446387,16.0432083 C17.345843,16.5865846 16.8252597,16.9469884 16.2818833,16.8481927 L4.91303792,14.7811299 C4.53842737,14.7130189 4.23500006,14.4380834 4.13039941,14.0719812 L2.30560137,7.68518803 C2.28007524,7.59584656 2.26712532,7.50338343 2.26712532,7.4104669 C2.26712532,6.85818215 2.71484057,6.4104669 3.26712532,6.4104669 L16.9929851,6.4104669 L17.606173,3.78251876 C17.7307772,3.24850086 18.2068633,2.87071314 18.7552257,2.87071314 L20.8200821,2.87071314 C21.4717328,2.87071314 22,3.39898039 22,4.05063106 C22,4.70228173 21.4717328,5.23054898 20.8200821,5.23054898 L19.6915238,5.23054898 L18.1446364,11.84388 Z" fill="#000000" opacity="0.3"/>
													<path d="M6.5,21 C5.67157288,21 5,20.3284271 5,19.5 C5,18.6715729 5.67157288,18 6.5,18 C7.32842712,18 8,18.6715729 8,19.5 C8,20.3284271 7.32842712,21 6.5,21 Z M15.5,21 C14.6715729,21 14,20.3284271 14,19.5 C14,18.6715729 14.6715729,18 15.5,18 C16.3284271,18 17,18.6715729 17,19.5 C17,20.3284271 16.3284271,21 15.5,21 Z" fill="#000000"/>
												</g>
											</svg></span>
											
										</a>
										<!--end::Nav link-->
									</li>
									@endif
									
									<!--begin::Notifications-->
									<li class="nav-item mb-2" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-placement="right" data-bs-dismiss="click" title="Notifications">
										<!--begin::Nav link-->
										<a class="nav-link btn btn-icon btn-active-color-primary btn-color-gray-400 btn-active-light" data-bs-toggle="tab" href="#kt_aside_nav_tab_notifications">
											<!--begin::Svg Icon | path: https://preview.keenthemes.com/metronic8/demo7/assets/media/icons/duotone/General/Notifications1.svg-->
											<span class="svg-icon svg-icon-2"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
												<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
													<path d="M17,12 L18.5,12 C19.3284271,12 20,12.6715729 20,13.5 C20,14.3284271 19.3284271,15 18.5,15 L5.5,15 C4.67157288,15 4,14.3284271 4,13.5 C4,12.6715729 4.67157288,12 5.5,12 L7,12 L7.5582739,6.97553494 C7.80974924,4.71225688 9.72279394,3 12,3 C14.2772061,3 16.1902508,4.71225688 16.4417261,6.97553494 L17,12 Z" fill="#000000"/>
													<rect fill="#000000" opacity="0.3" x="10" y="16" width="4" height="4" rx="2"/>
												</g>
											</svg></span>
											
										</a>
										<!--end::Nav link-->
									</li>
									
								</ul>
								
							</div>
							
						</div>
						
						<!--begin::Footer-->
						<div class="aside-footer d-flex flex-column align-items-center flex-column-auto" id="kt_aside_footer">
							
							<!--begin::User-->
							<div class="d-flex align-items-center mb-10" id="kt_header_user_menu_toggle">
								<!--begin::Menu wrapper-->
								<div class="cursor-pointer symbol symbol-40px" data-kt-menu-trigger="click" data-kt-menu-overflow="true" data-kt-menu-placement="top-start" data-kt-menu-flip="top-end" data-bs-toggle="tooltip" data-bs-placement="right" data-bs-dismiss="click" title="User profile">
									<img src="https://preview.keenthemes.com/metronic8/demo7/assets/media/avatars/150-26.jpg" alt="metronic" />
								</div>
								<!--begin::Menu-->
								<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg menu-state-primary fw-bold py-4 fs-6 w-275px" data-kt-menu="true">
									<!--begin::Menu item-->
									<div class="menu-item px-3">
										<div class="menu-content d-flex align-items-center px-3">
											<!--begin::Avatar-->
											<div class="symbol symbol-50px me-5">
												<img alt="Logo" src="https://preview.keenthemes.com/metronic8/demo7/assets/media/avatars/150-26.jpg" />
											</div>
											<!--begin::Username-->
											<div class="d-flex flex-column">
												<div class="fw-bolder d-flex align-items-center fs-5">Max Smith
												<span class="badge badge-light-success fw-bolder fs-8 px-2 py-1 ms-2">Pro</span></div>
												<a href="#" class="fw-bold text-muted text-hover-primary fs-7">max@kt.com</a>
											</div>
										</div>
									</div>
									<!--begin::Menu separator-->
									<div class="separator my-2"></div>
									
									<!--begin::Menu item-->
									<div class="menu-item px-5">
										<a href="../../demo7/dist/account/overview.html" class="menu-link px-5">Mi perfil</a>
									</div>
									
									<!--begin::Menu item-->
									<div class="menu-item px-5">
										<a href="../../demo7/dist/pages/projects/list.html" class="menu-link px-5">
											<span class="menu-text">Mis proyectos</span>
											<span class="menu-badge">
												<span class="badge badge-light-danger badge-circle fw-bolder fs-7">3</span>
											</span>
										</a>
									</div>
									
									<!--begin::Menu item-->
									<div class="menu-item px-5">
										<a href="../../demo7/dist/account/statements.html" class="menu-link px-5">Contraseña</a>
									</div>
									
									<!--begin::Menu separator-->
									<div class="separator my-2"></div>
									
									<!--begin::Menu item-->
									<div class="menu-item px-5">
										<a href="../../demo7/dist/authentication/flows/basic/sign-in.html" class="menu-link px-5">Cerrar sesión</a>
									</div>
									
								</div>
							</div>
						</div>
						
					</div>
					

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
												
												<!--begin::Items-->
												<div class="mb-10">

													@if (Route::has('admin.blog.*'))
													<!--begin::Blog-->
													<a href="#" class="custom-list d-flex align-items-center px-5 py-4 bg-hove-primary">
														<!--begin::Symbol-->
														<div class="symbol symbol-40px me-5 menu-active-bg">
															<span class="symbol-label ">
																<!--begin::Svg Icon | path: https://preview.keenthemes.com/metronic8/demo7/assets/media/icons/duotone/Home/Book-open.svg-->
																<span class="svg-icon svg-icon-2 "><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
																	<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
																		<rect x="0" y="0" width="24" height="24"/>
																		<path d="M13.6855025,18.7082217 C15.9113859,17.8189707 18.682885,17.2495635 22,17 C22,16.9325178 22,13.1012863 22,5.50630526 L21.9999762,5.50630526 C21.9999762,5.23017604 21.7761292,5.00632908 21.5,5.00632908 C21.4957817,5.00632908 21.4915635,5.00638247 21.4873465,5.00648922 C18.658231,5.07811173 15.8291155,5.74261533 13,7 C13,7.04449645 13,10.79246 13,18.2438906 L12.9999854,18.2438906 C12.9999854,18.520041 13.2238496,18.7439052 13.5,18.7439052 C13.5635398,18.7439052 13.6264972,18.7317946 13.6855025,18.7082217 Z" fill="#000000"/>
																		<path d="M10.3144829,18.7082217 C8.08859955,17.8189707 5.31710038,17.2495635 1.99998542,17 C1.99998542,16.9325178 1.99998542,13.1012863 1.99998542,5.50630526 L2.00000925,5.50630526 C2.00000925,5.23017604 2.22385621,5.00632908 2.49998542,5.00632908 C2.50420375,5.00632908 2.5084219,5.00638247 2.51263888,5.00648922 C5.34175439,5.07811173 8.17086991,5.74261533 10.9999854,7 C10.9999854,7.04449645 10.9999854,10.79246 10.9999854,18.2438906 L11,18.2438906 C11,18.520041 10.7761358,18.7439052 10.4999854,18.7439052 C10.4364457,18.7439052 10.3734882,18.7317946 10.3144829,18.7082217 Z" fill="#000000" opacity="0.3"/>
																	</g>
																</svg></span>
																
															</span>
														</div>
														
														<!--begin::Description-->
														<div class="d-flex flex-column flex-grow-1">
															<!--begin::Title-->
															<h5 class="custom-list-title fw-bold text-gray-800 mb-1">Blogs</h5>
															
														</div>
														<!--begin::Description-->
													</a>
													@endif
													
													@if (Route::has('admin.shop.*'))
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
														
														<!--begin::Description-->
														<div class="d-flex flex-column flex-grow-1">
															<!--begin::Title-->
															<h5 class="custom-list-title fw-bold text-gray-800 mb-1">E-commerce</h5>
														</div>
														<!--begin::Description-->
													</a>
													@endif	

													@if (Route::has('admin.crm.*'))
													<!--begin::CRM-->
													<a href="#" class="custom-list d-flex align-items-center px-5 py-4 bg-hove-primary">
														<!--begin::Symbol-->
														<div class="symbol symbol-40px me-5">
															<span class="symbol-label">
																<span class="svg-icon svg-icon-3x me-10">
																	<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
																		<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
																			<rect x="0" y="0" width="24" height="24"></rect>
																			<rect fill="#000000" opacity="0.3" x="7" y="4" width="3" height="13" rx="1.5"></rect>
																			<rect fill="#000000" opacity="0.3" x="12" y="9" width="3" height="8" rx="1.5"></rect>
																			<path d="M5,19 L20,19 C20.5522847,19 21,19.4477153 21,20 C21,20.5522847 20.5522847,21 20,21 L4,21 C3.44771525,21 3,20.5522847 3,20 L3,4 C3,3.44771525 3.44771525,3 4,3 C4.55228475,3 5,3.44771525 5,4 L5,19 Z" fill="#000000" fill-rule="nonzero"></path>
																			<rect fill="#000000" opacity="0.3" x="17" y="11" width="3" height="6" rx="1.5"></rect>
																		</g>
																	</svg>
																</span>
															</span>
														</div>
														
														<!--begin::Description-->
														<div class="d-flex flex-column flex-grow-1">
															<!--begin::Title-->
															<h5 class="custom-list-title fw-bold text-gray-800 mb-1">CRM</h5>
														</div>
														<!--begin::Description-->
													</a>
													@endif													
													
												</div>
												
											</div>

										</div>

										@if (Route::has('admin.web.*'))
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
																<!--begin::Svg Icon | path: https://preview.keenthemes.com/metronic8/demo7/assets/media/icons/duotone/Interface/Image.svg-->
																<span class="svg-icon svg-icon-2"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
																<path opacity="0.25" d="M2.45153 5.94826C2.71842 4.12109 4.12109 2.71842 5.94826 2.45153C7.54228 2.21869 9.6618 2 12 2C14.3382 2 16.4577 2.21869 18.0517 2.45153C19.8789 2.71842 21.2816 4.12109 21.5485 5.94826C21.7813 7.54228 22 9.6618 22 12C22 14.3382 21.7813 16.4577 21.5485 18.0517C21.2816 19.8789 19.8789 21.2816 18.0517 21.5485C16.4577 21.7813 14.3382 22 12 22C9.6618 22 7.54228 21.7813 5.94826 21.5485C4.12109 21.2816 2.71842 19.8789 2.45153 18.0517C2.21869 16.4577 2 14.3382 2 12C2 9.6618 2.21869 7.54228 2.45153 5.94826Z" fill="#12131A"/>
																<path d="M8 10C9.10457 10 10 9.10457 10 8C10 6.89543 9.10457 6 8 6C6.89543 6 6 6.89543 6 8C6 9.10457 6.89543 10 8 10Z" fill="#12131A"/>
																<path d="M21.6642 17.2016C21.7024 16.8989 21.5962 16.5963 21.3805 16.3806L17.4143 12.4144C16.6332 11.6334 15.3669 11.6334 14.5858 12.4144L11.7072 15.2931C11.3166 15.6836 10.6835 15.6836 10.293 15.2931L9.41427 14.4144C8.63322 13.6334 7.36689 13.6334 6.58584 14.4144L2.93337 18.0669C2.68517 18.3151 2.57669 18.679 2.70674 19.005C3.24439 20.3529 4.45448 21.3303 5.94832 21.5485C7.54234 21.7813 9.66186 22 12.0001 22C14.3383 22 16.4578 21.7813 18.0518 21.5485C19.879 21.2816 21.2816 19.8789 21.5485 18.0517C21.5878 17.7828 21.6267 17.499 21.6642 17.2016Z" fill="#12131A"/>
																</svg></span>
																
															</span>
															<span class="menu-title">Portada</span>
														</a>
													</div>
													<div class="menu-item">
														<a class="menu-link " href="#">
															<span class="menu-icon">
																<!--begin::Svg Icon | path: https://preview.keenthemes.com/metronic8/demo7/assets/media/icons/duotone/Layout/Layout-top-panel-6.svg-->
																<span class="svg-icon svg-icon-2"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
																	<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
																		<rect x="0" y="0" width="24" height="24"/>
																		<rect fill="#000000" x="2" y="5" width="19" height="4" rx="1"/>
																		<rect fill="#000000" opacity="0.3" x="2" y="11" width="19" height="10" rx="1"/>
																	</g>
																</svg></span>
																
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
																<!--begin::Svg Icon | path: https://preview.keenthemes.com/metronic8/demo7/assets/media/icons/duotone/Interface/Image.svg-->
																<span class="svg-icon svg-icon-2"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
																<path opacity="0.25" d="M2.45153 5.94826C2.71842 4.12109 4.12109 2.71842 5.94826 2.45153C7.54228 2.21869 9.6618 2 12 2C14.3382 2 16.4577 2.21869 18.0517 2.45153C19.8789 2.71842 21.2816 4.12109 21.5485 5.94826C21.7813 7.54228 22 9.6618 22 12C22 14.3382 21.7813 16.4577 21.5485 18.0517C21.2816 19.8789 19.8789 21.2816 18.0517 21.5485C16.4577 21.7813 14.3382 22 12 22C9.6618 22 7.54228 21.7813 5.94826 21.5485C4.12109 21.2816 2.71842 19.8789 2.45153 18.0517C2.21869 16.4577 2 14.3382 2 12C2 9.6618 2.21869 7.54228 2.45153 5.94826Z" fill="#12131A"/>
																<path d="M8 10C9.10457 10 10 9.10457 10 8C10 6.89543 9.10457 6 8 6C6.89543 6 6 6.89543 6 8C6 9.10457 6.89543 10 8 10Z" fill="#12131A"/>
																<path d="M21.6642 17.2016C21.7024 16.8989 21.5962 16.5963 21.3805 16.3806L17.4143 12.4144C16.6332 11.6334 15.3669 11.6334 14.5858 12.4144L11.7072 15.2931C11.3166 15.6836 10.6835 15.6836 10.293 15.2931L9.41427 14.4144C8.63322 13.6334 7.36689 13.6334 6.58584 14.4144L2.93337 18.0669C2.68517 18.3151 2.57669 18.679 2.70674 19.005C3.24439 20.3529 4.45448 21.3303 5.94832 21.5485C7.54234 21.7813 9.66186 22 12.0001 22C14.3383 22 16.4578 21.7813 18.0518 21.5485C19.879 21.2816 21.2816 19.8789 21.5485 18.0517C21.5878 17.7828 21.6267 17.499 21.6642 17.2016Z" fill="#12131A"/>
																</svg></span>
																
															</span>
															<span class="menu-title">Portada</span>
														</a>
													</div>
													<div class="menu-item">
														<a class="menu-link " href="#">
															<span class="menu-icon">
																<!--begin::Svg Icon | path: https://preview.keenthemes.com/metronic8/demo7/assets/media/icons/duotone/Layout/Layout-top-panel-6.svg-->
																<span class="svg-icon svg-icon-2"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
																	<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
																		<rect x="0" y="0" width="24" height="24"/>
																		<rect fill="#000000" x="2" y="5" width="19" height="4" rx="1"/>
																		<rect fill="#000000" opacity="0.3" x="2" y="11" width="19" height="10" rx="1"/>
																	</g>
																</svg></span>
																
															</span>
															<span class="menu-title">General</span>
														</a>
													</div>
													<div class="menu-item">
														<a class="menu-link" href="#">
															<span class="menu-icon">
																<!--begin::Svg Icon | path: https://preview.keenthemes.com/metronic8/demo7/assets/media/icons/duotone/Code/Thunder-circle.svg-->
																<span class="svg-icon svg-icon-2"><svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
																	<circle fill="#000000" opacity="0.3" cx="12" cy="12" r="10"/>
																	<path d="M12.4208204,17.1583592 L15.4572949,11.0854102 C15.6425368,10.7149263 15.4923686,10.2644215 15.1218847,10.0791796 C15.0177431,10.0271088 14.9029083,10 14.7864745,10 L12,10 L12,7.17705098 C12,6.76283742 11.6642136,6.42705098 11.25,6.42705098 C10.965921,6.42705098 10.7062236,6.58755277 10.5791796,6.84164079 L7.5427051,12.9145898 C7.35746316,13.2850737 7.50763142,13.7355785 7.87811529,13.9208204 C7.98225687,13.9728912 8.09709167,14 8.21352549,14 L11,14 L11,16.822949 C11,17.2371626 11.3357864,17.572949 11.75,17.572949 C12.034079,17.572949 12.2937764,17.4124472 12.4208204,17.1583592 Z" fill="#000000"/>
																</svg></span>
																
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
																<!--begin::Svg Icon | path: https://preview.keenthemes.com/metronic8/demo7/assets/media/icons/duotone/Interface/Image.svg-->
																<span class="svg-icon svg-icon-2"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
																<path opacity="0.25" d="M2.45153 5.94826C2.71842 4.12109 4.12109 2.71842 5.94826 2.45153C7.54228 2.21869 9.6618 2 12 2C14.3382 2 16.4577 2.21869 18.0517 2.45153C19.8789 2.71842 21.2816 4.12109 21.5485 5.94826C21.7813 7.54228 22 9.6618 22 12C22 14.3382 21.7813 16.4577 21.5485 18.0517C21.2816 19.8789 19.8789 21.2816 18.0517 21.5485C16.4577 21.7813 14.3382 22 12 22C9.6618 22 7.54228 21.7813 5.94826 21.5485C4.12109 21.2816 2.71842 19.8789 2.45153 18.0517C2.21869 16.4577 2 14.3382 2 12C2 9.6618 2.21869 7.54228 2.45153 5.94826Z" fill="#12131A"/>
																<path d="M8 10C9.10457 10 10 9.10457 10 8C10 6.89543 9.10457 6 8 6C6.89543 6 6 6.89543 6 8C6 9.10457 6.89543 10 8 10Z" fill="#12131A"/>
																<path d="M21.6642 17.2016C21.7024 16.8989 21.5962 16.5963 21.3805 16.3806L17.4143 12.4144C16.6332 11.6334 15.3669 11.6334 14.5858 12.4144L11.7072 15.2931C11.3166 15.6836 10.6835 15.6836 10.293 15.2931L9.41427 14.4144C8.63322 13.6334 7.36689 13.6334 6.58584 14.4144L2.93337 18.0669C2.68517 18.3151 2.57669 18.679 2.70674 19.005C3.24439 20.3529 4.45448 21.3303 5.94832 21.5485C7.54234 21.7813 9.66186 22 12.0001 22C14.3383 22 16.4578 21.7813 18.0518 21.5485C19.879 21.2816 21.2816 19.8789 21.5485 18.0517C21.5878 17.7828 21.6267 17.499 21.6642 17.2016Z" fill="#12131A"/>
																</svg></span>
																
															</span>
															<span class="menu-title">Portada</span>
														</a>
													</div>
													<div class="menu-item">
														<a class="menu-link " href="#">
															<span class="menu-icon">
																<!--begin::Svg Icon | path: https://preview.keenthemes.com/metronic8/demo7/assets/media/icons/duotone/Layout/Layout-top-panel-6.svg-->
																<span class="svg-icon svg-icon-2"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
																	<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
																		<rect x="0" y="0" width="24" height="24"/>
																		<rect fill="#000000" x="2" y="5" width="19" height="4" rx="1"/>
																		<rect fill="#000000" opacity="0.3" x="2" y="11" width="19" height="10" rx="1"/>
																	</g>
																</svg></span>
																
															</span>
															<span class="menu-title">General</span>
														</a>
													</div>
													<div class="menu-item">
														<a class="menu-link" href="#">
															<span class="menu-icon">
																<!--begin::Svg Icon | path: https://preview.keenthemes.com/metronic8/demo7/assets/media/icons/duotone/Clothes/Briefcase.svg-->
																<span class="svg-icon svg-icon-2"><svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
																	<path d="M5.84026576,8 L18.1597342,8 C19.1999115,8 20.0664437,8.79732479 20.1528258,9.83390904 L20.8194924,17.833909 C20.9112219,18.9346631 20.0932459,19.901362 18.9924919,19.9930915 C18.9372479,19.9976952 18.8818364,20 18.8264009,20 L5.1735991,20 C4.0690296,20 3.1735991,19.1045695 3.1735991,18 C3.1735991,17.9445645 3.17590391,17.889153 3.18050758,17.833909 L3.84717425,9.83390904 C3.93355627,8.79732479 4.80008849,8 5.84026576,8 Z M10.5,10 C10.2238576,10 10,10.2238576 10,10.5 L10,11.5 C10,11.7761424 10.2238576,12 10.5,12 L13.5,12 C13.7761424,12 14,11.7761424 14,11.5 L14,10.5 C14,10.2238576 13.7761424,10 13.5,10 L10.5,10 Z" fill="#000000"/>
																	<path d="M10,8 L8,8 L8,7 C8,5.34314575 9.34314575,4 11,4 L13,4 C14.6568542,4 16,5.34314575 16,7 L16,8 L14,8 L14,7 C14,6.44771525 13.5522847,6 13,6 L11,6 C10.4477153,6 10,6.44771525 10,7 L10,8 Z" fill="#000000" fill-rule="nonzero" opacity="0.3"/>
																</svg></span>
																
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
																<!--begin::Svg Icon | path: https://preview.keenthemes.com/metronic8/demo7/assets/media/icons/duotone/Interface/Image.svg-->
																<span class="svg-icon svg-icon-2"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
																<path opacity="0.25" d="M2.45153 5.94826C2.71842 4.12109 4.12109 2.71842 5.94826 2.45153C7.54228 2.21869 9.6618 2 12 2C14.3382 2 16.4577 2.21869 18.0517 2.45153C19.8789 2.71842 21.2816 4.12109 21.5485 5.94826C21.7813 7.54228 22 9.6618 22 12C22 14.3382 21.7813 16.4577 21.5485 18.0517C21.2816 19.8789 19.8789 21.2816 18.0517 21.5485C16.4577 21.7813 14.3382 22 12 22C9.6618 22 7.54228 21.7813 5.94826 21.5485C4.12109 21.2816 2.71842 19.8789 2.45153 18.0517C2.21869 16.4577 2 14.3382 2 12C2 9.6618 2.21869 7.54228 2.45153 5.94826Z" fill="#12131A"/>
																<path d="M8 10C9.10457 10 10 9.10457 10 8C10 6.89543 9.10457 6 8 6C6.89543 6 6 6.89543 6 8C6 9.10457 6.89543 10 8 10Z" fill="#12131A"/>
																<path d="M21.6642 17.2016C21.7024 16.8989 21.5962 16.5963 21.3805 16.3806L17.4143 12.4144C16.6332 11.6334 15.3669 11.6334 14.5858 12.4144L11.7072 15.2931C11.3166 15.6836 10.6835 15.6836 10.293 15.2931L9.41427 14.4144C8.63322 13.6334 7.36689 13.6334 6.58584 14.4144L2.93337 18.0669C2.68517 18.3151 2.57669 18.679 2.70674 19.005C3.24439 20.3529 4.45448 21.3303 5.94832 21.5485C7.54234 21.7813 9.66186 22 12.0001 22C14.3383 22 16.4578 21.7813 18.0518 21.5485C19.879 21.2816 21.2816 19.8789 21.5485 18.0517C21.5878 17.7828 21.6267 17.499 21.6642 17.2016Z" fill="#12131A"/>
																</svg></span>
																
															</span>
															<span class="menu-title">Portada</span>
														</a>
													</div>
													<div class="menu-item">
														<a class="menu-link " href="#">
															<span class="menu-icon">
																<!--begin::Svg Icon | path: https://preview.keenthemes.com/metronic8/demo7/assets/media/icons/duotone/Layout/Layout-top-panel-6.svg-->
																<span class="svg-icon svg-icon-2"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
																	<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
																		<rect x="0" y="0" width="24" height="24"/>
																		<rect fill="#000000" x="2" y="5" width="19" height="4" rx="1"/>
																		<rect fill="#000000" opacity="0.3" x="2" y="11" width="19" height="10" rx="1"/>
																	</g>
																</svg></span>
																
															</span>
															<span class="menu-title">General</span>
														</a>
													</div>

												</div>
											</div>
										</div>
										@endif
									
										@if (Route::has('admin.blog.*'))
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
																<!--begin::Svg Icon | path: https://preview.keenthemes.com/metronic8/demo7/assets/media/icons/duotone/Interface/Image.svg-->
																<span class="svg-icon svg-icon-2"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
																<path opacity="0.25" d="M2.45153 5.94826C2.71842 4.12109 4.12109 2.71842 5.94826 2.45153C7.54228 2.21869 9.6618 2 12 2C14.3382 2 16.4577 2.21869 18.0517 2.45153C19.8789 2.71842 21.2816 4.12109 21.5485 5.94826C21.7813 7.54228 22 9.6618 22 12C22 14.3382 21.7813 16.4577 21.5485 18.0517C21.2816 19.8789 19.8789 21.2816 18.0517 21.5485C16.4577 21.7813 14.3382 22 12 22C9.6618 22 7.54228 21.7813 5.94826 21.5485C4.12109 21.2816 2.71842 19.8789 2.45153 18.0517C2.21869 16.4577 2 14.3382 2 12C2 9.6618 2.21869 7.54228 2.45153 5.94826Z" fill="#12131A"/>
																<path d="M8 10C9.10457 10 10 9.10457 10 8C10 6.89543 9.10457 6 8 6C6.89543 6 6 6.89543 6 8C6 9.10457 6.89543 10 8 10Z" fill="#12131A"/>
																<path d="M21.6642 17.2016C21.7024 16.8989 21.5962 16.5963 21.3805 16.3806L17.4143 12.4144C16.6332 11.6334 15.3669 11.6334 14.5858 12.4144L11.7072 15.2931C11.3166 15.6836 10.6835 15.6836 10.293 15.2931L9.41427 14.4144C8.63322 13.6334 7.36689 13.6334 6.58584 14.4144L2.93337 18.0669C2.68517 18.3151 2.57669 18.679 2.70674 19.005C3.24439 20.3529 4.45448 21.3303 5.94832 21.5485C7.54234 21.7813 9.66186 22 12.0001 22C14.3383 22 16.4578 21.7813 18.0518 21.5485C19.879 21.2816 21.2816 19.8789 21.5485 18.0517C21.5878 17.7828 21.6267 17.499 21.6642 17.2016Z" fill="#12131A"/>
																</svg></span>
																
															</span>
															<span class="menu-title">Portada</span>
														</a>
													</div>
													<div class="menu-item">
														<a class="menu-link " href="#">
															<span class="menu-icon">
																<!--begin::Svg Icon | path: https://preview.keenthemes.com/metronic8/demo7/assets/media/icons/duotone/Layout/Layout-top-panel-6.svg-->
																<span class="svg-icon svg-icon-2"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
																	<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
																		<rect x="0" y="0" width="24" height="24"/>
																		<rect fill="#000000" x="2" y="5" width="19" height="4" rx="1"/>
																		<rect fill="#000000" opacity="0.3" x="2" y="11" width="19" height="10" rx="1"/>
																	</g>
																</svg></span>
																
															</span>
															<span class="menu-title">General</span>
														</a>
													</div>
													<div class="menu-item">
														<a class="menu-link" href="#">
															<span class="menu-icon">
																<!--begin::Svg Icon | path: https://preview.keenthemes.com/metronic8/demo7/assets/media/icons/duotone/Home/Book-open.svg-->
																<span class="svg-icon svg-icon-2"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
																	<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
																		<rect x="0" y="0" width="24" height="24"/>
																		<path d="M13.6855025,18.7082217 C15.9113859,17.8189707 18.682885,17.2495635 22,17 C22,16.9325178 22,13.1012863 22,5.50630526 L21.9999762,5.50630526 C21.9999762,5.23017604 21.7761292,5.00632908 21.5,5.00632908 C21.4957817,5.00632908 21.4915635,5.00638247 21.4873465,5.00648922 C18.658231,5.07811173 15.8291155,5.74261533 13,7 C13,7.04449645 13,10.79246 13,18.2438906 L12.9999854,18.2438906 C12.9999854,18.520041 13.2238496,18.7439052 13.5,18.7439052 C13.5635398,18.7439052 13.6264972,18.7317946 13.6855025,18.7082217 Z" fill="#000000"/>
																		<path d="M10.3144829,18.7082217 C8.08859955,17.8189707 5.31710038,17.2495635 1.99998542,17 C1.99998542,16.9325178 1.99998542,13.1012863 1.99998542,5.50630526 L2.00000925,5.50630526 C2.00000925,5.23017604 2.22385621,5.00632908 2.49998542,5.00632908 C2.50420375,5.00632908 2.5084219,5.00638247 2.51263888,5.00648922 C5.34175439,5.07811173 8.17086991,5.74261533 10.9999854,7 C10.9999854,7.04449645 10.9999854,10.79246 10.9999854,18.2438906 L11,18.2438906 C11,18.520041 10.7761358,18.7439052 10.4999854,18.7439052 C10.4364457,18.7439052 10.3734882,18.7317946 10.3144829,18.7082217 Z" fill="#000000" opacity="0.3"/>
																	</g>
																</svg></span>
																
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
																<!--begin::Svg Icon | path: https://preview.keenthemes.com/metronic8/demo7/assets/media/icons/duotone/General/Bookmark.svg-->
																<span class="svg-icon svg-icon-2"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
																	<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
																		<rect x="0" y="0" width="24" height="24"/>
																		<path d="M8,4 L16,4 C17.1045695,4 18,4.8954305 18,6 L18,17.726765 C18,18.2790497 17.5522847,18.726765 17,18.726765 C16.7498083,18.726765 16.5087052,18.6329798 16.3242754,18.4639191 L12.6757246,15.1194142 C12.2934034,14.7689531 11.7065966,14.7689531 11.3242754,15.1194142 L7.67572463,18.4639191 C7.26860564,18.8371115 6.63603827,18.8096086 6.26284586,18.4024896 C6.09378519,18.2180598 6,17.9769566 6,17.726765 L6,6 C6,4.8954305 6.8954305,4 8,4 Z" fill="#000000"/>
																	</g>
																</svg></span>
																
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
																<!--begin::Svg Icon | path: https://preview.keenthemes.com/metronic8/demo7/assets/media/icons/duotone/General/Bookmark.svg-->
																<span class="svg-icon svg-icon-2"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
																	<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
																		<rect x="0" y="0" width="24" height="24"/>
																		<path d="M8,4 L16,4 C17.1045695,4 18,4.8954305 18,6 L18,17.726765 C18,18.2790497 17.5522847,18.726765 17,18.726765 C16.7498083,18.726765 16.5087052,18.6329798 16.3242754,18.4639191 L12.6757246,15.1194142 C12.2934034,14.7689531 11.7065966,14.7689531 11.3242754,15.1194142 L7.67572463,18.4639191 C7.26860564,18.8371115 6.63603827,18.8096086 6.26284586,18.4024896 C6.09378519,18.2180598 6,17.9769566 6,17.726765 L6,6 C6,4.8954305 6.8954305,4 8,4 Z" fill="#000000"/>
																	</g>
																</svg></span>
																
															</span>
															<span class="menu-title">Etiquetas</span>
														</a>
													</div>

												</div>
											</div>
										</div>
										@endif
										
										@if (Route::has('admin.shop.*'))
										<!--begin::Tab Ecommerce-->
										<div class="tab-pane fade" id="kt_aside_nav_tab_ecommerce" role="tabpanel">
											<div class="m-0">
												<!--begin::Header-->
												<h3 class="text-gray-800 fw-bold mb-6 mx-5">E-Commerce</h3>
											</div>

											<!--begin::Menu e-commerce-->
											<div class="menu menu-column menu-fit menu-rounded menu-title-gray-600 menu-icon-gray-400 menu-state-primary menu-state-icon-primary menu-state-bullet-primary menu-arrow-gray-500 fw-bold fs-5 px-6 my-5 my-lg-0" id="kt_aside_menu" data-kt-menu="true">
												<div id="" class="menu-fit">

													<!-- Home -->
													<div class="menu-item">
														<div class="menu-content pb-2">
															<span class="menu-section text-muted text-uppercase fs-8 ls-1">Inicio</span>
														</div>
													</div>
													<div class="menu-item">
														<a class="menu-link" href="#">
															<span class="menu-icon">
																<!--begin::Svg Icon | path: https://preview.keenthemes.com/metronic8/demo7/assets/media/icons/duotone/Interface/Image.svg-->
																<span class="svg-icon svg-icon-2"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
																<path opacity="0.25" d="M2.45153 5.94826C2.71842 4.12109 4.12109 2.71842 5.94826 2.45153C7.54228 2.21869 9.6618 2 12 2C14.3382 2 16.4577 2.21869 18.0517 2.45153C19.8789 2.71842 21.2816 4.12109 21.5485 5.94826C21.7813 7.54228 22 9.6618 22 12C22 14.3382 21.7813 16.4577 21.5485 18.0517C21.2816 19.8789 19.8789 21.2816 18.0517 21.5485C16.4577 21.7813 14.3382 22 12 22C9.6618 22 7.54228 21.7813 5.94826 21.5485C4.12109 21.2816 2.71842 19.8789 2.45153 18.0517C2.21869 16.4577 2 14.3382 2 12C2 9.6618 2.21869 7.54228 2.45153 5.94826Z" fill="#12131A"/>
																<path d="M8 10C9.10457 10 10 9.10457 10 8C10 6.89543 9.10457 6 8 6C6.89543 6 6 6.89543 6 8C6 9.10457 6.89543 10 8 10Z" fill="#12131A"/>
																<path d="M21.6642 17.2016C21.7024 16.8989 21.5962 16.5963 21.3805 16.3806L17.4143 12.4144C16.6332 11.6334 15.3669 11.6334 14.5858 12.4144L11.7072 15.2931C11.3166 15.6836 10.6835 15.6836 10.293 15.2931L9.41427 14.4144C8.63322 13.6334 7.36689 13.6334 6.58584 14.4144L2.93337 18.0669C2.68517 18.3151 2.57669 18.679 2.70674 19.005C3.24439 20.3529 4.45448 21.3303 5.94832 21.5485C7.54234 21.7813 9.66186 22 12.0001 22C14.3383 22 16.4578 21.7813 18.0518 21.5485C19.879 21.2816 21.2816 19.8789 21.5485 18.0517C21.5878 17.7828 21.6267 17.499 21.6642 17.2016Z" fill="#12131A"/>
																</svg></span>
																
															</span>
															<span class="menu-title">Portada</span>
														</a>
													</div>
													<div class="menu-item">
														<div class="menu-content pt-8 pb-2">
															<span class="menu-section text-muted text-uppercase fs-8 ls-1">E-Commerce</span>
														</div>
													</div>
													<div class="menu-item">
														<a class="menu-link" href="#">
															<span class="menu-icon">
																<!--begin::Svg Icon | path: https://preview.keenthemes.com/metronic8/demo7/assets/media/icons/duotone/Shopping/Box3.svg-->
																<span class="svg-icon svg-icon-2"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
																	<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
																		<rect x="0" y="0" width="24" height="24"/>
																		<path d="M20.4061385,6.73606154 C20.7672665,6.89656288 21,7.25468437 21,7.64987309 L21,16.4115967 C21,16.7747638 20.8031081,17.1093844 20.4856429,17.2857539 L12.4856429,21.7301984 C12.1836204,21.8979887 11.8163796,21.8979887 11.5143571,21.7301984 L3.51435707,17.2857539 C3.19689188,17.1093844 3,16.7747638 3,16.4115967 L3,7.64987309 C3,7.25468437 3.23273352,6.89656288 3.59386153,6.73606154 L11.5938615,3.18050598 C11.8524269,3.06558805 12.1475731,3.06558805 12.4061385,3.18050598 L20.4061385,6.73606154 Z" fill="#000000" opacity="0.3"/>
																		<polygon fill="#000000" points="14.9671522 4.22441676 7.5999999 8.31727912 7.5999999 12.9056825 9.5999999 13.9056825 9.5999999 9.49408582 17.25507 5.24126912"/>
																	</g>
																</svg></span>
																
															</span>
															<span class="menu-title">Pedidos</span>
														</a>
													</div>
													<div class="menu-item">
														<a class="menu-link" href="#">
															<span class="menu-icon">
																<!--begin::Svg Icon | path: https://preview.keenthemes.com/metronic8/demo7/assets/media/icons/duotone/General/Bookmark.svg-->
																<span class="svg-icon svg-icon-2"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
																	<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
																		<rect x="0" y="0" width="24" height="24"/>
																		<path d="M8,4 L16,4 C17.1045695,4 18,4.8954305 18,6 L18,17.726765 C18,18.2790497 17.5522847,18.726765 17,18.726765 C16.7498083,18.726765 16.5087052,18.6329798 16.3242754,18.4639191 L12.6757246,15.1194142 C12.2934034,14.7689531 11.7065966,14.7689531 11.3242754,15.1194142 L7.67572463,18.4639191 C7.26860564,18.8371115 6.63603827,18.8096086 6.26284586,18.4024896 C6.09378519,18.2180598 6,17.9769566 6,17.726765 L6,6 C6,4.8954305 6.8954305,4 8,4 Z" fill="#000000"/>
																	</g>
																</svg></span>
																
															</span>
															<span class="menu-title">Categorias</span>
														</a>
													</div>
													<div class="menu-item">
														<a class="menu-link" href="#">
															<span class="menu-icon">
																<i class="fa fa-certificate"></i>
															</span>
															<span class="menu-title">Marcas</span>
														</a>
													</div>
													<div class="menu-item">
														<a class="menu-link" href="#">
															<span class="menu-icon">
																<i class="fa fa-transgender"></i>
															</span>
															<span class="menu-title">Género</span>
														</a>
													</div>
													<div class="menu-item">
														<a class="menu-link" href="#">
															<span class="menu-icon">
																<!--begin::Svg Icon | path: https://preview.keenthemes.com/metronic8/demo7/assets/media/icons/duotone/Shopping/Cart3.svg-->
																<span class="svg-icon svg-icon-2"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
																	<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
																		<rect x="0" y="0" width="24" height="24"/>
																		<path d="M12,4.56204994 L7.76822128,9.6401844 C7.4146572,10.0644613 6.7840925,10.1217854 6.3598156,9.76822128 C5.9355387,9.4146572 5.87821464,8.7840925 6.23177872,8.3598156 L11.2317787,2.3598156 C11.6315738,1.88006147 12.3684262,1.88006147 12.7682213,2.3598156 L17.7682213,8.3598156 C18.1217854,8.7840925 18.0644613,9.4146572 17.6401844,9.76822128 C17.2159075,10.1217854 16.5853428,10.0644613 16.2317787,9.6401844 L12,4.56204994 Z" fill="#000000" fill-rule="nonzero" opacity="0.3"/>
																		<path d="M3.5,9 L20.5,9 C21.0522847,9 21.5,9.44771525 21.5,10 C21.5,10.132026 21.4738562,10.2627452 21.4230769,10.3846154 L17.7692308,19.1538462 C17.3034221,20.271787 16.2111026,21 15,21 L9,21 C7.78889745,21 6.6965779,20.271787 6.23076923,19.1538462 L2.57692308,10.3846154 C2.36450587,9.87481408 2.60558331,9.28934029 3.11538462,9.07692308 C3.23725479,9.02614384 3.36797398,9 3.5,9 Z M12,17 C13.1045695,17 14,16.1045695 14,15 C14,13.8954305 13.1045695,13 12,13 C10.8954305,13 10,13.8954305 10,15 C10,16.1045695 10.8954305,17 12,17 Z" fill="#000000"/>
																	</g>
																</svg></span>
																
															</span>
															<span class="menu-title">Productos</span>
														</a>
													</div>

												</div>
											</div>
											
										</div>
										@endif

										@if (Route::has('admin.crm.*'))
										<!--begin::Tab CRM-->
										<div class="tab-pane fade" id="kt_aside_nav_tab_crm" role="tabpanel">
											<div class="m-0">
												<!--begin::Header-->
												<h3 class="text-gray-800 fw-bold mb-6 mx-5">CRM</h3>
											</div>

											<!--begin::Menu crm-->
											<div class="menu menu-column menu-fit menu-rounded menu-title-gray-600 menu-icon-gray-400 menu-state-primary menu-state-icon-primary menu-state-bullet-primary menu-arrow-gray-500 fw-bold fs-5 px-6 my-5 my-lg-0" id="kt_aside_menu" data-kt-menu="true">
												<div id="" class="menu-fit">

													<!-- Prospect -->
													<div class="menu-item">
														<div class="menu-content pb-2">
															<span class="menu-section text-muted text-uppercase fs-8 ls-1">Prospectos</span>
														</div>
													</div>
													<div class="menu-item">
														<a class="menu-link" href="#">
															<span class="menu-icon">
																<!--begin::Svg Icon | path: https://preview.keenthemes.com/metronic8/demo7/assets/media/icons/duotone/Interface/Image.svg-->
																<span class="svg-icon svg-icon-2"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
																<path opacity="0.25" d="M2.45153 5.94826C2.71842 4.12109 4.12109 2.71842 5.94826 2.45153C7.54228 2.21869 9.6618 2 12 2C14.3382 2 16.4577 2.21869 18.0517 2.45153C19.8789 2.71842 21.2816 4.12109 21.5485 5.94826C21.7813 7.54228 22 9.6618 22 12C22 14.3382 21.7813 16.4577 21.5485 18.0517C21.2816 19.8789 19.8789 21.2816 18.0517 21.5485C16.4577 21.7813 14.3382 22 12 22C9.6618 22 7.54228 21.7813 5.94826 21.5485C4.12109 21.2816 2.71842 19.8789 2.45153 18.0517C2.21869 16.4577 2 14.3382 2 12C2 9.6618 2.21869 7.54228 2.45153 5.94826Z" fill="#12131A"/>
																<path d="M8 10C9.10457 10 10 9.10457 10 8C10 6.89543 9.10457 6 8 6C6.89543 6 6 6.89543 6 8C6 9.10457 6.89543 10 8 10Z" fill="#12131A"/>
																<path d="M21.6642 17.2016C21.7024 16.8989 21.5962 16.5963 21.3805 16.3806L17.4143 12.4144C16.6332 11.6334 15.3669 11.6334 14.5858 12.4144L11.7072 15.2931C11.3166 15.6836 10.6835 15.6836 10.293 15.2931L9.41427 14.4144C8.63322 13.6334 7.36689 13.6334 6.58584 14.4144L2.93337 18.0669C2.68517 18.3151 2.57669 18.679 2.70674 19.005C3.24439 20.3529 4.45448 21.3303 5.94832 21.5485C7.54234 21.7813 9.66186 22 12.0001 22C14.3383 22 16.4578 21.7813 18.0518 21.5485C19.879 21.2816 21.2816 19.8789 21.5485 18.0517C21.5878 17.7828 21.6267 17.499 21.6642 17.2016Z" fill="#12131A"/>
																</svg></span>
																
															</span>
															<span class="menu-title">Portada</span>
														</a>
													</div>
													<div class="menu-item">
														<div class="menu-content pt-8 pb-2">
															<span class="menu-section text-muted text-uppercase fs-8 ls-1">E-Commerce</span>
														</div>
													</div>
													<div class="menu-item">
														<a class="menu-link" href="#">
															<span class="menu-icon">
																<!--begin::Svg Icon | path: https://preview.keenthemes.com/metronic8/demo7/assets/media/icons/duotone/Shopping/Box3.svg-->
																<span class="svg-icon svg-icon-2"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
																	<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
																		<rect x="0" y="0" width="24" height="24"/>
																		<path d="M20.4061385,6.73606154 C20.7672665,6.89656288 21,7.25468437 21,7.64987309 L21,16.4115967 C21,16.7747638 20.8031081,17.1093844 20.4856429,17.2857539 L12.4856429,21.7301984 C12.1836204,21.8979887 11.8163796,21.8979887 11.5143571,21.7301984 L3.51435707,17.2857539 C3.19689188,17.1093844 3,16.7747638 3,16.4115967 L3,7.64987309 C3,7.25468437 3.23273352,6.89656288 3.59386153,6.73606154 L11.5938615,3.18050598 C11.8524269,3.06558805 12.1475731,3.06558805 12.4061385,3.18050598 L20.4061385,6.73606154 Z" fill="#000000" opacity="0.3"/>
																		<polygon fill="#000000" points="14.9671522 4.22441676 7.5999999 8.31727912 7.5999999 12.9056825 9.5999999 13.9056825 9.5999999 9.49408582 17.25507 5.24126912"/>
																	</g>
																</svg></span>
																
															</span>
															<span class="menu-title">Pedidos</span>
														</a>
													</div>
													<div class="menu-item">
														<a class="menu-link" href="#">
															<span class="menu-icon">
																<!--begin::Svg Icon | path: https://preview.keenthemes.com/metronic8/demo7/assets/media/icons/duotone/General/Bookmark.svg-->
																<span class="svg-icon svg-icon-2"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
																	<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
																		<rect x="0" y="0" width="24" height="24"/>
																		<path d="M8,4 L16,4 C17.1045695,4 18,4.8954305 18,6 L18,17.726765 C18,18.2790497 17.5522847,18.726765 17,18.726765 C16.7498083,18.726765 16.5087052,18.6329798 16.3242754,18.4639191 L12.6757246,15.1194142 C12.2934034,14.7689531 11.7065966,14.7689531 11.3242754,15.1194142 L7.67572463,18.4639191 C7.26860564,18.8371115 6.63603827,18.8096086 6.26284586,18.4024896 C6.09378519,18.2180598 6,17.9769566 6,17.726765 L6,6 C6,4.8954305 6.8954305,4 8,4 Z" fill="#000000"/>
																	</g>
																</svg></span>
																
															</span>
															<span class="menu-title">Categorias</span>
														</a>
													</div>
													<div class="menu-item">
														<a class="menu-link" href="#">
															<span class="menu-icon">
																<i class="fa fa-certificate"></i>
															</span>
															<span class="menu-title">Marcas</span>
														</a>
													</div>
													<div class="menu-item">
														<a class="menu-link" href="#">
															<span class="menu-icon">
																<i class="fa fa-transgender"></i>
															</span>
															<span class="menu-title">Género</span>
														</a>
													</div>
													<div class="menu-item">
														<a class="menu-link" href="#">
															<span class="menu-icon">
																<!--begin::Svg Icon | path: https://preview.keenthemes.com/metronic8/demo7/assets/media/icons/duotone/Shopping/Cart3.svg-->
																<span class="svg-icon svg-icon-2"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
																	<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
																		<rect x="0" y="0" width="24" height="24"/>
																		<path d="M12,4.56204994 L7.76822128,9.6401844 C7.4146572,10.0644613 6.7840925,10.1217854 6.3598156,9.76822128 C5.9355387,9.4146572 5.87821464,8.7840925 6.23177872,8.3598156 L11.2317787,2.3598156 C11.6315738,1.88006147 12.3684262,1.88006147 12.7682213,2.3598156 L17.7682213,8.3598156 C18.1217854,8.7840925 18.0644613,9.4146572 17.6401844,9.76822128 C17.2159075,10.1217854 16.5853428,10.0644613 16.2317787,9.6401844 L12,4.56204994 Z" fill="#000000" fill-rule="nonzero" opacity="0.3"/>
																		<path d="M3.5,9 L20.5,9 C21.0522847,9 21.5,9.44771525 21.5,10 C21.5,10.132026 21.4738562,10.2627452 21.4230769,10.3846154 L17.7692308,19.1538462 C17.3034221,20.271787 16.2111026,21 15,21 L9,21 C7.78889745,21 6.6965779,20.271787 6.23076923,19.1538462 L2.57692308,10.3846154 C2.36450587,9.87481408 2.60558331,9.28934029 3.11538462,9.07692308 C3.23725479,9.02614384 3.36797398,9 3.5,9 Z M12,17 C13.1045695,17 14,16.1045695 14,15 C14,13.8954305 13.1045695,13 12,13 C10.8954305,13 10,13.8954305 10,15 C10,16.1045695 10.8954305,17 12,17 Z" fill="#000000"/>
																	</g>
																</svg></span>
																
															</span>
															<span class="menu-title">Productos</span>
														</a>
													</div>

												</div>
											</div>
											
										</div>
										@endif
										
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
								</div>
							</div>
						</div>
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
						
					</button>
					
				</div>
				
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
								<!--begin::Breadcrumb-->
								<ul class="breadcrumb fw-bold fs-base my-1">
									<li class="breadcrumb-item text-muted">
										<a href="#" class="text-muted">Inicio</a>
									</li>
									<li class="breadcrumb-item text-dark">Default</li>
								</ul>
							</div>
							
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
								</div>
								<!--begin::Logo-->
								<a href="../../demo7/dist/index.html" class="d-flex align-items-center">
									<img alt="Logo" src="https://rigo42.github.io/company/images/logo2.png" class="h-30px" />
								</a>
							</div>
							
						</div>
					</div>

					<!--begin::Content-->
					<div class="content d-flex flex-column flex-column-fluid" id="kt_content">
						<!--begin::Container-->
						<div class="container" id="kt_content_container">
							Content page
						</div>
					</div>
					
					<!--begin::Footer-->
					<div class="footer py-4 d-flex flex-lg-column" id="kt_footer">
						<!--begin::Container-->
						<div class="container d-flex flex-column flex-md-row flex-stack">
							<!--begin::Copyright-->
							<div class="text-dark order-2 order-md-1">
								<span class="text-gray-400 fw-bold me-1">Created by</span>
								<a href="https://keenthemes.com" target="_blank" class="text-muted text-hover-primary fw-bold me-2 fs-6">Keenthemes</a>
							</div>
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
						</div>
					</div>
				</div>
			</div>
		</div>
		
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
		</div>

		<!--begin::Global Javascript Bundle(used by all pages)-->
		<script src="{{ asset('assets/admin') }}/plugins/global/plugins.bundle.js"></script>
		<script src="{{ asset('assets/admin') }}/js/scripts.bundle.js"></script>
		
		<!--begin::Page Custom Javascript(used by this page)-->
		<script src="{{ asset('assets/admin') }}/js/custom/widgets.js"></script>
	
	</body>
</html>