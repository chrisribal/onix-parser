<?php

namespace Ribal\Onix\CodeList;

/**
 * ONIX Code List 66
 *
 * Used with <ReturnsCode> <j269>From BISAC Implementation Guideline for EDI, Version 3, Release 6, Section 832: Price/Sales Catalog
 *
 * @see https://ns.editeur.org/onix/en/66
 */
class CodeList66 extends CodeList implements CodeListInterface
{
	/**
	 * Code List 66 for en
	 *
	 * @var array
	 * @see https://ns.editeur.org/onix/en/66
	 */
	protected static $en = [
		'N' => 'No, not returnable',
		'Y' => 'Yes, returnable, full copies only',
		'S' => 'Yes, returnable, stripped cover',
		'C' => 'Conditional',
	];

	/**
	 * Code List 66 for es
	 *
	 * @var array
	 * @see https://ns.editeur.org/onix/es/66
	 */
	protected static $es = [
		'N' => 'Devolución no autorizada',
		'Y' => 'Devolución autorizada, sólo ejemplares completos',
		'S' => 'Devolución autorizada, cubierta rota',
		'C' => 'Devolución condicionada',
	];

	/**
	 * Code List 66 for de
	 *
	 * @var array
	 * @see https://ns.editeur.org/onix/de/66
	 */
	protected static $de = [
		'N' => 'No, not returnable',
		'Y' => 'Yes, returnable, full copies only',
		'S' => 'Yes, returnable, stripped cover',
		'C' => 'Conditional',
	];

	/**
	 * Code List 66 for fr
	 *
	 * @var array
	 * @see https://ns.editeur.org/onix/fr/66
	 */
	protected static $fr = [
		'N' => 'Non, retour non accepté',
		'Y' => 'Oui, retour accepté, exemplaire complet uniquement',
		'S' => 'Oui, retour accepté, couverture arrachée',
		'C' => 'Sous condition',
	];

	/**
	 * Code List 66 for it
	 *
	 * @var array
	 * @see https://ns.editeur.org/onix/it/66
	 */
	protected static $it = [
		'N' => 'Reso non autorizzato',
		'Y' => 'Reso autorizzato, solo copie integre',
		'S' => 'Reso autorizzato, copertina strappata',
		'C' => 'Reso condizionato',
	];

	/**
	 * Code List 66 for nb
	 *
	 * @var array
	 * @see https://ns.editeur.org/onix/nb/66
	 */
	protected static $nb = [
		'N' => 'No, not returnable',
		'Y' => 'Yes, returnable, full copies only',
		'S' => 'Yes, returnable, stripped cover',
		'C' => 'Conditional',
	];

	/**
	 * Code List 66 for tr
	 *
	 * @var array
	 * @see https://ns.editeur.org/onix/tr/66
	 */
	protected static $tr = [
		'N' => 'Hayır, iade edilmez',
		'Y' => 'Evet, iade edilebilir, sadece tam nüshalar',
		'S' => 'Evet, iade edilebilir, kabı çıkarılmış ürün',
		'C' => 'Şartlı',
	];
}
