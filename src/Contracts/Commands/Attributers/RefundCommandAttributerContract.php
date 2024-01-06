<?php

namespace Shahmal1yev\EasyPay\Yigim\Contracts\Commands\Attributers;

use Shahmal1yev\EasyPay\Yigim\Contracts\Commands\Attributes\AmountCommandAttributeContract;
use Shahmal1yev\EasyPay\Yigim\Contracts\Commands\Attributes\CommandAttributeContract;
use Shahmal1yev\EasyPay\Yigim\Contracts\Commands\Attributes\ReferenceCommandAttributeContract;

interface RefundCommandAttributerContract extends
    CommandAttributerContract,
    CommandAttributeContract,
    AmountCommandAttributeContract,
    ReferenceCommandAttributeContract
{

}