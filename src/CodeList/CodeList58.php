<?php

namespace Ribal\Onix\CodeList;

/**
 * ONIX Code List 58
 *
 * Used with    • <PriceType> <x462>    • <DefaultPriceType> <x310>
 *
 * @see https://ns.editeur.org/onix/en/58
 */
class CodeList58 extends CodeList implements CodeListInterface
{
	/**
	 * Code List 58 for en
	 *
	 * @var array
	 * @see https://ns.editeur.org/onix/en/58
	 */
	protected static $en = [
		'01' => 'RRP excluding tax',
		'02' => 'RRP including tax',
		'03' => 'FRP excluding tax',
		'04' => 'FRP including tax',
		'05' => 'Supplier’s Net price excluding tax',
		'06' => 'Supplier’s Net price excluding tax: rental goods',
		'07' => 'Supplier’s Net price including tax',
		'08' => 'Supplier’s alternative Net price excluding tax',
		'09' => 'Supplier’s alternative net price including tax',
		'11' => 'Special sale RRP excluding tax',
		'12' => 'Special sale RRP including tax',
		'13' => 'Special sale fixed retail price excluding tax',
		'14' => 'Special sale fixed retail price including tax',
		'15' => 'Supplier’s net price for special sale excluding tax',
		'17' => 'Supplier’s net price for special sale including tax',
		'21' => 'Pre-publication RRP excluding tax',
		'22' => 'Pre-publication RRP including tax',
		'23' => 'Pre-publication fixed retail price excluding tax',
		'24' => 'Pre-publication fixed retail price including tax',
		'25' => 'Supplier’s pre-publication net price excluding tax',
		'27' => 'Supplier’s pre-publication net price including tax',
		'31' => 'Freight-pass-through RRP excluding tax',
		'32' => 'Freight-pass-through billing price excluding tax',
		'33' => 'Importer’s Fixed retail price excluding tax',
		'34' => 'Importer’s Fixed retail price including tax',
		'41' => 'Publishers retail price excluding tax',
		'42' => 'Publishers retail price including tax',
	];

	/**
	 * Code List 58 for es
	 *
	 * @var array
	 * @see https://ns.editeur.org/onix/es/58
	 */
	protected static $es = [
		'01' => 'PVP recomendado sin impuestos',
		'02' => 'PVP recomendado con impuestos',
		'03' => 'PVP fijo sin impuestos',
		'04' => 'PVP fijo con impuestos',
		'05' => 'Precio neto del proveedor, sin impuestos',
		'06' => 'Precio neto del proveedor, sin impuestos; productos destinados al alquiler',
		'07' => 'Precio neto del proveedor, incluyendo impuestos',
		'08' => 'Precio neto alternativo del proveedor, sin impuestos',
		'09' => 'Precio neto alternativo del proveedor, incluyendo impuestos',
		'11' => 'PVP recomendado en ventas especiales, sin impuestos',
		'12' => 'PVP recomendado en ventas especiales, con impuestos',
		'13' => 'PVP fijo en ventas especiales, sin impuestos',
		'14' => 'PVP fijo en ventas especiales, con impuestos',
		'15' => 'Precio neto del proveedor para ventas especiales, sin impuestos',
		'17' => 'Precio neto del proveedor para ventas especiales, con impuestos',
		'21' => 'PVP de prepublicación recomendado sin impuestos',
		'22' => 'PVP de prepublicación recomendado con impuestos',
		'23' => 'PVP de prepublicación fijo sin impuestos',
		'24' => 'PVP de prepublicación fijo con impuestos',
		'25' => 'Precio neto de prepublicación del proveedor sin impuestos',
		'27' => 'Precio neto de prepublicación del proveedor con impuestos',
		'31' => '«Freight-pass-through RRP excluding tax»',
		'32' => '«Freight-pass-through billing price excluding tax»',
		'33' => 'Precio fijo del importador sin impuestos',
		'34' => 'Precio fijo del importador con impuestos',
		'41' => 'Precio de venta del editor, sin impuestos (Contrato de mandato, «Agency»)',
		'42' => 'Precio de venta del editor, incluyendo impuestos (Contrato de mandato, «Agency»)',
	];

