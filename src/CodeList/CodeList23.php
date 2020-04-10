<?php

namespace Ribal\Onix\CodeList;

/**
 * ONIX Code List 23
 *
 * Used with <ExtentType> <b218>
 *
 * @see https://ns.editeur.org/onix/en/23
 */
class CodeList23 extends CodeList implements CodeListInterface
{
	/**
	 * Code List 23 for en
	 *
	 * @var array
	 * @see https://ns.editeur.org/onix/en/23
	 */
	protected static $en = [
		'00' => 'Main content page count',
		'02' => 'Total text length',
		'03' => 'Front matter page count',
		'04' => 'Back matter page count',
		'05' => 'Total numbered pages',
		'06' => 'Production page count',
		'07' => 'Absolute page count',
		'08' => 'Number of pages in print counterpart',
		'09' => 'Duration',
		'10' => 'Notional number of pages in digital product',
		'11' => 'Content page count',
		'12' => 'Total unnumbered insert page count',
		'13' => 'Duration of introductory matter',
		'14' => 'Duration of main content',
		'15' => 'Duration of back matter',
		'16' => 'Production duration',
		'22' => 'Filesize',
	];

	/**
	 * Code List 23 for es
	 *
	 * @var array
	 * @see https://ns.editeur.org/onix/es/23
	 */
	protected static $es = [
		'00' => 'Número de páginas del contenido principal',
		'02' => 'Número de palabras',
		'03' => 'Número de páginas previas al contenido principal',
		'04' => 'Número de páginas posteriores al contenido principal',
		'05' => 'Total de páginas numeradas',
		'06' => 'Número de páginas para producción',
		'07' => 'Número absoluto de páginas',
		'08' => 'Número de páginas de la versión impresa',
		'09' => 'Duración',
		'10' => 'Número de páginas orientativo de un producto digital',
		'11' => 'Número de páginas con contenido',
		'12' => 'Total de páginas insertadas no numeradas',
		'13' => 'Duración de la introducción',
		'14' => 'Duración del contenido principal',
		'15' => 'Duración de las partes finales',
		'16' => 'Duración de la producción',
		'22' => 'Tamaño del archivo',
	];

	/**
	 * Code List 23 for de
	 *
	 * @var array
	 * @see https://ns.editeur.org/onix/de/23
	 */
	protected static $de = [
		'00' => 'Anzahl der Hauptinhaltsseiten',
		'02' => 'Gesamttextlänge',
		'03' => 'Seitenzahl der Titelseite',
		'04' => 'Seitenanzahl der Hintergrundsachen',
		'05' => 'Gesamtzahl der nummerierten Seiten',
		'06' => 'Anzahl der Produktionsseiten',
		'07' => 'Absolute Seitenzahl',
		'08' => 'Anzahl der Seiten im gedruckten Gegenstück',
		'09' => 'Dauer',
		'10' => 'Nennzahl der Seiten im digitalen Produkt',
		'11' => 'Anzahl der Inhaltsseiten',
		'12' => 'Gesamtzahl der nicht nummerierten Seiten einfügen',
		'13' => 'Dauer der einleitenden Angelegenheit',
		'14' => 'Dauer des Hauptinhalts',
		'15' => 'Dauer der Hintergrundsache',
		'16' => 'Produktionsdauer',
		'22' => 'Dateigröße',
	];

	/**
	 * Code List 23 for fr
	 *
	 * @var array
	 * @see https://ns.editeur.org/onix/fr/23
	 */
	protected static $fr = [
		'00' => 'Nombre de pages du contenu principal',
		'02' => 'Nombre de mots',
		'03' => 'Nombre de pages liminaires',
		'04' => 'Nombre de pages annexes',
		'05' => 'Nombre total de pages',
		'06' => 'Nombre de pages en fabrication',
		'07' => 'Nombre absolu de pages',
		'08' => 'Nombre de pages de la version imprimée correspondante',
		'09' => 'Durée',
		'10' => 'Nombre théorique de pages d’un produit numérique',
		'11' => 'Nombre de pages du contenu',
		'12' => 'Nombre total de pages d’encart non numérotées',
		'13' => 'Durée de la partie liminaire',
		'14' => 'Durée du contenu principal',
		'15' => 'Durée des annexes',
		'16' => 'Durée du contenu produit',
		'22' => 'Taille du fichier',
	];

	/**
	 * Code List 23 for it
	 *
	 * @var array
	 * @see https://ns.editeur.org/onix/it/23
	 */
	protected static $it = [
		'00' => 'Numero di pagine del contenuto principale',
		'02' => 'Numero di parole',
		'03' => 'Numero di pagine del testo preliminare',
		'04' => 'Numero di pagine del testo conclusivo',
		'05' => 'Numero totale delle pagine numerate',
		'06' => 'Numero di pagine del prodotto',
		'07' => 'Numero assoluto di pagine',
		'08' => 'Numero di pagine della versione a stampa',
		'09' => 'Durata',
		'10' => 'Numero teorico di pagine del prodotto digitale',
		'11' => 'Numero di pagine di contenuto',
		'12' => 'Numero totale delle pagine non numerate dell’inserto',
		'13' => 'Durata della parte introduttiva',
		'14' => 'Durata del contenuto principale',
		'15' => 'Durata del materiale aggiuntivo',
		'16' => 'Durata della produzione',
		'22' => 'Dimensione del file',
	];

	/**
	 * Code List 23 for nb
	 *
	 * @var array
	 * @see https://ns.editeur.org/onix/nb/23
	 */
	protected static $nb = [
		'00' => 'Sidetall (bokas hovedinnhold)',
		'02' => 'Antall ord',
		'03' => 'Sidetall for innledende stoff',
		'04' => 'Sidetall for avsluttende stoff',
		'05' => 'Totalt antall nummererte sider',
		'06' => 'Sidetall for produksjon',
		'07' => 'Fast sidetall (digitale publikasjoner)',
		'08' => 'Sidetall i tilsvarende trykt utgave (for digitale publikasjoner)',
		'09' => 'Varighet/spilletid',
		'10' => 'Anslått sidetall i digital publikasjon',
		'11' => 'Sidetall',
		'12' => 'Totalt antall unummererte sider',
		'13' => 'Spilletid for innledning',
		'14' => 'Spilletid for hovedinnhold',
		'15' => 'Spilletid for avsluttende stoff',
		'16' => 'Spilletid for produksjon',
		'22' => 'Filstørrelse',
	];

	/**
	 * Code List 23 for tr
	 *
	 * @var array
	 * @see https://ns.editeur.org/onix/tr/23
	 */
	protected static $tr = [
		'00' => 'Ana içerik sayfa sayısı',
		'02' => 'Kelime sayısı',
		'03' => 'Ön bölüm sayfa sayısı',
		'04' => 'Art bölüm sayfa sayısı',
		'05' => 'Toplam numaralı sayfa',
		'06' => 'Ürün sayfa sayısı',
		'07' => 'Mutlak sayfa sayısı',
		'08' => 'Basılı kopyada sayfa sayısı',
		'09' => 'Süre',
		'10' => 'Dijital üründe itibari sayfa sayısı',
		'11' => 'İçerik sayfa sayısı',
		'12' => 'Toplam numarasız ekli sayfa sayısı',
		'13' => 'Tanıtıcı bölüm süresi',
		'14' => 'Ana içeriğin süresi',
		'15' => 'Duration of back matter',
		'16' => 'Yapım süresi',
		'22' => 'Dosya büyüklüğü',
	];
}
