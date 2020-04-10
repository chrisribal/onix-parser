<?php

namespace Ribal\Onix\CodeList;

/**
 * ONIX Code List 156
 *
 * Used with <CitedContentType> <x430>
 *
 * @see https://ns.editeur.org/onix/en/156
 */
class CodeList156 extends CodeList implements CodeListInterface
{
	/**
	 * Code List 156 for en
	 *
	 * @var array
	 * @see https://ns.editeur.org/onix/en/156
	 */
	protected static $en = [
		'01' => 'Review',
		'02' => 'Bestseller list',
		'03' => 'Media mention',
		'04' => '‘One locality, one book’ program',
		'05' => 'Curated list',
	];

	/**
	 * Code List 156 for es
	 *
	 * @var array
	 * @see https://ns.editeur.org/onix/es/156
	 */
	protected static $es = [
		'01' => 'Crítica',
		'02' => 'Lista de más vendidos («bestsellers»)',
		'03' => 'Mención en algún medio',
		'04' => 'Programa «One locality, one book» (Una localidad, un libro)',
		'05' => 'Lista seleccionada',
	];

	/**
	 * Code List 156 for de
	 *
	 * @var array
	 * @see https://ns.editeur.org/onix/de/156
	 */
	protected static $de = [
		'01' => 'Review',
		'02' => 'Bestseller list',
		'03' => 'Media mention',
		'04' => '‘One locality, one book’ program',
		'05' => 'Curated list',
	];

	/**
	 * Code List 156 for fr
	 *
	 * @var array
	 * @see https://ns.editeur.org/onix/fr/156
	 */
	protected static $fr = [
		'01' => 'Critique',
		'02' => 'Liste des best-sellers',
		'03' => 'Mention par les médias',
		'04' => 'Programme « Une ville, un livre »',
		'05' => 'Bibliographie sélective',
	];

	/**
	 * Code List 156 for it
	 *
	 * @var array
	 * @see https://ns.editeur.org/onix/it/156
	 */
	protected static $it = [
		'01' => 'Recensione',
		'02' => 'Elenco bestseller',
		'03' => 'Menzione nei mezzi di comunicazione',
		'04' => 'Programma «One locality, one book»',
		'05' => 'Lista selezionata',
	];

	/**
	 * Code List 156 for nb
	 *
	 * @var array
	 * @see https://ns.editeur.org/onix/nb/156
	 */
	protected static $nb = [
		'01' => 'Anmeldelse',
		'02' => 'Bestselgerliste',
		'03' => 'Nevnt i media',
		'04' => '‘One locality, one book’ program',
		'05' => 'Redigert liste',
	];

	/**
	 * Code List 156 for tr
	 *
	 * @var array
	 * @see https://ns.editeur.org/onix/tr/156
	 */
	protected static $tr = [
		'01' => 'İnceleme',
		'02' => 'Çok satanlar listesi',
		'03' => 'Medyada yer alma',
		'04' => '‘Bir yer, bir kitap’ programı',
		'05' => 'Seçilmiş liste',
	];
}
