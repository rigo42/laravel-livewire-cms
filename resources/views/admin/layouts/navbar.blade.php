<!--begin::Navbar-->
<div class="d-flex align-items-stretch" id="kt_header_nav">
    <!--begin::Menu wrapper-->
    <div class="header-menu align-items-stretch" data-kt-drawer="true" data-kt-drawer-name="header-menu" data-kt-drawer-activate="{default: true, lg: false}" data-kt-drawer-overlay="true" data-kt-drawer-width="{default:'200px', '300px': '250px'}" data-kt-drawer-direction="end" data-kt-drawer-toggle="#kt_header_menu_mobile_toggle" data-kt-swapper="true" data-kt-swapper-mode="prepend" data-kt-swapper-parent="{default: '#kt_body', lg: '#kt_header_nav'}">
        <!--begin::Menu-->
        <div class="menu menu-lg-rounded menu-column menu-lg-row menu-state-bg menu-title-gray-700 menu-state-title-primary menu-state-icon-primary menu-state-bullet-primary menu-arrow-gray-400 fw-bold my-5 my-lg-0 align-items-stretch" id="#kt_header_menu" data-kt-menu="true">
            <div class="menu-item me-lg-1">
                <a class="menu-link active py-3" href="{{ route('admin.dashboard.index') }}">
                    <span class="menu-title">Dashboard</span>
                </a>
            </div>
            
            <div data-kt-menu-trigger="click" data-kt-menu-placement="bottom-start" class="menu-item menu-lg-down-accordion me-lg-1">
                <span class="menu-link py-3">
                    <span class="menu-title">Nuevo</span>
                    <span class="menu-arrow d-lg-none"></span>
                </span>
                <div class="menu-sub menu-sub-lg-down-accordion menu-sub-lg-dropdown menu-rounded-0 py-lg-4 w-lg-225px">
                    <div data-kt-menu-trigger="{default:'click', lg: 'hover'}" data-kt-menu-placement="right-start" class="menu-item menu-lg-down-accordion">
                        <span class="menu-link py-3">
                            <span class="menu-icon">
                                <i class="fa fa-users"></i>
                            </span>
                            <span class="menu-title">Nosotros</span>
                            <span class="menu-arrow"></span>
                        </span>
                        <div class="menu-sub menu-sub-lg-down-accordion menu-sub-lg-dropdown menu-active-bg py-lg-4 w-lg-225px">
                            <div class="menu-item">
                                <a class="menu-link py-3" href="{{ route('admin.team.create') }}">
                                    <span class="menu-bullet">
                                        <span class="bullet bullet-dot"></span>
                                    </span>
                                    <span class="menu-title">Nuevo equipo</span>
                                </a>
                            </div>
                            <div class="menu-item">
                                <a class="menu-link py-3" href="{{ route('admin.client.create') }}">
                                    <span class="menu-bullet">
                                        <span class="bullet bullet-dot"></span>
                                    </span>
                                    <span class="menu-title">Nuevo cliente</span>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="menu-item">
                        <a class="menu-link py-3" href="{{ route('admin.service.create') }}">
                            <span class="menu-icon">
                                <i class="fa fa-star"></i>
                            </span>
                            <span class="menu-title">Nuevo servicio</span>
                        </a>
                    </div>
                    <div class="menu-item">
                        <a class="menu-link py-3" href="{{ route('admin.evidence.create') }}">
                            <span class="menu-icon">
                                <i class="fa fa-briefcase"></i>
                            </span>
                            <span class="menu-title">Nueva evidencia de portafolio</span>
                        </a>
                    </div>
                    <div data-kt-menu-trigger="{default:'click', lg: 'hover'}" data-kt-menu-placement="right-start" class="menu-item menu-lg-down-accordion">
                        <span class="menu-link py-3">
                            <span class="menu-icon">
                                <i class="fa fa-book"></i>
                            </span>
                            <span class="menu-title">Blogs</span>
                            <span class="menu-arrow"></span>
                        </span>
                        <div class="menu-sub menu-sub-lg-down-accordion menu-sub-lg-dropdown menu-active-bg py-lg-4 w-lg-225px">
                            <div class="menu-item">
                                <a class="menu-link py-3" href="{{ route('admin.blog-category.create') }}">
                                    <span class="menu-bullet">
                                        <span class="bullet bullet-dot"></span>
                                    </span>
                                    <span class="menu-title">Nueva categoría</span>
                                </a>
                            </div>
                            <div class="menu-item">
                                <a class="menu-link py-3" href="{{ route('admin.blog-tag.create') }}">
                                    <span class="menu-bullet">
                                        <span class="bullet bullet-dot"></span>
                                    </span>
                                    <span class="menu-title">Nueva etiqueta</span>
                                </a>
                            </div>
                            <div class="menu-item">
                                <a class="menu-link py-3" href="{{ route('admin.blog.create') }}">
                                    <span class="menu-bullet">
                                        <span class="bullet bullet-dot"></span>
                                    </span>
                                    <span class="menu-title">Nuevo blog</span>
                                </a>
                            </div>
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
        <!--end::Menu-->
    </div>
    <!--end::Menu wrapper-->
</div>
<!--end::Navbar-->