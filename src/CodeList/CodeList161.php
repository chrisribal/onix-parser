<?php

namespace Ribal\Onix\CodeList;

/**
 * ONIX Code List 161
 *
 * Used with <ResourceForm> <x441>
 *
 * @see https://ns.editeur.org/onix/en/161
 */
class CodeList161 extends CodeList implements CodeListInterface
{
	/**
	 * Code List 161 for en
	 *
	 * @var array
	 * @see https://ns.editeur.org/onix/en/161
	 */
	protected static $en = [
		'01' => 'Linkable resource',
		'02' => 'Downloadable file',
		'03' => 'Embeddable application',
	];

	/**
	 * Code List 161 for es
	 *
	 * @var array
	 * @see https://ns.editeur.org/onix/es/161
	 */
	protected static $es = [
		'01' => 'Recurso vinculable',
		'02' => 'Archivo descargable',
		'03' => 'Aplicación embebible',
	];

	/**
	 * Code List 161 for de
	 *
	 * @var array
	 * @see https://ns.editeur.org/onix/de/161
	 */
	protected static $de = [
		'01' => 'Link',
		'02' => 'Datei zum Herunterladen',
		'03' => 'Einbettbare Applikation',
	];

	/**
	 * Code List 161 for fr
	 *
	 * @var array
	 * @see https://ns.editeur.org/onix/fr/161
	 */
	protected static $fr = [
		'01' => 'Ressource accessible par lien',
		'02' => 'Fichier téléchargeable',
		'03' => 'Application embarquée',
	];

	/**
	 * Code List 161 for it
	 *
	 * @var array
	 * @see https://ns.editeur.org/onix/it/161
	 */
	protected static $it = [
		'01' => 'Risorsa accessibile tramite collegamento ipertestuale',
		'02' => 'File scaricabile',
		'03' => 'Applicazione incorporabile',
	];

	/**
	 * Code List 161 for nb
	 *
	 * @var array
	 * @see https://ns.editeur.org/onix/nb/161
	 */
	protected static $nb = [
		'01' => 'Lenkbar ressurs',
		'02' => 'Nedlastbar fil',
		'03' => 'Applikasjon som kan inkluderes på nettsted',
	];

	/**
	 * Code List 161 for tr
	 *
	 * @var array
	 * @see https://ns.editeur.org/onix/tr/161
	 */
	protected static $tr = [
		'01' => 'Bağlantılandırılabilir kaynak',
		'02' => 'İndirilebilir dosya',
		'03' => 'Gömülü uygulama',
	];
}
