# EasyPay PHP/Yığım

[![Version](https://img.shields.io/badge/Version-1.0-blue.svg)](https://semver.org/)
[![License: MIT](https://img.shields.io/badge/License-MIT-yellow.svg)](https://opensource.org/licenses/MIT)
[![Documentation](https://img.shields.io/badge/API-Documentation-green.svg)](https://easypayy.github.io/namespaces/easypay-php-yigim.html)
[![Author](https://img.shields.io/badge/Author-Github-purple.svg)](https://github.com/shahmal1yev)

A PHP package that makes it easy to integrate [Yığım Payment System](https://yigim.az/) into your projects.

![YIĞIM Logo](https://yigim.az/uploads/images/1-02.png)

## Documentation
You can read the API documentation from here. Feel free to submit a pull request to [docs](https://github.com/easypayy/easypayy.github.io) if you have something you'd like to add.

## Requirements
```json
"php": ">=8.3",
"ext-curl": "*",
"ext-http": "*"
```

## Installation

```php
composer require easypayy/php-yigim
```

## Usage

After including the library in your project, you can refer to the following examples:

### Initialization Command
```php
use EasyPay\PHP\Yigim\Facades;

$initializationCommand = CommandFacade::initialization()->fieldBuilder()
    ->setReference("REF0001")
    ->setType("SMS")
    ->setToken("CRD0001")
    ->setSave("y")
    ->setAmount(1000)
    ->setCurrency("994")
    ->setBiller("BLR001")
    ->setDescription("Test payment")
    ->setTemplate("TPL0001")
    ->setXMerchant("Merchant")
    ->setSignature("OaDZaBl6b13xIP+U9nulYQ==")
    ->setXType("JSON");

$responseContract = $initializationCommand->execute();

echo $responseContract->getUrl();
```

## Contribution

- If you find any bug or issue, please open an issue.
- If you want to contribute to the code, feel free to submit a pull request.

## Licence

This project is licensed under the MIT License. For more information, see the [LICENSE](https://opensource.org/license/MIT).