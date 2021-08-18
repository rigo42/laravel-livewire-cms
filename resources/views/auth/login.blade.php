@extends('admin.layouts.app')

@section('title', 'login')

@section('content')
<!--begin::Form-->
<form class="form w-100" method="POST" action="{{ route('login') }}">
    @csrf
    <!--begin::Heading-->
    <div class="text-center mb-10">
        <!--begin::Title-->
        <h1 class="text-dark mb-3">Iniciar sesión</h1>
        <!--end::Title-->
        @if (Route::has('register'))
            <!--begin::Link-->
            <div class="text-gray-400 fw-bold fs-4">No tienes una cuenta?
            <a href="{{ route('register') }}" class="link-primary fw-bolder">Crear cuenta</a></div>
            <!--end::Link-->
        @endif
    </div>
    <!--begin::Heading-->
    <!--begin::Input group-->
    <div class="fv-row mb-10">
        <!--begin::Label-->
        <label class="form-label fs-6 fw-bolder text-dark">Correo</label>
        <!--end::Label-->
        <!--begin::Input-->
        <input 
        value="{{ old('email') }}"
        class="form-control h-auto form-control-solid py-4 px-8 @error('email') is-invalid @enderror" 
        type="text" 
        placeholder="Correo" 
        name="email" 
        autocomplete="off"
        required />
        @error('email')
            <span class="text-danger" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
        <!--end::Input-->
    </div>
    <!--end::Input group-->
    <!--begin::Input group-->
    <div class="fv-row mb-10">
        <!--begin::Wrapper-->
        <div class="d-flex flex-stack mb-2">
            <!--begin::Label-->
            <label class="form-label fw-bolder text-dark fs-6 mb-0">Contraseña</label>
            <!--end::Label-->
            <!--begin::Link-->
            <a href="{{ route('password.request') }}" class="link-primary fs-6 fw-bolder">¿Contraseña olvidada?</a>
            <!--end::Link-->
        </div>
        <!--end::Wrapper-->
        <!--begin::Input-->
        <input 
            class="form-control h-auto form-control-solid py-4 px-8" 
            type="password" 
            placeholder="Contraseña" 
            name="password" 
            required/>
            @error('password')
                <span class="text-danger" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        <!--end::Input-->
    </div>
    <!--end::Input group-->
    <!--begin::Actions-->
    <div class="text-center">
        <!--begin::Submit button-->
        <button type="submit" class="btn btn-lg btn-primary w-100 mb-5">
            <span class="indicator-label">Iniciar sesión</span>
        </button>
        <!--end::Submit button-->
    </div>
    <!--end::Actions-->
</form>
<!--end::Form-->
@endsection
