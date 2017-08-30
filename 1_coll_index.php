<div class="uni-indents-vertical indent-40"></div>
<?$APPLICATION->IncludeComponent(
    "bitrix:news.list",
    "popular_category",
    array(
        "IBLOCK_TYPE" => "content",
        "IBLOCK_ID" => "15",
        "NEWS_COUNT" => "6",
        "SORT_BY1" => "ACTIVE_FROM",
        "SORT_ORDER1" => "DESC",
        "SORT_BY2" => "SORT",
        "SORT_ORDER2" => "ASC",
        "FILTER_NAME" => $arParams["FILTER_NAME"],
        "FIELD_CODE" => array(
            0 => "",
            1 => "",
        ),
        "PROPERTY_CODE" => array(
            0 => "TARGET",
            1 => "SIZE_BLOCK",
            2 => "HREF",
            3 => "",
        ),
        "CHECK_DATES" => "N",
        "DETAIL_URL" => "",
        "AJAX_MODE" => "N",
        "AJAX_OPTION_JUMP" => "N",
        "AJAX_OPTION_STYLE" => "Y",
        "AJAX_OPTION_HISTORY" => "N",
        "CACHE_TYPE" => "A",
        "CACHE_TIME" => "",
        "CACHE_FILTER" => "N",
        "CACHE_GROUPS" => "N",
        "PREVIEW_TRUNCATE_LEN" => "100",
        "ACTIVE_DATE_FORMAT" => "",
        "SET_STATUS_404" => "N",
        "SET_TITLE" => "N",
        "INCLUDE_IBLOCK_INTO_CHAIN" => "N",
        "ADD_SECTIONS_CHAIN" => "N",
        "HIDE_LINK_WHEN_NO_DETAIL" => "N",
        "PARENT_SECTION" => "",
        "PARENT_SECTION_CODE" => "",
        "INCLUDE_SUBSECTIONS" => "N",
        "PAGER_TEMPLATE" => "",
        "DISPLAY_TOP_PAGER" => "N",
        "DISPLAY_BOTTOM_PAGER" => "N",
        "PAGER_TITLE" => "",
        "PAGER_SHOW_ALWAYS" => "N",
        "PAGER_DESC_NUMBERING" => "N",
        "PAGER_DESC_NUMBERING_CACHE_TIME" => $arParams["PAGER_DESC_NUMBERING_CACHE_TIME"],
        "PAGER_SHOW_ALL" => "N",
        "DISPLAY_DATE" => "N",
        "DISPLAY_NAME" => "Y",
        "DISPLAY_PICTURE" => "N",
        "DISPLAY_PREVIEW_TEXT" => "N",
        "TEXT_TITLE" => "",
        "AJAX_OPTION_ADDITIONAL" => "",
        "COMPONENT_TEMPLATE" => "popular_category",
        "SET_BROWSER_TITLE" => "Y",
        "SET_META_KEYWORDS" => "Y",
        "SET_META_DESCRIPTION" => "Y",
        "SET_LAST_MODIFIED" => "N",
        "PAGER_BASE_LINK_ENABLE" => "N",
        "SHOW_404" => "N",
        "MESSAGE_404" => "",
        "GRID_SIZE" => "4"
    ),
    $component
);?>
<?$APPLICATION->IncludeComponent(
    "bitrix:news.list",
    "tizers",
    array(
        "IBLOCK_TYPE" => "content",
        "IBLOCK_ID" => "2",
        "NEWS_COUNT" => "4",
        "SORT_BY1" => "SORT",
        "SORT_ORDER1" => "DESC",
        "SORT_BY2" => "SORT",
        "SORT_ORDER2" => "ASC",
        "FILTER_NAME" => "",
        "FIELD_CODE" => array(
            0 => "",
            1 => "",
        ),
        "PROPERTY_CODE" => array(
            0 => "BANNER_TEXT",
            1 => "LINK",
            2 => "",
        ),
        "CHECK_DATES" => "Y",
        "DETAIL_URL" => "",
        "AJAX_MODE" => "N",
        "AJAX_OPTION_JUMP" => "N",
        "AJAX_OPTION_STYLE" => "Y",
        "AJAX_OPTION_HISTORY" => "N",
        "CACHE_TYPE" => "A",
        "CACHE_TIME" => "36000000",
        "CACHE_FILTER" => "N",
        "CACHE_GROUPS" => "N",
        "ACTIVE_DATE_FORMAT" => "d.m.Y",
        "SET_STATUS_404" => "N",
        "SET_TITLE" => "N",
        "INCLUDE_IBLOCK_INTO_CHAIN" => "N",
        "ADD_SECTIONS_CHAIN" => "N",
        "HIDE_LINK_WHEN_NO_DETAIL" => "N",
        "PARENT_SECTION_CODE" => "tizers",
        "INCLUDE_SUBSECTIONS" => "Y",
        "PAGER_TEMPLATE" => "",
        "DISPLAY_TOP_PAGER" => "N",
        "DISPLAY_BOTTOM_PAGER" => "N",
        "PAGER_TITLE" => "�������",
        "PAGER_SHOW_ALWAYS" => "N",
        "PAGER_DESC_NUMBERING" => "N",
        "PAGER_DESC_NUMBERING_CACHE_TIME" => "3600",
        "PAGER_SHOW_ALL" => "N",
        "TEXT_BANNERS" => "���������� ���������",
        "AJAX_OPTION_ADDITIONAL" => "",
        "SIZE" => "big",
        "COMPONENT_TEMPLATE" => "tizers",
        "PREVIEW_TRUNCATE_LEN" => "",
        "SET_BROWSER_TITLE" => "Y",
        "SET_META_KEYWORDS" => "Y",
        "SET_META_DESCRIPTION" => "Y",
        "SET_LAST_MODIFIED" => "N",
        "PAGER_BASE_LINK_ENABLE" => "N",
        "SHOW_404" => "N",
        "MESSAGE_404" => "",
        "LINE_ELEMENT_COUNT" => "4"
    ),
    false
);?>
<?$GLOBALS["arrTopFilter"] = array(array( "LOGIC" => "OR", "!PROPERTY_HIT" => false, "!PROPERTY_NEW" => false, "!PROPERTY_STOCK" => false)); ?>
<?$APPLICATION->IncludeComponent(
    "intec:tabslabel",
    "tabsblock",
    array(
        "COMPONENT_TEMPLATE" => "tabsblock",
        "TEMPLATE_THEME" => "blue",
        "ADD_PICT_PROP" => "-",
        "LABEL_PROP" => "-",
        "PRODUCT_SUBSCRIPTION" => "Y",
        "SHOW_DISCOUNT_PERCENT" => "Y",
        "SHOW_OLD_PRICE" => "Y",
        "SHOW_CLOSE_POPUP" => "Y",
        "MESS_BTN_BUY" => "������",
        "MESS_BTN_ADD_TO_BASKET" => "� �������",
        "MESS_BTN_SUBSCRIBE" => "�����������",
        "MESS_BTN_DETAIL" => "���������",
        "MESS_NOT_AVAILABLE" => "��� � �������",
        "IBLOCK_TYPE" => "catalog",
        "IBLOCK_ID" => "4",
        "ENABLE_HIT" => "Y",
        "ENABLE_RECOMMEND" => "Y",
        "ENABLE_NEWS" => "Y",
        "ENABLE_STOCK" => "N",
        "ADD_TO_BASKET_ACTION" => "ADD",
        "DISPLAY_COMPARE" => "Y",
        "COMPARE_NAME" => "CATALOG_COMPARE_LIST",
        "LINE_ELEMENT_COUNT" => "4",
        "ELEMENT_COUNT" => "10",
        "PRICE_CODE" => array(
            0 => "BASE",
        ),
		"USE_GREY_BGN" => "Y"
    ),
    false
);?>
<?$APPLICATION->IncludeComponent(
    "bitrix:news.list",
    "four_banners",
    array(
        "IBLOCK_TYPE" => "content",
        "IBLOCK_ID" => "2",
        "NEWS_COUNT" => "4",
        "SORT_BY1" => "SORT",
        "SORT_ORDER1" => "DESC",
        "SORT_BY2" => "SORT",
        "SORT_ORDER2" => "ASC",
        "FILTER_NAME" => "",
        "FIELD_CODE" => array(
            0 => "",
            1 => "",
        ),
        "PROPERTY_CODE" => array(
            0 => "BANNER_TEXT",
            1 => "LINK",
            2 => "",
        ),
        "CHECK_DATES" => "Y",
        "DETAIL_URL" => "",
        "AJAX_MODE" => "N",
        "AJAX_OPTION_JUMP" => "N",
        "AJAX_OPTION_STYLE" => "Y",
        "AJAX_OPTION_HISTORY" => "N",
        "CACHE_TYPE" => "A",
        "CACHE_TIME" => "36000000",
        "CACHE_FILTER" => "N",
        "CACHE_GROUPS" => "N",
        "PREVIEW_TRUNCATE_LEN" => "85",
        "ACTIVE_DATE_FORMAT" => "d.m.Y",
        "SET_STATUS_404" => "N",
        "SET_TITLE" => "N",
        "INCLUDE_IBLOCK_INTO_CHAIN" => "N",
        "ADD_SECTIONS_CHAIN" => "N",
        "HIDE_LINK_WHEN_NO_DETAIL" => "N",
        "PARENT_SECTION_CODE" => "four_banners",
        "INCLUDE_SUBSECTIONS" => "Y",
        "PAGER_TEMPLATE" => "",
        "DISPLAY_TOP_PAGER" => "N",
        "DISPLAY_BOTTOM_PAGER" => "N",
        "PAGER_TITLE" => "�������",
        "PAGER_SHOW_ALWAYS" => "N",
        "PAGER_DESC_NUMBERING" => "N",
        "PAGER_DESC_NUMBERING_CACHE_TIME" => "3600",
        "PAGER_SHOW_ALL" => "N",
        "TEXT_BANNERS" => "������ �����",
        "AJAX_OPTION_ADDITIONAL" => "",
        "COMPONENT_TEMPLATE" => "four_banners",
        "SET_BROWSER_TITLE" => "Y",
        "SET_META_KEYWORDS" => "Y",
        "SET_META_DESCRIPTION" => "Y",
        "SET_LAST_MODIFIED" => "N",
        "LINE_ELEMENT_COUNT" => "4",
        "PAGER_BASE_LINK_ENABLE" => "N",
        "SHOW_404" => "N",
        "MESSAGE_404" => ""
    ),
    false
);?>
<?$arFilter1 = array("PROPERTY_SHOW_ON_MAIN_VALUE" => "Y");?>

