<?php

namespace Ribal\Onix\CodeList;

/**
 * ONIX Code List 163
 *
 * Used with    • <PublishingDateRole> <x448>    • <MarketDateRole> <j408>
 *
 * @see https://ns.editeur.org/onix/en/163
 */
class CodeList163 extends CodeList implements CodeListInterface
{
	/**
	 * Code List 163 for en
	 *
	 * @var array
	 * @see https://ns.editeur.org/onix/en/163
	 */
	protected static $en = [
		'01' => 'Publication date',
		'02' => 'Sales embargo date',
		'09' => 'Public announcement date',
		'10' => 'Trade announcement date',
		'11' => 'Date of first publication',
		'12' => 'Last reprint date',
		'13' => 'Out-of-print / deletion date',
		'16' => 'Last reissue date',
		'19' => 'Publication date of print counterpart',
		'20' => 'Date of first publication in original language',
		'21' => 'Forthcoming reissue date',
		'22' => 'Expected availability date after temporary withdrawal',
		'23' => 'Review embargo date',
		'25' => 'Publisher’s reservation order deadline',
		'26' => 'Forthcoming reprint date',
		'27' => 'Preorder embargo date',
		'28' => 'Transfer date',
		'29' => 'Date of production',
		'30' => 'Streaming embargo date',
		'31' => 'Subscription embargo date',
	];

	/**
	 * Code List 163 for es
	 *
	 * @var array
	 * @see https://ns.editeur.org/onix/es/163
	 */
	protected static $es = [
		'01' => 'Fecha de publicación',
		'02' => 'Fecha de embargo de ventas',
		'09' => 'Fecha de anuncio público',
		'10' => 'Fecha de anuncio para el sector',
		'11' => 'Fecha de primera publicación de la obra',
		'12' => 'Fecha de última impresión',
		'13' => 'Fecha de descatalogación o desactivación',
		'16' => 'Fecha de última reedición',
		'19' => 'Fecha de publicación de la versión impresa',
		'20' => 'Fecha de primera publicación en lengua original',
		'21' => 'Fecha de próxima reedición',
		'22' => 'Fecha esperada de disponibilidad después de retirada temporal del mercado',
		'23' => 'Fecha de embargo para críticas o reseñas',
		'25' => 'Fecha límite de la editorial para pedidos de reserva',
		'26' => 'Fecha para una futura reimpresión',
		'27' => 'Fecha de embargo para pedidos anticipados',
		'28' => 'Fecha de transferencia',
		'29' => 'Fecha de producción',
		'30' => 'Fecha de embargo para «streaming»',
		'31' => 'Fecha de embargo para suscripciones',
	];

	/**
	 * Code List 163 for de
	 *
	 * @var array
	 * @see https://ns.editeur.org/onix/de/163
	 */
	protected static $de = [
		'01' => 'Erscheinungsdatum',
		'02' => 'Verkaufsembargodatum',
		'09' => 'Datum der öffentlichen Bekanntgabe',
		'10' => 'Handelsankündigungsdatum',
		'11' => 'Datum der Erstveröffentlichung',
		'12' => 'Datum des letzten Nachdrucks',
		'13' => 'Vergriffenes / Löschdatum',
		'16' => 'Datum der letzten Neuausstellung',
		'19' => 'Erscheinungsdatum des Druckgegenstücks',
		'20' => 'Datum der Erstveröffentlichung in Originalsprache',
		'21' => 'Bevorstehendes Neuausstellungsdatum',
		'22' => 'Voraussichtliches Verfügbarkeitsdatum nach vorübergehender Auszahlung',
		'23' => 'Embargodatum überprüfen',
		'25' => 'Bestellschluss für die Reservierung des Herausgebers',
		'26' => 'Bevorstehendes Nachdruckdatum',
		'27' => 'Embargodatum vorbestellen',
		'28' => 'Überweisungsdatum',
		'29' => 'Produktionsdatum',
		'30' => 'Datum des Streaming-Embargos',
		'31' => 'Datum des Abonnementembargos',
	];

