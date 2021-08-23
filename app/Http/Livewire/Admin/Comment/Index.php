<?php

namespace App\Http\Livewire\Admin\Comment;

use App\Models\Comment;
use Exception;
use Livewire\Component;

class Index extends Component
{
    public $model; 

    public function mount($model){
        $this->model = $model;
    }

    public function render()
    {
        $comments = $this->model->comments()->paginate();
        return view('livewire.admin.comment.index', compact('comments'));
    }

    public function refuse(Comment $comment){
        try{
            $comment->aproved = false;
            $comment->update();
            $this->alert('success', 'Rechazado con éxito');
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

    public function aprove(Comment $comment){
        try{
            $comment->aproved = true;
            $comment->update();
            $this->alert('success', 'Aprovado con éxito');
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

    public function destroy(Comment $comment){
        try{
            $comment->delete();
            $this->alert('success', 'Eliminado con éxito');
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
