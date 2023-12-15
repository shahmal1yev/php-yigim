<?php

namespace Shahmal1yev\EasyPay\Yigim\Core\Command;

use Shahmal1yev\EasyPay\Yigim\Contracts\Command\ClearanceCommandContract;
use Shahmal1yev\EasyPay\Yigim\Traits\CommandAttribute\AmountCommandAttributeTrait;
use Shahmal1yev\EasyPay\Yigim\Traits\CommandAttribute\CommandAttributeTrait;
use Shahmal1yev\EasyPay\Yigim\Traits\CommandAttribute\ReferenceCommandAttributeTrait;

class ClearanceCommand implements ClearanceCommandContract
{
    use CommandAttributeTrait,
        AmountCommandAttributeTrait,
        ReferenceCommandAttributeTrait;
}