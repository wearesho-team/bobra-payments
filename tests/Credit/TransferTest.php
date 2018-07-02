<?php

namespace Wearesho\Bobra\Payments\Tests\Credit;

use PHPUnit\Framework\TestCase;
use Wearesho\Bobra\Payments\Credit;

/**
 * Class TransferTest
 * @package Wearesho\Bobra\Payments\Tests\Credit
 */
class TransferTest extends TestCase
{
    protected const ID = 1;
    protected const AMOUNT = 228;
    protected const CARD_TOKEN = '4111123412340000';
    protected const DESCRIPTION = 'Some Text';
    protected const CURRENCY = 'USD';

    /** @var Credit\Transfer */
    protected $model;

    protected function setUp(): void
    {
        parent::setUp();
        $this->model = new Credit\Transfer(
            static::ID,
            static::AMOUNT,
            static::CARD_TOKEN,
            static::DESCRIPTION,
            static::CURRENCY
        );
    }

    public function testGetCurrency(): void
    {
        $this->assertEquals(static::CURRENCY, $this->model->getCurrency());
    }

    public function testGetId(): void
    {
        $this->assertEquals(static::ID, $this->model->getId());
    }

    public function testGetAmount(): void
    {
        $this->assertEquals(static::AMOUNT, $this->model->getAmount());
    }

    public function testGetCardToken(): void
    {
        $this->assertEquals(static::CARD_TOKEN, $this->model->getCardToken());
    }

    public function testGetDescription(): void
    {
        $this->assertEquals(static::DESCRIPTION, $this->model->getDescription());
    }

    public function testDefaultNullValues(): void
    {
        $this->model = new Credit\Transfer(
            static::ID,
            static::AMOUNT,
            static::CARD_TOKEN
        );

        $this->assertNull($this->model->getDescription());
        $this->assertEquals('UAH', $this->model->getCurrency());
    }
}
