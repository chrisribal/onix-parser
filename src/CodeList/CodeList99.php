<?php

namespace Ribal\Onix\CodeList;

/**
 * ONIX Code List 99
 *
 * Used with <ProductFormFeatureValue> <b335>
 *
 * @see https://ns.editeur.org/onix/en/99
 */
class CodeList99 extends CodeList implements CodeListInterface
{
	/**
	 * Code List 99 for en
	 *
	 * @var array
	 * @see https://ns.editeur.org/onix/en/99
	 */
	protected static $en = [
		'01' => 'Berkshire leather',
		'02' => 'Calfskin',
		'03' => 'French Morocco',
		'04' => 'Morocco',
		'05' => 'Bonded buffalo grain',
		'06' => 'Bonded calf grain',
		'07' => 'Bonded Cordova',
		'08' => 'Bonded eelskin',
		'09' => 'Bonded Ostraleg',
		'10' => 'Bonded ostrich',
		'11' => 'Bonded reptile grain',
		'12' => 'Bonded leather',
		'13' => 'Cowhide',
		'14' => 'Eelskin',
		'15' => 'Kivar',
		'16' => 'Leatherflex',
		'17' => 'Moleskin',
		'18' => 'Softhide leather',
		'19' => 'Metal',
		'20' => 'Velvet',
		'21' => 'Mother-of-pearl',
		'22' => 'Papyrus',
		'23' => 'Géltex',
		'24' => 'Guaflex',
		'25' => 'Imitation leather',
		'26' => 'Pigskin',
		'27' => 'Goatskin',
	];

	/**
	 * Code List 99 for es
	 *
	 * @var array
	 * @see https://ns.editeur.org/onix/es/99
	 */
	protected static $es = [
		'01' => 'Piel de Berkshire',
		'02' => 'Piel de becerro',
		'03' => 'Marroquí francés',
		'04' => 'Marroquí',
		'05' => 'Imitación piel – Piel de búfalo',
		'06' => 'Imitación piel – Piel de becerro',
		'07' => 'Imitación piel – Cordobán',
		'08' => 'Imitación piel – Piel de anguila',
		'09' => 'Imitación piel – Ostraleg',
		'10' => 'Imitación piel – Piel de avestruz',
		'11' => 'Imitación piel – Piel de serpiente',
		'12' => 'Imitación piel – Cuero',
		'13' => 'Piel de vaca',
		'14' => 'Piel de anguila',
		'15' => '«Kivar»',
		'16' => '«Leatherflex»',
		'17' => 'Moleskin',
		'18' => 'Cuero fino («Softhide leather»)',
		'19' => 'Metal',
		'20' => 'Terciopelo',
		'21' => 'Nácar',
		'22' => 'Papiro',
		'23' => 'Géltex',
		'24' => 'Guaflex',
		'25' => 'Imitación piel',
		'26' => 'Piel de cerdo',
		'27' => 'Piel de cabra',
	];

	/**
	 * Code List 99 for de
	 *
	 * @var array
	 * @see https://ns.editeur.org/onix/de/99
	 */
	protected static $de = [
		'01' => 'Berkshire leather',
		'02' => 'Calfskin',
		'03' => 'French Morocco',
		'04' => 'Morocco',
		'05' => 'Bonded buffalo grain',
		'06' => 'Bonded calf grain',
		'07' => 'Bonded Cordova',
		'08' => 'Bonded eelskin',
		'09' => 'Bonded Ostraleg',
		'10' => 'Bonded ostrich',
		'11' => 'Bonded reptile grain',
		'12' => 'Bonded leather',
		'13' => 'Cowhide',
		'14' => 'Eelskin',
		'15' => 'Kivar',
		'16' => 'Leatherflex',
		'17' => 'Moleskin',
		'18' => 'Softhide leather',
		'19' => 'Metal',
		'20' => 'Velvet',
		'21' => 'Mother-of-pearl',
		'22' => 'Papyrus',
		'23' => 'Géltex',
		'24' => 'Guaflex',
		'25' => 'Imitation leather',
		'26' => 'Pigskin',
		'27' => 'Goatskin',
	];

