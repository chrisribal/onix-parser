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
	];

	/**
	 * Code List 48 for de
	 *
	 * @var array
	 * @see https://ns.editeur.org/onix/de/48
	 */
	protected static $de = [
		'01' => 'Höhe',
		'02' => 'Breite',
		'03' => 'Dicke',
		'04' => 'Seitenschnitthöhe',
		'05' => 'Seitenschnittbreite',
		'06' => 'Stückzahl',
		'07' => 'Stückkapazität',
		'08' => 'Stückgewicht',
		'09' => 'Durchmesser (Kugel)',
		'10' => 'Ungefaltete / ausgerollte Blatthöhe',
		'11' => 'Entfaltete / abgewickelte Blattbreite',
		'12' => 'Durchmesser (Rohr oder Zylinder)',
		'13' => 'Rolled Sheet Package Side Measure',
		'14' => 'Unverpackte Höhe',
		'15' => 'Unverpackte Breite',
		'16' => 'unverpackte Dicke',
		'17' => 'Gesamtgewicht der Batterie',
		'18' => 'Gesamtgewicht von Lithium',
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
	];
}
