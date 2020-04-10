<?php

namespace Ribal\Onix\CodeList;

/**
 * ONIX Code List 44
 *
 * Used with    • <NameIDType> <x415>    • <SenderIDType> <m379>    • <AddresseeIDType> <m380>    • <ImprintIDType> <x445>    • <PublisherIDType> <x447>    • <CopyrightOwnerIDType> <b392>    • <ProductContactIDType> <x483>    • <EventSponsorIDType> <x522>    • <ConferenceSponsorIDType> <b391>    • <RecordSourceIDType> <x311>    • <SupplyContactIDType> <x538>
 *
 * @see https://ns.editeur.org/onix/en/44
 */
class CodeList44 extends CodeList implements CodeListInterface
{
	/**
	 * Code List 44 for en
	 *
	 * @var array
	 * @see https://ns.editeur.org/onix/en/44
	 */
	protected static $en = [
		'01' => 'Proprietary',
		'02' => 'Proprietary',
		'03' => 'DNB publisher identifier',
		'04' => 'Börsenverein Verkehrsnummer',
		'05' => 'German ISBN Agency publisher identifier',
		'06' => 'GLN',
		'07' => 'SAN',
		'08' => 'MARC organization code',
		'10' => 'Centraal Boekhuis Relatie ID',
		'13' => 'Fondscode Boekenbank',
		'15' => 'Y-tunnus',
		'16' => 'ISNI',
		'17' => 'PND',
		'18' => 'LCCN',
		'19' => 'Japanese Publisher identifier',
		'20' => 'GKD',
		'21' => 'ORCID',
		'22' => 'GAPP Publisher Identifier',
		'23' => 'VAT Identity Number',
		'24' => 'JP Distribution Identifier',
		'25' => 'GND',
		'26' => 'DUNS',
		'27' => 'Ringgold ID',
		'28' => 'Identifiant Editeur Electre',
		'29' => 'EIDR Party DOI',
		'30' => 'Identifiant Marque Electre',
		'31' => 'VIAF ID',
		'32' => 'FundRef DOI',
		'33' => 'BNE CN',
		'34' => 'BNF Control Number',
		'35' => 'ARK',
		'36' => 'Nasjonalt autoritetsregister',
		'37' => 'GRID',
	];

	/**
	 * Code List 44 for es
	 *
	 * @var array
	 * @see https://ns.editeur.org/onix/es/44
	 */
	protected static $es = [
		'01' => 'Propio / Privado',
		'02' => 'Propio / Privado',
		'03' => 'Identificador de editorial de la Deutsche Bibliothek',
		'04' => 'Börsenverein Verkehrsnummer',
		'05' => 'Identificador de editorial de la Agencia alemana del ISBN',
		'06' => 'GLN',
		'07' => 'SAN',
		'08' => 'Código MARC de organismo',
		'10' => 'Centraal Boekhuis Relatie ID',
		'13' => 'Fondscode Boekenbank',
		'15' => 'Y-tunnus',
		'16' => 'ISNI',
		'17' => 'PND',
		'18' => 'LCCN',
		'19' => 'Identificador japonés de editorial',
		'20' => 'GKD',
		'21' => 'ORCID',
		'22' => 'Identificador de editor GAPP',
		'23' => 'Número de identificación fiscal (NIF) europeo',
		'24' => 'Identificador de distribución en Japón',
		'25' => 'GND',
		'26' => 'DUNS',
		'27' => 'Ringgold ID',
		'28' => 'Identifiant Editeur Electre',
		'29' => 'Identificador EIDR',
		'30' => 'Identifiant Marque Electre',
		'31' => 'Identificador VIAF',
		'32' => 'Identificador FundRef',
		'33' => 'BNE CN',
		'34' => 'Número de control de la BNF',
		'35' => 'ARK',
		'36' => 'Nasjonalt autoritetsregister',
		'37' => 'GRID',
	];

