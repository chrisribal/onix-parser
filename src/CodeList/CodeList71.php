<?php

namespace Ribal\Onix\CodeList;

/**
 * ONIX Code List 71
 *
 * Used with <SalesRestrictionType> <b381>
 *
 * @see https://ns.editeur.org/onix/en/71
 */
class CodeList71 extends CodeList implements CodeListInterface
{
	/**
	 * Code List 71 for en
	 *
	 * @var array
	 * @see https://ns.editeur.org/onix/en/71
	 */
	protected static $en = [
		'00' => 'Unspecified – see text',
		'01' => 'Retailer exclusive / own brand',
		'02' => 'Through office supplies outlets only',
		'03' => 'Internal publisher use only: do not list',
		'04' => 'Retailer exclusive',
		'05' => 'Retailer own brand',
		'06' => 'To libraries only',
		'07' => 'To schools only',
		'08' => 'Indiziert',
		'09' => 'Except to libraries',
		'10' => 'Through news outlets only',
		'11' => 'Retailer exception',
		'12' => 'Except to subscription services',
		'13' => 'To subscription services only',
		'14' => 'Except through online retail',
		'15' => 'Through online retail only',
		'16' => 'Except to schools',
		'17' => 'Through Inventoryless POD',
		'18' => 'Through Stock Protection POD',
		'19' => 'Except through POD',
		'99' => 'No restrictions on sales',
	];

	/**
	 * Code List 71 for es
	 *
	 * @var array
	 * @see https://ns.editeur.org/onix/es/71
	 */
	protected static $es = [
		'00' => 'No especificado – ver texto',
		'01' => 'Marca exclusiva / propietaria del minorista',
		'02' => 'A través de distribuidores de material para oficina',
		'03' => 'Sólo para uso interno de la editorial. No hacer público',
		'04' => 'Exclusivo para un punto o canal de venta',
		'05' => 'Marca propia del vendedor minorista',
		'06' => 'Solo para bibliotecas',
		'07' => 'Solo para centros educativos',
		'08' => 'Indiziert',
		'09' => 'Excepto para bibliotecas',
		'10' => 'Solo para quioscos',
		'11' => 'Exclusión de canal o punto de venta',
		'12' => 'Excepto para servicios de suscripción',
		'13' => 'Solo para servicios de suscripción',
		'14' => 'Excepto para venta en línea',
		'15' => 'Solo para venta en línea',
		'16' => 'Excepto para centros educativos',
		'17' => 'Mediante impresión bajo demanda (POD) sin stock',
		'18' => 'Mediante impresión bajo demanda (POD) como protección de stock',
		'19' => 'Exceptuada impresión bajo demanda (POD)',
		'99' => 'Sin restricciones de venta',
	];

	/**
	 * Code List 71 for de
	 *
	 * @var array
	 * @see https://ns.editeur.org/onix/de/71
	 */
	protected static $de = [
		'00' => 'Unspecified – see text',
		'01' => 'Retailer exclusive / own brand',
		'02' => 'Through office supplies outlets only',
		'03' => 'Internal publisher use only: do not list',
		'04' => 'Retailer exclusive',
		'05' => 'Retailer own brand',
		'06' => 'To libraries only',
		'07' => 'To schools only',
		'08' => 'Indiziert',
		'09' => 'Except to libraries',
		'10' => 'Through news outlets only',
		'11' => 'Retailer exception',
		'12' => 'Except to subscription services',
		'13' => 'To subscription services only',
		'14' => 'Except through online retail',
		'15' => 'Through online retail only',
		'16' => 'Except to schools',
		'17' => 'Through Inventoryless POD',
		'18' => 'Through Stock Protection POD',
		'19' => 'Except through POD',
		'99' => 'No restrictions on sales',
	];

	/**
	 * Code List 71 for fr
	 *
	 * @var array
	 * @see https://ns.editeur.org/onix/fr/71
	 */
	protected static $fr = [
		'00' => 'Non spécifié – voir texte',
		'01' => 'Exclusivité détaillant / marque propre',
		'02' => 'Par l’intermédiaire de grossistes en fournitures de bureau uniquement',
		'03' => 'Utilisation interne de l’éditeur uniquement : ne pas cataloguer',
		'04' => 'Exclusivité détaillant',
		'05' => 'Propre marque du détaillant',
		'06' => 'Pour les bibliothèques uniquement',
		'07' => 'Pour les écoles uniquement',
		'08' => 'Indiziert',
		'09' => 'Sauf pour les bibliothèques',
		'10' => 'Par l’intermédiaire des organes de presse uniquement',
		'11' => 'Exception détaillant',
		'12' => 'Sauf pour les services fonctionnant par abonnement',
		'13' => 'Pour les services fonctionnant par abonnement uniquement',
		'14' => 'Pas pour la vente au détail en ligne',
		'15' => 'Sauf par l’intermédiaire de la vente au détail en ligne',
		'16' => 'Sauf pour les écoles',
		'17' => 'IAD uniquement (sans stock physique)',
		'18' => 'Maintien du stock en IAD uniquement',
		'19' => 'Sauf par l’utilisation de l’IAD',
		'99' => 'Pas de restrictions sur les ventes',
	];

