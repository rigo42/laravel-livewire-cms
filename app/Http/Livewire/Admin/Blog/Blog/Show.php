<?php

namespace App\Http\Livewire\Admin\Blog\Blog;

use App\Models\Blog;
use Livewire\Component;

class Show extends Component
{
    public $blog;

    
    public function mount(Blog $blog){
        $this->blog = $blog;
    }

    public function render()
    {
        return view('livewire.admin.blog.blog.show');
    }
}
