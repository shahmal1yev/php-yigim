<?php

namespace Shahmal1yev\EasyPay\Yigim\Command;

use Shahmal1yev\EasyPay\Yigim\Contracts\CommandAttribute\CommandAttributeContract;
use Shahmal1yev\EasyPay\Yigim\Contracts\CommandAttribute\ReferenceCommandAttributeContract;
use Shahmal1yev\EasyPay\Yigim\Traits\CommandAttribute\CommandAttributeTrait;
use Shahmal1yev\EasyPay\Yigim\Traits\CommandAttribute\ReferenceCommandAttributeTrait;

class StatusCommand implements CommandAttributeContract, ReferenceCommandAttributeContract
{
    use CommandAttributeTrait,
        ReferenceCommandAttributeTrait;
}