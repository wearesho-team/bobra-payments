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
    /**
     * @expectedException \InvalidArgumentException
     */
    public function testInvalidConstruction()
    {
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

    protected function createTransaction(): Payments\TransactionInterface
    {
        return new Payments\Transaction(1, mt_rand(), 'type', 'Description');
    }
}
