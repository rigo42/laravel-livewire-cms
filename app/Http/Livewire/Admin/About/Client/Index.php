<?php

namespace App\Http\Livewire\Admin\About\Client;

use App\Models\Client;
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
        $clients = Client::orderBy('id', 'desc');

        if($this->search){
            $clients = $clients->where('name', 'LIKE', "%{$this->search}%");
        }

        $clients = $clients->paginate($this->perPage);
        return view('livewire.admin.about.client.index', compact('clients'));
    }

    public function destroy(Client $client)
    {
        try{
            if($client->image && Storage::exists($client->image->url)){
                Storage::delete($client->image->url);
            }
            $client->delete();
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
