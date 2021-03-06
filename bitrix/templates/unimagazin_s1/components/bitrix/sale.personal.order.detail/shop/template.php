<?if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>
<div class="zakaz_detail">
&laquo;&nbsp;<a class="back_to_list" href="<?=$arResult["URL_TO_LIST"]?>"><?=GetMessage("SPOD_RECORDS_LIST")?></a>
<div class="zag_zakaz"><?=GetMessage("HEAD_TITLE")?>&nbsp;�&nbsp;<?=$arResult["ID"]?>&nbsp;</div>
<?if( strlen($arResult["ERROR_MESSAGE"]) <= 0 ){?>
	<table class="table-standart">
	<tr>
		<th colspan="2" align="center"><b><?=GetMessage("SPOD_ORDER_NO")?>&nbsp;<?=$arResult["ID"]?>&nbsp;<?=GetMessage("SPOD_FROM")?> <?=$arResult["DATE_INSERT"] ?></b></th>
	</tr>
	<tr>
		<td align="left" width="40%"><?echo GetMessage("SPOD_ORDER_STATUS")?></td>
		<td width="60%"><?=$arResult["STATUS"]["NAME"]?><?=GetMessage("SPOD_ORDER_FROM")?><?=$arResult["DATE_STATUS"]?>)</td>
	</tr>
	<tr>
		<td align="left" width="40%"><?=GetMessage("P_ORDER_PRICE")?>:</td>
		<td width="60%"><?
				echo "<b>".$arResult["PRICE_FORMATED"]."</b>";
				if (DoubleVal($arResult["SUM_PAID"]) > 0)
					echo " (".GetMessage("SPOD_ALREADY_PAID")."&nbsp;<b>".$arResult["SUM_PAID_FORMATED"]."</b>)";
				?></td>
	</tr>
	<tr>
		<td align="left" width="40%"><?= GetMessage("P_ORDER_CANCELED") ?>:</td>
		<td width="60%"><?
			echo (($arResult["CANCELED"] == "Y") ? GetMessage("SALE_YES") : GetMessage("SALE_NO"));
			if ($arResult["CANCELED"] == "Y"){
				echo GetMessage("SPOD_ORDER_FROM").$arResult["DATE_CANCELED"].")";
				if (strlen($arResult["REASON_CANCELED"]) > 0)
					echo "<br />".$arResult["REASON_CANCELED"];
			}elseif ($arResult["CAN_CANCEL"]=="Y"){
				?>&nbsp;<a href="<?=$arResult["URL_TO_CANCEL"]?>"><?=GetMessage("SALE_CANCEL_ORDER")?>&gt;&gt;</a><?
			}
			?></td>
	</tr>
	<tr>
		<td align="left" colspan="2"><img src="/bitrix/images/1.gif" width="1" height="8"></td>
	</tr>
	<?if( IntVal($arResult["USER_ID"]) > 0 ){?>
		<tr>
			<th colspan="2"><b><?echo GetMessage("SPOD_ACCOUNT_DATA")?></b></th>
		</tr>
		<tr>
			<td align="left" width="40%"><?= GetMessage("SPOD_ACCOUNT") ?>:</td>
			<td width="60%"><?=$arResult["USER_NAME"]?></td>
		</tr>
		<tr>
			<td align="left" width="40%"><?= GetMessage("SPOD_LOGIN") ?>:</td>
			<td width="60%"><?=$arResult["USER"]["LOGIN"]?></td>
		</tr>
		<tr>
			<td align="left" width="40%"><?echo GetMessage("SPOD_EMAIL")?></td>
			<td width="60%"><a href="mailto:<?=$arResult["USER"]["EMAIL"]?>"><?=$arResult["USER"]["EMAIL"]?></a></td>
		</tr>
		<tr>
			<td align="left" colspan="2"><img src="/bitrix/images/1.gif" width="1" height="8"></td>
		</tr>
	<?}?>
	<tr>
		<th colspan="2" align="center"><b><?=GetMessage("P_ORDER_USER")?></b></th>
	</tr>
	<tr>
		<td align="left" width="40%"><?=GetMessage("P_ORDER_PERS_TYPE")?>:</td>
		<td width="60%"><?=$arResult["PERSON_TYPE"]["NAME"]?></td>
	</tr>
	<?if(!empty($arResult["ORDER_PROPS"])){
		foreach($arResult["ORDER_PROPS"] as $val){
			if ($val["SHOW_GROUP_NAME"] == "Y"){?>
				<tr>
					<td colspan="2" align="center"><b><?=$val["GROUP_NAME"];?></b></td>
				</tr>
			<?}?>
			<tr>
				<td width="40%" align="left"><?echo $val["NAME"] ?>:</td>
				<td width="60%"><?
					if ($val["TYPE"] == "CHECKBOX")
					{
						if ($val["VALUE"] == "Y")
							echo GetMessage("SALE_YES");
						else
							echo GetMessage("SALE_NO");
					}
					else
						echo $val["VALUE"];
					?></td>
			</tr>
		<?}
	}
	if( strlen($arResult["USER_DESCRIPTION"]) > 0 ){
		?>
		<tr>
			<td align="left" colspan="2">
				<img src="/bitrix/images/1.gif" width="1" height="8">
			</td>
		</tr>
		<tr>
			<td align="left" width="40%"><?=GetMessage("P_ORDER_USER_COMMENT")?>:</td>
			<td width="60%"><?=$arResult["USER_DESCRIPTION"]?></td>
		</tr>
		<?
	}	
	?>
	<tr>
		<td align="left" colspan="2">
			<img src="/bitrix/images/1.gif" width="1" height="8">
		</td>
	</tr>

	<tr>
		<th colspan="2"><b><?=GetMessage("P_ORDER_PAYMENT")?></b></th>
	</tr>
	<tr>
		<td align="left" width="40%"><?=GetMessage("P_ORDER_PAY_SYSTEM")?>:</td>
		<td width="60%"><?
			if (IntVal($arResult["PAY_SYSTEM_ID"]) > 0)
				echo $arResult["PAY_SYSTEM"]["NAME"];
			else
				echo GetMessage("SPOD_NONE");
			?></td>
	</tr>
	<tr>
		<td align="left" width="40%"><?echo GetMessage("P_ORDER_PAYED") ?>:</td>
		<td width="60%">			
			<?
			echo (($arResult["PAYED"] == "Y") ? GetMessage("SALE_YES") : GetMessage("SALE_NO"));
			if ($arResult["PAYED"] == "Y")
				echo GetMessage("SPOD_ORDER_FROM").$arResult["DATE_PAYED"].")";
			?>
			
		</td>
	</tr>
	<?if ($arResult["CAN_REPAY"]=="Y"){
		?>
		<tr>
			<td colspan="2" align="center">
				<?
				if ($arResult["PAY_SYSTEM"]["PSA_NEW_WINDOW"] == "Y")
				{
					?>
					<a href="<?=$arResult["PAY_SYSTEM"]["PSA_ACTION_FILE"]?>" target="_blank"><?=GetMessage("SALE_REPEAT_PAY")?></a>
					<?
				}
				else
				{
					$ORDER_ID = $ID;
					include($arResult["PAY_SYSTEM"]["PSA_ACTION_FILE"]);
				}
				?>
			</td>
		</tr>
		<?
	}
	?>
	<tr>
		<td align="left" colspan="2">
			<img src="/bitrix/images/1.gif" width="1" height="8">
		</td>
	</tr>

	<tr>
		<th colspan="2" align="center"><b><?= GetMessage("P_ORDER_DELIVERY")?></b></th>
	</tr>
	<tr>
		<td align="left" width="40%"><?=GetMessage("P_ORDER_DELIVERY")?>:</td>
		<td width="60%"><?
			if (strpos($arResult["DELIVERY_ID"], ":") !== false || IntVal($arResult["DELIVERY_ID"]) > 0)
			{
				echo $arResult["DELIVERY"]["NAME"];
			}
			else
			{
				echo GetMessage("SPOD_NONE");
			}
			?></td>
	</tr>
	<tr>
		<td align="left" colspan="2">
			<img src="/bitrix/images/1.gif" width="1" height="8">
		</td>
	</tr>

	<tr>
		<th colspan="2" align="center"><b><?=GetMessage("P_ORDER_BASKET")?></b></th>
	</tr>
