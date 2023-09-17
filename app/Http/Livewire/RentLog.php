<?php

namespace App\Http\Livewire;

use Livewire\Component;

class RentLog extends Component
{
    public function render()
    {
        return view('livewire.rent-log')->extends('layouts.index')->section("content");
    }
}