	/**
	 * Code List 58 for de
	 *
	 * @var array
	 * @see https://ns.editeur.org/onix/de/58
	 */
	protected static $de = [
		'01' => 'RRP excluding tax',
		'02' => 'RRP including tax',
		'03' => 'FRP excluding tax',
		'04' => 'FRP including tax',
		'05' => 'Supplier’s Net price excluding tax',
		'06' => 'Supplier’s Net price excluding tax: rental goods',
		'07' => 'Supplier’s Net price including tax',
		'08' => 'Supplier’s alternative Net price excluding tax',
		'09' => 'Supplier’s alternative net price including tax',
		'11' => 'Special sale RRP excluding tax',
		'12' => 'Special sale RRP including tax',
		'13' => 'Special sale fixed retail price excluding tax',
		'14' => 'Special sale fixed retail price including tax',
		'15' => 'Supplier’s net price for special sale excluding tax',
		'17' => 'Supplier’s net price for special sale including tax',
		'21' => 'Pre-publication RRP excluding tax',
		'22' => 'Pre-publication RRP including tax',
		'23' => 'Pre-publication fixed retail price excluding tax',
		'24' => 'Pre-publication fixed retail price including tax',
		'25' => 'Supplier’s pre-publication net price excluding tax',
		'27' => 'Supplier’s pre-publication net price including tax',
		'31' => 'Freight-pass-through RRP excluding tax',
		'32' => 'Freight-pass-through billing price excluding tax',
		'33' => 'Importer’s Fixed retail price excluding tax',
		'34' => 'Importer’s Fixed retail price including tax',
		'41' => 'Publishers retail price excluding tax',
		'42' => 'Publishers retail price including tax',
	];

	/**
	 * Code List 58 for fr
	 *
	 * @var array
	 * @see https://ns.editeur.org/onix/fr/58
	 */
	protected static $fr = [
		'01' => 'PPC hors taxes',
		'02' => 'PPC taxes incluses',
		'03' => 'Prix de vente imposé hors taxes',
		'04' => 'Prix de vente imposé taxes incluses',
		'05' => 'Prix net du distributeur hors taxes',
		'06' => 'Prix net du distributeur hors taxes : biens destinés à la location',
		'07' => 'Prix net du distributeur taxes incluses',
		'08' => 'Autre prix net du distributeur hors taxes',
		'09' => 'Autre prix net du distributeur taxes incluses',
		'11' => 'PPC hors taxes pour ventes spéciales',
		'12' => 'PPC taxes incluses pour ventes spéciales',
		'13' => 'Prix de vente imposé hors taxes pour vente spéciale',
		'14' => 'Prix de vente imposé taxes incluses pour vente spéciale',
		'15' => 'Prix net du distributeur hors taxes pour ventes spéciales',
		'17' => 'Prix net du distributeur taxes incluses pour ventes spéciales',
		'21' => 'PPC prépublication hors taxes',
		'22' => 'PPC prépublication taxes incluses',
		'23' => 'Prix de vente imposé prépublication hors taxes',
		'24' => 'Prix de vente imposé prépublication taxes incluses',
		'25' => 'Prix net prépublication du distributeur hors taxes',
		'27' => 'Prix net prépublication du distributeur taxes incluses',
		'31' => 'PPC « freight-pass-through » hors taxes',
		'32' => 'Prix de facturation « freight-pass-through » hors taxes',
		'33' => 'Prix de vente imposé hors taxes de l’importateur',
		'34' => 'Prix de vente imposé taxes incluses de l’importateur',
		'41' => 'Prix de vente éditeur hors taxes',
		'42' => 'Prix de vente éditeur taxes incluses',
	];

	/**
	 * Code List 58 for it
	 *
	 * @var array
	 * @see https://ns.editeur.org/onix/it/58
	 */
	protected static $it = [
		'01' => 'Prezzo consigliato al pubblico, tasse escluse',
		'02' => 'Prezzo consigliato al pubblico, tasse incluse',
		'03' => 'Prezzo fisso al pubblico, tasse escluse',
		'04' => 'Prezzo fisso al pubblico, tasse incluse',
		'05' => 'Prezzo netto del fornitore, tasse escluse',
		'06' => 'Prezzo netto del fornitore, tasse escluse, prodotti destinati al noleggio',
		'07' => 'Prezzo netto del fornitore, tasse incluse',
		'08' => 'Prezzo netto alternativo del fornitore, tasse escluse',
		'09' => 'Prezzo netto alternativo del fornitore, tasse incluse',
		'11' => 'Prezzo speciale al pubblico, tasse escluse',
		'12' => 'Prezzo speciale al pubblico, tasse incluse',
		'13' => 'Prezzo speciale fisso al pubblico, tasse escluse',
		'14' => 'Prezzo speciale fisso al pubblico, tasse incluse',
		'15' => 'Prezzo netto del fornitore per vendite speciali, tasse escluse',
		'17' => 'Prezzo netto del fornitore per vendite speciali, tasse incluse',
		'21' => 'Prezzo consigliato al pubblico ante-pubblicazione, tasse escluse',
		'22' => 'Prezzo consigliato al pubblico ante-pubblicazione, tasse incluse',
		'23' => 'Prezzo fisso al pubblico ante-pubblicazione, tasse escluse',
		'24' => 'Prezzo fisso al pubblico ante-pubblicazione, tasse incluse',
		'25' => 'Prezzo ante-pubblicazione del fornitore, tasse escluse',
		'27' => 'Prezzo ante-pubblicazione del fornitore, tasse incluse',
		'31' => 'Prezzo al pubblico, Freight-pass-through, tasse escluse',
		'32' => 'Prezzo al rivenditore, Freight-pass-through, tasse escluse',
		'33' => 'Prezzo fisso al pubblico dell’importatore, tasse escluse',
		'34' => 'Prezzo fisso al pubblico dell’importatore, tasse incluse',
		'41' => 'Prezzo di vendita dell’editore, tasse escluse',
		'42' => 'Prezzo di vendita dell’editore, tasse incluse',
	];

