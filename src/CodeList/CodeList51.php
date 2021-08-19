<?php

namespace Ribal\Onix\CodeList;

/**
 * ONIX Code List 51
 *
 * Used with <ProductRelationCode> <x455>
 *
 * @see https://ns.editeur.org/onix/en/51
 */
class CodeList51 extends CodeList implements CodeListInterface
{
	/**
	 * Code List 51 for en
	 *
	 * @var array
	 * @see https://ns.editeur.org/onix/en/51
	 */
	protected static $en = [
		'00' => 'Unspecified',
		'01' => 'Includes',
		'02' => 'Is part of',
		'03' => 'Replaces',
		'05' => 'Replaced by',
		'06' => 'Alternative format',
		'07' => 'Has ancillary product',
		'08' => 'Is ancillary to',
		'09' => 'Is remaindered as',
		'10' => 'Is remainder of',
		'11' => 'Is other-language version of',
		'12' => 'Publisher’s suggested alternative',
		'13' => 'Epublication based on (print product)',
		'14' => 'Epublication is distributed as',
		'16' => 'POD replacement for',
		'17' => 'Replaced by POD',
		'18' => 'Is special edition of',
		'19' => 'Has special edition',
		'20' => 'Is prebound edition of',
		'21' => 'Is original of prebound edition',
		'22' => 'Product by same author',
		'23' => 'Similar product',
		'24' => 'Is facsimile of',
		'25' => 'Is original of facsimile',
		'26' => 'Is license for',
		'27' => 'Electronic version available as',
		'28' => 'Enhanced version available as',
		'29' => 'Basic version available as',
		'30' => 'Product in same collection',
		'31' => 'Has alternative in a different market sector',
		'32' => 'Has equivalent intended for a different market',
		'33' => 'Has alternative intended for different market',
		'34' => 'Cites',
		'35' => 'Is cited by',
		'37' => 'Is signed version of',
		'38' => 'Has signed version',
		'39' => 'Has related student material',
		'40' => 'Has related teacher material',
		'41' => 'Some content shared with',
		'42' => 'Is later edition of first edition',
		'43' => 'Adapted from',
		'44' => 'Adapted as',
	];

	/**
	 * Code List 51 for es
	 *
	 * @var array
	 * @see https://ns.editeur.org/onix/es/51
	 */
	protected static $es = [
		'00' => 'Relación no especificada',
		'01' => 'Incluye a',
		'02' => 'Es parte de',
		'03' => 'Sustituye',
		'05' => 'Sustituido por',
		'06' => 'Formato alternativo',
		'07' => 'Tiene como complemento',
		'08' => 'Es complemento de',
		'09' => 'Se comercializa como saldo en la forma',
		'10' => 'Es una venta como saldo de',
		'11' => 'Versión en otro idioma',
		'12' => 'Alternativa sugerida por la editorial',
		'13' => 'Publicación digital basada en (producto impreso)',
		'14' => 'Epublication is distributed as',
		'16' => 'Versión POD sustituta de',
		'17' => 'Sustituido por una versión POD',
		'18' => 'Es una edición especial de',
		'19' => 'Tiene una edición especial',
		'20' => 'Es una edición «prebound» de',
		'21' => 'Es el original de una edición «prebound»',
		'22' => 'Producto del mismo autor',
		'23' => 'Producto similar',
		'24' => 'Es un facsímil de',
		'25' => 'Es la versión original de un facsímil',
		'26' => 'Es una licencia para',
		'27' => 'Versión digital disponible como',
		'28' => 'Versión enriquecida disponible como',
		'29' => 'Versión básica disponible como',
		'30' => 'Producto en la misma colección',
		'31' => 'Producto alternativo en un sector del mercado distinto',
		'32' => 'Tiene un equivalente destinado a un mercado distinto',
		'33' => 'Tiene un producto alternativo destinado a un mercado distinto',
		'34' => 'Cita a',
		'35' => 'Es citado por',
		'37' => 'Es versión firmada de',
		'38' => 'Tiene una versión firmada',
		'39' => 'Tiene material para el alumno',
		'40' => 'Tiene material para el profesor',
		'41' => 'Algún contenido compartido con',
		'42' => 'Es una edición posterior a la primera edición',
		'43' => 'Adaptado de',
		'44' => 'Adaptado como',
	];

