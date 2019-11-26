<?php

// +--
// | Get variables we need to draw this display.
// +--

$app      = $this->globals('khxc.app');
$ns       = $this->globals('khxc.namespace');
$eol      = $this->globals('khxc.eol');
$proddisp = $this->globals('ecom.prod_proddetail');
$xid      = $proddisp['id'];
$id       = $this->xhtml_encode($xid);
$usethumb = $this->globals('khxc_settings.' . $app . '.imguseprodthumb');
$imgwidthth = $this->globals('khxc_settings.' . $app . '.imgsizeprodlgth');


if ($ns == 'addcart') {
    $ns = 'prodshow';
}

$this->globals('ecom.prod_proddisp', $proddisp);
$this->globals('ecom.prod_priceinfo', $proddisp['khxc.priceinfo']);

$meta_title = $this->globals('khxc_display.metatitle');
$seo_title = $proddisp['meta_title'];

if ($seo_title != "") {
    $this->globals('khxc_display.metatitle', $proddisp['meta_title']);
} else {
    $this->globals('khxc_display.metatitle', $this->globals('khxc_display.metatitle'));
}

?>

<?php
//----------------
// Category object
//----------------
$jsonObj  = $proddisp['category_object'];
$catURL = 'media/pdp/json/' . $jsonObj . '.json';

$catObj = file_get_contents($catURL);
$data = json_decode($catObj);


// Image suffix function
function imageSuffix($string, $sufArr)
{
    $expImg = explode('.', $string);

    if (is_array($sufArr)) {
        $return = array();
        foreach ($sufArr as $item) {
            $newItem = $expImg[0] . $item . '.' . $expImg[1];
            $return[] = $newItem;
        }
    } else {
        $return = $expImg[0] . $sufArr . '.' . $expImg[1];
    }
    return $return;
}

