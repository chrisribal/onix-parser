<?php

namespace Ribal\Onix\CodeList;

/**
 * ONIX Code List 165
 *
 * Used with <SupplierCodeType> <x458>
 *
 * @see https://ns.editeur.org/onix/en/165
 */
class CodeList165 extends CodeList implements CodeListInterface
{
	/**
	 * Code List 165 for en
	 *
	 * @var array
	 * @see https://ns.editeur.org/onix/en/165
	 */
	protected static $en = [
		'01' => 'Supplier’s sales classification',
		'02' => 'Supplier’s bonus eligibility',
		'03' => 'Publisher’s sales classification',
		'04' => 'Supplier’s pricing restriction classification',
		'05' => 'Supplier’s sales expectation',
		'06' => 'Publisher’s sales expectation',
		'07' => 'Supplier’s order routing eligibility',
	];

	/**
	 * Code List 165 for es
	 *
	 * @var array
	 * @see https://ns.editeur.org/onix/es/165
	 */
	protected static $es = [
		'01' => 'Clasificación de ventas proporcionada por un intermediario',
		'02' => 'Elegibilidad para «bonus» asignada por un intermediario',
		'03' => 'Clasificación del tipo de venta proporcionada por la editorial',
		'04' => 'Clasificación de restricciones en el precio por un intermediario',
		'05' => 'Expectativas de ventas del proveedor',
		'06' => 'Expectativas de ventas de la editorial',
		'07' => 'Elegibilidad para enrutamiento del pedido al proveedor',
	];

	/**
	 * Code List 165 for de
	 *
	 * @var array
	 * @see https://ns.editeur.org/onix/de/165
	 */
	protected static $de = [
		'01' => 'Supplier’s sales classification',
		'02' => 'Supplier’s bonus eligibility',
		'03' => 'Publisher’s sales classification',
		'04' => 'Supplier’s pricing restriction classification',
		'05' => 'Supplier’s sales expectation',
		'06' => 'Publisher’s sales expectation',
		'07' => 'Supplier’s order routing eligibility',
	];

	/**
	 * Code List 165 for fr
	 *
	 * @var array
	 * @see https://ns.editeur.org/onix/fr/165
	 */
	protected static $fr = [
		'01' => 'Classification des ventes par le fournisseur',
		'02' => 'Eligibilité à la prime fournisseur',
		'03' => 'Classification des ventes par l’éditeur',
		'04' => 'Classification fournisseur des restrictions en matière de prix',
		'05' => 'Prévisions de vente du fournisseur',
		'06' => 'Prévisions de vente de l’éditeur',
		'07' => 'Eligibilité de l’acheminement des commandes du fournisseur',
	];

	/**
	 * Code List 165 for it
	 *
	 * @var array
	 * @see https://ns.editeur.org/onix/it/165
	 */
	protected static $it = [
		'01' => 'Classificazione delle vendite del fornitore',
		'02' => 'Incentivi del fornitore',
		'03' => 'Classificazione delle vendite dell’editore',
		'04' => 'Classificazione delle restrizioni dei prezzi del fornitore',
		'05' => 'Aspettativa di vendita del fornitore',
		'06' => 'Aspettativa di vendita dell’editore',
		'07' => 'Idoneità del fornitore all’instradamento degli ordini',
	];

	/**
	 * Code List 165 for nb
	 *
	 * @var array
	 * @see https://ns.editeur.org/onix/nb/165
	 */
	protected static $nb = [
		'01' => 'Distributørens salgsklassifikasjon',
		'02' => 'Distributørens bonusprogram',
		'03' => 'Utgivers salgsklassifikasjon',
		'04' => 'Distributørens klassifikasjon for prisrestriksjoner',
		'05' => 'Distributørens salgsforventning',
		'06' => 'Utgivers salgsforventning',
		'07' => 'Distributørens ordremuligheter',
	];

	/**
	 * Code List 165 for tr
	 *
	 * @var array
	 * @see https://ns.editeur.org/onix/tr/165
	 */
	protected static $tr = [
		'01' => 'Tedarikçinin satış sınıflandırması',
		'02' => 'Tedarikçinin bonus uygunluğu',
		'03' => 'Yayımcının satış sınıflandırması',
		'04' => 'Tedarikçinin fiyat kısıtlama sınıflandırması',
		'05' => 'Supplier’s sales expectation',
		'06' => 'Publisher’s sales expectation',
		'07' => 'Supplier’s order routing eligibility',
	];
}
