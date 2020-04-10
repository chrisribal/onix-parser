<?php

namespace Ribal\Onix\CodeList;

/**
 * ONIX Code List 141
 *
 * Used with <BarcodeType> <x312>
 *
 * @see https://ns.editeur.org/onix/en/141
 */
class CodeList141 extends CodeList implements CodeListInterface
{
	/**
	 * Code List 141 for en
	 *
	 * @var array
	 * @see https://ns.editeur.org/onix/en/141
	 */
	protected static $en = [
		'00' => 'Not barcoded',
		'01' => 'Barcoded, scheme unspecified',
		'02' => 'GTIN-13',
		'03' => 'GTIN-13+5 (US dollar price encoded)',
		'04' => 'GTIN-13+5 (CAN dollar price encoded)',
		'05' => 'GTIN-13+5 (no price encoded)',
		'06' => 'UPC-12 (item-specific)',
		'07' => 'UPC-12+5 (item-specific)',
		'08' => 'UPC-12 (price-point)',
		'09' => 'UPC-12+5 (price-point)',
	];

	/**
	 * Code List 141 for es
	 *
	 * @var array
	 * @see https://ns.editeur.org/onix/es/141
	 */
	protected static $es = [
		'00' => 'Sin código de barras',
		'01' => 'Con código de barras',
		'02' => 'GTIN-13',
		'03' => 'GTIN-13+5 (Precio en dólares EE.UU. codificado)',
		'04' => 'GTIN-13+5 (Precio en dólares de Canadá codificado)',
		'05' => 'GTIN-13+5 (Sin precio codificado)',
		'06' => 'UPC12 (item-specific)',
		'07' => 'UPC12+5 (item-specific)',
		'08' => 'UPC12 (price-point)',
		'09' => 'UPC12+5 (price-point)',
	];

	/**
	 * Code List 141 for de
	 *
	 * @var array
	 * @see https://ns.editeur.org/onix/de/141
	 */
	protected static $de = [
		'00' => 'Not barcoded',
		'01' => 'Barcoded, scheme unspecified',
		'02' => 'GTIN-13',
		'03' => 'GTIN-13+5 (US dollar price encoded)',
		'04' => 'GTIN-13+5 (CAN dollar price encoded)',
		'05' => 'GTIN-13+5 (no price encoded)',
		'06' => 'UPC-12 (item-specific)',
		'07' => 'UPC-12+5 (item-specific)',
		'08' => 'UPC-12 (price-point)',
		'09' => 'UPC-12+5 (price-point)',
	];

	/**
	 * Code List 141 for fr
	 *
	 * @var array
	 * @see https://ns.editeur.org/onix/fr/141
	 */
	protected static $fr = [
		'00' => 'Pas de code-barres',
		'01' => 'Code-barres, système non spécifié',
		'02' => 'GTIN-13',
		'03' => 'GTIN-13+5 (prix codé en dollars américains)',
		'04' => 'GTIN-13+5 (prix codé en dollars canadiens)',
		'05' => 'GTIN-13+5 (pas de prix codé)',
		'06' => 'UPC-12 (spécifique à l’article)',
		'07' => 'UPC-12+5 (spécifique à l’article)',
		'08' => 'UPC-12 (niveau de prix)',
		'09' => 'UPC-12+5 (niveau de prix)',
	];

	/**
	 * Code List 141 for it
	 *
	 * @var array
	 * @see https://ns.editeur.org/onix/it/141
	 */
	protected static $it = [
		'00' => 'Privo di codice a barre',
		'01' => 'Dotato di codice a barre, sistema di codifica non specificato',
		'02' => 'GTIN-13',
		'03' => 'GTIN-13+5 (prezzo in dollari americani codificato)',
		'04' => 'GTIN-13+5 (prezzo in dollari canadesi codificato)',
		'05' => 'GTIN-13+5 (prezzo non codificato)',
		'06' => 'UPC-12 (item-specific)',
		'07' => 'UPC-12+5 (item-specific)',
		'08' => 'UPC-12 (price-point)',
		'09' => 'UPC-12+5 (price-point)',
	];

	/**
	 * Code List 141 for nb
	 *
	 * @var array
	 * @see https://ns.editeur.org/onix/nb/141
	 */
	protected static $nb = [
		'00' => 'Not barcoded',
		'01' => 'Barcoded, scheme unspecified',
		'02' => 'GTIN-13',
		'03' => 'GTIN-13+5 (US dollar price encoded)',
		'04' => 'GTIN-13+5 (CAN dollar price encoded)',
		'05' => 'GTIN-13+5 (no price encoded)',
		'06' => 'UPC-12 (item-specific)',
		'07' => 'UPC-12+5 (item-specific)',
		'08' => 'UPC-12 (price-point)',
		'09' => 'UPC-12+5 (price-point)',
	];

	/**
	 * Code List 141 for tr
	 *
	 * @var array
	 * @see https://ns.editeur.org/onix/tr/141
	 */
	protected static $tr = [
		'00' => 'Barkodsuz',
		'01' => 'Barkodlu, plan belirtilmemiş',
		'02' => 'GTIN-13',
		'03' => 'GTIN -13+5 (ABD doları fiyat kodu)',
		'04' => 'GTIN -13+5 (CAN doları fiyat kodu)',
		'05' => 'GTIN -13+5 (fiyat kodu yok)',
		'06' => 'UPC-12 (ürüne özgü)',
		'07' => 'UPC-12+5 (ürüne özgü)',
		'08' => 'UPC-12 (fiyat noktası)',
		'09' => 'UPC-12 +5 (fiyat noktası)',
	];
}
