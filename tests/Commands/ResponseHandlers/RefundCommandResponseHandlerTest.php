<?php

namespace EasyPay\PHP\Yigim\Tests\Commands\ResponseHandlers;

use ReflectionException;
use EasyPay\PHP\Yigim\Commands\ResponseData\RefundCommandResponseData;
use EasyPay\PHP\Yigim\Commands\ResponseHandlers\RefundCommandResponseHandler;
use PHPUnit\Framework\TestCase;
use EasyPay\PHP\Yigim\Contracts\ResponseDataContract;
use EasyPay\PHP\Yigim\Exceptions\ResponseHandlerJsonDecodeException;
use EasyPay\PHP\Yigim\Exceptions\ResponseHasMissingFieldsException;

/**
 * Class RefundCommandResponseHandlerTest
 *
 * Handles the response received after a "payment refund" command and ensures it contains all required fields.
 *
 * @package EasyPay\PHP\Yigim\Commands\ResponseHandlers
 */
class RefundCommandResponseHandlerTest extends TestCase
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

        $reflection = new \ReflectionClass(RefundCommandResponseHandler::class);
        $method = $reflection->getMethod('getResponseFields');

        $requiredFields = $method->invoke(new RefundCommandResponseHandler());

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
        $handler = new RefundCommandResponseHandler();

        $actual = $handler->handle($this->stringResponse);

        $this->assertInstanceOf(ResponseDataContract::class, $actual);
        $this->assertInstanceOf(RefundCommandResponseData::class, $actual);
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
        $handler = new RefundCommandResponseHandler();

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
        $handler = new RefundCommandResponseHandler();

        $reflection = new \ReflectionClass(RefundCommandResponseHandler::class);
        $method = $reflection->getMethod('getResponseFields');

        $fieldNames = $method->invoke($handler);
        $randomFieldIndex = array_rand($fieldNames, 1);
        $randomFieldName = $fieldNames[$randomFieldIndex];

        unset($this->objectResponse->{$randomFieldName});

        $this->expectException(ResponseHasMissingFieldsException::class);
        $this->expectExceptionMessage(
            RefundCommandResponseHandler::class . ": The response is missing the following fields: " . implode(', ', [$randomFieldName])
        );

        $handler->handle(json_encode($this->objectResponse));
    }
}
