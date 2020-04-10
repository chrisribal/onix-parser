<?php

namespace Ribal\Onix\CodeList;

/**
 * ONIX Code List 81
 *
 * Used with    • <PrimaryContentType> <x415>    • <ProductContentType> <b385>Codelist order groups together similar codes
 *
 * @see https://ns.editeur.org/onix/en/81
 */
class CodeList81 extends CodeList implements CodeListInterface
{
	/**
	 * Code List 81 for en
	 *
	 * @var array
	 * @see https://ns.editeur.org/onix/en/81
	 */
	protected static $en = [
		'10' => 'Text (eye-readable)',
		'15' => 'Extensive links between internal content',
		'14' => 'Extensive links to external content',
		'16' => 'Additional eye-readable text not part of main work',
		'41' => 'Additional eye-readable links to external content',
		'17' => 'Promotional text for other book product',
		'11' => 'Musical notation',
		'07' => 'Still images / graphics',
		'18' => 'Photographs',
		'19' => 'Figures, diagrams, charts, graphs',
		'20' => 'Additional images / graphics not part of main work',
		'12' => 'Maps and/or other cartographic content',
		'42' => 'Assessment material',
		'01' => 'Audiobook',
		'02' => 'Performance – spoken word',
		'13' => 'Other speech content',
		'03' => 'Music recording',
		'04' => 'Other audio',
		'21' => 'Partial performance – spoken word',
		'22' => 'Additional audio content not part of main work',
		'23' => 'Promotional audio for other book product',
		'06' => 'Video',
		'26' => 'Video recording of a reading',
		'27' => 'Performance – visual',
		'24' => 'Animated / interactive illustrations',
		'25' => 'Narrative animation',
		'28' => 'Other video',
		'29' => 'Partial performance – video',
		'30' => 'Additional video content not part of main work',
		'31' => 'Promotional video for other book product',
		'05' => 'Game / Puzzle',
		'32' => 'Contest',
		'08' => 'Software',
		'09' => 'Data',
		'33' => 'Data set plus software',
		'34' => 'Blank pages or spaces',
		'35' => 'Advertising content',
		'37' => 'Advertising – first party',
		'36' => 'Advertising – coupons',
		'38' => 'Advertising – third party display',
		'39' => 'Advertising – third party textual',
		'40' => 'Scripting',
	];

	/**
	 * Code List 81 for es
	 *
	 * @var array
	 * @see https://ns.editeur.org/onix/es/81
	 */
	protected static $es = [
		'10' => 'Texto (legible a simple vista)',
		'15' => 'Enlaces significativos dentro del propio contenido',
		'14' => 'Enlaces significativos a contenidos externos',
		'16' => 'Texto legible, que no forma parte del contenido principal',
		'41' => 'Enlaces impresos adicionales a contenidos externos',
		'17' => 'Texto promocional para otro libro',
		'11' => 'Partitura',
		'07' => 'Imágenes fijas / gráficos',
		'18' => 'Fotografías',
		'19' => 'Imágenes, diagramas, esquemas gráficos',
		'20' => 'Imágenes / ilustraciones adicionales al margen del cuerpo principal de la obra',
		'12' => 'Mapas o otros contenidos cartográficos',
		'42' => 'Material de evaluación',
		'01' => 'Audiolibro',
		'02' => 'Actuación – oral',
		'13' => 'Otros contenidos hablados',
		'03' => 'Grabación musical',
		'04' => 'Otras grabaciones de audio',
		'21' => 'Representación parcial – hablada',
		'22' => 'Contenido adicional de audio, que no forma parte del cuerpo principal de la obra',
		'23' => 'Audio promocional para otro libro',
		'06' => 'Imágenes en movimiento',
		'26' => 'Grabación de vídeo de una lectura',
		'27' => 'Representación – visual',
		'24' => 'Ilustraciones animadas o interactivas',
		'25' => 'Animación narrativa',
		'28' => 'Otro vídeo',
		'29' => 'Representación parcial – Vídeo',
		'30' => 'Contenido adicional en vídeo, que no forma parte del cuerpo principal de la obra',
		'31' => 'Vídeo promocional para otro libro',
		'05' => 'Juego / Rompecabezas / Puzle',
		'32' => 'Desafío / Reto',
		'08' => 'Software',
		'09' => 'Datos',
		'33' => 'Conjunto de datos y software',
		'34' => 'Páginas o espacios en blanco',
		'35' => 'Contenido publicitario',
		'37' => 'Publicidad directa',
		'36' => 'Publicidad – Cupones',
		'38' => 'Publicidad gráfica, terceras partes',
		'39' => 'Publicidad textual, terceras partes',
		'40' => '«Scripting»',
	];

