<?php

namespace Wearesho\Bobra\Payments\Notification;

/**
 * Interface PaymentInterface
 * @package Wearesho\Bobra\Payments\Notification
 */
interface PaymentInterface
{
    public function getId(): string;

    public function getAmount(): int;

    public function getDate(): \DateTimeInterface;

    public function getCurrency(): string;

    /**
     * @return string[]|int[]
     */
    public function getInfo(): array;
}
