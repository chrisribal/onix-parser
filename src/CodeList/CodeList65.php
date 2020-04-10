<?php

namespace Ribal\Onix\CodeList;

/**
 * ONIX Code List 65
 *
 * Used with <ProductAvailability> <j396>
 *
 * @see https://ns.editeur.org/onix/en/65
 */
class CodeList65 extends CodeList implements CodeListInterface
{
	/**
	 * Code List 65 for en
	 *
	 * @var array
	 * @see https://ns.editeur.org/onix/en/65
	 */
	protected static $en = [
		'01' => 'Cancelled',
		'09' => 'Not yet available, postponed indefinitely',
		'10' => 'Not yet available',
		'11' => 'Awaiting stock',
		'12' => 'Not yet available, will be POD',
		'20' => 'Available',
		'21' => 'In stock',
		'22' => 'To order',
		'23' => 'POD',
		'30' => 'Temporarily unavailable',
		'31' => 'Out of stock',
		'32' => 'Reprinting',
		'33' => 'Awaiting reissue',
		'34' => 'Temporarily withdrawn from sale',
		'40' => 'Not available (reason unspecified)',
		'41' => 'Not available, replaced by new product',
		'42' => 'Not available, other format available',
		'43' => 'No longer supplied by us',
		'44' => 'Apply direct',
		'45' => 'Not sold separately',
		'46' => 'Withdrawn from sale',
		'47' => 'Remaindered',
		'48' => 'Not available, replaced by POD',
		'49' => 'Recalled',
		'50' => 'Not sold as set',
		'51' => 'Not available, publisher indicates OP',
		'52' => 'Not available, publisher no longer sells product in this market',
		'97' => 'No recent update received',
		'98' => 'No longer receiving updates',
		'99' => 'Contact supplier',
	];

	/**
	 * Code List 65 for es
	 *
	 * @var array
	 * @see https://ns.editeur.org/onix/es/65
	 */
	protected static $es = [
		'01' => 'Cancelado',
		'09' => 'No disponible todavía, pospuesto indefinidamente',
		'10' => 'No disponible todavía',
		'11' => 'En espera de stock',
		'12' => 'No disponible todavía, lo estará sólo en POD',
		'20' => 'Disponible. Sin detalles',
		'21' => 'En stock',
		'22' => 'Disponible bajo pedido especial',
		'23' => 'Impresión bajo demanda (POD)',
		'30' => 'Temporalmente no disponible. Sin detalles',
		'31' => 'Temporalmente no disponible. Sin stock',
		'32' => 'Temporalmente no disponible. En reimpresión',
		'33' => 'Temporalmente no disponible. A la espera de reedición',
		'34' => 'Temporalmente retirado de la venta',
		'40' => 'No disponible. Sin detalles',
		'41' => 'No disponible. Sustituido por un nuevo producto',
		'42' => 'No disponible. Disponible en otro formato',
		'43' => 'No suministrado más por nosotros',
		'44' => 'Solicitar directamente a la editorial',
		'45' => 'No se vende por separado',
		'46' => 'Retirado de la venta',
		'47' => 'Destinado al mercado de saldos',
		'48' => 'No disponible. Sustituido por POD',
		'49' => 'Retirado por seguridad del consumidor',
		'50' => 'No se vende como conjunto / obra en varios volúmenes',
		'51' => 'No disponible. La editorial indica que está descatalogado o agotado indefinidamente',
		'52' => 'No disponible. La editorial ya no vende este producto en este mercado',
		'97' => 'No se ha recibido actualización reciente',
		'98' => 'Ya no se reciben actualizaciones',
		'99' => 'Póngase en contacto con el proveedor',
	];

