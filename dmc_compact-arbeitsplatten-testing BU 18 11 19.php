<style>
    body {
        font-family: 'work sans';
    }

    .cat-card-container__price--adjust {
        font-size: 12px;
        width: 100%;
    }

    .cat-card-container__title--adjust {
        padding-bottom: 40px;
    }

    .page-heading {
        font-family: 'Work Sans', sans-serif;
        font-weight: 600;
        font-size: 1.4em;
        margin: 5px 0 .5em;
    }

    .filter-range,
    .filters-mobile,
    .filters {
        color: #4D4A49;
        font-size: 16px;
    }

    .category-label::after {
        display: block!important;
        position: absolute;
        top: 4px;
        left: 4px;
        font-size: 12px;
        transition: top 0.2s;
        border-radius: 0;
        padding: 3px 5px;
        box-shadow: 0 1px 2px 0 rgba(0, 0, 0, 0.25);
    }

    .category-label:hover::after {
        top: -30px;
    }

    .category-label--new::after {
        content: "New";
        background-color: #FFF;
        color: #3261df;
    }

    .category-label--sale::after {
        content: "Sale";
        background-color: #DF4132;
        color: white;
    }

    .category-label--slimline::after {
        content: "Slimline";
        background-color: #005D6E;
        color: #fff;
    }

    .minimenu {
        position: relative;
        background: #fff;
        border: 1px solid #DEDCDC;
        cursor: default;
        stroke: #4D4A49;
    }

    .minimenu--active {
        background: #f5f3f2;
    }

    .minimenu--optactive {
        border-bottom: solid 1px #1B9FA8;
    }

    .minimenu--mobile {
        background: #DEDCDC;
        border: 1px solid #bdbdbd;
    }

    .minimenu__name::before {
        content: '';
        width: 6px;
        height: 6px;
        display: inline-block;
        border-bottom: 1px solid;
        border-right: 1px solid;
        -webkit-transform: rotate(45deg);
        -ms-transform: rotate(45deg);
        transform: rotate(45deg);
        margin: 0 8px 3px 0;
    }

    .minimenu__name--noarrow::before {
        display: none;
    }

    .minimenu__details {
        position: absolute;
        display: none;
        width: -webkit-max-content;
        width: -moz-max-content;
        width: max-content;
        max-width: 310px;
        min-width: 260px;
        background: #F5F3F2;
        color: #4D4A49;
        z-index: 10;
        top: 34px;
        left: -6px;
        overflow: auto;
        -webkit-box-shadow: 0px 5px 3px -3px rgba(0, 0, 0, 0.25);
        box-shadow: 0px 5px 3px -3px rgba(0, 0, 0, 0.25);
    }

    .minimenu__details--active {
        display: block;
    }

    .minimenu__details__item {
        cursor: pointer;
    }

    .minimenu__details__item:hover {
        color: #1B9FA8;
    }

    .minimenu__details__item--active {
        background: #005D6E;
        color: #fff;
    }

    .minimenu__details__item--active:hover {
        color: #fff;
    }

    .minimenu__details__item--active:hover::after {
        content: 'x';
        position: absolute;
        right: 10px;
        opacity: 0.6;
    }

    .minimenu__details__item--fade {
        opacity: .5;
    }

    .minimenu__details__item--remove {
        display: none!important;
    }

    .filter-sort__sel {
        padding: 6px 4px;
        color: #928F8F;
        border-radius: 3px;
        font-family: 'work sans';
    }

    .filter-sort__sel--mob {
        position: absolute;
        top: 0;
        height: 100%;
        width: 100%;
        opacity: 0;
    }

    .filter-tags__index {
        color: #928F8F;
    }

    .filter-tags__item {
        background: #928F8F;
        color: #fff;
    }

    .filter-tags__item__close:hover {
        cursor: pointer;
    }

    .filter-tags__clear {
        cursor: pointer;
    }

    .filter-range__indi {
        border: 1px #928F8F;
        border-style: dashed;
        position: relative;
        border-radius: 0;
        height: 100%;
        width: 100%;
    }

    .filter-range__indi__link {
        color: #005D6E;
        cursor: pointer;
    }

    .filter__warning {
            position: fixed;
            z-index: 100;
            top: 50%;
            left: 50%;
            -webkit-transform: translate(-50%, -50%);
            -ms-transform: translate(-50%, -50%);
            transform: translate(-50%, -50%);
            background: -webkit-gradient(linear, left top, left bottom, from(#4D4A49), to(#333130));
            background: -webkit-linear-gradient(#4D4A49, #333130);
            background: -o-linear-gradient(#4D4A49, #333130);
            background: linear-gradient(#4D4A49, #333130);
            color: white;
            border-radius: 4px;
            -webkit-box-shadow: -8px 30px 14px -14px rgba(0, 0, 0, 0.2), 8px 30px 14px -14px rgba(0, 0, 0, 0.2);
            box-shadow: -8px 30px 14px -14px rgba(0, 0, 0, 0.2), 8px 30px 14px -14px rgba(0, 0, 0, 0.2);
            opacity: 1;
            -webkit-transition: 0.4s;
            -o-transition: 0.4s;
            transition: 0.4s;
        }

        .filters-mobile {
            display: none;
        }

        .filters-mobile--active {
            display: block;
            position: fixed;
            z-index: 1100;
            width: 100%;
            height: 100%;
            left: 0;
            top: 0;
            background: #4D4A49;
        }

        .filters-mobile__close {
            cursor: pointer;
        }

        .filters-mobile__accord {
            overflow: auto;
            position: relative;
            max-height: 78vh;
        }

        .filters-mobile__bottom {
            position: absolute;
            bottom: 0;
            width: 100%;
        }

        .filter-mobile__sort {
            position: relative;
        }

        .colour-indicator--black {
            background: #4D4A49;
        }

        .colour-indicator--white {
            background: #F5F3F2;
        }

        .colour-indicator--light {
            background: #fce9b5;
        }

        .colour-indicator--lwood {
            background: #efd1ae;
        }

        .colour-indicator--mwood {
            background: #d2a061;
        }

        .colour-indicator--dwood {
            background: #795138;
        }

        .colour-indicator--grey {
            background: #928F8F;
        }

        .colour-indicator--blue {
            background: #007FBA;
        }

        .colour-indicator--red {
            background: #BC4B51;
        }

    .filter-range__item {
        overflow: hidden;
    }

    @media (min-width:768px) {

        .filter-range__item {
            max-width: 20%;
        }

        .filter-range__item--breakout {
            max-width: 40%;
        }

        .filter-range__indi {
            border-radius: 50%;
            width: 134px;
            height: 134px;
        }

    }

    @media (min-width:1294px) {
        .filter-range__item {
            max-width: none;
        }
        .filter-range__indi {
            width: 190px;
            height: 190px;
        }

        .cat-card-container__price--adjust {
        font-size: 16px;
    }

    }

</style>


<div>
    <div class="page-heading h1">
        <h1>Compact Arbeitsplatte</h1>n
    </div>
    <div class="dy-cutoff-message"></div>
    <p class="mb-2">Diese aus mehreren robusten Schichten aufgebauten Oberflächen sind eine belastbare Option mit einem schlanken Profil. Compact Arbeitsplatten sind unglaublich praktisch, da sie wasserdicht, äußerst hitzebeständig und widerstandsfähig gegenüber Abrieb und Stöße sind.</p>
</div>
    <!-- Desktop Filters -->

    <div class="filters m-0 d-none d-md-flex flex-wrap align-items-center">
        <div class="row-bs col-12-bs col-xl">
            <div class="minimenu mr-1 my-1 p-2" data-filter="farbe">
                <div class="minimenu__name uppercase">farbe</div>
                <div class="minimenu__details py-3 px-3">
                    <div class="card minimenu__details__item d-flex p-3 my-2" data-filter-type="farbe" data-filter-value="weiss">
                        <div class="border-circle colour-indicator colour-indicator--black mr-2"></div>
                        <div>Wei&szlig;<span class="minimenu__details__ind"></span></div>
                    </div>
                    <div class="card minimenu__details__item d-flex p-3 my-2" data-filter-type="farbe" data-filter-value="grau">
                        <div class="border-circle colour-indicator colour-indicator--white mr-2"></div>
                        <div>Grau<span class="minimenu__details__ind"></span></div>
                    </div>
                    <div class="card minimenu__details__item d-flex p-3 my-2" data-filter-type="farbe" data-filter-value="schwarz">
                        <div class="border-circle colour-indicator colour-indicator--light mr-2"></div>
                        <div>Schwarz<span class="minimenu__details__ind"></span></div>
                    </div>
                    <div class="card minimenu__details__item d-flex p-3 my-2" data-filter-type="farbe" data-filter-value="braun">
                        <div class="border-circle colour-indicator colour-indicator--black mr-2"></div>
                        <div>Braun<span class="minimenu__details__ind"></span></div>
                    </div>
                </div>
            </div>
            <div class="minimenu mr-1 my-1 p-2" data-filter="finish">
                <div class="minimenu__name uppercase">Finish</div>
                <div class="minimenu__details py-3 px-3">
                    <div class="card minimenu__details__item d-flex p-3 my-2" data-filter-type="finish" data-filter-value="strukturiert-matt">
                        <div>Strukturiert matt<span class="minimenu__details__ind"></span></div>
                    </div>
                    <div class="card minimenu__details__item d-flex p-3 my-2" data-filter-type="finish" data-filter-value="premium-glatt">
                        <div>Premium glatt<span class="minimenu__details__ind"></span></div>
                    </div>
                    <div class="card minimenu__details__item d-flex p-3 my-2" data-filter-type="finish" data-filter-value="extra-matt">
                        <div>Extra matt<span class="minimenu__details__ind"></span></div>
                    </div>
                    
                    <div class="card minimenu__details__item d-flex p-3 my-2" data-filter-type="finish" data-filter-value="matt">
                        <div>Matt<span class="minimenu__details__ind"></span></div>
                    </div>
                </div>
            </div>
            <div class="minimenu mr-1 my-1 p-2" data-filter="kante">
                <div class="minimenu__name uppercase">Kante</div>
                <div class="minimenu__details py-3 px-3">
                    <div class="card minimenu__details__item d-flex p-3 my-2" data-filter-type="kante" data-filter-value="rechteckig">
                        <div>Rechteckig<span class="minimenu__details__ind"></span></div>
                    </div>
                </div>
            </div>
            <div class="minimenu mr-1 my-1 p-2" data-filter="laenge">
                <div class="minimenu__name uppercase">l&auml;nge</div>
                <div class="minimenu__details py-3 px-3">
                    <div class="card minimenu__details__item d-flex p-3 my-2" data-filter-type="laenge" data-filter-value="3m">
                        <div>3m<span class="minimenu__details__ind"></span></div>
                    </div>
                    <div class="mb-2">
                        <a href="gbu0-display/worktop_cutting_service.html" target="_blank">
                            <div class="font-weight-3">Need a specific size? You can use our <span class="underline">bespoke service</span> to customise your surfaces.</div>
                        </a>
                    </div>
                </div>
            </div>
            <div class="minimenu mr-1 my-1 p-2" data-filter="tiefe">
                <div class="minimenu__name uppercase">Tiefe</div>
                <div class="minimenu__details py-3 px-3">
                    <div class="card minimenu__details__item d-flex p-3 my-2" data-filter-type="tiefe" data-filter-value="645mm">
                        <div>645mm<span class="minimenu__details__ind"></span></div>
                    </div>
                    <div class="card minimenu__details__item d-flex p-3 my-2" data-filter-type="tiefe" data-filter-value="650mm">
                        <div>650mm<span class="minimenu__details__ind"></span></div>
                    </div>
                    <div class="card minimenu__details__item d-flex p-3 my-2" data-filter-type="tiefe" data-filter-value="950mm">
                        <div>950mm<span class="minimenu__details__ind"></span></div>
                    </div>
                </div>
            </div>
            <div class="minimenu mr-1 my-1 p-2" data-filter="staerke">
                <div class="minimenu__name uppercase">St&auml;rke</div>
                <div class="minimenu__details py-3 px-3">
                    <div class="card minimenu__details__item d-flex p-3 my-2" data-filter-type="staerke" data-filter-value="12mm">
                        <div>12mm<span class="minimenu__details__ind"></span></div>
                    </div>
                </div>
            </div>
            
        </div>
        <div class="order-2 order-xl-1 my-1">
            <div class="filter-sort col-bs text-right">
                <span class="uppercase">Sortieren nach</span>
                <select class="filter-sort__sel">
                    <option value="price-des">Preis: Absteigend</option>
                    <option value="price-asc">Preis: Aufsteigend</option>
                </select>
            </div>
        </div>
        <div class="filter-tags row-bs align-items-center pt-2 col-bs order-1 col-8 col-xl-12">
            <div class="filter-tags__index font-14">Showing <span class="filter-tags__index__num font-weight-6"></span> ranges</div>
            <div class="filter-tags__con d-flex flex-wrap"></div>
            <div class="filter-tags__clear d-none underline">Clear&nbsp;All</div>
        </div>
    </div>

    <!-- Mobile FIlter & Sort -->

    <div class="d-flex d-md-none">
        <div class="col-6 pl-0 pr-1">
            <div class="minimenu mobile-filter d-flex align-items-center p-2">
                <svg xmlns="http://www.w3.org/2000/svg" width="12" height="7.5" viewBox="0 0 12 7.5" class="mr-2">
                    <g transform="translate(-19 -303.25)">
                        <line x2="10" transform="translate(21 304)" fill="none" stroke-width="1.5"></line>
                        <line x2="10" transform="translate(21 307)" fill="none" stroke-width="1.5"></line>
                        <line x2="10" transform="translate(21 310)" fill="none" stroke-width="1.5"></line>
                        <line x2="1" transform="translate(19 304)" fill="none" stroke-width="1.5"></line>
                        <line x2="1" transform="translate(19 307)" fill="none" stroke-width="1.5"></line>
                        <line x2="1" transform="translate(19 310)" fill="none" stroke-width="1.5"></line>
                    </g>
                </svg>
                <div class="minimenu__name minimenu__name--noarrow uppercase">filter</div>
            </div>
        </div>
        <div class="col-6 pr-0 pl-1">
            <div class="filter-mobile__sort">
                <label for="filter-mobile__sort">
                    <div class="d-block minimenu mobile-sort p-2">
                        <div class="minimenu__name uppercase">sort</div>
                    </div>
                </label>
                <select class="minimenu filter-sort__sel filter-sort__sel--mob col-bs" id="filter-mobile__sort">
                    <option value="popularity">Beliebtheit</option>
                    <option value="price-des">Preis: aufsteigend</option>
                    <option value="price-asc">Preis: absteigend</option>
                </select>
            </div>
        </div>
    </div>
    <div class="filters-mobile font-16 d-md-none">
        <div class="background-grey p-2">
            <div class="row-bs">
                <div class="col-6 pr-1">
                    <div class="minimenu minimenu--mobile mobile-filter d-flex align-items-center px-2 py-1">
                        <svg xmlns="http://www.w3.org/2000/svg" width="12" height="7.5" viewBox="0 0 12 7.5" class="mr-2">
                            <g transform="translate(-19 -303.25)">
                                <line x2="10" transform="translate(21 304)" fill="none" stroke-width="1.5"></line>
                                <line x2="10" transform="translate(21 307)" fill="none" stroke-width="1.5"></line>
                                <line x2="10" transform="translate(21 310)" fill="none" stroke-width="1.5"></line>
                                <line x2="1" transform="translate(19 304)" fill="none" stroke-width="1.5"></line>
                                <line x2="1" transform="translate(19 307)" fill="none" stroke-width="1.5"></line>
                                <line x2="1" transform="translate(19 310)" fill="none" stroke-width="1.5"></line>
                            </g>
                        </svg>
                        <div class="minimenu__name minimenu__name--noarrow uppercase">filter</div>
                    </div>
                </div>
                <div class="col-6 pl-1">
                    <label for="filter-mobile__sort">
                        <div class="d-block minimenu minimenu--mobile mobile-sort px-2 py-1">
                            <div class="minimenu__name uppercase">Sortieren</div>
                        </div>
                    </label>
                    <select class="minimenu filter-sort__sel filter-sort__sel--mob col-bs" id="filter-mobile__sort">
                        <option value="popularity">Beliebtheit</option>
                        <option value="price-des">Preis: aufsteigend</option>
                        <option value="price-asc">Preis: absteigend</option>
                    </select>
                </div>
            </div>
        </div>
        <div class="filters-mobile__accord">
            <div class="filters-mobile__close colour-white py-3 d-flex align-items-center pl-2">
                <div class="font-26 mobmenu__arrow mobmenu__arrow--back"></div>
                <div>FILTER</div>
            </div>
            <div class="collapse my-2">
                <div class="collapse__head background-grey5 colour-white d-flex align-items-center background-grey py-3">
                    <div class="col-bs font-weight-5">FARBE</div>
                    <div class="arrow mx-3"></div>
                </div>
                <div class="collapse__wrap background-grey">
                    <div class="minimenu__details__item d-flex p-3 minimenu__details__item--remove" data-filter-type="farbe" data-filter-value="weiss">
                        <div>Wei&szlig;<span class="minimenu__details__ind"> (0)</span></div>
                    </div>
                    <div class="minimenu__details__item d-flex p-3 minimenu__details__item--remove" data-filter-type="farbe" data-filter-value="grau">
                        <div>Grau<span class="minimenu__details__ind"> (0)</span></div>
                    </div>
                    <div class="minimenu__details__item d-flex p-3 minimenu__details__item--remove" data-filter-type="farbe" data-filter-value="schwarz">
                        <div>Schwarz<span class="minimenu__details__ind"> (0)</span></div>
                    </div>
                    <div class="minimenu__details__item d-flex p-3 minimenu__details__item--remove" data-filter-type="farbe" data-filter-value="braun">
                        <div>Braun<span class="minimenu__details__ind"> (0)</span></div>
                    </div>
                </div>
            </div>

            <div class="collapse my-2">
                <div class="collapse__head background-grey5 colour-white d-flex align-items-center background-grey py-3">
                    <div class="col-bs font-weight-5">FINISH</div>
                    <div class="arrow mx-3"></div>
                </div>
                <div class="collapse__wrap background-grey">
                    <div class="minimenu__details__item d-flex p-3 minimenu__details__item--remove" data-filter-type="finish" data-filter-value="strukturiert-matt">
                        <div>Strukturiert matt<span class="minimenu__details__ind"> (0)</span></div>
                    </div>
                    <div class="minimenu__details__item d-flex p-3 minimenu__details__item--remove" data-filter-type="finish" data-filter-value="premium-glatt">
                        <div>Premium glatt<span class="minimenu__details__ind"> (0)</span></div>
                    </div>
                    <div class="minimenu__details__item d-flex p-3 minimenu__details__item--remove" data-filter-type="finish" data-filter-value="extra-matt">
                        <div>Extra matt<span class="minimenu__details__ind"> (0)</span></div>
                    </div>
                    <div class="minimenu__details__item d-flex p-3 minimenu__details__item--remove" data-filter-type="finish" data-filter-value="matt">
                        <div>Matt<span class="minimenu__details__ind"> (0)</span></div>
                    </div>
                </div>
            </div>
            
            <div class="collapse my-2">
                <div class="collapse__head background-grey5 colour-white d-flex align-items-center background-grey py-3">
                    <div class="col-bs font-weight-5">KANTE</div>
                    <div class="arrow mx-3"></div>
                </div>
                <div class="collapse__wrap background-grey">
                    <div class="minimenu__details__item d-flex p-3 minimenu__details__item--remove" data-filter-type="kante" data-filter-value="rechteckig">
                        <div>Rechteckig<span class="minimenu__details__ind"> (0)</span></div>
                    </div>
                </div>
            </div>
            <div class="collapse my-2">
                <div class="collapse__head background-grey5 colour-white d-flex align-items-center background-grey py-3">
                    <div class="col-bs font-weight-5">L&Auml;NGE</div>
                    <div class="arrow mx-3"></div>
                </div>
                <div class="collapse__wrap background-grey">
                    <div class="minimenu__details__item d-flex p-3 minimenu__details__item--remove" data-filter-type="laenge" data-filter-value="3m">
                        <div>3m<span class="minimenu__details__ind"> (0)</span></div>
                    </div>
                </div>
            </div>
            <div class="collapse my-2">
                <div class="collapse__head background-grey5 colour-white d-flex align-items-center background-grey py-3">
                    <div class="col-bs font-weight-5">TIEFE</div>
                    <div class="arrow mx-3"></div>
                </div>
                <div class="collapse__wrap background-grey">
                    <div class="minimenu__details__item d-flex p-3 minimenu__details__item--remove" data-filter-type="tiefe" data-filter-value="645mm">
                        <div>645mm<span class="minimenu__details__ind"> (0)</span></div>
                    </div>
                    <div class="minimenu__details__item d-flex p-3 minimenu__details__item--remove" data-filter-type="tiefe" data-filter-value="650mm">
                        <div>650mm<span class="minimenu__details__ind"> (0)</span></div>
                    </div>
                    <div class="minimenu__details__item d-flex p-3 minimenu__details__item--remove" data-filter-type="tiefe" data-filter-value="950mm">
                        <div>950mm<span class="minimenu__details__ind"> (0)</span></div>
                    </div>
                </div>
            </div>
            <div class="collapse my-2">
                <div class="collapse__head background-grey5 colour-white d-flex align-items-center background-grey py-3">
                    <div class="col-bs font-weight-5">ST&Auml;RKE</div>
                    <div class="arrow mx-3"></div>
                </div>
                <div class="collapse__wrap background-grey">
                    <div class="minimenu__details__item d-flex p-3 minimenu__details__item--remove" data-filter-type="staerke" data-filter-value="12mm">
                        <div>12mm<span class="minimenu__details__ind"> (0)</span></div>
                    </div>
                </div>
            </div>
            
        </div>
        <div class="filters-mobile__bottom background-grey6">
            <div class="d-flex py-4 text-center">
                <div class="col-6">
                    <div class="button colour-white filters-mobile__clear">Clear filters</div>
                </div>
                <div class="col-6">
                    <div class="button button--white filters-mobile__apply">Apply filters</div>
                </div>
            </div>
        </div>
    </div>


    <!-- End of Mobile FIlter & Sort -->

    <div class="filter-range text-center row-bs px-2">

        <!--  Row 1 -->
        <div class="filter-range__item col-6 col-md-2 col-xl-2 p-1" data-price="325" data-farbe="weiss,grau" data-finish="strukturiert-matt" data-laenge="3m" data-kante="rechteckig" data-tiefe="645mm" data-staerke="12mm" >
            <div class="card card--full">
                <a href="compact-arbeitsplatten/compact-kuchenarbeitsplatten-betonoptik">
                <img class="cat-card-container__img" src="media/swatches/compact-kuechenarbeitsplatten-betonoptik-swatch.jpg" data-at2x="media/swatches/compact-kuechenarbeitsplatten-betonoptik-swatch@2x.jpg" alt="Compact Küchenarbeitsplatten Betonoptik">
                    <div class="cat-card-container__title cat-card-container__title--adjust">Betonoptik</div>
                    <div class="cat-card-container__price cat-card-container__price--adjust"><sup class="cat-card-container__price--sup">ab </sup>325&euro; / m</div>
                </a>
            </div>
        </div>

        <div class="filter-range__item col-6 col-md-2 col-xl-2 p-1" data-price="350" data-farbe="weiss" data-finish="extra-matt" data-laenge="3m" data-kante="rechteckig" data-tiefe="645mm,950mm" data-staerke="12mm" >
            <div class="card card--full">
                <a href="compact-arbeitsplatten/compact-arbeitsplatten-marmor-optik">
                <img class="cat-card-container__img" src="media/swatches/compact-arbeitsplatten-marmor-optik-swatch.jpg" data-at2x="media/swatches/compact-arbeitsplatten-marmor-optik-swatch@2x.jpg" alt="Compact Arbeitsplatten Marmor-Optik">
                    <div class="cat-card-container__title cat-card-container__title--adjust">Marmor-Optik</div>
                    <div class="cat-card-container__price cat-card-container__price--adjust"><sup class="cat-card-container__price--sup">ab </sup>350&euro; / m</div>
                </a>
            </div>
        </div>

        <div class="filter-range__item col-6 col-md-2 col-xl-2 p-1" data-price="275" data-farbe="braun,grau" data-finish="strukturiert-matt" data-laenge="3m" data-kante="rechteckig" data-tiefe="650mm,950mm" data-staerke="12mm" >
            <div class="card card--full">
                <a href="compact-arbeitsplatten/caldeira-zenith-arbeitsplatte">
                <img class="cat-card-container__img" src="media/swatches/caldeira-zenith-arbeitsplatte-swatch.jpg" data-at2x="media/swatches/caldeira-zenith-arbeitsplatte-swatch@2x.jpg" alt="Caldeira Zenith Arbeitsplatte">
                    <div class="cat-card-container__title cat-card-container__title--adjust">Caldeira Zenith</div>
                    <div class="cat-card-container__price cat-card-container__price--adjust"><sup class="cat-card-container__price--sup">ab </sup>275&euro; / m</div>
                </a>
            </div>
        </div>

        <div class="filter-range__item col-6 col-md-2 col-xl-2 p-1" data-price="275" data-farbe="shwarz,grau" data-finish="strukturiert-matt" data-laenge="3m" data-kante="rechteckig" data-tiefe="650mm,950mm" data-staerke="12mm" >
            <div class="card card--full">
                <a href="compact-arbeitsplatten/magma-zenith-arbeitsplatte">
                <img class="cat-card-container__img" src="media/swatches/zenith-magma-arbeitsplatte-swatch.jpg" data-at2x="media/swatches/zenith-magma-arbeitsplatte-swatch@2x.jpg" alt="Magma Zenith Arbeitsplatte">
                    <div class="cat-card-container__title cat-card-container__title--adjust">Magma Zenith</div>
                    <div class="cat-card-container__price cat-card-container__price--adjust"><sup class="cat-card-container__price--sup">ab </sup>275&euro; / m</div>
                </a>
            </div>
        </div>

        <div class="filter-range__item col-6 col-md-2 col-xl-2 p-1" data-price="275" data-farbe="braun" data-finish="strukturiert-matt" data-laenge="3m" data-kante="rechteckig" data-tiefe="650mm,950mm" data-staerke="12mm" >
            <div class="card card--full">
                <a href="compact-arbeitsplatten/rouille-zenith-arbeitsplatte">
                <img class="cat-card-container__img" src="media/swatches/rouille-zenith-arbeitsplatte-swatch.jpg" data-at2x="media/swatches/rouille-zenith-arbeitsplatte-swatch@2x.jpg" alt="Rouille Zenith Arbeitsplatte">
                    <div class="cat-card-container__title cat-card-container__title--adjust">Rouille Zenith</div>
                    <div class="cat-card-container__price cat-card-container__price--adjust"><sup class="cat-card-container__price--sup">ab </sup>275&euro; / m</div>
                </a>
            </div>
        </div>

        <div class="filter-range__item col-6 col-md-2 col-xl-2 p-1" data-price="285" data-farbe="weiss,grau" data-finish="premium-glatt" data-laenge="3m" data-kante="rechteckig" data-tiefe="645mm,950mm" data-staerke="12mm" >
            <div class="card card--full">
                <a href="compact-arbeitsplatten/compact-arbeitsplatte-grauer-marmor">
                <img class="cat-card-container__img" src="media/swatches/grey-marble-solid-laminate-root-swatch.jpg" data-at2x="media/swatches/grey-marble-solid-laminate-root-swatch@2x.jpg" alt="Grauer Marmor Arbeitsplatte">
                    <div class="cat-card-container__title cat-card-container__title--adjust">Grauer Marmor</div>
                    <div class="cat-card-container__price cat-card-container__price--adjust"><sup class="cat-card-container__price--sup">ab </sup>285&euro; / m</div>
                </a>
            </div>
        </div>

        <div class="filter-range__item col-6 col-md-2 col-xl-2 p-1" data-price="325" data-farbe="weiss" data-finish="premium-glatt" data-laenge="3m" data-kante="rechteckig" data-tiefe="650mm,950mm" data-staerke="12mm" >
            <div class="card card--full">
                <a href="compact-arbeitsplatten/marmor-veneto-zenith-arbeitsplatte">
                <img class="cat-card-container__img" src="media/swatches/marble-veneto-solid-laminate-root-swatch.jpg" data-at2x="media/swatches/marble-veneto-solid-laminate-root-swatch@2x.jpg" alt="Marmor Veneto Arbeitsplatte">
                    <div class="cat-card-container__title cat-card-container__title--adjust">Marmor Veneto</div>
                    <div class="cat-card-container__price cat-card-container__price--adjust"><sup class="cat-card-container__price--sup">ab </sup>325&euro; / m</div>
                </a>
            </div>
        </div>

        <div class="filter-range__item col-6 col-md-2 col-xl-2 p-1" data-price="385" data-farbe="weiss" data-finish="premium-glatt" data-laenge="3m" data-kante="rechteckig" data-tiefe="645mm,950mm" data-staerke="12mm" >
            <div class="card card--full">
                <a href="compact-arbeitsplatten/compact-arbeitsplatte-quarz-weiss">
                <img class="cat-card-container__img" src="media/swatches/white-quartz-solid-laminate-root-swatch.jpg" data-at2x="media/swatches/white-quartz-solid-laminate-root-swatch@2x.jpg" alt="Wei&szlig; Quarz Arbeitsplatte">
                    <div class="cat-card-container__title cat-card-container__title--adjust">Wei&szlig;er Quarz</div>
                    <div class="cat-card-container__price cat-card-container__price--adjust"><sup class="cat-card-container__price--sup">ab </sup>385&euro; / m</div>
                </a>
            </div>
        </div>

        <div class="filter-range__item col-6 col-md-2 col-xl-2 p-1" data-price="385" data-farbe="weiss" data-finish="strukturiert-matt" data-laenge="3m" data-kante="rechteckig" data-tiefe="645mm,950mm" data-staerke="12mm" >
            <div class="card card--full">
                <a href="compact-arbeitsplatten/compact-arbeitsplatte-terrazzo-weiss">
                <img class="cat-card-container__img" src="media/swatches/white-terrazzo-solid-laminate-root-swatch.jpg" data-at2x="media/swatches/white-terrazzo-solid-laminate-root-swatch@2x.jpg" alt="Wei&szlig; Terrazzo Arbeitsplatte">
                    <div class="cat-card-container__title cat-card-container__title--adjust">Wei&szlig;er Terrazzo</div>
                    <div class="cat-card-container__price cat-card-container__price--adjust"><sup class="cat-card-container__price--sup">ab </sup>385&euro; / m</div>
                </a>
            </div>
        </div>


        <div class="p-2 d-flex col-bs col-md-auto align-items-center order-1">
            <div class="filter-range__indi d-flex align-items-center justify-content-center p-3 d-none">
                <div class="text-center px-1">
                    <div>Diese Ergebnisse haben<br class="d-md-none" /> Filter angewendet,</div>
                    <div class="filter-range__indi__link underline">Alle <span class="filter-range__index"></span> Produkte anzeigen</div>
                </div>
            </div>
        </div>
    </div>

    <div>
        <div class="page-heading h2">
            <h2>Dünne Arbeitsplatten:</h2>
        </div>
        <p class="mb-2">Dünne Arbeitsplatten aus unserem Sortiment benötigen keine spezifischen Werkzeuge zur Installation und können größtenteils auf dieselbe Weise wie Laminat-Arbeitsplatten zugeschnitten und montiert werden. Dadurch sparen Sie Geld bei der Montage der Compact Arbeitsplatte verglichen mit einer massiven Steinplatte, welche sie imitiert.</p>
        <p class="mb-2">Diese Arbeitsplatten bestehen aus mehreren Laminatschichten und sind langlebiger als herkömmliche Laminat-Arbeitsplatten, was sie ideal für lebhafte Haushalte macht. Ihre feste, porenfreie Konstruktion gewährleistet, dass sie resistent gegen Schimmel, Mehltau, Bakterienwachstum und Flecken sind. Compact Arbeitsplatten können einfach mit einem weichen Tuch und warmem Seifenwasser gereinigt werden, wodurch sie äußerst pflegeleicht sind.</p>
    </div>



<script src="/media/pdp/script/product-filters.js"></script>

<!--
    <div class="prod-sorted col swatch-col-5-spaced swatch-mcol-2-spaced">
    <a href="compact-arbeitsplatten/compact-kuchenarbeitsplatten-betonoptik">
      <img src="media/swatches/compact-kuechenarbeitsplatten-betonoptik-swatch.jpg" data-at2x="media/swatches/compact-kuechenarbeitsplatten-betonoptik-swatch@2x.jpg" alt="Compact Küchenarbeitsplatten Betonoptik">
        <h3><span class="title">Betonoptik</span></h3>
    </a>
		<a href="compact-arbeitsplatten/compact-arbeitsplatten-marmor-optik">
      <img src="media/swatches/compact-arbeitsplatten-marmor-optik-swatch.jpg" data-at2x="media/swatches/compact-arbeitsplatten-marmor-optik-swatch@2x.jpg" alt="Compact Arbeitsplatten Marmor-Optik">
        <h3><span class="title">Marmor-Optik</span></h3>
    </a>
    <a href="compact-arbeitsplatten/caldeira-zenith-arbeitsplatte">
      <img src="media/swatches/caldeira-zenith-arbeitsplatte-swatch.jpg" data-at2x="media/swatches/caldeira-zenith-arbeitsplatte-swatch@2x.jpg" alt="Caldeira Zenith Arbeitsplatte">
        <h3><span class="title">Caldeira Zenith</span></h3>
    </a>
    <a href="compact-arbeitsplatten/magma-zenith-arbeitsplatte">
      <img src="media/swatches/zenith-magma-arbeitsplatte-swatch.jpg" data-at2x="media/swatches/zenith-magma-arbeitsplatte-swatch@2x.jpg" alt="Magma Zenith Arbeitsplatte">
        <h3><span class="title">Magma Zenith</span></h3>
    </a>
    <a href="compact-arbeitsplatten/rouille-zenith-arbeitsplatte">
      <img src="media/swatches/rouille-zenith-arbeitsplatte-swatch.jpg" data-at2x="media/swatches/rouille-zenith-arbeitsplatte-swatch@2x.jpg" alt="Rouille Zenith Arbeitsplatte">
        <h3><span class="title">Rouille Zenith</span></h3>
    </a>  
    <a href="compact-arbeitsplatten/compact-arbeitsplatte-grauer-marmor" class="new">
      <img src="media/swatches/grey-marble-solid-laminate-root-swatch.jpg" data-at2x="media/swatches/grey-marble-solid-laminate-root-swatch@2x.jpg" alt="Grauer Marmor Arbeitsplatte">
        <h3><span class="title">Grauer Marmor</span></h3>
    </a>
    <a href="compact-arbeitsplatten/marmor-veneto-zenith-arbeitsplatte" class="new">
      <img src="media/swatches/marble-veneto-solid-laminate-root-swatch.jpg" data-at2x="media/swatches/marble-veneto-solid-laminate-root-swatch@2x.jpg" alt="Marmor Veneto Arbeitsplatte">
        <h3><span class="title">Marmor Veneto</span></h3>
    </a>
    <a href="compact-arbeitsplatten/compact-arbeitsplatte-quarz-weiss" class="new">
      <img src="media/swatches/white-quartz-solid-laminate-root-swatch.jpg" data-at2x="media/swatches/white-quartz-solid-laminate-root-swatch@2x.jpg" alt="Wei&szlig; Quarz Arbeitsplatte">
        <h3><span class="title">Wei<span class="lowercase">&szlig;</span>er Quarz</span></h3>
    </a>
    <a href="compact-arbeitsplatten/compact-arbeitsplatte-terrazzo-weiss" class="new">
      <img src="media/swatches/white-terrazzo-solid-laminate-root-swatch.jpg" data-at2x="media/swatches/white-terrazzo-solid-laminate-root-swatch@2x.jpg" alt="Wei&szlig; Terrazzo Arbeitsplatte">
        <h3><span class="title">Wei<span class="lowercase">&szlig;</span>er Terrazzo</span></h3>
    </a>
  </div>

-->