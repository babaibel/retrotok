<?
if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();

global $APPLICATION;

if (!$GLOBALS["USER"]->IsAuthorized()) {
	$aMenuLinks = Array(
		Array(
			"��� ������", 
			SITE_DIR."personal/profile/", 
			Array(), 
			Array(), 
			"" 
		),
		Array(
			"������� �������", 
			SITE_DIR."personal/order/", 
			Array(), 
			Array(), 
			"" 
		),
		Array(
			"�������� ������", 
			SITE_DIR."personal/change_psw/", 
			Array(), 
			Array(), 
			"" 
		),
		Array(
			"���������� ���������", 
			SITE_DIR."personal/subscribe/", 
			Array(), 
			Array(), 
			"" 
		)
	);
} else {
	$aMenuLinks = Array(
		Array(
			"��� ������", 
			SITE_DIR."personal/profile/", 
			Array(), 
			Array(), 
			"" 
		),
		Array(
			"������� �������", 
			SITE_DIR."personal/order/", 
			Array(), 
			Array(), 
			"" 
		),
		Array(
			"�������� ������", 
			SITE_DIR."personal/change_psw/", 
			Array(), 
			Array(), 
			"" 
		),
		Array(
			"���������� ���������", 
			SITE_DIR."personal/subscribe/", 
			Array(), 
			Array(), 
			"" 
		),
		Array(
			"�����", 
			SITE_DIR."personal/?logout=yes", 
			Array(), 
			Array(), 
			"" 
		)
	);
}
?>