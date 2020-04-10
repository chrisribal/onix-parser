<?php

namespace Ribal\Onix\CodeList;

/**
 * ONIX Code List 100
 *
 * Used with <DiscountCodeType> <j363>
 *
 * @see https://ns.editeur.org/onix/en/100
 */
class CodeList100 extends CodeList implements CodeListInterface
{
	/**
	 * Code List 100 for en
	 *
	 * @var array
	 * @see https://ns.editeur.org/onix/en/100
	 */
	protected static $en = [
		'01' => 'BIC discount group code',
		'02' => 'Proprietary discount code',
		'03' => 'Boeksoort',
		'04' => 'German terms code',
		'05' => 'Proprietary commission code',
		'06' => 'BIC commission group code',
		'07' => 'ISNI-based discount group code',
	];

	/**
	 * Code List 100 for es
	 *
	 * @var array
	 * @see https://ns.editeur.org/onix/es/100
	 */
	protected static $es = [
		'01' => 'Código de grupo de descuento BIC',
		'02' => 'Código de descuento propio',
		'03' => 'Boeksoort',
		'04' => 'Código de condiciones de Alemania',
		'05' => 'Código de comisión propio',
		'06' => 'Código de grupo de comisión BIC',
		'07' => 'Código de descuento basado en ISNI',
	];

	/**
	 * Code List 100 for de
	 *
	 * @var array
	 * @see https://ns.editeur.org/onix/de/100
	 */
	protected static $de = [
		'01' => 'BIC discount group code',
		'02' => 'Proprietary discount code',
		'03' => 'Boeksoort',
		'04' => 'German terms code',
		'05' => 'Proprietary commission code',
		'06' => 'BIC commission group code',
		'07' => 'ISNI-based discount group code',
	];

	/**
	 * Code List 100 for fr
	 *
	 * @var array
	 * @see https://ns.editeur.org/onix/fr/100
	 */
	protected static $fr = [
		'01' => 'Code de remise BIC',
		'02' => 'Code remise propriétaire',
		'03' => 'Boeksoort',
		'04' => 'Code conditions allemand',
		'05' => 'Code commission propriétaire',
		'06' => 'Code de commission BIC',
		'07' => 'Code de remise basé sur l’ISNI',
	];

	/**
	 * Code List 100 for it
	 *
	 * @var array
	 * @see https://ns.editeur.org/onix/it/100
	 */
	protected static $it = [
		'01' => 'BIC discount group code',
		'02' => 'Codice di sconto proprietario',
		'03' => 'Boeksoort',
		'04' => 'Codice delle condizioni tedesche',
		'05' => 'Codice di commissione proprietario',
		'06' => 'BIC commission group code',
		'07' => 'Codice per gruppo di sconto basati su ISNI',
	];

	/**
	 * Code List 100 for nb
	 *
	 * @var array
	 * @see https://ns.editeur.org/onix/nb/100
	 */
	protected static $nb = [
		'01' => 'BIC discount group code',
		'02' => 'Proprietary discount code',
		'03' => 'Boeksoort',
		'04' => 'German terms code',
		'05' => 'Proprietary commission code',
		'06' => 'BIC commission group code',
		'07' => 'ISNI-based discount group code',
	];

	/**
	 * Code List 100 for tr
	 *
	 * @var array
	 * @see https://ns.editeur.org/onix/tr/100
	 */
	protected static $tr = [
		'01' => 'BIC iskonto grup kodu',
		'02' => 'Tescilli iskonto kodu',
		'03' => 'Boeksoort',
		'04' => 'Alman şart kodu',
		'05' => 'Tescilli komisyon kodu',
		'06' => 'BIC komisyon grup kodu',
		'07' => 'ISNI-based discount group code',
	];
}
