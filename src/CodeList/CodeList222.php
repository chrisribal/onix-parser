<?php

namespace Ribal\Onix\CodeList;

/**
 * ONIX Code List 222
 *
 * Used with <MessageStatusDateRole> <m490>
 *
 * @see https://ns.editeur.org/onix/en/222
 */
class CodeList222 extends CodeList implements CodeListInterface
{
	/**
	 * Code List 222 for en
	 *
	 * @var array
	 * @see https://ns.editeur.org/onix/en/222
	 */
	protected static $en = ['01' => 'Ingest date', '02' => 'Export date'];

	/**
	 * Code List 222 for es
	 *
	 * @var array
	 * @see https://ns.editeur.org/onix/es/222
	 */
	protected static $es = ['01' => 'Ingest date', '02' => 'Export date'];

	/**
	 * Code List 222 for de
	 *
	 * @var array
	 * @see https://ns.editeur.org/onix/de/222
	 */
	protected static $de = ['01' => 'Ingest date', '02' => 'Export date'];

	/**
	 * Code List 222 for fr
	 *
	 * @var array
	 * @see https://ns.editeur.org/onix/fr/222
	 */
	protected static $fr = ['01' => 'Date d’intégration', '02' => 'Date d’export'];

	/**
	 * Code List 222 for it
	 *
	 * @var array
	 * @see https://ns.editeur.org/onix/it/222
	 */
	protected static $it = ['01' => 'Data di importazione', '02' => 'Data di esportazione'];

	/**
	 * Code List 222 for nb
	 *
	 * @var array
	 * @see https://ns.editeur.org/onix/nb/222
	 */
	protected static $nb = ['01' => 'Ingest date', '02' => 'Export date'];

	/**
	 * Code List 222 for tr
	 *
	 * @var array
	 * @see https://ns.editeur.org/onix/tr/222
	 */
	protected static $tr = ['01' => 'Ingest date', '02' => 'Export date'];
}
