<?php

namespace Shahmal1yev\EasyPay\Yigim\Contracts\JsonResponseHandlers\Handlers\Attributes;

interface TokenJsonResponseHandlerAttributeContract
{
    public function getToken(): string;
}