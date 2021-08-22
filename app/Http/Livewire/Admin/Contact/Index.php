<?php

namespace App\Http\Livewire\Admin\Contact;

use App\Models\Contact;
use Exception;
use Livewire\Component;
use Livewire\WithPagination;

class Index extends Component
{
    use WithPagination;

    //Listeners
    protected $listeners = ['render'];

    public function render()
    {
        $contacts = Contact::cursor();
        
        return view('livewire.admin.contact.index', compact('contacts'));
    }

    public function destroy(Contact $contact)
    {
        try{
            $contact->delete();
            $this->alert('success', 'Eliminación con exito');
        }catch(Exception $e){
            $this->alert('error', 
                'Ocurrio un error en la eliminación: '.$e->getMessage(), 
                [
                    'showConfirmButton' => true,
                    'confirmButtonText' => 'Entiendo',
                    'timer' => null,
                ]);
        }
    }
}
