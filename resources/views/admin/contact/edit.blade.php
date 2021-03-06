<div wire:ignore.self class="modal fade" id="modal-edit-{{ $contact->id }}" data-bs-backdrop="static" tabindex="-1"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered mw-650px">
        <div class="modal-content">
            <div class="modal-header" id="modal-edit_header">
                <h2 class="fw-bolder">{{ $contact->email }}</h2>
                <div class="btn btn-icon btn-active-icon-primary" data-bs-dismiss="modal">
                    <i class="fa fa-times-circle fa-4x"></i>
                </div>
            </div>

            <div class="modal-body scroll-y mx-5 mx-xl-15 my-7">

                @livewire('admin.contact.form', ['contact' => $contact, 'method' => 'update'], key($contact->id))

            </div>
        </div>
    </div>
</div>
