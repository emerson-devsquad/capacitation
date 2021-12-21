<?php

namespace App\Http\Livewire\Home;

use App\Models\Product;
use Livewire\Component;

class ProductList extends Component
{
    public function getProductsProperty()
    {
        return Product::where('status', Product::STATUS_AVAILABLE)
            ->latest()
            ->take(4)
            ->get();
    }

    public function render()
    {
        return view('livewire.home.product-list');
    }
}
