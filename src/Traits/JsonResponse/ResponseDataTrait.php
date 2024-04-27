<?php

namespace Shahmal1yev\EasyPay\Yigim\Traits\JsonResponse;

/**
 * The ResponseDataTrait provides a trait for handling JSON response data.
 *
 * This trait defines a method for handling a JSON response object.
 */
trait ResponseDataTrait
{
    /**
     * The response object.
     *
     * @var object
     */
    private readonly object $response;

    /**
     * Handle the JSON response object.
     *
     * @param object $response The JSON response object.
     * @return self The instance of the class.
     */
    public function handle(object $response): self
    {
        $this->response = $response;

        return $this;
    }
}
