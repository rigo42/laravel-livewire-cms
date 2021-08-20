<?php

namespace App\Http\Livewire\Admin\About\Team;

use App\Models\Team;
use Illuminate\Support\Facades\Storage;
use Livewire\Component;
use Livewire\WithFileUploads;
use Intervention\Image\Facades\Image;

class Form extends Component
{

    use WithFileUploads;

    public $method;
    public $person;

    //Tools
    public $imageTmp;

    public function mount(Team $person, $method){
        $this->person = $person;
        $this->method = $method;    
    }

    protected function rules()
    {
        return [
            'person.name' => 'required',
            'person.position' => 'required',
            'person.biography' => 'nullable',
            'person.link_facebook' => 'nullable',
            'person.link_linkedin' => 'nullable',
        ];

    }

    public function render()
    {
        return view('livewire.admin.about.team.form');
    }

    public function store(){
        $this->validate();
        $this->validateImage();
        $this->person->save();
        $this->saveImage();
        $this->person = new Team();
        $this->alert('success', 'Persona agregada al equipo con exito');
        $this->emit('render');
    }

    public function update(){
        $this->validate();
        $this->validateImage();
        $this->person->update();
        $this->saveImage();
        $this->alert('success', 'Persona actualizada con exito');
        $this->emit('render');
    }

    public function validateImage(){
        if(!$this->person->image){
            $this->validate([
                'imageTmp' => 'required|image'
            ]);
        }
    }

    public function saveImage(){
        if($this->imageTmp){

            $url = $this->imageTmp->store('public/team');

            if($this->person->image){
                if(Storage::exists($this->person->image->url)){
                    Storage::delete($this->person->image->url);
                }
                $this->person->image()->update([
                    'url' => $url,
                ]);
            }else{
                $this->person->image()->create([
                    'url' => $url,
                ]);
            }

            $imageOptimized = Image::make(Storage::get($url))
                    ->widen(600)
                    ->encode('webp', 80)
                    ->limitColors(255);
            Storage::put($url, (string) $imageOptimized);

        }
    }

    public function removeImage(){
        if($this->person->image){
            if(Storage::exists($this->person->image->url)){
                Storage::delete($this->person->image->url);
            }
            
            $this->person->image()->delete();
            $this->person->image = null;
        }
        $this->reset('imageTmp');
        $this->alert('success', 'Imagen eliminada con exito');
    }
    
}
