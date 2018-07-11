<?php

namespace Wearesho\Bobra\Payments\Notification;

use Psr\Http\Message\RequestInterface;

/**
 * Interface ServerInterface
 * @package Wearesho\Bobra\Payments\Notification
 */
interface ServerInterface
{
    public function handle(RequestInterface $request): PaymentInterface;
}
