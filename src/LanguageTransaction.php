<?php

namespace Wearesho\Bobra\Payments;

/**
 * Class LanguageTransaction
 * @package Wearesho\Bobra\Payments
 */
class LanguageTransaction extends Transaction implements HasLanguage
{
    use LanguageTrait;

    public function __construct(
        int $service,
        float $amount,
        string $type,
        string $description,
        string $language,
        array $info = [],
        string $currency = 'UAH'
    ) {
        parent::__construct(
            $service,
            $amount,
            $type,
            $description,
            $info,
            $currency
        );
        $this->setLanguage($language);
    }
}
