<?php

namespace MyBusinness\Infra\Repository\Bill;

use MyBusinness\Domain\Repository\BillRepositoryInterface;
use App\Models\Bill as BillModel;

class EloquentRepository implements BillRepositoryInterface
{
    private BillModel $model;

    public function __construct(BillModel $model)
    {
        $this->model = $model;
    }

    public function create($data)
    {
        return $this->model->create([
            'type' => $data->getBillType(),
            'amount' => $data->getBillAmount()
        ]);
    }

    public function find($id)
    {
        // TODO: Implement find() method.
    }

    public function findAll()
    {
        // TODO: Implement findAll() method.
    }

    public function update($id, $data)
    {
        // TODO: Implement update() method.
    }

    public function delete($id)
    {
        // TODO: Implement delete() method.
    }
}
