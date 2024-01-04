<?php

namespace Shahmal1yev\EasyPay\Yigim\Contracts\Command;

use Shahmal1yev\EasyPay\Yigim\Contracts\Command\Attribute\AmountCommandAttributeContract;
use Shahmal1yev\EasyPay\Yigim\Contracts\Command\Attribute\BillerCommandAttributeContract;
use Shahmal1yev\EasyPay\Yigim\Contracts\Command\Attribute\CommandAttributeContract;
use Shahmal1yev\EasyPay\Yigim\Contracts\Command\Attribute\CscCommandAttributeContract;
use Shahmal1yev\EasyPay\Yigim\Contracts\Command\Attribute\CurrencyCommandAttributeContract;
use Shahmal1yev\EasyPay\Yigim\Contracts\Command\Attribute\ExpiryCommandAttributeContract;
use Shahmal1yev\EasyPay\Yigim\Contracts\Command\Attribute\ExtraCommandAttributeContract;
use Shahmal1yev\EasyPay\Yigim\Contracts\Command\Attribute\PanCommandAttributeContract;
use Shahmal1yev\EasyPay\Yigim\Contracts\Command\Attribute\ReferenceCommandAttributeContract;
use Shahmal1yev\EasyPay\Yigim\Contracts\Command\Attribute\TokenCommandAttributeContract;
use Shahmal1yev\EasyPay\Yigim\Contracts\Command\Attribute\TypeCommandAttributeContract;

interface DirectPaymentCommandAttributeContract extends
    CommandAttributeContract,
    TypeCommandAttributeContract,
    BillerCommandAttributeContract,
    AmountCommandAttributeContract,
    ExpiryCommandAttributeContract,
    TokenCommandAttributeContract,
    PanCommandAttributeContract,
    CscCommandAttributeContract,
    CurrencyCommandAttributeContract,
    ExtraCommandAttributeContract,
    ReferenceCommandAttributeContract
{

}