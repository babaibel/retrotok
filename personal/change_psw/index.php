<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("�������� ������");
?>
<?$APPLICATION->IncludeComponent("bitrix:main.profile", "change_psw", Array(
	"AJAX_MODE" => "Y",	// �������� ����� AJAX
		"AJAX_OPTION_JUMP" => "N",	// �������� ��������� � ������ ����������
		"AJAX_OPTION_STYLE" => "Y",	// �������� ��������� ������
		"AJAX_OPTION_HISTORY" => "N",	// �������� �������� ��������� ��������
		"SET_TITLE" => "N",	// ������������� ��������� ��������
		"USER_PROPERTY" => "",	// ���������� ���. ��������
		"SEND_INFO" => "N",	// ������������ �������� �������
		"CHECK_RIGHTS" => "N",	// ��������� ����� �������
		"USER_PROPERTY_NAME" => "",	// �������� �������� � ���. ����������
		"AJAX_OPTION_ADDITIONAL" => "",	// �������������� �������������
	),
	false
);?><?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>