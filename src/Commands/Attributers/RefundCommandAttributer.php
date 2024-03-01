<?php

namespace Shahmal1yev\EasyPay\Yigim\Commands\Attributers;

use Shahmal1yev\EasyPay\Yigim\Contracts\Commands\Attributers\RefundCommandAttributerContract;
use Shahmal1yev\EasyPay\Yigim\Traits\CommandAttributes\Attributes\AmountCommandAttributeTrait;
use Shahmal1yev\EasyPay\Yigim\Traits\CommandAttributes\Attributes\CommandAttributeTrait;
use Shahmal1yev\EasyPay\Yigim\Traits\CommandAttributes\Attributes\ReferenceCommandAttributeTrait;

class RefundCommandAttributer implements RefundCommandAttributerContract
{
    use CommandAttributeTrait,
        AmountCommandAttributeTrait,
        ReferenceCommandAttributeTrait;
}