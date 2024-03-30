<?
require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/header.php");
$APPLICATION->SetTitle("Профиль пользователя");
?>
    <main>
        <section class="slider-area slider-bg">
            <div class="container">
                <div class="row justify-content-center">
                    <? $APPLICATION->IncludeComponent(
                        "bitrix:main.profile",
                        "",
                        array(
                            "CHECK_RIGHTS" => "N",
                            "SEND_INFO" => "N",
                            "SET_TITLE" => "Y",
                            "USER_PROPERTY" => array(),
                            "USER_PROPERTY_NAME" => ""
                        )
                    ); ?>
                </div>
            </div>
        </section>
    </main>
<? require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/footer.php"); ?>