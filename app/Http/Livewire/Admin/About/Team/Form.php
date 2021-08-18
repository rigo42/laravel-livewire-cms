<?php

namespace App\Http\Livewire\Admin\About\Team;

use App\Models\Team;
use Exception;
use Illuminate\Support\Facades\Storage;
use Livewire\Component;
use Livewire\WithFileUploads;
use Intervention\Image\Facades\Image;

class Form extends Component
{

    use WithFileUploads;

   
    public $method;
    public $team;

    //Tools
    public $imageTmp;

    public function mount(Team $team, $method){
        $this->team = $team;
        $this->method = $method;    
    }

    protected function rules()
    {
        return [
            'team.name' => 'required',
            'team.position' => 'required',
            'team.email' => 'required|email',
            'team.biography' => 'nullable',
            'team.url_facebook' => 'nullable',
            'team.url_linkedin' => 'nullable',
        ];

    }

    public function render()
    {
        return view('livewire.admin.about.team.form');
    }

    public function store(){
        $this->validate();
        $this->team->save();
        $this->saveImage();
        $this->flash('success', 'Persona agregada al equipo con exito');
        $this->emit('render');
    }

    public function update(){
        $this->validate();
        $this->team->update();
        $this->saveImage();
        $this->flash('success', 'Persona actualizada con exito');
        return redirect()->route('team.show', $this->team);
    }


    public function saveImage(){
        if($this->imageTmp){

            $url = $this->imageTmp->store('public/team');

            if($this->team->image){
                if(Storage::exists($this->team->image->url)){
                    Storage::delete($this->team->image->url);
                }
                $this->team->image()->update([
                    'url' => $url,
                ]);
            }else{
                $this->team->image()->create([
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
        if($this->team->image){
            if(Storage::exists($this->team->image->url)){
                Storage::delete($this->team->image->url);
            }
            
            $this->team->image()->delete();
            $this->team->image = null;
        }
        $this->reset('imageTmp');
        $this->alert('success', 'Imagen eliminada con exito');
    }
    
}
