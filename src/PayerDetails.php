<?php

declare(strict_types=1);

namespace Wearesho\Bobra\Payments;

class PayerDetails implements PayerDetailsInterface
{
    private string $firstName;
    private string $lastName;
    private string $phone;
    private ?string $email;

    public function __construct(string $firstName, string $lastName, string $phone, ?string $email = null)
    {
        $this->firstName = $firstName;
        $this->lastName = $lastName;
        $this->phone = $phone;
        $this->email = $email;
    }

    public function getFirstName(): string
    {
        return $this->firstName;
    }

    public function getLastName(): string
    {
        return $this->lastName;
    }

    public function getPhone(): string
    {
        return $this->phone;
    }

    public function getEmail(): ?string
    {
        return $this->email;
    }
}
