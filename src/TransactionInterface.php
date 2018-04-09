<?php

namespace Wearesho\Bobra\Payments;

/**
 * Interface TransactionInterface
 * @package Wearesho\Bobra\Payments
 */
interface TransactionInterface
{
    /**
     * Identifier of transaction service
     * @return int
     */
    public function getService(): int;

    /**
     * Transaction type
     * @return string
     */
    public function getType(): string;

    /**
     * Transaction sum without divider (10000 = 100.00)
     * @return int
     */
    public function getAmount(): int;

    /**
     * Transaction currency, 3-letters
     * @return string
     */
    public function getCurrency(): string;

    /**
     * Text transaction description
     * @return string
     */
    public function getDescription(): string;

    /**
     * Any other additional transaction info
     * @return array
     */
    public function getInfo(): array;
}
