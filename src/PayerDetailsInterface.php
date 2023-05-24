<?php

declare(strict_types=1);

namespace Wearesho\Bobra\Payments;

interface PayerDetailsInterface
{
    public function getFirstName(): string;

    public function getLastName(): string;

    /**
     * Format 380…
     * @return string
     */
    public function getPhone(): string;

    public function getEmail(): ?string;
}
