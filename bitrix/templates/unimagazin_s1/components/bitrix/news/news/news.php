<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>
<?$this->setFrameMode(true)?>
<?
	$sort = isset($_GET['sort']) ? $_GET['sort'] : 'ACTIVE_FROM';
	$order = isset($_GET['order']) ? $_GET['order'] : null;
	$orderInverted = null;
	
	if ($order == 'asc') {
		$orderInverted = 'desc';
	} else {
		$order = 'desc';
		$orderInverted = 'asc';
	}
?>
<div class="uni-panel-sort">
	<div class="sort">		
        <div class="uni-aligner-vertical"></div>
		<div class="values">
			<div class="value<?= $sort == 'NAME' ? ' ui-state-active' : '' ?>">
				<a rel="nofollow" href="<?= $APPLICATION->GetCurPageParam(
					'sort=NAME&order='.$orderInverted,
					array('sort','order'),
					false
				) ?>">
                    <?= GetMessage("news.1.sort.name") ?>
					<div class="icon <?= $order ?>"></div>
				</a>
			</div>
			<div class="value<?= $sort == 'ACTIVE_FROM' ? ' ui-state-active' : '' ?>">
				<a rel="nofollow" href="<?= $APPLICATION->GetCurPageParam(
					'sort=ACTIVE_FROM&order='.$orderInverted,
					array('sort','order'),
					false
				) ?>">
					<?= GetMessage("news.1.sort.date") ?>
					<div class="icon <?= $order ?>"></div>
				</a>
			</div>
		</div>
		<div class="clear"></div>
	</div>
</div>
<div class="uni-indents-vertical indent-40"></div>
<?$APPLICATION->IncludeComponent(
	"bitrix:news.list",
	"",
	Array(
		"IBLOCK_TYPE"	=>	$arParams["IBLOCK_TYPE"],
		"IBLOCK_ID"	=>	$arParams["IBLOCK_ID"],
		"SORT_BY1" => $sort,
		"SORT_ORDER1" => $order,
		"NEWS_COUNT"	=>	$arParams["NEWS_COUNT"],
		"SORT_BY2"	=>	$arParams["SORT_BY2"],
		"SORT_ORDER2"	=>	$arParams["SORT_ORDER2"],
		"FIELD_CODE"	=>	$arParams["LIST_FIELD_CODE"],
		"PROPERTY_CODE"	=>	$arParams["LIST_PROPERTY_CODE"],
		"DETAIL_URL"	=>	$arResult["FOLDER"].$arResult["URL_TEMPLATES"]["detail"],
		"DISPLAY_PANEL"	=>	$arParams["DISPLAY_PANEL"],
		"SET_TITLE"	=>	$arParams["SET_TITLE"],
		"SET_STATUS_404" => $arParams["SET_STATUS_404"],
		"INCLUDE_IBLOCK_INTO_CHAIN"	=>	$arParams["INCLUDE_IBLOCK_INTO_CHAIN"],
		"CACHE_TYPE"	=>	$arParams["CACHE_TYPE"],
		"CACHE_TIME"	=>	$arParams["CACHE_TIME"],
		"CACHE_FILTER"	=>	$arParams["CACHE_FILTER"],
		"CACHE_GROUPS" => $arParams["CACHE_GROUPS"],
		"DISPLAY_TOP_PAGER"	=>	$arParams["DISPLAY_TOP_PAGER"],
		"DISPLAY_BOTTOM_PAGER"	=>	$arParams["DISPLAY_BOTTOM_PAGER"],
		"PAGER_TITLE"	=>	$arParams["PAGER_TITLE"],
		"PAGER_TEMPLATE"	=>	$arParams["PAGER_TEMPLATE"],
		"PAGER_SHOW_ALWAYS"	=>	$arParams["PAGER_SHOW_ALWAYS"],
		"PAGER_DESC_NUMBERING"	=>	$arParams["PAGER_DESC_NUMBERING"],
		"PAGER_DESC_NUMBERING_CACHE_TIME"	=>	$arParams["PAGER_DESC_NUMBERING_CACHE_TIME"],
		"PAGER_SHOW_ALL" => $arParams["PAGER_SHOW_ALL"],
		"DISPLAY_DATE"	=>	$arParams["DISPLAY_DATE"],
		"DISPLAY_NAME"	=>	"Y",
		"DISPLAY_PICTURE"	=>	$arParams["DISPLAY_PICTURE"],
		"DISPLAY_PREVIEW_TEXT"	=>	$arParams["DISPLAY_PREVIEW_TEXT"],
		"PREVIEW_TRUNCATE_LEN"	=>	$arParams["PREVIEW_TRUNCATE_LEN"],
		"ACTIVE_DATE_FORMAT"	=>	$arParams["LIST_ACTIVE_DATE_FORMAT"],
		"USE_PERMISSIONS"	=>	$arParams["USE_PERMISSIONS"],
		"GROUP_PERMISSIONS"	=>	$arParams["GROUP_PERMISSIONS"],
		"FILTER_NAME"	=>	$arParams["FILTER_NAME"],
		"HIDE_LINK_WHEN_NO_DETAIL"	=>	$arParams["HIDE_LINK_WHEN_NO_DETAIL"],
		"CHECK_DATES"	=>	$arParams["CHECK_DATES"],
	),
	$component
);?>
<div class="uni-indents-vertical indent-20"></div>