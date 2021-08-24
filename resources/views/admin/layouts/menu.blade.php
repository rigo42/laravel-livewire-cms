<!--begin::Aside menu-->
<div class="aside-menu flex-column-fluid">
    <!--begin::Aside Menu-->
    <div class="hover-scroll-overlay-y my-5 my-lg-5" id="kt_aside_menu_wrapper" data-kt-scroll="true" data-kt-scroll-activate="{default: false, lg: true}" data-kt-scroll-height="auto" data-kt-scroll-dependencies="#kt_aside_logo, #kt_aside_footer" data-kt-scroll-wrappers="#kt_aside_menu" data-kt-scroll-offset="0">
        <!--begin::Menu-->
        <div class="menu menu-column menu-title-gray-800 menu-state-title-primary menu-state-icon-primary menu-state-bullet-primary menu-arrow-gray-500" id="#kt_aside_menu" data-kt-menu="true">
            <!-- Dashboard -->
            <div class="menu-item">
                <div class="menu-content pb-2">
                    <span class="menu-section text-muted text-uppercase fs-8 ls-1">Dashboard</span>
                </div>
            </div>
            <div class="menu-item">
                <a class="menu-link {{ active('admin.dashboard.*') }}" href="{{ route('admin.dashboard.index') }}">
                    <span class="menu-icon">
                        <i class="fab fa-buffer"></i>
                    </span>
                    <span class="menu-title">General</span>
                </a>
            </div>
            
            @if (Route::has('admin.team.index') || Route::has('admin.client.index'))
                <!-- About -->
                <div class="menu-item">
                    <div class="menu-content pt-8 pb-2">
                        <span class="menu-section text-muted text-uppercase fs-8 ls-1">Nosotros</span>
                    </div>
                </div>
                @if (Route::has('admin.team.index'))
                    <div class="menu-item">
                        <a class="menu-link {{ active('admin.team.*') }}" href="{{ route('admin.team.index') }}">
                            <span class="menu-icon">
                                <i class="fa fa-users"></i>
                            </span>
                            <span class="menu-title">Equipo</span>
                        </a>
                    </div>
                @endif
                @if (Route::has('admin.client.index'))
                <div class="menu-item">
                    <a class="menu-link {{ active('admin.client.*') }}" href="{{ route('admin.client.index') }}">
                        <span class="menu-icon">
                            <i class="fa fa-users"></i>
                        </span>
                        <span class="menu-title">Clientes</span>
                    </a>
                </div>
                @endif
            @endif

            @if (Route::has('admin.service.index'))
                <!-- Services -->
                <div class="menu-item">
                    <div class="menu-content pt-8 pb-2">
                        <span class="menu-section text-muted text-uppercase fs-8 ls-1">Servicios</span>
                    </div>
                </div>
                <div class="menu-item">
                    <a class="menu-link {{ active('admin.service.*') }}" href="{{ route('admin.service.index') }}">
                        <span class="menu-icon">
                            <i class="fa fa-star"></i>
                        </span>
                        <span class="menu-title">Servicios</span>
                    </a>
                </div>
            @endif

            @if (Route::has('admin.portfolio.index'))
            <!-- Portfolio -->
            <div class="menu-item">
                <div class="menu-content pt-8 pb-2">
                    <span class="menu-section text-muted text-uppercase fs-8 ls-1">Portafolio</span>
                </div>
            </div>
            <div class="menu-item">
                <a class="menu-link {{ active('admin.portfolio.*') }}" href="{{ route('admin.portfolio.index') }}">
                    <span class="menu-icon">
                        <i class="fa fa-briefcase"></i>
                    </span>
                    <span class="menu-title">Portafolio</span>
                </a>
            </div>
            @endif
            
            @if (Route::has('admin.contact.index'))
            <!-- Contact -->
            <div class="menu-item">
                <div class="menu-content pt-8 pb-2">
                    <span class="menu-section text-muted text-uppercase fs-8 ls-1">Contacto</span>
                </div>
            </div>
            <div class="menu-item">
                <a class="menu-link {{ active('admin.contact.*') }}" href="{{ route('admin.contact.index') }}">
                    <span class="menu-icon">
                        <i class="fa fa-envelope"></i>
                    </span>
                    <span class="menu-title">Contacto</span>
                </a>
            </div>
            @endif

            @if (Route::has('admin.blog.index') || Route::has('admin.blog-category.index') || Route::has('admin.blog-tag.index'))
                <!-- Blog -->
                <div class="menu-item">
                    <div class="menu-content pt-8 pb-2">
                        <span class="menu-section text-muted text-uppercase fs-8 ls-1">Blog</span>
                    </div>
                </div>
                @if (Route::has('admin.blog-category.index')) 
                    <div class="menu-item">
                        <a class="menu-link {{ active('admin.blog-category.*') }}" href="{{ route('admin.blog-category.index') }}">
                            <span class="menu-icon">
                                <i class="fa fa-bookmark"></i>
                            </span>
                            <span class="menu-title">Categorías</span>
                        </a>
                    </div>
                @endif
                @if (Route::has('admin.blog-tag.index'))
                    <div class="menu-item">
                        <a class="menu-link {{ active('admin.blog-tag.*') }}" href="{{ route('admin.blog-tag.index') }}">
                            <span class="menu-icon">
                                <i class="fa fa-tags"></i>
                            </span>
                            <span class="menu-title">Etiquetas</span>
                        </a>
                    </div>
                @endif
                @if (Route::has('admin.blog.index'))
                    <div class="menu-item">
                        <a class="menu-link {{ active('admin.blog.*') }}" href="{{ route('admin.blog.index') }}">
                            <span class="menu-icon">
                                <i class="fa fa-book"></i>
                            </span>
                            <span class="menu-title">Blogs</span>
                        </a>
                    </div>
                @endif
            @endif

            <div data-kt-menu-trigger="click" class="menu-item menu-accordion">
                <span class="menu-link">
                    <span class="menu-icon">
                       <!--begin::Svg Icon | path: icons/duotone/General/Shield-protected.svg-->
                        <span class="svg-icon svg-icon-2">
                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                    <rect x="0" y="0" width="24" height="24"></rect>
                                    <path d="M4,4 L11.6314229,2.5691082 C11.8750185,2.52343403 12.1249815,2.52343403 12.3685771,2.5691082 L20,4 L20,13.2830094 C20,16.2173861 18.4883464,18.9447835 16,20.5 L12.5299989,22.6687507 C12.2057287,22.8714196 11.7942713,22.8714196 11.4700011,22.6687507 L8,20.5 C5.51165358,18.9447835 4,16.2173861 4,13.2830094 L4,4 Z" fill="#000000" opacity="0.3"></path>
                                    <path d="M14.5,11 C15.0522847,11 15.5,11.4477153 15.5,12 L15.5,15 C15.5,15.5522847 15.0522847,16 14.5,16 L9.5,16 C8.94771525,16 8.5,15.5522847 8.5,15 L8.5,12 C8.5,11.4477153 8.94771525,11 9.5,11 L9.5,10.5 C9.5,9.11928813 10.6192881,8 12,8 C13.3807119,8 14.5,9.11928813 14.5,10.5 L14.5,11 Z M12,9 C11.1715729,9 10.5,9.67157288 10.5,10.5 L10.5,11 L13.5,11 L13.5,10.5 C13.5,9.67157288 12.8284271,9 12,9 Z" fill="#000000"></path>
                                </g>
                            </svg>
                        </span>
                        <!--end::Svg Icon-->
                    </span>
                    <span class="menu-title">Gestor de usuarios</span>
                    <span class="menu-arrow"></span>
                </span>
                <div class="menu-sub menu-sub-accordion">
                    @can('usuarios')
                    <div class="menu-item">
                        <a class="menu-link {{ active('admin.user.*') }}" href="{{ route('admin.user.index') }}">
                            <span class="menu-bullet">
                                <span class="bullet bullet-dot"></span>
                            </span>
                            <span class="menu-title">Usuarios</span>
                        </a>
                    </div>
                    @endcan
                    @can('ajustes')
                    <div class="menu-item">
                        <a class="menu-link {{ active('admin.role.*') }}" href="{{ route('admin.role.index') }}">
                            <span class="menu-bullet">
                                <span class="bullet bullet-dot"></span>
                            </span>
                            <span class="menu-title">Roles</span>
                        </a>
                    </div>
                    <div class="menu-item">
                        <a class="menu-link {{ active('admin.permission.*') }}" href="{{ route('admin.permission.index') }}">
                            <span class="menu-bullet">
                                <span class="bullet bullet-dot"></span>
                            </span>
                            <span class="menu-title">Permisos</span>
                        </a>
                    </div>
                    @endcan
                </div>
            </div>

        </div>
        <!--end::Menu-->
    </div>
    <!--end::Aside Menu-->
</div>