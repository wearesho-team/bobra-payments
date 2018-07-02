<?php

namespace Wearesho\Bobra\Payments\Credit;

/**
 * Class Exception
 * @package Wearesho\Bobra\Payments\Credit
 */
class Exception extends \Exception implements ExceptionInterface
{
    use ExceptionTrait;

    public function __construct(
        TransferInterface $transfer,
        string $message,
        int $code = 0,
        \Throwable $previous = null
    ) {
        $this->transfer = $transfer;
        parent::__construct($message, $code, $previous);
    }
}
