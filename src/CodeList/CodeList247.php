<?php

namespace Ribal\Onix\CodeList;

/**
 * ONIX Code List 247
 *
 * Used with <OccurrenceDateRole> <x554>
 *
 * @see https://ns.editeur.org/onix/en/247
 */
class CodeList247 extends CodeList implements CodeListInterface
{
	/**
	 * Code List 247 for en
	 *
	 * @var array
	 * @see https://ns.editeur.org/onix/en/247
	 */
	protected static $en = ['01' => 'Date of occurrence', '02' => 'Date of occurrence end'];

	/**
	 * Code List 247 for es
	 *
	 * @var array
	 * @see https://ns.editeur.org/onix/es/247
	 */
	protected static $es = ['01' => 'Fecha de celebración', '02' => 'Fecha de final de celebración'];

	/**
	 * Code List 247 for de
	 *
	 * @var array
	 * @see https://ns.editeur.org/onix/de/247
	 */
	protected static $de = ['01' => 'Date of occurrence', '02' => 'Date of occurrence end'];

	/**
	 * Code List 247 for fr
	 *
	 * @var array
	 * @see https://ns.editeur.org/onix/fr/247
	 */
	protected static $fr = [
		'01' => 'Date de l’événement',
		'02' => 'Date de fin de l’événement',
	];

	/**
	 * Code List 247 for it
	 *
	 * @var array
	 * @see https://ns.editeur.org/onix/it/247
	 */
	protected static $it = ['01' => 'Data dell’evento', '02' => 'Data di fine dell’evento'];

	/**
	 * Code List 247 for nb
	 *
	 * @var array
	 * @see https://ns.editeur.org/onix/nb/247
	 */
	protected static $nb = ['01' => 'Date of occurrence', '02' => 'Date of occurrence end'];

	/**
	 * Code List 247 for tr
	 *
	 * @var array
	 * @see https://ns.editeur.org/onix/tr/247
	 */
	protected static $tr = ['01' => 'Date of occurrence', '02' => 'Date of occurrence end'];
}
