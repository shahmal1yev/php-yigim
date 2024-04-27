<?php

namespace Shahmal1yev\EasyPay\Yigim\Tests\Commands\ResponseHandlers;

use ReflectionException;
use Shahmal1yev\EasyPay\Yigim\Commands\ResponseData\CancellationCommandResponseData;
use Shahmal1yev\EasyPay\Yigim\Commands\ResponseHandlers\CancellationCommandResponseHandler;
use PHPUnit\Framework\TestCase;
use Shahmal1yev\EasyPay\Yigim\Contracts\ResponseDataContract;
use Shahmal1yev\EasyPay\Yigim\Exceptions\ResponseHandlerJsonDecodeException;
use Shahmal1yev\EasyPay\Yigim\Exceptions\ResponseHasMissingFieldsException;

/**
 * Class CancellationCommandResponseHandlerTest
 *
 * Handles the response received after a "cancellation" command and ensures it contains all required fields.
 *
 * @package Shahmal1yev\EasyPay\Yigim\Commands\ResponseHandlers
 */
class CancellationCommandResponseHandlerTest extends TestCase
{
    /** @var string $stringResponse The response in string format. */
    private string $stringResponse;

    /** @var object $objectResponse The response in object format. */
    private object $objectResponse;

    /**
     * Setup method to prepare the test case.
     *
     * @return void
     * @throws ReflectionException
     */
    protected function setUp(): void
    {
        $response = new \stdClass();

        $reflection = new \ReflectionClass(CancellationCommandResponseHandler::class);
        $method = $reflection->getMethod('getResponseFields');

        $requiredFields = $method->invoke(new CancellationCommandResponseHandler);

        foreach ($requiredFields as $fieldName)
            $response->{$fieldName} = null;

        $this->stringResponse = json_encode($response);
        $this->objectResponse = $response;
    }

    /**
     * Test handling a valid response.
     *
     * @return void
     *
     * @throws ResponseHasMissingFieldsException
     * @throws ResponseHandlerJsonDecodeException
     */
    public function testHandleWithValidArgument(): void
    {
        $handler = new CancellationCommandResponseHandler();

        $actual = $handler->handle($this->stringResponse);

        $this->assertInstanceOf(ResponseDataContract::class, $actual);
        $this->assertInstanceOf(CancellationCommandResponseData::class, $actual);
    }

    /**
     * Test handling an invalid JSON response.
     *
     * @return void
     *
     * @throws ResponseHandlerJsonDecodeException
     * @throws ResponseHasMissingFieldsException
     */
    public function testHandleWithInvalidJsonArgument(): void
    {
        $handler = new CancellationCommandResponseHandler();

        $this->expectException(ResponseHandlerJsonDecodeException::class);

        $handler->handle("invalid json");
    }

    /**
     * Test handling a response with missing fields.
     *
     * @return void
     *
     * @throws ResponseHandlerJsonDecodeException
     * @throws ReflectionException
     */
    public function testHandleWithMissingFieldsException(): void
    {
        $handler = new CancellationCommandResponseHandler();

        $reflection = new \ReflectionClass(CancellationCommandResponseHandler::class);
        $method = $reflection->getMethod('getResponseFields');

        $fieldNames = $method->invoke($handler);
        $randomFieldIndex = array_rand($fieldNames, 1);
        $randomFieldName = $fieldNames[$randomFieldIndex];

        unset($this->objectResponse->{$randomFieldName});

        $this->expectException(ResponseHasMissingFieldsException::class);
        $this->expectExceptionMessage(
            CancellationCommandResponseHandler::class . ": The response is missing the following fields: " . implode(', ', [$randomFieldName])
        );

        $handler->handle(json_encode($this->objectResponse));
    }
}
