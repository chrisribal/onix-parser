<?php

namespace Ribal\Onix\CodeList;

/**
 * ONIX Code List 149
 *
 * Used with <TitleElementLevel> <x409>
 *
 * @see https://ns.editeur.org/onix/en/149
 */
class CodeList149 extends CodeList implements CodeListInterface
{
	/**
	 * Code List 149 for en
	 *
	 * @var array
	 * @see https://ns.editeur.org/onix/en/149
	 */
	protected static $en = [
		'01' => 'Product',
		'02' => 'Collection level',
		'03' => 'Subcollection',
		'04' => 'Content item',
		'05' => 'Master brand',
		'06' => 'Sub-subcollection',
	];

	/**
	 * Code List 149 for es
	 *
	 * @var array
	 * @see https://ns.editeur.org/onix/es/149
	 */
	protected static $es = [
		'01' => 'Producto',
		'02' => 'Nivel del conjunto',
		'03' => 'Subnivel',
		'04' => 'Elemento de contenido',
		'05' => 'Marca global («Master brand»)',
		'06' => 'Sub-subcolección',
	];

	/**
	 * Code List 149 for de
	 *
	 * @var array
	 * @see https://ns.editeur.org/onix/de/149
	 */
	protected static $de = [
		'01' => 'Product',
		'02' => 'Collection level',
		'03' => 'Subcollection',
		'04' => 'Content item',
		'05' => 'Master brand',
		'06' => 'Sub-subcollection',
	];

	/**
	 * Code List 149 for fr
	 *
	 * @var array
	 * @see https://ns.editeur.org/onix/fr/149
	 */
	protected static $fr = [
		'01' => 'Produit',
		'02' => 'Niveau collection',
		'03' => 'Sous-collection',
		'04' => 'Elément contenu',
		'05' => 'Marque principale',
		'06' => 'Sous-sous-collection',
	];

	/**
	 * Code List 149 for it
	 *
	 * @var array
	 * @see https://ns.editeur.org/onix/it/149
	 */
	protected static $it = [
		'01' => 'Prodotto',
		'02' => 'Collezione',
		'03' => 'Sottocollezione',
		'04' => 'Contenuto',
		'05' => 'Brand principale',
		'06' => 'Sotto-sottocollezione',
	];

	/**
	 * Code List 149 for nb
	 *
	 * @var array
	 * @see https://ns.editeur.org/onix/nb/149
	 */
	protected static $nb = [
		'01' => 'Produkt',
		'02' => 'Samlingsnivå (øverste nivå)',
		'03' => 'Samlingsnivå (underordnet nivå)',
		'04' => 'Innholdselement',
		'05' => 'Merkevarenavn',
		'06' => 'Samlingsnivå (tredje nivå)',
	];

	/**
	 * Code List 149 for tr
	 *
	 * @var array
	 * @see https://ns.editeur.org/onix/tr/149
	 */
	protected static $tr = [
		'01' => 'Ürün',
		'02' => 'Koleksiyon düzeyi',
		'03' => 'Alt koleksiyon',
		'04' => 'İçerik ögesi',
		'05' => 'Ana marka',
		'06' => 'Alt-alt koleksiyon',
	];
}
