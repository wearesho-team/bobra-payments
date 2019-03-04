<?php

namespace Wearesho\Bobra\Payments\Tests;

use PHPUnit\Framework\TestCase;
use Wearesho\Bobra\Payments;

/**
 * Class TransactionCollectionTest
 * @package Wearesho\Bobra\Payments\Tests
 */
class TransactionCollectionTest extends TestCase
{
    public function testInvalidConstruction()
    {
        $this->expectException(\InvalidArgumentException::class);
        $invalidArgument = [
            new \stdClass(), // not transaction interface object
        ];
        new Payments\TransactionCollection($invalidArgument);
    }

    public function testInvalidSet()
    {
        $collection = new Payments\TransactionCollection();
        $collection[1] = $this->createTransaction();
        $this->expectException(\InvalidArgumentException::class);
        $collection[2] = new \stdClass;
    }

    public function testInvalidAppend()
    {
        $collection = new Payments\TransactionCollection();
        $collection->append($this->createTransaction());
        $this->expectException(\InvalidArgumentException::class);
        $collection->append(new \stdClass);
    }

    public function testSerializing()
    {
        $collection = new Payments\TransactionCollection([
            $this->createTransaction(20)
        ]);
        $this->assertEquals(
            '[{"id":1,"amount":2000,"type":"type","description":"Description","info":[],"currency":"UAH"}]',
            json_encode($collection)
        );
    }

    protected function createTransaction(int $amount = null): Payments\TransactionInterface
    {
        return new Payments\Transaction(1, $amount ?? mt_rand(), 'type', 'Description');
    }
}
