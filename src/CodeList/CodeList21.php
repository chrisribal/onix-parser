<?php

namespace Ribal\Onix\CodeList;

/**
 * ONIX Code List 21
 *
 * Used with <EditionType> <x419>
 *
 * @see https://ns.editeur.org/onix/en/21
 */
class CodeList21 extends CodeList implements CodeListInterface
{
	/**
	 * Code List 21 for en
	 *
	 * @var array
	 * @see https://ns.editeur.org/onix/en/21
	 */
	protected static $en = [
		'ABR' => 'Abridged edition',
		'ACT' => 'Acting edition',
		'ADP' => 'Adapted edition',
		'ALT' => 'Alternate',
		'ANN' => 'Annotated edition',
		'BLL' => 'Bilingual edition',
		'BLP' => 'Bilingual ‘facing page’ edition',
		'BRL' => 'Braille edition',
		'CMB' => 'Combined volume',
		'CRI' => 'Critical edition',
		'CSP' => 'Coursepack',
		'DGO' => 'Digital original',
		'ENH' => 'Enhanced edition',
		'ENL' => 'Enlarged edition',
		'EXP' => 'Expurgated edition',
		'FAC' => 'Facsimile edition',
		'FST' => 'Festschrift',
		'HRE' => 'High readability edition',
		'ILL' => 'Illustrated edition',
		'INT' => 'International edition',
		'LTE' => 'Large type / large print edition',
		'MCP' => 'Microprint edition',
		'MDT' => 'Media tie-in',
		'MLL' => 'Multilingual edition',
		'NED' => 'New edition',
		'NUM' => 'Edition with numbered copies',
		'PRB' => 'Prebound edition',
		'REV' => 'Revised edition',
		'SCH' => 'School edition',
		'SIG' => 'Signed edition',
		'SMP' => 'Simplified language edition',
		'SPE' => 'Special edition',
		'STU' => 'Student edition',
		'TCH' => 'Teacher’s edition',
		'UBR' => 'Unabridged edition',
		'ULP' => 'Ultra large print edition',
		'UNN' => 'Edition with unnumbered copies',
		'UXP' => 'Unexpurgated edition',
		'VAR' => 'Variorum edition',
	];

	/**
	 * Code List 21 for es
	 *
	 * @var array
	 * @see https://ns.editeur.org/onix/es/21
	 */
	protected static $es = [
		'ABR' => 'Edición compendiada',
		'ACT' => 'Edición para actuación',
		'ADP' => 'Edición adaptada',
		'ALT' => 'Edición alternativa',
		'ANN' => 'Edición anotada',
		'BLL' => 'Edición bilingüe',
		'BLP' => 'Edición bilingüe con «páginas enfrentadas»',
		'BRL' => 'Edición en Braille',
		'CMB' => 'Volumen combinado',
		'CRI' => 'Edición crítica',
		'CSP' => 'Paquete para uso didáctico (Coursepack)',
		'DGO' => 'Edición nativa digital',
		'ENH' => 'Edición enriquecida / mejorada',
		'ENL' => 'Edición ampliada',
		'EXP' => 'Edición expurgada',
		'FAC' => 'Edición facsímil',
		'FST' => 'Festschrift',
		'HRE' => 'Edición de alta legibilidad',
		'ILL' => 'Edición ilustrada',
		'INT' => 'Edición internacional',
		'LTE' => 'Edición en caracteres grandes',
		'MCP' => 'Edición en microcaracteres',
		'MDT' => 'Edición combinada con media',
		'MLL' => 'Edición multilingüe',
		'NED' => 'Nueva edición',
		'NUM' => 'Edición con ejemplares numerados',
		'PRB' => 'Edición «prebound» (Preencuadernada)',
		'REV' => 'Edición revisada',
		'SCH' => 'Edición escolar',
		'SIG' => 'Edición firmada',
		'SMP' => 'Edición con lenguaje simplificado',
		'SPE' => 'Edición especial',
		'STU' => 'Edición para el alumno',
		'TCH' => 'Edición para el profesor',
		'UBR' => 'Edición íntegra',
		'ULP' => 'Edición con tipografía extra grande',
		'UNN' => 'Edición limitada con ejemplares sin numerar',
		'UXP' => 'Edición no expurgada',
		'VAR' => 'Variórum',
	];

