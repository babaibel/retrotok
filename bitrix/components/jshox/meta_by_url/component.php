<?php
CModule::IncludeModule("iblock");
$url_iblock_id = 23;
$url = trim($_SERVER['REQUEST_URI']);

// Сразу выставим тайтл
$APPLICATION->SetPageProperty('title', $APPLICATION->GetTitle());

$arSelect = Array("ID", "IBLOCK_ID", "NAME", "PROPERTY_*");
$arFilter = Array("IBLOCK_ID" => $url_iblock_id, "CODE" => $url, "ACTIVE" => "Y");
$res = CIBlockElement::GetList(Array(), $arFilter, false, Array("nTopCount" => 1), $arSelect);
if ($ob = $res->GetNextElement()) {
	$arFields = $ob->GetFields();
	$arProps = $ob->GetProperties();

	if (!empty($arProps['TITLE']['VALUE'])) {
		$APPLICATION->SetPageProperty("title", $arProps['TITLE']['VALUE']);
		$APPLICATION->SetTitle($arProps['TITLE']['VALUE']);
	}

	if (!empty($arProps['DESCRIPTION']['VALUE'])) {
		$APPLICATION->SetPageProperty("description", $arProps['DESCRIPTION']['VALUE']);
	}

	if (!empty($arProps['HEADER_TEXT']['~VALUE']['TEXT'])) {
		$APPLICATION->SetPageProperty("headertext", $arProps['HEADER_TEXT']['~VALUE']['TEXT']);
	}

	if (!empty($arProps['FOOTER_TEXT']['~VALUE']['TEXT'])) {
		$APPLICATION->SetPageProperty("footertext", $arProps['FOOTER_TEXT']['~VALUE']['TEXT']);
	}

}


if (!empty($arProps['H1']['VALUE'])) {
	$APPLICATION->SetPageProperty('h1', $arProps['H1']['VALUE']);
} elseif (!($APPLICATION->GetPageProperty('h1'))) {
	$APPLICATION->SetPageProperty('h1', $APPLICATION->GetTitle());
}

// $this->IncludeComponentTemplate();

?>