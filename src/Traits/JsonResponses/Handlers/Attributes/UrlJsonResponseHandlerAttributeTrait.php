<?php

namespace Shahmal1yev\EasyPay\Yigim\Traits\JsonResponses\Handlers\Attributes;

trait UrlJsonResponseHandlerAttributeTrait
{
    public function getUrl(): string
    {
        return $this->response->url;
    }
}