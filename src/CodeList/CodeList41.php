<?php

namespace Ribal\Onix\CodeList;

/**
 * ONIX Code List 41
 *
 * Used with <PrizeCode> <g129>
 *
 * @see https://ns.editeur.org/onix/en/41
 */
class CodeList41 extends CodeList implements CodeListInterface
{
	/**
	 * Code List 41 for en
	 *
	 * @var array
	 * @see https://ns.editeur.org/onix/en/41
	 */
	protected static $en = [
		'01' => 'Winner',
		'02' => 'Runner-up',
		'03' => 'Commended',
		'04' => 'Short-listed',
		'05' => 'Long-listed',
		'06' => 'Joint winner',
		'07' => 'Nominated',
	];

	/**
	 * Code List 41 for es
	 *
	 * @var array
	 * @see https://ns.editeur.org/onix/es/41
	 */
	protected static $es = [
		'01' => 'Ganador',
		'02' => 'Segundo clasificado',
		'03' => 'Mencionado',
		'04' => 'Finalista',
		'05' => 'Seleccionado',
		'06' => 'Ganador ex aequo',
		'07' => 'Nominado',
	];

	/**
	 * Code List 41 for de
	 *
	 * @var array
	 * @see https://ns.editeur.org/onix/de/41
	 */
	protected static $de = [
		'01' => 'Winner',
		'02' => 'Runner-up',
		'03' => 'Commended',
		'04' => 'Short-listed',
		'05' => 'Long-listed',
		'06' => 'Joint winner',
		'07' => 'Nominated',
	];

	/**
	 * Code List 41 for fr
	 *
	 * @var array
	 * @see https://ns.editeur.org/onix/fr/41
	 */
	protected static $fr = [
		'01' => 'Lauréat',
		'02' => 'Deuxième',
		'03' => 'Mention spéciale',
		'04' => 'Short-listé',
		'05' => 'Long-listé',
		'06' => 'Lauréat ex-æquo',
		'07' => 'Nominé',
	];

	/**
	 * Code List 41 for it
	 *
	 * @var array
	 * @see https://ns.editeur.org/onix/it/41
	 */
	protected static $it = [
		'01' => 'Vincitore',
		'02' => 'Secondo classificato',
		'03' => 'Segnalato',
		'04' => 'Finalista',
		'05' => 'Selezionato',
		'06' => 'Co-vincitore',
		'07' => 'Nominato',
	];

	/**
	 * Code List 41 for nb
	 *
	 * @var array
	 * @see https://ns.editeur.org/onix/nb/41
	 */
	protected static $nb = [
		'01' => 'Winner',
		'02' => 'Runner-up',
		'03' => 'Commended',
		'04' => 'Short-listed',
		'05' => 'Long-listed',
		'06' => 'Joint winner',
		'07' => 'Nominated',
	];

	/**
	 * Code List 41 for tr
	 *
	 * @var array
	 * @see https://ns.editeur.org/onix/tr/41
	 */
	protected static $tr = [
		'01' => 'Kazanan',
		'02' => 'İkinci',
		'03' => 'Övgüye değer',
		'04' => 'Kısa listede',
		'05' => 'Uzun listede',
		'06' => 'Ortak kazanan',
		'07' => 'Aday',
	];
}
