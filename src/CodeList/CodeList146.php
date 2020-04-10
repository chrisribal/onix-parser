<?php

namespace Ribal\Onix\CodeList;

/**
 * ONIX Code List 146
 *
 * Used with    • <EpubUsageStatus> <x319>    • <PriceConstraintStatus> <x530>
 *
 * @see https://ns.editeur.org/onix/en/146
 */
class CodeList146 extends CodeList implements CodeListInterface
{
	/**
	 * Code List 146 for en
	 *
	 * @var array
	 * @see https://ns.editeur.org/onix/en/146
	 */
	protected static $en = [
		'01' => 'Permitted unlimited',
		'02' => 'Permitted subject to limit',
		'03' => 'Prohibited',
	];

	/**
	 * Code List 146 for es
	 *
	 * @var array
	 * @see https://ns.editeur.org/onix/es/146
	 */
	protected static $es = [
		'01' => 'Permitido sin límites',
		'02' => 'Permitido, con limitaciones',
		'03' => 'No permitido',
	];

	/**
	 * Code List 146 for de
	 *
	 * @var array
	 * @see https://ns.editeur.org/onix/de/146
	 */
	protected static $de = [
		'01' => 'Permitted unlimited',
		'02' => 'Permitted subject to limit',
		'03' => 'Prohibited',
	];

	/**
	 * Code List 146 for fr
	 *
	 * @var array
	 * @see https://ns.editeur.org/onix/fr/146
	 */
	protected static $fr = [
		'01' => 'Autorisation sans limite',
		'02' => 'Autorisation soumise à limite',
		'03' => 'Interdiction',
	];

	/**
	 * Code List 146 for it
	 *
	 * @var array
	 * @see https://ns.editeur.org/onix/it/146
	 */
	protected static $it = [
		'01' => 'Utilizzo illimitato',
		'02' => 'Utilizzo limitato',
		'03' => 'Utilizzo vietato',
	];

	/**
	 * Code List 146 for nb
	 *
	 * @var array
	 * @see https://ns.editeur.org/onix/nb/146
	 */
	protected static $nb = [
		'01' => 'Ubegrenset',
		'02' => 'Tillatt, med begrensninger',
		'03' => 'Forbudt',
	];

	/**
	 * Code List 146 for tr
	 *
	 * @var array
	 * @see https://ns.editeur.org/onix/tr/146
	 */
	protected static $tr = [
		'01' => 'Sınırsız izinli',
		'02' => 'Sınırlı izinli',
		'03' => 'İzinsiz',
	];
}
