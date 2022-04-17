<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Cart;

class CartComponent extends Component
{
    public function render()
    {
        return view('livewire.cart-component')->layout('layouts.base');
    }

    public function increaseQty($id)
    {
        $product = Cart::get($id);
        $qty = $product->qty + 1;
        Cart::update($id,$qty);
    }

    public function decreaseQty($id)
    {
        $product = Cart::get($id);
        $qty = $product->qty - 1;
        if($qty >=0){
            Cart::update($id,$qty);
        }
    }

    public function destroyRow($id)
    {
        Cart::remove($id);
        session()->flash('success_message','Item removed from the Cart.');
    }
    
    public function destroyAll()
    {
        Cart::destroy();
        session()->flash('success_message','Items removed from the Cart.');
    }
}
