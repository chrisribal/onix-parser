<?php

namespace Ribal\Onix\CodeList;

/**
 * ONIX Code List 29
 *
 * Used with <AudienceCodeType> <b204>
 *
 * @see https://ns.editeur.org/onix/en/29
 */
class CodeList29 extends CodeList implements CodeListInterface
{
	/**
	 * Code List 29 for en
	 *
	 * @var array
	 * @see https://ns.editeur.org/onix/en/29
	 */
	protected static $en = [
		'01' => 'ONIX audience codes',
		'02' => 'Proprietary',
		'03' => 'MPAA rating',
		'04' => 'BBFC rating',
		'05' => 'FSK rating',
		'06' => 'BTLF audience code',
		'07' => 'Electre audience code',
		'08' => 'ANELE Tipo',
		'09' => 'AVI',
		'10' => 'USK rating',
		'11' => 'AWS',
		'12' => 'Schulform',
		'13' => 'Bundesland',
		'14' => 'Ausbildungsberuf',
		'15' => 'Suomalainen kouluasteluokitus',
		'16' => 'CBG age guidance',
		'17' => 'Nielsen Book audience code',
		'18' => 'AVI (revised)',
		'19' => 'Lexile measure',
		'20' => 'Fry Readability score',
		'21' => 'Japanese Children’s audience code',
		'22' => 'ONIX Adult audience rating',
		'23' => 'Common European Framework of Reference for Language Learning (CEFR)',
		'24' => 'Korean Publication Ethics Commission rating',
		'25' => 'IoE Book Band',
		'26' => 'FSK Lehr-/Infoprogramm',
		'27' => 'Intended audience language',
		'28' => 'PEGI rating',
		'29' => 'Gymnasieprogram',
	];

	/**
	 * Code List 29 for es
	 *
	 * @var array
	 * @see https://ns.editeur.org/onix/es/29
	 */
	protected static $es = [
		'01' => 'Códigos de audiencia ONIX',
		'02' => 'Propio / Privado',
		'03' => 'Calificación MPAA',
		'04' => 'Calificación BBFC',
		'05' => 'Calificación FSK',
		'06' => 'Código de audiencia BTLF',
		'07' => 'Código de audiencia Electre',
		'08' => 'ANELE Tipo',
		'09' => 'AVI',
		'10' => 'Calificación USK',
		'11' => 'AWS',
		'12' => 'Schulform',
		'13' => 'Bundesland',
		'14' => 'Ausbildungsberuf',
		'15' => 'Suomalainen kouluasteluokitus',
		'16' => 'Recomendación de edad de CBG',
		'17' => 'Nielsen Book audience code',
		'18' => 'AVI (Revisado)',
		'19' => 'Medida Lexile',
		'20' => 'Puntuación de legibilidad Fry',
		'21' => 'Código de público infantil/juvenil en Japón',
		'22' => 'Código de calificación ONIX para audiencia adulta',
		'23' => 'Marco común europeo de referencia para las lenguas',
		'24' => 'Calificación de la Korean Publication Ethics Commission',
		'25' => 'IoE Book Band',
		'26' => 'FSK Lehr/infoprogramm',
		'27' => 'Idioma del destinatario de la obra',
		'28' => 'Clasificación PEGI',
		'29' => 'Gymnasieprogram',
	];

	/**
	 * Code List 29 for de
	 *
	 * @var array
	 * @see https://ns.editeur.org/onix/de/29
	 */
	protected static $de = [
		'01' => 'ONIX audience codes',
		'02' => 'Proprietary',
		'03' => 'MPAA rating',
		'04' => 'BBFC rating',
		'05' => 'FSK rating',
		'06' => 'BTLF audience code',
		'07' => 'Electre audience code',
		'08' => 'ANELE Tipo',
		'09' => 'AVI',
		'10' => 'USK rating',
		'11' => 'AWS',
		'12' => 'Schulform',
		'13' => 'Bundesland',
		'14' => 'Ausbildungsberuf',
		'15' => 'Suomalainen kouluasteluokitus',
		'16' => 'CBG age guidance',
		'17' => 'Nielsen Book audience code',
		'18' => 'AVI (revised)',
		'19' => 'Lexile measure',
		'20' => 'Fry Readability score',
		'21' => 'Japanese Children’s audience code',
		'22' => 'ONIX Adult audience rating',
		'23' => 'Common European Framework of Reference for Language Learning (CEFR)',
		'24' => 'Korean Publication Ethics Commission rating',
		'25' => 'IoE Book Band',
		'26' => 'FSK Lehr-/Infoprogramm',
		'27' => 'Intended audience language',
		'28' => 'PEGI rating',
		'29' => 'Gymnasieprogram',
	];

	/**
	 * Code List 29 for fr
	 *
	 * @var array
	 * @see https://ns.editeur.org/onix/fr/29
	 */
	protected static $fr = [
		'01' => 'Code Public ONIX',
		'02' => 'Propriétaire',
		'03' => 'Evaluation MPAA',
		'04' => 'Evaluation BBFC',
		'05' => 'Evaluation FSK',
		'06' => 'Code Public BTLF',
		'07' => 'Code Public Electre',
		'08' => 'ANELE Tipo',
		'09' => 'AVI',
		'10' => 'Evaluation USK (Allemagne)',
		'11' => 'AWS',
		'12' => 'Schulform',
		'13' => 'Bundesland',
		'14' => 'Ausbildungsberuf',
		'15' => 'Suomalainen kouluasteluokitus',
		'16' => 'Recommandations CBG pour l’âge',
		'17' => 'Code Public Nielsen Book',
		'18' => 'AVI (révisé)',
		'19' => 'Mesure Lexile',
		'20' => 'Score de lisibilité Fry',
		'21' => 'Code Public pour les enfants japonais',
		'22' => 'Evaluation ONIX du public adulte',
		'23' => 'Cadre européen commun de référence pour les langues (CECRL)',
		'24' => 'Evaluation KPEC (Korean Publication Ethics Commission)',
		'25' => 'IoE Book Band',
		'26' => 'FSK Lehr-/Infoprogramm',
		'27' => 'Langue du public visé',
		'28' => 'Mesure PEGI',
		'29' => 'Gymnasieprogram',
	];

