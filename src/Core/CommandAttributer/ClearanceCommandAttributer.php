<?php

namespace Shahmal1yev\EasyPay\Yigim\Core\CommandAttributer;

use Shahmal1yev\EasyPay\Yigim\Contracts\Command\ClearanceCommandAttributeContract;
use Shahmal1yev\EasyPay\Yigim\Contracts\Command\CommandAttributeContract;
use Shahmal1yev\EasyPay\Yigim\Traits\CommandAttribute\AmountCommandAttributeTrait;
use Shahmal1yev\EasyPay\Yigim\Traits\CommandAttribute\CommandAttributeTrait;
use Shahmal1yev\EasyPay\Yigim\Traits\CommandAttribute\ReferenceCommandAttributeTrait;

class ClearanceCommandAttributer implements CommandAttributeContract, ClearanceCommandAttributeContract
{
    use CommandAttributeTrait,
        AmountCommandAttributeTrait,
        ReferenceCommandAttributeTrait;
}