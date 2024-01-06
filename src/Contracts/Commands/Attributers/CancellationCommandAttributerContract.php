<?php

namespace Shahmal1yev\EasyPay\Yigim\Contracts\Commands\Attributers;

use Shahmal1yev\EasyPay\Yigim\Contracts\Commands\Attributes\AmountCommandAttributeContract;
use Shahmal1yev\EasyPay\Yigim\Contracts\Commands\Attributes\CommandAttributeContract;
use Shahmal1yev\EasyPay\Yigim\Contracts\Commands\Attributes\ReferenceCommandAttributeContract;

interface CancellationCommandAttributerContract extends CommandAttributeContract, ReferenceCommandAttributeContract, AmountCommandAttributeContract
{

}