<?php

namespace Shahmal1yev\EasyPay\Yigim\Contracts\Factories;

use Shahmal1yev\EasyPay\Yigim\Executors\CommandExecutor;

interface FactoryContract
{
    public static function make(): CommandExecutor;
}