<?php

namespace Wearesho\Bobra\Payments\Tests\Notification;

use PHPUnit\Framework\TestCase;
use Wearesho\Bobra\Payments;

/**
 * Class PaymentTraitTest
 * @package Wearesho\Bobra\Payments\Tests\Notification
 */
class PaymentTraitTest extends TestCase
{
    public const AMOUNT = 100;
    public const DATE = '2018-01-01';
    public const ID = 'SI-2018';
    public const CURRENCY = 'USD';
    public const INFO = [
        'key' => 'value',
    ];

    /** @var Payments\Notification\PaymentInterface */
    protected $payment;

    protected function setUp(): void
    {
        parent::setUp();
        $this->payment = new class implements Payments\Notification\PaymentInterface
        {
            use Payments\Notification\PaymentTrait;

            public function __construct()
            {
                $this->id = PaymentTraitTest::ID;
                $this->date = new \DateTime(PaymentTraitTest::DATE);
                $this->amount = PaymentTraitTest::AMOUNT;
                $this->currency = PaymentTraitTest::CURRENCY;
                $this->info = PaymentTraitTest::INFO;
            }
        };
    }

    public function testGetAmount(): void
    {
        $this->assertEquals(
            self::AMOUNT,
            $this->payment->getAmount()
        );
    }

    public function testGetDate(): void
    {
        $this->assertEquals(
            new \DateTime(self::DATE),
            $this->payment->getDate()
        );
    }

    public function testGetId(): void
    {
        $this->assertEquals(
            self::ID,
            $this->payment->getId()
        );
    }

    public function testGetCurrency(): void
    {
        $this->assertEquals(
            self::CURRENCY,
            $this->payment->getCurrency()
        );
    }

    public function testGetInfo(): void
    {
        $this->assertEquals(
            self::INFO,
            $this->payment->getInfo()
        );
    }
}
