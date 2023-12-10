<?php

namespace Shahmal1yev\EasyPay\Yigim\Core\Command;

use Shahmal1yev\EasyPay\Yigim\Contracts\CommandAttribute\AmountCommandAttributeContract;
use Shahmal1yev\EasyPay\Yigim\Contracts\CommandAttribute\BillerCommandAttributeContract;
use Shahmal1yev\EasyPay\Yigim\Contracts\CommandAttribute\CommandAttributeContract;
use Shahmal1yev\EasyPay\Yigim\Contracts\CommandAttribute\CscCommandAttributeContract;
use Shahmal1yev\EasyPay\Yigim\Contracts\CommandAttribute\CurrencyCommandAttributeContract;
use Shahmal1yev\EasyPay\Yigim\Contracts\CommandAttribute\ExpiryCommandAttributeContract;
use Shahmal1yev\EasyPay\Yigim\Contracts\CommandAttribute\ExtraCommandAttributeContract;
use Shahmal1yev\EasyPay\Yigim\Contracts\CommandAttribute\PanCommandAttributeContract;
use Shahmal1yev\EasyPay\Yigim\Contracts\CommandAttribute\ReferenceCommandAttributeContract;
use Shahmal1yev\EasyPay\Yigim\Contracts\CommandAttribute\TokenCommandAttributeContract;
use Shahmal1yev\EasyPay\Yigim\Contracts\CommandAttribute\TypeCommandAttributeContract;
use Shahmal1yev\EasyPay\Yigim\Traits\CommandAttribute\AmountCommandAttributeTrait;
use Shahmal1yev\EasyPay\Yigim\Traits\CommandAttribute\BillerCommandAttributeTrait;
use Shahmal1yev\EasyPay\Yigim\Traits\CommandAttribute\CommandAttributeTrait;
use Shahmal1yev\EasyPay\Yigim\Traits\CommandAttribute\CscCommandAttributeTrait;
use Shahmal1yev\EasyPay\Yigim\Traits\CommandAttribute\CurrencyCommandAttributeTrait;
use Shahmal1yev\EasyPay\Yigim\Traits\CommandAttribute\ExpiryCommandAttributeTrait;
use Shahmal1yev\EasyPay\Yigim\Traits\CommandAttribute\ExtraCommandAttributeTrait;
use Shahmal1yev\EasyPay\Yigim\Traits\CommandAttribute\PanCommandAttributeTrait;
use Shahmal1yev\EasyPay\Yigim\Traits\CommandAttribute\ReferenceCommandAttributeTrait;
use Shahmal1yev\EasyPay\Yigim\Traits\CommandAttribute\TokenCommandAttributeTrait;
use Shahmal1yev\EasyPay\Yigim\Traits\CommandAttribute\TypeCommandAttributeTrait;

class DirectPaymentCommand implements CommandAttributeContract, ReferenceCommandAttributeContract, TypeCommandAttributeContract, TokenCommandAttributeContract, PanCommandAttributeContract, ExpiryCommandAttributeContract, CscCommandAttributeContract, AmountCommandAttributeContract, CurrencyCommandAttributeContract, BillerCommandAttributeContract, ExtraCommandAttributeContract
{
    use CommandAttributeTrait,
        ReferenceCommandAttributeTrait,
        TypeCommandAttributeTrait,
        TokenCommandAttributeTrait,
        PanCommandAttributeTrait,
        ExpiryCommandAttributeTrait,
        CscCommandAttributeTrait,
        AmountCommandAttributeTrait,
        CurrencyCommandAttributeTrait,
        BillerCommandAttributeTrait,
        ExtraCommandAttributeTrait;
}