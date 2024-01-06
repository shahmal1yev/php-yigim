<?php

namespace Shahmal1yev\EasyPay\Yigim\Contracts\AuthCredentials;

interface AuthCredentialsContract
{
    public function getXMerchant(): string;
    public function getXSignature(): string;
    public function getXType(): string;
}