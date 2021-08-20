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

                    @include('admin.about.client.create')

                </div>

                <div class="card-body pt-0">
                    <div class="table-responsive">
                        <table class="table align-middle table-row-dashed fs-6 gy-5">
                            <thead>
                                <tr class="text-start text-muted fw-bolder fs-7 text-uppercase gs-0">
                                    <th class="min-w-125px">Cliente</th>
                                    <th class="min-w-125px">Registrado</th>
                                    <th class="text-end min-w-100px">Acciones</th>
                                </tr>
                            </thead>
                            <tbody class="text-gray-600 fw-bold">
                                @foreach ($clients as $client)
                                    <tr>
                                        <td class="d-flex align-items-center">
                                            <div class="symbol symbol-circle symbol-50px overflow-hidden me-3">
                                                <a href="#">
                                                    @if ($client->image)
                                                        <div class="symbol-label">
                                                            <img src="{{ Storage::url($client->image->url) }}"
                                                                alt="{{ $client->name }}" class="w-100" />
                                                        </div>
                                                    @else
                                                        <div
                                                            class="symbol symbol-circle symbol-50px overflow-hidden me-3">
                                                            <a>
                                                                <div
                                                                    class="symbol-label fs-3 bg-light-primary text-primary">
                                                                    {{ $client->name[0] }}</div>
                                                            </a>
                                                        </div>
                                                    @endif
                                                </a>
                                            </div>
                                            <div class="d-flex flex-column">
                                                <a class="text-gray-800 mb-1">{{ $client->name }}</a>
                                                <span>{{ $client->company }}</span>
                                            </div>
                                        </td>
                                        <td>{{ $client->dateToString() }}</td>

                                        <td class="text-end">
                                            <a href="#"
                                                class="btn btn-light btn-active-light-primary btn-sm dropdown-toggle"
                                                data-bs-toggle="dropdown" aria-expanded="false">
                                                <i class="pl-2 bi bi-three-dots fs-3"></i>
                                            </a>
                                            <div
                                                class="dropdown-menu menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-bold fs-7 w-125px py-4">

                                                <div class="menu-item px-3">
                                                    <a href="#" class="menu-link px-3" data-bs-toggle="modal"
                                                        data-bs-target="#modal-edit-{{ $client->id }}"> Editar</a>
                                                </div>

                                                <div class="menu-item px-3">
                                                    <a href="#"
                                                        onclick="event.preventDefault(); confirmDestroy({{ $client->id }})"
                                                        class="menu-link px-3 text-danger"> Eliminar</a>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>

                                    @include('admin.about.client.edit')

                                @endforeach

                            </tbody>
                        </table>
                    </div>
                    {{ $clients->links() }}
                </div>
            </div>
        </div>
    </div>

    @push('footer')
        <script>
            function confirmDestroy(id) {
                swal.fire({
                    title: "¿Estas seguro?",
                    text: "No podrá recuperar este cliente.",
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
                        @this.call('destroy', id);
                    }
                });
            }
        </script>
    @endpush
</div>
