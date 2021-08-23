<?php

namespace App\Http\Livewire\Admin\Role;

use Livewire\Component;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class Form extends Component
{
    //Tools
    public $role;
    public $method;
    public $permissionsArray = [];

    public function mount(Role $role, $method){
        $this->role = $role;
        $this->method = $method; 
        foreach($this->role->permissions as $permission){
            array_push($this->permissionsArray, "".$permission->name."");
        }   
    }

    protected function rules()
    {
        return [
            'role.name' => 'required',
        ];

    }

    public function render()
    {
        $permissions = Permission::orderBy('name')->cursor();
        return view('livewire.admin.role.form', compact('permissions'));
    }

    public function store(){
        $this->validate();
        $this->role->save();
        $this->savePermission();
        $this->role = new role();
        $this->reset('permissionsArray');
        $this->alert('success', 'Rol agregado con éxito');
        $this->emit('render');
    }

    public function update(){
        $this->validate();
        $this->role->update();
        $this->savePermission();
        $this->alert('success', 'Rol actualizado con éxito');
        $this->emit('render');
    }

    public function savePermission(){
        $this->role->syncPermissions($this->permissionsArray);
    }

}
