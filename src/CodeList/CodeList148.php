<?php

namespace Ribal\Onix\CodeList;

/**
 * ONIX Code List 148
 *
 * Used with <CollectionType> <x329>
 *
 * @see https://ns.editeur.org/onix/en/148
 */
class CodeList148 extends CodeList implements CodeListInterface
{
	/**
	 * Code List 148 for en
	 *
	 * @var array
	 * @see https://ns.editeur.org/onix/en/148
	 */
	protected static $en = [
		'00' => 'Unspecified (default)',
		'10' => 'Publisher collection',
		'11' => 'Collection éditoriale',
		'20' => 'Ascribed collection',
	];

	/**
	 * Code List 148 for es
	 *
	 * @var array
	 * @see https://ns.editeur.org/onix/es/148
	 */
	protected static $es = [
		'00' => 'No especificado (valor por defecto)',
		'10' => 'Conjunto definido por la editorial',
		'11' => 'Collection éditoriale',
		'20' => 'Conjunto definido por algún agente externo a la editorial',
	];

	/**
	 * Code List 148 for de
	 *
	 * @var array
	 * @see https://ns.editeur.org/onix/de/148
	 */
	protected static $de = [
		'00' => 'Unspecified (default)',
		'10' => 'Publisher collection',
		'11' => 'Collection éditoriale',
		'20' => 'Ascribed collection',
	];

	/**
	 * Code List 148 for fr
	 *
	 * @var array
	 * @see https://ns.editeur.org/onix/fr/148
	 */
	protected static $fr = [
		'00' => 'Non spécifié (par défaut)',
		'10' => 'Collection (série)',
		'11' => 'Collection',
		'20' => 'Collection attribuée',
	];

	/**
	 * Code List 148 for it
	 *
	 * @var array
	 * @see https://ns.editeur.org/onix/it/148
	 */
	protected static $it = [
		'00' => 'Non specificata (valore predefinito)',
		'10' => 'Collezione dell’editore',
		'11' => 'Collection éditoriale',
		'20' => 'Collezione attribuita',
	];

	/**
	 * Code List 148 for nb
	 *
	 * @var array
	 * @see https://ns.editeur.org/onix/nb/148
	 */
	protected static $nb = [
		'00' => 'Uspesifisert (standard)',
		'10' => 'Forlagsserie / Forlagsdefinert samling',
		'11' => 'Collection éditoriale',
		'20' => 'Annen tilknytning / Tillagt samling',
	];

	/**
	 * Code List 148 for tr
	 *
	 * @var array
	 * @see https://ns.editeur.org/onix/tr/148
	 */
	protected static $tr = [
		'00' => 'Belirtilmemiş (varsayılan)',
		'10' => 'Yayımcı koleksiyonu',
		'11' => 'Collection éditoriale',
		'20' => 'Üstlenici koleksiyonu',
	];
}
