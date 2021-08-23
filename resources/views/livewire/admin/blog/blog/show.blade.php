<div>

    <!--begin::Post-->
    <div class="post d-flex flex-column-fluid" id="kt_post">
        <div id="kt_content_container" class="container">
            <div class="card">
                <div class="card-body p-lg-20 pb-lg-0">
                    <div class="d-flex flex-column flex-xl-row">
                        <div class="flex-lg-row-fluid me-xl-15">

                            <div class="mb-8">
                                <div class="d-flex flex-wrap mb-6">
                                    <div class="me-9 my-1">
                                        <span class="svg-icon svg-icon-primary svg-icon-2 me-1">
                                            <i class="fa fa-eye"></i>
                                        </span>
                                        <span class="fw-bolder text-gray-400">{{ $blog->view }}</span>
                                    </div>
                                    <div class="me-9 my-1">
                                        <span class="svg-icon svg-icon-primary svg-icon-2 me-1">
                                            <i class="fa fa-comment"></i>
                                        </span>
                                        <span class="fw-bolder text-gray-400">{{ $blog->comments()->count() }}</span>
                                    </div>
                                </div>
                                <span href="#" class="text-dark fs-2 fw-bolder">{{ $blog->name }} <span class="fw-bolder text-muted fs-5 ps-1">{{ $blog->dateToString() }}</span></span>
                                
                                <div class="overlay mt-8">
                                    <div class="bgi-no-repeat bgi-position-center bgi-size-cover card-rounded min-h-350px" style="background-image:url('{{ Storage::url($blog->image->url) }}')"></div>
                                    <div class="overlay-layer card-rounded bg-dark bg-opacity-25">
                                    </div>
                                </div>

                            </div>

                            <div class="fs-5 fw-bold text-gray-600">
                                {!! $blog->body !!}
                            </div>

                            <div class="d-flex justify-content-center align-items-center border-dashed card-rounded p-5 p-lg-10 mb-14">
                                <!--begin::Section-->
                                <div class="text-center flex-shrink-0 me-7 me-lg-13">
                                    <!--begin::Avatar-->
                                    <div class="symbol symbol-70px symbol-circle mb-2">
                                        <img src="{{ $blog->user->profile() }}" class="" alt="">
                                    </div>
                                    <!--end::Avatar-->
                                    <!--begin::Info-->
                                    <div class="mb-0">
                                        <a href="#" class="text-gray-700 fw-bolder text-hover-primary">{{ $blog->user->name }}</a>
                                        <span class="text-gray-400 fs-7 fw-bold d-block mt-1">{{ $blog->user->position }}</span>
                                    </div>
                                    <!--end::Info-->
                                </div>
                                <!--end::Section-->
                            </div>
                        </div>
                        <div class="flex-column flex-lg-row-auto w-100 w-xl-300px mb-10">
                            <!--begin::Catigories-->
                            <div class="mb-16">
                                <h4 class="text-black mb-7">Categorias</h4>
                                <!--begin::Item-->
                                <div class="d-flex flex-stack fw-bold fs-5 text-muted mb-4">
                                    <!--begin::Text-->
                                    <a href="#" class="text-muted text-hover-primary pe-2"></a>
                                </div>
                                <div class="d-flex flex-column fw-bold fs-5 text-muted mb-4">
                                    @forelse ($blog->blogCategories as $category)
                                        <li class="d-flex align-items-center py-2">
                                            <span class="bullet me-5 text-muted pe-2"></span> {{ $category->name }}
                                        </li>
                                    @empty
                                        <span class="badge badge-light">Ningúna categoría</span>
                                    @endforelse
                                </div> 
                            </div>
                            <!--end::Catigories-->

                            <!--begin::Catigories-->
                            <div class="mb-16">
                                <h4 class="text-black mb-7">Etiquetas</h4>
                                <!--begin::Item-->
                                <div class="d-flex flex-stack fw-bold fs-5 text-muted mb-4">
                                    <!--begin::Text-->
                                    <a href="#" class="text-muted text-hover-primary pe-2"></a>
                                </div>
                                <div class="d-flex flex-column fw-bold fs-5 text-muted mb-4">
                                    @forelse ($blog->blogTags as $tag)
                                        <li class="d-flex align-items-center py-2">
                                            <span class="bullet me-5 text-muted pe-2"></span> {{ $tag->name }}
                                        </li>
                                    @empty
                                        <span class="badge badge-light">Ningúna etiqueta</span>
                                    @endforelse
                                </div>                                
                            </div>
                            <!--end::Catigories-->

                        </div>
                    </div>
                </div>
            </div>

            @livewire('admin.comment.index', ['model' => $blog], key($blog->id))

        </div>
    </div>
    
</div>
