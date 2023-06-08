<?php

namespace Ribal\Onix\CodeList;

/**
 * ONIX Code List 153
 *
 * Used with <TextType> <x426>
 *
 * @see https://ns.editeur.org/onix/en/153
 */
class CodeList153 extends CodeList implements CodeListInterface
{
	/**
	 * Code List 153 for en
	 *
	 * @var array
	 * @see https://ns.editeur.org/onix/en/153
	 */
	protected static $en = [
		'01' => 'Sender-defined text',
		'02' => 'Short description/annotation',
		'03' => 'Description',
		'04' => 'Table of contents',
		'05' => 'Primary cover copy',
		'06' => 'Review quote',
		'07' => 'Review quote: previous edition',
		'08' => 'Review quote: previous work',
		'09' => 'Endorsement',
		'10' => 'Promotional headline',
		'11' => 'Feature',
		'12' => 'Biographical note',
		'13' => 'Publisher’s notice',
		'14' => 'Excerpt',
		'15' => 'Index',
		'16' => 'Short description/annotation for collection',
		'17' => 'Description for collection',
		'18' => 'New feature',
		'19' => 'Version history',
		'20' => 'Open access statement',
		'21' => 'Digital exclusivity statement',
		'22' => 'Official recommendation',
		'23' => 'JBPA description',
		'24' => 'schema.org snippet',
		'25' => 'Errata',
		'26' => 'Introduction',
		'27' => 'Secondary cover copy',
		'28' => 'Full cast and credit list',
		'29' => 'Bibliography',
		'30' => 'Abstract',
		'31' => 'Rules or instructions',
		'32' => 'List of contents',
		'33' => 'Short description/annotation for imprint',
		'34' => 'Description for imprint',
		'35' => 'Short description/annotation for publisher',
		'36' => 'Description for publisher',
		'37' => 'Cover line',
	];

	/**
	 * Code List 153 for es
	 *
	 * @var array
	 * @see https://ns.editeur.org/onix/es/153
	 */
	protected static $es = [
		'01' => 'Texto definido por el remitente',
		'02' => 'Descripción corta del producto / Nota sobre el producto',
		'03' => 'Descripción / Resumen del producto',
		'04' => 'Tabla de materias / Tabla de contenido',
		'05' => 'Texto principal de solapa o de contracubierta',
		'06' => 'Cita de reseña crítica',
		'07' => 'Cita de reseña de una edición anterior',
		'08' => 'Cita de reseña de una obra anterior',
		'09' => 'Recomendación',
		'10' => 'Titular o cabecera promocional',
		'11' => 'Característica particular («Feature»)',
		'12' => 'Nota biográfica',
		'13' => 'Nota de la editorial',
		'14' => 'Extracto',
		'15' => 'Índice',
		'16' => 'Descripción o anotación cortas de la colección u obra en varios volúmenes',
		'17' => 'Descripción larga de la colección u obra en varios volúmenes',
		'18' => 'Nueva característica («feature»)',
		'19' => 'Historia de versiones',
		'20' => 'Declaración Open access',
		'21' => 'Declaración de exclusividad digital',
		'22' => 'Recomendación oficial',
		'23' => 'Descripción de JBPA',
		'24' => 'Fragmento para schema.org',
		'25' => 'Erratas',
		'26' => 'Introducción',
		'27' => 'Texto de solapa o de contracubierta secundario',
		'28' => 'Elenco y créditos completos',
		'29' => 'Bibliografía',
		'30' => 'Abstract / Resumen',
		'31' => 'Reglas o instrucciones',
		'32' => 'Lista de contenidos',
		'33' => 'Breve descripción/anotación del sello',
		'34' => 'Descripción del sello',
		'35' => 'Breve descripción/anotación de la editorial',
		'36' => 'Descripción de la editorial',
		'37' => 'Línea de cubierta',
	];