<?/*$APPLICATION->IncludeComponent(
    "bitrix:news.list",
    "services_on_main_2",
    array(
        "IBLOCK_TYPE" => "catalog",
        "IBLOCK_ID" => "18",
        "NEWS_COUNT" => "3",
        "SORT_BY1" => "ACTIVE_FROM",
        "SORT_ORDER1" => "DESC",
        "SORT_BY2" => "SORT",
        "SORT_ORDER2" => "ASC",
        "FILTER_NAME" => "arFilter1",
        "FIELD_CODE" => array(
            0 => "",
            1 => "",
        ),
        "PROPERTY_CODE" => array(
            0 => "",
            1 => "autor",
            2 => "company",
            3 => "",
        ),
        "CHECK_DATES" => "Y",
        "DETAIL_URL" => "",
        "AJAX_MODE" => "N",
        "AJAX_OPTION_JUMP" => "N",
        "AJAX_OPTION_STYLE" => "Y",
        "AJAX_OPTION_HISTORY" => "N",
        "CACHE_TYPE" => "A",
        "CACHE_TIME" => "36000000",
        "CACHE_FILTER" => "N",
        "CACHE_GROUPS" => "N",
        "PREVIEW_TRUNCATE_LEN" => "103",
        "ACTIVE_DATE_FORMAT" => "j F Y",
        "SET_STATUS_404" => "N",
        "SET_TITLE" => "N",
        "INCLUDE_IBLOCK_INTO_CHAIN" => "N",
        "ADD_SECTIONS_CHAIN" => "N",
        "HIDE_LINK_WHEN_NO_DETAIL" => "N",
        "PARENT_SECTION" => "",
        "PARENT_SECTION_CODE" => "",
        "INCLUDE_SUBSECTIONS" => "Y",
        "PAGER_TEMPLATE" => "",
        "DISPLAY_TOP_PAGER" => "N",
        "DISPLAY_BOTTOM_PAGER" => "N",
        "PAGER_TITLE" => "",
        "PAGER_SHOW_ALWAYS" => "N",
        "PAGER_DESC_NUMBERING" => "N",
        "PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
        "PAGER_SHOW_ALL" => "N",
        "DISPLAY_DATE" => "Y",
        "DISPLAY_NAME" => "Y",
        "DISPLAY_PICTURE" => "Y",
        "DISPLAY_PREVIEW_TEXT" => "Y",
        "AJAX_OPTION_ADDITIONAL" => "",
        "COMPONENT_TEMPLATE" => "services_on_main_2",
        "SET_BROWSER_TITLE" => "Y",
        "SET_META_KEYWORDS" => "Y",
        "SET_META_DESCRIPTION" => "Y",
        "SET_LAST_MODIFIED" => "N",
        "PAGER_BASE_LINK_ENABLE" => "N",
        "SHOW_404" => "N",
        "MESSAGE_404" => "",
        "NAME" => "������",
        "LINE_ELEMENT_COUNT" => "3",
        "COMPOSITE_FRAME_MODE" => "A",
        "COMPOSITE_FRAME_TYPE" => "AUTO",
		"USE_GREY_BGN" => "Y"
    ),
    false
);*/?>