	/**
	 * Code List 65 for de
	 *
	 * @var array
	 * @see https://ns.editeur.org/onix/de/65
	 */
	protected static $de = [
		'01' => 'Cancelled',
		'09' => 'Not yet available, postponed indefinitely',
		'10' => 'Not yet available',
		'11' => 'Awaiting stock',
		'12' => 'Not yet available, will be POD',
		'20' => 'Available',
		'21' => 'In stock',
		'22' => 'To order',
		'23' => 'POD',
		'30' => 'Temporarily unavailable',
		'31' => 'Out of stock',
		'32' => 'Reprinting',
		'33' => 'Awaiting reissue',
		'34' => 'Temporarily withdrawn from sale',
		'40' => 'Not available (reason unspecified)',
		'41' => 'Not available, replaced by new product',
		'42' => 'Not available, other format available',
		'43' => 'No longer supplied by us',
		'44' => 'Apply direct',
		'45' => 'Not sold separately',
		'46' => 'Withdrawn from sale',
		'47' => 'Remaindered',
		'48' => 'Not available, replaced by POD',
		'49' => 'Recalled',
		'50' => 'Not sold as set',
		'51' => 'Not available, publisher indicates OP',
		'52' => 'Not available, publisher no longer sells product in this market',
		'97' => 'No recent update received',
		'98' => 'No longer receiving updates',
		'99' => 'Contact supplier',
	];

	/**
	 * Code List 65 for fr
	 *
	 * @var array
	 * @see https://ns.editeur.org/onix/fr/65
	 */
	protected static $fr = [
		'01' => 'Annulé',
		'09' => 'Pas encore disponible, reporté sans date',
		'10' => 'Pas encore disponible',
		'11' => 'En attente de stock',
		'12' => 'Pas encore disponible, fera l’objet de POD',
		'20' => 'Disponible',
		'21' => 'En stock',
		'22' => 'A commander',
		'23' => 'POD',
		'30' => 'Momentanément indisponible',
		'31' => 'En rupture de stock',
		'32' => 'En réimpression',
		'33' => 'En attente de remise en vente',
		'34' => 'Retiré momentanément de la vente',
		'40' => 'Indisponible (motif non spécifié)',
		'41' => 'Indisponible, remplacé par un nouveau produit',
		'42' => 'Indisponible, autre format disponible',
		'43' => 'N’est plus distribué par nous',
		'44' => 'Demande directe',
		'45' => 'Non vendu séparément',
		'46' => 'Retiré de la vente',
		'47' => 'Soldé',
		'48' => 'Indisponible, remplacé par POD',
		'49' => 'Rappelé',
		'50' => 'Non vendu comme un ensemble',
		'51' => 'Indisponible, l’éditeur indique le produit épuisé',
		'52' => 'Indisponible, l’éditeur ne vend plus le produit sur ce marché',
		'97' => 'Aucune mise à jour récente reçue',
		'98' => 'Ne reçoit plus les mises à jour',
		'99' => 'Contacter le distributeur',
	];

	/**
	 * Code List 65 for it
	 *
	 * @var array
	 * @see https://ns.editeur.org/onix/it/65
	 */
	protected static $it = [
		'01' => 'Cancellato',
		'09' => 'Non ancora disponibile, rinviato indefinitamente',
		'10' => 'Non ancora disponibile',
		'11' => 'In attesa di inserimento in stock',
		'12' => 'Non ancora disponibile, sarà prodotto a richiesta',
		'20' => 'Disponibile',
		'21' => 'Disponibile in stock',
		'22' => 'Disponibile con ordine speciale',
		'23' => 'Prodotto a richiesta',
		'30' => 'Temporaneamente non disponibile',
		'31' => 'Non in stock',
		'32' => 'In corso di ristampa',
		'33' => 'In attesa di ripubblicazione',
		'34' => 'Temporaneamente ritirato dal commercio',
		'40' => 'Non disponibile (motivi non specificati)',
		'41' => 'Non disponibile, sostituito da un nuovo prodotto',
		'42' => 'Non disponibile, disponibile in altro formato',
		'43' => 'Non più trattato dal fornitore',
		'44' => 'Richiesta diretta all’editore',
		'45' => 'Non venduto separatamente',
		'46' => 'Ritirato dal commercio',
		'47' => 'Passato al mercato remainder',
		'48' => 'Non disponibile, sostituito da prodotto su richiesta',
		'49' => 'Richiamato',
		'50' => 'Venduto separatamente',
		'51' => 'Non disponibile, dichiarato fuori catalogo',
		'52' => 'Non disponibile, fuori mercato',
		'97' => 'Nessun nuovo aggiornamento',
		'98' => 'Aggiornamenti non più disponibili',
		'99' => 'Contattare il fornitore',
	];

