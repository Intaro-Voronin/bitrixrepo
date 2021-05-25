<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("тестовая страница");
?><?$APPLICATION->IncludeComponent("bitrix:search.form", "head", Array(
	"PAGE" => "#SITE_DIR#search/index.php",	// Страница выдачи результатов поиска (доступен макрос #SITE_DIR#)
		"USE_SUGGEST" => "N",	// Показывать подсказку с поисковыми фразами
	),
	false
);?><?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>