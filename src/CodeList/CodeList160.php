<?php

namespace Ribal\Onix\CodeList;

/**
 * ONIX Code List 160
 *
 * Used with <ResourceFeatureType> <x438>
 *
 * @see https://ns.editeur.org/onix/en/160
 */
class CodeList160 extends CodeList implements CodeListInterface
{
	/**
	 * Code List 160 for en
	 *
	 * @var array
	 * @see https://ns.editeur.org/onix/en/160
	 */
	protected static $en = [
		'01' => 'Required credit',
		'02' => 'Caption',
		'03' => 'Copyright holder',
		'04' => 'Length in minutes',
		'05' => 'ISNI of resource contributor',
		'06' => 'Proprietary ID of resource contributor',
	];

	/**
	 * Code List 160 for es
	 *
	 * @var array
	 * @see https://ns.editeur.org/onix/es/160
	 */
	protected static $es = [
		'01' => 'Créditos (autoría) requeridos',
		'02' => 'Pie / Título',
		'03' => 'Propietario del copyright',
		'04' => 'Duración en minutos',
		'05' => 'ISNI del autor mencionado en el recurso',
		'06' => 'Identificador propio de un autor del recurso',
	];

	/**
	 * Code List 160 for de
	 *
	 * @var array
	 * @see https://ns.editeur.org/onix/de/160
	 */
	protected static $de = [
		'01' => 'Required credit',
		'02' => 'Caption',
		'03' => 'Copyright holder',
		'04' => 'Length in minutes',
		'05' => 'ISNI of resource contributor',
		'06' => 'Proprietary ID of resource contributor',
	];

	/**
	 * Code List 160 for fr
	 *
	 * @var array
	 * @see https://ns.editeur.org/onix/fr/160
	 */
	protected static $fr = [
		'01' => 'Crédit obligatoire',
		'02' => 'Légende',
		'03' => 'Détenteur du copyright',
		'04' => 'Durée en minutes',
		'05' => 'ISNI du contributeur de la ressource',
		'06' => 'ID propriétaire du contributeur de la ressource',
	];

	/**
	 * Code List 160 for it
	 *
	 * @var array
	 * @see https://ns.editeur.org/onix/it/160
	 */
	protected static $it = [
		'01' => 'Riconoscimenti richiesti',
		'02' => 'Didascalia',
		'03' => 'Titolare dei diritti d’autore',
		'04' => 'Durata in minuti',
		'05' => 'ISNI del contributore della risorsa',
		'06' => 'Identificativo proprietario del contributore della risorsa',
	];

	/**
	 * Code List 160 for nb
	 *
	 * @var array
	 * @see https://ns.editeur.org/onix/nb/160
	 */
	protected static $nb = [
		'01' => 'Required credit',
		'02' => 'Caption',
		'03' => 'Copyright holder',
		'04' => 'Length in minutes',
		'05' => 'ISNI of resource contributor',
		'06' => 'Proprietary ID of resource contributor',
	];

	/**
	 * Code List 160 for tr
	 *
	 * @var array
	 * @see https://ns.editeur.org/onix/tr/160
	 */
	protected static $tr = [
		'01' => 'Kredi gerekli',
		'02' => 'Altyazı',
		'03' => 'Telif hakkı sahibi',
		'04' => 'Dakika olarak süre',
		'05' => 'Kaynak katkı sahibine ait ISNI',
		'06' => 'Kaynak katkı sahibine ait özel kimlik',
	];
}
