<?php

declare(strict_types=1);

namespace Wearesho\Bobra\Payments;

/**
 * Interface ClientInterface
 * @package Wearesho\Bobra\Payments
 */
interface ClientInterface
{
    public function createPayment(
        UrlPairInterface $pair,
        TransactionInterface $transaction,
        PayerDetailsInterface $payerDetails
    ): PaymentInterface;
}
