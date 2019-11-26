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

    .button--no-border-radius {
        border-radius: 0;
    }

    .button--mint {
        background-color: #c7ede0;
    }

    .button--mint:hover {
        background-color: rgba(199,237,224,0.5);
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
            
            <!-- prodimg preview images -->
            
            <div class="prodimg__preview d-flex justify-content-center justify-content-xl-start py-2 py-md-0">
                
                <?php

                if (count($images) > 1) {

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

            $individualPage = true;
            //$individualPage = !empty($proddisp['enhanced_ecommerce_variant']);
            

            ?>
            </div>
            <div class="d-flex flex-wrap d-md-block align-items-end justify-content-center col-md-6 col-xl-<?php echo $individualPage ? 5 : 4 ; ?> p-0 order-1 order-md-2 order-xl-2 py-3 py-md-0">
            <?php 
                if ($individualPage) {
                    echo '<div class="p-0 pt-xl-3 col-9 col-md-auto">' . $fullSize . '</div>';
                    echo '<div class="col-3-bs col-md-auto p-0 font-22 font-md-38 font-weight-6">' . $individualPrice . '&euro;</div>';
                } else {
                    echo '<div class="col-9 col-md-auto p-0 pr-1 pt-xl-3">ab</div>';
                    echo '<div class="col-3-bs col-md-auto p-0 font-22 font-md-38 font-weight-6">' . $data->fromPrice . '&euro;</div>';
                    echo '<div class="font-14 p-0">' . $data->pricePerMetre . '</div>';
                }
                ?>     
            </div>
            <div class="col-bs col-md-6 col-xl-12 button button--mint button--no-border-radius background-mint colour-teal text-center py-3 my-2 my-md-3 font-14 font-weight-6 order-3 order-xl-4 align-self-center">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 49.286 33.108" class="col-3-bs col-md-2"><g transform="translate(-228 -191)"><g transform="translate(92 -184)"><g transform="translate(136 375)" fill="none"><path d="M6,0H36a2,2,0,0,1,2,2L34,25a2,2,0,0,1-2,2H2a2,2,0,0,1-2-2L4,2A2,2,0,0,1,6,0Z" stroke="none"></path><path d="M 6.871122360229492 3 L 3.218948364257813 24 L 31.12887763977051 24 L 34.78105163574219 3 L 6.871122360229492 3 M 6 0 L 36 0 C 37.10456848144531 0 38 0.8954296112060547 38 2 L 34 25 C 34 26.10457038879395 33.10456848144531 27 32 27 L 2 27 C 0.8954315185546875 27 0 26.10457038879395 0 25 L 4 2 C 4 0.8954296112060547 4.895431518554688 0 6 0 Z" stroke="none" fill="#005d6e"></path></g><g transform="translate(167 381)" fill="none"><path d="M4.857-.286h8.286c1.1,0,5.143,4.629,5.143,6.286L16,18c0,1.657-.9,3-2,3H2c-1.1,0-2-1.343-2-3L2.857,2.714C2.857,1.057,3.753-.286,4.857-.286Z" stroke="none"></path><path d="M 5.857142448425293 2.714296340942383 L 5.857142448425293 2.992267608642578 L 5.806073188781738 3.265497207641602 L 3.051960945129395 17.99999618530273 L 13.00000286102295 17.99999618530273 L 13.00000286102295 17.71682739257813 L 13.05298233032227 17.43866729736328 L 15.20900535583496 6.119476318359375 C 15.02702808380127 5.771788597106934 14.63640975952148 5.139457702636719 13.93313217163086 4.287496566772461 C 13.30266761779785 3.523746490478516 12.76261520385742 2.998344421386719 12.43017768859863 2.714296340942383 L 5.857142448425293 2.714296340942383 M 4.857142448425293 -0.2857036590576172 L 13.14285278320313 -0.2857036590576172 C 14.24742317199707 -0.2857036590576172 18.28570365905762 4.343147277832031 18.28570365905762 5.999997138977051 L 16.00000381469727 17.99999618530273 C 16.00000381469727 19.65685653686523 15.10457229614258 20.99999809265137 14.00000286102295 20.99999809265137 L 2.000001907348633 20.99999809265137 C 0.8954334259033203 20.99999809265137 1.9073486328125e-06 19.65685653686523 1.9073486328125e-06 17.99999618530273 L 2.857142448425293 2.714296340942383 C 2.857142448425293 1.057437896728516 3.752573013305664 -0.2857036590576172 4.857142448425293 -0.2857036590576172 Z" stroke="none" fill="#005d6e"></path></g><g transform="translate(143.976 396.716)" fill="#fff" stroke="#005d6e" stroke-width="3"><circle cx="5.696" cy="5.696" r="5.696" stroke="none"></circle><circle cx="5.696" cy="5.696" r="4.196" fill="#c7ede0"></circle></g><g transform="translate(167.876 396.716)" fill="#fff" stroke="#005d6e" stroke-width="3"><circle cx="5.696" cy="5.696" r="5.696" stroke="none"></circle><circle cx="5.696" cy="5.696" r="4.196" fill="#c7ede0"></circle></g></g></g></svg>KOSTENLOSE LIEFERUNG</div>
            <div class="d-flex col-md-6 col-xl p-0 align-self-center order-1 order-xl-2">
                <div class="m-auto col-bs text-center text-md-right">
                    <!--<div class="button button--green col-bs text-center py-3 font-18" data-scroll="#sizes-and-prices">Alle Ma&szlig;e &amp; Preise</div>-->
                    <form action="https://www.worktop-express.co.uk/index.php" method="post" id="gbu0--prodaddtocart--<?php print $id; ?>">
                        <p class="hidden">
                            <input type="hidden" name="prodall[]" id="gbu0--prodaddtocart--<?php print $id; ?>--prodall" value="<?php print $id; ?>">
                        </p>
                        <p class="hidden">
                            <input type="hidden" name="gbu0--prodaddtocart--<?php print $id; ?>--referref" id="gbu0--prodaddtocart--<?php print $id; ?>--referref" value="<?php print $id; ?>">
                        </p>
                        <p class="hidden">
                            <input type="hidden" name="gbu0--prodaddtocart--<?php print $id; ?>--referns" id="gbu0--prodaddtocart--<?php print $id; ?>--referns" value="prodshow">
                        </p>
                        <p class="hidden">
                            <input type="hidden" name="app" id="gbu0--prodaddtocart--<?php print $id; ?>--app" value="gbu0">
                        </p>
                        <p class="hidden">
                            <input type="hidden" name="ns" id="gbu0--prodaddtocart--<?php print $id; ?>--ns" value="addcart">
                        </p>
                        <div class="row-bs pt-0 pt-xl-3 mt-md-0">
                            <div class="col-bs px-0 pt-0 pt-xl-3">
                                <div id="gbu0--prodaddtocart--<?php print $id; ?>--itemquantity--d" class="khxc_formtbldiv">
                                    <div id="gbu0--prodaddtocart--<?php print $id; ?>--itemquantity" class="khxc_formtblone">
                                        <fieldset>
                                            <input class="prod-input font-16 font-md-14 mr-3" type="number" name="gbu0--prodaddtocart--<?php print $id; ?>--quantity" id="gbu0--prodaddtocart--<?php print $id; ?>--quantity" value="1" size="5" maxlength="5"><input class="button button--blugreen text-center py-2 font-14" type="submit" name="SUBMIT" id="gbu0--prodaddtocart--<?php print $id; ?>--SUBMIT" value="In den Warenkorb" onclick="return DisableSubmit('gbu0--prodaddtocart--<?php print $id; ?>');" onkeypress="return DisableSubmit('gbu0--prodaddtocart--<?php print $id; ?>');">
                                        </fieldset> 
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <div class="d-flex font-12 py-3 align-self-end col-md-12 order-3 order-xl-5">
                <div class="col-6 p-0 d-flex align-items-center">
                    <img src="media/icons/bespoke--medium.svg" alt="null" type="image/xml+svg" ?>
                    <div class="col-10 col-xl-12">Bestellen Sie Ihre Arbeitsplatte nach Ma&szlig; online</div>
                </div>
                <div class="col-6 p-0 d-flex align-items-center">
                    <img src="media/icons/delivery--medium.svg" alt="null" type="image/xml+svg" ?>
                    <div class="col-10 col-xl-12">Sichere Lieferung bis in einen Raum Ihrer Wahl</div>
                </div>
            </div>
        </div>
    </div>


<!--Top content END-->

<!--Product info-->
    <div class="row-bs py-2">
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
                    <p class="p-3 m-0">Alle Tischplatten werden mit dem Lieferservice GLS bis zu Ihrer Haust&uuml;r ausgeliefert. Die Lieferung erfolgt versandkostenfrei. F&uuml;r mehr Informationen lesen Sie bitte unsere <a href="/lieferdetails.html">Lieferdetails</a>.</p>
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
                    }
                    echo '</p>';
                    ?>
                </div>
            </div>

            

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
                }
                ?>

            </div>
        </div>
    </div>

