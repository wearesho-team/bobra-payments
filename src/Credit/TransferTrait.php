<?php

namespace Wearesho\Bobra\Payments\Credit;

/**
 * Trait TransferTrait
 * @package Wearesho\Bobra\Payments\Credit
 */
trait TransferTrait
{
    /** @var string */
    protected $cardToken;

    /** @var string */
    protected $id;

    /** @var int */
    protected $amount;

    /** @var string|null */
    protected $currency;

    /** @var string|null */
    protected $description;

    /**
     * @inheritdoc
     */
    public function getCardToken(): string
    {
        return $this->cardToken;
    }

    /**
     * @inheritdoc
     */
    public function getId(): string
    {
        return $this->id;
    }

    /**
     * @inheritdoc
     */
    public function getAmount(): int
    {
        return $this->amount;
    }

    /**
     * @inheritdoc
     */
    public function getCurrency(): string
    {
        return $this->currency ?? 'UAH';
    }

    /**
     * @inheritdoc
     */
    public function getDescription(): ?string
    {
        return $this->description;
    }
}
