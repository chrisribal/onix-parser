<?php

namespace Ribal\Onix\CodeList;

/**
 * ONIX Code List 24
 *
 * Used with <ExtentUnit> <b220>
 *
 * @see https://ns.editeur.org/onix/en/24
 */
class CodeList24 extends CodeList implements CodeListInterface
{
	/**
	 * Code List 24 for en
	 *
	 * @var array
	 * @see https://ns.editeur.org/onix/en/24
	 */
	protected static $en = [
		'01' => 'Characters',
		'02' => 'Words',
		'03' => 'Pages',
		'04' => 'Hours (integer and decimals)',
		'05' => 'Minutes (integer and decimals)',
		'06' => 'Seconds (integer only)',
		'11' => 'Tracks',
		'12' => 'Discs',
		'14' => 'Hours HHH',
		'15' => 'Hours and minutes HHHMM',
		'16' => 'Hours minutes seconds HHHMMSS',
		'17' => 'Bytes',
		'18' => 'Kbytes',
		'19' => 'Mbytes',
	];

	/**
	 * Code List 24 for es
	 *
	 * @var array
	 * @see https://ns.editeur.org/onix/es/24
	 */
	protected static $es = [
		'01' => 'Characters',
		'02' => 'Palabras',
		'03' => 'Páginas',
		'04' => 'Horas (número entero y decimales)',
		'05' => 'Minutos (número entero y decimales)',
		'06' => 'Segundos (sólo número entero)',
		'11' => 'Pistas (o «cortes»)',
		'12' => 'Discos',
		'14' => 'Horas en formato HHH',
		'15' => 'Horas y minutos en formato HHHMM',
		'16' => 'Horas, minutos y segundos en formato HHHMMSS',
		'17' => 'Bytes',
		'18' => 'Kilobytes (KB)',
		'19' => 'Megabytes (MB)',
	];

	/**
	 * Code List 24 for de
	 *
	 * @var array
	 * @see https://ns.editeur.org/onix/de/24
	 */
	protected static $de = [
		'01' => 'Zeichen',
		'02' => 'Wörter',
		'03' => 'Seiten',
		'04' => 'Stunden (Ganzzahl und Dezimalstellen)',
		'05' => 'Minuten (Ganzzahl und Dezimalstellen)',
		'06' => 'Sekunden (nur Ganzzahl)',
		'11' => 'Tracks',
		'12' => 'Discs',
		'14' => 'Stunden HHH',
		'15' => 'Stunden und Minuten HHHMM',
		'16' => 'Stunden Minuten Sekunden HHHMMSS',
		'17' => 'Bytes',
		'18' => 'Kbytes',
		'19' => 'Mbytes',
	];

	/**
	 * Code List 24 for fr
	 *
	 * @var array
	 * @see https://ns.editeur.org/onix/fr/24
	 */
	protected static $fr = [
		'01' => 'Characters',
		'02' => 'Mots',
		'03' => 'Pages',
		'04' => 'Heures (valeurs entières et décimales)',
		'05' => 'Minutes (valeurs entières et décimales)',
		'06' => 'Secondes (valeurs entières uniquement)',
		'11' => 'Plages',
		'12' => 'Disques',
		'14' => 'Heures HHH',
		'15' => 'Heures et minutes HHHMM',
		'16' => 'Heures minutes secondes HHHMMSS',
		'17' => 'Octets',
		'18' => 'Kilo-octets',
		'19' => 'Méga-octets',
	];

	/**
	 * Code List 24 for it
	 *
	 * @var array
	 * @see https://ns.editeur.org/onix/it/24
	 */
	protected static $it = [
		'01' => 'Characters',
		'02' => 'Parole',
		'03' => 'Pagine',
		'04' => 'Ore (numeri interi e decimali)',
		'05' => 'Minuti (numeri interi e decimali)',
		'06' => 'Secondi (solo numeri interi)',
		'11' => 'Tracce',
		'12' => 'Dischi',
		'14' => 'Ore in formato HHH',
		'15' => 'Ore e minuti in formato HHHMM',
		'16' => 'Ore, minuti e secondi in formato HHHMMSS',
		'17' => 'Bytes',
		'18' => 'Kbytes',
		'19' => 'Mbytes',
	];

	/**
	 * Code List 24 for nb
	 *
	 * @var array
	 * @see https://ns.editeur.org/onix/nb/24
	 */
	protected static $nb = [
		'01' => 'Characters',
		'02' => 'Ord',
		'03' => 'Sider',
		'04' => 'Timer (heltall og desimaler)',
		'05' => 'Minutter (heltall og desimaler)',
		'06' => 'Sekunder (kun heltall)',
		'11' => 'Spor',
		'12' => 'CD-plater',
		'14' => 'Timer HHH',
		'15' => 'Timer og minutter HHHMM',
		'16' => 'Timer, minutter og sekunder HHHMMSS',
		'17' => 'Bytes',
		'18' => 'Kilobytes',
		'19' => 'Megabytes',
	];

	/**
	 * Code List 24 for tr
	 *
	 * @var array
	 * @see https://ns.editeur.org/onix/tr/24
	 */
	protected static $tr = [
		'01' => 'Characters',
		'02' => 'Kelime',
		'03' => 'Sayfa',
		'04' => 'Saat (tamsayı ve ondalık)',
		'05' => 'Dakika (tamsayı ve ondalık)',
		'06' => 'Saniye (sadece tamsayı)',
		'11' => 'Parça sayısı',
		'12' => 'Disk sayısı',
		'14' => 'Saat HHH',
		'15' => 'Saat ve dakika HHHMM',
		'16' => 'Saat dakika saniye HHHMMSS',
		'17' => 'Bayt',
		'18' => 'Kilobayt',
		'19' => 'Megabayt',
	];
}
