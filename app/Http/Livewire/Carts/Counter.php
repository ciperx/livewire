<?php

namespace App\Http\Livewire\Carts;

use Livewire\Component;

class Counter extends Component
{
    public $cartCounter = 0;

    protected $listeners = ['addedToCart', 'removeFromCart'];

    public function mount()
    {
        $this->cartCounter = auth()->user()->carts()->count();
    }

    public function addedToCart()
    {
        $this->cartCounter += 1;
    }

    public function removeFromCart()
    {
        $this->cartCounter -= 1;
    }

    public function render()
    {
        return view('livewire.carts.counter');
    }
}
