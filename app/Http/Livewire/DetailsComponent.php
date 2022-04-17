<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Product;
use Cart;

class DetailsComponent extends Component
{
    public $slug;

    public function mount($slug)
    {
        $this->slug = $slug;
    }

    public function store($product_id, $product_name,$product_price)
    {
        Cart::add($product_id,$product_name,1,$product_price)->associate('App\Models\Product');
        Session()->flash('success_message','Item addes in Cart');
        return redirect()->route('product.cart');
    }

    

    public function render()
    {
        $product = Product::where('slug',$this->slug)->first();
        
        $related_products=Product::where('category_id',$product->category_id)->inRandomOrder()->limit(6)->get();
        
        return view('livewire.details-component',['product'=>$product,'related_products'=>$related_products])->layout('layouts.base');
    }
}
