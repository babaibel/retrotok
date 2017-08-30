<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
/** @var array $arParams */
/** @var array $arResult */
/** @global CMain $APPLICATION */
/** @global CUser $USER */
/** @global CDatabase $DB */
/** @var CBitrixComponentTemplate $this */
/** @var string $templateName */
/** @var string $templateFile */
/** @var string $templateFolder */
/** @var string $componentPath */
/** @var CBitrixComponent $component */
$this->setFrameMode(true);
?>
<div class="tabs_block">
	<div id="tabs_block">
		<ul class="clearfix nav">
			<?if($arParams["ENABLE_STOCK"]){?>
				<li>
					<a href="#tabs-1">
						<?=GetMessage("MESS_STOCK");?>
					</a>
				</li>
			<?}?>
			<?if($arParams["ENABLE_HIT"]){?>
				<li>
					<a href="#tabs-2">
						<?=GetMessage("MESS_HIT");?>
					</a>
				</li>
			<?}?>
			<?if($arParams["ENABLE_NEWS"]){?>
				<li>
					<a href="#tabs-3">
						<?=GetMessage("MESS_NEW");?>
					</a>
				</li>
			<?}?>
			<?if($arParams["ENABLE_RECOMMEND"]){?>
				<li>
					<a href="#tabs-4">
						<?=GetMessage("MESS_RECOMMEND");?>
					</a>
				</li>
			<?}?>			
		</ul>		
		<?if($arParams["ENABLE_STOCK"]){?>
			<div id="tabs-1">
				<?$GLOBALS["arrStockFilter"] = array("!PROPERTY_STOCK" => false); ?>
				<?$APPLICATION->IncludeComponent("bitrix:catalog.top", "uni_popular", array(
					"IBLOCK_TYPE" =>  $arParams["IBLOCK_TYPE"],
					"IBLOCK_ID" => $arParams["IBLOCK_ID"],
					"ELEMENT_SORT_FIELD" => "RAND",
					"ELEMENT_SORT_ORDER" => "asc",
					"ELEMENT_SORT_FIELD2" => "id",
					"ELEMENT_SORT_ORDER2" => "desc",
					"FILTER_NAME" => "arrStockFilter",
					"HIDE_NOT_AVAILABLE" => "N",
					"ELEMENT_COUNT" => "8",
					"LINE_ELEMENT_COUNT" => "4",
					"PROPERTY_CODE" => array(
						0 => "HIT",
						1 => "NEW",
						2 => "STOCK",
						3 => "RECOMMEND",
						4 => "",
					),
					"OFFERS_FIELD_CODE" => array(
						0 => "",
						1 => "",
					),
					"OFFERS_PROPERTY_CODE" => array(
						0 => "",
						1 => "",
					),
					"OFFERS_SORT_FIELD" => "sort",
					"OFFERS_SORT_ORDER" => "asc",
					"OFFERS_SORT_FIELD2" => "id",
					"OFFERS_SORT_ORDER2" => "desc",
					"OFFERS_LIMIT" => "6",
					"SECTION_URL" => "catalog/#SECTION_ID#/",
					"DETAIL_URL" => "catalog/#SECTION_ID#/#ELEMENT_ID#/",
					"SECTION_ID_VARIABLE" => "SECTION_ID",
					"CACHE_TYPE" => "A",
					"CACHE_TIME" => "36000000",
					"CACHE_GROUPS" => "Y",
					"DISPLAY_COMPARE" => "N",
					"CACHE_FILTER" => "N",
					"PRICE_CODE" => array(
						0 => "BASE",
					),
					"USE_PRICE_COUNT" => "N",
					"SHOW_PRICE_COUNT" => "1",
					"PRICE_VAT_INCLUDE" => "Y",
					"CONVERT_CURRENCY" => "N",
					"BASKET_URL" => "/personal/basket.php",
					"ACTION_VARIABLE" => "action",
					"PRODUCT_ID_VARIABLE" => "id",
					"USE_PRODUCT_QUANTITY" => "N",
					"ADD_PROPERTIES_TO_BASKET" => "Y",
					"PRODUCT_PROPS_VARIABLE" => "prop",
					"PARTIAL_PRODUCT_PROPERTIES" => "N",
					"PRODUCT_PROPERTIES" => array(
						0 => "HIT",
						1 => "NEW",
						2 => "STOCK",
						3 => "RECOMMEND"
					),
					"OFFERS_CART_PROPERTIES" => array(
					),
					"PRODUCT_QUANTITY_VARIABLE" => "quantity"
					),
					false
				);?>
			</div>
		<?}?>
		<?if($arParams["ENABLE_HIT"]){?>
			<div id="tabs-2">
				<?$GLOBALS["arrHitFilter"] = array("!PROPERTY_HIT" => false); ?>
				<?$APPLICATION->IncludeComponent("bitrix:catalog.top", "uni_popular", array(
					"IBLOCK_TYPE" =>  $arParams["IBLOCK_TYPE"],
					"IBLOCK_ID" => $arParams["IBLOCK_ID"],
					"ELEMENT_SORT_FIELD" => "RAND",
					"ELEMENT_SORT_ORDER" => "asc",
					"ELEMENT_SORT_FIELD2" => "id",
					"ELEMENT_SORT_ORDER2" => "desc",
					"FILTER_NAME" => "arrHitFilter",
					"HIDE_NOT_AVAILABLE" => "N",
					"ELEMENT_COUNT" => "8",
					"LINE_ELEMENT_COUNT" => "4",
					"PROPERTY_CODE" => array(
						0 => "HIT",
						1 => "NEW",
						2 => "STOCK",
						3 => "RECOMMEND",
						4 => "",
					),
					"OFFERS_FIELD_CODE" => array(
						0 => "",
						1 => "",
					),
					"OFFERS_PROPERTY_CODE" => array(
						0 => "",
						1 => "",
					),
					"OFFERS_SORT_FIELD" => "sort",
					"OFFERS_SORT_ORDER" => "asc",
					"OFFERS_SORT_FIELD2" => "id",
					"OFFERS_SORT_ORDER2" => "desc",
					"OFFERS_LIMIT" => "6",
					"SECTION_URL" => "catalog/#SECTION_ID#/",
					"DETAIL_URL" => "catalog/#SECTION_ID#/#ELEMENT_ID#/",
					"SECTION_ID_VARIABLE" => "SECTION_ID",
					"CACHE_TYPE" => "A",
					"CACHE_TIME" => "36000000",
					"CACHE_GROUPS" => "Y",
					"DISPLAY_COMPARE" => "N",
					"CACHE_FILTER" => "N",
					"PRICE_CODE" => array(
						0 => "BASE",
					),
					"USE_PRICE_COUNT" => "N",
					"SHOW_PRICE_COUNT" => "1",
					"PRICE_VAT_INCLUDE" => "Y",
					"CONVERT_CURRENCY" => "N",
					"BASKET_URL" => "/personal/basket.php",
					"ACTION_VARIABLE" => "action",
					"PRODUCT_ID_VARIABLE" => "id",
					"USE_PRODUCT_QUANTITY" => "N",
					"ADD_PROPERTIES_TO_BASKET" => "Y",
					"PRODUCT_PROPS_VARIABLE" => "prop",
					"PARTIAL_PRODUCT_PROPERTIES" => "N",
					"PRODUCT_PROPERTIES" => array(
						0 => "HIT",
						1 => "NEW",
						2 => "STOCK",
						3 => "RECOMMEND"
					),
					"OFFERS_CART_PROPERTIES" => array(
					),
					"PRODUCT_QUANTITY_VARIABLE" => "quantity"
					),
					false
				);?>
			</div>
		<?}?>
		<?if($arParams["ENABLE_NEWS"]){?>
			<div id="tabs-3">
				<?$GLOBALS["arrNewFilter"] = array("!PROPERTY_NEW" => false);?>
				<?$APPLICATION->IncludeComponent("bitrix:catalog.top", "uni_popular", array(
					"IBLOCK_TYPE" =>  $arParams["IBLOCK_TYPE"],
					"IBLOCK_ID" => $arParams["IBLOCK_ID"],
					"ELEMENT_SORT_FIELD" => "RAND",
					"ELEMENT_SORT_ORDER" => "asc",
					"ELEMENT_SORT_FIELD2" => "id",
					"ELEMENT_SORT_ORDER2" => "desc",
					"FILTER_NAME" => "arrNewFilter",
					"HIDE_NOT_AVAILABLE" => "N",
					"ELEMENT_COUNT" => "8",
					"LINE_ELEMENT_COUNT" => "4",
					"PROPERTY_CODE" => array(
						0 => "HIT",
						1 => "NEW",
						2 => "STOCK",
						3 => "RECOMMEND",
						4 => "",
					),
					"OFFERS_FIELD_CODE" => array(
						0 => "",
						1 => "",
					),
					"OFFERS_PROPERTY_CODE" => array(
						0 => "",
						1 => "",
					),
					"OFFERS_SORT_FIELD" => "sort",
					"OFFERS_SORT_ORDER" => "asc",
					"OFFERS_SORT_FIELD2" => "id",
					"OFFERS_SORT_ORDER2" => "desc",
					"OFFERS_LIMIT" => "6",
					"SECTION_URL" => "catalog/#SECTION_ID#/",
					"DETAIL_URL" => "catalog/#SECTION_ID#/#ELEMENT_ID#/",
					"SECTION_ID_VARIABLE" => "SECTION_ID",
					"CACHE_TYPE" => "A",
					"CACHE_TIME" => "36000000",
					"CACHE_GROUPS" => "Y",
					"DISPLAY_COMPARE" => "N",
					"CACHE_FILTER" => "N",
					"PRICE_CODE" => array(
						0 => "BASE",
					),
					"USE_PRICE_COUNT" => "N",
					"SHOW_PRICE_COUNT" => "1",
					"PRICE_VAT_INCLUDE" => "Y",
					"CONVERT_CURRENCY" => "N",
					"BASKET_URL" => "/personal/basket.php",
					"ACTION_VARIABLE" => "action",
					"PRODUCT_ID_VARIABLE" => "id",
					"USE_PRODUCT_QUANTITY" => "N",
					"ADD_PROPERTIES_TO_BASKET" => "Y",
					"PRODUCT_PROPS_VARIABLE" => "prop",
					"PARTIAL_PRODUCT_PROPERTIES" => "N",
					"PRODUCT_PROPERTIES" => array(
						0 => "HIT",
						1 => "NEW",
						2 => "STOCK",
						3 => "RECOMMEND"
					),
					"OFFERS_CART_PROPERTIES" => array(
					),
					"PRODUCT_QUANTITY_VARIABLE" => "quantity"
					),
					false
				);?>
			</div>
		<?}?>
		<?if($arParams["ENABLE_RECOMMEND"]){?>
			<div id="tabs-4">
				<?$GLOBALS["arrRecFilter"] = array("!PROPERTY_RECOMMEND" => false); ?>
				<?$APPLICATION->IncludeComponent("bitrix:catalog.top", "uni_popular_slider", Array(
	"IBLOCK_TYPE" => $arParams["IBLOCK_TYPE"],	// ��� ���������
		"IBLOCK_ID" => $arParams["IBLOCK_ID"],	// ��������
		"ELEMENT_SORT_FIELD" => "RAND",	// �� ������ ���� ��������� ��������
		"ELEMENT_SORT_ORDER" => "asc",	// ������� ���������� ���������
		"ELEMENT_SORT_FIELD2" => "id",	// ���� ��� ������ ���������� ���������
		"ELEMENT_SORT_ORDER2" => "desc",	// ������� ������ ���������� ���������
		"FILTER_NAME" => "arrRecFilter",	// ��� ������� �� ���������� ������� ��� ���������� ���������
		"HIDE_NOT_AVAILABLE" => "N",	// �� ���������� ������, ������� ��� �� �������
		"ELEMENT_COUNT" => "8",	// ���������� ��������� ���������
		"LINE_ELEMENT_COUNT" => "4",	// ���������� ��������� ��������� � ����� ������ �������
		"PROPERTY_CODE" => array(	// ��������
			0 => "HIT",
			1 => "NEW",
			2 => "STOCK",
			3 => "RECOMMEND",
			4 => "",
		),
		"OFFERS_FIELD_CODE" => array(
			0 => "",
			1 => "",
		),
		"OFFERS_PROPERTY_CODE" => array(
			0 => "",
			1 => "",
		),
		"OFFERS_SORT_FIELD" => "sort",
		"OFFERS_SORT_ORDER" => "asc",
		"OFFERS_SORT_FIELD2" => "id",
		"OFFERS_SORT_ORDER2" => "desc",
		"OFFERS_LIMIT" => "6",	// ������������ ���������� ����������� ��� ������ (0 - ���)
		"SECTION_URL" => "catalog/#SECTION_ID#/",	// URL, ������� �� �������� � ���������� �������
		"DETAIL_URL" => "catalog/#SECTION_ID#/#ELEMENT_ID#/",	// URL, ������� �� �������� � ���������� �������� �������
		"SECTION_ID_VARIABLE" => "SECTION_ID",	// �������� ����������, � ������� ���������� ��� ������
		"CACHE_TYPE" => "A",	// ��� �����������
		"CACHE_TIME" => "36000000",	// ����� ����������� (���.)
		"CACHE_GROUPS" => "Y",	// ��������� ����� �������
		"DISPLAY_COMPARE" => "N",	// ��������� ��������� �������
		"CACHE_FILTER" => "N",	// ���������� ��� ������������� �������
		"PRICE_CODE" => array(	// ��� ����
			0 => "BASE",
		),
		"USE_PRICE_COUNT" => "N",	// ������������ ����� ��� � �����������
		"SHOW_PRICE_COUNT" => "1",	// �������� ���� ��� ����������
		"PRICE_VAT_INCLUDE" => "Y",	// �������� ��� � ����
		"CONVERT_CURRENCY" => "N",	// ���������� ���� � ����� ������
		"BASKET_URL" => "/personal/basket.php",	// URL, ������� �� �������� � �������� ����������
		"ACTION_VARIABLE" => "action",	// �������� ����������, � ������� ���������� ��������
		"PRODUCT_ID_VARIABLE" => "id",	// �������� ����������, � ������� ���������� ��� ������ ��� �������
		"USE_PRODUCT_QUANTITY" => "N",	// ��������� �������� ���������� ������
		"ADD_PROPERTIES_TO_BASKET" => "Y",	// ��������� � ������� �������� ������� � �����������
		"PRODUCT_PROPS_VARIABLE" => "prop",	// �������� ����������, � ������� ���������� �������������� ������
		"PARTIAL_PRODUCT_PROPERTIES" => "N",	// ��������� ��������� � ������� ������, � ������� ��������� �� ��� ��������������
		"PRODUCT_PROPERTIES" => array(	// �������������� ������
			0 => "HIT",
			1 => "NEW",
			2 => "STOCK",
			3 => "RECOMMEND",
		),
		"OFFERS_CART_PROPERTIES" => "",
		"PRODUCT_QUANTITY_VARIABLE" => "quantity",	// �������� ����������, � ������� ���������� ���������� ������
	),
	false
);?>
			</div>
		<?}?>
	</div>
</div>
<script>
$(document).ready(function(){
	$("#tabs_block").tabs();
})
</script>