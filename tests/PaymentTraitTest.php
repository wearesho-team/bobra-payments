<?php

namespace Wearesho\Bobra\Payments\Tests;

use PHPUnit\Framework\TestCase;
use Wearesho\Bobra\Payments\PaymentTrait;

/**
 * Class PaymentTraitTest
 * @package Wearesho\Bobra\Payments\Tests
 */
class PaymentTraitTest extends TestCase
{
    public function testGetId()
    {
        $id = mt_rand();
        $payment = new class ($id)
        {
            use PaymentTrait;

            public function __construct($id)
            {
                $this->id = $id;
            }
        };
        $this->assertEquals($id, $payment->getId());
    }
}
