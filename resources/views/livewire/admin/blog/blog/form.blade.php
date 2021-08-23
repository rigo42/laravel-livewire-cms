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
                                    <div class="image-input-wrapper w-325px h-325px" @if ($imageTmp) style="background-image: url('{{ $imageTmp->temporaryUrl() }}')"
                                        @elseif($blog->image)
                                            style="background-image: url('{{ Storage::url($blog->image->url) }}')"
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
                
                
                                    @if ($imageTmp || $blog->image)
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
                                <input wire:model.defer="blog.name" type="text" required
                                    class="@error('blog.name') is-invalid @enderror form-control form-control-solid mb-3 mb-lg-0" />
                                @error('blog.name') <span class="text-danger">{{ $message }}</span> @enderror
                            </div>
                
                            <div class="fv-row mb-7" wire:ignore.self>
                                <label class="required fw-bold fs-6 mb-2">Fragmento</label>
                                <textarea wire:model.defer="blog.fragment" cols="20" rows="4" class="form-control form-control-solid @error('blog.company') is-invalid @enderror"></textarea>
                                @error('blog.fragment') <span class="text-danger">{{ $message }}</span> @enderror
                            </div>

                            <div class="fv-row mb-7" >
                                <div wire:ignore wire:key="card-body">
                                    <label class="required fw-bold fs-6 mb-2">Contenido</label>
                                    <textarea class="body">{{ $blog->body }}</textarea>
                                </div>
                                @error('blog.body') <span class="text-danger">{{ $message }}</span> @enderror
                            </div>

                            <div class="fv-row mb-7" >
                                <label class="fw-bold fs-6 mb-2">Categorías</label>
                                <div class="mb-10 d-flex">
                                    @forelse ($categories as $category)
                                        <div class="form-check form-check-custom form-check-solid me-10">
                                            <input wire:model.defer="categoryArray" name="categoryArray[]" class="form-check-input h-30px w-30px" type="checkbox" value="{{ $category->id }}" id="category-{{ $category->id }}">
                                            <label class="form-check-label" for="category-{{ $category->id }}">{{ $category->name }}</label>
                                        </div>
                                    @empty
                                        <span class="badge badge-light">Ningúna categoría encontrada</span>
                                    @endforelse
                                </div>
                            </div>

                            <div class="fv-row mb-7" >
                                <label class="fw-bold fs-6 mb-2">Etiquetas</label>
                                <div class="mb-10 d-flex">
                                    @forelse ($tags as $tag)
                                        <div class="form-check form-check-custom form-check-solid me-10">
                                            <input wire:model.defer="tagArray" name="tagArray[]" class="form-check-input h-30px w-30px" type="checkbox" value="{{ $tag->id }}" id="tag-{{ $tag->id }}">
                                            <label class="form-check-label" for="tag-{{ $tag->id }}">{{ $tag->name }}</label>
                                        </div>
                                    @empty
                                        <span class="badge badge-light">Ningúna etiqueta encontrada</span>
                                    @endforelse
                                </div>
                            </div>

                            <div class="fv-row mb-7">
                                <label class="fw-bold fs-6 mb-2">Palabras clave (SEO)</label>
                                <input wire:model.defer="blog.meta_keywords" type="text"
                                    class="@error('blog.meta_keywords') is-invalid @enderror form-control form-control-solid mb-3 mb-lg-0" />
                                    <div class="fs-7 fw-bold text-muted">Cada palabra deberá de ser separada con comas</div>
                                @error('blog.meta_keywords') <span class="text-danger">{{ $message }}</span> @enderror
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
                @this.set('blog.body', editor.getData());
            });
        })
        .catch(error => {
            console.error(error);
        })
    </script>
    @endpush

</div>
