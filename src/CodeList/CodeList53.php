<?php

namespace Ribal\Onix\CodeList;

/**
 * ONIX Code List 53
 *
 * Used with <ReturnsCodeType> <j268>
 *
 * @see https://ns.editeur.org/onix/en/53
 */
class CodeList53 extends CodeList implements CodeListInterface
{
	/**
	 * Code List 53 for en
	 *
	 * @var array
	 * @see https://ns.editeur.org/onix/en/53
	 */
	protected static $en = [
		'00' => 'Proprietary',
		'01' => 'French book trade returns conditions code',
		'02' => 'BISAC Returnable Indicator code',
		'03' => 'UK book trade returns conditions code',
		'04' => 'ONIX Returns conditions code',
	];

	/**
	 * Code List 53 for es
	 *
	 * @var array
	 * @see https://ns.editeur.org/onix/es/53
	 */
	protected static $es = [
		'00' => 'Propio / Privado',
		'01' => 'Código de condiciones de devolución de libros en Francia',
		'02' => 'Código de condiciones de devolución de libros en EE.UU.',
		'03' => 'Código de condiciones de devolución de libros en el Reino Unido',
		'04' => 'Código ONIX para condiciones de devoluciones',
	];

	/**
	 * Code List 53 for de
	 *
	 * @var array
	 * @see https://ns.editeur.org/onix/de/53
	 */
	protected static $de = [
		'00' => 'Proprietary',
		'01' => 'French book trade returns conditions code',
		'02' => 'BISAC Returnable Indicator code',
		'03' => 'UK book trade returns conditions code',
		'04' => 'ONIX Returns conditions code',
	];

	/**
	 * Code List 53 for fr
	 *
	 * @var array
	 * @see https://ns.editeur.org/onix/fr/53
	 */
	protected static $fr = [
		'00' => 'Propriétaire',
		'01' => 'Code des conditions de retour de l’industrie du livre en France',
		'02' => 'Code des conditions de retour BISAC',
		'03' => 'Code des conditions de retour de l’industrie du livre au Royaume-Uni',
		'04' => 'Code des conditions de retour ONIX',
	];

	/**
	 * Code List 53 for it
	 *
	 * @var array
	 * @see https://ns.editeur.org/onix/it/53
	 */
	protected static $it = [
		'00' => 'Proprietario',
		'01' => 'Codice delle condizioni di reso nel mercato francese',
		'02' => 'BISAC Returnable Indicator code',
		'03' => 'Codice delle condizioni di reso nel mercato del Regno Unito',
		'04' => 'Codice delle condizioni di reso ONIX',
	];

	/**
	 * Code List 53 for nb
	 *
	 * @var array
	 * @see https://ns.editeur.org/onix/nb/53
	 */
	protected static $nb = [
		'00' => 'Proprietær',
		'01' => 'French book trade returns conditions code',
		'02' => 'BISAC Returnable Indicator code',
		'03' => 'UK book trade returns conditions code',
		'04' => 'ONIX Returns conditions code',
	];

	/**
	 * Code List 53 for tr
	 *
	 * @var array
	 * @see https://ns.editeur.org/onix/tr/53
	 */
	protected static $tr = [
		'00' => 'Özel',
		'01' => 'Fransız kitap ticareti iade şartları kodu',
		'02' => 'BISAC İadedeli Ürün Gösterge kodu',
		'03' => 'BK kitap ticareti iade şartları kodu',
		'04' => 'ONIX iade şartları kodu',
	];
}
