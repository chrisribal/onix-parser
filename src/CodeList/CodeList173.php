<?php

namespace Ribal\Onix\CodeList;

/**
 * ONIX Code List 173
 *
 * Used with <PriceDateRole> <x476>
 *
 * @see https://ns.editeur.org/onix/en/173
 */
class CodeList173 extends CodeList implements CodeListInterface
{
	/**
	 * Code List 173 for en
	 *
	 * @var array
	 * @see https://ns.editeur.org/onix/en/173
	 */
	protected static $en = [
		'14' => 'From date',
		'15' => 'Until date',
		'24' => 'From… until date',
	];

	/**
	 * Code List 173 for es
	 *
	 * @var array
	 * @see https://ns.editeur.org/onix/es/173
	 */
	protected static $es = [
		'14' => 'Fecha desde',
		'15' => 'Fecha hasta',
		'24' => 'Fecha desde … hasta',
	];

	/**
	 * Code List 173 for de
	 *
	 * @var array
	 * @see https://ns.editeur.org/onix/de/173
	 */
	protected static $de = [
		'14' => 'From date',
		'15' => 'Until date',
		'24' => 'From… until date',
	];

	/**
	 * Code List 173 for fr
	 *
	 * @var array
	 * @see https://ns.editeur.org/onix/fr/173
	 */
	protected static $fr = [
		'14' => 'A partir de',
		'15' => 'Jusqu’au',
		'24' => 'A partir du… jusqu’au',
	];

	/**
	 * Code List 173 for it
	 *
	 * @var array
	 * @see https://ns.editeur.org/onix/it/173
	 */
	protected static $it = [
		'14' => 'Dalla data',
		'15' => 'Alla data',
		'24' => 'Dalla data... alla data',
	];

	/**
	 * Code List 173 for nb
	 *
	 * @var array
	 * @see https://ns.editeur.org/onix/nb/173
	 */
	protected static $nb = [
		'14' => 'Fra og med-dato',
		'15' => 'Til og med-dato',
		'24' => 'Fra-til dato',
	];

	/**
	 * Code List 173 for tr
	 *
	 * @var array
	 * @see https://ns.editeur.org/onix/tr/173
	 */
	protected static $tr = [
		'14' => 'Şu tarihten itibaren',
		'15' => 'Şu tarihe kadar',
		'24' => 'Şu tarihten … şu tarihe kadar',
	];
}
