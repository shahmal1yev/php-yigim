<?php

namespace Shahmal1yev\EasyPay\Yigim\Factories\Command;

use http\Exception\InvalidArgumentException;
use http\Exception\RuntimeException;
use Psr\Container\ContainerInterface;
use Shahmal1yev\EasyPay\Yigim\Abstracts\Command\CommandFactoryAbstract;
use Shahmal1yev\EasyPay\Yigim\Contracts\Command\CommandAttributeContract;
use Shahmal1yev\EasyPay\Yigim\Contracts\Command\InitializationCommandAttributeContract;
use Shahmal1yev\EasyPay\Yigim\Contracts\JsonResponseHandler\JsonResponseHandlerContract;
use Shahmal1yev\EasyPay\Yigim\Core\CommandAttribute\InitializationCommandAttribute;
use Shahmal1yev\EasyPay\Yigim\Core\JsonResponseHandler\InitializationJsonResponseHandler;

class InitializationCommandFactory extends CommandFactoryAbstract
{
    private readonly CommandAttributeContract $attributer;
    private readonly string $host;

    public static function make(InitializationCommandAttributeContract $attributer = null, ContainerInterface $containerBuilder = null): CommandFactoryAbstract
    {
        $command = new static($containerBuilder);
        $command->setAttributer($attributer ?? new InitializationCommandAttribute);
        $command->boot();

        return $command;
    }

    public function execute(string $responseHandler = InitializationJsonResponseHandler::class): JsonResponseHandlerContract
    {
        if (! in_array(JsonResponseHandlerContract::class, class_implements($responseHandler)))
        {
            throw new \InvalidArgumentException("'$responseHandler': Provided invalid JSON response handler");
        }

        $ch = curl_init();

        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 1);
        curl_setopt($ch, CURLOPT_URL, $this->getUrl());
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
        curl_setopt($ch, CURLOPT_TIMEOUT, 10);

        $response = curl_exec($ch);

        if ($response === false)
            throw new RuntimeException("cURL request falied: " . curl_error($ch));

        curl_close($ch);

        return new $responseHandler($response);
    }

    private function getUrl()
    {
        $url = $this->host;
        $query = $this->buildQuery();

        return "$url?$query";
    }

    protected function buildQuery()
    {
        $reflection = new \ReflectionClass($this->attributer);
        $properties = [];

        foreach($reflection->getProperties() as $property)
        {
            $property->setAccessible(true);
            $properties[$property->getName()] = $property->getValue($this->attributer);
            $property->setAccessible(false);
        }

        return http_build_query($properties);
    }

    private function setAttributer(CommandAttributeContract $attributer = null): void
    {
        $this->attributer = $attributer ?? new InitializationCommandAttribute();
    }

    public function setAttribute(string $attributeName, mixed $attributeValue): CommandFactoryAbstract
    {
        $attributeSetter = "set" . ucfirst($attributeName);

        if (method_exists($this->attributer, $attributeSetter))
        {
            $this->attributer->$attributeSetter($attributeValue);

            return $this;
        }

        throw new InvalidArgumentException("'$attributeName' is not exists for this command");
    }

    public function setHost(string $host = "https://sandbox.api.pay.yigim.az/payment/create")
    {
        $this->host = $host;
    }

    protected function boot(): void
    {
        // TODO: Implement boot() method.
    }
}