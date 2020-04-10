<?php

namespace Ribal\Onix\CodeList;

/**
 * ONIX Code List 239
 *
 * Used with <SupplyContactRole> <x537>
 *
 * @see https://ns.editeur.org/onix/en/239
 */
class CodeList239 extends CodeList implements CodeListInterface
{
	/**
	 * Code List 239 for en
	 *
	 * @var array
	 * @see https://ns.editeur.org/onix/en/239
	 */
	protected static $en = [
		'07' => 'Return authorisation contact',
		'99' => 'Customer services contact',
	];

	/**
	 * Code List 239 for es
	 *
	 * @var array
	 * @see https://ns.editeur.org/onix/es/239
	 */
	protected static $es = [
		'07' => 'Contacto para autorización de devoluciones',
		'99' => 'Atención al usuario',
	];

	/**
	 * Code List 239 for de
	 *
	 * @var array
	 * @see https://ns.editeur.org/onix/de/239
	 */
	protected static $de = [
		'07' => 'Return authorisation contact',
		'99' => 'Customer services contact',
	];

	/**
	 * Code List 239 for fr
	 *
	 * @var array
	 * @see https://ns.editeur.org/onix/fr/239
	 */
	protected static $fr = [
		'07' => 'Contact pour l’autorisation de retour',
		'99' => 'Service clients',
	];

	/**
	 * Code List 239 for it
	 *
	 * @var array
	 * @see https://ns.editeur.org/onix/it/239
	 */
	protected static $it = [
		'07' => 'Contatto per l’autorizzazione al reso',
		'99' => 'Contatto per l’assistenza al cliente',
	];

	/**
	 * Code List 239 for nb
	 *
	 * @var array
	 * @see https://ns.editeur.org/onix/nb/239
	 */
	protected static $nb = [
		'07' => 'Return authorisation contact',
		'99' => 'Customer services contact',
	];

	/**
	 * Code List 239 for tr
	 *
	 * @var array
	 * @see https://ns.editeur.org/onix/tr/239
	 */
	protected static $tr = ['07' => 'İade izin sözleşmesi', '99' => 'Müşteri hizmetleri'];
}
