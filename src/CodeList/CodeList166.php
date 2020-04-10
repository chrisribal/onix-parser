<?php

namespace Ribal\Onix\CodeList;

/**
 * ONIX Code List 166
 *
 * Used with <SupplyDateRole> <x491>
 *
 * @see https://ns.editeur.org/onix/en/166
 */
class CodeList166 extends CodeList implements CodeListInterface
{
	/**
	 * Code List 166 for en
	 *
	 * @var array
	 * @see https://ns.editeur.org/onix/en/166
	 */
	protected static $en = [
		'02' => 'Sales embargo date',
		'08' => 'Expected availability date',
		'18' => 'Last date for returns',
		'25' => 'Reservation order deadline',
		'29' => 'Last redownload date',
		'30' => 'Last TPM date',
		'34' => 'Expected warehouse date',
		'50' => 'New supplier start date',
		'51' => 'Supplier end date',
	];

	/**
	 * Code List 166 for es
	 *
	 * @var array
	 * @see https://ns.editeur.org/onix/es/166
	 */
	protected static $es = [
		'02' => 'Fecha de embargo de ventas',
		'08' => 'Fecha esperada de disponibilidad',
		'18' => 'Última fecha para devoluciones',
		'25' => 'Fecha límite para pedidos de reserva',
		'29' => 'Última fecha para descarga',
		'30' => 'Última fecha de uso (para productos con DRM)',
		'34' => 'Fecha esperada en almacén',
		'50' => 'Fecha de comienzo del nuevo proveedor',
		'51' => 'Fecha de fin del proveedor',
	];

	/**
	 * Code List 166 for de
	 *
	 * @var array
	 * @see https://ns.editeur.org/onix/de/166
	 */
	protected static $de = [
		'02' => 'Sales embargo date',
		'08' => 'Expected availability date',
		'18' => 'Last date for returns',
		'25' => 'Reservation order deadline',
		'29' => 'Last redownload date',
		'30' => 'Last TPM date',
		'34' => 'Expected warehouse date',
		'50' => 'New supplier start date',
		'51' => 'Supplier end date',
	];

	/**
	 * Code List 166 for fr
	 *
	 * @var array
	 * @see https://ns.editeur.org/onix/fr/166
	 */
	protected static $fr = [
		'02' => 'Date d’embargo pour la vente',
		'08' => 'Date de disponibilité prévisionnelle',
		'18' => 'Dernière date pour les retours',
		'25' => 'Date limite de réservation par bon de commande',
		'29' => 'Date limite de re-téléchargement',
		'30' => 'Date de la dernière maintenance productive totale (TPM)',
		'34' => 'Date prévisonnelle de disponibilité à l’entrepôt',
		'50' => 'Date de début pour le nouveau fournisseur',
		'51' => 'Date limite du fournisseur',
	];

	/**
	 * Code List 166 for it
	 *
	 * @var array
	 * @see https://ns.editeur.org/onix/it/166
	 */
	protected static $it = [
		'02' => 'Data di embargo sulle vendite',
		'08' => 'Data di disponibilità prevista',
		'18' => 'Ultima data per i resi',
		'25' => 'Scadenza prenotazioni',
		'29' => 'Ultima data per il download',
		'30' => 'Ultima data per il DRM',
		'34' => 'Data prevista di consegna a magazzino',
		'50' => 'Data di inizio del nuovo fornitore',
		'51' => 'Data di fine del fornitore',
	];

	/**
	 * Code List 166 for nb
	 *
	 * @var array
	 * @see https://ns.editeur.org/onix/nb/166
	 */
	protected static $nb = [
		'02' => 'Frigivelsesdato',
		'08' => 'Forventet tilgjengelighetsdato',
		'18' => 'Siste dato for retur',
		'25' => 'Tidsfrist for reservasjonsordre',
		'29' => 'Tidsfrist for nedlasting',
		'30' => 'Tidsfrist for teknisk support (TPM)',
		'34' => 'Forventet lagerdato',
		'50' => 'Dato for ny distributør',
		'51' => 'Sluttdato for distributør',
	];

	/**
	 * Code List 166 for tr
	 *
	 * @var array
	 * @see https://ns.editeur.org/onix/tr/166
	 */
	protected static $tr = [
		'02' => 'Kısıtlama tarihi',
		'08' => 'Beklenen temin tarihi',
		'18' => 'Son iade tarihi',
		'25' => 'Rezervasyon siparişi son tarihi',
		'29' => 'Son yeniden indirme tarihi',
		'30' => 'Son TPM (Teknik Koruma Önlem) tarihi',
		'34' => 'Expected warehouse date',
		'50' => 'Yeni tedarikçi başlangıç ​​tarihi',
		'51' => 'Tedarikçi bitiş tarihi',
	];
}
