<?php

namespace Shahmal1yev\EasyPay\Yigim\Contracts\JsonResponseHandlerAttribute;

interface ExpiryJsonResponseHandlerAttributeContract
{
    public function getExpiry(): string;
}