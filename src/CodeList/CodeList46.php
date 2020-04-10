<?php

namespace Ribal\Onix\CodeList;

/**
 * ONIX Code List 46
 *
 * Used with    • <SalesRightsType> <b089>    • <ROWSalesRightsType> <x456>
 *
 * @see https://ns.editeur.org/onix/en/46
 */
class CodeList46 extends CodeList implements CodeListInterface
{
	/**
	 * Code List 46 for en
	 *
	 * @var array
	 * @see https://ns.editeur.org/onix/en/46
	 */
	protected static $en = [
		'00' => 'Sales rights unknown or unstated for any reason',
		'01' => 'For sale with exclusive rights in the specified countries or territories',
		'02' => 'For sale with non-exclusive rights in the specified countries or territories',
		'03' => 'Not for sale in the specified countries or territories (reason unspecified)',
		'04' => 'Not for sale in the specified countries (but publisher holds exclusive rights in those countries or territories)',
		'05' => 'Not for sale in the specified countries (publisher holds non-exclusive rights in those countries or territories)',
		'06' => 'Not for sale in the specified countries (because publisher does not hold rights in those countries or territories)',
		'07' => 'For sale with exclusive rights in the specified countries or territories (sales restriction applies)',
		'08' => 'For sale with non-exclusive rights in the specified countries or territories (sales restriction applies)',
	];

	/**
	 * Code List 46 for es
	 *
	 * @var array
	 * @see https://ns.editeur.org/onix/es/46
	 */
	protected static $es = [
		'00' => 'Derechos de venta desconocidos o no especificados, por cualquier razón',
		'01' => 'En venta, con derechos exclusivos, en los países y territorios especificados',
		'02' => 'En venta, con derechos no exclusivos, en los países y territorios especificados',
		'03' => 'No la venta en los países y territorios especificados',
		'04' => 'No a la venta en los países y territorios especificados (pero la editorial conserva los derechos exclusivos en esos países o territorios)',
		'05' => 'No a la venta en los países y territorios especificados (pero la editorial conserva los derechos no exclusivos en esos países o territorios)',
		'06' => 'No a la venta en los países y territorios especificados (porque la editorial no tiene los derechos en esos países o territorios)',
		'07' => 'A la venta, con derechos exclusivos, en los países y territorios especificados (existen restricciones de venta)',
		'08' => 'A la venta, con derechos no exclusivos, en los países y territorios especificados (existen restricciones de venta)',
	];

	/**
	 * Code List 46 for de
	 *
	 * @var array
	 * @see https://ns.editeur.org/onix/de/46
	 */
	protected static $de = [
		'00' => 'Sales rights unknown or unstated for any reason',
		'01' => 'For sale with exclusive rights in the specified countries or territories',
		'02' => 'For sale with non-exclusive rights in the specified countries or territories',
		'03' => 'Not for sale in the specified countries or territories (reason unspecified)',
		'04' => 'Not for sale in the specified countries (but publisher holds exclusive rights in those countries or territories)',
		'05' => 'Not for sale in the specified countries (publisher holds non-exclusive rights in those countries or territories)',
		'06' => 'Not for sale in the specified countries (because publisher does not hold rights in those countries or territories)',
		'07' => 'For sale with exclusive rights in the specified countries or territories (sales restriction applies)',
		'08' => 'For sale with non-exclusive rights in the specified countries or territories (sales restriction applies)',
	];

	/**
	 * Code List 46 for fr
	 *
	 * @var array
	 * @see https://ns.editeur.org/onix/fr/46
	 */
	protected static $fr = [
		'00' => 'Droits de vente inconnus ou non spécifiés pour une quelconque raison',
		'01' => 'Pour la vente libre avec droits exclusifs dans les pays ou territoires spécifiés',
		'02' => 'Pour la vente libre avec droits non exclusifs dans les pays ou territoires spécifiés',
		'03' => 'Interdit à la vente dans les pays ou territoires spécifiés (raison non mentionnée)',
		'04' => 'Interdit à la vente dans les pays spécifiés (mais l’éditeur détient les droits exclusifs dans ces pays ou territoires)',
		'05' => 'Interdit à la vente dans les pays spécifiés (l’éditeur détient les droits non exclusifs dans ces pays ou territoires)',
		'06' => 'Interdit à la vente dans les pays spécifiés (car l’éditeur ne détient pas les droits dans ces pays ou territoires)',
		'07' => 'Pour la vente avec droits exclusifs dans les pays ou territoires spécifiés (les restrictions de vente s’appliquent)',
		'08' => 'Pour la vente avec droits non exclusifs dans les pays ou territoires spécifiés (les restrictions de vente s’appliquent)',
	];