	/**
	 * Code List 51 for de
	 *
	 * @var array
	 * @see https://ns.editeur.org/onix/de/51
	 */
	protected static $de = [
		'00' => 'Unspecified',
		'01' => 'Includes',
		'02' => 'Is part of',
		'03' => 'Replaces',
		'05' => 'Replaced by',
		'06' => 'Alternative format',
		'07' => 'Has ancillary product',
		'08' => 'Is ancillary to',
		'09' => 'Is remaindered as',
		'10' => 'Is remainder of',
		'11' => 'Is other-language version of',
		'12' => 'Publisher’s suggested alternative',
		'13' => 'Epublication based on (print product)',
		'14' => 'Epublication is distributed as',
		'16' => 'POD replacement for',
		'17' => 'Replaced by POD',
		'18' => 'Is special edition of',
		'19' => 'Has special edition',
		'20' => 'Is prebound edition of',
		'21' => 'Is original of prebound edition',
		'22' => 'Product by same author',
		'23' => 'Similar product',
		'24' => 'Is facsimile of',
		'25' => 'Is original of facsimile',
		'26' => 'Is license for',
		'27' => 'Electronic version available as',
		'28' => 'Enhanced version available as',
		'29' => 'Basic version available as',
		'30' => 'Product in same collection',
		'31' => 'Has alternative in a different market sector',
		'32' => 'Has equivalent intended for a different market',
		'33' => 'Has alternative intended for different market',
		'34' => 'Cites',
		'35' => 'Is cited by',
		'37' => 'Is signed version of',
		'38' => 'Has signed version',
		'39' => 'Has related student material',
		'40' => 'Has related teacher material',
		'41' => 'Some content shared with',
		'42' => 'Is later edition of first edition',
		'43' => 'Adapted from',
		'44' => 'Adapted as',
	];

	/**
	 * Code List 51 for fr
	 *
	 * @var array
	 * @see https://ns.editeur.org/onix/fr/51
	 */
	protected static $fr = [
		'00' => 'Non spécifiée',
		'01' => 'Inclut',
		'02' => 'Fait partie de',
		'03' => 'Remplace',
		'05' => 'Remplacé par',
		'06' => 'Autre format',
		'07' => 'Possède un produit d’accompagnement',
		'08' => 'Est un accompagnement de',
		'09' => 'Est soldé comme',
		'10' => 'Est un invendu de',
		'11' => 'Est une version dans une autre langue de',
		'12' => 'Alternative suggérée par l’éditeur',
		'13' => 'Publication numérique basée sur (édition papier)',
		'14' => 'Epublication is distributed as',
		'16' => 'POD de remplacement pour',
		'17' => 'Remplacé par POD',
		'18' => 'Est une édition spéciale de',
		'19' => 'Possède une édition spéciale',
		'20' => 'Est une édition préreliée de',
		'21' => 'Est l’original d’une édition préreliée',
		'22' => 'Produit du même auteur',
		'23' => 'Produit similaire',
		'24' => 'Est le fac-similé de',
		'25' => 'Est l’original du fac-similé',
		'26' => 'Est la licence de',
		'27' => 'Version numérique disponible comme',
		'28' => 'Version améliorée disponible comme',
		'29' => 'Version de base disponible comme',
		'30' => 'Produit de la même collection',
		'31' => 'Possède une version alternative dans un secteur de marché différent',
		'32' => 'Possède une version équivalente pour un marché différent',
		'33' => 'Possède une version alternative pour un marché différent',
		'34' => 'Cite',
		'35' => 'Est cité par',
		'37' => 'Est la version signée de',
		'38' => 'Possède une version signée',
		'39' => 'Possède une version pour les étudiants',
		'40' => 'Possède une version pour les enseignants',
		'41' => 'Certains contenus partagés avec',
		'42' => 'Est une édition ultérieure de la première édition',
		'43' => 'Adapté de',
		'44' => 'Adapté comme',
	];

	/**
	 * Code List 51 for it
	 *
	 * @var array
	 * @see https://ns.editeur.org/onix/it/51
	 */
	protected static $it = [
		'00' => 'Non specificato',
		'01' => 'Include',
		'02' => 'Fa parte di',
		'03' => 'Sostituisce',
		'05' => 'È sostituito da',
		'06' => 'Ha come formato alternativo',
		'07' => 'Ha come prodotto secondario o di supporto',
		'08' => 'È un prodotto secondario o di supporto a',
		'09' => 'Ha come corrispondente nel mercato remainder',
		'10' => 'Ha come corrispondente al di fuori del mercato remainder',
		'11' => 'È la versione in un’altra lingua di',
		'12' => 'Ha come prodotto alternativo suggerito dall’editore',
		'13' => 'È una pubblicazione elettronica basata su (prodotto a stampa)',
		'14' => 'Epublication is distributed as',
		'16' => 'È un prodotto POD sostitutivo di',
		'17' => 'È sostituito da un prodotto POD',
		'18' => 'È l’edizione speciale di',
		'19' => 'Ha come edizione speciale',
		'20' => 'È l’originale dell’edizione rilegata per la biblioteca di',
		'21' => 'È l’edizione rilegata per la biblioteca di',
		'22' => 'È prodotto dallo stesso autore di',
		'23' => 'Ha come prodotto analogo',
		'24' => 'È facsimile di',
		'25' => 'È l’originale del facsimile',
		'26' => 'È la licenza di',
		'27' => 'Ha come versione elettronica',
		'28' => 'Ha come versione arricchita',
		'29' => 'Ha come versione di base',
		'30' => 'Fa parte della stessa collezione di',
		'31' => 'Ha come prodotto alternativo in un diverso settore del mercato',
		'32' => 'Ha come prodotto equivalente in un diverso mercato',
		'33' => 'Ha come prodotto alternativo in un diverso mercato',
		'34' => 'Cita',
		'35' => 'È citato da',
		'37' => 'È la versione firmata di',
		'38' => 'Ha come versione firmata',
		'39' => 'Ha come materiale corrispondente per lo studente',
		'40' => 'Ha come materiale corrispondente per l’insegnante',
		'41' => 'Condivide alcuni contenuti con',
		'42' => 'È un’edizione successiva della prima edizione',
		'43' => 'È la versione adattata di',
		'44' => 'Ha come edizione adattata',
	];

