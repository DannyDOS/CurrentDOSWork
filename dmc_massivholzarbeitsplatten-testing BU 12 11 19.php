<style>
body {
    font-family: 'work sans';
}

.page-heading {
    font-family: 'Work Sans', sans-serif;
    font-weight: 600;
    font-size: 1.4em;
    margin: 5px 0 .5em;
}

.filter-range,
filters-mobile,
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

</style>


<div>
    <div class="page-heading h1">
        <h1>Kaufen Sie noch heute Ihre Massivholzplatte</h1>
    </div>
    <div class="dy-delivery-detail-change"></div>
    <p>In unserem Sortiment finden Sie ein unübertroffenes Angebot an Holzarbeitsplatten von außergewöhnlicher Qualität, die wir zu fairen Preisen anbieten können. Wählen Sie Ihre Massivholzplatte nach Holzart, Aussehen und von einer Auswahl an unterschiedlichen Längen, Tiefen sowie Stärken aus.</p>

</div>

<div class="filters m-0 d-none d-md-flex flex-wrap align-items-center">
    <div class="row-bs col-12-bs col-xl">
        <div class="minimenu mr-1 my-1 p-2" data-filter="colour">
            <div class="minimenu__name uppercase">farbe</div>
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
        <div class="minimenu mr-1 my-1 p-2" data-filter="finish">
            <div class="minimenu__name uppercase">fertig</div>
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
            <div class="minimenu__name uppercase">kante</div>
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
            <div class="minimenu__name uppercase">l&auml;nge</div>
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
            <div class="minimenu__name uppercase">dicke</div>
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
            <div class="minimenu__name uppercase">breite</div>
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

