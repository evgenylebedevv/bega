<?
require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/header.php");
?>

    <!-- main-area -->
    <main>
        <!-- slider-area -->
        <section class="slider-area slider-bg">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xl-9">
                        <div class="slider-content text-center">
                            <h6 class="wow fadeInDown" data-wow-delay=".2s">islands</h6>
                            <h2 class="tlt fix" data-in-effect="fadeInLeft">hunter <span>killer</span></h2>
                            <p class="wow fadeInUp" data-wow-delay="2s">Find technology or people for digital projects in public sector and Find an individual specialist develope researcher.</p>
                            <a href="#" class="btn wow fadeInUp" data-wow-delay="2.2s">READ MORE</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- slider-area-end -->

        <!-- brand-area -->
        <div class="brand-area brand-bg">
            <div class="container">
                <div class="row brand-active">
                    <div class="col-xl-2">
                        <div class="brand-item">
                            <img src="/local/templates/.default/img/brand/brand_logo01.png" alt="">
                        </div>
                    </div>
                    <div class="col-xl-2">
                        <div class="brand-item">
                            <img src="/local/templates/.default/img/brand/brand_logo02.png" alt="">
                        </div>
                    </div>
                    <div class="col-xl-2">
                        <div class="brand-item">
                            <img src="/local/templates/.default/img/brand/brand_logo03.png" alt="">
                        </div>
                    </div>
                    <div class="col-xl-2">
                        <div class="brand-item">
                            <img src="/local/templates/.default/img/brand/brand_logo04.png" alt="">
                        </div>
                    </div>
                    <div class="col-xl-2">
                        <div class="brand-item">
                            <img src="/local/templates/.default/img/brand/brand_logo05.png" alt="">
                        </div>
                    </div>
                    <div class="col-xl-2">
                        <div class="brand-item">
                            <img src="/local/templates/.default/img/brand/brand_logo06.png" alt="">
                        </div>
                    </div>
                    <div class="col-xl-2">
                        <div class="brand-item">
                            <img src="/local/templates/.default/img/brand/brand_logo03.png" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- brand-area-end -->

        <!-- area-bg-one -->
        <div class="area-bg-one">

            <!-- latest-games-area -->
            <section class="latest-games-area pt-120">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6 col-md-8">
                            <div class="section-title mb-50">
                                <span>LATEST RELEASES</span>
                                <h2>Create & <span>Manage</span></h2>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <div class="latest-games-active owl-carousel">
                                <div class="latest-games-items mb-30">
                                    <div class="latest-games-thumb">
                                        <a href="#"><img src="/local/templates/.default/img/product/latest_games_thumb01.jpg" alt=""></a>
                                    </div>
                                    <div class="latest-games-content">
                                        <div class="lg-tag">
                                            <a href="#">racing</a>
                                        </div>
                                        <h4><a href="#">Vertical Games <span>Daily</span></a></h4>
                                        <p>entry fee : <span>free</span></p>
                                    </div>
                                </div>
                                <div class="latest-games-items mb-30">
                                    <div class="latest-games-thumb">
                                        <a href="#"><img src="/local/templates/.default/img/product/latest_games_thumb02.jpg" alt=""></a>
                                    </div>
                                    <div class="latest-games-content">
                                        <div class="lg-tag">
                                            <a href="#">zombie</a>
                                        </div>
                                        <h4><a href="#">Hunter Killer <span>ii</span></a></h4>
                                        <p>entry fee : <span>$25,00</span></p>
                                    </div>
                                </div>
                                <div class="latest-games-items mb-30">
                                    <div class="latest-games-thumb">
                                        <a href="#"><img src="/local/templates/.default/img/product/latest_games_thumb03.jpg" alt=""></a>
                                    </div>
                                    <div class="latest-games-content">
                                        <div class="lg-tag">
                                            <a href="#">creative</a>
                                        </div>
                                        <h4><a href="#">Sky Walker <span>Daily</span></a></h4>
                                        <p>entry fee : <span>$25,00</span></p>
                                    </div>
                                </div>
                                <div class="latest-games-items mb-30">
                                    <div class="latest-games-thumb">
                                        <a href="#"><img src="/local/templates/.default/img/product/latest_games_thumb01.jpg" alt=""></a>
                                    </div>
                                    <div class="latest-games-content">
                                        <div class="lg-tag">
                                            <a href="#">racing</a>
                                        </div>
                                        <h4><a href="#">Vertical games <span>daily</span></a></h4>
                                        <p>entry fee : <span>free</span></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- latest-games-area-end -->

            <!-- about-us-area -->
            <?$APPLICATION->IncludeComponent(
                "bitrix:main.include",
                "",
                Array(
                    "AREA_FILE_SHOW" => "file",
                    "AREA_FILE_SUFFIX" => "inc",
                    "EDIT_TEMPLATE" => "",
                    "PATH" => "/include/about-us-area.php"
                )
            );?>
            <!-- about-us-area-end -->

        </div>
        <!-- area-bg-one-end -->

        <!-- game-manage-area -->
        <section class="game-manage-area game-mange-bg pt-120 pb-120">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xl-7 col-lg-8">
                        <div class="section-title title-style-two text-center mb-60">
                            <span>COME THE END OF THE WORLD</span>
                            <h2>Focus And Game <span>Manage</span></h2>
                        </div>
                    </div>
                </div>
                <div class="row justify-content-center">
                    <div class="col-lg-4 col-md-6">
                        <div class="coming-match-item mb-30">
                            <div class="coming-match-team">
                                <div class="match-team-info">
                                    <div class="match-team-logo">
                                        <a href="#"><img src="/local/templates/.default/img/team/team_logo01.png" alt=""></a>
                                    </div>
                                    <div class="match-team-name">
                                        <a href="#">Bluster 8</a>
                                    </div>
                                </div>
                                <div class="coming-match-status">
                                    <img src="img/team/match_vs.png" alt="">
                                </div>
                                <div class="match-team-info">
                                    <div class="match-team-logo">
                                        <a href="#"><img src="/local/templates/.default/img/team/team_logo02.png" alt=""></a>
                                    </div>
                                    <div class="match-team-name">
                                        <a href="#">kill bill 7</a>
                                    </div>
                                </div>
                            </div>
                            <div class="coming-match-info">
                                <h5>Forza <span>Horizon ii</span></h5>
                                <div class="match-rating">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                </div>
                                <div class="match-info-action">
                                    <a href="#" class="btn">view details</a>
                                    <a href="#" class="btn transparent-btn"><i class="fas fa-comments"></i> Comments</a>
                                </div>
                            </div>
                            <div class="coming-match-time">
                                <div class="coming-time" data-countdown="2025/3/30"></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="coming-match-item mb-30">
                            <div class="coming-match-team">
                                <div class="match-team-info">
                                    <div class="match-team-logo">
                                        <a href="#"><img src="/local/templates/.default/img/team/team_logo03.png" alt=""></a>
                                    </div>
                                    <div class="match-team-name">
                                        <a href="#">Bluster 8</a>
                                    </div>
                                </div>
                                <div class="coming-match-status">
                                    <img src="/local/templates/.default/img/team/match_vs.png" alt="">
                                </div>
                                <div class="match-team-info">
                                    <div class="match-team-logo">
                                        <a href="#"><img src="/local/templates/.default/img/team/team_logo04.png" alt=""></a>
                                    </div>
                                    <div class="match-team-name">
                                        <a href="#">The Champ</a>
                                    </div>
                                </div>
                            </div>
                            <div class="coming-match-info">
                                <h5>Thanos <span>Sky ii</span></h5>
                                <div class="match-rating">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                </div>
                                <div class="match-info-action">
                                    <a href="#" class="btn">view details</a>
                                    <a href="#" class="btn transparent-btn"><i class="fas fa-comments"></i> Comments</a>
                                </div>
                            </div>
                            <div class="coming-match-time">
                                <div class="coming-time" data-countdown="2025/5/25"></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="coming-match-item mb-30">
                            <div class="coming-match-team">
                                <div class="match-team-info">
                                    <div class="match-team-logo">
                                        <a href="#"><img src="/local/templates/.default/img/team/team_logo05.png" alt=""></a>
                                    </div>
                                    <div class="match-team-name">
                                        <a href="#">Warrior</a>
                                    </div>
                                </div>
                                <div class="coming-match-status">
                                    <img src="/local/templates/.default/img/team/match_vs.png" alt="">
                                </div>
                                <div class="match-team-info">
                                    <div class="match-team-logo">
                                        <a href="#"><img src="/local/templates/.default/img/team/team_logo06.png" alt=""></a>
                                    </div>
                                    <div class="match-team-name">
                                        <a href="#">kill bill 7</a>
                                    </div>
                                </div>
                            </div>
                            <div class="coming-match-info">
                                <h5>Hunter <span>Killer ii</span></h5>
                                <div class="match-rating">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                </div>
                                <div class="match-info-action">
                                    <a href="#" class="btn">view details</a>
                                    <a href="#" class="btn transparent-btn"><i class="fas fa-comments"></i> Comments</a>
                                </div>
                            </div>
                            <div class="coming-match-time">
                                <div class="coming-time" data-countdown="2025/2/15"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tournament-area mt-30">
                    <div class="row">
                        <div class="col-12">
                            <div class="tournament-top-wrap">
                                <div class="section-title tournament-title">
                                    <h2>Joining <span>Tournament</span></h2>
                                </div>
                                <div class="tournament-menu">
                                    <button class="active" data-filter="*">All</button>
                                    <button class="" data-filter=".cat-one">GAMER</button>
                                    <button class="" data-filter=".cat-two">PROFESSIONAL</button>
                                    <button class="" data-filter=".cat-three">ADVENTURE</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <div class="tournament-schedule-wrap">
                                <div class="tournament-active">
                                    <div class="single-tournament mb-15 grid-item cat-three cat-two">
                                        <div class="row no-gutters">
                                            <div class="col-lg-4">
                                                <div class="tournament-schedule-item">
                                                    <div class="match-team-info">
                                                        <div class="match-team-logo">
                                                            <a href="#"><img src="/local/templates/.default/img/team/team_logo01.png" alt=""></a>
                                                        </div>
                                                    </div>
                                                    <div class="coming-match-status">
                                                        <img src="/local/templates/.default/img/team/match_vs.png" alt="">
                                                    </div>
                                                    <div class="match-team-info">
                                                        <div class="match-team-logo">
                                                            <a href="#"><img src="/local/templates/.default/img/team/team_logo02.png" alt=""></a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-8">
                                                <div class="tournament-schedule-content">
                                                    <h3><a href="#">Forza <span>Horizon ii</span></a></h3>
                                                    <p>Find tecology people for digital projects in public sector.There are many variations of passages of Lorem Ipsu
                                                        available, but the majority have suffered.</p>
                                                    <div class="tournament-schedule-meta">
                                                        <h5>price : <span>$125,00</span></h5>
                                                        <a href="#">Joining</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="single-tournament mb-15 grid-item cat-one cat-three">
                                        <div class="row no-gutters">
                                            <div class="col-lg-4">
                                                <div class="tournament-schedule-item">
                                                    <div class="match-team-info">
                                                        <div class="match-team-logo">
                                                            <a href="#"><img src="/local/templates/.default/img/team/team_logo03.png" alt=""></a>
                                                        </div>
                                                    </div>
                                                    <div class="coming-match-status">
                                                        <img src="/local/templates/.default/img/team/match_vs.png" alt="">
                                                    </div>
                                                    <div class="match-team-info">
                                                        <div class="match-team-logo">
                                                            <a href="#"><img src="/local/templates/.default/img/team/team_logo04.png" alt=""></a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-8">
                                                <div class="tournament-schedule-content">
                                                    <h3><a href="#">Thanos <span>Sky ii</span></a></h3>
                                                    <p>Find tecology people for digital projects in public sector.There are many variations of passages of Lorem Ipsu
                                                        available, but the majority have suffered.</p>
                                                    <div class="tournament-schedule-meta">
                                                        <h5>price : <span>$125,00</span></h5>
                                                        <a href="#">Joining</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="single-tournament mb-15 grid-item cat-two cat-one">
                                        <div class="row no-gutters">
                                            <div class="col-lg-4">
                                                <div class="tournament-schedule-item">
                                                    <div class="match-team-info">
                                                        <div class="match-team-logo">
                                                            <a href="#"><img src="/local/templates/.default/img/team/team_logo05.png" alt=""></a>
                                                        </div>
                                                    </div>
                                                    <div class="coming-match-status">
                                                        <img src="/local/templates/.default/img/team/match_vs.png" alt="">
                                                    </div>
                                                    <div class="match-team-info">
                                                        <div class="match-team-logo">
                                                            <a href="#"><img src="/local/templates/.default/img/team/team_logo06.png" alt=""></a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-8">
                                                <div class="tournament-schedule-content">
                                                    <h3><a href="#">Call Of <span>Duty ii</span></a></h3>
                                                    <p>Find tecology people for digital projects in public sector.There are many variations of passages of Lorem Ipsu
                                                        available, but the majority have suffered.</p>
                                                    <div class="tournament-schedule-meta">
                                                        <h5>price : <span>$125,00</span></h5>
                                                        <a href="#">Joining</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- game-manage-area-end -->

        <!-- features-area -->
        <?$APPLICATION->IncludeComponent(
            "bitrix:main.include",
            "",
            Array(
                "AREA_FILE_SHOW" => "file",
                "AREA_FILE_SUFFIX" => "inc",
                "EDIT_TEMPLATE" => "",
                "PATH" => "/include/features-area.php"
            )
        );?>
        <!-- features-area-end -->

        <!-- area-bg-two -->
        <div class="area-bg-two">

            <!-- shop-area -->
            <section class="shop-area pt-120 pb-90">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-xl-7 col-lg-8">
                            <div class="section-title title-style-two text-center mb-30">
                                <span>gaming accessories</span>
                                <h2>Gaming Products <span>Corner</span></h2>
                            </div>
                        </div>
                    </div>
                    <div class="row product-active">
                        <div class="col-xl-3">
                            <div class="shop-item">
                                <div class="product-thumb">
                                    <a href="#"><img src="/local/templates/.default/img/product/product_img01.jpg" alt=""></a>
                                </div>
                                <div class="product-content">
                                    <div class="product-tag"><a href="#">t-shirt</a></div>
                                    <h4><a href="#">Women Black T-shirt</a></h4>
                                    <div class="product-meta">
                                        <div class="product-price">
                                            <h5>$29.00</h5>
                                        </div>
                                        <div class="product-cart-action">
                                            <a href="#"><i class="fas fa-shopping-basket"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3">
                            <div class="shop-item">
                                <div class="product-thumb">
                                    <a href="#"><img src="/local/templates/.default/img/product/product_img02.jpg" alt=""></a>
                                </div>
                                <div class="product-content">
                                    <div class="product-tag"><a href="#">x-box</a></div>
                                    <h4><a href="#">Gears 5 Xbox Controller</a></h4>
                                    <div class="product-meta">
                                        <div class="product-price">
                                            <h5>$29.00</h5>
                                        </div>
                                        <div class="product-cart-action">
                                            <a href="#"><i class="fas fa-shopping-basket"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3">
                            <div class="shop-item">
                                <div class="product-thumb">
                                    <a href="#"><img src="/local/templates/.default/img/product/product_img03.jpg" alt=""></a>
                                </div>
                                <div class="product-content">
                                    <div class="product-tag"><a href="#">graphics</a></div>
                                    <h4><a href="#">GeForce RTX 2070</a></h4>
                                    <div class="product-meta">
                                        <div class="product-price">
                                            <h5>$29.00</h5>
                                        </div>
                                        <div class="product-cart-action">
                                            <a href="#"><i class="fas fa-shopping-basket"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3">
                            <div class="shop-item">
                                <div class="product-thumb">
                                    <a href="#"><img src="/local/templates/.default/img/product/product_img04.jpg" alt=""></a>
                                </div>
                                <div class="product-content">
                                    <div class="product-tag"><a href="#">VR-Box</a></div>
                                    <h4><a href="#">Virtual Reality Smiled</a></h4>
                                    <div class="product-meta">
                                        <div class="product-price">
                                            <h5>$29.00</h5>
                                        </div>
                                        <div class="product-cart-action">
                                            <a href="#"><i class="fas fa-shopping-basket"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3">
                            <div class="shop-item">
                                <div class="product-thumb">
                                    <a href="#"><img src="/local/templates/.default/img/product/product_img04.jpg" alt=""></a>
                                </div>
                                <div class="product-content">
                                    <div class="product-tag"><a href="#">VR-Box</a></div>
                                    <h4><a href="#">Virtual Reality Smiled</a></h4>
                                    <div class="product-meta">
                                        <div class="product-price">
                                            <h5>$29.00</h5>
                                        </div>
                                        <div class="product-cart-action">
                                            <a href="#"><i class="fas fa-shopping-basket"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- shop-area-end -->

            <!-- blog-testimonial-area -->
            <section class="blog-and-testimonial">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-xl-6 col-lg-8">
                            <div class="blog-area mb-120">
                                <div class="tournament-top-wrap">
                                    <div class="section-title tournament-title">
                                        <h2>Latest News <span>Articles</span></h2>
                                    </div>
                                </div>
                                <div class="blog-post-wrap">
                                    <div class="blog-post-item blog-style-one">
                                        <div class="blog-thumb">
                                            <a href="#"><img src="/local/templates/.default/img/blog/blog_thumb01.jpg" alt=""></a>
                                        </div>
                                        <div class="blog-post-content">
                                            <h5><a href="#">Reality can include entertain</a></h5>
                                            <div class="blog-meta">
                                                <ul>
                                                    <li><i class="far fa-clock"></i>July 4, 2020</li>
                                                    <li><i class="fas fa-comment"></i>03</li>
                                                    <li><i class="fas fa-heart"></i>26</li>
                                                </ul>
                                            </div>
                                            <p>Game server also sometimes referred to as host server which source</p>
                                        </div>
                                    </div>
                                    <div class="blog-post-item blog-style-one">
                                        <div class="blog-thumb">
                                            <a href="#"><img src="/local/templates/.default/img/blog/blog_thumb02.jpg" alt=""></a>
                                        </div>
                                        <div class="blog-post-content">
                                            <h5><a href="#">Simulated experience simila</a></h5>
                                            <div class="blog-meta">
                                                <ul>
                                                    <li><i class="far fa-clock"></i>July 4, 2020</li>
                                                    <li><i class="fas fa-comment"></i>03</li>
                                                    <li><i class="fas fa-heart"></i>26</li>
                                                </ul>
                                            </div>
                                            <p>Game server also sometimes referred to as host server which source</p>
                                        </div>
                                    </div>
                                    <div class="blog-post-item blog-style-one">
                                        <div class="blog-thumb">
                                            <a href="#"><img src="/local/templates/.default/img/blog/blog_thumb03.jpg" alt=""></a>
                                        </div>
                                        <div class="blog-post-content">
                                            <h5><a href="#">High Performance Server</a></h5>
                                            <div class="blog-meta">
                                                <ul>
                                                    <li><i class="far fa-clock"></i>July 4, 2020</li>
                                                    <li><i class="fas fa-comment"></i>03</li>
                                                    <li><i class="fas fa-heart"></i>26</li>
                                                </ul>
                                            </div>
                                            <p>Game server also sometimes referred to as host server which source</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-8">
                            <div class="testimonial-area position-relative mb-120">
                                <div class="tournament-top-wrap">
                                    <div class="section-title tournament-title">
                                        <h2>Customers <span>Feedback</span></h2>
                                    </div>
                                </div>
                                <div class="testimonial-active owl-carousel">
                                    <div class="testimonial-item">
                                        <div class="testimonial-content mb-50">
                                            <h5>Gaming Server Activation</h5>
                                            <div class="testimonial-rating mb-30">
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                            </div>
                                            <p>“ Game server also sometimes referred to as host server which is the authoritative source of events in multiplayer video
                                                game The server clients mntain their own accurate sometimes referred connected clients to maintain their own accurate
                                                version version ”</p>
                                        </div>
                                        <div class="testimonial-avatar">
                                            <div class="testi-avtar-img">
                                                <img src="/local/templates/.default/img/images/testi_avatar.png" alt="">
                                            </div>
                                            <div class="testi-avatar-info">
                                                <h6>Mark Alexander</h6>
                                                <span>Founder Pro</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="testimonial-item">
                                        <div class="testimonial-content mb-50">
                                            <h5>Gaming Server Activation</h5>
                                            <div class="testimonial-rating mb-30">
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                            </div>
                                            <p>“ Game server also sometimes referred to as host server which is the authoritative source of events in multiplayer video
                                                game The server clients mntain their own accurate sometimes referred connected clients to maintain their own accurate
                                                version version ”</p>
                                        </div>
                                        <div class="testimonial-avatar">
                                            <div class="testi-avtar-img">
                                                <img src="/local/templates/.default/img/images/testi_avatar.png" alt="">
                                            </div>
                                            <div class="testi-avatar-info">
                                                <h6>Mark Alexander</h6>
                                                <span>Founder Pro</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="testi-quote"><img src="/local/templates/.default/img/icon/testi_quote.png" alt=""></div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- blog-testimonial-area-end -->

        </div>
        <!-- area-bg-two-end -->

    </main>
    <!-- main-area-end -->



