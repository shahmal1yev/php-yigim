<?php

namespace Shahmal1yev\EasyPay\Yigim\Contracts\JsonResponseHandlerAttribute;

interface FeeJsonResponseHandlerAttributeContract
{
    public function getFee(): string;
}