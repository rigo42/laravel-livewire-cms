<div>
    @forelse ($comments as $comment)
        <div class="card my-5 mb-xl-8">
            <div class="card-body pb-0">
                <div class="d-flex align-items-center mb-5">
                    <div class="d-flex align-items-center flex-grow-1">
                        <div class="d-flex flex-column">
                            <a href="#" class="text-gray-900 text-hover-primary fs-6 fw-bolder">{{ $comment->name }} 
                                @if ($comment->aproved)
                                    <span class="badge badge-success">Aprovado</span>
                                @else
                                    <span class="badge badge-warning">Sin aprovar</span>
                                @endif
                                
                            </a>
                            <span class="text-gray-400 fw-bold">{{ $comment->dateToString() }}</span>
                        </div>
                    </div>
                    
                    <div class="my-0">
                        <button type="button" class="btn btn-sm btn-icon btn-color-primary btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end" data-kt-menu-flip="top-end">
                            <span class="svg-icon svg-icon-2">
                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                        <rect x="5" y="5" width="5" height="5" rx="1" fill="#000000"></rect>
                                        <rect x="14" y="5" width="5" height="5" rx="1" fill="#000000" opacity="0.3"></rect>
                                        <rect x="5" y="14" width="5" height="5" rx="1" fill="#000000" opacity="0.3"></rect>
                                        <rect x="14" y="14" width="5" height="5" rx="1" fill="#000000" opacity="0.3"></rect>
                                    </g>
                                </svg>
                            </span>
                            
                        </button>
                        
                        <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg-light-primary fw-bold w-200px" data-kt-menu="true" style="">
                            <div class="menu-item px-3">
                                <div class="menu-content fs-6 text-dark fw-bolder px-3 py-4">Acciones</div>
                            </div>
                            <div class="separator mb-3 opacity-75"></div>
                            @if ($comment->aproved)
                                <div class="menu-item px-3">
                                    <a wire:click.prevent="refuse({{ $comment->id }})" href="#" class="menu-link px-3 text-warning">Rechazar</a>
                                </div>
                            @else
                                <div class="menu-item px-3">
                                    <a wire:click.prevent="aprove({{ $comment->id }})" href="#" class="menu-link px-3 text-primary">Aprovar</a>
                                </div>
                            @endif
                            <div class="menu-item px-3">
                                <a onclick="event.preventDefault(); confirmDestroyComment({{ $comment->id }})" href="#" class="menu-link px-3 text-danger">Eliminar</a>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="mb-5">
                    <p class="text-gray-800 fw-normal mb-5">{{ $comment->body }}</p>
                </div>
            </div>
        </div>
    @empty
        <span class="badge badge-light">Ningún comentario</span>
    @endforelse

    @push('footer')
        <script>
            function confirmDestroyComment(id) {
                swal.fire({
                    title: "¿Estas seguro?",
                    text: "No podrá recuperar este comentario.",
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
