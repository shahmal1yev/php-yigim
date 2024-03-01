<?php

namespace Shahmal1yev\EasyPay\Yigim\Commands\Attributers;

use Shahmal1yev\EasyPay\Yigim\Contracts\Commands\Attributers\ClearanceCommandAttributerContract;
use Shahmal1yev\EasyPay\Yigim\Traits\CommandAttributes\Attributes\AmountCommandAttributeTrait;
use Shahmal1yev\EasyPay\Yigim\Traits\CommandAttributes\Attributes\CommandAttributeTrait;
use Shahmal1yev\EasyPay\Yigim\Traits\CommandAttributes\Attributes\ReferenceCommandAttributeTrait;

class ClearanceCommandAttributer implements ClearanceCommandAttributerContract
{
    use CommandAttributeTrait,
        AmountCommandAttributeTrait,
        ReferenceCommandAttributeTrait;
}