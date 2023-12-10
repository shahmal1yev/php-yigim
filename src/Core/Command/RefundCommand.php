<?php

namespace Shahmal1yev\EasyPay\Yigim\Core\Command;

use Shahmal1yev\EasyPay\Yigim\Contracts\CommandAttribute\AmountCommandAttributeContract;
use Shahmal1yev\EasyPay\Yigim\Contracts\CommandAttribute\CommandAttributeContract;
use Shahmal1yev\EasyPay\Yigim\Contracts\CommandAttribute\ReferenceCommandAttributeContract;
use Shahmal1yev\EasyPay\Yigim\Traits\CommandAttribute\AmountCommandAttributeTrait;
use Shahmal1yev\EasyPay\Yigim\Traits\CommandAttribute\CommandAttributeTrait;
use Shahmal1yev\EasyPay\Yigim\Traits\CommandAttribute\ReferenceCommandAttributeTrait;

class RefundCommand implements CommandAttributeContract, AmountCommandAttributeContract, ReferenceCommandAttributeContract
{
    use CommandAttributeTrait,
        AmountCommandAttributeTrait,
        ReferenceCommandAttributeTrait;
}