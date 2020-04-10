<?php

namespace Ribal\Onix\CodeList;

/**
 * ONIX Code List 68
 *
 * Used with <MarketPublishingStatus> <j407>
 *
 * @see https://ns.editeur.org/onix/en/68
 */
class CodeList68 extends CodeList implements CodeListInterface
{
	/**
	 * Code List 68 for en
	 *
	 * @var array
	 * @see https://ns.editeur.org/onix/en/68
	 */
	protected static $en = [
		'00' => 'Unspecified',
		'01' => 'Cancelled',
		'02' => 'Forthcoming',
		'03' => 'Postponed indefinitely',
		'04' => 'Active',
		'05' => 'No longer our product',
		'06' => 'Out of stock indefinitely',
		'07' => 'Out of print',
		'08' => 'Inactive',
		'09' => 'Unknown',
		'10' => 'Remaindered',
		'11' => 'Withdrawn from sale',
		'12' => 'Not available in this market',
		'13' => 'Active, but not sold separately',
		'14' => 'Active, with market restrictions',
		'15' => 'Recalled',
		'16' => 'Temporarily withdrawn from sale',
	];

	/**
	 * Code List 68 for es
	 *
	 * @var array
	 * @see https://ns.editeur.org/onix/es/68
	 */
	protected static $es = [
		'00' => 'No especificado',
		'01' => 'Cancelado',
		'02' => 'Próxima aparición',
		'03' => 'Aplazado sin fecha',
		'04' => 'Activo',
		'05' => 'Ya no nos pertenece',
		'06' => 'Agotado indefinidamente',
		'07' => 'Descatalogado',
		'08' => 'Inactivo',
		'09' => 'Desconocido',
		'10' => 'Destinado al mercado de saldo',
		'11' => 'Retirado de la venta',
		'12' => 'No disponible en este mercado',
		'13' => 'Activo, pero no se vende por separado',
		'14' => 'Activo, con restricciones de venta',
		'15' => 'Retirado de la venta',
		'16' => 'Temporalmente retirado de la venta',
	];

	/**
	 * Code List 68 for de
	 *
	 * @var array
	 * @see https://ns.editeur.org/onix/de/68
	 */
	protected static $de = [
		'00' => 'Unspecified',
		'01' => 'Cancelled',
		'02' => 'Forthcoming',
		'03' => 'Postponed indefinitely',
		'04' => 'Active',
		'05' => 'No longer our product',
		'06' => 'Out of stock indefinitely',
		'07' => 'Out of print',
		'08' => 'Inactive',
		'09' => 'Unknown',
		'10' => 'Remaindered',
		'11' => 'Withdrawn from sale',
		'12' => 'Not available in this market',
		'13' => 'Active, but not sold separately',
		'14' => 'Active, with market restrictions',
		'15' => 'Recalled',
		'16' => 'Temporarily withdrawn from sale',
	];

	/**
	 * Code List 68 for fr
	 *
	 * @var array
	 * @see https://ns.editeur.org/onix/fr/68
	 */
	protected static $fr = [
		'00' => 'Non spécifié',
		'01' => 'Annulé',
		'02' => 'A paraître',
		'03' => 'Reporté sans date',
		'04' => 'Actif',
		'05' => 'N’est plus à notre catalogue',
		'06' => 'En rupture de stock sans date',
		'07' => 'Épuisé',
		'08' => 'Inactif',
		'09' => 'Inconnu',
		'10' => 'Soldé',
		'11' => 'Retiré de la vente',
		'12' => 'Indisponible sur ce marché',
		'13' => 'Actif, mais non vendu séparément',
		'14' => 'Actif, avec restrictions de marché',
		'15' => 'Rappelé',
		'16' => 'Retiré momentanément de la vente',
	];

	/**
	 * Code List 68 for it
	 *
	 * @var array
	 * @see https://ns.editeur.org/onix/it/68
	 */
	protected static $it = [
		'00' => 'Non specificato',
		'01' => 'Cancellato',
		'02' => 'Di prossima pubblicazione',
		'03' => 'Rinviato a data da destinarsi',
		'04' => 'Attivo',
		'05' => 'Non più trattato',
		'06' => 'Non disponibile a tempo indeterminato',
		'07' => 'Fuori catalogo',
		'08' => 'Inattivo',
		'09' => 'Sconosciuto',
		'10' => 'Passato al mercato remainder',
		'11' => 'Ritirato dal commercio',
		'12' => 'Non disponibile in questo mercato',
		'13' => 'Attivo, ma non venduto separatamente',
		'14' => 'Attivo, con restrizioni alla vendita',
		'15' => 'Richiamato',
		'16' => 'Temporaneamente ritirato dal mercato',
	];

	/**
	 * Code List 68 for nb
	 *
	 * @var array
	 * @see https://ns.editeur.org/onix/nb/68
	 */
	protected static $nb = [
		'00' => 'Ikke spesifisert',
		'01' => 'Vil ikke utkomme',
		'02' => 'Forventes utgitt',
		'03' => 'Utsatt inntil videre',
		'04' => 'I salg',
		'05' => 'Ikke lenger vårt produkt',
		'06' => 'Utsolgt, til vurdering',
		'07' => 'Utsolgt',
		'08' => 'Ikke i ordinært salg',
		'09' => 'Ukjent',
		'10' => 'Reservert nedsettelse',
		'11' => 'Trukket tilbake fra salg',
		'12' => 'Ikke tilgjengelig i dette markedet',
		'13' => 'Selges ikke enkeltvis',
		'14' => 'I salg, med restiksjoner',
		'15' => 'Tilbakekalt',
		'16' => 'Midlertidig trukket tilbake fra salg',
	];

	/**
	 * Code List 68 for tr
	 *
	 * @var array
	 * @see https://ns.editeur.org/onix/tr/68
	 */
	protected static $tr = [
		'00' => 'Belirtilmemiş',
		'01' => 'İptal edildi',
		'02' => 'Yakında',
		'03' => 'Süresiz ertelendi',
		'04' => 'Etkin',
		'05' => 'Artık bizim ürünümüz değil',
		'06' => 'Süresiz olarak tükendi',
		'07' => 'Tükendi',
		'08' => 'Etkin değil',
		'09' => 'Bilinmeyen',
		'10' => 'Kelepire verildi',
		'11' => 'Satıştan çekildi',
		'12' => 'Bu pazarda temin edilemiyor',
		'13' => 'Etkin, fakat ayrı olarak satılmaz',
		'14' => 'Etkin, pazar kısıtlamaları var',
		'15' => 'Geri çağırıldı',
		'16' => 'Geçici olarak satıştan çekildi',
	];
}