</table>
<table class="table-standart order_structure">
				<tr>
					<th class="order_item_name"><?= GetMessage("SPOD_NAME") ?></th>
					<th class="order_item_props"><?= GetMessage("SPOD_PROPS") ?></th>
					<th class="order_item_discount"><?= GetMessage("SPOD_DISCOUNT") ?></th>
					<th class="order_item_price_type"><?= GetMessage("SPOD_PRICETYPE") ?></th>
					<th class="order_item_quantity"><?= GetMessage("SPOD_QUANTITY") ?></th>
					<th class="order_item_price"><?= GetMessage("SPOD_PRICE") ?></th>
				</tr>
				<?
				foreach($arResult["BASKET"] as $val)
				{
					?>
					<tr>
						<td  class="order_item_name"><?
							if (strlen($val["DETAIL_PAGE_URL"])>0)
								echo "<a href=\"".$val["DETAIL_PAGE_URL"]."\">";
							echo htmlspecialcharsEx($val["NAME"]);
							if (strlen($val["DETAIL_PAGE_URL"])>0)
								echo "</a>";
							?><span class="order_item_quantity_small">, <b><?=$val["QUANTITY"]?> <?=GetMessage("QUANTITY_MEASURE");?></b></span></td>
						<td class="order_item_props"> <?
							if( !empty($val["PROPS"]) ){?>
								<table cellspacing="0">
								<?
								foreach($val["PROPS"] as $vv) 
								{
										?>
										<tr>
											<td style="border:0px; padding:1px;"><?=$vv["NAME"]?>:</td>
											<td style="border:0px; padding:1px;"><?=$vv["VALUE"]?></td>
										</tr>
										<?
								}
								?>
								</table>
							<?}?></td>
						<td class="order_item_discount"><?=$val["DISCOUNT_PRICE_PERCENT_FORMATED"]?></td>
						<td class="order_item_price_type"><?=htmlspecialcharsEx($val["NOTES"])?></td>
						<td class="order_item_quantity"><?=$val["QUANTITY"]?></td>
						<td class="order_item_price" align="right"><?=$val["PRICE_FORMATED"]?></td>
					</tr>
					<?
				}
				?>
				<?if(strlen($arResult["DISCOUNT_VALUE_FORMATED"]) > 0){?>
				<tr>
					<td align="left"><b><?=GetMessage("SPOD_DISCOUNT")?>:</b></td>
					<td align="left" colspan="5"><?=$arResult["DISCOUNT_VALUE_FORMATED"]?></td>
				</tr>
				<?}?>
				<?
				foreach($arResult["TAX_LIST"] as $val)
				{
					?>
					<tr>
						<td align="left"><?
							echo $val["TAX_NAME"];
							echo $val["VALUE_FORMATED"];
							?>:</td>
						<td align="left" colspan="5z"><?=$val["VALUE_MONEY_FORMATED"]?></td>
					</tr>
					<?
				}
				?>
				<?if(strlen($arResult["TAX_VALUE_FORMATED"]) > 0){?>
				<tr>
					<td align="left"><b><?=GetMessage("SPOD_TAX")?>:</b></td>
					<td align="left" colspan="5"><?=$arResult["TAX_VALUE_FORMATED"]?></td>
				</tr>
				<?}?>
				<?if(strlen($arResult["PRICE_DELIVERY_FORMATED"]) > 0){?>
				<tr>
					<td align="left"><b><?=GetMessage("SPOD_DELIVERY")?>:</b></td>
					<td align="left" colspan="5"><?=$arResult["PRICE_DELIVERY_FORMATED"]?></td>
				</tr>
				<?}?>
				<tr>
					<td align="left"><b><?=GetMessage("SPOD_ITOG")?>:</b></td>
					<td align="left" colspan="5"><?=$arResult["PRICE_FORMATED"]?></td>
				</tr>
			</table>
<?}else{?>
	<?=ShowError($arResult["ERROR_MESSAGE"]);?>
<?}?>
</div>
