<div>
    <div class="form">
        <div wire:ignore.self class="d-flex flex-column scroll-y me-n7 pe-7">

            @include('components.errors')

            <div class="fv-row mb-7">
                <label class="required fw-bold fs-6 mb-2">Correo</label>
                <input wire:model="contact.email" type="email" required
                    class="@error('contact.email') is-invalid @enderror form-control form-control-solid mb-3 mb-lg-0" />
                @error('contact.email') <span class="text-danger">{{ $message }}</span> @enderror
            </div>

            <div class="fv-row mb-7">
                <label class="required fw-bold fs-6 mb-2">Teléfono</label>
                <input wire:model.defer="contact.phone" type="text" required
                    class="@error('contact.phone') is-invalid @enderror form-control form-control-solid mb-3 mb-lg-0" />
                @error('contact.phone') <span class="text-danger">{{ $message }}</span> @enderror
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
