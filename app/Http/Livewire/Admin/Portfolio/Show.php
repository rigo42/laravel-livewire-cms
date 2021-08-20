<?php

namespace App\Http\Livewire\Admin\Portfolio;

use App\Models\Portfolio;
use Livewire\Component;

class Show extends Component
{
    public $evidence;

    
    public function mount(Portfolio $evidence){
        $this->evidence = $evidence;
    }

    public function render()
    {
        return view('livewire.admin.portfolio.show');
    }
}
