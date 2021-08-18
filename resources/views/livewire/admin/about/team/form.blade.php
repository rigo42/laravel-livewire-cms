<div>
    <form class="form" action="#">
                        <div class="d-flex flex-column scroll-y me-n7 pe-7" id="modal-create_scroll" data-kt-scroll="true" data-kt-scroll-activate="{default: false, lg: true}" data-kt-scroll-max-height="auto" data-kt-scroll-dependencies="#modal-create_header" data-kt-scroll-wrappers="#modal-create_scroll" data-kt-scroll-offset="300px">
                
                            <div class="fv-row mb-7">
                                <label class="d-block fw-bold fs-6 mb-5">Imágen</label>
                                <div class="image-input image-input-outline" >
                                    <div class="image-input-wrapper w-125px h-125px"
                                        @if ($imageTmp)
                                            style="background-image: url('{{ $imageTmp->temporaryUrl() }}')"
                                        @elseif($team->image)
                                            style="background-image: url('{{ Storage::url($team->image->url) }}')"
                                        @else    
                                            style="background-image: url('{{ asset('assets/admin/media/users/blank.png') }}')"
                                        @endif>
                                    </div>

                                        <div
                                            x-data="{ isUploading: false, progress: 0 }"
                                            x-on:livewire-upload-start="isUploading = true"
                                            x-on:livewire-upload-finish="isUploading = false"
                                            x-on:livewire-upload-error="isUploading = false"
                                            x-on:livewire-upload-progress="progress = $event.detail.progress"
                                        >

                                            <input class="d-none" wire:model.defer="imageTmp" type="file" id="imageTmp" name="imageTmp" accept=".png, .jpg, .jpeg" />

                                            <!-- Progress Bar -->
                                            <div x-show="isUploading">
                                                <progress max="100" x-bind:value="progress"></progress>
                                            </div>
                                        </div>
                                        
                                    <label for="imageTmp" class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow image-edit">
                                        <i class="fa fa-pen"></i>
                                    </label>
                                    <label class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow image-remove" >
                                        <i class="bi bi-x fs-2"></i>
                                    </label>
                                </div>
                            </div>

                            <div class="fv-row mb-7">
                                <label class="required fw-bold fs-6 mb-2">Full Name</label>
                                <input wire:model="team.name"  type="text" name="user_name" class="form-control form-control-solid mb-3 mb-lg-0" placeholder="Full name" value="Emma Smith" />
                            </div>
                            
                            <div class="fv-row mb-7">
                                <label class="required fw-bold fs-6 mb-2">Email</label>
                                <input type="email" name="user_email" class="form-control form-control-solid mb-3 mb-lg-0" placeholder="example@domain.com" value="e.smith@kpmg.com.au" />
                            </div>
                            
                            <div class="mb-7">
                                <label class="required fw-bold fs-6 mb-5">Role</label>

                                <div class="d-flex fv-row">
                                    <div class="form-check form-check-custom form-check-solid">
                                        <input class="form-check-input me-3" name="user_role" type="radio" value="0" id="kt_modal_update_role_option_0" checked='checked' />
                                        <label class="form-check-label" for="kt_modal_update_role_option_0">
                                            <div class="fw-bolder text-gray-800">Administrator</div>
                                            <div class="text-gray-600">Best for business owners and company administrators</div>
                                        </label>
                                    </div>
                                </div>
                                
                                <div class='separator separator-dashed my-5'></div>

                            </div>
                        </div>
                        
                        <div class="text-center pt-15">
                            <button type="reset" class="btn btn-light me-3" data-bs-dismiss="modal">Cancelar</button>
                            <button type="submit" class="btn btn-primary">
                                <span class="indicator-label">Guardar cambios</span>
                            </button>
                        </div>
                    </form>
</div>