<!---->
<?//if (IsModuleInstalled("advertising")):?>
<!--	<div class="mb-5">-->
<!--		--><?//$APPLICATION->IncludeComponent(
//			"bitrix:advertising.banner",
//			"bootstrap_v4",
//			array(
//				"COMPONENT_TEMPLATE" => "bootstrap_v4",
//				"TYPE" => "MAIN",
//				"NOINDEX" => "Y",
//				"QUANTITY" => "3",
//				"BS_EFFECT" => "fade",
//				"BS_CYCLING" => "N",
//				"BS_WRAP" => "Y",
//				"BS_PAUSE" => "Y",
//				"BS_KEYBOARD" => "Y",
//				"BS_ARROW_NAV" => "Y",
//				"BS_BULLET_NAV" => "Y",
//				"BS_HIDE_FOR_TABLETS" => "N",
//				"BS_HIDE_FOR_PHONES" => "Y",
//				"CACHE_TYPE" => "A",
//				"CACHE_TIME" => "36000000",
//			),
//			false
//		);?>
<!--	</div>-->
<?//endif?>
<!---->
<?//
//global $trendFilter;
//$trendFilter = array('PROPERTY_TREND' => '4');
//?>
<!--<h2>Тренды сезона</h2>-->
<?//$APPLICATION->IncludeComponent(
//	"bitrix:catalog.section",
//	"bootstrap_v4",
//	array(
//		"IBLOCK_TYPE_ID" => "catalog",
//		"IBLOCK_ID" => "2",
//		"BASKET_URL" => "/personal/cart/",
//		"COMPONENT_TEMPLATE" => "",
//		"IBLOCK_TYPE" => "catalog",
//		"SECTION_ID" => $_REQUEST["SECTION_ID"],
//		"SECTION_CODE" => "",
//		"SECTION_USER_FIELDS" => array(
//			0 => "",
//			1 => "",
//		),
//		"ELEMENT_SORT_FIELD" => "sort",
//		"ELEMENT_SORT_ORDER" => "desc",
//		"ELEMENT_SORT_FIELD2" => "id",
//		"ELEMENT_SORT_ORDER2" => "desc",
//		"FILTER_NAME" => "trendFilter",
//		"INCLUDE_SUBSECTIONS" => "Y",
//		"SHOW_ALL_WO_SECTION" => "Y",
//		"HIDE_NOT_AVAILABLE" => "N",
//		"PAGE_ELEMENT_COUNT" => "12",
//		"LINE_ELEMENT_COUNT" => "3",
//		"PROPERTY_CODE" => array(
//			0 => "NEWPRODUCT",
//			1 => "",
//		),
//		"OFFERS_FIELD_CODE" => array(
//			0 => "",
//			1 => "",
//		),
//		"OFFERS_PROPERTY_CODE" => array(
//			0 => "COLOR_REF",
//			1 => "SIZES_SHOES",
//			2 => "SIZES_CLOTHES",
//			3 => "",
//		),
//		"OFFERS_SORT_FIELD" => "sort",
//		"OFFERS_SORT_ORDER" => "desc",
//		"OFFERS_SORT_FIELD2" => "id",
//		"OFFERS_SORT_ORDER2" => "desc",
//		"TEMPLATE_THEME" => "site",
//		"PRODUCT_DISPLAY_MODE" => "Y",
//		"ADD_PICT_PROP" => "MORE_PHOTO",
//		"LABEL_PROP" => array(
//			0 => "NEWPRODUCT"
//		),
//		"OFFER_ADD_PICT_PROP" => "-",
//		"OFFER_TREE_PROPS" => array(
//			0 => "COLOR_REF",
//			1 => "SIZES_SHOES",
//			2 => "SIZES_CLOTHES",
//		),
//		"PRODUCT_SUBSCRIPTION" => "N",
//		"SHOW_DISCOUNT_PERCENT" => "N",
//		"SHOW_OLD_PRICE" => "Y",
//		"SHOW_CLOSE_POPUP" => "N",
//		"MESS_BTN_BUY" => "Купить",
//		"MESS_BTN_ADD_TO_BASKET" => "В корзину",
//		"MESS_BTN_SUBSCRIBE" => "Подписаться",
//		"MESS_BTN_DETAIL" => "Подробнее",
//		"MESS_NOT_AVAILABLE" => "Нет в наличии",
//		"SECTION_URL" => "",
//		"DETAIL_URL" => "",
//		"SECTION_ID_VARIABLE" => "SECTION_ID",
//		"SEF_MODE" => "N",
//		"AJAX_MODE" => "N",
//		"AJAX_OPTION_JUMP" => "N",
//		"AJAX_OPTION_STYLE" => "Y",
//		"AJAX_OPTION_HISTORY" => "N",
//		"AJAX_OPTION_ADDITIONAL" => "",
//		"CACHE_TYPE" => "A",
//		"CACHE_TIME" => "36000000",
//		"CACHE_GROUPS" => "Y",
//		"SET_TITLE" => "Y",
//		"SET_BROWSER_TITLE" => "Y",
//		"BROWSER_TITLE" => "-",
//		"SET_META_KEYWORDS" => "Y",
//		"META_KEYWORDS" => "-",
//		"SET_META_DESCRIPTION" => "Y",
//		"META_DESCRIPTION" => "-",
//		"SET_LAST_MODIFIED" => "N",
//		"USE_MAIN_ELEMENT_SECTION" => "N",
//		"ADD_SECTIONS_CHAIN" => "N",
//		"CACHE_FILTER" => "N",
//		"ACTION_VARIABLE" => "action",
//		"PRODUCT_ID_VARIABLE" => "id",
//		"PRICE_CODE" => array(
//			0 => "BASE",
//		),
//		"USE_PRICE_COUNT" => "N",
//		"SHOW_PRICE_COUNT" => "1",
//		"PRICE_VAT_INCLUDE" => "Y",
//		"CONVERT_CURRENCY" => "N",
//		"USE_PRODUCT_QUANTITY" => "N",
//		"PRODUCT_QUANTITY_VARIABLE" => "",
//		"ADD_PROPERTIES_TO_BASKET" => "Y",
//		"PRODUCT_PROPS_VARIABLE" => "prop",
//		"PARTIAL_PRODUCT_PROPERTIES" => "N",
//		"PRODUCT_PROPERTIES" => array(
//		),
//		"OFFERS_CART_PROPERTIES" => array(
//			0 => "COLOR_REF",
//			1 => "SIZES_SHOES",
//			2 => "SIZES_CLOTHES",
//		),
//		"ADD_TO_BASKET_ACTION" => "ADD",
//		"PAGER_TEMPLATE" => "round",
//		"DISPLAY_TOP_PAGER" => "N",
//		"DISPLAY_BOTTOM_PAGER" => "Y",
//		"PAGER_TITLE" => "Товары",
//		"PAGER_SHOW_ALWAYS" => "N",
//		"PAGER_DESC_NUMBERING" => "N",
//		"PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
//		"PAGER_SHOW_ALL" => "N",
//		"PAGER_BASE_LINK_ENABLE" => "N",
//		"SET_STATUS_404" => "N",
//		"SHOW_404" => "N",
//		"MESSAGE_404" => "",
//		"COMPATIBLE_MODE" => "N",
//	),
//	false
//);?>

<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>