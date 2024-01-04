<?php

namespace Shahmal1yev\EasyPay\Yigim\Core\CommandAttribute;

use Shahmal1yev\EasyPay\Yigim\Contracts\Command\CommandAttributeContract;
use Shahmal1yev\EasyPay\Yigim\Contracts\Command\RefundCommandAttributeContract;
use Shahmal1yev\EasyPay\Yigim\Traits\CommandAttribute\AmountCommandAttributeTrait;
use Shahmal1yev\EasyPay\Yigim\Traits\CommandAttribute\CommandAttributeTrait;
use Shahmal1yev\EasyPay\Yigim\Traits\CommandAttribute\ReferenceCommandAttributeTrait;

class RefundCommandAttribute implements CommandAttributeContract, RefundCommandAttributeContract
{
    use CommandAttributeTrait,
        AmountCommandAttributeTrait,
        ReferenceCommandAttributeTrait;
}