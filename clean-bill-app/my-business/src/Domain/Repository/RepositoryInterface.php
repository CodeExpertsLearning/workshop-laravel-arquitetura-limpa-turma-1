<?php

namespace MyBusinness\Domain\Repository;

interface RepositoryInterface
{
    public function create($data);
    public function find($id);
    public function findAll();
    public function update($id, $data);
    public function delete($id);
}
