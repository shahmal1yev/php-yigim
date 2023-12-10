<?php

namespace Shahmal1yev\EasyPay\Yigim\Traits\JsonResponseHandlerAttribute;

trait UrlJsonResponseHandlerAttributeTrait
{
    public function getUrl(): string
    {
        return $this->response->url;
    }
}