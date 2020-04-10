<?php

namespace Ribal\Onix\CodeList;

/**
 * ONIX Code List 230
 *
 * Used with <PriceConstraintType> <x529>
 *
 * @see https://ns.editeur.org/onix/en/230
 */
class CodeList230 extends CodeList implements CodeListInterface
{
	/**
	 * Code List 230 for en
	 *
	 * @var array
	 * @see https://ns.editeur.org/onix/en/230
	 */
	protected static $en = [
		'00' => 'No constraints',
		'06' => 'Lend',
		'07' => 'Time-limited license',
		'08' => 'Loan renewal',
		'09' => 'Multi-user license',
		'10' => 'Preview on premises',
	];

	/**
	 * Code List 230 for es
	 *
	 * @var array
	 * @see https://ns.editeur.org/onix/es/230
	 */
	protected static $es = [
		'00' => 'Sin restricciones',
		'06' => 'Préstamo',
		'07' => 'Licencia por tiempo limitado',
		'08' => 'Renovación de préstamo',
		'09' => 'Licencia multi-usuario',
		'10' => 'Previsualización en una ubicación física',
	];

	/**
	 * Code List 230 for de
	 *
	 * @var array
	 * @see https://ns.editeur.org/onix/de/230
	 */
	protected static $de = [
		'00' => 'No constraints',
		'06' => 'Lend',
		'07' => 'Time-limited license',
		'08' => 'Loan renewal',
		'09' => 'Multi-user license',
		'10' => 'Preview on premises',
	];

	/**
	 * Code List 230 for fr
	 *
	 * @var array
	 * @see https://ns.editeur.org/onix/fr/230
	 */
	protected static $fr = [
		'00' => 'Pas de contrainte',
		'06' => 'Prêt',
		'07' => 'Licence à durée limitée',
		'08' => 'Renouvellement du prêt',
		'09' => 'Licence multi-utilisateurs',
		'10' => 'Aperçu sur site',
	];

	/**
	 * Code List 230 for it
	 *
	 * @var array
	 * @see https://ns.editeur.org/onix/it/230
	 */
	protected static $it = [
		'00' => 'Nessuna restrizione',
		'06' => 'Prestito',
		'07' => 'Licenza limitata nel tempo',
		'08' => 'Rinnovo del prestito',
		'09' => 'Licenza multiutente',
		'10' => 'Anteprima in loco',
	];

	/**
	 * Code List 230 for nb
	 *
	 * @var array
	 * @see https://ns.editeur.org/onix/nb/230
	 */
	protected static $nb = [
		'00' => 'Ingen begrensninger',
		'06' => 'Lån',
		'07' => 'Tidsbegrenset lisens',
		'08' => 'Fornyelse av lån',
		'09' => 'Flerbrukerlisens',
		'10' => 'Forhåndsvisning på lokasjon',
	];

	/**
	 * Code List 230 for tr
	 *
	 * @var array
	 * @see https://ns.editeur.org/onix/tr/230
	 */
	protected static $tr = [
		'00' => 'Sınırlama yok',
		'06' => 'Ödünç verme',
		'07' => 'Sınırlı süreli lisans',
		'08' => 'Ödünç yenileme',
		'09' => 'Çok kullanıcılı lisans',
		'10' => 'Preview on premises',
	];
}
