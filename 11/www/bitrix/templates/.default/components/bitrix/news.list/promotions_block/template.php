<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
/** @var array $arParams */
/** @var array $arResult */
/** @global CMain $APPLICATION */
/** @global CUser $USER */
/** @global CDatabase $DB */
/** @var CBitrixComponentTemplate $this */
/** @var string $templateName */
/** @var string $templateFile */
/** @var string $templateFolder */
/** @var string $componentPath */
/** @var CBitrixComponent $component */
$this->setFrameMode(true);
?>

<!--<div class="sb_action">-->
<!--    <a href=""><img src="/bitrix/templates/.default/content/11.png" alt=""/></a>-->
<!--    <h4>Акция</h4>-->
<!--    <h5><a href="">Мебельная полка всего за 560 Р</a></h5>-->
<!--    <a href="" class="sb_action_more">Подробнее &rarr;</a>-->
<!--</div>-->

<?foreach($arResult["ITEMS"] as $arItem):?>
    <div class="sb_action">
        <?if(is_array($arItem["PREVIEW_PICTURE"])):?>
        <?endif;?>
        <a href="<?=$arItem["DETAIL_PAGE_URL"]?>"><img src="<?=$arItem["PREVIEW_PICTURE"]["SRC"]?>"alt=""/></a>
        <h4><?echo $arItem["NAME"]?></h4>
        <h5><a href=""><?echo $arItem["PREVIEW_TEXT"];?> <?=$arItem["PROPERTIES"]["PRICE"]["VALUE"]?></a></h5>
        <a href="<?=$arItem["DETAIL_PAGE_URL"]?>" class="sb_action_more">Подробнее &rarr;</a>
    </div>
<?endforeach;?>


