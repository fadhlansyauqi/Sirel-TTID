<?php

namespace App\Http\Livewire;

use Jantinnerezo\LivewireAlert\LivewireAlert;
use Livewire\Component;
use App\Services\Renter\RenterService;

class Renter extends Component
{
    use LivewireAlert;
    public $name, $email, $phone, $address;
    protected $rules = [
            'name' => 'required|string',
            'email' => 'required|email',
            'phone' => 'required',
            'address' => 'required',
    ];

    public function render()
    {
        return view('livewire.renter')->extends('layouts.index')->section("content");
    }


    public function store(RenterService $renterService) {
        $this->validate();
        $data = [
            'name' => $this->name,
            'email' => $this->email,
            'phone' => $this->phone,
            'address' => $this->address,
        ];
        $renterService->create($data);
        $this->alert('success', 'User data added succesfully');
        $this->resetInput();
    }

    public function resetInput()
    {
        $this->name = '';
        $this->email = '';
        $this->phone = '';
        $this->address = '';
    }
}