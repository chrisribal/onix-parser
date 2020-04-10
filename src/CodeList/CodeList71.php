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
		'02' => 'Edición para oficina',
		'03' => 'Sólo para uso interno de la editorial. No hacer público',
		'04' => 'Exclusivo para un punto o canal de venta',
		'05' => 'Marca propia del punto de venta',
		'06' => 'Edición para bibliotecas',
		'07' => 'Edición especial para centros de enseñanza',
		'08' => 'Indiziert',
		'09' => 'No permitida su venta a bibliotecas',
		'10' => 'Venta exclusiva en quioscos',
		'11' => 'Exclusión de canal o punto de venta',
		'12' => 'No para la venta a servicios de suscripción',
		'13' => 'Solo para servicios de suscripción',
		'14' => 'No para venta en línea',
		'15' => 'Solo para venta en línea',
		'16' => 'Except to schools',
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
		'02' => 'Edition pour grossistes en fournitures de bureau',
		'03' => 'Utilisation interne de l’éditeur uniquement : ne pas cataloguer',
		'04' => 'Exclusivité détaillant',
		'05' => 'Propre marque du détaillant',
		'06' => 'Edition bibliothèque',
		'07' => 'Edition scolaire uniquement',
		'08' => 'Indiziert',
		'09' => 'Non destiné à la vente aux bibliothèques',
		'10' => 'Edition des organes de presse',
		'11' => 'Exception détaillant',
		'12' => 'Non destiné à la vente aux services fonctionnant par abonnement',
		'13' => 'Services fonctionnant par abonnement uniquement',
		'14' => 'Pas pour la vente au détail en ligne',
		'15' => 'Vente au détail en ligne uniquement',
		'16' => 'Except to schools',
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
		'01' => 'Rivenditore esclusivo',
		'02' => 'Edizione per l’ufficio',
		'03' => 'Solo per uso interno dell’editore',
		'04' => 'Rivenditore esclusivo senza marchio proprietario',
		'05' => 'Rivenditore esclusivo con marchio proprietario',
		'06' => 'Edizione per le biblioteche',
		'07' => 'Edizione per le scuole',
		'08' => 'Indiziert',
		'09' => 'Non per vendita alle biblioteche',
		'10' => 'Edizione per edicole',
		'11' => 'Rivenditore escluso',
		'12' => 'Non per vendita a servizi di abbonamento',
		'13' => 'Solo per servizi in abbonamento',
		'14' => 'Non per vendita online',
		'15' => 'Solo per vendita online',
		'16' => 'Except to schools',
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
		'01' => 'Forhandlerutgave / eget merke',
		'02' => 'Kontorrekvisitautgave',
		'03' => 'Kun for internt forlagsbruk: skal ikke vises',
		'04' => 'Forhandlerutgave',
		'05' => 'Forhandlers egen merkevare',
		'06' => 'Bibliotekutgave',
		'07' => 'Skoleutgave',
		'08' => 'Indiziert',
		'09' => 'Ikke for salg til bibliotek',
		'10' => 'Kioskutgave',
		'11' => 'Forhandlerunntak',
		'12' => 'Ikke for abonnementstjenester',
		'13' => 'Kun for abonnementstjenester',
		'14' => 'Ikke for netthandel',
		'15' => 'Kun for netthandel',
		'16' => 'Except to schools',
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
		'13' => 'Subscription services only',
		'14' => 'Çevrimiçi perakendeye yönelik değildir',
		'15' => 'Sadece çevrimiçi perakende',
		'16' => 'Except to schools',
		'99' => 'No restrictions on sales',
	];
}
