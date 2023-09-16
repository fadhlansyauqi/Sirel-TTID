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

    public function edit($laptopId)
    {
        $laptop = Laptop::find($laptopId);

        if ($laptop) {
            $this->code = $laptop->code;
            $this->name = $laptop->name;
            $this->category = $laptop->category;
            $this->status = $laptop->status;
            $this->laptopIdToEdit = $laptopId;
            $this->editMode = true; // Aktifkan mode edit
        }
    }

    public function cancelEdit()
    {
        $this->resetInput();
        $this->editMode = false; // Matikan mode edit
    }

    public function update()
    {
        $validatedData = $this->validate([
            'code' => 'required',
            'name' => 'required',
            'category' => 'required',
            'status' => 'required',
        ]);

        $laptop = Laptop::find($this->laptopIdToEdit);

        if ($laptop) {
            $laptop->update($validatedData);
            $this->resetInput();
            $this->editMode = false; // Matikan mode edit setelah update
            $this->alert('success', 'Laptop updated succesfully');
        }

        
    }

    public function resetInput()
    {
        $this->code = '';
        $this->name = '';
        $this->category = '';
        $this->status = '';
    }

}
