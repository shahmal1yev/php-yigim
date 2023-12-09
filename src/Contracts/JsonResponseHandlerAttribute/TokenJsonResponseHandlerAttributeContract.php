<?php

namespace Shahmal1yev\EasyPay\Yigim\Contracts\JsonResponseHandlerAttribute;

interface TokenJsonResponseHandlerAttributeContract
{
    public function getToken(): string;
}