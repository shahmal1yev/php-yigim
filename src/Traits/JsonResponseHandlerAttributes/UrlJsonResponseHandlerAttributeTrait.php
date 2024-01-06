<?php

namespace Shahmal1yev\EasyPay\Yigim\Traits\JsonResponseHandlerAttributes;

trait UrlJsonResponseHandlerAttributeTrait
{
    public function getUrl(): string
    {
        return $this->response->url;
    }
}