	/**
	 * Code List 29 for it
	 *
	 * @var array
	 * @see https://ns.editeur.org/onix/it/29
	 */
	protected static $it = [
		'01' => 'Codifica del destinatario ONIX',
		'02' => 'Proprietario',
		'03' => 'MPAA rating',
		'04' => 'BBFC rating',
		'05' => 'FSK rating',
		'06' => 'BTLF audience code',
		'07' => 'Electre audience code',
		'08' => 'USK rating',
		'09' => 'AVI',
		'10' => 'USK rating',
		'11' => 'AWS',
		'12' => 'Schulform',
		'13' => 'Bundesland',
		'14' => 'Ausbildungsberuf',
		'15' => 'Suomalainen kouluasteluokitus',
		'16' => 'CBG age guidance',
		'17' => 'Nielsen Book audience code',
		'18' => 'AVI (revised)',
		'19' => 'Parametri Lexile',
		'20' => 'Fry Readability score',
		'21' => 'Japanese Children’s audience code',
		'22' => 'ONIX Adult audience rating',
		'23' => 'Quadro comune europeo di riferimento per la conoscenza delle lingue (QCER)',
		'24' => 'Korean Publication Ethics Commission rating',
		'25' => 'IoE Book Band',
		'26' => 'FSK Lehr-Infoprogramm',
		'27' => 'Lingua del destinatario previsto',
		'28' => 'PEGI rating',
		'29' => 'Gymnasieprogram',
	];

	/**
	 * Code List 29 for nb
	 *
	 * @var array
	 * @see https://ns.editeur.org/onix/nb/29
	 */
	protected static $nb = [
		'01' => 'ONIX målgruppekoder',
		'02' => 'Proprietær',
		'03' => 'MPAA rating',
		'04' => 'BBFC rating',
		'05' => 'FSK rating',
		'06' => 'Fransk-kanadisk BTLF målgruppekoder',
		'07' => 'Fransk Electre målgruppekoder',
		'08' => 'Spansk ANELE Tipo',
		'09' => 'AVI',
		'10' => 'USK rating',
		'11' => 'AWS',
		'12' => 'Schulform',
		'13' => 'Bundesland',
		'14' => 'Ausbildungsberuf',
		'15' => 'Suomalainen kouluasteluokitus',
		'16' => 'CBG age guidance',
		'17' => 'Nielsen Book audience code',
		'18' => 'AVI (revised)',
		'19' => 'Lexile measure',
		'20' => 'Fry Readability score',
		'21' => 'Japanese Children’s audience code',
		'22' => 'ONIX Adult audience rating',
		'23' => 'Det felles europeiske rammeverket for språk (Norsk versjon av Common European Framework of Reference for Language Learning [CEFR])',
		'24' => 'Korean Publication Ethics Commission rating',
		'25' => 'IoE Book Band',
		'26' => 'FSK Lehr-/Infoprogramm',
		'27' => 'Intended audience language',
		'28' => 'PEGI rating',
		'29' => 'Gymnasieprogram',
	];

	/**
	 * Code List 29 for tr
	 *
	 * @var array
	 * @see https://ns.editeur.org/onix/tr/29
	 */
	protected static $tr = [
		'01' => 'ONIX izlerkitle kodları',
		'02' => 'Özel',
		'03' => 'MPAA derecelendirmesi',
		'04' => 'BBFC derecelendirmesi',
		'05' => 'FSK derecelendirmesi',
		'06' => 'BTLF izlerkitle kodu',
		'07' => 'Electre izlerkitle kodu',
		'08' => 'ANELE Tipo',
		'09' => 'AVI',
		'10' => 'USK derecelendirmesi',
		'11' => 'AWS',
		'12' => 'Schulform',
		'13' => 'Bundesland',
		'14' => 'Ausbildungsberuf',
		'15' => 'Suomalainen kouluasteluokitus',
		'16' => 'CBG yaş kılavuzu',
		'17' => 'Nielsen Book izlerkitle kodu',
		'18' => 'AVI (gözden geçirilmiş)',
		'19' => 'Lexile ölçüsü',
		'20' => 'Fry Okunabilirlik skoru',
		'21' => 'Japon Çocuk izlerkitle kodu',
		'22' => 'ONIX Yetişkin izlerkitle derecelendirmesi',
		'23' => 'Dil Öğrenimi için Avrupa Ortak Çerçevesi',
		'24' => 'Kore Yayın Etiği Komisyonu derecelendirmesi',
		'25' => 'IoE Kitap Kasedi',
		'26' => 'FSK Lehr-/Infoprogramm',
		'27' => 'Hedef izlerkitle dili',
		'28' => 'PEGI derecelendirmesi',
		'29' => 'Gymnasieprogram',
	];
}