	/**
	 * Code List 21 for de
	 *
	 * @var array
	 * @see https://ns.editeur.org/onix/de/21
	 */
	protected static $de = [
		'ABR' => 'Abridged edition',
		'ACT' => 'Acting edition',
		'ADP' => 'Adapted edition',
		'ALT' => 'Alternate',
		'ANN' => 'Annotated edition',
		'BLL' => 'Bilingual edition',
		'BLP' => 'Bilingual ‘facing page’ edition',
		'BRL' => 'Braille edition',
		'CMB' => 'Combined volume',
		'CRI' => 'Critical edition',
		'CSP' => 'Coursepack',
		'DGO' => 'Digital original',
		'ENH' => 'Enhanced edition',
		'ENL' => 'Enlarged edition',
		'EXP' => 'Expurgated edition',
		'FAC' => 'Facsimile edition',
		'FST' => 'Festschrift',
		'HRE' => 'High readability edition',
		'ILL' => 'Illustrated edition',
		'INT' => 'International edition',
		'LTE' => 'Large type / large print edition',
		'MCP' => 'Microprint edition',
		'MDT' => 'Media tie-in',
		'MLL' => 'Multilingual edition',
		'NED' => 'New edition',
		'NUM' => 'Edition with numbered copies',
		'PRB' => 'Prebound edition',
		'REV' => 'Revised edition',
		'SCH' => 'School edition',
		'SIG' => 'Signed edition',
		'SMP' => 'Simplified language edition',
		'SPE' => 'Special edition',
		'STU' => 'Student edition',
		'TCH' => 'Teacher’s edition',
		'UBR' => 'Unabridged edition',
		'ULP' => 'Ultra large print edition',
		'UNN' => 'Edition with unnumbered copies',
		'UXP' => 'Unexpurgated edition',
		'VAR' => 'Variorum edition',
	];

	/**
	 * Code List 21 for fr
	 *
	 * @var array
	 * @see https://ns.editeur.org/onix/fr/21
	 */
	protected static $fr = [
		'ABR' => 'Edition abrégée',
		'ACT' => 'Edition pour la scène',
		'ADP' => 'Edition adaptée',
		'ALT' => 'Autre',
		'ANN' => 'Edition annotée',
		'BLL' => 'Edition bilingue',
		'BLP' => 'Edition bilingue, traduction en vis-à-vis',
		'BRL' => 'Edition en Braille',
		'CMB' => 'Recueil',
		'CRI' => 'Edition critique',
		'CSP' => 'Pack pédagogique',
		'DGO' => 'Original numérique',
		'ENH' => 'Edition enrichie',
		'ENL' => 'Edition augmentée',
		'EXP' => 'Edition expurgée',
		'FAC' => 'Edition en fac-similé',
		'FST' => 'Mélanges',
		'HRE' => 'Edition haute lisibilité',
		'ILL' => 'Edition illustrée',
		'INT' => 'Edition internationale',
		'LTE' => 'Edition en gros caractères',
		'MCP' => 'Edition en micro-caractères',
		'MDT' => 'Edition dérivée',
		'MLL' => 'Edition multilingue',
		'NED' => 'Nouvelle édition',
		'NUM' => 'Edition avec exemplaires numérotés',
		'PRB' => 'Edition préreliée',
		'REV' => 'Edition révisée',
		'SCH' => 'Edition scolaire',
		'SIG' => 'Edition signée',
		'SMP' => 'Edition en langue simplifiée',
		'SPE' => 'Edition spéciale',
		'STU' => 'Edition de l’élève / de l’étudiant',
		'TCH' => 'Edition de l’enseignant',
		'UBR' => 'Edition en texte intégral',
		'ULP' => 'Edition en très gros caractères',
		'UNN' => 'Edition avec exemplaires non numérotés',
		'UXP' => 'Edition non expurgée',
		'VAR' => 'Edition variorum',
	];

	/**
	 * Code List 21 for it
	 *
	 * @var array
	 * @see https://ns.editeur.org/onix/it/21
	 */
	protected static $it = [
		'ABR' => 'Edizione ridotta',
		'ACT' => 'Edizione per il palcoscenico/Copione',
		'ADP' => 'Edizione adattata',
		'ALT' => 'Alternativa',
		'ANN' => 'Edizione annotata',
		'BLL' => 'Edizione bilingue',
		'BLP' => 'Edizione bilingue con testo a fronte',
		'BRL' => 'Edizione in Braille',
		'CMB' => 'Edizione combinata',
		'CRI' => 'Edizione critica',
		'CSP' => 'Prodotto per corso didattico',
		'DGO' => 'Originale digitale',
		'ENH' => 'Edizione arricchita',
		'ENL' => 'Edizione ampliata',
		'EXP' => 'Edizione censurata',
		'FAC' => 'Edizione facsimile',
		'FST' => 'Festschrift',
		'HRE' => 'Edizione ad alta leggibilità',
		'ILL' => 'Edizione illustrata',
		'INT' => 'Edizione internazionale',
		'LTE' => 'Edizione a caratteri grandi',
		'MCP' => 'Microstampa',
		'MDT' => 'Edizione collegata a un evento dello spettacolo',
		'MLL' => 'Edizione multilingue',
		'NED' => 'Nuova edizione',
		'NUM' => 'Edizione limitata con copie numerate',
		'PRB' => 'Pre-rilegato',
		'REV' => 'Edizione riveduta',
		'SCH' => 'Edizione scolastica',
		'SIG' => 'Edizione firmata',
		'SMP' => 'Edizione in lingua semplificata',
		'SPE' => 'Edizione speciale',
		'STU' => 'Edizione per lo studente',
		'TCH' => 'Edizione per l’insegnante',
		'UBR' => 'Edizione integrale',
		'ULP' => 'Edizione a caratteri molto grandi',
		'UNN' => 'Edizione limitata con copie non numerate',
		'UXP' => 'Edizione integrale senza censure',
		'VAR' => 'Edizione con note di vari commentatori',
	];

