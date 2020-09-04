<?php

namespace App\Http\Livewire\Carts;

use Livewire\Component;

class Button extends Component
{
    public $product;
    public function mount($product)
    {
        $this->product = $product;
    }

    public function addToCart()
    {
        auth()->user()->carts()->save($this->product);
        $this->emit('addedToCart');
    }

    public function removeFromCart()
    {
        auth()->user()->carts()->detach($this->product);
        $this->emit('removeFromCart');

    }

    public function render()
    {
        return view('livewire.carts.button');
    }
}
