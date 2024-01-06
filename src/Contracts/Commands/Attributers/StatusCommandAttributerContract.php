<?php

namespace Shahmal1yev\EasyPay\Yigim\Contracts\Commands\Attributers;

use Shahmal1yev\EasyPay\Yigim\Contracts\Commands\Attributes\CommandAttributeContract;
use Shahmal1yev\EasyPay\Yigim\Contracts\Commands\Attributes\ReferenceCommandAttributeContract;

interface StatusCommandAttributerContract extends
    CommandAttributerContract,
    CommandAttributeContract,
    ReferenceCommandAttributeContract
{

}