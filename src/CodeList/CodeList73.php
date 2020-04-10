<?php

namespace Ribal\Onix\CodeList;

/**
 * ONIX Code List 73
 *
 * Used with <WebsiteRole> <b367>
 *
 * @see https://ns.editeur.org/onix/en/73
 */
class CodeList73 extends CodeList implements CodeListInterface
{
	/**
	 * Code List 73 for en
	 *
	 * @var array
	 * @see https://ns.editeur.org/onix/en/73
	 */
	protected static $en = [
		'00' => 'Unspecified, see website description',
		'01' => 'Publisher’s corporate website',
		'02' => 'Publisher’s website for a specified work',
		'03' => 'Online hosting service home page',
		'04' => 'Journal home page',
		'05' => 'Online resource ‘available content’ page',
		'06' => 'Contributor’s own website',
		'07' => 'Publisher’s website relating to specified contributor',
		'08' => 'Other publisher’s website relating to specified contributor',
		'09' => 'Third-party website relating to specified contributor',
		'10' => 'Contributor’s own website for specified work',
		'11' => 'Other publisher’s website relating to specified work',
		'12' => 'Third-party website relating to specified work',
		'13' => 'Contributor’s own website for group or series of works',
		'14' => 'Publisher’s website relating to group or series of works',
		'15' => 'Other publisher’s website relating to group or series of works',
		'16' => 'Third-party website relating to group or series of works (eg a fan site)',
		'17' => 'Publisher’s B2B website',
		'18' => 'Publisher’s B2C website',
		'23' => 'Author blog',
		'24' => 'Web page for author presentation / commentary',
		'25' => 'Web page for author interview',
		'26' => 'Web page for author reading',
		'27' => 'Web page for cover material',
		'28' => 'Web page for sample content',
		'29' => 'Web page for full content',
		'30' => 'Web page for other commentary / discussion',
		'31' => 'Transfer-URL',
		'32' => 'DOI Website Link',
		'33' => 'Supplier’s corporate website',
		'34' => 'Supplier’s B2B website',
		'35' => 'Supplier’s B2C website',
		'36' => 'Supplier’s website for a specified work',
		'37' => 'Supplier’s B2B website for a specified work',
		'38' => 'Supplier’s B2C website for a specified work',
		'39' => 'Supplier’s website for a group or series of works',
		'40' => 'URL of full metadata description',
		'41' => 'Social networking URL for specific work or product',
		'42' => 'Author’s social networking URL',
		'43' => 'Publisher’s social networking URL',
		'44' => 'Social networking URL for specific article, chapter or content item',
		'45' => 'Publisher’s or third party website for permissions requests',
		'46' => 'Publisher’s or third party website for privacy statement',
	];

	/**
	 * Code List 73 for es
	 *
	 * @var array
	 * @see https://ns.editeur.org/onix/es/73
	 */
	protected static $es = [
		'00' => 'No especificado, ver descripción en el propio sitio web',
		'01' => 'Sitio web corporativo de la editorial',
		'02' => 'Sitio web de la editorial para una obra concreta',
		'03' => 'Página de inicio de un servicio en línea',
		'04' => 'Sitio web de una revista',
		'05' => 'Página de «contenidos disponibles» en línea',
		'06' => 'Sitio web particular de un autor, ilustrador, etc.',
		'07' => 'Sitio web de la editorial relacionado con un un autor, ilustrador… concreto',
		'08' => 'Sitio web de otra editorial relacionado con un un autor, ilustrador… concreto',
		'09' => 'Sitio web de un tercero relacionado con un un autor, ilustrador… concreto',
		'10' => 'Sitio web personal de un un autor, ilustrador… para una obra concreta',
		'11' => 'Sitio web de otra editorial relacionado con la obra',
		'12' => 'Sitio web de un tercero relacionado con una obra concreta',
		'13' => 'Sitio web personal del un autor, ilustrador… para un conjunto o serie de obras',
		'14' => 'Sitio web de la editorial relacionado con un grupo o serie de obras',
		'15' => 'Sitio web de otra editorial relacionado con un conjunto o una serie de obras',
		'16' => 'Sitio web de un tercero relacionado con un grupo o a serie de obras',
		'17' => 'Sitio web B2B',
		'18' => 'Sitio web B2C',
		'23' => 'Bitácora (Blog) del autor',
		'24' => 'Página web de presentación o comentario del autor',
		'25' => 'Página web de entrevistas a un autor',
		'26' => 'Página web con lecturas del autor',
		'27' => 'Página web con material de cubierta',
		'28' => 'Página web con muestra del contenido',
		'29' => 'Página web con el contenido completo',
		'30' => 'Página web para otros comentarios o debates',
		'31' => 'URL para cosecha de datos («data harvesting»)',
		'32' => 'Enlace a web del DOI',
		'33' => 'Sitio web corporativo de un proveedor',
		'34' => 'Sitio web B2B de un proveedor',
		'35' => 'Sitio web B2C de un proveedor',
		'36' => 'Sitio web de un proveedor para una obra específica',
		'37' => 'Sitio web B2B de un proveedor para una obra específica',
		'38' => 'Sitio web B2C de un proveedor para una obra específica',
		'39' => 'Sitio web de un proveedor relacionado con un grupo o a serie de obras',
		'40' => 'URL con los metadatos completos',
		'41' => 'URL de una red social para la obra concreta',
		'42' => 'URL de una red social de un autor',
		'43' => 'URL de una red social de la editorial',
		'44' => 'URL de una red social para un artículo, un capítulo u otro elemento de contenido concreto',
		'45' => 'Sitio web de la editorial o de terceros para solicitud de permisos',
		'46' => 'Sitio web de la editorial, u otras terceras partes, para declaración de política de privacidad',
	];

