<?php

namespace MyBusinness\Application\UseCases\Bill\Create\DTO;

class BillCreateOutputDTO
{
    private $data;

    public function __construct($data)
    {
        $this->data = $data;
    }

    public function __invoke()
    {
        return $this->getOutput();
    }

    public function getOutput()
    {
        return [
            'id' => $this->data->id,
            'amount' => $this->data->amount,
            'type'   => $this->data->type
        ];
    }
}
