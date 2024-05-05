<?php

namespace EasyPay\PHP\Yigim\Tests\Executors;

use PHPUnit\Framework\MockObject\Exception;
use ReflectionClass;
use ReflectionException;
use EasyPay\PHP\Yigim\Abstracts\ResponseHandlerAbstract;
use EasyPay\PHP\Yigim\Contracts\CommandAttributerContract;
use EasyPay\PHP\Yigim\Contracts\CommandEndpointProviderContract;
use EasyPay\PHP\Yigim\Contracts\CommandFactoryContract;
use EasyPay\PHP\Yigim\Contracts\ResponseDataContract;
use EasyPay\PHP\Yigim\Exceptions\CommandExecutionFailedException;
use EasyPay\PHP\Yigim\Executors\CommandExecutor;
use PHPUnit\Framework\TestCase;

/**
 * Class CommandExecutorTest
 *
 * Test cases for the CommandExecutor class.
 *
 * @package EasyPay\PHP\Yigim\Tests\Executors
 */
class CommandExecutorTest extends TestCase
{
    /**
     * @var CommandFactoryContract
     */
    private CommandFactoryContract $factory;

    /**
     * @var CommandAttributerContract
     */
    private CommandAttributerContract $attributer;

    /**
     * @var ResponseHandlerAbstract
     */
    private ResponseHandlerAbstract $responseHandler;

    /**
     * @var CommandEndpointProviderContract
     */
    private CommandEndpointProviderContract $endpointProvider;

    /**
     * @var ResponseDataContract
     */
    private ResponseDataContract $responseData;

    /**
     * Set up the test environment.
     *
     * @return void
     *
     * @throws Exception
     */
    protected function setUp(): void
    {
        $this->factory = $this->createMock(CommandFactoryContract::class);
        $this->attributer = $this->createMock(CommandAttributerContract::class);
        $this->responseHandler = $this->createMock(ResponseHandlerAbstract::class);
        $this->endpointProvider = $this->createMock(CommandEndpointProviderContract::class);
        $this->responseData = $this->createMock(ResponseDataContract::class);

        $this->attributer
            ->method('getAttributes')
            ->willReturn([
                'field 1' => 'value 1',
                'field 2' => 'value 2',
            ]);

        $this->responseHandler
            ->method('handle')
            ->willReturn($this->responseData);

        $this->endpointProvider
            ->method('getEndpoint')
            ->willReturn('https://a0af09ea-db2e-4aca-9194-c1139650c662.mock.pstmn.io/payment/create');

        $this->factory
            ->method('createAttributer')
            ->willReturn($this->attributer);

        $this->factory
            ->method('createResponseHandler')
            ->willReturn($this->responseHandler);

        $this->factory
            ->method('createProvider')
            ->willReturn($this->endpointProvider);
    }

    /**
     * Test the fieldBuilder method of the CommandExecutor.
     *
     * @return void
     */
    public function testFieldBuilder(): void
    {
        $executor = new CommandExecutor($this->factory);

        $actual = $executor->fieldBuilder();

        $this->assertSame($this->attributer, $actual);
        $this->assertInstanceOf(CommandAttributerContract::class, $actual);
    }

    /**
     * Test the getUrl method of the CommandExecutor.
     *
     * @return void
     *
     * @throws ReflectionException
     */
    public function testGetUrl(): void
    {
        $executor = new CommandExecutor($this->factory);

        $reflection = new ReflectionClass($executor::class);
        $method = $reflection->getMethod('getUrl');

        $url = $this->endpointProvider->getEndpoint();
        $queryParameters = http_build_query($this->attributer->getAttributes());

        $expected = $url . '?' . $queryParameters;
        $actual = $method->invoke($executor);

        $this->assertSame($expected, $actual);
    }

    /**
     * Test the execute method of the CommandExecutor.
     *
     * @return void
     *
     * @throws CommandExecutionFailedException
     */
    public function testExecute(): void
    {
        $executor = new CommandExecutor($this->factory);

        $expected = $this->responseData;
        $actual = $executor->execute();

        $this->assertSame($expected, $actual);
        $this->assertInstanceOf(ResponseDataContract::class, $actual);
    }

    /**
     * Test handling exceptions during command execution.
     *
     * @return void
     *
     * @throws Exception
     */
    public function testExecuteException(): void
    {
        $endpointProvider = $this->createConfiguredStub(
            CommandEndpointProviderContract::class,
            ['getEndpoint' => 'invalid url']
        );

        $factory = $this->createConfiguredStub(
            CommandFactoryContract::class,
            [
                'createProvider' => $endpointProvider,
                'createAttributer' => $this->attributer,
                'createResponseHandler' => $this->responseHandler,
            ]
        );

        $executor = new CommandExecutor($factory);

        $this->expectException(CommandExecutionFailedException::class);
        $this->expectExceptionMessage('An error occurred while trying to execute the command: ');

        $executor->execute();
    }
}