	/**
	 * Code List 81 for de
	 *
	 * @var array
	 * @see https://ns.editeur.org/onix/de/81
	 */
	protected static $de = [
		'10' => 'Text (eye-readable)',
		'15' => 'Extensive links between internal content',
		'14' => 'Extensive links to external content',
		'16' => 'Additional eye-readable text not part of main work',
		'41' => 'Additional eye-readable links to external content',
		'17' => 'Promotional text for other book product',
		'11' => 'Musical notation',
		'07' => 'Still images / graphics',
		'18' => 'Photographs',
		'19' => 'Figures, diagrams, charts, graphs',
		'20' => 'Additional images / graphics not part of main work',
		'12' => 'Maps and/or other cartographic content',
		'42' => 'Assessment material',
		'01' => 'Audiobook',
		'02' => 'Performance – spoken word',
		'13' => 'Other speech content',
		'03' => 'Music recording',
		'04' => 'Other audio',
		'21' => 'Partial performance – spoken word',
		'22' => 'Additional audio content not part of main work',
		'23' => 'Promotional audio for other book product',
		'06' => 'Video',
		'26' => 'Video recording of a reading',
		'27' => 'Performance – visual',
		'24' => 'Animated / interactive illustrations',
		'25' => 'Narrative animation',
		'28' => 'Other video',
		'29' => 'Partial performance – video',
		'30' => 'Additional video content not part of main work',
		'31' => 'Promotional video for other book product',
		'05' => 'Game / Puzzle',
		'32' => 'Contest',
		'08' => 'Software',
		'09' => 'Data',
		'33' => 'Data set plus software',
		'34' => 'Blank pages or spaces',
		'35' => 'Advertising content',
		'37' => 'Advertising – first party',
		'36' => 'Advertising – coupons',
		'38' => 'Advertising – third party display',
		'39' => 'Advertising – third party textual',
		'40' => 'Scripting',
	];

	/**
	 * Code List 81 for fr
	 *
	 * @var array
	 * @see https://ns.editeur.org/onix/fr/81
	 */
	protected static $fr = [
		'10' => 'Texte (lisible par l’homme)',
		'15' => 'Nombreux liens entre contenus internes',
		'14' => 'Nombreux liens vers contenus externes',
		'16' => 'Texte supplémentaire, lisible par l’homme, qui ne fait pas partie de l’œuvre principale',
		'41' => 'Liens additionnels vers des contenus extérieurs',
		'17' => 'Texte promotionnel pour un autre produit livre',
		'11' => 'Notation musicale',
		'07' => 'Images statiques / graphiques',
		'18' => 'Photographies',
		'19' => 'Figures, diagrammes, tableaux, graphiques',
		'20' => 'Images / graphiques supplémentaires ne faisant pas partie de l’œuvre principale',
		'12' => 'Cartes et/ou autre contenu cartographique',
		'42' => 'Matériel d’évaluation',
		'01' => 'Livre audio',
		'02' => 'Représentation – texte parlé',
		'13' => 'Autre contenu oral',
		'03' => 'Enregistrement musical',
		'04' => 'Autre enregistrement audio',
		'21' => 'Représentation partielle – texte parlé',
		'22' => 'Contenu audio supplémentaire ne faisant pas partie de l’œuvre principale',
		'23' => 'Enregistrement audio promotionnel pour un autre produit livre',
		'06' => 'Vidéo',
		'26' => 'Enregistrement vidéo d’une lecture',
		'27' => 'Représentation – visuelle',
		'24' => 'Illustrations animées / interactives',
		'25' => 'Animation narrative',
		'28' => 'Autre vidéo',
		'29' => 'Représentation partielle – vidéo',
		'30' => 'Contenu vidéo supplémentaire ne faisant pas partie de l’œuvre principale',
		'31' => 'Vidéo promotionnelle pour un autre produit livre',
		'05' => 'Jeu / Puzzle',
		'32' => 'Tournoi',
		'08' => 'Logiciel',
		'09' => 'Données',
		'33' => 'Ensemble de données plus logiciel',
		'34' => 'Pages blanches ou espaces',
		'35' => 'Contenu publicitaire',
		'37' => 'Publicité – première partie',
		'36' => 'Publicité – coupons',
		'38' => 'Publicité – affichage tiers',
		'39' => 'Publicité – texte tiers',
		'40' => 'Scripting',
	];

