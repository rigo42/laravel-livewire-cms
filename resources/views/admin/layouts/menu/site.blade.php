@if (!Route::has('admin.site.*'))
<!--begin::Website-->
<div class="tab-pane fade active show" id="kt_aside_nav_tab_website" role="tabpanel">
    <div class="m-0">
        <!--begin::Header-->
        <h3 class="text-gray-800 fw-bold mb-6 mx-5">Sitio web</h3>
    </div>

    <!--begin::Menu site web-->
    <div class="menu menu-column menu-fit menu-rounded menu-title-gray-600 menu-icon-gray-400 menu-state-primary menu-state-icon-primary menu-state-bullet-primary menu-arrow-gray-500 fw-bold fs-5 px-6 my-5 my-lg-0" id="kt_aside_menu" data-kt-menu="true">
        <div id="" class="menu-fit">

            <div class="menu-item">
                <a class="menu-link {{ active('admin.site.welcome') }}" href="#">
                    <span class="menu-icon">
                       <!--begin::Svg Icon | path: assets/media/icons/duotone/Home/Home2.svg-->
                       <span class="svg-icon svg-icon-2 "><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                        <path d="M21.4622 10.699C21.4618 10.6986 21.4613 10.6981 21.4609 10.6977L13.3016 2.53955C12.9538 2.19165 12.4914 2 11.9996 2C11.5078 2 11.0454 2.1915 10.6974 2.5394L2.54246 10.6934C2.53971 10.6961 2.53696 10.699 2.53422 10.7018C1.82003 11.42 1.82125 12.5853 2.53773 13.3017C2.86506 13.6292 3.29739 13.8188 3.75962 13.8387C3.77839 13.8405 3.79732 13.8414 3.81639 13.8414H4.14159V19.8453C4.14159 21.0334 5.10833 22 6.29681 22H9.48897C9.81249 22 10.075 21.7377 10.075 21.4141V16.707C10.075 16.1649 10.516 15.7239 11.0582 15.7239H12.941C13.4832 15.7239 13.9242 16.1649 13.9242 16.707V21.4141C13.9242 21.7377 14.1866 22 14.5102 22H17.7024C18.8909 22 19.8576 21.0334 19.8576 19.8453V13.8414H20.1592C20.6508 13.8414 21.1132 13.6499 21.4613 13.302C22.1786 12.5844 22.1789 11.4171 21.4622 10.699V10.699Z" fill="#00B2FF"/>
                        </svg></span>
                        <!--end::Svg Icon-->
                    </span>
                    <span class="menu-title">Bienvenido</span>
                </a>
            </div>   
            
            <!-- About -->
            <div class="menu-item">
                <div class="menu-content pb-2">
                    <span class="menu-section text-muted text-uppercase fs-8 ls-1">Nosotros</span>
                </div>
            </div>
            <div class="menu-item">
                <a class="menu-link {{ active('admin.site.about-info.index') }}" href="#">
                    <span class="menu-icon">
                        <!--begin::Svg Icon | path: https://preview.keenthemes.com/metronic8/demo7/assets/media/icons/duotone/Layout/Layout-top-panel-6.svg-->
                        <span class="svg-icon svg-icon-2 "><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                            <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                <rect x="0" y="0" width="24" height="24"/>
                                <rect fill="#000000" x="2" y="5" width="19" height="4" rx="1"/>
                                <rect fill="#000000" opacity="0.3" x="2" y="11" width="19" height="10" rx="1"/>
                            </g>
                        </svg></span>
                        
                    </span>
                    <span class="menu-title">Información general</span>
                </a>
            </div>
            <div class="menu-item ">
                <a class="menu-link {{ active('admin.site.about-team.index') }}" href="#">
                    <span class="menu-icon">
                        <i class="fa fa-users"></i>
                    </span>
                    <span class="menu-title">Equipo</span>
                </a>
            </div>
            <div class="menu-item">
                <a class="menu-link {{ active('admin.site.about-client.index') }}" href="#">
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
                <a class="menu-link {{ active('admin.site.service-info.index') }}" href="#">
                    <span class="menu-icon">
                        <!--begin::Svg Icon | path: https://preview.keenthemes.com/metronic8/demo7/assets/media/icons/duotone/Layout/Layout-top-panel-6.svg-->
                        <span class="svg-icon svg-icon-2 "><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                            <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                <rect x="0" y="0" width="24" height="24"/>
                                <rect fill="#000000" x="2" y="5" width="19" height="4" rx="1"/>
                                <rect fill="#000000" opacity="0.3" x="2" y="11" width="19" height="10" rx="1"/>
                            </g>
                        </svg></span>
                        
                    </span>
                    <span class="menu-title">Información general</span>
                </a>
            </div>
            <div class="menu-item">
                <a class="menu-link {{ active('admin.site.service.index') }}" href="#">
                    <span class="menu-icon">
                        <!--begin::Svg Icon | path: https://preview.keenthemes.com/metronic8/demo7/assets/media/icons/duotone/Code/Thunder-circle.svg-->
                        <span class="svg-icon svg-icon-2 "><svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
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
                <a class="menu-link {{ active('admin.site.portfolio-info.index') }}" href="#">
                    <span class="menu-icon">
                        <!--begin::Svg Icon | path: https://preview.keenthemes.com/metronic8/demo7/assets/media/icons/duotone/Layout/Layout-top-panel-6.svg-->
                        <span class="svg-icon svg-icon-2 "><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                            <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                <rect x="0" y="0" width="24" height="24"/>
                                <rect fill="#000000" x="2" y="5" width="19" height="4" rx="1"/>
                                <rect fill="#000000" opacity="0.3" x="2" y="11" width="19" height="10" rx="1"/>
                            </g>
                        </svg></span>
                        
                    </span>
                    <span class="menu-title">Información general</span>
                </a>
            </div>
            <div class="menu-item">
                <a class="menu-link  {{ active('admin.site.portfolio.index') }}" href="#">
                    <span class="menu-icon">
                        <!--begin::Svg Icon | path: https://preview.keenthemes.com/metronic8/demo7/assets/media/icons/duotone/Clothes/Briefcase.svg-->
                        <span class="svg-icon svg-icon-2 "><svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
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
                <a class="menu-link {{ active('admin.site.contact-info.index') }}" href="#">
                    <span class="menu-icon">
                        <!--begin::Svg Icon | path: https://preview.keenthemes.com/metronic8/demo7/assets/media/icons/duotone/Layout/Layout-top-panel-6.svg-->
                        <span class="svg-icon svg-icon-2 "><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                            <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                <rect x="0" y="0" width="24" height="24"/>
                                <rect fill="#000000" x="2" y="5" width="19" height="4" rx="1"/>
                                <rect fill="#000000" opacity="0.3" x="2" y="11" width="19" height="10" rx="1"/>
                            </g>
                        </svg></span>
                        
                    </span>
                    <span class="menu-title">Información general</span>
                </a>
            </div>

        </div>
    </div>
</div>
@endif