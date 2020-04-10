<?php

namespace Ribal\Onix\CodeList;

/**
 * ONIX Code List 61
 *
 * Used with <PriceStatus> <j266>
 *
 * @see https://ns.editeur.org/onix/en/61
 */
class CodeList61 extends CodeList implements CodeListInterface
{
	/**
	 * Code List 61 for en
	 *
	 * @var array
	 * @see https://ns.editeur.org/onix/en/61
	 */
	protected static $en = ['00' => 'Unspecified', '01' => 'Provisional', '02' => 'Firm'];

	/**
	 * Code List 61 for es
	 *
	 * @var array
	 * @see https://ns.editeur.org/onix/es/61
	 */
	protected static $es = [
		'00' => 'No especificado',
		'01' => 'Provisional',
		'02' => 'Firme',
	];

	/**
	 * Code List 61 for de
	 *
	 * @var array
	 * @see https://ns.editeur.org/onix/de/61
	 */
	protected static $de = ['00' => 'Unspecified', '01' => 'Provisional', '02' => 'Firm'];

	/**
	 * Code List 61 for fr
	 *
	 * @var array
	 * @see https://ns.editeur.org/onix/fr/61
	 */
	protected static $fr = ['00' => 'Non spécifié', '01' => 'Provisoire', '02' => 'Ferme'];

	/**
	 * Code List 61 for it
	 *
	 * @var array
	 * @see https://ns.editeur.org/onix/it/61
	 */
	protected static $it = [
		'00' => 'Non specificato',
		'01' => 'Provvisorio',
		'02' => 'Definitivo',
	];

	/**
	 * Code List 61 for nb
	 *
	 * @var array
	 * @see https://ns.editeur.org/onix/nb/61
	 */
	protected static $nb = ['00' => 'Uspesifisert', '01' => 'Foreløpig', '02' => 'Fast'];

	/**
	 * Code List 61 for tr
	 *
	 * @var array
	 * @see https://ns.editeur.org/onix/tr/61
	 */
	protected static $tr = ['00' => 'Belirtilmemiş', '01' => 'Geçici', '02' => 'Kesin'];
}
