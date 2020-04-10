<?php

namespace Ribal\Onix\CodeList;

/**
 * ONIX Code List 25
 *
 * Used with <AncillaryContentType> <x423>
 *
 * @see https://ns.editeur.org/onix/en/25
 */
class CodeList25 extends CodeList implements CodeListInterface
{
	/**
	 * Code List 25 for en
	 *
	 * @var array
	 * @see https://ns.editeur.org/onix/en/25
	 */
	protected static $en = [
		'00' => 'Unspecified, see description',
		'01' => 'Illustrations, black and white',
		'02' => 'Illustrations, color',
		'03' => 'Halftones, black and white',
		'04' => 'Halftones, color',
		'05' => 'Line drawings, black and white',
		'06' => 'Line drawings, color',
		'07' => 'Tables, black and white',
		'08' => 'Tables, color',
		'09' => 'Illustrations, unspecified',
		'10' => 'Halftones, unspecified',
		'11' => 'Tables, unspecified',
		'12' => 'Line drawings, unspecified',
		'13' => 'Halftones, duotone',
		'14' => 'Maps',
		'15' => 'Frontispiece',
		'16' => 'Diagrams',
		'17' => 'Figures',
		'18' => 'Charts',
		'19' => 'Recorded music items',
		'20' => 'Printed music items',
		'21' => 'Graphs',
		'22' => 'Plates, unspecified',
		'23' => 'Plates, black and white',
		'24' => 'Plates, color',
		'25' => 'Index',
		'26' => 'Bibliography',
		'27' => 'Inset maps',
		'28' => 'GPS grids',
		'29' => 'Glossary',
		'30' => 'Table of contents',
	];

	/**
	 * Code List 25 for es
	 *
	 * @var array
	 * @see https://ns.editeur.org/onix/es/25
	 */
	protected static $es = [
		'00' => 'No especificado, ver descripción',
		'01' => 'Ilustraciones en blanco y negro',
		'02' => 'Ilustraciones en color',
		'03' => 'Fotograbado en blanco y negro',
		'04' => 'Fotograbado en color',
		'05' => 'Dibujos a línea en blanco y negro',
		'06' => 'Dibujos a línea en color',
		'07' => 'Tablas en blanco y negro',
		'08' => 'Tablas en color',
		'09' => 'Ilustraciones de tipo no especificado',
		'10' => 'Fotograbado de tipo no especificado',
		'11' => 'Tablas de tipo no especificado',
		'12' => 'Dibujos a línea de tipo no especificado',
		'13' => 'Fotograbado en blanco y color (bicromía)',
		'14' => 'Mapas',
		'15' => 'Frontispicio',
		'16' => 'Diagramas',
		'17' => 'Figuras',
		'18' => 'Gráficos',
		'19' => 'Elementos de música grabada',
		'20' => 'Elementos de música impresa',
		'21' => 'Gráficos cartesianos',
		'22' => 'Láminas, no especificadas',
		'23' => 'Láminas en blanco y negro',
		'24' => 'Láminas en color',
		'25' => 'Índice',
		'26' => 'Bibliografía',
		'27' => 'Mapas de detalle',
		'28' => 'Mallas o tramas GPS',
		'29' => 'Glosario',
		'30' => 'Tabla de contenidos',
	];

	/**
	 * Code List 25 for de
	 *
	 * @var array
	 * @see https://ns.editeur.org/onix/de/25
	 */
	protected static $de = [
		'00' => 'Unspecified, see description',
		'01' => 'Illustrations, black and white',
		'02' => 'Illustrations, color',
		'03' => 'Halftones, black and white',
		'04' => 'Halftones, color',
		'05' => 'Line drawings, black and white',
		'06' => 'Line drawings, color',
		'07' => 'Tables, black and white',
		'08' => 'Tables, color',
		'09' => 'Illustrations, unspecified',
		'10' => 'Halftones, unspecified',
		'11' => 'Tables, unspecified',
		'12' => 'Line drawings, unspecified',
		'13' => 'Halftones, duotone',
		'14' => 'Maps',
		'15' => 'Frontispiece',
		'16' => 'Diagrams',
		'17' => 'Figures',
		'18' => 'Charts',
		'19' => 'Recorded music items',
		'20' => 'Printed music items',
		'21' => 'Graphs',
		'22' => 'Plates, unspecified',
		'23' => 'Plates, black and white',
		'24' => 'Plates, color',
		'25' => 'Index',
		'26' => 'Bibliography',
		'27' => 'Inset maps',
		'28' => 'GPS grids',
		'29' => 'Glossary',
		'30' => 'Table of contents',
	];

