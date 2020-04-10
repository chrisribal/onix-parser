<?php

namespace Ribal\Onix\CodeList;

/**
 * ONIX Code List 93
 *
 * Used with <SupplierRole> <j292>
 *
 * @see https://ns.editeur.org/onix/en/93
 */
class CodeList93 extends CodeList implements CodeListInterface
{
	/**
	 * Code List 93 for en
	 *
	 * @var array
	 * @see https://ns.editeur.org/onix/en/93
	 */
	protected static $en = [
		'00' => 'Unspecified',
		'01' => 'Publisher to retailers',
		'02' => 'Publisher’s exclusive distributor to retailers',
		'03' => 'Publisher’s non-exclusive distributor to retailers',
		'04' => 'Wholesaler',
		'05' => 'Sales agent',
		'06' => 'Publisher’s distributor to retailers',
		'07' => 'POD supplier',
		'08' => 'Retailer',
		'09' => 'Publisher to end-customers',
		'10' => 'Exclusive distributor to end-customers',
		'11' => 'Non-exclusive distributor to end-customers',
		'12' => 'Distributor to end-customers',
		'13' => 'Exclusive distributor to retailers and end-customers',
		'14' => 'Non-exclusive distributor to retailers and end-customers',
		'15' => 'Distributor to retailers and end-customers',
	];

	/**
	 * Code List 93 for es
	 *
	 * @var array
	 * @see https://ns.editeur.org/onix/es/93
	 */
	protected static $es = [
		'00' => 'No especificado',
		'01' => 'Editorial a puntos de venta finales',
		'02' => 'Distribuidor exclusivo de la editorial para puntos de venta finales',
		'03' => 'Distribuidor no exclusivo de la editorial para puntos de venta finales',
		'04' => 'Mayorista',
		'05' => 'Agente de ventas',
		'06' => 'Distribuidor de la editorial',
		'07' => 'Proveedor POD (IBD – Impresión bajo demanda)',
		'08' => 'Punto de venta final / Vendedor minorista («Retailer»)',
		'09' => 'Editorial directamente a usuarios finales',
		'10' => 'Distribuidor exclusivo para usuarios finales',
		'11' => 'Distribuidor no exclusivo para usuarios finales',
		'12' => 'Distribuidor para usuarios finales',
		'13' => 'Distribuidor exclusivo para usuarios finales',
		'14' => 'Distribuidor no exclusivo para usuarios finales',
		'15' => 'Distribuidor para usuarios finales',
	];

	/**
	 * Code List 93 for de
	 *
	 * @var array
	 * @see https://ns.editeur.org/onix/de/93
	 */
	protected static $de = [
		'00' => 'Nicht spezifiziert',
		'01' => 'Verlag an Einzelhändler',
		'02' => 'Exklusiver Distributor des Verlags an Einzelhändler',
		'03' => 'Nicht exklusiver Distributor des Verlags an Einzelhändler',
		'04' => 'Großhändler',
		'05' => 'Handelsvertreter',
		'06' => 'Verlagshändler an Einzelhändler',
		'07' => 'POD-Lieferant',
		'08' => 'Einzelhändler',
		'09' => 'Publisher an Endkunden',
		'10' => 'Exklusiver Distributor an Endkunden',
		'11' => 'Nicht exklusiver Distributor an Endkunden',
		'12' => 'Händler an Endkunden',
		'13' => 'Exklusiver Distributor für Einzelhändler und Endkunden',
		'14' => 'Nicht exklusiver Distributor für Einzelhändler und Endkunden',
		'15' => 'Händler an Einzelhändler und Endkunden',
	];

