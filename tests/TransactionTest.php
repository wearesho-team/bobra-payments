<?php


namespace Wearesho\Bobra\Payments\Tests;

use PHPUnit\Framework\TestCase;
use Wearesho\Bobra\Payments\Transaction;

class TransactionTest extends TestCase
{
    public function testEntity()
    {
        $transaction = new Transaction(
            $service = 10,
            $amount = 100.50,
            $type = 'CC',
            $description = 'Service Payment',
            $info = ['key' => mt_rand(),],
            $currency = 'RUB'
        );

        $this->assertEquals($service, $transaction->getService());
        $this->assertEquals(10050, $transaction->getAmount());
        $this->assertEquals($type, $transaction->getType());
        $this->assertEquals($description, $transaction->getDescription());
        $this->assertEquals($currency, $transaction->getCurrency());
        $this->assertEquals($info, $transaction->getInfo());

        $this->expectException(\InvalidArgumentException::class);
        $transaction->setCurrency('$');
    }
}