	/**
	 * Code List 21 for nb
	 *
	 * @var array
	 * @see https://ns.editeur.org/onix/nb/21
	 */
	protected static $nb = [
		'ABR' => 'Forkortet utgave',
		'ACT' => 'Sceneutgave',
		'ADP' => 'Tilpasset utgave',
		'ALT' => 'Alternativ',
		'ANN' => 'Annotert utgave',
		'BLL' => 'Tospråklig utgave',
		'BLP' => 'Tospråklig utgave; ‘motstående sider’',
		'BRL' => 'Braille-utgave',
		'CMB' => 'Sammensatt utgave',
		'CRI' => 'Kommentert utgave',
		'CSP' => 'Kurspakke',
		'DGO' => 'Digital original',
		'ENH' => 'Beriket utgave',
		'ENL' => 'Utvidet utgave',
		'EXP' => 'Renset utgave',
		'FAC' => 'Faksimileutgave',
		'FST' => 'Festskrift',
		'HRE' => 'Utgave med høy lesbarhet',
		'ILL' => 'Illustrert utgave',
		'INT' => 'Internasjonal utgave',
		'LTE' => 'Storskriftutgave',
		'MCP' => 'Mikroskriftutgave',
		'MDT' => 'Media tie-in',
		'MLL' => 'Flerspråklig utgave',
		'NED' => 'Ny utgave',
		'NUM' => 'Nummerert utgave',
		'PRB' => 'Prebound edition',
		'REV' => 'Revidert utgave',
		'SCH' => 'Skoleutgave',
		'SIG' => 'Signert utgave',
		'SMP' => 'Utgave med forenklet språk',
		'SPE' => 'Spesialutgave',
		'STU' => 'Studentutgave',
		'TCH' => 'Lærerutgave',
		'UBR' => 'Uforkortet',
		'ULP' => 'Utgave med ekstra stor skrift',
		'UNN' => 'Unummerert utgave',
		'UXP' => 'Urenset utgave',
		'VAR' => 'Variorumutgave',
	];

	/**
	 * Code List 21 for tr
	 *
	 * @var array
	 * @see https://ns.editeur.org/onix/tr/21
	 */
	protected static $tr = [
		'ABR' => 'Kısaltılmış basım',
		'ACT' => 'Sahneleme basımı',
		'ADP' => 'Uyarlanmış basım',
		'ALT' => 'Değiştirilmiş',
		'ANN' => 'Açıklamalı basım',
		'BLL' => 'İki dilli basım',
		'BLP' => 'İki dilli “karşılıklı sayfa” basımı',
		'BRL' => 'Braille basım',
		'CMB' => 'Birleşik cilt',
		'CRI' => 'Eleştirili basım',
		'CSP' => 'Ders seçkisi',
		'DGO' => 'Dijital orijinal',
		'ENH' => 'Zenginleştirilmiş sürüm',
		'ENL' => 'Genişletilmiş basım',
		'EXP' => 'Sansürlenmiş basım',
		'FAC' => 'Tıpkı basım',
		'FST' => 'Festschrift [Armağan kitap]',
		'HRE' => 'High readability edition',
		'ILL' => 'Resimli basım',
		'INT' => 'Uluslararası basım',
		'LTE' => 'Büyük puntolu/ yazı tipi büyük basım',
		'MCP' => 'Mikropunto basım',
		'MDT' => 'Ortam bağlantılı',
		'MLL' => 'Çokdilli basım',
		'NED' => 'Yeni basım',
		'NUM' => 'Numaralı basım',
		'PRB' => 'Tekrar ciltlenmiş basım',
		'REV' => 'Gözden geçirilmiş basım',
		'SCH' => 'Okul basımı',
		'SIG' => 'İmzalı basım',
		'SMP' => 'Basitleştirilmiş dilli basım',
		'SPE' => 'Özel basım',
		'STU' => 'Öğrenci basımı',
		'TCH' => 'Öğretmen basımı',
		'UBR' => 'Kısaltılmamış basım',
		'ULP' => 'Çok büyük puntolu/ yazı tipi çok büyük basım',
		'UNN' => 'Edition with unnumbered copies',
		'UXP' => 'Sansürsüz basım',
		'VAR' => 'Şerhli basım',
	];
}
