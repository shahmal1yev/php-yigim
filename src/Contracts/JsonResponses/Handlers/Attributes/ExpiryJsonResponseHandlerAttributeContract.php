<?php

namespace Shahmal1yev\EasyPay\Yigim\Contracts\JsonResponseHandlers\Handlers\Attributes;

interface ExpiryJsonResponseHandlerAttributeContract
{
    public function getExpiry(): string;
}