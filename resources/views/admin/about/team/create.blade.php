<div class="card-toolbar">
    <div class="d-flex justify-content-end" >
        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modal-create">
            <i class="fa fa-plus"></i> Nuevo personal
        </button>                            
    </div>
   
    <div wire:ignore.self class="modal fade" id="modal-create" data-bs-backdrop="static" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered mw-650px">
            <div class="modal-content">
                <div class="modal-header" id="modal-create_header">
                    <h2 class="fw-bolder">Nuevo personal</h2>
                    <div class="btn btn-icon btn-active-icon-primary" data-bs-dismiss="modal">
                       <i class="fa fa-times-circle fa-4x"></i>
                    </div>
                </div>
                
                <div class="modal-body scroll-y mx-5 mx-xl-15 my-7">
                    
                    @livewire('admin.about.team.form', ['method' => 'store'], key('create'))

                </div>
            </div>
        </div>
    </div>
    
</div>