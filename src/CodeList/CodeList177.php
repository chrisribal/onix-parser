<?php

namespace Ribal\Onix\CodeList;

/**
 * ONIX Code List 177
 *
 * Used with    • <ContributorDateRole> <x417>    • <SubjectDateRole> <x534>
 *
 * @see https://ns.editeur.org/onix/en/177
 */
class CodeList177 extends CodeList implements CodeListInterface
{
	/**
	 * Code List 177 for en
	 *
	 * @var array
	 * @see https://ns.editeur.org/onix/en/177
	 */
	protected static $en = [
		'50' => 'Date of birth',
		'51' => 'Date of death',
		'56' => 'Flourished around',
	];

	/**
	 * Code List 177 for es
	 *
	 * @var array
	 * @see https://ns.editeur.org/onix/es/177
	 */
	protected static $es = [
		'50' => 'Fecha de nacimiento',
		'51' => 'Fecha de fallecimiento',
		'56' => 'Floreció durante',
	];

	/**
	 * Code List 177 for de
	 *
	 * @var array
	 * @see https://ns.editeur.org/onix/de/177
	 */
	protected static $de = [
		'50' => 'Date of birth',
		'51' => 'Date of death',
		'56' => 'Flourished around',
	];

	/**
	 * Code List 177 for fr
	 *
	 * @var array
	 * @see https://ns.editeur.org/onix/fr/177
	 */
	protected static $fr = [
		'50' => 'Date de naissance',
		'51' => 'Date de mort',
		'56' => 'A prospéré aux environ de',
	];

	/**
	 * Code List 177 for it
	 *
	 * @var array
	 * @see https://ns.editeur.org/onix/it/177
	 */
	protected static $it = [
		'50' => 'Data di nascita',
		'51' => 'Data di morte',
		'56' => 'Culmine attorno a',
	];

	/**
	 * Code List 177 for nb
	 *
	 * @var array
	 * @see https://ns.editeur.org/onix/nb/177
	 */
	protected static $nb = [
		'50' => 'Fødselsdato',
		'51' => 'Dødsdato',
		'56' => 'Viktigste periode',
	];

	/**
	 * Code List 177 for tr
	 *
	 * @var array
	 * @see https://ns.editeur.org/onix/tr/177
	 */
	protected static $tr = [
		'50' => 'Doğum tarihi',
		'51' => 'Ölüm tarihi',
		'56' => 'Parladığı dönem',
	];
}
