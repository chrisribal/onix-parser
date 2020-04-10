<?php

namespace Ribal\Onix\CodeList;

/**
 * ONIX Code List 18
 *
 * Used with <NameType> <x414>
 *
 * @see https://ns.editeur.org/onix/en/18
 */
class CodeList18 extends CodeList implements CodeListInterface
{
	/**
	 * Code List 18 for en
	 *
	 * @var array
	 * @see https://ns.editeur.org/onix/en/18
	 */
	protected static $en = [
		'00' => 'Unspecified',
		'01' => 'Pseudonym',
		'02' => 'Authority-controlled name',
		'03' => 'Earlier name',
		'04' => '‘Real’ name',
		'05' => 'Transliterated form of primary name',
		'06' => 'Later name',
		'07' => 'Fictional character name',
	];

	/**
	 * Code List 18 for es
	 *
	 * @var array
	 * @see https://ns.editeur.org/onix/es/18
	 */
	protected static $es = [
		'00' => 'No especificado',
		'01' => 'Seudónimo',
		'02' => 'Nombre controlado por una autoridad',
		'03' => 'Nombre anterior',
		'04' => 'Nombre real',
		'05' => 'Forma transliterada del nombre principal',
		'06' => 'Nombre posterior',
		'07' => 'Fictional character name',
	];

	/**
	 * Code List 18 for de
	 *
	 * @var array
	 * @see https://ns.editeur.org/onix/de/18
	 */
	protected static $de = [
		'00' => 'Unspecified',
		'01' => 'Pseudonym',
		'02' => 'Authority-controlled name',
		'03' => 'Earlier name',
		'04' => '‘Real’ name',
		'05' => 'Transliterated form of primary name',
		'06' => 'Later name',
		'07' => 'Fictional character name',
	];

	/**
	 * Code List 18 for fr
	 *
	 * @var array
	 * @see https://ns.editeur.org/onix/fr/18
	 */
	protected static $fr = [
		'00' => 'Non spécifié',
		'01' => 'Pseudonyme',
		'02' => 'Nom autorité contrôlé',
		'03' => 'Nom antérieur',
		'04' => 'Nom « réel »',
		'05' => 'Forme transcrite du nom principal',
		'06' => 'Dernière forme du nom',
		'07' => 'Fictional character name',
	];

	/**
	 * Code List 18 for it
	 *
	 * @var array
	 * @see https://ns.editeur.org/onix/it/18
	 */
	protected static $it = [
		'00' => 'Non specificato',
		'01' => 'Pseudonimo',
		'02' => 'Nome controllato appartenente a una lista di autorità',
		'03' => 'Nome precedente',
		'04' => 'Nome «reale»',
		'05' => 'Nome traslitterato',
		'06' => 'Nome successivo',
		'07' => 'Fictional character name',
	];

	/**
	 * Code List 18 for nb
	 *
	 * @var array
	 * @see https://ns.editeur.org/onix/nb/18
	 */
	protected static $nb = [
		'00' => 'Uspesifisert',
		'01' => 'Pseudonym',
		'02' => 'Autoritetskontrollert navn',
		'03' => 'Tidligere navn',
		'04' => 'Virkelig navn',
		'05' => 'Transkripsjon fra primært navn',
		'06' => 'Senere navn',
		'07' => 'Fictional character name',
	];

	/**
	 * Code List 18 for tr
	 *
	 * @var array
	 * @see https://ns.editeur.org/onix/tr/18
	 */
	protected static $tr = [
		'00' => 'Belirtilmemiş',
		'01' => 'Müstear isim',
		'02' => 'Otorite denetimli isim',
		'03' => 'Önceki isim',
		'04' => '‘Gerçek’ isim',
		'05' => 'Asıl ismin çeviriyazım biçimi',
		'06' => 'Sonraki adı',
		'07' => 'Fictional character name',
	];
}
