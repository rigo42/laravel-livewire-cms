<?php

namespace App\Http\Livewire\Admin\Permission;

use Livewire\Component;
use Spatie\Permission\Models\Permission;

class Form extends Component
{
    //Tools
    public $permission;
    public $method;

    public function mount(Permission $permission, $method){
        $this->permission = $permission;
        $this->method = $method; 
    }

    protected function rules()
    {
        return [
            'permission.name' => 'required',
        ];

    }

    public function render()
    {
        $permissions = Permission::orderBy('name')->cursor();
        return view('livewire.admin.permission.form', compact('permissions'));
    }

    public function store(){
        $this->validate();
        $this->permission->save();
        $this->permission = new permission();
        $this->alert('success', 'Permiso agregado con éxito');
        $this->emit('render');
    }

    public function update(){
        $this->validate();
        $this->permission->update();
        $this->alert('success', 'Permiso actualizado con éxito');
        $this->emit('render');
    }

}