	/**
	 * Code List 153 for de
	 *
	 * @var array
	 * @see https://ns.editeur.org/onix/de/153
	 */
	protected static $de = [
		'01' => 'Sender-defined text',
		'02' => 'Short description/annotation',
		'03' => 'Description',
		'04' => 'Table of contents',
		'05' => 'Primary cover copy',
		'06' => 'Review quote',
		'07' => 'Review quote: previous edition',
		'08' => 'Review quote: previous work',
		'09' => 'Endorsement',
		'10' => 'Promotional headline',
		'11' => 'Feature',
		'12' => 'Biographical note',
		'13' => 'Publisher’s notice',
		'14' => 'Excerpt',
		'15' => 'Index',
		'16' => 'Short description/annotation for collection',
		'17' => 'Description for collection',
		'18' => 'New feature',
		'19' => 'Version history',
		'20' => 'Open access statement',
		'21' => 'Digital exclusivity statement',
		'22' => 'Official recommendation',
		'23' => 'JBPA description',
		'24' => 'schema.org snippet',
		'25' => 'Errata',
		'26' => 'Introduction',
		'27' => 'Secondary cover copy',
		'28' => 'Full cast and credit list',
		'29' => 'Bibliography',
		'30' => 'Abstract',
		'31' => 'Rules or instructions',
		'32' => 'List of contents',
		'33' => 'Short description/annotation for imprint',
		'34' => 'Description for imprint',
		'35' => 'Short description/annotation for publisher',
		'36' => 'Description for publisher',
		'37' => 'Cover line',
	];

	/**
	 * Code List 153 for fr
	 *
	 * @var array
	 * @see https://ns.editeur.org/onix/fr/153
	 */
	protected static $fr = [
		'01' => 'Texte défini par l’expéditeur',
		'02' => 'Brève description / annotation',
		'03' => 'Description',
		'04' => 'Table des matières',
		'05' => 'Texte principal de rabat / couverture',
		'06' => 'Citation critique',
		'07' => 'Citation critique d’une précédente édition',
		'08' => 'Citation critique précédente',
		'09' => 'Eloge',
		'10' => '« Chapeau » promotionnel',
		'11' => 'Caractéristique',
		'12' => 'Notice biographique',
		'13' => 'Notice de l’éditeur',
		'14' => 'Extrait',
		'15' => 'Index',
		'16' => 'Brève description d’une collection ou d’une série',
		'17' => 'Description d’une collection ou d’une série',
		'18' => 'Nouvelle caractéristique',
		'19' => 'Version',
		'20' => 'Déclaration d’accès libre',
		'21' => 'Déclaration d’exclusivité numérique',
		'22' => 'Recommandation officielle',
		'23' => 'Description JBPA',
		'24' => 'Extrait de code Schema.org',
		'25' => 'Errata',
		'26' => 'Introduction',
		'27' => 'Texte secondaire de rabat / couverture',
		'28' => 'Distribution et générique',
		'29' => 'Bibliographie',
		'30' => 'Abstract',
		'31' => 'Règles ou instructions',
		'32' => 'Table des matières',
		'33' => 'Brève description de la marque',
		'34' => 'Description de la marque',
		'35' => 'Brève description de l’éditeur',
		'36' => 'Description de l’éditeur',
		'37' => 'Cover line',
	];

	/**
	 * Code List 153 for it
	 *
	 * @var array
	 * @see https://ns.editeur.org/onix/it/153
	 */
	protected static $it = [
		'01' => 'Testo definito dal soggetto che trasmette i dati',
		'02' => 'Descrizione sintetica del prodotto',
		'03' => 'Descrizione del prodotto',
		'04' => 'Indice dei contenuti',
		'05' => 'Testo principale del risvolto/quarta di copertina',
		'06' => 'Citazione da una recensione',
		'07' => 'Citazione da una recensione: edizione precedente',
		'08' => 'Citazione da una recensione: opera precedente',
		'09' => 'Riconoscimento',
		'10' => 'Slogan pubblicitario',
		'11' => 'Caratteristiche particolari',
		'12' => 'Nota biografica',
		'13' => 'Nota dell’editore',
		'14' => 'Estratto',
		'15' => 'Indice',
		'16' => 'Descrizione sintetica della collezione',
		'17' => 'Descrizione della collezione',
		'18' => 'Nuova caratteristica particolare',
		'19' => 'Cronologia delle versioni',
		'20' => 'Dichiarazione di accesso aperto',
		'21' => 'Dichiarazione di esclusività digitale',
		'22' => 'Segnalazione ufficiale',
		'23' => 'Descrizione JBPA',
		'24' => 'Snippet schema.org',
		'25' => 'Errata corrige',
		'26' => 'Introduzione',
		'27' => 'Testo secondario del risvolto di copertina/copertina',
		'28' => 'Cast completo e credits',
		'29' => 'Bibliografia',
		'30' => 'Abstract',
		'31' => 'Regole o istruzioni',
		'32' => 'Elenco dei pezzi contenuti',
		'33' => 'Descrizione sintetica del marchio',
		'34' => 'Descrizione del marchio',
		'35' => 'Descrizione sintetica dell’editore',
		'36' => 'Descrizione dell’editore',
		'37' => 'Testo aggiuntivo in copertina',
	];

