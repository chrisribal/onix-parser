# PHP ONIX 3.0 Parser
This package is a simple PHP library for reading ONIX 3.0 files in the general formats Short and Ref. Helper functions in the individual units make it easy to read out the details that you need from the data record. Text elements in different formats as well as the different ONIX date formats are automatically parsed and can therefore be used easily.

__This package is currently under development. Although most fields should be detected and parsed by the library, some fields still need more work.__

## Installation
PHP 7.1 or greater is required.

Installation is recommended to be done via composer by running:
```
composer require ribal/onix
```

## Usage
To parse an ONIX message in XML format, a new parser is instantiated. The XML file is then passed to the parser. The result is the complete ONIX message that can now be processed.

```php

$parser = new \Ribal\Onix\Parser();

/** @var Ribal\Onix\Message\Message; */
$message = $parser->parseString(
    file_get_contents('sample.xml')
);

/** @var Ribal\Onix\Product\Product[] */
$products = $message->getProducts();
```

## Code Lists
The library contains all current code lists in __issue 49__. Codes that are specified in the ONIX file are automatically read out, so that you receive a readable version of the codes.

Let's say, you have a product in your message showing a specific NotificationType:

```xml
<ONIXMessage>
    <Product>
        <NotificationType>03</NotificationType>
        [...]
    </Product>
</ONIXMessage>
```

```php
// Either get the Code object and read it's code and/or value
$type = $product->getNotificationType();
$code = $code->getCode();   // "03"
$value = $code->getValue(); // "Notification confirmed on publication"

// or directly get the value as string
$value = (string) $product->getNotificationType();
```

## Built With
This library uses parts of the Symfony Serializer to parse the XML files and convert them into PHP objects.

## License
This project is licensed under the MIT License - see the [LICENSE](LICENSE) file for details