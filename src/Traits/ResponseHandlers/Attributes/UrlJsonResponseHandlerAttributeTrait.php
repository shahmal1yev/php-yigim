<?php

namespace Shahmal1yev\EasyPay\Yigim\Traits\JsonResponseHandlerAttributes\Handlers\Attributes;

trait UrlJsonResponseHandlerAttributeTrait
{
    public function getUrl(): string
    {
        return $this->response->url;
    }
}