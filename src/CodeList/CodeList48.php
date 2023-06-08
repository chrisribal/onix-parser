<?php

namespace Ribal\Onix\CodeList;

/**
 * ONIX Code List 48
 *
 * Used with <MeasureType> <x315>
 *
 * @see https://ns.editeur.org/onix/en/48
 */
class CodeList48 extends CodeList implements CodeListInterface
{
	/**
	 * Code List 48 for en
	 *
	 * @var array
	 * @see https://ns.editeur.org/onix/en/48
	 */
	protected static $en = [
		'01' => 'Height',
		'02' => 'Width',
		'03' => 'Thickness',
		'04' => 'Page trim height',
		'05' => 'Page trim width',
		'06' => 'Unit volume',
		'07' => 'Unit capacity',
		'08' => 'Unit weight',
		'09' => 'Diameter (sphere)',
		'10' => 'Unfolded/unrolled sheet height',
		'11' => 'Unfolded/unrolled sheet width',
		'12' => 'Diameter (tube or cylinder)',
		'13' => 'Rolled sheet package side measure',
		'14' => 'Unpackaged height',
		'15' => 'Unpackaged width',
		'16' => 'Unpackaged thickness',
		'17' => 'Total battery weight',
		'18' => 'Total weight of Lithium',
		'19' => 'Assembled length',
		'20' => 'Assembled width',
		'21' => 'Assembled height',
		'22' => 'Unpackaged unit weight',
		'23' => 'Carton length',
		'24' => 'Carton width',
		'25' => 'Carton height',
		'26' => 'Carton weight',
		'27' => 'Pallet length',
		'28' => 'Pallet width',
		'29' => 'Pallet height',
		'30' => 'Pallet weight',
	];

	/**
	 * Code List 48 for es
	 *
	 * @var array
	 * @see https://ns.editeur.org/onix/es/48
	 */
	protected static $es = [
		'01' => 'Alto',
		'02' => 'Ancho',
		'03' => 'Grueso',
		'04' => 'Alto de página guillotinada',
		'05' => 'Ancho de página guillotinada',
		'06' => 'Volumen unitario',
		'07' => 'Capacidad unitaria',
		'08' => 'Peso unitario',
		'09' => 'Diámetro (de una esfera)',
		'10' => 'Alto de la hoja desdoblada/desenrollada',
		'11' => 'Ancho de la hoja desdoblada/desenrollada',
		'12' => 'Diámetro (tubo o cilindro)',
		'13' => 'Medida del lado de un paquete con producto enrollado',
		'14' => 'Alto sin envoltorio',
		'15' => 'Ancho sin envoltorio',
		'16' => 'Grueso sin envoltorio',
		'17' => 'Peso total de las baterías',
		'18' => 'Peso total de litio',
		'19' => 'Longitud del producto ensamblado',
		'20' => 'Ancho del producto ensamblado',
		'21' => 'Altura del producto ensamblado',
		'22' => 'Peso unitario sin embalaje',
		'23' => 'Longitud del paquete',
		'24' => 'Ancho del paquete',
		'25' => 'Altura del paquete',
		'26' => 'Peso del paquete',
		'27' => 'Longitud del palé',
		'28' => 'Ancho del palé',
		'29' => 'Altura del palé',
		'30' => 'Peso del palé',
	];

	/**
	 * Code List 48 for de
	 *
	 * @var array
	 * @see https://ns.editeur.org/onix/de/48
	 */
	protected static $de = [
		'01' => 'Height',
		'02' => 'Width',
		'03' => 'Thickness',
		'04' => 'Page trim height',
		'05' => 'Page trim width',
		'06' => 'Unit volume',
		'07' => 'Unit capacity',
		'08' => 'Unit weight',
		'09' => 'Diameter (sphere)',
		'10' => 'Unfolded/unrolled sheet height',
		'11' => 'Unfolded/unrolled sheet width',
		'12' => 'Diameter (tube or cylinder)',
		'13' => 'Rolled sheet package side measure',
		'14' => 'Unpackaged height',
		'15' => 'Unpackaged width',
		'16' => 'Unpackaged thickness',
		'17' => 'Total battery weight',
		'18' => 'Total weight of Lithium',
		'19' => 'Assembled length',
		'20' => 'Assembled width',
		'21' => 'Assembled height',
		'22' => 'Unpackaged unit weight',
		'23' => 'Carton length',
		'24' => 'Carton width',
		'25' => 'Carton height',
		'26' => 'Carton weight',
		'27' => 'Pallet length',
		'28' => 'Pallet width',
		'29' => 'Pallet height',
		'30' => 'Pallet weight',
	];

