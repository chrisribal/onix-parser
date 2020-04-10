<?php

namespace Ribal\Onix\CodeList;

/**
 * ONIX Code List 102
 *
 * Used with <SalesOutletIDType> <b393>
 *
 * @see https://ns.editeur.org/onix/en/102
 */
class CodeList102 extends CodeList implements CodeListInterface
{
	/**
	 * Code List 102 for en
	 *
	 * @var array
	 * @see https://ns.editeur.org/onix/en/102
	 */
	protected static $en = [
		'01' => 'Proprietary',
		'03' => 'ONIX retail sales outlet ID code',
		'04' => 'Retail sales outlet GLN',
		'05' => 'Retail sales outlet SAN',
	];

	/**
	 * Code List 102 for es
	 *
	 * @var array
	 * @see https://ns.editeur.org/onix/es/102
	 */
	protected static $es = [
		'01' => 'Propio / Privado',
		'03' => 'Código de identificación ONIX del punto de venta a usuarios finales',
		'04' => 'Identificador GLN del punto de venta',
		'05' => 'Identificador SAN del punto de venta',
	];

	/**
	 * Code List 102 for de
	 *
	 * @var array
	 * @see https://ns.editeur.org/onix/de/102
	 */
	protected static $de = [
		'01' => 'Proprietary',
		'03' => 'ONIX retail sales outlet ID code',
		'04' => 'Retail sales outlet GLN',
		'05' => 'Retail sales outlet SAN',
	];

	/**
	 * Code List 102 for fr
	 *
	 * @var array
	 * @see https://ns.editeur.org/onix/fr/102
	 */
	protected static $fr = [
		'01' => 'Propriétaire',
		'03' => 'Code ID point de vente au détail ONIX',
		'04' => 'GLN du point de vente au détail',
		'05' => 'SAN du point de vente au détail',
	];

	/**
	 * Code List 102 for it
	 *
	 * @var array
	 * @see https://ns.editeur.org/onix/it/102
	 */
	protected static $it = [
		'01' => 'Proprietario',
		'03' => 'Codice identificativo ONIX del punto vendita al dettaglio',
		'04' => 'GLN del punto vendita al dettaglio',
		'05' => 'SAN del punto vendita al dettaglio',
	];

	/**
	 * Code List 102 for nb
	 *
	 * @var array
	 * @see https://ns.editeur.org/onix/nb/102
	 */
	protected static $nb = [
		'01' => 'Proprietær',
		'03' => 'ONIX retail sales outlet ID code',
		'04' => 'GLN for forhandler/utsalgssted',
		'05' => 'SAN for forhandler/utsalgssted',
	];

	/**
	 * Code List 102 for tr
	 *
	 * @var array
	 * @see https://ns.editeur.org/onix/tr/102
	 */
	protected static $tr = [
		'01' => 'Özel',
		'03' => 'ONIX perakende satış noktası kimliği kodu',
		'04' => 'Retail sales outlet GLN',
		'05' => 'Retail sales outlet SAN',
	];
}
