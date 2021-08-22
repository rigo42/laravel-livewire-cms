<?php

namespace App\Http\Livewire\Admin\Contact;

use App\Models\Contact;
use Livewire\Component;

class Form extends Component
{
    public $method;
    public $contact;

    public function mount(Contact $contact, $method){
        $this->contact = $contact;
        $this->method = $method;    
    }

    protected function rules()
    {
        return [
            'contact.email' => 'required|email',
            'contact.phone' => 'required',
        ];

    }

    public function render()
    {
        return view('livewire.admin.contact.form');
    }

    public function store(){
        $contacts = Contact::count();

        if($contacts > 1){
            $this->alert('warning', 'Solo puedes tener 1 registro de contacto');
        }else{
            $this->validate();
            $this->contact->save();
            $this->contact = new Contact();
            $this->alert('success', 'Información agregada a contacto con éxito');
            $this->emit('render');
        }
        
    }

    public function update(){
        $this->validate();
        $this->contact->update();
        $this->alert('success', 'contacta actualizada con éxito');
        $this->emit('render');
    }

}
