<?php

namespace Wearesho\Bobra\Payments\Credit;

/**
 * Class Transfer
 * @package Wearesho\Bobra\Payments\Credit
 */
class Transfer implements TransferInterface
{
    use TransferTrait;

    public function __construct(
        int $id,
        int $amount,
        string $cardToken,
        string $description = null,
        string $currency = null
    ) {
        $this->id = $id;
        $this->amount = $amount;
        $this->description = $description;
        $this->currency = $currency;
        $this->cardToken = $cardToken;
    }
}
