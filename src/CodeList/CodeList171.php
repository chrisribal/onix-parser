<?php

namespace Ribal\Onix\CodeList;

/**
 * ONIX Code List 171
 *
 * Used with <TaxType> <x470>
 *
 * @see https://ns.editeur.org/onix/en/171
 */
class CodeList171 extends CodeList implements CodeListInterface
{
	/**
	 * Code List 171 for en
	 *
	 * @var array
	 * @see https://ns.editeur.org/onix/en/171
	 */
	protected static $en = ['01' => 'VAT', '02' => 'GST', '03' => 'ECO'];

	/**
	 * Code List 171 for es
	 *
	 * @var array
	 * @see https://ns.editeur.org/onix/es/171
	 */
	protected static $es = ['01' => 'IVA', '02' => 'IGV (GST)', '03' => 'ECO'];

	/**
	 * Code List 171 for de
	 *
	 * @var array
	 * @see https://ns.editeur.org/onix/de/171
	 */
	protected static $de = ['01' => 'VAT', '02' => 'GST', '03' => 'ECO'];

	/**
	 * Code List 171 for fr
	 *
	 * @var array
	 * @see https://ns.editeur.org/onix/fr/171
	 */
	protected static $fr = ['01' => 'TVA', '02' => 'GST', '03' => 'ECO'];

	/**
	 * Code List 171 for it
	 *
	 * @var array
	 * @see https://ns.editeur.org/onix/it/171
	 */
	protected static $it = ['01' => 'IVA', '02' => 'GST', '03' => 'ECO'];

	/**
	 * Code List 171 for nb
	 *
	 * @var array
	 * @see https://ns.editeur.org/onix/nb/171
	 */
	protected static $nb = ['01' => 'MVA', '02' => 'GST', '03' => 'ECO'];

	/**
	 * Code List 171 for tr
	 *
	 * @var array
	 * @see https://ns.editeur.org/onix/tr/171
	 */
	protected static $tr = ['01' => 'KDV', '02' => 'GSV', '03' => 'ECO'];
}
