<?php

namespace App\Http\Livewire\Admin\Portfolio;

use App\Models\Portfolio;
use Illuminate\Support\Facades\Storage;
use Livewire\Component;
use Livewire\WithFileUploads;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Str;

class Form extends Component
{
    use WithFileUploads;

    public $method;
    public $evidence;

    //Tools
    public $imageTmp;

    public function mount(Portfolio $evidence, $method){
        $this->evidence = $evidence;
        $this->method = $method;    
    }

    protected function rules()
    {
        return [
            'evidence.name' => 'required|unique:portfolios,name,'.$this->evidence->id,
            'evidence.body' => 'nullable',
            'evidence.link' => 'nullable',
            'evidence.meta_keywords' => 'nullable',
        ];

    }

    public function render()
    {
        return view('livewire.admin.portfolio.form');
    }

    public function store(){
        $this->validate();
        $this->validateImage();
        $this->slug();
        $this->evidence->save();
        $this->saveImage();
        $this->flash('success', 'Servicio agregado al equipo con exito');
        return redirect()->route('admin.portfolio.show', $this->evidence);
    }

    public function update(){
        $this->validate();
        $this->validateImage();
        $this->slug();
        $this->evidence->update();
        $this->saveImage();
        $this->flash('success', 'Servicio actualizado con exito');
        return redirect()->route('admin.portfolio.show', $this->evidence);
    }

    public function slug(){
        $slug = Str::slug($this->evidence->name, '-');
        $this->evidence->slug = $slug;
    }

    public function validateImage(){
        if(!$this->evidence->image){
            $this->validate([
                'imageTmp' => 'required|image'
            ]);
        }
    } 


    public function saveImage(){
        if($this->imageTmp){

            $url = $this->imageTmp->store('public/evidence');

            if($this->evidence->image){
                if(Storage::exists($this->evidence->image->url)){
                    Storage::delete($this->evidence->image->url);
                }
                $this->evidence->image()->update([
                    'url' => $url,
                ]);
            }else{
                $this->evidence->image()->create([
                    'url' => $url,
                ]);
            }

            $imageOptimized = Image::make(Storage::get($url))
                    ->encode('webp', 80);
            Storage::put($url, (string) $imageOptimized);

        }
    }

    public function removeImage(){
        if($this->evidence->image){
            if(Storage::exists($this->evidence->image->url)){
                Storage::delete($this->evidence->image->url);
            }
            
            $this->evidence->image()->delete();
            $this->evidence->image = null;
        }
        $this->reset('imageTmp');
        $this->alert('success', 'Imagen eliminada con exito');
    }
}