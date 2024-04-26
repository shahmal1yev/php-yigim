<?php

namespace Shahmal1yev\EasyPay\Yigim\Traits\JsonResponses\Attributes;

trait ApprovalJsonResponseHandlerAttributeTrait
{
    public function getApproval(): string
    {
        return $this->response->approval;
    }
}