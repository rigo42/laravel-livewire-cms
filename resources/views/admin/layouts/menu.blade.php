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
                <a class="menu-link {{ active('admin.dashboard.index') }}" href="{{ route('admin.dashboard.index') }}">
                    <span class="menu-icon">
                        <i class="fab fa-buffer"></i>
                    </span>
                    <span class="menu-title">General</span>
                </a>
            </div>
            
            <!-- About -->
            <div class="menu-item">
                <div class="menu-content pt-8 pb-2">
                    <span class="menu-section text-muted text-uppercase fs-8 ls-1">Nosotros</span>
                </div>
            </div>
            <div class="menu-item">
                <a class="menu-link {{ active('admin.team.index') }}" href="{{ route('admin.team.index') }}">
                    <span class="menu-icon">
                        <i class="fa fa-users"></i>
                    </span>
                    <span class="menu-title">Equipo</span>
                </a>
            </div>
            <div class="menu-item">
                <a class="menu-link {{ active('admin.client.index') }}" href="{{ route('admin.client.index') }}">
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
                <a class="menu-link {{ active('admin.service.index') }}" href="{{ route('admin.service.index') }}">
                    <span class="menu-icon">
                        <i class="fa fa-star"></i>
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
                <a class="menu-link {{ active('admin.evidence.index') }}" href="{{ route('admin.evidence.index') }}">
                    <span class="menu-icon">
                        <i class="fa fa-briefcase"></i>
                    </span>
                    <span class="menu-title">Evidencias</span>
                </a>
            </div>
            
            <!-- Contact -->
            <div class="menu-item">
                <div class="menu-content pt-8 pb-2">
                    <span class="menu-section text-muted text-uppercase fs-8 ls-1">Contacto</span>
                </div>
            </div>
            <div class="menu-item">
                <a class="menu-link {{ active('admin.contact.index') }}" href="{{ route('admin.contact.index') }}">
                    <span class="menu-icon">
                        <i class="fa fa-envelope"></i>
                    </span>
                    <span class="menu-title">Contacto</span>
                </a>
            </div>

             <!-- Blog -->
             <div class="menu-item">
                <div class="menu-content pt-8 pb-2">
                    <span class="menu-section text-muted text-uppercase fs-8 ls-1">Blog</span>
                </div>
            </div>
            <div class="menu-item">
                <a class="menu-link {{ active('admin.blog-category.index') }}" href="{{ route('admin.blog-category.index') }}">
                    <span class="menu-icon">
                        <i class="fa fa-bookmark"></i>
                    </span>
                    <span class="menu-title">Categorías</span>
                </a>
            </div>
            <div class="menu-item">
                <a class="menu-link {{ active('admin.blog-tag.index') }}" href="{{ route('admin.blog-tag.index') }}">
                    <span class="menu-icon">
                        <i class="fa fa-tags"></i>
                    </span>
                    <span class="menu-title">Etiquetas</span>
                </a>
            </div>
            <div class="menu-item">
                <a class="menu-link {{ active('admin.blog.index') }}" href="{{ route('admin.blog.index') }}">
                    <span class="menu-icon">
                        <i class="fa fa-book"></i>
                    </span>
                    <span class="menu-title">Blogs</span>
                </a>
            </div>

        </div>
        <!--end::Menu-->
    </div>
    <!--end::Aside Menu-->
</div>