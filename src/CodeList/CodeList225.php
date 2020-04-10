<?php

namespace Ribal\Onix\CodeList;

/**
 * ONIX Code List 225
 *
 * Used with <StatusDetailCode> <a495>
 *
 * @see https://ns.editeur.org/onix/en/225
 */
class CodeList225 extends CodeList implements CodeListInterface
{
	/**
	 * Code List 225 for en
	 *
	 * @var array
	 * @see https://ns.editeur.org/onix/en/225
	 */
	protected static $en = ['000' => 'Unknown error', '001' => 'Unknown warning'];

	/**
	 * Code List 225 for es
	 *
	 * @var array
	 * @see https://ns.editeur.org/onix/es/225
	 */
	protected static $es = ['000' => 'Unknown error', '001' => 'Unknown warning'];

	/**
	 * Code List 225 for de
	 *
	 * @var array
	 * @see https://ns.editeur.org/onix/de/225
	 */
	protected static $de = ['000' => 'Unknown error', '001' => 'Unknown warning'];

	/**
	 * Code List 225 for fr
	 *
	 * @var array
	 * @see https://ns.editeur.org/onix/fr/225
	 */
	protected static $fr = ['000' => 'Erreur inconnue', '001' => 'Avertissement inconnu'];

	/**
	 * Code List 225 for it
	 *
	 * @var array
	 * @see https://ns.editeur.org/onix/it/225
	 */
	protected static $it = ['000' => 'Errore sconosciuto', '001' => 'Avvertimento sconosciuto'];

	/**
	 * Code List 225 for nb
	 *
	 * @var array
	 * @see https://ns.editeur.org/onix/nb/225
	 */
	protected static $nb = ['000' => 'Unknown error', '001' => 'Unknown warning'];

	/**
	 * Code List 225 for tr
	 *
	 * @var array
	 * @see https://ns.editeur.org/onix/tr/225
	 */
	protected static $tr = ['000' => 'Unknown error', '001' => 'Unknown warning'];
}
