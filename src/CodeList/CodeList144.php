<?php

namespace Ribal\Onix\CodeList;

/**
 * ONIX Code List 144
 *
 * Used with <EpubTechnicalProtection> <x317>
 *
 * @see https://ns.editeur.org/onix/en/144
 */
class CodeList144 extends CodeList implements CodeListInterface
{
	/**
	 * Code List 144 for en
	 *
	 * @var array
	 * @see https://ns.editeur.org/onix/en/144
	 */
	protected static $en = [
		'00' => 'None',
		'01' => 'DRM',
		'02' => 'Digital watermarking',
		'03' => 'Adobe DRM',
		'04' => 'Apple DRM',
		'05' => 'OMA DRM',
		'06' => 'Readium LCP DRM',
		'07' => 'Sony DRM',
	];

	/**
	 * Code List 144 for es
	 *
	 * @var array
	 * @see https://ns.editeur.org/onix/es/144
	 */
	protected static $es = [
		'00' => 'Ninguno',
		'01' => 'DRM',
		'02' => 'Marca de agua digital',
		'03' => 'DRM de Adobe',
		'04' => 'DRM de Apple',
		'05' => 'DRM de OMA',
		'06' => 'LCP DRM',
		'07' => 'Sony DRM',
	];

	/**
	 * Code List 144 for de
	 *
	 * @var array
	 * @see https://ns.editeur.org/onix/de/144
	 */
	protected static $de = [
		'00' => 'None',
		'01' => 'DRM',
		'02' => 'Digital watermarking',
		'03' => 'Adobe DRM',
		'04' => 'Apple DRM',
		'05' => 'OMA DRM',
		'06' => 'Readium LCP DRM',
		'07' => 'Sony DRM',
	];

	/**
	 * Code List 144 for fr
	 *
	 * @var array
	 * @see https://ns.editeur.org/onix/fr/144
	 */
	protected static $fr = [
		'00' => 'Aucune',
		'01' => 'DRM',
		'02' => 'Filigrane numérique',
		'03' => 'Adobe DRM',
		'04' => 'Apple DRM',
		'05' => 'OMA DRM',
		'06' => 'LCP DRM',
		'07' => 'Sony DRM',
	];

	/**
	 * Code List 144 for it
	 *
	 * @var array
	 * @see https://ns.editeur.org/onix/it/144
	 */
	protected static $it = [
		'00' => 'Nessuna',
		'01' => 'DRM',
		'02' => 'Filigrana digitale',
		'03' => 'DRM di Adobe',
		'04' => 'DRM di Apple',
		'05' => 'DRM di OMA',
		'06' => 'Readium LCP DRM',
		'07' => 'Sony DRM',
	];

	/**
	 * Code List 144 for nb
	 *
	 * @var array
	 * @see https://ns.editeur.org/onix/nb/144
	 */
	protected static $nb = [
		'00' => 'Ingen',
		'01' => 'DRM',
		'02' => 'Vannmerking',
		'03' => 'Adobe DRM',
		'04' => 'Apple DRM',
		'05' => 'OMA DRM',
		'06' => 'Readium LCP DRM',
		'07' => 'Sony DRM',
	];

	/**
	 * Code List 144 for tr
	 *
	 * @var array
	 * @see https://ns.editeur.org/onix/tr/144
	 */
	protected static $tr = [
		'00' => 'Hiçbiri',
		'01' => 'DRM',
		'02' => 'Dijital filigran',
		'03' => 'Adobe DRM',
		'04' => 'Apple DRM',
		'05' => 'OMA DRM',
		'06' => 'LCP DRM',
		'07' => 'Sony DRM',
	];
}
