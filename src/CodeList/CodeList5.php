<?php

namespace Ribal\Onix\CodeList;

/**
 * ONIX Code List 5
 *
 * Used with <ProductIDType> <b221>
 *
 * @see https://ns.editeur.org/onix/en/5
 */
class CodeList5 extends CodeList implements CodeListInterface
{
	/**
	 * Code List 5 for en
	 *
	 * @var array
	 * @see https://ns.editeur.org/onix/en/5
	 */
	protected static $en = [
		'01' => 'Proprietary',
		'02' => 'ISBN-10',
		'03' => 'GTIN-13',
		'04' => 'UPC',
		'05' => 'ISMN-10',
		'06' => 'DOI',
		'13' => 'LCCN',
		'14' => 'GTIN-14',
		'15' => 'ISBN-13',
		'17' => 'Legal deposit number',
		'22' => 'URN',
		'23' => 'OCLC number',
		'24' => 'Co-publisher’s ISBN-13',
		'25' => 'ISMN-13',
		'26' => 'ISBN-A',
		'27' => 'JP e-code',
		'28' => 'OLCC number',
		'29' => 'JP Magazine ID',
		'30' => 'UPC12+5',
		'31' => 'BNF Control number',
		'35' => 'ARK',
	];

	/**
	 * Code List 5 for es
	 *
	 * @var array
	 * @see https://ns.editeur.org/onix/es/5
	 */
	protected static $es = [
		'01' => 'Propio / Privado',
		'02' => 'ISBN-10',
		'03' => 'GTIN-13',
		'04' => 'UPC',
		'05' => 'ISMN-10',
		'06' => 'DOI',
		'13' => 'LCCN',
		'14' => 'GTIN-14',
		'15' => 'ISBN-13',
		'17' => 'Depósito Legal',
		'22' => 'URN',
		'23' => 'Número OCLC',
		'24' => 'ISBN-13 asignado por una coeditorial',
		'25' => 'ISMN-13',
		'26' => 'ISBN-A',
		'27' => 'Código JP e-code',
		'28' => 'Número de OLCC',
		'29' => 'Identificador JP Magazine',
		'30' => 'UPC12+5',
		'31' => 'Número de control de la BNF',
		'35' => 'ARK',
	];

	/**
	 * Code List 5 for de
	 *
	 * @var array
	 * @see https://ns.editeur.org/onix/de/5
	 */
	protected static $de = [
		'01' => 'Proprietary',
		'02' => 'ISBN-10',
		'03' => 'GTIN-13',
		'04' => 'UPC',
		'05' => 'ISMN-10',
		'06' => 'DOI',
		'13' => 'LCCN',
		'14' => 'GTIN-14',
		'15' => 'ISBN-13',
		'17' => 'Legal deposit number',
		'22' => 'URN',
		'23' => 'OCLC number',
		'24' => 'Co-publisher’s ISBN-13',
		'25' => 'ISMN-13',
		'26' => 'ISBN-A',
		'27' => 'JP e-code',
		'28' => 'OLCC number',
		'29' => 'JP Magazine ID',
		'30' => 'UPC12+5',
		'31' => 'BNF Control number',
		'35' => 'ARK',
	];

	/**
	 * Code List 5 for fr
	 *
	 * @var array
	 * @see https://ns.editeur.org/onix/fr/5
	 */
	protected static $fr = [
		'01' => 'Propriétaire',
		'02' => 'ISBN-10',
		'03' => 'GTIN-13',
		'04' => 'UPC',
		'05' => 'ISMN-10',
		'06' => 'DOI',
		'13' => 'LCCN',
		'14' => 'GTIN-14',
		'15' => 'ISBN-13',
		'17' => 'Numéro de dépôt légal',
		'22' => 'URN',
		'23' => 'Numéro OCLC',
		'24' => 'Numéro ISBN-13 du coéditeur',
		'25' => 'ISMN-13',
		'26' => 'ISBN-A',
		'27' => 'JP e-code',
		'28' => 'Numéro OLCC',
		'29' => 'JP Magazine ID',
		'30' => 'UPC12+5',
		'31' => 'Numéro BnF',
		'35' => 'ARK',
	];

	/**
	 * Code List 5 for it
	 *
	 * @var array
	 * @see https://ns.editeur.org/onix/it/5
	 */
	protected static $it = [
		'01' => 'Proprietario',
		'02' => 'ISBN-10',
		'03' => 'GTIN-13',
		'04' => 'UPC',
		'05' => 'ISMN-10',
		'06' => 'DOI',
		'13' => 'LCCN',
		'14' => 'GTIN-14',
		'15' => 'ISBN-13',
		'17' => 'Numero di deposito legale',
		'22' => 'URN',
		'23' => 'Numero OCLC',
		'24' => 'Codice ISBN-13 del co-editore',
		'25' => 'ISMN-13',
		'26' => 'ISBN-A',
		'27' => 'Codice elettronico JP',
		'28' => 'Numero OLCC',
		'29' => 'JP Magazine ID',
		'30' => 'UPC12+5',
		'31' => 'Numero di controllo BNF',
		'35' => 'ARK',
	];

	/**
	 * Code List 5 for nb
	 *
	 * @var array
	 * @see https://ns.editeur.org/onix/nb/5
	 */
	protected static $nb = [
		'01' => 'Proprietær',
		'02' => 'ISBN-10',
		'03' => 'GTIN-13',
		'04' => 'UPC',
		'05' => 'ISMN',
		'06' => 'DOI',
		'13' => 'LCCN',
		'14' => 'GTIN-14',
		'15' => 'ISBN-13',
		'17' => 'Legal deposit number',
		'22' => 'URN',
		'23' => 'OCLC number',
		'24' => 'Medutgivers ISBN-13',
		'25' => 'ISMN-13',
		'26' => 'ISBN-A',
		'27' => 'JP e-code',
		'28' => 'OLCC nummer',
		'29' => 'JP Magazine ID',
		'30' => 'UPC 12+5',
		'31' => 'BNF control number',
		'35' => 'ARK',
	];

	/**
	 * Code List 5 for tr
	 *
	 * @var array
	 * @see https://ns.editeur.org/onix/tr/5
	 */
	protected static $tr = [
		'01' => 'Özel',
		'02' => 'ISBN-10',
		'03' => 'GTIN-13',
		'04' => 'UPC',
		'05' => 'ISMN-10',
		'06' => 'DOI',
		'13' => 'LCCN',
		'14' => 'GTIN-14',
		'15' => 'ISBN-13',
		'17' => 'Derleme nüshası numarası',
		'22' => 'URN',
		'23' => 'OCLC numarası',
		'24' => 'Ortak yayımcı ISBN-13’ü',
		'25' => 'ISMN-13',
		'26' => 'ISBN-A',
		'27' => 'JP e-kodu',
		'28' => 'OLCC numarası',
		'29' => 'JP Dergi Tanımlayıcı',
		'30' => 'UPC12 + 5',
		'31' => 'BNF Control number',
		'35' => 'ARK',
	];
}
