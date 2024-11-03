<?php

declare(strict_types=1);

namespace Igzard\PhpUnasWebhook\Entity;

use Igzard\PhpUnasWebhook\Enum\Country;

class Invoice
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

    public function setName(string $name): self
    {
        $this->name = $name;

        return $this;
    }

    public function getZip(): string
    {
        return $this->zip;
    }

    public function setZip(string $zip): self
    {
        $this->zip = $zip;

        return $this;
    }

    public function getCity(): string
    {
        return $this->city;
    }

    public function setCity(string $city): self
    {
        $this->city = $city;

        return $this;
    }

    public function getStreet(): string
    {
        return $this->street;
    }

    public function setStreet(string $street): self
    {
        $this->street = $street;

        return $this;
    }

    public function getCountry(): Country
    {
        return $this->country;
    }

    public function setCountry(Country $country): self
    {
        $this->country = $country;

        return $this;
    }

    public function getCounty(): Country
    {
        return $this->county;
    }

    public function setCounty(Country $county): self
    {
        $this->county = $county;

        return $this;
    }
}