	/**
	 * Code List 81 for it
	 *
	 * @var array
	 * @see https://ns.editeur.org/onix/it/81
	 */
	protected static $it = [
		'10' => 'Testo leggibile',
		'15' => 'Collegamenti tra contenuti interni',
		'14' => 'Collegamenti a contenuti esterni',
		'16' => 'Testo leggibile aggiuntivo – non incluso nell’opera principale',
		'41' => 'Link aggiuntivi in chiaro a contenuti esterni',
		'17' => 'Testo promozionale per altro prodotto editoriale',
		'11' => 'Notazione musicale',
		'07' => 'Immagini fisse, grafica',
		'18' => 'Fotografie',
		'19' => 'Figure, grafici, diagrammi, tabelle',
		'20' => 'Immagini/grafica aggiuntive – non incluse nell’opera principale',
		'12' => 'Carte geografiche e altro materiale cartografico',
		'42' => 'Materiale di valutazione',
		'01' => 'Audiolibro',
		'02' => 'Testo recitato',
		'13' => 'Discorso di altro tipo',
		'03' => 'Registrazione musicale',
		'04' => 'Altra registrazione audio',
		'21' => 'Testo recitato – parziale',
		'22' => 'Contenuto audio aggiuntivo – non incluso nell’opera principale',
		'23' => 'Contenuto audio promozionale per altro prodotto editoriale',
		'06' => 'Video',
		'26' => 'Registrazione video di una lettura',
		'27' => 'Spettacolo visivo',
		'24' => 'Illustrazioni animate/interattive',
		'25' => 'Film di animazione',
		'28' => 'Altro tipo di video',
		'29' => 'Spettacolo visivo – parziale',
		'30' => 'Contenuto video aggiuntivo – non incluso nell’opera principale',
		'31' => 'Video promozionale per altro prodotto editoriale',
		'05' => 'Gioco/Puzzle',
		'32' => 'Contest',
		'08' => 'Software',
		'09' => 'Dati',
		'33' => 'Dati e software',
		'34' => 'Pagine o spazi bianchi',
		'35' => 'Contenuto pubblicitario',
		'37' => 'Contenuto pubblicitario – prima parte',
		'36' => 'Contenuto pubblicitario – coupon',
		'38' => 'Contenuto pubblicitario – campagne display di terzi',
		'39' => 'Contenuto pubblicitario – campagne testuali di terzi',
		'40' => 'Scripting',
	];

