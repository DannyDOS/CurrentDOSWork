<style>
    body {
        font-family: 'work sans';
    }

    .cat-card-container__price--adjust {
        font-size: 12px;
        width: 100%;
    }

    .cat-card-container__title--adjust {
        padding-bottom: 36px;
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
        <h1>Laminat-Arbeitsplatten</h1>
    </div>
    <div class="dy-delivery-detail-change"></div>
    <p class="mb-2">Sind Sie auf der Suche nach einer preiswerten, attraktiven Arbeitsfläche für Ihre Küche? Bei uns finden Sie passende Laminat-Arbeitsplatten, die nicht nur im Budget liegen, sondern auch strapazierfähig und einfach zu reinigen sind. Eine Laminat-Arbeitsplatte ist eine pflegeleichte Wahl, die zu vielzähligen Einrichtungsstilen passt.</p>


</div>


<!-- Desktop Filters -->

<div class="filters m-0 d-none d-md-flex flex-wrap align-items-center">
    <div class="row-bs col-12-bs col-xl">
        <div class="minimenu mr-1 my-1 p-2" data-filter="farbe">
            <div class="minimenu__name uppercase">farbe</div>
            <div class="minimenu__details py-3 px-3">
                <div class="card minimenu__details__item d-flex p-3 my-2" data-filter-type="farbe" data-filter-value="schwarz">
                    <div class="border-circle colour-indicator colour-indicator--black mr-2"></div>
                    <div>Schwarz<span class="minimenu__details__ind"></span></div>
                </div>
                <div class="card minimenu__details__item d-flex p-3 my-2" data-filter-type="farbe" data-filter-value="weiss">
                    <div class="border-circle colour-indicator colour-indicator--white mr-2"></div>
                    <div>Weiss<span class="minimenu__details__ind"></span></div>
                </div>
                <div class="card minimenu__details__item d-flex p-3 my-2" data-filter-type="farbe" data-filter-value="hell">
                    <div class="border-circle colour-indicator colour-indicator--light mr-2"></div>
                    <div>Hell<span class="minimenu__details__ind"></span></div>
                </div>
                <div class="card minimenu__details__item d-flex p-3 my-2" data-filter-type="farbe" data-filter-value="helles-holz">
                    <div class="border-circle colour-indicator colour-indicator--black mr-2"></div>
                    <div>Helles Holz<span class="minimenu__details__ind"></span></div>
                </div>
                <div class="card minimenu__details__item d-flex p-3 my-2" data-filter-type="farbe" data-filter-value="mittleres-holz">
                    <div class="border-circle colour-indicator colour-indicator--white mr-2"></div>
                    <div>Mittleres Holz<span class="minimenu__details__ind"></span></div>
                </div>
                <div class="card minimenu__details__item d-flex p-3 my-2" data-filter-type="farbe" data-filter-value="dunkles-holz">
                    <div class="border-circle colour-indicator colour-indicator--light mr-2"></div>
                    <div>Dunkles Holz<span class="minimenu__details__ind"></span></div>
                </div>
                <div class="card minimenu__details__item d-flex p-3 my-2" data-filter-type="farbe" data-filter-value="grau">
                    <div class="border-circle colour-indicator colour-indicator--light mr-2"></div>
                    <div>Grau<span class="minimenu__details__ind"></span></div>
                </div>
                <div class="card minimenu__details__item d-flex p-3 my-2" data-filter-type="farbe" data-filter-value="gruen">
                    <div class="border-circle colour-indicator colour-indicator--light mr-2"></div>
                    <div>Gruen<span class="minimenu__details__ind"></span></div>
                </div>
                <div class="card minimenu__details__item d-flex p-3 my-2" data-filter-type="farbe" data-filter-value="braun">
                    <div class="border-circle colour-indicator colour-indicator--light mr-2"></div>
                    <div>Braun<span class="minimenu__details__ind"></span></div>
                </div> 
                <div class="card minimenu__details__item d-flex p-3 my-2" data-filter-type="farbe" data-filter-value="beige">
                    <div class="border-circle colour-indicator colour-indicator--light mr-2"></div>
                    <div>Beige<span class="minimenu__details__ind"></span></div>
                </div>
            </div>
        </div>
        <div class="minimenu mr-1 my-1 p-2" data-filter="finish">
            <div class="minimenu__name uppercase">Finish</div>
            <div class="minimenu__details py-3 px-3">
                <div class="card minimenu__details__item d-flex p-3 my-2" data-filter-type="finish" data-filter-value="premium">
                    <div>Premium<span class="minimenu__details__ind"></span></div>
                </div>
                <div class="card minimenu__details__item d-flex p-3 my-2" data-filter-type="finish" data-filter-value="standard">
                    <div>Standard<span class="minimenu__details__ind"></span></div>
                </div>
                <div class="card minimenu__details__item d-flex p-3 my-2" data-filter-type="finish" data-filter-value="hochglanz">
                    <div>Hochglanz<span class="minimenu__details__ind"></span></div>
                </div>
                <div class="card minimenu__details__item d-flex p-3 my-2" data-filter-type="finish" data-filter-value="strukturiert">
                    <div>Strukturiert<span class="minimenu__details__ind"></span></div>
                </div>
                <div class="card minimenu__details__item d-flex p-3 my-2" data-filter-type="finish" data-filter-value="matt">
                    <div>Matt<span class="minimenu__details__ind"></span></div>
                </div>
                <div class="card minimenu__details__item d-flex p-3 my-2" data-filter-type="finish" data-filter-value="seidenmatt">
                    <div>Seidenmatt<span class="minimenu__details__ind"></span></div>
                </div>
                <div class="card minimenu__details__item d-flex p-3 my-2" data-filter-type="finish" data-filter-value="stone-mountain">
                    <div>Stone Mountain<span class="minimenu__details__ind"></span></div>
                </div>
                <div class="card minimenu__details__item d-flex p-3 my-2" data-filter-type="finish" data-filter-value="edelmatt">
                    <div>Edelmatt<span class="minimenu__details__ind"></span></div>
                </div>
            </div>
        </div>
        <div class="minimenu mr-1 my-1 p-2" data-filter="stil">
            <div class="minimenu__name uppercase">Stil</div>
            <div class="minimenu__details py-3 px-3">
                <div class="card minimenu__details__item d-flex p-3 my-2" data-filter-type="stil" data-filter-value="holzdekor">
                    <div>Holzdekor<span class="minimenu__details__ind"></span></div>
                </div>
                <div class="card minimenu__details__item d-flex p-3 my-2" data-filter-type="stil" data-filter-value="steindekor">
                    <div>Steindekor<span class="minimenu__details__ind"></span></div>
                </div>
                <div class="card minimenu__details__item d-flex p-3 my-2" data-filter-type="stil" data-filter-value="unidekor">
                    <div>Unidekor<span class="minimenu__details__ind"></span></div>
                </div>
                <div class="card minimenu__details__item d-flex p-3 my-2" data-filter-type="stil" data-filter-value="industrial">
                    <div>Industrial<span class="minimenu__details__ind"></span></div>
                </div>
                <div class="card minimenu__details__item d-flex p-3 my-2" data-filter-type="stil" data-filter-value="stein-effekt">
                    <div>Stein-Effekt<span class="minimenu__details__ind"></span></div>
                </div>
                <div class="card minimenu__details__item d-flex p-3 my-2" data-filter-type="stil" data-filter-value="metall-optik">
                    <div>Metall-Optik<span class="minimenu__details__ind"></span></div>
                </div>
                <div class="card minimenu__details__item d-flex p-3 my-2" data-filter-type="stil" data-filter-value="steinstruktur">
                    <div>Steinstruktur<span class="minimenu__details__ind"></span></div>
                </div>
            </div>
        </div>
        <div class="minimenu mr-1 my-1 p-2" data-filter="kante">
            <div class="minimenu__name uppercase">Kante</div>
            <div class="minimenu__details py-3 px-3">
                <div class="card minimenu__details__item d-flex p-3 my-2" data-filter-type="kante" data-filter-value="abgerundet">
                    <div>Abgerundet<span class="minimenu__details__ind"></span></div>
                </div>
                <div class="card minimenu__details__item d-flex p-3 my-2" data-filter-type="kante" data-filter-value="rechteckig">
                    <div>Rechteckig<span class="minimenu__details__ind"></span></div>
                </div>
            </div>
        </div>
        <div class="minimenu mr-1 my-1 p-2" data-filter="laenge">
            <div class="minimenu__name uppercase">l&auml;nge</div>
            <div class="minimenu__details py-3 px-3">
                <div class="card minimenu__details__item d-flex p-3 my-2" data-filter-type="laenge" data-filter-value="1.2m">
                    <div>1.2m<span class="minimenu__details__ind"></span></div>
                </div>
                <div class="card minimenu__details__item d-flex p-3 my-2" data-filter-type="laenge" data-filter-value="1.8m">
                    <div>1.8m<span class="minimenu__details__ind"></span></div>
                </div>
                <div class="card minimenu__details__item d-flex p-3 my-2" data-filter-type="laenge" data-filter-value="3m">
                    <div>3m<span class="minimenu__details__ind"></span></div>
                </div>
                <div class="card minimenu__details__item d-flex p-3 my-2" data-filter-type="laenge" data-filter-value="3.6m">
                    <div>3.6m<span class="minimenu__details__ind"></span></div>
                </div>
                <div class="card minimenu__details__item d-flex p-3 my-2" data-filter-type="laenge" data-filter-value="4m">
                    <div>4m<span class="minimenu__details__ind"></span></div>
                </div>
                <div class="card minimenu__details__item d-flex p-3 my-2" data-filter-type="laenge" data-filter-value="4.1m">
                    <div>4.1m<span class="minimenu__details__ind"></span></div>
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
                <div class="card minimenu__details__item d-flex p-3 my-2" data-filter-type="tiefe" data-filter-value="600mm">
                    <div>600mm<span class="minimenu__details__ind"></span></div>
                </div>
                <div class="card minimenu__details__item d-flex p-3 my-2" data-filter-type="tiefe" data-filter-value="620mm">
                    <div>620mm<span class="minimenu__details__ind"></span></div>
                </div>
                <div class="card minimenu__details__item d-flex p-3 my-2" data-filter-type="tiefe" data-filter-value="900mm">
                    <div>900mm<span class="minimenu__details__ind"></span></div>
                </div>
            </div>
        </div>
        <div class="minimenu mr-1 my-1 p-2" data-filter="staerke">
            <div class="minimenu__name uppercase">St&auml;rke</div>
            <div class="minimenu__details py-3 px-3">
                <div class="card minimenu__details__item d-flex p-3 my-2" data-filter-type="staerke" data-filter-value="28mm">
                    <div>28mm<span class="minimenu__details__ind"></span></div>
                </div>
                <div class="card minimenu__details__item d-flex p-3 my-2" data-filter-type="staerke" data-filter-value="38mm">
                    <div>38mm<span class="minimenu__details__ind"></span></div>
                </div>
                <div class="card minimenu__details__item d-flex p-3 my-2" data-filter-type="staerke" data-filter-value="40mm">
                    <div>40mm<span class="minimenu__details__ind"></span></div>
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

<!-- End of Desktop Filters -->

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
                <div class="minimenu__details__item d-flex p-3 minimenu__details__item--remove" data-filter-type="farbe" data-filter-value="schwarz">
                    <div>Schwarz<span class="minimenu__details__ind"> (0)</span></div>
                </div>
                <div class="minimenu__details__item d-flex p-3 minimenu__details__item--remove" data-filter-type="farbe" data-filter-value="weiss">
                    <div>Weiss<span class="minimenu__details__ind"> (0)</span></div>
                </div>
                <div class="minimenu__details__item d-flex p-3 minimenu__details__item--remove" data-filter-type="farbe" data-filter-value="hell">
                    <div>Hell<span class="minimenu__details__ind"> (0)</span></div>
                </div>
                <div class="minimenu__details__item d-flex p-3 minimenu__details__item--remove" data-filter-type="farbe" data-filter-value="hell-holz">
                    <div>Hell Holz<span class="minimenu__details__ind"> (0)</span></div>
                </div>
                <div class="minimenu__details__item d-flex p-3 minimenu__details__item--remove" data-filter-type="farbe" data-filter-value="mitteleres-holz">
                    <div>Mitteleres Holz<span class="minimenu__details__ind"> (0)</span></div>
                </div>
                <div class="minimenu__details__item d-flex p-3 minimenu__details__item--remove" data-filter-type="farbe" data-filter-value="dunkels-holz">
                    <div>Dunkel Holz<span class="minimenu__details__ind"> (0)</span></div>
                </div>
                <div class="minimenu__details__item d-flex p-3 minimenu__details__item--remove" data-filter-type="farbe" data-filter-value="grau">
                    <div>Grau<span class="minimenu__details__ind"> (0)</span></div>
                </div>
                <div class="minimenu__details__item d-flex p-3 minimenu__details__item--remove" data-filter-type="farbe" data-filter-value="gruen">
                    <div>Gr&uuml;n<span class="minimenu__details__ind"> (0)</span></div>
                </div>
                <div class="minimenu__details__item d-flex p-3 minimenu__details__item--remove" data-filter-type="farbe" data-filter-value="braun">
                    <div>Braun<span class="minimenu__details__ind"> (0)</span></div>
                </div>
                <div class="minimenu__details__item d-flex p-3 minimenu__details__item--remove" data-filter-type="farbe" data-filter-value="beige">
                    <div>Beige<span class="minimenu__details__ind"> (0)</span></div>
                </div>
            </div>
        </div>

        <div class="collapse my-2">
            <div class="collapse__head background-grey5 colour-white d-flex align-items-center background-grey py-3">
                <div class="col-bs font-weight-5">FINISH</div>
                <div class="arrow mx-3"></div>
            </div>
            <div class="collapse__wrap background-grey">
                <div class="minimenu__details__item d-flex p-3 minimenu__details__item--remove" data-filter-type="finish" data-filter-value="premium">
                    <div>Premium<span class="minimenu__details__ind"> (0)</span></div>
                </div>
                <div class="minimenu__details__item d-flex p-3 minimenu__details__item--remove" data-filter-type="finish" data-filter-value="standard">
                    <div>Standard<span class="minimenu__details__ind"> (0)</span></div>
                </div>
                <div class="minimenu__details__item d-flex p-3 minimenu__details__item--remove" data-filter-type="finish" data-filter-value="hochglanz">
                    <div>Hochglanz<span class="minimenu__details__ind"> (0)</span></div>
                </div>
                <div class="minimenu__details__item d-flex p-3 minimenu__details__item--remove" data-filter-type="finish" data-filter-value="strukturiert">
                    <div>Strukturiert<span class="minimenu__details__ind"> (0)</span></div>
                </div>
                <div class="minimenu__details__item d-flex p-3 minimenu__details__item--remove" data-filter-type="finish" data-filter-value="matt">
                    <div>Matt<span class="minimenu__details__ind"> (0)</span></div>
                </div>
                <div class="minimenu__details__item d-flex p-3 minimenu__details__item--remove" data-filter-type="finish" data-filter-value="seidenmatt">
                    <div>Seidenmatt<span class="minimenu__details__ind"> (0)</span></div>
                </div>
                <div class="minimenu__details__item d-flex p-3 minimenu__details__item--remove" data-filter-type="finish" data-filter-value="stone-mountain">
                    <div>Stone Mountain<span class="minimenu__details__ind"> (0)</span></div>
                </div>
                <div class="minimenu__details__item d-flex p-3 minimenu__details__item--remove" data-filter-type="finish" data-filter-value="edelmatt">
                    <div>Edelmatt<span class="minimenu__details__ind"> (0)</span></div>
                </div>
            </div>
        </div>
        
        <div class="collapse my-2">
            <div class="collapse__head background-grey5 colour-white d-flex align-items-center background-grey py-3">
                <div class="col-bs font-weight-5">STIL</div>
                <div class="arrow mx-3"></div>
            </div>
            <div class="collapse__wrap background-grey">
                <div class="minimenu__details__item d-flex p-3 minimenu__details__item--remove" data-filter-type="stil" data-filter-value="holzdekor">
                    <div>Holzdekor<span class="minimenu__details__ind"> (0)</span></div>
                </div>
                <div class="minimenu__details__item d-flex p-3 minimenu__details__item--remove" data-filter-type="stil" data-filter-value="steindekor">
                    <div>Steindekor<span class="minimenu__details__ind"> (0)</span></div>
                </div>
                <div class="minimenu__details__item d-flex p-3 minimenu__details__item--remove" data-filter-type="stil" data-filter-value="unidekor">
                    <div>Unidekor<span class="minimenu__details__ind"> (0)</span></div>
                </div>
                <div class="minimenu__details__item d-flex p-3 minimenu__details__item--remove" data-filter-type="stil" data-filter-value="industrial">
                    <div>Industrial<span class="minimenu__details__ind"> (0)</span></div>
                </div>
                <div class="minimenu__details__item d-flex p-3 minimenu__details__item--remove" data-filter-type="stil" data-filter-value="stein-effekt">
                    <div>Stein-Effekt<span class="minimenu__details__ind"> (0)</span></div>
                </div>
                <div class="minimenu__details__item d-flex p-3 minimenu__details__item--remove" data-filter-type="stil" data-filter-value="metall-optik">
                    <div>Metall-Optik<span class="minimenu__details__ind"> (0)</span></div>
                </div>
                <div class="minimenu__details__item d-flex p-3 minimenu__details__item--remove" data-filter-type="stil" data-filter-value="steinstruktur">
                    <div>Steinstruktur<span class="minimenu__details__ind"> (0)</span></div>
                </div>
            </div>
        </div>
        <div class="collapse my-2">
            <div class="collapse__head background-grey5 colour-white d-flex align-items-center background-grey py-3">
                <div class="col-bs font-weight-5">KANTE</div>
                <div class="arrow mx-3"></div>
            </div>
            <div class="collapse__wrap background-grey">
                <div class="minimenu__details__item d-flex p-3 minimenu__details__item--remove" data-filter-type="kante" data-filter-value="abgerundet">
                    <div>Abgerundet<span class="minimenu__details__ind"> (0)</span></div>
                </div>
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
                <div class="minimenu__details__item d-flex p-3 minimenu__details__item--remove" data-filter-type="laenge" data-filter-value="1.2m">
                    <div>1.2m<span class="minimenu__details__ind"> (0)</span></div>
                </div>
                <div class="minimenu__details__item d-flex p-3 minimenu__details__item--remove" data-filter-type="laenge" data-filter-value="1.8m">
                    <div>1.8m<span class="minimenu__details__ind"> (0)</span></div>
                </div>
                <div class="minimenu__details__item d-flex p-3 minimenu__details__item--remove" data-filter-type="laenge" data-filter-value="3m">
                    <div>3m<span class="minimenu__details__ind"> (0)</span></div>
                </div>
                <div class="minimenu__details__item d-flex p-3 minimenu__details__item--remove" data-filter-type="laenge" data-filter-value="3.6m">
                    <div>3.6m<span class="minimenu__details__ind"> (0)</span></div>
                </div>
                <div class="minimenu__details__item d-flex p-3 minimenu__details__item--remove" data-filter-type="laenge" data-filter-value="4m">
                    <div>4m<span class="minimenu__details__ind"> (0)</span></div>
                </div>
                <div class="minimenu__details__item d-flex p-3 minimenu__details__item--remove" data-filter-type="laenge" data-filter-value="4.1m">
                    <div>4.1m<span class="minimenu__details__ind"> (0)</span></div>
                </div>
            </div>
        </div>
        <div class="collapse my-2">
            <div class="collapse__head background-grey5 colour-white d-flex align-items-center background-grey py-3">
                <div class="col-bs font-weight-5">TIEFE</div>
                <div class="arrow mx-3"></div>
            </div>
            <div class="collapse__wrap background-grey">
                <div class="minimenu__details__item d-flex p-3 minimenu__details__item--remove" data-filter-type="tiefe" data-filter-value="600mm">
                    <div>600mm<span class="minimenu__details__ind"> (0)</span></div>
                </div>
                <div class="minimenu__details__item d-flex p-3 minimenu__details__item--remove" data-filter-type="tiefe" data-filter-value="620mm">
                    <div>620mm<span class="minimenu__details__ind"> (0)</span></div>
                </div>
                <div class="minimenu__details__item d-flex p-3 minimenu__details__item--remove" data-filter-type="tiefe" data-filter-value="900mm">
                    <div>900mm<span class="minimenu__details__ind"> (0)</span></div>
                </div>
            </div>
        </div>
        <div class="collapse my-2">
            <div class="collapse__head background-grey5 colour-white d-flex align-items-center background-grey py-3">
                <div class="col-bs font-weight-5">ST&Auml;RKE</div>
                <div class="arrow mx-3"></div>
            </div>
            <div class="collapse__wrap background-grey">
                <div class="minimenu__details__item d-flex p-3 minimenu__details__item--remove" data-filter-type="staerke" data-filter-value="28mm">
                    <div>28mm<span class="minimenu__details__ind"> (0)</span></div>
                </div>
                <div class="minimenu__details__item d-flex p-3 minimenu__details__item--remove" data-filter-type="staerke" data-filter-value="38mm">
                    <div>38mm<span class="minimenu__details__ind"> (0)</span></div>
                </div>
                <div class="minimenu__details__item d-flex p-3 minimenu__details__item--remove" data-filter-type="staerke" data-filter-value="40mm">
                    <div>40mm<span class="minimenu__details__ind"> (0)</span></div>
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
    <div class="filter-range__item col-6 col-md-2 col-xl-2 p-1" data-price="155" data-farbe="weiss" data-finish="hochglanz" data-stil="" data-laenge="3m,4m" data-kante="rechteckig" data-tiefe="600mm,900mm" data-staerke="28mm" >
        <div class="card card--full">
            <a href="laminat-arbeitsplatten/glas-arbeitsplatte-weiss">
                <img class="cat-card-container__img" src="media/swatches/glas-arbeitsplatte-weiss-swatch.jpg" data-at2x="media/swatches/glas-arbeitsplatte-weiss-swatch@2x.jpg" alt="Glas Weiß" />
                <div class="cat-card-container__title cat-card-container__title--adjust">Glas Weiß</div>
                <div class="cat-card-container__price cat-card-container__price--adjust"><sup class="cat-card-container__price--sup">ab </sup>155&euro; / m</div>
            </a>
        </div>
    </div>

    <div class="filter-range__item col-6 col-md-2 col-xl-2 p-1" data-price="170" data-farbe="gruen" data-finish="hochglanz" data-stil="unidekor" data-laenge="3m,4m" data-kante="rechteckig" data-tiefe="600mm,900mm" data-staerke="28mm">
        <div class="card card--full">
            <a href="laminat-arbeitsplatten/arbeitsplatte-glasgruen">
                <img class="cat-card-container__img" src="media/swatches/arbeitsplatte-glasgrun-swatch.jpg" data-at2x="media/swatches/arbeitsplatte-glasgrun-swatch@2x.jpg" alt="Arbeitsplatte Glasgrün" />
                <div class="cat-card-container__title cat-card-container__title--adjust">Glasgrün</div>
                <div class="cat-card-container__price cat-card-container__price--adjust"><sup class="cat-card-container__price--sup">ab </sup>170&euro; / m</div>
            </a>
        </div>
    </div>
    
    <div class="filter-range__item col-6 col-md-2 col-xl-2 p-1" data-price="170" data-farbe="dunkel" data-finish="matt" data-stil="holzdekor" data-laenge="3m,3.6m" data-kante="abgerundet" data-tiefe="600mm,900mm" data-staerke="38mm">
        <div class="card card--full">
            <a href="laminat-arbeitsplatten/arbeitsplatte-nussbaum-optik-dunkel">
                <img class="cat-card-container__img" src="media/swatches/arbeitsplatte-nussbaum-optik-dunkel-swatch.jpg" data-at2x="media/swatches/arbeitsplatte-nussbaum-optik-dunkel-swatch@2x.jpg" alt="Arbeitsplatte Nussbaum - Optik Dunkel" />
                <div class="cat-card-container__title cat-card-container__title--adjust">Nussbaum - Optik Dunkel</div>
                <div class="cat-card-container__price cat-card-container__price--adjust"><sup class="cat-card-container__price--sup">ab </sup>170&euro; / m</div>
            </a>
        </div>
    </div>

    <div class="filter-range__item col-6 col-md-2 col-xl-2 p-1" data-price="170" data-farbe="mittleres holz" data-finish="premium,strukturiert" data-stil="hozdekor" data-laenge="3m,4m" data-kante="rechteckig" data-tiefe="600mm,900mm" data-staerke="40mm">
        <div class="card card--full">
            <a href="laminat-arbeitsplatten/sealand-pine-laminat-arbeitsplatte-treibholz">
                <img class="cat-card-container__img" src="media/swatches/sealand-pine-laminat-arbeitsplatte-treibholz-swatch.jpg" data-at2x="media/swatches/sealand-pine-laminat-arbeitsplatte-treibholz-swatch@2x.jpg" alt="Sealand Pine - Laminat-Arbeitsplatte Treibholz" />
                <div class="cat-card-container__title cat-card-container__title--adjust">Sealand Pine - Treibholz</div>
                <div class="cat-card-container__price cat-card-container__price--adjust"><sup class="cat-card-container__price--sup">ab </sup>170&euro; / m</div>
            </a>
        </div>
    </div>

    <div class="filter-range__item col-6 col-md-2 col-xl-2 p-1" data-price="205" data-farbe="hell" data-finish="premium,strukturiert" data-stil="holzdekor" data-laenge="3m,4m" data-kante="rechteckig" data-tiefe="600mm,900mm" data-staerke="40mm">
        <div class="card card--full">
            <a href="laminat-arbeitsplatten/laminat-arbeitsplatte-eiche-hell">
                <img class="cat-card-container__img" src="media/swatches/laminat-arbeitsplatte-eiche-hell-swatch.jpg" data-at2x="media/swatches/laminat-arbeitsplatte-eiche-hell-swatch@2x.jpg" alt="Laminat-Arbeitsplatte Eiche Hell" />
                <div class="cat-card-container__title cat-card-container__title--adjust">Eiche Hell</div>
                <div class="cat-card-container__price cat-card-container__price--adjust"><sup class="cat-card-container__price--sup">ab </sup>205&euro; / m</div>
            </a>
        </div>
    </div>

    <div class="filter-range__item col-6 col-md-2 col-xl-2 p-1" data-price="205" data-farbe="hell" data-finish="premium,strukturiert" data-stil="holzdekor" data-laenge="3m,4m" data-kante="rechteckig" data-tiefe="600mm,900mm" data-staerke="40mm">
        <div class="card card--full">
            <a href="laminat-arbeitsplatten/laminat-arbeitsplatte-wildeiche">
                <img class="cat-card-container__img" src="media/swatches/laminat-arbeitsplatte-wildeiche-swatch.jpg" data-at2x="media/swatches/laminat-arbeitsplatte-wildeiche-swatch@2x.jpg" alt="Laminat-Arbeitsplatte Wildeiche" />
                <div class="cat-card-container__title cat-card-container__title--adjust">Wildeiche</div>
                <div class="cat-card-container__price cat-card-container__price--adjust"><sup class="cat-card-container__price--sup">ab </sup>205&euro; / m</div>
            </a>
        </div>
    </div>

    <div class="filter-range__item col-6 col-md-2 col-xl-2 p-1" data-price="170" data-farbe="weiss" data-finish="strukturiert" data-stil="stein-effekt" data-laenge="3m,4.1m" data-kante="abgerundet" data-tiefe="600mm,900mm" data-staerke="38mm">
        <div class="card card--full">
            <a href="laminat-arbeitsplatten/quarzstein-arbeitsplatte-weiss">
                <img class="cat-card-container__img" src="media/swatches/quarzstein-arbeitsplatte-weiss-swatch.jpg" data-at2x="media/swatches/quarzstein-arbeitsplatte-weiss-swatch@2x.jpg" alt="Quarzstein Arbeitsplatte Weiß" />
                <div class="cat-card-container__title cat-card-container__title--adjust">Quarzstein Weiß</div>
                <div class="cat-card-container__price cat-card-container__price--adjust"><sup class="cat-card-container__price--sup">ab </sup>170&euro; / m</div>
            </a>
        </div>
    </div>

    <div class="filter-range__item col-6 col-md-2 col-xl-2 p-1" data-price="170" data-farbe="schwarz" data-finish="strukturiert" data-stil="stein-effekt" data-laenge="3m,4.1m" data-kante="abgerundet" data-tiefe="600mm,900mm" data-staerke="38mm">
        <div class="card card--full">
            <a href="laminat-arbeitsplatten/quarz-arbeitsplatte-schwarz">
                <img class="cat-card-container__img" src="media/swatches/quarz-arbeitsplatte-schwarz-swatch-th.jpg" data-at2x="media/swatches/quarz-arbeitsplatte-schwarz-swatch-th@2x.jpg" alt="Quarz Arbeitsplatte Schwarz" />
                <div class="cat-card-container__title cat-card-container__title--adjust">Quarz Schwarz</div>
                <div class="cat-card-container__price cat-card-container__price--adjust"><sup class="cat-card-container__price--sup">ab </sup>170&euro; / m</div>
            </a>
        </div>
    </div>

    <div class="filter-range__item col-6 col-md-2 col-xl-2 p-1" data-price="125" data-farbe="schwarz" data-finish="hochglanz" data-stil="steindekor" data-laenge="3m,3.6m" data-kante="abgerundet" data-tiefe="600mm,900mm" data-staerke="38mm">
        <div class="card card--full">
            <a href="laminat-arbeitsplatten/granit-arbeitsplatte-braun">
                <img class="cat-card-container__img" src="media/swatches/granit-arbeitsplatten-braun-swatch-th.jpg" data-at2x="media/swatches/granit-arbeitsplatten-braun-swatch-th@2x.jpg" alt="Granit Arbeitsplatte Braun" />
                <div class="cat-card-container__title cat-card-container__title--adjust">Granit Braun</div>
                <div class="cat-card-container__price cat-card-container__price--adjust"><sup class="cat-card-container__price--sup">ab </sup>170&euro; / m</div>
            </a>
        </div>
    </div>

    <div class="filter-range__item col-6 col-md-2 col-xl-2 p-1" data-price="170" data-farbe="beige" data-finish="seidenmatt" data-stil="steidekor" data-laenge="3m,4.1m" data-kante="abgerundet" data-tiefe="600mm,900mm" data-staerke="38mm">
        <div class="card card--full">
            <a href="laminat-arbeitsplatten/arbeitsplatte-beige">
                <img class="cat-card-container__img" src="media/swatches/granit-arbeitsplatte-beige-swatch-th.jpg" data-at2x="media/swatches/granit-arbeitsplatte-beige-swatch-th@2x.jpg" alt="Arbeitsplatte Beige" />
                <div class="cat-card-container__title cat-card-container__title--adjust">Beige</div>
                <div class="cat-card-container__price cat-card-container__price--adjust"><sup class="cat-card-container__price--sup">ab </sup>170&euro; / m</div>
            </a>
        </div>
    </div>

    <div class="filter-range__item col-6 col-md-2 col-xl-2 p-1" data-price="170" data-farbe="grau" data-finish="seidenmatt" data-stil="steidekor" data-laenge="3m,4m" data-kante="abgerundet" data-tiefe="600mm,900mm" data-staerke="38mm">
        <div class="card card--full">
            <a href="laminat-arbeitsplatten/arbeitsplatte-steinoptik-ipanema-grau">
                <img class="cat-card-container__img" src="media/swatches/arbeitsplatte-steinoptik-ipanema-grau-swatch.jpg" data-at2x="media/swatches/arbeitsplatte-steinoptik-ipanema-grau-swatch@2x.jpg" alt="Küchenarbeitsplatte Kupfer - Industrial Style" />
                <div class="cat-card-container__title cat-card-container__title--adjust">Ipanema Grau</div>
                <div class="cat-card-container__price cat-card-container__price--adjust"><sup class="cat-card-container__price--sup">ab </sup>170&euro; / m</div>
            </a>
        </div>
    </div>

    <div class="filter-range__item col-6 col-md-2 col-xl-2 p-1" data-price="75" data-farbe="schwarz" data-finish="matt" data-stil="steidekor" data-laenge="1.2m,1.8m,3m,4m" data-kante="abgerundet" data-tiefe="600mm,900mm" data-staerke="38mm">
        <div class="card card--full">
            <a href="resopal-arbeitsplatten/schwarzer-granit-arbeitsplatte">
                <img class="cat-card-container__img" src="media/swatches/schwarzer-granit-arbeitsplatte-swatch.jpg" data-at2x="media/swatches/schwarzer-granit-arbeitsplatte-swatch@2x.jpg" alt="Schwarzer Granit Arbeitsplatte" />
                <div class="cat-card-container__title cat-card-container__title--adjust">Schwarzer Granit</div>
                <div class="cat-card-container__price cat-card-container__price--adjust"><sup class="cat-card-container__price--sup">ab </sup>75&euro; / m</div>
            </a>
        </div>
    </div>

    <div class="filter-range__item col-6 col-md-2 col-xl-2 p-1" data-price="75" data-farbe="weiss" data-finish="matt" data-stil="steidekor" data-laenge="1.2m,1.8m,3m,4m" data-kante="abgerundet" data-tiefe="600mm,900mm" data-staerke="38mm">
        <div class="card card--full">
            <a href="resopal-arbeitsplatten/weisse-kuechenarbeitsplatte">
                <img class="cat-card-container__img" src="media/swatches/weisse-kuechenarbeitsplatte-swatch.jpg" data-at2x="media/swatches/weisse-kuechenarbeitsplatte-swatch@2x.jpg" alt="Weiße Küchenarbeitsplatte" />
                <div class="cat-card-container__title cat-card-container__title--adjust">Weiß</div>
                <div class="cat-card-container__price cat-card-container__price--adjust"><sup class="cat-card-container__price--sup">ab </sup>75&euro; / m</div>
            </a>
        </div>
    </div>

    <div class="filter-range__item col-6 col-md-2 col-xl-2 p-1" data-price="85" data-farbe="weiss" data-finish="strukturiert" data-stil="stein-effekt" data-laenge="1.2m,1.8m,3m,4m" data-kante="abgerundet" data-tiefe="600mm,900mm" data-staerke="38mm">
        <div class="card card--full">
            <a href="resopal-arbeitsplatten/weisser-marmor-arbeitsplatte">
                <img class="cat-card-container__img" src="media/swatches/weisser-marmor-arbeitsplatte-swatch.jpg" data-at2x="media/swatches/weisser-marmor-arbeitsplatte-swatch@2x.jpg" alt="Weißer Marmor Arbeitsplatte" />
                <div class="cat-card-container__title cat-card-container__title--adjust">Weißer Marmor</div>
                <div class="cat-card-container__price cat-card-container__price--adjust"><sup class="cat-card-container__price--sup">ab </sup>85&euro; / m</div>
            </a>
        </div>
    </div>

    <div class="filter-range__item col-6 col-md-2 col-xl-2 p-1" data-price="85" data-farbe="helles-holz" data-finish="matt" data-stil="standard" data-laenge="1.2m,1.8m,3m,4m" data-kante="abgerundet" data-tiefe="600mm,900mm" data-staerke="38mm">
        <div class="card card--full">
            <a href="resopal-arbeitsplatten/helles-holz-arbeitsplatte">
                <img class="cat-card-container__img" src="media/swatches/helles-holz-arbeitsplatte-swatch.jpg" data-at2x="media/swatches/helles-holz-arbeitsplatte-swatch@2x.jpg" alt="Helles Holz Arbeitsplatte" />
                <div class="cat-card-container__title cat-card-container__title--adjust">Helles Holz</div>
                <div class="cat-card-container__price cat-card-container__price--adjust"><sup class="cat-card-container__price--sup">ab </sup>85&euro; / m</div>
            </a>
        </div>
    </div>

    <div class="filter-range__item col-6 col-md-2 col-xl-2 p-1" data-price="65" data-farbe="helles" data-finish="strukturiert" data-stil="holzdekor" data-laenge="1.2km,1.8m,3m,4m" data-kante="abgerundet" data-tiefe="600mm,900mm" data-staerke="38mm">
        <div class="card card--full">
            <a href="resopal-arbeitsplatten/kuechenarbeitsplatte-eiche">
                <img class="cat-card-container__img" src="media/swatches/kuechenarbeitsplatte-eiche-swatch.jpg" data-at2x="media/swatches/kuechenarbeitsplatte-eiche-swatch@2x.jpg" alt="Küchenarbeitsplatte Eiche" />
                <div class="cat-card-container__title cat-card-container__title--adjust">Eiche</div>
                <div class="cat-card-container__price cat-card-container__price--adjust"><sup class="cat-card-container__price--sup">ab </sup>65&euro; / m</div>
            </a>
        </div>
    </div>

    <div class="filter-range__item col-6 col-md-2 col-xl-2 p-1" data-price="50" data-farbe="grau" data-finish="strukturiert" data-stil="stein-effekt" data-laenge="1.2m,1.8m,3m,4m" data-kante="abgerundet" data-tiefe="600mm,900mm" data-staerke="38mm">
        <div class="card card--full">
            <a href="resopal-arbeitsplatten/grauer-stein-arbeitsplatte">
                <img class="cat-card-container__img" src="media/swatches/grauer-stein-arbeitsplatte-swatch.jpg" data-at2x="media/swatches/grauer-stein-arbeitsplatte-swatch@2x.jpg" alt="Grauer Stein Arbeitsplatte" />
                <div class="cat-card-container__title cat-card-container__title--adjust">Grauer Stein</div>
                <div class="cat-card-container__price cat-card-container__price--adjust"><sup class="cat-card-container__price--sup">ab </sup>50&euro; / m</div>
            </a>
        </div>
    </div>

    <div class="filter-range__item col-6 col-md-2 col-xl-2 p-1" data-price="55" data-farbe="schwarz" data-finish="matt" data-stil="steidekor" data-laenge="1.2m,1.8m,3m,4m" data-kante="abgerundet" data-tiefe="600mm,900mm" data-staerke="38mm">
        <div class="card card--full">
            <a href="resopal-arbeitsplatten/schwarzer-marmor-arbeitsplatte">
                <img class="cat-card-container__img" src="media/swatches/schwarzer-marmor-arbeitsplatte-swatch.jpg" data-at2x="media/swatches/schwarzer-marmor-arbeitsplatte-swatch@2x.jpg" alt="Schwarzer Marmor Arbeitsplatte" />
                <div class="cat-card-container__title cat-card-container__title--adjust">Schwarzer Marmor</div>
                <div class="cat-card-container__price cat-card-container__price--adjust"><sup class="cat-card-container__price--sup">ab </sup>55&euro; / m</div>
            </a>
        </div>
    </div>

    <div class="filter-range__item col-6 col-md-2 col-xl-2 p-1" data-price="205" data-farbe="grau" data-finish="strukturiert" data-stil="steidekor" data-laenge="3m,4m" data-kante="rechteckig" data-tiefe="600mm,900mm" data-staerke="38mm">
        <div class="card card--full">
            <a href="resopal-arbeitsplatten/betonoptik-arbeitsplatte">
                <img class="cat-card-container__img" src="media/swatches/betonoptik-arbeitsplatte-swatch.jpg" data-at2x="media/swatches/betonoptik-arbeitsplatte-swatch@2x.jpg" alt="Betonoptik Arbeitsplatte" />
                <div class="cat-card-container__title cat-card-container__title--adjust">Betonoptik</div>
                <div class="cat-card-container__price cat-card-container__price--adjust"><sup class="cat-card-container__price--sup">ab </sup>205&euro; / m</div>
            </a>
        </div>
    </div>

    <div class="filter-range__item col-6 col-md-2 col-xl-2 p-1" data-price="70" data-farbe="hell" data-finish="strukturiert" data-stil="steidekor" data-laenge="1.2m,1.8m,3m,4m" data-kante="rechteckig" data-tiefe="600mm,900mm" data-staerke="38mm">
        <div class="card card--full">
            <a href="resopal-arbeitsplatten/rustikales-holz-arbeitsplatte">
                <img class="cat-card-container__img" src="media/swatches/rustikales-holz-arbeitsplatte-swatch.jpg" data-at2x="media/swatches/rustikales-holz-arbeitsplatte-swatch@2x.jpg" alt="Betonoptik Arbeitsplatte" />
                <div class="cat-card-container__title cat-card-container__title--adjust">Rustikales Holz</div>
                <div class="cat-card-container__price cat-card-container__price--adjust"><sup class="cat-card-container__price--sup">ab </sup>70&euro; / m</div>
            </a>
        </div>
    </div>

    <div class="filter-range__item col-6 col-md-2 col-xl-2 p-1" data-price="205" data-farbe="dunkels holz" data-finish="strukturiert" data-stil="holzdekor" data-laenge="3m,4m" data-kante="rechteckig" data-tiefe="600mm,900mm" data-staerke="38mm">
        <div class="card card--full">
            <a href="resopal-arbeitsplatten/kuechenarbeitsplatte-dunkles-holz">
                <img class="cat-card-container__img" src="media/swatches/kuechenarbeitsplatte-dunkles-holz-swatch.jpg" data-at2x="media/swatches/kuechenarbeitsplatte-dunkles-holz-swatch@2x.jpg" alt="Küchenarbeitsplatte dunkles Holz" />
                <div class="cat-card-container__title cat-card-container__title--adjust">Dunkles Holz</div>
                <div class="cat-card-container__price cat-card-container__price--adjust"><sup class="cat-card-container__price--sup">ab </sup>205&euro; / m</div>
            </a>
        </div>
    </div>

    <div class="filter-range__item col-6 col-md-2 col-xl-2 p-1" data-price="75" data-farbe="schwarz" data-finish="strukturiert" data-stil="steidekor" data-laenge="1.2m,1.8m,3m,4m" data-kante="abgerundet" data-tiefe="600mm,900mm" data-staerke="38mm">
        <div class="card card--full">
            <a href="resopal-arbeitsplatten/arbeitsplatte-schwarzer-schiefer">
                <img class="cat-card-container__img" src="media/swatches/arbeitsplatte-schwarzer-schiefer-swatch.jpg" data-at2x="media/swatches/arbeitsplatte-schwarzer-schiefer-swatch@2x.jpg" alt="Arbeitsplatte schwarzer Schiefer" />
                <div class="cat-card-container__title cat-card-container__title--adjust">Schwarzer Schiefer</div>
                <div class="cat-card-container__price cat-card-container__price--adjust"><sup class="cat-card-container__price--sup">ab </sup>75&euro; / m</div>
            </a>
        </div>
    </div>

    <div class="filter-range__item col-6 col-md-2 col-xl-2 p-1" data-price="170" data-farbe="braun" data-finish="strukturiert" data-stil="metall-optik" data-laenge="3m" data-kante="rechteckig" data-tiefe="600mm" data-staerke="38mm">
        <div class="card card--full">
            <a href="resopal-arbeitsplatten/kuechenarbeitsplatte-kupfer">
                <img class="cat-card-container__img" src="media/swatches/kuechenarbeitsplatte-kupfer-swatch.jpg" data-at2x="media/swatches/kuechenarbeitsplatte-kupfer-swatch@2x.jpg" alt="Küchenarbeitsplatte Kupfer - Industrial Style" />
                <div class="cat-card-container__title cat-card-container__title--adjust">Kupfer</div>
                <div class="cat-card-container__price cat-card-container__price--adjust"><sup class="cat-card-container__price--sup">ab </sup>170&euro; / m</div>
            </a>
        </div>
    </div>

    <div class="filter-range__item col-6 col-md-2 col-xl-2 p-1" data-price="170" data-farbe="schwarz,grau" data-finish="stone-mountain" data-stil="steinstruktur" data-laenge="3m" data-kante="abgerundet" data-tiefe="600mm" data-staerke="38mm">
        <div class="card card--full">
            <a href="resopal-arbeitsplatten/arbeitsplatte-raja-black">
                <img class="cat-card-container__img" src="media/swatches/arbeitsplatte-raja-black-swatch.jpg" data-at2x="media/swatches/arbeitsplatte-raja-black-swatch@2x.jpg" alt="Arbeitsplatte Raja Black" />
                <div class="cat-card-container__title cat-card-container__title--adjust">Raja Black</div>
                <div class="cat-card-container__price cat-card-container__price--adjust"><sup class="cat-card-container__price--sup">ab </sup>170&euro; / m</div>
            </a>
        </div>
    </div>

    <div class="filter-range__item col-6 col-md-2 col-xl-2 p-1" data-price="170" data-farbe="hell" data-finish="edelmatt" data-stil="" data-laenge="3m" data-kante="abgerundet" data-tiefe="600mm" data-staerke="38mm">
        <div class="card card--full">
            <a href="resopal-arbeitsplatten/arbeitsplatte-cerasum-mare">
                <img class="cat-card-container__img" src="media/swatches/arbeitsplatte-cerasum-mare-swatch.jpg" data-at2x="media/swatches/arbeitsplatte-cerasum-mare-swatch@2x.jpg" alt="Arbeitsplatte Cerasum Mare" />
                <div class="cat-card-container__title cat-card-container__title--adjust">Cerasum Mare</div>
                <div class="cat-card-container__price cat-card-container__price--adjust"><sup class="cat-card-container__price--sup">ab </sup>170&euro; / m</div>
            </a>
        </div>
    </div>

    <div class="filter-range__item col-6 col-md-2 col-xl-2 p-1" data-price="205" data-farbe="braun" data-finish="matt" data-stil="metall-optik" data-laenge="3m" data-kante="rechteckig" data-tiefe="600mm" data-staerke="38mm">
        <div class="card card--full">
            <a href="resopal-arbeitsplatten/arbeitsplatte-eternal-iron">
                <img class="cat-card-container__img" src="media/swatches/arbeitsplatte-eternal-iron-swatch.jpg" data-at2x="media/swatches/arbeitsplatte-eternal-iron-swatch@2x.jpg" alt="Arbeitsplatte Eternal Iron" />
                <div class="cat-card-container__title cat-card-container__title--adjust">Eternal Iron</div>
                <div class="cat-card-container__price cat-card-container__price--adjust"><sup class="cat-card-container__price--sup">ab </sup>205&euro; / m</div>
            </a>
        </div>
    </div>

    <div class="filter-range__item col-6 col-md-2 col-xl-2 p-1" data-price="125" data-farbe="hell,helles-holz" data-finish="matt" data-stil="holzdekor" data-laenge="3m" data-kante="abgerundet" data-tiefe="600mm" data-staerke="38mm">
        <div class="card card--full">
            <a href="resopal-arbeitsplatten/arbeitsplatte-core-maple">
                <img class="cat-card-container__img" src="media/swatches/arbeitsplatte-core-maple-swatch.jpg" data-at2x="media/swatches/arbeitsplatte-core-maple-swatch@2x.jpg" alt="Arbeitsplatte Core Maple" />
                <div class="cat-card-container__title cat-card-container__title--adjust">Core Maple</div>
                <div class="cat-card-container__price cat-card-container__price--adjust"><sup class="cat-card-container__price--sup">ab </sup>125&euro; / m</div>
            </a>
        </div>
    </div>

    <div class="filter-range__item col-6 col-md-2 col-xl-2 p-1" data-price="125" data-farbe="grau,braun" data-finish="edelmatt" data-stil="steidekor" data-laenge="3m" data-kante="abgerundet" data-tiefe="600mm" data-staerke="38mm">
        <div class="card card--full">
            <a href="resopal-arbeitsplatten/arbeitsplatte-ruby-limescale">
                <img class="cat-card-container__img" src="media/swatches/arbeitsplatte-ruby-limescale-swatch.jpg" data-at2x="media/swatches/arbeitsplatte-ruby-limescale-swatch@2x.jpg" alt="Arbeitsplatte Ruby Limescale" />
                <div class="cat-card-container__title cat-card-container__title--adjust">Ruby Limescale</div>
                <div class="cat-card-container__price cat-card-container__price--adjust"><sup class="cat-card-container__price--sup">ab </sup>125&euro; / m</div>
            </a>
        </div>
    </div>

    <div class="filter-range__item col-6 col-md-2 col-xl-2 p-1" data-price="170" data-farbe="braun,grau" data-finish="hochglanz" data-stil="steidekor" data-laenge="3m" data-kante="abgerundet" data-tiefe="600mm" data-staerke="38mm">
        <div class="card card--full">
            <a href="resopal-arbeitsplatten/arbeitsplatte-emperador">
                <img class="cat-card-container__img" src="media/swatches/emperador-arbeitsplatte-main-swatch.jpg" data-at2x="media/swatches/emperador-arbeitsplatte-main-swatch@2x.jpg" alt="Arbeitsplatte Emperadore" />
                <div class="cat-card-container__title cat-card-container__title--adjust">Emperador</div>
                <div class="cat-card-container__price cat-card-container__price--adjust"><sup class="cat-card-container__price--sup">ab </sup>170&euro; / m</div>
            </a>
        </div>
    </div>

    <div class="filter-range__item col-6 col-md-2 col-xl-2 p-1" data-price="125" data-farbe="schwarz,grau" data-finish="matt" data-stil="steidekor" data-laenge="3m" data-kante="abgerundet" data-tiefe="600mm" data-staerke="38mm">
        <div class="card card--full">
            <a href="resopal-arbeitsplatten/arbeitsplatte-essential-wall">
                <img class="cat-card-container__img" src="media/swatches/arbeitsplatte-essential-wall-main-swatch.jpg" data-at2x="media/swatches/arbeitsplatte-essential-wall-main-swatch@2x.jpg" alt="Arbeitsplatte Essential Wall" />
                <div class="cat-card-container__title cat-card-container__title--adjust">Essential Wall</div>
                <div class="cat-card-container__price cat-card-container__price--adjust"><sup class="cat-card-container__price--sup">ab </sup>125&euro; / m</div>
            </a>
        </div>
    </div>

    <div class="filter-range__item col-6 col-md-2 col-xl-2 p-1" data-price="125" data-farbe="schwarz,grau,braun" data-finish="matt" data-stil="steidekor" data-laenge="3m" data-kante="abgerundet" data-tiefe="600mm" data-staerke="38mm">
        <div class="card card--full">
            <a href="resopal-arbeitsplatten/granit-arbeitsplatte-grau">
                <img class="cat-card-container__img" src="media/swatches/granit-grau-swatch.jpg" data-at2x="media/swatches/granit-grau-swatch2x.jpg" alt="Granit Arbeitsplatte Grau" />
                <div class="cat-card-container__title cat-card-container__title--adjust">Granit Grau</div>
                <div class="cat-card-container__price cat-card-container__price--adjust"><sup class="cat-card-container__price--sup">ab </sup>125&euro; / m</div>
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



<script src="/media/pdp/script/product-filters.js"></script>



