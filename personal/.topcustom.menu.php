<?
if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();

global $APPLICATION;

if (!$GLOBALS["USER"]->IsAuthorized()) {
	$aMenuLinks = Array(
		Array(
			"Мои данные", 
			SITE_DIR."personal/profile/", 
			Array(), 
			Array(), 
			"" 
		),
		Array(
			"История покупок", 
			SITE_DIR."personal/order/", 
			Array(), 
			Array(), 
			"" 
		),
		Array(
			"Изменить пароль", 
			SITE_DIR."personal/change_psw/", 
			Array(), 
			Array(), 
			"" 
		),
		Array(
			"Управление подпиской", 
			SITE_DIR."personal/subscribe/", 
			Array(), 
			Array(), 
			"" 
		)
	);
} else {
	$aMenuLinks = Array(
		Array(
			"Мои данные", 
			SITE_DIR."personal/profile/", 
			Array(), 
			Array(), 
			"" 
		),
		Array(
			"История покупок", 
			SITE_DIR."personal/order/", 
			Array(), 
			Array(), 
			"" 
		),
		Array(
			"Изменить пароль", 
			SITE_DIR."personal/change_psw/", 
			Array(), 
			Array(), 
			"" 
		),
		Array(
			"Управление подпиской", 
			SITE_DIR."personal/subscribe/", 
			Array(), 
			Array(), 
			"" 
		),
		Array(
			"Выйти", 
			SITE_DIR."personal/?logout=yes", 
			Array(), 
			Array(), 
			"" 
		)
	);
}
?>