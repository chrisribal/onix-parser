<?php

namespace Ribal\Onix\CodeList;

/**
 * ONIX Code List 62
 *
 * Used with <TaxRateCode> <x471>
 *
 * @see https://ns.editeur.org/onix/en/62
 */
class CodeList62 extends CodeList implements CodeListInterface
{
	/**
	 * Code List 62 for en
	 *
	 * @var array
	 * @see https://ns.editeur.org/onix/en/62
	 */
	protected static $en = [
		'H' => 'Higher rate',
		'P' => 'Tax paid at source (Italy)',
		'R' => 'Lower rate',
		'S' => 'Standard rate',
		'T' => 'Super-low rate',
		'Z' => 'Zero-rated',
	];

	/**
	 * Code List 62 for es
	 *
	 * @var array
	 * @see https://ns.editeur.org/onix/es/62
	 */
	protected static $es = [
		'H' => 'Tipo superior',
		'P' => 'Impuesto pagado en origen (Italia)',
		'R' => 'Tipo inferior',
		'S' => 'Tipo normal',
		'T' => 'Tipo super bajo',
		'Z' => 'Tipo cero',
	];

	/**
	 * Code List 62 for de
	 *
	 * @var array
	 * @see https://ns.editeur.org/onix/de/62
	 */
	protected static $de = [
		'H' => 'Higher rate',
		'P' => 'Tax paid at source (Italy)',
		'R' => 'Lower rate',
		'S' => 'Standard rate',
		'T' => 'Super-low rate',
		'Z' => 'Zero-rated',
	];

	/**
	 * Code List 62 for fr
	 *
	 * @var array
	 * @see https://ns.editeur.org/onix/fr/62
	 */
	protected static $fr = [
		'H' => 'Taux majoré',
		'P' => 'Taxe payée à la source (Italie)',
		'R' => 'Taux réduit',
		'S' => 'Taux normal',
		'T' => 'Taux super réduit',
		'Z' => 'Taux zéro',
	];

	/**
	 * Code List 62 for it
	 *
	 * @var array
	 * @see https://ns.editeur.org/onix/it/62
	 */
	protected static $it = [
		'H' => 'Aliquota superiore',
		'P' => 'Assolta alla fonte (Italia)',
		'R' => 'Aliquota inferiore',
		'S' => 'Aliquota standard',
		'T' => 'Aliquota minima',
		'Z' => 'Esentasse',
	];

	/**
	 * Code List 62 for nb
	 *
	 * @var array
	 * @see https://ns.editeur.org/onix/nb/62
	 */
	protected static $nb = [
		'H' => 'Høyere sats',
		'P' => 'Mva. betalt av forlaget (Italia)',
		'R' => 'Lav sats',
		'S' => 'Standard sats',
		'T' => 'Superlav sats',
		'Z' => 'Uten mva.',
	];

	/**
	 * Code List 62 for tr
	 *
	 * @var array
	 * @see https://ns.editeur.org/onix/tr/62
	 */
	protected static $tr = [
		'H' => 'Yüksek oran',
		'P' => 'Kaynakta kesilen vergi (İtalya)',
		'R' => 'Düşük oran',
		'S' => 'Standart oran',
		'T' => 'Super-low rate',
		'Z' => 'Sıfır oran',
	];
}
