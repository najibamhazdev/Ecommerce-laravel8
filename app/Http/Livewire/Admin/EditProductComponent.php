<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Support\Str;
use Carbon\Carbon;
use Livewire\WithFileUploads;

class EditProductComponent extends Component
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
    public $product_id;
    public $newimage;
    public $newimage2;


    public function render()
    {
        $categories= Category::orderBy('name','asc')->get();
        return view('livewire.admin.edit-product-component',['categories'=>$categories])->layout('layouts.base');
    }

    public function mount($product_id)
    {
        $product = Product::findOrFail($product_id);
        
        $this->name = $product->name ;
        $this->slug = $product->slug ;
        $this->short_description = $product->short_description ;
        $this->description = $product->description ;
        $this->regular_price = $product->regular_price ;
        $this->sale_price = $product->sale_price ;
        $this->sku = $product->sku ;
        $this->stock_status = $product->stock_status ;
        $this->featured = $product->featured ;
        $this->quantity = $product->quantity ;
        $this->image = $product->image ;
        $this->image2 = $product->image2 ;
        $this->category_id = $product->category_id ;
        $this->product_id = $product->id ;
        

    }



    public function generateslug()
    {
        $this->slug = Str::slug($this->name);
    }

    public function updateproduct()
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

        $product = Product::findOrFail($this->product_id);
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
        if(isset($newimage))
        {
            $imageName = Carbon::now()->timestamp . '-' . $this->newimage->extension();
            $this->newimage->storeAs('products',$imageName);
            $product->image = $imageName;
        }
        if(isset($newimage2))
        {
            $imageName2 = Carbon::now()->timestamp . '' . $this->newimage2->extension();
            $this->newimage2->storeAs('products',$imageName2);
            $product->image2 = $imageName2;
        }
        
        $product->save();

        session()->flash('message','Product Updated');
    }
}
