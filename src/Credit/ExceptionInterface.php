<?php

namespace Wearesho\Bobra\Payments\Credit;

/**
 * Interface Exception
 * @package Wearesho\Bobra\Payments\Credit
 */
interface ExceptionInterface extends \Throwable
{
    public function getTransfer(): TransferInterface;
}
