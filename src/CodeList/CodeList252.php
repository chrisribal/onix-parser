<?php

namespace Ribal\Onix\CodeList;

/**
 * ONIX Code List 252
 *
 * Used with <ResourceFileDetail> <x567>
 *
 * @see https://ns.editeur.org/onix/en/252
 */
class CodeList252 extends CodeList implements CodeListInterface
{
	/**
	 * Code List 252 for en
	 *
	 * @var array
	 * @see https://ns.editeur.org/onix/en/252
	 */
	protected static $en = [
		'A410' => 'Mono',
		'A411' => '22.05kHz',
		'A412' => '44.1kHz',
		'A413' => '48kHz',
		'A414' => '88.2kHz',
		'A415' => '96kHz',
		'A416' => '16-bits per sample',
		'A417' => '20-bits per sample',
		'A418' => '24-bits per sample',
		'A419' => '32-bits per sample (FP)',
		'A420' => 'Stereo',
		'A421' => 'Stereo 2.1',
		'A422' => 'ID3v1',
		'A423' => 'ID3v2',
		'A441' => 'Surround 4.1',
		'A451' => 'Surround 5.1',
		'B001' => 'With crop marks',
		'B002' => 'Without crop marks',
		'B003' => 'Monochrome',
		'B004' => 'Preseparated – 2 channels',
		'B005' => 'Preseparated – 3 channels',
		'B006' => 'Preseparated – 4 channels',
		'B010' => 'Composite (CMYK)',
		'B011' => 'Composite (RGB)',
	];

	/**
	 * Code List 252 for es
	 *
	 * @var array
	 * @see https://ns.editeur.org/onix/es/252
	 */
	protected static $es = [
		'A410' => 'Mono',
		'A411' => '22,05 kHz',
		'A412' => '44,1 kHz',
		'A413' => '48kHz',
		'A414' => '88,2 kHz',
		'A415' => '96kHz',
		'A416' => '16 bits por muestra',
		'A417' => '20 bits por muestra',
		'A418' => '24 bits por muestra',
		'A419' => '32 bits por muestra (FP)',
		'A420' => 'Estéreo',
		'A421' => 'Estéreo 2.1',
		'A422' => 'ID3v1',
		'A423' => 'ID3v2',
		'A441' => 'Surround 4.1',
		'A451' => 'Surround 5.1',
		'B001' => 'Con marcas de corte',
		'B002' => 'Sin marcas de corte',
		'B003' => 'Monocromo',
		'B004' => 'Preseparado - 2 canales',
		'B005' => 'Preseparado - 3 canales',
		'B006' => 'Preseparado - 4 canales',
		'B010' => 'Compuesto (CMYK)',
		'B011' => 'Compuesto (RGB)',
	];

	/**
	 * Code List 252 for de
	 *
	 * @var array
	 * @see https://ns.editeur.org/onix/de/252
	 */
	protected static $de = [
		'A410' => 'Mono',
		'A411' => '22.05kHz',
		'A412' => '44.1kHz',
		'A413' => '48kHz',
		'A414' => '88.2kHz',
		'A415' => '96kHz',
		'A416' => '16-bits per sample',
		'A417' => '20-bits per sample',
		'A418' => '24-bits per sample',
		'A419' => '32-bits per sample (FP)',
		'A420' => 'Stereo',
		'A421' => 'Stereo 2.1',
		'A422' => 'ID3v1',
		'A423' => 'ID3v2',
		'A441' => 'Surround 4.1',
		'A451' => 'Surround 5.1',
		'B001' => 'With crop marks',
		'B002' => 'Without crop marks',
		'B003' => 'Monochrome',
		'B004' => 'Preseparated – 2 channels',
		'B005' => 'Preseparated – 3 channels',
		'B006' => 'Preseparated – 4 channels',
		'B010' => 'Composite (CMYK)',
		'B011' => 'Composite (RGB)',
	];

