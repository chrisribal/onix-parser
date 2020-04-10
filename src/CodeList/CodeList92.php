<?php

namespace Ribal\Onix\CodeList;

/**
 * ONIX Code List 92
 *
 * Used with    • <AgentIDType> <j400>    • <SupplierIDType> <j345>    • <LocationIDType> <j377>
 *
 * @see https://ns.editeur.org/onix/en/92
 */
class CodeList92 extends CodeList implements CodeListInterface
{
	/**
	 * Code List 92 for en
	 *
	 * @var array
	 * @see https://ns.editeur.org/onix/en/92
	 */
	protected static $en = [
		'01' => 'Proprietary',
		'02' => 'Proprietary',
		'04' => 'Börsenverein Verkehrsnummer',
		'05' => 'German ISBN Agency publisher identifier',
		'06' => 'GLN',
		'07' => 'SAN',
		'12' => 'Distributeurscode Boekenbank',
		'13' => 'Fondscode Boekenbank',
		'23' => 'VAT Identity Number',
	];

	/**
	 * Code List 92 for es
	 *
	 * @var array
	 * @see https://ns.editeur.org/onix/es/92
	 */
	protected static $es = [
		'01' => 'Propio / Privado',
		'02' => 'Propio / Privado',
		'04' => 'Börsenverein Verkehrsnummer',
		'05' => 'German ISBN Agency publisher identifier',
		'06' => 'GLN',
		'07' => 'SAN',
		'12' => 'Distributeurscode Boekenbank',
		'13' => 'Fondscode Boekenbank',
		'23' => 'Número de identificación fiscal (NIF) europeo («VAT Id number»)',
	];

	/**
	 * Code List 92 for de
	 *
	 * @var array
	 * @see https://ns.editeur.org/onix/de/92
	 */
	protected static $de = [
		'01' => 'Proprietary',
		'02' => 'Proprietary',
		'04' => 'Börsenverein Verkehrsnummer',
		'05' => 'German ISBN Agency publisher identifier',
		'06' => 'GLN',
		'07' => 'SAN',
		'12' => 'Distributeurscode Boekenbank',
		'13' => 'Fondscode Boekenbank',
		'23' => 'VAT Identity Number',
	];

	/**
	 * Code List 92 for fr
	 *
	 * @var array
	 * @see https://ns.editeur.org/onix/fr/92
	 */
	protected static $fr = [
		'01' => 'Propriétaire',
		'02' => 'Propriétaire',
		'04' => 'Börsenverein Verkehrsnummer',
		'05' => 'Identifiant éditeur de l’Agence ISBN allemande',
		'06' => 'GLN',
		'07' => 'SAN',
		'12' => 'Distributeurscode Boekenbank',
		'13' => 'Fondscode Boekenbank',
		'23' => 'Numéro d’identification TVA',
	];

	/**
	 * Code List 92 for it
	 *
	 * @var array
	 * @see https://ns.editeur.org/onix/it/92
	 */
	protected static $it = [
		'01' => 'Proprietario',
		'02' => 'Proprietario',
		'04' => 'Börsenverein Verkehrsnummer',
		'05' => 'Codice identificativo attribuito dall’Agenzia ISBN tedesca',
		'06' => 'GLN',
		'07' => 'SAN',
		'12' => 'Distributeurscode Boekenbank',
		'13' => 'Fondscode Boekenbank',
		'23' => 'Numero di partita IVA',
	];

	/**
	 * Code List 92 for nb
	 *
	 * @var array
	 * @see https://ns.editeur.org/onix/nb/92
	 */
	protected static $nb = [
		'01' => 'Proprietær',
		'02' => 'Proprietær',
		'04' => 'Börsenverein Verkehrsnummer',
		'05' => 'German ISBN Agency publisher identifier',
		'06' => 'GLN',
		'07' => 'SAN',
		'12' => 'Distributeurscode Boekenbank',
		'13' => 'Fondscode Boekenbank',
		'23' => 'VAT Identity Number',
	];

	/**
	 * Code List 92 for tr
	 *
	 * @var array
	 * @see https://ns.editeur.org/onix/tr/92
	 */
	protected static $tr = [
		'01' => 'Özel',
		'02' => 'Özel',
		'04' => 'Börsenverein Verkehrsnummer',
		'05' => 'Alman ISBN Kurumu yayımcı tanımlayıcı',
		'06' => 'GLN',
		'07' => 'SAN',
		'12' => 'Distributeurscode Boekenbank',
		'13' => 'Fondscode Boekenbank',
		'23' => 'KDV Kimlik Numarası',
	];
}