	/**
	 * Code List 73 for de
	 *
	 * @var array
	 * @see https://ns.editeur.org/onix/de/73
	 */
	protected static $de = [
		'00' => 'Unspecified, see website description',
		'01' => 'Publisher’s corporate website',
		'02' => 'Publisher’s website for a specified work',
		'03' => 'Online hosting service home page',
		'04' => 'Journal home page',
		'05' => 'Online resource ‘available content’ page',
		'06' => 'Contributor’s own website',
		'07' => 'Publisher’s website relating to specified contributor',
		'08' => 'Other publisher’s website relating to specified contributor',
		'09' => 'Third-party website relating to specified contributor',
		'10' => 'Contributor’s own website for specified work',
		'11' => 'Other publisher’s website relating to specified work',
		'12' => 'Third-party website relating to specified work',
		'13' => 'Contributor’s own website for group or series of works',
		'14' => 'Publisher’s website relating to group or series of works',
		'15' => 'Other publisher’s website relating to group or series of works',
		'16' => 'Third-party website relating to group or series of works (eg a fan site)',
		'17' => 'Publisher’s B2B website',
		'18' => 'Publisher’s B2C website',
		'23' => 'Author blog',
		'24' => 'Web page for author presentation / commentary',
		'25' => 'Web page for author interview',
		'26' => 'Web page for author reading',
		'27' => 'Web page for cover material',
		'28' => 'Web page for sample content',
		'29' => 'Web page for full content',
		'30' => 'Web page for other commentary / discussion',
		'31' => 'Transfer-URL',
		'32' => 'DOI Website Link',
		'33' => 'Supplier’s corporate website',
		'34' => 'Supplier’s B2B website',
		'35' => 'Supplier’s B2C website',
		'36' => 'Supplier’s website for a specified work',
		'37' => 'Supplier’s B2B website for a specified work',
		'38' => 'Supplier’s B2C website for a specified work',
		'39' => 'Supplier’s website for a group or series of works',
		'40' => 'URL of full metadata description',
		'41' => 'Social networking URL for specific work or product',
		'42' => 'Author’s social networking URL',
		'43' => 'Publisher’s social networking URL',
		'44' => 'Social networking URL for specific article, chapter or content item',
		'45' => 'Publisher’s or third party website for permissions requests',
		'46' => 'Publisher’s or third party website for privacy statement',
	];

