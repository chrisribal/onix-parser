<?php

namespace Ribal\Onix\CodeList;

/**
 * ONIX Code List 147
 *
 * Used with    • <EpubUsageUnit> <x321>    • <PriceConstraintUnit> <x531>
 *
 * @see https://ns.editeur.org/onix/en/147
 */
class CodeList147 extends CodeList implements CodeListInterface
{
	/**
	 * Code List 147 for en
	 *
	 * @var array
	 * @see https://ns.editeur.org/onix/en/147
	 */
	protected static $en = [
		'01' => 'Copies',
		'02' => 'Characters',
		'03' => 'Words',
		'04' => 'Pages',
		'05' => 'Percentage',
		'06' => 'Devices',
		'07' => 'Concurrent users',
		'15' => 'Users',
		'19' => 'Concurrent classes',
		'20' => 'Classes',
		'08' => 'Percentage per time period',
		'09' => 'Days',
		'13' => 'Weeks',
		'14' => 'Months',
		'16' => 'Hours minutes and seconds',
		'27' => 'Days (fixed start)',
		'28' => 'Weeks (fixed start)',
		'29' => 'Months (fixed start)',
		'10' => 'Times',
		'22' => 'Times per day',
		'23' => 'Times per month',
		'24' => 'Times per year',
		'21' => 'Dots per inch',
		'26' => 'Dots per cm',
		'11' => 'Allowed usage start page',
		'12' => 'Allowed usage end page',
		'17' => 'Allowed usage start time',
		'18' => 'Allowed usage end time',
		'98' => 'Valid from',
		'99' => 'Valid to',
	];

	/**
	 * Code List 147 for es
	 *
	 * @var array
	 * @see https://ns.editeur.org/onix/es/147
	 */
	protected static $es = [
		'01' => 'Copias / Ejemplares',
		'02' => 'Caracteres',
		'03' => 'Palabras',
		'04' => 'Páginas',
		'05' => 'Porcentaje',
		'06' => 'Dispositivos',
		'07' => 'Usuarios concurrentes',
		'15' => 'Usuarios',
		'19' => 'Clases concurrentes, o simultáneas',
		'20' => 'Clases',
		'08' => 'Porcentaje por periodo de tiempo',
		'09' => 'Días',
		'13' => 'Semanas',
		'14' => 'Meses',
		'16' => 'Horas, minutos y segundos',
		'27' => 'Días (comienzo fijo)',
		'28' => 'Semanas (comienzo fijo)',
		'29' => 'Meses (comienzo fijo)',
		'10' => 'Veces / Repeticiones',
		'22' => 'Veces por día',
		'23' => 'Veces por mes',
		'24' => 'Veces por año',
		'21' => 'PPP máximo en impresión',
		'26' => 'Puntos por centímetro',
		'11' => 'Página inicial de uso permitido',
		'12' => 'Página final de uso permitido',
		'17' => 'Momento inicial de uso permitido',
		'18' => 'Momento final de uso permitido',
		'98' => 'Aplicable desde',
		'99' => 'Aplicable hasta',
	];

	/**
	 * Code List 147 for de
	 *
	 * @var array
	 * @see https://ns.editeur.org/onix/de/147
	 */
	protected static $de = [
		'01' => 'Copies',
		'02' => 'Characters',
		'03' => 'Words',
		'04' => 'Pages',
		'05' => 'Percentage',
		'06' => 'Devices',
		'07' => 'Concurrent users',
		'15' => 'Users',
		'19' => 'Concurrent classes',
		'20' => 'Classes',
		'08' => 'Percentage per time period',
		'09' => 'Days',
		'13' => 'Weeks',
		'14' => 'Months',
		'16' => 'Hours minutes and seconds',
		'27' => 'Days (fixed start)',
		'28' => 'Weeks (fixed start)',
		'29' => 'Months (fixed start)',
		'10' => 'Times',
		'22' => 'Times per day',
		'23' => 'Times per month',
		'24' => 'Times per year',
		'21' => 'Dots per inch',
		'26' => 'Dots per cm',
		'11' => 'Allowed usage start page',
		'12' => 'Allowed usage end page',
		'17' => 'Allowed usage start time',
		'18' => 'Allowed usage end time',
		'98' => 'Valid from',
		'99' => 'Valid to',
	];

	/**
	 * Code List 147 for fr
	 *
	 * @var array
	 * @see https://ns.editeur.org/onix/fr/147
	 */
	protected static $fr = [
		'01' => 'Copies',
		'02' => 'Caractères',
		'03' => 'Mots',
		'04' => 'Pages',
		'05' => 'Pourcentage',
		'06' => 'Périphériques',
		'07' => 'Utilisateurs simultanés',
		'15' => 'Utilisateur',
		'19' => 'Classes simultanées',
		'20' => 'Classes',
		'08' => 'Pourcentage par période',
		'09' => 'Jours',
		'13' => 'Semaines',
		'14' => 'Mois',
		'16' => 'Heures, minutes et secondes',
		'27' => 'Jours (début fixe)',
		'28' => 'Semaines (début fixe)',
		'29' => 'Mois (début fixe)',
		'10' => 'Fois',
		'22' => 'Fois par jour',
		'23' => 'Fois par mois',
		'24' => 'Fois par an',
		'21' => 'Points par pouce',
		'26' => 'Points par cm',
		'11' => 'Page de début de l’utilisation autorisée',
		'12' => 'Page de fin de l’utilisation autorisée',
		'17' => 'Heure de début de l’utilisation autorisée',
		'18' => 'Heure de fin de l’utilisation autorisée',
		'98' => 'Valide à partir de',
		'99' => 'Valide jusqu’à',
	];

