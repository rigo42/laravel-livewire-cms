<div>

    <div class="card">
        <div class="card-body p-12">
            <div class="form">
                <div wire:ignore.self class="d-flex flex-column scroll-y me-n7 pe-7">
        
                    @include('components.errors')
        
                    <div class="fv-row mb-7">
                        <label class="required d-block fw-bold fs-6 mb-5">Imágen</label>
                        <div class="image-input image-input-circle">
                            <div class="image-input-wrapper w-125px h-125px" @if ($imageTmp) style="background-image: url('{{ $imageTmp->temporaryUrl() }}')"
                                @elseif($user->image)
                                    style="background-image: url('{{ Storage::url($user->image->url) }}')"
                                @else    
                                    style="background-image: url('{{ asset('assets/admin/media/avatars/blank.png') }}')" 
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
        
        
                            @if ($imageTmp || $user->image)
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
                        <input wire:model.defer="user.name" type="text" required
                            class="@error('user.name') is-invalid @enderror form-control form-control-solid mb-3 mb-lg-0" />
                        @error('user.name') <span class="text-danger">{{ $message }}</span> @enderror
                    </div>

                    <div class="fv-row mb-7">
                        <label class="required fw-bold fs-6 mb-2">Puesto</label>
                        <input wire:model.defer="user.position" type="text" required
                            class="@error('user.position') is-invalid @enderror form-control form-control-solid mb-3 mb-lg-0" />
                        @error('user.position') <span class="text-danger">{{ $message }}</span> @enderror
                    </div>
        
                    <div class="fv-row mb-7">
                        <label class="required fw-bold fs-6 mb-2">Correo</label>
                        <input wire:model.defer="user.email" type="text" required
                            class="@error('user.email') is-invalid @enderror form-control form-control-solid mb-3 mb-lg-0" />
                        @error('user.email') <span class="text-danger">{{ $message }}</span> @enderror
                    </div>

                    @can('usuarios')
                        <div class="fv-row mb-7">
                            <label class="required fw-bold fs-6 mb-5">Roles</label>

                            @forelse($roles as $role)
                                <div class="d-flex fv-row">
                                    <div class="form-check form-check-custom form-check-solid">
                                        <input wire:model.defer="rolesArray" class="form-check-input me-3" type="checkbox" value="{{ $role->name }}" id="role-{{ $role->id }}">
                                        <label class="form-check-label" for="role-{{ $role->id }}">
                                            <div class="fw-bolder text-gray-800">{{ $role->name }}</div>
                                        </label>
                                    </div>
                                </div>
                                <div class="separator separator-dashed my-5"></div>

                            @empty
                                <span class="badge badge-secondary">No se encontró ningun rol</span>
                            @endforelse

                            @error('rolesArray') 
                                <div>
                                    <span class="text-danger">{{ $message }}</span>
                                </div>
                            @enderror
                        </div>
                    @endcan

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
