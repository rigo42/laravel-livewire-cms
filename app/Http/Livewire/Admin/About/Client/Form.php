<?php

namespace App\Http\Livewire\Admin\About\Client;

use App\Models\Client;
use Illuminate\Support\Facades\Storage;
use Livewire\Component;
use Livewire\WithFileUploads;
use Intervention\Image\Facades\Image;

class Form extends Component
{
    use WithFileUploads;

    public $method;
    public $client;

    //Tools
    public $imageTmp;

    public function mount(Client $client, $method){
        $this->client = $client;
        $this->method = $method;    
    }

    protected function rules()
    {
        return [
            'client.name' => 'required',
            'client.company' => 'nullable',
        ];

    }

    public function render()
    {
        return view('livewire.admin.about.client.form');
    }

    public function store(){
        $this->validate();
        $this->client->save();
        $this->saveImage();
        $this->client = new Client();
        $this->alert('success', 'cliente agregado con exito');
        $this->emit('render');
    }

    public function update(){
        $this->validate();
        $this->client->update();
        $this->saveImage();
        $this->alert('success', 'cliente actualizado con exito');
        $this->emit('render');
    }


    public function saveImage(){
        if($this->imageTmp){

            $url = $this->imageTmp->store('public/client');

            if($this->client->image){
                if(Storage::exists($this->client->image->url)){
                    Storage::delete($this->client->image->url);
                }
                $this->client->image()->update([
                    'url' => $url,
                ]);
            }else{
                $this->client->image()->create([
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
        if($this->client->image){
            if(Storage::exists($this->client->image->url)){
                Storage::delete($this->client->image->url);
            }
            
            $this->client->image()->delete();
            $this->client->image = null;
        }
        $this->reset('imageTmp');
        $this->alert('success', 'Imagen eliminada con exito');
    }
}
