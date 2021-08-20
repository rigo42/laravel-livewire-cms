<div>

    <!--begin::Post-->
    <div class="post d-flex flex-column-fluid" id="kt_post">
        <div id="kt_content_container" class="container">
            <div class="card">
                <div class="card-body p-lg-20 pb-lg-0">
                    <div class="d-flex flex-column flex-xl-row">
                        <div class="flex-lg-row-fluid">
                            <div class="mb-8">
                                <div class="d-flex flex-wrap mb-6">
                                    <div class="me-9 my-1">
                                        <span class="svg-icon svg-icon-primary svg-icon-2 me-1">
                                            <i class="fa fa-eye"></i>
                                        </span>
                                        <span class="fw-bolder text-gray-400">{{ $evidence->view }}</span>
                                    </div>
                                    <div class="me-9 my-1">
                                        <span class="svg-icon svg-icon-primary svg-icon-2 me-1">
                                            <i class="fa fa-link"></i>
                                        </span>
                                        <a target="_blank" href="{{ $evidence->link }}" class="fw-bolder text-gray-400">{{ $evidence->link }}</a>
                                    </div>
                                </div>
                                <span href="#" class="text-dark fs-2 fw-bolder">{{ $evidence->name }}</span>
                                <div class="overlay mt-8">
                                    <div class="bgi-no-repeat bgi-position-center bgi-size-cover card-rounded min-h-350px" style="background-image:url('{{ Storage::url($evidence->image->url) }}')"></div>
                                    <div class="overlay-layer card-rounded bg-dark bg-opacity-25">
                                    </div>
                                </div>
                            </div>
                            <div class="fs-5 fw-bold text-gray-600">
                                {!! $evidence->body !!}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
</div>
