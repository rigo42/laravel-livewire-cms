@extends('admin.layouts.main')

@section('title', 'Dashboard | Bienvenido')

@section('content')

<div class="page-title d-flex flex-column align-items-start justify-content-center flex-wrap me-lg-2 pb-2 pb-lg-0" data-kt-swapper="true" data-kt-swapper-mode="prepend" data-kt-swapper-parent="{default: '#kt_content_container', lg: '#kt_header_container'}">
    <h1 class="text-dark fw-bolder my-0 fs-2">Dashboard</h1>
    <ul class="breadcrumb fw-bold fs-base my-1">
        <li class="breadcrumb-item text-muted">
            <a href="#" class="text-muted">Inicio</a>
        </li>
        <li class="breadcrumb-item text-dark">Default</li>
    </ul>
</div>


<!--begin::Container-->
<div class="container" id="kt_content_container">
    Content page
</div>
@endsection