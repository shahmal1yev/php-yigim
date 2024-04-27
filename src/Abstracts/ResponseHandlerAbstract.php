<?php

namespace Shahmal1yev\EasyPay\Yigim\Abstracts;

use JsonException;
use Shahmal1yev\EasyPay\Yigim\Contracts\ResponseDataContract;
use Shahmal1yev\EasyPay\Yigim\Exceptions\ResponseHandlerJsonDecodeException;
use Shahmal1yev\EasyPay\Yigim\Exceptions\ResponseHasMissingFieldsException;

abstract class ResponseHandlerAbstract
{
    /**
     * Handle the JSON response after an initialization command.
     *
     * @param string $json The JSON response string.
     * @return ResponseDataContract The response data contract.
     * @throws ResponseHandlerJsonDecodeException If JSON decoding fails.
     * @throws ResponseHasMissingFieldsException If the response is missing required fields.
     */
    public function handle(string $json): ResponseDataContract
    {
        $response = $this->decode($json);
        $this->check($response);

        $responseDataContract = $this->getResponseDataClass();

        return $responseDataContract->handle($response);
    }

    /**
     * Check if all required fields are present in the response.
     *
     * @param object $response The decoded JSON response.
     * @throws ResponseHasMissingFieldsException If the response is missing required fields.
     */
    private function check(object $response): void
    {
        $missingFields = array_diff(
            $this->getResponseFields(),
            array_keys((array) $response)
        );

        if (! empty($missingFields))
            throw new ResponseHasMissingFieldsException(
                static::class . ": The response is missing the following fields: " . implode(', ', $missingFields)
            );
    }

    /**
     * Decode the JSON response string into an object.
     *
     * @param string $json The JSON response string.
     * @return object The decoded JSON response as an object.
     * @throws ResponseHandlerJsonDecodeException If JSON decoding fails.
     */
    private function decode(string $json): object
    {
        try
        {
            $response = json_decode(
                json: $json,
                associative: false,
                flags: JSON_THROW_ON_ERROR
            );
        }
        catch (JsonException $e)
        {
            throw new ResponseHandlerJsonDecodeException(
                message: $e->getMessage(),
                code: $e->getCode(),
                previous: $e
            );
        }

        return $response;
    }

    /**
     * Get the required response fields.
     *
     * @return array The required response fields.
     */
    abstract protected function getResponseFields(): array;

    /**
     * Get the response data class instance.
     *
     * @return ResponseDataContract The response data class instance.
     */
    abstract protected function getResponseDataClass(): ResponseDataContract;
}