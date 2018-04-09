<?php

namespace Wearesho\Bobra\Payments;

/**
 * Interface ClientInterface
 * @package Wearesho\Bobra\Payments
 */
interface ClientInterface
{
    public function createPayment(UrlPair $pair, TransactionInterface $transaction): PaymentInterface;
}
