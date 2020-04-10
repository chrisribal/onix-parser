<?php

namespace Ribal\Onix\CodeList;

/**
 * ONIX Code List 70
 *
 * Used with <StockQuantityCodeType> <j293>
 *
 * @see https://ns.editeur.org/onix/en/70
 */
class CodeList70 extends CodeList implements CodeListInterface
{
	/**
	 * Code List 70 for en
	 *
	 * @var array
	 * @see https://ns.editeur.org/onix/en/70
	 */
	protected static $en = ['01' => 'Proprietary', '02' => 'APA stock quantity code'];

	/**
	 * Code List 70 for es
	 *
	 * @var array
	 * @see https://ns.editeur.org/onix/es/70
	 */
	protected static $es = ['01' => 'Propio / Privado', '02' => 'Código de stock de la APA'];

	/**
	 * Code List 70 for de
	 *
	 * @var array
	 * @see https://ns.editeur.org/onix/de/70
	 */
	protected static $de = ['01' => 'Proprietary', '02' => 'APA stock quantity code'];

	/**
	 * Code List 70 for fr
	 *
	 * @var array
	 * @see https://ns.editeur.org/onix/fr/70
	 */
	protected static $fr = ['01' => 'Propriétaire', '02' => 'Quantité de stock APA'];

	/**
	 * Code List 70 for it
	 *
	 * @var array
	 * @see https://ns.editeur.org/onix/it/70
	 */
	protected static $it = ['01' => 'Proprietario', '02' => 'Codice APA'];

	/**
	 * Code List 70 for nb
	 *
	 * @var array
	 * @see https://ns.editeur.org/onix/nb/70
	 */
	protected static $nb = ['01' => 'Proprietær', '02' => 'APA stock quantity code'];

	/**
	 * Code List 70 for tr
	 *
	 * @var array
	 * @see https://ns.editeur.org/onix/tr/70
	 */
	protected static $tr = ['01' => 'Özel', '02' => 'APA stok miktarı kodu'];
}
