<?php

namespace Wearesho\Bobra\Payments\Tests;

use PHPUnit\Framework\TestCase;
use Wearesho\Bobra\Payments;

/**
 * Class LanguageTransactionTest
 * @package Wearesho\Bobra\Payments\Tests
 * @coversDefaultClass \Wearesho\Bobra\Payments\LanguageTransaction
 */
class LanguageTransactionTest extends TestCase
{
    protected const LANGUAGE = 'UA';

    public function testLanguage(): void
    {
        $transaction = new Payments\LanguageTransaction(1, 20, 'pc', 'None', static::LANGUAGE);

        $this->assertEquals(
            static::LANGUAGE,
            $transaction->getLanguage()
        );
    }
}
