<?php

namespace Wearesho\Bobra\Payments;

/**
 * Trait LanguageTrait
 * @package Wearesho\Bobra\Payments
 */
trait LanguageTrait
{
    /** @var string */
    protected $language;

    public function getLanguage(): string
    {
        return $this->language;
    }

    public function setLanguage(string $language): void
    {
        $this->language = $language;
    }
}
