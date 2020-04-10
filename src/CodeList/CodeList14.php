<?php

namespace Ribal\Onix\CodeList;

/**
 * ONIX Code List 14
 *
 * Used with    • <TextCaseFlag> <b027>    • @textcase
 *
 * @see https://ns.editeur.org/onix/en/14
 */
class CodeList14 extends CodeList implements CodeListInterface
{
	/**
	 * Code List 14 for en
	 *
	 * @var array
	 * @see https://ns.editeur.org/onix/en/14
	 */
	protected static $en = [
		'00' => 'Undefined',
		'01' => 'Sentence case',
		'02' => 'Title case',
		'03' => 'All capitals',
	];

	/**
	 * Code List 14 for es
	 *
	 * @var array
	 * @see https://ns.editeur.org/onix/es/14
	 */
	protected static $es = [
		'00' => 'No definido',
		'01' => 'Mayúsculas al inicio de la frase',
		'02' => 'Iniciales mayúsculas',
		'03' => 'Todo en mayúsculas',
	];

	/**
	 * Code List 14 for de
	 *
	 * @var array
	 * @see https://ns.editeur.org/onix/de/14
	 */
	protected static $de = [
		'00' => 'Undefined',
		'01' => 'Sentence case',
		'02' => 'Title case',
		'03' => 'All capitals',
	];

	/**
	 * Code List 14 for fr
	 *
	 * @var array
	 * @see https://ns.editeur.org/onix/fr/14
	 */
	protected static $fr = [
		'00' => 'Non défini',
		'01' => 'Casse de phrase',
		'02' => 'Casse de titre',
		'03' => 'Lettres majuscules uniquement',
	];

	/**
	 * Code List 14 for it
	 *
	 * @var array
	 * @see https://ns.editeur.org/onix/it/14
	 */
	protected static $it = [
		'00' => 'Non definito',
		'01' => 'Maiuscole a inizio frase',
		'02' => 'Iniziali maiuscole',
		'03' => 'Tutte maiuscole',
	];

	/**
	 * Code List 14 for nb
	 *
	 * @var array
	 * @see https://ns.editeur.org/onix/nb/14
	 */
	protected static $nb = [
		'00' => 'Undefined',
		'01' => 'Sentence case',
		'02' => 'Title case',
		'03' => 'All capitals',
	];

	/**
	 * Code List 14 for tr
	 *
	 * @var array
	 * @see https://ns.editeur.org/onix/tr/14
	 */
	protected static $tr = [
		'00' => 'Belirtilmemiş',
		'01' => 'Cümle düzeni',
		'02' => 'Baş harfler büyük',
		'03' => 'Tümü büyük harf',
	];
}
