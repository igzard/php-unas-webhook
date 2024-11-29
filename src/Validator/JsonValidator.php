<?php

declare(strict_types=1);

namespace Igzard\PhpUnasWebhook\Validator;

class JsonValidator
{
    /**
     * Validate JSON string.
     *
     * @param string $json incoming JSON string
     *
     * @return bool if json valid return true, otherwise false
     */
    public function validate(string $json): bool
    {
        return json_validate($json);
    }
}
