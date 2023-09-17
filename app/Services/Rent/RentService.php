<?php

namespace App\Services\Rent;

use App\Models\Table\RentTable;
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

    public function create($data)
    {
        return RentTable::create([
            'name' => $data['name'],
        ]);
    }

    public function update($id, $data)
    {
        $row = RentTable::findOrFail($id);
        $row->update([
            'name' => $data['name'],
        ]);
        return $row;
    }

    public function delete($id)
    {
        $row = RentTable::findOrFail($id);
        $row->delete();
        return $row;
    }
}
