<?php

namespace App\Http\Livewire;

use Jantinnerezo\LivewireAlert\LivewireAlert;
use Livewire\WithPagination;
use Livewire\Component;
use App\Services\Rent\RentService;
use App\Models\Entity\Rent;
use Illuminate\Pagination\Paginator;

class RentLog extends Component
{
    use WithPagination;
    use LivewireAlert;

    protected $paginationTheme = 'bootstrap';
    public $customerName, $laptopName, $rentDate, $returnDate;
    public $editMode = false;
    public $search = '';
    protected $rules = [
            'customerName' => 'required|string',
            'laptopName' => 'required|string',
            'rentDate' => 'required|date',
            'returnDate' => 'required|date',
    ];

    public function render(RentService $rentServices)
    {
        if ($this->search) {
            $rents = Rent::where(function ($query) {
                $query->where('customerName', 'like', '%' . $this->search . '%')
                    ->orWhere('laptopName', 'like', '%' . $this->search . '%')
                    ->orWhere('rentDate', 'like', '%' . $this->search . '%')
                    ->orWhere('returnDate', 'like', '%' . $this->search . '%');
            })
            ->orderBy('id', 'ASC')
            ->paginate(5);

            $rents->appends(['search' => $this->search]); 
        } else {
            $rents = $rentServices->getAll();
            $rents = Rent::paginate(5);
        }

        return view('livewire.rent-log', compact('rents'))
            ->extends('layouts.index')
            ->section("content");
    }

    public function store(RentService $rentService) {
        $this->validate();
        $data = [
            'customerName' => $this->customerName,
            'laptopName' => $this->laptopName,
            'rentDate' => $this->rentDate,
            'returnDate' => $this->returnDate,
        ];
        $rentService->create($data);
        $this->alert('success', 'Rent data added succesfully');
        $this->resetInput();
    }

    public function delete(RentService $rentService, $id){
        // Melakukan penghapusan data menggunakan PostService
        $rents = $rentService->delete($id);
        $this->alert('success', 'Rent data deleted succesfully');
    
    }

    public function edit($rentId, RentService $rentService)
    {
        $rent = $rentService->getById($rentId);

        if ($rent) {
            $this->customerName = $rent->customerName;
            $this->laptopName = $rent->laptopName;
            $this->rentDate = $rent->rentDate;
            $this->returnDate = $rent->returnDate;
            $this->rentIdToEdit = $rentId;
            $this->editMode = true;
        }
    }

    public function update(RentService $rentService)
    {
        $validatedData = $this->validate([
            'customerName' => 'required',
            'laptopName' => 'required',
            'rentDate' => 'required',
            'returnDate' => 'required',
        ]);

        $rent = $rentService->update($this->rentIdToEdit, $validatedData);

        if ($rent) {
            $this->resetInput();
            $this->editMode = false;
            $this->alert('success', 'Rent data updated successfully');
        } else {
            $this->alert('error', 'Unable to update data');
        }
    }

    public function cancelEdit()
    {
        $this->resetInput();
        $this->editMode = false; // Matikan mode edit
    }

    public function resetInput()
    {
        $this->customerName = '';
        $this->laptopName = '';
        $this->rentDate = '';
        $this->returnDate = '';
    }
}
