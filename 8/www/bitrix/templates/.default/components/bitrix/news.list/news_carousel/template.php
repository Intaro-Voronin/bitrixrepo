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

<div class="rw_slider">
<h4>Отзывы</h4>
<ul id="foo">
<?foreach($arResult["ITEMS"] as $arItem):?>
    <li>
        <div class="rw_message">
			<?if(is_array($arItem["PREVIEW_PICTURE"])):?>
			<?endif;?>
            <img src="<?=$arItem["PREVIEW_PICTURE"]["SRC"]?>" class="rw_avatar" alt=""/>
            <span class="rw_name"><?echo $arItem["NAME"]?></span>
            <span class="rw_job"><?=$arItem["PROPERTIES"]["POSITION"]["VALUE"]?> <?=$arItem["PROPERTIES"]["COMPANYNAME"]["VALUE"]?></span>
            <!-- <span class="rw_job"></span> -->
            <p><?echo $arItem["PREVIEW_TEXT"];?></p>
            <div class="clearboth"></div>
            <div class="rw_arrow"></div>
        </div>
    </li>
<?endforeach;?>
</ul>
<div id="rwprev"></div>
<div id="rwnext"></div>
<a href="/company/reviews/" class="rw_allreviewed">Все отзывы</a>
</div>