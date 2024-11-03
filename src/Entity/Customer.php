<?php

declare(strict_types=1);

namespace Igzard\PhpUnasWebhook\Entity;

use Igzard\PhpUnasWebhook\Enum\Language;
use Igzard\PhpUnasWebhook\ValueObject\Email;

class Customer
{
    private Contact $contact;

    private Shipping $shipping;

    private Invoice $invoice;

    private string $newsAuth;

    private string $group;

    private Language $lang;

    private string $subscribedToNewsletter;

    private Email $email;

    public function getContact(): Contact
    {
        return $this->contact;
    }

    public function setContact(Contact $contact): self
    {
        $this->contact = $contact;

        return $this;
    }

    public function getShipping(): Shipping
    {
        return $this->shipping;
    }

    public function setShipping(Shipping $shipping): self
    {
        $this->shipping = $shipping;

        return $this;
    }

    public function getInvoice(): Invoice
    {
        return $this->invoice;
    }

    public function setInvoice(Invoice $invoice): self
    {
        $this->invoice = $invoice;

        return $this;
    }

    public function getNewsAuth(): string
    {
        return $this->newsAuth;
    }

    public function setNewsAuth(string $newsAuth): self
    {
        $this->newsAuth = $newsAuth;

        return $this;
    }

    public function getGroup(): string
    {
        return $this->group;
    }

    public function setGroup(string $group): self
    {
        $this->group = $group;

        return $this;
    }

    public function getLang(): Language
    {
        return $this->lang;
    }

    public function setLang(Language $lang): self
    {
        $this->lang = $lang;

        return $this;
    }

    public function getSubscribedToNewsletter(): string
    {
        return $this->subscribedToNewsletter;
    }

    public function setSubscribedToNewsletter(string $subscribedToNewsletter): self
    {
        $this->subscribedToNewsletter = $subscribedToNewsletter;

        return $this;
    }

    public function getEmail(): Email
    {
        return $this->email;
    }

    public function setEmail(Email $email): self
    {
        $this->email = $email;

        return $this;
    }
}
