<?php

namespace Shahmal1yev\EasyPay\Yigim\Contracts;

interface CommandResponseHandlerContract
{
    public function handle(string $json): ResponseDataContract;
    public function check(object $response): void;
    public static function getResponseFields(): array;
}