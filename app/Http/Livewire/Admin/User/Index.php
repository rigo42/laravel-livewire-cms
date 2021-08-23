<?php

namespace App\Http\Livewire\Admin\User;

use App\Models\User;
use Exception;
use Illuminate\Support\Facades\Storage;
use Livewire\Component;
use Livewire\WithPagination;

class Index extends Component
{
    use WithPagination;

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
        $users = User::orderBy('id', 'desc');

        if($this->search){
            $users = $users->where('name', 'LIKE', "%{$this->search}%");
        }

        $users = $users->paginate($this->perPage);
        return view('livewire.admin.user.index', compact('users'));
    }

    public function destroy(User $user)
    {
        try{
            if($user->image && Storage::exists($user->image->url)){
                Storage::delete($user->image->url);
            }
            $user->delete();
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
