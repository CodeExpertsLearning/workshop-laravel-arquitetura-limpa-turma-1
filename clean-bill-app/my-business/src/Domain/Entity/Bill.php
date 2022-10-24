<?php

namespace MyBusinness\Domain\Entity;

class Bill
{
    private int $amount;
    private string $type;

    private const EXPENSE = 'EXPENSE';
    private const RECEIPT = 'RECEIPT';

    public function setBillAmount(int $amount): void
    {
        if($amount <= 0) throw new \Exception("Entity: Invalid amount value");

        $this->amount = $amount;
    }

    public function setBillType(string $type): void
    {
        if(!in_array($type, [self::EXPENSE, self::RECEIPT])) throw new  \Exception("Entity: Invalid type");

        $this->type = $type;
    }

    public function getBillType(): string
    {
        return $this->type;
    }

    public function getBillAmount(): int
    {
        return $this->amount;
    }
}
