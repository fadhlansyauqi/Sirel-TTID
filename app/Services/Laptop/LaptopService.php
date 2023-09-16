<?php

namespace App\Services\Laptop;

use App\Models\Table\LaptopTable;
use App\Models\Entity\Laptop;
use App\Services\AppService;
use App\Services\AppServiceInterface;

class LaptopService extends AppService implements AppServiceInterface
{

    public function __construct(LaptopTable $model)
    {
        parent::__construct($model);
    }


    public function dataTable($filter)
    {
        return LaptopTable::datatable($filter)->paginate($filter->entries ?? 15);
    }

    public function getById($id)
    {
        return LaptopTable::findOrFail($id);
    }

    public function getAll()
    {
        return Laptop::all();
    }

    public function create($data)
    {
        return Laptop::create($data);
    }


    public function update($id, $data)
    {
        $row = LaptopTable::findOrFail($id);
        $row->update([
            'name' => $data['name'],
        ]);
        return $row;
    }

    public function delete($id)
    {
        $row = Laptop::findOrFail($id);
        $row->delete();
        return $row;
    }
}
