<?php

namespace Ribal\Onix\CodeList;

/**
 * ONIX Code List 162
 *
 * Used with <ResourceVersionFeatureType> <x442>
 *
 * @see https://ns.editeur.org/onix/en/162
 */
class CodeList162 extends CodeList implements CodeListInterface
{
	/**
	 * Code List 162 for en
	 *
	 * @var array
	 * @see https://ns.editeur.org/onix/en/162
	 */
	protected static $en = [
		'01' => 'File format',
		'02' => 'Image height in pixels',
		'03' => 'Image width in pixels',
		'04' => 'Filename',
		'05' => 'Approximate download file size in megabytes',
		'06' => 'MD5 hash value',
		'07' => 'Exact download file size in bytes',
		'08' => 'SHA-256 hash value',
	];

	/**
	 * Code List 162 for es
	 *
	 * @var array
	 * @see https://ns.editeur.org/onix/es/162
	 */
	protected static $es = [
		'01' => 'Formato de archivo',
		'02' => 'Alto de imagen en píxeles',
		'03' => 'Ancho de imagen en píxeles',
		'04' => 'Nombre de archivo',
		'05' => 'Tamaño aproximado del archivo («peso») en megabytes',
		'06' => 'Valor del «hash» MD5',
		'07' => 'Tamaño exacto del archivo («peso») en bytes, para la descarga',
		'08' => 'Valor «hash» SHA-256',
	];

	/**
	 * Code List 162 for de
	 *
	 * @var array
	 * @see https://ns.editeur.org/onix/de/162
	 */
	protected static $de = [
		'01' => 'File format',
		'02' => 'Image height in pixels',
		'03' => 'Image width in pixels',
		'04' => 'Filename',
		'05' => 'Approximate download file size in megabytes',
		'06' => 'MD5 hash value',
		'07' => 'Exact download file size in bytes',
		'08' => 'SHA-256 hash value',
	];

	/**
	 * Code List 162 for fr
	 *
	 * @var array
	 * @see https://ns.editeur.org/onix/fr/162
	 */
	protected static $fr = [
		'01' => 'Format de fichier',
		'02' => 'Hauteur de l’image en pixels',
		'03' => 'Largeur de l’image en pixels',
		'04' => 'Nom de fichier',
		'05' => 'Taille approximative du fichier téléchargeable en mégaoctets',
		'06' => 'Valeur de hachage MD5',
		'07' => 'Taille exacte du fichier téléchargeable en octets',
		'08' => 'Valeur de hachage SHA-256',
	];

	/**
	 * Code List 162 for it
	 *
	 * @var array
	 * @see https://ns.editeur.org/onix/it/162
	 */
	protected static $it = [
		'01' => 'Formato del file',
		'02' => 'Immagine: altezza in pixel',
		'03' => 'Immagine: larghezza in pixel',
		'04' => 'Nome del file',
		'05' => 'Dimensioni approssimative del file in megabyte (download)',
		'06' => 'Valore di hash MD5',
		'07' => 'Dimensioni esatte del file in byte (download)',
		'08' => 'Valore di hash SHA-256',
	];

	/**
	 * Code List 162 for nb
	 *
	 * @var array
	 * @see https://ns.editeur.org/onix/nb/162
	 */
	protected static $nb = [
		'01' => 'Filformat',
		'02' => 'Bilde: høyde i piksler',
		'03' => 'Bilde: bredde i piksler',
		'04' => 'Filnavn',
		'05' => 'Nedlastbar fil: omtrentlig størrelse i megabyte',
		'06' => 'MD5 hash value',
		'07' => 'Nedlastbar fil: eksakt størrelse i bytes',
		'08' => 'SHA-256 hash value',
	];

	/**
	 * Code List 162 for tr
	 *
	 * @var array
	 * @see https://ns.editeur.org/onix/tr/162
	 */
	protected static $tr = [
		'01' => 'Dosya formatı',
		'02' => 'Piksel olarak resim yüksekliği',
		'03' => 'Piksel olarak resim genişliği',
		'04' => 'Dosya adı',
		'05' => 'Megabayt olarak indirilecek dosyanın yaklaşık boyutu',
		'06' => 'MD5 hash değeri',
		'07' => 'Bayt olarak indirilecek tam dosya boyutu',
		'08' => 'SHA-256 karma değeri',
	];
}
