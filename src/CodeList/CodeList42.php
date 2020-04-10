<?php

namespace Ribal\Onix\CodeList;

/**
 * ONIX Code List 42
 *
 * Used with <TextItemType> <b290>
 *
 * @see https://ns.editeur.org/onix/en/42
 */
class CodeList42 extends CodeList implements CodeListInterface
{
	/**
	 * Code List 42 for en
	 *
	 * @var array
	 * @see https://ns.editeur.org/onix/en/42
	 */
	protected static $en = [
		'01' => 'Textual work',
		'02' => 'Front matter',
		'03' => 'Body matter',
		'04' => 'Back matter',
	];

	/**
	 * Code List 42 for es
	 *
	 * @var array
	 * @see https://ns.editeur.org/onix/es/42
	 */
	protected static $es = [
		'01' => 'Obra textual',
		'02' => 'Preliminares',
		'03' => 'Cuerpo del texto',
		'04' => 'Finales del libro',
	];

	/**
	 * Code List 42 for de
	 *
	 * @var array
	 * @see https://ns.editeur.org/onix/de/42
	 */
	protected static $de = [
		'01' => 'Textual work',
		'02' => 'Front matter',
		'03' => 'Body matter',
		'04' => 'Back matter',
	];

	/**
	 * Code List 42 for fr
	 *
	 * @var array
	 * @see https://ns.editeur.org/onix/fr/42
	 */
	protected static $fr = [
		'01' => 'Œuvre textuelle',
		'02' => 'Pages de début',
		'03' => 'Corps de texte',
		'04' => 'Hors-texte',
	];

	/**
	 * Code List 42 for it
	 *
	 * @var array
	 * @see https://ns.editeur.org/onix/it/42
	 */
	protected static $it = [
		'01' => 'Opera testuale',
		'02' => 'Testo preliminare',
		'03' => 'Corpo del testo',
		'04' => 'Testo conclusivo',
	];

	/**
	 * Code List 42 for nb
	 *
	 * @var array
	 * @see https://ns.editeur.org/onix/nb/42
	 */
	protected static $nb = [
		'01' => 'Textual work',
		'02' => 'Front matter',
		'03' => 'Body matter',
		'04' => 'Back matter',
	];

	/**
	 * Code List 42 for tr
	 *
	 * @var array
	 * @see https://ns.editeur.org/onix/tr/42
	 */
	protected static $tr = [
		'01' => 'Metin eser',
		'02' => 'Ön bölüm',
		'03' => 'Gövde',
		'04' => 'Arka bölüm',
	];
}
