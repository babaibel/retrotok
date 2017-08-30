<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Корзина");
?><?$APPLICATION->IncludeComponent(
	"bitrix:sale.basket.basket", 
	"basket", 
	array(
		"COLUMNS_LIST" => array(
			0 => "NAME",
			1 => "PROPS",
			2 => "DELETE",
			3 => "DELAY",
			4 => "PRICE",
			5 => "QUANTITY",
			6 => "SUM",
		),
		"PATH_TO_ORDER" => SITE_DIR."personal/order/make/",
		"HIDE_COUPON" => "N",
		"PRICE_VAT_SHOW_VALUE" => "Y",
		"COUNT_DISCOUNT_4_ALL_QUANTITY" => "Y",
		"USE_PREPAYMENT" => "Y",
		"QUANTITY_FLOAT" => "Y",
		"SET_TITLE" => "Y",
		"ACTION_VARIABLE" => "action",
		"OFFERS_PROPS" => array(
			0 => "BRAND",
			1 => "SIZE",
			2 => "COLOR",
		),
		"COMPONENT_TEMPLATE" => "basket"
	),
	false
);?>
<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>