	/**
	 * Code List 163 for fr
	 *
	 * @var array
	 * @see https://ns.editeur.org/onix/fr/163
	 */
	protected static $fr = [
		'01' => 'Date de publication',
		'02' => 'Date d’embargo pour la vente',
		'09' => 'Date d’annonce publique',
		'10' => 'Date d’annonce commerciale',
		'11' => 'Date de première publication',
		'12' => 'Dernière date de réimpression',
		'13' => 'Date de passage en épuisé / arrêt de commercialisation',
		'16' => 'Dernière date de réédition',
		'19' => 'Date de publication de l’équivalent imprimé',
		'20' => 'Date de première publication dans la langue d’origine',
		'21' => 'Prochaine date de réédition',
		'22' => 'Date de disponibilité prévisionnelle après retrait temporaire',
		'23' => 'Date d’embargo des critiques',
		'25' => 'Date limite de réservation par bon de commande auprès de l’éditeur',
		'26' => 'Prochaine date de réimpression',
		'27' => 'Date d’embargo de précommande',
		'28' => 'Date de changement d’éditeur',
		'29' => 'Date de production',
		'30' => 'Date d’embargo pour le streaming',
		'31' => 'Date d’embargo pour la souscription',
	];

	/**
	 * Code List 163 for it
	 *
	 * @var array
	 * @see https://ns.editeur.org/onix/it/163
	 */
	protected static $it = [
		'01' => 'Data di pubblicazione',
		'02' => 'Data di embargo sulle vendite',
		'09' => 'Data di annuncio al pubblico',
		'10' => 'Data di annuncio al settore',
		'11' => 'Data della prima pubblicazione',
		'12' => 'Data dell’ultima ristampa',
		'13' => 'Data di fuori catalogo/di cancellazione',
		'16' => 'Data dell’ultima ripubblicazione',
		'19' => 'Data di pubblicazione della versione a stampa',
		'20' => 'Data della prima pubblicazione in lingua originale',
		'21' => 'Data della prossima ripubblicazione',
		'22' => 'Data di presunta disponibilità successiva al ritiro temporaneo',
		'23' => 'Data di embargo della recensione',
		'25' => 'Data di scadenza per gli ordini all’editore',
		'26' => 'Data della prossima ristampa',
		'27' => 'Data di embargo della prenotazione',
		'28' => 'Data di trasferimento',
		'29' => 'Data di produzione',
		'30' => 'Data di embargo dello streaming',
		'31' => 'Data di embargo dell’abbonamento',
	];

	/**
	 * Code List 163 for nb
	 *
	 * @var array
	 * @see https://ns.editeur.org/onix/nb/163
	 */
	protected static $nb = [
		'01' => 'Utgivelsesdato',
		'02' => 'Frigivelsesdato',
		'09' => 'Offentliggjøringsdato',
		'10' => 'Offentliggjøringsdato for bransjen',
		'11' => 'Første utgivelsesdato',
		'12' => 'Siste opplagsdato',
		'13' => 'Utsolgt-/slettedato',
		'16' => 'Siste nyutgivelsesdato',
		'19' => 'Utgivelsesdato for trykt versjon',
		'20' => 'Første utgivelsesdato på originalspråket',
		'21' => 'Forventet dato for nyutgivelse',
		'22' => 'Forventet tilgjengelighetsdato etter midlertidig ikke tilgjengelig',
		'23' => 'Dato for anmeldelser',
		'25' => 'Utgivers frist for å legge forhåndsordre',
		'26' => 'Forventet dato for nytt opplag',
		'27' => 'Sperredato for forhåndsordre',
		'28' => 'Overføringsdato',
		'29' => 'Produksjonsdato',
		'30' => 'Sperredato for strømming',
		'31' => 'Sperredato for abonnement',
	];

	/**
	 * Code List 163 for tr
	 *
	 * @var array
	 * @see https://ns.editeur.org/onix/tr/163
	 */
	protected static $tr = [
		'01' => 'Yayın tarihi',
		'02' => 'Satış ambargo tarihi',
		'09' => 'Kamuya duyuru tarihi',
		'10' => 'Ticari duyuru tarihi',
		'11' => 'İlk yayın tarihi',
		'12' => 'Son basım tarihi',
		'13' => 'Baskı tükenme / silinme tarihi',
		'16' => 'Son tekrar yayın tarihi',
		'19' => 'Basılı kopyanın yayın tarihi',
		'20' => 'Orijinal dilde ilk yayın tarihi',
		'21' => 'Gelecek tekrar yayın tarihi',
		'22' => 'Geçici geri çekme sonrasında beklenen temin tarihi',
		'23' => 'İnceleme ambargo tarihi',
		'25' => 'Yayımcının rezervasyon siparişi son tarihi',
		'26' => 'Gelecek basım tarihi',
		'27' => 'Ön sipariş ambargo tarihi',
		'28' => 'Transfer tarihi',
		'29' => 'Date of production',
		'30' => 'Streaming embargo date',
		'31' => 'Subscription embargo date',
	];
}
