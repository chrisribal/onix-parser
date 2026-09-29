# PHP ONIX 3 Parser & Writer
A PHP library for reading and writing [ONIX for Books](https://www.editeur.org/83/Overview/) messages, the international standard for book metadata.

- **Read** ONIX 3.0 files (reference and short tags) into PHP objects
- **Write** ONIX 3.0 or ONIX 3.1 files (reference or short tags) from PHP objects
- Codes are resolved against the ONIX code lists, with labels in several languages
- Text elements in the different text formats and the ONIX date formats are handled automatically

__This package is still under development. Most of the commonly used elements are supported, but not every composite of the ONIX specification is modelled yet (see [Limitations](#limitations)).__

## Requirements
- PHP 8.2 or greater
- The PHP DOM extension (`ext-dom`)

The library is built on the Symfony Serializer (7.x).

## Installation
```
composer require ribal/onix
```

## Reading ONIX
Create a parser and pass the XML string to it. The result is the complete ONIX message:

```php
$parser = new \Ribal\Onix\Parser();

/** @var \Ribal\Onix\Message\Message $message */
$message = $parser->parseString(
    file_get_contents('sample.xml')
);

/** @var \Ribal\Onix\Product\Product[] $products */
$products = $message->getProduct();

foreach ($products as $product) {
    $descriptiveDetail = $product->getDescriptiveDetail();
    $publishingDetail = $product->getPublishingDetail();
    // ...
}
```

## Writing ONIX
Build the message from the objects in `Ribal\Onix\Message` and `Ribal\Onix\Product`, then let the parser generate the XML. Codes are always passed as code list objects, so invalid codes are rejected early:

```php
use Ribal\Onix\CodeList\CodeList1;
use Ribal\Onix\CodeList\CodeList149;
use Ribal\Onix\CodeList\CodeList15;
use Ribal\Onix\CodeList\CodeList150;
use Ribal\Onix\CodeList\CodeList2;
use Ribal\Onix\CodeList\CodeList5;
use Ribal\Onix\Date;
use Ribal\Onix\Message\Header\Header;
use Ribal\Onix\Message\Header\Sender;
use Ribal\Onix\Message\Message;
use Ribal\Onix\Parser;
use Ribal\Onix\Product\DescriptiveDetail;
use Ribal\Onix\Product\Product;
use Ribal\Onix\Product\ProductIdentifier;
use Ribal\Onix\Product\TitleDetail;
use Ribal\Onix\Product\TitleElement;

$message = new Message();

$sender = new Sender();
$sender->setSenderName('Example Publishing Ltd.');
$header = new Header();
$header->setSender($sender);
$header->setSentDateTime(new Date(new \DateTime()));
$message->setHeader($header);

$product = new Product();
$product->setRecordReference('com.example.9781234567897');
$product->setNotificationType(CodeList1::resolve('03'));

$identifier = new ProductIdentifier();
$identifier->setProductIDType(CodeList5::resolve('15')); // ISBN-13
$identifier->setIDValue('9781234567897');
$product->addProductIdentifier($identifier);

$descriptiveDetail = new DescriptiveDetail();
$descriptiveDetail->setProductComposition(CodeList2::resolve('00'));
$descriptiveDetail->setProductForm(CodeList150::resolve('BC')); // Paperback

$titleElement = new TitleElement();
$titleElement->setTitleElementLevel(CodeList149::resolve('01'));
$titleElement->setTitleText('An Example Title');
$titleDetail = new TitleDetail();
$titleDetail->setTitleType(CodeList15::resolve('01'));
$titleDetail->addTitleElement($titleElement);
$descriptiveDetail->addTitleDetail($titleDetail);
$product->setDescriptiveDetail($descriptiveDetail);

$message->addProduct($product);

$parser = new Parser();
$xml = $parser->generate($message, 'reference', '3.1');
```

`generate()` takes the tag format (`reference` or `short`) and the ONIX release (`3.0` or `3.1`, default `3.0`). The release sets the XML namespace and the `release` attribute of the message. Elements are written in the order the ONIX schema requires; empty elements are omitted.

We recommend validating generated files against the official XSD schemas, which you can download from [EDItEUR](https://www.editeur.org/93/Release-3.0-Downloads/).

### ONIX 3.1 and GPSR
Since the EU General Product Safety Regulation (GPSR), a product safety contact with a postal address is required for products sold in the EU. Only ONIX 3.1 can carry that address, so generate these messages with release `3.1`:

```php
use Ribal\Onix\CodeList\CodeList198;
use Ribal\Onix\CodeList\CodeList91;
use Ribal\Onix\Product\ProductContact;

$contact = new ProductContact();
$contact->setProductContactRole(CodeList198::resolve('10')); // Product safety contact
$contact->setProductContactName('Example Publishing Ltd.');
$contact->setEmailAddress('safety@example.com');
$contact->setStreetAddress('Example Street 1');
$contact->setLocationName('Berlin');
$contact->setPostalCode('10115');
$contact->setCountryCode(CodeList91::resolve('DE'));

$publishingDetail->addProductContact($contact);
```

Street, location and country code must be set together, otherwise the file does not validate.

### Supporting resources
A resource link belongs into a `<ResourceVersion>`. `SupportingResource::setResourceLink()` creates it for you (as a linkable resource, code list 161 code `01`):

```php
$resource = new \Ribal\Onix\Product\SupportingResource();
$resource->setResourceContentType(CodeList158::resolve('01')); // Front cover
$resource->setContentAudience(CodeList154::resolve('00'));
$resource->setResourceMode(CodeList159::resolve('03'));        // Image
$resource->setResourceLink('https://example.com/cover.jpg');
```

## Code Lists
Every coded element is represented by a code list object, which holds the code and its label:

```xml
<ONIXMessage>
    <Product>
        <NotificationType>03</NotificationType>
        [...]
    </Product>
</ONIXMessage>
```

```php
// Either get the code list object and read its code and/or label
$type = $product->getNotificationType();
$code = $type->getCode();   // "03"
$value = $type->getValue(); // "Notification confirmed on publication"

// or directly get the label as string
$value = (string) $product->getNotificationType();
```

To create a code yourself, use `resolve()`. It throws a `Ribal\Onix\Exception\InvalidCodeListCodeException` if the code is not part of the list:

```php
$productForm = \Ribal\Onix\CodeList\CodeList150::resolve('BC');
```

The code lists are based on __issue 61__, with a few later codes added. Codes introduced in later issues may be missing; see the [To Do](#to-do) list.

### Multi-Language Code Lists
EDItEUR provides the code list labels in several languages. The following languages are currently supported:

| Language          | Language Code |
| ----------------- | ------------- |
| English (default) | `en`          |
| Spanish           | `es`          |
| German            | `de`          |
| French            | `fr`          |
| Italian           | `it`          |
| Norwegian         | `nb`          |
| Turkish           | `tr`          |

To use a specific language, pass the language code to the parser constructor:

```php
// Create parser using German code list labels
$parser = new \Ribal\Onix\Parser('de');
```

__The code lists were scraped automatically from the [EDItEUR website](https://ns.editeur.org/onix/en). Some translations may therefore be incorrect or missing. Pull requests with corrected translations are welcome.__

## Measurements
All measurements of a product are read with their codes, so you can loop through them:

```php
$descriptiveDetail = $product->getDescriptiveDetail();

foreach ($descriptiveDetail->getMeasure() as $measure) {
    echo sprintf('%s: %s %s',                      // -> "Height: 21 Centimeters"
        (string) $measure->getMeasureType(),       // e.g. "Height"
        $measure->getMeasurement(),                // e.g. "21"
        (string) $measure->getMeasureUnitCode()    // e.g. "Centimeters"
    );
}
```

Shorthand functions return the measurement of type height, width, thickness or weight:

```php
/** @var \Ribal\Onix\Product\Measure $height */
$height = $descriptiveDetail->getHeight();
$width = $descriptiveDetail->getWidth();
$thickness = $descriptiveDetail->getThickness();
$weight = $descriptiveDetail->getWeight();

echo sprintf('Height: %s %s', $height->getMeasurement(), $height->getMeasureUnitCode()->getCode());
// --> Height: 21 cm
```

## Limitations
- Not every composite of the ONIX specification is modelled. Elements without a matching class are ignored when reading and cannot be written.
- Reading is tested with ONIX 3.0 files. ONIX 3.1 files can be read as well, but elements introduced in 3.1 are only partly supported.
- Some composites that may repeat in ONIX (e.g. `<Tax>` in `<Price>`, `<ResourceVersion>` in `<SupportingResource>`) are currently modelled as a single element.

## To Do
- [ ] Update the code lists to the current issue
- [ ] Model the remaining composites of ONIX 3.1
- [ ] Optimize translations
- [ ] Add more shorthand functions (like `$product->getDescriptionText()`)
- [x] Add a writer to create ONIX files from PHP objects

## License
This project is licensed under the MIT License - see the [LICENSE](LICENSE) file for details.

ONIX is a standard of [EDItEUR](https://www.editeur.org/). The code lists are © EDItEUR.
