<?php

namespace App\Http\Livewire\Admin\Service;

use App\Models\Service;
use Illuminate\Support\Facades\Storage;
use Livewire\Component;
use Livewire\WithFileUploads;
use Intervention\Image\Facades\Image;

class Form extends Component
{
    use WithFileUploads;

    public $method;
    public $service;

    //Tools
    public $imageTmp;

    public function mount(Service $service, $method){
        $this->service = $service;
        $this->method = $method;    
    }

    protected function rules()
    {
        return [
            'service.name' => 'required|unique:services,name,'.$this->service->id,
            'service.fragment' => 'required',
            'service.meta_keywords' => 'nullable',
            'service.body' => 'nullable',
        ];

    }

    public function render()
    {
        return view('livewire.admin.service.form');
    }

    public function store(){
        $this->validate();
        $this->validateImage();
        $this->service->save();
        $this->saveImage();
        $this->flash('success', 'Servicio agregado al equipo con éxito');
        return redirect()->route('admin.service.show', $this->service);
    }

    public function update(){
        $this->validate();
        $this->validateImage();
        $this->service->update();
        $this->saveImage();
        $this->flash('success', 'Servicio actualizado con éxito');
        return redirect()->route('admin.service.show', $this->service);
    }

    public function validateImage(){
        if(!$this->service->image){
            $this->validate([
                'imageTmp' => 'required|image'
            ]);
        }
    } 


    public function saveImage(){
        if($this->imageTmp){

            $url = $this->imageTmp->store('public/service');

            if($this->service->image){
                if(Storage::exists($this->service->image->url)){
                    Storage::delete($this->service->image->url);
                }
                $this->service->image()->update([
                    'url' => $url,
                ]);
            }else{
                $this->service->image()->create([
                    'url' => $url,
                ]);
            }

            $imageOptimized = Image::make(Storage::get($url))
                    ->widen(800)
                    ->encode('webp', 80);
            Storage::put($url, (string) $imageOptimized);

        }
    }

    public function removeImage(){
        if($this->service->image){
            if(Storage::exists($this->service->image->url)){
                Storage::delete($this->service->image->url);
            }
            
            $this->service->image()->delete();
            $this->service->image = null;
        }
        $this->reset('imageTmp');
        $this->alert('success', 'Imagen eliminada con éxito');
    }
}
