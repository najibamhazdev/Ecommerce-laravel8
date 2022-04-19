<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use App\Models\Category;
use Illuminate\Support\Str;

class EditCategoryComponent extends Component
{

    
    public $category_id;
    public $slug;
    public $name;
    

    public function mount($category_id)
    {
        $this->category_id = $category_id;
        $category = Category::findOrFail($category_id);
        $this->slug = $category->slug;
        $this->name = $category->name;
        //$this->id = $category->id;
    }

    public function generateslug()
    {
        $this->slug = Str::slug($this->name);
    }

    public function updatecategory()
    {
        $this->validate([
            'name' => 'required',
            'slug' => 'required',
        ]);
        
        $category = Category::findOrFail($this->category_id);
        $category->name = $this->name;
        $category->slug = $this->slug;
        $category->save();
        session()->flash('message','Category Updated');
    }


    public function render()
    {
       
        return view('livewire.admin.edit-category-component')->layout('layouts.base');
    }
}
