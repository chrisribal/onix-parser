<?php

namespace Ribal\Onix\CodeList;

/**
 * ONIX Code List 15
 *
 * Used with <TitleType> <b202>
 *
 * @see https://ns.editeur.org/onix/en/15
 */
class CodeList15 extends CodeList implements CodeListInterface
{
	/**
	 * Code List 15 for en
	 *
	 * @var array
	 * @see https://ns.editeur.org/onix/en/15
	 */
	protected static $en = [
		'00' => 'Undefined',
		'01' => 'Distinctive title (book); Cover title (serial); Title on item (serial content item or reviewed resource)',
		'02' => 'ISSN key title of serial',
		'03' => 'Title in original language',
		'04' => 'Title acronym or initialism',
		'05' => 'Abbreviated title',
		'06' => 'Title in other language',
		'07' => 'Thematic title of journal issue',
		'08' => 'Former title',
		'10' => 'Distributor’s title',
		'11' => 'Alternative title on cover',
		'12' => 'Alternative title on back',
		'13' => 'Expanded title',
		'14' => 'Alternative title',
	];

	/**
	 * Code List 15 for es
	 *
	 * @var array
	 * @see https://ns.editeur.org/onix/es/15
	 */
	protected static $es = [
		'00' => 'No definido',
		'01' => 'Título distintivo',
		'02' => 'Título clave de la publicación periódica atribuido por el ISSN',
		'03' => 'Título en idioma original',
		'04' => 'Acrónimo del título',
		'05' => 'Título abreviado',
		'06' => 'Título en otro idioma',
		'07' => 'Título monográfico de número suelto de publicación periódica',
		'08' => 'Título anterior',
		'10' => 'Título para el distribuidor',
		'11' => 'Título alternativo en cubierta',
		'12' => 'Título alternativo en contracubierta',
		'13' => 'Título expandido para libro de texto',
		'14' => 'Título alternativo',
	];

	/**
	 * Code List 15 for de
	 *
	 * @var array
	 * @see https://ns.editeur.org/onix/de/15
	 */
	protected static $de = [
		'00' => 'Undefiniert',
		'01' => 'Einzigartiger Titel (Buch); Covertitel (Serie); Titel auf Artikel (serieller Inhaltsartikel oder überprüfte Ressource)',
		'02' => 'ISSN-Schlüsseltitel der Serie',
		'03' => 'Titel in Originalsprache',
		'04' => 'Titelakronym oder Initialismus',
		'05' => 'Kurztitel',
		'06' => 'Titel in anderer Sprache',
		'07' => 'Thematischer Titel der Zeitschriftenausgabe',
		'08' => 'Ehemaliger Titel',
		'10' => 'Titel des Händlers',
		'11' => 'Alternativer Titel auf dem Cover',
		'12' => 'Alternativer Titel auf der Rückseite',
		'13' => 'Erweiterter Titel',
		'14' => 'Alternativer Titel',
	];

	/**
	 * Code List 15 for fr
	 *
	 * @var array
	 * @see https://ns.editeur.org/onix/fr/15
	 */
	protected static $fr = [
		'00' => 'Non défini',
		'01' => 'Titre significatif (livre) ; titre de couverture (périodique) ; titre du volume (d’une publication en série ou à un ouvrage de revue)',
		'02' => 'Titre-clé lié à l’ISSN d’une collection',
		'03' => 'Titre original',
		'04' => 'Initiales ou acronyme de titre',
		'05' => 'Titre abrégé',
		'06' => 'Titre parallèle',
		'07' => 'Titre thématique d’un numéro de périodique',
		'08' => 'Titre précédent',
		'10' => 'Titre distributeur',
		'11' => 'Titre de couverture',
		'12' => 'titre de 4e de couverture',
		'13' => 'Titre développé',
		'14' => 'Variante de titre',
	];

	/**
	 * Code List 15 for it
	 *
	 * @var array
	 * @see https://ns.editeur.org/onix/it/15
	 */
	protected static $it = [
		'00' => 'Non definito',
		'01' => 'Titolo distintivo (libro); titolo copertina (serie); titolo prodotto (pubblicazione periodica o risorsa rivista)',
		'02' => 'Titolo chiave della pubblicazione periodica attribuito da ISSN',
		'03' => 'Titolo originale',
		'04' => 'Acronimo del titolo',
		'05' => 'Titolo abbreviato',
		'06' => 'Titolo in altra lingua',
		'07' => 'Titolo monografico di un singolo numero di pubblicazione periodica',
		'08' => 'Titolo precedente',
		'10' => 'Titolo presso il distributore',
		'11' => 'Titolo alternativo sulla copertina',
		'12' => 'Titolo alternativo sul retro di copertina',
		'13' => 'Titolo esteso',
		'14' => 'Titolo alternativo',
	];

	/**
	 * Code List 15 for nb
	 *
	 * @var array
	 * @see https://ns.editeur.org/onix/nb/15
	 */
	protected static $nb = [
		'00' => 'Udefinert',
		'01' => 'Fullstendig tittel (bok eller serie)',
		'02' => 'ISSN-nøkkeltittel for tidskrift',
		'03' => 'Originaltittel',
		'04' => 'Tittelakronym',
		'05' => 'Forkortet tittel',
		'06' => 'Tittel på annet språk',
		'07' => 'Tematisk tittel til en tidsskriftsutgave',
		'08' => 'Tidligere tittel',
		'10' => 'Distributørens tittel',
		'11' => 'Alternativ tittel på omslaget',
		'12' => 'Alternativ tittel på baksiden',
		'13' => 'Utvidet tittel',
		'14' => 'Alternativ tittel',
	];

	/**
	 * Code List 15 for tr
	 *
	 * @var array
	 * @see https://ns.editeur.org/onix/tr/15
	 */
	protected static $tr = [
		'00' => 'Belirtilmemiş',
		'01' => 'Ayırt edici başlık (kitap); Cilt başlığı (dizi); Kalem üzerindeki başlık (dizi içerik kalemi ya da yeniden incelenen kaynak)',
		'02' => 'ISSN dizi anahtar başlığı',
		'03' => 'Özgün dilde başlık',
		'04' => 'Başlık kısaltması ya da baş harfleri',
		'05' => 'Kısaltılmış başlık',
		'06' => 'Başka dilde başlık',
		'07' => 'Dizi sayısı tematik başlığı',
		'08' => 'Eski başlık',
		'10' => 'Dağıtımcı başlığı',
		'11' => 'Kapakta alternatif başlık',
		'12' => 'Arka kapakta alternatif başlık',
		'13' => 'Genişletilmiş başlık',
		'14' => 'Alternatif başlık',
	];
}