	/**
	 * Code List 73 for fr
	 *
	 * @var array
	 * @see https://ns.editeur.org/onix/fr/73
	 */
	protected static $fr = [
		'00' => 'Non spécifié, voir description du site web',
		'01' => 'Site web de l’éditeur',
		'02' => 'Site web de l’éditeur pour une œuvre spécifique',
		'03' => 'Page d’accueil de l’hébergeur internet',
		'04' => 'Page d’accueil d’une revue',
		'05' => 'Page de « contenu disponible » d’une ressource en ligne',
		'06' => 'Site web du contributeur',
		'07' => 'Site web de l’éditeur dédié à un contributeur spécifique',
		'08' => 'Site web d’un autre éditeur dédié à un contributeur spécifique',
		'09' => 'Site web tiers dédié à un contributeur spécifique',
		'10' => 'Site web du contributeur dédié à une œuvre spécifique',
		'11' => 'Site web d’un autre éditeur dédié à une œuvre spécifique',
		'12' => 'Site web tiers dédié à une œuvre spécifique',
		'13' => 'Site web du contributeur dédié à un ensemble ou à une série d’œuvres',
		'14' => 'Site web de l’éditeur dédié à un ensemble ou à une série d’œuvres',
		'15' => 'Site web d’un autre éditeur dédié à un ensemble ou à une série d’œuvres',
		'16' => 'Site web tiers dédié à un ensemble ou à une série d’œuvres',
		'17' => 'Site web B2B de l’éditeur',
		'18' => 'Site web B2C de l’éditeur',
		'23' => 'Blog de l’auteur',
		'24' => 'Page web de présentation / commentaires de l’auteur',
		'25' => 'Page web de l’interview de l’auteur',
		'26' => 'Page web de la lecture faite par l’auteur',
		'27' => 'Page web de la couverture',
		'28' => 'Page web d’un échantillon de contenu',
		'29' => 'Page web du contenu intégral',
		'30' => 'Page web pour d’autres commentaires / discussions',
		'31' => 'URL de transfert',
		'32' => 'Lien de site web DOI',
		'33' => 'Site web du distributeur',
		'34' => 'Site web B2B du distributeur',
		'35' => 'Site web B2C du distributeur',
		'36' => 'Site web du distributeur pour une œuvre spécifique',
		'37' => 'Site web B2B du distributeur pour une œuvre spécifique',
		'38' => 'Site web B2C du distributeur pour une œuvre spécifique',
		'39' => 'Site web du distributeur pour un ensemble ou une série d’œuvres',
		'40' => 'URL de la description complète des métadonnées',
		'41' => 'URL du réseau social propre à une œuvre ou à un produit',
		'42' => 'URL du réseau social de l’auteur',
		'43' => 'URL du réseau social de l’éditeur',
		'44' => 'URL du réseau social consacré à un article, un chapitre ou un élément de contenu spécifique',
		'45' => 'Site web d’un éditeur ou d’un tiers dédié aux demandes autorisations',
		'46' => 'Site d’un éditeur ou d’un tiers pour la politique de confidentialité',
	];

