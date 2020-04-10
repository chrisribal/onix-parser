<?php

namespace Ribal\Onix\CodeList;

/**
 * ONIX Code List 143
 *
 * Used with <ProductFormFeatureValue> <b335>
 *
 * @see https://ns.editeur.org/onix/en/143
 */
class CodeList143 extends CodeList implements CodeListInterface
{
	/**
	 * Code List 143 for en
	 *
	 * @var array
	 * @see https://ns.editeur.org/onix/en/143
	 */
	protected static $en = [
		'01' => 'WARNING: CHOKING HAZARD – Small parts | Not for children under 3 yrs.',
		'02' => 'WARNING: CHOKING HAZARD – Children under 8 yrs. can choke or suffocate on uninflated or broken balloons. Adult supervision required | Keep uninflated balloons from children. Discard broken balloons at once.',
		'03' => 'WARNING: CHOKING HAZARD – This toy is a small ball | Not for children under 3 yrs.',
		'04' => 'WARNING: CHOKING HAZARD – Toy contains a small ball | Not for children under 3 yrs.',
		'05' => 'WARNING: CHOKING HAZARD – This toy is a marble | Not for children under 3 yrs.',
		'06' => 'WARNING: CHOKING HAZARD – Toy contains a marble | Not for children under 3 yrs.',
		'07' => 'No choking hazard warning necessary',
		'11' => 'WARNING: MAGNET HAZARD – Product contains (a) small magnet(s)',
		'12' => 'No magnet hazard warning necessary',
		'13' => 'WARNING – Flashing hazard',
		'14' => 'No flashing hazard warning necessary',
		'21' => 'WARNING – California Proposition 65 carcinogenic, teratogenic or other reproductively harmful chemical hazard',
		'22' => 'No California Proposition 65 hazard warning necessary',
		'23' => 'California Proposition 65 chemical name',
	];

	/**
	 * Code List 143 for es
	 *
	 * @var array
	 * @see https://ns.editeur.org/onix/es/143
	 */
	protected static $es = [
		'01' => 'AVISO: PELIGRO DE ASFIXIA – Piezas pequeñas | No para menores de 3 años',
		'02' => 'AVISO: PELIGRO DE ASFIXIA – Los menores de 8 años pueden ahogarse o asfixiarse con globos deshinchados o rotos. Se requiere la supervisión de un adulto | No deje globos deshinchados al alcance de los niños. Retire inmediatamente los globos rotos',
		'03' => 'AVISO: PELIGRO DE ASFIXIA – Este juguete es una pelota o bola de pequeño tamaño | No para menores de 3 años',
		'04' => 'AVISO: PELIGRO DE ASFIXIA – Este juguete contiene una pelota o bola de pequeño tamaño | No para menores de 3 años',
		'05' => 'AVISO: PELIGRO DE ASFIXIA – Este juguete es una canica | No para menores de 3 años',
		'06' => 'AVISO: PELIGRO DE ASFIXIA – Este juguete contiene una canica | No para menores de 3 años',
		'07' => 'No es necesario un aviso de peligro de asfixia',
		'11' => 'AVISO: PELIGRO MAGNÉTICO-IMANES. El producto incluye uno o varios imanes de pequeño tamaño',
		'12' => 'No es necesario aviso de riesgo magnético',
		'13' => 'AVISO: riesgo de luces parpadeantes o intermitentes',
		'14' => 'No es necesario aviso de luces parpadeantes',
		'21' => 'AVISO: proposición 65 de California relativa a riesgos cancerígenos, teratogénicos u otros riesgos químicos relacionados con la reproducción',
		'22' => 'No es necesario aviso respecto a la proposición 65 de California',
		'23' => 'Nombre de producto químico de la Proposición 65 de California',
	];

