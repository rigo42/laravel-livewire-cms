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

            @if (Route::has('admin.user.index'))
                <!-- Contact -->
                <div class="menu-item">
                    <div class="menu-content pt-8 pb-2">
                        <span class="menu-section text-muted text-uppercase fs-8 ls-1">Usuarios</span>
                    </div>
                </div>
                <div class="menu-item">
                    <a class="menu-link {{ active('admin.user.*') }}" href="{{ route('admin.user.index') }}">
                        <span class="menu-icon">
                            <i class="fa fa-users"></i>
                        </span>
                        <span class="menu-title">Usuarios</span>
                    </a>
                </div>
            @endif

        </div>
        <!--end::Menu-->
    </div>
    <!--end::Aside Menu-->
</div>