	/**
	 * Code List 46 for it
	 *
	 * @var array
	 * @see https://ns.editeur.org/onix/it/46
	 */
	protected static $it = [
		'00' => 'Diritti di vendita non conosciuti o non dichiarati',
		'01' => 'Vendita senza restrizioni con diritti esclusivi nei paesi/regioni specificati',
		'02' => 'Vendita senza restrizioni con diritti non esclusivi nei paesi/regioni specificati',
		'03' => 'Divieto di vendita nei paesi/regioni specificati (senza indicazione delle motivazioni)',
		'04' => 'Divieto di vendita nei paesi specificati (ma l’editore detiene diritti esclusivi di vendita in tali paesi/regioni)',
		'05' => 'Divieto di vendita nei paesi specificati (ma l’editore detiene diritti non esclusivi di vendita in tali paesi/regioni)',
		'06' => 'Divieto di vendita nei paesi specificati (perché l’editore non detiene diritti di vendita in tali paesi/regioni)',
		'07' => 'Diritti esclusivi di vendita nei paesi/regioni specificati (con restrizioni)',
		'08' => 'Diritti non esclusivi di vendita nei paesi/regioni specificati (con restrizioni)',
	];

	/**
	 * Code List 46 for nb
	 *
	 * @var array
	 * @see https://ns.editeur.org/onix/nb/46
	 */
	protected static $nb = [
		'00' => 'Salgsrettigheter er ikke angitt',
		'01' => 'For salg med eksklusive rettigheter i spesifisert(e) land',
		'02' => 'For salg med ikke-eksklusive rettigheter i spesifisert(e) land',
		'03' => 'Ikke for salg i spesifisert(e) land',
		'04' => 'Ikke for salg i de spesifiserte landene (men utgiver har eksklusive rettigheter i disse landene eller territoriene)',
		'05' => 'Ikke for salg i de spesifiserte landene (utgiver har ikke-eksklusive rettigheter i disse landene eller territoriene)',
		'06' => 'Ikke for salg i de spesifiserte landene (pga. at utgiveren ikke har rettigheter for disse landene eller territoriene)',
		'07' => 'For salg med eksklusive rettigheter i de spesifiserte landene eller territoriene (salgsrestriksjoner gjelder)',
		'08' => 'For salg med ikke-eksklusive rettigheter i de spesifiserte landene eller territoriene (salgsrestriksjoner gjelder)',
	];

	/**
	 * Code List 46 for tr
	 *
	 * @var array
	 * @see https://ns.editeur.org/onix/tr/46
	 */
	protected static $tr = [
		'00' => 'Satış hakları bilinmiyor ya da herhangi bir nedenle beyan edilmemiş',
		'01' => 'Belirtilen ülke ya da bölgelerde inhisari haklarıyla sınırsız satış',
		'02' => 'Belirtilen ülke ya da bölgelerde inhisari olmayan haklarıyla sınırsız satış',
		'03' => 'Belirtilen ülkelerde ya da bölgelerde satılamaz (neden belirtilmemiş)',
		'04' => 'Belirtilen ülkelerde satılamaz (fakat yayımcı bu ülkelerde ya da bölgelerde inhisari hakları elinde bulundurur)',
		'05' => 'Belirtilen ülkelerde satılamaz (fakat yayımcı bu ülkelerde ya da bölgelerde inhisari olmayan hakları elinde bulundurur)',
		'06' => 'Belirtilen ülkelerde satılamaz (çünkü yayımcı bu ülkelerde ya da bölgelerde inhisari haklara sahip değildir)',
		'07' => 'Belirtilen ülkelerde veya bölgelerde münhasır haklar ile satışta (satış kısıtlaması geçerlidir).',
		'08' => 'Belirtilen ülkelerde veya bölgelerde münhasır olmayan haklar ile satışta (satış kısıtlaması geçerlidir).',
	];
}
