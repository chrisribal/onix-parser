<?php

namespace Ribal\Onix\CodeList;

/**
 * ONIX Code List 204
 *
 * Used with <ReturnsCode> <j269>
 *
 * @see https://ns.editeur.org/onix/en/204
 */
class CodeList204 extends CodeList implements CodeListInterface
{
	/**
	 * Code List 204 for en
	 *
	 * @var array
	 * @see https://ns.editeur.org/onix/en/204
	 */
	protected static $en = [
		'00' => 'Unspecified',
		'01' => 'Consignment',
		'02' => 'Firm sale',
		'03' => 'Sale or return',
		'04' => 'Direct fulfillment',
		'05' => 'Sale or return of saleable copies',
		'06' => 'Sale or return of stripped covers',
		'07' => 'Sale or certified destruction',
	];

	/**
	 * Code List 204 for es
	 *
	 * @var array
	 * @see https://ns.editeur.org/onix/es/204
	 */
	protected static $es = [
		'00' => 'Sin especificar',
		'01' => 'Depósito',
		'02' => 'Venta en firme',
		'03' => 'Venta con devolución',
		'04' => 'Entrega directa',
		'05' => 'Venta con devolución de ejemplares vendibles',
		'06' => 'Venta con devolución de cubiertas arrancadas',
		'07' => 'Venta con devolución de pruebas de destrucción',
	];

	/**
	 * Code List 204 for de
	 *
	 * @var array
	 * @see https://ns.editeur.org/onix/de/204
	 */
	protected static $de = [
		'00' => 'Unspecified',
		'01' => 'Consignment',
		'02' => 'Firm sale',
		'03' => 'Sale or return',
		'04' => 'Direct fulfillment',
		'05' => 'Sale or return of saleable copies',
		'06' => 'Sale or return of stripped covers',
		'07' => 'Sale or certified destruction',
	];

	/**
	 * Code List 204 for fr
	 *
	 * @var array
	 * @see https://ns.editeur.org/onix/fr/204
	 */
	protected static $fr = [
		'00' => 'Non spécifié',
		'01' => 'Consignation',
		'02' => 'Vente ferme',
		'03' => 'Vente ou retour',
		'04' => 'Opération directe',
		'05' => 'Vente ou retour d’exemplaires commercialisables',
		'06' => 'Vente ou retour de couvertures arrachées',
		'07' => 'Vente ou preuve de destruction',
	];

	/**
	 * Code List 204 for it
	 *
	 * @var array
	 * @see https://ns.editeur.org/onix/it/204
	 */
	protected static $it = [
		'00' => 'Non specificate',
		'01' => 'Conto deposito',
		'02' => 'Conto assoluto',
		'03' => 'Conto vendita',
		'04' => 'Evasione diretta',
		'05' => 'Conto vendita-Reso delle copie vendibili',
		'06' => 'Conto vendita-Reso delle copertine strappate',
		'07' => 'Conto vendita-Reso con distruzione certificata',
	];

	/**
	 * Code List 204 for nb
	 *
	 * @var array
	 * @see https://ns.editeur.org/onix/nb/204
	 */
	protected static $nb = [
		'00' => 'Unspecified',
		'01' => 'Consignment',
		'02' => 'Firm sale',
		'03' => 'Sale or return',
		'04' => 'Direct fulfillment',
		'05' => 'Sale or return of saleable copies',
		'06' => 'Sale or return of stripped covers',
		'07' => 'Sale or certified destruction',
	];

	/**
	 * Code List 204 for tr
	 *
	 * @var array
	 * @see https://ns.editeur.org/onix/tr/204
	 */
	protected static $tr = [
		'00' => 'Tanımlanmamış',
		'01' => 'Konsinye',
		'02' => 'Kesin satış',
		'03' => 'İadeli satış',
		'04' => 'Doğrudan tedarik',
		'05' => 'Sale or return of saleable copies',
		'06' => 'Sale or return of stripped covers',
		'07' => 'Sale or certified destruction',
	];
}
