<?php

namespace Ribal\Onix\CodeList;

/**
 * ONIX Code List 2
 *
 * Used with <ProductComposition> <x314>
 *
 * @see https://ns.editeur.org/onix/en/2
 */
class CodeList2 extends CodeList implements CodeListInterface
{
	/**
	 * Code List 2 for en
	 *
	 * @var array
	 * @see https://ns.editeur.org/onix/en/2
	 */
	protected static $en = [
		'00' => 'Single-component retail product',
		'10' => 'Multiple-component retail product',
		'11' => 'Multiple-item collection, retailed as separate parts',
		'20' => 'Trade-only product',
		'30' => 'Multiple-item trade-only pack',
		'31' => 'Multiple-item pack',
	];

	/**
	 * Code List 2 for es
	 *
	 * @var array
	 * @see https://ns.editeur.org/onix/es/2
	 */
	protected static $es = [
		'00' => 'Producto a la venta formado por un único componente',
		'10' => 'Producto a la venta formado por varios componentes',
		'11' => 'Conjunto de múltiples elementos que se venden por separado',
		'20' => 'Producto solo para los agentes de la cadena',
		'30' => 'Paquete con múltiples elementos, solo para la cadena comercial',
		'31' => 'Paquete con múltiples elementos',
	];

	/**
	 * Code List 2 for de
	 *
	 * @var array
	 * @see https://ns.editeur.org/onix/de/2
	 */
	protected static $de = [
		'00' => 'Einteiliges Produkt',
		'10' => 'Mehrteiliges Produkt',
		'11' => 'Multiple-item collection, retailed as separate parts',
		'20' => 'Trade-only product',
		'30' => 'Multiple-item trade-only pack',
		'31' => 'Multiple-item pack',
	];

	/**
	 * Code List 2 for fr
	 *
	 * @var array
	 * @see https://ns.editeur.org/onix/fr/2
	 */
	protected static $fr = [
		'00' => 'Produit proposé à la vente en un seul article',
		'10' => 'Produit proposé à la vente en plusieurs articles',
		'11' => 'Ensemble de plusieurs articles, vendu sous forme de parties distinctes',
		'20' => 'Produit à utilisation commerciale uniquement',
		'30' => 'Pack strictement commercial à plusieurs éléments',
		'31' => 'Pack à plusieurs éléments',
	];

	/**
	 * Code List 2 for it
	 *
	 * @var array
	 * @see https://ns.editeur.org/onix/it/2
	 */
	protected static $it = [
		'00' => 'Prodotto singolo per la vendita al dettaglio',
		'10' => 'Prodotto composito per la vendita al dettaglio',
		'11' => 'Collezione composita, venduta in parti',
		'20' => 'Materiale per il punto vendita',
		'30' => 'Pacco composito solo per il punto vendita',
		'31' => 'Pacco composito',
	];

	/**
	 * Code List 2 for nb
	 *
	 * @var array
	 * @see https://ns.editeur.org/onix/nb/2
	 */
	protected static $nb = [
		'00' => 'Enkeltprodukt',
		'10' => 'Produkt bestående av flere enkeltprodukter',
		'11' => 'Produkt bestående av flere enkeltprodukter, solgt separat',
		'20' => 'Forhandlerprodukt',
		'30' => 'Forhandlerprodukt bestående av flere enkeltprodukter, selges separat',
		'31' => 'Forhandlerprodukt bestående av flere enkeltprodukter',
	];

	/**
	 * Code List 2 for tr
	 *
	 * @var array
	 * @see https://ns.editeur.org/onix/tr/2
	 */
	protected static $tr = [
		'00' => 'Tek bileşenli perakende ürünü',
		'10' => 'Çok bileşenli perakende ürünü',
		'11' => 'Çok bileşenli koleksiyon, ayrı kalemler olarak satılır',
		'20' => 'Sadece mağaza ürünü',
		'30' => 'Çok parçalı mağaza paketi',
		'31' => 'Çok parçalı paket',
	];
}
