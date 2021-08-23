<div>

    <div class="post d-flex flex-column-fluid" id="kt_post">
        <div id="kt_content_container" class="container">
            <div class="card">
                <div class="card-body p-12">
                    <div class="form">
                        <div wire:ignore.self class="d-flex flex-column scroll-y me-n7 pe-7">
                
                            @include('components.errors')
                
                            <div class="fv-row mb-7">
                                <label class="required d-block fw-bold fs-6 mb-5">Imágen</label>
                                <div class="image-input image-input-outline">
                                    <div class="image-input-wrapper w-125px h-125px" @if ($imageTmp) style="background-image: url('{{ $imageTmp->temporaryUrl() }}')"
                                        @elseif($service->image)
                                            style="background-image: url('{{ Storage::url($service->image->url) }}')"
                                        @else    
                                            style="background-image: url('{{ asset('assets/admin/media/bg/blank.jpg') }}')" 
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
                
                
                                    @if ($imageTmp || $service->image)
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
                                <input wire:model.defer="service.name" type="text" required
                                    class="@error('service.name') is-invalid @enderror form-control form-control-solid mb-3 mb-lg-0" />
                                @error('service.name') <span class="text-danger">{{ $message }}</span> @enderror
                            </div>
                
                            <div class="fv-row mb-7" wire:ignore.self>
                                <label class="required fw-bold fs-6 mb-2">Fragmento</label>
                                <textarea wire:model.defer="service.fragment" cols="20" rows="4" class="form-control form-control-solid @error('service.company') is-invalid @enderror"></textarea>
                                @error('service.fragment') <span class="text-danger">{{ $message }}</span> @enderror
                            </div>

                            <div class="fv-row mb-7" >
                                <div wire:ignore wire:key="card-body">
                                    <label class="fw-bold fs-6 mb-2">Contenido</label>
                                    <textarea class="body">{{ $service->body }}</textarea>
                                </div>
                                @error('service.body') <span class="text-danger">{{ $message }}</span> @enderror
                                
                            </div>

                            <div class="fv-row mb-7">
                                <label class="fw-bold fs-6 mb-2">Palabras clave (SEO)</label>
                                <input wire:model.defer="service.meta_keywords" type="text"
                                    class="@error('service.meta_keywords') is-invalid @enderror form-control form-control-solid mb-3 mb-lg-0" />
                                    <div class="fs-7 fw-bold text-muted">Cada palabra deberá de ser separada con comas</div>
                                @error('service.meta_keywords') <span class="text-danger">{{ $message }}</span> @enderror
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
    </div>

    @push('footer')
    
        <script src="{{ asset('assets/admin') }}/plugins/custom/ckeditor/ckeditor-classic.bundle.js"></script>
        <script>
        ClassicEditor
        .create(document.querySelector('.body'))
        .then(editor => {
            editor.model.document.on('change:data', (evt, data) => {
                @this.set('service.body', editor.getData());
            });
        })
        .catch(error => {
            console.error(error);
        })
    </script>
    @endpush

</div>
