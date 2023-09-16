<?php

namespace App\Http\Livewire;

use Jantinnerezo\LivewireAlert\LivewireAlert;
use Livewire\Component;
use App\Services\Laptop\LaptopService;
use App\Models\Entity\Laptop;

class LaptopShow extends Component
{
    use LivewireAlert;
    public $code, $name, $category, $status;
    public $editMode = false;
    protected $rules = [
            'code' => 'required|string|unique:laptops',
            'name' => 'required|string',
            'category' => 'required|string',
            'status' => 'required|string',
    ];

    public function render(LaptopService $laptopServices)
    {
        $laptops = $laptopServices->getAll();
        return view('livewire.laptop-show', compact('laptops'))->extends('layouts.index')->section("content");
    }

    public function store(LaptopService $laptopService) {
        $this->validate();
        $data = [
            'code' => $this->code,
            'name' => $this->name,
            'category' => $this->category,
            'status' => $this->status,
        ];
        $laptopService->create($data);
        $this->alert('success', 'Laptop added succesfully');
        $this->resetInput();
    }


    
    public function delete(LaptopService $laptopService, $id){
        // Melakukan penghapusan data menggunakan PostService
        $laptops = $laptopService->delete($id);
        $this->alert('success', 'Laptop deleted succesfully');
    
    }

    public function edit($laptopId, LaptopService $laptopService)
    {
        $laptop = $laptopService->getById($laptopId);

        if ($laptop) {
            $this->code = $laptop->code;
            $this->name = $laptop->name;
            $this->category = $laptop->category;
            $this->status = $laptop->status;
            $this->laptopIdToEdit = $laptopId;
            $this->editMode = true;
        }
    }

    public function update(LaptopService $laptopService)
    {
        $validatedData = $this->validate([
            'code' => 'required',
            'name' => 'required',
            'category' => 'required',
            'status' => 'required',
        ]);

        $laptop = $laptopService->update($this->laptopIdToEdit, $validatedData);

        if ($laptop) {
            $this->resetInput();
            $this->editMode = false;
            $this->alert('success', 'Laptop updated successfully');
        } else {
            $this->alert('error', 'Unable to update laptop');
        }
    }

    public function cancelEdit()
    {
        $this->resetInput();
        $this->editMode = false; // Matikan mode edit
    }

    public function resetInput()
    {
        $this->code = '';
        $this->name = '';
        $this->category = '';
        $this->status = '';
    }

}
