<?php

namespace EasyPay\PHP\Yigim\Executors;

use EasyPay\PHP\Yigim\Abstracts\ResponseHandlerAbstract;
use EasyPay\PHP\Yigim\Contracts\CommandAttributerContract;
use EasyPay\PHP\Yigim\Contracts\CommandEndpointProviderContract;
use EasyPay\PHP\Yigim\Contracts\CommandExecutorContract;
use EasyPay\PHP\Yigim\Contracts\CommandFactoryContract;
use EasyPay\PHP\Yigim\Contracts\ResponseDataContract;
use EasyPay\PHP\Yigim\Exceptions\CommandExecutionFailedException;

/**
 * Class CommandExecutor
 *
 * Represents an implementation of CommandExecutorContract used for executing commands.
 *
 * @package EasyPay\PHP\Yigim\Executors
 */
class CommandExecutor implements CommandExecutorContract
{
    private CommandAttributerContract $attributer;
    private ResponseHandlerAbstract $responseHandler;
    private CommandEndpointProviderContract $endpointProvider;

    /**
     * CommandExecutor constructor.
     *
     * @param CommandFactoryContract $factory The factory for creating command components.
     */
    public function __construct(CommandFactoryContract $factory)
    {
        $this->attributer = $factory->createAttributer();
        $this->responseHandler = $factory->createResponseHandler();
        $this->endpointProvider = $factory->createProvider();
    }

    /**
     * Executes the command.
     *
     * @return ResponseDataContract The response data contract.
     * @throws CommandExecutionFailedException If the command execution fails.
     */
    public function execute(): ResponseDataContract
    {
        $ch = curl_init();

        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, true);
        curl_setopt($ch, CURLOPT_URL, $this->getURL());
        curl_setopt($ch, CURLOPT_FAILONERROR, true);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($ch, CURLOPT_TIMEOUT, 10);

        $response = curl_exec($ch);

        if (curl_errno($ch))
            throw new CommandExecutionFailedException(
                "An error occurred while trying to execute the command: " . curl_error($ch),
                curl_errno($ch)
            );

        return $this->responseHandler->handle($response);
    }

    /**
     * Retrieves the command attributer for building command fields.
     *
     * @return CommandAttributerContract The command attributer.
     */
    public function fieldBuilder(): CommandAttributerContract
    {
        return $this->attributer;
    }

    /**
     * Builds the URL for the command execution.
     *
     * @return string The URL for the command execution.
     */
    private function getURL(): string
    {
        $fields = $this->attributer->getAttributes();

        $endpoint = $this->endpointProvider->getEndpoint();
        $query = http_build_query($fields);

        $url = "$endpoint?$query";

        return $url;
    }
}
