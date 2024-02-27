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
                                <h2>contact <span>info</span></h2>
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

            <!-- contact-area -->
            <section class="contact-area pt-120 pb-120">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6">
                            <div id="contact-map"></div>
                        </div>
                        <div class="col-lg-6 pl-45">
                            <div class="section-title title-style-three mb-20">
                                <h2>CONTACT US ABOUT <span>PRESS</span></h2>
                            </div>
                            <div class="contact-info-list mb-40">
                                <ul>
                                    <li><i class="fas fa-map-marker-alt"></i>Walking Park, Los Angeles, Brockland, USA</li>
                                    <li><i class="fas fa-envelope"></i>info@cloux.com</li>
                                </ul>
                            </div>
                            <div class="contact-form">
                                <form action="#">
                                    <textarea name="message" id="message" placeholder="Write Message..."></textarea>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <input type="text" placeholder="Your Name">
                                        </div>
                                        <div class="col-md-6">
                                            <input type="email" placeholder="Your Mail">
                                        </div>
                                    </div>
                                    <button>SUBMIT MESSAGE</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- contact-area-end -->


            <!-- brand-area -->
            <div class="brand-area lite-gray-bg pb-170 pt-120">
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

        </main>
        <!-- main-area-end -->
        <?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>