	/**
	 * Code List 143 for de
	 *
	 * @var array
	 * @see https://ns.editeur.org/onix/de/143
	 */
	protected static $de = [
		'01' => 'WARNING: CHOKING HAZARD – Small parts | Not for children under 3 yrs.',
		'02' => 'WARNING: CHOKING HAZARD – Children under 8 yrs. can choke or suffocate on uninflated or broken balloons. Adult supervision required | Keep uninflated balloons from children. Discard broken balloons at once.',
		'03' => 'WARNING: CHOKING HAZARD – This toy is a small ball | Not for children under 3 yrs.',
		'04' => 'WARNING: CHOKING HAZARD – Toy contains a small ball | Not for children under 3 yrs.',
		'05' => 'WARNING: CHOKING HAZARD – This toy is a marble | Not for children under 3 yrs.',
		'06' => 'WARNING: CHOKING HAZARD – Toy contains a marble | Not for children under 3 yrs.',
		'07' => 'No choking hazard warning necessary',
		'11' => 'WARNING: MAGNET HAZARD – Product contains (a) small magnet(s)',
		'12' => 'No magnet hazard warning necessary',
		'13' => 'WARNING – Flashing hazard',
		'14' => 'No flashing hazard warning necessary',
		'21' => 'WARNING – California Proposition 65 carcinogenic, teratogenic or other reproductively harmful chemical hazard',
		'22' => 'No California Proposition 65 hazard warning necessary',
		'23' => 'California Proposition 65 chemical name',
	];

	/**
	 * Code List 143 for fr
	 *
	 * @var array
	 * @see https://ns.editeur.org/onix/fr/143
	 */
	protected static $fr = [
		'01' => 'AVERTISSEMENT : RISQUE D’ÉTOUFFEMENT – Petites pièces | interdit aux enfants de moins de 3 ans',
		'02' => 'AVERTISSEMENT : RISQUE D’ÉTOUFFEMENT – Les enfants de moins de 8 ans s’exposent à un risque d’étouffement ou de suffocation si le ballon se dégonfle. Présence d’un adulte obligatoire | Tenir les ballons dégonflés à l’écart des enfants. Se débarrasser aussitôt des ballons endommagés',
		'03' => 'AVERTISSEMENT : RISQUE D’ÉTOUFFEMENT – Le jouet est une petite balle | Interdit aux enfants de moins de 3 ans',
		'04' => 'AVERTISSEMENT : RISQUE D’ÉTOUFFEMENT – Le jouet contient une petite balle | Interdit aux enfants de moins de 3 ans',
		'05' => 'AVERTISSEMENT : RISQUE D’ÉTOUFFEMENT – Le jouet est une bille | Interdit aux enfants de moins de 3 ans',
		'06' => 'AVERTISSEMENT : RISQUE D’ÉTOUFFEMENT – Le jouet contient une bille | Interdit aux enfants de moins de 3 ans',
		'07' => 'Aucun avertissement nécessaire sur les risques d’étouffement',
		'11' => 'AVERTISSEMENT : RISQUE LIE A UN AIMANT – Le produit contient un (des) petit(s) aimant(s)',
		'12' => 'Aucun avertissement nécessaire pour les risques liés à un aimant',
		'13' => 'AVERTISSEMENT : risque de clignotement',
		'14' => 'Aucun avertissement nécessaire pour les risques liés à un clignotement',
		'21' => 'AVERTISSEMENT : risque cancérigène, tératogène ou de tout autre danger chimique (proposition 65 de la Californie)',
		'22' => 'Aucun avertissement nécessaire pour les risques liés à la proposition 65 de la Californie',
		'23' => 'California Proposition 65 chemical name',
	];

	/**
	 * Code List 143 for it
	 *
	 * @var array
	 * @see https://ns.editeur.org/onix/it/143
	 */
	protected static $it = [
		'01' => 'ATTENZIONE: PERICOLO SOFFOCAMENTO – Contiene parti che possono essere ingerite | Non adatto ai bambini di età inferiore ai 3 anni',
		'02' => 'ATTENZIONE: PERICOLO SOFFOCAMENTO – i bambini fino agli 8 anni rischiano di soffocare o di strozzarsi con i palloni sgonfi o rotti. Per l’uso è necessaria la supervisione di un adulto. Tenere i palloni sgonfi fuori dalla portata dei bambini. Gettare immediatamente i palloni rotti',
		'03' => 'ATTENZIONE: PERICOLO SOFFOCAMENTO – Questo giocattolo è una piccola palla che può essere ingerita | Non adatto ai bambini di età inferiore ai 3 anni',
		'04' => 'ATTENZIONE: PERICOLO SOFFOCAMENTO – Questo giocattolo contiene una piccola palla che può essere ingerita | Non adatto ai bambini di età inferiore ai 3 anni',
		'05' => 'ATTENZIONE: PERICOLO SOFFOCAMENTO – Questo giocattolo è una biglia che può essere ingerita | Non adatto ai bambini di età inferiore ai 3 anni',
		'06' => 'ATTENZIONE: PERICOLO SOFFOCAMENTO – Questo giocattolo contiene una biglia che può essere ingerita | Non adatto ai bambini di età inferiore ai 3 anni',
		'07' => 'Non richiede avvertimenti contro il pericolo di soffocamento',
		'11' => 'ATTENZIONE: PERICOLO MAGNETE – Il prodotto contiene piccolo/i magnete/i',
		'12' => 'Non richiede avvertimenti contro il pericolo da magneti',
		'13' => 'ATTENZIONE: PERICOLO LUCE LAMPEGGIANTE',
		'14' => 'Non richiede avvertimenti contro i pericoli da luce lampeggiante',
		'21' => 'ATTENZIONE - Pericolo da prodotto chimico cancerogeno, teratogeno o reprotossico in base alla California Proposition 65',
		'22' => 'Non richiede avvertimenti contro i pericoli regolati dalla California Proposition 65',
		'23' => 'Nome del prodotto chimico nella California Proposition 65',
	];

