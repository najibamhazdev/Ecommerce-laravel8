<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Support\Str;
use Carbon\Carbon;
use Livewire\WithFileUploads;

class AddProductComponent extends Component
{
    use WithFileUploads;
    public $name;
    public $slug;
    public $short_description;
    public $description;
    public $regular_price;
    public $sale_price;
    public $sku;
    public $stock_status;
    public $featured;
    public $quantity;
    public $image;
    public $image2;
    public $category_id;
    
    public function mount()
    {
        $this->stock_status = 'instock';
        $this->featured = 0;
    }



    public function generateslug()
    {
        $this->slug = Str::slug($this->name);
    }


    public function storeproduct()
    {
        $this->validate([
            'name' => 'required',
            'slug' => 'required',
            'regular_price'=>'required|numeric',
            'sale_price'=>'required|numeric',
            'sku' => 'required',
            'sale_price'=>'required|numeric',
            'category_id'=>'required|numeric',
        ]);

        $product = new Product();
        $product->name = $this->name;
        $product->slug = $this->slug;
        $product->short_description = $this->short_description;
        $product->description = $this->description;
        $product->regular_price = $this->regular_price;
        $product->sale_price = $this->sale_price;
        $product->sku = $this->sku;
        $product->stock_status = $this->stock_status;
        $product->featured = $this->featured;
        $product->quantity = $this->quantity;
        $product->category_id = $this->category_id;
        
        $imageName = Carbon::now()->timestamp . '-' . $this->image->extension();
        $this->image->storeAs('products',$imageName);
        $product->image = $imageName;
        
        $imageName2 = Carbon::now()->timestamp . '' . $this->image2->extension();
        $this->image2->storeAs('products',$imageName2);
        $product->image2 = $imageName2;
        
        $product->save();

        session()->flash('message','Product Created');

        
        
    }


    public function render()
    {
        $categories= Category::orderBy('name','asc')->get();
        return view('livewire.admin.add-product-component',['categories'=>$categories])->layout('layouts.base');
    }
}
