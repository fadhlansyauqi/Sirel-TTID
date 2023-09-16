<?php

namespace App\Http\Livewire;

use Livewire\Component;

class LaptopCategory extends Component
{
    public function render()
    {
        return view('livewire.laptop-category')->extends('layouts.index')->section("content");
    }
}
