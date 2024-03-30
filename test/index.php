<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("PopUp");
CJSCore::Init(array("popup"));
?>

    <div id="hideBlock" style="display:none;">
        <h1>Hello</h1>
        <p>text</p>
    </div>
    <script>
        window.BXDEBUG = true;
        BX.ready(function(){
            var oPopup = new BX.PopupWindow('call_feedback', window.body, {
                autoHide : true,
                offsetTop : 1,
                offsetLeft : 0,
                lightShadow : true,
                closeIcon : true,
                closeByEsc : true,
                overlay: {
                    backgroundColor: 'red', opacity: '80'
                }
            });
            oPopup.setContent(BX('hideBlock'));
            BX.bindDelegate(
                document.body, 'click', {className: 'css_popup' },
                BX.proxy(function(e){
                    if(!e)
                        e = window.event;
                    oPopup.show();
                    return BX.PreventDefault(e);
                }, oPopup)
            );


        });
    </script>
    <div class="css_popup">click Me</div>

    <main>
        <!-- slider-area -->
        <section class="slider-area slider-bg">
            <div class="container">
                <div class="row justify-content-center">
                    <div tiptext="Это включаемая область Битрикс, можно изменить емаил.">
                        Hello. I am an inline div2!
                    </div>
                    <?$APPLICATION->IncludeComponent(
                        "bitrix:main.include",
                        "",
                        Array(
                            "AREA_FILE_SHOW" => "file",
                            "AREA_FILE_SUFFIX" => "inc",
                            "EDIT_TEMPLATE" => "",
                            "PATH" => "/include/about-us-area.php"
                        )
                    );?> <br>
                    <br>
                    <?$APPLICATION->IncludeComponent("bitrix:system.auth.form", "auth-form", Array(
                        "FORGOT_PASSWORD_URL" => "/user/",	// Страница забытого пароля
                        "PROFILE_URL" => "/user/profile.php",	// Страница профиля
                        "REGISTER_URL" => "/user/registration.php",	// Страница регистрации
                        "SHOW_ERRORS" => "N",	// Показывать ошибки
                    ),
                        false
                    );?><br>

                </div>
            </div>
        </section>
    </main>


<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>