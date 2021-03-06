<?php

namespace App\Http\Livewire\Admin\Blog\Blog;

use App\Models\Blog;
use App\Models\BlogCategory;
use App\Models\BlogTag;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Livewire\Component;
use Livewire\WithFileUploads;
use Intervention\Image\Facades\Image;

class Form extends Component
{
    use WithFileUploads;

    public $method;
    public $blog;

    //Tools
    public $imageTmp;
    public $categoryArray = [];
    public $tagArray = [];

    public function mount(Blog $blog, $method){
        $this->blog = $blog;
        $this->method = $method; 
        
        foreach($this->blog->blogCategories as $category){
            array_push($this->categoryArray, "".$category->id."");
        }

        foreach($this->blog->blogTags as $tag){
            array_push($this->tagArray, "".$tag->id."");
        }
    }

    protected function rules()
    {
        return [
            'blog.name' => 'required|unique:blogs,name,'.$this->blog->id,
            'blog.fragment' => 'required',
            'blog.body' => 'nullable',
            'blog.meta_keywords' => 'nullable',
        ];

    }

    public function render()
    {
        $categories = BlogCategory::orderBy('id', 'desc')->cursor();
        $tags = BlogTag::orderBy('id', 'desc')->cursor();
        return view('livewire.admin.blog.blog.form', compact('categories', 'tags'));
    }

    public function store(){
        $this->validate();
        $this->validateImage();
        $this->blog->user_id = Auth::id();
        $this->blog->save();
        $this->saveImage();
        $this->saveCategories();
        $this->saveTags();
        $this->flash('success', 'Blog agregado con éxito');
        return redirect()->route('admin.blog.show', $this->blog);
    }

    public function update(){
        $this->validate();
        $this->validateImage();
        $this->blog->update();
        $this->saveImage();
        $this->saveCategories();
        $this->saveTags();        
        $this->flash('success', 'Blog actualizado con éxito');
        return redirect()->route('admin.blog.show', $this->blog);
    }

    public function validateImage(){
        if(!$this->blog->image){
            $this->validate([
                'imageTmp' => 'required|image'
            ]);
        }
    } 

    public function saveImage(){
        if($this->imageTmp){

            $url = $this->imageTmp->store('public/blog');

            if($this->blog->image){
                if(Storage::exists($this->blog->image->url)){
                    Storage::delete($this->blog->image->url);
                }
                $this->blog->image()->update([
                    'url' => $url,
                ]);
            }else{
                $this->blog->image()->create([
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
        if($this->blog->image){
            if(Storage::exists($this->blog->image->url)){
                Storage::delete($this->blog->image->url);
            }
            
            $this->blog->image()->delete();
            $this->blog->image = null;
        }
        $this->reset('imageTmp');
        $this->alert('success', 'Imagen eliminada con éxito');
    }

    public function saveCategories(){
        $this->blog->blogCategories()->sync($this->categoryArray);
    }

    public function saveTags(){
        $this->blog->blogTags()->sync($this->tagArray);
    }
}
