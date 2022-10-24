<?php

namespace MyTests\Domain\Entity;

use MyBusinness\Domain\Entity\Bill;
use PHPUnit\Framework\TestCase;

class BillTest extends TestCase
{
    public function testShouldSetAValidDataToBillEntity()
    {
        $entity = new Bill();
        $entity->setBillType('EXPENSE');
        $entity->setBillAmount(19999);

        $this->assertEquals('EXPENSE', $entity->getBillType());
        $this->assertEquals(19999, $entity->getBillAmount());
    }

    public function testShouldValidateIfEntityThrowAValidateExceptionToInvalidAmount()
    {
        $this->expectException(\Exception::class);
        $this->expectExceptionMessage('Entity: Invalid amount value');

        $entity = new Bill();
        $entity->setBillAmount(0);
    }

    public function testShouldValidateIfEntityThrowAValidateExceptionToInvalidType()
    {
        $this->expectException(\Exception::class);
        $this->expectExceptionMessage('Entity: Invalid type');

        $entity = new Bill();
        $entity->setBillType('XPTO');
    }
}
