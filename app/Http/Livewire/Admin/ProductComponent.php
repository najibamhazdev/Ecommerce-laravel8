<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use App\Models\Product;
use Livewire\WithPagination;

class ProductComponent extends Component
{
    public function render()
    {
        $products = Product::orderBy('id','desc')->paginate(10);
        return view('livewire.admin.product-component',['products'=>$products])->layout('layouts.base');
    }

    public function deleteProduct($id)
    {
        $product = Product::findOrFail($id);
        $product->delete();
        session()->flash('message','Product Deleted');

    }
}