	/**
	 * Code List 71 for it
	 *
	 * @var array
	 * @see https://ns.editeur.org/onix/it/71
	 */
	protected static $it = [
		'00' => 'Non specificato – vedi testo',
		'01' => 'Rivenditore esclusivo/a marchio proprio',
		'02' => 'Solo attraverso i rivenditori di articoli per ufficio',
		'03' => 'Solo per uso interno dell’editore',
		'04' => 'Rivenditore esclusivo',
		'05' => 'Rivenditore a marchio proprio',
		'06' => 'Solo per le biblioteche',
		'07' => 'Solo per le scuole',
		'08' => 'Indiziert',
		'09' => 'Biblioteche escluse',
		'10' => 'Solo per le edicole',
		'11' => 'Rivenditore escluso',
		'12' => 'Servizi in abbonamento esclusi',
		'13' => 'Solo per servizi in abbonamento',
		'14' => 'Vendita online esclusa',
		'15' => 'Solo per vendita online',
		'16' => 'Scuole escluse',
		'17' => 'Tramite POD senza magazzino',
		'18' => 'Tramite POD per evitare rotture di stock',
		'19' => 'POD esclusi',
		'99' => 'Nessuna restrizione alla vendita',
	];

	/**
	 * Code List 71 for nb
	 *
	 * @var array
	 * @see https://ns.editeur.org/onix/nb/71
	 */
	protected static $nb = [
		'00' => 'Uspesifisert – se tekst',
		'01' => 'Forhandlereksklusivitet / eget merke',
		'02' => 'Kun gjennom utsalgssteder for kontorrekvisita',
		'03' => 'Kun for internt forlagsbruk: skal ikke vises',
		'04' => 'Forhandlereksklusivitet',
		'05' => 'Forhandlers egen merkevare',
		'06' => 'Kun til bibliotek',
		'07' => 'Kun til skoler',
		'08' => 'Indiziert',
		'09' => 'Ikke til bibliotek',
		'10' => 'Kun gjennom utsalgssteder i kioskmarkedet',
		'11' => 'Forhandlerunntak',
		'12' => 'Ikke til abonnementstjenester',
		'13' => 'Kun til abonnementstjenester',
		'14' => 'Ikke til netthandel',
		'15' => 'Kun til netthandel',
		'16' => 'Ikke til skoler',
		'17' => 'Gjennom ikke lagerført POD',
		'18' => 'Gjennom lagerbeskyttet POD',
		'19' => 'Bortsett fra som POD',
		'99' => 'Ingen salgsrestriksjoner',
	];

	/**
	 * Code List 71 for tr
	 *
	 * @var array
	 * @see https://ns.editeur.org/onix/tr/71
	 */
	protected static $tr = [
		'00' => 'Belirtilmemiş – bkz. metin',
		'01' => 'Münhasır perakendeci / kendi markası',
		'02' => 'Kırtasiyeci basımı',
		'03' => 'Sadece yayımcı iç kullanımı: Listelemeyiniz',
		'04' => 'Münhasır perakendeci',
		'05' => 'Perakendeci kendi markası',
		'06' => 'Kütüphane basımı',
		'07' => 'Okullara özel basım',
		'08' => 'Indiziert',
		'09' => 'Kütüphanelere satış için değil',
		'10' => 'Gazete bayii basımı',
		'11' => 'Perakendeci istisnası',
		'12' => 'Abonelik hizmetlerine satılmaz',
		'13' => 'To subscription services only',
		'14' => 'Çevrimiçi perakendeye yönelik değildir',
		'15' => 'Sadece çevrimiçi perakende',
		'16' => 'Except to schools',
		'17' => 'Through Inventoryless POD',
		'18' => 'Through Stock Protection POD',
		'19' => 'Except through POD',
		'99' => 'No restrictions on sales',
	];
}
