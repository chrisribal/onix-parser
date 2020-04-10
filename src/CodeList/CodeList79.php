<?php

namespace Ribal\Onix\CodeList;

/**
 * ONIX Code List 79
 *
 * Used with <ProductFormFeatureType> <b334>
 *
 * @see https://ns.editeur.org/onix/en/79
 */
class CodeList79 extends CodeList implements CodeListInterface
{
	/**
	 * Code List 79 for en
	 *
	 * @var array
	 * @see https://ns.editeur.org/onix/en/79
	 */
	protected static $en = [
		'01' => 'Color of cover',
		'02' => 'Color of page edge',
		'03' => 'Text font',
		'04' => 'Special cover material',
		'05' => 'DVD region',
		'06' => 'Operating system requirements',
		'07' => 'Other system requirements',
		'08' => '‘Point and listen’ device compatibility',
		'09' => 'E-publication accessibility detail',
		'10' => 'E-publication format version',
		'12' => 'CPSIA or other US hazard warning',
		'13' => 'EU Toy Safety Hazard warning',
		'14' => 'IATA Dangerous Goods warning',
		'15' => 'E-publication format version code',
		'16' => 'E-publication format validator version',
		'17' => '‘Point and watch’ device/app compatibility',
		'18' => 'E-publication authentication and access control',
		'19' => 'Battery type',
		'20' => 'Battery capacity',
		'21' => 'Dangerous goods',
		'22' => 'Game pieces',
		'23' => 'Game players',
		'24' => 'Game play time',
		'30' => 'Not FSC or PEFC certified',
		'31' => 'FSC certified – pure',
		'32' => 'FSC certified – mixed sources',
		'33' => 'FSC certified – recycled',
		'34' => 'PEFC certified',
		'35' => 'PEFC recycled',
		'36' => 'FSC or PEFC certified Pre- and Post-Consumer Waste (PCW) percentage',
		'37' => 'Claimed Pre- and Post-Consumer Waste (PCW) percentage',
		'40' => 'Paper produced by ‘green’ technology',
	];

	/**
	 * Code List 79 for es
	 *
	 * @var array
	 * @see https://ns.editeur.org/onix/es/79
	 */
	protected static $es = [
		'01' => 'Color de cubierta',
		'02' => 'Color de los cantos',
		'03' => 'Fuente del texto',
		'04' => 'Material especial de la cubierta',
		'05' => 'Región DVD',
		'06' => 'Requerimientos del sistema operativo',
		'07' => 'Otros requisitos del sistema',
		'08' => 'Compatibilidad con dispositivos o aplicaciones «Point and listen» («Apuntar y escuchar»)',
		'09' => 'Detalle de accesibilidad para publicación digital',
		'10' => 'Versión del formato para una publicación digital',
		'12' => 'Aviso de riesgo (CPSIA u otros avisos en EE. UU.)',
		'13' => 'Aviso de riesgo de seguridad de juguetes (UE)',
		'14' => 'Aviso de Mercancía Peligrosa para la IATA',
		'15' => 'Código de versión de formato para publicación digital',
		'16' => 'Versión del validador de formato de publicación digital',
		'17' => 'Compatibilidad con dispositivos o aplicaciones «Point and watch («Apuntar y mirar»)',
		'18' => 'Control de autenticación y acceso para publicación digital',
		'19' => 'Tipo de batería',
		'20' => 'Capacidad de la batería',
		'21' => 'Mercancía peligrosa',
		'22' => 'Piezas de un juego',
		'23' => 'Jugadores de un juego',
		'24' => 'Tiempo de juego',
		'30' => 'Sin certificación FSC o PEFC',
		'31' => 'Certificado FSC – puro',
		'32' => 'Certificado FSC – fuentes mixtas',
		'33' => 'Certificado FSC – reciclado',
		'34' => 'Certificado PEFC',
		'35' => 'Reciclado PEFC',
		'36' => 'Porcentaje de PCW («Post Consumer Waste») certificado por FSC o PEFC',
		'37' => 'Porcentaje declarado de PCW («Post Consumer Waste»)',
		'40' => 'Papel elaborado con tecnologías «verdes»',
	];

