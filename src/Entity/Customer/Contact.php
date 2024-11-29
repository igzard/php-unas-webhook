<?php

declare(strict_types=1);

namespace Igzard\PhpUnasWebhook\Entity\Customer;

class Contact
{
    private string $name;

    private string $phone;

    private string $mobile;

    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @internal
     */
    public function setName(string $name): void
    {
        $this->name = $name;
    }

    public function getPhone(): string
    {
        return $this->phone;
    }

    /**
     * @internal
     */
    public function setPhone(string $phone): void
    {
        $this->phone = $phone;
    }

    public function getMobile(): string
    {
        return $this->mobile;
    }

    /**
     * @internal
     */
    public function setMobile(string $mobile): void
    {
        $this->mobile = $mobile;
    }
}
