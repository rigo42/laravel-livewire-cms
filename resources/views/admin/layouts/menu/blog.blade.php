@if (!Route::has('admin.blog.*'))
<!--begin::Blog-->
<div class="tab-pane fade" id="kt_aside_nav_tab_blog" role="tabpanel">
    <div class="m-0">
        <!--begin::Header-->
        <h3 class="text-gray-800 fw-bold mb-6 mx-5">Blogs</h3>
    </div>

    <!--begin::Menu blog-->
    <div class="menu menu-column menu-fit menu-rounded menu-title-gray-600 menu-icon-gray-400 menu-state-primary menu-state-icon-primary menu-state-bullet-primary menu-arrow-gray-500 fw-bold fs-5 px-6 my-5 my-lg-0" id="kt_aside_menu" data-kt-menu="true">
        <div id="" class="menu-fit">
            
            <!-- Blog inicio -->
            <div class="menu-item">
                <div class="menu-content pb-2">
                    <span class="menu-section text-muted text-uppercase fs-8 ls-1">Inicio</span>
                </div>
            </div>
            <div class="menu-item">
                <a class="menu-link {{ active('admin.blog.blog-info.index') }}" href="#">
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
                    <span class="menu-title">Información general</span>
                </a>
            </div>

             <!-- Blogs -->
             <div class="menu-item">
                <div class="menu-content pt-8 pb-2">
                    <span class="menu-section text-muted text-uppercase fs-8 ls-1">Blogs</span>
                </div>
            </div>
            <div class="menu-item">
                <a class="menu-link {{ active('admin.blog.category.index') }}" href="#">
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
            <div class="menu-item">
                <a class="menu-link {{ active('admin.blog.blog.index') }}" href="#">
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
                    <span class="menu-title">Posts</span>
                </a>
            </div>

        </div>
    </div>
</div>
@endif