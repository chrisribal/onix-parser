<?php

namespace Ribal\Onix\CodeList;

/**
 * ONIX Code List 50
 *
 * Used with <MeasureUnitCode> <c095>
 *
 * @see https://ns.editeur.org/onix/en/50
 */
class CodeList50 extends CodeList implements CodeListInterface
{
	/**
	 * Code List 50 for en
	 *
	 * @var array
	 * @see https://ns.editeur.org/onix/en/50
	 */
	protected static $en = [
		'cm' => 'Centimeters',
		'gr' => 'Grams',
		'in' => 'Inches (US)',
		'kg' => 'Kilograms',
		'lb' => 'Pounds (US)',
		'mm' => 'Millimeters',
		'oz' => 'Ounces (US)',
		'px' => 'Pixels',
	];

	/**
	 * Code List 50 for es
	 *
	 * @var array
	 * @see https://ns.editeur.org/onix/es/50
	 */
	protected static $es = [
		'cm' => 'Centímetros',
		'gr' => 'Gramos',
		'in' => 'Pulgadas (EE.UU.)',
		'kg' => 'Kilogramos',
		'lb' => 'Libras (EE.UU.)',
		'mm' => 'Milímetros',
		'oz' => 'Onzas (EE.UU.)',
		'px' => 'Píxeles',
	];

	/**
	 * Code List 50 for de
	 *
	 * @var array
	 * @see https://ns.editeur.org/onix/de/50
	 */
	protected static $de = [
		'cm' => 'Zentimeter',
		'gr' => 'Gramm',
		'in' => 'Zoll (US)',
		'kg' => 'Kilogramm',
		'lb' => 'Pfund (US)',
		'mm' => 'Millimeter',
		'oz' => 'Unzen (US)',
		'px' => 'Pixel',
	];

	/**
	 * Code List 50 for fr
	 *
	 * @var array
	 * @see https://ns.editeur.org/onix/fr/50
	 */
	protected static $fr = [
		'cm' => 'Centimètres',
		'gr' => 'Grammes',
		'in' => 'Pouces (Etats-Unis)',
		'kg' => 'Kilogrammes',
		'lb' => 'Livres (Etats-Unis)',
		'mm' => 'Millimètres',
		'oz' => 'Onces (Etats-Unis)',
		'px' => 'Pixels',
	];

	/**
	 * Code List 50 for it
	 *
	 * @var array
	 * @see https://ns.editeur.org/onix/it/50
	 */
	protected static $it = [
		'cm' => 'Centimetri',
		'gr' => 'Grammi',
		'in' => 'Pollici (USA)',
		'kg' => 'Chilogrammi',
		'lb' => 'Libbre (USA)',
		'mm' => 'Millimetri',
		'oz' => 'Once (USA)',
		'px' => 'Pixel',
	];

	/**
	 * Code List 50 for nb
	 *
	 * @var array
	 * @see https://ns.editeur.org/onix/nb/50
	 */
	protected static $nb = [
		'cm' => 'Centimeter',
		'gr' => 'Gram',
		'in' => 'Tommer (USA)',
		'kg' => 'Kilogram',
		'lb' => 'Pund (USA)',
		'mm' => 'Millimeter',
		'oz' => 'Unser (USA)',
		'px' => 'Pixels',
	];

	/**
	 * Code List 50 for tr
	 *
	 * @var array
	 * @see https://ns.editeur.org/onix/tr/50
	 */
	protected static $tr = [
		'cm' => 'Santimetre',
		'gr' => 'Gram',
		'in' => 'İnç (ABD)',
		'kg' => 'Kilogram',
		'lb' => 'Pound (ABD)',
		'mm' => 'Milimetre',
		'oz' => 'Ons (ABD)',
		'px' => 'Piksel',
	];
}
