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
                                <h2>Our <span>Community</span></h2>
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

            <!-- community-area -->
            <div class="community-area primary-bg pt-120 pb-175">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-8">
                            <div class="community-wrap">
                                <div class="table-responsive-xl">
                                    <table class="table mt-0">
                                        <thead>
                                            <tr>
                                                <th scope="col">mark all as soon</th>
                                                <th scope="col">VOICES</th>
                                                <th scope="col">POSTS</th>
                                                <th scope="col">See</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr class="community-post-type">
                                                <th><span>Game Concept</span></th>
                                            </tr>
                                            <tr>
                                                <th scope="row">
                                                    <div class="community-post-wrap">
                                                        <div class="community-post-content">
                                                            <a href="#">Electronic game that involves</a>
                                                            <span>by <a href="#">Tanvir snap</a> Yesterday 12 : 19</span>
                                                        </div>
                                                        <div class="community-post-tag">
                                                            <a href="#">@All</a>
                                                        </div>
                                                    </div>
                                                </th>
                                                <td>3</td>
                                                <td>4</td>
                                                <td class="community-bell"><a href="#"><i class="far fa-bell"></i></a></td>
                                            </tr>
                                            <tr>
                                                <th scope="row">
                                                    <div class="community-post-wrap">
                                                        <div class="community-post-content">
                                                            <a href="#">A vertically scrolling video</a>
                                                            <span>by <a href="#">Killer12</a> Yesterday 12 : 19</span>
                                                        </div>
                                                        <div class="community-post-tag">
                                                            <a href="#">@All</a>
                                                        </div>
                                                    </div>
                                                </th>
                                                <td>5</td>
                                                <td>9</td>
                                                <td class="community-bell"><a href="#"><i class="far fa-bell"></i></a></td>
                                            </tr>
                                            <tr>
                                                <th scope="row">
                                                    <div class="community-post-wrap">
                                                        <div class="community-post-content">
                                                            <a href="#">Electronic game that involves</a>
                                                            <span>by <a href="#">Tanvir snap</a> Yesterday 12 : 19</span>
                                                        </div>
                                                        <div class="community-post-tag">
                                                            <a href="#">@All</a>
                                                            <a href="#">@Design</a>
                                                        </div>
                                                    </div>
                                                </th>
                                                <td>7</td>
                                                <td>12</td>
                                                <td class="community-bell"><a href="#"><i class="far fa-bell"></i></a></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <div class="table-responsive-xl">
                                    <table class="table">
                                        <tbody>
                                            <tr class="community-post-type">
                                                <th><span>Zombie Island</span></th>
                                            </tr>
                                            <tr>
                                                <th scope="row">
                                                    <div class="community-post-wrap">
                                                        <div class="community-post-content">
                                                            <a href="#">Electronic game that involves</a>
                                                            <span>by <a href="#">Tanvir snap</a> Yesterday 12 : 19</span>
                                                        </div>
                                                        <div class="community-post-tag">
                                                            <a href="#">@All</a>
                                                        </div>
                                                    </div>
                                                </th>
                                                <td>3</td>
                                                <td>4</td>
                                                <td class="community-bell"><a href="#"><i class="far fa-bell"></i></a></td>
                                            </tr>
                                            <tr>
                                                <th scope="row">
                                                    <div class="community-post-wrap">
                                                        <div class="community-post-content">
                                                            <a href="#">A vertically scrolling video</a>
                                                            <span>by <a href="#">Killer12</a> Yesterday 12 : 19</span>
                                                        </div>
                                                        <div class="community-post-tag">
                                                            <a href="#">@Design</a>
                                                        </div>
                                                    </div>
                                                </th>
                                                <td>5</td>
                                                <td>9</td>
                                                <td class="community-bell"><a href="#"><i class="far fa-bell"></i></a></td>
                                            </tr>
                                            <tr>
                                                <th scope="row">
                                                    <div class="community-post-wrap">
                                                        <div class="community-post-content">
                                                            <a href="#">Electronic game that involves</a>
                                                            <span>by <a href="#">Tanvir snap</a> Yesterday 12 : 19</span>
                                                        </div>
                                                        <div class="community-post-tag">
                                                            <a href="#">@All</a>
                                                        </div>
                                                    </div>
                                                </th>
                                                <td>7</td>
                                                <td>12</td>
                                                <td class="community-bell"><a href="#"><i class="far fa-bell"></i></a></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <div class="create-topic">
                                    <span>Viewing 6 topics - (of 7 Total)</span>
                                    <form action="#">
                                        <input type="text" placeholder="Must be logged in to create new topics.">
                                        <button class="btn">submit</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <aside class="community-sidebar">
                                <div class="widget community-widget mb-30">
                                    <div class="community-widget-title mb-25">
                                        <h5>share public</h5>
                                    </div>
                                    <div class="community-sidebar-social">
                                        <ul>
                                            <li><a href="#"><i class="fab fa-facebook-f"></i>Share With Facebook</a></li>
                                            <li><a href="#"><i class="fab fa-twitter"></i>Share With Twitter</a></li>
                                            <li><a href="#"><i class="fab fa-pinterest-p"></i>Share With Pinterest</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="widget community-widget">
                                    <div class="community-widget-title mb-25">
                                        <h5>new released game</h5>
                                    </div>
                                    <div class="community-sidebar-game">
                                        <ul>
                                            <li>
                                                <div class="sidebar-new-game-thumb">
                                                    <a href="#">
                                                        <img src="/local/templates/.default/img/images/sidebar_new_game01.jpg" alt="">
                                                    </a>
                                                </div>
                                                <div class="sidebar-new-game-content">
                                                    <span>Yesterday 12 : 19</span>
                                                    <h5><a href="#">Sky Warrior Game involves</a></h5>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="sidebar-new-game-thumb">
                                                    <a href="#">
                                                        <img src="/local/templates/.default/img/images/sidebar_new_game02.jpg" alt="">
                                                    </a>
                                                </div>
                                                <div class="sidebar-new-game-content">
                                                    <span>Yesterday 12 : 19</span>
                                                    <h5><a href="#">Sky Warrior Game involves</a></h5>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="sidebar-new-game-thumb">
                                                    <a href="#">
                                                        <img src="/local/templates/.default/img/images/sidebar_new_game03.jpg" alt="">
                                                    </a>
                                                </div>
                                                <div class="sidebar-new-game-content">
                                                    <span>Yesterday 12 : 19</span>
                                                    <h5><a href="#">Sky Warrior Game involves</a></h5>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </aside>
                        </div>
                    </div>
                </div>
                <div class="community-bg-shape"><img src="/local/templates/.default/img/images/community_bg_shape.png" alt=""></div>
            </div>
            <!-- community-area-end -->

        </main>
        <!-- main-area-end -->
        <?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>