	/**
	 * Code List 93 for fr
	 *
	 * @var array
	 * @see https://ns.editeur.org/onix/fr/93
	 */
	protected static $fr = [
		'00' => 'Non spécifié',
		'01' => 'Editeur, fournisseur des détaillants',
		'02' => 'Distributeur exclusif de l’éditeur auprès des détaillants',
		'03' => 'Distributeur non exclusif de l’éditeur auprès des détaillants',
		'04' => 'Grossiste',
		'05' => 'Diffuseur',
		'06' => 'Distributeur de l’éditeur auprès des détaillants',
		'07' => 'Fournisseur POD',
		'08' => 'Détaillant',
		'09' => 'Editeur fournissant des clients finaux',
		'10' => 'Distributeur exclusif pour les clients finaux',
		'11' => 'Distributeur non exclusif pour les clients finaux',
		'12' => 'Distributeur pour les clients finaux',
		'13' => 'Distributeur exclusif pour les détaillants et les clients finaux',
		'14' => 'Distributeur non-exclusif pour les détaillants et les clients finaux',
		'15' => 'Distributeur pour les détaillants et les clients finaux',
	];

	/**
	 * Code List 93 for it
	 *
	 * @var array
	 * @see https://ns.editeur.org/onix/it/93
	 */
	protected static $it = [
		'00' => 'Non specificato',
		'01' => 'Editore ai rivenditori',
		'02' => 'Distributore esclusivo dell’editore ai rivenditori',
		'03' => 'Distributore non esclusivo dell’editore ai rivenditori',
		'04' => 'Grossista',
		'05' => 'Agente',
		'06' => 'Distributore dell’editore ai rivenditori',
		'07' => 'Fornitore di prodotti a richiesta',
		'08' => 'Rivenditore',
		'09' => 'Editore ai consumatori finali',
		'10' => 'Distributore esclusivo ai consumatori finali',
		'11' => 'Distributore non esclusivo ai consumatori finali',
		'12' => 'Distributore ai consumatori finali',
		'13' => 'Distributore esclusivo ai rivenditori e ai consumatori finali',
		'14' => 'Distributore non esclusivo ai rivenditori e ai consumatori finali',
		'15' => 'Distributore ai rivenditori e ai consumatori finali',
	];

	/**
	 * Code List 93 for nb
	 *
	 * @var array
	 * @see https://ns.editeur.org/onix/nb/93
	 */
	protected static $nb = [
		'00' => 'Uspesifisert',
		'01' => 'Forlag',
		'02' => 'Forlagets enedistributør',
		'03' => 'Distributør for forlaget',
		'04' => 'Grossist',
		'05' => 'Salgsagent',
		'06' => 'Forlagets distributør',
		'07' => 'POD-leverandør',
		'08' => 'Retailer',
		'09' => 'Forlag til sluttkunder',
		'10' => 'Eksklusiv distributør til sluttkunder',
		'11' => 'Ikke-eksklusiv distributør til sluttkunder',
		'12' => 'Distributør til sluttkunder',
		'13' => 'Eksklusiv distributør til forhandlere og sluttkunder',
		'14' => 'Ikke-eksklusiv distributør til forhandlere og sluttkunder',
		'15' => 'Distributør til forhandlere og sluttkunder',
	];

	/**
	 * Code List 93 for tr
	 *
	 * @var array
	 * @see https://ns.editeur.org/onix/tr/93
	 */
	protected static $tr = [
		'00' => 'Belirtilmemiş',
		'01' => 'Yayımcıdan perakendeciye',
		'02' => 'Yayımcının perakendecilere münhasır dağıtımcısı',
		'03' => 'Yayımcının perakendecilere münhasır olmayan dağıtımcısı',
		'04' => 'Dağıtımcı',
		'05' => 'Satış acentesi',
		'06' => 'Yayımcının perakendecilere dağıtımcısı',
		'07' => 'TGB tedarikçisi',
		'08' => 'Perakendeci',
		'09' => 'Yayımcıdan son tüketiciye',
		'10' => 'Son tüketiciye münhasır dağıtımcı',
		'11' => 'Son tüketiciye münhasır olmayan dağıtımcı',
		'12' => 'Dağıtımcıdan son tüketiciye',
		'13' => 'Perakende satış noktalarına ve son kullanıcılara yönelik münhasır dağıtımcı',
		'14' => 'Perakende satış noktalarına ve son kullanıcılara yönelik münhasır olmayan dağıtımcı',
		'15' => 'Perakende satış noktalarına ve son kullanıcılara yönelik dağıtımcı',
	];
}
