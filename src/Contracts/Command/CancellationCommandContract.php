<?php

namespace Shahmal1yev\EasyPay\Yigim\Contracts\Command;

use Shahmal1yev\EasyPay\Yigim\Contracts\Command\Attribute\AmountCommandAttributeContract;
use Shahmal1yev\EasyPay\Yigim\Contracts\Command\Attribute\CommandAttributeContract;
use Shahmal1yev\EasyPay\Yigim\Contracts\Command\Attribute\ReferenceCommandAttributeContract;

interface CancellationCommandContract extends CommandAttributeContract, ReferenceCommandAttributeContract, AmountCommandAttributeContract
{

}