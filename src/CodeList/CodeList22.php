<?php

namespace Ribal\Onix\CodeList;

/**
 * ONIX Code List 22
 *
 * Used with <LanguageRole> <b253>
 *
 * @see https://ns.editeur.org/onix/en/22
 */
class CodeList22 extends CodeList implements CodeListInterface
{
	/**
	 * Code List 22 for en
	 *
	 * @var array
	 * @see https://ns.editeur.org/onix/en/22
	 */
	protected static $en = [
		'01' => 'Language of text',
		'02' => 'Original language of a translated text',
		'03' => 'Language of abstracts',
		'06' => 'Original language in a multilingual edition',
		'07' => 'Translated language in a multilingual edition',
		'08' => 'Language of audio track',
		'09' => 'Language of subtitles',
		'10' => 'Language of original audio track',
		'11' => 'Original language audio track in a multilingual product',
		'12' => 'Language of notes',
	];

	/**
	 * Code List 22 for es
	 *
	 * @var array
	 * @see https://ns.editeur.org/onix/es/22
	 */
	protected static $es = [
		'01' => 'Idioma del texto',
		'02' => 'Idioma original de un texto traducido',
		'03' => 'Idioma de los abstracts',
		'06' => 'Idioma original en una edición multilingüe',
		'07' => 'Idioma traducido en una edición multilingüe',
		'08' => 'Idioma de una pista de audio',
		'09' => 'Idioma de los subtítulos',
		'10' => 'Idioma de la pista original de audio',
		'11' => 'Idioma original en un producto de audio multidioma',
		'12' => 'Idioma de las notas',
	];

	/**
	 * Code List 22 for de
	 *
	 * @var array
	 * @see https://ns.editeur.org/onix/de/22
	 */
	protected static $de = [
		'01' => 'Language of text',
		'02' => 'Original language of a translated text',
		'03' => 'Language of abstracts',
		'06' => 'Original language in a multilingual edition',
		'07' => 'Translated language in a multilingual edition',
		'08' => 'Language of audio track',
		'09' => 'Language of subtitles',
		'10' => 'Language of original audio track',
		'11' => 'Original language audio track in a multilingual product',
		'12' => 'Language of notes',
	];

	/**
	 * Code List 22 for fr
	 *
	 * @var array
	 * @see https://ns.editeur.org/onix/fr/22
	 */
	protected static $fr = [
		'01' => 'Langue du texte',
		'02' => 'Langue originale du texte traduit',
		'03' => 'Langue du résumé',
		'06' => 'Langue originale dans une édition multilingue',
		'07' => 'Langue traduite dans une édition multilingue',
		'08' => 'Langue d’une piste audio',
		'09' => 'Langue des sous-titres',
		'10' => 'Langue audio originale',
		'11' => 'Langue audio originale d’un produit multilingue',
		'12' => 'Langue des notes',
	];

	/**
	 * Code List 22 for it
	 *
	 * @var array
	 * @see https://ns.editeur.org/onix/it/22
	 */
	protected static $it = [
		'01' => 'Lingua del testo',
		'02' => 'Lingua originale di un testo tradotto',
		'03' => 'Lingua degli abstract',
		'06' => 'Lingua originale di un’edizione multilingue',
		'07' => 'Lingua di traduzione di un’edizione multilingue',
		'08' => 'Lingua di una traccia audio',
		'09' => 'Lingua dei sottotitoli',
		'10' => 'Lingua della traccia audio originale',
		'11' => 'Lingua della traccia audio originale in un prodotto multilingue',
		'12' => 'Lingua delle note',
	];

	/**
	 * Code List 22 for nb
	 *
	 * @var array
	 * @see https://ns.editeur.org/onix/nb/22
	 */
	protected static $nb = [
		'01' => 'Tekstens språk',
		'02' => 'Originalspråk',
		'03' => 'Språk i sammendrag',
		'06' => 'Originalspråket i en flerspråklig utgave',
		'07' => 'Oversatt språk i en flerspråklig utgave',
		'08' => 'Språk på lydspor',
		'09' => 'Språk på undertekst',
		'10' => 'Språk på originalt lydspor',
		'11' => 'Originalspråk i et produkt med lydspor på flere språk',
		'12' => 'Språk i noter',
	];

	/**
	 * Code List 22 for tr
	 *
	 * @var array
	 * @see https://ns.editeur.org/onix/tr/22
	 */
	protected static $tr = [
		'01' => 'Metin dili',
		'02' => 'Çeviri metnin özgün dili',
		'03' => 'Özet dili',
		'06' => 'Çokdilli basımda özgün dil',
		'07' => 'Çokdilli basımda çeviri dili',
		'08' => 'Ses parçasının dili',
		'09' => 'Altyazı dili',
		'10' => 'Orijinal ses parçasının dili',
		'11' => 'Çok dilli bir ses ürünündeki orijinal dil',
		'12' => 'Not dili',
	];
}
