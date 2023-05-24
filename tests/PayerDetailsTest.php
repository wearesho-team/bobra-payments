<?php

declare(strict_types=1);

namespace Wearesho\Bobra\Payments\Tests;

use PHPUnit\Framework\TestCase;
use Wearesho\Bobra\Payments\PayerDetails;

class PayerDetailsTest extends TestCase
{
    public function testGetFirstName(): void
    {
        $payerDetails = new PayerDetails('John', 'Doe', '380123456789', 'john.doe@example.com');
        $this->assertEquals('John', $payerDetails->getFirstName());
    }

    public function testGetLastName(): void
    {
        $payerDetails = new PayerDetails('John', 'Doe', '380123456789', 'john.doe@example.com');
        $this->assertEquals('Doe', $payerDetails->getLastName());
    }

    public function testGetPhone(): void
    {
        $payerDetails = new PayerDetails('John', 'Doe', '380123456789', 'john.doe@example.com');
        $this->assertEquals('380123456789', $payerDetails->getPhone());
    }

    public function testGetEmail(): void
    {
        $payerDetails = new PayerDetails('John', 'Doe', '380123456789', 'john.doe@example.com');
        $this->assertEquals('john.doe@example.com', $payerDetails->getEmail());
    }

    public function testGetEmailWithNullValue(): void
    {
        $payerDetails = new PayerDetails('John', 'Doe', '380123456789');
        $this->assertNull($payerDetails->getEmail());
    }
}
