<?php

namespace Shahmal1yev\EasyPay\Yigim\Traits\JsonResponse\Attributes;

trait TokenJsonResponseAttributeTrait
{
    public function getToken(): string
    {
        return $this->response->token;
    }
}