<?php

namespace MyBusinness\Application\UseCases\Bill\Create\DTO;

class BillCreateInputDTO
{
//    public int $amount;
//    public string $type;

    public function __construct(public int $amount, public string $type)
    {
    }
}
