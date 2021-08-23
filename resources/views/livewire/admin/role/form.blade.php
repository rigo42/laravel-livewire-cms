<div>
    <div class="form">
        <div wire:ignore.self class="d-flex flex-column scroll-y me-n7 pe-7">

            @include('components.errors')

           
            <div class="fv-row mb-7">
                <label class="required fw-bold fs-6 mb-2">Nombre</label>
                <input wire:model.defer="role.name" type="text" required
                    class="@error('role.name') is-invalid @enderror form-control form-control-solid mb-3 mb-lg-0" />
                @error('role.name') <span class="text-danger">{{ $message }}</span> @enderror
            </div>

            <div class="fv-row mb-7">
                <label class="required fw-bold fs-6 mb-5">Permisos</label>

                @forelse ($permissions as $permission)
                    <div class="d-flex fv-row">
                        <div class="form-check form-check-custom form-check-solid">
                            <label class="form-check-label d-flex">
                            <input wire:model.defer="permissionsArray" class="form-check-input me-3" type="checkbox" value="{{ $permission->name }}">
                            
                                <div class="fw-bolder text-gray-800">{{ $permission->name }}</div>
                            </label>
                        </div>
                    </div>
                    <div class="separator separator-dashed my-5"></div>

                @empty
                    <span class="badge badge-secondary">No se encontró ningun permiso</span>
                @endforelse

                @error('permissionsArray') 
                    <div>
                        <span class="text-danger">{{ $message }}</span>
                    </div>
                @enderror
            </div>

        </div>
    </div>

    <div class="text-center pt-15">
        <button type="reset" class="btn btn-light me-3" data-bs-dismiss="modal">
            Salir
        </button>
        <button wire:click.prevent="{{ $method }}" wire:loading.attr="disabled" type="submit"
            class="btn btn-primary font-weight-bolder mr-2">
            <i class="fa fa-save"></i>
            Guardar cambios
            <span wire:loading.class="spinner-grow spinner-grow-sm" wire:target="{{ $method }}"></span>
        </button>
    </div>

</div>
