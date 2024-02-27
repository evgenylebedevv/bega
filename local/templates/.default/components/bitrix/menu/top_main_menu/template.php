<? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die(); ?>

<? if (!empty($arResult)): ?>

<ul>
    <?
    $previousLevel = 0;
foreach ($arResult as $arItem): ?>

    <? if ($previousLevel && $arItem["DEPTH_LEVEL"] < $previousLevel):?>
        <?= str_repeat("</ul></li>", ($previousLevel - $arItem["DEPTH_LEVEL"])); ?>
    <? endif ?> <!-- Проверка на закрытие -->

    <? if ($arItem["IS_PARENT"]): ?> <!--Если родитель-->

        <? if ($arItem["DEPTH_LEVEL"] == 1): ?> <!--Если родитель и 1 ур.-->
            <li class="<?if ($arItem["SELECTED"]):?>show<?else:?>  <?endif?>">
                <a href="<?= $arItem["LINK"] ?>">
                    <?= $arItem["TEXT"] ?>
                </a>
            <ul class="submenu">

        <? else: ?> <!-- Если родитель и ур. 2 -->
        <li>
            <a href="<?= $arItem["LINK"] ?>">
                <?= $arItem["TEXT"] ?>
            </a>
        <ul class="submenu">
        <? endif ?>

    <? else:?> <!--Если не родитель -->

        <? if ($arItem["PERMISSION"] > "D"):?> <!-- Если не родитель и есть права -->

            <? if ($arItem["DEPTH_LEVEL"] == 1):?> <!-- Если не родитель и 1 ур. -->
                <li>
                    <a href="<?= $arItem["LINK"] ?>">
                        <?= $arItem["TEXT"] ?>
                    </a>
                </li>
            <? else:?> <!-- Если не родитель и 2 ур. -->
                <li>
                    <a href="<?= $arItem["LINK"] ?>">
                        <?= $arItem["TEXT"] ?>
                    </a>
                </li>
            <? endif ?>

        <? endif ?>

    <? endif ?>

    <? $previousLevel = $arItem["DEPTH_LEVEL"]; ?>

<? endforeach ?>

    <? if ($previousLevel > 1)://close last item tags?>
        <?= str_repeat("</ul></li>", ($previousLevel - 1)); ?>
    <? endif ?>

</ul>
<!--<div class="menu-clear-left"></div>-->
<? endif ?>