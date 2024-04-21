<?php

namespace Shahmal1yev\EasyPay\Yigim\Traits\JsonResponseHandlerAttributes\Handlers\Attributes;

trait ApprovalJsonResponseHandlerAttributeTrait
{
    public function getApproval(): string
    {
        return $this->response->approval;
    }
}