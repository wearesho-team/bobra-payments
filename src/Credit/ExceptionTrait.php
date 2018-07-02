<?php

namespace Wearesho\Bobra\Payments\Credit;

/**
 * Trait ExceptionTrait
 * @package Wearesho\Bobra\Payments\Credit
 */
trait ExceptionTrait
{
    /** @var TransferInterface */
    protected $transfer;

    public function getTransfer(): TransferInterface
    {
        return $this->transfer;
    }
}
