<?php

namespace Wearesho\Bobra\Payments\Credit;

/**
 * Interface ClientInterface
 * @package Wearesho\Bobra\Payments\Credit
 */
interface ClientInterface
{
    /**
     * @param TransferInterface $transfer
     * @throws ExceptionInterface
     * @return Response
     */
    public function send(TransferInterface $transfer): Response;
}
