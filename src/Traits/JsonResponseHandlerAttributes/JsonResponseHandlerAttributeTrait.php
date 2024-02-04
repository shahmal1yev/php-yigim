<?php

namespace Shahmal1yev\EasyPay\Yigim\Traits\JsonResponseHandlerAttributes;

trait JsonResponseHandlerAttributeTrait
{
    public function construct(): void
    {
        $response = json_decode($this->json);

        if (json_last_error() !== JSON_ERROR_NONE)
            throw new \InvalidArgumentException("Invalid JSON provided for `" . $this::class . "`: " . json_last_error_msg());

        foreach(static::REQUIRED_FIELDS as $required)
            if (! isset($response->$required))
                throw new \LogicException("Required values do not exist in JSON for " . $this::class);

        $this->response = $response;
    }
}