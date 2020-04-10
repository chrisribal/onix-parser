<?php

namespace Ribal\Onix\CodeList;

/**
 * ONIX Code List 3
 *
 * Used with    • <RecordSourceType> <a194>    • @sourcetype
 *
 * @see https://ns.editeur.org/onix/en/3
 */
class CodeList3 extends CodeList implements CodeListInterface
{
	/**
	 * Code List 3 for en
	 *
	 * @var array
	 * @see https://ns.editeur.org/onix/en/3
	 */
	protected static $en = [
		'00' => 'Unspecified',
		'01' => 'Publisher',
		'02' => 'Publisher’s distributor',
		'03' => 'Wholesaler',
		'04' => 'Bibliographic agency',
		'05' => 'Library bookseller',
		'06' => 'Publisher’s sales agent',
		'07' => 'Publisher’s conversion service provider',
		'08' => 'Conversion service provider',
		'09' => 'ISBN Registration Agency',
		'10' => 'ISTC Registration Agency',
		'11' => 'Retail bookseller',
		'12' => 'Education bookseller',
		'13' => 'Library',
	];

	/**
	 * Code List 3 for es
	 *
	 * @var array
	 * @see https://ns.editeur.org/onix/es/3
	 */
	protected static $es = [
		'00' => 'No especificado',
		'01' => 'Editorial',
		'02' => 'Distribuidor de la editorial',
		'03' => 'Mayorista',
		'04' => 'Agencia bibliográfica',
		'05' => 'Librero proveedor de biblioteca',
		'06' => 'Agente de ventas de la editorial',
		'07' => 'Proveedor de servicios de conversión de la editorial',
		'08' => 'Proveedor de servicios de conversión',
		'09' => 'Agencia del ISBN',
		'10' => 'Agencia de registro del ISTC',
		'11' => 'Librería general',
		'12' => 'Librería para el sector educativo',
		'13' => 'Biblioteca',
	];

	/**
	 * Code List 3 for de
	 *
	 * @var array
	 * @see https://ns.editeur.org/onix/de/3
	 */
	protected static $de = [
		'00' => 'Unspecified',
		'01' => 'Publisher',
		'02' => 'Publisher’s distributor',
		'03' => 'Wholesaler',
		'04' => 'Bibliographic agency',
		'05' => 'Library bookseller',
		'06' => 'Publisher’s sales agent',
		'07' => 'Publisher’s conversion service provider',
		'08' => 'Conversion service provider',
		'09' => 'ISBN Registration Agency',
		'10' => 'ISTC Registration Agency',
		'11' => 'Retail bookseller',
		'12' => 'Education bookseller',
		'13' => 'Library',
	];

	/**
	 * Code List 3 for fr
	 *
	 * @var array
	 * @see https://ns.editeur.org/onix/fr/3
	 */
	protected static $fr = [
		'00' => 'Non spécifié',
		'01' => 'Editeur',
		'02' => 'Distributeur',
		'03' => 'Grossiste',
		'04' => 'Agence bibliographique',
		'05' => 'Commissionnaire pour bibliothèque',
		'06' => 'Diffuseur',
		'07' => 'Fournisseur de services de conversion de l’éditeur',
		'08' => 'Fournisseur de services de conversion',
		'09' => 'Agence d’enregistrement ISBN',
		'10' => 'Agence d’enregistrement ISTC',
		'11' => 'Librairie de vente au détail',
		'12' => 'Librairie de vente aux établissements d’enseignement',
		'13' => 'Bibliothèque',
	];

	/**
	 * Code List 3 for it
	 *
	 * @var array
	 * @see https://ns.editeur.org/onix/it/3
	 */
	protected static $it = [
		'00' => 'Non specificata',
		'01' => 'Editore',
		'02' => 'Distributore',
		'03' => 'Grossista',
		'04' => 'Agenzia bibliografica',
		'05' => 'Libreria commissionaria',
		'06' => 'Agente di vendita dell’editore',
		'07' => 'Fornitore di servizi di conversione dell’editore',
		'08' => 'Fornitore di servizi di conversione',
		'09' => 'Agenzia di registrazione del codice ISBN',
		'10' => 'Agenzia di registrazione del codice ISTC',
		'11' => 'Libreria al dettaglio',
		'12' => 'Libreria scolastica/accademica',
		'13' => 'Biblioteca',
	];

	/**
	 * Code List 3 for nb
	 *
	 * @var array
	 * @see https://ns.editeur.org/onix/nb/3
	 */
	protected static $nb = [
		'00' => 'Unspecified',
		'01' => 'Publisher',
		'02' => 'Publisher’s distributor',
		'03' => 'Wholesaler',
		'04' => 'Bibliographic agency',
		'05' => 'Library bookseller',
		'06' => 'Publisher’s sales agent',
		'07' => 'Publisher’s conversion service provider',
		'08' => 'Conversion service provider',
		'09' => 'ISBN Registration Agency',
		'10' => 'ISTC Registration Agency',
		'11' => 'Retail bookseller',
		'12' => 'Education bookseller',
		'13' => 'Library',
	];

	/**
	 * Code List 3 for tr
	 *
	 * @var array
	 * @see https://ns.editeur.org/onix/tr/3
	 */
	protected static $tr = [
		'00' => 'Belirtilmemiş',
		'01' => 'Yayımcı',
		'02' => 'Yayımcının bayisi',
		'03' => 'Dağıtımcı',
		'04' => 'Kütüphanecilik kurumu',
		'05' => 'Kitabevi',
		'06' => 'Yayımcının satış acentesi',
		'07' => 'Yayımcının dönüştürme hizmeti sunucusu',
		'08' => 'Dönüştürme hizmeti sinucusu',
		'09' => 'ISBN Kayıt Kurumu',
		'10' => 'ISTC Kayıt Kurumu',
		'11' => 'Perakende kitapçı',
		'12' => 'Eğitim kitapçısı',
		'13' => 'Kütüphane',
	];
}