	/**
	 * Code List 79 for de
	 *
	 * @var array
	 * @see https://ns.editeur.org/onix/de/79
	 */
	protected static $de = [
		'01' => 'Color of cover',
		'02' => 'Color of page edge',
		'03' => 'Text font',
		'04' => 'Special cover material',
		'05' => 'DVD region',
		'06' => 'Operating system requirements',
		'07' => 'Other system requirements',
		'08' => '‘Point and listen’ device compatibility',
		'09' => 'E-publication accessibility detail',
		'10' => 'E-publication format version',
		'12' => 'CPSIA or other US hazard warning',
		'13' => 'EU Toy Safety Hazard warning',
		'14' => 'IATA Dangerous Goods warning',
		'15' => 'E-publication format version code',
		'16' => 'E-publication format validator version',
		'17' => '‘Point and watch’ device/app compatibility',
		'18' => 'E-publication authentication and access control',
		'19' => 'Battery type',
		'20' => 'Battery capacity',
		'21' => 'Dangerous goods',
		'22' => 'Game pieces',
		'23' => 'Game players',
		'24' => 'Game play time',
		'30' => 'Not FSC or PEFC certified',
		'31' => 'FSC certified – pure',
		'32' => 'FSC certified – mixed sources',
		'33' => 'FSC certified – recycled',
		'34' => 'PEFC certified',
		'35' => 'PEFC recycled',
		'36' => 'FSC or PEFC certified Pre- and Post-Consumer Waste (PCW) percentage',
		'37' => 'Claimed Pre- and Post-Consumer Waste (PCW) percentage',
		'40' => 'Paper produced by ‘green’ technology',
	];

	/**
	 * Code List 79 for fr
	 *
	 * @var array
	 * @see https://ns.editeur.org/onix/fr/79
	 */
	protected static $fr = [
		'01' => 'Couleur de couverture',
		'02' => 'Couleur de tranche',
		'03' => 'Police de caractères',
		'04' => 'Matériau spécial de couverture',
		'05' => 'Région DVD',
		'06' => 'Configuration requise du système d’exploitation',
		'07' => 'Autre configuration système requise',
		'08' => 'Compatibilité avec le dispositif « Point and listen »',
		'09' => 'Détail d’accessibilité de publication numérique',
		'10' => 'Version du format de publication numérique',
		'12' => 'Avertissement CPSIA ou autre avertissement sur les risques (Etats-Unis)',
		'13' => 'Avertissement sur les risques liés à la sécurité des jouets (UE)',
		'14' => 'Avertissement sur les articles dangereux (IATA)',
		'15' => 'Code de version du format de publication numérique',
		'16' => 'Version du validateur du format de publication numérique',
		'17' => 'Compatibilité avec le dispositif/app « Point and watch »',
		'18' => 'Authentification et contrôle d’accès à la publication numérique',
		'19' => 'Type de batterie',
		'20' => 'Capacité de la batterie',
		'21' => 'Articles dangereux',
		'22' => 'Game pieces',
		'23' => 'Game players',
		'24' => 'Game play time',
		'30' => 'Non certifié FSC ou PEFC',
		'31' => 'Certification FSC Pur',
		'32' => 'Certifié FSC – sources mixtes',
		'33' => 'Certification FSC – Recyclé',
		'34' => 'Certifié PEFC',
		'35' => 'Recyclé PEFC',
		'36' => 'Certifié FSC ou PEFC – Pourcentage PCW (Post-Consumer-Waste)',
		'37' => 'Pourcentage PCW (Pre-Consumer Waste et Post-Consumer Waste) déclaré',
		'40' => 'Papier produit selon les technologies « vertes »',
	];

	/**
	 * Code List 79 for it
	 *
	 * @var array
	 * @see https://ns.editeur.org/onix/it/79
	 */
	protected static $it = [
		'01' => 'Colore della copertina',
		'02' => 'Colore del bordo pagina',
		'03' => 'Carattere del testo',
		'04' => 'Copertina in materiale speciale',
		'05' => 'Regione DVD',
		'06' => 'Requisiti del sistema operativo',
		'07' => 'Altri requisiti di sistema',
		'08' => 'Compatibilità con dispositivo di applicazione «point and listen»',
		'09' => 'Accessibilità della pubblicazione elettronica',
		'10' => 'Versione del formato della pubblicazione elettronica',
		'12' => 'CPSIA o altre avvertenze sulla pericolosità negli Stati Uniti',
		'13' => 'Avvertenza sulla sicurezza dei giocattoli (Europa)',
		'14' => 'IATA Dangerous Goods warning',
		'15' => 'Codice della versione del formato della pubblicazione elettronica',
		'16' => 'Versione del validatore del formato della pubblicazione elettronica',
		'17' => 'Compatibilità con dispositivo o applicazione «point and watch»',
		'18' => 'Autenticazione e controllo dell’accesso alla pubblicazione elettronica',
		'19' => 'Tipo di batteria',
		'20' => 'Capacità della batteria',
		'21' => 'Merci pericolose',
		'22' => 'Pezzi del gioco',
		'23' => 'Giocatori',
		'24' => 'Durata del gioco',
		'30' => 'Senza etichetta FSC o PEFC',
		'31' => 'Etichetta FSC – puro',
		'32' => 'Etichetta FSC – misto',
		'33' => 'Etichetta FSC – riciclato',
		'34' => 'Etichetta PEFC',
		'35' => 'Etichetta PEFC riciclato',
		'36' => 'Percentuale di scarti pre e post consumo (PCW) su etichette FSC o PEFC',
		'37' => 'Percentuale di scarti pre e post consumo (PCW) dichiarata',
		'40' => 'Carta prodotta con tecnologia verde',
	];

