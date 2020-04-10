<?php

namespace Ribal\Onix\CodeList;

/**
 * ONIX Code List 82
 *
 * Used with <BibleContents> <b352>
 *
 * @see https://ns.editeur.org/onix/en/82
 */
class CodeList82 extends CodeList implements CodeListInterface
{
	/**
	 * Code List 82 for en
	 *
	 * @var array
	 * @see https://ns.editeur.org/onix/en/82
	 */
	protected static $en = [
		'AP' => 'Apocrypha (Catholic canon)',
		'AQ' => 'Apocrypha (canon unspecified)',
		'AX' => 'Additional Apocryphal texts: Greek Orthodox canon',
		'AY' => 'Additional Apocryphal texts: Slavonic Orthodox canon',
		'AZ' => 'Additional Apocryphal texts',
		'GA' => 'General canon with Apocrypha (Catholic canon)',
		'GC' => 'General canon with Apocryphal texts (canon unspecified)',
		'GE' => 'General canon',
		'GS' => 'Gospels',
		'OT' => 'Old Testament',
		'NT' => 'New Testament',
		'NP' => 'New Testament with Psalms and Proverbs',
		'PE' => 'Paul’s Epistles',
		'PP' => 'Psalms and Proverbs',
		'PS' => 'Psalms',
		'PT' => 'Pentateuch',
		'ZZ' => 'Other portions',
	];

	/**
	 * Code List 82 for es
	 *
	 * @var array
	 * @see https://ns.editeur.org/onix/es/82
	 */
	protected static $es = [
		'AP' => 'Apocrypha (Catholic canon)',
		'AQ' => 'Apocrypha (canon unspecified)',
		'AX' => 'Additional Apocryphal texts: Greek Orthodox canon',
		'AY' => 'Additional Apocryphal texts: Slavonic Orthodox canon',
		'AZ' => 'Additional Apocryphal texts',
		'GA' => 'General canon with Apocrypha (Catholic canon)',
		'GC' => 'General canon with Apocrypha (Canon unspecified)',
		'GE' => 'General canon',
		'GS' => 'Gospels',
		'OT' => 'Old Testament',
		'NT' => 'New Testament',
		'NP' => 'New Testament with Psalms and Proverbs',
		'PE' => 'Paul’s Epistles',
		'PP' => 'Psalms and Proverbs',
		'PS' => 'Psalms',
		'PT' => 'Pentateuch',
		'ZZ' => 'Other portions',
	];

	/**
	 * Code List 82 for de
	 *
	 * @var array
	 * @see https://ns.editeur.org/onix/de/82
	 */
	protected static $de = [
		'AP' => 'Apocrypha (Catholic canon)',
		'AQ' => 'Apocrypha (canon unspecified)',
		'AX' => 'Additional Apocryphal texts: Greek Orthodox canon',
		'AY' => 'Additional Apocryphal texts: Slavonic Orthodox canon',
		'AZ' => 'Additional Apocryphal texts',
		'GA' => 'General canon with Apocrypha (Catholic canon)',
		'GC' => 'General canon with Apocryphal texts (canon unspecified)',
		'GE' => 'General canon',
		'GS' => 'Gospels',
		'OT' => 'Old Testament',
		'NT' => 'New Testament',
		'NP' => 'New Testament with Psalms and Proverbs',
		'PE' => 'Paul’s Epistles',
		'PP' => 'Psalms and Proverbs',
		'PS' => 'Psalms',
		'PT' => 'Pentateuch',
		'ZZ' => 'Other portions',
	];

	/**
	 * Code List 82 for fr
	 *
	 * @var array
	 * @see https://ns.editeur.org/onix/fr/82
	 */
	protected static $fr = [
		'AP' => 'Apocryphe (canon catholique)',
		'AQ' => 'Apocryphe (canon non spécifié)',
		'AX' => 'Textes ajoutés aux apocryphes : canon grec orthodoxe',
		'AY' => 'Textes ajoutés aux apocryphes : canon orthodoxe slavon',
		'AZ' => 'Textes ajoutés aux apocryphes',
		'GA' => 'Canon général avec apocryphes (canon catholique)',
		'GC' => 'Canon général avec textes apocryphes (canon non spécifié)',
		'GE' => 'Canon général',
		'GS' => 'Evangiles',
		'OT' => 'Ancien Testament',
		'NT' => 'Nouveau Testament',
		'NP' => 'Nouveau Testament avec psaumes et proverbes',
		'PE' => 'Epîtres de Paul',
		'PP' => 'Psaumes et proverbes',
		'PS' => 'Psaumes',
		'PT' => 'Pentateuque',
		'ZZ' => 'Autres parties',
	];

