<?php

namespace App\Http\Livewire\Admin\Permission;

use Exception;
use Illuminate\Support\Facades\Storage;
use Livewire\Component;
use Spatie\Permission\Models\Permission;

class Index extends Component
{
    //Tools
    public $perPage = 50;
    public $search;
    protected $queryString = ['search' => ['except' => '']];

    //Theme
    protected $paginationTheme = 'bootstrap';

    //Listeners
    protected $listeners = ['render'];

    public function updatingSearch()
    {
        $this->resetPage();
    }

    public function render()
    {
        $permissions = Permission::orderBy('id', 'desc');

        if($this->search){
            $permissions = $permissions->where('name', 'LIKE', "%{$this->search}%");
        }

        $permissions = $permissions->paginate($this->perPage);
        return view('livewire.admin.permission.index', compact('permissions'));
    }

    public function destroy(Permission $permission)
    {
        try{
            
            $permission->delete();
            $this->alert('success', 'Eliminación con éxito');
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
