<?php

namespace Ribal\Onix\CodeList;

/**
 * ONIX Code List 59
 *
 * Used with <PriceQualifier> <j261>
 *
 * @see https://ns.editeur.org/onix/en/59
 */
class CodeList59 extends CodeList implements CodeListInterface
{
	/**
	 * Code List 59 for en
	 *
	 * @var array
	 * @see https://ns.editeur.org/onix/en/59
	 */
	protected static $en = [
		'00' => 'Unqualified price',
		'01' => 'Member/subscriber price',
		'02' => 'Export price',
		'03' => 'Reduced price applicable when the item is purchased as part of a set (or series, or collection)',
		'04' => 'Voucher price',
		'05' => 'Consumer price',
		'06' => 'Corporate / Library / Education price',
		'07' => 'Reservation order price',
		'08' => 'Promotional offer price',
		'09' => 'Linked price',
		'10' => 'Library price',
		'11' => 'Education price',
		'12' => 'Corporate price',
		'13' => 'Subscription service price',
		'14' => 'School library price',
		'15' => 'Academic library price',
		'16' => 'Public library price',
	];

	/**
	 * Code List 59 for es
	 *
	 * @var array
	 * @see https://ns.editeur.org/onix/es/59
	 */
	protected static $es = [
		'00' => 'Precio no calificado',
		'01' => 'Precio para socios o suscriptores',
		'02' => 'Precio de exportación',
		'03' => 'Precio reducido al comprar el producto como parte integrante de un conjunto (colección u obra en varios volúmenes)',
		'04' => 'Precio con bono de descuento',
		'05' => 'Precio para el consumidor',
		'06' => 'Precio para bibliotecas / educativo / instituciones',
		'07' => 'Precio para pedidos de reserva',
		'08' => 'Precio en oferta promocional',
		'09' => 'Precio vinculado o condicional',
		'10' => 'Precio para bibliotecas',
		'11' => 'Precio para entornos educativos',
		'12' => 'Precio corporativo',
		'13' => 'Precio para servicios de suscripción',
		'14' => 'Precio para biblioteca escolar',
		'15' => 'Precio para biblioteca académica',
		'16' => 'Precio para bibliotecas públicas',
	];

	/**
	 * Code List 59 for de
	 *
	 * @var array
	 * @see https://ns.editeur.org/onix/de/59
	 */
	protected static $de = [
		'00' => 'Unqualified price',
		'01' => 'Member/subscriber price',
		'02' => 'Export price',
		'03' => 'Reduced price applicable when the item is purchased as part of a set (or series, or collection)',
		'04' => 'Voucher price',
		'05' => 'Consumer price',
		'06' => 'Corporate / Library / Education price',
		'07' => 'Reservation order price',
		'08' => 'Promotional offer price',
		'09' => 'Linked price',
		'10' => 'Library price',
		'11' => 'Education price',
		'12' => 'Corporate price',
		'13' => 'Subscription service price',
		'14' => 'School library price',
		'15' => 'Academic library price',
		'16' => 'Public library price',
	];

	/**
	 * Code List 59 for fr
	 *
	 * @var array
	 * @see https://ns.editeur.org/onix/fr/59
	 */
	protected static $fr = [
		'00' => 'Prix sans condition',
		'01' => 'Prix membre / abonné',
		'02' => 'Prix à l’exportation',
		'03' => 'Prix réduit applicable lorsque l’article est acheté comme élément d’un ensemble ou d’une collection',
		'04' => 'Prix coupon',
		'05' => 'Prix consommateur',
		'06' => 'Prix entreprise/bibliothèque/établissement d’enseignement',
		'07' => 'Prix à la réservation',
		'08' => 'Prix promotionnel',
		'09' => 'Prix lié',
		'10' => 'Prix bibliothèque',
		'11' => 'Prix établissement d’enseignement',
		'12' => 'Prix entreprise',
		'13' => 'Prix pour les services fonctionnant par abonnement',
		'14' => 'Prix bibliothèque scolaire',
		'15' => 'Prix bibliothèque universitaire',
		'16' => 'Prix bibliothèque publique',
	];

	/**
	 * Code List 59 for it
	 *
	 * @var array
	 * @see https://ns.editeur.org/onix/it/59
	 */
	protected static $it = [
		'00' => 'Prezzo non qualificato',
		'01' => 'Prezzo soci/abbonati',
		'02' => 'Prezzo per esportazione',
		'03' => 'Prezzo ridotto applicato quando vengono acquistate tutte le parti di un prodotto (gruppo, serie o collezione)',
		'04' => 'Prezzo Buono Sconto',
		'05' => 'Prezzo al consumatore',
		'06' => 'Prezzo per aziende/biblioteche/istituzioni educative',
		'07' => 'Prezzo su ordinativo',
		'08' => 'Prezzo promozionale',
		'09' => 'Prezzo collegato',
		'10' => 'Prezzo per le biblioteche',
		'11' => 'Prezzo per istituzioni educative',
		'12' => 'Prezzo per le aziende',
		'13' => 'Prezzo per servizi di abbonamento',
		'14' => 'Prezzo per le biblioteche scolastiche',
		'15' => 'Prezzo per le biblioteche accademiche',
		'16' => 'Prezzo per le biblioteche pubbliche',
	];

	/**
	 * Code List 59 for nb
	 *
	 * @var array
	 * @see https://ns.editeur.org/onix/nb/59
	 */
	protected static $nb = [
		'00' => 'Pris for ikke-spesifiserte grupper',
		'01' => 'Medlems-/abonnementspris',
		'02' => 'Eksportpris',
		'03' => 'Redusert pris gjelder når produktet kjøpes som del av sett',
		'04' => 'Kupongpris',
		'05' => 'Pris for sluttkunde',
		'06' => 'Pris for institusjoner',
		'07' => 'Ordrepris',
		'08' => 'Tilbudspris',
		'09' => 'Lenket pris',
		'10' => 'Bibliotekpris',
		'11' => 'Pris for utdanningsinstitusjoner',
		'12' => 'Bedriftspris',
		'13' => 'Pris for abonnementstjenester',
		'14' => 'Skolebibliotekpris',
		'15' => 'Pris for akademiske bibliotek',
		'16' => 'Folkebibliotekpris',
	];

	/**
	 * Code List 59 for tr
	 *
	 * @var array
	 * @see https://ns.editeur.org/onix/tr/59
	 */
	protected static $tr = [
		'00' => 'Belirtisiz fiyat',
		'01' => 'Üye/abone fiyatı',
		'02' => 'İhraç fiyatı',
		'03' => 'Ürün bir takımın (ya da dizi veya koleksiyonun) bir parçası olarak alındığında geçerli iskontolu fiyat.',
		'04' => 'Kupon fiyatı',
		'05' => 'Tüketici fiyatı',
		'06' => 'Kurumsal / Kütüphane / Eğitim fiyatı',
		'07' => 'Rezervasyon siparişi fiyatı',
		'08' => 'Tanıtım fırsat fiyatı',
		'09' => 'Bağlantılı fiyat',
		'10' => 'Kütüphane fiyatı',
		'11' => 'Eğitim fiyatı',
		'12' => 'Kurumsal fiyat',
		'13' => 'Abonelik hizmeti fiyatı.',
		'14' => 'School library price',
		'15' => 'Academic library price',
		'16' => 'Public library price',
	];
}