	/**
	 * Code List 51 for nb
	 *
	 * @var array
	 * @see https://ns.editeur.org/onix/nb/51
	 */
	protected static $nb = [
		'00' => 'Uspesifisert',
		'01' => 'Inkluderer',
		'02' => 'Er del av',
		'03' => 'Erstatter',
		'05' => 'Erstattet av',
		'06' => 'Alternativt format',
		'07' => 'Har tilleggsprodukt',
		'08' => 'Er tilleggsprodukt til',
		'09' => 'Restopplaget identifisert som',
		'10' => 'Er restopplag av',
		'11' => 'Er versjon på annet språk av',
		'12' => 'Utgivers/vareeiers foreslåtte alternativ',
		'13' => 'E-bok basert på (trykt publikasjon)',
		'14' => 'Epublication is distributed as',
		'16' => 'POD erstatning for',
		'17' => 'Erstattet av POD',
		'18' => 'Er spesialutgave av',
		'19' => 'Har spesialutgave',
		'20' => 'Is prebound edition of',
		'21' => 'Is original of prebound edition',
		'22' => 'Produkt av samme forfatter',
		'23' => 'Lignende produkt',
		'24' => 'Er faksimile av',
		'25' => 'Er originalen til faksimile',
		'26' => 'Er lisens til',
		'27' => 'Digital versjon tilgjengelig som',
		'28' => 'Beriket versjon tilgjengelig som',
		'29' => 'Uberiket versjon tilgjengelig som',
		'30' => 'Produkt i samme ‘serie’ (collection)',
		'31' => 'Har alternativ i en annen sektor av markedet',
		'32' => 'Har tilsvarende produkt ment for et annet marked',
		'33' => 'Har et alternativ ment for et annet marked',
		'34' => 'Siterer',
		'35' => 'Er sitert av',
		'37' => 'Er signert versjon av',
		'38' => 'Har signert versjon',
		'39' => 'Har relatert elevmateriell',
		'40' => 'Har relatert lærermateriell',
		'41' => 'Deler noe innhold med',
		'42' => 'Er senere utgave av første utgave',
		'43' => 'Tilpasset/bearbeidet fra',
		'44' => 'Tilbasset/bearbeidet som',
	];

	/**
	 * Code List 51 for tr
	 *
	 * @var array
	 * @see https://ns.editeur.org/onix/tr/51
	 */
	protected static $tr = [
		'00' => 'Belirtilmemiş',
		'01' => 'Kapsar',
		'02' => 'Parçası',
		'03' => 'Yerine geçer',
		'05' => 'Yerini bırakır',
		'06' => 'Alternatif format',
		'07' => 'Ek ürüne sahip',
		'08' => 'Eki',
		'09' => 'Kelepir kimliği',
		'10' => 'Kelepirde özgün kimlik',
		'11' => 'Başka dildeki sürümü',
		'12' => 'Yayımcının alternatif önerisi',
		'13' => 'E-yayın (baskı ürünü) dayanmaktadır',
		'14' => 'Epublication is distributed as',
		'16' => 'TGB ikame ürün',
		'17' => 'Yerine TGB geçer',
		'18' => 'Özel basım',
		'19' => 'Özel basımı var',
		'20' => 'Tekrar ciltlenmiş basımı',
		'21' => 'Tekrar ciltlenmiş basımın normal aslı',
		'22' => 'Aynı yazarın ürünü',
		'23' => 'Benzer ürün',
		'24' => 'Tıpkıbasımı',
		'25' => 'Tıpkıbasımın özgün aslı',
		'26' => 'Ürün lisansı',
		'27' => 'Elektronik sürümü mevcut',
		'28' => 'Zenginleştirilmiş sürümü mevcut',
		'29' => 'Basit sürümü mevcut',
		'30' => 'Aynı koleksiyona ait ürün',
		'31' => 'Farklı bir pazar sektöründe alternatifi vardır',
		'32' => 'Farklı bir pazara yönelik bir eşdeğeri vardır',
		'33' => 'Farklı bir pazara yönelik bir alternatifi vardır',
		'34' => 'Alıntılar',
		'35' => 'Alıntılanır',
		'37' => 'Başka ürünün imzalı sürümü',
		'38' => 'İmzalı sürümü var',
		'39' => 'İlişkili öğrenci materyaline sahip',
		'40' => 'İlişkili öğretmen materyaline sahip',
		'41' => 'İçeriğin bir kısmı ilişkili ürün ile ortak',
		'42' => 'İlk basımın sonraki basımı',
		'43' => 'Adapted from',
		'44' => 'Adapted as',
	];
}
