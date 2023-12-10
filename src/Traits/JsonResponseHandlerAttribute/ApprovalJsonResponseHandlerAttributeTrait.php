<?php

namespace Shahmal1yev\EasyPay\Yigim\Traits\JsonResponseHandlerAttribute;

trait ApprovalJsonResponseHandlerAttributeTrait
{
    public function getApproval(): string
    {
        return $this->response->approval;
    }
}