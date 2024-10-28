<?php

require_once __DIR__ . '/vendor/autoload.php';

$file = __DIR__ . '/test.xml';

$parser = new \Ribal\Onix\Parser();

/** @var Ribal\Onix\Message\Message; */
$message = $parser->parseString(
    file_get_contents($file)
);

/** @var Ribal\Onix\Product\Product[] */
$products = $message->getProducts();

$product = $products[0];

dd($product->getDescriptiveDetail()->getTitleDetail());