	/**
	 * Code List 79 for nb
	 *
	 * @var array
	 * @see https://ns.editeur.org/onix/nb/79
	 */
	protected static $nb = [
		'01' => 'Innbindingsfarge',
		'02' => 'Papirkantfarge',
		'03' => 'Typesnitt',
		'04' => 'Spesielt innbindingsmateriale',
		'05' => 'DVD-regioner',
		'06' => 'Krav til operativsystem',
		'07' => 'Andre systemkrav',
		'08' => 'Kompabilitet til ‘Pek og hør’-enheter',
		'09' => 'E-publikasjoner, tilgjengelighetsdetaljer',
		'10' => 'E-publikasjoner, formatversjon',
		'12' => 'CPSIA or other US hazard warning',
		'13' => 'EU Toy Safety Hazard warning',
		'14' => 'IATA Dangerous Goods warning',
		'15' => 'E-publikasjoner, kode for formatversjon',
		'16' => 'E-publikasjoner, versjon for formatvalidator',
		'17' => 'Kompatibilitet til ‘Pek og se’-enheter/apper',
		'18' => 'Autentiserings- og tilgangskontroll for epublikasjoner',
		'19' => 'Batteritype',
		'20' => 'Batterikapasitet',
		'21' => 'Farlig gods',
		'22' => 'Spillbrikker',
		'23' => 'Spilldeltakere',
		'24' => 'Spilletid',
		'30' => 'Ikke FSC- eller PEFC-sertifisert',
		'31' => 'FSC certified – pure',
		'32' => 'FSC certified – mixed sources',
		'33' => 'FSC certified – recycled',
		'34' => 'PEFC certified',
		'35' => 'PEFC recycled',
		'36' => 'FSC or PEFC certified Pre- and Post-Consumer Waste (PCW) percentage',
		'37' => 'Claimed Pre- and Post-Consumer Waste (PCW) percentage',
		'40' => 'Papir produsert ved bruk av ‘grønn’ teknologi',
	];

	/**
	 * Code List 79 for tr
	 *
	 * @var array
	 * @see https://ns.editeur.org/onix/tr/79
	 */
	protected static $tr = [
		'01' => 'Kapak rengi',
		'02' => 'Sayfa kenarı rengi',
		'03' => 'Metin yazı karakteri',
		'04' => 'Özel kapak malzemesi',
		'05' => 'DVD bölgesi',
		'06' => 'İşletim sistemi gereksinimleri',
		'07' => 'Diğer sistem gereksinimleri',
		'08' => '‘Seç-dinle’ aygıt/program uyumluluğu',
		'09' => 'E-yayın erişim bilgileri',
		'10' => 'E-yayın format sürümü',
		'12' => 'CPSIA boğulma tehlikesi uyarısı',
		'13' => 'AB Oyuncak Güvenliği Tehlike Uyarısı',
		'14' => 'IATA Tehlikeli Maddeler uyarısı',
		'15' => 'E-yayın format sürümü kodu',
		'16' => 'E-publication format validator version',
		'17' => '‘Seç-izle’ aygıt/program uyumluluğu',
		'18' => 'E-publication authentication and access control',
		'19' => 'Battery type',
		'20' => 'Battery capacity',
		'21' => 'Dangerous goods',
		'22' => 'Game pieces',
		'23' => 'Game players',
		'24' => 'Game play time',
		'30' => 'FSC ya da PEFC onaylı değil',
		'31' => 'FSC onaylı – saf',
		'32' => 'FSC onaylı – karışık kaynak',
		'33' => 'FSC onaylı – geri kazanılmış',
		'34' => 'PEFC onaylı',
		'35' => 'PEFC geri kazanılmış',
		'36' => 'FSC ya da PEFC onaylı Geri Dönüşüm ve Tüketici Atıkları (PCW) yüzdesi',
		'37' => 'Beyan edilen Geri Dönüşüm ve Tüketici Atıkları (PCW) yüzdesi',
		'40' => '‘Yeşil’ teknoloji ile üretilmiş kağıt',
	];
}
