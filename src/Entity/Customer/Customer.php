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

    private bool $subscribedToNewsletter;

    private Email $email;

    public function getContact(): Contact
    {
        return $this->contact;
    }

    /**
     * @internal
     */
    public function setContact(Contact $contact): void
    {
        $this->contact = $contact;
    }

    public function getShipping(): Shipping
    {
        return $this->shipping;
    }

    /**
     * @internal
     */
    public function setShipping(Shipping $shipping): void
    {
        $this->shipping = $shipping;
    }

    public function getInvoice(): Invoice
    {
        return $this->invoice;
    }

    /**
     * @internal
     */
    public function setInvoice(Invoice $invoice): void
    {
        $this->invoice = $invoice;
    }

    public function getNewsAuth(): string
    {
        return $this->newsAuth;
    }

    /**
     * @internal
     */
    public function setNewsAuth(string $newsAuth): void
    {
        $this->newsAuth = $newsAuth;
    }

    public function getGroup(): string
    {
        return $this->group;
    }

    /**
     * @internal
     */
    public function setGroup(string $group): void
    {
        $this->group = $group;
    }

    public function getLang(): Language
    {
        return $this->lang;
    }

    /**
     * @internal
     */
    public function setLang(Language $lang): void
    {
        $this->lang = $lang;
    }

    public function isSubscribedToNewsletter(): bool
    {
        return $this->subscribedToNewsletter;
    }

    /**
     * @internal
     */
    public function setSubscribedToNewsletter(bool $subscribedToNewsletter): void
    {
        $this->subscribedToNewsletter = $subscribedToNewsletter;
    }

    public function getEmail(): Email
    {
        return $this->email;
    }

    /**
     * @internal
     */
    public function setEmail(Email $email): void
    {
        $this->email = $email;
    }
}
