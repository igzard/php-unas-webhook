<?php

declare(strict_types=1);

namespace Igzard\PhpUnasWebhook\Validator;

class JsonValidator
{
    public function validate(string $json): bool
    {
        return json_validate($json);
    }
}
