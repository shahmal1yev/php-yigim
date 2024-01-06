<?php

namespace Shahmal1yev\EasyPay\Yigim\Core\CommandAttributer;

use Shahmal1yev\EasyPay\Yigim\Contracts\Command\CommandAttributeContract;
use Shahmal1yev\EasyPay\Yigim\Contracts\Command\StatusCommandAttributeContract;
use Shahmal1yev\EasyPay\Yigim\Traits\CommandAttribute\CommandAttributeTrait;
use Shahmal1yev\EasyPay\Yigim\Traits\CommandAttribute\ReferenceCommandAttributeTrait;

class StatusCommandAttributer implements CommandAttributeContract, StatusCommandAttributeContract
{
    use CommandAttributeTrait,
        ReferenceCommandAttributeTrait;
}