	/**
	 * Code List 252 for fr
	 *
	 * @var array
	 * @see https://ns.editeur.org/onix/fr/252
	 */
	protected static $fr = [
		'A410' => 'Mono',
		'A411' => '22.05kHz',
		'A412' => '44.1kHz',
		'A413' => '48kHz',
		'A414' => '88.2kHz',
		'A415' => '96kHz',
		'A416' => '16-bits per sample',
		'A417' => '20-bits per sample',
		'A418' => '24-bits per sample',
		'A419' => '32-bits per sample (FP)',
		'A420' => 'Stereo',
		'A421' => 'Stereo 2.1',
		'A422' => 'ID3v1',
		'A423' => 'IDv2',
		'A441' => 'Surround 4.1',
		'A451' => 'Surround 5.1',
		'B001' => 'Avec des repères de coupe',
		'B002' => 'Sans repères de coupe',
		'B003' => 'Monochrome',
		'B004' => 'Préséparé – 2 canaux',
		'B005' => 'Préséparé – 3 canaux',
		'B006' => 'Préséparé – 4 canaux',
		'B010' => 'Mixte CMJN',
		'B011' => 'Mixte RVB',
	];

	/**
	 * Code List 252 for it
	 *
	 * @var array
	 * @see https://ns.editeur.org/onix/it/252
	 */
	protected static $it = [
		'A410' => 'Mono',
		'A411' => '22.05kHz',
		'A412' => '44.1kHz',
		'A413' => '48kHz',
		'A414' => '88.2kHz',
		'A415' => '96kHz',
		'A416' => 'Campione a 16-bit',
		'A417' => 'Campione a 20-bit',
		'A418' => 'Campione a 24-bit',
		'A419' => 'Campione a 32-bit (FP)',
		'A420' => 'Stereo',
		'A421' => 'Stereo 2.1',
		'A422' => 'ID3v1',
		'A423' => 'ID3v2',
		'A441' => 'Surround 4.1',
		'A451' => 'Surround 5.1',
		'B001' => 'Con indicatori di ritaglio',
		'B002' => 'Senza indicatori di ritaglio',
		'B003' => 'Monocromia',
		'B004' => 'Preseparato - 2 canali',
		'B005' => 'Preseparato - 3 canali',
		'B006' => 'Preseparato - 4 canali',
		'B010' => 'Composito (CMYK)',
		'B011' => 'Composito (RGB)',
	];

	/**
	 * Code List 252 for nb
	 *
	 * @var array
	 * @see https://ns.editeur.org/onix/nb/252
	 */
	protected static $nb = [
		'A410' => 'Mono',
		'A411' => '22.05kHz',
		'A412' => '44.1kHz',
		'A413' => '48kHz',
		'A414' => '88.2kHz',
		'A415' => '96kHz',
		'A416' => '16-bits per sample',
		'A417' => '20-bits per sample',
		'A418' => '24-bits per sample',
		'A419' => '32-bits per sample (FP)',
		'A420' => 'Stereo',
		'A421' => 'Stereo 2.1',
		'A422' => 'ID3v1',
		'A423' => 'ID3v2',
		'A441' => 'Surround 4.1',
		'A451' => 'Surround 5.1',
		'B001' => 'With crop marks',
		'B002' => 'Without crop marks',
		'B003' => 'Monochrome',
		'B004' => 'Preseparated – 2 channels',
		'B005' => 'Preseparated – 3 channels',
		'B006' => 'Preseparated – 4 channels',
		'B010' => 'Composite (CMYK)',
		'B011' => 'Composite (RGB)',
	];

	/**
	 * Code List 252 for tr
	 *
	 * @var array
	 * @see https://ns.editeur.org/onix/tr/252
	 */
	protected static $tr = [
		'A410' => 'Mono',
		'A411' => '22.05kHz',
		'A412' => '44.1kHz',
		'A413' => '48kHz',
		'A414' => '88.2kHz',
		'A415' => '96kHz',
		'A416' => '16-bits per sample',
		'A417' => '20-bits per sample',
		'A418' => '24-bits per sample',
		'A419' => '32-bits per sample (FP)',
		'A420' => 'Stereo',
		'A421' => 'Stereo 2.1',
		'A422' => 'ID3v1',
		'A423' => 'ID3v2',
		'A441' => 'Surround 4.1',
		'A451' => 'Surround 5.1',
		'B001' => 'With crop marks',
		'B002' => 'Without crop marks',
		'B003' => 'Monochrome',
		'B004' => 'Preseparated – 2 channels',
		'B005' => 'Preseparated – 3 channels',
		'B006' => 'Preseparated – 4 channels',
		'B010' => 'Composite (CMYK)',
		'B011' => 'Composite (RGB)',
	];
}
