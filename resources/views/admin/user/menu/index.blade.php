<!--begin::Sidebar-->
<div class="col-lg-4">
    <!--begin::Card-->
    <div class="card mb-5 mb-xl-8">
        <!--begin::Card body-->
        <div class="card-body pt-0 pt-lg-1">
            <!--begin::Summary-->
            <!--begin::Card-->
            <div class="card">
                <!--begin::Card body-->
                <div class="card-body d-flex flex-center flex-column pt-12 p-9 px-0">
                    <!--begin::Avatar-->
                    <div class="symbol symbol-100px symbol-circle mb-7">
                        <img src="{{ $user->profile() }}" alt="image" />
                    </div>
                    <!--end::Avatar-->
                    <!--begin::Name-->
                    <a href="#" class="fs-3 text-gray-800 text-hover-primary fw-bolder mb-3">{{ $user->name }}</a>
                    <!--end::Name-->
                    <!--begin::Position-->
                    <div class="mb-9">
                        <!--begin::Badge-->
                        <div class="badge badge-lg badge-light-primary d-inline">{{ $user->position }}</div>
                        <!--begin::Badge-->
                    </div>
                </div>
                <!--end::Card body-->
            </div>
            <!--end::Card-->
            <!--end::Summary-->
            <!--begin::Details toggle-->
            <!--end::Details toggle-->
            <div class="separator"></div>
            <!--begin::Details content-->
            <div >
                <div class="pb-5 fs-6 card-rounded bg-primary bg-opacity-5 p-10 mb-15">

                    <ul class="nav d-block border-transparent fw-bolder">
                        <li class="nav-item my-1">
                            <a 
                                class=" {{ active('admin.user.show', $user) }} btn btn-color-gray-600 btn-active-white btn-active-color-primary fw-boldest fs-8 fs-lg-base nav-link px-3 px-lg-8 mx-1 text-uppercase"
                                href="{{ route('admin.user.show', $user) }}">General</a>
                        </li>
                        <li class="nav-item my-1">
                            <a 
                                class="{{ active('admin.user.password') }} btn btn-color-gray-600 btn-active-white btn-active-color-primary fw-boldest fs-8 fs-lg-base nav-link px-3 px-lg-8 mx-1 text-uppercase"
                                href="{{ route('admin.user.password', $user) }}">Contraseña</a>
                        </li>
                        <li class="nav-item my-1">
                            <a 
                                class="{{ active('admin.user.permission') }} btn btn-color-gray-600 btn-active-white btn-active-color-primary fw-boldest fs-8 fs-lg-base nav-link px-3 px-lg-8 mx-1 text-uppercase"
                                href="{{ route('admin.user.permission', $user) }}">Permisos directos</a>
                        </li>
                    </ul>

                   
                </div>
            </div>
            <!--end::Details content-->
        </div>
        <!--end::Card body-->
    </div>
</div>
<!--end::Sidebar-->