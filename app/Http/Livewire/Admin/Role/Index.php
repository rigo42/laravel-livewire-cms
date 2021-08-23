<?php

namespace App\Http\Livewire\Admin\Role;

use Exception;
use Illuminate\Support\Facades\Storage;
use Livewire\Component;
use Spatie\Permission\Models\Role;

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
         $roles = Role::orderBy('id', 'desc');
 
         if($this->search){
             $roles = $roles->where('name', 'LIKE', "%{$this->search}%");
         }
 
         $roles = $roles->paginate($this->perPage);
         return view('livewire.admin.role.index', compact('roles'));
     }
 
     public function destroy(Role $role)
     {
         try{
             if($role->image && Storage::exists($role->image->url)){
                 Storage::delete($role->image->url);
             }
             $role->delete();
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