	/**
	 * Code List 65 for nb
	 *
	 * @var array
	 * @see https://ns.editeur.org/onix/nb/65
	 */
	protected static $nb = [
		'01' => 'Vil ikke utkomme',
		'09' => 'Ikke tilgjengelig ennå, utsatt på ubestemt tid',
		'10' => 'Ikke tilgjengelig ennå',
		'11' => 'Ikke ankommet lager',
		'12' => 'Ikke tilgjengelig ennå, vil komme som POD',
		'20' => 'Tilgjengelig',
		'21' => 'Tilgjengelig på lager',
		'22' => 'Skaffes på bestilling',
		'23' => 'POD – Print on demand',
		'30' => 'Midlertidig ikke tilgjengelig',
		'31' => 'Midlertidig tomt på lager',
		'32' => 'Under opptrykk',
		'33' => 'Nytt opplag ventes',
		'34' => 'Midlertidig trukket tilbake fra salg',
		'40' => 'Ikke tilgjengelig fra oss',
		'41' => 'Erstattet av nytt produkt',
		'42' => 'Annet format tilgjengelig',
		'43' => 'Ikke lenger distribuert av oss',
		'44' => 'Må bestilles direkte fra vareeier',
		'45' => 'Selges ikke enkeltvis',
		'46' => 'Trukket tilbake fra salg',
		'47' => 'Reservert nedsettelse',
		'48' => 'Utsolgt, erstattet av POD',
		'49' => 'Tilbakekalt',
		'50' => 'Selges ikke samlet',
		'51' => 'Ikke tilgjengelig, utgiver/vareeier angir at produktet er utsolgt',
		'52' => 'Ikke tilgjengelig. Utgiver/vareeier selger ikke lenger produktet i dette markedet',
		'97' => 'Ukjent, ikke mottatt oppdateringer i det siste',
		'98' => 'Ukjent, oppdateringer mottas ikke',
		'99' => 'Kontakt kundetjenesten',
	];

	/**
	 * Code List 65 for tr
	 *
	 * @var array
	 * @see https://ns.editeur.org/onix/tr/65
	 */
	protected static $tr = [
		'01' => 'İptal edildi',
		'09' => 'Henüz erişilebilir değil, süresiz olarak ertelendi',
		'10' => 'Henüz temin edilemiyor',
		'11' => 'Stok bekleniyor',
		'12' => 'Henüz temin edilemiyor, TGB olacak',
		'20' => 'Temin edilir',
		'21' => 'Stokta var',
		'22' => 'Siparişle',
		'23' => 'TGB',
		'30' => 'Geçici olarak temin edilemiyor',
		'31' => 'Stokta yok',
		'32' => 'Yeniden basılıyor',
		'33' => 'Yeniden yayınlanacak',
		'34' => 'Geçici olarak satıştan çekildi',
		'40' => 'Temin edilemiyor (neden belirtilmemiş)',
		'41' => 'Temin edilemiyor, yerini yeni bir ürün aldı',
		'42' => 'Temin edilemiyor, başka format temin edilebiliyor',
		'43' => 'Artık tedarik etmiyoruz',
		'44' => 'Doğrudan başvuru',
		'45' => 'Ayrı olarak satılmaz',
		'46' => 'Satıştan çekildi',
		'47' => 'Kelepire verildi',
		'48' => 'Temin edilemiyor, yerini TGB aldı',
		'49' => 'Geri çağırıldı',
		'50' => 'Takım olarak satılmaz',
		'51' => 'Temin edilemiyor, yayımcı BT bilgisi verdi',
		'52' => 'Temin edilemiyor, yayımcı ürünü bu pazarda artık satmıyor',
		'97' => 'Yeni güncelleme alınmadı',
		'98' => 'Artık güncelleme alınmıyor',
		'99' => 'Tedarikçiye başvurunuz',
	];
}
