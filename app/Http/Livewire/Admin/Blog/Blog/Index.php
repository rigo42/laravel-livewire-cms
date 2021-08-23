<?php

namespace App\Http\Livewire\Admin\Blog\Blog;

use App\Models\Blog;
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
        $blogs = Blog::with('user')->orderBy('id', 'desc');
        
        if($this->search){
            $blogs = $blogs->where('name', 'LIKE', "%{$this->search}%");
        }

        $blogs = $blogs->paginate($this->perPage);
        return view('livewire.admin.blog.blog.index', compact('blogs'));
    }


    public function destroy($id)
    {
        $blog = Blog::findOrFail($id);
        try{
            if($blog->image && Storage::exists($blog->image->url)){
                Storage::delete($blog->image->url);
            }
            $blog->delete();
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
