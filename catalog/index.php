<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("������� �������");
?><?$APPLICATION->IncludeComponent(
	"bitrix:catalog", 
	"catalog", 
	array(
		"IBLOCK_TYPE" => "catalog",
		"IBLOCK_ID" => "4",
		"HIDE_NOT_AVAILABLE" => "N",
		"SECTION_ID_VARIABLE" => "SECTION_ID",
		"SEF_MODE" => "Y",
		"SEF_FOLDER" => "/catalog/",
		"AJAX_MODE" => "N",
		"AJAX_OPTION_JUMP" => "N",
		"AJAX_OPTION_STYLE" => "Y",
		"AJAX_OPTION_HISTORY" => "N",
		"CACHE_TYPE" => "N",
		"CACHE_TIME" => "250000",
		"CACHE_FILTER" => "N",
		"CACHE_GROUPS" => "N",
		"SET_STATUS_404" => "Y",
		"SET_TITLE" => "Y",
		"ADD_SECTIONS_CHAIN" => "Y",
		"ADD_ELEMENT_CHAIN" => "Y",
		"USE_ELEMENT_COUNTER" => "Y",
		"USE_FILTER" => "Y",
		"FILTER_NAME" => "arrFilter",
		"FILTER_FIELD_CODE" => array(
			0 => "",
			1 => "",
		),
		"FILTER_PROPERTY_CODE" => array(
			0 => "BRAND",
			1 => "Diametr",
			2 => "Kratnost_bukht",
			3 => "BLOG_COMMENTS_CNT",
			4 => "CML2_ATTRIBUTES",
			5 => "R_Color",
			6 => "class_abc",
			7 => "energy_class",
			8 => "country",
			9 => "type_plita",
			10 => "camera_type",
			11 => "matrica",
			12 => "type_objective",
			13 => "type_uprav",
			14 => "tonarm",
			15 => "focus",
			16 => "PROP_2033",
			17 => "PROP_2055",
			18 => "BLU_RAY_PROIGRYVATEL",
			19 => "CD_PROIGRYVATEL",
			20 => "DSSA",
			21 => "MP3_PROIGRYVATEL",
			22 => "USB_NA_PEREDNEY_PANELI",
			23 => "ZOOM_OPTICHESKIY_TSIFROVOY",
			24 => "VYDERZHKA",
			25 => "VYDERZHKA_X_SYNC",
			26 => "VYSOTA_SKASHIVANIYA",
			27 => "VYKHOD_NA_NAUSHNIKI",
			28 => "VYKHODY",
			29 => "GABARITY_SHKHVKHG",
			30 => "GAZ_KONTROL_KONFOROK",
			31 => "DEKODER",
			32 => "DIAMETR_KOLES",
			33 => "DIAMETR_FILTRA",
			34 => "DIAPAZON_VOSPROIZVODIMYKH_CHASTOT",
			35 => "DIAPAZON_CHASTOT",
			36 => "DIAFRAGMA",
			37 => "DINAMICHESKIY_DIAPAZON",
			38 => "DUKHOVKA",
			39 => "ZHK_EKRAN",
			40 => "ZASHCHITA_OT_DETEY",
			41 => "ZASHCHITA_OT_PROTECHEK_VODY",
			42 => "ZASHCHITNOE_OTKLYUCHENIE",
			43 => "INTERFEYS_CD_CHENDZHERA",
			44 => "INFRAKRASNYY_PULT",
			45 => "KLASS_POTREBLENIYA_ENERGII",
			46 => "KOLICHESTVO_DINAMIKOV",
			47 => "KOLICHESTVO_ZVEZD_V_KASSETE",
			48 => "KOLICHESTVO_KONFOROK",
			49 => "KOLICHESTVO_LAMP_V_ODNOY_VSPYSHKE",
			50 => "KOLICHESTVO_MATRITS",
			51 => "KOLICHESTVO_POLOS",
			52 => "KOLICHESTVO_SKOROSTEY",
			53 => "KONSTRUKTSIYA_VILKI",
			54 => "KONSTRUKTSIYA_KARETKI",
			55 => "KONSTRUKTSIYA_MANETOK",
			56 => "KONSTRUKTSIYA_RULEVOY_KOLONKI",
			57 => "KONTROL_DISBALANSA",
			58 => "KONTROL_ZA_UROVNEM_PENY",
			59 => "KORZINA",
			60 => "KORPUS",
			61 => "KREPLENIE",
			62 => "MAGNIT",
			63 => "MAKSIMALNAYA_SERIYA_SNIMKOV",
			64 => "MAKSIMALNAYA_CHASTOTA_KADROV_VIDEOROLIKA",
			65 => "MAKSIMALNAYA_CHASTOTA_KADROV_PRI_SEMKE_HD_VIDEO",
			66 => "MAKSIMALNOE_RAZRESHENIE_VIDEOSEMKI",
			67 => "MAKSIMALNOE_RAZRESHENIE_ROLIKOV",
			68 => "MATERIAL_DIFFUZORA",
			69 => "MATERIAL_PODVESA",
			70 => "MATERIAL_RAMY",
			71 => "MATRITSA",
			72 => "MNOGOTSVETNAYA_PODSVETKA",
			73 => "MODEL",
			74 => "MOSHCHNOST",
			75 => "MULCHIROVANIE",
			76 => "NAVIGATOR",
			77 => "NAIMENOVANIE_ZADNEGO_PEREKLYUCHATELYA",
			78 => "NAIMENOVANIE_ZADNEGO_TORMOZA",
			79 => "NAIMENOVANIE_KARETKI",
			80 => "NAIMENOVANIE_KASSETY",
			81 => "NAIMENOVANIE_MANETOK",
			82 => "NAIMENOVANIE_MYAGKOY_VILKI",
			83 => "NAIMENOVANIE_PEREDNEGO_PEREKLYUCHATELYA",
			84 => "NASTENNOE_KREPLENIE",
			85 => "NOMINALNAYA_I_PIKOVAYA_MOSHCHNOST",
			86 => "NOSITELI",
			87 => "OBSH_TOLSHINA_POKRYTIYA",
			88 => "OBEKTIV_V_KOMPLEKTE",
			89 => "OBEM_DOSTUPNOY_POLZOVATELYU_PAMYATI",
			90 => "OBEM_DUKHOVKI",
			91 => "OBEM_ZHESTKOGO_DISKA",
			92 => "ODNOBITNAYA_ARKHITEKTURA_DAC",
			93 => "OPERATSIONNAYA_SISTEMA",
			94 => "PAMYAT_IMYEN_DISKOV",
			95 => "PAUZA_PRI_RAZGOVORE_PO_TELEFONU",
			96 => "PIKOVAYA_MOSHCHNOST",
			97 => "PLATFORMA",
			98 => "PODDERZHKA_RDS",
			99 => "PODDERZHKA_VIDEO_VYSOKOGO_RAZRESHENIYA_FULL_HD",
			100 => "PODDERZHKA_VIDEOFORMATOV",
			101 => "PODDERZHKA_DIAPAZONOV",
			102 => "PODDERZHKA_KART_PAMYATI",
			103 => "PODDERZHKA_SMENNYKH_OBEKTIVOV",
			104 => "PODDERZHKA_STANDARTOV",
			105 => "PODROBNEE_O_SOVMESTIMYKH_KAMERAKH",
			106 => "PODSOEDINENIE_PO_STANDARTU_ISO",
			107 => "POZOLOCHENNYE_RAZYEMY",
			108 => "POLE_ZRENIYA_VIDOISKATELYA",
			109 => "PRIGODN_DLYA_TEPLPOLOV",
			110 => "PROGRAMMA_STIRKI_SHERSTI",
			111 => "RAZMER_VSTROENNOY_PAMYATI",
			112 => "RAZMER_OPERATIVNOY_PAMYATI",
			113 => "RAZMER_RULEVOY_KOLONKI",
			114 => "RAZMERY",
			115 => "RAZMERY_DKHSHKHT",
			116 => "RAZMERY_SHKHGKHV",
			117 => "RAZMERY_RAMY",
			118 => "RAZEM_DLYA_VNESHNEY_ANTENNY",
			119 => "REGULIROVKA_TEMBRA",
			120 => "REGULIROVKA_YARKOSTI_PODSVETKI",
			121 => "REGULIROVKI_VILKI",
			122 => "REZHIMY_SEMKI",
			123 => "REKOMENDUEMAYA_PLOSHCHAD_SKASHIVANIYA",
			124 => "RUSSKOYAZYCHNOE_MENYU",
			125 => "RUCHNAYA_NASTROYKA_VYDERZHKI_I_DIAFRAGMY",
			126 => "RUCHNAYA_FOKUSIROVKA",
			127 => "SKOROST_SEMKI",
			128 => "SOVMESTIMYE_KAMERY",
			129 => "SOOTNOSHENIE_SIGNAL_SHUM",
			130 => "STABILIZATOR_IZOBRAZHENIYA",
			131 => "STABILIZATOR_IZOBRAZHENIYA_FOTOSEMKA",
			132 => "SYEMNAYA_PANEL",
			133 => "TAYMER",
			134 => "TV_TYUNER",
			135 => "TIP",
			136 => "TIP_VSPYSHKI",
			137 => "TIP_DISPLEYA",
			138 => "TIP_ZADNEGO_TORMOZA",
			139 => "TIP_INSTRUMENTA",
			140 => "TIP_KORPUSA",
			141 => "TIP_MATRITSY",
			142 => "TIP_MATRITSY_EKRANA",
			143 => "TIP_POSADOCHNOY_CHASTI_VALA_KARETKI",
			144 => "TRAVOSBORNIK",
			145 => "UPRAVLENIE_CHENDZHEROM",
			146 => "UROVEN_ZADNEGO_PEREKLYUCHATELYA",
			147 => "UROVEN_ZADNEGO_TORMOZA",
			148 => "UROVEN_KARETKI",
			149 => "UROVEN_KASSETY",
			150 => "UROVEN_MANETOK",
			151 => "UROVEN_MYAGKOY_VILKI",
			152 => "",
		),
		"FILTER_PRICE_CODE" => array(
			0 => "BASE",
		),
		"FILTER_VIEW_MODE" => "VERTICAL",
		"USE_REVIEW" => "Y",
		"USE_COMPARE" => "Y",
		"COMPARE_NAME" => "CATALOG_COMPARE_LIST",
		"COMPARE_FIELD_CODE" => array(
			0 => "",
			1 => "",
		),
		"COMPARE_PROPERTY_CODE" => array(
			0 => "CML2_ARTICLE",
			1 => "CML2_BASE_UNIT",
			2 => "vote_count",
			3 => "rating",
			4 => "CML2_TRAITS",
			5 => "CML2_TAXES",
			6 => "phone_operating_system",
			7 => "phone_operating_memory",
			8 => "vysota",
			9 => "deepness",
			10 => "cartridge",
			11 => "class_abc",
			12 => "energy_class",
			13 => "count_lines",
			14 => "max_otjim",
			15 => "max_size",
			16 => "Mosh",
			17 => "phone_inner_memory",
			18 => "support_speed",
			19 => "privod",
			20 => "country",
			21 => "acustic_type",
			22 => "type_plita",
			23 => "izluchenie",
			24 => "camera_type",
			25 => "matrica",
			26 => "type_objective",
			27 => "type_uprav",
			28 => "uprav",
			29 => "tonarm",
			30 => "focus",
			31 => "shirina",
			32 => "",
		),
		"COMPARE_ELEMENT_SORT_FIELD" => "shows",
		"COMPARE_ELEMENT_SORT_ORDER" => "asc",
		"DISPLAY_ELEMENT_SELECT_BOX" => "N",
		"PRICE_CODE" => array(
			0 => "BASE",
		),
		"USE_PRICE_COUNT" => "N",
		"SHOW_PRICE_COUNT" => "1",
		"PRICE_VAT_INCLUDE" => "Y",
		"PRICE_VAT_SHOW_VALUE" => "Y",
		"CONVERT_CURRENCY" => "N",
		"BASKET_URL" => "/personal/cart/",
		"ACTION_VARIABLE" => "action",
		"PRODUCT_ID_VARIABLE" => "id",
		"USE_PRODUCT_QUANTITY" => "Y",
		"PRODUCT_QUANTITY_VARIABLE" => "quantity",
		"ADD_PROPERTIES_TO_BASKET" => "Y",
		"PRODUCT_PROPS_VARIABLE" => "prop",
		"PARTIAL_PRODUCT_PROPERTIES" => "Y",
		"PRODUCT_PROPERTIES" => array(
		),
		"SHOW_TOP_ELEMENTS" => "N",
		"SECTION_COUNT_ELEMENTS" => "Y",
		"SECTIONS_VIEW_MODE" => "LIST",
		"SECTIONS_SHOW_PARENT_NAME" => "N",
		"PAGE_ELEMENT_COUNT" => "12",
		"LINE_ELEMENT_COUNT" => "3",
		"ELEMENT_SORT_FIELD" => "sort",
		"ELEMENT_SORT_ORDER" => "asc",
		"ELEMENT_SORT_FIELD2" => "shows",
		"ELEMENT_SORT_ORDER2" => "asc",
		"LIST_PROPERTY_CODE" => array(
			0 => "CML2_ARTICLE",
			1 => "INSTOCK",
			2 => "CML2_BASE_UNIT",
			3 => "vote_count",
			4 => "rating",
			5 => "CML2_TRAITS",
			6 => "CML2_TAXES",
			7 => "vote_sum",
			8 => "phone_operating_system",
			9 => "phone_operating_memory",
			10 => "vysota",
			11 => "deepness",
			12 => "diagonal",
			13 => "cartridge",
			14 => "class_abc",
			15 => "energy_class",
			16 => "count_lines",
			17 => "max_otjim",
			18 => "max_size",
			19 => "Mosh",
			20 => "phone_inner_memory",
			21 => "support_speed",
			22 => "privod",
			23 => "country",
			24 => "acustic_type",
			25 => "type_plita",
			26 => "izluchenie",
			27 => "camera_type",
			28 => "matrica",
			29 => "type_objective",
			30 => "type_uprav",
			31 => "uprav",
			32 => "tonarm",
			33 => "focus",
			34 => "shirina",
			35 => "306",
			36 => "337",
			37 => "",
		),
		"INCLUDE_SUBSECTIONS" => "N",
		"LIST_META_KEYWORDS" => "-",
		"LIST_META_DESCRIPTION" => "-",
		"LIST_BROWSER_TITLE" => "-",
		"DETAIL_PROPERTY_CODE" => array(
			0 => "BRAND",
			1 => "Color",
			2 => "Tip_montazha",
			3 => "Diametr",
			4 => "Tip_vykljuchatelja",
			5 => "Tip_izolyatora",
			6 => "Tip_rozetki",
			7 => "Forma_ramki",
			8 => "Vid_provoda",
			9 => "Kolichestvo_mest",
			10 => "Osnovnoj_material",
			11 => "Sechenie",
			12 => "Tip_kabelja",
			13 => "Tip_mehanizma",
			14 => "Kolichestvo_zhil",
			15 => "CML2_ARTICLE",
			16 => "Zazemlenie",
			17 => "Komplekt",
			18 => "Kratnost_bukht",
			19 => "Material_pokrytija",
			20 => "Moshchnost",
			21 => "Naprjazhenie_do",
			22 => "Prohodnoj",
			23 => "Razmeri",
			24 => "Sila_toka",
			25 => "Stepen_zashhity",
			26 => "Termostojkost",
			27 => "Shtorki",
			28 => "Stepen_zashhity_ip",
			29 => "R_Color",
			30 => "R_Tip_montazha",
			31 => "R_Diametr",
			32 => "R_Tip_vykljuchatelja",
			33 => "R_Tip_izolyatora",
			34 => "R_Forma_ramki",
			35 => "R_Vid_provoda",
			36 => "R_Kolichestvo_mest",
			37 => "R_Osnovnoj_material",
			38 => "R_Sechenie",
			39 => "R_Tip_kabelja",
			40 => "R_Tip_mehanizma",
			41 => "R_Termostojkost",
			42 => "R_Komplekt",
			43 => "R_Material_pokrytija",
			44 => "R_Moshchnost",
			45 => "R_Naprjazhenie_do",
			46 => "R_Razmeri",
			47 => "R_Sila_toka",
			48 => "R_Stepen_zashhity_ip",
			49 => "R_Tip_prohodimosti",
			50 => "R_Shtorki",
			51 => "R_Tip_rozetki",
			52 => "R_Zazemlenie",
			53 => "R_Proizvoditel",
			54 => "",
		),
		"DETAIL_META_KEYWORDS" => "-",
		"DETAIL_META_DESCRIPTION" => "-",
		"DETAIL_BROWSER_TITLE" => "-",
		"DETAIL_DISPLAY_NAME" => "Y",
		"DETAIL_DETAIL_PICTURE_MODE" => "IMG",
		"DETAIL_ADD_DETAIL_TO_SLIDER" => "Y",
		"DETAIL_DISPLAY_PREVIEW_TEXT_MODE" => "H",
		"LINK_IBLOCK_TYPE" => "content",
		"LINK_IBLOCK_ID" => "1",
		"LINK_PROPERTY_SID" => "LINK",
		"LINK_ELEMENTS_URL" => "/sale/#ELEMENT_CODE#",
		"USE_ALSO_BUY" => "N",
		"USE_STORE" => "N",
		"PAGER_TEMPLATE" => ".default",
		"DISPLAY_TOP_PAGER" => "N",
		"DISPLAY_BOTTOM_PAGER" => "Y",
		"PAGER_TITLE" => "������",
		"PAGER_SHOW_ALWAYS" => "N",
		"PAGER_DESC_NUMBERING" => "N",
		"PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
		"PAGER_SHOW_ALL" => "Y",
		"TEMPLATE_THEME" => "blue",
		"ADD_PICT_PROP" => "MORE_PHOTO",
		"LABEL_PROP" => "-",
		"SHOW_DISCOUNT_PERCENT" => "Y",
		"SHOW_OLD_PRICE" => "Y",
		"DETAIL_SHOW_MAX_QUANTITY" => "Y",
		"MESS_BTN_BUY" => "������",
		"MESS_BTN_ADD_TO_BASKET" => "� �������",
		"MESS_BTN_COMPARE" => "���������",
		"MESS_BTN_DETAIL" => "���������",
		"MESS_NOT_AVAILABLE" => "��� � �������",
		"DETAIL_USE_VOTE_RATING" => "Y",
		"DETAIL_VOTE_DISPLAY_AS_RATING" => "rating",
		"DETAIL_USE_COMMENTS" => "Y",
		"DETAIL_BLOG_USE" => "Y",
		"DETAIL_VK_USE" => "N",
		"DETAIL_FB_USE" => "N",
		"DETAIL_BRAND_USE" => "N",
		"AJAX_OPTION_ADDITIONAL" => "",
		"COMPONENT_TEMPLATE" => "catalog",
		"DETAIL_BRAND_PROP_CODE" => "-",
		"USE_MAIN_ELEMENT_SECTION" => "Y",
		"SET_LAST_MODIFIED" => "N",
		"SECTION_BACKGROUND_IMAGE" => "-",
		"DETAIL_SET_CANONICAL_URL" => "Y",
		"DETAIL_CHECK_SECTION_ID_VARIABLE" => "N",
		"DETAIL_BACKGROUND_IMAGE" => "-",
		"SHOW_DEACTIVATED" => "N",
		"PAGER_BASE_LINK_ENABLE" => "N",
		"SHOW_404" => "N",
		"MESSAGE_404" => "",
		"MESSAGES_PER_PAGE" => "10",
		"USE_CAPTCHA" => "Y",
		"REVIEW_AJAX_POST" => "Y",
		"PATH_TO_SMILE" => "/bitrix/images/forum/smile/",
		"FORUM_ID" => "1",
		"URL_TEMPLATES_READ" => "",
		"SHOW_LINK_TO_FORUM" => "Y",
		"REVIEWS_IBLOCK_ID" => "5",
		"COMMON_SHOW_CLOSE_POPUP" => "N",
		"DETAIL_BLOG_URL" => "catalog_comments",
		"DETAIL_BLOG_EMAIL_NOTIFY" => "N",
		"SIDEBAR_SECTION_SHOW" => "Y",
		"SIDEBAR_DETAIL_SHOW" => "Y",
		"SIDEBAR_PATH" => "",
		"USE_SALE_BESTSELLERS" => "Y",
		"COMPARE_POSITION_FIXED" => "Y",
		"COMPARE_POSITION" => "top left",
		"USE_COMMON_SETTINGS_BASKET_POPUP" => "N",
		"COMMON_ADD_TO_BASKET_ACTION" => "",
		"TOP_ADD_TO_BASKET_ACTION" => "BUY",
		"SECTION_ADD_TO_BASKET_ACTION" => "BUY",
		"DETAIL_ADD_TO_BASKET_ACTION" => "",
		"DETAIL_SHOW_BASIS_PRICE" => "Y",
		"USE_BIG_DATA" => "Y",
		"BIG_DATA_RCM_TYPE" => "bestsell",
		"REVIEWS_IBLOCK_TYPE" => "reviews",
		"GRID_CATALOG_SECTIONS_COUNT" => "3",
		"PRODUCT_DISPLAY_MODE" => "N",
		"OFFER_ADD_PICT_PROP" => "-",
		"OFFER_TREE_PROPS" => array(
			0 => "SIZE",
			1 => "COLOR",
			2 => "BRAND",
		),
		"COMPARE_OFFERS_FIELD_CODE" => array(
			0 => "ID",
			1 => "CODE",
			2 => "XML_ID",
			3 => "NAME",
			4 => "TAGS",
			5 => "SORT",
			6 => "PREVIEW_TEXT",
			7 => "PREVIEW_PICTURE",
			8 => "DETAIL_TEXT",
			9 => "DETAIL_PICTURE",
			10 => "DATE_ACTIVE_FROM",
			11 => "ACTIVE_FROM",
			12 => "DATE_ACTIVE_TO",
			13 => "ACTIVE_TO",
			14 => "SHOW_COUNTER",
			15 => "SHOW_COUNTER_START",
			16 => "IBLOCK_TYPE_ID",
			17 => "IBLOCK_ID",
			18 => "IBLOCK_CODE",
			19 => "IBLOCK_NAME",
			20 => "IBLOCK_EXTERNAL_ID",
			21 => "DATE_CREATE",
			22 => "CREATED_BY",
			23 => "CREATED_USER_NAME",
			24 => "TIMESTAMP_X",
			25 => "MODIFIED_BY",
			26 => "USER_NAME",
			27 => "",
		),
		"COMPARE_OFFERS_PROPERTY_CODE" => array(
			0 => "BRAND",
			1 => "SIZE",
			2 => "COLOR",
			3 => "",
		),
		"OFFERS_CART_PROPERTIES" => array(
			0 => "BRAND",
			1 => "SIZE",
			2 => "COLOR",
		),
		"SECTION_TOP_DEPTH" => "2",
		"LIST_OFFERS_FIELD_CODE" => array(
			0 => "",
			1 => "",
		),
		"LIST_OFFERS_PROPERTY_CODE" => array(
			0 => "SIZE",
			1 => "COLOR",
			2 => "",
		),
		"LIST_OFFERS_LIMIT" => "100",
		"DETAIL_OFFERS_FIELD_CODE" => array(
			0 => "",
			1 => "",
		),
		"DETAIL_OFFERS_PROPERTY_CODE" => array(
			0 => "R_ARTICLE",
			1 => "BRAND",
			2 => "SIZE",
			3 => "R_TYPE",
			4 => "COLOR",
			5 => "",
		),
		"OFFERS_SORT_FIELD" => "shows",
		"OFFERS_SORT_ORDER" => "asc",
		"OFFERS_SORT_FIELD2" => "shows",
		"OFFERS_SORT_ORDER2" => "asc",
		"FILTER_OFFERS_FIELD_CODE" => array(
			0 => "",
			1 => "",
		),
		"FILTER_OFFERS_PROPERTY_CODE" => array(
			0 => "",
			1 => "",
		),
		"DISABLE_INIT_JS_IN_COMPONENT" => "N",
		"DETAIL_SET_VIEWED_IN_COMPONENT" => "N",
		"GRID_CATALOG_ROOT_SECTIONS_COUNT" => "5",
		"USE_SIMILAR_SERVICES" => "N",
		"REVIEWS_COUNT" => "",
		"LINE_SECTION_COUNT" => "4",
		"OCB_USE" => "Y",
		"OCB_TYPE_PERSON" => "1",
		"OCB_TYPE_DELIVERY" => "10",
		"OCB_TYPE_PAYMENT" => "1",
		"HIDE_NOT_AVAILABLE_OFFERS" => "N",
		"DETAIL_STRICT_SECTION_CHECK" => "Y",
		"COMPOSITE_FRAME_MODE" => "A",
		"COMPOSITE_FRAME_TYPE" => "AUTO",
		"USE_GIFTS_DETAIL" => "Y",
		"USE_GIFTS_SECTION" => "Y",
		"USE_GIFTS_MAIN_PR_SECTION_LIST" => "Y",
		"GIFTS_DETAIL_PAGE_ELEMENT_COUNT" => "4",
		"GIFTS_DETAIL_HIDE_BLOCK_TITLE" => "N",
		"GIFTS_DETAIL_BLOCK_TITLE" => "�������� ���� �� ��������",
		"GIFTS_DETAIL_TEXT_LABEL_GIFT" => "�������",
		"GIFTS_SECTION_LIST_PAGE_ELEMENT_COUNT" => "4",
		"GIFTS_SECTION_LIST_HIDE_BLOCK_TITLE" => "N",
		"GIFTS_SECTION_LIST_BLOCK_TITLE" => "������� � ������� ����� �������",
		"GIFTS_SECTION_LIST_TEXT_LABEL_GIFT" => "�������",
		"GIFTS_SHOW_DISCOUNT_PERCENT" => "Y",
		"GIFTS_SHOW_OLD_PRICE" => "Y",
		"GIFTS_SHOW_NAME" => "Y",
		"GIFTS_SHOW_IMAGE" => "Y",
		"GIFTS_MESS_BTN_BUY" => "�������",
		"GIFTS_MAIN_PRODUCT_DETAIL_PAGE_ELEMENT_COUNT" => "4",
		"GIFTS_MAIN_PRODUCT_DETAIL_HIDE_BLOCK_TITLE" => "N",
		"GIFTS_MAIN_PRODUCT_DETAIL_BLOCK_TITLE" => "�������� ���� �� �������, ����� �������� �������",
		"COMPATIBLE_MODE" => "Y",
		"SEF_URL_TEMPLATES" => array(
			"sections" => "",
			"section" => "#SECTION_CODE#/",
			"element" => "#SECTION_CODE#/#ELEMENT_CODE#/",
			"compare" => "compare.php?action=#ACTION_CODE#",
			"smart_filter" => "#SECTION_CODE#/filter/#SMART_FILTER_PATH#/apply/",
		),
		"VARIABLE_ALIASES" => array(
			"compare" => array(
				"ACTION_CODE" => "action",
			),
		)
	),
	false
);?><?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>