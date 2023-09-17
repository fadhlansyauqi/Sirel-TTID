<?php

namespace App\Services\Rent;

use App\Models\Table\RentTable;
use App\Models\Entity\Rent;
use App\Services\AppService;
use App\Services\AppServiceInterface;

class RentService extends AppService implements AppServiceInterface
{

    public function __construct(RentTable $model)
    {
        parent::__construct($model);
    }


    public function dataTable($filter)
    {
        return RentTable::datatable($filter)->paginate($filter->entries ?? 15);
    }

    public function getById($id)
    {
        return RentTable::findOrFail($id);
    }

    public function getAll()
    {
        return Rent::all();
    }

    public function create($data)
    {
        return Rent::create($data);
    }

    public function edit($id, $data)
    {
        $rent = RentTable::findOrFail($id);

        if ($rent) {
            $rent->update([
                'customerName' => $data['customerName'],
                'laptopName' => $data['laptopName'],
                'rentDate' => $data['rentDate'],
                'returnDate' => $data['returnDate'],
            ]);
        }

        return $rent;
    }

    public function update($id, $data)
    {
        $rent = RentTable::findOrFail($id);

        if ($rent) {
            $rent->update([
                'customerName' => $data['customerName'],
                'laptopName' => $data['laptopName'],
                'rentDate' => $data['rentDate'],
                'returnDate' => $data['returnDate'],
            ]);
        }

        return $rent;
    }

    public function delete($id)
    {
        $row = Rent::findOrFail($id);
        $row->delete();
        return $row;
    }
}
