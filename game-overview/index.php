<?
require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/header.php");
?>
        <!-- main-area -->
        <main>

            <!-- breadcrumb-area -->
            <div class="breadcrumb-area breadcrumb-bg game-overview-breadcrumb">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-xl-4 col-lg-6">
                            <div class="game-overview-img">
                                <img src="/local/templates/.default/img/images/game_overview_thumb.png" alt="">
                            </div>
                        </div>
                        <div class="col-xl-8 col-lg-6">
                            <div class="breadcrumb-content text-center text-lg-left pl-80">
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
                                <h2>PGS AMERICAS <span>2020</span></h2>
                                <div class="game-overview-status">
                                    <ul>
                                        <li><span>Total Wins :</span> 21</li>
                                        <li><span>Membership :</span>November 9, 2020</li>
                                        <li><span>Categories :</span>Platinum ||</li>
                                    </ul>
                                </div>
                                <a href="#" class="btn btn-style-two">join now</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- breadcrumb-area-end -->

            <!-- game-single-area -->
            <section class="game-single-area pt-120 pb-180">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <div class="game-single-content game-overview-content">
                                <div class="upcoming-game-head">
                                    <div class="uc-game-head-title">
                                        <span>SEPTEMBER 22, 2020</span>
                                        <h4>welcome PLAY FOR EVERYONE zombie <span>land!</span></h4>
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
                                <div class="game-single-title mt-50 mb-30">
                                    <h4>Good to Know</h4>
                                </div>
                                <div class="game-single-info mb-45">
                                    <ul>
                                        <li><span>Category :</span> Vertical Shooter</li>
                                        <li><span>Requirements :</span> PS4 , XBOX ONE , Steam</li>
                                        <li><span>Multi player :</span> Games Controller System</li>
                                        <li><span>Visual Effect :</span> Operating vero excepturi magnam System</li>
                                    </ul>
                                </div>
                                <p>Consectetur adipiscing elit. Suspendisse a mauris vitae lacus commodo iaculis eget vitae magna. Nam leohe a volutpat
                                quis iaculis at, viverra id quam. Morbi pharetra, libero ut tempor finibus, metus massa pharetra dui, ornare pharetra
                                felis risus eu quam.</p>
                                <div class="row mt-55 mb-55">
                                    <div class="col-lg-6 order-0 order-lg-2">
                                        <div class="overview-history-img">
                                            <img src="/local/templates/.default/img/images/overview_history_img.jpg" alt="">
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="game-single-title mb-15">
                                            <h4>overview history</h4>
                                        </div>
                                        <div class="overview-history-content">
                                            <p>Donec orci enim, bibendum a augue aliquet cursus quam. Pellentesque pulvinar, elit at condimentum dictum, sapien auctor
                                            tortoris vulputate sapien tortor et velit. Sed nulla nisi, congue eu quam vel, molestie grvida ipsum. Curabi lacus vitae
                                            tellus lacinia pretium.</p>
                                            <div class="overview-history-list">
                                                <ul>
                                                    <li>
                                                        <div class="overview-list-thumb">
                                                            <img src="/local/templates/.default/img/images/overview_history_thumb01.jpg" alt="">
                                                        </div>
                                                        <div class="overview-list-content">
                                                            <h4><a href="#">CONSOLE UPDATE 6.2</a></h4>
                                                            <span>1st place November 9, 2020</span>
                                                        </div>
                                                        <div class="overview-list-price">
                                                            <h4>$100,000</h4>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="overview-list-thumb">
                                                            <img src="/local/templates/.default/img/images/overview_history_thumb02.jpg" alt="">
                                                        </div>
                                                        <div class="overview-list-content">
                                                            <h4><a href="#">CONSOLE UPDATE 6.2</a></h4>
                                                            <span>1st place November 9, 2020</span>
                                                        </div>
                                                        <div class="overview-list-price">
                                                            <h4>$50,000</h4>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <p class="mb-0">Donec orci enim, bibendum a augue quis, aliquet cursus quam. Pellentesque pulvinar, elit at condimentum dictum, sapien
                                nibh auctor tortoris vulputate sapien tortor et velit. Sed nulla nisi, congue eu quam vel, molestie grvida ipsum.
                                Curabitr ut lacus vitae tellus lacinia pretium. Proin vestibulum sollcitudin tortor, quis auctor mi rutrum non. Donec
                                non eros eget purus lobortis imperdiet ac vitae est. Interdum et masuda fames ac ante ipsum primis in faucibus. Duis
                                ultricies mi sed lorem blandit, non sodales sapien fermentum. Donec ultricies, turpis a sagittis suscipit</p>
                                <div class="game-single-shape"><img src="/local/templates/.default/img/images/game_section_shape.png" alt=""></div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- game-single-area-end -->

        </main>
        <!-- main-area-end -->
        <?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>