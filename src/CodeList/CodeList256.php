<?php

namespace Ribal\Onix\CodeList;

/**
 * ONIX Code List 256
 *
 * Used with <FeatureValue> <x439>See List 160
 *
 * @see https://ns.editeur.org/onix/en/256
 */
class CodeList256 extends CodeList implements CodeListInterface
{
	/**
	 * Code List 256 for en
	 *
	 * @var array
	 * @see https://ns.editeur.org/onix/en/256
	 */
	protected static $en = [
		'01' => 'Image shows product in packaging',
		'02' => 'Image shows product (without packaging)',
		'03' => 'Image shows product and accessories',
		'04' => 'Image shows assembled product',
		'05' => 'Image shows product in use',
		'06' => 'Image shows multiple products',
		'07' => 'Image shows detail of product',
		'21' => '3D perspective ‘front’',
		'22' => '3D perspective ‘back’',
		'23' => '3D perspective ‘front foredge’',
		'24' => '3D perspective ‘back foredge’',
		'33' => '3D perspective ‘front low’',
		'34' => '3D perspective ‘back low’',
		'35' => '3D perspective ‘front foredge low’',
		'36' => '3D perspective ‘back foredge low’',
		'41' => '2D front',
		'42' => '2D back',
		'43' => '2D spine',
		'47' => '3D perspective ‘horizontal’',
		'48' => '3D perspective ‘vertical’',
	];

	/**
	 * Code List 256 for es
	 *
	 * @var array
	 * @see https://ns.editeur.org/onix/es/256
	 */
	protected static $es = [
		'01' => 'La imagen muestra el producto en su embalaje o envoltorio',
		'02' => 'La imagen muestra el producto (sin embalaje)',
		'03' => 'La imagen muestra el producto y sus accesorios',
		'04' => 'La imagen muestra el producto ensamblado',
		'05' => 'La imagen muestra el producto en uso',
		'06' => 'La imagen muestra múltiples productos',
		'07' => 'La imagen muestra un detalle del producto',
		'21' => 'Perspectiva 3D: Frente',
		'22' => 'Perspectiva 3D: Trasera',
		'23' => 'Perspectiva 3D: Borde delantero',
		'24' => 'Perspectiva 3D: Borde trasero',
		'33' => 'Perspectiva 3D: Frente bajo',
		'34' => 'Perspectiva 3D: Trasera baja',
		'35' => 'Perspectiva 3D: Borde delantero bajo',
		'36' => 'Perspectiva 3D: Borde posterior bajo',
		'41' => 'Frontal 2D',
		'42' => 'Trasera 2D',
		'43' => 'Lomo 2D',
		'47' => 'Perspectiva 3D: Horizontal',
		'48' => 'Perspectiva 3D: Vertical',
	];

	/**
	 * Code List 256 for de
	 *
	 * @var array
	 * @see https://ns.editeur.org/onix/de/256
	 */
	protected static $de = [
		'01' => 'Image shows product in packaging',
		'02' => 'Image shows product (without packaging)',
		'03' => 'Image shows product and accessories',
		'04' => 'Image shows assembled product',
		'05' => 'Image shows product in use',
		'06' => 'Image shows multiple products',
		'07' => 'Image shows detail of product',
		'21' => '3D perspective ‘front’',
		'22' => '3D perspective ‘back’',
		'23' => '3D perspective ‘front foredge’',
		'24' => '3D perspective ‘back foredge’',
		'33' => '3D perspective ‘front low’',
		'34' => '3D perspective ‘back low’',
		'35' => '3D perspective ‘front foredge low’',
		'36' => '3D perspective ‘back foredge low’',
		'41' => '2D front',
		'42' => '2D back',
		'43' => '2D spine',
		'47' => '3D perspective ‘horizontal’',
		'48' => '3D perspective ‘vertical’',
	];

