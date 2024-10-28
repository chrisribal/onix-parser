<?php

namespace Ribal\Onix;

use DOMCdataSection;
use DOMNode;
use Symfony\Component\Serializer\Encoder\XmlEncoder;
use Symfony\Component\Serializer\Exception\NotEncodableValueException;

class ONIXEncoder extends XmlEncoder
{

    /**
     * {@inheritdoc}
     */
    public function decode(string $data, string $format, array $context = []): mixed
    {
        
        if ('' === trim($data)) {
            throw new NotEncodableValueException('Invalid XML data, it can not be empty.');
        }

        $dom = new \DOMDocument();
        $dom->loadXML($data);
        $xpath = new \DOMXPath($dom);

        foreach ($xpath->query("//*[@textformat='02' or @textformat='03' or @textformat='05']") as $textElement) {
            $this->wrapText($textElement);
        }

        $data = $dom->saveXML();

        return parent::decode($data, $format, $context);
        
    }

    /**
     * Wrap XML/HTML/XHTML nodes into CDATA group, so it's contents will not
     * be processed by any normalizer or serializer.
     * 
     * @param DOMNode $node
     * @return void
     */
    private function wrapText(DOMNode $node)
    {

        $innerHtml = "";

        foreach ($node->childNodes as $child) {
            $innerHtml .= $node->ownerDocument->saveXML($child);
        }

        while ($node->hasChildNodes()) {
            $node->removeChild($node->firstChild);
        }

        $cdata = new DOMCdataSection($innerHtml);

        $node->appendChild($cdata);

    }


}