<?$APPLICATION->IncludeComponent(
    "bitrix:news.list",
    "reviews",
    array(
        "IBLOCK_TYPE" => "reviews",
        "IBLOCK_ID" => "17",
        "NEWS_COUNT" => "3",
        "SORT_BY1" => "ACTIVE_FROM",
        "SORT_ORDER1" => "DESC",
        "SORT_BY2" => "SORT",
        "SORT_ORDER2" => "ASC",
        "FILTER_NAME" => "",
        "FIELD_CODE" => array(
            0 => "",
            1 => "",
        ),
        "PROPERTY_CODE" => array(
            0 => "autor",
            1 => "company",
            2 => "",
        ),
        "CHECK_DATES" => "Y",
        "DETAIL_URL" => "",
        "AJAX_MODE" => "N",
        "AJAX_OPTION_JUMP" => "N",
        "AJAX_OPTION_STYLE" => "Y",
        "AJAX_OPTION_HISTORY" => "N",
        "CACHE_TYPE" => "A",
        "CACHE_TIME" => "36000000",
        "CACHE_FILTER" => "N",
        "CACHE_GROUPS" => "N",
        "PREVIEW_TRUNCATE_LEN" => "103",
        "ACTIVE_DATE_FORMAT" => "j F Y",
        "SET_STATUS_404" => "N",
        "SET_TITLE" => "N",
        "INCLUDE_IBLOCK_INTO_CHAIN" => "N",
        "ADD_SECTIONS_CHAIN" => "N",
        "HIDE_LINK_WHEN_NO_DETAIL" => "N",
        "PARENT_SECTION" => "",
        "PARENT_SECTION_CODE" => "",
        "INCLUDE_SUBSECTIONS" => "Y",
        "PAGER_TEMPLATE" => "",
        "DISPLAY_TOP_PAGER" => "N",
        "DISPLAY_BOTTOM_PAGER" => "N",
        "PAGER_TITLE" => "",
        "PAGER_SHOW_ALWAYS" => "N",
        "PAGER_DESC_NUMBERING" => "N",
        "PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
        "PAGER_SHOW_ALL" => "N",
        "DISPLAY_DATE" => "Y",
        "DISPLAY_NAME" => "Y",
        "DISPLAY_PICTURE" => "Y",
        "DISPLAY_PREVIEW_TEXT" => "Y",
        "AJAX_OPTION_ADDITIONAL" => "",
        "COMPONENT_TEMPLATE" => "reviews",
        "SET_BROWSER_TITLE" => "Y",
        "SET_META_KEYWORDS" => "Y",
        "SET_META_DESCRIPTION" => "Y",
        "SET_LAST_MODIFIED" => "N",
        "PAGER_BASE_LINK_ENABLE" => "N",
        "SHOW_404" => "N",
        "MESSAGE_404" => ""
    ),
    false
);?>
<div class="uni_parent_col">
    <div class="about-company uni-66 uni_col">
        <?$APPLICATION->IncludeComponent("bitrix:main.include","",Array("AREA_FILE_SHOW" => "file","PATH" => SITE_DIR."include/front_info.php","EDIT_TEMPLATE" => ""));?>
    </div>
    <div class="about-company uni-33 uni_col">
        <?$APPLICATION->IncludeComponent("bitrix:news.list", "news_on_main_picture", Array(
            "IBLOCK_TYPE" => "content",	// ��� ��������������� ����� (������������ ������ ��� ��������)
            "IBLOCK_ID" => "14",	// ��� ��������������� �����
            "NEWS_COUNT" => "3",	// ���������� �������� �� ��������
            "SORT_BY1" => "ACTIVE_FROM",	// ���� ��� ������ ���������� ��������
            "SORT_ORDER1" => "DESC",	// ����������� ��� ������ ���������� ��������
            "SORT_BY2" => "SORT",	// ���� ��� ������ ���������� ��������
            "SORT_ORDER2" => "ASC",	// ����������� ��� ������ ���������� ��������
            "FILTER_NAME" => "",	// ������
            "FIELD_CODE" => array(	// ����
                0 => "DATE_CREATE",
                1 => "",
            ),
            "PROPERTY_CODE" => array(	// ��������
                0 => "",
                1 => "",
            ),
            "CHECK_DATES" => "Y",	// ���������� ������ �������� �� ������ ������ ��������
            "DETAIL_URL" => "",	// URL �������� ���������� ��������� (�� ��������� - �� �������� ���������)
            "AJAX_MODE" => "N",	// �������� ����� AJAX
            "AJAX_OPTION_JUMP" => "N",	// �������� ��������� � ������ ����������
            "AJAX_OPTION_STYLE" => "Y",	// �������� ��������� ������
            "AJAX_OPTION_HISTORY" => "N",	// �������� �������� ��������� ��������
            "CACHE_TYPE" => "A",	// ��� �����������
            "CACHE_TIME" => "36000000",	// ����� ����������� (���.)
            "CACHE_FILTER" => "N",	// ���������� ��� ������������� �������
            "CACHE_GROUPS" => "N",	// ��������� ����� �������
            "PREVIEW_TRUNCATE_LEN" => "110",	// ������������ ����� ������ ��� ������ (������ ��� ���� �����)
            "ACTIVE_DATE_FORMAT" => "j M Y",	// ������ ������ ����
            "SET_STATUS_404" => "N",	// ������������� ������ 404
            "SET_TITLE" => "N",	// ������������� ��������� ��������
            "INCLUDE_IBLOCK_INTO_CHAIN" => "N",	// �������� �������� � ������� ���������
            "ADD_SECTIONS_CHAIN" => "N",	// �������� ������ � ������� ���������
            "HIDE_LINK_WHEN_NO_DETAIL" => "N",	// �������� ������, ���� ��� ���������� ��������
            "PARENT_SECTION" => "",	// ID �������
            "PARENT_SECTION_CODE" => "",	// ��� �������
            "INCLUDE_SUBSECTIONS" => "Y",	// ���������� �������� ����������� �������
            "PAGER_TEMPLATE" => "",	// ������ ������������ ���������
            "DISPLAY_TOP_PAGER" => "N",	// �������� ��� �������
            "DISPLAY_BOTTOM_PAGER" => "N",	// �������� ��� �������
            "PAGER_TITLE" => "�������",	// �������� ���������
            "PAGER_SHOW_ALWAYS" => "N",	// �������� ������
            "PAGER_DESC_NUMBERING" => "N",	// ������������ �������� ���������
            "PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",	// ����� ����������� ������� ��� �������� ���������
            "PAGER_SHOW_ALL" => "N",	// ���������� ������ "���"
            "DISPLAY_DATE" => "Y",	// �������� ���� ��������
            "DISPLAY_NAME" => "Y",	// �������� �������� ��������
            "DISPLAY_PICTURE" => "Y",	// �������� ����������� ��� ������
            "DISPLAY_PREVIEW_TEXT" => "N",	// �������� ����� ������
            "AJAX_OPTION_ADDITIONAL" => "",	// �������������� �������������
        ),
            false
        );?>
    </div>