	/**
	 * Code List 256 for fr
	 *
	 * @var array
	 * @see https://ns.editeur.org/onix/fr/256
	 */
	protected static $fr = [
		'01' => 'Image montrant le produit dans son packaging',
		'02' => 'Image montrant le produit (sans packaging)',
		'03' => 'Image montrant le produit et des accessoires',
		'04' => 'Image montrant le produit assemblé',
		'05' => 'Image montrant le produit en cours d’utilisation',
		'06' => 'Image montrant plusieurs produits',
		'07' => 'Image montrant les détails du produit',
		'21' => 'Perspective en 3D de face',
		'22' => 'Perspective en 3D de derrière',
		'23' => 'Perspective en 3D de la tranche',
		'24' => 'Perspective en 3D du dos',
		'33' => 'Perspective en 3D de l’“avant bas”',
		'34' => 'Perspective en 3D de l’“arrière bas”',
		'35' => 'Perspective en 3D de « la tranche avant bas »',
		'36' => 'Perspective en 3D de « la tranche arrière bas »',
		'41' => '2D face',
		'42' => '2D 4e',
		'43' => '2D dos',
		'47' => 'Perspective en 3D horizontale',
		'48' => 'Perspective en 3D verticale',
	];

	/**
	 * Code List 256 for it
	 *
	 * @var array
	 * @see https://ns.editeur.org/onix/it/256
	 */
	protected static $it = [
		'01' => 'L’immagine mostra il prodotto confezionato',
		'02' => 'L’immagine mostra il prodotto (senza confezione)',
		'03' => 'L’immagine mostra il prodotto e gli accessori',
		'04' => 'L’immagine mostra il prodotto assemblato',
		'05' => 'L’immagine mostra il prodotto durante l’uso',
		'06' => 'L’immagine mostra più prodotti',
		'07' => 'L’immagine mostra dettagli del prodotto',
		'21' => 'Prospettiva 3D “frontale”',
		'22' => 'Prospettiva 3D “posteriore”',
		'23' => 'Prospettiva 3D “frontale con taglio esterno”',
		'24' => 'Prospettiva 3D “posteriore con taglio esterno”',
		'33' => 'Prospettiva 3D “frontale dal basso”',
		'34' => 'Prospettiva 3D “posteriore dal basso”',
		'35' => 'Prospettiva 3D “frontale con taglio esterno dal basso”',
		'36' => 'Prospettiva 3D “posteriore con taglio esterno dal basso”',
		'41' => '2D frontale',
		'42' => '2D posteriore',
		'43' => '2D dorso',
		'47' => 'Prospettiva 3D “orizzontale”',
		'48' => 'Prospettiva 3D “verticale”',
	];

	/**
	 * Code List 256 for nb
	 *
	 * @var array
	 * @see https://ns.editeur.org/onix/nb/256
	 */
	protected static $nb = [
		'01' => 'Image shows product in packaging',
		'02' => 'Image shows product (without packaging)',
		'03' => 'Image shows product and accessories',
		'04' => 'Image shows assembled product',
		'05' => 'Image shows product in use',
		'06' => 'Image shows multiple products',
		'07' => 'Image shows detail of product',
		'21' => '3D perspective ‘front’',
		'22' => '3D perspective ‘back’',
		'23' => '3D perspective ‘front foredge’',
		'24' => '3D perspective ‘back foredge’',
		'33' => '3D perspective ‘front low’',
		'34' => '3D perspective ‘back low’',
		'35' => '3D perspective ‘front foredge low’',
		'36' => '3D perspective ‘back foredge low’',
		'41' => '2D front',
		'42' => '2D back',
		'43' => '2D spine',
		'47' => '3D perspective ‘horizontal’',
		'48' => '3D perspective ‘vertical’',
	];

	/**
	 * Code List 256 for tr
	 *
	 * @var array
	 * @see https://ns.editeur.org/onix/tr/256
	 */
	protected static $tr = [
		'01' => 'Image shows product in packaging',
		'02' => 'Image shows product (without packaging)',
		'03' => 'Image shows product and accessories',
		'04' => 'Image shows assembled product',
		'05' => 'Image shows product in use',
		'06' => 'Image shows multiple products',
		'07' => 'Image shows detail of product',
		'21' => '3D perspective ‘front’',
		'22' => '3D perspective ‘back’',
		'23' => '3D perspective ‘front foredge’',
		'24' => '3D perspective ‘back foredge’',
		'33' => '3D perspective ‘front low’',
		'34' => '3D perspective ‘back low’',
		'35' => '3D perspective ‘front foredge low’',
		'36' => '3D perspective ‘back foredge low’',
		'41' => '2D front',
		'42' => '2D back',
		'43' => '2D spine',
		'47' => '3D perspective ‘horizontal’',
		'48' => '3D perspective ‘vertical’',
	];
}