	/**
	 * Code List 58 for nb
	 *
	 * @var array
	 * @see https://ns.editeur.org/onix/nb/58
	 */
	protected static $nb = [
		'01' => 'Veiledende utsalgsspris uten mva.',
		'02' => 'Veiledende utsalgsspris inklusiv mva.',
		'03' => 'Fastpris uten mva.',
		'04' => 'Fastpris inklusiv mva.',
		'05' => 'Distributørs enhetspris uten mva.: produkter for salg',
		'06' => 'Distributørs enhetspris uten mva.: produkter for utleie',
		'07' => 'Distributørs enhetspris med mva.',
		'08' => 'Distributørs alternative enhetspris uten mva.',
		'09' => 'Distributørs alternative enhetspris med mva.',
		'11' => 'Foreslått spesialpris uten mva.',
		'12' => 'Foreslått spesialpris inklusiv mva.',
		'13' => 'Fast spesialpris uten mva.',
		'14' => 'Fast spesialpris inklusiv mva.',
		'15' => 'Distributørs spesialpris per enhet uten mva.',
		'17' => 'Distributørs spesielle enhetspris inkl. mva.',
		'21' => 'Foreløpig foreslått utsalgsspris uten mva.',
		'22' => 'Foreløpig foreslått utsalgsspris inklusiv mva.',
		'23' => 'Foreløpig foreslått fastpris uten mva.',
		'24' => 'Foreløpig foreslått fastpris inklusiv mva.',
		'25' => 'Distributørs foreløpige enhetspris uten mva.',
		'27' => 'Distributørs foreløpige enhetspris inkl. mva.',
		'31' => 'Freight-pass-through RRP excluding tax',
		'32' => 'Freight-pass-through billing price excluding tax',
		'33' => 'Importørens foreløpig foreslåtte fastpris eks. mva.',
		'34' => 'Importørens foreløpige enhetspris inkl. mva.',
		'41' => 'Utgivers/vareeiers utsalgspris eks. mva.',
		'42' => 'Utgivers/vareeiers utsalgspris inkl. mva.',
	];

	/**
	 * Code List 58 for tr
	 *
	 * @var array
	 * @see https://ns.editeur.org/onix/tr/58
	 */
	protected static $tr = [
		'01' => 'TEPF vergi hariç',
		'02' => 'TEPF vergi dahil',
		'03' => 'Sabit perakende fiyatı, vergi hariç',
		'04' => 'Sabit perakende fiyatı, vergi dahil',
		'05' => 'Tedarikçi net fiyatı, vergi hariç',
		'06' => 'Tedarikçi net fiyatı, vergi hariç: Kiralık ürünler',
		'07' => 'Tedarikçi net fiyatı, vergi dahil',
		'08' => 'Tedarikçi alternatif net fiyatı, vergi hariç',
		'09' => 'Tedarikçi alternatif net fiyatı, vergi dahil',
		'11' => 'Özel satış TEPF, vergi hariç',
		'12' => 'Özel satış TEPF, vergi dahil',
		'13' => 'Özel satış sabit perakende fiyatı, vergi hariç',
		'14' => 'Özel satış sabit perakende fiyatı, vergi dahil',
		'15' => 'Özel satış tedarikçi net fiyatı, vergi hariç',
		'17' => 'Özel satış tedarikçi net fiyatı, vergi dahil',
		'21' => 'Ön sipariş TEPF, vergi hariç',
		'22' => 'Ön sipariş TEPF, vergi dahil',
		'23' => 'Ön sipariş sabit perakende fiyatı, vergi hariç',
		'24' => 'Ön sipariş sabit perakende fiyatı, vergi dahil',
		'25' => 'Tedarikçi ön sipariş net fiyatı, vergi hariç',
		'27' => 'Tedarikçi ön sipariş net fiyatı, vergi dahil',
		'31' => 'Nakliyesiz TEPF, vergi hariç',
		'32' => 'Nakliyesiz fatura fiyatı, vergi hariç',
		'33' => 'İthalatçının Vergi hariç sabit perakende fiyatı',
		'34' => 'İthalatçının Vergi dahil sabit perakende fiyatı',
		'41' => 'Yayımcının perakende fiyatı, vergi hariç',
		'42' => 'Yayımcının perakende fiyatı, vergi dahil',
	];
}
