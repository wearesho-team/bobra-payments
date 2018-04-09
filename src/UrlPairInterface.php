<?php

namespace Wearesho\Bobra\Payments;

/**
 * Interface UrlPairInterface
 * @package Wearesho\Bobra\Payments
 */
interface UrlPairInterface
{
    /**
     * User redirect URL for successful payments
     *
     * @return string
     */
    public function getGood(): string;

    /**
     * User redirect URL for unsuccessful payments
     *
     * @return string
     */
    public function getBad(): string;
}
