<?php

namespace Shahmal1yev\EasyPay\Yigim\Core\CommandAttribute;

use Shahmal1yev\EasyPay\Yigim\Contracts\Command\DirectPaymentCommandAttributeContract;
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

class DirectPaymentCommandAttribute implements DirectPaymentCommandAttributeContract
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