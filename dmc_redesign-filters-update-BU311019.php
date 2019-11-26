<style>
/* DY ONLY   */
#basket-inner {
  display:none;
}
#new-content {
  max-width: 100%;
  line-height: normal;
}
@media (min-width: 1294px) {

    #count-down, [id*="saleRight"], [class*=special_notice_container], .dy-holiday-hours-right, .dy__right-section__target {
      display: none!important;
    }
}
/* DY ONLY END  */
html, body {
    overflow-x: hidden;
}
	body {
	font-family: 'work sans';
	color: #4D4A49;
	font-size: 16px;
	}
    p {
    margin-block-start: 1em;
    margin-block-end: 1em;
    line-height: 19px;
    }
    
	/* Temporary style (re-uplaod larger images)*/
	@media (min-width: 1294px) {
	.card__img {
/*	width: 187px;*/
	}
	}
	/* Temorary styles END */
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
    
    .card__img--fade {
        position: absolute;
        left: 0;
        top: 0;
        opacity: 0;
        transition: 0.2s;
    }
    .card__img--fade--active {
        opacity: 1;
    }
	/* Class exists in home page */
	.border-circle {
	border-radius: 50%;
	}
    .sale-cross {
        position: relative;
    }
    .sale-cross::before {
        content: '';
        background: #df4132;
        width: 100%;
        height: 1px;
        position: absolute;
        transform: rotate(-20deg);
        left: 0;
        top: 50%;
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
	display:none;
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
	.colour-indicator {
	width: 16px;
	height: 16px;
	-webkit-box-shadow: 0px 1px 2px rgba(0, 0, 0, .25);
	        box-shadow: 0px 1px 2px rgba(0, 0, 0, .25);
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
	.filter-range__indi {
	border: 1px #928F8F;
	border-style: dashed;
	border-radius: 50%;
    width: 190px;
    height: 190px;
	position: relative;
	}
	.filter-range__indi__link {
	color: #005D6E;
	cursor: pointer;
	}
	.filter-range__item {
	  overflow: hidden;
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
	
    @media (max-width: 1293px) {
    .filter-range__indi {
    width: 167px;
    height: 167px;
    }
    .filter-range__item {
        max-width: 150px;
      }
    }
    @media (max-width: 991px) {
      
    }
	@media (max-width: 767px) {
	.filter-range__indi {
	border-radius: 0;
	height: 100%;
	width: 100%;
	}
	}
    

	.button--white {
	background: #fff;
	}
</style>

<div id="prod-blank">

    <div class="page-heading h1 text-left" itemtype="http://schema.org/Product"><span class="no-mobile">The UK's Finest </span>
        <h1 class="font-weight-5 font-24 font-md-18" itemprop="name">Laminate Worktops</h1>
    </div>

    <div class="row-bs">
        <div class="col-bs pr-2 font-16 font-md-12">
            <p class="mb-0">Looking for an attractive, economical work surface for your kitchen? We stock an extensive range of laminate worktops in a variety of styles and finishes.<span class="hidden-xs"> These affordable worktops are available with next-day delivery via our own efficient 2Man delivery service.</span></p>

            <p class="hidden-xs mb-0">Laminate kitchen work surfaces are a low-maintenance worktop choice, and are both highly durable and easy to clean. Transform your home for less with laminate countertops from Worktop Express&reg;, one of the UK's leading online worktop retailers.</p>
        </div>

    </div>

    <noscript><strong>Please Note:</strong> This page requires Javascript to function correctly, please enable this in your browser.</noscript>

    <div class="filters m-0 d-none d-md-flex flex-wrap align-items-center">
        <div class="row-bs col-12-bs col-xl">
            <div class="minimenu mr-1 my-1 p-2" data-filter="colour">
                <div class="minimenu__name uppercase">colour</div>
                <div class="minimenu__details py-3 px-3">
                    <div class="card minimenu__details__item d-flex p-3 my-2" data-filter-type="colour" data-filter-value="black">
                        <div class="border-circle colour-indicator colour-indicator--black mr-2"></div>
                        <div>Black<span class="minimenu__details__ind"></span></div>
                    </div>
                    <div class="card minimenu__details__item d-flex p-3 my-2" data-filter-type="colour" data-filter-value="white">
                        <div class="border-circle colour-indicator colour-indicator--white mr-2"></div>
                        <div>White<span class="minimenu__details__ind"></span></div>
                    </div>
                    <div class="card minimenu__details__item d-flex p-3 my-2" data-filter-type="colour" data-filter-value="light">
                        <div class="border-circle colour-indicator colour-indicator--light mr-2"></div>
                        <div>Light<span class="minimenu__details__ind"></span></div>
                    </div>
                    <div class="card minimenu__details__item d-flex p-3 my-2" data-filter-type="colour" data-filter-value="light-wood">
                        <div class="border-circle colour-indicator colour-indicator--lwood mr-2"></div>
                        <div>Light Wood<span class="minimenu__details__ind"></span></div>
                    </div>
                    <div class="card minimenu__details__item d-flex p-3 my-2" data-filter-type="colour" data-filter-value="medium-wood">
                        <div class="border-circle colour-indicator colour-indicator--mwood mr-2"></div>
                        <div>Medium Wood<span class="minimenu__details__ind"></span></div>
                    </div>
                    <div class="card minimenu__details__item d-flex p-3 my-2" data-filter-type="colour" data-filter-value="dark-wood">
                        <div class="border-circle colour-indicator colour-indicator--dwood mr-2"></div>
                        <div>Dark Wood<span class="minimenu__details__ind"></span></div>
                    </div>
                    <div class="card minimenu__details__item d-flex p-3 my-2" data-filter-type="colour" data-filter-value="grey">
                        <div class="border-circle colour-indicator colour-indicator--grey mr-2"></div>
                        <div>Grey<span class="minimenu__details__ind"></span></div>
                    </div>
                    <div class="card minimenu__details__item d-flex p-3 my-2" data-filter-type="colour" data-filter-value="blue">
                        <div class="border-circle colour-indicator colour-indicator--blue mr-2"></div>
                        <div>Blue<span class="minimenu__details__ind"></span></div>
                    </div>
                    <div class="card minimenu__details__item d-flex p-3 my-2" data-filter-type="colour" data-filter-value="red">
                        <div class="border-circle colour-indicator colour-indicator--red mr-2"></div>
                        <div>Red<span class="minimenu__details__ind"></span></div>
                    </div>
                </div>
            </div>
            <!-- <div class="minimenu mr-1 my-1 p-2" data-filter="style">
                <div class="minimenu__name uppercase">style</div>
                <div class="minimenu__details py-3 px-3">
                    <div class="card minimenu__details__item d-flex p-3 my-2" data-filter-type="style" data-filter-value="granite">
                        <div>Granite<span class="minimenu__details__ind"></span></div>
                    </div>
                    <div class="card minimenu__details__item d-flex p-3 my-2" data-filter-type="style" data-filter-value="quartz">
                        <div>Quartz<span class="minimenu__details__ind"></span></div>
                    </div>
                    <div class="card minimenu__details__item d-flex p-3 my-2" data-filter-type="style" data-filter-value="marble">
                        <div>Marble<span class="minimenu__details__ind"></span></div>
                    </div>
                    <div class="card minimenu__details__item d-flex p-3 my-2" data-filter-type="style" data-filter-value="concrete">
                        <div>Concrete<span class="minimenu__details__ind"></span></div>
                    </div>
                    <div class="card minimenu__details__item d-flex p-3 my-2" data-filter-type="style" data-filter-value="stone">
                        <div>Stone<span class="minimenu__details__ind"></span></div>
                    </div>
                    <div class="card minimenu__details__item d-flex p-3 my-2" data-filter-type="style" data-filter-value="glass">
                        <div>Glass<span class="minimenu__details__ind"></span></div>
                    </div>
                    <div class="card minimenu__details__item d-flex p-3 my-2" data-filter-type="style" data-filter-value="slate">
                        <div>Slate<span class="minimenu__details__ind"></span></div>
                    </div>
                    <div class="card minimenu__details__item d-flex p-3 my-2" data-filter-type="style" data-filter-value="wood">
                        <div>Wood Effect<span class="minimenu__details__ind"></span></div>
                    </div>
                    <div class="card minimenu__details__item d-flex p-3 my-2" data-filter-type="style" data-filter-value="sparkle">
                        <div>Sparkle<span class="minimenu__details__ind"></span></div>
                    </div>
                    <div class="card minimenu__details__item d-flex p-3 my-2" data-filter-type="style" data-filter-value="metal">
                        <div>Metal<span class="minimenu__details__ind"></span></div>
                    </div>
                    <div class="card minimenu__details__item d-flex p-3 my-2" data-filter-type="style" data-filter-value="farmhouse">
                        <div>Farmhouse<span class="minimenu__details__ind"></span></div>
                    </div>
                    <div class="card minimenu__details__item d-flex p-3 my-2" data-filter-type="style" data-filter-value="classic">
                        <div>Classic<span class="minimenu__details__ind"></span></div>
                    </div>
                    <div class="card minimenu__details__item d-flex p-3 my-2" data-filter-type="style" data-filter-value="contemporary">
                        <div>Contemporary<span class="minimenu__details__ind"></span></div>
                    </div>
                    <div class="card minimenu__details__item d-flex p-3 my-2" data-filter-type="style" data-filter-value="alternative">
                        <div>Alternative<span class="minimenu__details__ind"></span></div>
                    </div>
                </div>
            </div> -->
            <div class="minimenu mr-1 my-1 p-2" data-filter="finish">
                <div class="minimenu__name uppercase">finish</div>
                <div class="minimenu__details py-3 px-3">
                    <div class="card minimenu__details__item d-flex p-3 my-2" data-filter-type="finish" data-filter-value="premium">
                        <div>Premium<span class="minimenu__details__ind"></span></div>
                    </div>
                    <div class="card minimenu__details__item d-flex p-3 my-2" data-filter-type="finish" data-filter-value="standard">
                        <div>Standard<span class="minimenu__details__ind"></span></div>
                    </div>
                    <div class="card minimenu__details__item d-flex p-3 my-2" data-filter-type="finish" data-filter-value="high-gloss">
                        <div>High-Gloss<span class="minimenu__details__ind"></span></div>
                    </div>
                    <div class="card minimenu__details__item d-flex p-3 my-2" data-filter-type="finish" data-filter-value="textured">
                        <div>Textured<span class="minimenu__details__ind"></span></div>
                    </div>
                    <div class="card minimenu__details__item d-flex p-3 my-2" data-filter-type="finish" data-filter-value="matt">
                        <div>Matt<span class="minimenu__details__ind"></span></div>
                    </div>
                    <div class="card minimenu__details__item d-flex p-3 my-2" data-filter-type="finish" data-filter-value="wood-veneer">
                        <div>Wood Veneer<span class="minimenu__details__ind"></span></div>
                    </div>
                </div>
            </div>
            <div class="minimenu mr-1 my-1 p-2" data-filter="edge">
                <div class="minimenu__name uppercase">edge</div>
                <div class="minimenu__details py-3 px-3">
                    <div class="card minimenu__details__item d-flex p-3 my-2" data-filter-type="edge" data-filter-value="rounded">
                        <div>Rounded<span class="minimenu__details__ind"></span></div>
                    </div>
                    <div class="card minimenu__details__item d-flex p-3 my-2" data-filter-type="edge" data-filter-value="square">
                        <div>Square<span class="minimenu__details__ind"></span></div>
                    </div>
                </div>
            </div>
            <div class="minimenu mr-1 my-1 p-2" data-filter="length">
                <div class="minimenu__name uppercase">length</div>
                <div class="minimenu__details py-3 px-3">
                    <div class="card minimenu__details__item d-flex p-3 my-2" data-filter-type="length" data-filter-value="3m">
                        <div>3m<span class="minimenu__details__ind"></span></div>
                    </div>
                    <div class="card minimenu__details__item d-flex p-3 my-2" data-filter-type="length" data-filter-value="3.6m">
                        <div>3.6m<span class="minimenu__details__ind"></span></div>
                    </div>
                    <div class="card minimenu__details__item d-flex p-3 my-2" data-filter-type="length" data-filter-value="4m">
                        <div>4m<span class="minimenu__details__ind"></span></div>
                    </div>
                    <div class="card minimenu__details__item d-flex p-3 my-2" data-filter-type="length" data-filter-value="4.1m">
                        <div>4.1m<span class="minimenu__details__ind"></span></div>
                    </div>
                    <div class="mb-2">
                        <a href="gbu0-display/worktop_cutting_service.html" target="_blank">
                            <div class="font-weight-3">Need a specific size? You can use our <span class="underline">bespoke service</span> to customise your surfaces.</div>
                        </a>
                    </div>
                </div>
            </div>
            <div class="minimenu mr-1 my-1 p-2" data-filter="thickness">
                <div class="minimenu__name uppercase">thickness</div>
                <div class="minimenu__details py-3 px-3">
                    <div class="card minimenu__details__item d-flex p-3 my-2" data-filter-type="thickness" data-filter-value="22mm">
                        <div>22mm<span class="minimenu__details__ind"></span></div>
                    </div>
                    <div class="card minimenu__details__item d-flex p-3 my-2" data-filter-type="thickness" data-filter-value="28mm">
                        <div>28mm<span class="minimenu__details__ind"></span></div>
                    </div>
                    <div class="card minimenu__details__item d-flex p-3 my-2" data-filter-type="thickness" data-filter-value="38mm">
                        <div>38mm<span class="minimenu__details__ind"></span></div>
                    </div>
                    <div class="card minimenu__details__item d-flex p-3 my-2" data-filter-type="thickness" data-filter-value="40mm">
                        <div>40mm<span class="minimenu__details__ind"></span></div>
                    </div>
                </div>
            </div>
            <div class="minimenu mr-1 my-1 p-2" data-filter="width">
                <div class="minimenu__name uppercase">width</div>
                <div class="minimenu__details py-3 px-3">
                    <div class="card minimenu__details__item d-flex p-3 my-2" data-filter-type="width" data-filter-value="600mm">
                        <div>600mm<span class="minimenu__details__ind"></span></div>
                    </div>
                    <div class="card minimenu__details__item d-flex p-3 my-2" data-filter-type="width" data-filter-value="610mm">
                        <div>610mm<span class="minimenu__details__ind"></span></div>
                    </div>
                    <div class="card minimenu__details__item d-flex p-3 my-2" data-filter-type="width" data-filter-value="900mm">
                        <div>900mm<span class="minimenu__details__ind"></span></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="order-2 order-xl-1 my-1">
            <div class="filter-sort col-bs text-right">
                <span class="uppercase">sort by</span>
                <select class="filter-sort__sel">
                    <option value="popularity">Popularity</option>
                    <option value="price-des">Price: High - Low</option>
                    <option value="price-asc">Price: Low - High</option>
                </select>
            </div>
        </div>
        <div class="filter-tags row-bs align-items-center pt-2 col-bs order-1 col-8 col-xl-12">
            <div class="filter-tags__index font-14">Showing <span class="filter-tags__index__num font-weight-6"></span> ranges</div>
            <div class="filter-tags__con d-flex flex-wrap"></div>
            <div class="filter-tags__clear d-none underline">Clear&nbsp;All</div>
        </div>
    </div>

    <!-- Mobile filter -->
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
                    <option value="popularity">Popularity</option>
                    <option value="price-des">Price: Highest - Lowest</option>
                    <option value="price-asc">Price: Lowest - Highest</option>
                </select>
            </div>
        </div>
    </div>
    <div class="filters-mobile d-md-none">
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
                            <div class="minimenu__name uppercase">sort</div>
                        </div>
                    </label>
                    <select class="minimenu filter-sort__sel filter-sort__sel--mob col-bs" id="filter-mobile__sort">
                        <option value="popularity">Popularity</option>
                        <option value="price-des">Price: Highest - Lowest</option>
                        <option value="price-asc">Price: Lowest - Highest</option>
                    </select>
                </div>
            </div>
        </div>
        <div class="filters-mobile__accord">
            <div class="filters-mobile__close colour-white py-3 d-flex align-items-center pl-2">
                <div class="font-26 mobmenu__arrow mobmenu__arrow--back"></div>
                <div>Filters</div>
            </div>
            <div class="collapse my-2">
                <div class="collapse__head background-grey5 colour-white d-flex align-items-center background-grey py-3">
                    <div class="col-bs font-weight-5">Colour</div>
                    <div class="arrow mx-3"></div>
                </div>
                <div class="collapse__wrap background-grey">
                    <div class="minimenu__details__item d-flex p-3" data-filter-type="colour" data-filter-value="black">
                        <div class="border-circle colour-indicator colour-indicator--black mr-2"></div>
                        <div>Black<span class="minimenu__details__ind"> (1)</span></div>
                    </div>
                    <div class="minimenu__details__item d-flex p-3" data-filter-type="colour" data-filter-value="white">
                        <div class="border-circle colour-indicator colour-indicator--white mr-2"></div>
                        <div>White<span class="minimenu__details__ind"> (0)</span></div>
                    </div>
                    <div class="minimenu__details__item d-flex p-3" data-filter-type="colour" data-filter-value="light">
                        <div class="border-circle colour-indicator colour-indicator--light mr-2"></div>
                        <div>Light<span class="minimenu__details__ind"> (0)</span></div>
                    </div>
                    <div class="minimenu__details__item d-flex p-3" data-filter-type="colour" data-filter-value="light-wood">
                        <div class="border-circle colour-indicator colour-indicator--lwood mr-2"></div>
                        <div>Light Wood<span class="minimenu__details__ind"> (0)</span></div>
                    </div>
                    <div class="minimenu__details__item d-flex p-3" data-filter-type="colour" data-filter-value="medium-wood">
                        <div class="border-circle colour-indicator colour-indicator--mwood mr-2"></div>
                        <div>Medium Wood<span class="minimenu__details__ind"> (0)</span></div>
                    </div>
                    <div class="minimenu__details__item d-flex p-3" data-filter-type="colour" data-filter-value="dark-wood">
                        <div class="border-circle colour-indicator colour-indicator--dwood mr-2"></div>
                        <div>Dark Wood<span class="minimenu__details__ind"> (0)</span></div>
                    </div>
                    <div class="minimenu__details__item d-flex p-3" data-filter-type="colour" data-filter-value="grey">
                        <div class="border-circle colour-indicator colour-indicator--grey mr-2"></div>
                        <div>Grey<span class="minimenu__details__ind"> (0)</span></div>
                    </div>
                    <div class="minimenu__details__item d-flex p-3" data-filter-type="colour" data-filter-value="blue">
                        <div class="border-circle colour-indicator colour-indicator--blue mr-2"></div>
                        <div>Blue<span class="minimenu__details__ind"> (0)</span></div>
                    </div>
                    <div class="minimenu__details__item d-flex p-3" data-filter-type="colour" data-filter-value="red">
                        <div class="border-circle colour-indicator colour-indicator--red mr-2"></div>
                        <div>Red<span class="minimenu__details__ind"> (0)</span></div>
                    </div>
                </div>
            </div>
            <!-- <div class="collapse my-2">
                <div class="collapse__head background-grey5 colour-white d-flex align-items-center background-grey py-3">
                    <div class="col-bs font-weight-5">Style</div>
                    <div class="arrow mx-3"></div>
                </div>
                <div class="collapse__wrap background-grey">
                    <div class="minimenu__details__item d-flex p-3" data-filter-type="style" data-filter-value="granite">
                        <div>Granite<span class="minimenu__details__ind"> (1)</span></div>
                    </div>
                    <div class="minimenu__details__item d-flex p-3" data-filter-type="style" data-filter-value="quartz">
                        <div>Quartz<span class="minimenu__details__ind"> (1)</span></div>
                    </div>
                    <div class="minimenu__details__item d-flex p-3" data-filter-type="style" data-filter-value="marble">
                        <div>Marble<span class="minimenu__details__ind"> (1)</span></div>
                    </div>
                    <div class="minimenu__details__item d-flex p-3" data-filter-type="style" data-filter-value="concrete">
                        <div>Concrete<span class="minimenu__details__ind"> (0)</span></div>
                    </div>
                    <div class="minimenu__details__item d-flex p-3" data-filter-type="style" data-filter-value="stone">
                        <div>Stone<span class="minimenu__details__ind"> (1)</span></div>
                    </div>
                    <div class="minimenu__details__item d-flex p-3" data-filter-type="style" data-filter-value="wood">
                        <div>Wood Effect<span class="minimenu__details__ind"> (0)</span></div>
                    </div>
                    <div class="minimenu__details__item d-flex p-3" data-filter-type="style" data-filter-value="glass">
                        <div>Glass<span class="minimenu__details__ind"> (0)</span></div>
                    </div>
                    <div class="minimenu__details__item d-flex p-3" data-filter-type="style" data-filter-value="slate">
                        <div>Slate<span class="minimenu__details__ind"> (0)</span></div>
                    </div>
                    <div class="minimenu__details__item d-flex p-3" data-filter-type="style" data-filter-value="sparkle">
                        <div>Sparkle<span class="minimenu__details__ind"> (1)</span></div>
                    </div>
                    <div class="minimenu__details__item d-flex p-3" data-filter-type="style" data-filter-value="metal">
                        <div>Metal<span class="minimenu__details__ind"> (0)</span></div>
                    </div>
                    <div class="minimenu__details__item d-flex p-3" data-filter-type="style" data-filter-value="farmhouse">
                        <div>farmhouse<span class="minimenu__details__ind"> (0)</span></div>
                    </div>
                    <div class="minimenu__details__item d-flex p-3" data-filter-type="style" data-filter-value="classic">
                        <div>Classic<span class="minimenu__details__ind"> (2)</span></div>
                    </div>
                    <div class="minimenu__details__item d-flex p-3" data-filter-type="style" data-filter-value="contemporary">
                        <div>Contemporary<span class="minimenu__details__ind"> (5)</span></div>
                    </div>
                    <div class="minimenu__details__item d-flex p-3" data-filter-type="style" data-filter-value="alternative">
                        <div>Alternative<span class="minimenu__details__ind"> (0)</span></div>
                    </div>
                </div>
            </div> -->
            <div class="collapse my-2">
                <div class="collapse__head background-grey5 colour-white d-flex align-items-center background-grey py-3">
                    <div class="col-bs font-weight-5">Finish</div>
                    <div class="arrow mx-3"></div>
                </div>
                <div class="collapse__wrap background-grey">
                    <div class="minimenu__details__item d-flex p-3" data-filter-type="finish" data-filter-value="premium">
                        <div>Premium<span class="minimenu__details__ind"> (0)</span></div>
                    </div>
                    <div class="minimenu__details__item d-flex p-3" data-filter-type="finish" data-filter-value="standard">
                        <div>Standard<span class="minimenu__details__ind"> (0)</span></div>
                    </div>
                    <div class="minimenu__details__item d-flex p-3" data-filter-type="finish" data-filter-value="textured">
                        <div>Textured<span class="minimenu__details__ind"> (1)</span></div>
                    </div>
                    <div class="minimenu__details__item d-flex p-3" data-filter-type="finish" data-filter-value="matt">
                        <div>Matt<span class="minimenu__details__ind"> (0)</span></div>
                    </div>
                    <div class="minimenu__details__item d-flex p-3" data-filter-type="finish" data-filter-value="high-gloss">
                        <div>High-gloss<span class="minimenu__details__ind"> (0)</span></div>
                    </div>
                    <div class="minimenu__details__item d-flex p-3" data-filter-type="finish" data-filter-value="wood-veneer">
                        <div>Wood Veneer<span class="minimenu__details__ind"> (0)</span></div>
                    </div>
                </div>
            </div>
            <div class="collapse my-2">
                <div class="collapse__head background-grey5 colour-white d-flex align-items-center background-grey py-3">
                    <div class="col-bs font-weight-5">Edge</div>
                    <div class="arrow mx-3"></div>
                </div>
                <div class="collapse__wrap background-grey">
                    <div class="minimenu__details__item d-flex p-3" data-filter-type="edge" data-filter-value="rounded">
                        <div>Rounded<span class="minimenu__details__ind"> (1)</span></div>
                    </div>
                    <div class="minimenu__details__item d-flex p-3" data-filter-type="edge" data-filter-value="square">
                        <div>Square<span class="minimenu__details__ind"> (0)</span></div>
                    </div>
                </div>
            </div>
            <div class="collapse my-2">
                <div class="collapse__head background-grey5 colour-white d-flex align-items-center background-grey py-3">
                    <div class="col-bs font-weight-5">Length</div>
                    <div class="arrow mx-3"></div>
                </div>
                <div class="collapse__wrap background-grey">
                    <div class="minimenu__details__item d-flex p-3" data-filter-type="length" data-filter-value="3m">
                        <div>3m<span class="minimenu__details__ind"> (1)</span></div>
                    </div>
                    <div class="minimenu__details__item d-flex p-3" data-filter-type="length" data-filter-value="3.6m">
                        <div>3.6m<span class="minimenu__details__ind"> (0)</span></div>
                    </div>
                    <div class="minimenu__details__item d-flex p-3" data-filter-type="length" data-filter-value="4m">
                        <div>4m<span class="minimenu__details__ind"> (0)</span></div>
                    </div>
                    <div class="minimenu__details__item d-flex p-3" data-filter-type="length" data-filter-value="4.1m">
                        <div>4.1m<span class="minimenu__details__ind"> (1)</span></div>
                    </div>
                    <div class="card mb-2">
                        <a href="gbu0-display/worktop_cutting_service.html" target="_blank">
                            <div class="font-weight-3 p-2">Need a specific size? You can use our <span class="underline">bespoke service</span> to customise your surfaces.</div>
                        </a>
                    </div>
                </div>
            </div>
            <div class="collapse my-2">
                <div class="collapse__head background-grey5 colour-white d-flex align-items-center background-grey py-3">
                    <div class="col-bs font-weight-5">Thickness</div>
                    <div class="arrow mx-3"></div>
                </div>
                <div class="collapse__wrap background-grey">
                    <div class="minimenu__details__item d-flex p-3" data-filter-type="thickness" data-filter-value="22mm">
                        <div>22mm<span class="minimenu__details__ind"> (0)</span></div>
                    </div>
                    <div class="minimenu__details__item d-flex p-3" data-filter-type="thickness" data-filter-value="28mm">
                        <div>28mm<span class="minimenu__details__ind"> (0)</span></div>
                    </div>
                    <div class="minimenu__details__item d-flex p-3" data-filter-type="thickness" data-filter-value="38mm">
                        <div>38mm<span class="minimenu__details__ind"> (1)</span></div>
                    </div>
                    <div class="minimenu__details__item d-flex p-3" data-filter-type="thickness" data-filter-value="40mm">
                        <div>40mm<span class="minimenu__details__ind"> (0)</span></div>
                    </div>
                </div>
            </div>
            <div class="collapse my-2">
                <div class="collapse__head background-grey5 colour-white d-flex align-items-center background-grey py-3">
                    <div class="col-bs font-weight-5">Width</div>
                    <div class="arrow mx-3"></div>
                </div>
                <div class="collapse__wrap background-grey">
                    <div class="minimenu__details__item d-flex p-3" data-filter-type="width" data-filter-value="600mm">
                        <div>600mm<span class="minimenu__details__ind"> (0)</span></div>
                    </div>
                    <div class="minimenu__details__item d-flex p-3" data-filter-type="width" data-filter-value="610mm">
                        <div>610mm<span class="minimenu__details__ind"> (0)</span></div>
                    </div>
                    <div class="minimenu__details__item d-flex p-3" data-filter-type="width" data-filter-value="900mm">
                        <div>900mm<span class="minimenu__details__ind"> (1)</span></div>
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

    <div class="filter-range text-center row-bs px-2">

        <div class="filter-range__item col-6 col-md-auto col-xl-2 p-1 p-md-2" data-sku="WS-LA-ADBL" data-price="100" data-pop data-colour="black" data-length="3m,3.6m,4m" data-thickness="38mm,40mm" data-finish="high-gloss" data-edge="rounded,square" data-style="contemporary,sparkle" data-width="600mm,900mm">
            <div class="card card--full">
                <a href="laminate-worktops/black-sparkle-laminate-worktops-andromeda">
                    <img class="w-100 lazyload"data-srcset="media/swatches/black-sparkle-laminate-worktops-andromeda.jpg 1x, media/swatches/black-sparkle-laminate-worktops-andromeda@2x.jpg 2x" alt="Black Sparkle Laminate Worktops - Andromeda">
                    <h3 class="prod-sort__name py-2">
                        <div>
                            <div class="font-16 font-weight-5">Black Sparkle</div>
                            <div class="font-14 colour-grey4 lowercase font-weight-4">From &pound;100</div>
                        </div>
                    </h3>
                </a>
            </div>
        </div>

        <div class="filter-range__item col-6 col-md-auto col-xl-2 p-1 p-md-2" data-sku="WS-LA-MACA" data-price="120" data-pop data-colour="white" data-length="3m,3.6m" data-thickness="38mm" data-finish="premium" data-edge="rounded" data-style="classic,marble" data-width="600mm,900mm">
            <div class="card card--full">
                <a href="laminate-worktops/calcutta-marble-laminate-worktops">
                    <img class="w-100 lazyload" data-srcset="/media/swatches/marble-effect-worktop-calcutta-swatch.jpg 1x, /media/swatches/marble-effect-worktop-calcutta-swatch@2x.jpg 2x" alt="Marble Laminate Worktops - Calcutta">
                    <h3 class="prod-sort__name py-2">
                        <div>
                            <div class="font-16 font-weight-5">Marble <span class="d-none d-xl-inline">- </span> Calcutta</div>
                            <div class="font-14 colour-grey4 lowercase font-weight-4">from &pound;120</div>
                        </div>
                    </h3>
                </a>
            </div>
        </div>
        <div class="filter-range__item col-6 col-md-auto col-xl-2 p-1 p-md-2" data-sku="WS-LA-GBRA" data-price="160" data-pop data-colour="grey" data-length="3m" data-thickness="22mm" data-finish="high-gloss" data-edge="square" data-style="contemporary,quartz" data-width="610mm,900mm">
            <div class="card card--full">
                <a class="category-label category-label--slimline" href="laminate-worktops/grey-quartz-laminate-worktop-brasilia">
                    <img class="w-100 lazyload" data-srcset="/media/swatches/grey-quartz-brasilia-worktops-swatch.jpg 1x, /media/swatches/grey-quartz-brasilia-worktops-swatch@2x.jpg 2x" alt="Grey Quartz Laminate Worktops - Brasilia">
                    <h3 class="prod-sort__name py-2">
                        <div>
                            <div class="font-16 font-weight-5">Grey Quartz</div>
                            <div class="font-14 colour-grey4 lowercase font-weight-4">from &pound;160</div>
                        </div>
                    </h3>
                </a>
            </div>
        </div>
        <div class="filter-range__item col-6 col-md-auto col-xl-2 p-1 p-md-2" data-sku="WS-LA-ADWH" data-price="100" data-pop data-colour="white" data-length="3m,4m,4.1m" data-thickness="38mm,40mm" data-finish="high-gloss" data-edge="rounded,square" data-style="contemporary,sparkle" data-width="600mm,900mm">
            <div class="card card--full">
                <a href="laminate-worktops/white-sparkle-laminate-worktops-andromeda">
                    <img class="w-100 lazyload" data-srcset="media/swatches/white-sparkle-laminate-worktops-swatch.jpg 1x, /swatches/white-sparkle-laminate-worktops-swatch@2x.jpg 2x" alt="White Sparkle Laminate Worktops - Andromeda">
                    <h3 class="prod-sort__name py-2">
                        <div>
                            <div class="font-16 font-weight-5">White Sparkle</div>
                            <div class="font-14 colour-grey4 lowercase font-weight-4">from &pound;100</div>
                        </div>
                    </h3>
                </a>
            </div>
        </div>
        <div class="filter-range__item col-6 col-md-auto col-xl-2 p-1 p-md-2" data-sku="WS-LA-SMWH" data-price="180" data-pop data-colour="white" data-length="3m" data-thickness="22mm" data-finish="matt" data-edge="square" data-style="contemporary" data-width="610mm,900mm">
            <div class="card card--full">
                <a class="category-label category-label--slimline" href="laminate-worktops/white-super-matt-worktops">
                    <img class="w-100 lazyload" data-srcset="/media/swatches/pure-white-super-matt-worktops-swatch.jpg 1x, /media/swatches/pure-white-super-matt-worktops-swatch@2x.jpg 2x" alt="Pure White - Super Matt Worktops">
                    <h3 class="prod-sort__name py-2">
                        <div>
                            <div class="font-16 font-weight-5">Pure White</div>
                            <div class="font-14 colour-grey4 lowercase font-weight-4">from &pound;180</div>
                        </div>
                    </h3>
                </a>
            </div>
        </div>
        <div class="filter-range__item col-6 col-md-auto col-xl-2 p-1 p-md-2" data-sku="WS-LA-NELU" data-price="100" data-pop data-colour="grey" data-length="3m,4.1m" data-thickness="38mm" data-finish="textured" data-edge="rounded" data-style="classic,contemporary,slate" data-width="600mm,900mm">
            <div class="card card--full">
                <a href="laminate-worktops/grey-slate-laminate-worktops-luna-nero">
                    <img class="w-100 lazyload" data-srcset="media/swatches/grey-slate-laminate-worktops-swatch.jpg 1x, media/swatches/grey-slate-laminate-worktops-swatch@2x.jpg 2x" alt="Grey Slate Laminate Worktops - Luna Nero">
                    <h3 class="prod-sort__name py-2">
                        <div>
                            <div class="font-16 font-weight-5">Grey Slate</div>
                            <div class="font-14 colour-grey4 lowercase font-weight-4">from &pound;100</div>
                        </div>
                    </h3>
                </a>
            </div>
        </div>

        <div class="filter-range__item col-6 col-md-auto col-xl-2 p-1 p-md-2" data-sku="WS-LA-SMAG" data-price="180" data-pop data-colour="grey" data-length="3m" data-thickness="22mm" data-finish="matt" data-edge="square" data-style="contemporary" data-width="610mm,900mm">
            <div class="card card--full">
                <a class="category-label category-label--slimline" href="laminate-worktops/grey-super-matt-worktops">
                    <img class="w-100 lazyload" data-srcset="/media/swatches/super-matt-worktops-anthracite-grey-swatch.jpg 1x, /media/swatches/super-matt-worktops-anthracite-grey-swatch@2x.jpg 2x" alt="Anthracite Grey - Super Matt">
                    <h3 class="prod-sort__name py-2">
                        <div>
                            <div class="font-16 font-weight-5">Anthracite Grey</div>
                            <div class="font-14 colour-grey4 lowercase font-weight-4">from &pound;180</div>
                        </div>
                    </h3>
                </a>
            </div>
        </div>

        <div class="filter-range__item col-6 col-md-auto col-xl-2 p-1 p-md-2" data-sku="WS-WO-POAK-OENG" data-price="135" data-pop data-colour="medium-wood" data-length="2m,3m" data-thickness="38mm" data-finish="wood-veneer" data-edge="square" data-style="farmhouse,classic,wood" data-width="600mm,900mm">
            <div class="card card--full">
                <a href="laminate-worktops/oak-veneer-worktops">
                    <img class="w-100 lazyload" data-srcset="media/swatches/engineered-oak-swatch.jpg 1x, media/swatches/engineered-oak-swatch@2x.jpg 2x" alt="Oak Veneer Laminate Worktops">
                    <h3 class="prod-sort__name py-2">
                        <div>
                            <div class="font-16 font-weight-5">Oak Veneer</div>
                            <div class="font-14 colour-grey4 lowercase font-weight-4">from &pound;135</div>
                        </div>
                    </h3>
                </a>
            </div>
        </div>
        <div class="filter-range__item col-6 col-md-auto col-xl-2 p-1 p-md-2" data-sku="WS-LA-WH" data-price="80" data-pop data-colour="white" data-length="3m,4.1m" data-thickness="38mm" data-finish="standard" data-edge="rounded" data-style="contemporary" data-width="600mm,900mm">
            <div class="card card--full">
                <a href="laminate-worktops/white-laminate-worktops">
                    <img class="w-100 lazyload" data-srcset="media/swatches/white-laminate-worktops-swatch.jpg 1x, media/swatches/white-laminate-worktops-swatch@2x.jpg 2x" alt="White Laminate Worktops">
                    <h3 class="prod-sort__name py-2">
                        <div>
                            <div class="font-16 font-weight-5">White</div>
                            <div class="font-14 colour-grey4 lowercase font-weight-4">from &pound;80</div>
                        </div>
                    </h3>
                </a>
            </div>
        </div>
        <div class="filter-range__item col-6 col-md-auto col-xl-2 p-1 p-md-2" data-sku="WS-LA-GASP" data-price="80" data-pop data-colour="grey" data-length="3m,4.1m" data-thickness="38mm" data-finish="high-gloss" data-edge="rounded" data-style="contemporary,sparkle" data-width="600mm,900mm">
            <div class="card card--full">
                <a href="laminate-worktops/grey-sparkle-laminate-worktops-andromeda">
                    <img class="w-100 lazyload" data-srcset="media/swatches/grey-sparkle-laminate-worktops-andromeda-swatch.jpg 1x, media/swatches/grey-sparkle-laminate-worktops-andromeda-swatch@2x.jpg 2x" alt="Grey Sparkle Laminate Worktops - Andromeda">
                    <h3 class="prod-sort__name py-2">
                        <div>
                            <div class="font-16 font-weight-5">Grey Sparkle</div>
                            <div class="font-14 colour-grey4 lowercase font-weight-4">from &pound;80</div>
                        </div>
                    </h3>
                </a>
            </div>
        </div>
        <div class="filter-range__item col-6 col-md-auto col-xl-2 p-1 p-md-2" data-sku="WS-LA-PARW-SQ" data-price="120" data-pop data-colour="grey" data-length="3m" data-thickness="38mm" data-finish="textured" data-edge="square" data-style="contemporary,stone" data-width="600mm,900mm">
            <div class="card card--full">
                <a class="category-label category-label--new" href="/laminate-worktops/patina-rock-laminate-worktops">
                    <img class="w-100 lazyload" data-srcset="media/swatches/patina-rock-worktops-swatch.jpg 1x, media/swatches/patina-rock-worktops-swatch@2x.jpg 2x" alt="Patina Rock Laminate Worktop">
                    <h3 class="prod-sort__name py-2">
                        <div>
                            <div class="font-16 font-weight-5">Patina Rock</div>
                            <div class="font-14 colour-grey4 lowercase font-weight-4">from &pound;120</div>
                        </div>
                    </h3>
                </a>
            </div>
        </div>
        <div class="filter-range__item col-6 col-md-auto col-xl-2 p-1 p-md-2" data-sku="WS-LA-COOA" data-price="80" data-pop data-colour="medium-wood" data-length="3m,3.6m" data-thickness="38mm" data-finish="standard" data-edge="rounded" data-style="wood,farmhouse,classic" data-width="600mm,900mm">
            <div class="card card--full">
                <a href="laminate-worktops/colmar-oak-worktops">
                    <img class="w-100 lazyload" data-srcset="media/swatches/colmar-oak-worktops-swatch.jpg 1x, media/swatches/colmar-oak-worktops-swatch@2x.jpg 2x" alt="Colmar Oak Worktops">
                    <h3 class="prod-sort__name py-2">
                        <div>
                            <div class="font-16 font-weight-5">Colmar Oak</div>
                            <div class="font-14 colour-grey4 lowercase font-weight-4">from &pound;80</div>
                        </div>
                    </h3>
                </a>
            </div>
        </div>
        <div class="filter-range__item col-6 col-md-auto col-xl-2 p-1 p-md-2" data-sku="WS-LA-SILV-SQ" data-price="120" data-pop data-colour="light-wood" data-length="3m" data-thickness="38mm" data-finish="textured" data-edge="square" data-style="farmhouse,wood" data-width="600mm,900mm">
            <div class="card card--full">
                <a class="category-label category-label--new" href="/laminate-worktops/silver-oak-laminate-worktops">
                    <img class="w-100 lazyload" data-srcset="media/swatches/silver-oak-worktops-swatch.jpg 1x, media/swatches/silver-oak-worktops-swatch@2x.jpg 2x" alt="Silver Oak Laminate Worktop">
                    <h3 class="prod-sort__name py-2">
                        <div>
                            <div class="font-16 font-weight-5">Silver Oak</div>
                            <div class="font-14 colour-grey4 lowercase font-weight-4">from &pound;120</div>
                        </div>
                    </h3>
                </a>
            </div>
        </div>
        <div class="filter-range__item col-6 col-md-auto col-xl-2 p-1 p-md-2" data-sku="WS-LA-GROA" data-price="100" data-pop data-colour="dark-wood" data-length="3m" data-thickness="38mm" data-finish="matt" data-edge="square" data-style="farmhouse,wood" data-width="600mm,900mm">
            <div class="card card--full">
                <a href="laminate-worktops/vintage-oak-laminate-worktops">
                    <img class="w-100 lazyload" data-srcset="media/swatches/grey-oak-worktops-antique-square-edge-swatch.jpg 1x, media/swatches/grey-oak-worktops-antique-square-edge-swatch@2x.jpg 2x" alt="Vintage Oak Laminate Worktops">
                    <h3 class="prod-sort__name py-2">
                        <div>
                            <div class="font-16 font-weight-5">Vintage Oak</div>
                            <div class="font-14 colour-grey4 lowercase font-weight-4">from &pound;100</div>
                        </div>
                    </h3>
                </a>
            </div>
        </div>
        <div class="filter-range__item col-6 col-md-auto col-xl-2 p-1 p-md-2" data-sku="WS-LA-MYPW" data-price="120" data-pop data-colour="wood-light" data-length="3m" data-thickness="38mm" data-finish="textured" data-edge="square" data-style="farmhouse,wood" data-width="600mm,900mm">
            <div class="card card--full">
                <a href="laminate-worktops/mystic-pine-laminate-worktops">
                    <img class="w-100 lazyload" data-srcset="media/swatches/mystic-pine-worktops-swatch.jpg 1x, media/swatches/mystic-pine-worktops-swatch@2x.jpg 2x" alt="Mystic Pine Laminate Worktop">
                    <h3 class="prod-sort__name py-2">
                        <div>
                            <div class="font-16 font-weight-5">Mystic Pine</div>
                            <div class="font-14 colour-grey4 lowercase font-weight-4">from &pound;120</div>
                        </div>
                    </h3>
                </a>
            </div>
        </div>
        <div class="filter-range__item col-6 col-md-auto col-xl-2 p-1 p-md-2" data-sku="WS-LA-WLBK" data-price="60" data-pop data-colour="dark-wood" data-length="3m,4.1m" data-thickness="38mm" data-finish="standard" data-edge="rounded" data-style="wood,farmhouse,classic" data-width="600mm,900mm">
            <div class="card card--full">
                <a href="laminate-worktops/walnut-block-laminate-worktops">
                    <img class="w-100 lazyload" data-srcset="media/swatches/walnut-block-laminate-worktops-swatch.jpg 1x, media/swatches/walnut-block-laminate-worktops-swatch@2x.jpg 2x" alt="Walnut Block Laminate Worktops">
                    <h3 class="prod-sort__name py-2">
                        <div>
                            <div class="font-16 font-weight-5">Walnut Block</div>
                            <div class="font-14 colour-grey4 lowercase font-weight-4">from &pound;60</div>
                        </div>
                    </h3>
                </a>
            </div>
        </div>
        <div class="filter-range__item col-6 col-md-auto col-xl-2 p-1 p-md-2" data-sku="WS-LA-OABK" data-price="60" data-pop data-colour="medium-wood" data-length="3m,4.1m" data-thickness="38mm" data-finish="standard" data-edge="rounded" data-style="wood,farmhouse,classic" data-width="600mm,900mm">
            <div class="card card--full">
                <a href="laminate-worktops/oak-block-laminate-worktops">
                    <img class="w-100 lazyload" data-srcset="media/swatches/oak-block-laminate-worktops-swatch.jpg 1x, media/swatches/oak-block-laminate-worktops-swatch@2x.jpg 2x" alt="Oak Block Laminate Worktops">
                    <h3 class="prod-sort__name py-2">
                        <div>
                            <div class="font-16 font-weight-5">Oak Block</div>
                            <div class="font-14 colour-grey4 lowercase font-weight-4">from &pound;60</div>
                        </div>
                    </h3>
                </a>
            </div>
        </div>
        <div class="filter-range__item col-6 col-md-auto col-xl-2 p-1 p-md-2" data-sku="WS-LA-RWMP-SQ" data-price="100" data-pop data-colour="light-wood" data-length="3m" data-thickness="38mm" data-finish="textured" data-edge="square" data-style="wood,farmhouse,contemporary" data-width="600mm,900mm">
            <div class="card card--full">
                <a href="laminate-worktops/rustic-wood-laminate-worktops-mississippi-pine-square-edge">
                    <img class="w-100 lazyload" data-srcset="media/swatches/rustic-wood-laminate-worktops-swatch.jpg 1x, media/swatches/rustic-wood-laminate-worktops-swatch@2x.jpg 2x" alt="Rustic Wood Laminate Worktops - Mississippi Pine">
                    <h3 class="prod-sort__name py-2">
                        <div>
                            <div class="font-16 font-weight-5">Rustic Wood</div>
                            <div class="font-14 colour-grey4 lowercase font-weight-4">from &pound;100</div>
                        </div>
                    </h3>
                </a>
            </div>
        </div>
        <div class="filter-range__item col-6 col-md-auto col-xl-2 p-1 p-md-2" data-sku="WS-LA-RANGE-BLBU" data-price="80" data-pop data-colour="black" data-length="3m,4.1m" data-thickness="38mm" data-finish="textured" data-edge="rounded" data-style="contemporary" data-width="600mm,900mm">
            <div class="card card--full">
                <a href="laminate-worktops/black-worktops">
                    <img class="w-100 lazyload" data-srcset="media/swatches/black-laminate-worktop-swatch.jpg 1x, media/swatches/black-laminate-worktop-swatch@2x.jpg 2x" alt="Black Worktops">
                    <h3 class="prod-sort__name py-2">
                        <div>
                            <div class="font-16 font-weight-5">Black</div>
                            <div class="font-14 colour-grey4 lowercase font-weight-4">from &pound;80</div>
                        </div>
                    </h3>
                </a>
            </div>
        </div>
        <div class="filter-range__item col-6 col-md-auto col-xl-2 p-1 p-md-2" data-sku="WA-LA-WG" data-price="120" data-pop data-colour="white" data-length="3m,4m" data-thickness="28mm" data-finish="premium" data-edge="square" data-style="contemporary,glass" data-width="600mm,900mm">
            <div class="card card--full">
                <a href="laminate-worktops/white-glass-effect-worktops">
                    <img class="w-100 lazyload" data-srcset="media/swatches/white-glass-effect-worktops-swatch.jpg 1x, media/swatches/white-glass-effect-worktops-swatch@2x.jpg 2x" alt="White Glass Effect Worktops">
                    <h3 class="prod-sort__name py-2">
                        <div>
                            <div class="font-16 font-weight-5">White Glass</div>
                            <div class="font-14 colour-grey4 lowercase font-weight-4">from &pound;120</div>
                        </div>
                    </h3>
                </a>
            </div>
        </div>
        <div class="filter-range__item col-6 col-md-auto col-xl-2 p-1 p-md-2" data-sku="WS-LA-COPP-SQ" data-price="120" data-pop data-colour="red" data-length="3m,4m" data-thickness="40mm" data-finish="premium" data-edge="square" data-style="contemporary,metal" data-width="600mm,900mm">
            <div class="card card--full">
                <a href="laminate-worktops/copper-worktops-copper-effect-laminate-worktops">
                    <img class="w-100 lazyload" data-srcset="media/swatches/copper-worktops-copper-effect-laminate-worktops-swatch.jpg 1x, media/swatches/copper-worktops-copper-effect-laminate-worktops-swatch@2x.jpg 2x" alt="Copper Worktops - Copper Effect Laminate Worktops">
                    <h3 class="prod-sort__name py-2">
                        <div>
                            <div class="font-16 font-weight-5">Copper Effect</div>
                            <div class="font-14 colour-grey4 lowercase font-weight-4">from &pound;120</div>
                        </div>
                    </h3>
                </a>
            </div>
        </div>
        <div class="filter-range__item col-6 col-md-auto col-xl-2 p-1 p-md-2" data-sku="WS-LA-RO" data-price="120" data-pop data-colour="medium-wood" data-length="3m,4m" data-thickness="40mm" data-finish="premium" data-edge="square" data-style="wood,farmhouse,classic" data-width="600mm,900mm">
            <div class="card card--full">
                <a href="laminate-worktops/laminate-full-stave-rustic-oak-worktop">
                    <img class="w-100 lazyload" data-srcset="media/swatches/rustic-oak-laminate-worktops-swatch.jpg 1x, media/swatches/rustic-oak-laminate-worktops-swatch@2x.jpg 2x" alt="Laminate Full Stave Rustic Oak Worktop">
                    <h3 class="prod-sort__name py-2">
                        <div>
                            <div class="font-16 font-weight-5">Rustic Oak</div>
                            <div class="font-14 colour-grey4 lowercase font-weight-4">from &pound;120</div>
                        </div>
                    </h3>
                </a>
            </div>
        </div>
        <div class="filter-range__item col-6 col-md-auto col-xl-2 p-1 p-md-2" data-sku="WS-LA-NIBL" data-price="80" data-pop data-colour="black" data-length="3m,4.1m" data-thickness="38mm" data-finish="standard" data-edge="rounded" data-style="granite,classic" data-width="600mm,900mm">
            <div class="card card--full">
                <a href="laminate-worktops/black-granite-laminate-worktops-nimbus">
                    <img class="w-100 lazyload" data-srcset="media/swatches/black-granite-nimbus-laminate-worktop-swatch.jpg 1x, media/swatches/black-granite-nimbus-laminate-worktop-swatch@2x.jpg 2x" alt="Black Granite Laminate Worktops - Nimbus">
                    <h3 class="prod-sort__name py-2">
                        <div>
                            <div class="font-16 font-weight-5">Black Granite</div>
                            <div class="font-14 colour-grey4 lowercase font-weight-4">from &pound;80</div>
                        </div>
                    </h3>
                </a>
            </div>
        </div>
        <div class="filter-range__item col-6 col-md-auto col-xl-2 p-1 p-md-2" data-sku="WS-LA-WHQS" data-price="80" data-pop data-colour="white" data-length="3m,4.1m" data-thickness="38mm" data-finish="textured" data-edge="rounded" data-style="classic,quartz" data-width="600mm,900mm">
            <div class="card card--full">
                <a href="laminate-worktops/white-quartz-stone-laminate-worktops">
                    <img class="w-100 lazyload" data-srcset="media/swatches/white-quartz-stone-laminate-worktops-swatch.jpg 1x, media/swatches/white-quartz-stone-laminate-worktops-swatch@2x.jpg 2x" alt="White Quartz Stone Laminate Worktops">
                    <h3 class="prod-sort__name py-2">
                        <div>
                            <div class="font-16 font-weight-5">White Quartz</div>
                            <div class="font-14 colour-grey4 lowercase font-weight-4">from &pound;80</div>
                        </div>
                    </h3>
                </a>
            </div>
        </div>
        <div class="filter-range__item col-6 col-md-auto col-xl-2 p-1 p-md-2" data-sku="WS-LA-DWR" data-price="80" data-pop data-colour="dark-wood" data-length="3m,3.6m" data-thickness="38mm" data-finish="standard" data-edge="rounded" data-style="farmhouse,wood" data-width="600mm,900mm">
            <div class="card card--full">
                <a href="laminate-worktops/dark-walnut-wilsonart-worktops-romantic">
                    <img class="w-100 lazyload" data-srcset="media/swatches/dark-walnut-wilsonart-worktops-romantic-swatch.jpg 1x, media/swatches/dark-walnut-wilsonart-worktops-romantic-swatch@2x.jpg 2x" alt="Dark Walnut Wilsonart Worktops - Romantic">
                    <h3 class="prod-sort__name py-2">
                        <div>
                            <div class="font-16 font-weight-5">Romantic Walnut</div>
                            <div class="font-14 colour-grey4 lowercase font-weight-4">from &pound;80</div>
                        </div>
                    </h3>
                </a>
            </div>
        </div>
        <div class="filter-range__item col-6 col-md-auto col-xl-2 p-1 p-md-2" data-sku="WS-LA-BLQS" data-price="80" data-pop data-colour="black" data-length="3m,4.1m" data-thickness="38mm" data-finish="textured" data-edge="rounded" data-style="contemporary,quartz" data-width="600mm,900mm">
            <div class="card card--full">
                <a href="laminate-worktops/black-quartz-laminate-worktops">
                    <img class="w-100 lazyload" data-srcset="media/swatches/black-quartz-laminate-worktop-swatch.jpg 1x, media/swatches/black-quartz-laminate-worktop-swatch@2x.jpg 2x" alt="Black Quartz Laminate Worktops">
                    <h3 class="prod-sort__name py-2">
                        <div>
                            <div class="font-16 font-weight-5">Black Quartz</div>
                            <div class="font-14 colour-grey4 lowercase font-weight-4">from &pound;80</div>
                        </div>
                    </h3>
                </a>
            </div>
        </div>
        <div class="filter-range__item col-6 col-md-auto col-xl-2 p-1 p-md-2" data-sku="WS-LA-GRST" data-price="80" data-pop data-colour="grey" data-length="3m,4.1m" data-thickness="38mm" data-finish="standard" data-edge="rounded" data-style="classic,stone" data-width="600mm,900mm">
            <div class="card card--full">
                <a href="laminate-worktops/stone-worktops-ipanema-grey">
                    <img class="w-100 lazyload" data-srcset="media/swatches/stone-laminate-worktop-ipanema-grey-swatch.jpg 1x, media/swatches/stone-laminate-worktop-ipanema-grey-swatch@2x.jpg 2x" alt="Stone Worktops - Ipanema Grey">
                    <h3 class="prod-sort__name py-2">
                        <div>
                            <div class="font-16 font-weight-5">Grey Stone</div>
                            <div class="font-14 colour-grey4 lowercase font-weight-4">from &pound;80</div>
                        </div>
                    </h3>
                </a>
            </div>
        </div>
        <div class="filter-range__item col-6 col-md-auto col-xl-2 p-1 p-md-2" data-sku="WS-LA-GRGD" data-price="60" data-pop data-colour="grey" data-length="3m,4.1m" data-thickness="38mm" data-finish="standard" data-edge="rounded" data-style="classic,granite" data-width="600mm,900mm">
            <div class="card card--full">
                <a href="laminate-worktops/grey-granite-laminate-worktops-dolomite">
                    <img class="w-100 lazyload" data-srcset="media/swatches/grey-granite-laminate-worktops-dolomite-swatch.jpg 1x, media/swatches/grey-granite-laminate-worktops-dolomite-swatch@2x.jpg 2x" alt="Grey Granite Laminate Worktops - Dolomite">
                    <h3 class="prod-sort__name py-2">
                        <div>
                            <div class="font-16 font-weight-5">Grey Granite</div>
                            <div class="font-14 colour-grey4 lowercase font-weight-4">from &pound;60</div>
                        </div>
                    </h3>
                </a>
            </div>
        </div>
        <div class="filter-range__item col-6 col-md-auto col-xl-2 p-1 p-md-2" data-sku="WS-LA-BRST" data-price="120" data-pop data-colour="grey" data-length="3m,4.1m" data-thickness="38mm" data-finish="premium" data-edge="rounded" data-style="contemporary,metal" data-width="600mm,900mm">
            <div class="card card--full">
                <a href="laminate-worktops/stainless-steel-worktops-brushed">
                    <img class="w-100 lazyload" data-srcset="media/swatches/brushed-stainless-steel-effect-laminate-work-surfaces-swatch.jpg 1x, media/swatches/brushed-stainless-steel-effect-laminate-work-surfaces-swatch@2x.jpg 2x" alt="Stainless Steel Worktops - Brushed Steel Effect Laminate Work Surfaces">
                    <h3 class="prod-sort__name py-2">
                        <div>
                            <div class="font-16 font-weight-5">Brushed Steel</div>
                            <div class="font-14 colour-grey4 lowercase font-weight-4">from &pound;120</div>
                        </div>
                    </h3>
                </a>
            </div>
        </div>
        <div class="filter-range__item col-6 col-md-auto col-xl-2 p-1 p-md-2" data-sku="WS-LA-AROA" data-price="100" data-pop data-colour="light-wood" data-length="3m" data-thickness="38mm" data-finish="textured" data-edge="square" data-style="contemporary,wood" data-width="600mm,900mm">
            <div class="card card--full">
                <a href="laminate-worktops/arlington-oak-laminate-worktops">
                    <img class="w-100 lazyload" data-srcset="media/swatches/arlington-oak-laminate-worktops-swatch.jpg 1x, media/swatches/arlington-oak-laminate-worktops-swatch@2x.jpg 2x" alt="Arlington Oak Laminate Worktops">
                    <h3 class="prod-sort__name py-2">
                        <div>
                            <div class="font-16 font-weight-5">Arlington Oak</div>
                            <div class="font-14 colour-grey4 lowercase font-weight-4">from &pound;100</div>
                        </div>
                    </h3>
                </a>
            </div>
        </div>
        <div class="filter-range__item col-6 col-md-auto col-xl-2 p-1 p-md-2" data-sku="WS-LA-COGR" data-price="100" data-pop data-colour="grey" data-length="3m,4.1m" data-thickness="38mm" data-finish="matt" data-edge="rounded" data-style="contemporary,concrete" data-width="600mm,900mm">
            <div class="card card--full">
                <a href="laminate-worktops/concrete-laminate-worktops-grey">
                    <img class="w-100 lazyload" data-srcset="media/swatches/concrete-laminate-worktops-grey-swatch.jpg 1x, media/swatches/concrete-laminate-worktops-grey-swatch@2x.jpg 2x" alt="Concrete Laminate Worktops - Grey">
                    <h3 class="prod-sort__name py-2">
                        <div>
                            <div class="font-16 font-weight-5">Concrete</div>
                            <div class="font-14 colour-grey4 lowercase font-weight-4">from &pound;100</div>
                        </div>
                    </h3>
                </a>
            </div>
        </div>
        <div class="filter-range__item col-6 col-md-auto col-xl-2 p-1 p-md-2" data-sku="WS-LA-CRTB" data-price="60" data-pop data-colour="light" data-length="3m,4.1m" data-thickness="38mm" data-finish="standard" data-edge="rounded" data-style="classic,stone" data-width="600mm,900mm">
            <div class="card card--full">
                <a href="laminate-worktops/cream-laminate-worktops-taurus-beige">
                    <img class="w-100 lazyload" data-srcset="media/swatches/cream-worktops-swatch.jpg 1x, media/swatches/cream-worktops-swatch@2x.jpg 2x" alt="Cream Laminate Worktops - Taurus Beige">
                    <h3 class="prod-sort__name py-2">
                        <div>
                            <div class="font-16 font-weight-5">Taurus Beige</div>
                            <div class="font-14 colour-grey4 lowercase font-weight-4">from &pound;60</div>
                        </div>
                    </h3>
                </a>
            </div>
        </div>
        <div class="filter-range__item col-6 col-md-auto col-xl-2 p-1 p-md-2" data-sku="WS-LA-GG" data-price="120" data-pop data-colour="light" data-length="3m,4mm" data-thickness="28mm" data-finish="premium" data-edge="square" data-style="contemporary,glass" data-width="600mm,900mm">
            <div class="card card--full">
                <a href="laminate-worktops/mint-green-glass-effect-worktops">
                    <img class="w-100 lazyload" data-srcset="media/swatches/green-glass-effect-worktops-swatch.jpg 1x, media/swatches/green-glass-effect-worktops-swatch@2x.jpg 2x" alt="Mint Green Glass Effect Laminate Worktops">
                    <h3 class="prod-sort__name py-2">
                        <div>
                            <div class="font-16 font-weight-5">Green Glass</div>
                            <div class="font-14 colour-grey4 lowercase font-weight-4">from &pound;120</div>
                        </div>
                    </h3>
                </a>
            </div>
        </div>
        <div class="filter-range__item col-6 col-md-auto col-xl-2 p-1 p-md-2" data-sku="WS-LA-WHOA" data-price="120" data-pop data-colour="light-wood,white" data-length="3m,4m" data-thickness="40mm" data-finish="premium" data-edge="square" data-style="contemporary,wood" data-width="600mm,900mm">
            <div class="card card--full">
                <a href="laminate-worktops/white-oak-worktops">
                    <img class="w-100 lazyload" data-srcset="media/swatches/white-oak-worktops-swatch.jpg 1x, media/swatches/white-oak-worktops-swatch@2x.jpg 2x" alt="White Oak Laminate Worktops">
                    <h3 class="prod-sort__name py-2">
                        <div>
                            <div class="font-16 font-weight-5">White Oak</div>
                            <div class="font-14 colour-grey4 lowercase font-weight-4">from &pound;120</div>
                        </div>
                    </h3>
                </a>
            </div>
        </div>
        <div class="filter-range__item col-6 col-md-auto col-xl-2 p-1 p-md-2" data-sku="WS-LA-BGCO" data-price="100" data-pop data-colour="black" data-length="3m" data-thickness="38mm" data-finish="high-gloss" data-edge="square" data-style="contemporary,stone" data-width="600mm,900mm">
            <div class="card card--full">
                <a href="laminate-worktops/black-gloss-laminate-worktops-constellation-square-edge">
                    <img class="w-100 lazyload" data-srcset="media/swatches/black-gloss-laminate-worktops-swatch.jpg 1x, media/swatches/black-gloss-laminate-worktops-swatch@2x.jpg 2x" alt="Black Gloss Laminate Worktops - Constellation">
                    <h3 class="prod-sort__name py-2">
                        <div>
                            <div class="font-16 font-weight-5">Black Gloss</div>
                            <div class="font-14 colour-grey4 lowercase font-weight-4">from &pound;100</div>
                        </div>
                    </h3>
                </a>
            </div>
        </div>
        <div class="filter-range__item col-6 col-md-auto col-xl-2 p-1 p-md-2" data-sku="WS-LA-COBO" data-price="72" data-pop data-colour="light-wood" data-length="3m,3.6m" data-thickness="38mm" data-finish="textured" data-edge="rounded" data-style="classic,wood" data-width="600mm,900mm">
            <div class="card card--full">
                <a class="category-label category-label--sale" href="laminate-worktops/coco-bolo-worktops">
                    <img class="w-100 lazyload" data-srcset="media/swatches/coco-bolo-worktops-swatch.jpg 1x, media/swatches/coco-bolo-worktops-swatch@2x.jpg 2x" alt="Coco Bolo Worktops">
                    <h3 class="prod-sort__name py-2">
                        <div>
                            <div class="font-16 font-weight-5">Coco Bolo</div>
                            <div class="font-14 colour-grey4 lowercase font-weight-4">from &pound;72</div>
                        </div>
                    </h3>
                </a>
            </div>
        </div>
        <div class="filter-range__item col-6 col-md-auto col-xl-2 p-1 p-md-2" data-sku="WS-LA-LUNI" data-price="120" data-pop data-colour="black" data-length="3m,3.6m" data-thickness="38mm" data-finish="premium" data-edge="rounded" data-style="contemporary" data-width="600mm,900mm">
            <div class="card card--full">
                <a href="laminate-worktops/lunar-night-worktops">
                    <img class="w-100 lazyload" data-srcset="media/swatches/lunar-night-worktops-swatch.jpg 1x, media/swatches/lunar-night-worktops-swatch@2x.jpg 2x" alt="Lunar Night Worktops">
                    <h3 class="prod-sort__name py-2">
                        <div>
                            <div class="font-16 font-weight-5">Lunar Night</div>
                            <div class="font-14 colour-grey4 lowercase font-weight-4">from &pound;120</div>
                        </div>
                    </h3>
                </a>
            </div>
        </div>
        <div class="filter-range__item col-6 col-md-auto col-xl-2 p-1 p-md-2" data-sku="WS-LA-GLST" data-price="80" data-pop data-colour="white" data-length="3m,4.1mm" data-thickness="38mm" data-finish="standard" data-edge="rounded" data-style="classic,stone" data-width="600mm,900mm">
            <div class="card card--full">
                <a href="laminate-worktops/duropal-worktops-glacial-storm">
                    <img class="w-100 lazyload" data-srcset="media/swatches/duropal-laminate-worktops-glacial-storm-swatch.jpg 1x, media/swatches/duropal-laminate-worktops-glacial-storm-swatch@2x.jpg 2x" alt="Duropal Worktops - Glacial Storm">
                    <h3 class="prod-sort__name py-2">
                        <div>
                            <div class="font-16 font-weight-5">Glacial Storm</div>
                            <div class="font-14 colour-grey4 lowercase font-weight-4">from &pound;80</div>
                        </div>
                    </h3>
                </a>
            </div>
        </div>
        <div class="filter-range__item col-6 col-md-auto col-xl-2 p-1 p-md-2" data-sku="WS-LA-TREB" data-price="80" data-pop data-colour="grey" data-length="3m,4m" data-thickness="38mm" data-finish="standard" data-edge="rounded" data-style="contemporary,stone" data-width="600mm,900mm">
            <div class="card card--full">
                <a href="laminate-worktops/trebbia-stone-laminate-worktops">
                    <img class="w-100 lazyload" data-srcset="media/swatches/trebbia-stone-laminate-worktops-swatch.jpg 1x, media/swatches/trebbia-stone-laminate-worktops-swatch@2x.jpg 2x" alt="Trebbia Stone Laminate Worktops">
                    <h3 class="prod-sort__name py-2">
                        <div>
                            <div class="font-16 font-weight-5">Trebbia Stone</div>
                            <div class="font-14 colour-grey4 lowercase font-weight-4">from &pound;80</div>
                        </div>
                    </h3>
                </a>
            </div>
        </div>
        <div class="filter-range__item col-6 col-md-auto col-xl-2 p-1 p-md-2" data-sku="WS-LA-SEAP" data-price="120" data-pop data-colour="dark-wood" data-length="3m,4m" data-thickness="40mm" data-finish="premium" data-edge="square" data-style="alternative,wood" data-width="600mm,900mm">
            <div class="card card--full">
                <a href="laminate-worktops/sealand-pine-driftwood-laminate-worktops">
                    <img class="w-100 lazyload" data-srcset="media/swatches/sealand-pine-driftwood-laminate-worktops-swatch.jpg 1x, media/swatches/sealand-pine-driftwood-laminate-worktops-swatch@2x.jpg 2x" alt="Sealand Pine - Driftwood Laminate Worktops">
                    <h3 class="prod-sort__name py-2">
                        <div>
                            <div class="font-16 font-weight-5">Sealand Pine</div>
                            <div class="font-14 colour-grey4 lowercase font-weight-4">from &pound;120</div>
                        </div>
                    </h3>
                </a>
            </div>
        </div>
        <div class="filter-range__item col-6 col-md-auto col-xl-2 p-1 p-md-2" data-sku="WS-LA-CYCI" data-price="100" data-pop data-colour="medium-wood" data-length="3m" data-thickness="38mm" data-finish="textured" data-edge="square" data-style="wood,contemporary" data-width="600mm,900mm">
            <div class="card card--full">
                <a href="laminate-worktops/cypress-cinnamon-worktops-square-edge">
                    <img class="w-100 lazyload" data-srcset="media/swatches/cypress-cinnamon-worktops-swatch.jpg 1x, media/swatches/cypress-cinnamon-worktops-swatch@2x.jpg 2x" alt="Cypress Cinnamon Worktops">
                    <h3 class="prod-sort__name py-2">
                        <div>
                            <div class="font-16 font-weight-5">Cypress Cinnamon</div>
                            <div class="font-14 colour-grey4 lowercase font-weight-4">from &pound;100</div>
                        </div>
                    </h3>
                </a>
            </div>
        </div>
        <div class="filter-range__item col-6 col-md-auto col-xl-2 p-1 p-md-2" data-sku="WS-LA-BELA" data-price="80" data-pop data-colour="light-wood" data-length="3m,3.6m" data-thickness="38mm" data-finish="matt" data-edge="rounded" data-style="farmhouse,classic,wood" data-width="600mm,900mm">
            <div class="card card--full">
                <a href="laminate-worktops/beech-laminate-worktops">
                    <img class="w-100 lazyload" data-srcset="media/swatches/beech-laminate-worktops-swatch.jpg 1x, media/swatches/beech-laminate-worktops-swatch@2x.jpg 2x" alt="Beech Block Laminate Worktops">
                    <h3 class="prod-sort__name py-2">
                        <div>
                            <div class="font-16 font-weight-5">Beech Block</div>
                            <div class="font-14 colour-grey4 lowercase font-weight-4">from &pound;80</div>
                        </div>
                    </h3>
                </a>
            </div>
        </div>
        <div class="filter-range__item col-6 col-md-auto col-xl-2 p-1 p-md-2" data-sku="WS-LA-CBLO" data-price="100" data-pop data-colour="medium-wood" data-length="3m,3.6m" data-thickness="38mm" data-finish="high-gloss" data-edge="rounded" data-style="farmhouse,classic,wood" data-width="600mm,900mm">
            <div class="card card--full">
                <a href="laminate-worktops/cherry-block-laminate-worktops">
                    <img class="w-100 lazyload" data-srcset="media/swatches/cherry-block-laminate-worktop-swatch.jpg 1x, media/swatches/cherry-block-laminate-worktop-swatch@2x.jpg 2x" alt="Cherry Block Laminate Worktops">
                    <h3 class="prod-sort__name py-2">
                        <div>
                            <div class="font-16 font-weight-5">Cherry Block</div>
                            <div class="font-14 colour-grey4 lowercase font-weight-4">from &pound;100</div>
                        </div>
                    </h3>
                </a>
            </div>
        </div>
        <div class="filter-range__item col-6 col-md-auto col-xl-2 p-1 p-md-2" data-sku="WS-LA-BWAB" data-price="100" data-pop data-colour="dark-wood" data-length="3m,3.6m" data-thickness="38mm" data-finish="matt" data-edge="rounded" data-style="farmhouse,classic,wood" data-width="600mm,900mm">
            <div class="card card--full">
                <a href="laminate-worktops/black-walnut-block-laminate-worktops">
                    <img class="w-100 lazyload" data-srcset="media/swatches/black-walnut-block-laminate-worktops-swatch.jpg 1x, media/swatches/black-walnut-block-laminate-worktops-swatch@2x.jpg 2x" alt="Black Walnut Block Laminate Worktops">
                    <h3 class="prod-sort__name py-2">
                        <div>
                            <div class="font-16 font-weight-5">Black Walnut</div>
                            <div class="font-14 colour-grey4 lowercase font-weight-4">from &pound;100</div>
                        </div>
                    </h3>
                </a>
            </div>
        </div>
        <div class="filter-range__item col-6 col-md-auto col-xl-2 p-1 p-md-2" data-sku="WS-LA-CRST" data-price="80" data-pop data-colour="grey" data-length="3m,4.1m" data-thickness="38mm" data-finish="standard" data-edge="rounded" data-style="classic,stone" data-width="600mm,900mm">
            <div class="card card--full">
                <a href="laminate-worktops/cream-stone-worktops">
                    <img class="w-100 lazyload" data-srcset="media/swatches/cream-stone-effect-worktops-swatch.jpg 1x, media/swatches/cream-stone-effect-worktops-swatch@2x.jpg 2x" alt="Cream Stone Laminate Worktops">
                    <h3 class="prod-sort__name py-2">
                        <div>
                            <div class="font-16 font-weight-5">Cream Stone</div>
                            <div class="font-14 colour-grey4 lowercase font-weight-4">from &pound;80</div>
                        </div>
                    </h3>
                </a>
            </div>
        </div>
        <div class="filter-range__item col-6 col-md-auto col-xl-2 p-1 p-md-2" data-sku="WS-LA-BLAS" data-price="100" data-pop data-colour="blue" data-length="3m,4.1m" data-thickness="38mm" data-finish="high-gloss" data-edge="rounded" data-style="contemporary,sparkle" data-width="600mm,900mm">
            <div class="card card--full">
                <a href="laminate-worktops/blue-sparkle-laminate-worktops-andromeda">
                    <img class="w-100 lazyload" data-srcset="media/swatches/blue-sparkle-laminate-worktops-andromeda-swatch.jpg 1x, media/swatches/blue-sparkle-laminate-worktops-andromeda-swatch@2x.jpg 2x" alt="Blue Sparkle Laminate Worktops - Andromeda">
                    <h3 class="prod-sort__name py-2">
                        <div>
                            <div class="font-16 font-weight-5">Blue Sparkle</div>
                            <div class="font-14 colour-grey4 lowercase font-weight-4">from &pound;100</div>
                        </div>
                    </h3>
                </a>
            </div>
        </div>
        <div class="filter-range__item col-6 col-md-auto col-xl-2 p-1 p-md-2" data-sku="WS-LA-REDA" data-price="100" data-pop data-colour="red" data-length="3m,4m" data-thickness="38mm" data-finish="high-gloss" data-edge="rounded" data-style="contemporary,sparkle" data-width="600mm,900mm">
            <div class="card card--full">
                <a href="laminate-worktops/red-sparkle-laminate-worktops-andromeda">
                    <img class="w-100 lazyload" data-srcset="media/swatches/red-sparkle-laminate-worktops-andromeda-swatch.jpg 1x, media/swatches/red-sparkle-laminate-worktops-andromeda-swatch@2x.jpg 2x" alt="Red Sparkle Laminate Worktops - Andromeda">
                    <h3 class="prod-sort__name py-2">
                        <div>
                            <div class="font-16 font-weight-5">Red Sparkle</div>
                            <div class="font-14 colour-grey4 lowercase font-weight-4">from &pound;100</div>
                        </div>
                    </h3>
                </a>
            </div>
        </div>
        <div class="filter-range__item col-6 col-md-auto col-xl-2 p-1 p-md-2" data-sku="WS-LA-CAST" data-price="80" data-pop data-colour="grey" data-length="3m,3.6m" data-thickness="38mm" data-finish="high-gloss" data-edge="rounded" data-style="classic,stone" data-width="600mm,900mm">
            <div class="card card--full">
                <a href="laminate-worktops/caribbean-stone-laminate-worktops">
                    <img class="w-100 lazyload" data-srcset="media/swatches/caribbean-stone-laminate-worktop-swatch.jpg 1x, media/swatches/caribbean-stone-laminate-worktop-swatch@2x.jpg 2x" alt="Caribbean Stone Laminate Worktops">
                    <h3 class="prod-sort__name py-2">
                        <div>
                            <div class="font-16 font-weight-5">Caribbean Stone</div>
                            <div class="font-14 colour-grey4 lowercase font-weight-4">from &pound;80</div>
                        </div>
                    </h3>
                </a>
            </div>
        </div>
        <div class="filter-range__item col-6 col-md-auto col-xl-2 p-1 p-md-2" data-sku="WS-LA-WHWO" data-price="100" data-pop data-colour="light-wood,white" data-length="3m,4m" data-thickness="38mm" data-finish="textured" data-edge="rounded" data-style="contemporary,wood" data-width="600mm,900mm">
            <div class="card card--full">
                <a href="laminate-worktops/cascina-pine-white-wood-laminate-worktops">
                    <img class="w-100 lazyload" data-srcset="media/swatches/cascina-pine-laminate-worktops-swatch.jpg 1x, media/swatches/cascina-pine-laminate-worktops-swatch@2x.jpg 2x" alt="Cascina Pine - White Wood Laminate Worktops">
                    <h3 class="prod-sort__name py-2">
                        <div>
                            <div class="font-16 font-weight-5">Cascina Pine</div>
                            <div class="font-14 colour-grey4 lowercase font-weight-4">from &pound;100</div>
                        </div>
                    </h3>
                </a>
            </div>
        </div>
        <div class="filter-range__item col-6 col-md-auto col-xl-2 p-1 p-md-2" data-sku="WS-LA-GLIT" data-price="120" data-pop data-colour="grey" data-length="3m,4m" data-thickness="38mm" data-finish="premium" data-edge="rounded" data-style="contemporary,alternative,sparkle" data-width="600mm,900mm">
            <div class="card card--full">
                <a href="laminate-worktops/galaxy-gloss-glitter-worktops">
                    <img class="w-100 lazyload" data-srcset="media/swatches/galaxy-gloss-worktops-swatch.jpg 1x, media/swatches/galaxy-gloss-worktops-swatch@2x.jpg 2x" alt="Galaxy Gloss - Glitter Laminate Worktops">
                    <h3 class="prod-sort__name py-2">
                        <div>
                            <div class="font-16 font-weight-5">Galaxy Gloss</div>
                            <div class="font-14 colour-grey4 lowercase font-weight-4">from &pound;120</div>
                        </div>
                    </h3>
                </a>
            </div>
        </div>
        <div class="filter-range__item col-6 col-md-auto col-xl-2 p-1 p-md-2" data-sku="WS-LA-MAGA" data-price="80" data-pop data-colour="black" data-length="3m,3.6m" data-thickness="38mm" data-finish="matt" data-edge="rounded" data-style="classic,marble" data-width="600mm,900mm">
            <div class="card card--full">
                <a href="laminate-worktops/megara-black-marble-effect-worktops">
                    <img class="w-100 lazyload" data-srcset="media/swatches/marble-effect-worktop-megara-swatch.jpg 1x, media/swatches/marble-effect-worktop-megara-swatch@2x.jpg 2x" alt="Megara Black Marble Effect Worktops">
                    <h3 class="prod-sort__name py-2">
                        <div>
                            <div class="font-16 font-weight-5">Black Marble</div>
                            <div class="font-14 colour-grey4 lowercase font-weight-4">from &pound;80</div>
                        </div>
                    </h3>
                </a>
            </div>
        </div>
        <div class="p-2 d-flex col-bs align-items-center order-1">
            <div class="filter-range__indi d-flex align-items-center justify-content-center p-3 d-none">
                <div class="text-center px-1">
                    <div>These results have<br class="d-md-none" /> filters applied,</div>
                    <div class="filter-range__indi__link underline">Show all <span class="filter-range__index"></span> ranges</div>
                </div>
            </div>
        </div>
    </div>

    <p>Our diverse collection of worktops includes designs to please every taste, budget and style of home. These include wood effect laminate worktops in oak and walnut, gloss work surfaces with glittering flecks, and even countertops that replicate natural
        slate.
    </p>

    <p>If contemporary styles are your preference, you'll be pleased to know we offer a choice of black laminate work surfaces, including our Black Andromeda worktop (which has a stunning gloss finish with a hint of sparkle) and the popular Black Nimbus
        granite effect worktop. For those wanting to create a light, fresh look, we also stock white laminate worktops in our Andromeda range.</p>

    <div class="page-heading h2">
        <h2>Laminate Kitchen Worktops</h2>
    </div>

    <p>Our durable laminate kitchen worktops are hardwearing and water-resistant, making them a practical solution for busy family kitchens. These work surfaces are available in a variety of colours, and are constructed from high-quality materials that provide
        an excellent finish to last for years to come.</p>

    <p>We are pleased to offer a range of <a href="/laminate-kitchen-worktops-cut-to-size">bespoke laminate worktop services</a>, including cut-outs for sinks, hobs and taps. We also provide a cut-to-size service, edging strip application and mason's mitre
        joints to join two worktops together.</p>

    <p>We have two <a href="/kitchen-worktop-samples/laminate-worktop-samples">worktop sample packs</a> available, each showcasing a selection of the laminate worktop finishes in our collection, these are available for just &pound;5 each with free next-day
        delivery; this cost can be refunded against your order total, if you order laminate worktops included in the sample pack purchased from Worktop Express.</p>

    <p><strong>We have just launched a select range of <a href="bathroom-worktops">bathroom worktops</a>, chosen to suit a variety of different styles.</strong></p>

    <a id="promo-bathroom-worktops" class="box promo" href="/bathroom-worktops">
        <div class="col-12-4 mcol-fw ta-c">
            <span>
                <span class="promo-title">Explore our new range of bathroom worktops</span>
            <span class="ta-c">
                <span class="btn promo-btn btn-clear btn-clear-w">Bathroom Worktops</span>
            </span>
            </span>
        </div>
    </a>

    <div class="spaced-col sp-col4 ta-c">

        <a href="/worktop-visualiser" class="mcol-fw link-item" title="Solid Wood Worktop Samples">
            <img src="/media/gbu0/worktop-visualiser-signposting.jpg" class="img-res" style="max-width: 230px;">
            <span class="btn btn-filled btn-filled-dg">Visualise Your Worktop</span>
        </a>

        <a href="/kitchen-worktop-samples" class="mcol-fw link-item" title="Laminate Worktop Samples">
            <img src="/media/gbu0/prodsm/laminate-kitchen-worktop-samples.jpg" class="img-res" style="max-width: 230px;">
            <span class="btn btn-filled btn-filled-dg">Order Samples</span>
        </a>

        <a href="/online-bespoke-worktop-tool.html" class="mcol-fw link-item" title="Solid Laminate Worktop Samples">
            <img src="media/gbu0/online-bespoke-worktop-tool-menu-2018.jpg" class="img-res" style="max-width: 230px;">
            <span class="btn btn-filled btn-filled-dg">Design a Bespoke Worktop</span>
        </a>

    </div>
</div>

<script crossorigin="anonymous" src="https://polyfill.io/v3/polyfill.min.js?features=Array.from%2CSet%2CArray.prototype.includes"></script>

<script>

if (!String.prototype.includes) {
    String.prototype.includes = function() {
        'use strict';
        return String.prototype.indexOf.apply(this, arguments) !== -1;
    };
}

var throttle = function(func, limit) {
    var lastFunc;
    var lastRan;
    return function() {
        var context = this;
        var args = arguments;
        if (!lastRan) {
                func.apply(context, args);
                lastRan = Date.now();
            } else {
                clearTimeout(lastFunc);
                lastFunc = setTimeout(function() {
                if ((Date.now() - lastRan) >= limit) {
                    func.apply(context, args);
                    lastRan = Date.now();
                }
            }, limit - (Date.now() - lastRan));
        }
    };
};

var collapseBox = {

DOM: {
    box: document.querySelectorAll('.collapse'),
    head: document.querySelectorAll('.collapse__head'),
    wrap: document.querySelectorAll('.collapse__wrap')
},
toggle: function() {
    var wrap, height, open, transition, arrow, hAuto;
    
    wrap = this.parentElement.querySelector('.collapse__wrap');
    height = wrap.scrollHeight;
    arrow = this.querySelector('.arrow');
    open = this.getAttribute('data-collapse') === 'true';
    hAuto = function() {
         wrap.style.height = 'auto';
         wrap.removeEventListener('transitionend', hAuto);
     };
    
    if (open) {
        transition = wrap.style.transition;
        wrap.style.transition = '';
        console.log(window.getComputedStyle(wrap).transition);
        requestAnimationFrame(function() {
            wrap.style.height = height + 'px';
            wrap.style.transition = transition;
            console.log(transition)
            requestAnimationFrame(function() {
                wrap.style.height = '0px';
            });
        });
        arrow.classList.remove('arrow--up');
        this.setAttribute('data-collapse', 'false');
    } else {
        wrap.style.height = height + 'px';
        arrow.classList.add('arrow--up');
        wrap.addEventListener('transitionend', hAuto);
        this.setAttribute('data-collapse', 'true');
    }
    
},
events: function() {
    
    var els = this.DOM.head;
    var thToggle = throttle(this.toggle, 400);
    
    for (var i = 0; i < els.length; i++) {
        els[i].addEventListener('click', thToggle);
    }
},
init: function() {            
    this.events();
}
};
collapseBox.init();


var model = (function() {

var filterData = {
indicators: [],
tags: [],
cats: [],
preserve: [],
purge: [],
};

var Tag = function(type, value) {
this.type = type;
this.value = value;
this.id = type + '-' + value;
};
var getArrayTypes = function() {
var data, dataTypes, i;
dataTypes = [];
data = filterData.tags;

for (i = 0; i < data.length; i++) {
    dataTypes.push(data[i].type);
}
filterData.cats = Array.from(new Set(dataTypes));
return filterData.cats;
};

return {

newTag: function(type, value) {

    var dataTag = new Tag(type, value);
    filterData.tags.push(dataTag);

    return dataTag;

},
removeTag: function(selector) {
    var newTags = filterData.tags.filter(function(item) {
        return item.id != selector;
    });
    filterData.tags = newTags;
},
resetData: function() {
    filterData.cats = [];
    filterData.tags = [];
    filterData.preserve = [];
    filterData.purge = [];
},
getData: function(property) {

    return filterData[property];

},
pushData: function(property, info) {

    filterData[property] = info;

},
sortData: function(prop) {
    var sortOrder, ordering, data, newArray;
    sortOrder = getArrayTypes();
    ordering = {};
    data = filterData[prop];
    newArray = [];

    for (var i = 0; i < sortOrder.length; i++)
        ordering[sortOrder[i]] = i;

    filterData[prop] = data.sort(function(a, b) {
        return (ordering[a.type] - ordering[b.type]) || a.value.localeCompare(b.value);

    });

},
countPreserves: function(type, value) {
    var preserves = filterData.preserve;
    var counter = 0;
    for (var i = 0; i < preserves.length; i++) {
        var atType;

        atType = preserves[i].getAttribute('data-' + type);

        if (atType.includes(value)) {
            counter++;
        }

    }
    return counter;
},

};
})();

var view = (function() {
var DOM = {
minimenu: {
    cont: '.filters',
    self: '.minimenu',
    sub: '.minimenu__details',
    item: '.minimenu__details__item',
    mobile: '.mobile-filter'
},
products: {
    container: '.filter-range',
    items: '.filter-range__item',
    review: '.filter-range__item__review',
    circle: '.filter-range__indi',
    imgSwap: '[data-img-swap]'
},
active: {
    menu: {
        general: 'minimenu--active',
        inner: 'minimenu--optactive',
    },
    subMenu: 'minimenu__details--active',
    button: 'minimenu__details__item--active',
    menuFade: 'minimenu__details__item--fade',
    menuRemove: 'minimenu__details__item--remove',
    mobileMenu: 'filters-mobile--active'
},
filterTags: {
    inner: '.filter-tags__con',
    tags: '.filter-tags__item',
    close: '.filter-tags__item__close',
    clear: '.filter-tags__clear'
},
index: {
    showing: '.filter-tags__index__num',
    circle: '.filter-range__index',
    miniMenu: '.minimenu__details__ind'
},
range: '.filter-sort__sel',
mobile: {
    menu: '.filters-mobile',
    close: '.filters-mobile__close',
    clear: '.filters-mobile__clear',
    apply: '.filters-mobile__apply',
    sort: '.filter-mobile__sort'
}
};
var ammendClasses = function(searchString, cl, action) {
// Adds or removes specified classes
var elements, i;
if (typeof searchString == 'string') {
    elements = document.querySelectorAll(searchString);
} else {
    elements = searchString;
}
for (i = 0; i < elements.length; i++) {
    if (action == 'remove') {
        elements[i].classList.remove(cl);
    } else if (action == 'add') {
        elements[i].classList.add(cl);
    }
}
};
// View, public functions
return {

getDOM: function() {
    // Returns DOM object for to UI controller
    return DOM;
},
classChange: function(searchString, cl, action) {
    return ammendClasses(searchString, cl, action);
},
miniMenu: function(option, menu, sub) {
    var mainClass, subClass;

    mainClass = DOM.active.menu.general;
    subClass = DOM.active.subMenu;
    // Cancel function if the user is on mobile
    if (window.innerWidth < 767) return;

    switch (option) {
        case 'open':
            menu.classList.add(mainClass);
            sub.classList.add(subClass);
            break;
        case 'close':
            menu.classList.remove(mainClass);
            sub.classList.remove(subClass);
            break;
        default:
            ammendClasses(DOM.minimenu.self, mainClass, 'remove');
            ammendClasses(DOM.minimenu.sub, subClass, 'remove');
    }
},
filterLoop: function(cat, tags, items) {

    var preserve, purge, i, n;

    preserve = [];
    purge = [];
    // 1. hide all
    ammendClasses(DOM.products.items, 'd-none', 'add');
    // 2. Show category items
    var relTags = tags.filter(function(item) {
        return item.type == cat;
    });
    for (i = 0; i < items.length; i++) {
        var itemVal = items[i].getAttribute('data-' + cat);
        for (n = 0; n < relTags.length; n++) {
            if (itemVal.includes(relTags[n].value)) {
                preserve.push(items[i]);
            } else if (n == relTags.length - 1) {
                purge.push(items[i]);
            }

        }

    }
    return {
        preserve: preserve,
        purge: purge
    };
},
buttonState: function(data) {
    var button, allButtons, tagData;
    tagData = data;
    allButtons = document.querySelectorAll(DOM.minimenu.item);

    ammendClasses(allButtons, DOM.active.button, 'remove');

    for (var i = 0; i < tagData.length; i++) {

        button = document.querySelectorAll('[data-filter-type="' + tagData[i].type + '"][data-filter-value="' + tagData[i].value + '"]');

        for (var j = 0; j < button.length; j++) {
            button[j].classList.add(DOM.active.button);
        }
    }
},
sortArray: function(elem, attr, direction) {

    var items, itemsArray;

    items = document.querySelectorAll(elem);
    itemsArray = Array.prototype.slice.call(items, 0);
    itemsArray.sort(function(a, b) {

        a = a.getAttribute(attr);
        b = b.getAttribute(attr);

        if (direction == 'des') {
            return b - a;
        } else if (direction == 'acs') {
            return a - b;
        } else {
            // Default descending popularity sort
            return a - b;
        }

    });
    return itemsArray;
},
tagSortApply: function(tagData) {
    var tagRow, allTags, domTag;

    allTags = tagData;
    tagRow = document.querySelector(DOM.filterTags.inner);

    for (var i = 0; i < tagData.length; i++) {

        domTag = '<div data-type="' + tagData[i].type + '" data-value="' + tagData[i].value + '" data-id="' + tagData[i].id + '" class="filter-tags__item d-flex font-14 p-1 m-1"><div>' + tagData[i].type + ':</div>&nbsp;<div>' + tagData[i].value + '</div><div class="filter-tags__item__close font-weight-5 pl-2 pr-1">&times;</div></div>';

        if (i == 0) {
            tagRow.innerHTML = domTag;
        } else {
            tagRow.innerHTML += domTag;
        }
    }

},
printToDOM: function(location, arr) {

    var prodArea;
    prodArea = document.querySelector(location);

    for (var i = 0; i < arr.length; i++) {
        prodArea.appendChild(arr[i]);

    }

},
countItems: function(elem, hidden) {
    var elements, counter, i;
    counter = 0;
    if (typeof elem == 'string') {
        elements = document.querySelectorAll(elem);
    } else {
        elements = elem;
    }

    for (i = 0; i < elements.length; i++) {
        if (hidden) {
            counter++;
        } else {
            if (!elements[i].classList.contains('d-none'))
                counter++;
        }
    }
    return counter;
},
setCounts: function(showing, total) {
    var showingElem, totalElem;

    showingElem = document.querySelector(DOM.index.showing);
    totalElem = document.querySelector(DOM.index.circle);

    showingElem.innerHTML = showing;
    totalElem.innerHTML = total;
},
getSkus: function(query) {
    var elements, skus;
    elements = document.querySelectorAll(query);
    skus = [];
    for (var i = 0; i < elements.length; i++) {

        skus.push(elements[i].getAttribute('data-sku'));

    }
    return skus;
},
mobileMenu: function(action) {

    var mobMenu = document.querySelector(DOM.mobile.menu);

    if (action == 'open') {
        mobMenu.classList.add(DOM.active.mobileMenu);
    } else if (action == 'close') {
        mobMenu.classList.remove(DOM.active.mobileMenu);
    }

},
mobPropSort: function() {

    this.querySelector(DOM.range).click();

}
};
})();

var controller = (function(Data, UI) {

var DOMStrings = UI.getDOM();

var indicators = function() {
var menus, activeButton, menuIndicators, showing, total, totalCont, clearAll;

// Button states
UI.buttonState(Data.getData('tags'));

// Menu States (adds underline if inner options are seleted)
menus = document.querySelectorAll(DOMStrings.minimenu.self);

for (var i = 0; i < menus.length; i++) {
    activeButton = menus[i].querySelector('.' + DOMStrings.active.button);
    if (activeButton) {
        menus[i].classList.add(DOMStrings.active.menu.inner);
    } else {
        menus[i].classList.remove(DOMStrings.active.menu.inner);
    }
}


// Showing ranges number
showing = UI.countItems(DOMStrings.products.items);
total = UI.countItems(DOMStrings.products.items, 'hidden');
totalCont = document.querySelector(DOMStrings.products.circle);
clearAll = document.querySelector(DOMStrings.filterTags.clear);

UI.setCounts(showing, total);

// Show or hide 'Show all ranges' circle
if (Data.getData('tags').length != 0) {
    totalCont.classList.remove('d-none');
    totalCont.classList.add('d-flex');
    clearAll.classList.remove('d-none');
} else {
    totalCont.classList.add('d-none');
    totalCont.classList.remove('d-flex');
    clearAll.classList.add('d-none');
}

// Update MiniMenu indicators
menuIndicators = document.querySelectorAll(DOMStrings.index.miniMenu);

var cats = Data.getData('cats');

var parent, type, value, itemCount;

// Add class for index with 0 results
var fadeAdd = function(count, par) {

    if (count < 1) {
        if (par.classList.contains(DOMStrings.active.button)) {
            par.classList.add(DOMStrings.active.menuFade);
        } else {
            par.classList.add(DOMStrings.active.menuRemove);
        }

    } else {
        par.classList.remove(DOMStrings.active.menuRemove);
        par.classList.remove(DOMStrings.active.menuFade);
    }

};

parent = menuIndicators[i].parentNode.parentNode;
type = parent.getAttribute('data-filter-type');
value = parent.getAttribute('data-filter-value');

if (cats.length == 0) {
    for (i = 0; i < menuIndicators.length; i++) {
        parent = menuIndicators[i].parentNode.parentNode;
        type = parent.getAttribute('data-filter-type');
        value = parent.getAttribute('data-filter-value');

        // Set indicators in first instance
        itemCount = UI.countItems(DOMStrings.products.container + ' [data-' + type + '*="' + value + '"]', 'hidden');
        menuIndicators[i].innerHTML = ' (' + itemCount + ')';

        fadeAdd(itemCount, parent);
    }

} else {

    for (i = 0; i < menuIndicators.length; i++) {
        parent = menuIndicators[i].parentNode.parentNode;
        type = parent.getAttribute('data-filter-type');
        value = parent.getAttribute('data-filter-value');

        // if (cats[0] == type) = Original condition
        if (cats.length == 1 && cats[0] == type) {
            
            itemCount = UI.countItems(DOMStrings.products.container + ' [data-' + type + '*="' + value + '"]', 'hidden');
            menuIndicators[i].innerHTML = ' (' + itemCount + ')';

            fadeAdd(itemCount, parent);

        } else {

            for (var j = 0; j < cats.length; j++) {

                if (cats[j] == type) {
                    itemCount = Data.countPreserves(type, value);
                    //itemCount = UI.countItems(DOMStrings.products.container + ' [data-' + type + '*="' + value + '"]');
                    menuIndicators[i].innerHTML = ' (' + itemCount + ')';

                    fadeAdd(itemCount, parent);

                } else {

                    itemCount = UI.countItems(DOMStrings.products.container + ' [data-' + type + '*="' + value + '"]');
                    menuIndicators[i].innerHTML = ' (' + itemCount + ')';

                    fadeAdd(itemCount, parent);

                }

            }

        }

    }

}

};
var menuState = function(event) {


if (this == document) {
    // Closes menus if clicked outside
    UI.miniMenu('closeAll');

} else {

    var sub;
    sub = this.querySelector(DOMStrings.minimenu.sub);

    if (this.classList.contains(DOMStrings.active.menu.general)) {
        // Close menu (if applicable)
        UI.miniMenu('close', this, sub);

    } else {

        // Open menu
        UI.miniMenu('closeAll');
        UI.miniMenu('open', this, sub);

    }
    event.stopPropagation();
}

};
var loopCollection = function() {
console.log('loop collection 1')
var cats = Data.getData('cats');
var tags = Data.getData('tags');
console.log(cats, tags);
console.log('loop collection 2')
for (var i = 0; i < cats.length; i++) {
    // Loop over cats individualy purgeing at each interval;
    // Filter and preserve;
    var allProducts, filterItems, setArray;
    allProducts = document.querySelectorAll(DOMStrings.products.items);
  console.log('loop collection 3')
    if (i == 0) {
        console.log('loop collection 4')
        filterItems = UI.filterLoop(cats[i], tags, allProducts);
        setArray = Array.from(new Set(filterItems.preserve));
        
        Data.pushData('preserve', setArray);
        Data.pushData('purge', filterItems.purge);
        UI.classChange(filterItems.preserve, 'd-none', 'remove');

    } else if (i >= 1) {
        console.log('loop collection 5')
        Data.pushData('preserve', setArray);
        Data.pushData('purge', filterItems.purge);
        
        filterItems = UI.filterLoop(cats[i], tags, Data.getData('preserve'));
        setArray = Array.from(new Set(filterItems.preserve));
        UI.classChange(setArray, 'd-none', 'remove');

    }

}
console.log('loop collection 6')
};
var filter = function() {

var filterType, filterValue, newTag, relTagID, relTag;
filterType = this.getAttribute('data-filter-type');
filterValue = this.getAttribute('data-filter-value');

// Undo filter if button is toggled off
if (this.classList.contains(DOMStrings.active.button)) {
    relTagID = filterType + '-' + filterValue;
    relTag = document.querySelector(DOMStrings.filterTags.inner + ' [data-id="' + relTagID + '"] ' + DOMStrings.filterTags.close);
    tagClose.call(relTag);
    return;
}

// Create filter tag
// a. push tag data
newTag = Data.newTag(filterType, filterValue);
// b. print tag to DOM
Data.sortData('tags');

UI.tagSortApply(Data.getData('tags'));
// Set event listners for new tags
eventsLoop(DOMStrings.filterTags.close, 'click', tagClose);

loopCollection();

// Update indicator results
indicators();

};


var tagClose = function() {
var currentTag, tagID, tagData;

currentTag = this.parentElement;
tagID = currentTag.getAttribute('data-id');

// Remove tag from dom
currentTag.parentNode.removeChild(currentTag);
// Remove from data
Data.removeTag(tagID);
Data.sortData('tags');
tagData = Data.getData('tags');

// Revert to default if last tag is deleted
if (tagData.length == 0) {
    UI.classChange('.filter-range__item', 'd-none', 'remove');
    Data.resetData();
} else {
    // re-run filters
    loopCollection();
}

// reRun indicators
indicators();
};
var rangeSort = function() {

var rangeValue, sortedItems;

// 1. Get sort type
rangeValue = this.options[this.selectedIndex].value;

// 2. Sort elements
if (rangeValue == 'popularity') {
    sortedItems = UI.sortArray(DOMStrings.products.items, 'data-pop');
} else if (rangeValue == 'price-asc') {
    sortedItems = UI.sortArray(DOMStrings.products.items, 'data-price', 'acs');
} else if (rangeValue == 'price-des') {
    sortedItems = UI.sortArray(DOMStrings.products.items, 'data-price', 'des');
}

// 3. Print to DOM
UI.printToDOM(DOMStrings.products.container, sortedItems);

};
var clearAll = function() {
var tags, i;
tags = document.querySelectorAll(DOMStrings.filterTags.tags);
// 1. Clear all data
for (i = 0; i < tags.length; i++) {
    tags[i].parentNode.removeChild(tags[i]);
}
Data.resetData();

// 2. Show all elements
UI.classChange(DOMStrings.products.items, 'd-none', 'remove');

// 3. Revert all button states
UI.classChange('.' + DOMStrings.active.button, DOMStrings.active.button, 'remove');
// 4. Update indicators
indicators();

};
var applyPop = function() {
// Apply product popularity order on init (default order)
var products;
products = document.querySelectorAll(DOMStrings.products.items);

for (var i = 0; i < products.length; i++) {

    products[i].setAttribute('data-pop', i + 1);

}

};
// var feefoPop = function() {
// var productSkus, xhrProduct, xhrObj;

// productSkus = UI.getSkus('[data-sku]');

// for (var i = 0; i < productSkus.length; i++) {

//     xhrProduct = new XMLHttpRequest();

//     xhrProduct.open('get', 'https://api.feefo.com/api/10/reviews/summary/product?merchant_identifier=worktop-express&parent_product_sku=' + productSkus[i], true);
//     xhrProduct.onload = function() {
//         xhrObj = JSON.parse(this.responseText);

//         var item = document.querySelector('[data-sku="' + xhrObj.product.parent_sku + '"]');
//         if (xhrObj.rating.product.count == 1) {
//             item.querySelector(DOMStrings.products.review).innerHTML = xhrObj.rating.product.count + ' review (' + xhrObj.rating.rating + '/5)';
//         } else if (xhrObj.rating.product.count > 0) {
//             item.querySelector(DOMStrings.products.review).innerHTML = xhrObj.rating.product.count + ' reviews (' + xhrObj.rating.rating + '/5)';
//         } else {
//             item.querySelector(DOMStrings.products.review).innerHTML = 'No reviews yet';
//         }
//     };
//     xhrProduct.send(null);
// }
// };

var menuAdjust = function() {
var menus, menuPos, windowHeight, maxHeight;
menus = document.querySelectorAll(DOMStrings.minimenu.sub);

windowHeight = window.outerHeight;
menuPos = document.querySelector(DOMStrings.minimenu.cont).getBoundingClientRect();
maxHeight = (windowHeight - menuPos.top) - 150;

for (var i = 0; i < menus.length; i++) {
    menus[i].style.maxHeight = maxHeight + 'px';
}

};
var debounce = function(func, wait, immediate) {
var timeout;
return function() {
    var context = this,
        args = arguments;
    var later = function() {
        timeout = null;
        if (!immediate) func.apply(context, args);
    };
    var callNow = immediate && !timeout;
    clearTimeout(timeout);
    timeout = setTimeout(later, wait);
    if (callNow) func.apply(context, args);
};
};
var eventsLoop = function(domstring, event, callback) {
// Loop over node list adding event listners
var elements = document.querySelectorAll(domstring);
for (var i = 0; i < elements.length; i++) {
    elements[i].addEventListener(event, callback);
}
};
var mobMenuTog = function() {
var mobileMenu, mobMenuOpen, mobMenuClose;
mobileMenu = document.querySelector(DOMStrings.mobile.menu);
mobMenuOpen = UI.mobileMenu.bind(this, 'open');
mobMenuClose = UI.mobileMenu.bind(this, 'close');

if (mobileMenu.classList.contains(DOMStrings.active.mobileMenu)) {
    mobMenuClose();
} else {
    mobMenuOpen();
}
};
// var imageAdd = function() {
// var images, imgAtt, imgSrc;
// images = document.querySelectorAll(DOMStrings.products.imgSwap);

// for (var i = 0; i < images.length; i++) {

//     imgAtt = images[i].getAttribute('data-img-swap');
//     imgSrc = images[i].getAttribute('src');

//     var newElement = '<img class="card__img card__img--fade p-1" src="'+imgAtt+'" data-at2x="'+imgAtt+'">';
//     images[i].insertAdjacentHTML('afterend', newElement);
// }
// };

// var imageSwap = function(event) {

// if (event.type == 'mouseover') {

//     this.querySelector('.card__img--fade').classList.add('card__img--fade--active');

// } else {

//     this.querySelector('.card__img--fade').classList.remove('card__img--fade--active');

// }
// };
var setUpEvents = function() {

document.addEventListener('click', menuState);
eventsLoop(DOMStrings.minimenu.self, 'click', menuState);
eventsLoop(DOMStrings.minimenu.item, 'click', filter);
eventsLoop(DOMStrings.range, 'change', rangeSort);
eventsLoop(DOMStrings.minimenu.mobile, 'click', mobMenuTog);
// eventsLoop(DOMStrings.products.items, 'mouseover', imageSwap);
// eventsLoop(DOMStrings.products.items, 'mouseout', imageSwap);

document.querySelector(DOMStrings.filterTags.clear).addEventListener('click', clearAll);
document.querySelector(DOMStrings.mobile.clear).addEventListener('click', clearAll);
document.querySelector(DOMStrings.products.circle).addEventListener('click', clearAll);
document.querySelector(DOMStrings.mobile.close).addEventListener('click', mobMenuTog);
document.querySelector(DOMStrings.mobile.apply).addEventListener('click', mobMenuTog);
document.querySelector(DOMStrings.mobile.sort).addEventListener('click', UI.mobPropSort);
window.addEventListener('scroll', debounce(menuAdjust, 200));
window.addEventListener('resize', debounce(menuAdjust, 1000));

};

return {
init: function() {
    setUpEvents();
    indicators();
    applyPop();
    // feefoPop();
    menuAdjust();
    // imageAdd();
}
};
})(model, view);

controller.init();

</script>