	/**
	 * Code List 99 for fr
	 *
	 * @var array
	 * @see https://ns.editeur.org/onix/fr/99
	 */
	protected static $fr = [
		'01' => 'Cuir Berkshire',
		'02' => 'Vélin',
		'03' => 'Maroquin Français',
		'04' => 'Maroquin',
		'05' => 'Croute de buffle',
		'06' => 'Croute de veau',
		'07' => 'Croute de cuir de Cordoue',
		'08' => 'Croute d’anguille',
		'09' => 'Croute d’Ostra',
		'10' => 'Croute d’autruche',
		'11' => 'Croute de reptile',
		'12' => 'Croute de cuir',
		'13' => 'Cuir de vache',
		'14' => 'Peau d’anguille',
		'15' => 'Kivar',
		'16' => 'Leatherflex',
		'17' => 'Moleskine',
		'18' => 'Cuir Softhide',
		'19' => 'Métal',
		'20' => 'Velours',
		'21' => 'Nacre',
		'22' => 'Papyrus',
		'23' => 'Géltex',
		'24' => 'Guaflex',
		'25' => 'Imitation cuir',
		'26' => 'Cuir de porc',
		'27' => 'Cuir de chèvre',
	];

	/**
	 * Code List 99 for it
	 *
	 * @var array
	 * @see https://ns.editeur.org/onix/it/99
	 */
	protected static $it = [
		'01' => 'Pelle del Berkshire',
		'02' => 'Pelle di vitello',
		'03' => 'Marocchino francese',
		'04' => 'Marocchino',
		'05' => 'Rigenerato di pelle di bufalo',
		'06' => 'Rigenerato di pelle di vitello',
		'07' => 'Rigenerato di pelle di Cordova',
		'08' => 'Rigenerato di pelle di anguilla',
		'09' => 'Rigenerato di pelle di vitello Ostraleg',
		'10' => 'Rigenerato di pelle di struzzo',
		'11' => 'Rigenerato di pelle di serpente',
		'12' => 'Rigenerato di fibre di cuoio',
		'13' => 'Pelle di mucca',
		'14' => 'Pelle di anguilla',
		'15' => 'Kivar',
		'16' => 'Leatherflex',
		'17' => 'Moleskin',
		'18' => 'Cuoio leggero',
		'19' => 'Metallo',
		'20' => 'Velluto',
		'21' => 'Madreperla',
		'22' => 'Papiro',
		'23' => 'Géltex',
		'24' => 'Guaflex',
		'25' => 'Similpelle',
		'26' => 'Pelle di maiale',
		'27' => 'Pelle di capra',
	];

	/**
	 * Code List 99 for nb
	 *
	 * @var array
	 * @see https://ns.editeur.org/onix/nb/99
	 */
	protected static $nb = [
		'01' => 'Berkshire leather',
		'02' => 'Calfskin',
		'03' => 'French Morocco',
		'04' => 'Morocco',
		'05' => 'Bonded buffalo grain',
		'06' => 'Bonded calf grain',
		'07' => 'Bonded Cordova',
		'08' => 'Bonded eelskin',
		'09' => 'Bonded Ostraleg',
		'10' => 'Bonded ostrich',
		'11' => 'Bonded reptile grain',
		'12' => 'Bonded leather',
		'13' => 'Cowhide',
		'14' => 'Eelskin',
		'15' => 'Kivar',
		'16' => 'Leatherflex',
		'17' => 'Moleskin',
		'18' => 'Softhide leather',
		'19' => 'Metal',
		'20' => 'Velvet',
		'21' => 'Mother-of-pearl',
		'22' => 'Papyrus',
		'23' => 'Géltex',
		'24' => 'Guaflex',
		'25' => 'Imitation leather',
		'26' => 'Pigskin',
		'27' => 'Goatskin',
	];

	/**
	 * Code List 99 for tr
	 *
	 * @var array
	 * @see https://ns.editeur.org/onix/tr/99
	 */
	protected static $tr = [
		'01' => 'Berkshire derisi',
		'02' => 'Dana derisi',
		'03' => 'Fransız Maroken',
		'04' => 'Maroken',
		'05' => 'Karma sırça bufalo',
		'06' => 'Karma sırça dana',
		'07' => 'Karma Cordova',
		'08' => 'Karma yılan derisi',
		'09' => 'Karma Ostraleg',
		'10' => 'Karma devekuşu',
		'11' => 'Karma sırça sürüngen',
		'12' => 'Karma deri',
		'13' => 'Sığır derisi',
		'14' => 'Yılan derisi',
		'15' => 'Kivar',
		'16' => 'Leatherflex',
		'17' => 'Köstebek derisi',
		'18' => 'Softhide deri',
		'19' => 'Metal',
		'20' => 'Kadife',
		'21' => 'Sedef',
		'22' => 'Papirüs',
		'23' => 'Géltex',
		'24' => 'Guaflex',
		'25' => 'Suni deri',
		'26' => 'Domuz derisi',
		'27' => 'Keçi derisi',
	];
}
