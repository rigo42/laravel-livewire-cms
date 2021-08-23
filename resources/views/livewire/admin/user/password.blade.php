<div>

    <div class="card">
        <div class="card-body p-12">
            <div class="form">
                <div wire:ignore.self class="d-flex flex-column scroll-y me-n7 pe-7">
        
                    @include('components.errors')
    
                    <div class="fv-row mb-7">
                        <label class="required fw-bold fs-6 mb-2">Nueva contraseña</label>
                        <input wire:model.defer="password" type="password" required
                            class="@error('password') is-invalid @enderror form-control form-control-solid mb-3 mb-lg-0" />
                        @error('password') <span class="text-danger">{{ $message }}</span> @enderror
                    </div>

                    <div class="fv-row mb-7">
                        <label class="required fw-bold fs-6 mb-2">Confirmas contraseña</label>
                        <input wire:model.defer="password_confirmation" type="password" required
                            class="@error('password_confirmation') is-invalid @enderror form-control form-control-solid mb-3 mb-lg-0" />
                        @error('password_confirmation') <span class="text-danger">{{ $message }}</span> @enderror
                    </div>

                    <div class="text-center pt-15">
                        <button wire:click.prevent="{{ $method }}" wire:loading.attr="disabled" type="submit"
                            class="btn btn-primary font-weight-bolder mr-2">
                            <i class="fa fa-save"></i>
                            Guardar cambios
                            <span wire:loading.class="spinner-grow spinner-grow-sm" wire:target="{{ $method }}"></span>
                        </button>
                    </div>

                </div>
            </div>
        </div>
    </div>

</div>
