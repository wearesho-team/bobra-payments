<?php

namespace Wearesho\Bobra\Payments;

class Transaction implements TransactionInterface, \JsonSerializable
{
    /** @var string */
    protected $currency;

    /** @var int */
    protected $service;

    /** @var int */
    protected $amount;

    /** @var string */
    protected $description;

    /** @var array */
    protected $info = [];

    /** @var string */
    protected $type;

    public function __construct(
        int $service,
        float $amount,
        string $type,
        string $description,
        array $info = [],
        string $currency = 'UAH'
    ) {
        $this
            ->setService($service)
            ->setAmount($amount)
            ->setType($type)
            ->setDescription($description)
            ->setInfo($info)
            ->setCurrency($currency);
    }

    /**
     * @inheritdoc
     */
    public function getService(): int
    {
        return $this->service;
    }

    public function setService(int $service): Transaction
    {
        $this->service = $service;
        return $this;
    }

    /**
     * @inheritdoc
     */
    public function getType(): string
    {
        return $this->type;
    }

    public function setType(string $type): Transaction
    {
        $this->type = $type;
        return $this;
    }

    /**
     * @inheritdoc
     */
    public function getAmount(): int
    {
        return $this->amount;
    }

    public function setAmount(float $amount): Transaction
    {
        return $this->setNumeric($this->amount, $amount);
    }

    /**
     * @inheritdoc
     */
    public function getCurrency(): string
    {
        return $this->currency;
    }

    /**
     * @param string $currency
     * @return Transaction
     * @todo: add currency validation
     */
    public function setCurrency(string $currency): Transaction
    {
        if (mb_strlen($currency) !== 3) {
            throw new \InvalidArgumentException("Currency code length must be equal to 3");
        }

        $this->currency = mb_strtoupper($currency);
        return $this;
    }

    /**
     * @inheritdoc
     */
    public function getDescription(): string
    {
        return $this->description;
    }

    public function setDescription(string $description): Transaction
    {
        $this->description = $description;
        return $this;
    }

    /**
     * @inheritdoc
     */
    public function getInfo(): array
    {
        return $this->info;
    }

    public function setInfo(array $info = []): Transaction
    {
        $this->info = $info;
        return $this;
    }

    /**
     * @inheritdoc
     */
    public function jsonSerialize(): array
    {
        return [
            'id' => $this->getService(),
            'amount' => $this->getAmount(),
            'type' => $this->getType(),
            'description' => $this->getDescription(),
            'info' => $this->getInfo(),
            'currency' => $this->getCurrency(),
        ];
    }

    protected function setNumeric(&$field, float $value): Transaction
    {
        $field = number_format($value, 2, '', '');
        return $this;
    }
}
