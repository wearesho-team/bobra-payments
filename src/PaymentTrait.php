<?php

namespace Wearesho\Bobra\Payments;

/**
 * Trait PaymentTrait
 * @package Wearesho\Bobra\Payments
 */
trait PaymentTrait
{
    /** @var int */
    protected $id;

    /**
     * @see PaymentInterface::getId()
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }
}