<!--Product info END-->



<!--Samples and bespoke-->

<?php

if ($data->category === 'wood' ) {
    if (stripos($data->name, 'eiche') !== false || stripos($data->name, 'buche') !== false) {
        $image = '/media/gallery/massivholz-arbeitsplatten-muster.jpg';
        $content = 'Mit unserem Musterservice erhalten Sie einen 20 × 15 cm gro&szlig;en Massivholzblock, mit dem Sie sich ein Bild von der Farbe machen und die Textur sowie die hervorragende Qualit&auml;t dieser Tischplatten, die aus demselben Holz wie auch unsere Arbeitsplatten hergestellt werden, f&uuml;hlen k&ouml;nnen.';
        $link = empty($data->samples) ? 'kuechenarbeitsplatte-muster/massivholz-arbeitsplatten-muster' : $data->samples;
        $bespokeLink = 'fabrikationsservice-holzarbeitsplatten-nach-mass';
    ?>


    <div class="row-bs py-5">
        <div class="order-2 order-md-1 col-md-7 col-xl">
            <div class="font-26 font-md-32 font-xl-46">Sie k&ouml;nnen sich nicht entscheiden?</div>
            <div class="font-18 font-md-22 font-weight-5 my-4">Sehen und f&uuml;hlen Sie die Qualit&auml;t dieser Tischplatten</div>
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
            <div class="font-26 font-md-32 font-xl-46">Zuschnitt nach Ma&szlig;</div>
            <p class="my-4">Falls Sie eine andere Länge oder Breite als gelistet ben&ouml;tigen, bieten wir alternativ einen <a href="<?php echo $bespokeLink; ?>">Zuschnitt-Service</a> f&uuml;r unsere Arbeitsplatten, welche aus demselben hochwertigen Holz bestehen wie auch diese Tischplatten, an.</p>
            <a class="button button--wire colour-green text-center my-1 d-block d-md-inline-block" href="<?php echo $bespokeLink; ?>">Zuschnitt bestellen</a>
        </div>
    </div>

    <?php 
    //closing statement for the wood category
    }
}
?>


    <!--Related catagories-->
    <div class="text-center uppercase font-26 py-4">&Auml;hnliche Kategorien</div>
    <?php
    include 'media/pdp/includes/related-categories.html';
    ?>
    <!--Related catagories END-->

    </div>

    <script>

    var throttle = function throttle(func, limit) {
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
                    if (Date.now() - lastRan >= limit) {
                        func.apply(context, args);
                        lastRan = Date.now();
                    }
                }, limit - (Date.now() - lastRan));
            }
        };
    };




    var collapseBox = {
        DOM: {
            box: document.querySelectorAll(".collapse"),
            head: document.querySelectorAll(".collapse__head"),
            wrap: document.querySelectorAll(".collapse__wrap"),
            open: document.querySelectorAll('[data-collapse="open"]')
        },
        toggle: function toggle() {
            var wrap, height, open, transition, arrow, _hAuto;

            wrap = this.parentElement.querySelector(".collapse__wrap");
            height = wrap.scrollHeight;
            arrow = this.querySelector(".arrow");
            open = this.getAttribute("data-collapse") === "true";

            _hAuto = function hAuto() {
                wrap.style.height = "auto";
                wrap.removeEventListener("transitionend", _hAuto);
            };

            if (open) {
                transition = wrap.style.stransition;
                wrap.style.stransition = "";
                requestAnimationFrame(function() {
                    wrap.style.height = height + "px";
                    wrap.style.stransition = transition;
                    requestAnimationFrame(function() {
                        wrap.style.height = "0px";
                    });
                });
                arrow.classList.remove("arrow--up");
                this.setAttribute("data-collapse", "false");
            } else {
                wrap.style.height = height + "px";
                arrow.classList.add("arrow--up");
                wrap.addEventListener("transitionend", _hAuto);
                this.setAttribute("data-collapse", "true");
            }
        },
        open: function open() {
            var els = this.DOM.open;

            for (var i = 0; i < els.length; i++) {
                if (els[i].offsetWidth > 0 && els[i].offsetHeight > 0) {
                    this.toggle.call(els[i]);
                    i = els.length;
                }
            }
        },
        events: function events() {
            var els = this.DOM.head;
            var thToggle = throttle(this.toggle, 400);

            for (var i = 0; i < els.length; i++) {
                els[i].addEventListener("click", thToggle);
            }
        },
        init: function init() {
            this.events();
            this.open();
        }
    };
    collapseBox.init();
    </script>