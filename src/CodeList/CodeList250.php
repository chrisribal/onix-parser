<?php

namespace Ribal\Onix\CodeList;

/**
 * ONIX Code List 250
 *
 * Used with <ResourceIDType> <x565>
 *
 * @see https://ns.editeur.org/onix/en/250
 */
class CodeList250 extends CodeList implements CodeListInterface
{
	/**
	 * Code List 250 for en
	 *
	 * @var array
	 * @see https://ns.editeur.org/onix/en/250
	 */
	protected static $en = ['01' => 'Proprietary', '09' => 'ISCC'];

	/**
	 * Code List 250 for es
	 *
	 * @var array
	 * @see https://ns.editeur.org/onix/es/250
	 */
	protected static $es = ['01' => 'Propio', '09' => 'ISCC'];

	/**
	 * Code List 250 for de
	 *
	 * @var array
	 * @see https://ns.editeur.org/onix/de/250
	 */
	protected static $de = ['01' => 'Proprietary', '09' => 'ISCC'];

	/**
	 * Code List 250 for fr
	 *
	 * @var array
	 * @see https://ns.editeur.org/onix/fr/250
	 */
	protected static $fr = ['01' => 'Propriétaire', '09' => 'ISCC'];

	/**
	 * Code List 250 for it
	 *
	 * @var array
	 * @see https://ns.editeur.org/onix/it/250
	 */
	protected static $it = ['01' => 'Proprietario', '09' => 'ISCC'];

	/**
	 * Code List 250 for nb
	 *
	 * @var array
	 * @see https://ns.editeur.org/onix/nb/250
	 */
	protected static $nb = ['01' => 'Proprietary', '09' => 'ISCC'];

	/**
	 * Code List 250 for tr
	 *
	 * @var array
	 * @see https://ns.editeur.org/onix/tr/250
	 */
	protected static $tr = ['01' => 'Proprietary', '09' => 'ISCC'];
}