	/**
	 * Code List 44 for de
	 *
	 * @var array
	 * @see https://ns.editeur.org/onix/de/44
	 */
	protected static $de = [
		'01' => 'Proprietary',
		'02' => 'Proprietary',
		'03' => 'DNB publisher identifier',
		'04' => 'Börsenverein Verkehrsnummer',
		'05' => 'German ISBN Agency publisher identifier',
		'06' => 'GLN',
		'07' => 'SAN',
		'08' => 'MARC organization code',
		'10' => 'Centraal Boekhuis Relatie ID',
		'13' => 'Fondscode Boekenbank',
		'15' => 'Y-tunnus',
		'16' => 'ISNI',
		'17' => 'PND',
		'18' => 'LCCN',
		'19' => 'Japanese Publisher identifier',
		'20' => 'GKD',
		'21' => 'ORCID',
		'22' => 'GAPP Publisher Identifier',
		'23' => 'VAT Identity Number',
		'24' => 'JP Distribution Identifier',
		'25' => 'GND',
		'26' => 'DUNS',
		'27' => 'Ringgold ID',
		'28' => 'Identifiant Editeur Electre',
		'29' => 'EIDR Party DOI',
		'30' => 'Identifiant Marque Electre',
		'31' => 'VIAF ID',
		'32' => 'FundRef DOI',
		'33' => 'BNE CN',
		'34' => 'BNF Control Number',
		'35' => 'ARK',
		'36' => 'Nasjonalt autoritetsregister',
		'37' => 'GRID',
	];

	/**
	 * Code List 44 for fr
	 *
	 * @var array
	 * @see https://ns.editeur.org/onix/fr/44
	 */
	protected static $fr = [
		'01' => 'Propriétaire',
		'02' => 'Propriétaire',
		'03' => 'Identifiant éditeur de la Bibliothèque nationale d’Allemagne',
		'04' => 'Börsenverein Verkehrsnummer',
		'05' => 'Identifiant éditeur de l’Agence ISBN allemande',
		'06' => 'GLN',
		'07' => 'SAN',
		'08' => 'MARC organization code',
		'10' => 'Centraal Boekhuis Relatie ID',
		'13' => 'Fondscode Boekenbank',
		'15' => 'Y-tunnus',
		'16' => 'ISNI',
		'17' => 'PND',
		'18' => 'LCCN',
		'19' => 'Identifiant éditeur japonais',
		'20' => 'GKD',
		'21' => 'ORCID',
		'22' => 'Identifiant éditeur GAPP',
		'23' => 'Numéro identifiant TVA',
		'24' => 'Identifiant de diffusion JP',
		'25' => 'GND',
		'26' => 'DUNS',
		'27' => 'Ringgold ID',
		'28' => 'Identifiant Editeur Electre',
		'29' => 'EIDR Party DOI',
		'30' => 'Identifiant Marque Electre',
		'31' => 'ID VIAF',
		'32' => 'FundRef ID',
		'33' => 'BNE CN',
		'34' => 'Numéro de contrôle BnF',
		'35' => 'ARK',
		'36' => 'Nasjonalt autoritetsregister',
		'37' => 'GRID',
	];

	/**
	 * Code List 44 for it
	 *
	 * @var array
	 * @see https://ns.editeur.org/onix/it/44
	 */
	protected static $it = [
		'01' => 'Proprietario',
		'02' => 'Proprietario',
		'03' => 'Codice identificativo dell’editore della DNB',
		'04' => 'Börsenverein Verkehrsnummer',
		'05' => 'Codice identificativo dell’editore dell’Agenzia ISBN tedesca',
		'06' => 'GLN',
		'07' => 'SAN',
		'08' => 'MARC organization code',
		'10' => 'Centraal Boekhuis Relatie ID',
		'13' => 'Fondscode Boekenbank',
		'15' => 'Y-tunnus',
		'16' => 'ISNI',
		'17' => 'PND',
		'18' => 'LCCN',
		'19' => 'Codice identificativo giapponese dell’editore',
		'20' => 'GKD',
		'21' => 'ORCID',
		'22' => 'Codice identificativo dell’editore della GAPP',
		'23' => 'Numero di partita IVA',
		'24' => 'Codice identificativo giapponese del distributore',
		'25' => 'GND',
		'26' => 'DUNS',
		'27' => 'Ringgold ID',
		'28' => 'Identifiant Editeur Electre',
		'29' => 'EIDR Party DOI',
		'30' => 'Identifiant Marque Electre',
		'31' => 'VIAF ID',
		'32' => 'FundRef DOI',
		'33' => 'BNE CN',
		'34' => 'Numero di controllo BNF',
		'35' => 'ARK',
		'36' => 'Nasjonalt autoritetsregister',
		'37' => 'GRID',
	];

