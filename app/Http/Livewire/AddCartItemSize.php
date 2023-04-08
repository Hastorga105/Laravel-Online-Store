<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Model\Size;

class AddCartItemSize extends Component
{
    public $qty=1;
    public $quantity=0;
    public $product, $size;
    public $size_id = "";
    public $color_id = "";

    public function updatedSizeId($value){
        $Size = Size::find($value);
        $this->colors = $size->colors;
    }

    public function mount(){
        $this->sizes = $this->product->size;

    }
    public function increment(){
        $this->qty++;
    }
    public function decrement(){
        $this->qty--;
    }

    public function render()
    {
        return view('livewire.add-cart-item-size');
    }
}
