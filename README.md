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

### Multi-Language Code Lists
According to the website of the official publisher of the ONIX format, the code lists are provided in several languages. The following languages are currently supported:

| Language          | Language Code |
| ----------------- | ------------- |
| English (default) | `en`          |
| Spanish           | `es`          |
| German            | `de`          |
| French            | `fr`          |
| Italian           | `it`          |
| Norwegian         | `nb`          |
| Turkish           | `tr`          |

__Please note that the code lists were automatically scraped from the [EDITEUR website](https://ns.editeur.org/onix/en). Therefore, some translations into the individual languages can be incorrect or partly missing. Feel free to submit a pull request with your fixed language of the code lists.__

To use a specific language, just pass the language code as argument in the parser constructor:

```php
// Create parser using german code list values
$parser = new \Ribal\Onix\Parser('de');
```

## Measurements ##
The PHP ONIX Parser reads all of the given Measurements from the ONIX file and assigns the correct codes for them. Using that, you can either loop through all given Measurements:
```php
// get the DescriptiveDetail portion of the product
$descriptiveDetail = $product->getDescriptiveDetail();

foreach ($descriptiveDetail->getMeasures() as $measure) {
	echo sprintf('%s: %s %s',                      // -> "Height: 210 Centimeters"
		(string) $measure->getMeasureType(),       // e.g. "Height"
		$measure->getMeasurement(),                // e.g. "210"
		(string) $measure->getMeasureUnitCode()    // e.g. "Centimeters"
	);
}
```
Using shorthand functions you can also search for measurements of type height, width, thickness or weight:
```php
/** @var Ribal\Onix\Product\Measure */
$height = $descriptiveDetail->getHeight();
$width = $descriptiveDetail->getWidth();
$thickness = $descriptiveDetail->getThickness();
$weight = $descriptiveDetail->getWeight();

echo sprintf("Height: %s %s", $height->getMeasurement(), $height->getMeasureUnitCode()->getCode());
// --> Height: 210 cm
```

## Built With
This library uses parts of the Symfony Serializer to parse the XML files and convert them into PHP objects.

## To Do
This library is still work in progress. Here's what's coming in the next releases:
- [.] Optimize translations
- [.] Add more shorthand functions (like `$product->getDescriptionText()`)
- [.] Add a writer to create ONIX files from PHP objects

## License
This project is licensed under the MIT License - see the [LICENSE](LICENSE) file for details