	/**
	 * Code List 25 for fr
	 *
	 * @var array
	 * @see https://ns.editeur.org/onix/fr/25
	 */
	protected static $fr = [
		'00' => 'Type non spécifié, voir description',
		'01' => 'Illustrations, noir et blanc',
		'02' => 'Illustrations, couleur',
		'03' => 'Demi-tons, noir et blanc',
		'04' => 'Demi-tons, couleur',
		'05' => 'Dessins au trait, noir et blanc',
		'06' => 'Dessins au trait, couleur',
		'07' => 'Tableaux, noir et blanc',
		'08' => 'Tableaux, couleur',
		'09' => 'Illustrations, sans autre spécification',
		'10' => 'Demi-tons, sans autre spécification',
		'11' => 'Tableaux, sans autre spécification',
		'12' => 'Dessins au trait, sans autre spécification',
		'13' => 'Demi-tons, 2 couleurs',
		'14' => 'Cartes',
		'15' => 'Frontispice',
		'16' => 'Diagrammes',
		'17' => 'Figures',
		'18' => 'Graphiques',
		'19' => 'Eléments de musique enregistrée',
		'20' => 'Eléments de musique imprimée',
		'21' => 'Graphes',
		'22' => 'Planches, sans autre spécification',
		'23' => 'Planches, noir et blanc',
		'24' => 'Planches, couleur',
		'25' => 'Index',
		'26' => 'Bibliographie',
		'27' => 'Cartes en médaillon',
		'28' => 'Grilles GPS',
		'29' => 'Glossaire',
		'30' => 'Table des matières',
	];

	/**
	 * Code List 25 for it
	 *
	 * @var array
	 * @see https://ns.editeur.org/onix/it/25
	 */
	protected static $it = [
		'00' => 'Non specificato, vedere la descrizione',
		'01' => 'Illustrazioni in bianco e nero',
		'02' => 'Illustrazioni a colori',
		'03' => 'Incisioni in bianco e nero',
		'04' => 'Incisioni a colori',
		'05' => 'Disegni in bianco e nero',
		'06' => 'Disegni a colori',
		'07' => 'Tabelle in bianco e nero',
		'08' => 'Tabelle a colori',
		'09' => 'Illustrazioni di tipo non specificato',
		'10' => 'Incisioni di tipo non specificato',
		'11' => 'Tabelle di tipo non specificato',
		'12' => 'Disegni di tipo non specificato',
		'13' => 'Incisioni in bianco e colore (duotone)',
		'14' => 'Carte geografiche',
		'15' => 'Frontespizio',
		'16' => 'Diagrammi',
		'17' => 'Figure',
		'18' => 'Grafici',
		'19' => 'Estratti di musica registrata',
		'20' => 'Estratti di musica a stampa',
		'21' => 'Grafici cartesiani',
		'22' => 'Tavole di tipo non specificato',
		'23' => 'Tavole in bianco e nero',
		'24' => 'Tavole a colori',
		'25' => 'Indice analitico',
		'26' => 'Bibliografia',
		'27' => 'Ingrandimento cartografico',
		'28' => 'Griglie GPS',
		'29' => 'Glossario',
		'30' => 'Indice',
	];

	/**
	 * Code List 25 for nb
	 *
	 * @var array
	 * @see https://ns.editeur.org/onix/nb/25
	 */
	protected static $nb = [
		'00' => 'Unspecified, see description',
		'01' => 'Illustrations, black and white',
		'02' => 'Illustrations, color',
		'03' => 'Halftones, black and white',
		'04' => 'Halftones, color',
		'05' => 'Line drawings, black and white',
		'06' => 'Line drawings, color',
		'07' => 'Tables, black and white',
		'08' => 'Tables, color',
		'09' => 'Illustrations, unspecified',
		'10' => 'Halftones, unspecified',
		'11' => 'Tables, unspecified',
		'12' => 'Line drawings, unspecified',
		'13' => 'Halftones, duotone',
		'14' => 'Maps',
		'15' => 'Frontispiece',
		'16' => 'Diagrams',
		'17' => 'Figures',
		'18' => 'Charts',
		'19' => 'Recorded music items',
		'20' => 'Printed music items',
		'21' => 'Graphs',
		'22' => 'Plates, unspecified',
		'23' => 'Plates, black and white',
		'24' => 'Plates, color',
		'25' => 'Index',
		'26' => 'Bibliography',
		'27' => 'Inset maps',
		'28' => 'GPS grids',
		'29' => 'Glossary',
		'30' => 'Table of contents',
	];

	/**
	 * Code List 25 for tr
	 *
	 * @var array
	 * @see https://ns.editeur.org/onix/tr/25
	 */
	protected static $tr = [
		'00' => 'Belirtilmemiş, bkz. tanım',
		'01' => 'Resim, siyah beyaz',
		'02' => 'Resim, renkli',
		'03' => 'Yarı tonlar, siyah beyaz',
		'04' => 'Yarı tonlar, renkli',
		'05' => 'Çizim, siyah beyaz',
		'06' => 'Çizim, renkli',
		'07' => 'Tablo, siyah beyaz',
		'08' => 'Tablo, renkli',
		'09' => 'Resim, belirtilmemiş',
		'10' => 'Yarı tonlar, belirtilmemiş',
		'11' => 'Tablo, belirtilmemiş',
		'12' => 'Çizim, belirtilmemiş',
		'13' => 'Yarı tonlar, iki ton',
		'14' => 'Harita',
		'15' => 'Süslü baş sayfa',
		'16' => 'Şema',
		'17' => 'Şekil',
		'18' => 'Çizelge',
		'19' => 'Kaydedilmiş müzik ögesi',
		'20' => 'Basılı müzik ögesi',
		'21' => 'Grafik',
		'22' => 'Klişe, belirtilmemiş',
		'23' => 'Klişe, siyah beyaz',
		'24' => 'Klişe, renkli',
		'25' => 'Dizin',
		'26' => 'Bibliyografya',
		'27' => 'Ek harita',
		'28' => 'GPS kılavuzları',
		'29' => 'Sözlük',
		'30' => 'Table of contents',
	];
}
