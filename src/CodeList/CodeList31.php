<?php

namespace Ribal\Onix\CodeList;

/**
 * ONIX Code List 31
 *
 * Used with <AudienceRangePrecision> <b075>
 *
 * @see https://ns.editeur.org/onix/en/31
 */
class CodeList31 extends CodeList implements CodeListInterface
{
	/**
	 * Code List 31 for en
	 *
	 * @var array
	 * @see https://ns.editeur.org/onix/en/31
	 */
	protected static $en = ['01' => 'Exact', '03' => 'From', '04' => 'To'];

	/**
	 * Code List 31 for es
	 *
	 * @var array
	 * @see https://ns.editeur.org/onix/es/31
	 */
	protected static $es = ['01' => 'Exacta', '03' => 'Desde', '04' => 'Hasta'];

	/**
	 * Code List 31 for de
	 *
	 * @var array
	 * @see https://ns.editeur.org/onix/de/31
	 */
	protected static $de = ['01' => 'Exact', '03' => 'From', '04' => 'To'];

	/**
	 * Code List 31 for fr
	 *
	 * @var array
	 * @see https://ns.editeur.org/onix/fr/31
	 */
	protected static $fr = [
		'01' => 'Exactement',
		'03' => 'A partir de',
		'04' => 'Jusqu’à',
	];

	/**
	 * Code List 31 for it
	 *
	 * @var array
	 * @see https://ns.editeur.org/onix/it/31
	 */
	protected static $it = ['01' => 'Esatta', '03' => 'Da', '04' => 'A'];

	/**
	 * Code List 31 for nb
	 *
	 * @var array
	 * @see https://ns.editeur.org/onix/nb/31
	 */
	protected static $nb = ['01' => 'Eksakt', '03' => 'Fra', '04' => 'Til'];

	/**
	 * Code List 31 for tr
	 *
	 * @var array
	 * @see https://ns.editeur.org/onix/tr/31
	 */
	protected static $tr = [
		'01' => 'Tam',
		'03' => 'Aralık başlangıcı',
		'04' => 'Aralık sonu',
	];
}
