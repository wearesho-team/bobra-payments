<?php

namespace Wearesho\Bobra\Payments;

use Wearesho\BaseCollection;

/**
 * Class TransactionCollection
 * @package Wearesho\Bobra\Payments
 */
class TransactionCollection extends BaseCollection
{
    final public function type(): string
    {
        return TransactionInterface::class;
    }
}
