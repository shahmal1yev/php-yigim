<?php

namespace Shahmal1yev\EasyPay\Yigim\ResponseHandlers;

use JsonException;
use Shahmal1yev\EasyPay\Yigim\Contracts\CommandResponseHandlerContract;
use Shahmal1yev\EasyPay\Yigim\Contracts\ResponseDataContract;
use Shahmal1yev\EasyPay\Yigim\Exceptions\ResponseHandlerJsonDecodeException;
use Shahmal1yev\EasyPay\Yigim\Exceptions\ResponseHasMissingFieldsException;
use Shahmal1yev\EasyPay\Yigim\Traits\JsonResponseHandlerAttributes\Handlers\Attributes\CodeJsonResponseHandlerAttributeTrait;
use Shahmal1yev\EasyPay\Yigim\Traits\JsonResponseHandlerAttributes\Handlers\Attributes\MessageJsonResponseHandlerAttributeTrait;
use Shahmal1yev\EasyPay\Yigim\Traits\JsonResponseHandlerAttributes\Handlers\Attributes\UrlJsonResponseHandlerAttributeTrait;

/**
 * Class InitializationCommandResponseHandler
 *
 * Handles the response received after an initialization command and ensures it contains all required fields.
 *
 * @package Shahmal1yev\EasyPay\Yigim\ResponseHandlers
 */
class InitializationCommandResponseHandler implements CommandResponseHandlerContract
{
    use MessageJsonResponseHandlerAttributeTrait,
        CodeJsonResponseHandlerAttributeTrait,
        UrlJsonResponseHandlerAttributeTrait;

    /**
     * Response fields that must be present in the response JSON.
     */
    private const array RESPONSE_FIELDS = [
        'url',
        'code',
        'message'
    ];

    /**
     * Handle the JSON response after an initialization command.
     *
     * @param string $json The JSON response string.
     * @throws ResponseHandlerJsonDecodeException If JSON decoding fails.
     * @throws ResponseHasMissingFieldsException If the response is missing required fields.
     */
    public function handle(string $json): ResponseDataContract
    {
        $response = $this->decode($json);
        $this->check($response);

        return new InitializationCommandResponseData($response);
    }

    /**
     * Check if all required fields are present in the response.
     *
     * @param object $response The decoded JSON response.
     * @throws ResponseHasMissingFieldsException If the response is missing required fields.
     */
    public function check(object $response): void
    {
        $missingFields = [];
        foreach (self::RESPONSE_FIELDS as $field)
            if (! property_exists($response, $field))
                $missingFields[] = $field;

        if (!empty($missingFields))
            throw new ResponseHasMissingFieldsException(
                self::class . ": The response is missing the following fields: ", implode(', ', $missingFields)
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
        try {
            $response = json_decode(
                json: $json,
                associative: false,
                flags: JSON_THROW_ON_ERROR
            );
        } catch (JsonException $e) {
            throw new ResponseHandlerJsonDecodeException(
                message: $e->getMessage(),
                code: $e->getCode(),
                previous: $e
            );
        }

        return $response;
    }
}
