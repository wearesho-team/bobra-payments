<?php

namespace Wearesho\Bobra\Payments;

/**
 * Interface PaymentInterface
 * @package Wearesho\Bobra\Payments
 */
interface PaymentInterface extends \JsonSerializable
{
    public function getId(): int;
}
