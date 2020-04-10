<?php

namespace Ribal\Onix\CodeList;

/**
 * ONIX Code List 80
 *
 * Used with <ProductPackaging> <b225>
 *
 * @see https://ns.editeur.org/onix/en/80
 */
class CodeList80 extends CodeList implements CodeListInterface
{
	/**
	 * Code List 80 for en
	 *
	 * @var array
	 * @see https://ns.editeur.org/onix/en/80
	 */
	protected static $en = [
		'00' => 'No outer packaging',
		'01' => 'Slip-sleeve',
		'02' => 'Clamshell',
		'03' => 'Keep case',
		'05' => 'Jewel case',
		'06' => 'Digipak',
		'09' => 'In box',
		'10' => 'Slip-cased',
		'11' => 'Slip-cased set',
		'12' => 'Tube',
		'13' => 'Binder',
		'14' => 'In wallet or folder',
		'15' => 'Long triangular package',
		'16' => 'Long square package',
		'17' => 'Softbox (for DVD)',
		'18' => 'Pouch',
		'19' => 'Rigid plastic case',
		'20' => 'Cardboard case',
		'21' => 'Shrink-wrapped',
		'22' => 'Blister pack',
		'23' => 'Carry case',
		'24' => 'In tin',
	];

	/**
	 * Code List 80 for es
	 *
	 * @var array
	 * @see https://ns.editeur.org/onix/es/80
	 */
	protected static $es = [
		'00' => 'Sin embalaje exterior',
		'01' => 'Funda deslizante',
		'02' => '«Clamshell»',
		'03' => '«Keep-case»',
		'05' => 'Caja transparente de CD',
		'06' => 'Digipack',
		'09' => 'Caja cerrada',
		'10' => 'Estuche deslizante / Caja abierta',
		'11' => 'Estuche deslizante / Caja abierta para varios volúmenes',
		'12' => 'Tubo',
		'13' => 'Archivador / Clasificador',
		'14' => 'Carpeta / Cartera',
		'15' => 'Embalaje alargado de sección triangular',
		'16' => 'Embalaje alargado de sección cuadrada',
		'17' => 'Caja blanda (para DVD)',
		'18' => 'Bolsa',
		'19' => 'Estuche de plástico rígido',
		'20' => 'Estuche de cartón',
		'21' => 'Retractilado',
		'22' => 'Paquete «blíster»',
		'23' => 'Estuche de transporte / Cartera',
		'24' => 'En lata o caja metálica',
	];

	/**
	 * Code List 80 for de
	 *
	 * @var array
	 * @see https://ns.editeur.org/onix/de/80
	 */
	protected static $de = [
		'00' => 'No outer packaging',
		'01' => 'Slip-sleeve',
		'02' => 'Clamshell',
		'03' => 'Keep case',
		'05' => 'Jewel case',
		'06' => 'Digipak',
		'09' => 'In box',
		'10' => 'Slip-cased',
		'11' => 'Slip-cased set',
		'12' => 'Tube',
		'13' => 'Binder',
		'14' => 'In wallet or folder',
		'15' => 'Long triangular package',
		'16' => 'Long square package',
		'17' => 'Softbox (for DVD)',
		'18' => 'Pouch',
		'19' => 'Rigid plastic case',
		'20' => 'Cardboard case',
		'21' => 'Shrink-wrapped',
		'22' => 'Blister pack',
		'23' => 'Carry case',
		'24' => 'In tin',
	];

	/**
	 * Code List 80 for fr
	 *
	 * @var array
	 * @see https://ns.editeur.org/onix/fr/80
	 */
	protected static $fr = [
		'00' => 'Sans packaging externe',
		'01' => 'Etui de protection',
		'02' => 'Coquille plastique',
		'03' => 'Boîtier DVD',
		'05' => 'Boîtier cristal',
		'06' => 'Digipak',
		'09' => 'Sous emboîtage',
		'10' => 'Sous étui',
		'11' => 'Ensemble sous étui',
		'12' => 'Tube',
		'13' => 'Classeur',
		'14' => 'Portfolio ou dossier',
		'15' => 'Packaging triangulaire long',
		'16' => 'Packaging long carré',
		'17' => 'Boîtier souple (pour DVD)',
		'18' => 'Pochette',
		'19' => 'Boîtier en plastique rigide',
		'20' => 'Boîtier en carton',
		'21' => 'Emballé sous film plastique',
		'22' => 'Coque plastique',
		'23' => 'Valisette',
		'24' => 'En boîte',
	];

	/**
	 * Code List 80 for it
	 *
	 * @var array
	 * @see https://ns.editeur.org/onix/it/80
	 */
	protected static $it = [
		'00' => 'Senza confezione',
		'01' => 'Bustina',
		'02' => 'Confezione a conchiglia',
		'03' => 'Keep-case',
		'05' => 'Scatola trasparente',
		'06' => 'Digipak',
		'09' => 'Scatola chiusa',
		'10' => 'Cofanetto',
		'11' => 'Cofanetto per opere in più volumi',
		'12' => 'Tubo',
		'13' => 'Raccoglitore',
		'14' => 'Cartellina',
		'15' => 'Tubo a sezione triangolare',
		'16' => 'Tubo a sezione quadrata',
		'17' => 'Confezione morbida (per DVD)',
		'18' => 'Busta',
		'19' => 'Scatola in plastica rigida',
		'20' => 'Scatola in cartone',
		'21' => 'Pacco incellofanato',
		'22' => 'Confezione blister',
		'23' => 'Confezione con maniglia',
		'24' => 'In latta',
	];

	/**
	 * Code List 80 for nb
	 *
	 * @var array
	 * @see https://ns.editeur.org/onix/nb/80
	 */
	protected static $nb = [
		'00' => 'No outer packaging',
		'01' => 'Slip-sleeve',
		'02' => 'Clamshell',
		'03' => 'Keep case',
		'05' => 'Jewel case',
		'06' => 'Digipak',
		'09' => 'In box',
		'10' => 'Slip-cased',
		'11' => 'Slip-cased set',
		'12' => 'Tube',
		'13' => 'Binder',
		'14' => 'In wallet or folder',
		'15' => 'Long triangular package',
		'16' => 'Long square package',
		'17' => 'Softbox (for DVD)',
		'18' => 'Pouch',
		'19' => 'Rigid plastic case',
		'20' => 'Cardboard case',
		'21' => 'Shrink-wrapped',
		'22' => 'Blister pack',
		'23' => 'Carry case',
		'24' => 'In tin',
	];

	/**
	 * Code List 80 for tr
	 *
	 * @var array
	 * @see https://ns.editeur.org/onix/tr/80
	 */
	protected static $tr = [
		'00' => 'Dış ambalajsız',
		'01' => 'Slip kılıf',
		'02' => 'Kapaklı blister',
		'03' => 'DVD kutusu',
		'05' => 'CD kutusu',
		'06' => 'Digipak',
		'09' => 'Kutulu',
		'10' => 'Kılıf kutulu',
		'11' => 'Kılıf kutulu takım',
		'12' => 'Tüp',
		'13' => 'Dosya',
		'14' => 'Portföy ya da klasör içinde',
		'15' => 'Üçgen prizma ambalaj',
		'16' => 'Kare prizma ambalaj',
		'17' => 'DVD kutusu',
		'18' => 'Torba',
		'19' => 'Sert plastik kutu',
		'20' => 'Mukavva kutu',
		'21' => 'Streç film',
		'22' => 'Blister ambalaj',
		'23' => 'Taşıma kutusu',
		'24' => 'Teneke kutuda',
	];
}