	/**
	 * Code List 73 for it
	 *
	 * @var array
	 * @see https://ns.editeur.org/onix/it/73
	 */
	protected static $it = [
		'00' => 'Non specificato, vedere descrizione del sito Internet',
		'01' => 'Sito Internet dell’editore',
		'02' => 'Sito Internet dell’editore dedicato a un’opera specifica',
		'03' => 'Home page della piattaforma',
		'04' => 'Home page della rivista',
		'05' => 'Pagina del «contenuto disponibile» on line',
		'06' => 'Sito Internet dell’autore/contributore',
		'07' => 'Sito Internet dell’editore relativo all’autore/contributore',
		'08' => 'Sito Internet di altro editore relativo all’autore/contributore',
		'09' => 'Sito Internet di terzi relativo all’autore/contributore',
		'10' => 'Sito Internet dell’autore/contributore per una specifica opera',
		'11' => 'Sito Internet di altro editore relativo a un’opera specifica',
		'12' => 'Sito Internet di terzi relativo a un’opera specifica',
		'13' => 'Sito Internet dell’autore/contributore dedicato a un gruppo o una serie di titoli',
		'14' => 'Sito Internet dell’editore dedicato a un gruppo o una serie di titoli',
		'15' => 'Sito Internet di altro editore dedicato a un gruppo o una serie di titoli',
		'16' => 'Sito Internet di terzi dedicato a un gruppo o una serie di titoli (ad es.: fan club)',
		'17' => 'Sito Internet B2B dell’editore',
		'18' => 'Sito Internet B2C dell’editore',
		'23' => 'Blog dell’autore',
		'24' => 'Pagina Internet con la presentazione/i commenti dell’autore',
		'25' => 'Pagina Internet con intervista all’autore',
		'26' => 'Pagina Internet con lettura da parte dell’autore',
		'27' => 'Pagina Internet con materiale da copertina',
		'28' => 'Pagina Internet con contenuto di prova',
		'29' => 'Pagina Internet con intero contenuto',
		'30' => 'Pagina Internet con altri tipi di commenti/discussioni',
		'31' => 'URL di trasferimento',
		'32' => 'DOI Website Link',
		'33' => 'Sito Internet aziendale del fornitore',
		'34' => 'Sito Internet B2B del fornitore',
		'35' => 'Sito Internet B2C del fornitore',
		'36' => 'Sito Internet del fornitore dedicato a un’opera specifica',
		'37' => 'Sito Internet B2B del fornitore dedicato a un’opera specifica',
		'38' => 'Sito Internet B2C del fornitore dedicato a un’opera specifica',
		'39' => 'Sito Internet del fornitore dedicato a uno specifico gruppo o serie di titoli',
		'40' => 'URL della descrizione completa dei metadati',
		'41' => 'URL del social network relativo a un’opera o un prodotto specifico',
		'42' => 'URL del social network dell’autore',
		'43' => 'URL del social network dell’editore',
		'44' => 'URL del social network relativo a un articolo, capitolo o contenuto specifico',
		'45' => 'Sito Internet dell’editore o di una terza parte per le richieste di autorizzazione',
		'46' => 'Sito web dell’editore o di una terza parte per l’informativa sulla privacy',
	];

	/**
	 * Code List 73 for nb
	 *
	 * @var array
	 * @see https://ns.editeur.org/onix/nb/73
	 */
	protected static $nb = [
		'00' => 'Uspesifisert',
		'01' => 'Forlagets hjemmeside',
		'02' => 'Forlagets nettside for et bestemt produkt',
		'03' => 'Hjemmeside for webhotell',
		'04' => 'Hjemmeside for tidsskrift',
		'05' => 'Nettside for ‘tilgjengelig innhold’ i en online ressurs',
		'06' => 'Forfatters/bidragsyters eget nettsted',
		'07' => 'Forlagets nettside for en forfatter/bidragsyter',
		'08' => 'Annets forlags nettside for en bidragsyter',
		'09' => 'Annet nettsted for en bidragsyter',
		'10' => 'Forfatters/bidragsyters eget nettsted for et bestemt produkt',
		'11' => 'Annet forlags nettside for et bestemt produkt',
		'12' => 'Annet nettsted for et bestemt produkt',
		'13' => 'Forfatters/bidragsyters eget nettsted for ei gruppe eller en serie produkter',
		'14' => 'Forlagets egen nettside for ei gruppe eller en serie produkter',
		'15' => 'Annet forlags nettside for ei gruppe eller en serie produkter',
		'16' => 'Annet nettsted for ei gruppe eller en serie produkter',
		'17' => 'Forlagets nettsted for bedriftsmarkedet',
		'18' => 'Forlagets nettsted for konsument',
		'23' => 'Forfatterblogg',
		'24' => 'Nettside for presentasjon av forfatteren',
		'25' => 'Nettside for forfatterintervju',
		'26' => 'Nettside for forfatteropplesning',
		'27' => 'Nettside for omslagsmateriale',
		'28' => 'Nettside for eksempel på innhold',
		'29' => 'Nettside for komplett innhold',
		'30' => 'Nettside for andre kommentarer / diskusjoner',
		'31' => 'Transfer-URL',
		'32' => 'DOI Website Link',
		'33' => 'Distributørens nettsted',
		'34' => 'Distributørens nettsted for bedriftsmarkedet',
		'35' => 'Distributørens nettsted for konsument',
		'36' => 'Distributørens nettsted for et bestemt produkt',
		'37' => 'Distributørens nettsted for bedriftsmarkedet for et bestemt produkt',
		'38' => 'Distributørens nettsted for konsument for et bestemt produkt',
		'39' => 'Distributørens nettsted for ei gruppe eller en serie produkter',
		'40' => 'URL til full metadatapost',
		'41' => 'URL til sosiale medier for et bestemt produkt',
		'42' => 'URL til forfatterens sider på sosiale medier',
		'43' => 'URL til utgivers/vareeiers sider på sosiale medier',
		'44' => 'URL til sider på sosiale medier for en bestemt artikkel, et kapittel eller et annet innholdselement',
		'45' => 'Vareeier eller tredjeparts nettsted for forespørsler om tillatelse',
		'46' => 'Vareeier eller tredjeparts nettsted for personvern',
	];

