<?php

namespace App\Http\Livewire\Admin\Service;

use App\Models\Service;
use Livewire\Component;

class Show extends Component
{
    public $service;

    
    public function mount(Service $service){
        $this->service = $service;
    }

    public function render()
    {
        return view('livewire.admin.service.show');
    }
}
