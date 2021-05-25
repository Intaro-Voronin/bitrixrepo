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

<?foreach($arResult["ITEMS"] as $arItem):?>
<div class="sb_reviewed">
    <a href="<?=$arItem["DETAIL_PAGE_URL"]?>"><img src="<?=$arItem["PREVIEW_PICTURE"]["SRC"]?>" class="sb_rw_avatar" alt=""/></a>
    <span class="sb_rw_name"><?echo $arItem["NAME"]?></span>
    <span class="sb_rw_job"><?=$arItem["PROPERTIES"]["POSITION"]["VALUE"]?> <?=$arItem["PROPERTIES"]["COMPANYNAME"]["VALUE"]?></span>
    <p><?echo $arItem["PREVIEW_TEXT"];?></p>
    <div class="clearboth"></div>
    <div class="sb_rw_arrow"></div>
</div>
<?endforeach;?>