	/**
	 * Code List 48 for fr
	 *
	 * @var array
	 * @see https://ns.editeur.org/onix/fr/48
	 */
	protected static $fr = [
		'01' => 'Hauteur',
		'02' => 'Largeur',
		'03' => 'Epaisseur',
		'04' => 'Hauteur des pages intérieures',
		'05' => 'Largeur des pages intérieures',
		'06' => 'Volume unitaire',
		'07' => 'Capacité unitaire',
		'08' => 'Poids unitaire',
		'09' => 'Diamètre (sphère)',
		'10' => 'Hauteur de feuille dépliée / déroulée',
		'11' => 'Largeur de feuille dépliée / déroulée',
		'12' => 'Diamètre (tube ou cylindre)',
		'13' => 'Mesure du côté de packaging de conditionnement de rouleau',
		'14' => 'Hauteur non emballé',
		'15' => 'Largeur non emballé',
		'16' => 'Epaisseur non emballé',
		'17' => 'Poids total des batteries',
		'18' => 'Poids total du lithium',
		'19' => 'Longueur assemblé',
		'20' => 'Epaisseur assemblé',
		'21' => 'Hauteur assemblé',
		'22' => 'Unpackaged unit weight',
		'23' => 'Longueur du carton',
		'24' => 'Epaisseur du carton',
		'25' => 'Hauteur du carton',
		'26' => 'Poids du carton',
		'27' => 'Longueur de la palette',
		'28' => 'Epaisseur de la palette',
		'29' => 'Hauteur de la palette',
		'30' => 'Poids de la palette',
	];

	/**
	 * Code List 48 for it
	 *
	 * @var array
	 * @see https://ns.editeur.org/onix/it/48
	 */
	protected static $it = [
		'01' => 'Altezza',
		'02' => 'Larghezza',
		'03' => 'Spessore',
		'04' => 'Altezza della pagina',
		'05' => 'Larghezza della pagina',
		'06' => 'Volume',
		'07' => 'Capacità',
		'08' => 'Peso unitario',
		'09' => 'Diametro (sfera)',
		'10' => 'Altezza del foglio non piegato/arrotolato',
		'11' => 'Larghezza del foglio non piegato/arrotolato',
		'12' => 'Diametro (tubo o cilindro)',
		'13' => 'Dimensione del lato della confezione del foglio arrotolato',
		'14' => 'Altezza senza confezione',
		'15' => 'Larghezza senza confezione',
		'16' => 'Spessore senza confezione',
		'17' => 'Peso totale della batteria',
		'18' => 'Peso totale del litio',
		'19' => 'Lunghezza del prodotto montato',
		'20' => 'Larghezza del prodotto montato',
		'21' => 'Altezza del prodotto montato',
		'22' => 'Peso unitario senza imballo',
		'23' => 'Lunghezza della confezione',
		'24' => 'Larghezza della confezione',
		'25' => 'Altezza della confezione',
		'26' => 'Peso della confezione',
		'27' => 'Lunghezza del pallet',
		'28' => 'Larghezza del pallet',
		'29' => 'Altezza del pallet',
		'30' => 'Peso del pallet',
	];

	/**
	 * Code List 48 for nb
	 *
	 * @var array
	 * @see https://ns.editeur.org/onix/nb/48
	 */
	protected static $nb = [
		'01' => 'Høyde',
		'02' => 'Bredde',
		'03' => 'Tykkelse',
		'04' => 'Skjærekant høyde',
		'05' => 'Skjærekant bredde',
		'06' => 'Enhetsvolum',
		'07' => 'Enhetskapasitet',
		'08' => 'Enhetsvekt',
		'09' => 'Diameter',
		'10' => 'Utbrettet plakathøyde',
		'11' => 'Utbrettet plakatbredde',
		'12' => 'Diameter (rør eller sylinder)',
		'13' => 'Rolled sheet package side measure',
		'14' => 'Høyde uten emballasje',
		'15' => 'Bredde uten emballasje',
		'16' => 'Tykkelse uten emballasje',
		'17' => 'Total batterivekt',
		'18' => 'Total litiumvekt',
		'19' => 'Samlet lengde',
		'20' => 'Samlet bredde',
		'21' => 'Samlet høyde',
		'22' => 'Enhetsvekt uten emballasje',
		'23' => 'Lengde med emballasje',
		'24' => 'Bredde med emballasje',
		'25' => 'Høyde med emballasje',
		'26' => 'Vekt med emballasje',
		'27' => 'Pall - lengde',
		'28' => 'Pall - bredde',
		'29' => 'Pall - høyde',
		'30' => 'Pall - vekt',
	];

	/**
	 * Code List 48 for tr
	 *
	 * @var array
	 * @see https://ns.editeur.org/onix/tr/48
	 */
	protected static $tr = [
		'01' => 'Yükseklik',
		'02' => 'Genişlik',
		'03' => 'Kalınlık',
		'04' => 'Sayfa kesme yüksekliği',
		'05' => 'Sayfa kesme genişliği',
		'06' => 'Unit volume',
		'07' => 'Unit capacity',
		'08' => 'Birim ağırlığı',
		'09' => 'Çap (küre)',
		'10' => 'Katlanmamış/açık sayfa yüksekliği',
		'11' => 'Katlanmamış/açık sayfa genişliği',
		'12' => 'Çap (tüp ya da silindir)',
		'13' => 'Rulo sayfa ambalaj kenarı ölçüsü',
		'14' => 'Ambalajsız yükseklik',
		'15' => 'Ambalajsız genişlik',
		'16' => 'Ambalajsız kalınlık',
		'17' => 'Total battery weight',
		'18' => 'Total weight of Lithium',
		'19' => 'Assembled length',
		'20' => 'Assembled width',
		'21' => 'Assembled height',
		'22' => 'Unpackaged unit weight',
		'23' => 'Carton length',
		'24' => 'Carton width',
		'25' => 'Carton height',
		'26' => 'Carton weight',
		'27' => 'Pallet length',
		'28' => 'Pallet width',
		'29' => 'Pallet height',
		'30' => 'Pallet weight',
	];
}
