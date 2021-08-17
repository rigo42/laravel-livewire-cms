@extends('admin.layouts.main')

@section('title', 'ienvenido al panel del sitio web')

@section('content')

<div class="page-title d-flex flex-column align-items-start justify-content-center flex-wrap me-lg-2 pb-2 pb-lg-0" data-kt-swapper="true" data-kt-swapper-mode="prepend" data-kt-swapper-parent="{default: '#kt_content_container', lg: '#kt_header_container'}">
    <h1 class="text-dark fw-bolder my-0 fs-2">Sitio web</h1>
    <ul class="breadcrumb fw-bold fs-base my-1">
        <li class="breadcrumb-item text-dark">Bienvenido</li>
    </ul>
</div>


<!--begin::Container-->
<div class="container" id="kt_content_container">
    <!--begin::Card-->
    <div class="card">
        <!--begin::Card body-->
        <div class="card-body p-0">
            <!--begin::Heading-->
            <div class="card-px text-center py-20 my-10">
                <!--begin::Title-->
                <h2 class="fs-2x fw-bolder mb-10">Hola! bienvenido  </h2>
                <!--end::Title-->
                <!--begin::Description-->
                <p class="text-gray-500 fs-5 fw-bold mb-13">En este modulo de "Sitio web", podrás editar cierta información de tu web {{ config('app.url') }}.</p>
                <!--end::Description-->
            </div>
            <!--end::Heading-->
            <!--begin::Illustration-->
            <div class="text-center px-5">
                <img src="{{ asset('assets/admin') }}/media/illustrations/coding.png" alt="" class="mw-100 mh-300px" />
            </div>
            <!--end::Illustration-->
        </div>
        <!--end::Card body-->
    </div>
    <!--end::Card-->

</div>
<!--end::Container-->
@endsection