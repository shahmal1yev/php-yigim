<?php

namespace Shahmal1yev\EasyPay\Yigim\Core\CommandAttribute;

use Shahmal1yev\EasyPay\Yigim\Contracts\Command\CancellationCommandAttributeContract;
use Shahmal1yev\EasyPay\Yigim\Traits\CommandAttribute\AmountCommandAttributeTrait;
use Shahmal1yev\EasyPay\Yigim\Traits\CommandAttribute\CommandAttributeTrait;
use Shahmal1yev\EasyPay\Yigim\Traits\CommandAttribute\ReferenceCommandAttributeTrait;

class CancellationCommandAttribute implements CancellationCommandAttributeContract
{
    use CommandAttributeTrait,
        AmountCommandAttributeTrait,
        ReferenceCommandAttributeTrait;
}