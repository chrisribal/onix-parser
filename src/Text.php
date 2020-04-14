<?php

namespace Ribal\Onix;

use Ribal\Onix\Exception\InvalidTextFormatException;

class Text
{

    public const TYPE_HTML = '02';
    public const TYPE_XML = '03';
    public const TYPE_XHTML = '05';
    public const TYPE_DEFAULT = '06';
    public const TYPE_ASCII = '07';

    /**
     * The default text format
     *
     * @var string
     */
    protected $textFormat = self::TYPE_DEFAULT;

    /**
     * The actual content
     *
     * @var string
     */
    protected $content = "";

    /**
     * Content language
     *
     * @var null|string
     */
    protected $language = null;

    /**
     * Constructor
     *
     * @param string $content
     * @param string $format
     * @param string $language
     */
    public function __construct(string $content, string $format = self::TYPE_DEFAULT, $language = null)
    {

        if (!in_array($format, [self::TYPE_ASCII, self::TYPE_DEFAULT, self::TYPE_HTML, self::TYPE_XHTML, self::TYPE_XML])) {
            throw new InvalidTextFormatException(sprintf('Unknown text format: %s. See ONIX CodeList 34 for more information.', $format));
        }


        if ($format !== self::TYPE_HTML && $format !== self::TYPE_XML && $format !== self::TYPE_XHTML && $format !== self::TYPE_DEFAULT && $format !== self::TYPE_ASCII) {

        }


        $this->content = $content;
        $this->textFormat = $format;
        $this->language = $language;
    }

    /**
     * Get plain text from (X)HTML
     *
     * @return string
     */
    public function toPlain()
    {

		if ($this->textFormat == self::TYPE_DEFAULT || $this->textFormat == self::TYPE_ASCII) {
    		return $this->content;
    	}

        $content = preg_replace('/<br\s?/?>/', "\n", $this->content);
        $content = strip_tags($content);

        return $content;

    }
    
    /**
     * Output plain text as HTML by translating simple line
     * breaks to HTML paragraphs and encode special HTML
     * characters.
     *
     * @return string
     */
    public function toHtml()
    {
    	if ($this->textFormat == self::TYPE_HTML || $this->textFormat == self::TYPE_XHTML) {
    		return $this->content;
    	}
    
    	$content = htmlspecialchars($this->content);
    	
		$content = '<p>' . preg_replace(
			['/\n{2,}/m', '/\n/m'],
			['</p><p>', '<br>'], 
			trim($content)
		) . '</p>';
		
		return $content;
		
    }    
    
    /**
     * Output the current content
     *
     * @return string
     */
    public function __toString()
    {
    	return $this->content;
    }

}
