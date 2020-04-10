<?php

namespace Ribal\Onix\CodeList;

/**
 * ONIX Code List 229
 *
 * Used with <Gender> <x524>
 *
 * @see https://ns.editeur.org/onix/en/229
 */
class CodeList229 extends CodeList implements CodeListInterface
{
	/**
	 * Code List 229 for en
	 *
	 * @var array
	 * @see https://ns.editeur.org/onix/en/229
	 */
	protected static $en = ['u' => 'Unknown or unspecified', 'f' => 'Female', 'm' => 'Male'];

	/**
	 * Code List 229 for es
	 *
	 * @var array
	 * @see https://ns.editeur.org/onix/es/229
	 */
	protected static $es = [
		'u' => 'Desconocido o no especificado',
		'f' => 'Femenino',
		'm' => 'Masculino',
	];

	/**
	 * Code List 229 for de
	 *
	 * @var array
	 * @see https://ns.editeur.org/onix/de/229
	 */
	protected static $de = ['u' => 'Unknown or unspecified', 'f' => 'Female', 'm' => 'Male'];

	/**
	 * Code List 229 for fr
	 *
	 * @var array
	 * @see https://ns.editeur.org/onix/fr/229
	 */
	protected static $fr = [
		'u' => 'Inconnu / non spécifié',
		'f' => 'Female',
		'm' => 'Male',
	];

	/**
	 * Code List 229 for it
	 *
	 * @var array
	 * @see https://ns.editeur.org/onix/it/229
	 */
	protected static $it = [
		'u' => 'Sconosciuto o non specificato',
		'f' => 'Femminile',
		'm' => 'Maschile',
	];

	/**
	 * Code List 229 for nb
	 *
	 * @var array
	 * @see https://ns.editeur.org/onix/nb/229
	 */
	protected static $nb = [
		'u' => 'Ukjent eller uspesifisert',
		'f' => 'Kvinne',
		'm' => 'Mann',
	];

	/**
	 * Code List 229 for tr
	 *
	 * @var array
	 * @see https://ns.editeur.org/onix/tr/229
	 */
	protected static $tr = [
		'u' => 'Bilinmeyen veya belirtilmemiş',
		'f' => 'Kadın',
		'm' => 'Erkek',
	];
}
