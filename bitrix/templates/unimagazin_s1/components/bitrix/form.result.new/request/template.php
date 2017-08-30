<?
if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
?>
<div class="form_feedback_under1">

<?=$arResult["FORM_NOTE"]?>

<?if ($arResult["isFormNote"] != "Y")
{
?>
<?=$arResult["FORM_HEADER"]?>
<div class="form_feedback1">
<?

/***********************************************************************************
					form header
***********************************************************************************/
if ($arResult["isFormDescription"] == "Y" || $arResult["isFormTitle"] == "Y" || $arResult["isFormImage"] == "Y")
{
	if ($arResult["isFormTitle"]){?>
		<div class="header_grey"><?=$arResult["FORM_TITLE"]?></div>
	<?}?>
	<?if ($arResult["isFormTitle"]){?>
		<div class="decription_form"><?=$arResult["FORM_DESCRIPTION"]?></div>
	<?}?>
<?}?>
<div class="errors" style="display:none;">
	<?=GetMessage("ERROR_MESSAGE");?>
</div>
<?if ($arResult["isFormErrors"] == "Y"):?><?=$arResult["FORM_ERRORS_TEXT"];?><?endif;
/***********************************************************************************
						form questions
***********************************************************************************/
?>
<?foreach ($arResult["QUESTIONS"] as $FIELD_SID => $arQuestion)
{
	if ($arQuestion['STRUCTURE'][0]['FIELD_TYPE'] == 'hidden'){
		echo $arQuestion["HTML_CODE"];
	}
	else{?>	
	<div class="controls">
		
		<div class="input">
			<input type="<?=$arQuestion["STRUCTURE"][0]["FIELD_TYPE"]?>" class="inputtext" name="form_<?=$arQuestion["STRUCTURE"][0]["FIELD_TYPE"]."_".$arQuestion["STRUCTURE"][0]["ID"]?>" placeholder="<?=$arQuestion["CAPTION"]?>"> </input>
		</div>
	</div>	
	<?}
} //endwhile
?>
<?
if($arResult["isUseCaptcha"] == "Y")
{
?>
	<div class="controls">
		<div class="captcha_form">
			<label><?=GetMessage("CAPTCHA_TEXT")?></label>	
			<div class="input">		
			<input type="hidden" name="captcha_sid" value="<?=htmlspecialcharsbx($arResult["CAPTCHACode"]);?>" />
			<input type="text" name="captcha_word" size="30" maxlength="50" value="" class="inputtext" />
			<img src="/bitrix/tools/captcha.php?captcha_sid=<?=htmlspecialcharsbx($arResult["CAPTCHACode"]);?>"/>		
			</div>
		</div>
	</div>
<?
} // isUseCaptcha
?>
<div class="buttons clearfix">
	<input class="solid_button" <?=(intval($arResult["F_RIGHT"]) < 10 ? "disabled=\"disabled\"" : "");?> type="submit" name="web_form_submit" value="<?=htmlspecialcharsbx(strlen(trim($arResult["arForm"]["BUTTON"])) <= 0 ? GetMessage("FORM_ADD") : $arResult["arForm"]["BUTTON"]);?>" onclick="SendAndTestForm(event)"/>
	<div class="consent">
		<a href="/consent" target="_blank">
		<input type="checkbox" id="consent" checked disabled>
		<label>
			<?=GetMessage("CONSENT")?>
		</label>
		</a>
	</div>
</div>
<div>	
</div>

</div>
<?=$arResult["FORM_FOOTER"]?>
<?
} //endif (isFormNote)
?>
</div>
<script type="text/javascript">
	function SendAndTestForm(e){
		var flagrequared=1;
		$('.starrequired').each(function(i,el){	
			var element=$(el).parent().parent().find('input,textarea');			
			if(element.val()==''){
				element.addClass('nofill');
				flagrequared=0;
			}else{
				element.removeClass('nofill');
			}
		})
		if($('.captcha_form').find('input.inputtext').val()==""){
			$('.captcha_form').find('input.inputtext').addClass('nofill');
			flagrequared=0;
		}else{
			$('.captcha_form').find('input.inputtext').removeClass('nofill');
		}
		if(!flagrequared){
			$('.errors').show();
			e.preventDefault();
		}
	}
	$(document).ready(function(){
		$('.close_button').click(function(){
			$('.bx_popup_close').trigger('click');
		});
	})
</script>