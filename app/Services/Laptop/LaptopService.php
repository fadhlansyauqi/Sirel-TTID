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
        return LaptopTable::all();
    }

    public function create($data)
    {
        return LaptopTable::create($data);
    }


    public function edit($id, $data)
    {
        $laptop = LaptopTable::findOrFail($id);

        if ($laptop) {
            $laptop->update([
                'code'     => $data['code'],
                'name'     => $data['name'],
                'category' => $data['category'],
                'status'   => $data['status'],
            ]);
        }

        return $laptop;
    }

    public function update($id, $data)
    {
        $laptop = LaptopTable::findOrFail($id);

        if ($laptop) {
            $laptop->update([
                'code'     => $data['code'],
                'name'     => $data['name'],
                'category' => $data['category'],
                'status'   => $data['status'],
            ]);
        }

        return $laptop;
    }

    public function delete($id)
    {
        $row = LaptopTable::findOrFail($id);
        $row->delete();
        return $row;
    }
}
