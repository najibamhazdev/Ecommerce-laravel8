<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Category;

class SearchComponent extends Component
{
    public $search;
    public $product_category;
    public $product_category_id;

    public function mount(){
        $this->product_category="All Categories";
        $this->fill(request()->only('search','product_category','product_category_id'));
    }

    public function render()
    {
        $categories = Category::all();
        return view('livewire.search-component',['catgories'=>$categories]);
    }
}
