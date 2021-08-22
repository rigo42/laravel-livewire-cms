<?php

namespace App\Http\Livewire\Admin\Portfolio;

use App\Models\Portfolio;
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
        $portfolio = Portfolio::orderBy('id', 'desc');

        if($this->search){
            $portfolio = $portfolio->where('name', 'LIKE', "%{$this->search}%");
        }

        $portfolio = $portfolio->paginate($this->perPage);
        return view('livewire.admin.portfolio.index', compact('portfolio'));
    }


    public function destroy($id)
    {
        $evidence = Portfolio::findOrFail($id);
        try{
            if($evidence->image && Storage::exists($evidence->image->url)){
                Storage::delete($evidence->image->url);
            }
            $evidence->delete();
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
