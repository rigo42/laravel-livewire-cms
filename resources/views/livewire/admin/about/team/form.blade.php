<div>
    <form class="form">
        <div wire:ignore.self class="d-flex flex-column scroll-y me-n7 pe-7">

            @include('components.errors')

            <div class="fv-row mb-7">
                <label class="required d-block fw-bold fs-6 mb-5">Imágen</label>
                <div class="image-input image-input-outline">
                    <div class="image-input-wrapper w-125px h-125px" @if ($imageTmp) style="background-image: url('{{ $imageTmp->temporaryUrl() }}')"
@elseif($person->image)
                            style="background-image: url('{{ Storage::url($person->image->url) }}')"
@else    
                            style="background-image: url('{{ asset('assets/admin/media/users/blank.png') }}')" @endif>
                    </div>

                    <div x-data="{ isUploading: false, progress: 0 }" x-on:livewire-upload-start="isUploading = true"
                        x-on:livewire-upload-finish="isUploading = false"
                        x-on:livewire-upload-error="isUploading = false"
                        x-on:livewire-upload-progress="progress = $event.detail.progress">

                        <label
                            class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow image-edit">
                            <i class="fa fa-pen"></i>
                            <input class="d-none" wire:model.defer="imageTmp" type="file" accept=".png, .jpg, .jpeg" />
                        </label>


                        <!-- Progress Bar -->
                        <div x-show="isUploading">
                            <progress max="100" x-bind:value="progress"></progress>
                        </div>
                    </div>


                    @if ($imageTmp || $person->image)
                        <label wire:click.prevent="removeImage()"
                            wire:loading.class="spinner-border spinner-border-sm align-middle ms-2" wire:target="removeImage"
                            title="Remover imagen"
                            class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow image-remove">
                            <i class="bi bi-x fs-2"></i>
                        </label>
                    @endif
                </div>
                @error('imageTmp')
                    <div>
                        <span class="text-danger">{{ $message }}</span>
                    </div>
                @enderror
            </div>

            <div class="fv-row mb-7">
                <label class="required fw-bold fs-6 mb-2">Nombre</label>
                <input wire:model="person.name" type="text" required
                    class="@error('person.name') is-invalid @enderror form-control form-control-solid mb-3 mb-lg-0" />
                @error('person.name') <span class="text-danger">{{ $message }}</span> @enderror
            </div>

            <div class="fv-row mb-7">
                <label class="required fw-bold fs-6 mb-2">Puesto</label>
                <input wire:model.defer="person.position" type="text" required
                    class="@error('person.position') is-invalid @enderror form-control form-control-solid mb-3 mb-lg-0" />
                @error('person.position') <span class="text-danger">{{ $message }}</span> @enderror
            </div>

            <div class="fv-row mb-7">
                <label class="fw-bold fs-6 mb-2">Biografía</label>
                <textarea wire:model.defer="person.biography" class="form-control form-control-solid mb-3 mb-lg-0"
                    cols="30" rows="10"></textarea>
                @error('person.biography') <span class="text-danger">{{ $message }}</span> @enderror
            </div>

            <div class="fv-row mb-7">
                <label class="fw-bold fs-6 mb-2">Perfil de facebook</label>
                <input wire:model.defer="person.link_facebook" type="text"
                    class="@error('person.link_facebook') is-invalid @enderror form-control form-control-solid mb-3 mb-lg-0" />
                @error('person.link_facebook') <span class="text-danger">{{ $message }}</span> @enderror
            </div>

            <div class="fv-row mb-7">
                <label class="fw-bold fs-6 mb-2">Perfil de linkedin</label>
                <input wire:model.defer="person.link_linkedin" type="text"
                    class="@error('person.link_linkedin') is-invalid @enderror form-control form-control-solid mb-3 mb-lg-0" />
                @error('person.link_linkedin') <span class="text-danger">{{ $message }}</span> @enderror
            </div>

        </div>
    </form>

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
