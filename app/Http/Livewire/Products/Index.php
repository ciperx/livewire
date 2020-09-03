<?php

namespace App\Http\Livewire\Products;

use App\Product;
use Livewire\Component;

class Index extends Component
{
    public function render()
    {
        $products = Product::paginate(15);
        return view('livewire.products.index', compact('products'));
    }
}
