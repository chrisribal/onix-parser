<?php

namespace Ribal\Onix\CodeList;

/**
 * ONIX Code List 55
 *
 * Used with    • <DateFormat> <j260>    • @dateformatUses Gregorian calendar unless otherwise specified. Based in part on ISO 8601
 *
 * @see https://ns.editeur.org/onix/en/55
 */
class CodeList55 extends CodeList implements CodeListInterface
{
	/**
	 * Code List 55 for en
	 *
	 * @var array
	 * @see https://ns.editeur.org/onix/en/55
	 */
	protected static $en = [
		'00' => 'YYYYMMDD',
		'01' => 'YYYYMM',
		'02' => 'YYYYWW',
		'03' => 'YYYYQ',
		'04' => 'YYYYS',
		'05' => 'YYYY',
		'06' => 'YYYYMMDDYYYYMMDD',
		'07' => 'YYYYMMYYYYMM',
		'08' => 'YYYYWWYYYYWW',
		'09' => 'YYYYQYYYYQ',
		'10' => 'YYYYSYYYYS',
		'11' => 'YYYYYYYY',
		'12' => 'Text string',
		'13' => 'YYYYMMDDThhmm',
		'14' => 'YYYYMMDDThhmmss',
		'20' => 'YYYYMMDD (H)',
		'21' => 'YYYYMM (H)',
		'25' => 'YYYY (H)',
		'32' => 'Text string (H)',
	];

	/**
	 * Code List 55 for es
	 *
	 * @var array
	 * @see https://ns.editeur.org/onix/es/55
	 */
	protected static $es = [
		'00' => 'AAAAMMDD',
		'01' => 'AAAAMM',
		'02' => 'AAAASS',
		'03' => 'AAAAT',
		'04' => 'AAAAE',
		'05' => 'AAAA',
		'06' => 'AAAAMMDDAAAAMMDD',
		'07' => 'AAAAMMAAAAMM',
		'08' => 'AAAASSAAAASS',
		'09' => 'AAAATAAAAT',
		'10' => 'AAAAEAAAAE',
		'11' => 'AAAAAAAA',
		'12' => 'Texto',
		'13' => 'YYYYMMDDThhmm',
		'14' => 'YYYYMMDDThhmmss',
		'20' => 'YYYYMMDD (H)',
		'21' => 'YYYYMM (H)',
		'25' => 'YYYY (H)',
		'32' => 'Cadena de texto (H)',
	];

	/**
	 * Code List 55 for de
	 *
	 * @var array
	 * @see https://ns.editeur.org/onix/de/55
	 */
	protected static $de = [
		'00' => 'YYYYMMDD',
		'01' => 'YYYYMM',
		'02' => 'YYYYWW',
		'03' => 'YYYYQ',
		'04' => 'YYYYS',
		'05' => 'YYYY',
		'06' => 'YYYYMMDDYYYYMMDD',
		'07' => 'YYYYMMYYYYMM',
		'08' => 'YYYYWWYYYYWW',
		'09' => 'YYYYQYYYYQ',
		'10' => 'YYYYSYYYYS',
		'11' => 'YYYYYYYY',
		'12' => 'Text string',
		'13' => 'YYYYMMDDThhmm',
		'14' => 'YYYYMMDDThhmmss',
		'20' => 'YYYYMMDD (H)',
		'21' => 'YYYYMM (H)',
		'25' => 'YYYY (H)',
		'32' => 'Text string (H)',
	];

	/**
	 * Code List 55 for fr
	 *
	 * @var array
	 * @see https://ns.editeur.org/onix/fr/55
	 */
	protected static $fr = [
		'00' => 'AAAAMMJJ',
		'01' => 'AAAAMM',
		'02' => 'AAAASS',
		'03' => 'AAAAT',
		'04' => 'AAAAZ',
		'05' => 'AAAA',
		'06' => 'AAAAMMJJAAAAMMJ J',
		'07' => 'AAAAMMAAAAMM',
		'08' => 'AAAASSAAAASS',
		'09' => 'AAAATAAAAT',
		'10' => 'AAAAZAAAAZ',
		'11' => 'AAAAAAAA',
		'12' => 'Chaîne de texte',
		'13' => 'AAAAMMJJThhmm',
		'14' => 'AAAAMMJJThhmmss',
		'20' => 'AAAAMMJJ (H)',
		'21' => 'AAAAMM (H)',
		'25' => 'AAAA (H)',
		'32' => 'Chaîne de texte (H)',
	];

	/**
	 * Code List 55 for it
	 *
	 * @var array
	 * @see https://ns.editeur.org/onix/it/55
	 */
	protected static $it = [
		'00' => 'YYYYMMDD',
		'01' => 'YYYYMM',
		'02' => 'YYYYWW',
		'03' => 'YYYYQ',
		'04' => 'YYYYS',
		'05' => 'YYYY',
		'06' => 'YYYYMMDDYYYYMMDD',
		'07' => 'YYYYMMYYYYMM',
		'08' => 'YYYYWWYYYYWW',
		'09' => 'YYYYQYYYYQ',
		'10' => 'YYYYSYYYYS',
		'11' => 'YYYYYYYY',
		'12' => 'Stringa di testo libero',
		'13' => 'YYYYMMDDThhmm',
		'14' => 'YYYYMMDDThhmmss',
		'20' => 'YYYYMMDD (H)',
		'21' => 'YYYYMM (H)',
		'25' => 'YYYY (H)',
		'32' => 'Stringa di testo (H)',
	];

	/**
	 * Code List 55 for nb
	 *
	 * @var array
	 * @see https://ns.editeur.org/onix/nb/55
	 */
	protected static $nb = [
		'00' => 'YYYYMMDD',
		'01' => 'YYYYMM',
		'02' => 'YYYYWW',
		'03' => 'YYYYQ',
		'04' => 'YYYYS',
		'05' => 'YYYY',
		'06' => 'YYYYMMDDYYYYMMDD',
		'07' => 'YYYYMMYYYYMM',
		'08' => 'YYYYWWYYYYWW',
		'09' => 'YYYYQYYYYQ',
		'10' => 'YYYYQYYYYQ',
		'11' => 'YYYYYYYY',
		'12' => 'Tekststreng',
		'13' => 'YYYYMMDDThhmm',
		'14' => 'YYYYMMDDThhmmss',
		'20' => 'YYYYMMDD (H)',
		'21' => 'YYYYMM (H)',
		'25' => 'YYYY (H)',
		'32' => 'Tekststreng (H)',
	];

	/**
	 * Code List 55 for tr
	 *
	 * @var array
	 * @see https://ns.editeur.org/onix/tr/55
	 */
	protected static $tr = [
		'00' => 'YYYYAAGG',
		'01' => 'YYYYAA',
		'02' => 'YYYYHH',
		'03' => 'YYYYÇ',
		'04' => 'YYYYM',
		'05' => 'YYYY',
		'06' => 'YYYYAAGGYYYYAAGG',
		'07' => 'YYYYAAYYYYAA',
		'08' => 'YYYYHHYYYYHH',
		'09' => 'YYYYÇYYYYÇ',
		'10' => 'YYYYMYYYYM',
		'11' => 'YYYYYYYY',
		'12' => 'Metin',
		'13' => 'YYYYAAGGTssdd',
		'14' => 'YYYYAAGGTssddss',
		'20' => 'YYYYAAGG (H)',
		'21' => 'YYYYAA (H)',
		'25' => 'YYYY (H)',
		'32' => 'Metin (H)',
	];
}
