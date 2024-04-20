<?php

namespace Shahmal1yev\EasyPay\Yigim\Contracts;

interface CommandResponseHandlerContract
{
    public function handle(string $json): void;
    public function check(object $response): void;
}