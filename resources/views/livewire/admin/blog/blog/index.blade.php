<div>
    <div class="post d-flex flex-column-fluid" id="kt_post">
        <div id="kt_content_container" class="container">
            <div class="card">
                <div class="card-header border-0 pt-6">

                    <div class="card-title">
                        <div class="d-flex align-items-center position-relative my-1">
                            <i class="fa fa-search position-absolute ms-6"></i>
                            <input wire:model="search" type="search" class="form-control form-control-solid  ps-14"
                                placeholder="Buscar..." />
                        </div>
                    </div>

                    <div class="card-toolbar">
                        <div class="d-flex justify-content-end">
                            <a href="{{ route('admin.blog.create') }}" type="button" class="btn btn-primary">
                                <i class="fa fa-plus"></i> Nuevo blog
                            </a>
                        </div>
                    </div>
                    

                </div>

                <div class="card-body pt-0">
                    <div class="my-17">
                        <div class="row g-10">
                            @foreach ($blogs as $blog)
                                <div class="col-md-4">
                                    <div class="card-xl-stretch ms-md-6">
                                        <a 
                                            class="d-block overlay" 
                                            href="{{ route('admin.blog.show', $blog) }}">
                                            <div 
                                                class="overlay-wrapper bgi-no-repeat bgi-position-center bgi-size-cover card-rounded min-h-175px" 
                                                style="background-image:url('{{ Storage::url($blog->image->url) }}')">
                                            </div>
                                            <div class="overlay-layer card-rounded bg-dark bg-opacity-25">
                                                <i class="bi bi-eye-fill fs-2x text-white"></i>
                                            </div>
                                        </a>
                                        <div class="mt-5">
                                            <a href="#" class="fs-4 text-dark fw-bolder text-hover-primary text-dark lh-base">{{ $blog->name }}</a>
                                            <div class="fw-bold fs-5 text-gray-600 text-dark mt-3">{{ substr($blog->fragment, 0, 30) }}...</div>
                                            @foreach ($blog->blogCategories as $category)
                                                <span class="badge badge-light-primary fw-bolder my-2">{{ $category->name }}</span>                                                
                                            @endforeach
                                            <div class="d-flex align-items-center py-2">
                                                <div class="symbol symbol-35px symbol-circle me-3">
                                                    <img alt="{{ $blog->user->name }}" src="{{ $blog->user->profile() }}">
                                                </div>
                                                <div class="fs-5 fw-bolder">
                                                    <a href="#" class="text-gray-700 text-hover-primary">{{ $blog->user->name }}</a>
                                                    <span class="text-muted">{{ $blog->dateToString() }}</span>
                                                </div>
                                            </div>

                                           
                                            


                                            <div class="fs-6 fw-bolder mt-5 d-flex flex-stack">
                                                <span class="badge border-dashed fs-2 fw-bolder text-dark p-2">
                                                <span class="fs-6 fw-bold text-gray-400"> <i class="fa fa-eye mr-3"></i> </span>{{ $blog->view }}</span>

                                                <span class="badge border-dashed fs-2 fw-bolder text-dark p-2">
                                                <span class="fs-6 fw-bold text-gray-400"> <i class="fa fa-comment mr-3"></i> </span>{{ $blog->comments()->count() }}</span>

                                                <!--begin::Action menu-->
                                                <a href="#"
                                                    class="btn btn-light btn-active-light-primary btn-sm dropdown-toggle"
                                                    data-bs-toggle="dropdown" aria-expanded="false">
                                                    <i class="pl-2 bi bi-three-dots fs-3"></i>
                                                </a>
                                                <div
                                                    class="dropdown-menu menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-bold fs-7 w-125px py-4">

                                                    <div class="menu-item px-3">
                                                        <a href="{{ route('admin.blog.show', $blog) }}" class="menu-link px-3"> Ver</a>
                                                    </div>

                                                    <div class="menu-item px-3">
                                                        <a href="{{ route('admin.blog.edit', $blog) }}" class="menu-link px-3"> Editar</a>
                                                    </div>

                                                    <div class="menu-item px-3">
                                                        <a href="#"
                                                            onclick="event.preventDefault(); confirmDestroy({{ $blog->id }})"
                                                            class="menu-link px-3 text-danger"> Eliminar</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                    {{ $blogs->links() }}
                </div>
            </div>
        </div>
    </div>

    @push('footer')
        <script>
            function confirmDestroy(id) {
                swal.fire({
                    title: "¿Estas seguro?",
                    text: "No podrá recuperar este blog.",
                    icon: "warning",
                    buttonsStyling: false,
                    showCancelButton: true,
                    confirmButtonText: "<i class='fa fa-trash'></i> <span class='font-weight-bold'>Si, eliminar</span>",
                    cancelButtonText: "<i class='fas fa-arrow-circle-left'></i>  <span class='text-dark font-weight-bold'>No, cancelar",
                    reverseButtons: true,
                    cancelButtonClass: "btn btn-secondary font-weight-bold",
                    confirmButtonClass: "btn btn-danger",
                }).then(function(result) {
                    if (result.isConfirmed) {
                        console.log(id);
                        @this.call('destroy', id);
                    }
                });
            }
        </script>
    @endpush
</div>