<div class="cat-card-grid">
    <!--
    <div class="cat-card-container cat-card-container--anim cat-flex-4">
        <a href="massivholz-arbeitsplatten/arbeitsplatte-eiche">
            <img class="cat-card-container__img" src="media/swatches/arbeitsplatten-eiche-swatch@2x.jpg" data-at2x="media/swatches/arbeitsplatten-eiche-swatch@2x.jpg" alt="Arbeitsplatte Eiche" />
            <div class="cat-card-container__title">Eiche</div>
            <div class="cat-card-container__text">St&auml;rke: 40mm und 27mm<br />
            Lieferzeit: 2-6 Arbeitstage</div>
            <div class="cat-card-container__price"><sup class="cat-card-container__price--sup">ab </sup>60&euro; / m</div>
        </a>
    </div>
    
    <div class="cat-card-container cat-card-container--anim cat-flex-4">
        <a href="massivholz-arbeitsplatten/premium-arbeitsplatte-eiche">
            <img class="cat-card-container__img" src="media/swatches/arbeitsplatten-premium-eiche-swatch@2x.jpg" data-at2x="media/swatches/arbeitsplatten-premium-eiche-swatch@2x.jpg" alt="Premium Arbeitsplatte Eiche">
            <div class="cat-card-container__title">Premium Eiche</div>
            <div class="cat-card-container__text">St&auml;rke: 40mm und 27mm<br />
            Lieferzeit: 2-6 Arbeitstage</div>
            <div class="cat-card-container__price"><sup class="cat-card-container__price--sup">ab </sup>68.33&euro; / m</div>
        </a>
    </div>
    -->


    <!--Break out-->
        <!--
      <div class="break-box mx-md-auto p-0 col-md-6 ta-c">
        <a class="cta" href="/arbeitsplatten-konfigurator">
          <div>
            <img class="cat-card-container__img" src="media/gbu0/massivholzarbeitsplatten-breakout-image.jpg" data-at2x="media/gbu0/massivholzarbeitsplatten-breakout-image@2x.jpg" alt="Ma&szlig;anfertigungen" />
            <h2 class="page-heading pt-2 mb-0 ta-l mx-1 font-14 colour-grey6">Ma&szlig;anfertigungen</h2>
            <p class="mx-1 my-1 colour-grey6 ta-l font-12">Bestellen Sie Ihre Arbeitsplatte nach Ma&szlig; einfach von Zuhause aus &uuml;ber unseren online Arbeitsplatten-Konfigurator und sparen Sie <strong>25% auf alle Dienstleistungen</strong> f&uuml;r Ma&szlig;anfertigungen.</p>
            <div class="my-2 ta-c mx-auto button button--green px-3 py-2">Mehr erfahren</div>
          </div>
        </a>
      </div>
    -->
    <!--Break out END-->
    

    <!--
    <div class="cat-card-container cat-card-container--anim cat-flex-4">
      <a href="https://www.worktop-express.de/massivholz-arbeitsplatten/arbeitsplatte-eiche-geoelt">
        <img class="cat-card-container__img" src="media/swatches/arbeitsplatten-eiche-swatch@2x.jpg" data-at2x="media/swatches/arbeitsplatten-eiche-swatch@2x.jpg" alt="Arbeitsplatte Eiche Geölt">
        <div class="cat-card-container__title">Eiche Geölt</div>
        <div class="cat-card-container__text">St&auml;rke: 40mm<br />
        Lieferzeit: 2-6 Arbeitstage</div>
        <div class="cat-card-container__price"><sup class="cat-card-container__price--sup">ab </sup>83.33&euro; / m</div>
      </a>
    </div>
    <div class="cat-card-container cat-card-container--anim cat-flex-4">
        <a href="massivholz-arbeitsplatten/karamell-bambus-arbeitsplatte">
            <img class="cat-card-container__img" src="media/swatches/arbeitsplatten-karamell-bambus-swatch-sm@2x.jpg" data-at2x="media/swatches/arbeitsplatten-karamell-bambus-swatch-sm@2x.jpg" alt="Arbeitsplatte Karamell Bambus">
            <div class="cat-card-container__title">Karamell Bambus</div>
            <div class="cat-card-container__text">St&auml;rke: 40mm<br />
            Lieferzeit: 2-6 Arbeitstage</div>
            <div class="cat-card-container__price"><sup class="cat-card-container__price--sup">ab </sup>86.66&euro; / m</div>
        </a>
    </div>
      
    <div class="cat-card-container cat-card-container--anim cat-flex-4">
        <a href="massivholz-arbeitsplatten/arbeitsplatte-buche">
            <img class="cat-card-container__img" src="media/swatches/arbeitsplatten-buche-swatch@2x.jpg" data-at2x="media/swatches/arbeitsplatten-buche-swatch@2x.jpg" alt="Arbeitsplatte Buche">
            <div class="cat-card-container__title">Buche</div>
            <div class="cat-card-container__text">St&auml;rke: 40mm und 27mm<br />
            Lieferzeit: 2-6 Arbeitstage</div>
            <div class="cat-card-container__price"><sup class="cat-card-container__price--sup">ab </sup>43.33&euro; / m</div>
        </a>
    </div>
    
    <div class="cat-card-container cat-card-container--anim cat-flex-4">
        <a href="massivholz-arbeitsplatten/arbeitsplatte-iroko">
            <img class="cat-card-container__img" src="media/swatches/arbeitsplatten-iroko-swatch@2x.jpg" data-at2x="media/swatches/arbeitsplatten-iroko-swatch@2x.jpg" alt="Arbeitsplatte Iroko">
            <div class="cat-card-container__title">Iroko</div>
            <div class="cat-card-container__text">St&auml;rke: 40mm und 27mm<br />
            Lieferzeit: 2-6 Arbeitstage</div>
            <div class="cat-card-container__price"><sup class="cat-card-container__price--sup">ab </sup>78.33&euro; / m</div>
        </a>
    </div>
    
    <div class="cat-card-container cat-card-container--anim cat-flex-4">
        <a href="massivholz-arbeitsplatten/premium-arbeitsplatte-buche">
            <img class="cat-card-container__img" src="media/swatches/arbeitsplatten-premium-buche-swatch-sm@2x.jpg" data-at2x="media/swatches/arbeitsplatten-premium-buche-swatch-sm@2x.jpg" alt="Premium Arbeitsplatte Buche">
            <div class="cat-card-container__title">Premium Buche</div>
            <div class="cat-card-container__text">St&auml;rke: 40mm und 27mm<br />
            Lieferzeit: 2-6 Arbeitstage</div>
            <div class="cat-card-container__price"><sup class="cat-card-container__price--sup">ab </sup>46.66&euro; / m</div>
        </a>
    </div>
    
    <div class="cat-card-container cat-card-container--anim cat-flex-4">
        <a href="massivholz-arbeitsplatten/arbeitsplatte-amerikanischer-nussbaum">
            <img class="cat-card-container__img" src="media/swatches/arbeitsplatten-amerikanischer-nussbaum-swatch-sm@2x.jpg" data-at2x="media/swatches/arbeitsplatten-amerikanischer-nussbaum-swatch-sm@2x.jpg" alt="Arbeitsplatte Amerikanischer Nussbaum">
            <div class="cat-card-container__title">Amerikanischer Nussbaum</div>
            <div class="cat-card-container__text">St&auml;rke: 40mm und 27mm<br />
            Lieferzeit: 2-6 Arbeitstage</div>
            <div class="cat-card-container__price"><sup class="cat-card-container__price--sup">ab </sup>136.08&euro; / m</div>
        </a>
    </div>
    
    <div class="cat-card-container cat-card-container--anim cat-flex-4">
        <a href="massivholz-arbeitsplatten/arbeitsplatte-eiche-dunkel">
            <img class="cat-card-container__img" src="media/swatches/arbeitsplatten-rauchereiche-swatch-sm@2x.jpg" data-at2x="media/swatches/arbeitsplatten-rauchereiche-swatch-sm@2x.jpg" alt="Arbeitsplatte Eiche Dunkel">
            <div class="cat-card-container__title">Eiche Dunkel</div>
            <div class="cat-card-container__text">St&auml;rke: 40mm und 27mm<br />
            Lieferzeit: 7-12 Arbeitstage</div>
            <div class="cat-card-container__price"><sup class="cat-card-container__price--sup">ab </sup>146.66&euro; / m</div>
        </a>
    </div>
    
    <div class="cat-card-container cat-card-container--anim cat-flex-4">
        <a href="massivholz-arbeitsplatten/arbeitsplatte-birke">
            <img class="cat-card-container__img" src="media/swatches/arbeitsplatten-birke-swatch-sm@2x.jpg" data-at2x="media/swatches/arbeitsplatten-birke-swatch-sm@2x.jpg" alt="Arbeitsplatte Birke">
            <div class="cat-card-container__title">Birke</div>
            <div class="cat-card-container__text">St&auml;rke: 40mm<br />
            Lieferzeit: 2-6 Arbeitstage</div>
            <div class="cat-card-container__price"><sup class="cat-card-container__price--sup">ab </sup>52.33&euro; / m</div>
        </a>
    </div>
    
    <div class="cat-card-container cat-card-container--anim cat-flex-4">
        <a href="massivholz-arbeitsplatten/deluxe-arbeitsplatte-eiche">
            <img class="cat-card-container__img" src="media/swatches/deluxe-arbeitsplatten-swatch-lg@2x.jpg" alt="Alle Deluxe Arbeitsplatten anzeigen" data-at2x="media/swatches/deluxe-arbeitsplatten-swatch-lg@2x.jpg">
            <div class="cat-card-container__title">Deluxe Eiche</div>
            <div class="cat-card-container__text">St&auml;rke: 40mm<br />
            Lieferzeit: Ab 2-6 Arbeitstagen</div>
            <div class="cat-card-container__price"><sup class="cat-card-container__price--sup">ab </sup>96.25&euro; / m</div>
        </a>
    </div>
    
    <div class="cat-card-container cat-card-container--anim cat-flex-4">
        <a href="massivholz-arbeitsplatten/arbeitsplatte-nussbaum">
            <img class="cat-card-container__img" src="media/swatches/arbeitsplatten-nussbaum-swatch@2x.jpg" data-at2x="media/swatches/arbeitsplatten-nussbaum-swatch@2x.jpg" alt="Arbeitsplatte Nussbaum">
            <div class="cat-card-container__title">Nussbaum</div>
            <div class="cat-card-container__text">St&auml;rke: 40mm und 27mm<br />
            Lieferzeit: 7-12 Arbeitstage</div>
            <div class="cat-card-container__price"><sup class="cat-card-container__price--sup">ab </sup>85&euro; / m</div>
        </a>
    </div>
    
    <div class="cat-card-container cat-card-container--anim cat-flex-4">
        <a href="massivholz-arbeitsplatten/arbeitsplatte-kirschbaum">
            <img class="cat-card-container__img" src="media/swatches/arbeitsplatten-kirschbaum-swatch-sm@2x.jpg" data-at2x="media/swatches/arbeitsplatten-kirschbaum-swatch-sm@2x.jpg" alt="Arbeitsplatten Kirschbaum">
            <div class="cat-card-container__title">Kirschbaum</div>
            <div class="cat-card-container__text">St&auml;rke: 40mm und 27mm<br />
            Lieferzeit: 7-12 Arbeitstage</div>
            <div class="cat-card-container__price"><sup class="cat-card-container__price--sup">ab </sup>75&euro; / m</div>
        </a>
    </div>

    <div class="cat-card-container cat-card-container--anim cat-flex-4">
        <a href="massivholz-arbeitsplatten/bambus-arbeitsplatte">
            <img class="cat-card-container__img" src="media/swatches/arbeitsplatten-bambus-swatch-sm@2x.jpg" data-at2x="media/swatches/arbeitsplatten-bambus-swatch-sm@2x.jpg" alt="Bambus Arbeitsplatten">
            <div class="cat-card-container__title">Bambus</div>
            <div class="cat-card-container__text">St&auml;rke: 40mm<br />
            Lieferzeit: 7-12 Arbeitstage</div>
            <div class="cat-card-container__price"><sup class="cat-card-container__price--sup">ab </sup>85&euro; / m</div>
        </a>
    </div>
    
    <div class="cat-card-container cat-card-container--anim cat-flex-4">
        <a href="massivholz-arbeitsplatten/arbeitsplatte-ahorn">
            <img class="cat-card-container__img" src="media/swatches/arbeitsplatten-ahorn-swatch-sm@2x.jpg" data-at2x="media/swatches/arbeitsplatten-ahorn-swatch-sm@2x.jpg" alt="Arbeitsplatten Ahorn">
            <div class="cat-card-container__title">Ahorn</div>
            <div class="cat-card-container__text">St&auml;rke: 40mm und 27mm<br />
            Lieferzeit: 7-12 Arbeitstage</div>
            <div class="cat-card-container__price"><sup class="cat-card-container__price--sup">ab </sup>68.33&euro; / m</div>
        </a>
    </div>
    
    <div class="cat-card-container cat-card-container--anim cat-flex-4">
        <a href="massivholz-arbeitsplatten/arbeitsplatte-wenge">
            <img class="cat-card-container__img" src="media/swatches/arbeitsplatten-wenge-swatch-sm@2x.jpg" data-at2x="media/swatches/arbeitsplatten-wenge-swatch-sm@2x.jpg" alt="Arbeitsplatten Wenge">
            <div class="cat-card-container__title">Wenge</div>
            <div class="cat-card-container__text">St&auml;rke: 40mm<br />
            Lieferzeit: 7-12 Arbeitstage</div>
            <div class="cat-card-container__price"><sup class="cat-card-container__price--sup">ab </sup>185&euro; / m</div>
        </a>
    </div>
        
    <div class="cat-card-container cat-card-container--anim cat-flex-4">
        <a href="massivholz-arbeitsplatten/arbeitsplatte-esche">
            <img class="cat-card-container__img" src="media/swatches/arbeitsplatten-esche-swatch-sm@2x.jpg" data-at2x="media/swatches/arbeitsplatten-esche-swatch-sm@2x.jpg" alt="Arbeitsplatte Esche">
            <div class="cat-card-container__title">Esche</div>
            <div class="cat-card-container__text">St&auml;rke: 40mm<br />
            Lieferzeit: 7-12 Arbeitstage</div>
            <div class="cat-card-container__price"><sup class="cat-card-container__price--sup">ab </sup>75&euro; / m</div>
        </a>
    </div>
    
    <div class="cat-card-container cat-card-container--anim cat-flex-4">
        <a href="/massivholz-arbeitsplatten/zebrano-arbeitsplatte">
            <img class="cat-card-container__img" src="media/swatches/arbeitsplatten-zebrano-swatch-sm@2x.jpg" data-at2x="media/swatches/arbeitsplatten-zebrano-swatch-sm@2x.jpg" alt="Zebrano Arbeitsplatten">
            <div class="cat-card-container__title">Zebrano</div>
            <div class="cat-card-container__text">St&auml;rke: 40mm<br />
            Lieferzeit: 7-12 Arbeitstage</div>
            <div class="cat-card-container__price"><sup class="cat-card-container__price--sup">ab </sup>183.33&euro; / m</div>
        </a>
    </div>
    
    <div class="cat-card-container cat-card-container--anim cat-flex-4">
        <a href="massivholz-arbeitsplatten/arbeitsplatte-eiche-rustikal">
            <img class="cat-card-container__img" src="media/swatches/eiche-rustikal-swatch@2x.jpg" data-at2x="media/swatches/eiche-rustikal-swatch@2x.jpg" alt="Arbeitsplatte Eiche Rustikal">
            <div class="cat-card-container__title">Eiche Rustikal</div>
            <div class="cat-card-container__text">St&auml;rke: 40mm<br />
            Lieferzeit: 7-12 Arbeitstage</div>
            <div class="cat-card-container__price"><sup class="cat-card-container__price--sup">ab </sup>65&euro; / m</div>
        </a>
    </div>
    
    <div class="cat-card-container cat-card-container--anim cat-flex-4">
        <a href="massivholz-arbeitsplatten/tischplatte-eiche-rustikal-durchgehende-lamellen">
            <img class="cat-card-container__img" src="/skins/skin2016de_canonical/media/tischplatte-massivholz-eiche-rustikal-durchgehenden-lamellen-45mm-dauben-worktop-swatch@2x.jpg" data-at2x="/skins/skin2016de_canonical/media/tischplatte-massivholz-eiche-rustikal-durchgehenden-lamellen-45mm-dauben-worktop-swatch.jpg" alt="Tischplatte Massivholz Eiche Rustikal mit Durchgehenden Lamellen (45mm Dauben)">
            <div class="cat-card-container__title">Eiche Rustikal (DL)</div>
            <div class="cat-card-container__text">St&auml;rke: 40mm<br />
            Lieferzeit: 2-6 Arbeitstage</div>
            <div class="cat-card-container__price"><sup class="cat-card-container__price--sup">ab </sup>102.50&euro; / m</div>
        </a>
    </div>
    
    <div class="cat-card-container cat-card-container--anim cat-flex-4">
        <a href="massivholz-arbeitsplatten/premium-eiche-tischplatte-durchgehende-lamellen">
            <img class="cat-card-container__img" src="/skins/skin2016de_canonical/media/premium-eiche-tischplatte-massivholz-durchgehende-lamellen-45mm-Dauben@2x.jpg" data-at2x="/skins/skin2016de_canonical/media/premium-eiche-tischplatte-massivholz-durchgehende-lamellen-45mm-Dauben@2x.jpg" alt="Tischplatte Massivholz Eiche Rustikal mit Durchgehenden Lamellen (45mm Dauben)">
            <div class="cat-card-container__title">Premium Eiche (DL)</div>
            <div class="cat-card-container__text">St&auml;rke: 40mm<br />
            Lieferzeit: 2-6 Arbeitstage</div>
            <div class="cat-card-container__price"><sup class="cat-card-container__price--sup">ab </sup>123.33&euro; / m</div>
        </a>
    </div>

    <div class="cat-card-container cat-card-container--anim cat-flex-4">
        <a href="massivholz-arbeitsplatten/zebrano-arbeitsplatte-durchgehende-lamellen">
            <img class="cat-card-container__img" src="/skins/skin2016de_canonical/media/zebrano-arbeitsplatte-durchgehenden-lamellen@2x.jpg" data-at2x="/skins/skin2016de_canonical/media/zebrano-arbeitsplatte-durchgehenden-lamellen@2x.jpg" alt="Arbeitsplatte Zebrano mit durchgehenden Lamellen">
            <div class="cat-card-container__title">Zebrano (DL)</div>
            <div class="cat-card-container__text">St&auml;rke: 40mm<br />
            Lieferzeit: 7-12 Arbeitstage</div>
            <div class="cat-card-container__price"><sup class="cat-card-container__price--sup">ab </sup>223.75&euro; / m</div>
        </a>
    </div>
    
    <div class="cat-card-container cat-card-container--anim cat-flex-4">
        <a href="massivholz-arbeitsplatten/arbeitsplatte-eiche-durchgehende-lamellen">
            <img class="cat-card-container__img" class="cat-card-container__img" src="media/swatches/alle-arbeitsplatten-anzeigen-swatch-lg@2x.jpg" alt="Arbeitsplatten Eiche mit durchgehenden Lamellen" data-at2x="media/swatches/alle-arbeitsplatten-anzeigen-swatch-lg@2x.jpg">
            <div class="cat-card-container__title">Eiche (DL)</div>
            <div class="cat-card-container__text">St&auml;rke: 40mm<br />
            Lieferzeit: 2-6 Arbeitstage</div>
            <div class="cat-card-container__price"><sup class="cat-card-container__price--sup">ab </sup>170&euro; / m</div>
        </a>
    </div>
    
    <div class="cat-card-container cat-card-container--anim cat-flex-4">
        <a href="massivholz-arbeitsplatten/arbeitsplatte-amerikanischer-nussbaum-durchgehende-lamellen">
            <img class="cat-card-container__img" src="/skins/skin2016de_canonical/media/arbeitsplatte-amerikanischer-nussbaum-durchgehenden-lamellen-main@2x.jpg" data-at2x="/skins/skin2016de_canonical/media/arbeitsplatte-amerikanischer-nussbaum-durchgehenden-lamellen-main@2x.jpg" alt="Arbeitsplatte Amerikanischer Nussbaum mit durchgehenden Lamellen">
            <div class="cat-card-container__title">Amerikanischer Nussbaum (DL)</div>
            <div class="cat-card-container__text">St&auml;rke: 40mm<br />
            Lieferzeit: 7-12 Arbeitstage</div>
            <div class="cat-card-container__price"><sup class="cat-card-container__price--sup">ab </sup>290&euro; / m</div>
        </a>
    </div>

    <div class="cat-card-container cat-card-container--anim cat-flex-4">
        <a href="massivholz-arbeitsplatten/arbeitsplatte-iroko-durchgehende-lamellen">
            <img class="cat-card-container__img" src="media/swatches/holzarbeitsplatten-mit-durchgehenden-lamellen-swatch-lg@2x.jpg" alt="Arbeitsplatten Iroko mit durchgehenden Lamellen" data-at2x="media/swatches/holzarbeitsplatten-mit-durchgehenden-lamellen-swatch-lg@2x.jpg">
            <div class="cat-card-container__title">Iroko (DL)</div>
            <div class="cat-card-container__text">St&auml;rke: 40mm<br />
            Lieferzeit: 7-12 Arbeitstage</div>
            <div class="cat-card-container__price"><sup class="cat-card-container__price--sup">ab </sup>136.66&euro; / m</div>
        </a>
    </div>
    
    <div class="cat-card-container cat-card-container--anim cat-flex-4">
        <a href="massivholz-arbeitsplatten/arbeitsplatte-wenge-durchgehende-lamellen">
            <img class="cat-card-container__img" src="/skins/skin2016de_canonical/media/abeitsplatte-wenge-durchgehenden-lamellen@2x.jpg" data-at2x="/skins/skin2016de_canonical/media/abeitsplatte-wenge-durchgehenden-lamellen@2x.jpg" alt="Arbeitsplatte Wenge mit durchgehenden Lamellen">
            <div class="cat-card-container__title">Wenge (DL)</div>
            <div class="cat-card-container__text">St&auml;rke: 40mm<br />
            Lieferzeit: 7-12 Arbeitstage</div>
            <div class="cat-card-container__price"><sup class="cat-card-container__price--sup">ab </sup>277.50&euro; / m</div>
        </a>
    </div>
-->
</div>