	/**
	 * Code List 143 for nb
	 *
	 * @var array
	 * @see https://ns.editeur.org/onix/nb/143
	 */
	protected static $nb = [
		'01' => 'WARNING: CHOKING HAZARD – Small parts | Not for children under 3 yrs',
		'02' => 'WARNING: CHOKING HAZARD – Children under 8 yrs. can choke or suffocate on uninflated or broken balloons. Adult supervision required | Keep uninflated balloons from children. Discard broken balloons at once',
		'03' => 'WARNING: CHOKING HAZARD – This toy is a small ball | Not for children under 3 yrs',
		'04' => 'WARNING: CHOKING HAZARD – Toy contains a small ball | Not for children under 3 yrs',
		'05' => 'WARNING: CHOKING HAZARD – This toy is a marble | Not for children under 3 yrs',
		'06' => 'WARNING: CHOKING HAZARD – Toy contains a marble | Not for children under 3 yrs',
		'07' => 'No choking hazard warning necessary',
		'11' => 'WARNING: MAGNET HAZARD – Product contains (a) small magnet(s)',
		'12' => 'No magnet hazard warning necessary',
		'13' => 'WARNING – Flashing hazard',
		'14' => 'No flashing hazard warning necessary',
		'21' => 'WARNING – California Proposition 65 carcinogenic, teratogenic or other reproductively harmful chemical hazard',
		'22' => 'No California Proposition 65 hazard warning necessary',
		'23' => 'California Proposition 65 chemical name',
	];

	/**
	 * Code List 143 for tr
	 *
	 * @var array
	 * @see https://ns.editeur.org/onix/tr/143
	 */
	protected static $tr = [
		'01' => 'UYARI: BOĞULMA TEHLİKESİ – Küçük parçalar / 3 yaşından küçük çocuklar için sakıncalıdır',
		'02' => 'UYARI: BOĞULMA TEHLİKESİ – Şişirilmemiş ya da patlamış balonlar 8 yaşından küçük çocukların boğazına kaçabilir ve nefes yolunu tıkayabilir. Yetişkin gözetimi gereklidir / Şişirilmemiş balonları çocuklardan uzak tutunuz. Patlamış balonları derhal atınız',
		'03' => 'UYARI: BOĞULMA TEHLİKESİ – Küçük top şeklinde oyuncak / 3 yaşından küçük çocuklar için sakıncalıdır',
		'04' => 'UYARI: BOĞULMA TEHLİKESİ - Küçük top içeren oyuncak / 3 yaşından küçük çocuklar için sakıncalıdır',
		'05' => 'UYARI: BOĞULMA TEHLİKESİ – Bu oyuncak bilyedir / 3 yaşından küçük çocuklar için sakıncalıdır',
		'06' => 'UYARI: BOĞULMA TEHLİKESİ – Bilye içeren oyuncak / 3 yaşından küçük çocuklar için sakıncalıdır',
		'07' => 'Boğulma tehlikesi uyarısı gerekli değildir',
		'11' => 'UYARI: MIKNATIS TEHLİKESİ – Ürün küçük mıknatıslar içerebilir',
		'12' => 'No magnet hazard warning necessary',
		'13' => 'WARNING – Flashing hazard',
		'14' => 'No flashing hazard warning necessary',
		'21' => 'WARNING – California Proposition 65 carcinogenic, teratogenic or other reproductively harmful chemical hazard',
		'22' => 'No California Proposition 65 hazard warning necessary',
		'23' => 'California Proposition 65 chemical name',
	];
}
