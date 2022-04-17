<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\Product;
use Cart;
use App\Models\Category;

class CategoryComponent extends Component
{
    public $slug;

    public function mount($slug)
    {
        $this->slug = $slug;
    }
    
    public function render()
    {
        
        $category = Category::where('slug',$this->slug)->first();
        $categories = Category::all();
        if($category){
            $products = Product::where('category_id',$category->id)->paginate(12);;
        }
       //dd($category);
        return view('livewire.category-component',['products'=>$products,'selected_category'=>$category,'categories'=>$categories])->layout('layouts.base');
    }
}
