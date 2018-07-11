<?php

namespace Wearesho\Bobra\Payments\Notification;

/**
 * Trait PaymentTrait
 * @package Wearesho\Bobra\Payments\Notification
 * @see PaymentInterface implementation
 */
trait PaymentTrait
{
    /** @var string */
    protected $id;

    /** @var int */
    protected $amount;

    /** @var \DateTimeInterface */
    protected $date;

    /** @var string */
    protected $currency;

    /** @var string[]|int[] */
    protected $info = [];

    /**
     * @inheritdoc
     * @see PaymentInterface::getId()
     */
    public function getId(): string
    {
        return $this->id;
    }

    /**
     * @inheritdoc
     * @see PaymentInterface::getAmount()
     */
    public function getAmount(): int
    {
        return $this->amount;
    }

    /**
     * @inheritdoc
     * @see PaymentInterface::getDate()
     */
    public function getDate(): \DateTimeInterface
    {
        return $this->date;
    }

    /**
     * @inheritdoc
     * @see PaymentInterface::getCurrency()
     */
    public function getCurrency(): string
    {
        return $this->currency;
    }

    /**
     * @inheritdoc
     * @see PaymentInterface::getInfo()
     */
    public function getInfo(): array
    {
        return $this->info;
    }
}
