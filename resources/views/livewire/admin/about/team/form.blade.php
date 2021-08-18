<div>
    <form class="form" action="#">
        <div class="d-flex flex-column scroll-y me-n7 pe-7" id="modal-create_scroll" data-kt-scroll="true" data-kt-scroll-activate="{default: false, lg: true}" data-kt-scroll-max-height="auto" data-kt-scroll-dependencies="#modal-create_header" data-kt-scroll-wrappers="#modal-create_scroll" data-kt-scroll-offset="300px">
            
            <div class="fv-row mb-7">
                <label class="d-block fw-bold fs-6 mb-5">Avatar</label>
                <div class="image-input image-input-outline" data-kt-image-input="true" style="background-image: url(assets/media/avatars/blank.png)">
                    <div class="image-input-wrapper w-125px h-125px" style="background-image: url(assets/media/avatars/150-1.jpg);"></div>
                    <label class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow" data-kt-image-input-action="change" data-bs-toggle="tooltip" title="Change avatar">
                        <i class="bi bi-pencil-fill fs-7"></i>
                        <input type="file" name="avatar" accept=".png, .jpg, .jpeg" />
                        <input type="hidden" name="avatar_remove" />
                    </label>
                    <span class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow" data-kt-image-input-action="cancel" data-bs-toggle="tooltip" title="Cancel avatar">
                        <i class="bi bi-x fs-2"></i>
                    </span>
                    <span class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow" data-kt-image-input-action="remove" data-bs-toggle="tooltip" title="Remove avatar">
                        <i class="bi bi-x fs-2"></i>
                    </span>
                </div>
            </div>

            <div class="fv-row mb-7">
                <label class="required fw-bold fs-6 mb-2">Full Name</label>
                <input type="text" name="user_name" class="form-control form-control-solid mb-3 mb-lg-0" placeholder="Full name" value="Emma Smith" />
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
