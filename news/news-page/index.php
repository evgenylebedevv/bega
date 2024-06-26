<?
require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/header.php");
?>
    <!-- main-area -->
    <main>

        <!-- breadcrumb-area -->
        <section class="breadcrumb-area breadcrumb-bg">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="breadcrumb-content text-center">
                            <h2>Blog Right <span>Sidebar</span></h2>
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

        <!-- blog-area -->
        <section class="blog-area primary-bg pt-120 pb-175">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8">
                        <div class="blog-list-post">
                            <div class="blog-list-post-thumb">
                                <a href="news-details/index.php"><img src="/local/templates/.default/img/blog/t_blog_thumb01.jpg" alt=""></a>
                            </div>
                            <div class="blog-list-post-content">
                                <div class="blog-list-post-tag mb-25">
                                    <a href="#">shooting</a>
                                </div>
                                <h2><a href="#">welcome PLAY FOR EVERYONE zombie</a></h2>
                                <div class="blog-meta">
                                    <ul>
                                        <li>bY <a href="#">x-hunter</a> OCTOBER 19, 2020</li>
                                    </ul>
                                </div>
                                <p>Donec orci enim, bibendum a augue quis, aliquet cursus quam. Pellentesque pulvi condimentum dictum, sapien nibh auctor
                                    tortoris vulputate sapien tortor et velit. Sed nulla nisi, congue eu quam vel, molestie grvida ipsum. Curabitr ut lacus
                                    vitae tellus lacinia pretium.</p>
                            </div>
                            <div class="blog-list-post-bottom">
                                <ul>
                                    <li><a href="#">more reding<i class="fas fa-angle-double-right"></i></a></li>
                                    <li>
                                        <span>SHARE :</span>
                                        <div class="blog-post-share">
                                            <a href="#"><i class="fab fa-facebook-f"></i></a>
                                            <a href="#"><i class="fab fa-twitter"></i></a>
                                            <a href="#"><i class="fab fa-pinterest-p"></i></a>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="blog-list-post">
                            <div class="blog-list-post-thumb">
                                <a href="news-details/index.php"><img src="/local/templates/.default/img/blog/t_blog_thumb02.jpg" alt=""></a>
                            </div>
                            <div class="blog-list-post-content">
                                <div class="blog-list-post-tag mb-25">
                                    <a href="#">shooting</a>
                                </div>
                                <h2><a href="#">welcome PLAY FOR EVERYONE zombie</a></h2>
                                <div class="blog-meta">
                                    <ul>
                                        <li>bY <a href="#">x-hunter</a> OCTOBER 19, 2020</li>
                                    </ul>
                                </div>
                                <p>Donec orci enim, bibendum a augue quis, aliquet cursus quam. Pellentesque pulvi condimentum dictum, sapien nibh auctor
                                    tortoris vulputate sapien tortor et velit. Sed nulla nisi, congue eu quam vel, molestie grvida ipsum. Curabitr ut lacus
                                    vitae tellus lacinia pretium.</p>
                            </div>
                            <div class="blog-list-post-bottom">
                                <ul>
                                    <li><a href="#">more reding<i class="fas fa-angle-double-right"></i></a></li>
                                    <li>
                                        <span>SHARE :</span>
                                        <div class="blog-post-share">
                                            <a href="#"><i class="fab fa-facebook-f"></i></a>
                                            <a href="#"><i class="fab fa-twitter"></i></a>
                                            <a href="#"><i class="fab fa-pinterest-p"></i></a>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="blog-list-post">
                            <div class="blog-list-post-thumb">
                                <a href="news-details/index.php"><img src="/local/templates/.default/img/blog/t_blog_thumb03.jpg" alt=""></a>
                            </div>
                            <div class="blog-list-post-content">
                                <div class="blog-list-post-tag mb-25">
                                    <a href="#">shooting</a>
                                </div>
                                <h2><a href="#">welcome PLAY FOR EVERYONE zombie</a></h2>
                                <div class="blog-meta">
                                    <ul>
                                        <li>bY <a href="#">x-hunter</a> OCTOBER 19, 2020</li>
                                    </ul>
                                </div>
                                <p>Donec orci enim, bibendum a augue quis, aliquet cursus quam. Pellentesque pulvi condimentum dictum, sapien nibh auctor
                                    tortoris vulputate sapien tortor et velit. Sed nulla nisi, congue eu quam vel, molestie grvida ipsum. Curabitr ut lacus
                                    vitae tellus lacinia pretium.</p>
                            </div>
                            <div class="blog-list-post-bottom">
                                <ul>
                                    <li><a href="#">more reding<i class="fas fa-angle-double-right"></i></a></li>
                                    <li>
                                        <span>SHARE :</span>
                                        <div class="blog-post-share">
                                            <a href="#"><i class="fab fa-facebook-f"></i></a>
                                            <a href="#"><i class="fab fa-twitter"></i></a>
                                            <a href="#"><i class="fab fa-pinterest-p"></i></a>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="pagination-wrap mt-60">
                            <ul>
                                <li><a href="#">first</a></li>
                                <li><a href="#">1</a></li>
                                <li><a href="#">2</a></li>
                                <li><a href="#">next</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <aside class="blog-sidebar">
                            <div class="widget mb-45">
                                <div class="sidebar-about">
                                    <div class="sidebar-about-thumb">
                                        <img src="/local/templates/.default/img/blog/sidebar_about_thumb.jpg" alt="">
                                    </div>
                                    <div class="sidebar-widget-title mb-15">
                                        <h4>ABOUT THE <span>AUTHOR</span></h4>
                                    </div>
                                    <div class="sidebar-about-content">
                                        <p>Donec orci enim, bibendum a augue quis, aliquet cursus quamPellentesq.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="widget mb-45">
                                <div class="sidebar-search">
                                    <form action="#">
                                        <input type="text" placeholder="Type and hit enter...">
                                        <button><i class="fas fa-search"></i></button>
                                    </form>
                                </div>
                            </div>
                            <div class="widget mb-45">
                                <div class="sidebar-widget-title mb-25">
                                    <h4>category <span>post</span></h4>
                                </div>
                                <div class="sidebar-cat">
                                    <ul>
                                        <li><a href="#">ESPORTS ( 12 )</a></li>
                                        <li><a href="#">play store ( 03 )</a></li>
                                        <li><a href="#">pubg ( 09 )</a></li>
                                        <li><a href="#">zombieland ( 07 )</a></li>
                                        <li><a href="#">shooting ( 02 )</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="widget mb-45">
                                <div class="sidebar-widget-title mb-25">
                                    <h4>Recent <span>post</span></h4>
                                </div>
                                <div class="rc-post-list">
                                    <ul>
                                        <li>
                                            <div class="rc-post-thumb">
                                                <a href="#"><img src="/local/templates/.default/img/blog/rc_post_thumb01.jpg" alt=""></a>
                                            </div>
                                            <div class="rc-post-content">
                                                <h5><a href="#">EVERYONE zombie</a></h5>
                                                <span>OCTOBER 19, 2020</span>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="rc-post-thumb">
                                                <a href="#"><img src="/local/templates/.default/img/blog/rc_post_thumb02.jpg" alt=""></a>
                                            </div>
                                            <div class="rc-post-content">
                                                <h5><a href="#">Archery World Tour</a></h5>
                                                <span>OCTOBER 19, 2020</span>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="rc-post-thumb">
                                                <a href="#"><img src="/local/templates/.default/img/blog/rc_post_thumb03.jpg" alt=""></a>
                                            </div>
                                            <div class="rc-post-content">
                                                <h5><a href="#">The Ranger Magic</a></h5>
                                                <span>OCTOBER 19, 2020</span>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="widget mb-45">
                                <div class="sidebar-widget-title mb-25">
                                    <h4>TRENDING <span>MATCHES</span></h4>
                                </div>
                                <div class="sidebar-trending-match">
                                    <ul>
                                        <li>
                                            <div class="sidebar-trend-match-thumb">
                                                <a href="#"><img src="/local/templates/.default/img/blog/trend_match_thumb01.png" alt=""></a>
                                            </div>
                                            <div class="sidebar-trend-match-action">
                                                <span>0</span> <span>-</span> <span>3</span>
                                            </div>
                                            <div class="sidebar-trend-match-thumb">
                                                <a href="#"><img src="/local/templates/.default/img/blog/trend_match_thumb02.png" alt=""></a>
                                            </div>
                                            <div class="sidebar-trend-match-date">
                                                <span>OCTOBER 19, 2020</span>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="sidebar-trend-match-thumb">
                                                <a href="#"><img src="/local/templates/.default/img/blog/trend_match_thumb03.png" alt=""></a>
                                            </div>
                                            <div class="sidebar-trend-match-action">
                                                <span>0</span> <span>-</span> <span>7</span>
                                            </div>
                                            <div class="sidebar-trend-match-thumb">
                                                <a href="#"><img src="/local/templates/.default/img/blog/trend_match_thumb04.png" alt=""></a>
                                            </div>
                                            <div class="sidebar-trend-match-date">
                                                <span>OCTOBER 19, 2020</span>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="sidebar-trend-match-thumb">
                                                <a href="#"><img src="/local/templates/.default/img/blog/trend_match_thumb05.png" alt=""></a>
                                            </div>
                                            <div class="sidebar-trend-match-action">
                                                <span>0</span> <span>-</span> <span>3</span>
                                            </div>
                                            <div class="sidebar-trend-match-thumb">
                                                <a href="#"><img src="/local/templates/.default/img/blog/trend_match_thumb06.png" alt=""></a>
                                            </div>
                                            <div class="sidebar-trend-match-date">
                                                <span>OCTOBER 19, 2020</span>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="widget">
                                <div class="sidebar-widget-title mb-25">
                                    <h4>TAGS <span>post</span></h4>
                                </div>
                                <div class="sidebar-tag-list">
                                    <ul>
                                        <li><a href="#">pubg</a></li>
                                        <li><a href="#">dota 2</a></li>
                                        <li><a href="#">zombie</a></li>
                                        <li><a href="#">call of duty</a></li>
                                        <li><a href="#">development</a></li>
                                        <li><a href="#">zombieland 2</a></li>
                                    </ul>
                                </div>
                            </div>
                        </aside>
                    </div>
                </div>
            </div>
        </section>
        <!-- blog-area-end -->

    </main>
    <!-- main-area-end -->
<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>