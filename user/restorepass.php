<?
require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/header.php");
$APPLICATION->SetTitle("Восстановление пароля"); ?>
    <main>
        <section class="slider-area slider-bg">
            <div class="container">
                <div class="row justify-content-center">
                    <? $APPLICATION->IncludeComponent(
                        "bitrix:main.auth.forgotpasswd",
                        "",
                        array(
                            "AUTH_AUTH_URL" => "/user/index.php",
                            "AUTH_REGISTER_URL" => "/user/registration.php"
                        )
                    ); ?>
                </div>
            </div>
        </section>
    </main>

<? require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/footer.php"); ?>