<?php

namespace Ribal\Onix\CodeList;

/**
 * ONIX Code List 164
 *
 * Used with <WorkRelationCode> <x454>
 *
 * @see https://ns.editeur.org/onix/en/164
 */
class CodeList164 extends CodeList implements CodeListInterface
{
	/**
	 * Code List 164 for en
	 *
	 * @var array
	 * @see https://ns.editeur.org/onix/en/164
	 */
	protected static $en = [
		'01' => 'Manifestation of',
		'02' => 'Derived from',
		'03' => 'Related work is derived from this',
		'04' => 'Other work in same collection',
		'05' => 'Other work by same contributor',
	];

	/**
	 * Code List 164 for es
	 *
	 * @var array
	 * @see https://ns.editeur.org/onix/es/164
	 */
	protected static $es = [
		'01' => 'Manifestación de',
		'02' => 'Derivado de',
		'03' => 'La obra relacionada es una derivación de esta',
		'04' => 'Otra obra en la misma colección',
		'05' => 'Otra obra del mismo autor, ilustrador, etc.',
	];

	/**
	 * Code List 164 for de
	 *
	 * @var array
	 * @see https://ns.editeur.org/onix/de/164
	 */
	protected static $de = [
		'01' => 'Manifestation of',
		'02' => 'Derived from',
		'03' => 'Related work is derived from this',
		'04' => 'Other work in same collection',
		'05' => 'Other work by same contributor',
	];

	/**
	 * Code List 164 for fr
	 *
	 * @var array
	 * @see https://ns.editeur.org/onix/fr/164
	 */
	protected static $fr = [
		'01' => 'Manifestation de',
		'02' => 'Dérivée de',
		'03' => 'L’œuvre liée est dérivée de celle-ci',
		'04' => 'Autre œuvre dans la même collection',
		'05' => 'Autre œuvre du même contributeur',
	];

	/**
	 * Code List 164 for it
	 *
	 * @var array
	 * @see https://ns.editeur.org/onix/it/164
	 */
	protected static $it = [
		'01' => 'Manifestazione di',
		'02' => 'Derivato da',
		'03' => 'L’opera collegata è derivata da questa',
		'04' => 'Altra opera della stessa collezione',
		'05' => 'Altra opera dello stesso autore/contributore',
	];

	/**
	 * Code List 164 for nb
	 *
	 * @var array
	 * @see https://ns.editeur.org/onix/nb/164
	 */
	protected static $nb = [
		'01' => 'Manifestation of',
		'02' => 'Derived from',
		'03' => 'Related work is derived from this',
		'04' => 'Other work in same collection',
		'05' => 'Other work by same contributor',
	];

	/**
	 * Code List 164 for tr
	 *
	 * @var array
	 * @see https://ns.editeur.org/onix/tr/164
	 */
	protected static $tr = [
		'01' => 'Sunum biçimi',
		'02' => 'Türeme',
		'03' => 'İlgili ürün bundan türetilme',
		'04' => 'Aynı koleksiyona ait diğer eser',
		'05' => 'Aynı katkı sahibine ait diğer eser',
	];
}
