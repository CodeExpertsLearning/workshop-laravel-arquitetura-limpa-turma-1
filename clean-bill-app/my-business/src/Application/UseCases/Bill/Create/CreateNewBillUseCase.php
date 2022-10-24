<?php

namespace MyBusinness\Application\UseCases\Bill\Create;

use MyBusinness\Application\UseCases\Bill\Create\DTO\BillCreateInputDTO;
use MyBusinness\Application\UseCases\Bill\Create\DTO\BillCreateOutputDTO;
use MyBusinness\Domain\Entity\Bill;
use MyBusinness\Domain\Repository\BillRepositoryInterface;

class CreateNewBillUseCase
{
    private BillCreateInputDTO $input;
    private BillRepositoryInterface $repository;

    public function __construct(BillCreateInputDTO $input, BillRepositoryInterface $repository)
    {
        $this->input = $input;
        $this->repository = $repository;
    }

    public function handle()
    {
        $entity = new Bill();
        $entity->setBillAmount($this->input->amount);
        $entity->setBillType($this->input->type);

        $result = $this->repository->create($entity);

        $output = new BillCreateOutputDTO($result);
        return $output();
    }
}
