<?php

namespace App\Services\Renter;

use App\Models\Table\RenterTable;
use App\Models\Entity\Renter;
use App\Services\AppService;
use App\Services\AppServiceInterface;

class RenterService extends AppService implements AppServiceInterface
{

    public function __construct(RenterTable $model)
    {
        parent::__construct($model);
    }


    public function dataTable($filter)
    {
        return RenterTable::datatable($filter)->paginate($filter->entries ?? 15);
    }

    public function getById($id)
    {
        return RenterTable::findOrFail($id);
    }

    public function create($data)
    {
        return Renter::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'phone' => $data['phone'],
            'address' => $data['address'],
        ]);
    }

    public function update($id, $data)
    {
        $row = RenterTable::findOrFail($id);
        $row->update([
            'name' => $data['name'],
        ]);
        return $row;
    }

    public function delete($id)
    {
        $row = RenterTable::findOrFail($id);
        $row->delete();
        return $row;
    }
}
