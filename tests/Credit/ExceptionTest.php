<?php

namespace Wearesho\Bobra\Payments\Tests\Credit;

use PHPUnit\Framework\TestCase;
use Wearesho\Bobra\Payments\Credit;

/**
 * Class ExceptionTest
 * @package Wearesho\Bobra\Payments\Tests\Credit
 */
class ExceptionTest extends TestCase
{
    protected const MESSAGE = 'Exception Message';

    /** @var Credit\Exception */
    protected $exception;

    /** @var Credit\Transfer */
    protected $transfer;

    protected function setUp(): void
    {
        parent::setUp();
        $this->transfer = new Credit\Transfer(
            1,
            100,
            'token'
        );
        $this->exception = new Credit\Exception($this->transfer, static::MESSAGE);
    }

    public function testGetTransfer(): void
    {
        $this->assertEquals(
            $this->transfer,
            $this->exception->getTransfer()
        );
    }

    public function testSetMessage(): void
    {
        $this->assertEquals(
            static::MESSAGE,
            $this->exception->getMessage()
        );
    }
}
