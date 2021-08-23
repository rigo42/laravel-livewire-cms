<?php

namespace App\Http\Livewire\Admin\User;

use App\Models\User;
use Livewire\Component;
use Spatie\Permission\Models\Permission as PermissionSpatie;

class Permission extends Component
{

    public $method;
    public $user;

    //foreign
    public $permissionsArray = [];

    public function mount(User $user, $method){
        $this->user = $user;
        $this->method = $method;

        foreach($this->user->permissions as $permission){
            array_push($this->permissionsArray, "".$permission->name."");
        }
    }


    public function render()
    {
        $permissions = PermissionSpatie::orderBy('id', 'desc')->cursor();
        return view('livewire.admin.user.permission', compact('permissions'));
    }

    public function update()
    {
        $this->user->syncPermissions($this->permissionsArray);
        $this->flash('success', 'Permisos actualizados con éxito.');
        return redirect()->route('admin.user.show', $this->user);
    }

}
