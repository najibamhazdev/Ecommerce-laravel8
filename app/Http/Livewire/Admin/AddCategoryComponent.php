<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;

use App\Models\Category;
use Illuminate\Support\Str;

class AddCategoryComponent extends Component
{
    public $name;
    public $slug;

    public function generateslug()
    {
        $this->slug = Str::slug($this->name);
    }



    public function storecategory()
    {
        $this->validate([
            'name' => 'required',
            'slug' => 'required',
        ]);

        $category = new Category();
        $category->name = $this->name;
        $category->slug = $this->slug;
        $category->save();

        session()->flash('message','Category Created');

        
        
    }

    public function render()
    {
        return view('livewire.admin.add-category-component')->layout('layouts.base');
    }
    
}