	/**
	 * Code List 44 for nb
	 *
	 * @var array
	 * @see https://ns.editeur.org/onix/nb/44
	 */
	protected static $nb = [
		'01' => 'Proprietær',
		'02' => 'Proprietær',
		'03' => 'DNB publisher identifier',
		'04' => 'Börsenverein Verkehrsnummer',
		'05' => 'German ISBN Agency publisher identifier',
		'06' => 'GLN (EAN-UCC)',
		'07' => 'SAN',
		'08' => 'MARC organization code',
		'10' => 'Nederlandsk Centraal Boekhuis Relatie ID',
		'13' => 'Fondscode Boekenbank',
		'15' => 'Y-tunnus',
		'16' => 'ISNI',
		'17' => 'PND',
		'18' => 'LCCN',
		'19' => 'Japanese Publisher identifier',
		'20' => 'GKD',
		'21' => 'ORCID',
		'22' => 'GAPP Publisher Identifier',
		'23' => 'VAT Identity Number',
		'24' => 'JP Distribution Identifier',
		'25' => 'GND',
		'26' => 'DUNS',
		'27' => 'Ringgold ID',
		'28' => 'Identifiant Editeur Electre',
		'29' => 'EIDR Party DOI',
		'30' => 'Identifiant Marque Electre',
		'31' => 'VIAF ID',
		'32' => 'FundRef DOI',
		'33' => 'BNE CN',
		'34' => 'BNF Control number',
		'35' => 'ARK',
		'36' => 'Nasjonalt autoritetsregister',
		'37' => 'GRID',
	];

	/**
	 * Code List 44 for tr
	 *
	 * @var array
	 * @see https://ns.editeur.org/onix/tr/44
	 */
	protected static $tr = [
		'01' => 'Özel',
		'02' => 'Özel',
		'03' => 'DNB yayımcı tanımlayıcı',
		'04' => 'Börsenverein Verkehrsnummer',
		'05' => 'Alman ISBN Kurumu yayımcı tanımlayıcı',
		'06' => 'GLN',
		'07' => 'SAN',
		'08' => 'MARC kuruluş kodu',
		'10' => 'Centraal Boekhuis Relatie ID',
		'13' => 'Fondscode Boekenbank',
		'15' => 'Y-tunnus',
		'16' => 'ISNI',
		'17' => 'PND',
		'18' => 'LCCN',
		'19' => 'Japon Yayımcı tanımlayıcı',
		'20' => 'GKD',
		'21' => 'ORCID',
		'22' => 'GAPP Yayımcı Tanımlayıcı',
		'23' => 'KDV Kimlik Numarası',
		'24' => 'JP Dağıtım Tanımlayıcı',
		'25' => 'GND',
		'26' => 'DUNS',
		'27' => 'Ringgold Tanımlayıcı',
		'28' => 'Identifiant Editeur Electre',
		'29' => 'EIDR Taraf DOI',
		'30' => 'Identifiant Marque Electre',
		'31' => 'VIAF ID',
		'32' => 'FundRef DOI',
		'33' => 'BNE CN',
		'34' => 'BNF Kontrol numarası',
		'35' => 'ARK',
		'36' => 'Nasjonalt autoritetsregister',
		'37' => 'GRID',
	];
}
