<?php

namespace Shahmal1yev\EasyPay\Yigim\Contracts\JsonResponseHandlers\Handlers\Attributes;

interface StatusJsonResponseHandlerAttributeContract
{
    public function getStatus(): string;
}