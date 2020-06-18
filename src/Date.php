<?php

namespace Ribal\Onix;

use Ribal\Onix\CodeList\CodeList;
use Ribal\Onix\CodeList\CodeList55;
use DateTime;

class Date
{

    private const TEXT_FORMATS = ['12', '32'];

    /**
     * ONIX Date format code as of CodeList 55
     *
     * @var CodeList
     */
    protected $formatCode;

    /**
     * The actual dates
     *
     * @var array
     */
    protected $dates = [];

    /**
     * Set the format code to be used
     *
     * @param CodeList $formatCode
     * @return void
     */
    public function setFormatCode(CodeList $formatCode)
    {
        $this->formatCode = $formatCode;
    }
    
    /**
     * Parse the input date string
     *
     * @param string $input
     * @return void
     */
    public function parseDate(string $input)
    {
        
        // if the date was given in a text string format, we don't need to parse
        if (in_array($this->formatCode->getCode(), self::TEXT_FORMATS)) {
            return $this->dates[] = $input;
        }

        $format = $this->formatCode->getValue();

        // we don't care about the Hijri calendar at the moment
        $format = preg_replace('/\s*\(H\)/i', '', $format);

        // split ranged formats to single formats
        $formats = array_values(array_filter(explode('|', str_replace('YYYY', '|YYYY', $format))));

        foreach ($formats as $i => $format) {

            $singleInput = substr($input, ($i * strlen($format)), strlen($format));

            // year is always the first 4 digits
            $year = substr($singleInput, 0, 4);

            $month = strpos($format, 'MM') !== false ? substr($singleInput, strpos($format, 'MM'), 2) : null;
            $day = strpos($format, 'DD') !== false ? substr($singleInput, strpos($format, 'DD'), 2) : null;
            $week = strpos($format, 'WW') !== false ? substr($singleInput, strpos($format, 'WW'), 2) : null;
            $quarter = strpos($format, 'Q') !== false ? substr($singleInput, strpos($format, 'Q'), 1) : null;
            $season = strpos($format, 'S') !== false ? substr($singleInput, strpos($format, 'S'), 1) : null;
            $time = strpos($format, 'T') !== false ? substr($singleInput, strpos($format, 'T') + 1) : null;

            if ($week) {
                $this->dates[] = [
                    (new DateTime('midnight'))->setISODate($year, $week),
                    (new DateTime('midnight'))->setISODate($year, $week)->modify('+ 7 days'),
                ];
            } elseif ($quarter) {
                $this->dates[] = [
                    (new DateTime('midnight'))->setDate($year, (($quarter - 1) * 3) + 1, 1),
                    (new DateTime('midnight'))->setDate($year, (($quarter) * 3) + 1, 1)
                ];
            } elseif ($season) {

                // Spring
                if ($season == 1) {
                    $this->dates[] = [
                        new DateTime($year . '-03-20 00:00:00'),
                        new DateTime($year . '-06-20 00:00:00')
                    ];

                // Summer
                } elseif ($season == 2) {
                    $this->dates[] = [
                        new DateTime($year . '-06-20 00:00:00'),
                        new DateTime($year . '-09-22 00:00:00')
                    ];

                // Autumn
                } elseif ($season == 3) {
                    $this->dates[] = [
                        new DateTime($year . '-09-22 00:00:00'),
                        new DateTime($year . '-12-21 00:00:00')
                    ];

                // Winter
                } elseif ($season == 4) {
                    $this->dates[] = [
                        new DateTime($year . '-12-21 00:00:00'),
                        new DateTime(($year + 1) . '-03-20 00:00:00')
                    ];
                }

            } else {

                $dateString = implode('-', [
                    $year, $month ?? 1, $day ?? 1
                ]);

                $dateString .= 'T' . $time ?? '00:00:00';

                $this->dates[] = new DateTime($dateString);

            }

        }

    }

    /**
     * Parse a date by date string and format code
     *
     * @param string $date
     * @param string $formatCode
     * @return void
     */
    public static function parse(string $input, string $formatCode = "00")
    {
        $class = new self();
        
        $class->setFormatCode(CodeList55::resolve($formatCode));
        $class->parseDate($input);

        return $class;

    }
    
    /**
     * Format the dates with the given date format
     *
     * @param string $dateFormat Date format according to DateTime::format()
     * @return string
     */
    public function format(string $dateFormat)
    {
    	$output = '';
    	
    	foreach ($this->dates as $i => $date) {
			if ($i > 0) {
				$output .= ' – ';
			}
			$output .= $date->format($dateFormat);
    	}
    	
    	return $output;
    }

    /**
     * Format the given date object to valid ONIX format
     *
     * @return string
     */
    public function formatOnix()
    {
        // TODO
    }

}
