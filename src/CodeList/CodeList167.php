<?php

namespace Ribal\Onix\CodeList;

/**
 * ONIX Code List 167
 *
 * Used with <PriceConditionType> <x463>
 *
 * @see https://ns.editeur.org/onix/en/167
 */
class CodeList167 extends CodeList implements CodeListInterface
{
	/**
	 * Code List 167 for en
	 *
	 * @var array
	 * @see https://ns.editeur.org/onix/en/167
	 */
	protected static $en = [
		'00' => 'No conditions',
		'01' => 'Includes updates',
		'02' => 'Must also purchase updates',
		'03' => 'Updates available',
		'04' => 'Linked subsequent purchase price',
		'05' => 'Linked prior purchase price',
		'06' => 'Linked price',
		'07' => 'Auto-renewing',
		'10' => 'Rental duration',
		'11' => 'Rental to purchase',
		'12' => 'Rental extension',
	];

	/**
	 * Code List 167 for es
	 *
	 * @var array
	 * @see https://ns.editeur.org/onix/es/167
	 */
	protected static $es = [
		'00' => 'Sin condiciones',
		'01' => 'Incluye actualizaciones',
		'02' => 'Debe comprar también las actualizaciones',
		'03' => 'Actualizaciones disponibles',
		'04' => 'Precio condicionado a una compra adicional',
		'05' => 'Dependiente de compra previa',
		'06' => 'Precio encadenado',
		'07' => 'Renovación automática',
		'10' => 'Duración del alquiler',
		'11' => 'De alquiler a compra',
		'12' => 'Ampliación de alquiler',
	];

	/**
	 * Code List 167 for de
	 *
	 * @var array
	 * @see https://ns.editeur.org/onix/de/167
	 */
	protected static $de = [
		'00' => 'No conditions',
		'01' => 'Includes updates',
		'02' => 'Must also purchase updates',
		'03' => 'Updates available',
		'04' => 'Linked subsequent purchase price',
		'05' => 'Linked prior purchase price',
		'06' => 'Linked price',
		'07' => 'Auto-renewing',
		'10' => 'Rental duration',
		'11' => 'Rental to purchase',
		'12' => 'Rental extension',
	];

	/**
	 * Code List 167 for fr
	 *
	 * @var array
	 * @see https://ns.editeur.org/onix/fr/167
	 */
	protected static $fr = [
		'00' => 'Aucune condition',
		'01' => 'Inclut les mises à jour',
		'02' => 'Doit aussi acheter les mises à jour',
		'03' => 'Mises à jour disponibles',
		'04' => 'Prix lié à un achat ultérieur',
		'05' => 'Prix lié à un achat',
		'06' => 'Prix lié',
		'07' => 'Auto-renewing',
		'10' => 'Durée de location',
		'11' => 'Location avant achat',
		'12' => 'Prolongation de location',
	];

	/**
	 * Code List 167 for it
	 *
	 * @var array
	 * @see https://ns.editeur.org/onix/it/167
	 */
	protected static $it = [
		'00' => 'Senza condizioni',
		'01' => 'Include gli aggiornamenti',
		'02' => 'Con obbligo di acquisto di aggiornamenti',
		'03' => 'Disponibilità di aggiornamenti',
		'04' => 'Prezzo dell’acquisto successivo collegato',
		'05' => 'Prezzo collegato a un acquisto precedente',
		'06' => 'Prezzo collegato',
		'07' => 'Rinnovo automatico',
		'10' => 'Durata del noleggio',
		'11' => 'Acquisto di prodotto noleggiato',
		'12' => 'Estensione del noleggio',
	];

	/**
	 * Code List 167 for nb
	 *
	 * @var array
	 * @see https://ns.editeur.org/onix/nb/167
	 */
	protected static $nb = [
		'00' => 'Ingen betingelser',
		'01' => 'Inkluderer oppdateringer',
		'02' => 'Man må også kjøpe oppdateringer',
		'03' => 'Oppdateringer er tilgjengelig',
		'04' => 'Lenket pris - påfølgende kjøp',
		'05' => 'Lenket pris - tidligere kjøp',
		'06' => 'Lenket pris',
		'07' => 'Automatisk fornyelse',
		'10' => 'Utleieperiode',
		'11' => 'Utleie til kjøp',
		'12' => 'Forlengelse av utleie',
	];

	/**
	 * Code List 167 for tr
	 *
	 * @var array
	 * @see https://ns.editeur.org/onix/tr/167
	 */
	protected static $tr = [
		'00' => 'Koşulsuz',
		'01' => 'Güncellemeler dahil',
		'02' => 'Güncellemeler ayrıca satın alınmalı',
		'03' => 'Güncellemeler mevcut',
		'04' => 'Linked subsequent purchase price',
		'05' => 'Önceki alıma bağlı fiyat',
		'06' => 'Bağlantılı fiyat',
		'07' => 'Auto-renewing',
		'10' => 'Kiralama süresi',
		'11' => 'Satın almaya yönelik kiralama',
		'12' => 'Kiralama uzatma',
	];
}
