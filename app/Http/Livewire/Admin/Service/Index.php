<?php

namespace App\Http\Livewire\Admin\Service;

use App\Models\Service;
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

    public function updatingSearch()
    {
        $this->resetPage();
    }

    public function render()
    {
        $services = Service::orderBy('id', 'desc');

        if($this->search){
            $services = $services->where('name', 'LIKE', "%{$this->search}%");
        }

        $services = $services->paginate($this->perPage);
        return view('livewire.admin.service.index', compact('services'));
    }


    public function destroy($id)
    {
        $service = Service::findOrFail($id);
        try{
            if($service->image && Storage::exists($service->image->url)){
                Storage::delete($service->image->url);
            }
            $service->delete();
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
