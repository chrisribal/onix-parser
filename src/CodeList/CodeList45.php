<?php

namespace Ribal\Onix\CodeList;

/**
 * ONIX Code List 45
 *
 * Used with <PublishingRole> <b291>
 *
 * @see https://ns.editeur.org/onix/en/45
 */
class CodeList45 extends CodeList implements CodeListInterface
{
	/**
	 * Code List 45 for en
	 *
	 * @var array
	 * @see https://ns.editeur.org/onix/en/45
	 */
	protected static $en = [
		'01' => 'Publisher',
		'02' => 'Co-publisher',
		'03' => 'Sponsor',
		'04' => 'Publisher of original-language version',
		'05' => 'Host/distributor of electronic content',
		'06' => 'Published for/on behalf of',
		'07' => 'Published in association with',
		'09' => 'New or acquiring publisher',
		'10' => 'Publishing group',
		'11' => 'Publisher of facsimile original',
		'12' => 'Repackager of prebound edition',
		'13' => 'Former publisher',
		'14' => 'Publication funder',
		'15' => 'Research funder',
		'16' => 'Funding body',
		'17' => 'Printer',
		'18' => 'Binder',
		'19' => 'Manufacturer',
	];

	/**
	 * Code List 45 for es
	 *
	 * @var array
	 * @see https://ns.editeur.org/onix/es/45
	 */
	protected static $es = [
		'01' => 'Editorial',
		'02' => 'Coeditorial',
		'03' => 'Patrocinador / «Sponsor»',
		'04' => 'Editorial de la obra en idioma original',
		'05' => 'Servidor / distribuidor de contenidos digitales',
		'06' => 'Publicado para / En nombre de',
		'07' => 'Publicado en asociación con',
		'09' => 'Nueva editorial o editorial compradora',
		'10' => 'Grupo editorial',
		'11' => 'Editorial del original de un facsímil',
		'12' => 'Entidad que reencuaderna una edición «prebound»',
		'13' => 'Editorial anterior',
		'14' => 'Entidad financiadora de la publicación',
		'15' => 'Entidad financiadora de la investigación',
		'16' => 'Entidad financiadora',
		'17' => 'Impresor',
		'18' => 'Encuadernador',
		'19' => 'Fabricante',
	];

	/**
	 * Code List 45 for de
	 *
	 * @var array
	 * @see https://ns.editeur.org/onix/de/45
	 */
	protected static $de = [
		'01' => 'Verlag',
		'02' => 'Mitherausgeber',
		'03' => 'Sponsor',
		'04' => 'Herausgeber der Originalversion',
		'05' => 'Host / Distributor von elektronischen Inhalten',
		'06' => 'Veröffentlicht für / im Auftrag von',
		'07' => 'Veröffentlicht in Verbindung mit',
		'09' => 'Neuer oder erwerbender Verlag',
		'10' => 'Verlagsgruppe',
		'11' => 'Herausgeber des Faksimile-Originals',
		'12' => 'Repackager der Prebound Edition',
		'13' => 'Ehemaliger Verlag',
		'14' => 'Publikationsförderer',
		'15' => 'Forschungsförderer',
		'16' => 'Förderstelle',
		'17' => 'Drucker',
		'18' => 'Binder',
		'19' => 'Hersteller',
	];

	/**
	 * Code List 45 for fr
	 *
	 * @var array
	 * @see https://ns.editeur.org/onix/fr/45
	 */
	protected static $fr = [
		'01' => 'Editeur',
		'02' => 'Coéditeur',
		'03' => 'Sponsor',
		'04' => 'Editeur de la version originale',
		'05' => 'Hébergeur / fournisseur de contenu numérique',
		'06' => 'Publié pour / au nom de',
		'07' => 'Publié en association avec',
		'09' => 'Nouvel éditeur ou éditeur acquéreur',
		'10' => 'Groupe de publication',
		'11' => 'Editeur de l’original du fac-similé',
		'12' => 'Nouveau relieur de l’édition préreliée',
		'13' => 'Précédent éditeur',
		'14' => 'Organisme de financement de publication',
		'15' => 'Organisme de financement de recherche',
		'16' => 'Organisme de financement',
		'17' => 'Imprimeur',
		'18' => 'Relieur',
		'19' => 'Fabricant',
	];

	/**
	 * Code List 45 for it
	 *
	 * @var array
	 * @see https://ns.editeur.org/onix/it/45
	 */
	protected static $it = [
		'01' => 'Editore',
		'02' => 'Coeditore',
		'03' => 'Sponsor',
		'04' => 'Editore dell’opera in lingua originale',
		'05' => 'Piattaforma/Distributore di pubblicazioni elettroniche',
		'06' => 'Pubblicato per/per conto di',
		'07' => 'Pubblicato in associazione con',
		'09' => 'Nuovo editore o editore acquirente',
		'10' => 'Gruppo editoriale',
		'11' => 'Editore dell’originale del facsimile',
		'12' => 'Rilegatore di edizione pre-rilegata',
		'13' => 'Editore precedente',
		'14' => 'Sponsor della pubblicazione',
		'15' => 'Sponsor della ricerca',
		'16' => 'Ente finanziatore',
		'17' => 'Stampatore',
		'18' => 'Rilegatore',
		'19' => 'Produttore',
	];

	/**
	 * Code List 45 for nb
	 *
	 * @var array
	 * @see https://ns.editeur.org/onix/nb/45
	 */
	protected static $nb = [
		'01' => 'Vareeier/utgiver',
		'02' => 'Sampublisert med',
		'03' => 'Sponsor',
		'04' => 'Forlag/utgiver for versjonen på orginalspråket',
		'05' => 'Vert/distributør av elektronisk innhold',
		'06' => 'Utgitt for/på vegne av',
		'07' => 'Utgitt i samarbeid med',
		'09' => 'Ny eller overtagende utgiver',
		'10' => 'Utgivergruppe',
		'11' => 'Utgiver av original (for faksimile)',
		'12' => 'Repackager of prebound edition',
		'13' => 'Tidligere utgiver',
		'14' => 'Ansvarlig for finansiering av publikasjon',
		'15' => 'Ansvarlig for finansiering av forskning',
		'16' => 'Ansvarlig for finansiering',
		'17' => 'Trykkeri',
		'18' => 'Bokbinder',
		'19' => 'Produsent',
	];

	/**
	 * Code List 45 for tr
	 *
	 * @var array
	 * @see https://ns.editeur.org/onix/tr/45
	 */
	protected static $tr = [
		'01' => 'Yayımcı',
		'02' => 'Ortak yayımcı',
		'03' => 'Sponsor',
		'04' => 'Özgün dildeki yayımcı',
		'05' => 'Elektronik içerik sunucusu/dağıtıcısı',
		'06' => 'Adına yayınlayan',
		'07' => 'Birlikte yayınlayan',
		'09' => 'Yeni ya da edinmiş yayımcı',
		'10' => 'Yayın grubu',
		'11' => 'Özgün tıpkıbasım yayımcısı',
		'12' => 'Tekrar ciltlenmiş basımı yeniden ciltleyen',
		'13' => 'Önceki yayımcı',
		'14' => 'Yayın destekçisi',
		'15' => 'Araştırma destekçisi',
		'16' => 'Destekleyici kuruluş',
		'17' => 'Basımcı',
		'18' => 'Mücellit',
		'19' => 'Üretici',
	];
}
