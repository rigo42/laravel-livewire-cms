<div>
    <form class="form">
        <div wire:ignore.self class="d-flex flex-column scroll-y me-n7 pe-7">

            @include('component.errors')

            <div class="fv-row mb-7">
                <label class="required d-block fw-bold fs-6 mb-5">Imágen</label>
                <div class="image-input image-input-outline">
                    <div class="image-input-wrapper w-125px h-125px" @if ($imageTmp) style="background-image: url('{{ $imageTmp->temporaryUrl() }}')"
                        @elseif($client->image)
                            style="background-image: url('{{ Storage::url($client->image->url) }}')"
                        @else    
                            style="background-image: url('{{ asset('assets/admin/media/users/blank.png') }}')" 
                        @endif>
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


                    @if ($imageTmp || $client->image)
                        <label wire:click.prevent="removeImage()"
                            wire:loading.class="spinner spinner-primary spinner-sm" wire:target="removeImage"
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
                <input wire:model.defer="client.name" type="text" required
                    class="@error('client.name') is-invalid @enderror form-control form-control-solid mb-3 mb-lg-0" />
                @error('client.name') <span class="text-danger">{{ $message }}</span> @enderror
            </div>

            <div class="fv-row mb-7">
                <label class="required fw-bold fs-6 mb-2">Empresa</label>
                <input wire:model.defer="client.company" type="text" required
                    class="@error('client.company') is-invalid @enderror form-control form-control-solid mb-3 mb-lg-0" />
                @error('client.company') <span class="text-danger">{{ $message }}</span> @enderror
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