	/**
	 * Code List 81 for nb
	 *
	 * @var array
	 * @see https://ns.editeur.org/onix/nb/81
	 */
	protected static $nb = [
		'10' => 'Tekst (lesbar)',
		'15' => 'Lenker mellom innhold i produktet',
		'14' => 'Lenker til eksternt innhold',
		'16' => 'Ekstra lesbar tekst som ikke er en del av verkets hoveddel',
		'41' => 'Ytterligere lenker til eksternt innhold (som er lesbare)',
		'17' => 'Markedsførende tekst om et annet bokprodukt',
		'11' => 'Musikknotasjon',
		'07' => 'Stillbilder / grafikk',
		'18' => 'Fotografier',
		'19' => 'Figurer, diagrammer, grafer',
		'20' => 'Ytterligere bildemateriale som ikke er del av hovedverket',
		'12' => 'Kart og/eller annet kartografisk materiale',
		'42' => 'Vurderingsmateriale / Evalueringsmateriale',
		'01' => 'Lydbok',
		'02' => 'Framføring – tale',
		'13' => 'Annet lydinnhold, tale',
		'03' => 'Musikkinnspilling',
		'04' => 'Annen lyd',
		'21' => 'Framføring av deler av verket, tale',
		'22' => 'Ekstra lydinnhold som ikke er en del av hovedverket',
		'23' => 'Lydopptak, markedsføringsmateriale for annet bokprodukt',
		'06' => 'Video',
		'26' => 'Videoopptak av opplesning',
		'27' => 'Framføring, visuell',
		'24' => 'Animasjon / interaktive illustrasjoner',
		'25' => 'Fortellende animasjon',
		'28' => 'Annen video',
		'29' => 'Framføring av deler av verket, video',
		'30' => 'Ekstra videoinnhold som ikke er en del av verkets hovedinnhold',
		'31' => 'Markedsføringsvideo for annet bokprodukt',
		'05' => 'Spill / Hjernetrim',
		'32' => 'Konkurranse',
		'08' => 'Programvare',
		'09' => 'Datafiler',
		'33' => 'Datasett pluss software',
		'34' => 'Blanke sider',
		'35' => 'Reklameinnhold',
		'37' => 'Reklame – andre bøker',
		'36' => 'Reklame – kuponger',
		'38' => 'Reklame – andre produkter (visuell)',
		'39' => 'Reklame – andre produkter (tekst)',
		'40' => 'Scripting',
	];

	/**
	 * Code List 81 for tr
	 *
	 * @var array
	 * @see https://ns.editeur.org/onix/tr/81
	 */
	protected static $tr = [
		'10' => 'Metin (gözle okunabilir)',
		'15' => 'İçerik arasında yoğun bağlantı',
		'14' => 'Dış içeriğe yoğun bağlantı',
		'16' => 'Ana eserin parçası olmayan, gözle okunabilir ilave metin',
		'41' => 'Harici içeriğe yönelik ilave gözle okunabilir bağlantılar',
		'17' => 'Başka kitap ürünü için tanıtım metni',
		'11' => 'Müzik notası',
		'07' => 'Hareketsiz görüntü / grafik',
		'18' => 'Fotoğraf',
		'19' => 'Şekil, diyagram, şema, grafik',
		'20' => 'Ana eserin parçası olmayan ilave resim / grafik',
		'12' => 'Harita ve/ya da diğer kartografik içerik',
		'42' => 'Değerlendirme materyali',
		'01' => 'Sesli kitap',
		'02' => 'Performans – sözlü konuşma',
		'13' => 'Diğer sözlü içerik',
		'03' => 'Müzik kaydı',
		'04' => 'Diğer işitsel',
		'21' => 'Kısmi performans – sözlü konuşma',
		'22' => 'Ana eserin parçası olmayan ilave işitsel içerik',
		'23' => 'Başka kitap ürünü için tanıtım işitseli',
		'06' => 'Video',
		'26' => 'Okumanın video kaydı',
		'27' => 'Performans – görsel',
		'24' => 'Canlandırılmış / etkileşimli ilüstrasyon',
		'25' => 'Öyküleyici canlandırma',
		'28' => 'Diğer video',
		'29' => 'Kısmi performans – video',
		'30' => 'Ana eserin parçası olmayan ilave video içerik',
		'31' => 'Başka kitap ürünü için tanıtım videosu',
		'05' => 'Oyun / Yapboz',
		'32' => 'Yarışma',
		'08' => 'Yazılım',
		'09' => 'Veri',
		'33' => 'Veri seti artı yazılım',
		'34' => 'Boş sayfa veya boşluklar',
		'35' => 'Reklam içeriği',
		'37' => 'Reklam – birinci taraf',
		'36' => 'Reklam – kupon',
		'38' => 'Reklam – üçüncü taraf görüntü',
		'39' => 'Reklam – üçüncü taraf metin',
		'40' => 'Betik',
	];
}
