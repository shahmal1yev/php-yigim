<?php

namespace Shahmal1yev\EasyPay\Yigim\Core\CommandAttribute;

use Shahmal1yev\EasyPay\Yigim\Contracts\Command\CommandAttributeContract;
use Shahmal1yev\EasyPay\Yigim\Contracts\Command\StatusCommandAttributeContract;
use Shahmal1yev\EasyPay\Yigim\Traits\CommandAttribute\CommandAttributeTrait;
use Shahmal1yev\EasyPay\Yigim\Traits\CommandAttribute\ReferenceCommandAttributeTrait;

class StatusCommandAttribute implements CommandAttributeContract, StatusCommandAttributeContract
{
    use CommandAttributeTrait,
        ReferenceCommandAttributeTrait;
}