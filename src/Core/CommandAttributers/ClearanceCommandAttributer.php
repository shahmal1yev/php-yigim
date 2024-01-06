<?php

namespace Shahmal1yev\EasyPay\Yigim\Core\CommandAttributers;

use Shahmal1yev\EasyPay\Yigim\Contracts\Commands\Attributers\ClearanceCommandAttributerContract;
use Shahmal1yev\EasyPay\Yigim\Contracts\Commands\Attributers\CommandAttributerContract;
use Shahmal1yev\EasyPay\Yigim\Traits\CommandAttributes\AmountCommandAttributeTrait;
use Shahmal1yev\EasyPay\Yigim\Traits\CommandAttributes\CommandAttributeTrait;
use Shahmal1yev\EasyPay\Yigim\Traits\CommandAttributes\ReferenceCommandAttributeTrait;

class ClearanceCommandAttributer implements ClearanceCommandAttributerContract
{
    use CommandAttributeTrait,
        AmountCommandAttributeTrait,
        ReferenceCommandAttributeTrait;
}