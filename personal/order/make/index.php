<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("������");
?><?$APPLICATION->IncludeComponent(
	"bitrix:sale.order.ajax", 
	"order", 
	array(
		"PAY_FROM_ACCOUNT" => "N",
		"ONLY_FULL_PAY_FROM_ACCOUNT" => "N",
		"COUNT_DELIVERY_TAX" => "N",
		"ALLOW_AUTO_REGISTER" => "Y",
		"SEND_NEW_USER_NOTIFY" => "Y",
		"DELIVERY_NO_AJAX" => "N",
		"DELIVERY_NO_SESSION" => "N",
		"TEMPLATE_LOCATION" => "popup",
		"DELIVERY_TO_PAYSYSTEM" => "p2d",
		"USE_PREPAYMENT" => "N",
		"PROP_1" => "",
		"PROP_3" => "",
		"PROP_2" => "",
		"PROP_4" => "",
		"ALLOW_NEW_PROFILE" => "Y",
		"SHOW_PAYMENT_SERVICES_NAMES" => "Y",
		"SHOW_STORES_IMAGES" => "N",
		"PATH_TO_BASKET" => SITE_DIR."personal/cart/",
		"PATH_TO_PERSONAL" => SITE_DIR."personal/order/",
		"PATH_TO_PAYMENT" => SITE_DIR."personal/order/payment/",
		"PATH_TO_AUTH" => SITE_DIR."auth/",
		"SET_TITLE" => "Y",
		"PRODUCT_COLUMNS" => "",
		"DISABLE_BASKET_REDIRECT" => "N",
		"COMPONENT_TEMPLATE" => "order",
		"ALLOW_APPEND_ORDER" => "Y",
		"SHOW_NOT_CALCULATED_DELIVERIES" => "L",
		"SHOW_VAT_PRICE" => "Y",
		"COMPATIBLE_MODE" => "Y",
		"USE_PRELOAD" => "Y",
		"ACTION_VARIABLE" => "action",
		"PRODUCT_COLUMNS_VISIBLE" => array(
			0 => "PREVIEW_PICTURE",
			1 => "PROPS",
		),
		"ADDITIONAL_PICT_PROP_4" => "-",
		"ADDITIONAL_PICT_PROP_16" => "-",
		"BASKET_IMAGES_SCALING" => "adaptive",
		"COMPOSITE_FRAME_MODE" => "A",
		"COMPOSITE_FRAME_TYPE" => "AUTO"
	),
	false
);?><?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>