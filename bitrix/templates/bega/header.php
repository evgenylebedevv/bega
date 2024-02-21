<?
if (!defined ('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true)
{
    die();
}
$APPLICATION->SetTitle("Onevo");
?>

<!doctype html>
<html class="no-js" lang="<?=LANGUAGE_ID;?>">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title><?$APPLICATION->ShowTitle();?></title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="shortcut icon" type="image/x-icon" href="/bitrix/templates/.default/img/favicon.png">
    <!-- Place favicon.ico in the root directory -->

    <!-- CSS here -->
    <link rel="stylesheet" href="/bitrix/templates/.default/css/bootstrap.min.css">
    <link rel="stylesheet" href="/bitrix/templates/.default/css/animate.min.css">
    <link rel="stylesheet" href="/bitrix/templates/.default/css/magnific-popup.css">
    <link rel="stylesheet" href="/bitrix/templates/.default/css/fontawesome-all.min.css">
    <link rel="stylesheet" href="/bitrix/templates/.default/css/odometer.css">
    <link rel="stylesheet" href="/bitrix/templates/.default/css/aos.css">
    <link rel="stylesheet" href="/bitrix/templates/.default/css/owl.carousel.min.css">
    <link rel="stylesheet" href="/bitrix/templates/.default/css/meanmenu.css">
    <link rel="stylesheet" href="/bitrix/templates/.default/css/slick.css">
    <link rel="stylesheet" href="/bitrix/templates/.default/css/default.css">
    <link rel="stylesheet" href="/bitrix/templates/.default/css/style.css">
    <link rel="stylesheet" href="/bitrix/templates/.default/css/responsive.css">
    <?$APPLICATION->ShowHead();?>
</head>
<body>
<div id="panel">
<?=$APPLICATION->ShowPanel();?>
</div>
<!-- preloader -->
<div id="preloader">
    <div id="loading-center">
        <div id="loading-center-absolute">
            <img src="/bitrix/templates/.default/img/icon/preloader.svg" alt="">
        </div>
    </div>
</div>
<!-- preloader-end -->

<!-- header-area -->
<header>
    <div class="header-top-area d-none d-lg-block">
        <div class="container-fluid container-full-padding">
            <div class="row align-items-center">
                <div class="col-lg-6 d-none d-lg-block">
                    <div class="header-top-offer">
                        <p>Exclusive Black Friday ! Offer</p>
                        <span class="coming-time" data-countdown="2020/6/20"></span>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="header-top-right">
                        <div class="header-social">
                            <ul>
                                <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fab fa-pinterest-p"></i></a></li>
                                <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                            </ul>
                        </div>
                        <div class="header-top-action">
                            <ul>
                                <li>
                                    <div class="header-top-mail">
                                        <p><span>|</span><i class="far fa-envelope"></i><a href="mailto:info@gmail.com">info@gecoinfo.com</a></p>
                                    </div>
                                </li>
                                <li>
                                    <div class="header-user-login">
                                        <a href="#"><i class="fas fa-user"></i><?=GetMessage("LOGIN"); ?></a>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="sticky-header" class="main-header">
        <div class="container-fluid container-full-padding">
            <div class="row">
                <div class="col-12">
                    <div class="main-menu">
                        <nav>
                            <div class="logo">
                                <a href="index-2.html"><img src="/bitrix/templates/.default/img/logo/logo.png" alt="Logo"></a>
                            </div>
                            <div id="mobile-menu" class="navbar-wrap d-none d-lg-flex">
                                <ul>
                                    <li class="show"><a href="#"><?=GetMessage("HOME");?></a>
                                        <ul class="submenu">
                                            <li><a href="index-2.html"><?=GetMessage("HOME_LIGHT");?></a></li>
                                            <li class="active"><a href="index.html"><?=GetMessage("HOME_DARK");?></a></li>
                                        </ul>
                                    </li>
                                    <li><a href="#"><?=GetMessage("GAMES");?></a>
                                        <ul class="submenu">
                                            <li><a href="about-us.html"><?=GetMessage("ABOUT_STORY");?></a></li>
                                            <li><a href="upcoming-games.html"><?=GetMessage("UPCOMING_GAMES");?></a></li>
                                            <li><a href="game-single.html"><?=GetMessage("GAME_SINGLE");?></a></li>
                                        </ul>
                                    </li>
                                    <li><a href="game-overview.html"><?=GetMessage("OVERVIEW");?></a></li>
                                    <li><a href="community.html"><?=GetMessage("COMMUNITY");?></a></li>
                                    <li><a href="shop.html"><?=GetMessage("STORE");?></a></li>
                                    <li><a href="#"><?=GetMessage("BLOG");?></a></a>
                                        <ul class="submenu">
                                            <li><a href="blog.html"><?=GetMessage("NEWS_PAGE");?></a></li>
                                            <li><a href="blog-details.html"><?=GetMessage("NEWS_DETAILS");?></a></li>
                                        </ul>
                                    </li>
                                    <li><a href="contact.html"><?=GetMessage("CONTACT");?></a></li>
                                </ul>
                            </div>
                            <div class="header-action">
                                <ul>
                                    <li class="header-shop-cart"><a href="#"><i class="fas fa-shopping-basket"></i><span>0</span></a>
                                        <ul class="minicart">
                                            <li class="d-flex align-items-start">
                                                <div class="cart-img">
                                                    <a href="#">
                                                        <img src="/bitrix/templates/.default/img/product/cart_p01.jpg" alt="">
                                                    </a>
                                                </div>
                                                <div class="cart-content">
                                                    <h4>
                                                        <a href="#">Xbox One Controller</a>
                                                    </h4>
                                                    <div class="cart-price">
                                                        <span class="new">$229.9</span>
                                                        <span>
                                                                    <del>$229.9</del>
                                                                </span>
                                                    </div>
                                                </div>
                                                <div class="del-icon">
                                                    <a href="#">
                                                        <i class="far fa-trash-alt"></i>
                                                    </a>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="total-price">
                                                    <span class="f-left">Total:</span>
                                                    <span class="f-right">$239.9</span>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="checkout-link">
                                                    <a href="cart.html">Shopping Cart</a>
                                                    <a class="red-color" href="checkout.html">Checkout</a>
                                                </div>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="header-search"><a href="#" data-toggle="modal" data-target="#search-modal"><i class="fas fa-search"></i></a></li>
                                </ul>
                            </div>
                        </nav>
                    </div>
                    <div class="mobile-menu"></div>
                </div>
                <!-- Modal Search -->
                <div class="modal fade" id="search-modal" tabindex="-1" role="dialog" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <form>
                                <input type="text" placeholder="Search here...">
                                <button><i class="fa fa-search"></i></button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
<!-- header-area-end -->

