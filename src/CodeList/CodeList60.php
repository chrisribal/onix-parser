<?php

namespace Ribal\Onix\CodeList;

/**
 * ONIX Code List 60
 *
 * Used with <PricePer> <j239>
 *
 * @see https://ns.editeur.org/onix/en/60
 */
class CodeList60 extends CodeList implements CodeListInterface
{
	/**
	 * Code List 60 for en
	 *
	 * @var array
	 * @see https://ns.editeur.org/onix/en/60
	 */
	protected static $en = [
		'00' => 'Per copy of whole product',
		'01' => 'Per page for printed loose-leaf content only',
	];

	/**
	 * Code List 60 for es
	 *
	 * @var array
	 * @see https://ns.editeur.org/onix/es/60
	 */
	protected static $es = [
		'00' => 'Por cada ejemplar del producto completo',
		'01' => 'Por página; sólo para productos en hojas sueltas',
	];

	/**
	 * Code List 60 for de
	 *
	 * @var array
	 * @see https://ns.editeur.org/onix/de/60
	 */
	protected static $de = [
		'00' => 'Per copy of whole product',
		'01' => 'Per page for printed loose-leaf content only',
	];

	/**
	 * Code List 60 for fr
	 *
	 * @var array
	 * @see https://ns.editeur.org/onix/fr/60
	 */
	protected static $fr = [
		'00' => 'Par exemplaire du produit',
		'01' => 'Par page, pour les contenus imprimés en feuillets mobiles seulement',
	];

	/**
	 * Code List 60 for it
	 *
	 * @var array
	 * @see https://ns.editeur.org/onix/it/60
	 */
	protected static $it = [
		'00' => 'Per copia di prodotto intero',
		'01' => 'Per pagina – solo per prodotti a fogli mobili',
	];

	/**
	 * Code List 60 for nb
	 *
	 * @var array
	 * @see https://ns.editeur.org/onix/nb/60
	 */
	protected static $nb = [
		'00' => 'Per copy of whole product',
		'01' => 'Per page for printed loose-leaf content only',
	];

	/**
	 * Code List 60 for tr
	 *
	 * @var array
	 * @see https://ns.editeur.org/onix/tr/60
	 */
	protected static $tr = [
		'00' => 'Bütün ürünün beher nüshası',
		'01' => 'Sayfa başı, sadece basılı föy sayfası şeklindeki içerik için',
	];
}