	/**
	 * Code List 153 for nb
	 *
	 * @var array
	 * @see https://ns.editeur.org/onix/nb/153
	 */
	protected static $nb = [
		'01' => 'Senderdefinert tekst',
		'02' => 'Kort beskrivelse',
		'03' => 'Beskrivelse (forlagsomtale)',
		'04' => 'Innholdsfortegnelse',
		'05' => 'Beskrivende blurb',
		'06' => 'Sitat fra anmeldelse',
		'07' => 'Sitat fra anmeldelse av tidligere utgave',
		'08' => 'Sitat fra anmeldelse av tidligere verk',
		'09' => 'Blurb',
		'10' => 'Markedsførende overskrift',
		'11' => 'Egenskap/særpreg',
		'12' => 'Biografisk tekst',
		'13' => 'Informasjon fra forlaget',
		'14' => 'Utdrag',
		'15' => 'Register',
		'16' => 'Kort beskrivelse av samling/serie (collection)',
		'17' => 'Beskrivelse av samling/serie (collection)',
		'18' => 'Ny egenskap/nytt særpreg',
		'19' => 'Versjonshistorie',
		'20' => 'Open access statement',
		'21' => 'Digital exclusivity statement',
		'22' => 'Offisiell anbefaling',
		'23' => 'JBPA description',
		'24' => 'schema.org snippet',
		'25' => 'Errata',
		'26' => 'Introduksjon',
		'27' => 'Annen beskrivende blurb',
		'28' => 'Komplett rolle- og krediteringsliste',
		'29' => 'Bibliografi',
		'30' => 'Sammendrag',
		'31' => 'Regler eller instruksjoner',
		'32' => 'Innholdsoversikt',
		'33' => 'Kort beskrivelse / annotasjon av forlag',
		'34' => 'Beskrivelse av forlag',
		'35' => 'Kort beskrivelse / annotasjon av utgiver',
		'36' => 'Beskrivelse av utgiver',
		'37' => 'Omslagstekst',
	];

	/**
	 * Code List 153 for tr
	 *
	 * @var array
	 * @see https://ns.editeur.org/onix/tr/153
	 */
	protected static $tr = [
		'01' => 'Gönderici tanımlı metin',
		'02' => 'Kısa tanım/bilgi notu',
		'03' => 'Tanım',
		'04' => 'İçindekiler tablosu',
		'05' => 'Üst kapak / kapak yazısı',
		'06' => 'İnceleme alıntısı',
		'07' => 'İnceleme alıntısı: Önceki basım',
		'08' => 'İnceleme alıntısı: Önceki eser',
		'09' => 'Açıklama',
		'10' => 'Promosyonel başlık',
		'11' => 'Özellik',
		'12' => 'Biyografik not',
		'13' => 'Yayımcı beyanı',
		'14' => 'Pasaj',
		'15' => 'Dizin',
		'16' => 'Koleksiyon için kısa açıklama/not',
		'17' => 'Koleksiyon açıklaması',
		'18' => 'Yeni özellik',
		'19' => 'Sürüm geçmişi',
		'20' => 'Açık erişim beyanı',
		'21' => 'Dijital münhasırlık bildirimi',
		'22' => 'Resmi tavsiye',
		'23' => 'JBPA açıklaması',
		'24' => 'schema.org kod parçacığı',
		'25' => 'Errata (Doğru-yanlış listesi)',
		'26' => 'Giriş',
		'27' => 'Secondary cover copy',
		'28' => 'Full cast and credit list',
		'29' => 'Bibliography',
		'30' => 'Abstract',
		'31' => 'Rules or instructions',
		'32' => 'List of contents',
		'33' => 'Short description/annotation for imprint',
		'34' => 'Description for imprint',
		'35' => 'Short description/annotation for publisher',
		'36' => 'Description for publisher',
		'37' => 'Cover line',
	];
}
