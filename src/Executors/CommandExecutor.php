<?php

namespace Shahmal1yev\EasyPay\Yigim\Executors;


use Shahmal1yev\EasyPay\Yigim\Contracts\CommandAttributerContract;
use Shahmal1yev\EasyPay\Yigim\Contracts\CommandEndpointProviderContract;
use Shahmal1yev\EasyPay\Yigim\Contracts\CommandExecutorContract;
use Shahmal1yev\EasyPay\Yigim\Contracts\CommandFactoryContract;
use Shahmal1yev\EasyPay\Yigim\Contracts\CommandResponseHandlerContract;
use Shahmal1yev\EasyPay\Yigim\Exceptions\CommandExecutionFailedException;

class CommandExecutor implements CommandExecutorContract
{
    private CommandAttributerContract $attributer;
    private CommandResponseHandlerContract $responseHandler;
    private CommandEndpointProviderContract $endpointProvider;

    public function __construct(CommandFactoryContract $factory)
    {
        $this->attributer = $factory->createAttributer();
        $this->responseHandler = $factory->createResponseHandler();
        $this->endpointProvider = $factory->createProvider();
    }

    /**
     * @throws CommandExecutionFailedException
     */
    public function execute(): \Shahmal1yev\EasyPay\Yigim\Contracts\ResponseDataContract
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
                "An error occurred while trying to execute the command: ", curl_error($ch),
                curl_errno($ch)
            );

        return $this->responseHandler->handle($response);
    }

    public function setter(): CommandAttributerContract
    {
        return $this->attributer;
    }

    private function getURL(): string
    {
        $fields = $this->attributer->getAttributes();

        $endpoint = $this->endpointProvider->getEndpoint()->value;
        $query = http_build_query($fields);

        $url = "$endpoint?$query";

        return $url;
    }
}