	/**
	 * Code List 73 for tr
	 *
	 * @var array
	 * @see https://ns.editeur.org/onix/tr/73
	 */
	protected static $tr = [
		'00' => 'Belirtilmemiş, bkz. İnternet sitesi tanımı',
		'01' => 'Yayımcının kurumsal İnternet sitesi',
		'02' => 'Yayımcının belirli bir eser için İnternet sitesi',
		'03' => 'Çevrimiçi sunucu hizmeti ana sayfası',
		'04' => 'Dergi ana sayfası',
		'05' => 'Çevrimiçi kaynak ‘erişilebilir içerik’ sayfası',
		'06' => 'Katkıda bulunanın kendi İnternet sitesi',
		'07' => 'Yayımcının belirli bir katkı sahibi için İnternet sitesi',
		'08' => 'Diğer yayımcının belirli bir katkı sahibi için İnternet sitesi',
		'09' => 'Belirli bir katkı sahibi ile ilgili üçüncü taraf İnternet sitesi',
		'10' => 'Katkıda bulunanın belirli bir eser için kendi İnternet sitesi',
		'11' => 'Diğer yayımcının belirli bir eser için İnternet sitesi',
		'12' => 'Belirli bir eser ile ilgili üçüncü taraf İnternet sitesi',
		'13' => 'Katkıda bulunanın belirli bir eser grubu ya da dizisi için kendi İnternet sitesi',
		'14' => 'Yayımcının belirli bir eser grubu ya da dizisi için kendi İnternet sitesi',
		'15' => 'Diğer ayımcının belirli bir eser grubu ya da dizisi için kendi İnternet sitesi',
		'16' => 'Bir eser grubu ya da dizisi için üçüncü taraf İnternet sitesi (örn. hayran sitesi)',
		'17' => 'Yayımcının B2B [işletmeler arası] İnternet sitesi',
		'18' => 'Yayımcının B2C [işletmeden tüketiciye] İnternet sitesi',
		'23' => 'Yazar blogu',
		'24' => 'Yazar sunumu / yorumu için İnternet sayfası',
		'25' => 'Yazar söyleşisi için İnternet sayfası',
		'26' => 'Yazar okuması için İnternet sayfası',
		'27' => 'Kapak malzemesi için İnternet sayfası',
		'28' => 'İçerik örneği için İnternet sayfası',
		'29' => 'Tam içerik için İnternet sayfası',
		'30' => 'Diğer yorum / tartışma için İnternet sayfası',
		'31' => 'Transfer-URL',
		'32' => 'DOI Website Link',
		'33' => 'Tedarikçinin kurumsal İnternet sitesi',
		'34' => 'Tedarikçinin B2B [işletmeler arası] İnternet sitesi',
		'35' => 'Tedarikçinin B2C [işletmeden tüketiciye] İnternet sitesi',
		'36' => 'Tedarikçinin belirli bir eser için İnternet sitesi',
		'37' => 'Tedarikçinin belirli bir eser için B2B [işletmeden işletmeye] İnternet sitesi',
		'38' => 'Tedarikçinin belirli bir eser için B2C [işletmeden tüketiciye] İnternet sitesi',
		'39' => 'Tedarikçinin belirli bir eser grubu ya da dizisi için İnternet sitesi',
		'40' => 'Tam üstveri tanımı URL adresi',
		'41' => 'Belirli bir eser için sosyal paylaşım ağı URL adresi',
		'42' => 'Yazarın sosyal paylaşım URL adresi',
		'43' => 'Yayımcının sosyal paylaşım URL adresi',
		'44' => 'Belirli yazı, bölüm veya içerik ögesi için sosyal ağ URL adresi',
		'45' => 'İzin istekleri için yayımcı ya da üçüncü taraf web sitesi',
		'46' => 'Publisher’s or third party website for privacy statement',
	];
}
