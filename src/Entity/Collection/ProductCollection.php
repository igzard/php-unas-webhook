<?php

declare(strict_types=1);

namespace Igzard\PhpUnasWebhook\Entity\Collection;

use Igzard\PhpUnasWebhook\Common\GenericCollection;
use Igzard\PhpUnasWebhook\Entity\Product\Product;

/**
 * @method Product[] getIterator()
 */
class ProductCollection extends GenericCollection
{
    public function __construct(Product ...$values)
    {
        $this->values = $values;
    }
}
