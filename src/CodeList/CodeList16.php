<?php

namespace Ribal\Onix\CodeList;

/**
 * ONIX Code List 16
 *
 * Used with <WorkIDType> <b201>
 *
 * @see https://ns.editeur.org/onix/en/16
 */
class CodeList16 extends CodeList implements CodeListInterface
{
	/**
	 * Code List 16 for en
	 *
	 * @var array
	 * @see https://ns.editeur.org/onix/en/16
	 */
	protected static $en = [
		'01' => 'Proprietary',
		'02' => 'ISBN-10',
		'06' => 'DOI',
		'11' => 'ISTC',
		'15' => 'ISBN-13',
		'18' => 'ISRC',
		'32' => 'GLIMIR',
		'33' => 'OWI',
	];

	/**
	 * Code List 16 for es
	 *
	 * @var array
	 * @see https://ns.editeur.org/onix/es/16
	 */
	protected static $es = [
		'01' => 'Propio / Privado',
		'02' => 'ISBN-10',
		'06' => 'DOI',
		'11' => 'ISTC',
		'15' => 'ISBN-13',
		'18' => 'ISRC',
		'32' => 'GLIMIR',
		'33' => 'OWI',
	];

	/**
	 * Code List 16 for de
	 *
	 * @var array
	 * @see https://ns.editeur.org/onix/de/16
	 */
	protected static $de = [
		'01' => 'Proprietary',
		'02' => 'ISBN-10',
		'06' => 'DOI',
		'11' => 'ISTC',
		'15' => 'ISBN-13',
		'18' => 'ISRC',
		'32' => 'GLIMIR',
		'33' => 'OWI',
	];

	/**
	 * Code List 16 for fr
	 *
	 * @var array
	 * @see https://ns.editeur.org/onix/fr/16
	 */
	protected static $fr = [
		'01' => 'Propriétaire',
		'02' => 'ISBN-10',
		'06' => 'DOI',
		'11' => 'ISTC',
		'15' => 'ISBN-13',
		'18' => 'ISRC',
		'32' => 'GLIMIR',
		'33' => 'OWI',
	];

	/**
	 * Code List 16 for it
	 *
	 * @var array
	 * @see https://ns.editeur.org/onix/it/16
	 */
	protected static $it = [
		'01' => 'Proprietario',
		'02' => 'ISBN-10',
		'06' => 'DOI',
		'11' => 'ISTC',
		'15' => 'ISBN-13',
		'18' => 'ISRC',
		'32' => 'GLIMIR',
		'33' => 'OWI',
	];

	/**
	 * Code List 16 for nb
	 *
	 * @var array
	 * @see https://ns.editeur.org/onix/nb/16
	 */
	protected static $nb = [
		'01' => 'Proprietær',
		'02' => 'ISBN-10',
		'06' => 'DOI',
		'11' => 'ISTC',
		'15' => 'ISBN-13',
		'18' => 'ISRC',
		'32' => 'GLIMIR',
		'33' => 'OWI',
	];

	/**
	 * Code List 16 for tr
	 *
	 * @var array
	 * @see https://ns.editeur.org/onix/tr/16
	 */
	protected static $tr = [
		'01' => 'Özel',
		'02' => 'ISBN-10',
		'06' => 'DOI',
		'11' => 'ISTC',
		'15' => 'ISBN-13',
		'18' => 'ISRC',
		'32' => 'GLIMIR',
		'33' => 'OWI',
	];
}
