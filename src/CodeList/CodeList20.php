<?php

namespace Ribal\Onix\CodeList;

/**
 * ONIX Code List 20
 *
 * Used with    • <EventRole> <x515>    • <ConferenceRole> <b051>ONIX 3 only
 *
 * @see https://ns.editeur.org/onix/en/20
 */
class CodeList20 extends CodeList implements CodeListInterface
{
	/**
	 * Code List 20 for en
	 *
	 * @var array
	 * @see https://ns.editeur.org/onix/en/20
	 */
	protected static $en = [
		'01' => 'Publication linked to conference',
		'02' => 'Complete proceedings of conference',
		'03' => 'Selected papers from conference',
		'11' => 'Publication linked to sporting event',
		'12' => 'Programme or guide for sporting event',
		'21' => 'Publication linked to artistic event',
		'22' => 'Programme or guide for artistic event',
		'31' => 'Publication linked to exposition',
		'32' => 'Programme or guide for exposition',
	];

	/**
	 * Code List 20 for es
	 *
	 * @var array
	 * @see https://ns.editeur.org/onix/es/20
	 */
	protected static $es = [
		'01' => 'Publicación relacionada con un congreso, un simposio, etc.',
		'02' => 'Actas o conclusiones completas de un congreso o simposio',
		'03' => 'Ponencias seleccionadas de un congreso o simposio',
		'11' => 'Publicación relacionada con un evento deportivo',
		'12' => 'Programa o guía de un evento deportivo',
		'21' => 'Publicación relacionada con un evento artístico o cultural',
		'22' => 'Programa o guía de un evento artístico o cultural',
		'31' => 'Publicación relacionada con una exposición',
		'32' => 'Programa o guía de una exposición',
	];

	/**
	 * Code List 20 for de
	 *
	 * @var array
	 * @see https://ns.editeur.org/onix/de/20
	 */
	protected static $de = [
		'01' => 'Publication linked to conference',
		'02' => 'Complete proceedings of conference',
		'03' => 'Selected papers from conference',
		'11' => 'Publication linked to sporting event',
		'12' => 'Programme or guide for sporting event',
		'21' => 'Publication linked to artistic event',
		'22' => 'Programme or guide for artistic event',
		'31' => 'Publication linked to exposition',
		'32' => 'Programme or guide for exposition',
	];

	/**
	 * Code List 20 for fr
	 *
	 * @var array
	 * @see https://ns.editeur.org/onix/fr/20
	 */
	protected static $fr = [
		'01' => 'Publication liée à une conférence',
		'02' => 'Actes complets de la conférence',
		'03' => 'Sélection de documents de la conférence',
		'11' => 'Publication liée à un événement sportif',
		'12' => 'Programme ou guide d’un événement sportif',
		'21' => 'Publication liée à un événement artistique',
		'22' => 'Programme ou guide d’un événement artistique',
		'31' => 'Publication liée à une exposition',
		'32' => 'Programme ou guide d’une exposition',
	];

	/**
	 * Code List 20 for it
	 *
	 * @var array
	 * @see https://ns.editeur.org/onix/it/20
	 */
	protected static $it = [
		'01' => 'Pubblicazione collegata al convegno',
		'02' => 'Atti completi del convegno',
		'03' => 'Estratti dal convegno',
		'11' => 'Pubblicazione collegata a un evento sportivo',
		'12' => 'Programma o guida a un evento sportivo',
		'21' => 'Pubblicazione collegata a un evento artistico',
		'22' => 'Programma o guida a un evento artistico',
		'31' => 'Pubblicazione collegata a un’esposizione',
		'32' => 'Programma o guida a un’esposizione',
	];

	/**
	 * Code List 20 for nb
	 *
	 * @var array
	 * @see https://ns.editeur.org/onix/nb/20
	 */
	protected static $nb = [
		'01' => 'Publication linked to conference',
		'02' => 'Complete proceedings of conference',
		'03' => 'Selected papers from conference',
		'11' => 'Publication linked to sporting event',
		'12' => 'Programme or guide to sporting event',
		'21' => 'Publication linked to artistic event',
		'22' => 'Programme or guide to artistic event',
		'31' => 'Publication linked to exposition',
		'32' => 'Programme or guide for exposition',
	];

	/**
	 * Code List 20 for tr
	 *
	 * @var array
	 * @see https://ns.editeur.org/onix/tr/20
	 */
	protected static $tr = [
		'01' => 'Konferans ile bağlantılı yayın',
		'02' => 'Konferansın tüm kayıtları',
		'03' => 'Konferanstan seçilmiş makaleler',
		'11' => 'Spor etkinliği ile ilişkili yayın',
		'12' => 'Spor etkinliği programı veya rehberi',
		'21' => 'Sanat etkinliği ile ilişkili yayın',
		'22' => 'Sanat etkinliği programı veya rehberi',
		'31' => 'Fuar ile ilişkili yayın',
		'32' => 'Fuar programı veya rehberi',
	];
}
