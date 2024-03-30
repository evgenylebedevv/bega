<?
if (!defined ('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true)
{ die(); }
?>

<!-- footer-area -->
<footer>
    <div class="footer-top footer-bg">
        <!-- newsletter-area -->
        <div class="newsletter-area">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="newsletter-wrap">
                            <div class="section-title newsletter-title">
                                <h2>Our <span>Newsletter</span></h2>
                            </div>
                            <div class="newsletter-form">
                                <form action="#">
                                    <div class="newsletter-form-grp">
                                        <i class="far fa-envelope"></i>
                                        <input type="email" placeholder="Enter your email...">
                                    </div>
                                    <button>SUBSCRIBE <i class="fas fa-paper-plane"></i></button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- newsletter-area-end -->
        <div class="container">
            <div class="row justify-content-between">
                <div class="col-xl-3 col-lg-4 col-md-6">

                    <?$APPLICATION->IncludeComponent(
                        "bitrix:main.include",
                        "",
                        Array(
                            "AREA_FILE_SHOW" => "file",
                            "AREA_FILE_SUFFIX" => "inc",
                            "EDIT_TEMPLATE" => "",
                            "PATH" => "/include/footer-widget-mb5.php"
                        )
                    );?>

                </div>
                <div class="col-xl-2 col-lg-3 col-sm-6">
                    <div class="footer-widget mb-50">
                        <div class="fw-title mb-35">
                            <h5><?=GetMessage("PRODUCTS");?></h5>
                        </div>
                        <div tiptext="Это компонент меню Битрикс" class="fw-link">
                            <?$APPLICATION->IncludeComponent(
                                "bitrix:menu",
                                "vertical_onelevel_bottom",
                                Array(
                                    "ALLOW_MULTI_SELECT" => "N",
                                    "CHILD_MENU_TYPE" => "left",
                                    "DELAY" => "N",
                                    "MAX_LEVEL" => "1",
                                    "MENU_CACHE_GET_VARS" => array(""),
                                    "MENU_CACHE_TIME" => "3600",
                                    "MENU_CACHE_TYPE" => "N",
                                    "MENU_CACHE_USE_GROUPS" => "Y",
                                    "ROOT_MENU_TYPE" => "bottom",
                                    "USE_EXT" => "N"
                                )
                            );?>
                        </div>
                    </div>
                </div>
                <div class="col-xl-2 col-lg-3 col-sm-6">
                    <div class="footer-widget mb-50">
                        <div class="fw-title mb-35">
                            <h5><?=GetMessage('NEED_HELP');?></h5>
                        </div>
                        <div class="fw-link">
                            <ul>
                                <li><a href="#">Terms & Conditions</a></li>
                                <li><a href="#">Privacy Policy</a></li>
                                <li><a href="#">Refund Policy</a></li>
                                <li><a href="#">Affiliate</a></li>
                                <li><a href="#">FAQUse Cases</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-md-6">
                    <div class="footer-widget mb-50">
                        <div class="fw-title mb-35">
                            <h5>Follow us</h5>
                        </div>
                        <div class="footer-social">
                            <ul>
                                <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fab fa-pinterest-p"></i></a></li>
                                <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="footer-widget mb-50">
                        <div class="fw-title mb-35">
                            <h5>Newsletter Sign Up</h5>
                        </div>
                        <div class="footer-newsletter">
                            <form action="#">
                                <input type="text" placeholder="Enter your email">
                                <button><i class="fas fa-rocket"></i></button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-fire"><img src="/local/templates/.default/img/images/footer_fire.png" alt=""></div>
        <div class="footer-fire footer-fire-right"><img src="/local/templates/.default/img/images/footer_fire.png" alt=""></div>
    </div>
    <div class="copyright-wrap">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6">
                    <div class="copyright-text">
                        <p>Dev by <a href="https://siteprovider.ru">SiteProvider.ru </a><?echo date('Y');?></p>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 d-none d-md-block">
                    <div class="payment-method-img text-right">
                        <img src="/local/templates/.default/img/images/card_img.png" alt="img">
                    </div>
                </div>
            </div>
        </div>
    </div>

</footer>
<!-- footer-area-end -->


<!-- JS here -->
<script src="/local/templates/.default/js/vendor/jquery-3.4.1.min.js"></script>
<script src="/local/templates/.default/js/popper.min.js"></script>
<script src="/local/templates/.default/js/bootstrap.min.js"></script>
<script src="/local/templates/.default/js/isotope.pkgd.min.js"></script>
<script src="/local/templates/.default/js/slick.min.js"></script>
<script src="/local/templates/.default/js/jquery.meanmenu.min.js"></script>
<script src="/local/templates/.default/js/wow.min.js"></script>
<script src="/local/templates/.default/js/aos.js"></script>
<script src="/local/templates/.default/js/jquery.lettering.js"></script>
<script src="/local/templates/.default/js/jquery.textillate.js"></script>
<script src="/local/templates/.default/js/jquery.odometer.min.js"></script>
<script src="/local/templates/.default/js/jquery.appear.js"></script>
<script src="/local/templates/.default/js/owl.carousel.min.js"></script>
<script src="/local/templates/.default/js/jquery.countdown.min.js"></script>
<script src="/local/templates/.default/js/jquery.scrollUp.min.js"></script>
<script src="/local/templates/.default/js/imagesloaded.pkgd.min.js"></script>
<script src="/local/templates/.default/js/jquery.magnific-popup.min.js"></script>
<script src="/local/templates/.default/js/plugins.js"></script>
<script src="/local/templates/.default/js/main.js"></script>
<script src="http://code.jquery.com/jquery-latest.min.js"></script>
<script src="/local/templates/.default/js/fader.js"></script>
<script src="/local/templates/.default/js/tiptext-1.0.js"></script>
<script src="/local/templates/.default/js/popup.window.authorization.js"></script>

</body>
</html>