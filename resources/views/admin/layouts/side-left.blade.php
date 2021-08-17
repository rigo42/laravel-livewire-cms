<!--begin::Primary-->
<div class="aside-primary d-flex flex-column align-items-lg-center flex-row-auto">
    <!--begin::Logo-->
    <div class="aside-logo d-none d-lg-flex flex-column align-items-center flex-column-auto py-10" id="kt_aside_logo">
        <a href="{{ route('admin.site.welcome') }}">
            <img alt="Logo" src="{{ config('app.logo') }}" class="h-35px" />
        </a>
    </div>
    
    <!--begin::Nav-->
    <div class="aside-nav d-flex flex-column align-items-center flex-column-fluid w-100 pt-5 pt-lg-0" id="kt_aside_nav">
        
        <!--begin::Wrapper-->
        <div class="hover-scroll-y mb-10" data-kt-scroll="true" data-kt-scroll-activate="{default: false, lg: true}" data-kt-scroll-height="auto" data-kt-scroll-wrappers="#kt_aside_nav" data-kt-scroll-dependencies="#kt_aside_logo, #kt_aside_footer" data-kt-scroll-offset="0px">
            <!--begin::Nav-->
            <ul class="nav flex-column">

                @if (!Route::has('admin.site.*'))
                <!--begin::Site web-->
                <li class="nav-item mb-2" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-placement="right" data-bs-dismiss="click" title="Sitio web">
                    <!--begin::Nav link-->
                    <a class="{{ active('admin.site.*') }} nav-link btn btn-icon btn-active-color-primary btn-color-gray-400 btn-active-light" data-bs-toggle="tab" href="#kt_aside_nav_tab_website">
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
                </li>
                @endif

                @if (!Route::has('admin.blog.*'))
                <!--begin::Blogs-->
                <li class="nav-item mb-2" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-placement="right" data-bs-dismiss="click" title="Blogs">
                    <!--begin::Nav link-->
                    <a class="{{ active('admin.blog.*') }} nav-link btn btn-icon btn-active-color-primary btn-color-gray-400 btn-active-light" data-bs-toggle="tab" href="#kt_aside_nav_tab_blog">
                        <!--begin::Svg Icon | path: https://preview.keenthemes.com/metronic8/demo7/assets/media/icons/duotone/Home/Book-open.svg-->
                        <span class="svg-icon svg-icon-2"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                            <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                <rect x="0" y="0" width="24" height="24"/>
                                <path d="M13.6855025,18.7082217 C15.9113859,17.8189707 18.682885,17.2495635 22,17 C22,16.9325178 22,13.1012863 22,5.50630526 L21.9999762,5.50630526 C21.9999762,5.23017604 21.7761292,5.00632908 21.5,5.00632908 C21.4957817,5.00632908 21.4915635,5.00638247 21.4873465,5.00648922 C18.658231,5.07811173 15.8291155,5.74261533 13,7 C13,7.04449645 13,10.79246 13,18.2438906 L12.9999854,18.2438906 C12.9999854,18.520041 13.2238496,18.7439052 13.5,18.7439052 C13.5635398,18.7439052 13.6264972,18.7317946 13.6855025,18.7082217 Z" fill="#000000"/>
                                <path d="M10.3144829,18.7082217 C8.08859955,17.8189707 5.31710038,17.2495635 1.99998542,17 C1.99998542,16.9325178 1.99998542,13.1012863 1.99998542,5.50630526 L2.00000925,5.50630526 C2.00000925,5.23017604 2.22385621,5.00632908 2.49998542,5.00632908 C2.50420375,5.00632908 2.5084219,5.00638247 2.51263888,5.00648922 C5.34175439,5.07811173 8.17086991,5.74261533 10.9999854,7 C10.9999854,7.04449645 10.9999854,10.79246 10.9999854,18.2438906 L11,18.2438906 C11,18.520041 10.7761358,18.7439052 10.4999854,18.7439052 C10.4364457,18.7439052 10.3734882,18.7317946 10.3144829,18.7082217 Z" fill="#000000" opacity="0.3"/>
                            </g>
                        </svg></span>
                        
                    </a>
                </li>
                @endif


                @if (!Route::has('admin.shop.*'))
                <!--begin::E-commerce-->
                <li class="nav-item mb-2" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-placement="right" data-bs-dismiss="click" title="E-commerce">
                    <!--begin::Nav link-->
                    <a class="{{ active('admin.shop.*') }} nav-link btn btn-icon btn-active-color-primary btn-color-gray-400 btn-active-light" data-bs-toggle="tab" href="#kt_aside_nav_tab_ecommerce">
                        <!--begin::Svg Icon | path: https://preview.keenthemes.com/metronic8/demo7/assets/media/icons/duotone/Shopping/Cart1.svg-->
                        <span class="svg-icon svg-icon-2"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                            <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                <rect x="0" y="0" width="24" height="24"/>
                                <path d="M18.1446364,11.84388 L17.4471627,16.0287218 C17.4463569,16.0335568 17.4455155,16.0383857 17.4446387,16.0432083 C17.345843,16.5865846 16.8252597,16.9469884 16.2818833,16.8481927 L4.91303792,14.7811299 C4.53842737,14.7130189 4.23500006,14.4380834 4.13039941,14.0719812 L2.30560137,7.68518803 C2.28007524,7.59584656 2.26712532,7.50338343 2.26712532,7.4104669 C2.26712532,6.85818215 2.71484057,6.4104669 3.26712532,6.4104669 L16.9929851,6.4104669 L17.606173,3.78251876 C17.7307772,3.24850086 18.2068633,2.87071314 18.7552257,2.87071314 L20.8200821,2.87071314 C21.4717328,2.87071314 22,3.39898039 22,4.05063106 C22,4.70228173 21.4717328,5.23054898 20.8200821,5.23054898 L19.6915238,5.23054898 L18.1446364,11.84388 Z" fill="#000000" opacity="0.3"/>
                                <path d="M6.5,21 C5.67157288,21 5,20.3284271 5,19.5 C5,18.6715729 5.67157288,18 6.5,18 C7.32842712,18 8,18.6715729 8,19.5 C8,20.3284271 7.32842712,21 6.5,21 Z M15.5,21 C14.6715729,21 14,20.3284271 14,19.5 C14,18.6715729 14.6715729,18 15.5,18 C16.3284271,18 17,18.6715729 17,19.5 C17,20.3284271 16.3284271,21 15.5,21 Z" fill="#000000"/>
                            </g>
                        </svg></span>
                        
                    </a>
                </li>
                @endif


                @if (!Route::has('admin.crm.*'))
                <!--begin::CRM-->
                <li class="nav-item mb-2" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-placement="right" data-bs-dismiss="click" title="CRM">
                    <!--begin::Nav link-->
                    <a class="{{ active('admin.crm.*') }} nav-link btn btn-icon btn-active-color-primary btn-color-gray-400 btn-active-light" data-bs-toggle="tab" href="#kt_aside_nav_tab_crm">
                        <span class="svg-icon svg-icon-2">
                             <!--begin::Svg Icon | path: https://preview.keenthemes.com/metronic8/demo7/assets/media/icons/duotone/Shopping/Chart.svg-->
                            <span class="svg-icon svg-icon-2"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                <path d="M15.7632 15.2206C15.4599 14.9148 14.9749 14.8913 14.6449 15.166C13.1591 16.3965 10.8415 16.3965 9.35567 15.166C9.02566 14.8913 8.54066 14.9148 8.23733 15.2206L5.29062 18.1907C5.12812 18.3537 5.04062 18.5763 5.04644 18.8073C5.05226 19.0374 5.15226 19.255 5.32226 19.4095C7.16478 21.0802 9.53649 22 11.9998 22C14.4632 22 16.8357 21.0802 18.6782 19.4095C18.8482 19.255 18.9474 19.0374 18.9541 18.8073C18.9599 18.5763 18.8716 18.3537 18.7099 18.1907L15.7632 15.2206Z" fill="#E4E6EF"/>
                                <path d="M7.90424 12.672C7.85592 12.4048 7.83342 12.1587 7.83342 11.9202C7.83342 10.1479 8.95012 8.55864 10.6118 7.96563C10.9443 7.84637 11.1668 7.52969 11.1668 7.17355V2.84096C11.1668 2.59149 11.0568 2.35461 10.8668 2.19503C10.6768 2.03545 10.4226 1.96907 10.1826 2.01443C5.44172 2.89388 2 7.06012 2 11.9202C2 13.5136 2.36582 15.0474 3.08919 16.4795C3.21001 16.7189 3.43838 16.8861 3.7017 16.9281C3.74502 16.9348 3.7892 16.9382 3.8317 16.9382C4.05088 16.9382 4.2642 16.8508 4.42089 16.692L7.67342 13.4145C7.86589 13.2196 7.95257 12.9424 7.90424 12.672Z" fill="#E4E6EF"/>
                                <path d="M13.8174 2.01438C13.5774 1.96819 13.3232 2.03454 13.1341 2.19499C12.9432 2.35457 12.8332 2.59144 12.8332 2.84008V7.17351C12.8332 7.52882 13.0557 7.84632 13.3882 7.96476C15.0499 8.55863 16.1666 10.1478 16.1666 11.9202C16.1666 12.1588 16.1441 12.4048 16.0958 12.672C16.0483 12.9424 16.1341 13.2196 16.3275 13.4136L19.5792 16.692C19.7367 16.8508 19.9492 16.9382 20.1683 16.9382C20.2117 16.9382 20.2558 16.9348 20.2983 16.9273C20.5625 16.8853 20.79 16.7181 20.9117 16.4787C21.6342 15.0474 22 13.5136 22 11.9202C22 7.05925 18.5583 2.89383 13.8174 2.01438Z" fill="#E4E6EF"/>
                                </svg></span>
                        </span>
                        
                    </a>
                </li>
                @endif
                
                <!--begin::Notifications-->
                <li class="nav-item mb-2" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-placement="right" data-bs-dismiss="click" title="Notifications">
                    <!--begin::Nav link-->
                    <a class="{{ active('admin.notifications.*') }} nav-link btn btn-icon btn-active-color-primary btn-color-gray-400 btn-active-light" data-bs-toggle="tab" href="#kt_aside_nav_tab_notifications">
                        <!--begin::Svg Icon | path: https://preview.keenthemes.com/metronic8/demo7/assets/media/icons/duotone/General/Notifications1.svg-->
                        <span class="svg-icon svg-icon-2"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                            <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                <path d="M17,12 L18.5,12 C19.3284271,12 20,12.6715729 20,13.5 C20,14.3284271 19.3284271,15 18.5,15 L5.5,15 C4.67157288,15 4,14.3284271 4,13.5 C4,12.6715729 4.67157288,12 5.5,12 L7,12 L7.5582739,6.97553494 C7.80974924,4.71225688 9.72279394,3 12,3 C14.2772061,3 16.1902508,4.71225688 16.4417261,6.97553494 L17,12 Z" fill="#000000"/>
                                <rect fill="#000000" opacity="0.3" x="10" y="16" width="4" height="4" rx="2"/>
                            </g>
                        </svg></span>
                        
                    </a>
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