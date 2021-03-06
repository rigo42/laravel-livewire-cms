<?php

namespace App\Http\Livewire\Admin\About\Team;

use App\Models\Team;
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
        $team = Team::orderBy('id', 'desc');

        if($this->search){
            $team = $team->where('name', 'LIKE', "%{$this->search}%");
        }

        $team = $team->paginate($this->perPage);
        return view('livewire.admin.about.team.index', compact('team'));
    }

    public function destroy(Team $person)
    {
        try{
            if($person->image && Storage::exists($person->image->url)){
                Storage::delete($person->image->url);
            }
            $person->delete();
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
