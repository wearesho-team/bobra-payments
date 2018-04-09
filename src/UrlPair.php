<?php

namespace Wearesho\Bobra\Payments;

/**
 * Class UrlPair
 * @package Wearesho\Bobra\Payments
 */
class UrlPair implements UrlPairInterface
{
    /** @var string */
    protected $good;

    /** @var string */
    protected $bad;

    public function __construct(string $good, string $bad = null)
    {
        $this->good = $good;
        $this->bad = $bad ?? $this->good;
    }

    /**
     * @inheritdoc
     */
    public function getBad(): string
    {
        return $this->bad;
    }

    /**
     * @inheritdoc
     */
    public function getGood(): string
    {
        return $this->good;
    }
}
