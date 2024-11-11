<?php

declare(strict_types=1);

namespace Igzard\PhpUnasWebhook\Entity\Customer;

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

    public function setContact(Contact $contact): void
    {
        $this->contact = $contact;
    }

    public function getShipping(): Shipping
    {
        return $this->shipping;
    }

    public function setShipping(Shipping $shipping): void
    {
        $this->shipping = $shipping;
    }

    public function getInvoice(): Invoice
    {
        return $this->invoice;
    }

    public function setInvoice(Invoice $invoice): void
    {
        $this->invoice = $invoice;
    }

    public function getNewsAuth(): string
    {
        return $this->newsAuth;
    }

    public function setNewsAuth(string $newsAuth): void
    {
        $this->newsAuth = $newsAuth;
    }

    public function getGroup(): string
    {
        return $this->group;
    }

    public function setGroup(string $group): void
    {
        $this->group = $group;
    }

    public function getLang(): Language
    {
        return $this->lang;
    }

    public function setLang(Language $lang): void
    {
        $this->lang = $lang;
    }

    public function getSubscribedToNewsletter(): string
    {
        return $this->subscribedToNewsletter;
    }

    public function setSubscribedToNewsletter(string $subscribedToNewsletter): void
    {
        $this->subscribedToNewsletter = $subscribedToNewsletter;
    }

    public function getEmail(): Email
    {
        return $this->email;
    }

    public function setEmail(Email $email): void
    {
        $this->email = $email;
    }
}