</div>
<?$APPLICATION->IncludeComponent(
	"bitrix:sale.viewed.product", 
	"slider", 
	array(
		"VIEWED_COUNT" => "2",
		"VIEWED_NAME" => "Y",
		"VIEWED_IMAGE" => "Y",
		"VIEWED_PRICE" => "Y",
		"VIEWED_CURRENCY" => "default",
		"VIEWED_CANBUY" => "N",
		"VIEWED_CANBASKET" => "N",
		"VIEWED_IMG_HEIGHT" => "60",
		"VIEWED_IMG_WIDTH" => "70",
		"BASKET_URL" => "/personal/basket.php",
		"ACTION_VARIABLE" => "action",
		"PRODUCT_ID_VARIABLE" => "id",
		"SET_TITLE" => "N",
		"COMPONENT_TEMPLATE" => "slider",
		"LINE_ELEMENT_COUNT" => "2",
		"VIEWED_TITLE" => "�� ��������",
		"COMPOSITE_FRAME_MODE" => "A",
		"COMPOSITE_FRAME_TYPE" => "AUTO"
	),
	false,
	array(
		"ACTIVE_COMPONENT" => "N"
	)
);?>
<?$APPLICATION->IncludeComponent(
	"bitrix:catalog.section", 
	"slider_lider_brand", 
	array(
		"IBLOCK_TYPE" => "content",
		"IBLOCK_ID" => "3",
		"SECTION_ID" => "",
		"SECTION_CODE" => "",
		"SECTION_USER_FIELDS" => array(
			0 => "",
			1 => "",
		),
		"ELEMENT_SORT_FIELD" => "sort",
		"ELEMENT_SORT_ORDER" => "asc",
		"ELEMENT_SORT_FIELD2" => "id",
		"ELEMENT_SORT_ORDER2" => "desc",
		"FILTER_NAME" => "",
		"INCLUDE_SUBSECTIONS" => "Y",
		"SHOW_ALL_WO_SECTION" => "Y",
		"HIDE_NOT_AVAILABLE" => "N",
		"PAGE_ELEMENT_COUNT" => "20",
		"LINE_ELEMENT_COUNT" => "2",
		"PROPERTY_CODE" => array(
			0 => "",
			1 => "",
		),
		"OFFERS_LIMIT" => "5",
		"SECTION_URL" => "",
		"DETAIL_URL" => "",
		"SECTION_ID_VARIABLE" => "",
		"AJAX_MODE" => "N",
		"AJAX_OPTION_JUMP" => "N",
		"AJAX_OPTION_STYLE" => "Y",
		"AJAX_OPTION_HISTORY" => "N",
		"CACHE_TYPE" => "A",
		"CACHE_TIME" => "36000000",
		"CACHE_GROUPS" => "N",
		"SET_META_KEYWORDS" => "Y",
		"META_KEYWORDS" => "-",
		"SET_META_DESCRIPTION" => "Y",
		"META_DESCRIPTION" => "-",
		"BROWSER_TITLE" => "-",
		"ADD_SECTIONS_CHAIN" => "N",
		"DISPLAY_COMPARE" => "N",
		"SET_TITLE" => "N",
		"SET_STATUS_404" => "N",
		"CACHE_FILTER" => "N",
		"PRICE_CODE" => array(
			0 => "BASE",
		),
		"USE_PRICE_COUNT" => "N",
		"SHOW_PRICE_COUNT" => "",
		"PRICE_VAT_INCLUDE" => "Y",
		"CONVERT_CURRENCY" => "N",
		"BASKET_URL" => "/personal/cart/",
		"ACTION_VARIABLE" => "action",
		"PRODUCT_ID_VARIABLE" => "id",
		"USE_PRODUCT_QUANTITY" => "N",
		"ADD_PROPERTIES_TO_BASKET" => "Y",
		"PRODUCT_PROPS_VARIABLE" => "prop",
		"PARTIAL_PRODUCT_PROPERTIES" => "N",
		"PRODUCT_PROPERTIES" => array(
		),
		"PAGER_TEMPLATE" => "",
		"DISPLAY_TOP_PAGER" => "N",
		"DISPLAY_BOTTOM_PAGER" => "N",
		"PAGER_TITLE" => "",
		"PAGER_SHOW_ALWAYS" => "N",
		"PAGER_DESC_NUMBERING" => "N",
		"PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
		"PAGER_SHOW_ALL" => "N",
		"AJAX_OPTION_ADDITIONAL" => "",
		"PRODUCT_QUANTITY_VARIABLE" => "quantity",
		"COMPONENT_TEMPLATE" => "slider_lider_brand",
		"CUSTOM_FILTER" => "",
		"HIDE_NOT_AVAILABLE_OFFERS" => "N",
		"BACKGROUND_IMAGE" => "-",
		"SEF_MODE" => "N",
		"SET_BROWSER_TITLE" => "Y",
		"SET_LAST_MODIFIED" => "N",
		"USE_MAIN_ELEMENT_SECTION" => "N",
		"COMPOSITE_FRAME_MODE" => "A",
		"COMPOSITE_FRAME_TYPE" => "AUTO",
		"PAGER_BASE_LINK_ENABLE" => "N",
		"SHOW_404" => "N",
		"MESSAGE_404" => "",
		"COMPATIBLE_MODE" => "Y",
		"DISABLE_INIT_JS_IN_COMPONENT" => "N"
	),
	false,
	array(
		"ACTIVE_COMPONENT" => "Y"
	)
);?>
<div class="uni_parent_col">
    <div class="main-provodka">
        <?$APPLICATION->IncludeComponent("bitrix:main.include","",Array("AREA_FILE_SHOW" => "file","PATH" => SITE_DIR."include/main-provodka.php","EDIT_TEMPLATE" => ""));?>
    </div>
</div>