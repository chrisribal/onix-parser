<?php

namespace Ribal\Onix\CodeList;

/**
 * ONIX Code List 64
 *
 * Used with <PublishingStatus> <b394>
 *
 * @see https://ns.editeur.org/onix/en/64
 */
class CodeList64 extends CodeList implements CodeListInterface
{
	/**
	 * Code List 64 for en
	 *
	 * @var array
	 * @see https://ns.editeur.org/onix/en/64
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
		'12' => 'Recalled',
		'13' => 'Active, but not sold separately',
		'15' => 'Recalled',
		'16' => 'Temporarily withdrawn from sale',
		'17' => 'Permanently withdrawn from sale',
		'18' => 'Active, but not sold as set',
	];

	/**
	 * Code List 64 for es
	 *
	 * @var array
	 * @see https://ns.editeur.org/onix/es/64
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
		'11' => 'Retirado del mercado',
		'12' => 'Retirado',
		'13' => 'Activo pero no se vende por separado',
		'15' => 'Retirado',
		'16' => 'Temporalmente retirado de la venta',
		'17' => 'Retirado de la venta definitivamente',
		'18' => 'Activo, pero no se vende como conjunto',
	];

	/**
	 * Code List 64 for de
	 *
	 * @var array
	 * @see https://ns.editeur.org/onix/de/64
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
		'12' => 'Recalled',
		'13' => 'Active, but not sold separately',
		'15' => 'Recalled',
		'16' => 'Temporarily withdrawn from sale',
		'17' => 'Permanently withdrawn from sale',
		'18' => 'Active, but not sold as set',
	];

	/**
	 * Code List 64 for fr
	 *
	 * @var array
	 * @see https://ns.editeur.org/onix/fr/64
	 */
	protected static $fr = [
		'00' => 'Non spécifié',
		'01' => 'Annulé',
		'02' => 'À paraître',
		'03' => 'Reporté sans date',
		'04' => 'Actif',
		'05' => 'N’est plus à notre catalogue',
		'06' => 'En rupture de stock sans date',
		'07' => 'Épuisé',
		'08' => 'Inactif',
		'09' => 'Inconnu',
		'10' => 'Soldé',
		'11' => 'Retiré de la vente',
		'12' => 'Rappelé',
		'13' => 'Actif, mais non vendu séparément',
		'15' => 'Rappelé',
		'16' => 'Retiré momentanément de la vente',
		'17' => 'Retiré définitivement de la vente',
		'18' => 'Actif, mais non vendu comme un ensemble',
	];

	/**
	 * Code List 64 for it
	 *
	 * @var array
	 * @see https://ns.editeur.org/onix/it/64
	 */
	protected static $it = [
		'00' => 'Non specificato',
		'01' => 'Cancellato',
		'02' => 'Di prossima pubblicazione',
		'03' => 'Rinviato a data da destinarsi',
		'04' => 'Attivo',
		'05' => 'Proprietà trasferita',
		'06' => 'Non disponibile a tempo indeterminato',
		'07' => 'Fuori catalogo',
		'08' => 'Inattivo',
		'09' => 'Sconosciuto',
		'10' => 'Passato al mercato remainder',
		'11' => 'Ritirato dal commercio',
		'12' => 'Richiamato',
		'13' => 'Attivo, ma non venduto separatamente',
		'15' => 'Richiamato',
		'16' => 'Temporaneamente ritirato dal commercio',
		'17' => 'Ritirato dalla vendita definitivamente',
		'18' => 'Attivo, ma non venduto come insieme',
	];

	/**
	 * Code List 64 for nb
	 *
	 * @var array
	 * @see https://ns.editeur.org/onix/nb/64
	 */
	protected static $nb = [
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
		'12' => 'Recalled',
		'13' => 'Active, but not sold separately',
		'15' => 'Recalled',
		'16' => 'Temporarily withdrawn from sale',
		'17' => 'Permanently withdrawn from sale',
		'18' => 'Active, but not sold as set',
	];

	/**
	 * Code List 64 for tr
	 *
	 * @var array
	 * @see https://ns.editeur.org/onix/tr/64
	 */
	protected static $tr = [
		'00' => 'Belirtilmemiş',
		'01' => 'İptal edildi',
		'02' => 'Yakında',
		'03' => 'Süresiz ertelendi',
		'04' => 'Etkin',
		'05' => 'Artık bizim ürünümüz değil',
		'06' => 'Süresiz olarak stokta yok',
		'07' => 'Tükendi',
		'08' => 'Etkin değil',
		'09' => 'Bilinmeyen',
		'10' => 'Kelepire verildi',
		'11' => 'Satıştan çekildi',
		'12' => 'Geri çağırıldı',
		'13' => 'Aktif, ancak ayrı olarak satılmıyor',
		'15' => 'Geri çağırıldı',
		'16' => 'Geçici olarak satıştan çekildi',
		'17' => 'Kalıcı olarak satıştan çekildi',
		'18' => 'Active, but not sold as set',
	];
}
