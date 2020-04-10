<?php

namespace Ribal\Onix\CodeList;

/**
 * ONIX Code List 226
 *
 * Used with <RecordStatus> <a498>
 *
 * @see https://ns.editeur.org/onix/en/226
 */
class CodeList226 extends CodeList implements CodeListInterface
{
	/**
	 * Code List 226 for en
	 *
	 * @var array
	 * @see https://ns.editeur.org/onix/en/226
	 */
	protected static $en = [
		'00' => 'No record errors',
		'01' => 'No record errors – errors in collateral',
		'02' => 'Record with errors',
		'03' => 'Record rejected',
		'09' => 'Reported previously',
	];

	/**
	 * Code List 226 for es
	 *
	 * @var array
	 * @see https://ns.editeur.org/onix/es/226
	 */
	protected static $es = [
		'00' => 'No record errors',
		'01' => 'No record errors – errors in collateral',
		'02' => 'Record with errors',
		'03' => 'Record rejected',
		'09' => 'Reported previously',
	];

	/**
	 * Code List 226 for de
	 *
	 * @var array
	 * @see https://ns.editeur.org/onix/de/226
	 */
	protected static $de = [
		'00' => 'No record errors',
		'01' => 'No record errors – errors in collateral',
		'02' => 'Record with errors',
		'03' => 'Record rejected',
		'09' => 'Reported previously',
	];

	/**
	 * Code List 226 for fr
	 *
	 * @var array
	 * @see https://ns.editeur.org/onix/fr/226
	 */
	protected static $fr = [
		'00' => 'Pas d’erreurs dans l’enregistrement',
		'01' => 'Pas d’erreur dans l’enregistrement, mais erreurs dans les éléments associés',
		'02' => 'Enregistrement avec erreurs',
		'03' => 'Enregistrement rejeté',
		'09' => 'Signalé précédemment',
	];

	/**
	 * Code List 226 for it
	 *
	 * @var array
	 * @see https://ns.editeur.org/onix/it/226
	 */
	protected static $it = [
		'00' => 'Nessun errore nel record',
		'01' => 'Nessun errore nel record – errori nei dati complementari',
		'02' => 'Record con errori',
		'03' => 'Record respinto',
		'09' => 'Segnalato in precedenza',
	];

	/**
	 * Code List 226 for nb
	 *
	 * @var array
	 * @see https://ns.editeur.org/onix/nb/226
	 */
	protected static $nb = [
		'00' => 'No record errors',
		'01' => 'No record errors – errors in collateral',
		'02' => 'Record with errors',
		'03' => 'Record rejected',
		'09' => 'Reported previously',
	];

	/**
	 * Code List 226 for tr
	 *
	 * @var array
	 * @see https://ns.editeur.org/onix/tr/226
	 */
	protected static $tr = [
		'00' => 'No record errors',
		'01' => 'No record errors – errors in collateral',
		'02' => 'Record with errors',
		'03' => 'Record rejected',
		'09' => 'Reported previously',
	];
}
