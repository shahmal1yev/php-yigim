<?php

namespace Shahmal1yev\EasyPay\Yigim\Contracts\Command;

use Shahmal1yev\EasyPay\Yigim\Contracts\Command\Attribute\AmountCommandAttributeContract;
use Shahmal1yev\EasyPay\Yigim\Contracts\Command\Attribute\BillerCommandAttributeContract;
use Shahmal1yev\EasyPay\Yigim\Contracts\Command\Attribute\CallbackCommandAttributeContract;
use Shahmal1yev\EasyPay\Yigim\Contracts\Command\Attribute\CommandAttributeContract;
use Shahmal1yev\EasyPay\Yigim\Contracts\Command\Attribute\CurrencyCommandAttributeContract;
use Shahmal1yev\EasyPay\Yigim\Contracts\Command\Attribute\DescriptionCommandAttributeContract;
use Shahmal1yev\EasyPay\Yigim\Contracts\Command\Attribute\ExtraCommandAttributeContract;
use Shahmal1yev\EasyPay\Yigim\Contracts\Command\Attribute\LanguageCommandAttributeContract;
use Shahmal1yev\EasyPay\Yigim\Contracts\Command\Attribute\ReferenceCommandAttributeContract;
use Shahmal1yev\EasyPay\Yigim\Contracts\Command\Attribute\SaveCommandAttributeContract;
use Shahmal1yev\EasyPay\Yigim\Contracts\Command\Attribute\TemplateCommandAttributeContract;
use Shahmal1yev\EasyPay\Yigim\Contracts\Command\Attribute\TokenCommandAttributeContract;
use Shahmal1yev\EasyPay\Yigim\Contracts\Command\Attribute\TypeCommandAttributeContract;

interface InitializationCommandAttributeContract extends
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