?>
<style>
    /* Default styles */
    body {
        font-size: 16px;
        font-family: 'work sans';
        color: #4d4a49;
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
</style>

<!--Breadcrumbs-->
<?php

$crumbs = $data->breadcrumbs;
$currentPage = explode('/', $_SERVER['REQUEST_URI']);

echo '<div class="breadcrumbs font-12 d-flex flex-wrap align-items-center capitalize">';

foreach ($crumbs as $key => $item) {

    if ($key < count($crumbs) - 1) {
        echo '<div class="underline d-none d-md-block"><a href="' . $item[1] . '">' . $item[0] . '</a></div>';
        echo '<div class="arrow arrow--right mx-2 d-none d-md-block"></div>';
    } else {
        echo '<div class="underline"><a href="' . $item[1] . '">' . $item[0] . '</a></div>';
        echo '<div class="arrow arrow--right mx-2"></div>';
    }
}
$formatText = explode('?', preg_replace("/[\-_]/", " ", end($currentPage)));
$formatText = preg_replace("/\.html/", "", $formatText[0]);
if ($formatText === 'index.php') $formatText = $data->name;

echo '<div>' . $formatText . '</div>';
echo '</div>';

?>
<!--Breadcrumbs END-->

<!--Top content-->
<div class="row-bs">
    <div class="col-xl-7 px-0 px-md-3">
        <div class="prodimg prodimg--loading" data-video="<?php echo $data->videoID; ?>" data-gallery="<?php echo $data->galleryLink !== false ? "true" : "false"; ?>">

            <!-- <div class="prodimg__placeholder"><img class="w-100" src="https://via.placeholder.com/726x484" /></div> -->
            <div class="prodimg__placeholder"><img class="w-100" src="<?php echo $data->images->main[0][0]; ?>" /></div>


            <div class="prodimg__con d-flex">
                <?php

                $images = $data->images->main;

                foreach ($images as $key => $item) {

                    $sufImgs = imageSuffix($item[0], array('--large', '@2x'));

                    echo '<div class="prodimg__item">';
                    echo '<div class="prodimg__wrap">';
                    // Is not last
                    
                    if ($key !== count($images) - 1 || $data->galleryLink === false) {
                        echo '<a class="fancybox" data-fancybox="prodimg" href="' . $sufImgs[0] . '">';
                        echo '<img src="' . $item[0] . '" data-at2x="' . $sufImgs[1] . '" class="prodimg__img w-100" alt="' . $item[1] . '" />';
                        echo '</a>';
                    } else {
                        echo '<div class="prodimg__gallery d-none">';
                        echo '<a data-fancybox="prodimg" href="' . $item[0] . '">';
                        echo '<img src="' . $item[0] . '" class="prodimg__img w-100" alt="' . $item[1] . '" title="Sehen Sie sich unsere Galerie an" />';
                        echo '</a>';
                        echo '<div class="prodimg__gallery__con d-flex colour-white align-items-center justify-content-center text-center">';
                        echo '<div>';
                        echo '<div class="font-26 font-md-36 font-weight-3 m-auto py-4">Entdecken Sie weitere<br />Bilder dieses Produkts</div>';
                        echo '<a href="' . $data->galleryLink . '" class="button font-14 px-4">Sehen Sie sich unsere Galerie an</a>';
                        echo '</div>';
                        echo '</div>';
                        echo '</div>';
                    }
                    echo '</div>';
                    echo '</div>';
                }



                echo '</div>';


                if ($data->videoID !== false) {
                    echo '<div class="prodimg__video__btn font-12 uppercase background-grey font-weight-6 p-2"><i class="fas fa-play font-10 mr-1"></i>video abspielen</div>';
                    echo '<div class="prodimg__video">';
                    echo '<div id="prodimg__video"></div>';
                    echo '</div>';
                }

                ?>

            </div>

            <div class="prodimg__preview d-flex justify-content-center justify-content-xl-start py-2 py-md-0">
                <!-- prodimg preview images -->
                <?php
                foreach ($images as $key => $item) {

                    if ($key !== count($images) - 1 || $data->galleryLink === false) {

                        echo '<div class="prodimg__preview__item prodimg__preview__item--active" data-preview="' . $key . '"><img class="prodimg__preview__img d-none d-xl-block" src="' . $item[0] . '" alt="' . $item[1] . '"></div>';
                    } else {
                        echo '<div class="prodimg__preview__item prodimg__preview__item--active d-xl-none" data-preview="' . $key . '"><img class="prodimg__preview__img d-none d-xl-block" src="' . $item[0] . '" alt="' . $item[1] . '"></div>';
                    }
                }
                if ($data->galleryLink !== false) {
                    echo '<a href="' . $data->galleryLink . '" class="uppercase border-circle background-grey colour-grey5 font-12 font-weight-6 p-2 mt-2 text-center align-items-center justify-content-center d-none d-xl-flex order-1"><div class="d-none d-xl-block">Bilder<br />ansehen</div></a>';
                }
                ?>
            </div>
        </div>
        <div class="col-md-12 col-xl-5 px-xl-0 py-4 py-xl-0 m-md-auto m-xl-0 d-flex flex-wrap">
            <div class="text-center text-md-left col-md-6 col-xl p-0">
                <h1 class="font-24 font-md-3 font-xl-36 font-weight-4"><?php echo $data->headings->h1; ?> </h1>
            </div>

            <div class="text-md-center text-xl-left order-4 order-xl-1">
                <!-- DY sale information -->
                <?php
                echo '<div class="sale-area sale-area--small sale-area__' . $data->category . ' sale-area__' . $data->category . '__' . str_replace(' ', '-', strtolower($data->name)) . ' text-center"></div>';
                ?>
                <!-- DY sale information END -->

                <?php
                // First content section
                $contentOne = $data->content->sectionOne;
                for ($i = 0; $i < count($contentOne); $i++) {
                    // Print opening p tag
                    echo $i === 0 ? '<p class="mt-1">' : '<p>';
                    // Print content
                    echo $contentOne[$i];
                    // Check for last paragraph and add more details button
                    if ($i === count($contentOne) - 1) {
                        echo ' <span class="underline inline-link d-inline-block font-weight-5" data-scroll="#more-details">Mehr Infos<span class="d-inline-block arrow ml-2"></span></span></p>';
                    } else {
                        echo '</p>';
                    }
                }
                ?>
                <?php 
            $length = $proddisp['nt_length'];
            $width = $proddisp['nt_width'];
            $thickness = $proddisp['nt_thickness'];
            $fullSize = $length . ' x ' . $width . ' x ' . $thickness;
            $salePrice = $proddisp['saleprice'];
            $priceType = $proddisp['pricestatus'];
            $individualPrice = $priceType === 'S' ? $salePrice : $proddisp['regprice'] ;

            $individualPage = !empty($proddisp['enhanced_ecommerce_variant']);

            ?>
            </div>
            <div class="d-flex flex-wrap d-md-block align-items-end justify-content-center col-md-6 col-xl-<?php echo $individualPage ? 5 : 4 ; ?> p-0 order-1 order-md-2 order-xl-2 py-3 py-md-0">
            <?php 
                if ($individualPage) {
                    echo '<div class="pl-0 pr-1 pt-xl-3 col-bs col-md-auto">' . $fullSize . '</div>';
                    echo '<div class="font-22 font-md-38 font-weight-6">' . $individualPrice . '&euro;</div>';
                } else {
                    echo '<div class="pr-1 pt-xl-3">ab</div>';
                    echo '<div class="font-22 font-md-38 font-weight-6">' . $data->fromPrice . '&euro;</div>';
                    echo '<div class="font-14 pl-1 pl-md-0">' . $data->pricePerMetre . '</div>';
                }
                ?>     
            </div>
            <div class="d-flex col-md-6 col-xl p-0 align-self-center order-1 order-xl-2">
                <div class="m-auto col-bs p-0">
                    <div class="button button--green col-bs text-center py-3 font-18" data-scroll="#sizes-and-prices">Alle Ma&szlig;e &amp; Preise</div>
                </div>
            </div>
            <div class="d-flex font-12 py-3 align-self-end col-md-6 col-xl-12 order-3 order-xl-2">
                <div class="col-6 p-0 d-flex align-items-center">
                    <img src="media/icons/bespoke--medium.svg" alt="null" type="image/xml+svg" ?>
                    <div class="col-10">Bestellen Sie Ihre Arbeitsplatte nach Ma&szlig; online</div>
                </div>
                <div class="col-6 p-0 d-flex align-items-center">
                    <img src="media/icons/delivery--medium.svg" alt="null" type="image/xml+svg" ?>
                    <div class="col-10">Sichere Lieferung bis in einen Raum Ihrer Wahl</div>
                </div>
            </div>
        </div>
    </div>

    <!--Top content END-->
    <!--Filters-->
    <div id="filter-products-hereJS">


    </div>
    <!--Filters END-->

    <!--Product info-->
    <div class="row-bs py-4">
        <div class="col-xl-6" id="more-details">
            <div>
                <h2 class="font-weight-5 font-22"><?php echo $data->headings->h2; ?></h2>
                <?php
                // Second content section
                $contentTwo = $data->content->sectionTwo;
                for ($i = 0; $i < count($contentTwo); $i++) {
                    // Print opening p tag
                    echo '<p>';
                    echo $contentTwo[$i];
                    echo '</p>';
                }
                ?>
            </div>
            <div class="underline inline-link d-flex align-items-center" data-scroll="#sizes-and-prices">Optionen und Preise ansehen<div class="arrow arrow--up ml-2"></div>
            </div>

            <div class="collapse shadow my-3 d-xl-none">
                <div class="collapse__head d-flex align-items-center background-grey py-3" data-collapse="open">
                    <div class="col-bs font-weight-5">Produktinformationen</div>
                    <div class="arrow mx-3"></div>
                </div>
                <div class="collapse__wrap">
                    <div class="read-more px-3 pb-3" data-readmore="350">
                        <div class="read-more__wrap">
                            <div class="read-more__con">
                                <?php

                                switch ($data->category) {
                                    case 'wood':
                                        include 'media/pdp/includes/product-info--wood.php';
                                        break;
                                    case 'laminate':
                                        include 'media/pdp/includes/product-info--laminate.php';
                                        break;
                                    case 'solid-laminate':
                                        include 'media/pdp/includes/product-info--solid-laminate.php';
                                }

                                ?>
                            </div>
                        </div>
                        <div class="read-more__btn underline colour-green d-flex align-items-center capitalize" data-more="Weitere produktinformationen" data-less="weniger produktinformationen">Weitere produktinformationen</div>
                    </div>
                </div>
            </div>


            <div class="collapse shadow my-3">
                <div class="collapse__head d-flex align-items-center background-grey py-3" data-collapse="open">
                    <div class="col-bs font-weight-5">Lieferung</div>
                    <div class="arrow mx-3"></div>
                </div>
                <div class="collapse__wrap">
                    <p class="p-3 m-0">Ein Zwei-Mann-Lieferservice liefert die Arbeitsplatten &uuml;ber die Bordsteinkante hinaus bis in einen Raum Ihrer Wahl. Die Lieferkosten betragen 49&euro;. F&uuml;r weitere Informationen besuchen Sie bitte unsere Seite  <a href="/lieferdetails.html">Lieferdetails</a>.</p>
                </div>
            </div>

            <div class="collapse shadow my-3">
                <div class="collapse__head d-flex align-items-center background-grey py-3">
                    <div class="col-bs font-weight-5">Pflege</div>
                    <div class="arrow mx-3"></div>
                </div>
                <div class="collapse__wrap">
                    <?php
                    echo '<p class="p-3 m-0">';
                    switch ($data->category) {
                        case "wood":
                            echo 'Sorgen Sie daf&uuml;r, dass Ihre Holzarbeitsplatten durch regelm&auml;&szlig;iges &Ouml;len langanhaltend optimal aussehen. Stellen Sie sicher, dass die Oberfl&auml;chen sauber und trocken sind, und vermeiden Sie das Schneiden oder Abstellen hei&szlig;er Pfannen direkt auf der Arbeitsplatte. Lesen Sie unseren umfassenden <a href="/holzarbeitsplatten-installation-und-nachsorge.html">Leitfaden zur Pflege von Holzplatten</a>, um mehr zu erfahren.';
                            break;
                        case "laminate":
                            echo 'Laminat-Arbeitsplatten sind besonders pflegeleicht. Stellen Sie einfach sicher, dass sie sauber und trocken sind und vermeiden Sie das Schneiden oder Abstellen hei&szlig;er Pfannen direkt auf der Oberfl&auml;che. Weitere Informationen finden Sie in unserer umfassenden <a href="/resopal-arbeitsplatte-pflege">Anleitung zur Pflege von Laminat-Arbeitsplatten</a>.';
                            break;
                        case "solid-laminate":
                            echo 'Compact Arbeitsplatten sind extrem pflegeleicht, da sie sowohl hitzebest&auml;ndig als auch wasserfest sind. Um Ihre Arbeitsplatte langfristig im bestm&ouml;glichen Zustand zu behalten, empfehlen wir ein paar einfache Punkte zu beachten, die Ihnen in unserer <a href="/compact-arbeitsplatten-installationsanleitung">Compact Arbeitsplatten Pflegeanleitung</a> erkl&auml;rt werden.';
                    }
                    echo '</p>';
                    ?>
                </div>
            </div>

            <?php

            if ($data->category === 'laminate' && !empty($length) && !empty($width)) {

                $length = preg_replace('/\s*[a-z]\s*/i', '', $length);
                $length = (float) $length < 1000 ? (float) $length * 1000 : $length;
                $width = preg_replace('/\D/', '', $width);
                $edge = explode(' ', $data->spec->edge);
                switch (strtolower(preg_replace('/\,/i', '', $edge[0]))) {
                    case 'abgerundet':
                    $edge = 'rounded';
                    break;
                    case 'rechteckig':
                    $edge = 'square';
                    break;
                    case 'abs':
                    $edge = 'abs';
                }

                $filename = $length . '-' . $width . '--' . $edge . '--diagram-' . $data->supplier . '.png';

                echo '<div class="collapse shadow my-3">';
                echo '<div class="collapse__head d-flex align-items-center background-grey py-3">';
                echo '    <div class="col-bs font-weight-5">Fertige Kanten</div>';
                echo '    <div class="arrow mx-3"></div>';
                echo '</div>';
                echo '<div class="collapse__wrap">';
                echo '<img class="w-100 px-md-4 px-xl-0" src="/media/gallery/laminate/diagram/' . $filename . '" data-at2x="/media/gallery/laminate/diagram/' . imageSuffix($filename, '@2x') . '" alt="Technisches Diagramm Laminat-Arbeitsplatten" />';
                echo '</div>';
                echo '</div>';
            }
            ?>

            <div class="collapse shadow my-3">
                <div class="collapse__head d-flex align-items-center background-grey py-3">
                    <div class="col-bs font-weight-5">Montage</div>
                    <div class="arrow mx-3"></div>
                </div>
                <div class="collapse__wrap">
                    <?php
                    echo '<p class="p-3 m-0">';
                    switch ($data->category) {
                        case "wood":
                            echo 'M&ouml;chten Sie Ihre eigenen Massivholzplatten montieren? Wir haben Ihnen jeden Schritt mit unserer umfassenden <a href="holzarbeitsplatten-installation-und-nachsorge.html">Anleitung zur Montage von Holzarbeitsplatten</a> erkl&auml;rt.';
                            break;
                        case "laminate":
                            echo 'M&ouml;chten Sie Ihre eigenen Laminat-Arbeitsplatten montieren? Mit unserer umfassenden Anleitung zur <a href="/resopal-arbeitsplatte-installation">Montage von Laminat-Arbeitsplatten</a> haben wir jeden Schritt des Einbaus abgedeckt.';
                            break;
                        case "solid-laminate":
                            echo 'M&ouml;chten Sie Ihre eigenen Compact Arbeitsplatten montieren? In unserer Anleitung zur <a href="/compact-arbeitsplatten-installationsanleitung">Montage von Compact Arbeitsplatten</a> erkl&auml;ren wir Ihnen Schritt f&uuml;r Schritt wie Sie Ihre Arbeitsplatte aus Kompaktlaminat einbauen k&ouml;nnen.';
                    }
                    echo '</p>';
                    ?>
                </div>
            </div>

            <div class="collapse shadow my-3">
                <div class="collapse__head d-flex align-items-center background-grey py-3">
                    <div class="col-bs font-weight-5">Retoure</div>
                    <div class="arrow mx-3"></div>
                </div>
                <div class="collapse__wrap">
                    <p class="p-3 m-0">Wenn der Artikel nicht Ihren Erwartungen entspricht, teilen Sie uns dies bitte innerhalb von 2 Tagen nach Lieferung mit. Sollten Sie nach Erhalt des Artikels Ihre Meinung &auml;ndern, teilen Sie uns dies bitte innerhalb von 14 Tagen nach Lieferung mit. Weitere Informationen finden Sie in unserer <a href="/allgemeine-geschaftsbedingungen.html#widerrufsrecht">Widerrufsbelehrung.</a></p>
                </div>
            </div>



        </div>
        <div class="col-6 d-none d-xl-block">
            <div class="d-flex align-items-center">
                <svg class="col-1" xmlns="http://www.w3.org/2000/svg" width="12" height="14" viewBox="0 0 12 14">
                    <g id="Group_83" data-name="Group 83" transform="translate(-910.084 -1727)">
                        <g id="Rectangle" stroke-width="1.5px" stroke="#4d4a49" fill="none" transform="translate(910.084 1727)">
                            <rect stroke="none" width="12" height="14" />
                            <rect fill="none" x="0.75" y="0.75" width="10.5" height="12.5" />
                        </g>
                        <path id="Line_12" data-name="Line 12" stroke="#4d4a49" fill="none" stroke-linecap="square" d="M.5.5H7.55" transform="translate(912.084 1732)" />
                        <path id="Line_12_Copy" data-name="Line 12 Copy" stroke="#4d4a49" fill="none" stroke-linecap="square" d="M.5.5H7.55" transform="translate(912.084 1734)" />
                    </g>
                </svg>
                <div class="font-weight-5">Produktinformationen</div>
            </div>
            <div class="offset-1">

                <?php
                switch ($data->category) {
                    case 'wood':
                        include 'media/pdp/includes/product-info--wood.php';
                        break;
                    case 'laminate':
                        include 'media/pdp/includes/product-info--laminate.php';
                        break;
                    case 'solid-laminate':
                        include 'media/pdp/includes/product-info--solid-laminate.php';
                }
                ?>

            </div>
        </div>
    </div>
    <!--Product info END-->

    <!--Why we love-->
    <?php

    if (!empty($data->pullQuote) || $data->pullQuote !== false) {

        include 'media/pdp/includes/why-we-love.php';

    }

    ?>
    <!--Why we love END-->

    <!--Galler Slider-->

    <?php

    if ($data->images->gallery !== false) {

        echo '<div>';
        echo '    <div class="font-26 text-center m-4">#worktopexpress</div>';
        echo '    <div class="text-center mb-3">Sehen Sie, wie unsere Kunden ihre Arbeitsplatten aus Eiche gestylt haben</div>';
        echo '    <div class="slider m-auto py-4" id="gallery-slider">';
        echo '        <div class="slider__ui slider__ui--left background-grey4"></div>';
        echo '        <div class="slider__ui slider__ui--right background-grey4"></div>';
        echo '        <div class="slider__con py-2">';
        echo '            <div class="slider__wrap d-flex align-items-center">';

        $gallery = $data->images->gallery;

        foreach ($gallery as $item) {

            $img = imageSuffix($item[0], array('--large', '@2x'));

            echo '<div class="slider__item col-12-bs col-md-3 col-xl-2 p-0">';
            echo '<div class="mx-1">';
            echo '<a href="' . $img[0] . '" class="fancybox" data-fancybox="group">';
            echo '<img width="100%" src="' . $item[0] . '" data-at2x="' . $img[1] . '" alt="' . $item[1] . '">';
            echo '</a>';
            echo '</div>';
            echo '</div>';
        }

        echo '            </div>';
        echo '        </div>';
        echo '    </div>';
        echo '</div>';
    }

    ?>

    <!--Gallery slider END-->

    <!--Samples and bespoke-->

    <?php
    switch ($data->category) {
        case 'wood':
            $image = '/media/gallery/massivholz-arbeitsplatten-muster.jpg';
            $content = 'Mit unserem Musterservice erhalten Sie einen 20 x 15 cm gro&szlig;en Massivholzblock, mit dem Sie sich ein Bild von der Farbe machen und die Textur sowie die hervorragende Qualit&auml;t unserer Arbeitsplatten f&uuml;hlen k&ouml;nnen.';
            $link = empty($data->samples) ? 'kuechenarbeitsplatte-muster/massivholz-arbeitsplatten-muster' : $data->samples;
            $bespokeLink = 'fabrikationsservice-holzarbeitsplatten-nach-mass';
            break;
        case 'laminate':
            $image = '/media/gallery/arbeitsplatten-aus-laminat.jpg';
            $content = 'Bestellen Sie ein Laminat-Musterpaket, um eine genaue Vorstellung von Farbe, Textur und Qualität unserer Laminatoberflächen zu erhalten.';
            $link = empty($data->samples) ? 'resopal-arbeitsplatten/resopal-arbeitsplatten-musterpaket' : $data->samples;
            $bespokeLink = 'laminat-arbeitsplatten-auf-mass';
            break;
        case 'solid-laminate':
            $image = '/media/gallery/compact-arbeitsplatten-muster.jpg';
            $content = 'Nutzen Sie unseren Musterservice, um sich ein Bild von der Farbe und Textur unserer hochwertigen Compact Arbeitsplatten zu machen.';
            $link = empty($data->samples) ? 'kuechenarbeitsplatte-muster/compact-arbeitsplatten-muster' : $data->samples;
            $bespokeLink = 'compact-arbeitsplatten-massanfertigung';
    }
    ?>
    <div class="row-bs py-5">
        <div class="order-2 order-md-1 col-md-7 col-xl">
            <div class="font-26 font-md-32 font-xl-46">Sie k&ouml;nnen sich nicht entscheiden?</div>
            <div class="font-18 font-md-22 font-weight-5 my-4">Sehen und f&uuml;hlen Sie die Qualit&auml;t unserer Arbeitsplatten</div>
            <p class="my-4"><?php echo $content; ?></p>
            <a class="button button--wire colour-green text-center my-1 d-block d-md-inline-block" href="<?php echo $link; ?>">Bestellen Sie ein Muster</a>
            <a class="button button--wire colour-green text-center my-1 d-block d-md-inline-block" href="/kuechenarbeitsplatten-showroom">Besuchen Sie unseren Showroom</a>
        </div>
        <div class="order-1 order-md-2 col-md">
            <a href="<?php echo $link; ?>"><img class="d-block m-auto" src="<?php echo $image; ?>" data-at2x="<?php echo imageSuffix($image, '@2x'); ?>" alt="K&uuml;chenarbeitsplatte Muster"></a>
        </div>
    </div>
    <div class="spacer-line pb-4"></div>
    <div class="row-bs py-5">
        <div class="col-md">
            <a href="<?php echo $bespokeLink; ?>"><img class="col-bs d-block m-auto" src="/media/gallery/arbeitsplatten-aus-compact.jpg" data-at2x="/media/gallery/arbeitsplatten-aus-compact@2x.jpg" alt="K&uuml;chenarbeitsplatten nach Ma&szlig;" /></a>
        </div>
        <div class="col-md-7 col-xl">
            <div class="font-26 font-md-32 font-xl-46">Arbeitsplatten nach Ma&szlig; f&uuml;r den direkten Einbau</div>
            <p class="my-4">Mit unserem Online-Service f&uuml;r Ma&szlig;anfertigungen k&ouml;nnen wir Ihre Arbeitsplatten einbaufertig liefern. Die vollständige Liste der verf&uuml;gbaren Optionen finden Sie auf unserer <a href="<?php echo $bespokeLink; ?>">Seite f&uuml;r Ma&szlig;anfertigungen</a> und au&szlig;erdem sparen Sie 25% auf alle Dienstleistungen, wenn Sie &uuml;ber unseren Arbeitsplatten-Konfigurator bestellen.</p>
            <a class="button button--wire colour-green text-center my-1 d-block d-md-inline-block" href="<?php echo $bespokeLink; ?>">Ma&szlig;anfertigung bestellen</a>
        </div>
    </div>
    <!--Samples and bespoke-->

    <!--Upsell-->
    <div id="upsell"></div>
    <!--Upsell END-->

    <!--Cross sell-->
    <div class="cros-sell cross-sell__<?php echo $data->category; ?>"></div>
    <!--Cross sell END-->

    <!--Related catagories-->
    <div class="text-center uppercase font-26 py-4">&Auml;hnliche Kategorien</div>
    <?php
    include 'media/pdp/includes/related-categories.html';
    ?>
    <!--Related catagories END-->


    <script src="/media/pdp/script/browser-polyfill.min.js"></script>
    <script src="/media/pdp/script/slider.js"></script>

    <script>
        <?php
        if ($data->images->gallery !== false) {


            echo 'var gallery = new Slider("#gallery-slider", {';
            echo '    index: {';
            echo '        active: false';
            echo '    },';
            echo '    fancybox: true,';
            echo '    columns: 5';
            echo '},';
            echo '{';
            echo '    columns: false';
            echo '},{';
            echo '    columns: 4';
            echo '});';
            echo 'gallery.init();';
        }

        if ($data->galleryLink !== false) {

            echo 'window.onload = function() {';
            echo '    $(".prodimg [data-fancybox]").fancybox({';
            echo '        afterLoad: function afterLoad(instance, current) {';
            echo '            var overlay, length;';
            echo '            overlay = $(".prodimg__gallery__con");';
            echo '            length = instance.group.length - 1;';
            echo '            if (current.index === length) {';
            echo '                if (!current.$content[0].querySelector(".prodimg__gallery__con")) {';
            echo '                    overlay.clone().appendTo(current.$content[0]);';
            echo '                }';
            echo '            }';
            echo '        }';
            echo '    });';
            echo '}';
        }
        ?>
    </script>