	/**
	 * Code List 147 for it
	 *
	 * @var array
	 * @see https://ns.editeur.org/onix/it/147
	 */
	protected static $it = [
		'01' => 'Copie',
		'02' => 'Caratteri',
		'03' => 'Parole',
		'04' => 'Pagine',
		'05' => 'Percentuale',
		'06' => 'Dispositivi',
		'07' => 'Utenti contemporanei',
		'15' => 'Utenti',
		'19' => 'Classi contemporanee',
		'20' => 'Classi',
		'08' => 'Percentuale per periodo di tempo',
		'09' => 'Giorni',
		'13' => 'Settimane',
		'14' => 'Mesi',
		'16' => 'Ore, minuti e secondi',
		'27' => 'Giorni (inizio fissato)',
		'28' => 'Settimane (inizio fissato)',
		'29' => 'Mesi (inizio fissato)',
		'10' => 'Volte',
		'22' => 'Volte al giorno',
		'23' => 'Volte al mese',
		'24' => 'Volte all’anno',
		'21' => 'Punti per pollice',
		'26' => 'Punti per centimetro',
		'11' => 'Pagina di inizio parte autorizzata',
		'12' => 'Pagina di fine parte autorizzata',
		'17' => 'Ora di inizio dell’utilizzo consentito',
		'18' => 'Ora di fine dell’utilizzo consentito',
		'98' => 'Valido da',
		'99' => 'Valido fino a',
	];

	/**
	 * Code List 147 for nb
	 *
	 * @var array
	 * @see https://ns.editeur.org/onix/nb/147
	 */
	protected static $nb = [
		'01' => 'Kopier',
		'02' => 'Tegn',
		'03' => 'Ord',
		'04' => 'Sider',
		'05' => 'Prosent',
		'06' => 'Enheter',
		'07' => 'Samtidige brukere',
		'15' => 'Brukere',
		'19' => 'Samtidige skoleklasser',
		'20' => 'Skoleklasser',
		'08' => 'Prosentandel av tidsperiode',
		'09' => 'Dager',
		'13' => 'Uker',
		'14' => 'Måneder',
		'16' => 'Timer, minutter og sekunder',
		'27' => 'Dager (fast start)',
		'28' => 'Uker (fast start)',
		'29' => 'Måneder (fast start)',
		'10' => 'Ganger',
		'22' => 'Ganger pr. dag',
		'23' => 'Ganger pr. måned',
		'24' => 'Ganger pr. år',
		'21' => 'Punkt pr. tomme',
		'26' => 'Punkt pr. cm',
		'11' => 'Startside for tillatt bruk',
		'12' => 'Sluttside for tillatt bruk',
		'17' => 'Starttid for tillatt bruk',
		'18' => 'Sluttid for tillatt bruk',
		'98' => 'Gyldig fra',
		'99' => 'Gyldig til',
	];

	/**
	 * Code List 147 for tr
	 *
	 * @var array
	 * @see https://ns.editeur.org/onix/tr/147
	 */
	protected static $tr = [
		'01' => 'Kopya',
		'02' => 'Karakter',
		'03' => 'Kelime',
		'04' => 'Sayfa',
		'05' => 'Yüzde',
		'06' => 'Aygıtlar',
		'07' => 'Eşzamanlı kullanıcı',
		'15' => 'Kullanıcı sayısı',
		'19' => 'Concurrent classes',
		'20' => 'Classes',
		'08' => 'Zaman süresine göre yüzde',
		'09' => 'Gün',
		'13' => 'Hafta',
		'14' => 'Ay',
		'16' => 'Hours minutes and seconds',
		'27' => 'Gün (sabit başlangıç)',
		'28' => 'Hafta (sabit başlangıç)',
		'29' => 'Ay (sabit başlangıç)',
		'10' => 'Defa',
		'22' => 'Günde kez',
		'23' => 'Ayda',
		'24' => 'Yılda kez',
		'21' => 'İnç başına nokta',
		'26' => 'Cm başına nokta sayısı',
		'11' => 'İzinli kullanım başlangıç sayfası',
		'12' => 'İzinli kullanım bitiş sayfası',
		'17' => 'Allowed usage start time',
		'18' => 'Allowed usage end time',
		'98' => 'Valid from',
		'99' => 'Valid to',
	];
}