	/**
	 * Code List 82 for it
	 *
	 * @var array
	 * @see https://ns.editeur.org/onix/it/82
	 */
	protected static $it = [
		'AP' => 'Apocrifi (canone cattolico)',
		'AQ' => 'Apocrifi (canone non indicato)',
		'AX' => 'Testi apocrifi aggiuntivi: canone greco ortodosso',
		'AY' => 'Testi apocrifi aggiuntivi: canone slavo ortodosso',
		'AZ' => 'Testi apocrifi aggiuntivi',
		'GA' => 'Canone generale con Apocrifi (canone cattolico)',
		'GC' => 'Canone generale con Apocrifi (canone non indicato)',
		'GE' => 'Canone generale',
		'GS' => 'Vangeli',
		'OT' => 'Antico Testamento',
		'NT' => 'Nuovo Testamento',
		'NP' => 'Nuovo Testamento con Salmi e Proverbi',
		'PE' => 'Epistole di Paolo',
		'PP' => 'Salmi e Proverbi',
		'PS' => 'Salmi',
		'PT' => 'Pentateuco',
		'ZZ' => 'Altre parti della Bibbia',
	];

	/**
	 * Code List 82 for nb
	 *
	 * @var array
	 * @see https://ns.editeur.org/onix/nb/82
	 */
	protected static $nb = [
		'AP' => 'Apokryfer (katolsk kanon)',
		'AQ' => 'Apokryfer (kanon er ikke angitt)',
		'AX' => 'Ytterligere apokryfiske tekster; gresk-ortodoks kanon',
		'AY' => 'Ytterligere apokryfiske tekster; slavisk-ortodoks kanon',
		'AZ' => 'Ytterligere apokryfiske tekster',
		'GA' => 'Generell kanon med apokryfer (katolsk kanon)',
		'GC' => 'Generell kanon med apokryfer (kanon er ikke angitt)',
		'GE' => 'Generell kanon',
		'GS' => 'Evangeliene',
		'OT' => 'Det gamle testamente',
		'NT' => 'Det nye testamente',
		'NP' => 'Det nye testamentet med Salmene og Ordspråkene',
		'PE' => 'Paulus’ brev',
		'PP' => 'Salmene og ordspråkene',
		'PS' => 'Salmenes bok',
		'PT' => 'Mosebøkene',
		'ZZ' => 'Andre deler',
	];

	/**
	 * Code List 82 for tr
	 *
	 * @var array
	 * @see https://ns.editeur.org/onix/tr/82
	 */
	protected static $tr = [
		'AP' => 'Apokrif (Katolik kanonu)',
		'AQ' => 'Apokrif (kanon belirtilmemiş)',
		'AX' => 'İlave Apokrif metinler: Rum Ortodoks kanonu',
		'AY' => 'İlave Apokrif metinler: Slav Ortodoks kanonu',
		'AZ' => 'İlave Apokrif metinler',
		'GA' => 'Apokrifli genel kanon (Katolik kanonu)',
		'GC' => 'Apokrif metinli genel kanon (Kanon belirtilmemiş)',
		'GE' => 'Genel kanon',
		'GS' => 'İnciller',
		'OT' => 'Eski Ahit',
		'NT' => 'Yeni Ahit',
		'NP' => 'İlahiler ve Mesellerle birlikte Yeni Ahit',
		'PE' => 'Pavlus’un Mektupları',
		'PP' => 'İlahiler ve Meseller',
		'PS' => 'İlahiler',
		'PT' => 'Pentateuch',
		'ZZ' => 'Diğer kısımlar',
	];
}
