<?
require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/header.php");
?>
        <!-- main-area -->
        <main>

            <!-- breadcrumb-area -->
            <section class="breadcrumb-area breadcrumb-bg s-breadcrumb-bg">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <div class="breadcrumb-content text-center">
                                <h2>Upcoming <span>Games</span></h2>
                                <nav aria-label="breadcrumb">
                                    <?$APPLICATION->IncludeComponent(
                                        "bitrix:breadcrumb",
                                        "breadcrumbs",
                                        Array(
                                            "PATH" => "",
                                            "SITE_ID" => "s1",
                                            "START_FROM" => "0"
                                        )
                                    );?>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- breadcrumb-area-end -->

            <!-- game-single-area -->
            <section class="game-single-area pt-120 pb-120">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <div class="game-single-content">
                                <div class="upcoming-game-head">
                                    <div class="uc-game-head-title">
                                        <span>SEPTEMBER 22, 2020</span>
                                        <h4>welcome PLAY FOR EVERYONE zombie <span>land!</span></h4>
                                    </div>
                                    <div class="uc-game-price">
                                        <h5>$19</h5>
                                    </div>
                                </div>
                                <p><span>Lorem ipsum</span> dolor sit amet, consectetur adipiscing elit. Suspendisse a mauris vitae lacus commodo iaculis eget vitae
                                magna. Nam leohe a volutpat quis iaculis at, viverra id quam. Morbi pharetra, libero ut tempor finibus, metus massa
                                pharetra dui, ornare pharetra felis risus eu quam. Nunc consectetur mi ac tristique eleifend. Phasellus eleifend
                                pharetra ante non viverra. Curabitur iaculis ultrices felis in consequat.</p>
                                <p>Donec orci enim, bibendum a augue quis, aliquet cursus quam. Pellentesque pulvinar, elit at condimentum dictum, sapien
                                nibh auctor tortoris vulputate sapien tortor et velit. Sed nulla nisi, congue eu quam vel, molestie grvida ipsum.
                                Curabitr ut lacus vitae tellus lacinia pretium. Proin vestibulum sollcitudin tortor, quis auctor mi rutrum non. Donec
                                non eros eget purus lobortis imperdiet ac vitae est. Interdum et masuda fames ac ante ipsum primis in faucibus. Duis
                                ultricies mi sed lorem blandit, non sodales sapien fermentum. Donec ultricies, turpis a sagittis suscipit</p>
                                <div class="game-single-img">
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <img src="/local/templates/.default/img/images/game_single_img01.jpg" alt="">
                                        </div>
                                        <div class="col-sm-6">
                                            <img src="/local/templates/.default/img/images/game_single_img02.jpg" alt="">
                                        </div>
                                    </div>
                                </div>
                                <p>Donec orci enim, bibendum a augue quis, aliquet cursus quam. Pellentesque pulvinar, elit at condimentum dictum, sapien
                                nibh auctor tortoris vulputate sapien tortor et velit. Sed nulla nisi, congue eu quam vel, molestie grvida ipsum.
                                Curabitr ut lacus vitae tellus lacinia pretium. Proin vestibulum sollcitudin tortor, quis auctor mi rutrum non. Donec
                                non eros eget purus lobortis imperdiet ac vitae est. Interdum et masuda fames ac ante ipsum primis in faucibus. Duis
                                ultricies mi sed lorem blandit, non sodales sapien fermentum. Donec ultricies, turpis a sagittis suscipit</p>
                                <div class="game-single-title mt-60 mb-30">
                                    <h4>Good to Know</h4>
                                </div>
                                <div class="game-single-info mb-65">
                                    <ul>
                                        <li><span>Category :</span> Vertical Shooter</li>
                                        <li><span>Requirements :</span> PS4 , XBOX ONE , Steam</li>
                                        <li><span>Multi player :</span> Games Controller System</li>
                                        <li><span>Visual Effect :</span> Operating vero excepturi magnam System</li>
                                    </ul>
                                </div>
                                <div class="game-single-title mb-30">
                                    <h4>Games Controller <span>System</span></h4>
                                </div>
                                <p>Donec orci enim, bibendum a augue quis, aliquet cursus quam. Pellentesque pulvinar, elit at condimentum dictum, sapien
                                nibh auctor tortoris vulputate sapien tortor et velit. Sed nulla nisi, congue eu quam vel, molestie grvida ipsum.
                                Curabitr ut lacus vitae tellus lacinia pretium. Proin vestibulum sollcitudin tortor, quis auctor mi rutrum non. Donec
                                non eros eget purus lobortis imperdiet ac vitae est. Interdum et masuda fames ac ante ipsum primis in faucibus. Duis
                                ultricies mi sed lorem blandit, non sodales sapien fermentum. Donec ultricies, turpis a sagittis suscipit</p>
                                <div class="game-single-gallery">
                                    <div class="row">
                                        <div class="col-lg-4 col-sm-6">
                                            <img src="/local/templates/.default/img/images/game_single_gallery01.jpg" alt="">
                                        </div>
                                        <div class="col-lg-4 col-sm-6">
                                            <img src="/local/templates/.default/img/images/game_single_gallery02.jpg" alt="">
                                        </div>
                                        <div class="col-lg-4 col-sm-6">
                                            <img src="/local/templates/.default/img/images/game_single_gallery03.jpg" alt="">
                                        </div>
                                        <div class="col-lg-4 col-sm-6">
                                            <img src="/local/templates/.default/img/images/game_single_gallery04.jpg" alt="">
                                        </div>
                                        <div class="col-lg-4 col-sm-6">
                                            <img src="/local/templates/.default/img/images/game_single_gallery05.jpg" alt="">
                                        </div>
                                        <div class="col-lg-4 col-sm-6">
                                            <img src="/local/templates/.default/img/images/game_single_gallery06.jpg" alt="">
                                        </div>
                                    </div>
                                </div>
                                <div class="game-single-shape"><img src="/local/templates/.default/img/images/game_section_shape.png" alt=""></div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- game-single-area-end -->

            <!-- upcoming-games -->
            <section class="upcoming-games-area pb-140">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <div class="game-single-title mb-55">
                                <h4>released <span>GAMES</span></h4>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-4 col-md-6">
                            <div class="upcoming-game-item mb-40">
                                <div class="upcoming-game-head">
                                    <div class="uc-game-head-title">
                                        <span>SEPTEMBER 22, 2020</span>
                                        <h4><a href="#">zombie land</a></h4>
                                    </div>
                                    <div class="uc-game-price">
                                        <h5>$19</h5>
                                    </div>
                                </div>
                                <p>Compete with players remote island winner takes showdown known issue.</p>
                                <div class="upcoming-game-thumb">
                                    <img src="/local/templates/.default/img/images/upcoming_game_thumb01.jpg" alt="">
                                    <div class="upcoming-game-cart">
                                        <a href="#" class="btn transparent-btn"><i class="fas fa-shopping-basket"></i>BUY Now</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <div class="upcoming-game-item mb-40">
                                <div class="upcoming-game-head">
                                    <div class="uc-game-head-title">
                                        <span>SEPTEMBER 22, 2020</span>
                                        <h4><a href="#">call of duty</a></h4>
                                    </div>
                                    <div class="uc-game-price">
                                        <h5>$19</h5>
                                    </div>
                                </div>
                                <p>Compete with players remote island winner takes showdown known issue.</p>
                                <div class="upcoming-game-thumb">
                                    <img src="/local/templates/.default/img/images/upcoming_game_thumb02.jpg" alt="">
                                    <div class="upcoming-game-cart">
                                        <a href="#" class="btn transparent-btn"><i class="fas fa-shopping-basket"></i>BUY Now</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <div class="upcoming-game-item mb-40">
                                <div class="upcoming-game-head">
                                    <div class="uc-game-head-title">
                                        <span>SEPTEMBER 22, 2020</span>
                                        <h4><a href="#">sky hunter</a></h4>
                                    </div>
                                    <div class="uc-game-price">
                                        <h5>$19</h5>
                                    </div>
                                </div>
                                <p>Compete with players remote island winner takes showdown known issue.</p>
                                <div class="upcoming-game-thumb">
                                    <img src="/local/templates/.default/img/images/upcoming_game_thumb03.jpg" alt="">
                                    <div class="upcoming-game-cart">
                                        <a href="#" class="btn transparent-btn"><i class="fas fa-shopping-basket"></i>BUY Now</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- upcoming-games-end -->

        </main>
        <!-- main-area-end -->
        <?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>
