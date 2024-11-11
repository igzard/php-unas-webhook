<?php

declare(strict_types=1);

namespace Igzard\PhpUnasWebhook\Entity\Customer;

use Igzard\PhpUnasWebhook\Enum\Country;

class Shipping
{
    private string $name;

    private string $zip;

    private string $city;

    private string $street;

    private Country $country;

    /** @deprecated  */
    private Country $county;

    public function getName(): string
    {
        return $this->name;
    }

    public function setName(string $name): void
    {
        $this->name = $name;
    }

    public function getZip(): string
    {
        return $this->zip;
    }

    public function setZip(string $zip): void
    {
        $this->zip = $zip;
    }

    public function getCity(): string
    {
        return $this->city;
    }

    public function setCity(string $city): void
    {
        $this->city = $city;
    }

    public function getStreet(): string
    {
        return $this->street;
    }

    public function setStreet(string $street): void
    {
        $this->street = $street;
    }

    public function getCountry(): Country
    {
        return $this->country;
    }

    public function setCountry(Country $country): void
    {
        $this->country = $country;
    }

    public function getCounty(): Country
    {
        return $this->county;
    }

    public function setCounty(Country $county): void
    {
        $this->county = $county;
    }
}
