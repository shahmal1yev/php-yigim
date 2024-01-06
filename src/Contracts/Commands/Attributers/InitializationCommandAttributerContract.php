<?php

namespace Shahmal1yev\EasyPay\Yigim\Contracts\Commands\Attributers;

use Shahmal1yev\EasyPay\Yigim\Contracts\Commands\Attributes\AmountCommandAttributeContract;
use Shahmal1yev\EasyPay\Yigim\Contracts\Commands\Attributes\BillerCommandAttributeContract;
use Shahmal1yev\EasyPay\Yigim\Contracts\Commands\Attributes\CallbackCommandAttributeContract;
use Shahmal1yev\EasyPay\Yigim\Contracts\Commands\Attributes\CommandAttributeContract;
use Shahmal1yev\EasyPay\Yigim\Contracts\Commands\Attributes\CurrencyCommandAttributeContract;
use Shahmal1yev\EasyPay\Yigim\Contracts\Commands\Attributes\DescriptionCommandAttributeContract;
use Shahmal1yev\EasyPay\Yigim\Contracts\Commands\Attributes\ExtraCommandAttributeContract;
use Shahmal1yev\EasyPay\Yigim\Contracts\Commands\Attributes\LanguageCommandAttributeContract;
use Shahmal1yev\EasyPay\Yigim\Contracts\Commands\Attributes\ReferenceCommandAttributeContract;
use Shahmal1yev\EasyPay\Yigim\Contracts\Commands\Attributes\SaveCommandAttributeContract;
use Shahmal1yev\EasyPay\Yigim\Contracts\Commands\Attributes\TemplateCommandAttributeContract;
use Shahmal1yev\EasyPay\Yigim\Contracts\Commands\Attributes\TokenCommandAttributeContract;
use Shahmal1yev\EasyPay\Yigim\Contracts\Commands\Attributes\TypeCommandAttributeContract;

interface InitializationCommandAttributerContract extends
    CommandAttributeContract,
    ExtraCommandAttributeContract,
    CallbackCommandAttributeContract,
    LanguageCommandAttributeContract,
    TemplateCommandAttributeContract,
    DescriptionCommandAttributeContract,
    BillerCommandAttributeContract,
    CurrencyCommandAttributeContract,
    AmountCommandAttributeContract,
    SaveCommandAttributeContract,
    TokenCommandAttributeContract,
    TypeCommandAttributeContract,
    ReferenceCommandAttributeContract
{

}