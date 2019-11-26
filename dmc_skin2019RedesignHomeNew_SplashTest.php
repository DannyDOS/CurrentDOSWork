<style>
    html,
    body {
        font-family: 'work sans', arial, sans-serif;
        color: #4D4A49;
        font-size: 16px;
    }

    p {
        margin-top: 1em;
        margin-bottom: 1em;
    }

    p a {
        color: #005D6E;
        text-decoration: underline;
    }

    p a:hover {
        color: #1B9FA8;
    }

    iframe {
        border: none;
    }

    /* Target Wrapper end */

    .spacer-line {
        border-top: 1px solid rgba(0, 0, 0, .08);
    }

    .border-circle {
        border-radius: 50%;
    }

    .trustpilot-widget {
        max-height: 112px;
    }

    /* Home page */
    .hero {
        position: relative;
        max-width: 1280px;
        min-height: 357px;
        overflow: hidden;
    }

    .hero__link:hover .hero__img {
        opacity: 0.8;
    }

    .hero__link:hover .hero__con {
        -webkit-transform: scale(1.05, 1.05) translate(0%, -48%);
        -ms-transform: scale(1.05, 1.05) translate(0%, -48%);
        transform: scale(1.05, 1.05) translate(0%, -48%);
    }

    .hero__img {
        -webkit-transition: .4s;
        -o-transition: .4s;
        transition: .4s;
        width: 100%;
        position: absolute;
        left: 50%;
        -webkit-transform: translateZ(0) scale(1.0, 1.0);
        -webkit-transform: translate(-50%);
        -ms-transform: translate(-50%);
        transform: translate(-50%);
    }

    .hero__con {
        position: absolute;
        top: 50%;
        color: white;
        -webkit-transform: translateZ(0) scale(1.0, 1.0);
        -ms-transform: translate(0, -50%);
        transform: translate(0, -50%);
        max-width: 336px;
        max-height: 100%;
        -webkit-box-shadow: 0px 2px 6px rgba(0, 0, 0, .5);
        box-shadow: 0px 2px 6px rgba(0, 0, 0, .5);
        -webkit-transition: .4s;
        -o-transition: .4s;
        transition: .4s;
    }

    .hero__con--red {
        background: -webkit-gradient(linear, left top, left bottom, from(#BC4B51), to(#A32127));
        background: -webkit-linear-gradient(#BC4B51, #A32127);
        background: -o-linear-gradient(#BC4B51, #A32127);
        background: linear-gradient(#BC4B51, #A32127);
    }

    .hero__con--green {
        background: -webkit-gradient(linear, left top, left bottom, from(#005D6E), to(#004854));
        background: -webkit-linear-gradient(#005D6E, #004854);
        background: -o-linear-gradient(#005D6E, #004854);
        background: linear-gradient(#005D6E, #004854);
    }

    .hero__con--black {
        background: -webkit-gradient(linear, left top, left bottom, from(#4D4A49), to(#0D0C0C));
        background: -webkit-linear-gradient(#4D4A49, #0D0C0C);
        background: -o-linear-gradient(#4D4A49, #0D0C0C);
        background: linear-gradient(#4D4A49, #0D0C0C);
    }

    .cta__img {
        -webkit-transition: .2s;
        -o-transition: .2s;
        transition: .2s;
        position: relative;
        bottom: 0px;
    }

    .cta:hover .cta__img {
        -webkit-box-shadow: 0px 2px 6px rgba(0, 0, 0, .2);
        box-shadow: 0px 2px 6px rgba(0, 0, 0, .2);
        bottom: 2px;
    }

    .cta:hover .button--green {
        background: #1B9FA8;
    }

    /* Blog feed specific styling (home page) */
    .blogs-guides ul {
        list-style: none;
    }

    .headline {
        font-size: 18px;
        text-decoration: underline;
        display: inline-block;
        font-weight: bold;
        margin-bottom: 10px;
        margin-top: 30px;
    }

    .headline>a {
        font-weight: 600;
    }

    .headline~div {
        line-height: 24px;
    }

    .date {
        color: #928F8F;
        margin-bottom: 10px;
    }

    /* Blog feed specific styling END */
    /* Home page END */

    @media (max-width: 1293px) {

        .hero {
            max-width: 960px;
            min-height: 284px;
        }
    }

    @media (max-width: 767px) {
        .hero {
            min-height: 163px;
        }

        .hero__con {
            position: relative;
            -webkit-transform: translate(-50%);
            -ms-transform: translate(-50%);
            transform: translate(-50%);
            left: 50%;
            top: -10px;
            max-width: 375px !important;
        }

        .hero__imgwrap {
            height: 163px;
            position: relative;
            overflow: hidden;
        }

        .hero__img {
            bottom: 50%;
            -webkit-transform: translate(-50%, 50%);
            -ms-transform: translate(-50%, 50%);
            transform: translate(-50%, 50%);
        }

        .hero__link:hover .hero__con {
            -webkit-transform: scale(1, 1) translate(-50%);
            -ms-transform: scale(1, 1) translate(-50%);
            transform: scale(1, 1) translate(-50%);
        }

    }

</style>

<div class="hero mx-auto">
    <a class="hero__link" href="/kuechenarbeitsplatten">
        <div class="hero__imgwrap">
            <img class="hero__img" src="/media/gbu0/home-page-hero-blogger-boho-nordic.jpg" data-at2x="/media/gbu0/home-page-hero-blogger-boho-nordic@2x.jpg" alt="Diese Küche stellt eine Arbeitsplatte aus Eiche dar, die aufgrund Ihres einzigartigen Charakters zu den Worktop Express Bestsellern gehört.">
        </div>
        <div class="hero__con hero__con--red text-center px-4 offset-md-1">
            <div class="font-32 font-md-36 font-weight-5 uppercase font-36 font-weight-5 uppercase pt-4">SALE<br>Bis zu 50€ Rabatt*</div>
            <div class="button mt-4">Jetzt einkaufen</div>
            <div class="py-3 py-md-4 row-bs font-12 font-md-14">
                <div class="col-bs text-left uppercase" style="text-align:center!important;">
                    Endet am 15.5.
                </div>
            </div>
        </div>
    </a>
</div>

<div class="bg-xlight">
    <div class="container">
        <div class="row-bs d-none d-md-flex align-items-center justify-content-center py-4 text-center">
            <div class="col-md-6">
                <!-- TrustBox widget - Mini -->
                <!-- TrustBox widget - Micro Review Count -->
                <a href="https://de.trustpilot.com/review/worktop-express.de" target="_blank">
                    <img src="/media/gbu0/trustpilot-homepage-image.png" data-at2x="/media/gbu0/trustpilot-homepage-image@2x.png" alt="Trustpilot" width="240" height="113">
                    <div class="trustpilot-widget-splash" data-locale="de-DE" data-template-id="5419b6a8b0d04a076446a9ad" data-businessunit-id="536b79a2000064000578b70e" data-style-height="38px" data-style-width="100%" data-theme="light" style="position: relative;"><iframe frameborder="0" scrolling="no" title="Customer reviews powered by Trustpilot" src="https://widget.trustpilot.com/trustboxes/5419b6a8b0d04a076446a9ad/index.html?templateId=5419b6a8b0d04a076446a9ad&amp;businessunitId=536b79a2000064000578b70e#locale=de-DE&amp;styleHeight=38px&amp;styleWidth=100%25&amp;theme=light" style="position: relative; height: 38px; width: 100%; border-style: none; display: block; overflow: hidden;"></iframe></div>
                </a>
                <!-- End TrustBox widget -->
                <!-- TrustBox script -->
                <script type="text/javascript" src="//widget.trustpilot.com/bootstrap/v5/tp.widget.bootstrap.min.js" async=""></script>
                <!-- End Trustbox script -->
                <!-- End TrustBox widget -->
            </div>
            <div class="col-md-6">
                <div id="MyCustomTrustbadge" class="trusted-shops-badge" style="text-align:center;"></div>
            </div>
        </div>
    </div>
</div>
<!-- Needs to be updated to sale -->
<div class="container px-2 px-md-0">
    <div class="row-bs mx-0 pt-md-4">
        <div class="col-md py-2 px-md-0">
            <div class="card card--full">
                <a href="/massivholzarbeitsplatten.html">
                    <img class="card__img" src="/media/gbu0/massivholzarbeitsplatten-category-image.jpg" data-at2x="/media/gbu0/massivholzarbeitsplatten-category-image@2x.jpg" alt="Holzarbeitsplatten ansehen">
                    <div class="card__label px-1 py-2 font-22 font-weight-5 text-center">Massivholz Arbeitsplatten
                        <!-- Holzarbeitsplatten-->
                    </div>
                </a>
            </div>
        </div>
        <div class="col-md py-2 px-md-3">
            <div class="card card--full">
                <a href="/laminat-arbeitsplatten">
                    <img class="card__img" src="/media/gbu0/resopal-arbeitsplatten-category-image.jpg" data-at2x="/media/gbu0/resopal-arbeitsplatten-category-image@2x.jpg" alt="Resopal Arbeitsplatten ansehen">
                    <div class="card__label px-1 py-2 font-22 font-weight-5 text-center">Laminat Arbeitsplatten</div>
                </a>
            </div>
        </div>
        <div class="col-md py-2 px-md-0">
            <div class="card card--full">
                <a href="/compact-arbeitsplatten">
                    <img class="card__img" src="/media/gbu0/compact-arbeitsplatten-category-image.jpg" data-at2x="/media/gbu0/compact-arbeitsplatten-category-image@2x.jpg" alt="Compact Arbeitsplatten ansehen">
                    <div class="card__label px-1 py-2 font-22 font-weight-5 text-center">Compact Arbeitsplatten</div>
                </a>
            </div>
        </div>
        <div class="col-md py-2 pl-md-3 pr-md-0 dy_box_splash">
            <div class="card card--full">
                <a href="/kuechenarbeitsplatten-nach-mass">
                    <img class="card__img" src="/media/gbu0/holzarbeitsplatten-nach-mass-category-image.jpg" data-at2x="/media/gbu0/holzarbeitsplatten-nach-mass-category-image@2x.jpg" alt="Arbeitsplatte nach Maß anfertigen lassen">
                    <div class="card__label px-1 py-2 font-22 font-weight-5 text-center">Arbeitsplatten nach Maß</div>
                </a>
            </div>
        </div>
    </div>
    <h1 class="font-22 font-lg-26 font-weight-5 text-center uppercase pt-5 pb-3">Warum Worktop Express?</h1>
</div>
<!-- New Logos - Required -->
<div class="bg-xlight">
    <div class="container">
        <div class="row-bs py-4">
            <div class="col-md-4 text-center text-md-left px-0 py-2">
                <a class="d-flex flex-wrap" href="/lieferdetails.html">
                    <div class="col-2 offset-1 offset-md-0 p-0 py-1 text-center">
                        <svg height="42px" viewBox="0 0 10 12" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                            <g id="Mobile-Copy-6" stroke="none" stroke-width="1" fill="none">
                                <g id="Box-Copy-2" transform="translate(0.000000, 1.000000)" stroke="#005D6E">
                                    <polygon id="Polygon" points="5 0 9.33012702 2.5 9.33012702 7.5 5 10 0.669872981 7.5 0.669872981 2.5"></polygon>
                                    <path d="M0.669872981,3 L5,5" id="Line-2"></path>
                                    <path d="M9.33012702,3 L5,5" id="Line-3"></path>
                                    <path d="M5,10 L5,5" id="Line-4"></path>
                                </g>
                            </g>
                        </svg>
                    </div>
                    <div class="col-7 col-md pl-0 pl-md-3 font-weight-6 font-22 font-lg-26 font-xl-32">2-Mann-Service</div>
                    <div class="col-md-10 offset-md-2 py-2">All unsere Arbeitsplatten werden mit einem sicheren und zuverlässigen 2-Mann-Service geliefert.</div>
                </a>
            </div>
            <div class="col-md-4 text-center text-md-left px-0 py-2">
                <a class="d-flex flex-wrap" href="/kuechenarbeitsplatten-nach-mass">
                    <div class="col-2 offset-1 offset-md-0 p-0 py-1 text-center">
                        <svg height="42px" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 11.9 11.9" xml:space="preserve" fill="#005D6E">
                            <g>
                                <g>
                                    <path class="st0" d="M9.7,0.9c0.6,0.3,1.1,0.8,1.4,1.4l-7.8,7.8l-2.1,0.7l0.7-2.1L9.7,0.9 M9.5,0L9.5,0L1.2,8.3l0,0L0,12l3.7-1.2
                              l0,0l8.2-8.2L12,2.5C11.6,1.3,10.7,0.4,9.5,0L9.5,0z"></path>
                                </g>
                                <path class="st1" d="M3.7,10.6c-0.3-1.1-1.2-2-2.4-2.4"></path>
                                <path class="st1" d="M10.7,3.6c-0.3-1.1-1.2-2-2.4-2.4"></path>
                                <path class="st1" d="M1.2,11.4c-0.1-0.3-0.4-0.6-0.7-0.7"></path>
                            </g>
                        </svg>
                    </div>
                    <div class="col-7 col-md pl-0 pl-md-3 font-weight-6 font-22 font-lg-26 font-xl-32">
                        <!-- Maßanfertigungen --> Arbeitsplatten nach Maß</div>
                    <div class="col-md-10 offset-md-2 py-2">Mit unserem Arbeitsplatten Konfigurator können Sie Ihre Arbeitsplatte bequem von Zuhause aus selbst designen und bestellen.</div>
                </a>
            </div>
            <div class="col-md-4 text-center text-md-left px-0 py-2">
                <a class="d-flex flex-wrap" href="/kundenbewertungen.html">
                    <div class="col-2 offset-1 offset-md-0 p-0 py-1 text-center">
                        <svg height="50px" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 13 14" style="transform: translate(0, -1px);" xml:space="preserve">
                            <g id="Mobile-Copy-8" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                <polygon id="Star-Copy-2" stroke="#005D6E" points="6.5 8.21 3.85496636 10.1405765 4.87369336 7.02841906 2.22024568 5.10942353 5.49488722 5.11658094 6.5 2 7.50511278 5.11658094 10.7797543 5.10942353 8.12630664 7.02841906 9.14503364 10.1405765"></polygon>
                            </g>
                        </svg>
                    </div>
                    <div class="col-7 col-md pl-0 pl-md-3 font-weight-6 font-22 font-lg-26 font-xl-32">800+ Bewertungen</div>
                    <div class="col-md-10 offset-md-2 py-2">Die Zufriedenheit unserer Kunden steht bei uns an oberster Stelle und spiegelt sich in vielen 5-Sterne-Bewertungen bei Trustpilot wieder.</div>
                </a>
            </div>
        </div>
    </div>
</div>
<!-- TrustBox widget MOBILE ONLY - Mini -->
<div class="d-flex d-md-none ml-3 py-4 trustpilot-widget" data-locale="en-GB" data-template-id="53aa8807dec7e10d38f59f32" data-businessunit-id="4d8135f300006400050f2585" data-style-height="150px" data-style-width="100%" data-theme="light">
    <a href="https://uk.trustpilot.com/review/www.worktop-express.co.uk" target="_blank" title="View TrustPilot reviews">Trustpilot</a>
</div>
<!-- End TrustBox MOBILE ONLY widget -->
<div class="container">
    <div class="font-22 font-md-xl text-center uppercase pt-5 pb-3">Bestseller</div>
    <div class="row-bs pb-5">
        <div class="col-6 col-md p-2 py-md-0 d-flex">
            <div class="card card--auto">
                <a href="/massivholz-arbeitsplatten/arbeitsplatte-eiche" title="Eiche">
                    <img class="card__img" src="skins/skin2019_redesign_home_new/media/best-sellers/arbeitsplatte-eiche-bestseller.jpg" data-at2x="skins/skin2019_redesign_home_new/media/best-sellers/	arbeitsplatte-eiche-bestseller@2x.jpg" alt="Eiche">
                    <div class="card__label p-2 text-center">Eiche<br><span class="font-weight-6">155&euro;</span></div>
                </a>
            </div>
        </div>
        <div class="col-6 col-md p-2 p-md-0 d-flex">
            <div class="card card--auto">
                <a href="/massivholz-arbeitsplatten/premium-arbeitsplatte-eiche" title="Premium Eiche">
                    <img class="card__img" src="skins/skin2019_redesign_home_new/media/best-sellers/	premium-arbeitsplatte-eiche-bestseller.jpg" data-at2x="skins/skin2019_redesign_home_new/media/best-sellers/premium-arbeitsplatte-eiche-bestseller@2x.jpg" alt="Premium Eiche">
                    <div class="card__label p-2 text-center">Premium Eiche<br><span class="font-weight-6">180&euro;</span></div>
                </a>
            </div>
        </div>
        <div class="col-6 col-md p-2 py-md-0 d-flex">
            <div class="card card--auto">
                <a href="/massivholz-arbeitsplatten/arbeitsplatte-buche" title="Buche">
                    <img class="card__img" src="skins/skin2019_redesign_home_new/media/best-sellers/arbeitsplattebuche-bestseller.jpg" data-at2x="skins/skin2019_redesign_home_new/media/best-sellers/	arbeitsplatte-buche-bestseller@2x.jpg" alt="Buche">
                    <div class="card__label p-2 text-center">Buche<br><span class="font-weight-6">125&euro;</span></div>
                </a>
            </div>
        </div>
        <div class="col-6 col-md p-2 p-md-0 d-flex">
            <div class="card card--auto">
                <a href="/massivholz-arbeitsplatten/karamell-bambus-arbeitsplatte" title="Karamell Bambus">
                    <img class="card__img" src="skins/skin2019_redesign_home_new/media/best-sellers/	karamell-bambus-arbeitsplatte-bestseller.jpg" data-at2x="skins/skin2019_redesign_home_new/media/best-sellers/	karamell-bambus-arbeitsplatte-bestseller@2x.jpg" alt="Karamell Bambus">
                    <div class="card__label p-2 text-center">Karamell Bambus<br><span class="font-weight-6">190&euro;</span></div>
                </a>
            </div>
        </div>
        <div class="col-6 col-md p-2 py-md-0 d-flex">
            <div class="card card--auto">
                <a href="/resopal-arbeitsplatten/rustikales-holz-arbeitsplatte" title="Rustikales Holz">
                    <img class="card__img" src="skins/skin2019_redesign_home_new/media/best-sellers/rustikales-holz-arbeitsplatte-bestseller.jpg" data-at2x="skins/skin2019_redesign_home_new/media/best-sellers/rustikales-holz-arbeitsplatte-bestseller@2x.jpg" alt="Rustikales Holz">
                    <div class="card__label p-2 text-center">Rustikales Holz<br><span class="font-weight-6">205&euro;</span></div>
                </a>
            </div>
        </div>
        <div class="col-6 col-md p-2 py-md-0 pl-md-0 d-flex">
            <div class="card card--auto">
                <a href="/resopal-arbeitsplatten/arbeitsplatte-schwarzer-schiefer" title="Schwarzer Schiefer">
                    <img class="card__img" src="skins/skin2019_redesign_home_new/media/best-sellers/arbeitsplatte-schwarzer-schiefer-bestseller.jpg" data-at2x="skins/skin2019_redesign_home_new/media/best-sellers/arbeitsplatte-schwarzer-schiefer-bestseller@2x.jpg" alt="Schwarzer Schiefer">
                    <div class="card__label p-2 text-center">Schwarzer Schiefer<br><span class="font-weight-6">205&euro;</span></div>
                </a>
            </div>
        </div>
    </div>
    <div class="row-bs">
        <div class="col-12-bs col-xl-6">
            <h2 class="font-24 font-md-28 font-xl-36 font-weight-6 text-left">Küchenarbeitsplatten</h2>
            - Willkommen bei Worktop-express.de
            <p class="font-weight-6">Worktop Express® beliefert Deutschland mit stilvollen Arbeitsplatten von außergewöhnlicher Qualität und zu fairen Preisen. Es ist unser Geschäft Sie mit Ihrer neuen Küchenplatte auszustatten und wir bieten Ihnen von Anfang bis Ende den besten Komfort bei Ihrem Einkauf.</p>
            <p>Unser umfangreiches Sortiment an <a href="/kuechenarbeitsplatten">Küchenarbeitsplatten</a> umfasst eine breite Palette an unterschiedlichen Stilen, inklusive der beliebten <a href="/massivholz-arbeitsplatten/arbeitsplatte-eiche">Arbeitsplatten aus Eiche</a>. In unserem Online-Shop finden Sie Arbeitsplatten aus über 20 verschiedenen Holzarten und Laminat-Arbeitsplatten in den verschiedensten Dekoren, von Holzoptik bis hin zu Stein-Nachbildungen. Wir führen außerdem eine Auswahl an <a href="/holzarbeitsplatten/zubehor-fur-arbeitsplatten.html">Zubehör</a>, wie <a href="/resopal-kuechenrueckwand">Küchenrückwände</a>, <a href="/massivholz-regale/eiche-massivholzregale">Schweberegale</a> oder <a href="/holzarbeitsplatten/installation-kit.html">Installations-Kits</a>, mit dem Sie Ihre ausgewählte Arbeitsfläche komplementieren können.</p>
            <p>Neben unseren gelisteten Arbeitsplatten bieten wir zudem Dienstleistungen an, mit denen wir Ihre Arbeitsplatte nach individuellen Maßen anfertigen können. Dieser <a href="/kuechenarbeitsplatten-nach-mass">Maßanfertigungsservice</a> gibt Ihnen verschiedene Optionen die Küchenarbeitsplatte anpassen zu lassen. Finden Sie jetzt mehr über Ihre Möglichkeiten heraus. </p>
        </div>
        <div class="col-12-bs col-xl-6">
            <div class="uppercase pb-3 pt-4 pt-xl-0 text-center text-xl-left font-22 font-xl-26">Neue Produkte:</div>
            <div class="d-flex flex-wrap">
                <div class="col-md-4 col-xl-6 pl-0 pb-3">
                    <div class="card card--full">
                        <a href="resopal-arbeitsplatten/arbeitsplatte-raja-black" title="Arbeitsplatte Raja Black">
                            <div class="d-flex">
                                <div class="col-5-bs p-1">
                                    <img class="card__img" src="/media/gbu0/prodxl/arbeitsplatte-raja-black-lg.jpg" data-no-retina alt="Arbeitsplatte Raja Black">
                                </div>
                                <div class="col-7 p-1">
                                    <div class="card__label">
                                        <div class="font-weight-6">Raja Black</div>
                                        <div class="uppercase font-14">Resopal</div>
                                    </div>
                                    <div class="card__item card__item--stickright font-weight-6 pt-1">170&euro;</div>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-md-4 col-xl-6 pl-0 pb-3">
                    <div class="card card--full">
                        <a href="resopal-arbeitsplatten/arbeitsplatte-cerasum-mare" title="Arbeitsplatte Cerasum Mare">
                            <div class="d-flex">
                                <div class="col-5-bs p-1">
                                    <img class="card__img" src="/media/gbu0/prodxl/arbeitsplatte-cerasum-mare-lg.jpg" data-no-retina alt="Arbeitsplatte Cerasum Mare">
                                </div>
                                <div class="col-7 p-1">
                                    <div class="card__label">
                                        <div class="font-weight-6">Cerasum Mare</div>
                                        <div class="uppercase font-14">Resopal</div>
                                    </div>
                                    <div class="card__item card__item--stickright font-weight-6 pt-1">170&euro;</div>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-md-4 col-xl-6 pl-0 pb-3">
                    <div class="card card--full">
                        <a href="resopal-arbeitsplatten/arbeitsplatte-eternal-iron" title="Arbeitsplatte Eternal Iron">
                            <div class="d-flex">
                                <div class="col-5-bs p-1">
                                    <img class="card__img" src="/media/gbu0/prodxl/arbeitsplatte-eternal-iron-lg.jpg" data-no-retina alt="Arbeitsplatte Eternal Iron">
                                </div>
                                <div class="col-7 p-1">
                                    <div class="card__label">
                                        <div class="font-weight-6">Eternal Iron</div>
                                        <div class="uppercase font-14">Resopal</div>
                                    </div>
                                    <div class="card__item card__item--stickright font-weight-6 pt-1">205&euro;</div>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-md-4 col-xl-6 pl-0 pb-3">
                    <div class="card card--full">
                        <a href="resopal-arbeitsplatten/arbeitsplatte-core-maple" title="Arbeitsplatte Core Maple">
                            <div class="d-flex">
                                <div class="col-5-bs p-1">
                                    <img class="card__img" src="/media/gbu0/prodxl/arbeitsplatte-core-maple-lg.jpg" data-no-retina alt="Arbeitsplatte Core Maple">
                                </div>
                                <div class="col-7 p-1">
                                    <div class="card__label">
                                        <div class="font-weight-6">Core Maple</div>
                                        <div class="uppercase font-14">Resopal</div>
                                    </div>
                                    <div class="card__item card__item--stickright font-weight-6 pt-1">125&euro;</div>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-md-4 col-xl-6 pl-0 pb-3">
                    <div class="card card--full">
                        <a href="resopal-arbeitsplatten/arbeitsplatte-ruby-limescale" title="Arbeitsplatte Ruby Limescale">
                            <div class="d-flex">
                                <div class="col-5-bs p-1">
                                    <img class="card__img" src="/media/gbu0/prodxl/arbeitsplatte-ruby-limescale-lg.jpg" data-no-retina alt="Arbeitsplatte Ruby Limescale">
                                </div>
                                <div class="col-7 p-1">
                                    <div class="card__label">
                                        <div class="font-weight-6">Ruby Limescale</div>
                                        <div class="uppercase font-14">Resopal</div>
                                    </div>
                                    <div class="card__item card__item--stickright font-weight-6 pt-1">125&euro;</div>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-md-4 col-xl-6 pl-0 pb-3">
                    <div class="card card--full">
                        <a href="/laminat-arbeitsplatten/arbeitsplatte-steinoptik-ipanema-grau" title="Steinoptik – Ipanema Grau">
                            <div class="d-flex">
                                <div class="col-5-bs p-1">
                                    <img class="card__img" src="media/swatches/arbeitsplatte-steinoptik-ipanema-grau-swatch.jpg" data-at2x="media/swatches/arbeitsplatte-steinoptik-ipanema-grau-swatch@2x.jpg" alt="Arbeitsplatte Steinoptik – Ipanema Grau">
                                </div>
                                <div class="col-7 p-1">
                                    <div class="card__label">
                                        <div class="font-weight-6">Steinoptik – Ipanema Grau</div>
                                        <div class="uppercase font-14">Laminat</div>
                                    </div>
                                    <div class="card__item card__item--stickright font-weight-6 pt-1">170&euro;</div>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="bg-xlight">
    <div class="container py-5">
        <div class="row-bs">
            <a class="col-md-4 text-center px-1 px-lg-4 py-3 cta d-flex flex-wrap justify-content-center align-items-start" href="/arbeitsplatten-planungstool">
                <img class="cta__img border-circle mb-5" src="skins/skin2019_redesign_home_new/media/arbeitsplatten-planungstool-musterservice.jpg" alt="Gestalten Sie Ihre Traumküche" />
                <div class="col-12-bs font-26 font-weight-5">Entwerfen Sie Ihre Traumküche</div>
                <p class="d-none d-md-block">Unser Arbeitsplatten – Planungstool hilft Ihnen die perfekte Arbeitsplatte zu finden. Kombinieren Sie Farben und Schranktürstile mit unseren Arbeitsflächen, bis Sie die richtige finden.</p>
                <div class="button button--green align-self-end my-2 col-10 col-xl-8">Küche entwerfen</div>
            </a>
            <a class="col-md-4 text-center px-1 px-lg-4 py-3 cta d-flex flex-wrap justify-content-center align-items-start" href="/kuechenarbeitsplatte-muster">
                <img class="cta__img border-circle mb-5" src="skins/skin2019_redesign_home_new/media/resopal-arbeitsplatten-musterpaket-lg.jpg" alt="Bestellen Sie Muster" />
                <div class="col-12-bs font-26 font-weight-5">Bestellen Sie Muster</div>
                <p class="d-none d-md-block">Überzeugen Sie sich von der außergewöhnlichen Qualität unserer Produkte bequem von Zuhause aus, bevor Sie Ihre Bestellung aufgeben.</p>
                <div class="button button--green align-self-end my-2 col-10 col-xl-8">Muster bestellen</div>
            </a>
            <a class="col-md-4 text-center px-1 px-lg-4 py-3 cta d-flex flex-wrap justify-content-center align-items-start" href="/arbeitsplatten-konfigurator">
                <img class="cta__img border-circle mb-5" src="skins/skin2019_redesign_home_new/media/arbeitsplatten-konfigurator-new-homepage.jpg" alt="Arbeitsplatte nach Ma&szlig; gestalten" />
                <div class="col-12-bs font-26 font-weight-5">Arbeitsplatte nach Ma<span style="text-transform: lowercase;">ß</span> Gestalten</div>
                <p class="d-none d-md-block">Entwerfen, kalkulieren Sie den Preis und bestellen Sie Ihre Arbeitsplatte online - eine schnelle und einfache Möglichkeit Arbeitsplatten nach Maß zu kaufen.</p>
                <div class="button button--green align-self-end my-2 col-10 col-xl-8">Arbeitsplatte gestalten</div>
            </a>
        </div>
    </div>
</div>
<div class="container">
    <div class="row-bs align-items-center justify-content-center py-5">
        <div class="col-12-bs col-xl-10 order-1 order-xl-2 text-center">
            <h3 class="font-26 font-weight-6">Ihr Online Arbeitsplatten-Shop</h3>
            <p>Wenn Sie die Qualität unserer Arbeitsplatten selbst erfahren möchten, ist dies mit unserem <a href="/kuechenarbeitsplatten-nach-mass">Musterservice</a> bequem von zu Hause aus möglich oder alternativ können Sie auch unseren <a href="/kuechenarbeitsplatten-showroom">Showroom</a> in Viernheim besuchen. Das Worktop Express - Team steht Ihnen gerne mit Rat und Tat zur Seite, um Ihnen Ihr Kauferlebnis so angenehm wie möglich zu gestalten. Unsere Kunden stehen für uns an oberster Stelle, was sich in vielen 5-Sterne Bewertungen widerspiegelt.</p>
            <p>Ein sicherer und zuverlässiger Lieferservice ist uns hierbei ein wichtiges Anliegen, weshalb wir mit unserem internen 2-Mann-Service und auch mithilfe eines Speditionspartners bis in einen Raum Ihrer Wahl ausliefern. Bitten lesen Sie für mehr Informationen unsere <a href="/lieferdetails.html">Lieferdetails</a>. Sollten Sie irgendwelche Fragen über unsere Lieferung, Produkte oder ein anderes Anliegen haben, zögern Sie bitte nicht uns per E-Mail oder <a href="tel:06204/935 33 33">Telefon</a> zu kontaktieren, wir stehen Ihnen gerne zur Verfügung.</p>
        </div>
    </div>
    <div class="spacer-line"></div>
    <div class="row-bs blogs-guides py-5">
        <!-- Blog and info guides style only -->
        <div class="col-md-6 d-none d-md-block">
            <a class="heading underline font-weight-6" href="/blog/">Das Neuste vom Worktop Express® Blog - April 2019 </a>
            <p>
                <span class="headline">
                    <a href="https://www.worktop-express.de/blog/compact-arbeitsplatten-im-badezimmer-verwenden/" rel="bookmark" title="Permanent Link to Compact Arbeitsplatten im Badezimmer verwenden">Compact Arbeitsplatten im Badezimmer verwenden</a>
                </span>
            </p>
            <p></p>
            <p>Compact Arbeitsplatten bieten eine moderne Arbeitsfläche für Küchen, sie können jedoch auch in anderen Räumen des Hauses verwendet werden. Ein gutes Beispiel dafür ist die Verwendung als solide Badezimmerarbeitsplatte aus Kompaktlaminat. Ihre Herstellung macht sie porenfrei und wasserdicht, ideal für Räume mit hoher Luftfeuchtigkeit oder für Räume, in denen sie häufig mit Wasser in Kontakt […]</p>
            <p></p>
            <span class="date">28/03/2019</span>
            <p></p>
            <p>
                <span class="headline">
                    <a href="https://www.worktop-express.de/blog/moderner-landhausstil-top-3-ideen-mit-unseren-kuechenarbeitsplatten/" rel="bookmark" title="Permanent Link to Moderner Landhausstil: Top 3 Ideen mit unseren Küchenarbeitsplatten">Moderner Landhausstil: Top 3 Ideen mit unseren Küchenarbeitsplatten</a>
                </span>
            </p>
            <p></p>
            <p>Dass ‚Landhausstil‘ nicht mehr nur traditionell bedeutet, wissen wir schon seit längerem. Doch wie lässt sich eigentlich ein moderner Landhausstil gestalten? In unserem Online-Shop finden Sie eine breite Auswahl an unterschiedlichen Arbeitsplatten, die Ihnen dabei helfen können genau diesen Look zu schaffen. Hier sind unsere drei Favoriten: Weiße Küchenarbeitsplatten Quelle : houzz Diese Küche zeigt […]</p>
            <p></p>
            <span class="date">06/11/2018</span>
            <p></p>
            <p>
                <span class="headline">
                    <a href="https://www.worktop-express.de/blog/sparen-sie-jetzt-bis-zu-50e-auf-ihre-bestellung/" rel="bookmark" title="Permanent Link to Sparen Sie jetzt bis zu 50€ auf Ihre Bestellung">Sparen Sie jetzt bis zu 50€ auf Ihre Bestellung</a>
                </span>
            </p>
            <p></p>
            <p>Wenn Sie sich dazu entschlossen haben, Ihrer Küche einen neuen Look zu verleihen oder Lust auf ein neues DIY-Projekt haben, dann sollten Sie jetzt unbedingt von unserem Angebot profitieren. Bis einschließlich 31. Oktober können Sie mit dem Rabattcode SPAR25 25€ bei Ihrer Bestellung über 250€ sparen. Und es kommt noch besser: Sollten Sie für über […]</p>
            <p></p>
            <span class="date">17/10/2018</span>
            <p></p>
        </div>
        <div class="offset-md-1 col-md-5 splash-blog">
            <a class="heading underline font-weight-6" href="/information-guides/">Info-Guides</a>
            <div class="font-22 font-weight-6 pt-5">Am beliebtesten:</div>
            <p>
                <a href="https://www.worktop-express.de/installation-und-pflege" rel="bookmark" title="Worktop Express - Installation &amp; Pflege">Worktop Express® - Installation &amp; Pflege</a>
            </p>
            <p>
                <a href="https://www.worktop-express.de/information-guides/arbeitsplatten-richtig-oelen/" rel="bookmark" title="Wie Sie Arbeitsplatten richtig Ölen">Wie Sie Arbeitsplatten richtig Ölen</a>
            </p>
            <p>
                <a href="https://www.worktop-express.de/information-guides/alles-ueber-resopal-arbeitsplatten/" rel="bookmark" title="Alles über Resopal Arbeitsplatten">Alles über Resopal Arbeitsplatten</a>
            </p>
            <p>
                <a href="https://www.worktop-express.de/information-guides/auf-den-punkt-gebracht-eine-beschichtete-arbeitsplatte-reparieren/" rel="bookmark" title="Eine beschichtete Arbeitsplatte reparieren">Eine beschichtete Arbeitsplatte reparieren</a>
            </p>
            <p>
                <a href="https://www.worktop-express.de/information-guides/gebogene-arbeitsplatte-in-die-richtige-form-bringen/" rel="bookmark" title="Wie Sie eine gebogene Arbeitsplatte wieder in die richtige Form bringen">Wie Sie gebogene Arbeitsplatten wieder in Form bringen</a>
            </p>
            <div class="font-22 font-weight-6 pt-4">Kürzlich:</div>
            <p>
                <span class="headline">
                    <a href="https://www.worktop-express.de/blog/compact-arbeitsplatten-im-badezimmer-verwenden/" rel="bookmark" title="Permanent Link to Compact Arbeitsplatten im Badezimmer verwenden">Compact Arbeitsplatten im Badezimmer verwenden</a>
                </span>
                <span class="date">28/03/2019</span>
            </p>
            <p>
                <span class="headline">
                    <a href="https://www.worktop-express.de/blog/moderner-landhausstil-top-3-ideen-mit-unseren-kuechenarbeitsplatten/" rel="bookmark" title="Permanent Link to Moderner Landhausstil: Top 3 Ideen mit unseren Küchenarbeitsplatten">Moderner Landhausstil: Top 3 Ideen mit unseren Küchenarbeitsplatten</a>
                </span>
                <span class="date">06/11/2018</span>
            </p>
            <p>
                <span class="headline">
                    <a href="https://www.worktop-express.de/blog/sparen-sie-jetzt-bis-zu-50e-auf-ihre-bestellung/" rel="bookmark" title="Permanent Link to Sparen Sie jetzt bis zu 50€ auf Ihre Bestellung">Sparen Sie jetzt bis zu 50€ auf Ihre Bestellung</a>
                </span>
                <span class="date">17/10/2018</span>
            </p>
            <p>
                <span class="headline">
                    <a href="https://www.worktop-express.de/blog/top-4-trendfarben-2018-zur-kombination-mit-bambus-kuechenarbeitsplatten/" rel="bookmark" title="Permanent Link to Top 4 Trendfarben 2018 zur Kombination mit Bambus Küchenarbeitsplatten">Top 4 Trendfarben 2018 zur Kombination mit Bambus Küchenarbeitsplatten</a>
                </span>
                <span class="date">10/10/2018</span>
            </p>
        </div>
    </div>
</div>
