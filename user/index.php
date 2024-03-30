<?
require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/header.php");
$APPLICATION->SetTitle("Страница входа");
?>
    <main>
        <section class="slider-area slider-bg">
            <div class="container">
                <h2 style="text-align: center"><?=GetMessage("TITLE");?></h2>
                <br>
                <div class="row justify-content-center">

<?$APPLICATION->IncludeComponent(
	"bitrix:system.auth.form",
	"customauthform",
	Array(
		"FORGOT_PASSWORD_URL" => "/user/restorepass.php",
		"PROFILE_URL" => "/user/profile.php",
		"REGISTER_URL" => "/user/registration.php",
		"SHOW_ERRORS" => "N"
	)
);?>
                </div>
            </div>
        </section>
    </main>

<? require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/footer.php"); ?>