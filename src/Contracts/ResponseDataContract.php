<?php

namespace Shahmal1yev\EasyPay\Yigim\Contracts;

/**
 * ResponseDataContract interface.
 *
 * Represents a contract for handling response data.
 */
interface ResponseDataContract
{
    /**
     * Handle the response data and return self.
     *
     * @param object $response The response data.
     * @return self Returns an instance of the implementing class.
     */
    public function handle(object $response): self;
}
